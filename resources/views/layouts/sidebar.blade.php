<div class="sidebar sidebar-collapse" id="sidebar">
    <div class="sidebar__menu-group">
        <ul class="sidebar_nav">
            <li>
                <a href="{{ route('dashboard') }}" class="{{ request()->segment(1) == '' ? 'active' : null }}">
                    <span class="nav-icon uil uil-create-dashboard"></span>
                    <span class="menu-text">Dashboard</span>
                </a>
            </li>
        </ul>
    </div>
</div>