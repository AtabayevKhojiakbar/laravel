<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-primary">

                <li class="nav-item {{  request()->routeIs('admin.customers.index') ? 'active' : '' }}">
                    <a href="{{route('admin.customers.index')}}">
                        <i class="fas fa-pen"></i>
                        <p>Customers</p>
                    </a>
                </li>

                <li class="nav-item {{  request()->routeIs('admin.prices.index') ? 'active' : '' }}">
                    <a href="{{route('admin.prices.index')}}">
                        <i class="bi bi-hospital"></i>
                        <p>Servislar</p>
                    </a>
                </li>

                <li class="nav-item {{  request()->routeIs('admin.employees.index') ? 'active' : '' }}">
                    <a href="{{route('admin.employees.index')}}">
                        <i class="bi bi-person-square"></i>
                        <p>Xizmatchilar</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>




