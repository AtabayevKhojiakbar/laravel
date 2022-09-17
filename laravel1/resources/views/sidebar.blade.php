<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-primary">



                <li class="nav-item {{  request()->routeIs('admin.post.index') ? 'active' : '' }}">
                    <a href="{{route('admin.post.index')}}">
                        <i class="fas fa-pen"></i>
                        <p>Postlar</p>
                    </a>
                </li>
@if(auth()->user()->role=="admin")
                <li class="nav-item {{  request()->routeIs('admin.users.index') ? 'active' : '' }}">
                    <a href="{{route('admin.users.index')}}">
                        <i class="fas fa-bars"></i>
                        <p>Foydalanuvchilar</p>
                    </a>
                </li>
@endif

            </ul>
        </div>
    </div>
</div>




