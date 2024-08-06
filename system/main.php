<?php
session_start();

include_once $_SERVER['DOCUMENT_ROOT']."/admin/dbconnect.php";
include_once $_SERVER['DOCUMENT_ROOT']."/mods/mainclass.php";

if (isset($_GET['page'])) {
    $page = stripslashes(htmlspecialchars($_GET['page']));
}

if (isset($_GET['bukva'])) {
    $bukva = stripslashes(htmlspecialchars($_GET['bukva']));
}

if (isset($_GET['lang'])) {
    $lang = stripslashes(htmlspecialchars($_GET['lang']));
}

if (isset($_GET['cat'])) {
    $cat = stripslashes(htmlspecialchars($_GET['cat']));
}

if (isset($_GET['stat'])) {
    $statya = stripslashes(htmlspecialchars($_GET['stat']));
} else {
    $statya = '';
}

$main = new main();

if (isset($page)) {
    if($page){$main->setPage($page);}
}
if (isset($bukva)) {
    if($bukva){$main->setBukva($bukva);}
}
if (isset($lang)) {
    if($lang){$main->setLang($lang);}
}
if (isset($cat)) {
    if($cat){$main->setCat($cat);}
}
if (isset($statya)) {
    if($statya){$main->setStatya($statya);}
}

$spiski = $main->getStat();
$nav = $main->getNav();

$cats = $main->getCats();

$main->getLang();
$lang_page = $main->viv_lang;

if($statya){
    $main->getStatya();
    $main->setNum(9);
    $spiski = $main->getStat();
    $lang_page = $main->viv_lang;

    if(!$main->statya_title){
        header('HTTP/1.1 404 Not Found');
        header('Location: /404/');
        exit;
    }
}
$main->getTags();

$page_title = $main->page_title;
$page_h1 = $main->page_h1;
$page_desc = $main->page_desc;
$page_text = $main->text;
$page_kroshki = $main->page_kroshki;
$page_img = $main->page_img;
$cannonical = $main->cannonical;
$alternate = $main->alternate;

$lang = $main->lang;
if($lang == 'eng'){$lang = 'en';}
?>
