<!-- Menu -->

<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{ route('home') }}" class="app-brand-link">
            <span class="app-brand-logo demo">
                <img src="{{ asset('frontend/assets/img/logo.png') }}" alt="logo" style="height: 50px" />
            </span>
            <span class="app-brand-text demo menu-text fw-bolder ms-2">Carveda</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item @if( Route::currentRouteName() == 'home') active @endif">
            <a href="{{ route('home') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>
        <!-- Components -->
        <li class="menu-header small text-uppercase"><span class="menu-header-text">Works</span></li>
        <!-- Cards -->

        @if(Auth::user()->can('Permission') || Auth::user()->can('Roles') || Auth::user()->can('Roles In Permission') )
        <li
            class="menu-item @if( Route::currentRouteName() == 'permissionList' || Route::currentRouteName() == 'permissionAdd' || Route::currentRouteName() == 'permissionEdit' || Route::currentRouteName() == 'roleList' || Route::currentRouteName() == 'roleAdd' || Route::currentRouteName() == 'roleEdit' ||  Route::currentRouteName() == 'rolePermissionList' || Route::currentRouteName() == 'rolePermissionAdd' || Route::currentRouteName() == 'rolePermissionEdit' )  open active @endif">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-lock"></i>
                <div data-i18n="CMS">Role & Permissions</div>
            </a>

            <ul class="menu-sub">
                @if(Auth::user()->can('Permission') )

                <li
                    class="menu-item @if( Route::currentRouteName() == 'permissionList' || Route::currentRouteName() == 'permissionAdd' || Route::currentRouteName() == 'permissionEdit') active @endif">
                    <a href="{{ route('permissionList') }}" class="menu-link">
                        <div data-i18n="Basic">All Permissions</div>
                    </a>
                </li>
                @endif

                @if(Auth::user()->can('Roles') )

                <li
                    class="menu-item @if( Route::currentRouteName() == 'roleList' || Route::currentRouteName() == 'roleAdd' || Route::currentRouteName() == 'roleEdit') active @endif">
                    <a href="{{ route('roleList') }}" class="menu-link">
                        <div data-i18n="Basic">All Roles</div>
                    </a>
                </li>
                @endif

                @if(Auth::user()->can('Roles In Permission') )

                <li
                    class="menu-item @if( Route::currentRouteName() == 'rolePermissionList' || Route::currentRouteName() == 'rolePermissionAdd' || Route::currentRouteName() == 'rolePermissionEdit') active @endif">
                    <a href="{{ route('rolePermissionList') }}" class="menu-link">
                        <div data-i18n="Basic">Roles in Permission</div>
                    </a>
                </li>
                @endif

            </ul>
        </li>
        @endif

        @if(Auth::user()->can('All Admin') )
        <li
            class="menu-item @if( Route::currentRouteName() == 'adminList' || Route::currentRouteName() == 'adminAdd' || Route::currentRouteName() == 'adminEdit') active @endif">
            <a href="{{ route('adminList') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-group"></i>
                <div data-i18n="Basic">All Admins</div>
            </a>
        </li>
        @endif

        @if(Auth::user()->can('Master Category') || Auth::user()->can('Cars') || Auth::user()->can('About Me') ||
        Auth::user()->can('Services') || Auth::user()->can('Blogs') || Auth::user()->can('Works') )
        <li
            class="menu-item @if( Route::currentRouteName() == 'aboutMeList' || Route::currentRouteName() == 'aboutMeAdd' ||Route::currentRouteName() == 'aboutMeEdit' || Route::currentRouteName() == 'servicesList' || Route::currentRouteName() == 'servicesAdd'  || Route::currentRouteName() == 'servicesEdit' || Route::currentRouteName() == 'worksList' || Route::currentRouteName() == 'worksAdd'  || Route::currentRouteName() == 'worksEdit' ||  Route::currentRouteName() == 'blogsList' || Route::currentRouteName() == 'blogsAdd'  || Route::currentRouteName() == 'blogsEdit' ||   Route::currentRouteName() == 'categoryList' || Route::currentRouteName() == 'categoryAdd'  || Route::currentRouteName() == 'categoryEdit' || Route::currentRouteName() == 'carList' || Route::currentRouteName() == 'carAdd'  || Route::currentRouteName() == 'carEdit' )  open active @endif">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-cog"></i>
                <div data-i18n="CMS">CMS</div>
            </a>

            <ul class="menu-sub">
                @if(Auth::user()->can('Master Category'))
                <li
                    class="menu-item   @if( Route::currentRouteName() == 'categoryList' || Route::currentRouteName() == 'categoryAdd'  || Route::currentRouteName() == 'categoryEdit') active @endif">
                    <a href="{{ route('categoryList') }}" class="menu-link">
                        <div data-i18n="hange site logo">Master Category</div>
                    </a>
                </li>
                @endif

                @if(Auth::user()->can('Cars'))
                <li
                    class="menu-item   @if( Route::currentRouteName() == 'carList' || Route::currentRouteName() == 'carAdd'  || Route::currentRouteName() == 'carEdit') active @endif">
                    <a href="{{ route('carList') }}" class="menu-link">
                        <div data-i18n="hange site logo">Cars</div>
                    </a>
                </li>
                @endif

                @if(Auth::user()->can('About Me'))
                <li
                    class="menu-item  @if( Route::currentRouteName() == 'aboutMeList' || Route::currentRouteName() == 'aboutMeAdd'  ||Route::currentRouteName() == 'aboutMeEdit' ) active @endif ">
                    <a href="{{ route('aboutMeList') }}" class="menu-link">
                        <div data-i18n="hange site logo">About Me</div>
                    </a>
                </li>
                @endif
                @if(Auth::user()->can('Services'))
                <li
                    class="menu-item  @if( Route::currentRouteName() == 'servicesList' || Route::currentRouteName() == 'servicesAdd'  || Route::currentRouteName() == 'servicesEdit') active @endif ">
                    <a href=" {{ route('servicesList') }}" class="menu-link">
                        <div data-i18n="hange site logo">Services</div>
                    </a>
                </li>
                @endif
                @if(Auth::user()->can('Works'))
                <li
                    class="menu-item   @if( Route::currentRouteName() == 'worksList' || Route::currentRouteName() == 'worksAdd'  || Route::currentRouteName() == 'worksEdit') active @endif ">
                    <a href=" {{ route('worksList') }}" class="menu-link">
                        <div data-i18n="hange site logo">Works</div>
                    </a>
                </li>
                @endif
                @if(Auth::user()->can('Blogs'))
                <li
                    class="menu-item   @if( Route::currentRouteName() == 'blogsList' || Route::currentRouteName() == 'blogsAdd'  || Route::currentRouteName() == 'blogsEdit') active @endif">
                    <a href="{{ route('blogsList') }}" class="menu-link">
                        <div data-i18n="hange site logo">Blogs</div>
                    </a>
                </li>
                @endif

            </ul>
        </li>
        @endif

        @if(Auth::user()->can('Testimonials') )
        <li
            class="menu-item @if( Route::currentRouteName() == 'testimonialList' || Route::currentRouteName() == 'testimonialAdd' || Route::currentRouteName() == 'testimonialEdit') active @endif">
            <a href="{{ route('testimonialList') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-group"></i>
                <div data-i18n="Basic">Testiminials</div>
            </a>
        </li>
        @endif

        @if(Auth::user()->can('Contact Messages') )
        <li class="menu-item @if( Route::currentRouteName() == 'contactList' ) active @endif">
            <a href="{{ route('contactList') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-mail-send"></i>
                <div data-i18n="Basic">Contact Messages</div>
            </a>
        </li>
        @endif

        @if(Auth::user()->can('Subscribers') )
        <li class="menu-item @if( Route::currentRouteName() == 'subscriberList' ) active @endif">
            <a href="{{ route('subscriberList') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-mail-send"></i>
                <div data-i18n="Basic">Subscribers</div>
            </a>
        </li>
        @endif
        <!-- Layouts -->



    </ul>
</aside>
<!-- / Menu -->