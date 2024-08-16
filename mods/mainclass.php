<?php
include_once $_SERVER['DOCUMENT_ROOT']."/admin/func.php";

class main{

    public $lang = 'eng';
    public $viv_lang = null;
    public $cat = null;
    public $cat_title = null;
    public $urlnav = null;
    public $page = 1;
    public $num = 18;
    public $total = null;
    public $statya = null;
    public $statya_title = null;
    public $statya_other_id = null;
    public $text = null;

    public $page_title = null;
    public $page_h1 = null;
    public $page_desc = null;
    public $page_kroshki = null;
    public $page_img = null;
    public $cannonical = null;
    public $alternate = null;

    public $bukva = null;
    public $flags = null;

    public function getTags(){
        $lang = $this->lang;
        $cat = $this->cat;
        $cat_title = $this->cat_title;
        $page = $this->page;
        $statya = $this->statya;
        $statya_title = $this->statya_title;
        $bukva = $this->bukva;
        $urlnav = $this->urlnav;

        $this->cannonical = 'https://autotalkz.com'.$urlnav;

        if($lang and $lang !=='eng'){$lang_url = 'lang-'.$lang.'/';}

        $title['eng'] = 'Overview of world cars, history of origin, description';
        $h1['eng'] = 'World Car Review';
        $desc['eng'] = 'List of all cars in the world, the history of each car brand, specifications, interior, exterior, photos of models';

        $title['de'] = 'Überblick über Autos der Welt, Geschichte der Herkunft, Beschreibung';
        $h1['de'] = 'World Car Review';
        $desc['de'] = 'Liste aller Autos in der Welt, die Geschichte der einzelnen Automarke, Spezifikationen, Interieur, Exterieur, Fotos von Modellen';

        $title['fr'] = 'Vue d\'ensemble des voitures du monde, histoire d\'origine, description';
        $h1['fr'] = 'Revue mondiale de voiture';
        $desc['fr'] = 'Liste de toutes les voitures dans le monde, histoire de chaque marque de voiture, spécifications, intérieur, extérieur, photos des modèles';

        $title['es'] = 'Descripción general de los coches del mundo, historia de origen, descripción';
        $h1['es'] = 'Revisión mundial de coches';
        $desc['es'] = 'Lista de todos los autos en el mundo, la historia de cada marca de autos, especificaciones, interiores, exteriores, fotos de modelos.';

        $title['it'] = 'Panoramica delle auto del mondo, storia di origine, descrizione';
        $h1['it'] = 'World Car Review';
        $desc['it'] = 'Elenco di tutte le auto del mondo, la storia di ogni marchio di auto, le specifiche, l\'interno, l\'esterno, le foto dei modelli';

        $title['pt'] = 'Revisão de carros, histórico de criação, especificações técnicas';
        $h1['pt'] = 'Visão geral dos carros do mundo';
        $desc['pt'] = 'Lista de todos os carros do mundo, a história de cada marca de carro, especificações técnicas, interiores, exteriores, fotos dos modelos';

        $kroshki = '';
        if(isset($lang_url)){
            $kroshki = '  <span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
					    <a itemscope itemtype="http://schema.org/Thing" itemprop="item" href="https://autotalkz.com/'.$lang_url.'"><span itemprop="name">AutoTalkz</span></a>
					    <meta itemprop="position" content="1">
					  </span> &rarr; ';
        }

        if($bukva){
            $title['eng'] = 'Cars by letter &laquo;'.strtoupper($bukva).'&raquo;';
            $h1['eng'] = 'Cars by letter &laquo;'.strtoupper($bukva).'&raquo;';
            $desc['eng'] = 'The list of cars whose name begins with the letter &laquo;'.strtoupper($bukva).'&raquo;';

            $title['de'] = 'Autos auf dem Buchstaben &laquo;'.strtoupper($bukva).'&raquo;';
            $h1['de'] = 'Autos auf dem Buchstaben &laquo;'.strtoupper($bukva).'&raquo;';
            $desc['de'] = 'Liste der Autos, deren Name mit dem Buchstaben &laquo;'.strtoupper($bukva).'&raquo; beginnt';

            $title['fr'] = 'Voitures sur la lettre &laquo;'.strtoupper($bukva).'&raquo;';
            $h1['fr'] = 'Voitures sur la lettre &laquo;'.strtoupper($bukva).'&raquo;';
            $desc['fr'] = 'Liste des voitures dont le nom commence par la lettre &laquo;'.strtoupper($bukva).'&raquo;';

            $title['es'] = 'Coches en la letra &laquo;'.strtoupper($bukva).'&raquo;';
            $h1['es'] = 'Coches en la letra &laquo;'.strtoupper($bukva).'&raquo;';
            $desc['es'] = 'Lista de autos cuyo nombre comienza con la letra &laquo;'.strtoupper($bukva).'&raquo;';

            $title['it'] = 'Auto sulla lettera &laquo;'.strtoupper($bukva).'&raquo;';
            $h1['it'] = 'Cars by letter &laquo;'.strtoupper($bukva).'&raquo;';
            $desc['it'] = 'The list of cars whose name begins with the letter &laquo;'.strtoupper($bukva).'&raquo;';

            $title['pt'] = 'Carta de carros &laquo;'.strtoupper($bukva).'&raquo;';
            $h1['pt'] = 'Carta de carros &laquo;'.strtoupper($bukva).'&raquo;';
            $desc['pt'] = 'Lista de carros cujo nome começa com a letra &laquo;'.strtoupper($bukva).'&raquo;';

            $kroshki .= '<span>&laquo;'.strtoupper($bukva).'&raquo;</span>';
        }

        if($cat){

            if(!$cat_title){
                header('HTTP/1.1 404 Not Found');
                header('Location: /404/');
                exit;
            }

            $title['eng'] = 'Auto category list &laquo;'.$cat_title.'&raquo;';
            $h1['eng'] = 'Cars category &laquo'.$cat_title.'&raquo;';
            $desc['eng'] = 'List of cars that belong to the category &laquo;'.$cat_title.'&raquo;';

            $title['de'] = 'Automatische Kategorieliste &laquo;'.$cat_title.'&raquo;';
            $h1['de'] = 'Kategorie Autos &laquo'.$cat_title.'&raquo;';
            $desc['de'] = 'Liste der Autos, die kategorisiert sind &laquo;'.$cat_title.'&raquo;';

            $title['fr'] = 'liste des catégories de voitures &laquo;'.$cat_title.'&raquo;';
            $h1['fr'] = 'Voitures de catégorie &laquo'.$cat_title.'&raquo;';
            $desc['fr'] = 'Liste des voitures classées &laquo;'.$cat_title.'&raquo;';

            $title['es'] = 'lista de categorías de coches &laquo;'.$cat_title.'&raquo;';
            $h1['es'] = 'Categoría de coches &laquo'.$cat_title.'&raquo;';
            $desc['es'] = 'Lista de autos que están categorizados &laquo;'.$cat_title.'&raquo;';

            $title['it'] = 'Elenco di categorie auto &laquo;'.$cat_title.'&raquo;';
            $h1['it'] = 'Auto di categoria &laquo'.$cat_title.'&raquo;';
            $desc['it'] = 'Elenco delle auto che sono categorizzate &laquo;'.$cat_title.'&raquo;';

            $title['pt'] = 'lista de categorias de carros &laquo;'.$cat_title.'&raquo;';
            $h1['pt'] = 'Categoria Carros &laquo'.$cat_title.'&raquo;';
            $desc['pt'] = 'Lista de carros que pertencem à categoria &laquo;'.$cat_title.'&raquo;';

            if(isset($lang_url)){
                if($statya){
                    $kroshki .= '<span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
				    <a itemscope itemtype="http://schema.org/Thing" itemprop="item" href="https://autotalkz.com/'.$lang_url.'cat-'.$cat.'/"><span itemprop="name">'.$cat_title.'</span></a>
				    <meta itemprop="position" content="2">
				  </span> &rarr; ';
                }else{
                    $kroshki .= '<span>'.$cat_title.'</span>';
                }
            }

        }

        if($statya){

            $title['eng'] = $statya_title.' - car review, history of creation, specifications';
            $h1['eng'] = $statya_title.' - car review';
            $desc['eng'] = 'Car description '.$statya_title.', history of model creation, specifications, interior, exterior, photos, how the car looks '.$statya_title;

            $title['de'] = $statya_title.' - Überblick über das Auto, die Geschichte der Schöpfung, Spezifikationen';
            $h1['de'] = $statya_title.' - Car Review';
            $desc['de'] = 'Fahrzeugbeschreibung '.$statya_title.' Modellhistorie, Spezifikationen, Interieur, Exterieur, Fotos, wie das Auto aussieht '.$statya_title;

            $title['fr'] = $statya_title.' - vue d\'ensemble de la voiture, l\'histoire de la création, les spécifications';
            $h1['fr'] = $statya_title.' - examen de la voiture';
            $desc['fr'] = 'Description de la voiture '.$statya_title.', l\'historique de la création du modèle, les spécifications, l\'intérieur, les photos, qui ressemble à la voiture '.$statya_title;

            $title['es'] = $statya_title.' - visión general del coche, la historia de la creación, especificaciones';
            $h1['es'] = $statya_title.' - revisión de coche';
            $desc['es'] = 'Descripción del auto '.$statya_title.' historia del modelo, especificaciones, interior, exterior, fotos, cómo se ve el auto '.$statya_title;

            $title['it'] = $statya_title.' - Panoramica dell\'auto, storia della creazione, specifiche';
            $h1['it'] = $statya_title.' - revisione auto';
            $desc['it'] = 'Descrizione dell\'auto '.$statya_title.' storia del modello, specifiche, interni, esterni, foto, come appare l\'auto '.$statya_title;

            $title['pt'] = $statya_title.' - Revisão de carros, histórico de criação, especificações técnicas';
            $h1['pt'] = $statya_title.' - Visão geral dos carros do mundo';
            $desc['pt'] = 'Descrição do carro '.$statya_title.' a história do modelo, especificações técnicas, interior, exterior, fotos, aparência do carro '.$statya_title
            ;

            if(isset($kroshki)){
                $kroshki .= '<span>'.$statya_title.'</span>';
            }

        }
        $this->page_title = $title[$lang];
        $this->page_h1 = $h1[$lang];
        $this->page_desc = $desc[$lang];
        $this->page_kroshki = $kroshki;

    }

