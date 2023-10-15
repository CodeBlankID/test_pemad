<!-- BEGIN: Side Menu -->
<nav class="side-nav">
    <a href="{{ url('admins/dashboard') }}" class="intro-x flex items-center pl-5 pt-4">
        <img alt="Midone Tailwind HTML Admin Template" class="w-6"
            src="{{ asset('assets/admin/dist/images/logo.svg') }}">
        <span class="hidden xl:block text-white text-lg ml-3"><span class="font-medium">Administrator</span>
        </span>
    </a>
    <div class="side-nav__devider my-6"></div>
    <ul>
        <li>
            <a href="{{ url('admins/dashboard') }}"
                class="side-menu {{ !empty($dashboard_side) ? $dashboard_side : '' }}">
                <div class="side-menu__icon"> <i data-feather="home"></i> </div>
                <div class="side-menu__title"> Dashboard </div>
            </a>
        </li>
        <li>
            <a href="{{ url('admins/user') }}" class="side-menu {{ !empty($user_side) ? $user_side : '' }}">
                <div class="side-menu__icon"> <i data-feather="users"></i> </div>
                <div class="side-menu__title"> Users </div>
            </a>
        </li>
        <li>
            <a href="{{ url('admins/klient') }}" class="side-menu {{ !empty($klient_side) ? $klient_side : '' }}">
                <div class="side-menu__icon"> <i data-feather="database"></i> </div>
                <div class="side-menu__title"> Klien </div>
            </a>
        </li>
        <li>
            <a href="{{ url('admins/project') }}" class="side-menu {{ !empty($project_side) ? $project_side : '' }}">
                <div class="side-menu__icon"> <i data-feather="folder"></i> </div>
                <div class="side-menu__title"> Project </div>
            </a>
        </li>
        <li>
            <a href="{{ url('admins/order') }}" class="side-menu {{ !empty($order_side) ? $order_side : '' }}">
                <div class="side-menu__icon"> <i data-feather="download"></i> </div>
                <div class="side-menu__title"> Order </div>
            </a>
        </li>
        <li>
            <a href="{{ url('admins/lang') }}" class="side-menu {{ !empty($language_side) ? $language_side : '' }}">
                <div class="side-menu__icon"> <i data-feather="info"></i> </div>
                <div class="side-menu__title"> Language </div>
            </a>
        </li>
        <li class="side-nav__devider my-6"></li>

    </ul>
</nav>
<!-- END: Side Menu -->
