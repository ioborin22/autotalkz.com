<?php
session_start();

include_once $_SERVER['DOCUMENT_ROOT']."/admin/dbconnect.php";
include_once $_SERVER['DOCUMENT_ROOT']."/mods/mainclass.php";

$main = new main();
$main->setLang(isset($_GET['lang']) ? htmlspecialchars($_GET['lang']) : 'eng');
$main->getTags(); // Для SEO тегов

// Определение переводов для страницы "About Us"
$translations = [
    'eng' => [
        'title' => 'About Us',
        'content' => '<h1>About Us</h1>
<p>Welcome to AutoTalkz! We are passionate about automobiles and are dedicated to providing detailed reviews and histories of cars from around the world. Our goal is to be your primary source of automotive information, from technical specifications to fascinating stories about each model.</p>

<h2>Our Mission</h2>
<p>At AutoTalkz, we believe that every car has a story to tell. Our mission is to share these stories with our readers and provide detailed reviews that help car enthusiasts better understand the vehicles they love. Our content is carefully researched and written by **Russian automotive experts**, ensuring you receive accurate and engaging information.</p>

<h2>Our Team</h2>
<p>Our team is composed of professionals with years of experience in automotive reviews. Each team member brings a wealth of knowledge and expertise to the table, allowing us to deliver top-quality content to our readers.</p>

<h2>Contact Us</h2>
<p>If you have any questions or would like to get in touch with us, feel free to email us at <strong>info@autotalkz.com</strong>.</p>

<h2>Advertising</h2>
<p>AutoTalkz is a completely free website supported by advertising. We do not offer paid services or collect personal information from our users. The site exists thanks to the interest of our users and the revenue generated from ads.</p>

<h2>Content and Images</h2>
<p>All articles on AutoTalkz were written by professional Russian authors specializing in automotive reviews. The images used on our site are low-resolution, older pictures sourced from the internet or taken by the car manufacturers themselves. The low resolution is intentional to ensure faster loading times.</p>
',
        'meta_description' => 'Learn more about AutoTalkz, your ultimate source for detailed car reviews and histories from around the world.',
        'cannonical' => 'https://autotalkz.com/about-us',
    ],
    'de' => [
        'title' => 'Über uns',
        'content' => '<h1>Über uns</h1>
<p>Willkommen bei AutoTalkz! Wir sind leidenschaftlich an Autos interessiert und widmen uns der Bereitstellung detaillierter Bewertungen und Geschichten über Autos aus der ganzen Welt. Unser Ziel ist es, Ihre primäre Quelle für Automobilinformationen zu sein, von technischen Spezifikationen bis hin zu faszinierenden Geschichten über jedes Modell.</p>

<h2>Unsere Mission</h2>
<p>Bei AutoTalkz glauben wir, dass jedes Auto eine Geschichte zu erzählen hat. Unsere Mission ist es, diese Geschichten mit unseren Lesern zu teilen und detaillierte Bewertungen bereitzustellen, die Auto-Enthusiasten helfen, die Fahrzeuge, die sie lieben, besser zu verstehen. Unser Inhalt wird sorgfältig recherchiert und von **russischen Automobil-Experten** verfasst, sodass Sie genaue und interessante Informationen erhalten.</p>

<h2>Unser Team</h2>
<p>Unser Team besteht aus Fachleuten mit jahrelanger Erfahrung in der Automobilbewertung. Jedes Teammitglied bringt ein reichhaltiges Wissen und Fachwissen mit, das es uns ermöglicht, unseren Lesern qualitativ hochwertige Inhalte zu liefern.</p>

<h2>Kontaktieren Sie uns</h2>
<p>Wenn Sie Fragen haben oder uns kontaktieren möchten, senden Sie uns gerne eine E-Mail an <strong>info@autotalkz.com</strong>.</p>

<h2>Werbung</h2>
<p>AutoTalkz ist eine komplett kostenlose Website, die durch Werbung unterstützt wird. Wir bieten keine kostenpflichtigen Dienste an und sammeln keine persönlichen Informationen von unseren Nutzern. Die Website existiert dank des Interesses unserer Nutzer und der Einnahmen aus Werbung.</p>

<h2>Inhalte und Bilder</h2>
<p>Alle Artikel auf AutoTalkz wurden von professionellen russischen Autoren verfasst, die sich auf Automobilbewertungen spezialisiert haben. Die auf unserer Website verwendeten Bilder sind niedrig auflösende, ältere Bilder, die aus dem Internet stammen oder von den Automobilherstellern selbst aufgenommen wurden. Die niedrige Auflösung ist beabsichtigt, um schnellere Ladezeiten zu gewährleisten.</p>
',
        'meta_description' => 'Erfahren Sie mehr über AutoTalkz, Ihre ultimative Quelle für detaillierte Autorezensionen und -geschichten aus der ganzen Welt.',
        'cannonical' => 'https://autotalkz.com/lang-de/about-us',
    ],
    'fr' => [
        'title' => 'À propos de nous',
        'content' => '<h1>À propos de nous</h1>
<p>Bienvenue sur AutoTalkz ! Nous sommes passionnés par les voitures et nous nous consacrons à fournir des critiques détaillées et des histoires fascinantes sur les voitures du monde entier. Notre objectif est d\'être votre principale source d\'informations automobiles, allant des spécifications techniques aux histoires captivantes de chaque modèle.</p>

<h2>Notre mission</h2>
<p>Chez AutoTalkz, nous croyons que chaque voiture a une histoire à raconter. Notre mission est de partager ces histoires avec nos lecteurs et de fournir des critiques détaillées qui aident les passionnés d\'automobiles à mieux comprendre les véhicules qu\'ils aiment. Nos contenus sont soigneusement recherchés et rédigés par des **experts automobiles russes**, vous garantissant des informations précises et intéressantes.</p>

<h2>Notre équipe</h2>
<p>Notre équipe est composée de professionnels ayant des années d\'expérience dans l\'évaluation automobile. Chaque membre de l\'équipe apporte une riche expertise et des connaissances approfondies, ce qui nous permet de fournir des contenus de haute qualité à nos lecteurs.</p>

<h2>Contactez-nous</h2>
<p>Si vous avez des questions ou souhaitez nous contacter, n\'hésitez pas à nous envoyer un e-mail à <strong>info@autotalkz.com</strong>.</p>

<h2>Publicité</h2>
<p>AutoTalkz est un site entièrement gratuit, soutenu par la publicité. Nous n\'offrons aucun service payant et nous ne collectons aucune information personnelle de nos utilisateurs. Le site existe grâce à l\'intérêt de nos utilisateurs et aux revenus générés par la publicité.</p>

<h2>Contenus et images</h2>
<p>Tous les articles sur AutoTalkz ont été rédigés par des auteurs russes professionnels spécialisés dans les critiques automobiles. Les images utilisées sur notre site sont de faible résolution, anciennes, provenant d\'internet ou prises par les constructeurs automobiles eux-mêmes. La faible résolution est intentionnelle pour garantir des temps de chargement plus rapides.</p>
',
        'meta_description' => 'En savoir plus sur AutoTalkz, votre source ultime pour des critiques de voitures détaillées et des histoires du monde entier.',
        'cannonical' => 'https://autotalkz.com/lang-fr/about-us',
    ],
    'es' => [
        'title' => 'Sobre nosotros',
        'content' => '<h1>Sobre nosotros</h1>
<p>¡Bienvenido a AutoTalkz! Somos apasionados por los automóviles y nos dedicamos a proporcionar reseñas detalladas e historias fascinantes sobre los coches de todo el mundo. Nuestro objetivo es ser su principal fuente de información automotriz, desde especificaciones técnicas hasta historias cautivadoras de cada modelo.</p>

<h2>Nuestra misión</h2>
<p>En AutoTalkz, creemos que cada coche tiene una historia que contar. Nuestra misión es compartir esas historias con nuestros lectores y proporcionar reseñas detalladas que ayuden a los entusiastas de los automóviles a comprender mejor los vehículos que aman. Nuestro contenido está cuidadosamente investigado y escrito por **expertos automotrices rusos**, garantizando información precisa e interesante.</p>

<h2>Nuestro equipo</h2>
<p>Nuestro equipo está compuesto por profesionales con años de experiencia en la evaluación de automóviles. Cada miembro del equipo aporta una gran experiencia y conocimientos profundos, lo que nos permite ofrecer contenido de alta calidad a nuestros lectores.</p>

<h2>Contáctenos</h2>
<p>Si tiene alguna pregunta o desea ponerse en contacto con nosotros, no dude en enviarnos un correo electrónico a <strong>info@autotalkz.com</strong>.</p>

<h2>Publicidad</h2>
<p>AutoTalkz es un sitio completamente gratuito, respaldado por la publicidad. No ofrecemos ningún servicio pago y no recopilamos información personal de nuestros usuarios. El sitio existe gracias al interés de nuestros usuarios y a los ingresos generados por la publicidad.</p>

<h2>Contenidos e imágenes</h2>
<p>Todos los artículos en AutoTalkz han sido escritos por autores rusos profesionales especializados en reseñas de automóviles. Las imágenes utilizadas en nuestro sitio son de baja resolución, antiguas, tomadas de internet o capturadas por los propios fabricantes de automóviles. La baja resolución es intencional para garantizar tiempos de carga más rápidos.</p>
',
        'meta_description' => 'Conozca más sobre AutoTalkz, su fuente definitiva para reseñas detalladas de automóviles e historias de todo el mundo.',
        'cannonical' => 'https://autotalkz.com/lang-es/about-us',
    ],
    'it' => [
        'title' => 'Chi siamo',
        'content' => '<h1>Chi siamo</h1>
<p>Benvenuti su AutoTalkz! Siamo appassionati di automobili e ci dedichiamo a fornire recensioni dettagliate e storie affascinanti su auto di tutto il mondo. Il nostro obiettivo è essere la vostra principale fonte di informazioni automobilistiche, dalle specifiche tecniche alle storie avvincenti di ogni modello.</p>

<h2>La nostra missione</h2>
<p>Su AutoTalkz, crediamo che ogni auto abbia una storia da raccontare. La nostra missione è condividere queste storie con i nostri lettori e fornire recensioni dettagliate che aiutino gli appassionati di automobili a comprendere meglio i veicoli che amano. I nostri contenuti sono accuratamente ricercati e scritti da **esperti automobilistici russi**, garantendo informazioni precise e interessanti.</p>

<h2>Il nostro team</h2>
<p>Il nostro team è composto da professionisti con anni di esperienza nella valutazione di automobili. Ogni membro del team apporta una grande esperienza e conoscenze approfondite, permettendoci di offrire contenuti di alta qualità ai nostri lettori.</p>

<h2>Contattaci</h2>
<p>Se hai domande o desideri contattarci, non esitare a inviarci un\'email a <strong>info@autotalkz.com</strong>.</p>

<h2>Pubblicità</h2>
<p>AutoTalkz è un sito completamente gratuito, sostenuto dalla pubblicità. Non offriamo alcun servizio a pagamento e non raccogliamo informazioni personali dai nostri utenti. Il sito esiste grazie all\'interesse dei nostri utenti e ai ricavi generati dalla pubblicità.</p>

<h2>Contenuti e immagini</h2>
<p>Tutti gli articoli su AutoTalkz sono stati scritti da autori russi professionisti specializzati in recensioni automobilistiche. Le immagini utilizzate sul nostro sito sono di bassa risoluzione, vecchie, prese da internet o scattate dai produttori di automobili stessi. La bassa risoluzione è intenzionale per garantire tempi di caricamento più rapidi.</p>
',
        'meta_description' => 'Scopri di più su AutoTalkz, la tua fonte definitiva per recensioni dettagliate di auto e storie da tutto il mondo.',
        'cannonical' => 'https://autotalkz.com/lang-it/about-us',
    ],
    'pt' => [
        'title' => 'Sobre nós',
        'content' => '<h1>Sobre nós</h1>
<p>Bem-vindo ao AutoTalkz! Somos apaixonados por carros e nos dedicamos a fornecer análises detalhadas e histórias fascinantes sobre automóveis de todo o mundo. Nosso objetivo é ser sua principal fonte de informações automotivas, desde especificações técnicas até histórias envolventes de cada modelo.</p>

<h2>Nossa missão</h2>
<p>No AutoTalkz, acreditamos que cada carro tem uma história para contar. Nossa missão é compartilhar essas histórias com nossos leitores e fornecer análises detalhadas que ajudem os entusiastas de automóveis a entender melhor os veículos que amam. Nosso conteúdo é cuidadosamente pesquisado e escrito por **especialistas automotivos russos**, garantindo informações precisas e interessantes.</p>

<h2>Nossa equipe</h2>
<p>Nossa equipe é composta por profissionais com anos de experiência em avaliações de automóveis. Cada membro da equipe traz uma vasta experiência e conhecimento profundo, permitindo-nos oferecer conteúdo de alta qualidade aos nossos leitores.</p>

<h2>Contato</h2>
<p>Se você tiver alguma dúvida ou desejar entrar em contato conosco, não hesite em nos enviar um e-mail para <strong>info@autotalkz.com</strong>.</p>

<h2>Publicidade</h2>
<p>O AutoTalkz é um site totalmente gratuito, sustentado por publicidade. Não oferecemos nenhum serviço pago e não coletamos informações pessoais de nossos usuários. O site existe graças ao interesse de nossos usuários e à receita gerada pela publicidade.</p>

<h2>Conteúdos e imagens</h2>
<p>Todos os artigos no AutoTalkz foram escritos por autores russos profissionais especializados em análises automotivas. As imagens utilizadas em nosso site são de baixa resolução, antigas, retiradas da internet ou tiradas pelos próprios fabricantes de automóveis. A baixa resolução é intencional para garantir tempos de carregamento mais rápidos.</p>
',
        'meta_description' => 'Saiba mais sobre AutoTalkz, sua fonte definitiva para avaliações detalhadas de carros e histórias de todo o mundo.',
        'cannonical' => 'https://autotalkz.com/lang-pt/about-us',
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