    public function __construct(){
        $flag['eng'] = '🇬🇧';
        $flag['de'] = '🇩🇪';
        $flag['fr'] = '🇫🇷';
        $flag['es'] = '🇪🇸';
        $flag['it'] = '🇮🇹';
        $flag['pt'] = '🇵🇹';
        $this->flags = $flag;
    }

    public function setLang($data){$this->lang = $data;}
    public function setPage($data){$this->page = $data;}
    public function setCount($data){$this->count = $data;}
    public function setBukva($data){$this->bukva = $data;}
    public function setCat($data){$this->cat = $data;}
    public function setStatya($data){$this->statya = $data;}
    public function setNum($data){$this->num = $data;}

    public function getUrlnav(){
        $lang = $this->lang;
        $cat = $this->cat;
        $page = $this->page;
        $bukva = $this->bukva;
        $statya = $this->statya;

        $nav = [];
        if($lang and $lang !=='eng'){$nav[] = 'lang-'.$lang;}
        if($cat){$nav[] = 'cat-'.$cat;}
        if($bukva){$nav[] = 'alf-'.$bukva;}
        if($statya){$nav[] = $statya;}
        if($page and $page !==1){$nav[] = 'page-'.$page;}

        if(!empty($nav)){$this->urlnav = '/'.implode('/',$nav).'/';}

    }

