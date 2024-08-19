<?php

require_once '/var/www/html/autotalkz.com/mods/mainclass.php';

class CacheArticles {
    private $chunkSize;
    private $database;
    private $redis;

    public function __construct($chunkSize = 100) {
        // Предполагается, что $database определен в func.php или другом подключаемом файле
        global $database;

        if (!$database) {
            // Инициализация соединения с базой данных, если оно не установлено
            $this->database = new mysqli('localhost', 'root', 'Oi09XC34Ozc5', 'autotalkz');

            // Проверьте соединение
            if ($this->database->connect_error) {
                die("Ошибка подключения к базе данных: " . $this->database->connect_error);
            }
        } else {
            $this->database = $database;
        }

        $this->chunkSize = $chunkSize;
        $this->redis = new Redis();
        $this->redis->connect('127.0.0.1', 6379);
    }

    public function cacheAllArticles($startFrom = 0) {
        $zap = $this->database->query("SELECT main.url as m_url, lang.name as l_name 
                                      FROM main 
                                      LEFT JOIN texts ON main.id = texts.idstat 
                                      LEFT JOIN lang ON texts.lang = lang.id 
                                      LIMIT $startFrom, $this->chunkSize");

        if (!$zap) {
            die("Ошибка выполнения запроса: " . $this->database->error);
        }

        $processedCount = 0;

        while ($res = $zap->fetch_assoc()) {
            $statya = $res['m_url'];
            $lang = $res['l_name'];
            $redis_key = 'statya_' . $statya . '_' . $lang;

            $mainObj = new main();
            $mainObj->statya = $statya;
            $mainObj->lang = $lang;
            $mainObj->getStatya();

            $dataToCache = [
                'text' => $mainObj->text,
                'cat_title' => $mainObj->cat_title,
                'statya_title' => $mainObj->statya_title,
                'statya_other_id' => $mainObj->statya_other_id,
                'page_img' => $mainObj->page_img,
                'viv_lang' => $mainObj->viv_lang,
                'alternate' => $mainObj->alternate,
            ];

            $this->redis->set($redis_key, serialize($dataToCache));
            $processedCount++;
        }

        if ($processedCount == $this->chunkSize) {
            $nextStart = $startFrom + $this->chunkSize;
            echo "Processed $processedCount articles. Continuing from $nextStart...\n";
            $this->cacheAllArticles($nextStart);
        } else {
            echo "All articles have been cached in Redis.\n";
        }
    }
}

$cacheArticles = new CacheArticles(100);
$cacheArticles->cacheAllArticles();