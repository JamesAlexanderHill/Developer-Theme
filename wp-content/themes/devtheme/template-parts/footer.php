      <!-- start footer.php -->
      <footer class="page-width">
        <?php
        wp_nav_menu(
          array(
            'theme_location' => 'main-menu',
            'container' => 'nav',
            'container_id' => 'footer-nav',
            'fallback_cb' => false
          )
        );
        ?>
        <!-- <nav id="footer-nav">
          <ul>
            <li><a href="#">About Me</a></li>
            <li><a href="#">Resume</a></li>
            <li><a href="#">Projects</a></li>
            <li><a href="#">Dev-Notes</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </nav> -->
        <?php
        wp_nav_menu(
          array(
            'theme_location' => 'social-menu',
            'container' => 'nav',
            'container_id' => 'social-nav',
            'fallback_cb' => false
          )
        );
        ?>
        <!-- <nav id="social-nav">
          <ul>
            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fab fa-github-square"></i></a></li>
            <li><a href="#"><i class="fas fa-envelope-square"></i></a></li>
          </ul>
        </nav> -->
      </footer>
    </div>
    <?php wp_footer(); ?>
  </body>
</html>
<!-- end footer.php -->
