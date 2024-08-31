<aside class="left-sidebar sidebar-dark" id="left-sidebar">
    <div id="sidebar" class="sidebar sidebar-with-footer">
        <!-- Aplication Brand -->
        <div class="app-brand">
            <a href="">
                <img style="width: 80px" src="{{ asset('images/logo.gif') }}">
                {{-- <span class="brand-name">Bayt SM-System</span> --}}
            </a>
        </div>
        <!-- begin sidebar scrollbar -->
        <div class="sidebar-left" data-simplebar style="height: 100%;">
            <!-- sidebar menu -->
            <ul class="nav sidebar-inner" id="sidebar-menu">
                {{-- <li class="{{ set_active(['subadmin.home']) }}">
                    <a class="sidenav-item-link" href="{{ url('subadmin/home') }}">
                        <i class="mdi mdi-briefcase-account-outline"></i>
                        <span class="nav-text">Dashboard</span>
                    </a>
                </li> --}}
                <li class="{{ set_active(['subadmin.users.*']) }}">
                    <a class="sidenav-item-link" href="{{ route('subadmin.users.index') }}">
                        <i class="mdi mdi-account-group"></i>
                        <span class="nav-text">Users</span>
                    </a>
                </li>

                <li class="section-title">
                    Student Management System
                </li>
                <li
                    class="has-sub 
                    {{ set_active(['subadmin.students.*', 'subadmin.classes.*', 'subadmin.exams.*', 'subadmin.salaries.*', 'subadmin.vacations.*', 'subadmin.attendance.*']) }}">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                        data-target="#human-resource" aria-expanded="false" aria-controls="human-resource">
                        <i class="mdi mdi-ungroup"></i>
                        <span class="nav-text">SM System</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse {{ set_show(['subadmin.students.*', 'subadmin.classes.*', 'subadmin.exams.*', 'subadmin.salaries.*', 'subadmin.vacations.*', 'subadmin.attendance.*']) }}"
                        id="human-resource" data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            <li class="{{ set_active(['subadmin.students.*']) }}">
                                <a class="sidenav-item-link" href="{{ route('subadmin.students.index') }}">
                                    <span class="nav-text">Students</span>
                                </a>
                            </li>
                            <li class="{{ set_active(['subadmin.classes.*']) }}">
                                <a class="sidenav-item-link" href="{{ route('subadmin.classes.index') }}">
                                    <span class="nav-text">Classes</span>
                                </a>
                            </li>
                            <li class="{{ set_active(['subadmin.exams.*']) }}">
                                <a class="sidenav-item-link" href="{{ route('subadmin.exams.index') }}">
                                    <span class="nav-text">exams</span>
                                </a>
                            </li>
                            <li class="{{ set_active(['subadmin.marks.*']) }}">
                                <a class="sidenav-item-link" href="{{ route('subadmin.marks.index') }}">
                                    <span class="nav-text">marks</span>
                                </a>
                            </li>
                            <li class="{{ set_active(['subadmin.vacations.*']) }}">
                                <a class="sidenav-item-link" href="{{ route('subadmin.vacations.index') }}">
                                    <span class="nav-text">Vacations</span>
                                </a>
                            </li>
                            <li class="{{ set_active(['subadmin.attendance.*']) }}">
                                <a class="sidenav-item-link" href="{{ route('subadmin.attendance.index') }}">
                                    <span class="nav-text">Attendance</span>
                                </a>
                            </li>
                        </div>
                    </ul>
                </li>
                <li class="section-title">
                    Apps
                </li>

            </ul>
        </div>
    </div>
</aside>
