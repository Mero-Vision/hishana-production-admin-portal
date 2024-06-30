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

            </ul>
        </div>
    </div>
</div>
