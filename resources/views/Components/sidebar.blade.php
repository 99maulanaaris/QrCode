<div class="sidebar-menu">
    <ul class="menu">
        <li class="sidebar-title">Menu</li>

        <li class="sidebar-item {{ request()->is('backend') ? 'active' : '' }} ">
            <a href={{ route('home.backend') }} class='sidebar-link'>
                <i class="bi bi-grid-fill"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="sidebar-item {{ request()->is('backend/visitor') ? 'active' : '' }}  ">
            <a href={{ route('backend.visitor') }} class='sidebar-link'>
                <i class="bi bi-file-bar-graph"></i>
                <span>Data Pengunjung</span>
            </a>
        </li>
        <li class="sidebar-item {{ request()->is('backend/checkin') ? 'active' : '' }} ">
            <a href={{ route('backend.checkin') }} class='sidebar-link'>
                <i class="bi bi-calendar-check"></i>
                <span>Checkin</span>
            </a>
        </li>
        <li class="sidebar-item  ">
            <a href="index.html" class='sidebar-link'>
                <i class="bi bi-calendar2-check"></i>
                <span>Checkout</span>
            </a>
        </li>

    </ul>
</div>