    public function getCats(){

        global $database;

        $lang = $this->lang;
        if($lang and $lang !=='eng'){$lang_url = 'lang-'.$lang.'/';}

        $vivcar = '';
        $zap = $database->query("select * from main");
        $arrcat = [];
        while($res = $zap->fetch_assoc()){
            $arrcat[$res['caturl']] = $res['cat'];
        }

        foreach ($arrcat as $key => $value) {

            if(isset($lang_url)){
                $vivcar .= '<div>🚗 <a href="/'.$lang_url.'cat-'.$key.'/">'.$value.'</a></div>';
            }
            else{
                $vivcar .= '<div>🚗 <a href="/cat-'.$key.'/">'.$value.'</a></div>';
            }

        }
        return $vivcar;
    }

public function getLang(){
    $flag = $this->flags;

    global $database;
    $this->getUrlnav();

    $lang_this = $this->lang;
    $urlnav = $this->urlnav;

    // Получаем текущий путь страницы
    $currentUrl = $_SERVER['REQUEST_URI'];

    // Убираем существующий языковой префикс из URL, если он есть
    $currentUrl = preg_replace('/\/lang-[a-z]{2}/', '', $currentUrl);

    $langs = '';
    $alternate = '';

    $zap = $database->query("select * from lang");
    $lang = [];
    while($res = $zap->fetch_assoc()){
        if($res['name'] !== 'eng'){
            $lang[$res['name']] = $res['name'];
        }
    }

    foreach ($lang as $la) {
        // Добавляем новый язык в URL
        $translatedUrl = "/lang-$la" . $currentUrl;

        $langs .= '<a class="footer_lang" href="'.$translatedUrl.'">'.$flag[$la].$la.'</a>';
        $alternate .= '<link rel="alternate" hreflang="'.$la.'" href="https://autotalkz.com'.$translatedUrl.'">'."\n";
    }

    // Ссылка для английского языка без языкового префикса
    $this->viv_lang = '<a class="footer_lang" href="'.$currentUrl.'">🇬🇧eng</a>'.$langs;
    $this->alternate = $alternate;
}


