<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div class="sidebar-menu">
            <ul>
                <li> 
                    <a href="{{route('dashboard')}}"><i class="la la-home"></i> <span>Back to Home</span></a>
                </li>
                <li class="menu-title">Settings</li>

                <li class="{{ route_is('users') ? 'active' : '' }}">
                    <a href="{{route('users')}}"><i class="la la-user-plus"></i> <span>User Management</span></a>
                </li>

                <li class="{{ Request::routeIs('settings.theme') ? 'active' : '' }}"> 
                    <a href="{{route('settings.theme')}}"><i class="la la-photo"></i> <span>Theme Settings</span></a>
                </li>
                
                <!-- <li class="{{ Request::routeIs('settings.invoice') ? 'active' : '' }}"> 
                    <a href="{{route('settings.invoice')}}"><i class="la la-pencil-square"></i> <span>Invoice Settings</span></a>
                </li>

                <li class="{{ Request::routeIs('settings.company') ? 'active' : '' }}"> 
                    <a href="{{route('settings.company')}}"><i class="la la-building"></i> <span>Company Settings</span></a>
                </li> -->

                <li class="{{ Request::routeIs('change-password') ? 'active' : '' }}"> 
                    <a href="{{route('change-password')}}"><i class="la la-lock"></i> <span>Change Password</span></a>
                </li>

                <li class="{{ route_is('activity') ? 'active' : '' }}">
                    <a href="{{route('activity')}}"><i class="la la-bell"></i> <span>Activity Log</span></a>
                </li>

                <li class="{{ Request::is('backups') ? 'active' : '' }}">
                    <a href="{{ route('backups') }}"><i class="la la-cloud-upload"></i> <span>Backups </span></a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- Sidebar -->