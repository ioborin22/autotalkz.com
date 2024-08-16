<?php
session_start();

include_once $_SERVER['DOCUMENT_ROOT']."/admin/dbconnect.php";
include_once $_SERVER['DOCUMENT_ROOT']."/mods/mainclass.php";

$main = new main();
$main->setLang(isset($_GET['lang']) ? htmlspecialchars($_GET['lang']) : 'eng');
$main->getTags(); // Для SEO тегов

// Определение переводов для страницы "Disclaimer"
$translations = [
    'eng' => [
        'title' => 'Disclaimer',
        'content' => '<h1>Disclaimer</h1>
<p>The information provided on AutoTalkz is for general informational purposes only. While we strive to keep the information accurate and up-to-date, we make no representations or warranties of any kind, express or implied, about the completeness, accuracy, reliability, suitability, or availability with respect to the website or the information, products, services, or related graphics contained on the website for any purpose. Any reliance you place on such information is therefore strictly at your own risk.</p>

<p>In no event will we be liable for any loss or damage including without limitation, indirect or consequential loss or damage, or any loss or damage whatsoever arising from loss of data or profits arising out of, or in connection with, the use of this website.</p>

<p>If you have any questions, concerns, or disputes, please feel free to contact us at <a href="mailto:info@autotalkz.com">info@autotalkz.com</a>.</p>
',
        'meta_description' => 'Read our disclaimer to understand the limitations of the information provided by AutoTalkz.',
        'cannonical' => 'https://autotalkz.com/disclaimer',
    ],
    'de' => [
        'title' => 'Haftungsausschluss',
        'content' => '<h1>Haftungsausschluss</h1>
<p>Die auf AutoTalkz bereitgestellten Informationen dienen ausschließlich allgemeinen Informationszwecken. Obwohl wir uns bemühen, die Informationen korrekt und auf dem neuesten Stand zu halten, geben wir keine Zusicherungen oder Gewährleistungen jeglicher Art, weder ausdrücklich noch stillschweigend, in Bezug auf die Vollständigkeit, Richtigkeit, Zuverlässigkeit, Eignung oder Verfügbarkeit der Website oder der Informationen, Produkte, Dienstleistungen oder zugehörigen Grafiken auf der Website für irgendeinen Zweck. Jegliches Vertrauen, das Sie auf solche Informationen setzen, erfolgt daher ausschließlich auf Ihr eigenes Risiko.</p>

<p>In keinem Fall haften wir für Verluste oder Schäden einschließlich, aber nicht beschränkt auf indirekte oder Folgeschäden, oder für Verluste oder Schäden jeglicher Art, die aus dem Verlust von Daten oder Gewinnen resultieren, die sich aus der Nutzung dieser Website ergeben.</p>

<p>Wenn Sie Fragen, Bedenken oder Streitigkeiten haben, können Sie uns gerne unter <a href="mailto:info@autotalkz.com">info@autotalkz.com</a> kontaktieren.</p>
',
        'meta_description' => 'Lesen Sie unseren Haftungsausschluss, um die Einschränkungen der von AutoTalkz bereitgestellten Informationen zu verstehen.',
        'cannonical' => 'https://autotalkz.com/lang-de/disclaimer',
    ],
    'fr' => [
        'title' => 'Avertissement',
        'content' => '<h1>Avertissement</h1>
<p>Les informations fournies sur AutoTalkz sont uniquement à titre d\'information générale. Bien que nous nous efforcions de maintenir les informations à jour et correctes, nous ne faisons aucune représentation ou garantie d\'aucune sorte, expresse ou implicite, quant à l\'exhaustivité, l\'exactitude, la fiabilité, la pertinence ou la disponibilité du site web ou des informations, produits, services ou graphiques associés sur le site pour quelque but que ce soit. Toute confiance que vous accordez à de telles informations est donc strictement à vos propres risques.</p>

<p>En aucun cas, nous ne serons responsables de toute perte ou dommage, y compris, mais sans s\'y limiter, les pertes ou dommages indirects ou consécutifs, ou toute perte ou dommage quelconque résultant de la perte de données ou de profits découlant de l\'utilisation de ce site web.</p>

<p>Si vous avez des questions, des préoccupations ou des différends, n\'hésitez pas à nous contacter à <a href="mailto:info@autotalkz.com">info@autotalkz.com</a>.</p>
',
        'meta_description' => 'Lisez notre avertissement pour comprendre les limitations des informations fournies par AutoTalkz.',
        'cannonical' => 'https://autotalkz.com/lang-fr/disclaimer',
    ],
    'es' => [
        'title' => 'Aviso legal',
        'content' => '<h1>Aviso legal</h1>
<p>La información proporcionada en AutoTalkz es solo para fines informativos generales. Aunque nos esforzamos por mantener la información actualizada y correcta, no hacemos representaciones ni garantías de ningún tipo, expresas o implícitas, sobre la integridad, precisión, confiabilidad, idoneidad o disponibilidad del sitio o de la información, productos, servicios o gráficos relacionados contenidos en el sitio para cualquier propósito. Cualquier confianza que usted deposite en dicha información es, por lo tanto, estrictamente bajo su propio riesgo.</p>

<p>En ninguna circunstancia seremos responsables de cualquier pérdida o daño, incluyendo, pero no limitado a, pérdidas o daños indirectos o consecuentes, o cualquier pérdida o daño que surja de la pérdida de datos o ganancias derivados del uso de este sitio web.</p>

<p>Si tiene preguntas, inquietudes o disputas, no dude en contactarnos a través del correo electrónico <a href="mailto:info@autotalkz.com">info@autotalkz.com</a>.</p>
',
        'meta_description' => 'Lea nuestro aviso legal para comprender las limitaciones de la información proporcionada por AutoTalkz.',
        'cannonical' => 'https://autotalkz.com/lang-es/disclaimer',
    ],
    'it' => [
        'title' => 'Clausola di esclusione della responsabilità',
        'content' => '<h1>Clausola di esclusione della responsabilità</h1>
<p>Le informazioni fornite su AutoTalkz sono solo a scopo informativo generale. Sebbene ci sforziamo di mantenere le informazioni aggiornate e corrette, non facciamo alcuna dichiarazione o garanzia di alcun tipo, espressa o implicita, riguardo alla completezza, accuratezza, affidabilità, idoneità o disponibilità del sito web o delle informazioni, dei prodotti, dei servizi o dei grafici correlati presenti sul sito per qualsiasi scopo. Qualsiasi affidamento che fai su tali informazioni è quindi strettamente a tuo rischio.</p>

<p>In nessun caso saremo responsabili per qualsiasi perdita o danno, inclusi, ma non limitati a, perdite o danni indiretti o consequenziali, o qualsiasi perdita o danno derivante dalla perdita di dati o profitti derivanti dall\'uso di questo sito web.</p>

<p>Se hai domande, preoccupazioni o controversie, non esitare a contattarci all\'indirizzo <a href="mailto:info@autotalkz.com">info@autotalkz.com</a>.</p>
',
        'meta_description' => 'Leggi la nostra clausola di esclusione della responsabilità per comprendere i limiti delle informazioni fornite da AutoTalkz.',
        'cannonical' => 'https://autotalkz.com/lang-it/disclaimer',
    ],
    'pt' => [
        'title' => 'Isenção de responsabilidade',
        'content' => '<h1>Isenção de responsabilidade</h1>
<p>As informações fornecidas no AutoTalkz são apenas para fins informativos gerais. Embora nos esforcemos para manter as informações atualizadas e corretas, não fazemos representações ou garantias de qualquer tipo, expressas ou implícitas, sobre a integridade, precisão, confiabilidade, adequação ou disponibilidade do site ou das informações, produtos, serviços ou gráficos relacionados contidos no site para qualquer propósito. Qualquer confiança que você depositar em tais informações é, portanto, estritamente por sua conta e risco.</p>

<p>Em nenhuma circunstância seremos responsáveis por qualquer perda ou dano, incluindo, mas não limitado a, perdas ou danos indiretos ou consequentes, ou qualquer perda ou dano decorrente da perda de dados ou lucros decorrentes do uso deste site.</p>

<p>Se você tiver dúvidas, preocupações ou disputas, não hesite em nos contatar através do e-mail <a href="mailto:info@autotalkz.com">info@autotalkz.com</a>.</p>
',
        'meta_description' => 'Leia nossa isenção de responsabilidade para entender as limitações das informações fornecidas pelo AutoTalkz.',
        'cannonical' => 'https://autotalkz.com/lang-pt/disclaimer',
    ],
];

$lang = $main->lang;
$page_title = $translations[$lang]['title'];
$page_h1 = $translations[$lang]['title'];
$page_text = $translations[$lang]['content'];
$meta_description = $translations[$lang]['meta_description'];
$cannonical = $translations[$lang]['cannonical'];

// Включение файлов header.php и стилей с метаданными
include $_SERVER['DOCUMENT_ROOT']."/system/1.php";
?>
<title><?php echo $page_title; ?></title>
<meta name="description" content="<?php echo $meta_description; ?>">
<link rel="canonical" href="<?php echo $cannonical; ?>">
<?php
include $_SERVER['DOCUMENT_ROOT']."/system/2.php";

// Определение языков и категорий
$main->getLang(); // Вызов метода для инициализации языков
$lang_page = $main->viv_lang;
$cats = $main->getCats();
?>

<section>
    <div class="content">
        <div class="left">
            <article>
                <?php echo $page_text; ?>
            </article>
        </div>
        <div class="cl"></div>
    </div>
</section>

<?php 
// Включение footer.php
include $_SERVER['DOCUMENT_ROOT']."/system/3.php";
?>
