@extends('layout.master')
@section('title','Accueil')
@section('content')
    <section data-anim-wrap class="masthead -type-2">
        <div class="masthead__bg">
        <div class="bg-image js-lazy" data-bg="img/home-3/masthead/bg.png"></div>
        </div>

        <div class="container">
        <div class="row y-gap-50 justify-center items-center">
            <div class="col-12">
            <div class="masthead__content">
                <div data-anim-child="slide-up delay-2" class="masthead__subtitle fw-500 text-green-1 text-center text-17 lh-15">
                +10 opportunitées disponibles
                </div>
                <h5 data-anim-child="slide-up delay-3" class="masthead__title text-center text-white mt-10">
                Explorez divers opportunitées
                </h5>
            </div>
            </div>
        </div>
        </div>
    </section>

  <section class="layout-pt-lg layout-pb-lg">
    <div data-anim-wrap class="container">
      <div class="row y-gap-15 justify-between items-center">
        <div class="col-lg-6">

          <div class="sectionTitle ">

            <h2 class="sectionTitle__title ">Opportunitées récentes</h2>

            <p class="sectionTitle__text ">+10 opportunitées disponibles</p>

          </div>

        </div>

        <div class="col-lg-auto">
          <div class="d-inline-block">

            <div class="dropdown js-dropdown js-category-active">
              <div class="dropdown__button d-flex items-center text-14 rounded-8 px-15 py-10 text-dark-1" data-el-toggle=".js-category-toggle" data-el-toggle-active=".js-category-active">
                <span class="js-dropdown-title">Popular Most Viwed</span>
                <i class="icon text-9 ml-40 icon-chevron-down"></i>
              </div>

              <div class="toggle-element -dropdown -dark-bg-dark-2 -dark-border-white-10 js-click-dropdown js-category-toggle">
                <div class="text-14 y-gap-15 js-dropdown-list">

                  <div><a href="#" class="d-block js-dropdown-link">Great</a></div>

                  <div><a href="#" class="d-block js-dropdown-link">Good</a></div>

                  <div><a href="#" class="d-block js-dropdown-link">Medium</a></div>

                  <div><a href="#" class="d-block js-dropdown-link">Low</a></div>

                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

      <div class="row y-gap-30 justify-center pt-50">

        <div class="col-md-6">
          <div data-anim-child="slide-up delay-1">

            <a href="courses-single-1.html" class="coursesCard -type-1 border-light rounded-8">

              <div class="h-100 pt-15 pb-10 px-20">

                <div class="">
                    <div class="coursesCard-footer__author  mb-4">
                      <img src="img/home-3/masthead/bg.png" alt="image">
                    </div>
  
                    <div class="coursesCard-footer__price ">
                      <h5>Offre d'emploi pour jeune </h5>
                    </div>
                </div>

                <div class="text-17 lh-15 fw-500 text-dark-1 mt-10"> UI/UX Designer</div>

                <div class="d-flex x-gap-10 items-center pt-10">

                    <div class="d-flex items-center">
                        <div class="mr-8">
                          <img src="img/coursesCards/icons/2.svg" alt="icon">
                        </div>
                        <div class="text-14 lh-1">15 juin 2023</div>
                    </div>

                    <div class="d-flex items-center">
                        <div class="mr-8">
                            <img src="img/coursesCards/icons/1.svg" alt="icon">
                        </div>
                        <div class="text-14 lh-1">Bénin | Calavi</div>
                    </div>

                </div>

                <div class="py-4">
                    <p style="max-height: 170px; overflow-y: hidden;">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis dolores recusandae quidem nisi, consequatur atque veniam vel necessitatibus pariatur ex itaque saepe aliquid accusamus consequuntur laborum quae aperiam modi magnam et omnis optio! Nobis necessitatibus molestias pariatur dignissimos explicabo similique ratione neque. Quam voluptatum alias totam error ullam. Consequuntur, aut.
                    </p>
                </div>

                <div class="d-flex x-gap-10 items-center pt-10">

                    <div class="d-flex items-center">
                        <h2>NerdX Digital</h2>
                    </div>

                </div>

                
              </div>
            </a>

          </div>
        </div>

        <div class="col-md-6">
            <div data-anim-child="slide-up delay-1">
  
              <a href="courses-single-1.html" class="coursesCard -type-1 border-light rounded-8">
  
                <div class="h-100 pt-15 pb-10 px-20">
  
                  <div class="">
                      <div class="coursesCard-footer__author  mb-4">
                        <img src="img/home-3/masthead/bg.png" alt="image">
                      </div>
    
                      <div class="coursesCard-footer__price ">
                        <h5>Offre d'emploi pour jeune </h5>
                      </div>
                  </div>
  
                  <div class="text-17 lh-15 fw-500 text-dark-1 mt-10"> UI/UX Designer</div>
  
                  <div class="d-flex x-gap-10 items-center pt-10">
  
                      <div class="d-flex items-center">
                          <div class="mr-8">
                            <img src="img/coursesCards/icons/2.svg" alt="icon">
                          </div>
                          <div class="text-14 lh-1">15 juin 2023</div>
                      </div>
  
                      <div class="d-flex items-center">
                          <div class="mr-8">
                              <img src="img/coursesCards/icons/1.svg" alt="icon">
                          </div>
                          <div class="text-14 lh-1">Bénin | Calavi</div>
                      </div>
  
                  </div>
  
                  <div class="py-4">
                      <p style="max-height: 170px; overflow-y: hidden;">
                          Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis dolores recusandae quidem nisi, consequatur atque veniam vel necessitatibus pariatur ex itaque saepe aliquid accusamus consequuntur laborum quae aperiam modi magnam et omnis optio! Nobis necessitatibus molestias pariatur dignissimos explicabo similique ratione neque. Quam voluptatum alias totam error ullam. Consequuntur, aut.
                      </p>
                  </div>
  
                  <div class="d-flex x-gap-10 items-center pt-10">
  
                      <div class="d-flex items-center">
                          <h2>NerdX Digital</h2>
                      </div>
  
                  </div>
  
                  
                </div>
              </a>
  
            </div>
        </div>

        <div class="col-md-6">
            <div data-anim-child="slide-up delay-1">
  
              <a href="courses-single-1.html" class="coursesCard -type-1 border-light rounded-8">
  
                <div class="h-100 pt-15 pb-10 px-20">
  
                  <div class="">
                      <div class="coursesCard-footer__author  mb-4">
                        <img src="img/home-3/masthead/bg.png" alt="image">
                      </div>
    
                      <div class="coursesCard-footer__price ">
                        <h5>Offre d'emploi pour jeune </h5>
                      </div>
                  </div>
  
                  <div class="text-17 lh-15 fw-500 text-dark-1 mt-10"> UI/UX Designer</div>
  
                  <div class="d-flex x-gap-10 items-center pt-10">
  
                      <div class="d-flex items-center">
                          <div class="mr-8">
                            <img src="img/coursesCards/icons/2.svg" alt="icon">
                          </div>
                          <div class="text-14 lh-1">15 juin 2023</div>
                      </div>
  
                      <div class="d-flex items-center">
                          <div class="mr-8">
                              <img src="img/coursesCards/icons/1.svg" alt="icon">
                          </div>
                          <div class="text-14 lh-1">Bénin | Calavi</div>
                      </div>
  
                  </div>
  
                  <div class="py-4">
                      <p style="max-height: 170px; overflow-y: hidden;">
                          Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis dolores recusandae quidem nisi, consequatur atque veniam vel necessitatibus pariatur ex itaque saepe aliquid accusamus consequuntur laborum quae aperiam modi magnam et omnis optio! Nobis necessitatibus molestias pariatur dignissimos explicabo similique ratione neque. Quam voluptatum alias totam error ullam. Consequuntur, aut.
                      </p>
                  </div>
  
                  <div class="d-flex x-gap-10 items-center pt-10">
  
                      <div class="d-flex items-center">
                          <h2>NerdX Digital</h2>
                      </div>
  
                  </div>
  
                  
                </div>
              </a>
  
            </div>
        </div>

        <div class="col-md-6">
            <div data-anim-child="slide-up delay-1">
  
              <a href="courses-single-1.html" class="coursesCard -type-1 border-light rounded-8">
  
                <div class="h-100 pt-15 pb-10 px-20">
  
                  <div class="">
                      <div class="coursesCard-footer__author  mb-4">
                        <img src="img/home-3/masthead/bg.png" alt="image">
                      </div>
    
                      <div class="coursesCard-footer__price ">
                        <h5>Offre d'emploi pour jeune </h5>
                      </div>
                  </div>
  
                  <div class="text-17 lh-15 fw-500 text-dark-1 mt-10"> UI/UX Designer</div>
  
                  <div class="d-flex x-gap-10 items-center pt-10">
  
                      <div class="d-flex items-center">
                          <div class="mr-8">
                            <img src="img/coursesCards/icons/2.svg" alt="icon">
                          </div>
                          <div class="text-14 lh-1">15 juin 2023</div>
                      </div>
  
                      <div class="d-flex items-center">
                          <div class="mr-8">
                              <img src="img/coursesCards/icons/1.svg" alt="icon">
                          </div>
                          <div class="text-14 lh-1">Bénin | Calavi</div>
                      </div>
  
                  </div>
  
                  <div class="py-4">
                      <p style="max-height: 170px; overflow-y: hidden;">
                          Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis dolores recusandae quidem nisi, consequatur atque veniam vel necessitatibus pariatur ex itaque saepe aliquid accusamus consequuntur laborum quae aperiam modi magnam et omnis optio! Nobis necessitatibus molestias pariatur dignissimos explicabo similique ratione neque. Quam voluptatum alias totam error ullam. Consequuntur, aut.
                      </p>
                  </div>
  
                  <div class="d-flex x-gap-10 items-center pt-10">
  
                      <div class="d-flex items-center">
                          <h2>NerdX Digital</h2>
                      </div>
  
                  </div>
  
                  
                </div>
              </a>
  
            </div>
        </div>

        

      </div>

      <div class="row justify-center pt-60 lg:pt-40">
        <div class="col-auto">

          <a href="#" class="button -icon -purple-3 text-purple-1">
            Voir toutes les opportunitées
            <i class="icon-arrow-top-right text-13 ml-10"></i>
          </a>

        </div>
      </div>
    </div>
  </section>
  
  <div class="line px-50">
    <div class="line__item bg-light-5"></div>
  </div>

  <section class="layout-pt-lg layout-pb-lg">
    <div class="container">
      <div class="row y-gap-20 justify-center text-center">
        <div class="col-auto">

          <div class="sectionTitle ">

            <h2 class="sectionTitle__title ">Comment ça marche ?</h2>

            <p class="sectionTitle__text ">Trouvez l'opportunité qui vous convient le mieux</p>

          </div>

        </div>
      </div>

      <div class="row y-gap-30 justify-between pt-60 lg:pt-40">

        <div class="col-xl-2 col-lg-3 col-md-6">
          <div class="d-flex flex-column items-center text-center">
            <div class="relative size-120 d-flex justify-center items-center rounded-full bg-light-4">
              <img src="img/home-3/works/1.svg" alt="image">
              <div class="side-badge">
                <div class="size-35 d-flex justify-center items-center rounded-full bg-dark-1 -dark-bg-purple-1">
                  <span class="text-14 fw-500 text-white">01</span>
                </div>
              </div>
            </div>
            <div class="text-17 fw-500 text-dark-1 mt-30">Parcourez les offres disponibles</div>
          </div>
        </div>


        <div class="col-auto xl:d-none">
          <div class="pt-30">
            <img src="img/misc/lines/1.svg" alt="icon">
          </div>
        </div>


        <div class="col-xl-2 col-lg-3 col-md-6">
          <div class="d-flex flex-column items-center text-center">
            <div class="relative size-120 d-flex justify-center items-center rounded-full bg-light-4">
              <img src="img/home-3/works/2.svg" alt="image">
              <div class="side-badge">
                <div class="size-35 d-flex justify-center items-center rounded-full bg-dark-1 -dark-bg-purple-1">
                  <span class="text-14 fw-500 text-white">02</span>
                </div>
              </div>
            </div>
            <div class="text-17 fw-500 text-dark-1 mt-30">Postulez à celui qui vous convient le mieux.</div>
          </div>
        </div>


        <div class="col-auto xl:d-none">
          <div class="pt-30">
            <img src="img/misc/lines/2.svg" alt="icon">
          </div>
        </div>


        <div class="col-xl-2 col-lg-3 col-md-6">
          <div class="d-flex flex-column items-center text-center">
            <div class="relative size-120 d-flex justify-center items-center rounded-full bg-light-4">
              <img src="img/home-3/works/3.svg" alt="image">
              <div class="side-badge">
                <div class="size-35 d-flex justify-center items-center rounded-full bg-dark-1 -dark-bg-purple-1">
                  <span class="text-14 fw-500 text-white">03</span>
                </div>
              </div>
            </div>
            <div class="text-17 fw-500 text-dark-1 mt-30">Vous recevrez un mail si vous êtes sélectionner.</div>
          </div>
        </div>


      </div>
    </div>
  </section>

  <section class="layout-pt-lg layout-pb-lg section-bg mb-4">
    <div class="section-bg__item bg-light-6"></div>

    <div class="container">
      <div class="row y-gap-20 justify-center text-center">
        <div class="col-auto">

          <div class="sectionTitle ">

            <h2 class="sectionTitle__title ">School Achievements</h2>

            <p class="sectionTitle__text ">Explorer une large game d'opportunité</p>

          </div>

        </div>
      </div>

      <div class="row pt-60">

        <div class="col-lg-4 col-md-6">
          <div class="infoCard -type-2 text-center py-40 -infoCard-hover">
            <div class="infoCard__image">
              <img src="img/home-3/achieve/1.svg" alt="image">
            </div>
            <h5 class="infoCard__title text-24 lh-1 mt-25">350,000+</h5>
            <p class="infoCard__text mt-5">Opportunitées</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="infoCard -type-2 text-center py-40 -infoCard-hover">
            <div class="infoCard__image">
              <img src="img/home-3/achieve/2.svg" alt="image">
            </div>
            <h5 class="infoCard__title text-24 lh-1 mt-25">496,00+</h5>
            <p class="infoCard__text mt-5">Souscriptions</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="infoCard -type-2 text-center py-40 -infoCard-hover">
            <div class="infoCard__image">
              <img src="img/home-3/achieve/4.svg" alt="image">
            </div>
            <h5 class="infoCard__title text-24 lh-1 mt-25">987,000+</h5>
            <p class="infoCard__text mt-5">Embauche</p>
          </div>
        </div>

      </div>
    </div>
  </section>

  <div class="line px-50">
    <div class="line__item bg-light-5"></div>
  </div>

  <section class="layout-pt-lg layout-pb-lg mb-90 section-bg mt-4">
    <div class="section-bg__item">
      <img class="img-full rounded-16" src="img/home-3/cta/bg.png" alt="image">
    </div>

    <div class="container">
      <div class="row justify-center text-center">
        <div class="col-xl-5 col-lg-6 col-md-11">

          <div class="sectionTitle -light">

            <h2 class="sectionTitle__title ">Abonnez-vous à notre Newsletter</h2>

            <p class="sectionTitle__text ">Recevez les dernières opportunités dans votre boîte mail en vous abonnant à notre newsletter.</p>

          </div>

        </div>
      </div>

      <div class="row mt-30 justify-center">
        <div class="col-lg-6">
          <form class="form-single-field -help" action="https://creativelayers.net/themes/educrat-html/post">
            <input type="text" placeholder="Votre Email...">
            <button class="button -purple-1 text-white" type="submit">
              S'abonner
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <footer class="footer -type-5 pt-60">
    <div class="container">

      <div class="py-30 border-top-light">
        <div class="row justify-between items-center y-gap-20">
          <div class="col-auto">
            <div class="footer-footer__copyright d-flex items-center h-100">
              © 2022 Educrat. All Right Reserved.
            </div>
          </div>

          <div class="col-auto">
            <div class="d-flex x-gap-20 y-gap-20 items-center flex-wrap">
              <div>
                <div class="d-flex x-gap-15">
                  <a href="help-center.html">Help</a>
                  <a href="terms.html">Privacy Policy</a>
                  <a href="terms.html">Cookie Notice</a>
                  <a href="terms.html">Security</a>
                  <a href="terms.html">Terms of Use</a>
                </div>
              </div>

              <div>
                <a href="#" class="button -md -light-4 px-20">
                  <i class="icon-worldwide mr-5"></i>English
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

@endsection