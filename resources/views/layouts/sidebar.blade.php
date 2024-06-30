<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">
                    <span>MENU</span>
                </li>
                <li class="{{ request()->is('admin/dashboard') ? 'active' : '' }}">
                    <a href="{{ url('admin/dashboard') }}"><i class="feather-grid"></i> <span>
                            Dashboard</span></a>

                </li>
                <li class="{{ request()->is('admin/blogs*') ? 'active' : '' }}">
                    <a href="{{ url('admin/blogs') }}"><i class="bi bi-substack"></i> <span> Blogs</span></a>

                </li>

                <li class="submenu {{ request()->is('admin/settings*') ? 'active' : '' }}">
                    <a href="#"><i class="fas fa-book"></i> <span> Site Settings</span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{ url('admin/settings/general-settings') }}"
                                class="{{ request()->is('admin/settings/general-settings') ? 'active' : '' }}">General Settings</a>
                        </li>
                       

                    </ul>
                </li>

            </ul>
        </div>
    </div>
</div>
