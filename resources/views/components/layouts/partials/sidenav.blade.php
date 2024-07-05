<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 "
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0 d-flex" href=" https://demos.creative-tim.com/argon-dashboard/pages/dashboard.html "
            target="_blank">
            <img src="{{ asset('assets/img/calendar.png') }}">
            <h3 class="ms-3 font-weight-bold fs-4" style="font-weight: 700 !important; ">ATTENDIFY</h3>
        </a>
    </div>
    <hr class="horizontal dark mt-0">

    <div class="collapse navbar-collapse  w-auto  sidebar h-75" id="sidenav-collapse-main">
        <ul class="navbar-nav nav flex-column" id="nav_accordion">
            <li class="nav-item">
                <a class="nav-link {{ Route::is('home*') ? 'active' : '' }} " href="/">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::is('master*') ? 'active' : '' }} " href="/master">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-map-big text-danger text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Main Data</span>
                </a>
            </li>

            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Employee Management</h6>
            </li>
            <li class="nav-item ">
                <a class="nav-link {{ Route::is('employee*') ? 'active' : '' }} " href="/employee">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-people-group text-warning text-sm"></i>
                    </div>
                    <span class="nav-link-text ms-1">Employee</span>
                </a>

            </li>
            <li class="nav-item ">
                <a class="nav-link {{ Route::is('user*') ? 'active' : '' }} " href="{{ route('user.index') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-single-02 text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">User</span>
                </a>

            </li>
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Attendance Management</h6>
            </li>
            <li class="nav-item ">
                <a class="nav-link {{ Route::is('attendance*') ? 'active' : '' }} "
                    href="{{ route('attendance.index') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-credit-card text-success text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Attendance</span>
                </a>

            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::is('schedule*') ? 'active' : '' }} " href="{{ route('schedule.index') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-calendar-grid-58 text-info text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Schedule</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::is('holiday*') ? 'active' : '' }} " href="{{ route('holiday.index') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-house-chimney text-danger text-sm"></i>
                    </div>
                    <span class="nav-link-text ms-1">Holiday</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::is('shift*') ? 'active' : '' }} " href="{{ route('shift.index') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-clock text-sm text-info"></i>
                    </div>
                    <span class="nav-link-text ms-1">Shift</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::is('leave*') ? 'active' : '' }} " href="{{ route('leave.index') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-right-from-bracket text-danger text-sm"></i>
                    </div>
                    <span class="nav-link-text ms-1 me-2">Leave</span>
                    @if ($leaveCount > 0)
                        <span class="badge bg-danger p-1 ">{{ $leaveCount }}</span>
                    @endif
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::is('permission*') ? 'active' : '' }} "
                    href="{{ route('permission.index') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-note-sticky text-warning text-sm"></i>
                    </div>
                    <span class="nav-link-text ms-1 me-2">Permission</span>
                    @if ($permissionCount > 0)
                        <span class="badge bg-danger p-1 ">{{ $permissionCount }}</span>
                    @endif
                </a>
            </li>


        </ul>
    </div>

</aside>
