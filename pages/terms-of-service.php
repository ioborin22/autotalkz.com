<?php
session_start();

include_once $_SERVER['DOCUMENT_ROOT']."/admin/dbconnect.php";
include_once $_SERVER['DOCUMENT_ROOT']."/mods/mainclass.php";

$main = new main();
$main->setLang(isset($_GET['lang']) ? htmlspecialchars($_GET['lang']) : 'eng');
$main->getTags(); // Для SEO тегов

// Определение переводов для страницы "Terms of Service"
$translations = [
    'eng' => [
        'title' => 'Terms of Service',
        'content' => '<h1>Terms of Service</h1>
<p>These Terms of Service outline the rules and regulations for the use of the AutoTalkz website. By accessing this website, we assume you accept these terms in full. Do not continue to use the AutoTalkz website if you do not accept all of the terms and conditions stated on this page.</p>

<p><strong>Use of Cookies:</strong> By using AutoTalkz, you agree to the use of cookies in accordance with our <a href="/privacy-policy">Privacy Policy</a>. Most interactive websites today use cookies to retrieve user details for each visit.</p>

<p><strong>License:</strong> Unless otherwise stated, AutoTalkz owns the intellectual property rights for all content on the website. All intellectual property rights are reserved. You may view, download, and/or print pages for your personal use, subject to the restrictions set in these terms.</p>

<p><strong>User Content:</strong> AutoTalkz is not responsible for any user-generated content or comments posted on the site. We reserve the right to monitor all user-generated content and to remove any content deemed inappropriate or in violation of these terms.</p>

<p>If you have any questions or concerns regarding these Terms of Service, you can contact us at <a href="mailto:info@autotalkz.com">info@autotalkz.com</a>.</p>
',
        'meta_description' => 'Understand the rules and regulations for using AutoTalkz\'s website.',
        'cannonical' => 'https://autotalkz.com/terms-of-service',
    ],
    'de' => [
        'title' => 'Nutzungsbedingungen',
        'content' => '<h1>Nutzungsbedingungen</h1>
<p>Diese Nutzungsbedingungen umreißen die Regeln und Vorschriften für die Nutzung der AutoTalkz-Website. Durch den Zugriff auf diese Website gehen wir davon aus, dass Sie diese Bedingungen in vollem Umfang akzeptieren. Nutzen Sie die AutoTalkz-Website nicht weiter, wenn Sie nicht alle auf dieser Seite aufgeführten Bedingungen akzeptieren.</p>

<p><strong>Verwendung von Cookies:</strong> Durch die Nutzung von AutoTalkz stimmen Sie der Verwendung von Cookies gemäß unserer <a href="/privacy-policy">Datenschutzerklärung</a> zu. Die meisten interaktiven Websites verwenden heute Cookies, um Benutzerdetails für jeden Besuch abzurufen.</p>

<p><strong>Lizenz:</strong> Sofern nicht anders angegeben, besitzt AutoTalkz die geistigen Eigentumsrechte für alle Inhalte auf der Website. Alle geistigen Eigentumsrechte sind vorbehalten. Sie dürfen Seiten für Ihre persönliche Nutzung anzeigen, herunterladen und/oder ausdrucken, vorbehaltlich der in diesen Bedingungen festgelegten Einschränkungen.</p>

<p><strong>Nutzerinhalte:</strong> AutoTalkz ist nicht verantwortlich für von Benutzern erstellte Inhalte oder Kommentare, die auf der Website gepostet werden. Wir behalten uns das Recht vor, alle von Benutzern erstellten Inhalte zu überwachen und alle Inhalte zu entfernen, die als unangemessen oder als Verstoß gegen diese Bedingungen angesehen werden.</p>

<p>Wenn Sie Fragen oder Bedenken bezüglich dieser Nutzungsbedingungen haben, können Sie uns unter <a href="mailto:info@autotalkz.com">info@autotalkz.com</a> kontaktieren.</p>
',
        'meta_description' => 'Verstehen Sie die Regeln und Vorschriften für die Nutzung der Website von AutoTalkz.',
        'cannonical' => 'https://autotalkz.com/lang-de/terms-of-service',
    ],
    'fr' => [
        'title' => 'Conditions d\'utilisation',
        'content' => '<h1>Conditions d\'utilisation</h1>
<p>Ces conditions d\'utilisation décrivent les règles et règlements pour l\'utilisation du site Web AutoTalkz. En accédant à ce site Web, nous supposons que vous acceptez pleinement ces termes et conditions. Ne continuez pas à utiliser le site Web AutoTalkz si vous n\'acceptez pas toutes les conditions d\'utilisation énoncées sur cette page.</p>

<p><strong>Utilisation des cookies :</strong> En utilisant AutoTalkz, vous acceptez l\'utilisation des cookies conformément à notre <a href="/privacy-policy">politique de confidentialité</a>. La plupart des sites Web interactifs utilisent aujourd\'hui des cookies pour récupérer les détails des utilisateurs pour chaque visite.</p>

<p><strong>Licence :</strong> Sauf indication contraire, AutoTalkz possède les droits de propriété intellectuelle pour tout le contenu du site Web. Tous les droits de propriété intellectuelle sont réservés. Vous pouvez consulter, télécharger et/ou imprimer des pages pour votre usage personnel, sous réserve des restrictions énoncées dans ces conditions.</p>

<p><strong>Contenu utilisateur :</strong> AutoTalkz n\'est pas responsable des contenus ou des commentaires générés par les utilisateurs et publiés sur le site. Nous nous réservons le droit de surveiller tout le contenu généré par les utilisateurs et de supprimer tout contenu jugé inapproprié ou en violation de ces conditions.</p>

<p>Si vous avez des questions ou des préoccupations concernant ces conditions d\'utilisation, vous pouvez nous contacter à l\'adresse <a href="mailto:info@autotalkz.com">info@autotalkz.com</a>.</p>
',
        'meta_description' => 'Comprenez les règles et réglementations pour l\'utilisation du site Web de AutoTalkz.',
        'cannonical' => 'https://autotalkz.com/lang-fr/terms-of-service',
    ],
    'es' => [
        'title' => 'Términos de servicio',
        'content' => '<h1>Términos de servicio</h1>
<p>Estos términos de servicio describen las reglas y regulaciones para el uso del sitio web de AutoTalkz. Al acceder a este sitio web, asumimos que acepta estos términos y condiciones en su totalidad. No continúe utilizando el sitio web de AutoTalkz si no acepta todos los términos y condiciones establecidos en esta página.</p>

<p><strong>Uso de cookies:</strong> Al utilizar AutoTalkz, usted acepta el uso de cookies de acuerdo con nuestra <a href="/privacy-policy">política de privacidad</a>. La mayoría de los sitios web interactivos utilizan hoy en día cookies para recuperar los detalles del usuario para cada visita.</p>

<p><strong>Licencia:</strong> A menos que se indique lo contrario, AutoTalkz posee los derechos de propiedad intelectual de todo el contenido del sitio web. Todos los derechos de propiedad intelectual están reservados. Puede ver, descargar y/o imprimir páginas para su uso personal, sujeto a las restricciones establecidas en estos términos.</p>

<p><strong>Contenido del usuario:</strong> AutoTalkz no es responsable del contenido generado por los usuarios o comentarios publicados en el sitio. Nos reservamos el derecho de supervisar todo el contenido generado por los usuarios y de eliminar cualquier contenido que se considere inapropiado o que infrinja estos términos.</p>

<p>Si tiene alguna pregunta o inquietud sobre estos términos de servicio, puede contactarnos en <a href="mailto:info@autotalkz.com">info@autotalkz.com</a>.</p>
',
        'meta_description' => 'Comprenda las reglas y regulaciones para usar el sitio web de AutoTalkz.',
        'cannonical' => 'https://autotalkz.com/lang-es/terms-of-service',
    ],
    'it' => [
        'title' => 'Termini di servizio',
        'content' => '<h1>Termini di servizio</h1>
<p>Questi termini di servizio delineano le regole e i regolamenti per l\'utilizzo del sito web di AutoTalkz. Accedendo a questo sito web, si presume che tu accetti questi termini e condizioni nella loro interezza. Non continuare a utilizzare il sito web di AutoTalkz se non accetti tutti i termini e le condizioni elencati in questa pagina.</p>

<p><strong>Utilizzo dei cookie:</strong> Utilizzando AutoTalkz, accetti l\'uso dei cookie in conformità con la nostra <a href="/privacy-policy">politica sulla privacy</a>. La maggior parte dei siti web interattivi utilizza oggi i cookie per recuperare i dettagli dell\'utente per ogni visita.</p>

<p><strong>Licenza:</strong> Salvo diversa indicazione, AutoTalkz possiede i diritti di proprietà intellettuale per tutti i contenuti del sito web. Tutti i diritti di proprietà intellettuale sono riservati. Puoi visualizzare, scaricare e/o stampare pagine per uso personale, soggetto alle restrizioni stabilite in questi termini.</p>

<p><strong>Contenuto dell\'utente:</strong> AutoTalkz non è responsabile per i contenuti generati dagli utenti o per i commenti pubblicati sul sito. Ci riserviamo il diritto di monitorare tutti i contenuti generati dagli utenti e di rimuovere qualsiasi contenuto ritenuto inappropriato o in violazione di questi termini.</p>

<p>Se hai domande o preoccupazioni riguardo a questi termini di servizio, puoi contattarci all\'indirizzo <a href="mailto:info@autotalkz.com">info@autotalkz.com</a>.</p>
',
        'meta_description' => 'Comprendere le regole e i regolamenti per l\'utilizzo del sito web di AutoTalkz.',
        'cannonical' => 'https://autotalkz.com/lang-it/terms-of-service',
    ],
    'pt' => [
        'title' => 'Termos de serviço',
        'content' => '<h1>Termos de serviço</h1>
<p>Estes termos de serviço descrevem as regras e regulamentos para o uso do site da AutoTalkz. Ao acessar este site, presumimos que você aceita estes termos e condições na íntegra. Não continue a usar o site da AutoTalkz se você não aceitar todos os termos e condições estabelecidos nesta página.</p>

<p><strong>Uso de cookies:</strong> Ao utilizar o AutoTalkz, você concorda com o uso de cookies de acordo com a nossa <a href="/privacy-policy">política de privacidade</a>. A maioria dos sites interativos hoje em dia usa cookies para recuperar os detalhes do usuário em cada visita.</p>

<p><strong>Licença:</strong> A menos que seja indicado o contrário, a AutoTalkz possui os direitos de propriedade intelectual para todo o conteúdo do site. Todos os direitos de propriedade intelectual são reservados. Você pode visualizar, baixar e/ou imprimir páginas para uso pessoal, sujeito às restrições estabelecidas nestes termos.</p>

<p><strong>Conteúdo do usuário:</strong> A AutoTalkz não se responsabiliza pelos conteúdos gerados pelos usuários ou comentários postados no site. Reservamo-nos o direito de monitorar todo o conteúdo gerado pelos usuários e remover qualquer conteúdo considerado inapropriado ou em violação destes termos.</p>

<p>Se você tiver alguma dúvida ou preocupação em relação a estes termos de serviço, pode entrar em contato conosco em <a href="mailto:info@autotalkz.com">info@autotalkz.com</a>.</p>
',
        'meta_description' => 'Entenda as regras e regulamentos para o uso do site da AutoTalkz.',
        'cannonical' => 'https://autotalkz.com/lang-pt/terms-of-service',
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
