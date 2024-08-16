<?php
session_start();

include_once $_SERVER['DOCUMENT_ROOT']."/admin/dbconnect.php";
include_once $_SERVER['DOCUMENT_ROOT']."/mods/mainclass.php";

$main = new main();
$main->setLang(isset($_GET['lang']) ? htmlspecialchars($_GET['lang']) : 'eng');
$main->getTags(); // Для SEO тегов

// Определение переводов для политики конфиденциальности
$translations = [
    'eng' => [
        'title' => 'Privacy Policy',
        'content' => '<h1>Privacy Policy</h1>
<p>Welcome to AutoTalkz, your ultimate source for detailed car reviews and histories from around the world. We value your privacy and are committed to being transparent about the data we collect, how it is used, and your rights concerning your data.</p>

<h2>Information Collection</h2>
<p>Our website does not require any form of registration or subscription, and we do not collect personal information from users. The only information collected is that which is automatically gathered by our web server, Apache, during the processing of your request. This information typically includes IP addresses, browser types, referring pages, and the times of page requests. **We do not sell or share this information with third parties.**</p>

<h2>Use of Cookies</h2>
<p>We use cookies solely for the purpose of improving your experience on our website. These cookies help us analyze traffic and user interactions so that we can offer better site experiences and tools in the future. We do not use cookies to collect personal data or to track your browsing behavior across other sites.</p>

<h2>Advertisements</h2>
<p>AutoTalkz is a **completely free website** and relies on advertising to cover the costs of running the site. We display ads provided by Google AdSense. You can learn more about how Google uses your data in advertising by visiting their <a href="https://policies.google.com/technologies/ads" target="_blank">Google Ad Policies</a>. **We do not have access to any personal information used by Google in the ads displayed on our site.**</p>

<h2>Google Analytics</h2>
<p>We use **Google Analytics** to understand how visitors interact with our site. Google Analytics collects information anonymously and reports website trends without identifying individual visitors. To learn more about Google Analytics and how it handles user data, please refer to the <a href="https://support.google.com/analytics/answer/6004245" target="_blank">Google Analytics Privacy Policy</a>.</p>

<h2>Content and Image Sources</h2>
<p>All content on AutoTalkz has been written by **Russian automotive experts** with years of experience in the field of car reviews. The content has been translated into the languages available on the site to reach a broader audience. The images used on our site are sourced from the internet, including old, low-resolution images, and photographs taken by the car manufacturers themselves. The resolution of these images is intentionally kept low to enhance the site\'s loading speed.</p>

<h2>Data Security</h2>
<p>We are committed to ensuring that your information is secure. While we do not collect personal data, we have implemented suitable measures to safeguard and secure any data that is automatically collected during your visit.</p>

<h2>Your Consent</h2>
<p>By using our site, you consent to our privacy policy.</p>

<h2>Changes to Our Privacy Policy</h2>
<p>AutoTalkz reserves the right to update this privacy policy as necessary. Any changes will be posted on this page.</p>

<h2>Contact Us</h2>
<p>If you have any questions or concerns about our privacy policy, please feel free to contact us at <a href="mailto:info@autotalkz.com">info@autotalkz.com</a>.</p>
',
        'meta_description' => 'Learn more about how we handle your personal data on AutoTalkz.',
        'cannonical' => 'https://autotalkz.com/privacy-policy',
    ],
    'de' => [
        'title' => 'Datenschutzerklärung',
        'content' => '<h1>Datenschutzerklärung</h1>
<p>Willkommen bei AutoTalkz, Ihrer ultimativen Quelle für detaillierte Auto-Bewertungen und -Geschichten aus der ganzen Welt. Wir schätzen Ihre Privatsphäre und verpflichten uns, transparent über die von uns gesammelten Daten, deren Verwendung und Ihre Rechte in Bezug auf Ihre Daten zu informieren.</p>

<h2>Datenerfassung</h2>
<p>Unsere Website erfordert keine Registrierung oder Anmeldung, und wir sammeln keine persönlichen Informationen von Nutzern. Die einzigen gesammelten Informationen sind die, die automatisch von unserem Webserver Apache während der Verarbeitung Ihrer Anfrage erfasst werden. Diese Informationen umfassen typischerweise IP-Adressen, Browser-Typen, verweisende Seiten und die Zeitpunkte von Seitenaufrufen. **Wir verkaufen oder teilen diese Informationen nicht mit Dritten.**</p>

<h2>Verwendung von Cookies</h2>
<p>Wir verwenden Cookies ausschließlich, um Ihre Erfahrung auf unserer Website zu verbessern. Diese Cookies helfen uns, den Verkehr und die Interaktionen der Nutzer zu analysieren, damit wir in Zukunft bessere Seiten-Erlebnisse und Tools anbieten können. Wir verwenden Cookies nicht, um persönliche Daten zu sammeln oder Ihr Surfverhalten auf anderen Seiten zu verfolgen.</p>

<h2>Werbung</h2>
<p>AutoTalkz ist eine **vollständig kostenlose Website** und finanziert sich durch Werbung, um die Betriebskosten der Website zu decken. Wir zeigen Anzeigen an, die von Google AdSense bereitgestellt werden. Sie können mehr darüber erfahren, wie Google Ihre Daten in der Werbung verwendet, indem Sie die <a href="https://policies.google.com/technologies/ads" target="_blank">Google-Werberichtlinien</a> besuchen. **Wir haben keinen Zugriff auf persönliche Informationen, die von Google in den auf unserer Seite angezeigten Anzeigen verwendet werden.**</p>

<h2>Google Analytics</h2>
<p>Wir verwenden **Google Analytics**, um zu verstehen, wie Besucher mit unserer Seite interagieren. Google Analytics sammelt Informationen anonym und berichtet über Website-Trends, ohne einzelne Besucher zu identifizieren. Um mehr über Google Analytics und den Umgang mit Benutzerdaten zu erfahren, lesen Sie bitte die <a href="https://support.google.com/analytics/answer/6004245" target="_blank">Datenschutzrichtlinie von Google Analytics</a>.</p>

<h2>Inhalte und Bildquellen</h2>
<p>Alle Inhalte auf AutoTalkz wurden von **russischen Automobil-Experten** mit jahrelanger Erfahrung im Bereich Auto-Bewertungen verfasst. Die Inhalte wurden in die auf der Seite verfügbaren Sprachen übersetzt, um ein breiteres Publikum zu erreichen. Die auf unserer Seite verwendeten Bilder stammen aus dem Internet, einschließlich alter, niedrig auflösender Bilder und von den Autoherstellern selbst aufgenommener Fotografien. Die Auflösung dieser Bilder ist bewusst niedrig gehalten, um die Ladegeschwindigkeit der Seite zu verbessern.</p>

<h2>Datensicherheit</h2>
<p>Wir sind verpflichtet, sicherzustellen, dass Ihre Informationen sicher sind. Obwohl wir keine persönlichen Daten sammeln, haben wir geeignete Maßnahmen ergriffen, um alle Daten zu schützen, die während Ihres Besuchs automatisch erfasst werden.</p>

<h2>Ihre Zustimmung</h2>
<p>Durch die Nutzung unserer Seite stimmen Sie unserer Datenschutzerklärung zu.</p>

<h2>Änderungen an unserer Datenschutzerklärung</h2>
<p>AutoTalkz behält sich das Recht vor, diese Datenschutzerklärung nach Bedarf zu aktualisieren. Alle Änderungen werden auf dieser Seite veröffentlicht.</p>

<h2>Kontaktieren Sie uns</h2>
<p>Wenn Sie Fragen oder Bedenken zu unserer Datenschutzerklärung haben, kontaktieren Sie uns bitte unter <a href="mailto:info@autotalkz.com">info@autotalkz.com</a>.</p>
',
        'meta_description' => 'Erfahren Sie mehr darüber, wie wir Ihre persönlichen Daten bei AutoTalkz behandeln.',
        'cannonical' => 'https://autotalkz.com/lang-de/privacy-policy',
    ],
    'fr' => [
        'title' => 'Politique de confidentialité',
        'content' => '<h1>Politique de confidentialité</h1>
<p>Bienvenue sur AutoTalkz, votre source ultime pour des critiques détaillées et des histoires automobiles du monde entier. Nous respectons votre vie privée et nous nous engageons à être transparents sur les données que nous collectons, leur utilisation et vos droits concernant vos informations personnelles.</p>

<h2>Collecte de données</h2>
<p>Notre site ne nécessite aucune inscription ou connexion, et nous ne collectons aucune information personnelle des utilisateurs. Les seules informations collectées sont celles qui sont automatiquement recueillies par notre serveur web Apache lors du traitement de votre requête. Ces informations incluent généralement des adresses IP, des types de navigateurs, des pages de renvoi et les heures d\'accès. **Nous ne vendons ni ne partageons ces informations avec des tiers.**</p>

<h2>Utilisation des cookies</h2>
<p>Nous utilisons des cookies uniquement pour améliorer votre expérience sur notre site. Ces cookies nous aident à analyser le trafic et les interactions des utilisateurs afin que nous puissions offrir de meilleures expériences de site et des outils à l\'avenir. Nous n\'utilisons pas de cookies pour collecter des informations personnelles ou pour suivre votre navigation sur d\'autres sites.</p>

<h2>Publicité</h2>
<p>AutoTalkz est un site **entièrement gratuit** financé par la publicité pour couvrir les coûts d\'exploitation du site. Nous affichons des publicités fournies par Google AdSense. Vous pouvez en savoir plus sur la manière dont Google utilise vos données dans les publicités en visitant les <a href="https://policies.google.com/technologies/ads" target="_blank">politiques publicitaires de Google</a>. **Nous n\'avons aucun accès aux informations personnelles utilisées par Google dans les publicités affichées sur notre site.**</p>

<h2>Google Analytics</h2>
<p>Nous utilisons **Google Analytics** pour comprendre comment les visiteurs interagissent avec notre site. Google Analytics collecte des informations de manière anonyme et rapporte les tendances du site sans identifier individuellement les visiteurs. Pour en savoir plus sur Google Analytics et la gestion des données des utilisateurs, veuillez consulter la <a href="https://support.google.com/analytics/answer/6004245" target="_blank">politique de confidentialité de Google Analytics</a>.</p>

<h2>Contenu et sources d\'images</h2>
<p>Tout le contenu d\'AutoTalkz a été rédigé par des **experts automobiles russes** avec de nombreuses années d\'expérience dans le domaine des critiques automobiles. Les contenus ont été traduits dans les langues disponibles sur le site pour atteindre un public plus large. Les images utilisées sur notre site proviennent d\'Internet, y compris d\'anciennes images de basse résolution et des photographies prises par les constructeurs automobiles eux-mêmes. La résolution de ces images est délibérément basse pour améliorer la vitesse de chargement du site.</p>

<h2>Sécurité des données</h2>
<p>Nous nous engageons à garantir la sécurité de vos informations. Bien que nous ne collectons pas de données personnelles, nous avons pris des mesures appropriées pour protéger toutes les données collectées automatiquement lors de votre visite.</p>

<h2>Votre consentement</h2>
<p>En utilisant notre site, vous acceptez notre politique de confidentialité.</p>

<h2>Modifications de notre politique de confidentialité</h2>
<p>AutoTalkz se réserve le droit de mettre à jour cette politique de confidentialité si nécessaire. Toutes les modifications seront publiées sur cette page.</p>

<h2>Nous contacter</h2>
<p>Si vous avez des questions ou des préoccupations concernant notre politique de confidentialité, veuillez nous contacter à <a href="mailto:info@autotalkz.com">info@autotalkz.com</a>.</p>
',
        'meta_description' => 'En savoir plus sur la manière dont nous gérons vos données personnelles sur AutoTalkz.',
        'cannonical' => 'https://autotalkz.com/lang-fr/privacy-policy',
    ],
    'es' => [
        'title' => 'Política de privacidad',
        'content' => '<h1>Política de privacidad</h1>
<p>Bienvenido a AutoTalkz, su fuente definitiva para reseñas detalladas e historias de automóviles de todo el mundo. Respetamos su privacidad y estamos comprometidos a ser transparentes sobre los datos que recopilamos, cómo los usamos y sus derechos con respecto a su información personal.</p>

<h2>Recopilación de datos</h2>
<p>Nuestro sitio no requiere registro ni inicio de sesión, y no recopilamos ninguna información personal de los usuarios. La única información que se recopila es la que se recopila automáticamente a través de nuestro servidor web Apache al procesar su solicitud. Esta información generalmente incluye direcciones IP, tipos de navegadores, páginas de referencia y tiempos de acceso. **No vendemos ni compartimos esta información con terceros.**</p>

<h2>Uso de cookies</h2>
<p>Utilizamos cookies únicamente para mejorar su experiencia en nuestro sitio. Estas cookies nos ayudan a analizar el tráfico y las interacciones de los usuarios para que podamos ofrecer mejores experiencias y herramientas en el futuro. No utilizamos cookies para recopilar información personal o para rastrear su navegación en otros sitios.</p>

<h2>Publicidad</h2>
<p>AutoTalkz es un sitio **completamente gratuito** financiado por la publicidad para cubrir los costos de operación del sitio. Mostramos anuncios proporcionados por Google AdSense. Puede obtener más información sobre cómo Google utiliza sus datos en los anuncios visitando las <a href="https://policies.google.com/technologies/ads" target="_blank">políticas publicitarias de Google</a>. **No tenemos acceso a la información personal utilizada por Google en los anuncios que se muestran en nuestro sitio.**</p>

<h2>Google Analytics</h2>
<p>Utilizamos **Google Analytics** para comprender cómo los visitantes interactúan con nuestro sitio. Google Analytics recopila información de manera anónima y reporta las tendencias del sitio sin identificar a los visitantes individualmente. Para obtener más información sobre Google Analytics y la gestión de datos de los usuarios, consulte la <a href="https://support.google.com/analytics/answer/6004245" target="_blank">política de privacidad de Google Analytics</a>.</p>

<h2>Contenido y fuentes de imágenes</h2>
<p>Todo el contenido de AutoTalkz ha sido escrito por **expertos en automóviles rusos** con muchos años de experiencia en el campo de las reseñas de automóviles. Los contenidos se han traducido a los idiomas disponibles en el sitio para llegar a una audiencia más amplia. Las imágenes utilizadas en nuestro sitio provienen de Internet, incluidas imágenes antiguas de baja resolución y fotografías tomadas por los propios fabricantes de automóviles. La resolución de estas imágenes es deliberadamente baja para mejorar la velocidad de carga del sitio.</p>

<h2>Seguridad de los datos</h2>
<p>Nos comprometemos a garantizar la seguridad de su información. Aunque no recopilamos datos personales, hemos tomado medidas adecuadas para proteger todos los datos recopilados automáticamente durante su visita.</p>

<h2>Su consentimiento</h2>
<p>Al utilizar nuestro sitio, usted acepta nuestra política de privacidad.</p>

<h2>Modificaciones a nuestra política de privacidad</h2>
<p>AutoTalkz se reserva el derecho de actualizar esta política de privacidad si es necesario. Todos los cambios se publicarán en esta página.</p>

<h2>Contacte con nosotros</h2>
<p>Si tiene alguna pregunta o inquietud sobre nuestra política de privacidad, comuníquese con nosotros en <a href="mailto:info@autotalkz.com">info@autotalkz.com</a>.</p>
',
        'meta_description' => 'Obtén más información sobre cómo manejamos tus datos personales en AutoTalkz.',
        'cannonical' => 'https://autotalkz.com/lang-es/privacy-policy',
    ],
    'it' => [
        'title' => 'Informativa sulla privacy',
        'content' => '<h1>Informativa sulla privacy</h1>
<p>Benvenuti su AutoTalkz, la tua fonte definitiva per recensioni dettagliate e storie di automobili da tutto il mondo. Rispettiamo la tua privacy e ci impegniamo a essere trasparenti sui dati che raccogliamo, su come li utilizziamo e sui tuoi diritti riguardo alle tue informazioni personali.</p>

<h2>Raccolta dei dati</h2>
<p>Il nostro sito non richiede registrazione o accesso e non raccogliamo informazioni personali dagli utenti. Le uniche informazioni raccolte sono quelle raccolte automaticamente tramite il nostro server web Apache durante l\'elaborazione della tua richiesta. Queste informazioni generalmente includono indirizzi IP, tipi di browser, pagine di riferimento e tempi di accesso. **Non vendiamo né condividiamo queste informazioni con terze parti.**</p>

<h2>Uso dei cookie</h2>
<p>Utilizziamo i cookie esclusivamente per migliorare la tua esperienza sul nostro sito. Questi cookie ci aiutano ad analizzare il traffico e le interazioni degli utenti in modo da poter offrire migliori esperienze e strumenti in futuro. Non utilizziamo i cookie per raccogliere informazioni personali o per tracciare la tua navigazione su altri siti.</p>

<h2>Pubblicità</h2>
<p>AutoTalkz è un sito **completamente gratuito** finanziato dalla pubblicità per coprire i costi di gestione del sito. Mostriamo annunci forniti da Google AdSense. Puoi ottenere maggiori informazioni su come Google utilizza i tuoi dati negli annunci visitando le <a href="https://policies.google.com/technologies/ads" target="_blank">politiche pubblicitarie di Google</a>. **Non abbiamo accesso alle informazioni personali utilizzate da Google negli annunci visualizzati sul nostro sito.**</p>

<h2>Google Analytics</h2>
<p>Utilizziamo **Google Analytics** per comprendere come i visitatori interagiscono con il nostro sito. Google Analytics raccoglie informazioni in modo anonimo e segnala le tendenze del sito senza identificare individualmente i visitatori. Per ulteriori informazioni su Google Analytics e sulla gestione dei dati degli utenti, consulta la <a href="https://support.google.com/analytics/answer/6004245" target="_blank">politica sulla privacy di Google Analytics</a>.</p>

<h2>Contenuti e fonti delle immagini</h2>
<p>Tutti i contenuti di AutoTalkz sono stati scritti da **esperti automobilistici russi** con molti anni di esperienza nel campo delle recensioni automobilistiche. I contenuti sono stati tradotti nelle lingue disponibili sul sito per raggiungere un pubblico più ampio. Le immagini utilizzate sul nostro sito provengono da Internet, incluse immagini vecchie a bassa risoluzione e fotografie scattate dalle stesse case automobilistiche. La risoluzione di queste immagini è deliberatamente bassa per migliorare la velocità di caricamento del sito.</p>

<h2>Sicurezza dei dati</h2>
<p>Ci impegniamo a garantire la sicurezza delle tue informazioni. Sebbene non raccogliamo dati personali, abbiamo adottato misure adeguate per proteggere tutti i dati raccolti automaticamente durante la tua visita.</p>

<h2>Il tuo consenso</h2>
<p>Utilizzando il nostro sito, accetti la nostra informativa sulla privacy.</p>

<h2>Modifiche alla nostra informativa sulla privacy</h2>
<p>AutoTalkz si riserva il diritto di aggiornare questa informativa sulla privacy se necessario. Tutte le modifiche verranno pubblicate su questa pagina.</p>

<h2>Contattaci</h2>
<p>Se hai domande o dubbi sulla nostra informativa sulla privacy, contattaci all\'indirizzo <a href="mailto:info@autotalkz.com">info@autotalkz.com</a>.</p>
',
        'meta_description' => 'Scopri di più su come gestiamo i tuoi dati personali su AutoTalkz.',
        'cannonical' => 'https://autotalkz.com/lang-it/privacy-policy',
    ],
    'pt' => [
        'title' => 'Política de Privacidade',
        'content' => '<h1>Política de Privacidade</h1>
<p>Bem-vindo ao AutoTalkz, sua fonte definitiva para análises detalhadas e histórias de automóveis de todo o mundo. Respeitamos sua privacidade e estamos comprometidos em ser transparentes sobre os dados que coletamos, como os utilizamos e seus direitos em relação às suas informações pessoais.</p>

<h2>Coleta de Dados</h2>
<p>Nosso site não exige registro ou login e não coletamos informações pessoais dos usuários. As únicas informações coletadas são aquelas coletadas automaticamente por meio do nosso servidor web Apache durante o processamento de sua solicitação. Essas informações geralmente incluem endereços IP, tipos de navegador, páginas de referência e tempos de acesso. **Não vendemos nem compartilhamos essas informações com terceiros.**</p>

<h2>Uso de Cookies</h2>
<p>Utilizamos cookies exclusivamente para melhorar sua experiência em nosso site. Esses cookies nos ajudam a analisar o tráfego e as interações dos usuários para que possamos oferecer melhores experiências e ferramentas no futuro. Não utilizamos cookies para coletar informações pessoais ou rastrear sua navegação em outros sites.</p>

<h2>Publicidade</h2>
<p>AutoTalkz é um site **totalmente gratuito**, financiado por publicidade para cobrir os custos de operação do site. Exibimos anúncios fornecidos pelo Google AdSense. Você pode obter mais informações sobre como o Google utiliza seus dados em anúncios visitando as <a href="https://policies.google.com/technologies/ads" target="_blank">políticas de publicidade do Google</a>. **Não temos acesso a informações pessoais utilizadas pelo Google nos anúncios exibidos em nosso site.**</p>

<h2>Google Analytics</h2>
<p>Utilizamos **Google Analytics** para entender como os visitantes interagem com nosso site. O Google Analytics coleta informações de forma anônima e relata as tendências do site sem identificar individualmente os visitantes. Para mais informações sobre o Google Analytics e o gerenciamento de dados do usuário, consulte a <a href="https://support.google.com/analytics/answer/6004245" target="_blank">política de privacidade do Google Analytics</a>.</p>

<h2>Conteúdos e Fontes das Imagens</h2>
<p>Todo o conteúdo do AutoTalkz foi escrito por **especialistas automobilísticos russos** com muitos anos de experiência em análises de automóveis. Os conteúdos foram traduzidos para os idiomas disponíveis no site para alcançar um público mais amplo. As imagens utilizadas em nosso site são provenientes da Internet, incluindo imagens antigas de baixa resolução e fotografias tiradas pelas próprias montadoras de automóveis. A resolução dessas imagens é deliberadamente baixa para melhorar a velocidade de carregamento do site.</p>

<h2>Segurança dos Dados</h2>
<p>Estamos comprometidos em garantir a segurança das suas informações. Embora não coletemos dados pessoais, tomamos medidas adequadas para proteger todos os dados coletados automaticamente durante sua visita.</p>

<h2>Seu Consentimento</h2>
<p>Ao usar nosso site, você concorda com nossa política de privacidade.</p>

<h2>Alterações à Nossa Política de Privacidade</h2>
<p>AutoTalkz reserva-se o direito de atualizar esta política de privacidade conforme necessário. Todas as alterações serão publicadas nesta página.</p>

<h2>Entre em Contato Conosco</h2>
<p>Se você tiver perguntas ou preocupações sobre nossa política de privacidade, entre em contato conosco pelo e-mail <a href="mailto:info@autotalkz.com">info@autotalkz.com</a>.</p>
',
        'meta_description' => 'Saiba mais sobre como lidamos com seus dados pessoais no AutoTalkz.',
        'cannonical' => 'https://autotalkz.com/lang-pt/privacy-policy',
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
