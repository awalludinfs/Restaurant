<header class="navbar navbar-dark sticky-top bg-success flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="/dashboard"><img src="/img/logo.png" width="30px" height="30px" alt="">HUNGRY RESTAURANT</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <nav class="navbar navbar-expand-lg navbar-dark bg-succes">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small" id="user_profile_name">Awallludin fs</span>
                <img class="rounded-circle" src="/img/al.jpg" width="20px" height="20px" id="user_profile_image">
              </a>
              <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><a class="dropdown-item" href="#">Setting</a></li>
                <li><a class="dropdown-item">
                  <form action="/logout" method="post">
                    @csrf
                    <button  type="sumbit" class="bg-dark border-0"> Logout <span data-feather="log-out"></span> </button>
                  </form>     
                </a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

