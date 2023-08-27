  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('admin.index') }}" class="brand-link">
      <img src="{{ asset('assets/images/logo/logos.png') }}" alt="Travelist Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">TRAVELIST</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li>
            <a href="#">
                <p>
                  <i class="fa fa-suitcase" style="color: #c0bfbc;"></i>
                  Замовлення
                </p>  
            </a>
          </li>
          <li>
            <a href="{{ route('admin.group.index') }}">
                <p>
                  <i class="fa fa-layer-group" style="color: #c0bfbc;"></i>
                  Групи
                </p>  
            </a>
          </li>
          <li>
            <a href="{{ route('admin.tiket.index') }}">
                <p>
                  <i class="fa fa-money-bill" style="color: #c0bfbc;"></i>
                  Квиткі
                </p>  
            </a>
          </li>
          <li>
            <a href="{{ route('admin.city.index') }}">
                <p>
                  <i class="fa fa-city" style="color: #c0bfbc;"></i>
                  Міста
                </p>  
            </a>
          </li>
          <li>
            <a href="{{ route('admin.bus.index') }}">
                <p>
                  <i class="fa fa-bus" style="color: #c0bfbc;"></i>
                  Транспорт
                </p>  
            </a>
          </li>
          <li>
            <a href="{{ route('admin.themecite.index') }}">
                <p>
                  <i class="fa fa-image" style="color: #c0bfbc;"></i>
                  Тема Сайту
                </p>  
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>