<nav class="pcoded-navbar">
    <div class="sidebar_toggle">
        <a href="#"><i class="icon-close icons"></i></a>
    </div>
    <div class="pcoded-inner-navbar main-menu">
        <div class="">
            <div class="main-menu-header">
                <img class="img-80 img-radius" src="{{ auth()->user()->gravatar }}" alt="User-Profile-Image" />
                <div class="user-details">
                    <span id="more-details">{{ auth()->user()->name }}<i class="fa fa-caret-down"></i></span>
                </div>
            </div>

            <div class="main-menu-content">
                <ul>
                    <li class="more-details">
                        <a href="{{ route('admin.profile') }}"><i class="ti-user"></i>View Profile</a>
                        <a href="{{ route('admin.settings.index', 'general') }}"><i class="ti-settings"></i>Settings</a>
                        <a href="javascript:void(0)" onclick="document.getElementById('logout').submit();"><i
                                class="ti-power-off"></i>Logout</a>
                    </li>
                </ul>
                <form id="logout" action="{{ route('logout') }}" method="POST">
                    @csrf
                </form>
            </div>
        </div>
        <ul class="pcoded-item pcoded-left-item">
            <!-- Dashboard -->
            <li class="pt-3 {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                <a href="{{ route('admin.dashboard') }}" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>

            <!-- Packages -->
            <li class="{{ request()->routeIs('admin.packages.*') ? 'active' : '' }}">
                <a href="{{ route('admin.packages.index') }}" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="ti-package"></i><b>FC</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.form-components.main">Packages</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>

            <!-- Orders -->
            <li class="{{ request()->routeIs('admin.orders.*') ? 'active' : '' }}">
                <a href="{{ route('admin.orders.index') }}" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="fa fa-first-order"></i><b>FC</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.form-components.main">Orders</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>

            <!-- Subscriptions -->
            {{-- <li class="{{ request()->routeIs('admin.subscriptions.*') ? 'active' : '' }}">
                <a href="{{ route('admin.subscriptions.index') }}" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="fa fa-subscript"></i><b>FC</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.form-components.main">Subscriptions</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li> --}}

            <!-- Users -->
            <li class="{{ request()->routeIs('admin.users.*') ? 'active' : '' }}">
                <a href="{{ route('admin.users.index') }}" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="fa fa-users"></i><b>FC</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.form-components.main">Users</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>

            <!-- Coupon Codes -->
            <li class="{{ request()->routeIs('admin.coupons.*') ? 'active' : '' }}">
                <a href="{{ route('admin.coupons.index') }}" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="fa fa-percent"></i><b>FC</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.form-components.main">Coupon Codes</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>

            <!-- Website Content -->
            <li class="pcoded-hasmenu {{ request()->is('admin/contents*') ? 'active pcoded-trigger' : '' }}">
                <a href="javascript:void(0)" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="fa fa-file-word-o"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.basic-components.main">Website Content</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">

                    <li class="{{ request()->routeIs('admin.faqs.index') ? 'active' : '' }}">
                        <a href="{{ route('admin.faqs.index') }}" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">FAQ</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>

                    @foreach ($pages as $page)
                        <li class="{{ request()->segment(4) == $page ? 'active' : '' }}">
                            <a href="{{ route('admin.pages.edit', $page) }}" class="waves-effect waves-dark">
                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                <span class="pcoded-mtext"
                                    data-i18n="nav.basic-components.breadcrumbs">{{ get_title($page) }}</span>
                                <span class="pcoded-mcaret"></span>
                            </a>
                        </li>
                    @endforeach

                </ul>
            </li>

            <!-- Website Seo -->
            <li class="pcoded-hasmenu {{ request()->is('admin/seo*') ? 'active pcoded-trigger' : '' }}">
                <a href="javascript:void(0)" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="fa fa-file-word-o"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.basic-components.main">Website SEO</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">

                    @foreach ($seo_pages as $page)
                        <li class="{{ request()->segment(3) == $page ? 'active' : '' }}">
                            <a href="{{ route('admin.seo.page', $page) }}" class="waves-effect waves-dark">
                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                <span class="pcoded-mtext"
                                    data-i18n="nav.basic-components.breadcrumbs">{{ get_title($page) }}</span>
                                <span class="pcoded-mcaret"></span>
                            </a>
                        </li>
                    @endforeach

                </ul>
            </li>

            <!-- System Setting -->
            <li class="pcoded-hasmenu {{ request()->is('admin/settings*') ? 'active pcoded-trigger' : '' }}">
                <a href="javascript:void(0)" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="ti-settings"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.basic-components.main">Settings</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    @foreach ($settings as $setting)
                        <li class="{{ request()->segment(3) == $setting ? 'active' : '' }}">
                            <a href="{{ route('admin.settings.index', $setting) }}" class="waves-effect waves-dark">
                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                <span class="pcoded-mtext"
                                    data-i18n="nav.basic-components.breadcrumbs">{{ get_title($setting) }}</span>
                                <span class="pcoded-mcaret"></span>
                            </a>
                        </li>
                    @endforeach

                </ul>
            </li>

            <!-- Profile -->
            <li class="{{ request()->routeIs('admin.profile') ? 'active' : '' }}">
                <a href="{{ route('admin.profile') }}" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="ti-user"></i><b>FC</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.form-components.main">Profile</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
        </ul>
    </div>
</nav>
