<?php
include_once $_SERVER['DOCUMENT_ROOT']."/admin/dbconnect.php";

$zap = $database->query("select lang.name as l_name, main.url as m_url, main.caturl as m_c_url from texts left join main on main.id = texts.idstat left join lang on lang.id = texts.lang");

while($res = $zap->fetch_assoc()){

	if($res['l_name'] == 'eng'){
		$viv .= '<url><loc>https://autotalkz.com/cat-'.$res['m_c_url'].'/'.$res['m_url'].'/</loc></url>'."\n";
	}else{
		if($res['m_url']){
			$viv .= '<url><loc>https://autotalkz.com/lang-'.$res['l_name'].'/cat-'.$res['m_c_url'].'/'.$res['m_url'].'/</loc></url>'."\n";
		}
	}
}


echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
echo $viv;
echo '</urlset>';