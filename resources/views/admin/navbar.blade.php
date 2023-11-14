<nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center ">
          <a class="navbar-brand brand-logo" href=""><img src="assets/images/logo.jpg" style="width:100px;height: 50px;" alt="logo" /></a>
          <a class="navbar-brand brand-logo-mini" href=""><img src="{{URL::to('/')}}/admin/assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <div class="search-field d-none d-md-block">
            <form class="d-flex align-items-center h-100" action="#">
              <div class="input-group">
                <div class="input-group-prepend ">
                  <i class="input-group-text border-0 mdi mdi-magnify"></i>
                </div>
                <input type="text" class="form-control border-0" placeholder="Search projects">
              </div>
            </form>
          </div>
          <ul class="navbar-nav navbar-nav-right">
          <li>
          <form id="menu-item-8427" action="{{ route('logout') }}" method="POST" id="logout-form">
    @csrf
    <button class="btn btn-danger" id="menu-item-8427" style="background-color: #183052;" type="submit">Logout</button>
</form>

                                 </li>
          
            
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>