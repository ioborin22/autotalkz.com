
		</div>
		<div class="right">
			<h3>Other languiges:</h3>
			<?php echo $lang_page; ?>
			
			<a target="_blank" href="https://getwab.com?utm_source=autotalkz&utm_medium=referral&utm_campaign=link_from_autotalkz">
				<figure>
					<img height="150" src="https://ruogp.me/getwab.gif" alt="GETWAB free dating and chat">
					<figcaption>GETWAB.COM Free Dating</figcaption>
				</figure>
			</a>

			<h3>Select category:</h3>
				<div class="right_menu">
                    <?php echo $cats; ?>
					<div class="cl"></div>
				</div>
			<div class="floating1">
				<h3 style="margin-top:20px;">Advertising!</h3>
			</div>
	</div>
	<div class="cl"></div>
</div>
</section>
<footer itemscope itemtype="http://schema.org/WPFooter" id="footer">
	<div class="footer">
		<div class="footer_vn">
			<div class="copy">
				&copy; <?php echo date("Y"); ?> autotalkz.com, all right reserved. Languages: <?php echo $lang_page; ?>
			</div>
			<div class="fss">
			</div>
			<div class="cl"></div>
		</div>
	</div>
</footer>
</body>
</html>
<!-- Google tag (gtag.js) START -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-SEVVRFEESC"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-SEVVRFEESC');
</script>
<!-- Google tag (gtag.js) END -->
<script type="text/javascript">
            function addLink() {
                var body_element = document.getElementsByTagName('body')[0];
                var selection;
                selection = window.getSelection();
                var pagelink = "<br /><br /> Source: <a href='" + document.location.href + "'>https://autotalkz.com/</a><br />";
                var copytext = selection + pagelink;
                var newdiv = document.createElement('div');
                newdiv.style.position = 'absolute';
                newdiv.style.left = '-99999px';
                body_element.appendChild(newdiv);
                newdiv.innerHTML = copytext;
                selection.selectAllChildren(newdiv);
                window.setTimeout(function () {
                    body_element.removeChild(newdiv);
                }, 0);
            }

            document.oncopy = addLink;
</script>