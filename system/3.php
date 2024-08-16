
		</div>
		<div class="right">
			<h3>Other languiges:</h3>
			<?php echo $lang_page; ?>
			<h3>Select category:</h3>
				<div class="right_menu">
                    <?php echo $cats; ?>
					<div class="cl"></div>
				</div>

	</div>
	<div class="cl"></div>
</div>
</section>
<?php
$lang_map = [
    'eng' => 'en',
    'de' => 'de',
    'fr' => 'fr',
    'es' => 'es',
    'it' => 'it',
    'pt' => 'pt'
];

$google_lang = isset($lang_map[$main->lang]) ? $lang_map[$main->lang] : 'en';
?>

<footer id="footer" itemscope itemtype="http://schema.org/WPFooter">
    <div class="footer">
        <div class="footer_vn">
            <div class="footer_column">
                <div class="site_description">
                    AutoTalkz is your ultimate source for detailed reviews and histories of cars from around the world. Explore specifications, photos, and more!
                </div>
                <div class="footer_links">
                    <a href="/about-us/">About Us</a> |
                    <a href="/privacy-policy/">Privacy Policy</a> |
                    <a href="/cookie-policy/">Cookie Policy</a> |
                    <a href="/terms-of-service/">Terms of Service</a> |
                    <a href="/disclaimer/">Disclaimer</a> |
                    <a href="https://policies.google.com/privacy?hl=<?php echo $google_lang; ?>" target="_blank">Google Privacy Policy</a> |
                    <a href="https://support.google.com/analytics/answer/6004245?hl=<?php echo $google_lang; ?>" target="_blank">Google Analytics</a> |
                    <a href="https://support.google.com/adsense/answer/1348695?hl=<?php echo $google_lang; ?>" target="_blank">Google AdSense</a>
                </div>
            </div>
            <div class="footer_column">
                <div class="footer_languages">
                    Languages: <?php echo $lang_page; ?>
                </div>
            </div>
            <div class="footer_column">
                <div class="copy">
                    &copy; <?php echo date("Y"); ?> autotalkz.com, all rights reserved.
                </div>
            </div>
            <div class="cl"></div>
        </div>
    </div>
</footer>



<div id="cookieConsent">
            <div id="closeCookieConsent">×</div>
                <h2 id="cookieTitle"></h2>
                <p id="cookieText"></p>
            <div class="button-container">
                <button id="acceptCookies"></button>
            </div>
        </div>

