<div class="page-header">
    <div class="header-wrapper row m-0">
        <div class="header-logo-wrapper col-auto p-0">
            <div class="logo-wrapper"><a href="index.html"> <img class="img-fluid for-light"
                        src="{{ asset('backend/assets/images/logo/logo-icon.png') }}" alt=""><img
                        class="img-fluid for-dark" src="{{ asset('backend/assets/images/logo/logo_dark.png') }}"
                        alt=""></a></div>
            <div class="toggle-sidebar">

                <svg class="sidebar-toggle" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                    viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="1" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="M14 4h6v6h-6z" />
                    <path d="M4 14h6v6h-6z" />
                    <path d="M17 17m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                    <path d="M7 7m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                </svg>

            </div>
        </div>
        <form class="col-sm-4 form-inline search-full d-none d-xl-block" action="#" method="get">
            <div class="form-group">
                <div class="Typeahead Typeahead--twitterUsers">
                    <div class="u-posRelative">
                        <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text"
                            placeholder="Type to Search .." name="q" title="" autofocus>
                        <svg class="search-bg svg-color">

                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="#000000" stroke-width="1" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
                                <path d="M21 21l-6 -6" />
                            </svg>

                        </svg>
                    </div>
                </div>
            </div>
        </form>
        <div class="nav-right col-xl-8 col-lg-12 col-auto pull-right right-header p-0">
            <ul class="nav-menus">
                <li class="serchinput">
                    <div class="serchbox">
                        <svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="#000000" stroke-width="1" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
                                <path d="M21 21l-6 -6" />
                            </svg>
                        </svg>
                    </div>
                    <div class="form-group search-form">
                        <input type="text" placeholder="Search here..">
                    </div>
                </li>
                <li class="onhover-dropdown">
                    <div class="notification-box">

                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"
                            fill="none" stroke="#000000" stroke-width="1" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path
                                d="M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" />
                            <path d="M9 17v1a3 3 0 0 0 6 0v-1" />
                        </svg>

                    </div>
                    <div class="onhover-show-div notification-dropdown">
                        <h6 class="f-18 mb-0 dropdown-title">Notifications</h6>
                        <div class="notification-card">
                            <ul>
                                <li>
                                    <div class="user-notification">
                                        <div><img src="{{ asset('backend/assets/images/avtar/2.jpg') }}" alt="avatar">
                                        </div>
                                        <div class="user-description"><a href="letter-box.html">
                                                <h4>You have new finical page design.</h4>
                                            </a><span>Today 11:45pm</span></div>
                                    </div>
                                    <div class="notification-btn">
                                        <button class="btn btn-pill btn-primary" type="button"
                                            title="btn btn-pill btn-primary">Accpet</button>
                                        <button class="btn btn-pill btn-secondary" type="button"
                                            title="btn btn-pill btn-primary">Decline</button>
                                    </div>
                                    <div class="show-btn"><a href="index.html"> <span>Show</span></a></div>
                                </li>
                                <li>
                                    <div class="user-notification">
                                        <div><img src="{{ asset('backend/assets/images/avtar/17.jpg') }}"
                                                alt="avatar"></div>
                                        <div class="user-description"><a href="letter-box.html">
                                                <h4>Congrats! you all task for today.</h4>
                                            </a><span>Today 01:05pm</span></div>
                                    </div>
                                    <div class="notification-btn">
                                        <button class="btn btn-pill btn-primary" type="button"
                                            title="btn btn-pill btn-primary">Accpet</button>
                                        <button class="btn btn-pill btn-secondary" type="button"
                                            title="btn btn-pill btn-primary">Decline</button>
                                    </div>
                                    <div class="show-btn"><a href="index.html"> <span>Show</span></a></div>
                                </li>
                                <li>
                                    <div class="user-notification">
                                        <div> <img src="{{ asset('backend/assets/images/avtar/18.jpg') }}"
                                                alt="avatar"></div>
                                        <div class="user-description"><a href="letter-box.html">
                                                <h4>You have new in landing page design.</h4>
                                            </a><span>Today 06:55pm</span></div>
                                    </div>
                                    <div class="notification-btn">
                                        <button class="btn btn-pill btn-primary" type="button"
                                            title="btn btn-pill btn-primary">Accpet</button>
                                        <button class="btn btn-pill btn-secondary" type="button"
                                            title="btn btn-pill btn-primary">Decline</button>
                                    </div>
                                    <div class="show-btn"><a href="index.html"> <span>Show</span></a></div>
                                </li>
                                <li>
                                    <div class="user-notification">
                                        <div><img src="{{ asset('backend/assets/images/avtar/19.jpg') }}"
                                                alt="avatar"></div>
                                        <div class="user-description"><a href="letter-box.html">
                                                <h4>Congrats! you all task for today.</h4>
                                            </a><span>Today 06:55pm</span></div>
                                    </div>
                                    <div class="notification-btn">
                                        <button class="btn btn-pill btn-primary" type="button"
                                            title="btn btn-pill btn-primary">Accpet</button>
                                        <button class="btn btn-pill btn-secondary" type="button"
                                            title="btn btn-pill btn-primary">Decline</button>
                                    </div>
                                    <div class="show-btn"> <a href="index.html"> <span>Show</span></a></div>
                                </li>
                                <li> <a class="f-w-700" href="letter-box.html">Check all </a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="onhover-dropdown">

                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"
                        fill="none" stroke="#000000" stroke-width="1" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path
                            d="M17.286 21.09q -1.69 .001 -5.288 -2.615q -3.596 2.617 -5.288 2.616q -2.726 0 -.495 -6.8q -9.389 -6.775 2.135 -6.775h.076q 1.785 -5.516 3.574 -5.516q 1.785 0 3.574 5.516h.076q 11.525 0 2.133 6.774q 2.23 6.802 -.497 6.8" />
                    </svg>

                    <div class="onhover-show-div bookmark-flip">
                        <div class="flip-card">
                            <div class="flip-card-inner">
                                <div class="front">
                                    <h6 class="f-18 mb-0 dropdown-title">Bookmark</h6>
                                    <ul class="bookmark-dropdown">
                                        <li>
                                            <div class="row">
                                                <div class="col-4 text-center"><a href="form-validation.html">
                                                        <div class="bookmark-content">
                                                            <div class="bookmark-icon bg-light-primary"><i
                                                                    data-feather="file-text"></i></div>
                                                            <span>Forms</span>
                                                        </div>
                                                    </a></div>
                                                <div class="col-4 text-center"><a href="user-profile.html">
                                                        <div class="bookmark-content">
                                                            <div class="bookmark-icon bg-light-secondary"><i
                                                                    data-feather="user"></i></div><span>Profile</span>
                                                        </div>
                                                    </a></div>
                                                <div class="col-4 text-center"><a href="bootstrap-basic-table.html">
                                                        <div class="bookmark-content">
                                                            <div class="bookmark-icon bg-light-warning"> <i
                                                                    data-feather="server"> </i></div><span>Tables
                                                            </span>
                                                        </div>
                                                    </a></div>
                                            </div>
                                        </li>
                                        <li class="text-centermedia-body"> <a class="flip-btn f-w-700" id="flip-btn"
                                                href="javascript:void(0)">Add New Bookmark</a></li>
                                    </ul>
                                </div>
                                <div class="back">
                                    <ul>
                                        <li>
                                            <div class="bookmark-dropdown flip-back-content">
                                                <input type="text" placeholder="search...">
                                            </div>
                                        </li>
                                        <li><a class="f-w-700 d-block flip-back" id="flip-back"
                                                href="javascript:void(0)">Back</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="onhover-dropdown">
                    <div class="message position-relative">

                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"
                            fill="none" stroke="#000000" stroke-width="1" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" />
                            <path d="M3 7l9 6l9 -6" />
                        </svg>
                        <span class="rounded-pill badge-danger"></span>
                    </div>
                    <div class="onhover-show-div message-dropdown">
                        <h6 class="f-18 mb-0 dropdown-title">Message </h6>
                        <ul>
                            <li>
                                <div class="d-flex align-items-start">
                                    <div class="message-img bg-light-primary"><img
                                            src="{{ asset('backend/assets/images/user/3.jpg') }}" alt="">
                                    </div>
                                    <div class="flex-grow-1">
                                        <h5><a href="letter-box.html">Emay Walter</a></h5>
                                        <p>Do you want to go see movie?</p>
                                    </div>
                                    <div class="notification-right"><i data-feather="x"></i></div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-start">
                                    <div class="message-img bg-light-primary"><img
                                            src="{{ asset('backend/assets/images/user/6.jpg') }}" alt="">
                                    </div>
                                    <div class="flex-grow-1">
                                        <h5> <a href="letter-box.html">Jason Borne</a></h5>
                                        <p>Thank you for rating us.</p>
                                    </div>
                                    <div class="notification-right"><i data-feather="x"></i></div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-start">
                                    <div class="message-img bg-light-primary"><img
                                            src="{{ asset('backend/assets/images/user/10.jpg') }}" alt="">
                                    </div>
                                    <div class="flex-grow-1">
                                        <h5> <a href="letter-box.html">Sarah Loren</a></h5>
                                        <p>What`s the project report update?</p>
                                    </div>
                                    <div class="notification-right"><i data-feather="x"></i></div>
                                </div>
                            </li>
                            <li> <a class="f-w-700" href="private-chat.html">Check all</a></li>
                        </ul>
                    </div>
                </li>
                <li class="cart-nav onhover-dropdown">
                    <div class="cart-box">

                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"
                            fill="none" stroke="#000000" stroke-width="1" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                            <path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                            <path d="M17 17h-11v-14h-2" />
                            <path d="M6 5l14 1l-1 7h-13" />
                        </svg>

                    </div>
                    <div class="cart-dropdown onhover-show-div">
                        <h6 class="f-18 mb-0 dropdown-title">Cart</h6>
                        <ul>
                            <li>
                                <div class="d-flex"><img class="img-fluid b-r-5 img-50"
                                        src="{{ asset('backend/assets/images/ecommerce/05.jpg') }}" alt="">
                                    <div class="flex-grow-1"> <span>Women's Track Suit</span>
                                        <h6 class="font-primary">8 x $65.00</h6>
                                    </div>
                                    <div class="close-circle"><a class="bg-primary" href="#"><i
                                                data-feather="x"></i></a></div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex"><img class="img-fluid b-r-5 img-50"
                                        src="{{ asset('backend/assets/images/ecommerce/02.jpg') }}" alt="">
                                    <div class="flex-grow-1"><span>Men's Jacket</span>
                                        <h6 class="font-primary">10 x $50.00</h6>
                                    </div>
                                    <div class="close-circle"><a class="bg-primary" href="#"><i
                                                data-feather="x"></i></a></div>
                                </div>
                            </li>
                            <li class="total">
                                <h6 class="mb-0">Order Total :<span class="f-right">$1020.00</span></h6>
                            </li>
                            <li class="text-center"> <a href="cart.html">
                                    <button class="btn btn-outline-primary" type="button">View Cart</button></a><a
                                    class="btn btn-primary view-checkout" href="checkout.html">Checkout </a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <div class="mode">
                        <svg class="for-dark" xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                            viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="1"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" />
                        </svg>

                        <svg class="for-light" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"
                            fill="none" stroke="#000000" stroke-width="1" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                            <path
                                d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7" />
                        </svg>


                    </div>
                </li>
                <li class="language-nav">
                    <div class="translate_wrapper">
                        <div class="current_lang">
                            <div class="lang"><i class="flag-icon flag-icon-gb"></i><span
                                    class="lang-txt box-col-none">EN </span></div>
                        </div>
                        <div class="more_lang">
                            <div class="lang selected" data-value="en"><i class="flag-icon flag-icon-us"></i><span
                                    class="lang-txt">English<span> (US)</span></span></div>
                            <div class="lang" data-value="de"><i class="flag-icon flag-icon-de"></i><span
                                    class="lang-txt">Deutsch</span></div>
                            <div class="lang" data-value="es"><i class="flag-icon flag-icon-es"></i><span
                                    class="lang-txt">Español</span></div>
                            <div class="lang" data-value="fr"><i class="flag-icon flag-icon-fr"></i><span
                                    class="lang-txt">Français</span></div>
                            <div class="lang" data-value="pt"><i class="flag-icon flag-icon-pt"></i><span
                                    class="lang-txt">Português<span> (BR)</span></span></div>
                            <div class="lang" data-value="cn"><i class="flag-icon flag-icon-cn"></i><span
                                    class="lang-txt">简体中文</span></div>
                            <div class="lang" data-value="ae"><i class="flag-icon flag-icon-ae"></i><span
                                    class="lang-txt">لعربية <span> (ae)</span></span></div>
                        </div>
                    </div>
                </li>
                <li class="profile-nav onhover-dropdown pe-0 py-0">
                    <div class="d-flex align-items-center profile-media"><img class="b-r-25"
                            src="{{ asset('backend/assets/images/dashboard/profile.png') }}" alt="">
                        <div class="flex-grow-1 user"><span>Helen Walter</span>
                            <p class="mb-0 font-nunito">Admin
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 32 32" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g transform="matrix(0.5099999999999995,0,0,0.5099999999999995,7.839999649524694,7.839929203987129)"><path d="M29.604 10.528 17.531 23.356a2.102 2.102 0 0 1-3.062 0L2.396 10.528c-.907-.964-.224-2.546 1.1-2.546h25.008c1.324 0 2.007 1.582 1.1 2.546z" fill="#000000" opacity="1" data-original="#000000" class=""></path></g></svg>
                            </p>
                        </div>
                    </div>
                    <ul class="profile-dropdown onhover-show-div">
                        <li><a href="user-profile.html"><i data-feather="user"></i><span>Account </span></a></li>
                        <li><a href="letter-box.html"><i data-feather="mail"></i><span>Inbox</span></a></li>
                        <li><a href="task.html"><i data-feather="file-text"></i><span>Taskboard</span></a></li>
                        <li><a href="edit-profile.html"><i data-feather="settings"></i><span>Settings</span></a></li>
                        <li><a href="login.html"> <i data-feather="log-in"></i><span>Log Out</span></a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <script class="result-template" type="text/x-handlebars-template">
            <div class="ProfileCard u-cf">              
            <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
            <div class="ProfileCard-details">
            <div class="ProfileCard-realName">Md Mizanur Rahman</div>
            </div>
            </div>
          </script>
        <script class="empty-template" type="text/x-handlebars-template"><div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div></script>
    </div>
</div>
