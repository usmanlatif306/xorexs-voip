<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('user.dashboard') }}">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#configuration" aria-expanded="false"
                aria-controls="configuration">
                <i class="icon-layout menu-icon"></i>
                <span class="menu-title">Configuraion</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="configuration">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('user.extensions.index') }}">Extension</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('user.did.index') }}">DID</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="javascript:void(0)">Ring Group</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="javascript:void(0)">Voice Mail</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="javascript:void(0)">Day Night</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="javascript:void(0)">IVR</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="javascript:void(0)">Music On Hold</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="javascript:void(0)">Sound File</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="javascript:void(0)">Paging</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="javascript:void(0)">Conference</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="javascript:void(0)">Tarrif</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#miscellaneous" aria-expanded="false"
                aria-controls="miscellaneous">
                <i class="icon-columns menu-icon"></i>
                <span class="menu-title">Miscellaneous</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="miscellaneous">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="javascript:void(0)">Feature Code</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="javascript:void(0)">Pickup Group</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="javascript:void(0)">Departments</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="javascript:void(0)">Holidays</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="javascript:void(0)">Central
                            Phonebook</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="javascript:void(0)">API Users</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="javascript:void(0)">LDAP
                            Synchronization</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="javascript:void(0)">Global CLI
                            Config</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="javascript:void(0)">Tenant Users</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#billing" aria-expanded="false" aria-controls="billing">
                <i class="icon-bar-graph menu-icon"></i>
                <span class="menu-title">Billing</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="billing">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="javascript:void(0)">Invoice</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="javascript:void(0)">Balance List</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="javascript:void(0)">Payment
                            History</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="javascript:void(0)">My Rates</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#liveReport" aria-expanded="false"
                aria-controls="liveReport">
                <i class="icon-grid-2 menu-icon"></i>
                <span class="menu-title">Live Report</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="liveReport">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="javascript:void(0)">Live Calls</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="javascript:void(0)">Live
                            Online SIP Users</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#call-history" aria-expanded="false"
                aria-controls="call-history">
                <i class="icon-contract menu-icon"></i>
                <span class="menu-title">Call History</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="call-history">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="javascript:void(0)">Tenant Call
                            History</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="javascript:void(0)">Top
                            Destinations</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="javascript:void(0)">Fail Logs</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#contact" aria-expanded="false"
                aria-controls="contact">
                <i class="icon-ban menu-icon"></i>
                <span class="menu-title">Contact Center</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="contact">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="javascript:void(0)">Queues</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="javascript:void(0)">Agents</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="javascript:void(0)">Contact Center
                            Call
                            Monitoring</a>
                    <li class="nav-item"> <a class="nav-link" href="javascript:void(0)">Agent
                            Statistics</a>
                    <li class="nav-item"> <a class="nav-link" href="javascript:void(0)">Agent Log
                            Statistics</a>
                    <li class="nav-item"> <a class="nav-link" href="javascript:void(0)">Missed Call
                            Report</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="javascript:void(0)">Answered Call
                            Statistics</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#account" aria-expanded="false"
                aria-controls="account">
                <i class="icon-head menu-icon"></i>
                <span class="menu-title">Account</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="account">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('user.plan.index') }}">User
                            Plan</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('user.profile') }}">Profile</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="javascript:void(0)">Buy More
                            Minutes</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="javascript:void(0)">Plan History</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="javascript:void(0)">Order History</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="javascript:void(0)">Account Usage</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="javascript:void(0)">Account
                            Expiry</a>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
</nav>
