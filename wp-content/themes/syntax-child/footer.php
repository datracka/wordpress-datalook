Theme: Syntax by Automattic.<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Syntax
 */
?>

	</div><!-- #main -->
	<footer id="colophon" class="site-footer" role="contentinfo">
		<?php if ( has_nav_menu( 'secondary' ) ) : ?>
			<div class="secondary-navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'secondary', 'depth' => 1 ) ); ?>
			</div>
		<?php endif; ?>
		<div class="site-info">
			</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(["setDocumentTitle", document.domain + "/" + document.title]);
  _paq.push(["setDomains", ["*.blog.datalook.io"]]);
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//piwik.vicensfayos.com/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', 3]);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<noscript><p><img src="//piwik.vicensfayos.com/piwik.php?idsite=3" style="border:0;" alt="" /></p></noscript>
<!-- End Piwik Code -->

</body>
</html>