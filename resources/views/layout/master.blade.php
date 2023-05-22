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
                    <img class="-light-d-none" src="{{asset('logo.png')}}" width="200" alt="logo">
                    <img class="-dark-d-none" src="{{asset('logo.png')}}" width="200" alt="logo">
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
                      <img class="size-50" src="{{asset('default.webp')}}" alt="image">
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
                    

                    <form action="{{route('opportunitiesrecherche')}}" method="POST" class="contact-form respondForm__form row y-gap-20 pt-30">
                      <div>
                        @csrf
                        <select name="pays">
                          <option value="">Choisissez le pays</option>
                          
                          <option value="Afghanistan">Afghanistan </option>
                          <option value="Afrique_Centrale">Afrique_Centrale </option>
                          <option value="Afrique_du_sud">Afrique_du_Sud </option>
                          <option value="Albanie">Albanie </option>
                          <option value="Algerie">Algerie </option>
                          <option value="Allemagne">Allemagne </option>
                          <option value="Andorre">Andorre </option>
                          <option value="Angola">Angola </option>
                          <option value="Anguilla">Anguilla </option>
                          <option value="Arabie_Saoudite">Arabie_Saoudite </option>
                          <option value="Argentine">Argentine </option>
                          <option value="Armenie">Armenie </option>
                          <option value="Australie">Australie </option>
                          <option value="Autriche">Autriche </option>
                          <option value="Azerbaidjan">Azerbaidjan </option>
                          
                          <option value="Bahamas">Bahamas </option>
                          <option value="Bangladesh">Bangladesh </option>
                          <option value="Barbade">Barbade </option>
                          <option value="Bahrein">Bahrein </option>
                          <option value="Belgique">Belgique </option>
                          <option value="Belize">Belize </option>
                          <option value="Benin">Benin </option>
                          <option value="Bermudes">Bermudes </option>
                          <option value="Bielorussie">Bielorussie </option>
                          <option value="Bolivie">Bolivie </option>
                          <option value="Botswana">Botswana </option>
                          <option value="Bhoutan">Bhoutan </option>
                          <option value="Boznie_Herzegovine">Boznie_Herzegovine </option>
                          <option value="Bresil">Bresil </option>
                          <option value="Brunei">Brunei </option>
                          <option value="Bulgarie">Bulgarie </option>
                          <option value="Burkina_Faso">Burkina_Faso </option>
                          <option value="Burundi">Burundi </option>
                          
                          <option value="Caiman">Caiman </option>
                          <option value="Cambodge">Cambodge </option>
                          <option value="Cameroun">Cameroun </option>
                          <option value="Canada">Canada </option>
                          <option value="Canaries">Canaries </option>
                          <option value="Cap_vert">Cap_Vert </option>
                          <option value="Chili">Chili </option>
                          <option value="Chine">Chine </option>
                          <option value="Chypre">Chypre </option>
                          <option value="Colombie">Colombie </option>
                          <option value="Comores">Colombie </option>
                          <option value="Congo">Congo </option>
                          <option value="Congo_democratique">Congo_democratique </option>
                          <option value="Cook">Cook </option>
                          <option value="Coree_du_Nord">Coree_du_Nord </option>
                          <option value="Coree_du_Sud">Coree_du_Sud </option>
                          <option value="Costa_Rica">Costa_Rica </option>
                          <option value="Cote_d_Ivoire">Côte_d_Ivoire </option>
                          <option value="Croatie">Croatie </option>
                          <option value="Cuba">Cuba </option>
                          
                          <option value="Danemark">Danemark </option>
                          <option value="Djibouti">Djibouti </option>
                          <option value="Dominique">Dominique </option>
                          
                          <option value="Egypte">Egypte </option>
                          <option value="Emirats_Arabes_Unis">Emirats_Arabes_Unis </option>
                          <option value="Equateur">Equateur </option>
                          <option value="Erythree">Erythree </option>
                          <option value="Espagne">Espagne </option>
                          <option value="Estonie">Estonie </option>
                          <option value="Etats_Unis">Etats_Unis </option>
                          <option value="Ethiopie">Ethiopie </option>
                          
                          <option value="Falkland">Falkland </option>
                          <option value="Feroe">Feroe </option>
                          <option value="Fidji">Fidji </option>
                          <option value="Finlande">Finlande </option>
                          <option value="France">France </option>
                          
                          <option value="Gabon">Gabon </option>
                          <option value="Gambie">Gambie </option>
                          <option value="Georgie">Georgie </option>
                          <option value="Ghana">Ghana </option>
                          <option value="Gibraltar">Gibraltar </option>
                          <option value="Grece">Grece </option>
                          <option value="Grenade">Grenade </option>
                          <option value="Groenland">Groenland </option>
                          <option value="Guadeloupe">Guadeloupe </option>
                          <option value="Guam">Guam </option>
                          <option value="Guatemala">Guatemala</option>
                          <option value="Guernesey">Guernesey </option>
                          <option value="Guinee">Guinee </option>
                          <option value="Guinee_Bissau">Guinee_Bissau </option>
                          <option value="Guinee equatoriale">Guinee_Equatoriale </option>
                          <option value="Guyana">Guyana </option>
                          <option value="Guyane_Francaise ">Guyane_Francaise </option>
                          
                          <option value="Haiti">Haiti </option>
                          <option value="Hawaii">Hawaii </option>
                          <option value="Honduras">Honduras </option>
                          <option value="Hong_Kong">Hong_Kong </option>
                          <option value="Hongrie">Hongrie </option>
                          
                          <option value="Inde">Inde </option>
                          <option value="Indonesie">Indonesie </option>
                          <option value="Iran">Iran </option>
                          <option value="Iraq">Iraq </option>
                          <option value="Irlande">Irlande </option>
                          <option value="Islande">Islande </option>
                          <option value="Israel">Israel </option>
                          <option value="Italie">italie </option>
                          
                          <option value="Jamaique">Jamaique </option>
                          <option value="Jan Mayen">Jan Mayen </option>
                          <option value="Japon">Japon </option>
                          <option value="Jersey">Jersey </option>
                          <option value="Jordanie">Jordanie </option>
                          
                          <option value="Kazakhstan">Kazakhstan </option>
                          <option value="Kenya">Kenya </option>
                          <option value="Kirghizstan">Kirghizistan </option>
                          <option value="Kiribati">Kiribati </option>
                          <option value="Koweit">Koweit </option>
                          
                          <option value="Laos">Laos </option>
                          <option value="Lesotho">Lesotho </option>
                          <option value="Lettonie">Lettonie </option>
                          <option value="Liban">Liban </option>
                          <option value="Liberia">Liberia </option>
                          <option value="Liechtenstein">Liechtenstein </option>
                          <option value="Lituanie">Lituanie </option>
                          <option value="Luxembourg">Luxembourg </option>
                          <option value="Lybie">Lybie </option>
                          
                          <option value="Macao">Macao </option>
                          <option value="Macedoine">Macedoine </option>
                          <option value="Madagascar">Madagascar </option>
                          <option value="Madère">Madère </option>
                          <option value="Malaisie">Malaisie </option>
                          <option value="Malawi">Malawi </option>
                          <option value="Maldives">Maldives </option>
                          <option value="Mali">Mali </option>
                          <option value="Malte">Malte </option>
                          <option value="Man">Man </option>
                          <option value="Mariannes du Nord">Mariannes du Nord </option>
                          <option value="Maroc">Maroc </option>
                          <option value="Marshall">Marshall </option>
                          <option value="Martinique">Martinique </option>
                          <option value="Maurice">Maurice </option>
                          <option value="Mauritanie">Mauritanie </option>
                          <option value="Mayotte">Mayotte </option>
                          <option value="Mexique">Mexique </option>
                          <option value="Micronesie">Micronesie </option>
                          <option value="Midway">Midway </option>
                          <option value="Moldavie">Moldavie </option>
                          <option value="Monaco">Monaco </option>
                          <option value="Mongolie">Mongolie </option>
                          <option value="Montserrat">Montserrat </option>
                          <option value="Mozambique">Mozambique </option>
                          
                          <option value="Namibie">Namibie </option>
                          <option value="Nauru">Nauru </option>
                          <option value="Nepal">Nepal </option>
                          <option value="Nicaragua">Nicaragua </option>
                          <option value="Niger">Niger </option>
                          <option value="Nigeria">Nigeria </option>
                          <option value="Niue">Niue </option>
                          <option value="Norfolk">Norfolk </option>
                          <option value="Norvege">Norvege </option>
                          <option value="Nouvelle_Caledonie">Nouvelle_Caledonie </option>
                          <option value="Nouvelle_Zelande">Nouvelle_Zelande </option>
                          
                          <option value="Oman">Oman </option>
                          <option value="Ouganda">Ouganda </option>
                          <option value="Ouzbekistan">Ouzbekistan </option>
                          
                          <option value="Pakistan">Pakistan </option>
                          <option value="Palau">Palau </option>
                          <option value="Palestine">Palestine </option>
                          <option value="Panama">Panama </option>
                          <option value="Papouasie_Nouvelle_Guinee">Papouasie_Nouvelle_Guinee </option>
                          <option value="Paraguay">Paraguay </option>
                          <option value="Pays_Bas">Pays_Bas </option>
                          <option value="Perou">Perou </option>
                          <option value="Philippines">Philippines </option>
                          <option value="Pologne">Pologne </option>
                          <option value="Polynesie">Polynesie </option>
                          <option value="Porto_Rico">Porto_Rico </option>
                          <option value="Portugal">Portugal </option>
                          
                          <option value="Qatar">Qatar </option>
                          
                          <option value="Republique_Dominicaine">Republique_Dominicaine </option>
                          <option value="Republique_Tcheque">Republique_Tcheque </option>
                          <option value="Reunion">Reunion </option>
                          <option value="Roumanie">Roumanie </option>
                          <option value="Royaume_Uni">Royaume_Uni </option>
                          <option value="Russie">Russie </option>
                          <option value="Rwanda">Rwanda </option>
                          
                          <option value="Sahara Occidental">Sahara Occidental </option>
                          <option value="Sainte_Lucie">Sainte_Lucie </option>
                          <option value="Saint_Marin">Saint_Marin </option>
                          <option value="Salomon">Salomon </option>
                          <option value="Salvador">Salvador </option>
                          <option value="Samoa_Occidentales">Samoa_Occidentales</option>
                          <option value="Samoa_Americaine">Samoa_Americaine </option>
                          <option value="Sao_Tome_et_Principe">Sao_Tome_et_Principe </option>
                          <option value="Senegal">Senegal </option>
                          <option value="Seychelles">Seychelles </option>
                          <option value="Sierra Leone">Sierra Leone </option>
                          <option value="Singapour">Singapour </option>
                          <option value="Slovaquie">Slovaquie </option>
                          <option value="Slovenie">Slovenie</option>
                          <option value="Somalie">Somalie </option>
                          <option value="Soudan">Soudan </option>
                          <option value="Sri_Lanka">Sri_Lanka </option>
                          <option value="Suede">Suede </option>
                          <option value="Suisse">Suisse </option>
                          <option value="Surinam">Surinam </option>
                          <option value="Swaziland">Swaziland </option>
                          <option value="Syrie">Syrie </option>
                          
                          <option value="Tadjikistan">Tadjikistan </option>
                          <option value="Taiwan">Taiwan </option>
                          <option value="Tonga">Tonga </option>
                          <option value="Tanzanie">Tanzanie </option>
                          <option value="Tchad">Tchad </option>
                          <option value="Thailande">Thailande </option>
                          <option value="Tibet">Tibet </option>
                          <option value="Timor_Oriental">Timor_Oriental </option>
                          <option value="Togo">Togo </option>
                          <option value="Trinite_et_Tobago">Trinite_et_Tobago </option>
                          <option value="Tristan da cunha">Tristan de cuncha </option>
                          <option value="Tunisie">Tunisie </option>
                          <option value="Turkmenistan">Turmenistan </option>
                          <option value="Turquie">Turquie </option>
                          
                          <option value="Ukraine">Ukraine </option>
                          <option value="Uruguay">Uruguay </option>
                          
                          <option value="Vanuatu">Vanuatu </option>
                          <option value="Vatican">Vatican </option>
                          <option value="Venezuela">Venezuela </option>
                          <option value="Vierges_Americaines">Vierges_Americaines </option>
                          <option value="Vierges_Britanniques">Vierges_Britanniques </option>
                          <option value="Vietnam">Vietnam </option>
                          
                          <option value="Wake">Wake </option>
                          <option value="Wallis et Futuma">Wallis et Futuma </option>
                          
                          <option value="Yemen">Yemen </option>
                          <option value="Yougoslavie">Yougoslavie </option>
                          
                          <option value="Zambie">Zambie </option>
                          <option value="Zimbabwe">Zimbabwe </option>
                          
                        </select>
                      </div>

                      <div>
                        <input type="text" name="poste" id="" placeholder="Poste">
                      </div>

                      <div>
                        <input type="text" name="entreprise" id="" placeholder="Entreprise"> 
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