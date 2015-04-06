<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package pekcell
 */
?>
	<footer>
      <div class="container">
        <div class="row">
          <div class="col-sm-4">
            <ul>
              <li><a href="#">INICIO</a></li>
              <li><a href="#">PINKOST</a></li>
              <li><a href="#">KOSTABLE</a></li>
              <li><a href="#">GAMEKOST</a></li>
            </ul>
          </div>
          <div class="col-sm-4">
            <ul>
              <li><a href="#">VSPKOST</a></li>
              <li><a href="#">APPKOST</a></li>
              <li><a href="#">OFICINA VIRTUAL</a></li>
            </ul>
          </div>
          <div class="col-sm-4">
            <div class="logo">
              <img width="100px" height="100px" src="<?php echo get_template_directory_uri(); ?>/images/LogoPekCell.png">
            </div>
          </div>
        </div>
        <p>© 2015 </p>
      </div>
    </footer>
    <script src="scripts/vendor.js"></script>
    <script src="scripts/main.js"></script>
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
    (function(b, o, i, l, e, r) {
        b.GoogleAnalyticsObject = l;
        b[l] || (b[l] =
            function() {
                (b[l].q = b[l].q || []).push(arguments)
            });
        b[l].l = +new Date;
        e = o.createElement(i);
        r = o.getElementsByTagName(i)[0];
        e.src = '//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e, r)
    }(window, document, 'script', 'ga'));
    ga('create', 'UA-XXXXX-X');
    ga('send', 'pageview');
    </script>
<?php wp_footer(); ?>
</body>
</html>