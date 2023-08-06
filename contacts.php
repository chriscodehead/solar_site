<?php
require_once('library.php');
$active1 = 'active';
$title = 'Contact us | We provide the first-class solar energy solutions to families and businesses across the - ' . $siteName;
require_once('head.php'); ?>

<body>
  <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
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
    <!-- Breadcrumbs-->
    <div class="breadcrumbs-custom bg-white">
      <div class="container">
        <ul class="breadcrumbs-custom-path">
          <li><a href="./">Home</a></li>
          <li class="active">Contacts</li>
        </ul>
      </div>
    </div>
    <!-- Get in touch-->
    <section class="section section-lg section-get-in-touch bg-light">
      <div class="container">
        <div class="row row-30 justify-content-between">
          <div class="col-xl-5 col-md-6">
            <h2>Get in touch with our team today</h2>
            <p>Together, let's make a positive impact one solar panel and wind turbine at a time</p>
            <ul class="contacts-list fz-16 offset-md">
              <li class="contacts-item">
                <div class="unit unit-md">
                  <div class="unit-left">
                    <svg class="icon-svg" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M17.9931 6.2697L11.2867 1.70188C9.91267 0.766006 8.08654 0.766041 6.71254 1.70198L0.0069105 6.2697H17.9931Z"></path>
                      <path d="M17.9931 15.4284V7.12993C17.9931 7.03792 18.0087 6.35741 17.9931 6.2697L9.48084 12.0323C9.47493 12.0359 9.46875 12.0388 9.46258 12.0418C9.45789 12.044 9.4532 12.0463 9.44862 12.0488C9.43741 12.0548 9.426 12.0607 9.41459 12.0663C9.35435 12.0965 9.2928 12.1209 9.22976 12.1368C9.22618 12.1378 9.2226 12.1384 9.21902 12.139C9.2161 12.1396 9.21317 12.1401 9.21024 12.1408C9.14099 12.157 9.07084 12.1667 9.00079 12.1667H8.99929C8.92924 12.1667 8.85909 12.1567 8.78983 12.1408L8.78477 12.1398C8.77995 12.1389 8.77513 12.1381 8.77032 12.1368C8.70717 12.1209 8.64543 12.0965 8.58549 12.0663C8.57408 12.0607 8.56267 12.0548 8.55146 12.0488C8.54692 12.0463 8.54232 12.0441 8.53772 12.0419C8.53147 12.0389 8.52524 12.0359 8.51924 12.0323L0.0069105 6.2697C-0.00870073 6.35741 0.00701825 7.03811 0.00701825 7.12993V15.4284C0.00701825 16.2964 0.726944 17 1.61539 17H16.3838C17.2721 17 17.9931 16.2965 17.9931 15.4284Z"></path>
                    </svg>
                  </div>
                  <div class="unit-body"><a class="link-inherit" href="mailto:<?php print $siteEmail; ?>"><?php print $siteEmail; ?></a></div>
                </div>
              </li>
              <li class="contacts-item">
                <div class="unit unit-md">
                  <div class="unit-left">
                    <svg class="icon-svg" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M9 0C4.58881 0 1 3.44722 1 7.68442C1 9.47986 1.64439 11.1333 2.72263 12.4429L6.28085 16.7401C7.67183 18.42 10.3282 18.42 11.7191 16.7401L15.2774 12.4429C16.3556 11.1333 17 9.47986 17 7.68442C17 3.44722 13.4112 0 9 0ZM9 11.0409C7.0144 11.0409 5.39899 9.48922 5.39899 7.58194C5.39899 5.67466 7.0144 4.12296 9 4.12296C10.9856 4.12296 12.601 5.67466 12.601 7.58194C12.601 9.48922 10.9856 11.0409 9 11.0409Z"></path>
                    </svg>
                  </div>
                  <div class="unit-body"><a class="link-inherit" href="#"><?php print $siteAddress; ?></a></div>
                </div>
              </li>
              <li class="contacts-item">
                <div class="unit unit-md">
                  <div class="unit-left">
                    <svg class="icon-svg" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M4.69223 13.4304C8.35635 16.9385 12.8158 17.794 15.5339 17.995C16.8023 18.0887 18.0001 16.8559 18 15.58L17.9998 13.7451C17.9998 12.8857 17.4541 12.1217 16.6428 11.8454L13.5751 10.8006C12.9871 10.6003 12.3397 10.6854 11.823 11.0308L11.3721 11.3323C10.7965 11.7171 10.0543 11.7905 9.46726 11.4237C8.90849 11.0746 8.38727 10.6613 7.91638 10.1968C7.4071 9.69431 6.94147 9.11658 6.55586 8.5C6.18834 7.91237 6.26097 7.16819 6.64459 6.591L6.94924 6.13264C7.29141 5.6178 7.37764 4.97337 7.18292 4.38623L6.18358 1.37298C5.91168 0.553143 5.14712 1.71111e-06 4.28583 1.17539e-06L2.39616 0C1.20426 -7.41365e-07 0.00517616 1.03485 0.000144684 2.23052C-0.01115 4.91456 0.630996 9.54209 4.69223 13.4304Z"></path>
                    </svg>
                  </div>
                  <div class="unit-body"><a class="link-inherit" href="tel:<?php print $sitePhone; ?>"><?php print $sitePhone; ?></a></div>
                </div>
              </li>
              <li class="contacts-item">
                <div class="unit unit-md">
                  <div class="unit-left">
                    <svg class="icon-svg" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M9 18C13.9706 18 18 13.9706 18 9C18 4.02944 13.9706 0 9 0C4.02944 0 0 4.02944 0 9C0 13.9706 4.02944 18 9 18Z"></path>
                      <path d="M9 4V9H13" stroke="white" stroke-width="2.3" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                  </div>
                  <div class="unit-body">
                    <p>Monday - Friday: 8am - 7pm<br>Saturday - Sunday: 10am - 6pm</p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
          <div class="col-md-6">

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
                  <label class="custom-control-label" for="check-1">Yes, I want to stay up to date on the latest in solar! <br class="d-none d-xl-block"> Subscribe me to your newsletter.</label>
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