<div class="left-sidebar">
    <div class="scroll-sidebar">
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-devider"></li>
                <li class="nav-label">Home</li>
                <li class="{{$activeMenu == 'home' ? 'active' : ''}}">
                  <a href="{{url('admin/dashboard')}}" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Dashboard</span></a>
                </li>
                <li class="nav-label">Activity</li>
                <li class="{{$activeMenu == 'pengurus' ? 'active' : ''}}"> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-envelope"></i><span class="hide-menu">Data Pengurus</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="#">Tambah Data</a></li>
                        <li><a href="#">Data Pengurus</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</div>
