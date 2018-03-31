<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{url('style/images/logo-ukm.png')}}" alt="user" class="profile-pic" /></a>
    <div class="dropdown-menu dropdown-menu-right animated zoomIn">
        <ul class="dropdown-user">
            <li><a href="#"><i class="ti-user"></i> Profile</a></li>
            <li><a href="#"><i class="ti-wallet"></i> Balance</a></li>
            <li><a href="#"><i class="ti-email"></i> Inbox</a></li>
            <li><a href="#"><i class="ti-settings"></i> Setting</a></li>
            <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
             <i class="fa fa-power-off"></i> Logout {{ Auth::user()->name }}</a></li>
             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                 @csrf
             </form>
        </ul>
    </div>
</li>
