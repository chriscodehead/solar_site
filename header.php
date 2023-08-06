<header class="section page-header">
  <!--RD Navbar-->
  <div class="rd-navbar-wrap">
    <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-xl-stick-up-offset="12px" data-xxl-stick-up-offset="12px" data-xl-stick-up="true" data-xxl-stick-up="true">
      <!--.rd-navbar-collapse-toggle.rd-navbar-fixed-element-1( data-rd-navbar-toggle='.rd-navbar-collapse' ): span-->
      <div class="rd-navbar-main-outer">
        <div class="rd-navbar-main">
          <!--RD Navbar Panel-->
          <div class="rd-navbar-panel">
            <!--RD Navbar Toggle-->
            <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
            <!--RD Navbar Brand-->
            <div class="rd-navbar-brand">
              <!--Brand--><a class="brand" href="./">
                <img class="brand-logo-dark" src="img/logo.png" alt width="114" height="58" loading="lazy">
                <img class="brand-logo-light" src="img/logo.png" alt width="114" height="58" loading="lazy"></a>
            </div>
          </div>
          <div class="rd-navbar-main-element">
            <div class="rd-navbar-nav-wrap">
              <ul class="rd-navbar-nav">

                <li class="rd-nav-item <?php print @$active1; ?>"><a class="rd-nav-link" href="./">Home</a>
                </li>

                <li class="rd-nav-item <?php print @$active2; ?>"><a class="rd-nav-link">About</a>
                  <ul class="rd-menu rd-navbar-dropdown">
                    <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="about">Who we are</a>
                    </li>
                    <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="team">Team</a>
                    </li>
                    <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="testimonials">Testimonials</a>
                    </li>
                    <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="solutions">Solutions</a>
                    </li>
                  </ul>
                </li>

                <li class="rd-nav-item <?php print @$active3; ?>"><a class="rd-nav-link" href="services">Services</a>
                  <ul class="rd-menu rd-navbar-dropdown">
                    <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="services">Services</a>
                    </li>
                  </ul>
                </li>

                <li class="rd-nav-item <?php print @$active4; ?>"><a class="rd-nav-link">Gallery</a>
                  <ul class="rd-menu rd-navbar-dropdown">
                    <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="gallery">Gallery</a>
                    </li>
                  </ul>
                </li>

                <li style="display: none;" class="rd-nav-item"><a class="rd-nav-link" href="blog-1.html">Blog</a>
                  <ul class="rd-menu rd-navbar-dropdown">
                    <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="blog-1.html">Blog 1</a>
                    </li>
                    <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="blog-2.html">Blog 2</a>
                    </li>
                    <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="blog-3.html">Blog 3</a>
                    </li>
                    <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="blog-4.html">Blog 4</a>
                    </li>
                    <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="single-post.html">Single post</a>
                    </li>
                  </ul>
                </li>

                <li class="rd-nav-item <?php print @$active5; ?>"><a class="rd-nav-link" href="contacts">Contacts</a>
                </li>
              </ul>
            </div>
            <div class="navbar-subpanel">
              <div style="display: none;" class="navbar-subpanel-item">
                <div class="rd-navbar-search">
                  <button class="rd-navbar-search-toggle" data-rd-navbar-toggle=".rd-navbar-search">
                    <svg class="icon-svg-stroke rd-navbar-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M19 11C19 15.4183 15.4183 19 11 19C6.58172 19 3 15.4183 3 11C3 6.58172 6.58172 3 11 3C15.4183 3 19 6.58172 19 11Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                      <path d="M21 21L17 17" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg><span></span>
                  </button>
                  <form class="rd-search" action="search-results.html" data-search-live="rd-search-results-live" method="GET">
                    <div class="form-wrap">
                      <label class="form-label" for="rd-navbar-search-form-input">Search</label>
                      <input class="rd-navbar-search-form-input form-input" id="rd-navbar-search-form-input" type="text" name="s" autocomplete="off">
                      <div class="rd-search-results-live" id="rd-search-results-live"></div>
                    </div>
                    <button class="rd-search-form-submit" type="submit">
                      <svg class="icon-svg-stroke" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19 11C19 15.4183 15.4183 19 11 19C6.58172 19 3 15.4183 3 11C3 6.58172 6.58172 3 11 3C15.4183 3 19 6.58172 19 11Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M21 21L17 17" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                      </svg>
                    </button>
                  </form>
                </div>
              </div>
              <div style="display: none;" class="navbar-subpanel-item">
                <button class="btn btn-light-outline btn-sm" data-custom-toggle=".navbar-cart" data-custom-toggle-disable-on-blur="true"><span class="btn-icon">
                    <svg class="icon-svg-stroke rd-navbar-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M8 21C9.10457 21 10 20.1046 10 19C10 17.8954 9.10457 17 8 17C6.89543 17 6 17.8954 6 19C6 20.1046 6.89543 21 8 21Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                      <path d="M18 21C19.1046 21 20 20.1046 20 19C20 17.8954 19.1046 17 18 17C16.8954 17 16 17.8954 16 19C16 20.1046 16.8954 21 18 21Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                      <path d="M4 3H6.8L8.676 12.8191C8.74001 13.1567 8.91534 13.46 9.17128 13.6758C9.42723 13.8917 9.74749 14.0063 10.076 13.9997H15.48C15.8085 14.0063 16.1288 13.8917 16.3847 13.6758C16.6407 13.46 16.816 13.1567 16.88 12.8191L18 6.66658H7.5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg></span><span>Cart: 0</span></button>
                <div class="navbar-cart">
                  <h3 class="navbar-cart-title">My Cart</h3>
                  <div class="navbar-cart-list">
                    <div class="navbar-cart-item">
                      <div class="navbar-cart-item-figure"><a class="link-img" href="single-product.html"><img src="images/product-navbar-01-90x90.jpg" alt width="90" height="90" loading="lazy"></a></div>
                      <div class="navbar-cart-item-body">
                        <div class="navbar-cart-item-title"><a href="single-product.html">On the other hand dislike and charms</a></div>
                        <div class="navbar-cart-item-details"><span class="navbar-cart-item-quantity">1</span><span class="navbar-cart-item-divider">x</span><span class="navbar-cart-item-price">$12.00</span></div>
                      </div>
                      <div class="navbar-cart-item-delete"><a class="product-delete-button" href="#">
                          <svg class="icon-svg-stroke" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 6H5H21" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M8 6V4C8 3.46957 8.21071 2.96086 8.58579 2.58579C8.96086 2.21071 9.46957 2 10 2H14C14.5304 2 15.0391 2.21071 15.4142 2.58579C15.7893 2.96086 16 3.46957 16 4V6M19 6V20C19 20.5304 18.7893 21.0391 18.4142 21.4142C18.0391 21.7893 17.5304 22 17 22H7C6.46957 22 5.96086 21.7893 5.58579 21.4142C5.21071 21.0391 5 20.5304 5 20V6H19Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M10 11V17" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M14 11V17" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                          </svg></a>
                      </div>
                    </div>
                    <div class="navbar-cart-item">
                      <div class="navbar-cart-item-figure"><a class="link-img" href="single-product.html"><img src="images/product-navbar-02-90x90.jpg" alt width="90" height="90" loading="lazy"></a></div>
                      <div class="navbar-cart-item-body">
                        <div class="navbar-cart-item-title"><a href="single-product.html">On the other hand dislike and by the charms</a></div>
                        <div class="navbar-cart-item-details"><span class="navbar-cart-item-quantity">1</span><span class="navbar-cart-item-divider">x</span><span class="navbar-cart-item-price">$12.00</span></div>
                      </div>
                      <div class="navbar-cart-item-delete"><a class="product-delete-button" href="#">
                          <svg class="icon-svg-stroke" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 6H5H21" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M8 6V4C8 3.46957 8.21071 2.96086 8.58579 2.58579C8.96086 2.21071 9.46957 2 10 2H14C14.5304 2 15.0391 2.21071 15.4142 2.58579C15.7893 2.96086 16 3.46957 16 4V6M19 6V20C19 20.5304 18.7893 21.0391 18.4142 21.4142C18.0391 21.7893 17.5304 22 17 22H7C6.46957 22 5.96086 21.7893 5.58579 21.4142C5.21071 21.0391 5 20.5304 5 20V6H19Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M10 11V17" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M14 11V17" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                          </svg></a>
                      </div>
                    </div>
                  </div>
                  <hr class="navbar-cart-divider">
                  <div class="navbar-cart-buttons"><a class="btn btn-dark btn-block" href="checkout.html">Checkout</a><a class="btn btn-primary btn-block" href="cart-page-1.html">View Cart</a></div>
                </div>
              </div>
              <div class="navbar-subpanel-item"><a class="btn btn-light btn-sm" href="contacts"><span class="btn-icon">
                    <svg class="icon-svg-stroke rd-navbar-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M5 21V20C5 16.134 8.13401 13 12 13V13C15.866 13 19 16.134 19 20V21" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                      <path d="M12 11C14.2091 11 16 9.20914 16 7C16 4.79086 14.2091 3 12 3C9.79086 3 8 4.79086 8 7C8 9.20914 9.79086 11 12 11Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg></span><span>Request A Quote</span></a></div>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </div>
</header>