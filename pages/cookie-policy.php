<?php
session_start();

include_once $_SERVER['DOCUMENT_ROOT']."/admin/dbconnect.php";
include_once $_SERVER['DOCUMENT_ROOT']."/mods/mainclass.php";

$main = new main();
$main->setLang(isset($_GET['lang']) ? htmlspecialchars($_GET['lang']) : 'eng');
$main->getTags(); // Для SEO тегов

// Определение переводов для страницы "Cookie Policy"
$translations = [
    'eng' => [
        'title' => 'Cookie Policy',
        'content' => '<h1>Cookie Policy</h1>
<p>At AutoTalkz, we use cookies to enhance your browsing experience and to provide certain functionalities on our website. This policy explains what cookies are, how we use them, and your options regarding them.</p>

<h2>What are cookies?</h2>
<p>Cookies are small text files that are placed on your device when you visit a website. They are widely used to make websites work more efficiently and to provide information to the site owners.</p>

<h2>How do we use cookies?</h2>
<p>We use cookies for the following purposes:</p>
<ul>
    <li><strong>Essential cookies:</strong> These cookies are necessary for the website to function and include one cookie used to hide the cookie consent banner once you\'ve accepted it. Without these cookies, certain features may not work.</li>
    <li><strong>Google Analytics:</strong> We use Google Analytics to collect anonymous statistical data about how users interact with our site. This helps us understand visitor behavior and improve our website\'s performance. The information collected by these cookies is not personally identifiable.</li>
    <li><strong>Google AdSense:</strong> We display ads through Google AdSense, which may use cookies to show you relevant advertisements based on your browsing history. These cookies are known as third-party cookies and are placed on your device by Google. We do not have access to these cookies or the data they collect. Google uses these cookies to track your browsing across different websites, and this data is managed and controlled by Google. You can learn more about how Google uses your data by visiting their <a href="https://policies.google.com/privacy">Privacy Policy</a>.</li>
</ul>

<h2>Personal data and server logs</h2>
<p>We do not collect any personal data through cookies. The only data we collect is related to server logs, which are automatically gathered by our Apache server. These logs may include your IP address, browser type, and the pages you visit. This information is used solely for technical and security purposes.</p>

<h2>Your choices regarding cookies</h2>
<p>You can choose to accept or decline cookies. Most web browsers automatically accept cookies, but you can usually modify your browser settings to decline cookies if you prefer. However, doing so may affect your experience on our website and limit certain functionalities.</p>

<h2>Contact us</h2>
<p>If you have any questions about this Cookie Policy, please contact us at <a href="mailto:info@autotalkz.com">info@autotalkz.com</a>.</p>
',
        'meta_description' => 'Learn about how AutoTalkz uses cookies to enhance your experience on our website.',
        'cannonical' => 'https://autotalkz.com/cookie-policy',
    ],
    'de' => [
        'title' => 'Cookie-Richtlinie',
        'content' => '<h1>Cookie-Richtlinie</h1>
<p>Bei AutoTalkz verwenden wir Cookies, um Ihr Surferlebnis zu verbessern und bestimmte Funktionen auf unserer Website bereitzustellen. Diese Richtlinie erklärt, was Cookies sind, wie wir sie verwenden und welche Optionen Sie in Bezug auf Cookies haben.</p>

<h2>Was sind Cookies?</h2>
<p>Cookies sind kleine Textdateien, die auf Ihrem Gerät abgelegt werden, wenn Sie eine Website besuchen. Sie werden häufig verwendet, um Websites effizienter zu machen und um Informationen für die Betreiber der Website bereitzustellen.</p>

<h2>Wie verwenden wir Cookies?</h2>
<p>Wir verwenden Cookies für folgende Zwecke:</p>
<ul>
    <li><strong>Wesentliche Cookies:</strong> Diese Cookies sind notwendig, damit die Website funktioniert, und beinhalten ein Cookie, das verwendet wird, um das Cookie-Hinweis-Banner auszublenden, nachdem Sie es akzeptiert haben. Ohne diese Cookies funktionieren bestimmte Funktionen möglicherweise nicht.</li>
    <li><strong>Google Analytics:</strong> Wir verwenden Google Analytics, um anonyme statistische Daten darüber zu sammeln, wie Nutzer mit unserer Website interagieren. Dies hilft uns, das Verhalten der Besucher zu verstehen und die Leistung unserer Website zu verbessern. Die durch diese Cookies gesammelten Informationen sind nicht persönlich identifizierbar.</li>
    <li><strong>Google AdSense:</strong> Wir zeigen Anzeigen über Google AdSense an, das möglicherweise Cookies verwendet, um Ihnen relevante Werbung basierend auf Ihrem Surfverhalten anzuzeigen. Diese Cookies werden als Drittanbieter-Cookies bezeichnet und von Google auf Ihrem Gerät platziert. Wir haben keinen Zugriff auf diese Cookies oder die von ihnen gesammelten Daten. Google verwendet diese Cookies, um Ihr Surfen auf verschiedenen Websites zu verfolgen, und diese Daten werden von Google verwaltet und kontrolliert. Weitere Informationen darüber, wie Google Ihre Daten verwendet, finden Sie in deren <a href="https://policies.google.com/privacy">Datenschutzerklärung</a>.</li>
</ul>

<h2>Persönliche Daten und Serverprotokolle</h2>
<p>Wir sammeln keine persönlichen Daten durch Cookies. Die einzigen Daten, die wir sammeln, beziehen sich auf Serverprotokolle, die automatisch von unserem Apache-Server erfasst werden. Diese Protokolle können Ihre IP-Adresse, Ihren Browsertyp und die von Ihnen besuchten Seiten umfassen. Diese Informationen werden ausschließlich für technische und Sicherheitszwecke verwendet.</p>

<h2>Ihre Wahlmöglichkeiten bezüglich Cookies</h2>
<p>Sie können wählen, ob Sie Cookies akzeptieren oder ablehnen möchten. Die meisten Webbrowser akzeptieren Cookies automatisch, aber Sie können Ihre Browsereinstellungen normalerweise so ändern, dass Cookies abgelehnt werden, wenn Sie dies bevorzugen. Dies kann jedoch Ihre Erfahrung auf unserer Website beeinträchtigen und bestimmte Funktionen einschränken.</p>

<h2>Kontaktieren Sie uns</h2>
<p>Wenn Sie Fragen zu dieser Cookie-Richtlinie haben, kontaktieren Sie uns bitte unter <a href="mailto:info@autotalkz.com">info@autotalkz.com</a>.</p>
',
        'meta_description' => 'Erfahren Sie, wie AutoTalkz Cookies verwendet, um Ihre Erfahrung auf unserer Website zu verbessern.',
        'cannonical' => 'https://autotalkz.com/lang-de/cookie-policy',
    ],
    'fr' => [
        'title' => 'Politique de cookies',
        'content' => '<h1>Politique de cookies</h1>
<p>Chez AutoTalkz, nous utilisons des cookies pour améliorer votre expérience de navigation et fournir certaines fonctionnalités sur notre site. Cette politique explique ce que sont les cookies, comment nous les utilisons et quelles sont vos options en matière de cookies.</p>

<h2>Qu\'est-ce qu\'un cookie ?</h2>
<p>Les cookies sont de petits fichiers texte qui sont placés sur votre appareil lorsque vous visitez un site Web. Ils sont couramment utilisés pour rendre les sites Web plus efficaces et pour fournir des informations aux propriétaires du site.</p>

<h2>Comment utilisons-nous les cookies ?</h2>
<p>Nous utilisons des cookies pour les raisons suivantes :</p>
<ul>
    <li><strong>Cookies essentiels :</strong> Ces cookies sont nécessaires au bon fonctionnement du site et comprennent un cookie utilisé pour masquer la bannière de consentement aux cookies après votre acceptation. Sans ces cookies, certaines fonctionnalités peuvent ne pas fonctionner.</li>
    <li><strong>Google Analytics :</strong> Nous utilisons Google Analytics pour recueillir des données statistiques anonymes sur la façon dont les utilisateurs interagissent avec notre site. Cela nous aide à comprendre le comportement des visiteurs et à améliorer les performances de notre site. Les informations collectées par ces cookies ne sont pas personnellement identifiables.</li>
    <li><strong>Google AdSense :</strong> Nous affichons des publicités via Google AdSense, qui peut utiliser des cookies pour vous montrer des publicités pertinentes en fonction de votre comportement de navigation. Ces cookies sont appelés cookies tiers et sont placés sur votre appareil par Google. Nous n\'avons pas accès à ces cookies ni aux données qu\'ils collectent. Google utilise ces cookies pour suivre votre navigation sur différents sites Web, et ces données sont gérées et contrôlées par Google. Pour plus d\'informations sur la façon dont Google utilise vos données, consultez leur <a href="https://policies.google.com/privacy">politique de confidentialité</a>.</li>
</ul>

<h2>Données personnelles et journaux du serveur</h2>
<p>Nous ne collectons aucune donnée personnelle via les cookies. Les seules données que nous collectons concernent les journaux du serveur, qui sont automatiquement enregistrés par notre serveur Apache. Ces journaux peuvent inclure votre adresse IP, le type de navigateur que vous utilisez et les pages que vous avez visitées. Ces informations sont utilisées uniquement à des fins techniques et de sécurité.</p>

<h2>Vos choix en matière de cookies</h2>
<p>Vous pouvez choisir d\'accepter ou de refuser les cookies. La plupart des navigateurs Web acceptent automatiquement les cookies, mais vous pouvez généralement modifier les paramètres de votre navigateur pour refuser les cookies si vous le préférez. Cela peut toutefois affecter votre expérience sur notre site et limiter certaines fonctionnalités.</p>

<h2>Nous contacter</h2>
<p>Si vous avez des questions concernant cette politique de cookies, veuillez nous contacter à l\'adresse <a href="mailto:info@autotalkz.com">info@autotalkz.com</a>.</p>
',
        'meta_description' => 'Découvrez comment AutoTalkz utilise les cookies pour améliorer votre expérience sur notre site Web.',
        'cannonical' => 'https://autotalkz.com/lang-fr/cookie-policy',
    ],
    'es' => [
        'title' => 'Política de cookies',
        'content' => '<h1>Política de cookies</h1>
<p>En AutoTalkz, utilizamos cookies para mejorar su experiencia de navegación y proporcionar ciertas funcionalidades en nuestro sitio. Esta política explica qué son las cookies, cómo las utilizamos y cuáles son sus opciones en relación con las cookies.</p>

<h2>¿Qué es una cookie?</h2>
<p>Las cookies son pequeños archivos de texto que se colocan en su dispositivo cuando visita un sitio web. Se utilizan comúnmente para que los sitios web funcionen de manera más eficiente y para proporcionar información a los propietarios del sitio.</p>

<h2>¿Cómo utilizamos las cookies?</h2>
<p>Utilizamos cookies por las siguientes razones:</p>
<ul>
    <li><strong>Cookies esenciales:</strong> Estas cookies son necesarias para el funcionamiento correcto del sitio e incluyen una cookie utilizada para ocultar la barra de consentimiento de cookies después de su aceptación. Sin estas cookies, algunas funcionalidades pueden no funcionar.</li>
    <li><strong>Google Analytics:</strong> Usamos Google Analytics para recopilar datos estadísticos anónimos sobre cómo los usuarios interactúan con nuestro sitio. Esto nos ayuda a comprender el comportamiento de los visitantes y mejorar el rendimiento de nuestro sitio. La información recopilada por estas cookies no es identificable personalmente.</li>
    <li><strong>Google AdSense:</strong> Mostramos anuncios a través de Google AdSense, que puede utilizar cookies para mostrarle anuncios relevantes en función de su comportamiento de navegación. Estas cookies se denominan cookies de terceros y son colocadas en su dispositivo por Google. No tenemos acceso a estas cookies ni a los datos que recopilan. Google utiliza estas cookies para rastrear su navegación en diferentes sitios web, y estos datos son gestionados y controlados por Google. Para obtener más información sobre cómo Google utiliza sus datos, consulte su <a href="https://policies.google.com/privacy">política de privacidad</a>.</li>
</ul>

<h2>Datos personales y registros del servidor</h2>
<p>No recopilamos datos personales a través de las cookies. Los únicos datos que recopilamos son los registros del servidor, que son registrados automáticamente por nuestro servidor Apache. Estos registros pueden incluir su dirección IP, el tipo de navegador que utiliza y las páginas que ha visitado. Esta información se utiliza únicamente con fines técnicos y de seguridad.</p>

<h2>Sus opciones en relación con las cookies</h2>
<p>Puede elegir aceptar o rechazar las cookies. La mayoría de los navegadores web aceptan cookies automáticamente, pero generalmente puede modificar la configuración de su navegador para rechazar cookies si lo prefiere. Sin embargo, esto puede afectar su experiencia en nuestro sitio y limitar algunas funcionalidades.</p>

<h2>Contáctenos</h2>
<p>Si tiene alguna pregunta sobre esta política de cookies, comuníquese con nosotros a través de <a href="mailto:info@autotalkz.com">info@autotalkz.com</a>.</p>
',
        'meta_description' => 'Obtenga más información sobre cómo AutoTalkz utiliza cookies para mejorar su experiencia en nuestro sitio web.',
        'cannonical' => 'https://autotalkz.com/lang-es/cookie-policy',
    ],
    'it' => [
        'title' => 'Politica sui cookie',
        'content' => '<h1>Politica sui cookie</h1>
<p>Su AutoTalkz, utilizziamo i cookie per migliorare la tua esperienza di navigazione e fornire alcune funzionalità sul nostro sito. Questa politica spiega cosa sono i cookie, come li utilizziamo e quali sono le tue opzioni in relazione ai cookie.</p>

<h2>Che cos\'è un cookie?</h2>
<p>I cookie sono piccoli file di testo che vengono posizionati sul tuo dispositivo quando visiti un sito web. Vengono comunemente utilizzati per far funzionare i siti web in modo più efficiente e per fornire informazioni ai proprietari del sito.</p>

<h2>Come utilizziamo i cookie?</h2>
<p>Utilizziamo i cookie per i seguenti scopi:</p>
<ul>
    <li><strong>Cookie essenziali:</strong> Questi cookie sono necessari per il corretto funzionamento del sito e includono un cookie utilizzato per nascondere il banner di consenso ai cookie dopo la tua accettazione. Senza questi cookie, alcune funzionalità potrebbero non funzionare.</li>
    <li><strong>Google Analytics:</strong> Utilizziamo Google Analytics per raccogliere dati statistici anonimi su come gli utenti interagiscono con il nostro sito. Questo ci aiuta a comprendere il comportamento dei visitatori e a migliorare le prestazioni del nostro sito. Le informazioni raccolte tramite questi cookie non sono identificabili personalmente.</li>
    <li><strong>Google AdSense:</strong> Mostriamo annunci tramite Google AdSense, che può utilizzare cookie per mostrarti annunci pertinenti in base al tuo comportamento di navigazione. Questi cookie sono chiamati cookie di terze parti e vengono posizionati sul tuo dispositivo da Google. Non abbiamo accesso a questi cookie né ai dati che raccolgono. Google utilizza questi cookie per tracciare la tua navigazione su diversi siti web, e questi dati sono gestiti e controllati da Google. Per maggiori informazioni su come Google utilizza i tuoi dati, consulta la sua <a href="https://policies.google.com/privacy">politica sulla privacy</a>.</li>
</ul>

<h2>Dati personali e registri del server</h2>
<p>Non raccogliamo dati personali tramite i cookie. Gli unici dati che raccogliamo sono i registri del server, che vengono registrati automaticamente dal nostro server Apache. Questi registri possono includere il tuo indirizzo IP, il tipo di browser che utilizzi e le pagine che hai visitato. Queste informazioni vengono utilizzate esclusivamente per scopi tecnici e di sicurezza.</p>

<h2>Le tue opzioni in relazione ai cookie</h2>
<p>Puoi scegliere di accettare o rifiutare i cookie. La maggior parte dei browser web accetta i cookie automaticamente, ma generalmente puoi modificare le impostazioni del tuo browser per rifiutare i cookie se lo preferisci. Tuttavia, questo potrebbe influire sulla tua esperienza sul nostro sito e limitare alcune funzionalità.</p>

<h2>Contattaci</h2>
<p>Se hai domande su questa politica sui cookie, contattaci all\'indirizzo <a href="mailto:info@autotalkz.com">info@autotalkz.com</a>.</p>
',
        'meta_description' => 'Scopri come AutoTalkz utilizza i cookie per migliorare la tua esperienza sul nostro sito web.',
        'cannonical' => 'https://autotalkz.com/lang-it/cookie-policy',
    ],
    'pt' => [
        'title' => 'Política de Cookies',
        'content' => '<h1>Política de Cookies</h1>
<p>No AutoTalkz, utilizamos cookies para melhorar a sua experiência de navegação e fornecer certas funcionalidades no nosso site. Esta política explica o que são cookies, como os utilizamos e quais são as suas opções em relação aos cookies.</p>

<h2>O que é um cookie?</h2>
<p>Cookies são pequenos arquivos de texto que são colocados no seu dispositivo quando você visita um site. Eles são comumente usados para fazer os sites funcionarem de forma mais eficiente e para fornecer informações aos proprietários do site.</p>

<h2>Como utilizamos os cookies?</h2>
<p>Utilizamos cookies para os seguintes propósitos:</p>
<ul>
    <li><strong>Cookies essenciais:</strong> Esses cookies são necessários para o funcionamento adequado do site e incluem um cookie usado para ocultar o banner de consentimento de cookies após a sua aceitação. Sem esses cookies, algumas funcionalidades podem não funcionar.</li>
    <li><strong>Google Analytics:</strong> Utilizamos o Google Analytics para coletar dados estatísticos anônimos sobre como os usuários interagem com nosso site. Isso nos ajuda a entender o comportamento dos visitantes e a melhorar o desempenho do site. As informações coletadas por meio desses cookies não são identificáveis pessoalmente.</li>
    <li><strong>Google AdSense:</strong> Exibimos anúncios por meio do Google AdSense, que pode utilizar cookies para mostrar anúncios relevantes com base no seu comportamento de navegação. Esses cookies são chamados de cookies de terceiros e são colocados no seu dispositivo pelo Google. Não temos acesso a esses cookies nem aos dados que eles coletam. O Google utiliza esses cookies para rastrear sua navegação em diferentes sites, e esses dados são gerenciados e controlados pelo Google. Para mais informações sobre como o Google utiliza seus dados, consulte a sua <a href="https://policies.google.com/privacy">política de privacidade</a>.</li>
</ul>

<h2>Dados pessoais e logs do servidor</h2>
<p>Não coletamos dados pessoais através dos cookies. Os únicos dados que coletamos são os logs do servidor, que são registrados automaticamente pelo nosso servidor Apache. Esses logs podem incluir seu endereço IP, o tipo de navegador que você utiliza e as páginas que você visitou. Essas informações são usadas exclusivamente para fins técnicos e de segurança.</p>

<h2>Suas opções em relação aos cookies</h2>
<p>Você pode optar por aceitar ou recusar cookies. A maioria dos navegadores aceita cookies automaticamente, mas você pode modificar as configurações do seu navegador para recusar cookies, se preferir. No entanto, isso pode afetar a sua experiência no nosso site e limitar algumas funcionalidades.</p>

<h2>Entre em contato</h2>
<p>Se você tiver alguma dúvida sobre esta política de cookies, entre em contato conosco pelo e-mail <a href="mailto:info@autotalkz.com">info@autotalkz.com</a>.</p>
',
        'meta_description' => 'Saiba como o AutoTalkz utiliza cookies para melhorar sua experiência em nosso site.',
        'cannonical' => 'https://autotalkz.com/lang-pt/cookie-policy',
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
