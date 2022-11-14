<?php wp_footer(); ?>
<footer class="site-footer archive-footer">
  <div class="container">
    <div class="row">

      <div class="col date">
        <?php echo date(get_option('date_format')); ?>
      </div>

      <div class="col-6">
        <?php
            if(has_nav_menu('footer-middle')){?>
              <nav class="footer-menu">
                <ul>
                  <?php
                    wp_nav_menu(array(
                      'theme_location' => 'footer-middle'
                    ));
                  ?>
                </ul>
              </nav>
            <?php }else{
              echo "<p>Select Menu!</p>";
            }?>
      </div>

      <div class="col">
        <?php
            if(has_nav_menu('footer-right')){?>
              <nav class="footer-menu">
                <ul>
                  <?php
                    wp_nav_menu(array(
                      'theme_location' => 'footer-right'
                    ));
                  ?>
                </ul>
              </nav>
            <?php }else{
              echo "<p>Select Menu!</p>";
            }?>
      </div>

    </div>
  </div>
</footer>
  </body>
</html>
