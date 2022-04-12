<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-success sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
          <li class="nav-item">
                <a class="nav-link text-light {{Request::is('dashbaord') ? 'active' :''}}" aria-current="page" href="/category">
                    <span data-feather="grid"></span>
                    Category
                </a>
          </li>
          <li class="nav-item">
                <a  class="nav-link text-light {{Request::is('dashboard') ? 'active' : ''}}" aria-current="page" href="/product">
                <span data-feather="shopping"></span>
            Menu
            </a>  
          <li class="nav-item">
                <a  class="nav-link text-light {{Request::is('dashboard') ? 'active' : ''}}" aria-current="page" href="/pegawai">
                <span data-feather="users"></span>
                Pegawai
            </a>  
          <li class="nav-item">
                <a  class="nav-link  text-light {{Request::is('dashboard') ? 'active' : ''}}" aria-current="page" href="/order">
                <span data-feather="edit"></span>
                order
            </a>  
          </li>
      </ul>  
    </div>
</nav>
