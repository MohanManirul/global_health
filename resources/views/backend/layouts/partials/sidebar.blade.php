 <!-- sidebar menu area start -->

 @php
     $usr = Auth::guard('admin')->user();
 @endphp
 <div class="sidebar-menu">
    <div class="sidebar-header">
        <div class="logo">
            <a href="{{ route('admin.dashboard')}}">
                Admin Dashboard pos
            </a>
        </div>
    </div>
    <div class="main-menu">
        <div class="menu-inner">
            <nav>
                <ul class="metismenu" id="menu">                 

                    @if ($usr->can('admin.create') || $usr->can('admin.view') ||  $usr->can('admin.edit') ||  $usr->can('admin.delete'))
                    <li class="nav-item"> <a class="nav-link" href="{{ route('admin.logos') }}">ManageLogo</a></li>
                    @endif

                    @if ($usr->can('admin.create') || $usr->can('admin.view') ||  $usr->can('admin.edit') ||  $usr->can('admin.delete'))
                    <li class="nav-item"> <a class="nav-link" href="{{ route('admin.sliders') }}">Manage Slider</a></li>
                    @endif

                    @if ($usr->can('admin.create') || $usr->can('admin.view') ||  $usr->can('admin.edit') ||  $usr->can('admin.delete'))
                    <li class="nav-item"> <a class="nav-link" href="{{ route('admin.aboutus') }}">About Us Text</a></li>
                    @endif

                    @if ($usr->can('admin.create') || $usr->can('admin.view') ||  $usr->can('admin.edit') ||  $usr->can('admin.delete'))
                    <li class="nav-item"> <a class="nav-link" href="{{ route('admin.nonprofit') }}">Non Profit Text</a></li>
                    @endif

                    @if ($usr->can('admin.create') || $usr->can('admin.view') ||  $usr->can('admin.edit') ||  $usr->can('admin.delete'))
                    <li class="nav-item"> <a class="nav-link" href="{{ route('admin.bod') }}">BoD</a></li>
                    @endif

                    @if ($usr->can('admin.create') || $usr->can('admin.view') ||  $usr->can('admin.edit') ||  $usr->can('admin.delete'))
                    <li class="nav-item"> <a class="nav-link" href="{{ route('admin.boa') }}">BoA</a></li>
                    @endif

                    @if ($usr->can('admin.create') || $usr->can('admin.view') ||  $usr->can('admin.edit') ||  $usr->can('admin.delete'))
                    <li class="nav-item"> <a class="nav-link" href="{{ route('admin.address') }}">Address</a></li>
                    @endif

                    @if ($usr->can('admin.create') || $usr->can('admin.view') ||  $usr->can('admin.edit') ||  $usr->can('admin.delete'))
                    <li class="nav-item"> <a class="nav-link" href="{{ route('admin.subcribe') }}">Subscribers</a></li>
                    @endif
                </ul>
            </nav>
        </div>
    </div>
</div>
<!-- sidebar menu area end -->