    public function getStat(){
        $page = $this->page;
        $num = $this->num;
        if($this->lang !== 'eng'){$lang_url = 'lang-'.$this->lang.'/';}
        $statya_other_id = $this->statya_other_id;

        global $database;

        $where = [];
        if($this->cat){$where[] = "main.caturl = '$this->cat'";}
        if($this->bukva){$where[] = "main.url like '$this->bukva%'";}
        if($this->lang){$where[] = "lang.name = '$this->lang'";}
        if($statya_other_id){$orderby = "main.id > '$statya_other_id',";$where[] = "main.id != $statya_other_id";}
        if(!empty($where)){
            $where = 'where '.implode(" and ",$where);
        } else {
            $where = '';
        }

        $result00 = $database->query("select COUNT(*) from texts left join lang on texts.lang = lang.id left join main on main.id = texts.idstat $where");

        $temp = $result00->fetch_array();
        $posts = $temp[0];
        $total = (($posts - 1) / $num) + 1;
        $total = (int)$total;
        $this->total =  $total;

        $start = $page * $num - $num;

        $zap = $database->query("select main.name as m_name,main.cat as m_cat_name, main.caturl as m_caturl, main.url as m_url, main.img as m_img from texts left join lang on texts.lang = lang.id left join main on main.id = texts.idstat $where order by texts.id desc limit $start, $num")or die($database->error);

        $viv = '';
        while($res = $zap->fetch_assoc()){

            if(!$res){
                header('HTTP/1.1 404 Not Found');
                header('Location: /404/');
                exit;
            }

            if($res['m_name']){
                $img = explode("|",$res['m_img']);
                $img = $img[0];
                if($img){$img = '<img src="/img/all/'.$img.'" alt="'.$res['m_name'].'" />';}

                if(isset($lang_url)){
                    $viv .= '<div class="item">
								<a href="/'.$lang_url.'cat-'.$res['m_caturl'].'/'.$res['m_url'].'/">
									'.$img.'
									<span>'.$res['m_name'].'</span>
								</a>
						</div>';
                    $this->cat_title = $res['m_cat_name'];
                }
                else{
                    $viv .= '<div class="item">
								<a href="/cat-'.$res['m_caturl'].'/'.$res['m_url'].'/">
									'.$img.'
									<span>'.$res['m_name'].'</span>
								</a>
						</div>';

                    $this->cat_title = $res['m_cat_name'];
                }

            }
        }

        return $viv;
    }

