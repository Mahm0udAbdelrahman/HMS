
<!-- Start::app-sidebar -->
<aside class="app-sidebar sticky" id="sidebar">

    <!-- Start::main-sidebar-header -->
    <div class="main-sidebar-header">
        <a href="index.html" class="header-logo">
            <img src="{{ asset('dashboard/assets/images/brand-logos/desktop-white.png')}}" class="desktop-white" alt="logo">
            <img src="{{ asset('dashboard/assets/images/brand-logos/toggle-white.png')}}" class="toggle-white" alt="logo">
            <img src="{{ asset('dashboard/assets/images/brand-logos/desktop-logo.png')}}" class="desktop-logo" alt="logo">
            <img src="{{ asset('dashboard/assets/images/brand-logos/toggle-dark.png')}}" class="toggle-dark" alt="logo">
            <img src="{{ asset('dashboard/assets/images/brand-logos/toggle-logo.png')}}" class="toggle-logo" alt="logo">
            <img src="{{ asset('dashboard/assets/images/brand-logos/desktop-dark.png')}}" class="desktop-dark" alt="logo">
        </a>
    </div>
    <!-- End::main-sidebar-header -->

    <!-- Start::main-sidebar -->
    <div class="main-sidebar" id="sidebar-scroll">

        <!-- Start::nav -->
        <nav class="main-menu-container nav nav-pills flex-column sub-open">
            <div class="slide-left" id="slide-left">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"> <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path> </svg>
            </div>
            <ul class="main-menu">
                <!-- Start::slide__category -->
                <li class="slide__category"><span class="category-name">{{ __('Dashboard') }}</span></li>
                <!-- End::slide__category -->

                <!-- Start::slide -->
                <li class="slide">
                    <a href="{{route('admin.main')}}" class="side-menu__item">
                        <span class="shape1"></span>
                        <span class="shape2"></span>
                        <i class="ti-home side-menu__icon"></i>
                        <span class="side-menu__label">{{ __('Dashboard') }}</span>
                    </a>
                </li>
                <!-- End::slide -->

                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <span class="shape1"></span>
                        <span class="shape2"></span>
                        <i class="ti-wallet side-menu__icon"></i>
                        <span class="side-menu__label">{{ __('Crypto Currencies') }}</span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0)">{{ __('Crypto Currencies') }}</a>
                        </li>
                        <li class="slide">
                            <a href="" class="side-menu__item">{{  __('Dashboard') }}</a>
                        </li>
                        <li class="slide">
                            <a href="" class="side-menu__item">{{ __('Cetagories') }}</a>
                        </li>
                        <li class="slide">
                            <a href="" class="side-menu__item">{{ __('Users') }}</a>
                        </li>
                        <li class="slide">
                            <a href="" class="side-menu__item">{{ __('Products') }}</a>
                        </li>

                        <li class="slide">
                            <a href="crypto-transactions.html" class="side-menu__item">Transactions</a>
                        </li>
                    </ul>
                </li>
                <!-- End::slide -->

                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <span class="shape1"></span>
                        <span class="shape2"></span>
                        <i class="ti-shopping-cart-full side-menu__icon"></i>
                        <span class="side-menu__label">{{ __('ECommerce') }}</span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0)">E-Commerce</a>
                        </li>
                        <li class="slide">
                            <a href="{{ route('admin.main') }}" class="side-menu__item">{{ __('Dashboard') }}</a>
                        </li>
                        <li class="slide">
                            <a href="{{ route('admin.setting.create') }}"  class="side-menu__item">{{ __('Settings') }}</a>
                        </li>
                        <li class="slide">
                            <a href="{{ route('admin.countries') }}" class="side-menu__item">{{ __('counties') }}</a>
                        </li>
                        <li class="slide">
                            <a href="{{ route('admin.permissions.index') }}" class="side-menu__item">{{ __('permissions') }}</a>
                        </li>

                        <li class="slide">
                            <a href="{{ route('admin.roles.index') }}" class="side-menu__item">{{ __('roles') }}</a>
                        </li>
                        <li class="slide">
                            <a href="{{ route('admin.specialties') }}" class="side-menu__item">{{ __('specialties') }}</a>
                        </li>
                        <li class="slide">
                            <a href="{{ route('admin.enterprises.index') }}" class="side-menu__item">{{ __('Enterprises') }}</a>
                        </li>
                        <li class="slide">
                            <a href="{{ route('admin.subscriptions.create') }}" class="side-menu__item">{{ ('Subscriptions') }}</a>
                        </li>
                        <li class="slide">
                            <a href="{{ route('admin.categories.index') }}" class="side-menu__item">Categories</a>
                        </li>
                    </ul>
                </li>
                <!-- End::slide -->

                <!-- Start::slide__category -->
                <li class="slide__category"><span class="category-name">{{ __('Landing') }}</span></li>
                <!-- End::slide__category -->

                <!-- Start::slide -->
                <li class="slide">
                    <a href="landing.html" class="side-menu__item">
                        <span class="shape1"></span>
                        <span class="shape2"></span>
                        <i class="ti-layout side-menu__icon"></i>
                        <span class="side-menu__label">{{ __('Landing Page') }}</span>
                    </a>
                </li>
                <!-- End::slide -->

                <!-- Start::slide__category -->
                <li class="slide__category"><span class="category-name">{{ __('Applications') }}</span></li>
                <!-- End::slide__category -->

                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <span class="shape1"></span>
                        <span class="shape2"></span>
                        <i class="ti-write side-menu__icon"></i>
                        <span class="side-menu__label">{{ __('Apps') }}</span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0)">{{ __('Apps') }}</a>
                        </li>
                        <li class="slide">
                            <a href="widgets.html" class="side-menu__item">Widgets</a>
                        </li>
                        <li class="slide">
                            <a href="sweet_alerts.html" class="side-menu__item">Sweet Alerts</a>
                        </li>
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">Mail<i class="fe fe-chevron-right side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide">
                                    <a href="mail-inbox.html" class="side-menu__item">Mail-Inbox</a>
                                </li>
                                <li class="slide">
                                    <a href="viewmail.html" class="side-menu__item">View-Mail</a>
                                </li>
                                <li class="slide">
                                    <a href="mail-compose.html" class="side-menu__item">Mail-Compose</a>
                                </li>
                            </ul>
                        </li>
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">Maps<i class="fe fe-chevron-right side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide">
                                    <a href="leaflet-maps.html" class="side-menu__item">Leaflet Maps</a>
                                </li>
                                <li class="slide">
                                    <a href="vector-maps.html" class="side-menu__item">Vector Maps</a>
                                </li>
                                <li class="slide">
                                    <a href="google-maps.html" class="side-menu__item">Google Maps</a>
                                </li>
                            </ul>
                        </li>
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">Tables<i class="fe fe-chevron-right side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide">
                                    <a href="tables.html" class="side-menu__item">Tables</a>
                                </li>
                                <li class="slide">
                                    <a href="grid-tables.html" class="side-menu__item">Grid JS Tables</a>
                                </li>
                                <li class="slide">
                                    <a href="data-tables.html" class="side-menu__item">Data Tables</a>
                                </li>
                            </ul>
                        </li>
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">Blog<i class="fe fe-chevron-right side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide">
                                    <a href="blog.html" class="side-menu__item">Blog Page</a>
                                </li>
                                <li class="slide">
                                    <a href="blog-details.html" class="side-menu__item">Blog Details</a>
                                </li>
                                <li class="slide">
                                    <a href="blog-post.html" class="side-menu__item">Blog Post</a>
                                </li>
                            </ul>
                        </li>
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">File Manager<i class="fe fe-chevron-right side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide">
                                    <a href="file-manager.html" class="side-menu__item">File Manager</a>
                                </li>
                                <li class="slide">
                                    <a href="file-manager-list.html" class="side-menu__item">File Manager List</a>
                                </li>
                                <li class="slide">
                                    <a href="file-details.html" class="side-menu__item">File Details</a>
                                </li>
                            </ul>
                        </li>
                        <li class="slide">
                            <a href="icons.html" class="side-menu__item">Icons</a>
                        </li>
                    </ul>
                </li>
                <!-- End::slide -->

                <!-- Start::slide__category -->
                <li class="slide__category"><span class="category-name">{{ __('Components') }}</span></li>
                <!-- End::slide__category -->

                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <span class="shape1"></span>
                        <span class="shape2"></span>
                        <i class="ti-package side-menu__icon"></i>
                        <span class="side-menu__label">{{ __('Elements') }}</span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1 mega-menu">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0)">{{ __('Elements') }}</a>
                        </li>
                        <li class="slide">
                            <a href="accordions_collpase.html" class="side-menu__item">Accordions & Collapse</a>
                        </li>
                        <li class="slide">
                            <a href="alerts.html" class="side-menu__item">Alerts</a>
                        </li>
                        <li class="slide">
                            <a href="avatars.html" class="side-menu__item">Avatars</a>
                        </li>
                        <li class="slide">
                            <a href="breadcrumb.html" class="side-menu__item">Breadcrumbs</a>
                        </li>
                        <li class="slide">
                            <a href="buttons.html" class="side-menu__item">Buttons</a>
                        </li>
                        <li class="slide">
                            <a href="buttongroup.html" class="side-menu__item">Button Group</a>
                        </li>
                        <li class="slide">
                            <a href="badge.html" class="side-menu__item">Badge</a>
                        </li>
                        <li class="slide">
                            <a href="dropdowns.html" class="side-menu__item">Dropdowns</a>
                        </li>
                        <li class="slide">
                            <a href="images_figures.html" class="side-menu__item">Images & Figures</a>
                        </li>
                        <li class="slide">
                            <a href="listgroup.html" class="side-menu__item">List Group</a>
                        </li>
                        <li class="slide">
                            <a href="navs_tabs.html" class="side-menu__item">Navs & Tabs</a>
                        </li>
                        <li class="slide">
                            <a href="object-fit.html" class="side-menu__item">Object Fit</a>
                        </li>
                        <li class="slide">
                            <a href="pagination.html" class="side-menu__item">Pagination</a>
                        </li>
                        <li class="slide">
                            <a href="popovers.html" class="side-menu__item">Popovers</a>
                        </li>
                        <li class="slide">
                            <a href="progress.html" class="side-menu__item">Progress</a>
                        </li>
                        <li class="slide">
                            <a href="spinners.html" class="side-menu__item">Spinners</a>
                        </li>
                        <li class="slide">
                            <a href="typography.html" class="side-menu__item">Typography</a>
                        </li>
                        <li class="slide">
                            <a href="tooltips.html" class="side-menu__item">Tooltips</a>
                        </li>
                        <li class="slide">
                            <a href="toasts.html" class="side-menu__item">Toasts</a>
                        </li>
                        <li class="slide">
                            <a href="tags.html" class="side-menu__item">Tags</a>
                        </li>
                    </ul>
                </li>
                <!-- End::slide -->

                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <span class="shape1"></span>
                        <span class="shape2"></span>
                        <i class="ti-briefcase side-menu__icon"></i>
                        <span class="side-menu__label">{{ __('Advanced UI') }}</span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0)">{{ __('Advanced UI') }}</a>
                        </li>
                        <li class="slide">
                            <a href="carousel.html" class="side-menu__item">Carousel</a>
                        </li>
                        <li class="slide">
                            <a href="full-calendar.html" class="side-menu__item">Full Calendar</a>
                        </li>
                        <li class="slide">
                            <a href="draggable-cards.html" class="side-menu__item">Draggable Cards</a>
                        </li>
                        <li class="slide">
                            <a href="chat.html" class="side-menu__item">Chat</a>
                        </li>
                        <li class="slide">
                            <a href="contacts.html" class="side-menu__item">Contacts</a>
                        </li>
                        <li class="slide">
                            <a href="cards.html" class="side-menu__item">Cards</a>
                        </li>
                        <li class="slide">
                            <a href="timeline.html" class="side-menu__item">Timeline</a>
                        </li>
                        <li class="slide">
                            <a href="search.html" class="side-menu__item">Search</a>
                        </li>
                        <li class="slide">
                            <a href="userlist.html" class="side-menu__item">Userlist</a>
                        </li>
                        <li class="slide">
                            <a href="notification.html" class="side-menu__item">Notification</a>
                        </li>
                        <li class="slide">
                            <a href="treeview.html" class="side-menu__item">Tree-view</a>
                        </li>
                        <li class="slide">
                            <a href="modals_closes.html" class="side-menu__item">Modals & Closes</a>
                        </li>
                        <li class="slide">
                            <a href="navbar.html" class="side-menu__item">Navbar</a>
                        </li>
                        <li class="slide">
                            <a href="offcanvas.html" class="side-menu__item">Offcanvas</a>
                        </li>
                        <li class="slide">
                            <a href="placeholders.html" class="side-menu__item">Placeholders</a>
                        </li>
                        <li class="slide">
                            <a href="ratings.html" class="side-menu__item">ratings</a>
                        </li>
                        <li class="slide">
                            <a href="scrollspy.html" class="side-menu__item">Scrollspy</a>
                        </li>
                        <li class="slide">
                            <a href="swiperjs.html" class="side-menu__item">Swiper JS</a>
                        </li>
                    </ul>
                </li>
                <!-- End::slide -->

                <!-- Start::slide__category -->
                <li class="slide__category"><span class="category-name">{{ __('Other Pages') }}</span></li>
                <!-- End::slide__category -->

                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <span class="shape1"></span>
                        <span class="shape2"></span>
                        <i class="ti-palette side-menu__icon"></i>
                        <span class="side-menu__label">{{ __('Pages') }}</span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0)">{{ __('Pages') }}</a>
                        </li>
                        <li class="slide">
                            <a href="profile.html" class="side-menu__item">Profile</a>
                        </li>
                        <li class="slide">
                            <a href="aboutus.html" class="side-menu__item">About Us</a>
                        </li>
                        <li class="slide">
                            <a href="settings.html" class="side-menu__item">Settings</a>
                        </li>
                        <li class="slide">
                            <a href="invoice.html" class="side-menu__item">Invoice</a>
                        </li>
                        <li class="slide">
                            <a href="pricing.html" class="side-menu__item">Pricing</a>
                        </li>
                        <li class="slide">
                            <a href="gallery.html" class="side-menu__item">Gallery</a>
                        </li>
                        <li class="slide">
                            <a href="notifications-list.html" class="side-menu__item">Notifications List</a>
                        </li>
                        <li class="slide">
                            <a href="faq.html" class="side-menu__item">Faqs</a>
                        </li>
                        <li class="slide">
                            <a href="success-message.html" class="side-menu__item">Success Message</a>
                        </li>
                        <li class="slide">
                            <a href="danger-message.html" class="side-menu__item">Danger Message</a>
                        </li>
                        <li class="slide">
                            <a href="warning-message.html" class="side-menu__item">Warning Message</a>
                        </li>
                        <li class="slide">
                            <a href="empty.html" class="side-menu__item">Empty Page</a>
                        </li>
                    </ul>
                </li>
                <!-- End::slide -->

                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <span class="shape1"></span>
                        <span class="shape2"></span>
                        <i class="ti-shield side-menu__icon"></i>
                        <span class="side-menu__label">{{ __('Utilities') }}</span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0)">{{ __('Utilities') }}</a>
                        </li>
                        <li class="slide">
                            <a href="breakpoints.html" class="side-menu__item">Breakpoints</a>
                        </li>
                        <li class="slide">
                            <a href="display.html" class="side-menu__item">Display</a>
                        </li>
                        <li class="slide">
                            <a href="borders.html" class="side-menu__item">Borders</a>
                        </li>
                        <li class="slide">
                            <a href="colors.html" class="side-menu__item">Colors</a>
                        </li>
                        <li class="slide">
                            <a href="flex.html" class="side-menu__item">Flex</a>
                        </li>
                        <li class="slide">
                            <a href="columns.html" class="side-menu__item">Columns</a>
                        </li>
                        <li class="slide">
                            <a href="gutters.html" class="side-menu__item">Gutters</a>
                        </li>
                        <li class="slide">
                            <a href="helpers.html" class="side-menu__item">Helpers</a>
                        </li>
                        <li class="slide">
                            <a href="position.html" class="side-menu__item">Position</a>
                        </li>
                        <li class="slide">
                            <a href="more.html" class="side-menu__item">More</a>
                        </li>
                    </ul>
                </li>
                <!-- End::slide -->

                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <span class="shape1"></span>
                        <span class="shape2"></span>
                        <i class="ti-menu side-menu__icon"></i>
                        <span class="side-menu__label">{{ __('Submenu') }}</span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0)">{{ __('Submenu') }}</a>
                        </li>
                        <li class="slide">
                            <a href="javascript:void(0);" class="side-menu__item">{{ __('Submenu') }}-01</a>
                        </li>
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">{{ __('Submenu') }}-02
                                <i class="fe fe-chevron-right side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide">
                                    <a href="javascript:void(0);" class="side-menu__item">Level-01</a>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">Level-02
                                        <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                    <ul class="slide-menu child3">
                                        <li class="slide">
                                            <a href="javascript:void(0);" class="side-menu__item">Level-11</a>
                                        </li>
                                        <li class="slide">
                                            <a href="javascript:void(0);" class="side-menu__item">Level-12</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- End::slide -->

                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <span class="shape1"></span>
                        <span class="shape2"></span>
                        <i class="ti-lock side-menu__icon"></i>
                        <span class="side-menu__label">{{ __('Authentication') }}</span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0)">{{ __('Authentication') }}</a>
                        </li>
                        <li class="slide">
                            <a href="signin.html" class="side-menu__item">Sign In</a>
                        </li>
                        <li class="slide">
                            <a href="signup.html" class="side-menu__item">Sign Up</a>
                        </li>
                        <li class="slide">
                            <a href="forgot.html" class="side-menu__item">Forgot Password</a>
                        </li>
                        <li class="slide">
                            <a href="reset.html" class="side-menu__item">Reset Password</a>
                        </li>
                        <li class="slide">
                            <a href="lockscreen.html" class="side-menu__item">Lockscreen</a>
                        </li>
                        <li class="slide">
                            <a href="underconstruction.html" class="side-menu__item">UnderConstruction</a>
                        </li>
                        <li class="slide">
                            <a href="404.html" class="side-menu__item">404 Error</a>
                        </li>
                        <li class="slide">
                            <a href="500.html" class="side-menu__item">500 Error</a>
                        </li>
                    </ul>
                </li>
                <!-- End::slide -->

                <!-- Start::slide__category -->
                <li class="slide__category"><span class="category-name">{{ __('Forms') }} &amp; Charts</span></li>
                <!-- End::slide__category -->

                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <span class="shape1"></span>
                        <span class="shape2"></span>
                        <i class="ti-receipt side-menu__icon"></i>
                        <span class="side-menu__label">{{ __('Forms') }}</span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0)">{{ __('Forms') }}</a>
                        </li>
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">Form {{ __('Elements') }}
                                <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                <ul class="slide-menu child2">
                                    <li class="slide">
                                        <a href="form_inputs.html" class="side-menu__item">Inputs</a>
                                    </li>
                                    <li class="slide">
                                        <a href="form_check_radios.html" class="side-menu__item">Checks & Radios</a>
                                    </li>
                                    <li class="slide">
                                        <a href="form_input_group.html" class="side-menu__item">Input Group</a>
                                    </li>
                                    <li class="slide">
                                        <a href="form_select.html" class="side-menu__item">Form Select</a>
                                    </li>
                                    <li class="slide">
                                        <a href="form_range.html" class="side-menu__item">Range Slider</a>
                                    </li>
                                    <li class="slide">
                                        <a href="form_input_masks.html" class="side-menu__item">Input Masks</a>
                                    </li>
                                    <li class="slide">
                                        <a href="form_file_uploads.html" class="side-menu__item">File Uploads</a>
                                    </li>
                                    <li class="slide">
                                        <a href="form_dateTime_pickers.html" class="side-menu__item">Date,Time Picker</a>
                                    </li>
                                    <li class="slide">
                                        <a href="form_color_pickers.html" class="side-menu__item">Color Picker</a>
                                    </li>
                                </ul>
                        </li>
                        <li class="slide">
                            <a href="floating_labels.html" class="side-menu__item">Floating Labels</a>
                        </li>
                        <li class="slide">
                            <a href="form_layout.html" class="side-menu__item">Form Layouts</a>
                        </li>
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">Form Editor<i class="fe fe-chevron-right side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide">
                                    <a href="quill_editor.html" class="side-menu__item">Quill Editor</a>
                                </li>
                            </ul>
                        </li>
                        <li class="slide">
                            <a href="form_validation.html" class="side-menu__item">Validation</a>
                        </li>
                        <li class="slide">
                            <a href="form_select2.html" class="side-menu__item">Select2</a>
                        </li>
                    </ul>
                </li>
                <!-- End::slide -->

                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <span class="shape1"></span>
                        <span class="shape2"></span>
                        <i class="ti-bar-chart-alt side-menu__icon"></i>
                        <span class="side-menu__label">{{ __('Charts') }}</span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>

                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0)">{{ __('Charts') }}</a>
                        </li>
                        <li class="slide">
                            <a href="chartjs-charts.html" class="side-menu__item">ChartJS</a>
                        </li>
                        <li class="slide">
                            <a href="echarts.html" class="side-menu__item">Echart</a>
                        </li>
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">Apex Charts<i class="fe fe-chevron-right side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide">
                                    <a href="apex-line-charts.html" class="side-menu__item">Line Charts</a>
                                </li>
                                <li class="slide">
                                    <a href="apex-area-charts.html" class="side-menu__item">Area Charts</a>
                                </li>
                                <li class="slide">
                                    <a href="apex-column-charts.html" class="side-menu__item">Column Charts</a>
                                </li>
                                <li class="slide">
                                    <a href="apex-bar-charts.html" class="side-menu__item">Bar Charts</a>
                                </li>
                                <li class="slide">
                                    <a href="apex-mixed-charts.html" class="side-menu__item">Mixed Charts</a>
                                </li>
                                <li class="slide">
                                    <a href="apex-rangearea-charts.html" class="side-menu__item">Range Area Charts</a>
                                </li>
                                <li class="slide">
                                    <a href="apex-timeline-charts.html" class="side-menu__item">Timeline Charts</a>
                                </li>
                                <li class="slide">
                                    <a href="apex-candlestick-charts.html" class="side-menu__item">CandleStick Charts</a>
                                </li>
                                <li class="slide">
                                    <a href="apex-boxplot-charts.html" class="side-menu__item">Boxplot Charts</a>
                                </li>
                                <li class="slide">
                                    <a href="apex-bubble-charts.html" class="side-menu__item">Bubble Charts</a>
                                </li>
                                <li class="slide">
                                    <a href="apex-scatter-charts.html" class="side-menu__item">Scatter Charts</a>
                                </li>
                                <li class="slide">
                                    <a href="apex-heatmap-charts.html" class="side-menu__item">Heatmap Charts</a>
                                </li>
                                <li class="slide">
                                    <a href="apex-treemap-charts.html" class="side-menu__item">Treemap Charts</a>
                                </li>
                                <li class="slide">
                                    <a href="apex-pie-charts.html" class="side-menu__item">Pie Charts</a>
                                </li>
                                <li class="slide">
                                    <a href="apex-radialbar-charts.html" class="side-menu__item">Radialbar Charts</a>
                                </li>
                                <li class="slide">
                                    <a href="apex-radar-charts.html" class="side-menu__item">Radar Charts</a>
                                </li>
                                <li class="slide">
                                    <a href="apex-polararea-charts.html" class="side-menu__item">Polararea Charts</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- End::slide -->
            </ul>
            <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"> <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path> </svg></div>
        </nav>
        <!-- End::nav -->

    </div>
    <!-- End::main-sidebar -->

</aside>
<!-- End::app-sidebar -->
