<footer id="footer">
      <div class="container">
      <div class="footer-menu-list">
      <div class="list d-flex justify-content-between">
    <div class="ftco-footer-widget">
        <?php if ( is_active_sidebar( 'footer-widget-area-1' ) ) : ?>
            <?php dynamic_sidebar( 'footer-widget-area-1' ); ?>
        <?php endif; ?>
    </div>
    <div class="ftco-footer-widget">
        <?php if ( is_active_sidebar( 'footer-widget-area-2' ) ) : ?>
            <?php dynamic_sidebar( 'footer-widget-area-2' ); ?>
        <?php endif; ?>
    </div>
</div>
          <div class="row d-flex flex-wrap justify-content-between">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="footer-menu">
                <h5 class="widget-title">Ultras</h5>
                <ul class="menu-list list-unstyled">
                  <li class="menu-item">
                    <a href="<?= get_template_directory_uri() ?>about.html">About us</a>
                  </li>
                  <li class="menu-item">
                    <a href="#">Conditions </a>
                  </li>
                  <li class="menu-item">
                    <a href="<?= get_template_directory_uri() ?>blog.html">Our Journals</a>
                  </li>
                  <li class="menu-item">
                    <a href="#">Careers</a>
                  </li>
                  <li class="menu-item">
                    <a href="#">Affiliate Programme</a>
                  </li>
                  <li class="menu-item">
                    <a href="#">Ultras Press</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="footer-menu">
                <h5 class="widget-title">Customer Service</h5>
                <ul class="menu-list list-unstyled">
                  <li class="menu-item">
                    <a href="<?= get_template_directory_uri() ?>/faqs.html">FAQ</a>
                  </li>
                  <li class="menu-item">
                    <a href="<?= get_template_directory_uri() ?>/contact.html">Contact</a>
                  </li>
                  <li class="menu-item">
                    <a href="#">Privacy Policy</a>
                  </li>
                  <li class="menu-item">
                    <a href="#">Returns & Refunds</a>
                  </li>
                  <li class="menu-item">
                    <a href="#">Cookie Guidelines</a>
                  </li>
                  <li class="menu-item">
                    <a href="#">Delivery Information</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="footer-menu">
                <h5 class="widget-title">Contact Us</h5>
                <p>Do you have any questions or suggestions? <a href="#" class="email">ourservices@ultras.com</a>
                </p>
                <p>Do you need assistance? Give us a call. <br>
                  <strong>+57 444 11 00 35</strong>
                </p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="footer-menu">
                <h5 class="widget-title">Forever 2018</h5>
                <p>Cras mattis sit ornare in metus eu amet adipiscing enim. Ullamcorper in orci, ultrices integer eget arcu. Consectetur leo dignissim lacus, lacus sagittis dictumst.</p>
                <div class="social-links">
                  <ul class="d-flex list-unstyled">
                    <li>
                      <a href="#">
                        <i class="icon icon-facebook"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="icon icon-twitter"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="icon icon-youtube-play"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="icon icon-behance-square"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <hr>
    </footer>

    <div id="footer-bottom">
      <div class="container">
        <div class="d-flex align-items-center flex-wrap justify-content-between">
          <div class="copyright">
            <p>Freebies by <a href="https://templatesjungle.com/">Templates Jungle</a> Distributed by <a href="https://themewagon.com">ThemeWagon</a>
            </p>
          </div>
          <div class="payment-method">
            <p>Payment options :</p>
            <div class="card-wrap">
              <img src="<?= get_template_directory_uri() ?>/images/visa-icon.jpg" alt="visa">
              <img src="<?= get_template_directory_uri() ?>/images/mastercard.png" alt="mastercard">
              <img src="<?= get_template_directory_uri() ?>/images/american-express.jpg" alt="american-express">
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="<?= get_template_directory_uri() ?>/js/jquery-1.11.0.min.js"></script>
    <script src="<?= get_template_directory_uri() ?>/js/plugins.js"></script>
    <script src="<?= get_template_directory_uri() ?>/js/script.js"></script>
  </body>
</html>