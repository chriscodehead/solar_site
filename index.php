<?php
require_once('library.php');
$active1 = 'active';
$title = 'We provide the first-class solar energy solutions to families and businesses across the - ' . $siteName;
require_once('head.php'); ?>

<body>
  <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
  <div class="preloader">
    <div class="preloader-body">
      <div class="cssload-container">
        <div class="cssload-speeding-wheel"></div>
      </div>
    </div>
  </div>
  <div class="page">
    <!-- Header-->
    <?php require_once('header.php'); ?>
    <!--Vide-->
    <section class="vide section section-md context-dark vide-overlay" data-vide-bg="video/video-01" data-vide-options="posterType: jpg">
      <div class="vide-inner">
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-sm-10">
              <h1 class="wow fadeInUp" data-wow-delay=".1s">Largest Producer of Wind and Solar Energy</h1><a class="btn btn-white wow fadeInUp" href="contants" data-wow-delay=".3s">Make Request</a>
            </div>
          </div>
          <div class="row row-30 wow fadeInUp" data-wow-delay=".5s">
            <div class="col-xl-3 col-lg-4 col-md-5 col-sm-6">
              <dl class="desc-list">
                <dt class="desc-title">Phone number:</dt>
                <dd class="desc-text h4"><a href="tel:<?php print $sitePhone; ?>"><?php print $sitePhone; ?></a></dd>
              </dl>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-5 col-sm-6">
              <dl class="desc-list">
                <dt class="desc-title">Email address:</dt>
                <dd class="desc-text h4"><a href="mailto:<?php print $siteEmail; ?>"><?php print $siteEmail; ?></a></dd>
              </dl>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- About-->
    <section class="section section-md bg-primary">
      <div class="container">
        <div class="row row-30 justify-content-between">
          <div class="col-md-6 wow fadeInLeft">
            <div class="h2">About Us</div>
            <div class="h3">Welcome to <?php print $siteName; ?> – Your Partner in Sustainable Energy Solutions!</div>
            <p>At <?php print $siteName; ?>, we are passionate about harnessing the power of renewable energy to create a greener and more sustainable future. As a leading solar and wind turbine installation contracting company, we specialize in providing innovative and eco-friendly energy solutions to residential, commercial, and industrial clients.</p><a class="btn btn-white" href="about">Who we Are</a>
          </div>
          <div class="col-lg-5 col-md-6 wow fadeInRight"><img src="img/team4.jpg" alt width="460" height="560" loading="lazy">
          </div>
        </div>
      </div>
    </section>

    <!-- Services-->
    <section class="section section-md bg-primary">
      <div class="container wow fadeInUp">

        <div class="row row-30">
          <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="service">
              <div class="service-icon">
                <!-- <svg class="icon-svg-stroke" width="33" height="32" viewBox="0 0 33 32" fill="none">
                  <path d="M4 17V29H8V22H12V29H28V17" stroke-width="2" />
                  <path d="M1 14.5L9 4M9 4L17 14H30L22 4H9Z" stroke-width="2" />
                </svg> -->
                <img src="img/photo31.jpg" alt width="460" height="560" loading="lazy">
              </div>
              <p class="service-text">Residential solar panels</p>
              <div class="service-link h4"><a href="services">We simplify the path to solar energy every step of the way</a></div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="service">
              <div class="service-icon">
                <!-- <svg class="icon-svg-stroke" width="32" height="32" viewBox="0 0 32 32" fill="none">
                  <rect x="6" y="6" width="20" height="25" rx="3" stroke-width="2" />
                  <rect x="10" y="15" width="12" height="4" stroke-width="2" />
                  <rect x="10" y="23" width="12" height="4" stroke-width="2" />
                  <path d="M12 3V1H20V3" stroke-width="2" stroke-linejoin="round" />
                </svg> --><img src="img/photo39.jpg" alt width="460" height="560" loading="lazy">
              </div>
              <p class="service-text">Solar batteries</p>
              <div class="service-link h4"><a href="services">Best solar energy products and accessories</a></div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="service">
              <div class="service-icon">
                <!-- <svg class="icon-svg-stroke" width="32" height="32" viewBox="0 0 32 32" fill="none">
                  <path d="M10 17.5882L17 7V13.3529H22L15 25V17.5882H10Z" stroke-width="2" />
                  <path d="M26 12C26 12 27 14 27 16C27 18 26 20 26 20" stroke-width="2" />
                  <path d="M6 12C6 12 5 14 5 16C5 18 6 20 6 20" stroke-width="2" />
                  <path d="M29 8C29 8 31 10.6667 31 16C31 21.3333 29 24 29 24" stroke-width="2" />
                  <path d="M3 8C3 8 1 10.6667 1 16C1 21.3333 3 24 3 24" stroke-width="2" />
                </svg> --><img src="img/photo40.jpg" alt width="460" height="560" loading="lazy">
              </div>
              <p class="service-text">EV chargers</p>
              <div class="service-link h4"><a href="services">Get a dedicated EV charger with your solar panels purchase</a></div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="service">
              <div class="service-icon">
                <!-- <svg class="icon-svg-stroke" width="32" height="32" viewBox="0 0 32 32" fill="none">
                  <path d="M3.95783 11.2873L6.74403 2H16H25.256L28.0422 11.2873L30.656 20H16H1.34403L3.95783 11.2873Z" stroke-width="2" />
                  <path d="M16 24V30M16 30H10M16 30H22" stroke-width="2" />
                </svg> -->
                <img src="img/photo41.jpg" alt width="460" height="560" loading="lazy">
              </div>
              <p class="service-text">Roofing upgrade</p>
              <div class="service-link h4"><a href="services">All-in-one roofing services to protect your home</a></div>
            </div>
          </div>
        </div>

      </div>
    </section>

    <section class="section section-lg bg-light">
      <div class="container">
        <div class="row justify-content-between">

          <div class="col-lg-6">
            <h2>Our Vision:</h2>
            <p>Our vision is to be at the forefront of the renewable energy revolution, empowering communities with cleaner and more efficient energy alternatives. We aim to drive positive change by promoting sustainable practices and reducing our carbon footprint through the widespread adoption of solar and wind technologies.</p>
            <h2>Our Mission:</h2>
            <p>At <?php print $siteName; ?>, our mission is to deliver cutting-edge, customized solar and wind energy solutions that cater to the unique needs of our clients. We strive to exceed customer expectations by offering top-notch services, using the latest technologies, and adhering to the highest industry standards.</p>
          </div>

          <div class="col-md-5"><img src="img/team2.jpg" alt="" width="460" height="280" loading="lazy" /><img src="img/team1.png" alt="" width="460" height="280" loading="lazy" />
          </div>

        </div>
      </div>
    </section>

    <!-- Affordable Pricing Policy-->
    <section class="section section-md bg-white">
      <div class="container">
        <div class="row row-50 justify-content-between flex-md-row-reverse">
          <div class="col-xl-5 col-md-6 wow fadeInRight"><img src="images/home-02-460x560.jpg" alt width="460" height="560" loading="lazy">
          </div>
          <div class="col-xl-5 col-md-6 wow fadeInLeft">
            <svg class="icon-svg-stroke" width="32" height="32" viewBox="0 0 32 32" fill="none">
              <path d="M9 23V30H1V17.9497C1 15.2161 3.21608 13 5.94975 13V13C7.2625 13 8.52149 13.5215 9.44975 14.4497L15 20" stroke-width="2" />
              <path d="M23 23V30H31V17.9497C31 15.2161 28.7839 13 26.0503 13V13C24.7375 13 23.4785 13.5215 22.5503 14.4497L18 19" stroke-width="2" />
              <circle cx="5.5" cy="5.5" r="3.5" stroke-width="2" />
              <circle cx="26.5" cy="5.5" r="3.5" stroke-width="2" />
            </svg>
            <h2 class="offset-md">Affordable Pricing Policy</h2>
            <p>We’re committed to making alternative energy more accessible by offering you an easy, affordable and dependable solar electricity system.</p>
            <div class="unit offset-md">
              <div class="unit-left">
                <div class="icon-circle bg-light">
                  <svg class="icon-svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M21.2525 11.6565L20.1389 3.86101L12.3434 2.74738L2.74748 12.3433L11.6566 21.2524L21.2525 11.6565ZM11.6566 23.9999L0 12.3433L11.6566 0.686768L21.856 2.14384L23.3131 12.3433L11.6566 23.9999Z" />
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.7988 5.82828L22.6271 0L24.0008 1.37374L18.1726 7.20202L16.7988 5.82828Z" />
                    <path d="M8.99924 10.8718L10.2385 11.341C10.0701 12.1168 10.2493 12.7681 10.7761 13.2949C10.9754 13.4942 11.2058 13.6055 11.4674 13.6287C11.7336 13.6566 11.9676 13.5698 12.1693 13.3681C12.3114 13.226 12.3831 13.0594 12.3844 12.8682C12.3904 12.6725 12.3591 12.4854 12.2907 12.307C12.2223 12.1286 12.108 11.8538 11.9476 11.4827C11.7919 11.1069 11.6648 10.769 11.5663 10.4688C11.2803 9.57783 11.4353 8.83442 12.0311 8.23858C12.219 8.05066 12.4426 7.90299 12.7019 7.79559C12.9705 7.68834 13.2963 7.65204 13.6793 7.68668C14.0716 7.72148 14.4541 7.86103 14.8267 8.10533L15.4454 7.48657L16.5132 8.55435L15.8807 9.18686C16.1334 9.50369 16.2802 9.90261 16.3212 10.3836C16.367 10.8694 16.3228 11.279 16.1887 11.6124L14.9006 11.1493C15.0384 10.4895 14.896 9.94848 14.4737 9.52612C14.2696 9.32205 14.0485 9.21096 13.8104 9.19282C13.5722 9.17469 13.3684 9.25042 13.1988 9.42001C13.1117 9.50709 13.0504 9.60162 13.0149 9.70359C12.9841 9.81031 12.9695 9.91031 12.9711 10.0036C12.9775 10.1016 13.0077 10.2281 13.0617 10.3829C13.1204 10.5425 13.1789 10.688 13.2371 10.8196C13.3001 10.9559 13.3827 11.1439 13.4848 11.3835C13.5962 11.6233 13.6933 11.8441 13.7761 12.0461C14.1712 13.0462 14.0639 13.851 13.4543 14.4606C13.0327 14.8823 12.547 15.1117 11.9974 15.1488C11.4524 15.1813 10.9157 15.025 10.3875 14.6801L9.80996 15.2576L8.74219 14.1898L9.33345 13.5986C9.06656 13.2675 8.90279 12.8333 8.84215 12.296C8.78151 11.7587 8.83388 11.284 8.99924 10.8718Z" />
                  </svg>
                </div>
              </div>
              <div class="unit-body">
                <h4 class="unit-title">Best price among all</h4>
                <p class="unit-text">Our pricing policy is aimed at providing you with reasonably priced solar power solutions.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Superior Solutions-->
    <section class="section section-md bg-light">
      <div class="container">
        <div class="row row-50 justify-content-between">
          <div class="col-xl-5 col-md-6 wow fadeInLeft"><img src="images/home-03-460x560.jpg" alt width="460" height="560" loading="lazy">
          </div>
          <div class="col-xl-5 col-md-6 wow fadeInRight">
            <svg class="icon-svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M12 20L0 3H20L32 20H12ZM28.1402 18L24.2578 12.5H17.9299L21.8123 18H28.1402ZM19.3642 18L15.4818 12.5H9.15396L13.0363 18H19.3642ZM7.74219 10.5H14.0701L10.1877 5H3.85984L7.74219 10.5ZM12.6358 5L16.5182 10.5H22.846L18.9637 5H12.6358Z" />
              <path d="M2 10V29H10V27H4L4 10H2Z" />
              <path d="M24 22V29H30V27H26L26 22H24Z" />
            </svg>
            <h2 class="offset-md">Superior Solutions</h2>
            <p>By using our quality products you get a peace of mind knowing that the system will have longevity and reliability for many decades to come.</p>
            <div class="unit offset-md">
              <div class="unit-left">
                <div class="icon-circle bg-white">
                  <svg class="icon-svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M7 13H17V15C17 17.7614 14.7614 20 12 20C9.23858 20 7 17.7614 7 15V13Z" fill="none" stroke="currentColor" stroke-width="2" />
                    <path d="M22.3923 18C23.4455 16.1758 24 14.1064 24 12C24 9.89356 23.4455 7.82423 22.3923 6C21.3391 4.17577 19.8242 2.66091 18 1.60769C16.1758 0.554475 14.1064 -2.17629e-07 12 0C9.89356 2.17629e-07 7.82423 0.554476 6 1.6077C4.17577 2.66092 2.66091 4.17577 1.60769 6C0.554474 7.82423 -4.03869e-07 9.89356 0 12C4.0387e-07 14.1064 0.554476 16.1758 1.6077 18L3.37439 16.98C2.50022 15.4659 2.04 13.7483 2.04 12C2.04 10.2517 2.50021 8.53411 3.37439 7.02C4.24856 5.50589 5.50589 4.24856 7.02 3.37439C8.53411 2.50021 10.2517 2.04 12 2.04C13.7483 2.04 15.4659 2.50021 16.98 3.37439C18.4941 4.24856 19.7514 5.50589 20.6256 7.02C21.4998 8.53411 21.96 10.2517 21.96 12C21.96 13.7483 21.4998 15.4659 20.6256 16.98L22.3923 18Z" />
                    <path d="M20.6933 10.6706C20.1806 8.75693 19.0507 7.0659 17.4789 5.85982C15.9071 4.65374 13.9812 4 12 4C10.0188 4 8.09295 4.65374 6.52115 5.85982C4.94935 7.0659 3.81944 8.75693 3.30667 10.6706L5.2192 11.1831C5.61917 9.6904 6.50049 8.3714 7.7265 7.43066C8.9525 6.48991 10.4547 5.98 12 5.98C13.5453 5.98 15.0475 6.48992 16.2735 7.43066C17.4995 8.37141 18.3808 9.69041 18.7808 11.1831L20.6933 10.6706Z" />
                    <rect x="8" y="9" width="2" height="3" />
                    <rect x="11" y="20" width="2" height="4" />
                    <rect x="14" y="9" width="2" height="3" />
                  </svg>
                </div>
              </div>
              <div class="unit-body">
                <h4 class="unit-title">High product quality</h4>
                <p class="unit-text">We guarantee high quality at all stages of solar panel production & installation of our solutions.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Why People Choose Our Solar Solutions-->
    <section class="section parallax-container section-md context-dark" data-parallax-img="images/bg-img-01-1920x1100.jpg">
      <div class="parallax-content">
        <div class="container">
          <div class="row row-30">

            <div class="col-12">
              <div class="row row-40 justify-content-between">

                <div class="col-xl-5 col-md-6 wow fadeInLeft">

                  <h2>Why People Choose Our Solar Solutions</h2>

                  <p>When people sign up with <?php print $siteName; ?>, they join hundreds of homeowners and small and mid-sized business owners who have put their trust in us from all other solar panel companies.</p><a class="btn btn-white" href="about">Learn More</a>
                </div>

                <div class="col-xl-7 col-md-6 wow fadeInRight">
                  <div class="row row-40">

                    <div class="col-md-12 col-sm-6">
                      <div class="unit">
                        <div class="unit-left">
                          <div class="icon-circle bg-white">
                            <svg class="icon-svg" width="24" height="22" viewBox="0 0 24 22" fill="none">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M6 0C3.7087 0 2.12608 0.875626 1.16794 2.30068C0.257496 3.65478 -2.19331e-05 5.37464 1.40108e-09 6.94083C2.7658e-05 8.92111 0.786423 10.8356 1.87248 12.5465C2.96274 14.2641 4.39967 15.8468 5.80875 17.1835C7.22141 18.5235 8.62994 19.6385 9.68332 20.4177C10.2109 20.8079 10.6515 21.1155 10.9618 21.3265C11.117 21.432 11.2397 21.5135 11.3246 21.5692C11.3671 21.597 11.4001 21.6185 11.423 21.6332L11.4496 21.6503L11.4571 21.6551L11.4601 21.657L12 22L12.5394 21.6573L12.5407 21.6566L12.5429 21.6551L12.5504 21.6504L12.577 21.6332C12.5999 21.6185 12.6329 21.597 12.6754 21.5692C12.7603 21.5135 12.883 21.432 13.0382 21.3265C13.3485 21.1155 13.7891 20.8079 14.3167 20.4177C15.3701 19.6385 16.7786 18.5235 18.1913 17.1835C19.6004 15.8468 21.0373 14.2641 22.1276 12.5465C23.2136 10.8356 24 8.9211 24 6.94081C24 5.37464 23.7425 3.65478 22.8321 2.30068C21.8739 0.875628 20.2913 0 18 0C15.7223 0 13.9847 1.18174 12.8671 2.26587C12.5397 2.58345 12.2575 2.90009 12.0217 3.18968C11.7957 2.90176 11.5243 2.58806 11.2071 2.27351C10.0981 1.17389 8.35876 0 6 0ZM10.8792 18.8282C11.3316 19.1628 11.7155 19.4326 12 19.6276C12.2845 19.4326 12.6684 19.1628 13.1208 18.8282C14.1299 18.0818 15.4714 17.0191 16.8087 15.7505C18.1496 14.4785 19.4627 13.0218 20.4349 11.4902C21.4114 9.95193 22 8.40767 22 6.94081C22 5.53235 21.7575 4.27758 21.1679 3.4007C20.6261 2.59478 19.7087 1.98309 18 1.98309C16.4548 1.98309 15.1924 2.78444 14.2657 3.68339C13.8086 4.12688 13.4557 4.57318 13.2178 4.90856C13.0994 5.07542 13.011 5.2126 12.9538 5.30522C12.9252 5.35146 12.9045 5.38641 12.8919 5.40816L12.879 5.43061L12.8777 5.43281L12.8771 5.43393L11.9624 7.10035L11.1067 5.40332L11.1062 5.40236L11.1055 5.40111L11.0942 5.37979C11.0829 5.3588 11.0642 5.32466 11.038 5.27925C10.9856 5.18829 10.9038 5.05294 10.7929 4.88802C10.5701 4.5565 10.2357 4.11481 9.79289 3.67576C8.90189 2.79229 7.64124 1.98309 6 1.98309C4.2913 1.98309 3.3739 2.59478 2.83203 3.4007C2.24246 4.27757 1.99998 5.53235 2 6.9408C2.00002 8.40766 2.58865 9.95192 3.5651 11.4902C4.53735 13.0218 5.85041 14.4785 7.19132 15.7505C8.52865 17.0191 9.8701 18.0818 10.8792 18.8282Z" />
                            </svg>
                          </div>
                        </div>
                        <div class="unit-body">
                          <h4 class="unit-title">1. Expertise and Experience:</h4>
                          <p class="unit-text">
                            Our team of skilled engineers, technicians, and project managers has extensive experience in the design, installation, and maintenance of solar panel systems and wind turbines. We bring a wealth of knowledge to every project, ensuring optimal performance and long-term reliability.</p>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-12 col-sm-6">
                      <div class="unit">
                        <div class="unit-left">
                          <div class="icon-circle bg-white">
                            <svg class="icon-svg" width="24" height="22" viewBox="0 0 24 22" fill="none">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M14.6426 12.4569C15.4447 11.3874 16 9.81824 16 8C16 6.18176 15.4447 4.61263 14.6426 3.54315C13.841 2.47428 12.8862 2 12 2C11.1138 2 10.159 2.47428 9.35736 3.54315C8.55525 4.61263 8 6.18176 8 8C8 9.81824 8.55525 11.3874 9.35736 12.4569C10.159 13.5257 11.1138 14 12 14C12.8862 14 13.841 13.5257 14.6426 12.4569ZM12 16C15.3137 16 18 12.4183 18 8C18 3.58172 15.3137 0 12 0C8.68629 0 6 3.58172 6 8C6 12.4183 8.68629 16 12 16Z" />
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M4.39392 13.0806C4.90155 13.2982 5.1367 13.8861 4.91915 14.3937L2.51654 19.9998H21.4835L19.0809 14.3937C18.8633 13.8861 19.0985 13.2982 19.6061 13.0806C20.1137 12.8631 20.7016 13.0982 20.9191 13.6058L23.9191 20.6058C24.0516 20.9148 24.0199 21.2696 23.8348 21.5503C23.6498 21.8309 23.3361 21.9998 23 21.9998H1C0.66386 21.9998 0.350206 21.8309 0.165162 21.5503C-0.0198813 21.2696 -0.0515547 20.9148 0.0808585 20.6058L3.08086 13.6058C3.29841 13.0982 3.88629 12.8631 4.39392 13.0806Z" />
                            </svg>
                          </div>
                        </div>
                        <div class="unit-body">
                          <h4 class="unit-title">2. Customized Solutions:</h4>
                          <p class="unit-text">
                            We understand that every energy project is unique. That's why we take the time to assess your specific requirements and develop tailor-made solutions that maximize energy efficiency and cost-effectiveness.</p>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-12 col-sm-6">
                      <div class="unit">
                        <div class="unit-left">
                          <div class="icon-circle bg-white">
                            <svg class="icon-svg" width="24" height="22" viewBox="0 0 24 22" fill="none">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M14.6426 12.4569C15.4447 11.3874 16 9.81824 16 8C16 6.18176 15.4447 4.61263 14.6426 3.54315C13.841 2.47428 12.8862 2 12 2C11.1138 2 10.159 2.47428 9.35736 3.54315C8.55525 4.61263 8 6.18176 8 8C8 9.81824 8.55525 11.3874 9.35736 12.4569C10.159 13.5257 11.1138 14 12 14C12.8862 14 13.841 13.5257 14.6426 12.4569ZM12 16C15.3137 16 18 12.4183 18 8C18 3.58172 15.3137 0 12 0C8.68629 0 6 3.58172 6 8C6 12.4183 8.68629 16 12 16Z" />
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M4.39392 13.0806C4.90155 13.2982 5.1367 13.8861 4.91915 14.3937L2.51654 19.9998H21.4835L19.0809 14.3937C18.8633 13.8861 19.0985 13.2982 19.6061 13.0806C20.1137 12.8631 20.7016 13.0982 20.9191 13.6058L23.9191 20.6058C24.0516 20.9148 24.0199 21.2696 23.8348 21.5503C23.6498 21.8309 23.3361 21.9998 23 21.9998H1C0.66386 21.9998 0.350206 21.8309 0.165162 21.5503C-0.0198813 21.2696 -0.0515547 20.9148 0.0808585 20.6058L3.08086 13.6058C3.29841 13.0982 3.88629 12.8631 4.39392 13.0806Z" />
                            </svg>
                          </div>
                        </div>
                        <div class="unit-body">
                          <h4 class="unit-title">3. Quality and Innovation:</h4>
                          <p class="unit-text">
                            At <?php print $siteName; ?>, we are committed to delivering top-quality products and services. We partner with reputable manufacturers to source the best solar panels and wind turbines in the market, integrating the latest innovations and technologies into our installations.</p>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-12 col-sm-6">
                      <div class="unit">
                        <div class="unit-left">
                          <div class="icon-circle bg-white">
                            <svg class="icon-svg" width="24" height="22" viewBox="0 0 24 22" fill="none">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M14.6426 12.4569C15.4447 11.3874 16 9.81824 16 8C16 6.18176 15.4447 4.61263 14.6426 3.54315C13.841 2.47428 12.8862 2 12 2C11.1138 2 10.159 2.47428 9.35736 3.54315C8.55525 4.61263 8 6.18176 8 8C8 9.81824 8.55525 11.3874 9.35736 12.4569C10.159 13.5257 11.1138 14 12 14C12.8862 14 13.841 13.5257 14.6426 12.4569ZM12 16C15.3137 16 18 12.4183 18 8C18 3.58172 15.3137 0 12 0C8.68629 0 6 3.58172 6 8C6 12.4183 8.68629 16 12 16Z" />
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M4.39392 13.0806C4.90155 13.2982 5.1367 13.8861 4.91915 14.3937L2.51654 19.9998H21.4835L19.0809 14.3937C18.8633 13.8861 19.0985 13.2982 19.6061 13.0806C20.1137 12.8631 20.7016 13.0982 20.9191 13.6058L23.9191 20.6058C24.0516 20.9148 24.0199 21.2696 23.8348 21.5503C23.6498 21.8309 23.3361 21.9998 23 21.9998H1C0.66386 21.9998 0.350206 21.8309 0.165162 21.5503C-0.0198813 21.2696 -0.0515547 20.9148 0.0808585 20.6058L3.08086 13.6058C3.29841 13.0982 3.88629 12.8631 4.39392 13.0806Z" />
                            </svg>
                          </div>
                        </div>
                        <div class="unit-body">
                          <h4 class="unit-title">4. Sustainability and Environmental Responsibility:</h4>
                          <p class="unit-text">
                            As an environmentally conscious company, we are dedicated to promoting sustainable practices and reducing the carbon footprint of our operations. By choosing renewable energy solutions, you join us in the journey towards a cleaner and greener world.</p>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-12 col-sm-6">
                      <div class="unit">
                        <div class="unit-left">
                          <div class="icon-circle bg-white">
                            <svg class="icon-svg" width="24" height="22" viewBox="0 0 24 22" fill="none">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M14.6426 12.4569C15.4447 11.3874 16 9.81824 16 8C16 6.18176 15.4447 4.61263 14.6426 3.54315C13.841 2.47428 12.8862 2 12 2C11.1138 2 10.159 2.47428 9.35736 3.54315C8.55525 4.61263 8 6.18176 8 8C8 9.81824 8.55525 11.3874 9.35736 12.4569C10.159 13.5257 11.1138 14 12 14C12.8862 14 13.841 13.5257 14.6426 12.4569ZM12 16C15.3137 16 18 12.4183 18 8C18 3.58172 15.3137 0 12 0C8.68629 0 6 3.58172 6 8C6 12.4183 8.68629 16 12 16Z" />
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M4.39392 13.0806C4.90155 13.2982 5.1367 13.8861 4.91915 14.3937L2.51654 19.9998H21.4835L19.0809 14.3937C18.8633 13.8861 19.0985 13.2982 19.6061 13.0806C20.1137 12.8631 20.7016 13.0982 20.9191 13.6058L23.9191 20.6058C24.0516 20.9148 24.0199 21.2696 23.8348 21.5503C23.6498 21.8309 23.3361 21.9998 23 21.9998H1C0.66386 21.9998 0.350206 21.8309 0.165162 21.5503C-0.0198813 21.2696 -0.0515547 20.9148 0.0808585 20.6058L3.08086 13.6058C3.29841 13.0982 3.88629 12.8631 4.39392 13.0806Z" />
                            </svg>
                          </div>
                        </div>
                        <div class="unit-body">
                          <h4 class="unit-title">5. Customer-Centric Approach:</h4>
                          <p class="unit-text">
                            Customer satisfaction is at the core of our business. We prioritize open communication, transparency, and responsiveness to ensure a seamless experience from initial consultation to project completion and beyond.</p>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Solar Plans that Fit Your Needs-->
    <section class="section section-md bg-image" style="background-image: url(images/bg-img-02-1920x600.jpg)">
      <div class="container">
        <div class="row row-30">
          <div class="col-md-7 wow fadeInLeft">
            <h2>Solar Plans that Fit Your Needs</h2>
          </div>
          <div class="col-md-5 wow fadeInRight">
            <p>Looking forward to power your home with solar energy? Call us and we'll help you find the right pricing plan that meets your needs.</p>
            <div class="offset-40"><a class="btn btn-white" href="tel:<?php print $sitePhone; ?>"><?php print $sitePhone; ?></a></div>
          </div>
        </div>
      </div>
    </section>

    <!-- Advantages-->
    <section class="section section-md bg-white">
      <div class="container">
        <div class="row row-40 row-xl-60 justify-content-center">
          <div class="col-xl-8 col-md-10 wow fadeInUp">
            <h3 class="text-center">Why You Should Choose <?php print $siteName; ?> Solar Energy Out of Other Companies</h3>
          </div>
          <div class="col-xl-10 wow fadeInUp">
            <div class="row row-30">
              <div class="col-md-3">
                <div class="advantage">
                  <div class="advantage-icon">
                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <rect x="1" y="8" width="25" height="26" fill="#FBE547" stroke="#15171A" stroke-width="2" />
                      <path d="M26 13H37.5251L47 22.416V34H26V13Z" stroke="#15171A" stroke-width="2" />
                      <rect x="7" y="30" width="10" height="10" rx="5" fill="white" stroke="#15171A" stroke-width="2" />
                      <rect x="31" y="30" width="10" height="10" rx="5" fill="white" stroke="#15171A" stroke-width="2" />
                    </svg>
                  </div>
                  <p class="advantage-text">Fastest delivery in your States</p>
                </div>
              </div>
              <div class="col-md-3">
                <div class="advantage">
                  <div class="advantage-icon">
                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M3 12L23 20.9999V45.9999L3 36.9999V12Z" fill="#FBE547" />
                      <path d="M45 12L24 21.0219V46L45 37.0079V12Z" fill="#FBE547" />
                      <path d="M3 12.3529V36.9412L23.2759 46M3 12.3529L23.2759 21.4118M3 12.3529L13.1379 7.17647M23.2759 46V21.4118M23.2759 46L45 36.9412V12.3529M23.2759 21.4118L34.1379 16.8824M45 12.3529L23.2759 2L13.1379 7.17647M45 12.3529L34.1379 16.8824M34.1379 16.8824L13.1379 7.17647M34.1379 16.8824V27.9286" stroke="#15171A" stroke-width="2" />
                    </svg>
                  </div>
                  <p class="advantage-text">Best conditions for equipment storage</p>
                </div>
              </div>
              <div class="col-md-3">
                <div class="advantage">
                  <div class="advantage-icon">
                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <mask id="path-1-inside-1" fill="white">
                        <path d="M7 27H24H41V31C41 40.3888 33.3888 48 24 48C14.6112 48 7 40.3888 7 31V27Z" />
                      </mask>
                      <path d="M24 36H23V37H24V36ZM27 37C27.5523 37 28 36.5523 28 36C28 35.4477 27.5523 35 27 35V37ZM23 27V36H25V27H23ZM24 37H27V35H24V37ZM7 27V25H5V27H7ZM41 27H43V25H41V27ZM39 27V31H43V27H39ZM9 31V27H5V31H9ZM7 29H24V25H7V29ZM24 29H41V25H24V29ZM24 46C15.7157 46 9 39.2843 9 31H5C5 41.4934 13.5066 50 24 50V46ZM39 31C39 39.2843 32.2843 46 24 46V50C34.4934 50 43 41.4934 43 31H39Z" fill="#15171A" mask="url(#path-1-inside-1)" />
                      <rect x="2" y="20" width="44" height="8" rx="3" fill="#FBE547" stroke="#15171A" stroke-width="2" />
                      <path d="M8 16C8 11.0294 12.0294 7 17 7H31C35.9706 7 40 11.0294 40 16V20H8V16Z" fill="#FBE547" stroke="#15171A" stroke-width="2" />
                      <path d="M20 4C20 2.34315 21.3431 1 23 1H25C26.6569 1 28 2.34315 28 4V20H20V4Z" fill="white" stroke="#15171A" stroke-width="2" />
                    </svg>
                  </div>
                  <p class="advantage-text">The best team of professionals</p>
                </div>
              </div>
              <div class="col-md-3">
                <div class="advantage">
                  <div class="advantage-icon">
                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <rect x="1" y="1" width="46" height="46" rx="23" stroke="#15171A" stroke-width="2" />
                      <line x1="24" y1="1" x2="24" y2="47" stroke="#15171A" stroke-width="2" />
                      <path d="M24 1C24 1 11 6.36667 11 24C11 41.6333 24 47 24 47" stroke="#15171A" stroke-width="2" />
                      <path d="M24 1C24 1 37 6.36667 37 24C37 41.6333 24 47 24 47" stroke="#15171A" stroke-width="2" />
                      <circle cx="36" cy="16" r="5" fill="#FBE547" stroke="#15171A" stroke-width="2" />
                      <circle cx="9" cy="35" r="8" fill="#FBE547" stroke="#15171A" stroke-width="2" />
                    </svg>
                  </div>
                  <p class="advantage-text">Extensive work <br class="d-none d-xl-block"> experience</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="section-divider">
      <div class="container">
        <hr>
      </div>
    </div>

    <!-- News-->
    <section style="display: none;" class="section section-md bg-white">
      <div class="container">
        <div class="row row-40 row-xl-60 justify-content-center">
          <div class="col-xl-8 col-md-10 text-center wow fadeInUp">
            <h2>Recent News</h2>
            <p>Our team regularly publishes news, tips, and updates from the world of alternative energy. Read our latest articles and posts here.</p>
          </div>
          <div class="col-12 wow fadeInUp">
            <div class="row row-30">
              <div class="col-lg-4 col-sm-6">
                <article class="post-classic">
                  <figure class="post-classic-figure"><a class="link-img" href="#"><img src="images/post-01-360x240.jpg" alt width="360" height="240" loading="lazy"></a>
                  </figure>
                  <div class="post-classic-body">
                    <h4 class="post-classic-title"><a href="#">Solar Power for Your Business</a></h4>
                    <ul class="meta-list">
                      <li class="meta-item">
                        <div class="meta-icon">
                          <svg class="icon-svg-stroke" width="20" height="20" fill="none">
                            <path d="M3.5 18V17.5C3.5 13.9101 6.41015 11 10 11V11C13.5899 11 16.5 13.9101 16.5 17.5V18" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M10 9C11.933 9 13.5 7.433 13.5 5.5C13.5 3.567 11.933 2 10 2C8.067 2 6.5 3.567 6.5 5.5C6.5 7.433 8.067 9 10 9Z" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                          </svg>
                        </div>
                        <div class="meta-content">by <a class="meta-author" href="#">Diego Lopez</a></div>
                      </li>
                      <li class="meta-item">
                        <div class="meta-icon">
                          <svg class="icon-svg-stroke" width="20" height="20" fill="none">
                            <path d="M10.0004 17.7782C14.296 17.7782 17.7782 14.296 17.7782 10.0004C17.7782 5.70489 14.296 2.22266 10.0004 2.22266C5.70489 2.22266 2.22266 5.70489 2.22266 10.0004C2.22266 14.296 5.70489 17.7782 10.0004 17.7782Z" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M10 5.66602V9.99935H12.5" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                          </svg>
                        </div>
                        <div class="meta-content">
                          <time datetime="2021">January 08, 2021</time>
                        </div>
                      </li>
                    </ul>
                    <p class="post-classic-text">When businesses wonder if solar is right for them, some of their first questions are, “Will solar affect my power...</p>
                    <ul class="meta-list">
                      <li class="meta-item">
                        <div class="meta-icon">
                          <svg class="icon-svg-stroke" width="20" height="20" fill="none">
                            <path d="M4.5 14.5V13.7H3.7C2.65066 13.7 1.8 12.8493 1.8 11.8V5C1.8 3.23269 3.23269 1.8 5 1.8H15C16.7673 1.8 18.2 3.23269 18.2 5V10.5C18.2 12.2673 16.7673 13.7 15 13.7H10H9.74363L9.53501 13.849L4.81625 17.2196C4.68388 17.3141 4.5 17.2195 4.5 17.0568V14.5Z" stroke-width="1.6" />
                          </svg>
                        </div>
                        <div class="meta-content">0</div>
                      </li>
                    </ul>
                  </div>
                </article>
              </div>
              <div class="col-lg-4 col-sm-6">
                <article class="post-classic">
                  <figure class="post-classic-figure"><a class="link-img" href="#"><img src="images/post-02-360x240.jpg" alt width="360" height="240" loading="lazy"></a>
                  </figure>
                  <div class="post-classic-body">
                    <h4 class="post-classic-title"><a href="#">How Solar Energy Can Help You Save Money</a></h4>
                    <ul class="meta-list">
                      <li class="meta-item">
                        <div class="meta-icon">
                          <svg class="icon-svg-stroke" width="20" height="20" fill="none">
                            <path d="M3.5 18V17.5C3.5 13.9101 6.41015 11 10 11V11C13.5899 11 16.5 13.9101 16.5 17.5V18" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M10 9C11.933 9 13.5 7.433 13.5 5.5C13.5 3.567 11.933 2 10 2C8.067 2 6.5 3.567 6.5 5.5C6.5 7.433 8.067 9 10 9Z" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                          </svg>
                        </div>
                        <div class="meta-content">by <a class="meta-author" href="#">Diego Lopez</a></div>
                      </li>
                      <li class="meta-item">
                        <div class="meta-icon">
                          <svg class="icon-svg-stroke" width="20" height="20" fill="none">
                            <path d="M10.0004 17.7782C14.296 17.7782 17.7782 14.296 17.7782 10.0004C17.7782 5.70489 14.296 2.22266 10.0004 2.22266C5.70489 2.22266 2.22266 5.70489 2.22266 10.0004C2.22266 14.296 5.70489 17.7782 10.0004 17.7782Z" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M10 5.66602V9.99935H12.5" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                          </svg>
                        </div>
                        <div class="meta-content">
                          <time datetime="2021">January 08, 2021</time>
                        </div>
                      </li>
                    </ul>
                    <p class="post-classic-text">Solar is an aggressively growing alternative as more and more people realize they can save money every...</p>
                    <ul class="meta-list">
                      <li class="meta-item">
                        <div class="meta-icon">
                          <svg class="icon-svg-stroke" width="20" height="20" fill="none">
                            <path d="M4.5 14.5V13.7H3.7C2.65066 13.7 1.8 12.8493 1.8 11.8V5C1.8 3.23269 3.23269 1.8 5 1.8H15C16.7673 1.8 18.2 3.23269 18.2 5V10.5C18.2 12.2673 16.7673 13.7 15 13.7H10H9.74363L9.53501 13.849L4.81625 17.2196C4.68388 17.3141 4.5 17.2195 4.5 17.0568V14.5Z" stroke-width="1.6" />
                          </svg>
                        </div>
                        <div class="meta-content">0</div>
                      </li>
                    </ul>
                  </div>
                </article>
              </div>
              <div class="col-lg-4 col-sm-6">
                <article class="post-classic">
                  <figure class="post-classic-figure"><a class="link-img" href="#"><img src="images/post-09-360x240.jpg" alt width="360" height="240" loading="lazy"></a>
                  </figure>
                  <div class="post-classic-body">
                    <h4 class="post-classic-title"><a href="#">Planning Your Solar System</a></h4>
                    <ul class="meta-list">
                      <li class="meta-item">
                        <div class="meta-icon">
                          <svg class="icon-svg-stroke" width="20" height="20" fill="none">
                            <path d="M3.5 18V17.5C3.5 13.9101 6.41015 11 10 11V11C13.5899 11 16.5 13.9101 16.5 17.5V18" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M10 9C11.933 9 13.5 7.433 13.5 5.5C13.5 3.567 11.933 2 10 2C8.067 2 6.5 3.567 6.5 5.5C6.5 7.433 8.067 9 10 9Z" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                          </svg>
                        </div>
                        <div class="meta-content">by <a class="meta-author" href="#">Diego Lopez</a></div>
                      </li>
                      <li class="meta-item">
                        <div class="meta-icon">
                          <svg class="icon-svg-stroke" width="20" height="20" fill="none">
                            <path d="M10.0004 17.7782C14.296 17.7782 17.7782 14.296 17.7782 10.0004C17.7782 5.70489 14.296 2.22266 10.0004 2.22266C5.70489 2.22266 2.22266 5.70489 2.22266 10.0004C2.22266 14.296 5.70489 17.7782 10.0004 17.7782Z" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M10 5.66602V9.99935H12.5" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                          </svg>
                        </div>
                        <div class="meta-content">
                          <time datetime="2021">January 08, 2021</time>
                        </div>
                      </li>
                    </ul>
                    <p class="post-classic-text">There are a number of steps to follow when planning to power your home with solar energy. After choosing which...</p>
                    <ul class="meta-list">
                      <li class="meta-item">
                        <div class="meta-icon">
                          <svg class="icon-svg-stroke" width="20" height="20" fill="none">
                            <path d="M4.5 14.5V13.7H3.7C2.65066 13.7 1.8 12.8493 1.8 11.8V5C1.8 3.23269 3.23269 1.8 5 1.8H15C16.7673 1.8 18.2 3.23269 18.2 5V10.5C18.2 12.2673 16.7673 13.7 15 13.7H10H9.74363L9.53501 13.849L4.81625 17.2196C4.68388 17.3141 4.5 17.2195 4.5 17.0568V14.5Z" stroke-width="1.6" />
                          </svg>
                        </div>
                        <div class="meta-content">0</div>
                      </li>
                    </ul>
                  </div>
                </article>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Get in touch-->
    <section class="section section-md section-get-in-touch bg-light">
      <div class="container">
        <div class="row row-30 justify-content-between">
          <div class="col-xl-5 col-md-6 wow fadeInLeft">
            <h2>Get in touch with our team today</h2>
            <p>Contact our team of solar energy experts to have a custom solar energy solution installed for you.</p>
            <div class="unit offset-md">
              <div class="unit-left">
                <div class="icon-circle bg-white">
                  <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="64" height="64" rx="32" fill="white" />
                    <path d="M34.6268 25.2049C35.6555 25.4052 36.601 25.9074 37.3421 26.6471C38.0832 27.3868 38.5864 28.3304 38.7871 29.3572M34.6268 21C36.7641 21.237 38.7572 22.1923 40.2787 23.709C41.8003 25.2257 42.7599 27.2138 43 29.3467M41.9468 37.7354V40.889C41.948 41.1818 41.8879 41.4716 41.7704 41.7398C41.6529 42.0081 41.4805 42.2489 41.2644 42.4468C41.0482 42.6447 40.793 42.7954 40.5152 42.8892C40.2373 42.983 39.9429 43.0178 39.6507 42.9915C36.4098 42.64 33.2966 41.5346 30.5613 39.7642C28.0166 38.1503 25.859 35.9968 24.242 33.4569C22.462 30.7145 21.3543 27.5922 21.0085 24.3429C20.9822 24.0522 21.0168 23.7592 21.1102 23.4826C21.2035 23.206 21.3536 22.9518 21.5507 22.7362C21.7479 22.5206 21.9878 22.3484 22.2554 22.2305C22.5229 22.1125 22.812 22.0515 23.1045 22.0512H26.2642C26.7753 22.0462 27.2708 22.2269 27.6584 22.5595C28.046 22.8922 28.2991 23.3541 28.3706 23.8593C28.504 24.8685 28.7513 25.8595 29.1079 26.8132C29.2496 27.1895 29.2803 27.5984 29.1963 27.9915C29.1123 28.3846 28.9171 28.7455 28.6339 29.0313L27.2963 30.3663C28.7957 32.9981 30.9789 35.1772 33.6157 36.6737L34.9533 35.3386C35.2397 35.056 35.6012 34.8612 35.9951 34.7774C36.389 34.6935 36.7987 34.7241 37.1756 34.8656C38.1312 35.2214 39.124 35.4683 40.1352 35.6014C40.6468 35.6734 41.1141 35.9307 41.4481 36.3241C41.7821 36.7176 41.9596 37.2198 41.9468 37.7354Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </div>
              </div>
              <div class="unit-body">
                <dl class="desc-list">
                  <dt class="desc-title">Phone number:</dt>
                  <dd class="desc-text h4"><a href="tel:<?php print $sitePhone; ?>"><?php print $sitePhone; ?></a></dd>
                </dl>
              </div>
            </div>
          </div>
          <div class="col-md-6 wow fadeInRight">
            <form class="form-box form-box-lg rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="" enctype="multipart/form-data">
              <div class="form-wrap">
                <label class="form-label form-label-outside" for="contact-name">Your name</label>
                <input class="form-input" id="name" type="text" name="name" data-constraints="@Required" placeholder="Name">
              </div>
              <div class="form-wrap">
                <label class="form-label form-label-outside" for="contact-phone">Contact phone</label>
                <input class="form-input" id="phone" type="text" name="phone" data-constraints="@Numeric" placeholder="(555) 555-5555">
              </div>
              <div class="form-wrap">
                <label class="form-label form-label-outside" for="contact-email">Email address</label>
                <input class="form-input" id="email" type="email" name="email" data-constraints="@Email @Required" placeholder="e.g. adam.anderson@demolink.org">
              </div>
              <div class="form-wrap">
                <label class="form-label form-label-outside" for="contact-message">Anything else to add?</label>
                <textarea class="form-input" id="message" name="message" data-constraints="@Required" placeholder="Your message"></textarea>
              </div>
              <div class="form-wrap">
                <div class="custom-control">
                  <input class="custom-control-input" id="check-1" type="checkbox">
                  <label class="custom-control-label" for="check-1">Yes, I want to stay up to date on the latest in solar! <br class="d-none d-xl-block"></label>
                </div>
              </div>
              <div class="form-wrap">
                <button class="btn btn-block btn-dark" type="button" id="n" onClick="contatMail();">Submit Message</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer-->
    <?php require_once('footer.php'); ?>