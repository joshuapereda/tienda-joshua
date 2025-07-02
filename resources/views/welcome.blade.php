 @component('components.master')
     @slot('content')
         @verbatim

    <!-- loader starts-->

    <div class="loader-wrapper">
      <div class="loader-index"> <span></span></div>
      <svg>
        <defs></defs>
        <filter id="goo">
          <fegaussianblur in="SourceGraphic" stddeviation="11" result="blur"></fegaussianblur>
          <fecolormatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo"> </fecolormatrix>
        </filter>
      </svg>
    </div>
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>

    <div class="page-wrapper compact-wrapper" id="pageWrapper app" >

      <!-- Page Header Start-->
      <div class="page-header">
        <div class="header-wrapper row m-0">
          <form class="form-inline search-full col" action="#" method="get">
            <div class="form-group w-100">
              <div class="Typeahead Typeahead--twitterUsers">
                <div class="u-posRelative">
                  <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text" placeholder="Search Anything Here..." name="q" title="" autofocus>
                  <div class="spinner-border Typeahead-spinner" role="status"><span class="sr-only">Loading...</span></div><i class="close-search" data-feather="x"></i>
                </div>
                <div class="Typeahead-menu"></div>
              </div>
            </div>
          </form>
          <div class="header-logo-wrapper col-auto p-0">
            <div class="logo-wrapper"><a href="index.html"><img class="img-fluid for-light" src="{{ asset('/assets/images/logo/logo.png')}}" alt=""><img class="img-fluid for-dark" src="{{ asset('/assets/images/logo/logo_dark.png')}}" alt=""></a></div>
            <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="align-center"></i></div>
          </div>
          <div class="left-header col-xxl-5 col-xl-6 col-lg-5 col-md-4 col-sm-3 p-0">
            <div class="notification-slider">
              <div class="d-flex h-100"> <img src="{{ asset('/assets/images/giftools.gif')}}" alt="gif">
                <h6 class="mb-0 f-w-400"><span class="font-primary">Don't Miss Out! </span><span class="f-light"> Our new update has been released.</span></h6><i class="icon-arrow-top-right f-light"></i>
              </div>
              <div class="d-flex h-100"><img src="{{ asset('/assets/images/giftools.gif')}}" alt="gif">
                <h6 class="mb-0 f-w-400"><span class="f-light">Something you love is now on sale! </span></h6><a class="ms-1" href="https://1.envato.market/3GVzd" target="_blank">Buy now !</a>
              </div>
            </div>
          </div>
          <div class="nav-right col-xxl-7 col-xl-6 col-md-7 col-8 pull-right right-header p-0 ms-auto">
            <ul class="nav-menus">
              <li class="language-nav">
                <div class="translate_wrapper">
                  <div class="current_lang">
                    <div class="lang"><i class="flag-icon flag-icon-us"></i><span class="lang-txt">EN                               </span></div>
                  </div>
                  <div class="more_lang">
                    <div class="lang selected" data-value="en"><i class="flag-icon flag-icon-us"></i><span class="lang-txt">English<span> (US)</span></span></div>
                    <div class="lang" data-value="de"><i class="flag-icon flag-icon-de"></i><span class="lang-txt">Deutsch</span></div>
                    <div class="lang" data-value="es"><i class="flag-icon flag-icon-es"></i><span class="lang-txt">Español</span></div>
                    <div class="lang" data-value="fr"><i class="flag-icon flag-icon-fr"></i><span class="lang-txt">Français</span></div>
                    <div class="lang" data-value="pt"><i class="flag-icon flag-icon-pt"></i><span class="lang-txt">Português<span> (BR)</span></span></div>
                    <div class="lang" data-value="cn"><i class="flag-icon flag-icon-cn"></i><span class="lang-txt">简体中文</span></div>
                    <div class="lang" data-value="ae"><i class="flag-icon flag-icon-ae"></i><span class="lang-txt">لعربية <span> (ae)</span></span></div>
                  </div>
                </div>
              </li>
              <li class="fullscreen-body">                       <span>
                  <svg id="maximize-screen">
                    <use href="{{ asset('/assets/svg/icon-sprite.svg#full-screen')}}"></use>
                  </svg></span></li>
              <li>                         <span class="header-search">
                  <svg>
                    <use href="../assets/svg/icon-sprite.svg#search"></use>
                  </svg></span></li>
              <li class="onhover-dropdown">
                <svg>
                  <use href="{{ asset('/assets/svg/icon-sprite.svg#star')}}"></use>
                </svg>
                <div class="onhover-show-div bookmark-flip">
                  <div class="flip-card">
                    <div class="flip-card-inner">
                      <div class="front">
                        <h6 class="f-18 mb-0 dropdown-title">Bookmark</h6>
                        <ul class="bookmark-dropdown">
                          <li>
                            <div class="row">
                              <div class="col-4 text-center">
                                <div class="bookmark-content">
                                  <div class="bookmark-icon"><i data-feather="file-text"></i></div><span>Forms</span>
                                </div>
                              </div>
                              <div class="col-4 text-center">
                                <div class="bookmark-content">
                                  <div class="bookmark-icon"><i data-feather="user"></i></div><span>Profile</span>
                                </div>
                              </div>
                              <div class="col-4 text-center">
                                <div class="bookmark-content">
                                  <div class="bookmark-icon"><i data-feather="server"></i></div><span>Tables</span>
                                </div>
                              </div>
                            </div>
                          </li>
                          <li class="text-center"><a class="flip-btn f-w-700 btn btn-primary w-100" id="flip-btn" href="#!">Add Bookmark</a></li>
                        </ul>
                      </div>
                      <div class="back">
                        <ul>
                          <li>
                            <div class="bookmark-dropdown flip-back-content">
                              <input type="text" placeholder="Search...">
                            </div>
                          </li>
                          <li><a class="f-w-700 d-block flip-back btn btn-primary w-100" id="flip-back" href="#!">Back</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="mode">
                  <svg>
                    <use href="../assets/svg/icon-sprite.svg#moon"></use>
                  </svg>
                </div>
              </li>
              <li class="cart-nav onhover-dropdown">
                <div class="cart-box">
                  <svg>
                    <use href="../assets/svg/icon-sprite.svg#stroke-ecommerce"></use>
                  </svg><span class="badge rounded-pill badge-danger">2</span>
                </div>
                <div class="cart-dropdown onhover-show-div">
                  <h6 class="f-18 mb-0 dropdown-title">Cart</h6>
                  <ul>
                    <li>
                      <div class="d-flex"><img class="img-fluid b-r-5 me-3 img-60" src="{{ asset('/assets/images/other-images/cart-img.jpg')}}" alt="">
                        <div class="flex-grow-1"><span>Furniture Chair for Home</span>
                          <div class="qty-box">
                            <div class="input-group"><span class="input-group-prepend">
                                <button class="btn quantity-left-minus" type="button" data-type="minus" data-field="">-</button></span>
                              <input class="form-control input-number" type="text" name="quantity" value="1"><span class="input-group-prepend">
                                <button class="btn quantity-right-plus" type="button" data-type="plus" data-field="">+</button></span>
                            </div>
                          </div>
                          <h6 class="font-primary">$12.45</h6>
                        </div>
                        <div class="close-circle"><a class="bg-danger" href="#"><i data-feather="x"></i></a></div>
                      </div>
                    </li>
                    <li>
                      <div class="d-flex"><img class="img-fluid b-r-5 me-3 img-60" src="{{ asset('/assets/images/other-images/cart-img1.jpg')}}" alt="">
                        <div class="flex-grow-1"><span>Rest Well Chair</span>
                          <div class="qty-box">
                            <div class="input-group"><span class="input-group-prepend">
                                <button class="btn quantity-left-minus" type="button" data-type="minus" data-field="">-</button></span>
                              <input class="form-control input-number" type="text" name="quantity" value="1"><span class="input-group-prepend">
                                <button class="btn quantity-right-plus" type="button" data-type="plus" data-field="">+</button></span>
                            </div>
                          </div>
                          <h6 class="font-primary">$49.00</h6>
                        </div>
                        <div class="close-circle"><a class="bg-danger" href="#"><i data-feather="x"></i></a></div>
                      </div>
                    </li>
                    <li class="total">
                      <h6 class="mb-0">Order Total : <span class="f-right">$1000.00</span></h6>
                    </li>
                    <li class="text-center"><a class="d-block view-cart f-w-700 btn btn-primary w-100" href="cart.html">View Cart</a><a class="btn btn-primary view-checkout btn btn-primary w-100 f-w-700" href="checkout.html">Checkout</a></li>
                  </ul>
                </div>
              </li>
              <li class="onhover-dropdown">
                <div class="notification-box">
                  <svg>
                    <use href="{{ asset('/assets/svg/icon-sprite.svg#notification')}}"></use>
                  </svg><span class="badge rounded-pill badge-success">4 </span>
                </div>
                <div class="onhover-show-div notification-dropdown">
                  <h6 class="f-18 mb-0 dropdown-title">Notifications                               </h6>
                  <ul>
                    <li class="b-l-primary border-4 toast default-show-toast align-items-center text-light border-0 fade show" aria-live="assertive" aria-atomic="true" data-bs-autohide="false">
                      <div class="d-flex justify-content-between">
                        <div class="toast-body">
                          <p>Delivery processing</p>
                        </div>
                        <button class="btn-close btn-close-white me-2 m-auto" type="button" data-bs-dismiss="toast" aria-label="Close"></button>
                      </div>
                    </li>
                    <li class="b-l-success border-4 toast default-show-toast align-items-center text-light border-0 fade show" aria-live="assertive" aria-atomic="true" data-bs-autohide="false">
                      <div class="d-flex justify-content-between">
                        <div class="toast-body">
                          <p>Order Complete</p>
                        </div>
                        <button class="btn-close btn-close-white me-2 m-auto" type="button" data-bs-dismiss="toast" aria-label="Close"></button>
                      </div>
                    </li>
                    <li class="b-l-secondary border-4 toast default-show-toast align-items-center text-light border-0 fade show" aria-live="assertive" aria-atomic="true" data-bs-autohide="false">
                      <div class="d-flex justify-content-between">
                        <div class="toast-body">
                          <p>Tickets Generated</p>
                        </div>
                        <button class="btn-close btn-close-white me-2 m-auto" type="button" data-bs-dismiss="toast" aria-label="Close"></button>
                      </div>
                    </li>
                    <li class="b-l-warning border-4 toast default-show-toast align-items-center text-light border-0 fade show" aria-live="assertive" aria-atomic="true" data-bs-autohide="false">
                      <div class="d-flex justify-content-between">
                        <div class="toast-body">
                          <p>Delivery Complete</p>
                        </div>
                        <button class="btn-close btn-close-white me-2 m-auto" type="button" data-bs-dismiss="toast" aria-label="Close"></button>
                      </div>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="profile-nav onhover-dropdown pe-0 py-0">
                <div class="d-flex profile-media"><img class="b-r-10" src="{{ asset('/assets/images/dashboard/profile.png')}}" alt="">
                  <div class="flex-grow-1"><span>Emay Walter</span>
                    <p class="mb-0">Admin <i class="middle fa-solid fa-angle-down"></i></p>
                  </div>
                </div>
                <ul class="profile-dropdown onhover-show-div">
                  <li><a href="sign-up.html"><i data-feather="user"></i><span>Account </span></a></li>
                  <li><a href="mail-box.html"><i data-feather="mail"></i><span>Inbox</span></a></li>
                  <li><a href="task.html"><i data-feather="file-text"></i><span>Taskboard</span></a></li>
                  <li><a href="add-user.html"><i data-feather="settings"></i><span>Settings</span></a></li>
                  <li><a href="login.html"><i data-feather="log-in"> </i><span>Log out</span></a></li>
                </ul>
              </li>
            </ul>
          </div>
          <script class="result-template" type="text/x-handlebars-template">
            <div class="ProfileCard u-cf">
            <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
            <div class="ProfileCard-details">
            <div class="ProfileCard-realName">{{name}}</div>
            </div>
            </div>
          </script>
          <script class="empty-template" type="text/x-handlebars-template"><div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div></script>
        </div>
      </div>
      <!-- Page Header Ends                              -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
        <div class="sidebar-wrapper" data-sidebar-layout="stroke-svg">
          <div>
            <div class="logo-wrapper"><a href="index.html"><img class="img-fluid for-light" src="{{ asset('/assets/images/logo/logo.png')}}" alt=""><img class="img-fluid for-dark" src="{{ asset('/assets/images/logo/logo_dark.png')}}" alt=""></a>
              <div class="back-btn"><i class="fa-solid fa-angle-left"></i></div>
              <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
            </div>
            <div class="logo-icon-wrapper"><a href="index.html"><img class="img-fluid" src="{{ asset('/assets/images/logo/logo-icon.png')}}" alt=""></a></div>
            <nav class="sidebar-main">
              <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
              <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                  <li class="back-btn"><a href="index.html"><img class="img-fluid" src= "{{ asset('/assets/images/logo/logo-icon.png')}}" alt=""></a>
                    <div class="mobile-back text-end"><span>Back</span><i class="fa-solid fa-angle-right ps-2" aria-hidden="true"></i></div>
                  </li>
                  <li class="pin-title sidebar-main-title">
                    <div>
                      <h6>Pinned</h6>
                    </div>
                  </li>
                  <li class="sidebar-main-title">
                    <div>
                      <h6 class="lan-1">General</h6>
                    </div>
                  </li>

                  <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a class="sidebar-link sidebar-title" href="#">
                      <svg class="stroke-icon">
                        <use href="{{ asset('/assets/svg/icon-sprite.svg#stroke-widget')}}"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="{{ asset('/assets/svg/icon-sprite.svg#fill-widget')}}"></use>
                      </svg><span class="lan-6">Widgets</span></a>
                    <ul class="sidebar-submenu">
                      <li><a href="general-widget.html">General</a></li>
                      <li><a href="chart-widget.html">Chart</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a class="sidebar-link sidebar-title" href="#">
                      <svg class="stroke-icon">
                        <use href="{{ asset('/assets/svg/icon-sprite.svg#stroke-layout')}}"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="{{ asset('/assets/svg/icon-sprite.svg#fill-layout')}}"></use>
                      </svg><span class="lan-7">Page layout</span></a>
                    <ul class="sidebar-submenu">
                      <li><a href="box-layout.html">Boxed</a></li>
                      <li><a href="layout-rtl.html">RTL</a></li>
                      <li><a href="layout-dark.html">Dark Layout</a></li>
                      <li><a href="hide-on-scroll.html">Hide Nav Scroll</a></li>
                      <li><a href="footer-light.html">Footer Light</a></li>
                      <li><a href="footer-dark.html">Footer Dark</a></li>
                      <li><a href="footer-fixed.html">Footer Fixed</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-main-title">
                    <div>
                      <h6 class="lan-8">Applications</h6>
                    </div>
                  </li>
                  <li class="sidebar-list"><i class="fa-solid fa-thumbtack"> </i><a class="sidebar-link sidebar-title" href="#">
                      <svg class="stroke-icon">
                        <use href="{{ asset('/assets/svg/icon-sprite.svg#stroke-project')}}"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="{{ asset('/assets/svg/icon-sprite.svg#fill-project')}}"></use>
                      </svg><span>Projects        </span></a>
                    <ul class="sidebar-submenu">
                      <li>
                        <label class="badge badge-light-success">New</label><a href="project-details.html">Project Details</a>
                      </li>
                      <li><a href="project-list.html">Project List</a></li>
                      <li><a href="createnew.html">Create new</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a class="sidebar-link sidebar-title link-nav" href="file-manager.html">
                      <svg class="stroke-icon">
                        <use href="{{ asset('/assets/svg/icon-sprite.svg#stroke-file')}}"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="{{ asset('/assets/svg/icon-sprite.svg#fill-file')}}"></use>
                      </svg><span>File manager</span></a></li>
                  <li class="sidebar-main-title">
                    <div>
                      <h6>Components</h6>
                    </div>
                  </li>
                  <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a class="sidebar-link sidebar-title link-nav" href="buttons.html">
                      <svg class="stroke-icon">
                        <use href="{{ asset('/assets/svg/icon-sprite.svg#stroke-button')}}"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="{{ asset('/assets/svg/icon-sprite.svg#fill-button')}}"></use>
                      </svg><span>Button</span></a></li>
                  <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a class="sidebar-link sidebar-title" href="#">
                      <svg class="stroke-icon">
                        <use href="{{ asset('/assets/svg/icon-sprite.svg#stroke-charts')}}"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="{{ asset('/assets/svg/icon-sprite.svg#fill-charts')}}"></use>
                      </svg><span>Charts</span></a>
                    <ul class="sidebar-submenu">
                      <li><a href="chart-apex.html">Apex Chart</a></li>
                      <li><a href="chart-google.html">Google Chart</a></li>
                      <li><a href="chart-sparkline.html">Sparkline chart</a></li>
                      <li><a href="chart-flot.html">Flot Chart</a></li>
                      <li><a href="chart-knob.html">Knob Chart</a></li>
                      <li><a href="chart-morris.html">Morris Chart</a></li>
                      <li><a href="chartjs.html">Chatjs Chart</a></li>
                      <li><a href="chartist.html">Chartist Chart</a></li>
                      <li><a href="chart-peity.html">Peity Chart</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-main-title">
                    <div>
                      <h6>Pages</h6>
                    </div>
                  </li>



                  <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a class="sidebar-link sidebar-title link-nav" href="{{ asset('/starter-kit/index.html')}}" target="_blank">
                      <svg class="stroke-icon">
                        <use href="{{ asset('/assets/svg/icon-sprite.svg#stroke-starter-kit')}}"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="{{ asset('/assets/svg/icon-sprite.svg#fill-starter-kit')}}"></use>
                      </svg><span>Starter kit</span></a></li>
                  <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a class="sidebar-link sidebar-title" href="#">
                      <svg class="stroke-icon">
                        <use href="{{ asset('/assets/svg/icon-sprite.svg#stroke-error')}}"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="{{ asset('/assets/svg/icon-sprite.svg#fill-error')}}"></use>
                      </svg><span>Error Pages</span></a>
                    <ul class="sidebar-submenu">
                      <li><a href="error-403.html">Error 403</a></li>
                      <li><a href="error-404.html">Error 404</a></li>
                      <li><a href="error-500.html">Error 500</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list">
                    <label class="badge badge-light-success">New</label><i class="fa-solid fa-thumbtack"></i><a class="sidebar-link sidebar-title link-nav" href="sitemap.html">
                      <svg class="stroke-icon">
                        <use href="{{ asset('/assets/svg/icon-sprite.svg#stroke-sitemap')}}"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="{{ asset('/assets/svg/icon-sprite.svg#fill-sitemap')}}"></use>
                      </svg><span>Site Map</span></a>
                  </li>
                </ul>
              </div>
              <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
            </nav>
          </div>
        </div>
        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-sm-6">
                  <h3>Contacts</h3>
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">
                        <svg class="stroke-icon">
                          <use href="{{ asset('/assets/svg/icon-sprite.svg#stroke-home')}}"></use>
                        </svg></a></li>
                    <li class="breadcrumb-item">Apps</li>
                    <li class="breadcrumb-item active">Contacts</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="email-wrap bookmark-wrap">
              <div class="row main-bookmark">
                <div class="col-xxl-3 box-col-6">
                  <div class="md-sidebar"><a class="btn btn-primary md-sidebar-toggle" href="#!">contact filter</a>
                    <div class="md-sidebar-aside job-left-aside">
                      <div class="email-left-aside">
                        <div class="card">
                          <div class="card-body custom-scrollbar">
                            <div class="email-app-sidebar left-bookmark">
                              <div class="common-flex align-items-center">
                                <div class="d-flex-size-email"><img class="rounded-circle" src="{{ asset('/assets/images/user/user.png')}}" alt=""></div>
                                <div class="flex-grow-1">
                                  <h6>WILLIAM C. JENNINGS</h6>
                                  <p>william@jourrapide.com</p>
                                </div>
                              </div>
                              <ul class="nav main-menu contact-options" role="tablist">
                                <li class="nav-item">
                                  <button class="button-primary btn-block btn-mail w-100" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="me-2" data-feather="users"></i> New Contacts</button>
                                </li>
                                <li class="nav-item">
                                  <button class="button-primary btn-block btn-mail w-100" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal1"><i class="me-2" data-feather="plus"></i> Add Category</button>
                                  <ul>
                                    <li class="nav-item"><span class="main-title"><i class="icofont icofont-filter"></i> Filter By</span></li>
                                    <li><a class="active" id="pills-personal-tab" data-bs-toggle="pill" href="#pills-personal" role="tab" aria-controls="pills-personal" aria-selected="true"><span class="title"> Personal</span></a></li>
                                    <li><a id="pills-organization-tab" data-bs-toggle="pill" href="#pills-organization" role="tab" aria-controls="pills-organization" aria-selected="false"><span class="title"> Organization</span></a></li>
                                  </ul>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xxl-9 col-md-12 box-col-12">
                  <div class="email-right-aside bookmark-tabcontent contacts-tabs">
                    <div class="card email-body radius-left dark-contact">
                      <div class="ps-0">
                        <div class="tab-content">
                          <div class="tab-pane fade active show" id="pills-personal" role="tabpanel" aria-labelledby="pills-personal-tab">
                            <div class="card mb-0">
                              <div class="card-header d-flex">
                                <h5>Personal</h5><span class="f-14 pull-right mt-0">5 Contacts</span>
                              </div>
                              <div class="card-body p-0">
                                <div class="row list-persons g-3" id="addcon">
                                  <div class="col-xl-4 xl-50 col-md-5">
                                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical"><a class="contact-tab-0 nav-link active" id="v-pills-org-user-tab" data-bs-toggle="pill" onclick="activeDiv(0)" href="#v-pills-org-user" role="tab" aria-selected="true">
                                        <div class="d-flex"><img class="img-50 img-fluid m-r-20 rounded-circle update_img_0" src="{{ asset('/assets/images/user/2.png')}}" alt="">
                                          <div class="flex-grow-1">
                                            <h6> <span class="first_name_0">Joshua </span><span class="last_name_0">Barnes</span></h6>
                                            <p class="email_add_0">barnes@gmail.com</p>
                                          </div>
                                        </div></a><a class="contact-tab-1 nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" onclick="activeDiv(1)" href="#v-pills-profile" role="tab" aria-selected="false">
                                       </a>
                                        </div>
                                  </div>
                                  <div class="col-xl-8 xl-50 col-md-7">
                                    <div class="tab-content" id="v-pills-tabContent">
                                      <div class="tab-pane contact-tab-0 tab-content-child fade show active" id="v-pills-user" role="tabpanel" aria-labelledby="v-pills-user-tab">
                                        <div class="profile-mail">
                                          <div class="d-flex"><img class="img-100 img-fluid m-r-20 rounded-circle update_img_0" src="{{ asset('/assets/images/user/2.png')}}" alt="">
                                            <input class="updateimg" type="file" name="img" onchange="readURL(this,0)" accept="image/*">
                                            <div class="flex-grow-1 mt-0">
                                              <h5><span class="first_name_0">Bucky </span><span class="last_name_0">Barnes</span></h5>
                                              <p class="email_add_0">barnes@gmail.com</p>
                                              <ul class="main-contact-option">
                                                <li><a href="#" onclick="editContact(0)">Edit</a></li>
                                                <li><a href="#" onclick="deleteContact(0)">Delete</a></li>
                                                <li><a href="#" onclick="history(0)">History</a></li>
                                                <li><a href="#" onclick="printContact(0)" data-bs-toggle="modal" data-bs-target="#printModal">Print</a></li>
                                              </ul>
                                            </div>
                                          </div>
                                          <div class="email-general">
                                            <h6 class="mb-3">General</h6>
                                            <ul>
                                              <li> <span>Name</span><span class="font-primary first_name_0">Bucky</span></li>
                                              <li> <span>Gender</span><span class="font-primary">Male</span></li>
                                              <li> <span>Birthday</span><span class="font-primary"> <span class="birth_day_0">18</span><span class="birth_month_0 ms-1">May</span><span class="birth_year_0 ms-1">1994</span></span></li>
                                              <li> <span>Personality</span><span class="font-primary personality_0">Cool</span></li>
                                              <li> <span>City</span><span class="font-primary city_0">moline acres</span></li>
                                              <li> <span>Mobile No</span><span class="font-primary mobile_num_0">+0 1800 76855</span></li>
                                              <li> <span>Email Address</span><span class="font-primary email_add_0">barnes@gmail.com </span></li>
                                              <li> <span>Website</span><span class="font-primary url_add_0">www.pixelstrap.com</span></li>
                                              <li> <span>Interest</span><span class="font-primary interest_0">Photography</span></li>
                                            </ul>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="contact-editform ps-0">
                                      <form class="custom-input">
                                        <div class="row g-3">
                                          <div class="mt-0 mb-3 col-md-12">
                                            <label>Nombre</label>
                                            <div class="row g-3">
                                              <div class="col-xxl-6">
                                                <input class="form-control" id="first_name1" type="text" required="" placeholder="First Name" value="first_name1">
                                              </div>
                                              <div class="col-xxl-6">
                                                <input class="form-control" id="last_name1" type="text" required="" placeholder="Last Name" value="last_name1">
                                              </div>
                                            </div>
                                          </div>
                                          <div class="mt-0 mb-3 col-md-12">
                                            <label>Email Address</label>
                                            <input class="form-control" id="email_add1" type="text" required="" autocomplete="off">
                                          </div>
                                          <div class="mt-0 mb-3 col-md-12">
                                            <label>Phone</label>
                                            <div class="row g-3">
                                              <div class="col-xxl-6">
                                                <input class="form-control" id="mobile_num1" type="number" required="" autocomplete="off">
                                              </div>
                                              <div class="col-xxl-6">
                                                <select class="form-control">
                                                  <option>Mobile</option>
                                                  <option>Work</option>
                                                  <option>Others</option>
                                                </select>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="row more-data">
                                          <div class="mt-0 mb-3 col-md-12">
                                            <label>URLS</label>
                                            <div class="row g-3">
                                              <div class="col-xxl-6 xl-100">
                                                <input class="form-control" id="url_add1" type="url" required="">
                                              </div>
                                              <div class="col-xxl-6 xl-100">
                                                <select class="selectpicker search-picker" aria-label="Group" data-live-search="true">
                                                  <option value="1" selected>Personal Web Address</option>
                                                  <option value="2">Company Web Address</option>
                                                  <option value="3">Facebook URL</option>
                                                  <option value="4">Twitter URL</option>
                                                </select>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="mt-0 mb-3 col-md-12">
                                            <label>Personal</label>
                                            <div class="d-block">
                                              <label class="me-3" for="edo-ani2">
                                                <input class="radio_animated" id="edo-ani2" type="radio" name="rdo-ani1" checked=""><span>Male</span>
                                              </label>
                                              <label for="edo-ani3">
                                                <input class="radio_animated" id="edo-ani3" type="radio" name="rdo-ani1"><span>Female</span>
                                              </label>
                                            </div>
                                          </div>

                                          <div class="mt-0 mb-3 col-md-12">
                                            <div class="row g-3">
                                              <div class="col-xxl-6">
                                                <label>Personality</label>
                                                <input class="form-control" id="personality1" type="text" required="" autocomplete="off">
                                              </div>
                                              <div class="col-xxl-6">
                                                <label>Interest</label>
                                                <input class="form-control" id="interest1" type="text" required="" autocomplete="off">
                                              </div>
                                            </div>
                                          </div>
                                          <div class="mb-3 col-md-12">
                                            <label>Home Address</label>
                                            <div class="row g-3">
                                              <div class="col-12">
                                                <div class="mb-2">
                                                  <input class="form-control" type="text" placeholder="Address">
                                                </div>
                                              </div>
                                              <div class="col-xxl-6">
                                                <div class="mb-2">
                                                  <input class="form-control" id="city" type="text" placeholder="City">
                                                </div>
                                              </div>
                                              <div class="col-xxl-6">
                                                <div class="mb-2">
                                                  <input class="form-control" type="text" placeholder="State">
                                                </div>
                                              </div>
                                              <div class="col-xxl-6">
                                                <div>
                                                  <input class="form-control" type="text" placeholder="Country">
                                                </div>
                                              </div>
                                              <div class="col-xxl-6">
                                                <div>
                                                  <input class="form-control" type="text" placeholder="Postal code">
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div><a class="ps-0 edit-information" href="#">Edit more information</a>
                                        <button class="btn btn-primary update-contact me-2" type="button">Save</button>
                                        <button class="btn button-light-primary" type="button" data-bs-dismiss="modal">Cancel</button>
                                      </form>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div id="right-history">
                            <div class="modal-header p-20">
                              <h6 class="modal-title w-100 common-space">Contact History<span class="pull-right"><a class="closehistory" href="#"><i class="icofont icofont-close"></i></a></span></h6>
                            </div>
                            <div class="history-details">
                              <div class="text-center"><i class="icofont icofont-ui-edit"></i>
                                <p>Contact has not been modified yet.</p>
                              </div>
                              <div class="d-flex"><i class="icofont icofont-star"></i>
                                <div class="flex-grow-1 mt-0">
                                  <h6 class="mt-0">Contact Created</h6>
                                  <p class="mb-0">Contact is created via mail</p><span class="f-12 c-light">Sep 10, 2025 4:00</span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="modal fade modal-bookmark" id="printModal" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title">Print Preview</h5>
                                  <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body list-persons">
                                  <div class="profile-mail pt-0" id="DivIdToPrint">
                                    <div class="common-flex align-items-center"><img class="img-fluid rounded-circle" id="updateimg" src="{{ asset('/assets/images/user/2.png')}}" alt="">
                                      <div class="flex-grow-1 mt-0">
                                        <h5><span id="printname">Bucky</span><span id="printlast">Barnes</span></h5>
                                        <p id="printmail">barnes@gmail.com</p>
                                      </div>
                                    </div>
                                    <div class="email-general">
                                      <h6>General</h6>
                                      <p>Email Address: <span class="font-primary" id="mailadd">barnes@gmail.com   </span></p>
                                    </div>
                                  </div>
                                  <button class="btn btn-primary" id="btnPrint" type="button" onclick="printDiv();">Print</button>
                                  <button class="btn button-light-primary" type="button" data-bs-dismiss="modal">Cancel</button>
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
              <div class="modal fade modal-bookmark" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content custom-input">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Add Contact</h5>
                      <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form class="form-bookmark needs-validation" id="bookmark-form" novalidate="">
                        <div class="row g-3">
                          <div class="col-sm-6">
                            <label for="con-name">First Name</label>
                            <input class="form-control" id="con-name" type="text" required="" placeholder="Enter first name" autocomplete="off">
                          </div>
                          <div class="col-sm-6">
                            <label for="con-lastName">Last Name</label>
                            <input class="form-control" id="con-lastName" type="text" required="" placeholder="Enter last name" autocomplete="off">
                          </div>
                          <div class="col-12">
                            <label for="con-mail">Email Address</label>
                            <input class="form-control" id="con-mail" type="email" required="" placeholder="pixelstrap@gmail.com" autocomplete="off">
                          </div>
                          <div class="col-12">
                            <div class="row g-3">
                              <div class="col-sm-6">
                                <label for="con-phone">Phone Number</label>
                                <input class="form-control" id="con-phone" type="number" required="" placeholder="Enter your phone number" autocomplete="off">
                              </div>
                              <div class="col-sm-6">
                                <label for="con-category">Contact Type</label>
                                <select class="form-select" id="con-category" required="">
                                  <option disabled selected value>Choose Contact Type</option>
                                  <option value="mobile">Mobile</option>
                                  <option value="work">Work</option>
                                  <option value="others">Others</option>
                                </select>
                              </div>
                            </div>
                          </div>
                        </div>
                        <input id="index_var" type="hidden" value="5">
                        <button class="btn btn-primary me-2" type="submit" onclick="submitContact()">Save</button>
                        <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cancel</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content custom-input">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel1">Add Category</h5>
                      <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form class="form-bookmark">
                        <div class="row g-2">
                          <div class="col-md-12">
                            <input class="form-control" type="text" required="" placeholder="Enter category name" autocomplete="off">
                          </div>
                        </div>
                        <button class="btn btn-primary me-2" type="button">Save</button>
                        <button class="btn button-light-primary" type="button" data-bs-dismiss="modal">Cancel</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
      </div>
    </div>


         @endverbatim
     @endslot
     @slot('script')
         <script>
             const {
                 createApp
             } = Vue;
             createApp({
                 data() {
                     return {
                         clientes: [],
                         documentos: [],
                         model: {
                             nombre: '',
                             apellido: '',
                             telefono: '',
                             direccion: '',
                             tipo_documento: '',
                             numero_documento: ''
                         },
                         actualizar: false,
                         buscar: '',
                     }
                 },
                 computed: {},
                 methods: {
                    asset(path) {
                        return "{{asset('/')}}"+'assets/images/logo/logo.png';
                    },
                     url(url) {
                         return '{{ url('') }}' + url;
                     },
                     async obtenerCliente() {
                         const respuesta = await axios.get("{{ url('/') }}" + '/api/clientes');
                         this.clientes = respuesta.data;
                     },
                     async get_data(path) {
                         const respuesta = await axios.get("{{ url('/') }}" + '/api/' + path);
                         return respuesta.data
                     },
                     async guardarCliente() {
                         let respuesta = await axios.post("{{ url('/') }}" + '/api/clientes', this.model);
                         await this.obtenerCliente();
                         Swal.fire({
                             position: "top-end",
                             icon: "success",
                             title: "Tu trabajo ha sido guardado",
                             showConfirmButton: false,
                             timer: 1000
                         });
                         this.model = {
                             nombre: '',
                             apellido: '',
                             telefono: '',
                             direccion: '',
                             tipo_documento: '',
                             numero_documento: ''
                         };
                     },
                     seleccionarCliente(cliente) {
                         this.model = cliente;
                         this.actualizar = true;
                         this.mostrarSiderbar = true;
                     },
                     async actualizarCliente() {
                         let respuesta = await axios.put("{{ url('/') }}" + '/api/clientes/' + this.model.id,
                             this.model);
                         await this.obtenerCliente();
                         Swal.fire({
                             position: "top-end",
                             icon: "success",
                             title: "Tu trabajo ha sido Actualizo",
                             showConfirmButton: false,
                             timer: 1000
                         });
                         this.model = {
                             nombre: '',
                             apellido: '',
                             telefono: '',
                             direccion: '',
                             tipo_documento: '',
                             numero_documento: ''
                         };

                     },
                     async eliminarCliente(id) {
                         const swalWithBootstrapButtons = Swal.mixin({
                             customClass: {
                                 confirmButton: "btn btn-success",
                                 cancelButton: "btn btn-danger"
                             },
                             buttonsStyling: false
                         });
                         swalWithBootstrapButtons.fire({
                             title: "Estas seguro?",
                             text: "¡No podrás revertir esto!",
                             icon: "warning",
                             showCancelButton: true,
                             confirmButtonText: "Sí, ¡eliminalo!",
                             cancelButtonText: "No, cancelalo!",
                             reverseButtons: true
                         }).then(async (result) => {
                             if (result.isConfirmed) {
                                 //EL ELIMINAR FUNCIONARA POR ESTO
                                 let respuesta = await axios.delete("{{ url('/') }}" +
                                     '/api/clientes/' + id);
                                 await this.obtenerCliente();
                                 //-------------------------------------//
                                 swalWithBootstrapButtons.fire({
                                     title: "Eliminado!",
                                     text: "Su cliente ha sido eliminado",
                                     icon: "success",
                                     //que se cierre dentro de 1 segundo
                                     timer: 1000
                                 });
                             }
                         });
                     }
                 },
                 mounted() {
                    console.log('Vue montado correctamente');
                     this.$nextTick(async function() {
                         await this.obtenerCliente();
                         //para obtener las tablas
                         await Promise.all([
                             this.get_data('documentos')
                         ]).then((values) => {
                             this.documentos = values[0];
                         })
                     });
                 },
             }).mount('#app');
         </script>
     @endslot
 @endcomponent
