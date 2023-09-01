<nav class="navbar navbar-light navbar-glass navbar-top navbar-expand-lg" style="display: none;">
    <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarStandard" aria-controls="navbarStandard" aria-expanded="false"
        aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
    <a class="navbar-brand me-1 me-sm-3" href="{{ route('dash') }}">
        <div class="d-flex align-items-center">
            <img class="me-2" src="{{ asset('assets/img/logos/hubstaff.png') }}" alt="" width="40" /><span
                class="font-sans-serif">HWA SAT</span>
        </div>
    </a>

    <div class="collapse navbar-collapse scrollbar" id="navbarStandard">
        <ul class="navbar-nav" data-top-nav-dropdowns="data-top-nav-dropdowns">
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="dashboards">##</a>
                <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0" aria-labelledby="dashboards">
                    <div class="bg-white dark__bg-1000 rounded-3 py-2">
                        <a class="dropdown-item link-600 fw-medium" href="{{ route('dash') }}">Default</a>
                        <a class="dropdown-item link-600 fw-medium" href="dashboard/analytics.html">Analytics</a>
                        <a class="dropdown-item link-600 fw-medium" href="dashboard/crm.html">CRM</a>
                        <a class="dropdown-item link-600 fw-medium" href="dashboard/e-commerce.html">E
                            commerce</a>
                        <a class="dropdown-item link-600 fw-medium" href="dashboard/lms.html">LMS
                            <span class="badge rounded-pill ms-2 badge-soft-success">New</span>
                        </a><a class="dropdown-item link-600 fw-medium"
                            href="dashboard/project-management.html">Management</a>
                        <a class="dropdown-item link-600 fw-medium" href="dashboard/saas.html">SaaS</a>
                        <a class="dropdown-item link-600 fw-medium" href="dashboard/support-desk.html">Support
                            desk
                            <span class="badge rounded-pill ms-2 badge-soft-success">New</span></a>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="apps">App</a>
                <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0" aria-labelledby="apps">
                    <div class="card navbar-card-app shadow-none dark__bg-1000">
                        <div class="card-body scrollbar max-h-dropdown"><img class="img-dropdown"
                                src="assets/img/icons/spot-illustrations/authentication-corner.png" width="130"
                                alt="" />
                            <div class="row">
                                <div class="col-6 col-md-4">
                                    <div class="nav flex-column"><a class="nav-link py-1 link-600 fw-medium"
                                            href="app/calendar.html">Calendar</a><a
                                            class="nav-link py-1 link-600 fw-medium" href="app/chat.html">Chat</a><a
                                            class="nav-link py-1 link-600 fw-medium" href="app/kanban.html">Kanban</a>
                                        <p class="nav-link text-700 mb-0 fw-bold">Social</p><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="app/social/feed.html">Feed</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="app/social/activity-log.html">Activity log</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="app/social/notifications.html">Notifications</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="app/social/followers.html">Followers</a>
                                        <p class="nav-link text-700 mb-0 fw-bold">Support Desk</p><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="app/support-desk/table-view.html">Table view</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="app/support-desk/card-view.html">Card view</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="app/support-desk/contacts.html">Contacts</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="app/support-desk/contact-details.html">Contact
                                            details</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="app/support-desk/tickets-preview.html">Tickets
                                            preview</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="app/support-desk/quick-links.html">Quick links</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="app/support-desk/reports.html">Reports</a>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4">
                                    <div class="nav flex-column">
                                        <p class="nav-link text-700 mb-0 fw-bold">E-Learning</p><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="app/e-learning/course/course-list.html">Course
                                            list</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="app/e-learning/course/course-grid.html">Course
                                            grid</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="app/e-learning/course/course-details.html">Course
                                            details</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="app/e-learning/course/create-a-course.html">Create a
                                            course</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="app/e-learning/student-overview.html">Student
                                            overview</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="app/e-learning/trainer-profile.html">Trainer
                                            profile</a>
                                        <p class="nav-link text-700 mb-0 fw-bold">Events</p><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="app/events/create-an-event.html">Create an
                                            event</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="app/events/event-detail.html">Event detail</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="app/events/event-list.html">Event list</a>
                                        <p class="nav-link text-700 mb-0 fw-bold">Email</p><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="app/email/inbox.html">Inbox</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="app/email/email-detail.html">Email detail</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="app/email/compose.html">Compose</a>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4">
                                    <div class="nav flex-column">
                                        <p class="nav-link text-700 mb-0 fw-bold">E-Commerce</p><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="app/e-commerce/product/product-list.html">Product
                                            list</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="app/e-commerce/product/product-grid.html">Product
                                            grid</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="app/e-commerce/product/product-details.html">Product
                                            details</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="app/e-commerce/orders/order-list.html">Order
                                            list</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="app/e-commerce/orders/order-details.html">Order
                                            details</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="app/e-commerce/customers.html">Customers</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="app/e-commerce/customer-details.html">Customer
                                            details</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="app/e-commerce/shopping-cart.html">Shopping
                                            cart</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="app/e-commerce/checkout.html">Checkout</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="app/e-commerce/billing.html">Billing</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="app/e-commerce/invoice.html">Invoice</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="pagess">Pages</a>
                <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0" aria-labelledby="pagess">
                    <div class="card navbar-card-pages shadow-none dark__bg-1000">
                        <div class="card-body scrollbar max-h-dropdown"><img class="img-dropdown"
                                src="assets/img/icons/spot-illustrations/authentication-corner.png" width="130"
                                alt="" />
                            <div class="row">
                                <div class="col-6 col-xxl-3">
                                    <div class="nav flex-column">
                                        <p class="nav-link text-700 mb-0 fw-bold">Simple Auth</p><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="authentication/simple/login.html">Login</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="{{ route('logout') }}">Logout</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form><a class="nav-link py-1 link-600 fw-medium"
                                            href="authentication/simple/register.html">Register</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="authentication/simple/forgot-password.html">Forgot
                                            password</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="authentication/simple/confirm-mail.html">Confirm
                                            mail</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="authentication/simple/reset-password.html">Reset
                                            password</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="authentication/simple/lock-screen.html">Lock screen</a>
                                    </div>
                                </div>
                                <div class="col-6 col-xxl-3">
                                    <div class="nav flex-column">
                                        <p class="nav-link text-700 mb-0 fw-bold">Card Auth</p><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="authentication/card/login.html">Login</a><a
                                            class="nav-link py-1 link-600 fw-medium" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">Logout</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form><a class="nav-link py-1 link-600 fw-medium"
                                            href="authentication/card/register.html">Register</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="authentication/card/forgot-password.html">Forgot
                                            password</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="authentication/card/confirm-mail.html">Confirm
                                            mail</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="authentication/card/reset-password.html">Reset
                                            password</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="authentication/card/lock-screen.html">Lock screen</a>
                                    </div>
                                </div>
                                <div class="col-6 col-xxl-3">
                                    <div class="nav flex-column">
                                        <p class="nav-link text-700 mb-0 fw-bold">Split Auth</p><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="authentication/split/login.html">Login</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="authentication/split/logout.html">Logout</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="authentication/split/register.html">Register</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="authentication/split/forgot-password.html">Forgot
                                            password</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="authentication/split/confirm-mail.html">Confirm
                                            mail</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="authentication/split/reset-password.html">Reset
                                            password</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="authentication/split/lock-screen.html">Lock screen</a>
                                    </div>
                                </div>
                                <div class="col-6 col-xxl-3">
                                    <div class="nav flex-column">
                                        <p class="nav-link text-700 mb-0 fw-bold">Layouts</p><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="demo/navbar-vertical.html">Navbar vertical</a><a
                                            class="nav-link py-1 link-600 fw-medium" href="demo/navbar-top.html">Top
                                            nav</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="demo/navbar-double-top.html">Double top<span
                                                class="badge rounded-pill ms-2 badge-soft-success">New</span></a><a
                                            class="nav-link py-1 link-600 fw-medium" href="demo/combo-nav.html">Combo
                                            nav</a>
                                        <p class="nav-link text-700 mb-0 fw-bold">Others</p><a
                                            class="nav-link py-1 link-600 fw-medium" href="starter.html">Starter</a><a
                                            class="nav-link py-1 link-600 fw-medium" href="landing.html">Landing</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 col-xxl-3">
                                    <div class="nav flex-column">
                                        <p class="nav-link text-700 mb-0 fw-bold">User</p><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="user/profile.html">Profile</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="user/settings.html">Settings</a>
                                    </div>
                                </div>
                                <div class="col-6 col-xxl-3">
                                    <div class="nav flex-column">
                                        <p class="nav-link text-700 mb-0 fw-bold">Pricing</p><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="pricing/pricing-default.html">Pricing default</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="pricing/pricing-alt.html">Pricing alt</a>
                                    </div>
                                </div>
                                <div class="col-6 col-xxl-3">
                                    <div class="nav flex-column">
                                        <p class="nav-link text-700 mb-0 fw-bold">Errors</p><a
                                            class="nav-link py-1 link-600 fw-medium" href="errors/404.html">404</a><a
                                            class="nav-link py-1 link-600 fw-medium" href="errors/500.html">500</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 col-xxl-3">
                                    <div class="nav flex-column">
                                        <p class="nav-link text-700 mb-0 fw-bold">Miscellaneous</p><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="miscellaneous/associations.html">Associations</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="miscellaneous/invite-people.html">Invite people</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="miscellaneous/privacy-policy.html">Privacy policy</a>
                                    </div>
                                </div>
                                <div class="col-6 col-xxl-3">
                                    <div class="nav flex-column">
                                        <p class="nav-link text-700 mb-0 fw-bold">FAQ</p><a
                                            class="nav-link py-1 link-600 fw-medium" href="faq/faq-basic.html">Faq
                                            basic</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="faq/faq-alt.html">Faq alt</a><a
                                            class="nav-link py-1 link-600 fw-medium" href="faq/faq-accordion.html">Faq
                                            accordion</a>
                                    </div>
                                </div>
                                <div class="col-6 col-xxl-3">
                                    <div class="nav flex-column">
                                        <p class="nav-link text-700 mb-0 fw-bold">Other Auth</p><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="authentication/wizard.html">Wizard</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="index-2.html#authentication-modal" data-bs-toggle="modal">Modal</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="moduless">Modules</a>
                <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0" aria-labelledby="moduless">
                    <div class="card navbar-card-components shadow-none dark__bg-1000">
                        <div class="card-body scrollbar max-h-dropdown"><img class="img-dropdown"
                                src="assets/img/icons/spot-illustrations/authentication-corner.png" width="130"
                                alt="" />
                            <div class="row">
                                <div class="col-6 col-xxl-3">
                                    <div class="nav flex-column">
                                        <p class="nav-link text-700 mb-0 fw-bold">Components</p><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/maps/google-map.html">Google map</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/maps/leaflet-map.html">Leaflet map</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/accordion.html">Accordion</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/alerts.html">Alerts</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/anchor.html">Anchor</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/animated-icons.html">Animated
                                            icons</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/background.html">Background</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/badges.html">Badges</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/bottom-bar.html">Bottom bar<span
                                                class="badge rounded-pill ms-2 badge-soft-success">New</span></a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/breadcrumbs.html">Breadcrumbs</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/buttons.html">Buttons</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/calendar.html">Calendar</a>
                                    </div>
                                </div>
                                <div class="col-6 col-xxl-3">
                                    <div class="nav flex-column mt-md-4 pt-md-1"><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/cards.html">Cards</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/carousel/bootstrap.html">Bootstrap
                                            carousel</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/carousel/swiper.html">Swiper</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/collapse.html">Collapse</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/cookie-notice.html">Cookie
                                            notice</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/countup.html">Countup</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/draggable.html">Draggable</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/dropdowns.html">Dropdowns</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/jquery-components.html">Jquery<span
                                                class="badge rounded-pill ms-2 badge-soft-success">New</span></a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/list-group.html">List group</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/modals.html">Modals</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/navs-and-tabs/navs.html">Navs</a>
                                    </div>
                                </div>
                                <div class="col-6 col-xxl-3">
                                    <div class="nav flex-column mt-xxl-4 pt-xxl-1"><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/navs-and-tabs/navbar.html">Navbar</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/navs-and-tabs/vertical-navbar.html">Navbar
                                            vertical</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/navs-and-tabs/top-navbar.html">Top
                                            nav</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/navs-and-tabs/double-top-navbar.html">Double
                                            top<span
                                                class="badge rounded-pill ms-2 badge-soft-success">New</span></a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/navs-and-tabs/combo-navbar.html">Combo
                                            nav</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/navs-and-tabs/tabs.html">Tabs</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/offcanvas.html">Offcanvas</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/pictures/avatar.html">Avatar</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/pictures/images.html">Images</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/pictures/figures.html">Figures</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/pictures/hoverbox.html">Hoverbox</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/pictures/lightbox.html">Lightbox</a>
                                    </div>
                                </div>
                                <div class="col-6 col-xxl-3">
                                    <div class="nav flex-column mt-xxl-4 pt-xxl-1"><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/progress-bar.html">Progress
                                            bar</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/placeholder.html">Placeholder</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/pagination.html">Pagination</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/popovers.html">Popovers</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/scrollspy.html">Scrollspy</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/search.html">Search</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/spinners.html">Spinners</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/timeline.html">Timeline</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/toasts.html">Toasts</a></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 col-xxl-3">
                                    <div class="nav flex-column">
                                        <p class="nav-link text-700 mb-0 fw-bold">Forms</p><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/forms/basic/form-control.html">Form
                                            control</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="modules/forms/basic/input-group.html">Input
                                            group</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="modules/forms/basic/select.html">Select</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/forms/basic/checks.html">Checks</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/forms/basic/range.html">Range</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/forms/basic/layout.html">Layout</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/forms/advance/advance-select.html">Advance
                                            select</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="modules/forms/advance/date-picker.html">Date
                                            picker</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="modules/forms/advance/editor.html">Editor</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/forms/advance/emoji-button.html">Emoji
                                            button</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="modules/forms/advance/file-uploader.html">File
                                            uploader</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="modules/forms/advance/rating.html">Rating</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/forms/floating-labels.html">Floating
                                            labels</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="modules/forms/wizard.html">Wizard</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/forms/validation.html">Validation</a>
                                    </div>
                                </div>
                                <div class="col-6 col-xxl-3">
                                    <div class="nav flex-column">
                                        <p class="nav-link text-700 mb-0 fw-bold">Tables</p><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/tables/basic-tables.html">Basic tables</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/tables/advance-tables.html">Advance
                                            tables</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="modules/tables/bulk-select.html">Bulk select</a>
                                        <p class="nav-link text-700 mb-0 fw-bold">Charts</p><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/charts/chartjs.html">Chartjs</a>
                                        <p class="nav-link text-700 mb-0 fw-bold">ECharts</p><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/charts/d3js.html">D3js<span
                                                class="badge rounded-pill ms-2 badge-soft-success">New</span></a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/charts/echarts/line-charts.html">Line
                                            charts</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="modules/charts/echarts/bar-charts.html">Bar
                                            charts</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="modules/charts/echarts/candlestick-charts.html">Candlestick
                                            charts</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="modules/charts/echarts/geo-map.html">Geo map</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/charts/echarts/scatter-charts.html">Scatter
                                            charts</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="modules/charts/echarts/pie-charts.html">Pie
                                            charts</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="modules/charts/echarts/gauge-charts.html">Gauge
                                            charts</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="modules/charts/echarts/radar-charts.html">Radar
                                            charts</a>
                                    </div>
                                </div>
                                <div class="col-6 col-xxl-3">
                                    <div class="nav flex-column">
                                        <p class="nav-link text-700 mb-0 fw-bold">Utilities</p><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/tooltips.html">Tooltips</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/treeview.html">Treeview</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/typed-text.html">Typed text</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/videos/embed.html">Embed</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/components/videos/plyr.html">Plyr</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/utilities/borders.html">Borders</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/utilities/clearfix.html">Clearfix</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/utilities/colors.html">Colors</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/utilities/colored-links.html">Colored
                                            links</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="modules/utilities/display.html">Display</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/utilities/flex.html">Flex</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/utilities/float.html">Float</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/utilities/grid.html">Grid</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/utilities/overlayscrollbar.html">Overlay
                                            scrollbar<span
                                                class="badge rounded-pill ms-2 badge-soft-success">New</span></a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/utilities/position.html">Position</a>
                                    </div>
                                </div>
                                <div class="col-6 col-xxl-3">
                                    <div class="nav flex-column pt-xxl-1">
                                        <p class="nav-link text-700 mb-0 fw-bold">Icons</p><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/charts/echarts/heatmap-charts.html">Heatmap
                                            charts</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="modules/charts/echarts/how-to-use.html">How to
                                            use</a><a class="nav-link py-1 link-600 fw-medium"
                                            href="modules/icons/font-awesome.html">Font awesome</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/icons/bootstrap-icons.html">Bootstrap
                                            icons</a>
                                        <p class="nav-link text-700 mb-0 fw-bold">Maps</p><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/icons/feather.html">Feather</a><a
                                            class="nav-link py-1 link-600 fw-medium"
                                            href="modules/icons/material-icons.html">Material icons</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                    id="documentations">Documentation</a>
                <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0"
                    aria-labelledby="documentations">
                    <div class="bg-white dark__bg-1000 rounded-3 py-2"><a class="dropdown-item link-600 fw-medium"
                            href="documentation/getting-started.html">Getting started</a><a
                            class="dropdown-item link-600 fw-medium"
                            href="documentation/customization/configuration.html">Configuration</a><a
                            class="dropdown-item link-600 fw-medium"
                            href="documentation/customization/styling.html">Styling<span
                                class="badge rounded-pill ms-2 badge-soft-success">Updated</span></a><a
                            class="dropdown-item link-600 fw-medium"
                            href="documentation/customization/dark-mode.html">Dark mode</a><a
                            class="dropdown-item link-600 fw-medium"
                            href="documentation/customization/plugin.html">Plugin</a><a
                            class="dropdown-item link-600 fw-medium" href="documentation/faq.html">Faq</a><a
                            class="dropdown-item link-600 fw-medium" href="documentation/gulp.html">Gulp</a><a
                            class="dropdown-item link-600 fw-medium" href="documentation/design-file.html">Design
                            file</a><a class="dropdown-item link-600 fw-medium" href="changelog.html">Changelog</a>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
        <li class="nav-item">
            <div class="theme-control-toggle fa-icon-wait px-2"><input
                    class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle" type="checkbox"
                    data-theme-control="theme" value="dark" /><label
                    class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle"
                    data-bs-toggle="tooltip" data-bs-placement="left" title="Switch to light theme"><span
                        class="fas fa-sun fs-0"></span></label><label
                    class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle"
                    data-bs-toggle="tooltip" data-bs-placement="left" title="Switch to dark theme"><span
                        class="fas fa-moon fs-0"></span></label></div>
        </li>
        <li class="nav-item d-none d-sm-block">
            <a class="nav-link px-0 notification-indicator notification-indicator-warning notification-indicator-fill fa-icon-wait"
                href="app/e-commerce/shopping-cart.html"><span class="fas fa-shopping-cart"
                    data-fa-transform="shrink-7" style="font-size: 33px;"></span><span
                    class="notification-indicator-number">1</span></a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link notification-indicator notification-indicator-primary px-0 fa-icon-wait"
                id="navbarDropdownNotification" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false" data-hide-on-body-scroll="data-hide-on-body-scroll"><span class="fas fa-bell"
                    data-fa-transform="shrink-6" style="font-size: 33px;"></span></a>
            <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end dropdown-menu-card dropdown-menu-notification dropdown-caret-bg"
                aria-labelledby="navbarDropdownNotification">
                <div class="card card-notification shadow-none">
                    <div class="card-header">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-auto">
                                <h6 class="card-header-title mb-0">Notifications</h6>
                            </div>
                            <div class="col-auto ps-0 ps-sm-3"><a class="card-link fw-normal" href="#">Mark all
                                    as read</a></div>
                        </div>
                    </div>
                    <div class="scrollbar-overlay" style="max-height:19rem">
                        <div class="list-group list-group-flush fw-normal fs--1">
                            <div class="list-group-title border-bottom">NEW</div>
                            <div class="list-group-item">
                                <a class="notification notification-flush notification-unread" href="#!">
                                    <div class="notification-avatar">
                                        <div class="avatar avatar-2xl me-3">
                                            <img class="rounded-circle" src="assets/img/team/1-thumb.png"
                                                alt="" />
                                        </div>
                                    </div>
                                    <div class="notification-body">
                                        <p class="mb-1"><strong>Emma Watson</strong> replied to your
                                            comment : "Hello world 😍"</p>
                                        <span class="notification-time"><span class="me-2" role="img"
                                                aria-label="Emoji">💬</span>Just
                                            now</span>
                                    </div>
                                </a>
                            </div>
                            <div class="list-group-item">
                                <a class="notification notification-flush notification-unread" href="#!">
                                    <div class="notification-avatar">
                                        <div class="avatar avatar-2xl me-3">
                                            <div class="avatar-name rounded-circle"><span>AB</span></div>
                                        </div>
                                    </div>
                                    <div class="notification-body">
                                        <p class="mb-1"><strong>Albert Brooks</strong> reacted to
                                            <strong>Mia Khalifa's</strong> status
                                        </p>
                                        <span class="notification-time"><span
                                                class="me-2 fab fa-gratipay text-danger"></span>9hr</span>
                                    </div>
                                </a>
                            </div>
                            <div class="list-group-title border-bottom">EARLIER</div>
                            <div class="list-group-item">
                                <a class="notification notification-flush" href="#!">
                                    <div class="notification-avatar">
                                        <div class="avatar avatar-2xl me-3">
                                            <img class="rounded-circle" src="assets/img/icons/weather-sm.jpg"
                                                alt="" />
                                        </div>
                                    </div>
                                    <div class="notification-body">
                                        <p class="mb-1">The forecast today shows a low of 20&#8451; in
                                            California. See today's weather.</p>
                                        <span class="notification-time"><span class="me-2" role="img"
                                                aria-label="Emoji">🌤️</span>1d</span>
                                    </div>
                                </a>
                            </div>
                            <div class="list-group-item">
                                <a class="border-bottom-0 notification-unread  notification notification-flush"
                                    href="#!">
                                    <div class="notification-avatar">
                                        <div class="avatar avatar-xl me-3">
                                            <img class="rounded-circle" src="assets/img/logos/oxford.png"
                                                alt="" />
                                        </div>
                                    </div>
                                    <div class="notification-body">
                                        <p class="mb-1"><strong>University of Oxford</strong> created an
                                            event : "Causal Inference Hilary 2019"</p>
                                        <span class="notification-time"><span class="me-2" role="img"
                                                aria-label="Emoji">✌️</span>1w</span>
                                    </div>
                                </a>
                            </div>
                            <div class="list-group-item">
                                <a class="border-bottom-0 notification notification-flush" href="#!">
                                    <div class="notification-avatar">
                                        <div class="avatar avatar-xl me-3">
                                            <img class="rounded-circle" src="assets/img/team/10.jpg"
                                                alt="" />
                                        </div>
                                    </div>
                                    <div class="notification-body">
                                        <p class="mb-1"><strong>James Cameron</strong> invited to join
                                            the group: United Nations International Children's Fund</p>
                                        <span class="notification-time"><span class="me-2" role="img"
                                                aria-label="Emoji">🙋‍</span>2d</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-center border-top"><a class="card-link d-block"
                            href="app/social/notifications.html">View all</a></div>
                </div>
            </div>
        </li>
        <li class="nav-item dropdown px-1">
            <a class="nav-link fa-icon-wait nine-dots p-1" id="navbarDropdownMenu" role="button"
                data-hide-on-body-scroll="data-hide-on-body-scroll" data-bs-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="43"
                    viewBox="0 0 16 16" fill="none">
                    <circle cx="2" cy="2" r="2" fill="#6C6E71"></circle>
                    <circle cx="2" cy="8" r="2" fill="#6C6E71"></circle>
                    <circle cx="2" cy="14" r="2" fill="#6C6E71"></circle>
                    <circle cx="8" cy="8" r="2" fill="#6C6E71"></circle>
                    <circle cx="8" cy="14" r="2" fill="#6C6E71"></circle>
                    <circle cx="14" cy="8" r="2" fill="#6C6E71"></circle>
                    <circle cx="14" cy="14" r="2" fill="#6C6E71"></circle>
                    <circle cx="8" cy="2" r="2" fill="#6C6E71"></circle>
                    <circle cx="14" cy="2" r="2" fill="#6C6E71"></circle>
                </svg></a>
            {{-- // ICON NAV // --}}
            <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end dropdown-menu-card dropdown-caret-bg"
                aria-labelledby="navbarDropdownMenu">
                <div class="card shadow-none">
                    <div class="scrollbar-overlay nine-dots-dropdown">
                        <div class="card-body px-3">
                            <div class="row text-center gx-0 gy-0">

                                <div class="col-4"><a
                                        class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                        href="user/profile.html" target="_blank">
                                        <div class="avatar avatar-2xl"> <img class="rounded-circle"
                                                src="assets/img/team/3.jpg" alt="" /></div>
                                        <p class="mb-0 fw-medium text-800 text-truncate fs--2">Account</p>
                                    </a>
                                </div>

                                <div class="col-12"><a class="btn btn-outline-primary btn-sm mt-4" href="#!"><i
                                            class="fas fa-cog"></i> Setting</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </li>
        <li class="nav-item dropdown"><a class="nav-link pe-0 ps-2" id="navbarDropdownUser" role="button"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-xl">
                    <img class="rounded-circle" src="assets/img/team/3-thumb.png" alt="" />
                </div>
            </a>
            <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end py-0"
                aria-labelledby="navbarDropdownUser">
                <div class="bg-white dark__bg-1000 rounded-2 py-2">
                    <a class="dropdown-item fw-bold text-warning" href="#!"><span
                            class="fas fa-crown me-1"></span><span>{{ Auth::user()->name }}</span></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#!">Set status</a>
                    <a class="dropdown-item" href="user/profile.html">Profile &amp; account</a>
                    <a class="dropdown-item" href="#!">Feedback</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="user/settings.html">Settings</a>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </li>
    </ul>
</nav>
