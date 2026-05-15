<header class="main-header" id="mainHeader">
    <div>
        <button class="toggle-btn" id="toggleBtn">
            <i class="fa-solid fa-bars"></i>
        </button>
    </div>

    <div class="dropdown">
        <button class="profile-btn dropdown-toggle d-flex align-items-center gap-2" data-bs-toggle="dropdown">
            <img src="https://i.pravatar.cc/100" alt="admin" class="profile-img">
            <span class="admin-name">
                Admin
            </span>
        </button>

        <ul class="dropdown-menu dropdown-menu-end">
            <li>
                <a href="#" class="dropdown-item">
                    <i class="fa-regular fa-user me-2"></i>
                    Profile
                </a>
            </li>
            <li>
                <form action="{{ route('logout') }}" method="POST" class="ajax-form d-inline">
                    @csrf

                    <button type="submit" class="dropdown-item text-danger submit-btn">
                        <i class="fa-solid fa-right-from-bracket me-2"></i>
                        Logout
                    </button>
                </form>
            </li>
        </ul>
    </div>
</header>