    public function getNav(){

        $this->getUrlnav();

        $page = $this->page;
        $total = $this->total;
        $urlnav = $this->urlnav;

        $pm1 = $page - 1;
        $pm2 = $page - 2;
        $pp1 = $page + 1;
        $pp2 = $page + 2;

        // Проверяем нужны ли стрелки назад
        $pervpage = '';
        $pervpage1 = '';
        $nextpage1 = '';
        $nextpage = '';
        $page2left = '';
        $page1left = '';
        $page2right = '';
        $page1right = '';

        if ($page !== 1) {
            $pervpage = '<a rel="nofollow" href="'.$urlnav.'"><div class="nav_cif">Start</div></a>';
            $pervpage1 = '<a rel="nofollow" href="'.$urlnav.'page-'.$pm1.'/"><div class="nav_cif">Prev</div></a>';

            if($page == 2) $pervpage1 = '<a href="'.$urlnav.'/"><div class="nav_cif">Prev</div></a>';
        }

        // Проверяем нужны ли стрелки вперед
        if ($page != $total){
            $nextpage1 = '<a rel="nofollow" href="'.$urlnav.'page-'.$pp1.'/"><div class="nav_cif">Next</div></a>';
            $nextpage = '<a rel="nofollow" href="'.$urlnav.'page-'.$total.'/"><div class="nav_cif">Finish</div></a>';
        }

        if($page - 2 > 0) {
            if($page - 2 == 1){
                $page2left = '<a rel="nofollow" href="'.$urlnav.'"><div class="nav_cif">'.$pm2.'</div></a>';
            }else{
                $page2left = '<a rel="nofollow" href="'.$urlnav.'page-'.$pm2 .'/"><div class="nav_cif">'.$pm2.'</div></a>';
            }
        }

        if($pm1 > 0) $page1left = '<a rel="nofollow" href="'.$urlnav.'page-'.$pm1.'/"><div class="nav_cif">'.$pm1.'</div></a>';
        if($page == 2) $page1left = '<a rel="nofollow" href="'.$urlnav.'"><div class="nav_cif">'.$pm1.'</div></a>';
        if($pp2 <= $total) $page2right = '<a rel="nofollow" href="'.$urlnav.'page-'.$pp2.'/"><div class="nav_cif">'.$pp2.'</div></a>';
        if($pp1 <= $total) $page1right = '<a rel="nofollow" href="'.$urlnav.'page-'.$pp1.'/"><div class="nav_cif">'.$pp1.'</div></a>';

        $nav = '';
        if ($total > 1){
            $nav = '<div class="nav_cat">';
            if (isset($pervpage)){$nav .= $pervpage;}
            if (isset($pervpage1)){$nav .= $pervpage1;}
            if (isset($page2left)){$nav .= $page2left;}
            if (isset($page1left)){$nav .= $page1left;}
            $nav .= '<div class="nav_cif selected">'.$page.'</div>';
            if (isset($page1right)){$nav .= $page1right;}
            if (isset($page2right)){$nav .= $page2right;}
            if (isset($nextpage1)){$nav .= $nextpage1;}
            if (isset($nextpage)){$nav .= $nextpage;}
            $nav .= '<div class="cl"></div></div>';
        }

        return $nav;
    }

