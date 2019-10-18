 <header class="header">
            <div class="container">                   
                    <a href="https://www.vplayed.com/" class="logo"><img src="assets/images/logo.png" alt="vplayed logo"></a>
                    <!-- search bar -->
                    <div id="header-3" >
                      <nav class="header-nav">
                          <div class="search-button">
                          <a href="#" class="search-toggle" data-selector="#header-3"></a>
                          </div>
                          <ul class="menu">
                          <li><a href="#"><img src="assets/images/bell.png"></a></li>
                          <li><a href="#"><img src="assets/images/user.png"></a></li>
                          </ul>
                          <form action="" class="search-box">
                          <input type="text" class="text search-input" placeholder="Type here to search..." />
                          </form>
                      </nav>
                    </div>
                    <label class="select-box">
                        <div class="dd-button">
                          Explore
                        </div>
                        <input type="checkbox" class="dd-input" id="test">
                        <ul class="dd-menu">
                          <li>Action</li>
                          <li>Another action</li>
                          <li>Something else here</li>                      
                        </ul>
                    </label>
                    <!-- <div class="select-box">
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
                        </div><img class="select-box__icon" src="assets/images/downarrow.png" alt="Arrow Icon" aria-hidden="true"/>
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
                    </div> -->
                    
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
                    <label for="modal-1">
                        <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                    </label>
                    </a>
                    <nav id="main-menu" class="main-menu" aria-label="Main menu">
                        <a href="#main-menu-toggle"
                           id="main-menu-close"
                           class="menu-close"
                           aria-label="Close main menu">
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
