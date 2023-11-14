<div class="container-fluid page-body-wrapper bg-light">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas " id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="nav-profile-image">
                  <img src="{{URL::to('/')}}/ceo.png" alt="profile">
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2">Admin</span>
                  <span class="text-secondary text-small">Arabians Admin</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
              </a>
            </li>
           <li class="nav-item">
    <a class="nav-link" href="redirect">
        <span class="menu-title">Dashboard</span>
        <i class="mdi mdi-home menu-icon"></i>
    </a>
</li>

<li class="nav-item">
    <a class="nav-link" data-toggle="collapse" href="#usersSubMenu" aria-expanded="false" aria-controls="usersSubMenu">
        <span class="menu-title">Users</span>
        <i class="mdi mdi-home menu-icon"></i>
    </a>
    <div class="collapse" id="usersSubMenu">
        <ul class="nav flex-column sub-menu">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('user') }}">Users List</a>
            </li>
            <!-- Add more sub-menu items here -->
        </ul>
    </div>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ url('banners') }}">
        <span class="menu-title">Banners</span>
        <i class="mdi mdi-home menu-icon"></i>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ url('category') }}">
        <span class="menu-title">Category</span>
        <i class="mdi mdi-home menu-icon"></i>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ url('postjob') }}">
        <span class="menu-title">Manage Jobs</span>
        <i class="mdi mdi-home menu-icon"></i>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ url('jobapplication') }}">
        <span class="menu-title"> Job Applications</span>
        <i class="mdi mdi-home menu-icon"></i>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" data-toggle="collapse" href="#companiesSubMenu" aria-expanded="false" aria-controls="companiesSubMenu">
        <span class="menu-title">Companies</span>
        <i class="mdi mdi-home menu-icon"></i>
    </a>
    <div class="collapse" id="companiesSubMenu">
        <ul class="nav flex-column sub-menu">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('companies') }}">Add Company</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('expenses') }}">Company Expense</a>
            </li>
            <!-- Add more sub-menu items here -->
        </ul>
    </div>
</li>
<li class="nav-item">
    <a class="nav-link" data-toggle="collapse" href="#accountsSubMenu" aria-expanded="false" aria-controls="accountsSubMenu">
        <span class="menu-title">Accounting</span>
        <i class="mdi mdi-home menu-icon"></i>
    </a>
    <div class="collapse" id="accountsSubMenu">
        <ul class="nav flex-column sub-menu">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('accounts') }}">Add Account</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('candidate') }}">Candidate Ledger</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('bank_statement') }}">Bank Statement</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('transferMoney') }}">Transfer Money</a>
            </li>
        </ul>
    </div>
</li>
<li class="nav-item">
    <a class="nav-link" data-toggle="collapse" href="#expensesSubMenu" aria-expanded="false" aria-controls="expensesSubMenu">
        <span class="menu-title">Expense</span>
        <i class="mdi mdi-home menu-icon"></i>
    </a>
    <div class="collapse" id="expensesSubMenu">
        <ul class="nav flex-column sub-menu">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('expense') }}">Expense List</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('expensecategory') }}">Expense Category</a>
            </li>
        </ul>
    </div>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ url('personledger') }}">
        <span class="menu-title"> Person Ledger</span>
        <i class="mdi mdi-home menu-icon"></i>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ url('editprofile') }}">
        <span class="menu-title">Profile</span>
        <i class="mdi mdi-home menu-icon"></i>
    </a>
</li>

          </ul>
        </nav>