    public function getStatya(){

        $flag = $this->flags;

        global $database;

        $statya = $this->statya;
        $lang = $this->lang;
        $total = $this->total;
        $mytext = [];
        $alternate = '';

        $zap = $database->query("select texts.text as t_text, main.name as m_name,main.cat as m_cat_name, main.id as m_id, main.caturl as m_caturl, main.url as m_url, main.img as m_img, lang.name as l_name from main left join texts on main.id = texts.idstat left join lang on texts.lang = lang.id where main.url='$statya'");

        $langs = '';
        while($res1 = $zap->fetch_assoc()){

            if($res1['l_name']){
                if($res1['l_name']==$lang){
                    $res = $res1;
                }
                if($res1['l_name'] == 'eng'){
                    $alternate .= '<link rel="alternate" hreflang="x-default" href="https://autotalkz.com/cat-'.$res1['m_caturl'].'/'.$res1['m_url'].'/">'."\n";
                    $langs .= '<a class="footer_lang" href="/cat-'.$res1['m_caturl'].'/'.$res1['m_url'].'/">'.$flag[$res1['l_name']].$res1['l_name'].'</a>';
                }else{
                    $alternate .= '<link rel="alternate" hreflang="'.$res1['l_name'].'" href="https://autotalkz.com/lang-'.$res1['l_name'].'/cat-'.$res1['m_caturl'].'/'.$res1['m_url'].'/">'."\n";
                    $langs .= '<a class="footer_lang" href="/lang-'.$res1['l_name'].'/cat-'.$res1['m_caturl'].'/'.$res1['m_url'].'/">'.$flag[$res1['l_name']].$res1['l_name'].'</a>';
                }
            }
        }

        $this->alternate = $alternate;
        $this->viv_lang = $langs;

        $src = $_SERVER['DOCUMENT_ROOT'].'/img/main/m'.$res['m_id'].'.jpg';
        $text = explode("\n",$res['t_text']);

        $imsize = getimagesize($src);
        if(file_exists($src)){
            $mytext[] = '<p class="cntr" itemprop="image" itemscope="" itemtype="https://schema.org/ImageObject">
		    <img itemprop="url contentUrl" src="/img/main/m'.$res['m_id'].'.jpg" alt="Photo '.$res['m_name'].'"/>
		    <link itemprop="url" href="https://autotalkz.com/img/main/m'.$res['m_id'].'.jpg">
		    <meta itemprop="width" content="'.$imsize[0].'">
		    <meta itemprop="height" content="'.$imsize[1].'">
		   	</p>';
        }

        if($res['m_img'] !== ''){
            $images = explode("|",$res['m_img']);
        } else {
            $images = [];
        }

        $k=$im=0;
        foreach ($text as $te) {
            if($k % 2 == 0 and $k !== 0){
                if(isset($images[$im])){
                    $myimg = $images[$im];
                    $imsize = getimagesize($_SERVER['DOCUMENT_ROOT'].'/img/all/'.$myimg);
                    $mytext[] = '<p class="cntr" itemprop="image" itemscope="" itemtype="https://schema.org/ImageObject">
				    <img itemprop="url contentUrl" src="/img/all/'.$myimg.'" alt="Photo '.$res['m_name'].'"/>
				    <link itemprop="url" href="https://autotalkz.com/img/main/m'.$res['m_id'].'.jpg">
				    <meta itemprop="width" content="'.$imsize[0].'">
				    <meta itemprop="height" content="'.$imsize[1].'">
				   	</p>';
                    unset($images[$im]);
                    $im++;
                }
                $mytext[] = trim($te);
            }else{
                $mytext[] = trim($te);
            }

            $k++;
        }
        if(!empty($images)){
            $myimgs = [];
            $i=0;
            foreach ($images as $im) {
                $i++;
                $myimgs[] = '<img src="/img/all/'.$im.'" alt="Photo '.$res['m_name'].' #'.$i.'">';
            }
            if(count($myimgs)>0){$mytext[] = '
<h2>Other images auto '.$res['m_name'].'</h2><div class="stat_images">'.implode("\n",$myimgs).'</div>';}
        }
        if($total > 0){
            $mytext[] = '
<h2>Other autos category '.$res['m_cat_name'].'</h2>';
        }

        $this->text = implode("",$mytext);
        $this->cat_title = $res['m_cat_name'];
        $this->statya_title = $res['m_name'];
        $this->statya_other_id = $res['m_id'];
        $this->page_img = 'https://autotalkz.com/img/main/m'.$res['m_id'].'.jpg';

    }

}
