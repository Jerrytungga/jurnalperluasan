<!DOCTYPE HTML>
<html lang="en">
    <?php
    include 'head.php';
    ?>
    
<body class="theme-light" data-highlight="blue2">
    
<div id="preloader"><div class="spinner-border color-highlight" role="status"></div></div>
    
<div id="page">
    
    <!-- header and footer bar go here-->
    <div class="header header-fixed header-auto-show header-logo-app">
        <a href="index.html" class="header-title">AZURES</a>
        <a href="#" data-back-button class="header-icon header-icon-1"><i class="fas fa-arrow-left"></i></a>
        <a href="#" data-toggle-theme class="header-icon header-icon-2 show-on-theme-dark"><i class="fas fa-sun"></i></a>
        <a href="#" data-toggle-theme class="header-icon header-icon-2 show-on-theme-light"><i class="fas fa-moon"></i></a>
        <a href="#" data-menu="menu-highlights" class="header-icon header-icon-3"><i class="fas fa-brush"></i></a>
    </div>
    <div id="footer-bar" class="footer-bar-5">
        <!-- <a href="index-components.html"><i data-feather="heart" data-feather-line="1" data-feather-size="21" data-feather-color="red2-dark" data-feather-bg="red2-fade-light"></i><span>Features</span></a> -->
        <!-- <a href="index-media.html"><i data-feather="image" data-feather-line="1" data-feather-size="21" data-feather-color="green1-dark" data-feather-bg="green1-fade-light"></i><span>Media</span></a> -->
        <a href="index.php" class="active-nav"><i data-feather="home" data-feather-line="1" data-feather-size="21" data-feather-color="blue2-dark" data-feather-bg="blue2-fade-light"></i><span>Home</span></a>
        <a href="index-pages.html"><i data-feather="file" data-feather-line="1" data-feather-size="21" data-feather-color="brown1-dark" data-feather-bg="brown1-fade-light"></i><span>JADWAL</span></a>
        <a href="index-settings.html"><i data-feather="settings" data-feather-line="1" data-feather-size="21" data-feather-color="gray2-dark" data-feather-bg="gray2-fade-light"></i><span>Settings</span></a>
    </div>
    
    <div class="page-content">
        
        <div class="page-title page-title-small">
            <h2><a href="#" data-back-button><i class="fa fa-arrow-left"></i></a>Settings</h2>
            <a href="#" data-menu="menu-main" class="bg-fade-gray1-dark shadow-xl preload-img" data-src="images/avatars/5s.png"></a>
        </div>
        <div class="card header-card shape-rounded" data-card-height="210">
            <div class="card-overlay bg-highlight opacity-95"></div>
            <div class="card-overlay dark-mode-tint"></div>
            <div class="card-bg preload-img" data-src="images/pictures/20s.jpg"></div>
        </div>
        
        <div class="card card-style">
            <div class="content mt-0 mb-2">
                <div class="list-group list-custom-large mb-4">
                    <a href="#" data-toggle-theme class="show-on-theme-light">
                        <i class="fa font-14 fa-moon bg-brown1-dark rounded-sm"></i>
                        <span>Dark Mode</span>
                        <strong>Auto Dark Mode Available Too</strong>
                        <i class="fa fa-angle-right mr-2"></i>
                    </a>     
                    <a href="#" data-toggle-theme class="show-on-theme-dark">
                        <i class="fa font-14 fa-lightbulb bg-yellow1-dark rounded-sm"></i>
                        <span>Light Mode</span>
                        <strong>Auto Dark Mode Available Too</strong>
                        <i class="fa fa-angle-right mr-2"></i>
                    </a>     
                    <a href="#" data-menu="menu-highlights">
                        <i class="fa font-14 fa-brush bg-highlight color-white rounded-sm"></i>
                        <span>Color Scheme</span>
                        <strong>A tone of Colors, Just for You</strong>
                        <i class="fa fa-angle-right mr-2"></i>
                    </a>     
                    <a href="#" data-menu="menu-share">
                        <i class="fa font-14 fa-share-alt bg-red2-dark rounded-sm"></i>
                        <span>Share Azures</span>
                        <strong>Just one tap! We'll do the rest!</strong>
                        <i class="fa fa-angle-right mr-2"></i>
                    </a>     
                    <a href="#" data-menu="menu-language">
                        <i class="fa font-14 fa-globe bg-green1-dark rounded-sm"></i>
                        <span>Language Picker</span>
                        <strong>A Sample for Demo Purposes</strong>
                        <i class="fa fa-angle-right mr-2"></i>
                    </a>     
                </div>
                
                <h5>Did you know?</h5>
                <p>
                    Fast loading, great support, premium quality. We have a tone of awesome features, that make us stand out from our competitors.
                </p>
                <div class="divider mb-1"></div>
                <div class="list-group list-custom-large">
                    <a href="#" data-menu="menu-tips-1" class="border-0">
                        <i class="fa font-14 fa-gift bg-magenta2-light rounded-sm"></i>
                        <span>Tap Here to Start</span>
                        <strong>A few Tips About Azures</strong>
                        <i class="fa fa-angle-right mr-2"></i>
                    </a>     
                </div>
            </div>  
        </div>
        
        <div class="card card-style preload-img" data-src="images/pictures/20.jpg">
            <div class="card-body text-center">
                <h1 class="color-white pt-4">Feature Requests</h1>
                <p class="color-white mt-n2 mb-3 pb-1">We're always listening to your feedback</p>
                <p class="boxed-text-xl color-white opacity-80 pb-2">
                    Do you like Azures, but want a specific feature? Please send us Feedback and feature suggestions and we'll consider it for future updates!
                </p>
                <a href="#" class="btn btn-m rounded-sm btn-border btn-center-l border-white color-white font-900 text-uppercase mb-4">Request Feature</a>
            </div>
            <div class="card-overlay bg-highlight opacity-95"></div>
        </div>

       
        <!-- footer and footer card-->
        <div class="footer" data-menu-load="menu-footer.html"></div>  
    </div>    
    <!-- end of page content-->

    
    <div id="menu-share" 
         class="menu menu-box-bottom menu-box-detached rounded-m" 
         data-menu-load="menu-share.html"
         data-menu-height="420" 
         data-menu-effect="menu-over">
    </div>    
    
    <div id="menu-highlights" 
         class="menu menu-box-bottom menu-box-detached rounded-m" 
         data-menu-load="menu-colors.html"
         data-menu-height="510" 
         data-menu-effect="menu-over">        
    </div>
    
    <div id="menu-main"
         class="menu menu-box-right menu-box-detached rounded-m"
         data-menu-width="260"
         data-menu-load="menu-main.html"
         data-menu-active="nav-settings"
         data-menu-effect="menu-over">  
    </div>
    
    <div id="menu-language" class="menu menu-box-bottom menu-box-detached rounded-m" 
         data-menu-height="345" 
         data-menu-effect="menu-over">
        <div class="mr-3 ml-3 mt-3">
            <div class="float-left">
            <h3 class="font-700 mb-0 pt-1">Language</h3>
            <p class="font-11 mt-n1 color-highlight mb-3">
                You can direct to multiple languages of your page.
            </p>         
            </div>
            <div class="float-right">
                <a href="#" class="close-menu"><i class="fa fa-times-circle color-red2-dark pt-3 font-18"></i></a>
            </div>
                <div class="clearfix"></div>
            <div class="list-group list-custom-small">
                <a href="#"><img class="mr-3 mt-n1" width="20" src="images/flags/United-States.png"><span>English</span><i class="fa fa-angle-right"></i></a>
                <a href="#"><img class="mr-3 mt-n1" width="20" src="images/flags/India.png"><span>Indian</span><i class="fa fa-angle-right"></i></a>
                <a href="#"><img class="mr-3 mt-n1" width="20" src="images/flags/Germany.png"><span>German</span><i class="fa fa-angle-right"></i></a>
                <a href="#"><img class="mr-3 mt-n1" width="20" src="images/flags/Italy.png"><span>Italian</span><i class="fa fa-angle-right"></i></a>
                <a href="#" class="border-0"><img class="mr-3 mt-n1" width="20"  src="images/flags/Spain.png"><span>Spanish</span><i class="fa fa-angle-right"></i></a>
            </div>
            <div class="clear"></div>
        </div>
    </div>     
    
    <!-- Tips Menu 1-->
    <div id="menu-tips-1" 
         class="menu menu-box-bottom menu-box-detached rounded-m" 
         data-menu-height="350" 
         data-menu-effect="menu-over">

        <div class="card header-card shape-rounded" data-card-height="200">
            <div class="card-overlay bg-highlight opacity-95"></div>
            <div class="card-overlay dark-mode-tint"></div>
            <div class="card-bg preload-img" data-src="images/pictures/20s.jpg"></div>
        </div>

        <div class="mt-3 pt-1 pb-1">
            <h1 class="text-center">
                <i data-feather="smartphone" 
                   data-feather-line="1" 
                   data-feather-size="60" 
                   data-feather-color="gray1-dark" 
                   data-feather-bg="none"></i>
            </h1>
            <h1 class="text-center color-white font-22 font-700">PWA Ready</h1>
            <p class="text-center mt-n3 mb-3 font-11 color-white">Just add it to your home screen and Enjoy!</p>
        </div>
        <div class="card card-style">
            <p class="boxed-text-xl pt-3 mb-3">
                Azures is a Mobile Webite, but it is also a PWA! You can add it to your home screen and navigate it 
                like you would navigate an application.
            </p>
        </div>       
        <div class="row mb-0">
            <div class="col-6">
                <a href="#" class="btn btn-border btn-sm ml-3 rounded-s btn-full shadow-l color-highlight border-highlight close-menu text-uppercase font-900">Close</a>
            </div>
            <div class="col-6">
                <a data-menu="menu-tips-2" href="#" class="btn btn-sm mr-3 rounded-s btn-full shadow-l bg-highlight font-900 text-uppercase">1/5 - Next</a>
            </div>
        </div>
    </div>        
    
    <!-- Tips Menu 2-->
    <div id="menu-tips-2" 
         class="menu menu-box-bottom menu-box-detached rounded-m" 
         data-menu-height="350" 
         data-menu-effect="menu-over">
        
        <div class="card header-card shape-rounded" data-card-height="200">
            <div class="card-overlay bg-highlight opacity-95"></div>
            <div class="card-overlay dark-mode-tint"></div>
            <div class="card-bg preload-img" data-src="images/pictures/20s.jpg"></div>
        </div>

        <div class="mt-3 pt-1 pb-1">
            <h1 class="text-center">
                <i data-feather="moon" 
                   data-feather-line="1" 
                   data-feather-size="60" 
                   data-feather-color="gray1-dark" 
                   data-feather-bg="none"></i>
            </h1>
            <h1 class="text-center color-white font-22 font-700">Auto Dark Mode</h1>
            <p class="text-center mt-n2 mb-3 font-11 color-white">Just add detect-theme to your body class</p>
        </div>
        <div class="card card-style">
            <p class="boxed-text-xl pt-3 mb-3">
                With modern operating systems, we can detect if your device is in dark mode and set the theme automatically. Just use the detect-theme class.
            </p>
        </div>       
        <div class="row mb-0">
            <div class="col-6">
                <a href="#" class="btn btn-border btn-sm ml-3 rounded-s btn-full shadow-l color-highlight border-highlight close-menu text-uppercase font-900">Close</a>
            </div>
            <div class="col-6">
                <a data-menu="menu-tips-3" href="#" class="btn btn-sm mr-3 rounded-s btn-full shadow-l bg-highlight font-900 text-uppercase">2/5 - Next</a>
            </div>
        </div>
    </div>    
    
    <!-- Tips Menu 3-->
    <div id="menu-tips-3" 
         class="menu menu-box-bottom menu-box-detached rounded-m" 
         data-menu-height="350" 
         data-menu-effect="menu-over">

        <div class="card header-card shape-rounded" data-card-height="200">
            <div class="card-overlay bg-highlight opacity-95"></div>
            <div class="card-overlay dark-mode-tint"></div>
            <div class="card-bg preload-img" data-src="images/pictures/20s.jpg"></div>
        </div>

        <div class="mt-3 pt-1 pb-1">
            <h1 class="text-center">
                <i data-feather="archive" 
                   data-feather-line="1" 
                   data-feather-size="60" 
                   data-feather-color="gray1-dark" 
                   data-feather-bg="none"></i>
            </h1>
            <h1 class="text-center color-white font-22 font-700">Hybrid App Compatible</h1>
            <p class="text-center mt-n2 mb-3 font-11 color-white">Turn Azures in a Native Mobile Application</p>
        </div>
        <div class="card card-style">
            <p class="boxed-text-xl pt-3 mb-3">
                Using Cordova or PhoneGap you can compile Azures into a Native Mobile Application! It's blazing fast and super easy to compile!
            </p>
        </div>       
        <div class="row mb-0">
            <div class="col-6">
                <a href="#" class="btn btn-border btn-sm ml-3 rounded-s btn-full shadow-l color-highlight border-highlight close-menu text-uppercase font-900">Close</a>
            </div>
            <div class="col-6">
                <a data-menu="menu-tips-4" href="#" class="btn btn-sm mr-3 rounded-s btn-full shadow-l bg-highlight font-900 text-uppercase">3/5 - Next</a>
            </div>
        </div>
    </div>      
    
    <!-- Tips Menu 4-->
    <div id="menu-tips-4" 
         class="menu menu-box-bottom menu-box-detached rounded-m" 
         data-menu-height="350" 
         data-menu-effect="menu-over">

        <div class="card header-card shape-rounded" data-card-height="200">
            <div class="card-overlay bg-highlight opacity-95"></div>
            <div class="card-overlay dark-mode-tint"></div>
            <div class="card-bg preload-img" data-src="images/pictures/20s.jpg"></div>
        </div>

        <div class="mt-3 pt-1 pb-1">
            <h1 class="text-center">
                <i data-feather="zap" 
                   data-feather-line="1" 
                   data-feather-size="60" 
                   data-feather-color="gray1-dark" 
                   data-feather-bg="none"></i>
            </h1>
            <h1 class="text-center color-white font-22 font-700">Really, Really Fast</h1>
            <p class="text-center mt-n2 mb-3 font-11 color-white">Optimized to Perfection for your Needs</p>
        </div>
        <div class="card card-style">
            <p class="boxed-text-xl pt-3 mb-3">
                All scripts and style only are loaded only once! After that, there's no more need to worry about redownloading. It's optimized to perfection!
            </p>
        </div>       
        <div class="row mb-0">
            <div class="col-6">
                <a href="#" class="btn btn-border btn-sm ml-3 rounded-s btn-full shadow-l color-highlight border-highlight close-menu text-uppercase font-900">Close</a>
            </div>
            <div class="col-6">
                <a data-menu="menu-tips-5" href="#" class="btn btn-sm mr-3 rounded-s btn-full shadow-l bg-highlight font-900 text-uppercase">4/5 - Next</a>
            </div>
        </div>
    </div>      

    <!-- Tips Menu 5-->
    <div id="menu-tips-5" 
         class="menu menu-box-bottom menu-box-detached rounded-m" 
         data-menu-height="350" 
         data-menu-effect="menu-over">

        <div class="card header-card shape-rounded" data-card-height="200">
            <div class="card-overlay bg-highlight opacity-95"></div>
            <div class="card-overlay dark-mode-tint"></div>
            <div class="card-bg preload-img" data-src="images/pictures/20s.jpg"></div>
        </div>

        <div class="mt-3 pt-1 pb-1">
            <h1 class="text-center">
                <i data-feather="smile" 
                   data-feather-line="1" 
                   data-feather-size="60" 
                   data-feather-color="gray1-dark" 
                   data-feather-bg="none"></i>
            </h1>
            <h1 class="text-center color-white font-22 font-700">Colors to Match your Style!</h1>
            <p class="text-center mt-n2 mb-3 font-11 color-white">We've added tons of colors just for you!</p>
        </div>
        <div class="card card-style">
            <p class="boxed-text-xl pt-3 mb-3">
                Azures is powered by a gorgeous color scheme that you can edit with ease and add your own custom feel to it! It's super simple!            </p>
        </div>       
        <a href="#" class="close-menu btn btn-m btn-margins rounded-sm btn-full shadow-l bg-highlight text-uppercase font-900">AWesome!</a>
    </div>    



    
</div>    


<script type="text/javascript" src="scripts/jquery.js"></script>
<script type="text/javascript" src="scripts/bootstrap.min.js"></script>
<script type="text/javascript" src="scripts/custom.js"></script>
</body>
