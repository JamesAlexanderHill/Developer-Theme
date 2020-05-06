      <!-- start footer.php -->
      <footer class="page-width">
        <nav id="footer-nav">
          <!-- <ul>
            <li><a href="#">About Me</a></li>
            <li><a href="#">Resume</a></li>
            <li><a href="#">Projects</a></li>
            <li><a href="#">Dev-Notes</a></li>
            <li><a href="#">Contact</a></li>
          </ul> -->
          <?php
          wp_nav_menu(
            array(
              'theme_location' => 'main-menu',
              'theme_location' => '__no_such_location',
              'fallback_cb' => false
            )
          );
          ?>
        </nav>
        <nav id="social-nav">
          <!-- <ul>
            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fab fa-github-square"></i></a></li>
            <li><a href="#"><i class="fas fa-envelope-square"></i></a></li>
          </ul> -->
          <?php
          wp_nav_menu(
            array(
              'theme_location' => 'social-menu',
              'theme_location' => '__no_such_location',
              'fallback_cb' => false
            )
          );
          ?>
        </nav>
      </footer>
    </div>
    <?php wp_footer(); ?>
  </body>
</html>
<!-- end footer.php -->
