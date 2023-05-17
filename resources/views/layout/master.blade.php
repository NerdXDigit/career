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


  <div class="barba-container" data-barba="container">


    <main class="main-content">


      <header class="header -base-sidebar border-bottom-light bg-white js-header">
        <div class="header__container py-20 px-10">
          <div class="row justify-between items-center">
            <div class="col-auto">
              <div class="d-flex items-center">
                <div class="header__explore text-dark-1">
                  <button class="d-flex items-center js-dashboard-home-9-sidebar-toggle">
                    <i class="icon -dark-text-white icon-explore"></i>
                  </button>
                </div>

                <div class="header__logo ml-30 md:ml-20">
                  <a data-barba href="{{route('homepage')}}">
                    <img class="-light-d-none" src="{{asset('img/general/logo.svg')}}" alt="logo">
                    <img class="-dark-d-none" src="{{asset('img/general/logo-dark.svg')}}" alt="logo">
                  </a>
                </div>
                
              </div>
            </div>

            <div class="col-auto">
              <div class="d-flex items-center">

                @if(!Auth::user())
                  <div class="relative d-flex items-center ml-10">
                    <div class="d-flex items-center px-20 py-20">
                      <a href=" {{route('loginpage')}} " class="button -dark-1 text-white -dark-button-dark-1 p-3 ">Se Connecter</a>
                    </div>
                  </div>
                @else
                  <div class="relative d-flex items-center ml-10">
                    <a href="#" data-el-toggle=".js-profile-toggle">
                      <img class="size-50" src="img/misc/user-profile.png" alt="image">
                    </a>

                    <div class="toggle-element js-profile-toggle">
                      <div class="toggle-bottom -profile bg-white shadow-4 border-light rounded-8 mt-10">
                        <div class="px-30 py-30">

                          <div class="sidebar -dashboard">

                            <div class="sidebar__item -is-active -dark-bg-dark-2">
                              <a href="{{route('userDashboard')}}" class="d-flex items-center text-17 lh-1 fw-500 -dark-text-white">
                                <i class="text-20 icon-discovery mr-15"></i>
                                Dashboard
                              </a>
                            </div>

                            <div class="sidebar__item ">
                              <a href="/logout" class="d-flex items-center text-17 lh-1 fw-500 ">
                                <i class="text-20 icon-power mr-15"></i>
                                Logout
                              </a>
                            </div>

                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                @endif
              </div>
            </div>
          </div>
        </div>
      </header>


      <div class="content-wrapper js-content-wrapper">
        <div class="dashboard -home-9 px-0 js-dashboard-home-9">
          <div class="dashboard__sidebar -base scroll-bar-1 border-right-light lg:px-30">

            <div class="sidebar -base-sidebar">
              <div class="sidebar__inner">
                <div class="mt-4">
                  <div class="text-16 lh-1 fw-500 text-dark-1 mb-30">Géneral</div>
                  <div>

                    <div class="sidebar__item -is-active">
                      <a href="{{route('homepage')}}" class="-dark-sidebar-white d-flex items-center text-17 lh-1 fw-500">
                        <i class="text-20 icon-discovery mr-15"></i>
                        Accueil
                      </a>
                    </div>

                    <div class="sidebar__item">
                      <a href="{{route('opportunitiespage')}}" class="-dark-sidebar-white d-flex items-center text-17 lh-1 fw-500">
                        <i class="text-20 icon-discovery mr-15"></i>
                        Nos Opportunités
                      </a>
                    </div>

                    <div class="sidebar__item ">
                      <a href="" class="-dark-sidebar-white d-flex items-center text-17 lh-1 fw-500">
                        <i class="text-20 icon-play-button mr-15"></i>
                        Formations
                      </a>
                    </div>

                    <div class="sidebar__item ">
                      <a href="" class="-dark-sidebar-white d-flex items-center text-17 lh-1 fw-500">
                        <i class="text-20 icon-book mr-15"></i>
                        Livres
                      </a>
                    </div>

                  </div>
                </div>

                <div class="mt-60">
                  <div class="text-16 lh-1 fw-500 text-dark-1 mb-30">Filtrer</div>
                  <div class="">
                    

                    <form action="" class="contact-form respondForm__form row y-gap-20 pt-30">
                      <div>
                      <select name="" id="">
                        <option value="">Benin</option>
                        <option value="">Benin</option>
                        <option value="">Benin</option>
                      </select>
                    </div>

                      <div>
                        <input type="text" name="" id="" placeholder="Poste">
                      </div>
                      <div>
                        <input type="text" name="" id="" placeholder="Entreprise"> 
                      </div>
                      
                      <div>
                        <button type="submit" class="button -md -dark-1 text-white fw-500 w-1/1">Rechercher</button>
                      </div>
                      
                    </form>

                  </div>
                </div>
              </div>
            </div>

          </div>

          <div class="dashboard__main mt-0">
            <div class="dashboard__content pt-0 px-15 pb-0">

              @yield('content')

            </div>

            <footer class="footer">
              <div class="container">
                <div class="py-30 border-top-light">
                  <div class="row items-center justify-between">
                    <div class="col-auto">
                      <div class="text-13 lh-1">© 2022 Career Space. Tout droit réservé.</div>
                    </div>
                  </div>
                </div>
              </div>
            </footer>
          </div>
        </div>
      </div>
    </main>

  </div>

  <!-- JavaScript -->
  <script src=" {{asset('cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js')}} " integrity="sha512-QSkVNOCYLtj73J4hbmVoOV6KVZuMluZlioC+trLpewV8qMjsWqlIQvkn1KGX2StWvPMdWGBqim1xlC8krl1EKQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src=" {{asset('unpkg.com/leaflet%401.7.1/dist/leaflet.js')}} " integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
  <script src=" {{asset('js/vendors.js')}} "></script>
  <script src=" {{asset('js/main.js')}} "></script>
</body>

</html>