<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);


include_once $_SERVER['DOCUMENT_ROOT']."/system/main.php";

if(isset($statya)){
    if($statya){$nav = null;}

}

if(isset($page_img)){
    if(!$page_img){$page_img='https://autotalkz.com/images/main.jpg';}

}

if(isset($cat, $statya)){
    if(!$statya and !$cat){
        $page_kroshki = null;
    }
}


/*$page_text = replacment('</p>', "</p>".$ads2, $page_text,'1');
$page_text = replacment('</p><p>', "</p>".$ads3.'<p>', $page_text,'4');
$page_text = replacment('</p><p>', "</p>".$adsstat.'<p>', $page_text,'2');
$page_text = replacment('</p><p>', "</p>".$adsstat.'<p>', $page_text,'6');*/

?>

<?php include_once $_SERVER['DOCUMENT_ROOT']."/system/1.php";?>

    <title><?php echo $page_title; ?></title>
    <meta name="description" content="<?php echo $page_desc;?>" />
    <?php echo $alternate; ?>
    <meta property="og:type" content="article" />
    <meta property="og:title" content="<?php echo $page_title;?>" />
    <meta property="og:description" content="<?php echo $page_desc;?>" />
    <meta property="og:url" content="https://autotalkz.com/" />
    <meta property="og:site_name" content="AutoTalkz.com - Auto review" />
    <meta property="og:image" content="<?php echo $page_img;?>" />
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:description" content="<?php echo $page_desc;?>"/>
    <meta name="twitter:title" content="<?php echo $page_title;?>"/>
    <meta name="twitter:domain" content="AutoTalkz.com - Auto review"/>
    <meta name="twitter:image:src" content="<?php echo $page_img;?>"/>
    <?php include_once $_SERVER['DOCUMENT_ROOT']."/system/2.php";?>
    <h1 itemprop="headline"><?php echo $page_h1;?></h1>
    <div class="navi"><?php echo $page_kroshki;?></div>
    <div class="text">

        <?php echo $page_text;?>

        <?php echo $spiski;?>

        <?php echo $nav;?>
        
    </div>
<?php include_once $_SERVER['DOCUMENT_ROOT']."/system/3.php";?>