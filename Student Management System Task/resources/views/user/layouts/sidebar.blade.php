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
                <?php if (auth()->user()->role === "subadmin"): ?>
                {{-- <li class="{{ set_active(['user.home']) }}">
                    <a class="sidenav-item-link" href="{{ url('user/home') }}">
                        <i class="mdi mdi-briefcase-account-outline"></i>
                        <span class="nav-text">Dashboard</span>
                    </a>
                </li> --}}
                {{-- <li class="{{ set_active(['user.users.*']) }}">
                    <a class="sidenav-item-link" href="{{ route('user.users.index') }}">
                        <i class="mdi mdi-account-group"></i>
                        <span class="nav-text">Users</span>
                    </a>
                </li> --}}

                <?php endif; ?>

                <li class="section-title">
                    Student Management System
                </li>
                <li
                    class="has-sub 
                    {{ set_active(['user.students.*', 'user.classes.*', 'user.exams.*', 'user.salaries.*', 'user.vacations.*', 'user.attendance.*']) }}">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                        data-target="#human-resource" aria-expanded="false" aria-controls="human-resource">
                        <i class="mdi mdi-ungroup"></i>
                        <span class="nav-text">SM System</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse {{ set_show(['user.students.*', 'user.classes.*', 'user.exams.*', 'user.salaries.*', 'user.vacations.*', 'user.attendance.*']) }}"
                        id="human-resource" data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            <li class="{{ set_active(['user.students.*']) }}">
                                <a class="sidenav-item-link" href="{{ route('user.students.index') }}">
                                    <span class="nav-text">Students</span>
                                </a>
                            </li>


                            <li class="{{ set_active(['user.classes.*']) }}">
                                <a class="sidenav-item-link" href="{{ route('user.classes.index') }}">
                                    <span class="nav-text">Classes</span>
                                </a>
                            </li>
                            <li class="{{ set_active(['user.exams.*']) }}">
                                <a class="sidenav-item-link" href="{{ route('user.exams.index') }}">
                                    <span class="nav-text">exams</span>
                                </a>
                            </li>
                            <li class="{{ set_active(['user.marks.*']) }}">
                                <a class="sidenav-item-link" href="{{ route('user.marks.index') }}">
                                    <span class="nav-text">Marks</span>
                                </a>
                            </li>
                            <li class="{{ set_active(['user.vacations.*']) }}">
                                <a class="sidenav-item-link" href="{{ route('user.vacations.index') }}">
                                    <span class="nav-text">Vacations</span>
                                </a>
                            </li>
                            <li class="{{ set_active(['user.attendance.*']) }}">
                                <a class="sidenav-item-link" href="{{ route('user.attendance.index') }}">
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
