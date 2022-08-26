<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item me-auto"><a class="navbar-brand" href="{{route('supplier.supplier')}}"><span class="brand-logo">
                <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" style="width: 35.11px; height: 24px;" viewBox="0 0 35.11 24"><defs><style>.cls-1{fill:none;}.cls-2{fill:#f35a24;}</style></defs><title>icon</title><rect class="cls-1" x="-2797.6051" y="-2766.3185" width="3134.1432" height="4723.3185"/><rect class="cls-1" x="-637.3891" y="-2766.3185" width="3134.1432" height="4723.3185"/><rect class="cls-1" x="-1710.003" y="-2766.3185" width="3134.1432" height="4723.3185"/><path class="cls-2" d="M16.2682,8.1933l1.3411,9.5028a.5641.5641,0,0,0,.4985.6121h6.5681c4.4578-.1027,5.6919-2.8226,4.6845-6.1384-1-3.2929-3.6-7.5042-10.0217-9.0621C16.0942,2.3206,8.4143,3.0307,5.44,4.8051A12.2052,12.2052,0,0,0,0,11.3253,16.5953,16.5953,0,0,1,7.3961,2.46,17.2389,17.2389,0,0,1,20.4447.5074c8.6486,2.0983,11.39,7.336,12.0065,11.9475a8.1852,8.1852,0,0,1-1.28,5.9018c-1.4387,1.81-3.8945,2.3169-6.2067,2.3169H15.4923a.5642.5642,0,0,1-.4985-.6121L16.2682,8.1933"/><circle class="cls-2" cx="16.3679" cy="22.7587" r="1.2413"/><circle class="cls-2" cx="28.8125" cy="22.7587" r="1.2413"/></svg></span>
                    <h2 class="brand-text">Doshtu</h2>
                </a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" nav-item"><a class="d-flex align-items-center" href="{{route('supplier.supplier')}}"><i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Dashboards</span><span class="badge badge-light-warning rounded-pill ms-auto me-1"></span></a>
            </li>
            @can('profile')
                <li class=" nav-item"><a class="d-flex align-items-center" href="{{route('supplier.profile.profile')}}"><i data-feather='users'></i><span class="menu-title text-truncate" data-i18n="Dashboards">Profile</span><span class="badge badge-light-warning rounded-pill ms-auto me-1"></span></a>
                </li>
            @endcan
            @can('products')
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather='box'></i><span class="menu-title text-truncate" data-i18n="eCommerce">Products</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="{{route('supplier.product.index')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Shop">Products</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="{{route('supplier.product.create')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Checkout">Add product</span></a>
                        </li>
                    </ul>
                </li>
            @endcan

            {{-- @can('') --}}
                <li class=" nav-item"><a class="d-flex align-items-center" href=""><i data-feather="shopping-cart"></i><span class="menu-title text-truncate" data-i18n="eCommerce">Orders</span></a>
                </li>
            {{-- @endcan --}}

            @can('complaints')
                <li class=" nav-item"><a class="d-flex align-items-center" href=""><i data-feather='list'></i><span class="menu-title text-truncate" data-i18n="eCommerce">Complaints</span></a>
                    <ul class="menu-content">
                        <li class=" nav-item"><a class="d-flex align-items-center" href="{{route('supplier.complaint.index')}}"><i data-feather='circle'></i><span class="menu-title text-truncate" data-i18n="eCommerce">Complaints</span></a>
                        </li>
                        <li class=" nav-item"><a class="d-flex align-items-center" href="{{route('supplier.complaint.newcomplaint')}}"><i data-feather='circle'></i><span class="menu-title text-truncate" data-i18n="eCommerce">Add complaints</span></a>
                        </li>
                    </ul>
                </li>
            @endcan

            @can('manage')
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather='tool'></i><span class="menu-title text-truncate" data-i18n="eCommerce">Manage</span></a>
                    <ul class="menu-content">
                        @can('users')
                            <li><a class="d-flex align-items-center" href=""><i data-feather='user'></i><span class="menu-item text-truncate" data-i18n="Shop">Users</span></a>
                                <ul class="menu-content">
                                    <li class=" nav-item"><a class="d-flex align-items-center" href="{{route('supplier.user.index')}}"><i data-feather='circle'></i><span class="menu-title text-truncate" data-i18n="eCommerce">Users</span></a>
                                    </li>
                                    <li class=" nav-item"><a class="d-flex align-items-center" href="{{route('supplier.user.create')}}"><i data-feather='circle'></i><span class="menu-title text-truncate" data-i18n="eCommerce">Add users</span></a>
                                    </li>
                                </ul>
                            </li>
                        @endcan

                        @can('roles-permission')
                            <li><a class="d-flex align-items-center" href=""><i data-feather='shield'></i></i><span class="menu-item text-truncate" data-i18n="Checkout">Roles & Permmision</span></a>
                                <ul class="menu-content">
                                    <li class=" nav-item"><a class="d-flex align-items-center" href="{{route('supplier.manage.role-permissions.index')}}"><i data-feather='circle'></i><span class="menu-title text-truncate" data-i18n="eCommerce">Roles & Permmision</span></a>
                                    </li>
                                    <li class=" nav-item"><a class="d-flex align-items-center" href="{{route('supplier.manage.role-permissions.create')}}"><i data-feather='circle'></i><span class="menu-title text-truncate" data-i18n="eCommerce">Add Roles & Permmision</span></a>
                                    </li>
                                </ul>
                            </li>
                        @endcan

                    </ul>
                </li>
            @endcan

            @can('settings')
                <li class=" nav-item"><a class="d-flex align-items-center" href=""><i data-feather='settings'></i><span class="menu-title text-truncate" data-i18n="eCommerce">Settings</span></a>
                    <ul class="menu-content">

                        @can('account')
                            <li class=" nav-item"><a class="d-flex align-items-center" href="{{route('supplier.setting.profile')}}"><i data-feather='user'></i><span class="menu-title text-truncate" data-i18n="eCommerce">Account</span></a>
                        @endcan

                        {{-- @can('tags')
                            <li><a class="d-flex align-items-center" href=""><i data-feather='tag'></i><span class="menu-item text-truncate" data-i18n="Shop">tags</span></a>
                                <ul>
                                    <li class=" nav-item"><a class="d-flex align-items-center" href="{{route('supplier.tag.index')}}"><i data-feather='circle'></i><span class="menu-title text-truncate" data-i18n="eCommerce">tags</span></a>
                                    </li>
                                    <li class=" nav-item"><a class="d-flex align-items-center" href="{{route('supplier.tag.create')}}"><i data-feather='circle'></i><span class="menu-title text-truncate" data-i18n="eCommerce">Add tags</span></a>
                                    </li>
                                </ul>
                            </li>
                        @endcan

                        @can('attributes')
                            <li><a class="d-flex align-items-center" href=""><i data-feather='bookmark'></i></i><span class="menu-item text-truncate" data-i18n="Shop">Attributes</span></a>
                                <ul>
                                    <li class=" nav-item"><a class="d-flex align-items-center" href="{{route('supplier.attribute.index')}}"><i data-feather='circle'></i><span class="menu-title text-truncate" data-i18n="eCommerce">attributes</span></a>
                                    </li>
                                    <li class=" nav-item"><a class="d-flex align-items-center" href="{{route('supplier.attribute.create')}}"><i data-feather='circle'></i><span class="menu-title text-truncate" data-i18n="eCommerce">Add attributes</span></a>
                                    </li>
                                </ul>
                            </li>
                        @endcan

                        @can('options')
                            <li><a class="d-flex align-items-center" href=""><i data-feather='hash'></i><span class="menu-item text-truncate" data-i18n="Shop">Options</span></a>
                                <ul>
                                    <li class=" nav-item"><a class="d-flex align-items-center" href="{{route('supplier.option.index')}}"><i data-feather='circle'></i><span class="menu-title text-truncate" data-i18n="eCommerce">options</span></a>
                                    </li>
                                    <li class=" nav-item"><a class="d-flex align-items-center" href="{{route('supplier.option.create')}}"><i data-feather='circle'></i><span class="menu-title text-truncate" data-i18n="eCommerce">Add options</span></a>
                                    </li>
                                </ul>
                            </li>
                        @endcan


                    </ul>--}}
                </li>
            @endcan


        </ul>
    </div>
</div>
