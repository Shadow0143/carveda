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

        <li
            class="menu-item @if( Route::currentRouteName() == 'aboutMeList' || Route::currentRouteName() == 'aboutMeAdd' ||Route::currentRouteName() == 'aboutMeEdit' || Route::currentRouteName() == 'servicesList' || Route::currentRouteName() == 'servicesAdd'  || Route::currentRouteName() == 'servicesEdit' || Route::currentRouteName() == 'worksList' || Route::currentRouteName() == 'worksAdd'  || Route::currentRouteName() == 'worksEdit' ||  Route::currentRouteName() == 'blogsList' || Route::currentRouteName() == 'blogsAdd'  || Route::currentRouteName() == 'blogsEdit'   )  open active @endif">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-cog"></i>
                <div data-i18n="CMS">CMS</div>
            </a>

            <ul class="menu-sub">

                <li
                    class="menu-item  @if( Route::currentRouteName() == 'aboutMeList' || Route::currentRouteName() == 'aboutMeAdd'  ||Route::currentRouteName() == 'aboutMeEdit' ) active @endif ">
                    <a href="{{ route('aboutMeList') }}" class="menu-link">
                        <div data-i18n="hange site logo">About Me</div>
                    </a>
                </li>

                <li
                    class="menu-item  @if( Route::currentRouteName() == 'servicesList' || Route::currentRouteName() == 'servicesAdd'  || Route::currentRouteName() == 'servicesEdit') active @endif ">
                    <a href=" {{ route('servicesList') }}" class="menu-link">
                        <div data-i18n="hange site logo">Services</div>
                    </a>
                </li>

                <li
                    class="menu-item   @if( Route::currentRouteName() == 'worksList' || Route::currentRouteName() == 'worksAdd'  || Route::currentRouteName() == 'worksEdit') active @endif ">
                    <a href=" {{ route('worksList') }}" class="menu-link">
                        <div data-i18n="hange site logo">Works</div>
                    </a>
                </li>

                <li
                    class="menu-item   @if( Route::currentRouteName() == 'blogsList' || Route::currentRouteName() == 'blogsAdd'  || Route::currentRouteName() == 'blogsEdit') active @endif">
                    <a href="{{ route('blogsList') }}" class="menu-link">
                        <div data-i18n="hange site logo">Blogs</div>
                    </a>
                </li>

                <li
                    class="menu-item   @if( Route::currentRouteName() == 'categoryList' || Route::currentRouteName() == 'categoryAdd'  || Route::currentRouteName() == 'categoryEdit') active @endif">
                    <a href="{{ route('categoryList') }}" class="menu-link">
                        <div data-i18n="hange site logo">Master Category</div>
                    </a>
                </li>

            </ul>
        </li>

        {{-- <li
            class="menu-item @if( Route::currentRouteName() == 'packageList'  || Route::currentRouteName() == 'packageAdd' || Route::currentRouteName() == 'packageEdit' ) active @endif">
            <a href="" class="menu-link">
                <i class="menu-icon tf-icons bx bx-package"></i>
                <div data-i18n="Basic">Pricing</div>
            </a>
        </li> --}}

        <li
            class="menu-item @if( Route::currentRouteName() == 'testimonialList' || Route::currentRouteName() == 'testimonialAdd' || Route::currentRouteName() == 'testimonialEdit') active @endif">
            <a href="{{ route('testimonialList') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-group"></i>
                <div data-i18n="Basic">Testiminials</div>
            </a>
        </li>


        <li class="menu-item @if( Route::currentRouteName() == 'contactList' ) active @endif">
            <a href="{{ route('contactList') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-mail-send"></i>
                <div data-i18n="Basic">Contact Messages</div>
            </a>
        </li>

        <li class="menu-item @if( Route::currentRouteName() == 'subscriberList' ) active @endif">
            <a href="{{ route('subscriberList') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-mail-send"></i>
                <div data-i18n="Basic">Subscribers</div>
            </a>
        </li>

        <!-- Layouts -->



    </ul>
</aside>
<!-- / Menu -->