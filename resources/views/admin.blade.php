@include('admin.partials.header')
<!-- BEGIN: Content -->
<div class="content">
    <!-- BEGIN: Top Bar -->
    <div class="top-bar">
        <!-- BEGIN: Breadcrumb -->
        <div class="-intro-x breadcrumb mr-auto hidden sm:flex"> <a href="" class="">Application</a> <i
                data-feather="chevron-right" class="breadcrumb__icon"></i>
            <a href="#" class="breadcrumb--active">{{ $breadcrumb }}</a>
        </div>
        <!-- END: Breadcrumb -->
        <div class="p-2  dark:border-dark-3" style="bor">
            <a href="{{ url('admins/dologout') }}"
                class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md">
                <i data-feather="toggle-right" class="w-4 h-4 mr-2"></i> LOGOUT </a>
        </div>
    </div>
    <!-- END: Top Bar -->

    {!! $view !!}

</div>
<!-- END: Content -->

@include('admin.partials.footer')
