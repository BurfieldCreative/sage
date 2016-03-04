<footer class="footer">
  <div class="container row island">
    <div class='address nav-footer col-12 col-6-tablet col-4-desktop'>
      this will be the address
    </div>
    <nav class="nav-footer col-12 col-6-tablet col-4-desktop">
      <?php
      if (has_nav_menu('secondary_navigation')) :
        wp_nav_menu(['theme_location' => 'secondary_navigation', 'menu_class' => 'footer-menu']);
      endif;
      ?>
    </nav>

  </div>
  <div class="island-half sub-footer">
    <div class="col-12 col-6-tablet">
      <span class="site-colophon site-colophon--copyright">
        Copyright © 2016 Original Base theme
      </span>
    </div>
    <div class="col-12 col-6-tablet text-right">
      <span class="site-scredit-wrap">
        Designed &amp; Developed by <a rel="nofollow" class="site-credit site-credit--dark" target="_blank" href="#" title="Web Design Bath">Burfield<span class="vh"> - Web Design Bath</span></a>
      </span>
    </div>
</footer>