<script>
document.addEventListener("DOMContentLoaded", function(){
    const translations = {
        "en": {
            "title": "We Value Your Privacy",
            "text": "This website uses cookies to ensure you get the best experience on our website. By continuing to browse, you agree to the use of cookies. We use cookies to personalize content, provide social media features, and analyze our traffic. For more information, please review our <a href='/privacy-policy/' target='_blank'>Privacy Policy</a> and <a href='/cookie-policy/' target='_blank'>Cookie Policy</a>.",
            "button": "Accept and Continue"
        },
        "de": {
            "title": "Wir schätzen Ihre Privatsphäre",
            "text": "Diese Website verwendet Cookies, um sicherzustellen, dass Sie die beste Erfahrung auf unserer Website machen. Durch das Weiterblättern stimmen Sie der Verwendung von Cookies zu. Wir verwenden Cookies, um Inhalte zu personalisieren, Funktionen für soziale Medien bereitzustellen und unseren Datenverkehr zu analysieren. Weitere Informationen finden Sie in unserer <a href='/privacy-policy/' target='_blank'>Datenschutzerklärung</a> und <a href='/cookie-policy/' target='_blank'>Cookie-Richtlinie</a>.",
            "button": "Akzeptieren und fortfahren"
        },
        "fr": {
            "title": "Nous apprécions votre vie privée",
            "text": "Ce site utilise des cookies pour vous garantir la meilleure expérience sur notre site. En continuant à naviguer, vous acceptez l'utilisation de cookies. Nous utilisons des cookies pour personnaliser le contenu, fournir des fonctionnalités de médias sociaux et analyser notre trafic. Pour plus d'informations, veuillez consulter notre <a href='/privacy-policy/' target='_blank'>Politique de confidentialité</a> et notre <a href='/cookie-policy/' target='_blank'>Politique relative aux cookies</a>.",
            "button": "Accepter et continuer"
        },
        "es": {
            "title": "Valoramos su privacidad",
            "text": "Este sitio web utiliza cookies para garantizar que obtenga la mejor experiencia en nuestro sitio web. Al continuar navegando, acepta el uso de cookies. Utilizamos cookies para personalizar el contenido, proporcionar funciones de redes sociales y analizar nuestro tráfico. Para obtener más información, consulte nuestra <a href='/privacy-policy/' target='_blank'>Política de privacidad</a> y <a href='/cookie-policy/' target='_blank'>Política de cookies</a>.",
            "button": "Aceptar y continuar"
        },
        "it": {
            "title": "Apprezziamo la tua privacy",
            "text": "Questo sito utilizza i cookie per garantire la migliore esperienza possibile sul nostro sito web. Continuando a navigare, accetti l'uso dei cookie. Utilizziamo i cookie per personalizzare i contenuti, fornire funzionalità di social media e analizzare il nostro traffico. Per maggiori informazioni, consulta la nostra <a href='/privacy-policy/' target='_blank'>Informativa sulla privacy</a> e la nostra <a href='/cookie-policy/' target='_blank'>Politica sui cookie</a>.",
            "button": "Accetta e continua"
        },
        "pt": {
            "title": "Valorizamos sua privacidade",
            "text": "Este site usa cookies para garantir que você obtenha a melhor experiência em nosso site. Ao continuar navegando, você concorda com o uso de cookies. Usamos cookies para personalizar o conteúdo, fornecer recursos de mídia social e analisar nosso tráfego. Para mais informações, consulte nossa <a href='/privacy-policy/' target='_blank'>Política de Privacidade</a> e nossa <a href='/cookie-policy/' target='_blank'>Política de Cookies</a>.",
            "button": "Aceitar e continuar"
        }
    };

    const lang = document.documentElement.lang || "en";

    const cookieTitle = document.getElementById("cookieTitle");
    const cookieText = document.getElementById("cookieText");
    const acceptButton = document.getElementById("acceptCookies");

    if (translations[lang]) {
        cookieTitle.innerHTML = translations[lang].title;
        const prefix = lang !== "en" ? `/lang-${lang}/` : '/';
        cookieText.innerHTML = translations[lang].text.replace(/href='\//g, `href='${prefix}`);
        acceptButton.innerHTML = translations[lang].button;
    } else {
        cookieTitle.innerHTML = translations["en"].title;
        cookieText.innerHTML = translations["en"].text;
        acceptButton.innerHTML = translations["en"].button;
    }

    const consentCookie = getCookie("acceptCookies");

    if (consentCookie) {
        document.getElementById("cookieConsent").style.display = "none";
    }

    acceptButton.onclick = function() {
        setCookie("acceptCookies", true, 365);
        document.getElementById("cookieConsent").style.display = "none";
    }

    document.getElementById("closeCookieConsent").onclick = function() {
        document.getElementById("cookieConsent").style.display = "none";
    }

    function setCookie(cname, cvalue, exdays) {
        var d = new Date();
        d.setTime(d.getTime() + (exdays*24*60*60*1000));
        var expires = "expires="+ d.toUTCString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }

    function getCookie(cname) {
        var name = cname + "=";
        var ca = document.cookie.split(';');
        for(var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }
});
</script>


</body>
</html>
<script>
document.addEventListener("copy", function(e) {
    const selection = window.getSelection().toString();
    const pagelink = `\n\nSource: https://autotalkz.com${window.location.pathname}\n`;
    const copytext = `${selection}${pagelink}`;
    
    e.clipboardData.setData('text/plain', copytext);
    e.preventDefault();
});
</script>