<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>" class="no-js">
  <head>
    <meta charset="<?php bloginfo('charset') ?>" />
    <title>
      Mahmud Hasan - Web Developer
    </title>
    <meta
      name="description"
      content="Creative Agency, Marketing Agency Template"
    />
    <meta name="keywords" content="Creative Agency, Marketing Agency" />
    <meta name="author" content="rajesh-doot" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="theme-color" content="#ffd6d6" />
    <!--website-favicon-->
    <link href="<?php echo get_template_directory_uri(); ?> /images/favicon.png" rel="icon" />
    <!--plugin-css-->
    <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo get_template_directory_uri(); ?>/css/plugin.min.css" rel="stylesheet" />
    <link href="<?php echo get_template_directory_uri(); ?>/css/all.min.css" rel="stylesheet" />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Tangerine"
    />
    <!-- template-style-->
    <link href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet" />
    <link href="<?php echo get_template_directory_uri(); ?>/css/responsive.css" rel="stylesheet" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />
    <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet" />
    
  </head>
  <body>
    <!--Start Preloader -->
    <div class="onloadpage" id="page_loader">
      <div class="pre-content">
        <div class="logo-pre">
          <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Logo" class="img-fluid" />
        </div>
        <div class="pre-text- text-radius text-light text-animation bg-b">
          Niwax - Creative Agency & Portfolio HTML Template Are 2 Seconds Away.
          Have Patience
        </div>
      </div>
    </div>
    <!--End Preloader -->
    <!--Start Header -->
    <header class="header-pr top-header">
      <nav
        class="
          navbar navbar-expand-lg navbar-light
          justify-content-right
          navbar-mobile
          fixed-top
          navfix
        "
      >
        <div class="container">
          <a class="navbar-brand" href="./">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Logo" width="100"
          /></a>
          <button
            class="navbar-toggler mobile-none"
            type="button"
            data-toggle="collapse"
            data-target="#navbar4"
            aria-controls="navbar4"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div
            class="collapse navbar-collapse animate slideIn mobile-none"
            id="navbar4"
          >
          <?php
              $args = array(
              'theme_location' => 'top-bar',
              'depth'          => 10,
              'container'      => false,
              'menu_class'     => 'navbar-nav d-menu',
              'walker'         => new Bootstrap_Walker_Nav_Menu()
                      );
              wp_nav_menu($args);                      
          ?>
            <!-- <ul class="mr-auto"></ul> -->
            <!-- <ul class="navbar-nav d-menu">
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="homepage1"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                  >Home</a
                >
                <div
                  class="dropdown-menu animate slideIn"
                  aria-labelledby="homepage1"
                >
                  <a class="dropdown-item" href="freelance-portfolio.html"
                    >Freelance Portfolio</a
                  >
                  <a class="dropdown-item" href="freelance-portfolio-dark.html"
                    >Freelance Portfolio - Dark</a
                  >
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html">About </a>
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="Services"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                  >Services</a
                >
                <div
                  class="dropdown-menu animate slideIn"
                  aria-labelledby="Services"
                >
                  <a class="dropdown-item" href="service-card.html">Service</a>
                  <a class="dropdown-item" href="service-web.html"
                    >Service Details</a
                  >
                </div>
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="Portfolio"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  Portfolio</a
                >
                <div
                  class="dropdown-menu animate slideIn"
                  aria-labelledby="Portfolio"
                >
                  <a class="dropdown-item" href="portfolio.html"
                    >Portfolio Grid</a
                  >
                  <a class="dropdown-item" href="portfolio-details.html"
                    >Portfolio Details</a
                  >
                </div>
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="Pages"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                  >Pages</a
                >
                <div
                  class="dropdown-menu animate slideIn dropdown-menu-right"
                  aria-labelledby="Pages"
                >
                  <div class="container">
                    <div class="row no-gutters">
                      <div class="col-md-6">
                        <ul class="list-mnu">
                          <li>
                            <a class="dropdown-item" href="pricing.html"
                              >Pricing</a
                            >
                          </li>
                          <li>
                            <a class="dropdown-item" href="client-reviews.html"
                              >Client Reviews</a
                            >
                          </li>
                          <li>
                            <a class="dropdown-item" href="clients.html"
                              >Our Clients</a
                            >
                          </li>
                          <li>
                            <a class="dropdown-item" href="case-study.html"
                              >Case Study</a
                            >
                          </li>
                          <li>
                            <a
                              class="dropdown-item"
                              href="case-study-details.html"
                              >Case Study Single</a
                            >
                          </li>
                          <li>
                            <a class="dropdown-item" href="typography.html"
                              >Typography</a
                            >
                          </li>
                        </ul>
                      </div>
                      <div class="col-md-6">
                        <ul class="list-mnu">
                          <li>
                            <a class="dropdown-item" href="faq.html">FAQs</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="button.html"
                              >Buttons</a
                            >
                          </li>
                          <li>
                            <a class="dropdown-item" href="error.html"
                              >404 Page</a
                            >
                          </li>
                          <li>
                            <a
                              class="dropdown-item"
                              href="development-process.html"
                              >Development Process</a
                            >
                          </li>
                          <li>
                            <a class="dropdown-item" href="gradients.html"
                              >Background Gradients</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="Blog"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                  >Blog</a
                >
                <div
                  class="dropdown-menu animate slideIn"
                  aria-labelledby="Blog"
                >
                  <a class="dropdown-item" href="blog-grid-1.html">Blog Grid</a>
                  <a class="dropdown-item" href="blog-single.html"
                    >Blog Single</a
                  >
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="get-quote.html">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link custom-btn lnk btn-main bg-btn" href="#"
                  >Get A Quote <span class="circle"></span
                ></a>
              </li>
            </ul> -->
          </div>
          <div class="mobile-menu">
            <ul class="mob-nav">
              <li>
                <a class="custom-btn lnk btn-main bg-btn" href="#"
                  >Get A Quote<span class="circle"></span
                ></a>
              </li>
              <li class="ml8">
                <a class="toggle mobilemenu" href="#"><span></span></a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!--Mobile Menu-->
      <!--Mobile Menu-->
      <nav id="main-nav">
        <ul class="first-nav">
          <li>
            <a href="#">Home</a>
            <ul>
              <li>
                <a href="#">Homepage Light</a>
                <ul>
                  <li>
                    <a href="index.html"
                      >Digital Agency
                      <span class="badge badge-warning">New</span></a
                    >
                  </li>
                  <li><a href="index0.html">Web Development</a></li>
                  <li><a href="index1.html">Digital Marketing</a></li>
                  <li><a href="index2.html">Freelance Portfolio</a></li>
                  <li><a href="index3.html">Lead Generation Agency</a></li>
                </ul>
              </li>
              <li>
                <a href="#">Homepage Dark</a>
                <ul>
                  <li>
                    <a href="index-dark.html"
                      >Digital Agency
                      <span class="badge badge-warning">New</span></a
                    >
                  </li>
                  <li><a href="index0-dark.html">Web Development</a></li>
                  <li><a href="index1-dark.html">Digital Marketing</a></li>
                  <li><a href="index2-dark.html">Freelance Portfolio</a></li>
                  <li><a href="index3-dark.html">Lead Generation Agency</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li>
            <a href="#">Company</a>
            <ul>
              <li><a href="about.html">About Us</a></li>
              <li><a href="why-us.html">Why Us</a></li>
              <li><a href="team.html">Our Team</a></li>
              <li><a href="team-details.html">Team Single</a></li>
              <li><a href="case-study.html">Case Study</a></li>
              <li><a href="case-study-details.html">Case Study Single</a></li>
              <li><a href="mission-vision.html">Mission & Vision</a></li>
              <li>
                <a href="development-process.html">Our Development Process</a>
              </li>
              <li><a href="client-reviews.html">Client Reviews</a></li>
              <li><a href="clients.html">Our Clients</a></li>
              <li><a href="blog-grid.html">Blog Grid</a></li>
              <li><a href="blog-single.html">Blog Single</a></li>
              <li><a href="portfolio.html">Portfolio Grid</a></li>
              <li><a href="portfolio-block.html">Portfolio Block</a></li>
              <li><a href="portfolio-details.html">Portfolio Details</a></li>
              <li><a href="get-quote.html">Contact Us</a></li>
            </ul>
          </li>
          <li>
            <a href="#">Services</a>
            <ul>
              <li>
                <a href="#">Web Development</a>
                <ul>
                  <li><a href="service-details.html">Web Development</a></li>
                  <li><a href="#" class="disabled">PHP Development</a></li>
                  <li><a href="#" class="disabled">Angular JS</a></li>
                  <li><a href="#" class="disabled">Laravel</a></li>
                  <li><a href="#" class="disabled">Node Js</a></li>
                  <li><a href="#" class="disabled">Codeigniter</a></li>
                  <li><a href="#" class="disabled">ASP.Net</a></li>
                </ul>
              </li>
              <li>
                <a href="#">Mobile App Development</a>
                <ul>
                  <li>
                    <a href="service-details2.html">Mobile App Development</a>
                  </li>
                  <li><a href="#" class="disabled">Android App</a></li>
                  <li><a href="#" class="disabled">Cross App</a></li>
                  <li><a href="#" class="disabled">Windows App</a></li>
                  <li><a href="#" class="disabled">Custom Application</a></li>
                  <li><a href="#" class="disabled">Wearable App</a></li>
                </ul>
              </li>
              <li>
                <a href="#">Digital Marketing</a>
                <ul>
                  <li>
                    <a href="service-details3.html"
                      >Digital Marketing Service</a
                    >
                  </li>
                  <li>
                    <a href="#" class="disabled">Social Media Marketing</a>
                  </li>
                  <li><a href="#" class="disabled">Pay per Click</a></li>
                  <li><a href="#" class="disabled">Content Writing</a></li>
                  <li><a href="#" class="disabled">Email Marketing</a></li>
                </ul>
              </li>
              <li>
                <a href="#">Graphic Design</a>
                <ul>
                  <li>
                    <a href="service-details4.html">Graphic Design Service </a>
                  </li>
                  <li><a href="#" class="disabled">Brochure</a></li>
                  <li><a href="#" class="disabled">Print & Packaging</a></li>
                  <li><a href="#" class="disabled">Logo Design</a></li>
                  <li><a href="#" class="disabled">Branding</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li>
            <a href="#">Shortcodes</a>
            <ul>
              <li><a href="pricing.html">Pricing</a></li>
              <li><a href="service.html">Service Card</a></li>
              <li><a href="typography.html">Typography</a></li>
              <li><a href="button.html">Buttons</a></li>
              <li><a href="locations.html">Office Location</a></li>
              <li><a href="faq.html">FAQs</a></li>
              <li><a href="accordion.html">Accordion</a></li>
              <li><a href="error.html">404 Page</a></li>
              <li><a href="gradients.html">Background Gradients</a></li>
              <li><a href="header-v1.html">Header v1</a></li>
              <li><a href="header-v2.html">Header v2</a></li>
              <li><a href="header-v3.html">Header v3</a></li>
              <li><a href="footer-design.html">Footer Design</a></li>
            </ul>
          </li>
          <li><a href="portfolio-block.html">Portfolio</a></li>
          <li><a href="get-quote.html">Contact</a></li>
        </ul>
        <ul class="bottom-nav">
          <li class="prb">
            <a href="tel:+11111111111">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 384">
                <path
                  d="M353.188,252.052c-23.51,0-46.594-3.677-68.469-10.906c-10.719-3.656-23.896-0.302-30.438,6.417l-43.177,32.594
    c-50.073-26.729-80.917-57.563-107.281-107.26l31.635-42.052c8.219-8.208,11.167-20.198,7.635-31.448
    c-7.26-21.99-10.948-45.063-10.948-68.583C132.146,13.823,118.323,0,101.333,0H30.813C13.823,0,0,13.823,0,30.813
    C0,225.563,158.438,384,353.188,384c16.99,0,30.813-13.823,30.813-30.813v-70.323C384,265.875,370.177,252.052,353.188,252.052z"
                />
              </svg>
            </a>
          </li>
          <li class="prb">
            <a
              href="/cdn-cgi/l/email-protection#7c0f1311190b191e111918151d3c1b111d1510521f1311"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
              >
                <path
                  d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"
                />
                <path d="M0 0h24v24H0z" fill="none" />
              </svg>
            </a>
          </li>
          <li class="prb">
            <a href="skype:niwax.company?call">
              <svg
                enable-background="new 0 0 24 24"
                height="18"
                viewBox="0 0 24 24"
                width="18"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="m23.309 14.547c1.738-7.81-5.104-14.905-13.139-13.543-4.362-2.707-10.17.352-10.17 5.542 0 1.207.333 2.337.912 3.311-1.615 7.828 5.283 14.821 13.311 13.366 5.675 3.001 11.946-2.984 9.086-8.676zm-7.638 4.71c-2.108.867-5.577.872-7.676-.227-2.993-1.596-3.525-5.189-.943-5.189 1.946 0 1.33 2.269 3.295 3.194.902.417 2.841.46 3.968-.3 1.113-.745 1.011-1.917.406-2.477-1.603-1.48-6.19-.892-8.287-3.483-.911-1.124-1.083-3.107.037-4.545 1.952-2.512 7.68-2.665 10.143-.768 2.274 1.76 1.66 4.096-.175 4.096-2.207 0-1.047-2.888-4.61-2.888-2.583 0-3.599 1.837-1.78 2.731 2.466 1.225 8.75.816 8.75 5.603-.005 1.992-1.226 3.477-3.128 4.253z"
                />
              </svg>
            </a>
          </li>
        </ul>
      </nav>
    </header>