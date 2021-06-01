<div id="left-sidebar" class="sidebar ">
    <h5 class="brand-name">PSCS <a href="javascript:void(0)" class="menu_option float-right"><i class="icon-grid font-16" data-toggle="tooltip" data-placement="left" title="Grid & List Toggle"></i></a></h5>
    <nav id="left-sidebar-nav" class="sidebar-nav">
        <ul class="metismenu">
            <li class="g_heading">Member</li>
            <li class="{{ Request::segment(2) === 'home' ? 'active' : null }}"><a href="{{ url('home') }}"><i class="icon-speedometer"></i><span>Dashboard</span></a></li>
            <li class="{{ Request::segment(2) === 'member' ? 'active' : null }}"><a href="{{ route('member.index') }}"><i class="icon-users"></i><span>Member</span></a></li>

            <!-- <li class="{{ Request::segment(2) === 'departments' ? 'active' : null }}"><a href="javascript:void(0)"><i class="icon-control-pause"></i><span>Departments</span></a></li>
            <li class="{{ Request::segment(2) === 'employee' ? 'active' : null }}"><a href="javascript:void(0)"><i class="icon-user"></i><span>Employee</span></a></li>
            <li class="{{ Request::segment(2) === 'activities' ? 'active' : null }}"><a href="javascript:void(0)"><i class="icon-equalizer"></i><span>Activities</span></a></li>
            <li class="{{ Request::segment(2) === 'holidays' ? 'active' : null }}"><a href="javascript:void(0)"><i class="icon-like"></i><span>Holidays</span></a></li>
            <li class="{{ Request::segment(2) === 'events' ? 'active' : null }}"><a href="javascript:void(0)"><i class="icon-calendar"></i><span>Events</span></a></li>
            <li class="{{ Request::segment(2) === 'payroll' ? 'active' : null }}"><a href="javascript:void(0)"><i class="icon-briefcase"></i><span>Payroll</span></a></li>
            <li class="{{ Request::segment(2) === 'accounts' ? 'active' : null }}"><a href="javascript:void(0)"><i class="icon-credit-card"></i><span>Accounts</span></a></li>
            <li class="{{ Request::segment(2) === 'report' ? 'active' : null }}"><a href="javascript:void(0)"><i class="icon-bar-chart"></i><span>Report</span></a></li>
            <li class="g_heading">Project</li>
            <li class="{{ Request::segment(1) === 'project' ? 'active' : null }}">
                <a href="javascript:void(0)" class="has-arrow arrow-c"><i class="icon-cup"></i><span>Project</span></a>
                <ul>
                    <li class="{{ Request::segment(2) === 'index2' ? 'active' : null }}"><a href="javascript:void(0)">Dashboard</a></li>
                    <li class="{{ Request::segment(2) === 'list' ? 'active' : null }}"><a href="javascript:void(0)">Project list</a></li>
                    <li class="{{ Request::segment(2) === 'taskboard' ? 'active' : null }}"><a href="javascript:void(0)}">Taskboard</a></li>
                    <li class="{{ Request::segment(2) === 'ticket' ? 'active' : null }}"><a href="javascript:void(0)">Ticket List</a></li>
                    <li class="{{ Request::segment(2) === 'ticketdetails' ? 'active' : null }}"><a href="javascript:void(0)">Ticket Details</a></li>
                    <li class="{{ Request::segment(2) === 'clients' ? 'active' : null }}"><a href="javascript:void(0)">Clients</a></li>
                    <li class="{{ Request::segment(2) === 'todo' ? 'active' : null }}"><a href="javascript:void(0)}">Todo List</a></li>
                </ul>
            </li>
            <li class="{{ Request::segment(1) === 'job' ? 'active' : null }}">
                <a href="javascript:void(0)" class="has-arrow arrow-c"><i class="icon-briefcase"></i><span>Job Portal</span></a>
                <ul>
                    <li class="{{ Request::segment(2) === 'index3' ? 'active' : null }}"><a href="javascript:void(0)">Dashboard</a></li>
                    <li class="{{ Request::segment(2) === 'positions' ? 'active' : null }}"><a href="javascript:void(0)">Positions</a></li>
                    <li class="{{ Request::segment(2) === 'applicants' ? 'active' : null }}"><a href="javascript:void(0)">Applicants</a></li>
                    <li class="{{ Request::segment(2) === 'resumes' ? 'active' : null }}"><a href="javascript:void(0)">Resumes</a></li>
                    <li class="{{ Request::segment(2) === 'jobsettings' ? 'active' : null }}"><a href="javascript:void(0)">Settings</a></li>
                </ul>
            </li>
            <li class="{{ Request::segment(1) === 'authentication' ? 'active' : null }}">
                <a href="javascript:void(0)" class="has-arrow arrow-c"><i class="icon-lock"></i><span>Authentication</span></a>
                <ul>
                    <li class="{{ Request::segment(2) === 'login' ? 'active' : null }}"><a href="javascript:void(0)">Login</a></li>
                    <li class="{{ Request::segment(2) === 'register' ? 'active' : null }}"><a href="javascript:void(0)">Register</a></li>
                    <li class="{{ Request::segment(2) === 'forgotpassword' ? 'active' : null }}"><a href="javascript:void(0)}">Forgot password</a></li>
                    <li class="{{ Request::segment(2) === 'error404' ? 'active' : null }}"><a href="javascript:void(0)">Error 404</a></li>
                    <li class="{{ Request::segment(2) === 'error500' ? 'active' : null }}"><a href="javascript:void(0)">Error 500</a></li>
                </ul>
            </li> -->
        </ul>
    </nav>        
</div>