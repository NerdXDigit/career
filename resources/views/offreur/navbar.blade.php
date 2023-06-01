  <!-- Dashboard -->
  <li class="menu-item active">
    <a href="{{url('espace/offreur')}}" class="menu-link">
      <i class="menu-icon tf-icons bx bx-home-circle"></i>
      <div data-i18n="Analytics">Dashboard</div>
    </a>
  </li>
 <!-- Layouts -->
 <li class="menu-item open">
    <a href="" class="menu-link menu-toggle">
      <i class="menu-icon tf-icons bx bx-layout"></i>
      <div data-i18n="Layouts">Espace Recruteur</div>
    </a>

    <ul class="menu-sub">
      <li class="menu-item">
        <a href="{{url('espace/offreur/addoffer')}}" class="menu-link">
          <div data-i18n="Without menu">Ajouter une offre</div>
        </a>
      </li>
      <li class="menu-item">
        <a href="{{url('espace/offreur/listoffer')}}" class="menu-link">
          <div data-i18n="Without menu">Mes offres</div>
        </a>
      </li>
      <li class="menu-item">
        <a href="{{url('espace/offreur/candidats')}}" class="menu-link">
          <div data-i18n="Without menu">Mes Postulants</div>
        </a>
      </li>
    </ul>
  </li>