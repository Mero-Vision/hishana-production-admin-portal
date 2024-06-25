<div class="header">

    <div class="header-left">
        <a href="https://merovision.com/" target="_blank" class="logo text-center">
            <img src="{{ url('assets/img/company_logo.png') }}" alt="Logo">
        </a>
        <a href="https://merovision.com/" target="_blank" class="logo logo-small">
            <img src="{{ url('assets/img/company_logo2.png') }}" alt="Logo" width="30" height="30">
        </a>
    </div>

    <div class="menu-toggle">
        <a href="javascript:void(0);" id="toggle_btn">
            <i class="fas fa-bars"></i>
        </a>
    </div>

    <div class="top-nav-search">
        <form>
            <input type="text" class="form-control" placeholder="Search here">
            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
        </form>
    </div>


    <a class="mobile_btn" id="mobile_btn">
        <i class="fas fa-bars"></i>
    </a>


    <ul class="nav user-menu">


        {{-- <li class="nav-item dropdown noti-dropdown language-drop me-2">
            <a href="#" class="dropdown-toggle nav-link header-nav-list" data-bs-toggle="dropdown">
                @if ($lang->lang == 'en')
                    <img src="{{ url('assets/admin/img/languages/usa.png') }}" alt style="max-width: 30px;">
                @else
                    <img src="{{ url('assets/admin/img/languages/nepal.png') }}" alt style="max-width: 30px;">
                @endif

            </a>
            <div class="dropdown-menu ">
                <div class="noti-content">
                    <div>
                        <a class="dropdown-item" href="{{ url('locale/en') }}"><img
                                src="{{ url('assets/admin/img/languages/usa.png') }}" alt style="max-width: 30px;"
                                class="mx-2"> English</a>
                        <a class="dropdown-item" href="{{ url('locale/ne') }}"><img
                                src="{{ url('assets/admin/img/languages/nepal.png') }}" alt style="max-width: 30px;"
                                class="mx-2"> Nepali</a>

                    </div>
                </div>
            </div>
        </li> --}}

         <li class="nav-item mt-2">
            <iframe scrolling="no" border="0" frameborder="0" marginwidth="0" marginheight="0"
                allowtransparency="true"
                src="https://www.ashesh.com.np/linknepali-time.php?dwn=only&font_color=333333&font_size=14&bikram_sambat=0&api=731273n184"
                width="120" height="23">
            </iframe>
        </li>

        <li class="nav-item zoom-screen me-2">
            <a href="#" class="nav-link header-nav-list win-maximize">
                <img src="{{ url('assets/img/header-icon-04.svg') }}" alt>
            </a>
        </li>
        <li class="nav-item dropdown has-arrow new-user-menus">
            <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                <div class="user-img">
                    <img class="rounded-circle" src="{{ Avatar::create(auth()->user()->name)->toBase64() }}"
                        width="31" alt="{{ auth()->user()->name }}">
                    <div class="user-text">
                        <h6>{{ auth()->user()->name }}</h6>
                        <p class="text-muted mb-0">Super Admin</p>
                    </div>
                </div>
            </a>
            <div class="dropdown-menu">
                <div class="user-header">
                    <div class="avatar avatar-sm">
                        <img src="{{ Avatar::create(auth()->user()->name)->toBase64() }}" alt="User Image"
                            class="avatar-img rounded-circle">
                    </div>
                    <div class="user-text">
                        <h6>{{ auth()->user()->name }}</h6>
                        <p class="text-muted mb-0">Super Admin</p>
                    </div>
                </div>
                <a class="dropdown-item" href="{{ url('admin/profile') }}">Profile</a>
                <a class="dropdown-item" href="{{ url('admin/logout') }}">Logout</a>
            </div>
        </li>

    </ul>

</div>
