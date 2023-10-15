<div class="sidebar sidebar-collapse" id="sidebar">
    <div class="sidebar__menu-group">
        <ul class="sidebar_nav">
            <li>
                <a href="{{ route('dashboard') }}" class="{{ request()->segment(1) == '' ? 'active' : null }}">
                    <span class="nav-icon uil uil-create-dashboard"></span>
                    <span class="menu-text">Dashboard</span>
                </a>
            </li>
            @if(auth()->user()->role == 0)
            <li>
                <a href="{{ route('jabatan-index') }}" class="{{ request()->segment(1) == 'jabatan' ? 'active' : null }}">
                    <span class="nav-icon uil uil-bag-alt"></span>
                    <span class="menu-text">Jabatan</span>
                </a>
            </li>
            <li>
                <a href="{{ route('pegawai-index') }}" class="{{ request()->segment(1) == 'pegawai' ? 'active' : null }}">
                    <span class="nav-icon uil uil-users-alt"></span>
                    <span class="menu-text">Pegawai</span>
                </a>
            </li>
            @endif
            <li>
                <a href="{{ route('skp-index') }}" class="{{ request()->segment(1) == 'skp' ? 'active' : null }}">
                    <span class="nav-icon uil uil-award"></span>
                    <span class="menu-text">SKP</span>
                </a>
            </li>
            @if(auth()->user()->role == 1)
            <li>
                <a href="{{ route('validasi-index') }}" class="{{ request()->segment(1) == 'validasi' ? 'active' : null }}">
                    <span class="nav-icon uil uil-file-check"></span>
                    <span class="menu-text">Validasi</span>
                </a>
            </li>
            @endif
            <li>
                <a href="{{ route('ranking-index') }}" class="{{ request()->segment(1) == 'ranking' ? 'active' : null }}">
                    <span class="nav-icon uil uil-medal"></span>
                    <span class="menu-text">Ranking</span>
                </a>
            </li>
        </ul>
    </div>
</div>