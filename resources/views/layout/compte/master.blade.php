<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">

  <link rel="stylesheet" href=" {{asset('cdn.jsdelivr.net/npm/choices.js/public/assets/styles/base.min.css')}}"  />
  <link rel="stylesheet" href=" {{asset('cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css')}} " />

  <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined" rel="stylesheet">
  <link rel="stylesheet" href=" {{asset('cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css')}} " integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href=" {{asset('unpkg.com/leaflet%401.7.1/dist/leaflet.css')}} " integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Stylesheets -->
  <link rel="stylesheet" href=" {{asset('css/vendors.css')}} ">
  <link rel="stylesheet" href=" {{asset('css/main.css')}} ">

  <title>Career - @yield('title')</title>
</head>

<body class="preloader-visible" data-barba="wrapper">
  <!-- preloader start -->
  <div class="preloader js-preloader">
    <div class="preloader__bg"></div>
  </div>
  <!-- preloader end -->


  <main class="main-content  ">

    <header data-anim="fade" data-add-bg="" class="header -type-3 js-header">


      <div class="header__container py-10">
        <div class="row justify-between items-center">

          <div class="col-auto">
            <div class="header-left d-flex items-center">

              <div class="header__logo ">
                <a data-barba href="{{route('homepage')}}">
                  <img src="{{asset('logo.png')}}" width="200" alt="logo">
                </a>
              </div>

            </div>
          </div>


          <div class="col-auto">
            <div class="header-right d-flex items-center">
              <div class="header-right__icons text-white d-flex items-center">

                <div class="header-menu js-mobile-menu-toggle ">
                  <div class="header-menu__content">
                    <div class="mobile-bg js-mobile-bg"></div>

                    <div class="d-none xl:d-flex items-center px-20 py-20 border-bottom-light">
                        @if(!Auth::user())
                            <a href=" {{route('loginpage')}} " class="text-dark-1">Se Connecter</a>
                        @else
                            <a href=" {{route('userDashboard')}} " class="text-dark-1">Dashboard</a>
                        @endif
                    </div>

                    <div class="menu js-navList">
                      <ul class="menu__nav text-dark-1 -is-active">

                        <li>
                            <a data-barba href="{{route('opportunitiespage')}}">Toutes les opportunitées</a>
                          </li>

                        <li>
                          <a data-barba href="{{route('homepage')}}">Contact</a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="header-menu-close" data-el-toggle=".js-mobile-menu-toggle">
                    <div class="size-40 d-flex items-center justify-center rounded-full bg-white">
                      <div class="icon-close text-dark-1 text-16"></div>
                    </div>
                  </div>

                  <div class="header-menu-bg"></div>
                </div>


                <div class="d-none xl:d-block ml-20">
                  <button class="text-dark-1 items-center" data-el-toggle=".js-mobile-menu-toggle">
                    <i class="fa-regular fa-bars"></i>
                  </button>
                </div>

              </div>

              <div class="header-right__buttons d-flex items-center ml-30 xl:ml-20 md:d-none">
                @if(!Auth::user())
                    <a href=" {{route('loginpage')}} " class="button px-30 h-50 -outline-dark-1 text-dark-1">Se Connecter</a>
                @else
                    <a href=" {{route('userDashboard')}} " class="button px-30 h-50 -outline-dark-1 text-dark-1">Dashboard</a>
                @endif
              </div>
            </div>
          </div>

        </div>
      </div>
    </header>


    <div class="content-wrapper  js-content-wrapper">


      @yield('content')


    </div>
  </main>

  <!-- JavaScript -->
  <script src=" {{asset('unpkg.com/leaflet%401.7.1/dist/leaflet.js')}} " integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
  <script src=" {{asset('js/vendors.js')}} "></script>
  <script src=" {{asset('js/main.js')}} "></script>
</body>

</html>