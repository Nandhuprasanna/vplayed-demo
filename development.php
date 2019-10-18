<!Doctype html>
<html>
    <head>
        <title>VplayedDemoApp</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="canonical" href="https://www.vplayed.com">
        <link rel="icon" href="https://d3p5e262x57lj.cloudfront.net/images/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" type="text/css" href="css/reset.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" /> 
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
        <link rel='stylesheet' href='https://cdn.jsdelivr.net/jquery.owlcarousel/1.31/owl.carousel.css'>
        <link rel="stylesheet" href="css/owl-styles.css">
    </head>
    <body>
        
        <header class="header">
            <div class="container">                   
                    <a href="https://www.vplayed.com/" class="logo"><img src="images/logo.png" alt="vplayed logo"></a>
                    <!-- search bar
                    <header id="header-3" class="header">
                    <nav class="header-nav">
                        <div class="search-button">
                        <a href="#" class="search-toggle" data-selector="#header-3"></a>
                        </div>
                        <ul class="menu">
                        <li><a href="#">For Business</a></li>
                        <li><a href="#">For Personal</a></li>
                        <li><a href="#">Pricing</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contact</a></li>
                        </ul>
                        <form action="" class="search-box">
                        <input type="text" class="text search-input" placeholder="Type here to search..." />
                        </form>
                    </nav>
                    </header> -->
                    <div class="select-box">
                        <div class="select-box__current" tabindex="1">
                        <div class="select-box__value">
                            <input class="select-box__input" type="radio" id="0" value="1" name="Ben" checked="checked"/>
                            <span class="select-box__input-text">Toast</span>
                        </div>
                        <div class="select-box__value">
                            <input class="select-box__input" type="radio" id="1" value="2" name="Ben" checked="checked"/>
                            <span class="select-box__input-text">Cheese</span>
                        </div>
                        <div class="select-box__value">
                            <input class="select-box__input" type="radio" id="2" value="3" name="Ben" checked="checked"/>
                            <span class="select-box__input-text">Milk</span>
                        </div>
                        <div class="select-box__value">
                            <input class="select-box__input" type="radio" id="3" value="4" name="Ben" checked="checked"/>
                            <span class="select-box__input-text">Honey</span>
                        </div>
                        <div class="select-box__value">
                            <input class="select-box__input" type="radio" id="4" value="5" name="Ben" checked="checked"/>
                            <span class="select-box__input-text">Explore</span>
                        </div><img class="select-box__icon" src="images/downarrow.png" alt="Arrow Icon" aria-hidden="true"/>
                        </div>
                        <ul class="select-box__list">
                        <li>
                            <label class="select-box__option" for="0" aria-hidden="aria-hidden">Toast</label>
                        </li>
                        <li>
                            <label class="select-box__option" for="1" aria-hidden="aria-hidden">Cheese</label>
                        </li>
                        <li>
                            <label class="select-box__option" for="2" aria-hidden="aria-hidden">Milk</label>
                        </li>
                        <li>
                            <label class="select-box__option" for="3" aria-hidden="aria-hidden">Honey</label>
                        </li>
                        <li>
                            <label class="select-box__option" for="4" aria-hidden="aria-hidden">Explore</label>
                        </li>
                        </ul>
                    </div>
                    
                    <div class="search__container">
                            <input class="search__input" type="text" placeholder="Search for the software or skills you want to learn">
                    </div>
                    <div class="right-menu">
                        <a class="premium" href="#">GO PREMIUM</a>
                        <ul class="menu">
                        <li><a href="javascript:void(0)"><label for="modal-1">Log In</label></a></li>
                        <li><a href="javascript:void(0)"><label for="modal-2">Sign Up</label></a></li>                       
                        
                        <input class="modal-state" id="modal-1" type="checkbox" />
                        <div class="modal">
                          <label class="modal__bg" for="modal-1"></label>
                          <div class="modal__header">
                            <a href="#" class="btn-close" aria-hidden="true">×</a>
                          </div>
                          <div class="modal__inner">
                            <label class="modal__close" for="modal-1"></label>
                             <form>
                                <div class="control-form">
                                  <input type="email" name="email" placeholder="Your e-mail address" required autofocus>
                                </div>                          
                                <div class="control-form">
                                    <input type="password" name="password" placeholder="Your password" required>
                                </div>                          
                                <div class="controls">
                                  <button type="submit" class="button">
                                    SIGN IN
                                  </button>                                  
                                  <a href="#">Cancel</a>
                                </div>
                              </form>
                          </div>
                        </div>
                        
                        <input class="modal-state" id="modal-2" type="checkbox" />
                        <div class="modal">
                          <label class="modal__bg" for="modal-2"></label>
                          <div class="modal__inner">
                            <label class="modal__close" for="modal-2"></label>
                            <form>
                                <div class="control-form">
                                  <input type="email" name="email" placeholder="Your e-mail address" required autofocus>
                                </div>                          
                                <div class="control-form">
                                    <input type="password" name="password" placeholder="Your password" required>
                                </div>                          
                                <div class="controls">
                                  <button type="submit" class="button">
                                    Login
                                  </button>                                  
                                  <a href="#">Cancel</a>
                                </div>
                              </form>
                          </div>
                        </div>
                        </ul>
                    </div>   
                   
                <!-- responsive header -->
                <div class="responsive-header">
                    <div class="respo-header">
                    <a href="#main-menu"
                        id="main-menu-toggle"
                        class="menu-toggle"
                        aria-label="Open main menu">
                        <i class="fa fa-bars" aria-hidden="true"></i>
                    </a>
                    <a href="http://10.10.1.15/vplayed-demo/">
                        <i class="fa fa-home"></i>
                    </a>                   
                    <a href="http://10.10.1.15/vplayed-demo/">
                        <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                    </a>
                    <nav id="main-menu" class="main-menu" aria-label="Main menu">
                        <a href="#main-menu-toggle"
                           id="main-menu-close"
                           class="menu-close"
                           aria-label="Close main menu">
                          <span class="sr-only">Close main menu</span>
                          <span class="fa fa-close" aria-hidden="true"></span>
                        </a>
                        <ul>
                          <li><a class="premium" href="#">GO PREMIUM</a></li>
                          <li><a href="#">My Profile</a></li>
                          <li><a href="#">My Watchlist</a></li>
                          <li><a href="#">Notification</a></li>
                          <li><a href="#">My Favourites</a></li>
                          <li><a href="#">My Transaction</a></li>
                          <li><a href="#">Settings</a></li>
                          <li><a href="#">Logout</a></li>
                        </ul>
                      </nav>
                      <a href="#main-menu-toggle"
                         class="backdrop"
                         tabindex="-1"
                         aria-hidden="true" hidden></a>
                 </div>
                </div>
            </div>
        </header>
        <section id="mainSlider">
            <div id="owl-main" class="owl-carousel height-md owl-inner-nav owl-ui-lg">
                
                <div class="item" style="background-image: url('images/slider/banner1.png');">
                    <div class="container">
                            <div class="caption vertical-center text-right">                                        
                                    <h1 class="fadeInLeft-1">Learn Anything</h1>
                                    <p class="fadeInLeft-2">With our platform, you can quantify your skills, grow in.</p>                                                                                          
                                </div><!-- /.caption -->
                    </div><!-- /.container -->
                </div><!-- /.item -->
                
                <div class="item" style="background-image:url('images/slider/banner2.png');">
                    <div class="container">
                        <div class="caption vertical-center text-right">                                        
                                <h1 class="fadeInLeft-1">Learn Anything</h1>
                                <p class="fadeInLeft-2">With our platform, you can quantify your skills, grow in.</p>                                                    
                        </div><!-- /.caption -->
                    </div><!-- /.container -->
                </div><!-- /.item -->
                
                <div class="item" style="background-image: url('images/slider/banner1.png');">
                    <div class="container">
                        <div class="caption vertical-center text-right">                                        
                                <h1 class="fadeInLeft-1">Learn Anything</h1>
                                <p class="fadeInLeft-2">With our platform, you can quantify your skills, grow in.</p>                                                    
                        </div><!-- /.caption -->
                    </div><!-- /.container -->
                </div><!-- /.item -->
                <div class="item" style="background-image: url('images/slider/banner2.png');">
                    <div class="container">
                            <div class="caption vertical-center text-right">                                        
                                    <h1 class="fadeInLeft-1">Learn Anything</h1>
                                    <p class="fadeInLeft-2">With our platform, you can quantify your skills, grow in.</p>                                                                                          
                                </div><!-- /.caption -->
                    </div><!-- /.container -->
                </div><!-- /.item -->
            </div><!-- /.owl-carousel -->
        </section>                
        <section id="top-categories">
            <div class="container">
                <h2>Top Categories</h2>
                <div id="owl-example" class="owl-carousel">
                    <div class="item">
                        <h4>Design</h4>
                        <p>Learn the basics of the world's fastest growing and most popular programming</p>
                        <img src="images/top-cat-img.svg" alt="design icon">
                    </div>
                
                    <div class="item">
                        <h4>Development</h4>
                        <p>Learn the basics of the world's fastest growing and most popular programming</p>
                        <img src="images/top-cat-img.svg" alt="design icon">
                    </div>
                
                    <div class="item">
                        <h4>Business</h4>
                        <p>Learn the basics of the world's fastest growing and most popular programming</p>
                        <img src="images/top-cat-img.svg" alt="design icon">
                    </div>
                
                    <div class="item">
                        <h4>Marketting</h4>
                        <p>Learn the basics of the world's fastest growing and most popular programming</p>
                        <img src="images/top-cat-img.svg" alt="design icon">
                    </div>
                
                    <div class="item">
                        <h4>Design</h4>
                        <p>Learn the basics of the world's fastest growing and most popular programming</p>
                        <img src="images/top-cat-img.svg" alt="design icon">
                    </div>
                
                    <div class="item">
                        <h4>Development</h4>
                        <p>Learn the basics of the world's fastest growing and most popular programming</p>
                        <img src="images/top-cat-img.svg" alt="design icon">
                    </div>
                </div>
             </div>
    
        </section>
        <section id="filter-categories">                
            <div class="container">
                <h2>Browse Our Top Courses</h2>
                    <div class="filter-container">                             
                        <input type="radio" id="All" name="categories" value="All" checked>
                        <input type="radio" id="CSS" name="categories" value="CSS">
                        <input type="radio" id="JavaScript" name="categories" value="JavaScript">
                        <input type="radio" id="jQuery" name="categories" value="jQuery">
                        <input type="radio" id="WordPress" name="categories" value="WordPress">
                        <input type="radio" id="Slider" name="categories" value="Slider">
                        <input type="radio" id="fullPage.js" name="categories" value="fullPage.js">
                    
                        <ul class="filters">
                        <li>
                            <label for="All">Developer</label>
                        </li>
                        <li>
                            <label for="CSS">Bussiness</label>
                        </li>
                        <li>
                            <label for="JavaScript">Design</label>
                        </li>
                        <li>
                            <label for="jQuery">Development</label>
                        </li>
                        <li>
                            <label for="WordPress">Marketing</label>
                        </li>
                        <li>
                            <label for="Slider">Information Technology</label>
                        </li>
                        <li>
                            <label for="fullPage.js">Personal Development</label>
                        </li>
                    </ul>
                    
                        <ul class="posts">
                        <li class="post" data-category="CSS JavaScript">
                            <figure>
                                <a href="javascript:void(0)" target="_blank">
                                    <img src="images/filters/8.png" alt="">
                                </a>
                                <figcaption>
                                <h3>Code Red: Repair an AWS Environment with a Linux Bastion Host</h3>
                                <h4 class="post-title">
                                    Andrew Larkin, Rob Percival
                                </h4>
                                <span class="post-time-spent"><img src="images/time.png">1 hr 30 min</span>
                                <span class="post-footer">
                                    <span class="level">
                                        <span><img src="images/level.png"></span>
                                        Intermediate
                                    </span>
                                    <span class="views">
                                        <span><img src="images/view.png"></span>
                                        4
                                    </span>
                                    <span class="shares">
                                        <span><img src="images/share.png"></span>
                                        4
                                    </span>
                                </span>
                                </figcaption>
                            </figure>
                        </li>
                        <li class="post" data-category="JavaScript WordPress">
                            <figure>
                                <a href="javascript:void(0)" target="_blank">
                                        <img src="images/filters/7.png" alt="">
                                </a>
                                <figcaption>
                                <h3>Code Red: Repair an AWS Environment with a Linux Bastion Host</h3>
                                <h4 class="post-title">
                                    Andrew Larkin, Rob Percival
                                </h4>
                                <span class="post-time-spent"><img src="images/time.png">1 hr 30 min</span>
                                <span class="post-footer">
                                    <span class="level">
                                        <span><img src="images/level.png"></span>
                                        Intermediate
                                    </span>
                                    <span class="views">
                                        <span><img src="images/view.png"></span>
                                        4
                                    </span>
                                    <span class="shares">
                                        <span><img src="images/share.png"></span>
                                        4
                                    </span>
                                </span>
                                </figcaption>
                            </figure>
                        </li>
                        <li class="post" data-category="CSS JavaScript">                               
                            <figure>
                                <a href="javascript:void(0)" target="_blank">
                                    <img src="images/filters/6.png" alt="">
                                </a>
                                <figcaption>
                                <h3>Code Red: Repair an AWS Environment with a Linux Bastion Host</h3>
                                <h4 class="post-title">
                                    Andrew Larkin, Rob Percival
                                </h4>
                                <span class="post-time-spent"><img src="images/time.png">1 hr 30 min</span>
                                <span class="post-footer">
                                    <span class="level">
                                        <span><img src="images/level.png"></span>
                                        Intermediate
                                    </span>
                                    <span class="views">
                                        <span><img src="images/view.png"></span>
                                        4
                                    </span>
                                    <span class="shares">
                                        <span><img src="images/share.png"></span>
                                        4
                                    </span>
                                </span>
                                </figcaption>
                            </figure>
                        </li>
                        <li class="post" data-category="CSS">
                            <figure>
                                <a href="javascript:void(0)" target="_blank">
                                        <img src="images/filters/3.png" alt="">
                                </a>
                                <figcaption>
                                <h3>Code Red: Repair an AWS Environment with a Linux Bastion Host</h3>
                                <h4 class="post-title">
                                    Andrew Larkin, Rob Percival
                                </h4>
                                <span class="post-time-spent"><img src="images/time.png">1 hr 30 min</span>
                                <span class="post-footer">
                                    <span class="level">
                                        <span><img src="images/level.png"></span>
                                        Intermediate
                                    </span>
                                    <span class="views">
                                        <span><img src="images/view.png"></span>
                                        4
                                    </span>
                                    <span class="shares">
                                        <span><img src="images/share.png"></span>
                                        4
                                    </span>
                                </span>
                                </figcaption>
                            </figure>
                        </li>
                        <li class="post" data-category="fullPage.js">
                            <figure>
                                <a href="javascript:void(0)" target="_blank">
                                        <img src="images/filters/4.png" alt="">
                                </a>
                                <figcaption>
                                <h3>Code Red: Repair an AWS Environment with a Linux Bastion Host</h3>
                                <h4 class="post-title">
                                    Andrew Larkin, Rob Percival
                                </h4>
                                <span class="post-time-spent"><img src="images/time.png">1 hr 30 min</span>
                                <span class="post-footer">
                                    <span class="level">
                                        <span><img src="images/level.png"></span>
                                        Intermediate
                                    </span>
                                    <span class="views">
                                        <span><img src="images/view.png"></span>
                                        4
                                    </span>
                                    <span class="shares">
                                        <span><img src="images/share.png"></span>
                                        4
                                    </span>
                                </span>
                                </figcaption>
                            </figure>
                        </li>
                        <li class="post" data-category="CSS JavaScript">
                            <figure>
                                <a href="javascript:void(0)" target="_blank">
                                <img src="images/filters/1.png" alt="">
                                </a>
                                <figcaption>
                                <h3>Code Red: Repair an AWS Environment with a Linux Bastion Host</h3>
                                <h4 class="post-title">
                                    Andrew Larkin, Rob Percival
                                </h4>
                                <span class="post-time-spent"><img src="images/time.png">1 hr 30 min</span>
                                <span class="post-footer">
                                    <span class="level">
                                        <span><img src="images/level.png"></span>
                                        Intermediate
                                    </span>
                                    <span class="views">
                                        <span><img src="images/view.png"></span>
                                        4
                                    </span>
                                    <span class="shares">
                                        <span><img src="images/share.png"></span>
                                        4
                                    </span>
                                </span>
                                </figcaption>
                            </figure>
                        </li>
                        <li class="post" data-category="jQuery CSS Slider">
                            <figure>
                                <a href="javascript:void(0)" target="_blank">
                                <img src="images/filters/2.png" alt="">
                                </a>
                                <figcaption>
                                <h3>Code Red: Repair an AWS Environment with a Linux Bastion Host</h3>
                                <h4 class="post-title">
                                    Andrew Larkin, Rob Percival
                                </h4>
                                <span class="post-time-spent"><img src="images/time.png">1 hr 30 min</span>
                                <span class="post-footer">
                                    <span class="level">
                                        <span><img src="images/level.png"></span>
                                        Intermediate
                                    </span>
                                    <span class="views">
                                        <span><img src="images/view.png"></span>
                                        4
                                    </span>
                                    <span class="shares">
                                        <span><img src="images/share.png"></span>
                                        4
                                    </span>
                                </span>
                                </figcaption>
                            </figure>
                        </li>
                        <li class="post" data-category="jQuery fullPage.js">
                        <figure>
                            <a href="javascript:void(0)" target="_blank">
                                <img src="images/filters/3.png" alt="">
                            </a>
                            <figcaption>
                            <h3>Code Red: Repair an AWS Environment with a Linux Bastion Host</h3>
                            <h4 class="post-title">
                                Andrew Larkin, Rob Percival
                            </h4>
                            <span class="post-time-spent"><img src="images/time.png">1 hr 30 min</span>
                            <span class="post-footer">
                                <span class="level">
                                    <span><img src="images/level.png"></span>
                                    Intermediate
                                </span>
                                <span class="views">
                                    <span><img src="images/view.png"></span>
                                    4
                                </span>
                                <span class="shares">
                                    <span><img src="images/share.png"></span>
                                    4
                                </span>
                            </span>
                            </figcaption>
                        </figure>
                        </li>
                    </ul>
                    <a class="more" href="javascript:void(0)">Show More</a>
                  </div>               
            </div>
        </section>
        <section id="learners-slider">
           <div class="container">
           <h2>Learners Are Viewing</h2>
            <div class="carousel-wrap">
                <div class="owl-carousel">
                    <div class="item post">
                        <article>
                        <figure>
                            <a href="javascript:void(0)" target="_blank">
                                    <img src="images/filters/1.png" alt="">
                            </a>
                            <figcaption>
                            <h3>Code Red: Repair an AWS Environment with a Linux Bastion Host</h3>
                            <h4 class="post-title">
                                Andrew Larkin, Rob Percival
                            </h4>
                            <span class="post-time-spent"><img src="images/time.png">1 hr 30 min</span>
                            <span class="post-footer">
                                <span class="level">
                                    <span><img src="images/level.png"></span>
                                    Intermediate
                                </span>
                                <span class="views">
                                    <span><img src="images/view.png"></span>
                                    4
                                </span>
                                <span class="shares">
                                    <span><img src="images/share.png"></span>
                                    4
                                </span>
                            </span>
                            </figcaption>
                        </figure>
                        </article>
                    </div>
                    <div class="item post">
                        <article>
                        <figure>
                            <a href="javascript:void(0)" target="_blank">
                                    <img src="images/filters/2.png" alt="">
                            </a>
                            <figcaption>
                            <h3>Code Red: Repair an AWS Environment with a Linux Bastion Host</h3>
                            <h4 class="post-title">
                                Andrew Larkin, Rob Percival
                            </h4>
                            <span class="post-time-spent"><img src="images/time.png">1 hr 30 min</span>
                            <span class="post-footer">
                                <span class="level">
                                    <span><img src="images/level.png"></span>
                                    Intermediate
                                </span>
                                <span class="views">
                                    <span><img src="images/view.png"></span>
                                    4
                                </span>
                                <span class="shares">
                                    <span><img src="images/share.png"></span>
                                    4
                                </span>
                            </span>
                            </figcaption>
                        </figure>
                        </article>
                    </div>
                    <div class="item post">
                        <article>
                        <figure>
                            <a href="javascript:void(0)" target="_blank">
                                    <img src="images/filters/3.png" alt="">
                            </a>
                            <figcaption>
                            <h3>Code Red: Repair an AWS Environment with a Linux Bastion Host</h3>
                            <h4 class="post-title">
                                Andrew Larkin, Rob Percival
                            </h4>
                            <span class="post-time-spent"><img src="images/time.png">1 hr 30 min</span>
                            <span class="post-footer">
                                <span class="level">
                                    <span><img src="images/level.png"></span>
                                    Intermediate
                                </span>
                                <span class="views">
                                    <span><img src="images/view.png"></span>
                                    4
                                </span>
                                <span class="shares">
                                    <span><img src="images/share.png"></span>
                                    4
                                </span>
                            </span>
                            </figcaption>
                        </figure>
                        </article>
                    </div>
                    <div class="item post">
                        <article>
                        <figure>
                            <a href="javascript:void(0)" target="_blank">
                                    <img src="images/filters/4.png" alt="">
                            </a>
                            <figcaption>
                            <h3>Code Red: Repair an AWS Environment with a Linux Bastion Host</h3>
                            <h4 class="post-title">
                                Andrew Larkin, Rob Percival
                            </h4>
                            <span class="post-time-spent"><img src="images/time.png">1 hr 30 min</span>
                            <span class="post-footer">
                                <span class="level">
                                    <span><img src="images/level.png"></span>
                                    Intermediate
                                </span>
                                <span class="views">
                                    <span><img src="images/view.png"></span>
                                    4
                                </span>
                                <span class="shares">
                                    <span><img src="images/share.png"></span>
                                    4
                                </span>
                            </span>
                            </figcaption>
                        </figure>
                        </article>
                    </div>
                    <div class="item post">
                        <article>
                        <figure>
                            <a href="javascript:void(0)" target="_blank">
                                    <img src="images/filters/5.png" alt="">
                            </a>
                            <figcaption>
                            <h3>Code Red: Repair an AWS Environment with a Linux Bastion Host</h3>
                            <h4 class="post-title">
                                Andrew Larkin, Rob Percival
                            </h4>
                            <span class="post-time-spent"><img src="images/time.png">1 hr 30 min</span>
                            <span class="post-footer">
                                <span class="level">
                                    <span><img src="images/level.png"></span>
                                    Intermediate
                                </span>
                                <span class="views">
                                    <span><img src="images/view.png"></span>
                                    4
                                </span>
                                <span class="shares">
                                    <span><img src="images/share.png"></span>
                                    4
                                </span>
                            </span>
                            </figcaption>
                        </figure>
                        </article>
                    </div>
                    <div class="item post">
                        <article>
                        <figure>
                            <a href="javascript:void(0)" target="_blank">
                                    <img src="images/filters/6.png" alt="">
                            </a>
                            <figcaption>
                            <h3>Code Red: Repair an AWS Environment with a Linux Bastion Host</h3>
                            <h4 class="post-title">
                                Andrew Larkin, Rob Percival
                            </h4>
                            <span class="post-time-spent"><img src="images/time.png">1 hr 30 min</span>
                            <span class="post-footer">
                                <span class="level">
                                    <span><img src="images/level.png"></span>
                                    Intermediate
                                </span>
                                <span class="views">
                                    <span><img src="images/view.png"></span>
                                    4
                                </span>
                                <span class="shares">
                                    <span><img src="images/share.png"></span>
                                    4
                                </span>
                            </span>
                            </figcaption>
                        </figure>
                        </article>
                    </div>
                    <div class="item post">
                        <article>
                        <figure>
                            <a href="javascript:void(0)" target="_blank">
                                    <img src="images/filters/7.png" alt="">
                            </a>
                            <figcaption>
                            <h3>Code Red: Repair an AWS Environment with a Linux Bastion Host</h3>
                            <h4 class="post-title">
                                Andrew Larkin, Rob Percival
                            </h4>
                            <span class="post-time-spent"><img src="images/time.png">1 hr 30 min</span>
                            <span class="post-footer">
                                <span class="level">
                                    <span><img src="images/level.png"></span>
                                    Intermediate
                                </span>
                                <span class="views">
                                    <span><img src="images/view.png"></span>
                                    4
                                </span>
                                <span class="shares">
                                    <span><img src="images/share.png"></span>
                                    4
                                </span>
                            </span>
                            </figcaption>
                        </figure>
                        </article>
                    </div>
                </div>
            </div>
         </div>
        </section>
        <section id="download-links">
            <div class="container">
                <h2>Watch Courses Anywhere, Any Device, Anytime</h2>
                <p>Watch your daily dose of Learning anytime you want it on our Android & iOS apps.</p>
                <ul>
                    <li><a href="javascript:void(0)"><img src="images/gplay.svg">Google Play</a></li>
                    <li><a href="javascript:void(0)"><img src="images/appstr.svg">App Store</a></li>
                </ul>
            </div>
        </section>
        <footer>                     
            <div class="footer">
            <div class="container">
                <div class="flex-cols">
                    <div class="col">
                        <h1>Company</h1>
                        <ul>
                        <li>Pricing</li>
                        <li>About Us</li>
                        <li>Terms & Conditions</li>
                        <li>Publishing</li>
                        <li>License</li>
                        <li>Privacy Policy</li>
                        </ul>
                    </div>
                    <div class="col">
                        <h1>Categories</h1>
                        <ul>
                        <li>About</li>
                        <li>Mission</li>
                        <li>Services</li>
                        <li>Social</li>
                        <li>Get in touch</li>
                        </ul>
                    </div>
                    <div class="col">
                        <h1>Contact Us</h1>
                        <ul class="info">
                        <li><a href="javascript:void(0)"><img src="images/phone.png">+91 987654456</a></li>
                        <li><a href="javascript:void(0)"><img src="images/mail.png">vplay@contus.in</a></li>                        
                        </ul>
                    </div>
                    <div class="col">
                        <h1>App Stores</h1>
                        <ul class="info store">
                        <li><a href="javascript:void(0)"><img src="images/apple-store.svg">Google Play</a></li>
                        <li><a href="javascript:void(0)"><img src="images/google-play.svg">App Store</a></li>                        
                        </ul>
                    </div>
                    <div class="col social">
                        <h1>Connect with us</h1>
                        <ul>
                        <li><img src="images/instagram.svg" width="32" style="width: 32px;"></li>
                        <li><img src="https://svgshare.com/i/5eA.svg" width="32" style="width: 32px;"></li>
                        <li><img src="images/instagram.svg" width="32" style="width: 32px;"></li>
                        </ul>
                    </div>
                </div>
            <div class="clearfix"></div>
            </div>           
            </div>  
            <div class="footer-bottom">
                    <p>Copyright &copy; <script type="text/javascript">document.write(new Date().getFullYear());</script> Vplay</p>
            </div>          
        </footer>
       <!-- partial -->
        <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
        <script src='https://cdn.jsdelivr.net/jquery.owlcarousel/1.31/owl.carousel.js'></script>
        <script  src="js/script.js"></script>
        <script type="text/javascript">               
             $(function() {
                var header = $(".header");
                $(window).scroll(function() {    
                    var scroll = $(window).scrollTop();
                
                    if (scroll >= 500) {
                        $(".header").addClass("fixed");
                        $(".header .responsive-header .respo-header").addClass("fixed");
                    } else {
                        $(".header .responsive-header .respo-header").removeClass("fixed");
                        $(".header").removeClass("fixed");
                    }
                });
            });  
            
            $(document).ready(function() { 
                var catgrsowl = $('#top-categories .owl-carousel');
                catgrsowl.owlCarousel({
                    items:4,
                    loop:true,
                    margin:10,
                    navigation: true,       
                    navClass: ['owl-prev', 'owl-next'],
                    navigationText : ['<i class="fa fa-chevron-left"></i>','<i class="fa fa-chevron-right"></i>'],
                    autoplay: true,                    
                    autoplayTimeout:1000,
                    autoplayHoverPause: true
                });
                $('.play').on('click',function(){
                    catgrsowl.trigger('play.owl.autoplay',[1000])
                })
                $('.stop').on('click',function(){
                    catgrsowl.trigger('stop.owl.autoplay')
                })     
                /*learnercarousel*/                                                                                                         
                var learnerowl = $('#learners-slider .owl-carousel');
                learnerowl.owlCarousel({
                    items:4,
                    loop:true,
                    margin:10,
                    navigation: true,       
                    navClass: ['owl-prev', 'owl-next'],
                    navigationText : ['<i class="fa fa-chevron-left"></i>','<i class="fa fa-chevron-right"></i>'],
                    autoplay: true,                    
                    autoplayTimeout:1000,
                    autoplayHoverPause: true
                });
                $('.play').on('click',function(){
                    learnerowl.trigger('play.owl.autoplay',[1000])
                })
                $('.stop').on('click',function(){
                    learnerowl.trigger('stop.owl.autoplay')
                })          
            });
        </script>
   </body>
</html>