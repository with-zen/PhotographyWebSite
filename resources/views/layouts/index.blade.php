<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href=" {{asset('../assets/css/material-dashboard.css')}} ">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <title>Document</title>
</head>
<body>
    <div id="app">
        <div class="container position-sticky z-index-sticky top-0">
            <div class="row">
              <div class="col-12">
                <!-- Navbar -->
                <nav class="navbar navbar-expand-lg blur border-radius-lg top-0 z-index-3 shadow position-absolute mt-4 py-2 start-0 end-0 mx-4">
                  <div class="container-fluid ps-2 pe-0">

                        <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3" href="{{ url('/') }}">
                            {{ config('app.name', 'Laravel') }}
                        </a>

                    <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon mt-2">
                        <span class="navbar-toggler-bar bar1"></span>
                        <span class="navbar-toggler-bar bar2"></span>
                        <span class="navbar-toggler-bar bar3"></span>
                      </span>
                    </button>
                    <div class="collapse navbar-collapse" id="navigation">
                      <ul class="navbar-nav mx-auto">

                        <li class="nav-item">
                            <a class="nav-link me-2" href="/">
                              <i class="fa fa-eye opacity-6 text-dark me-1"></i>
                              allposts
                            </a>
                          </li>
                        <li class="nav-item">
                            <a class="nav-link me-2" href="{{ route('profile.index')}}">
                              <i class="fa fa-user opacity-6 text-dark me-1"></i>
                              profile
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link me-2" href="{{ route('messages.index')}}">
                              <i class="fa fa-message opacity-6 text-dark me-1"></i>
                             contact
                            </a>
                          </li>
                      </ul>

                            @guest
                            @if (Route::has('login'))
                                    <a class="btn btn-sm mb-0 me-1 bg-gradient-info " href="{{ route('login') }}">{{ __('Login') }}</a>
                            @endif
                            @if (Route::has('register'))
                                    <a class="btn btn-sm mb-0 me-1 bg-gradient-warning " href="{{ route('register') }}">{{ __('Register') }}</a>
                            @endif
                        @else
                                <a  class="btn btn-sm mb-0 me-1 bg-gradient-success">
                                    {{ Auth::user()->name }}
                                </a>
                                <a  class="btn btn-sm mb-0 me-1 bg-gradient-danger" href="{{ route('logout') }}"

                                onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                 {{ __('Logout') }}
                                 <i class="fab fa-logout"></i>
                             </a>
                             <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                 @csrf
                             </form>
                                </a>
                        @endguest
                        </a>
                      </ul>
                    </div>
                  </div>
                </nav>
                <!-- End Navbar -->
              </div>
            </div>
          </div>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
<div class="container mb-2">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
      <div class="col-md-4 d-flex align-items-center">
        <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
          <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"/></svg>
        </a>
        <span class="mb-3 mb-md-0 text-muted">&copy; 2022 Company, Inc</span>
      </div>
      <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
        <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"/></svg></a></li>
        <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"/></svg></a></li>
        <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"/></svg></a></li>
      </ul>
    </footer>
  </div>
    <script src="{{ asset('./assets/js/core/bootstrap.bundle.min.js') }}" ></script>
</body>
</html>
