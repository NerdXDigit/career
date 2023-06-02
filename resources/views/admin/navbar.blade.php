  <!-- Dashboard -->
  <li class="menu-item active">
    <a href="{{url('espace/admin')}}" class="menu-link">
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
        <a href="{{url('espace/admin/addoffer')}}" class="menu-link">
          <div data-i18n="Without menu">Ajouter une offre</div>
        </a>
      </li>
      <li class="menu-item">
        <a href="{{url('espace/admin/listoffer')}}" class="menu-link">
          <div data-i18n="Without menu">Mes offres</div>
        </a>
      </li>
      <li class="menu-item">
        <a href="{{url('espace/admin/candidats')}}" class="menu-link">
          <div data-i18n="Without menu">Mes Postulants</div>
        </a>
      </li>
      <li class="menu-item">
        <a href="{{url('espace/admin/editprofil')}}" class="menu-link">
          <div data-i18n="Without menu">Mon profil</div>
        </a>
      </li>
    </ul>
  </li>
  <li class="menu-item open">
    <a href="" class="menu-link menu-toggle">
      <i class="menu-icon tf-icons bx bx-layout"></i>
      <div data-i18n="Layouts">Espace Admin</div>
    </a>

    <ul class="menu-sub">
      <li class="menu-item">
        <a href="{{url('espace/admin/demandeurs')}}" class="menu-link">
          <div data-i18n="Without menu">Liste demandeurs</div>
        </a>
      </li>
      <li class="menu-item">
        <a href="{{url('espace/admin/offreurs')}}" class="menu-link">
          <div data-i18n="Without menu">Liste offreurs</div>
        </a>
      </li>
      <li class="menu-item">
        <a href="{{url('espace/admin/comptesdesactive')}}" class="menu-link">
          <div data-i18n="Without menu">Comptes désactivé</div>
        </a>
      </li>
      <li class="menu-item">
        <a href="{{url('espace/admin/addoffreur')}}" class="menu-link">
          <div data-i18n="Without menu">Creer compte offreurs</div>
        </a>
      </li>
    </ul>
  </li>