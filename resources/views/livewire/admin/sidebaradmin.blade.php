<!--Start sidebar-wrapper-->
<div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
    <div class="brand-logo container">
        <a href="{{ route('welcome') }}">
            <img src="{{ asset('img/icon.png') }}" class="logo-icon" alt="logo icon">
        </a>
    </div>
    <ul class="sidebar-menu do-nicescrol">
        <li class="sidebar-header">Menú</li>
        <li>
            <a href="{{ route('admin') }}">
                <i class="zmdi zmdi-view-compact"></i> <span>Panel de control</span>
            </a>
        </li>

        <li>
            <a href="{{ route('Category.index') }}">
                <i class="zmdi zmdi-memory"></i> <span>Categoría</span>
            </a>
        </li>

        <li>
            <a href="#">
                <i class="zmdi zmdi-laptop"></i> <span>Producto software</span>
            </a>
        </li>

        <li>
            <a href="#">
                <i class="zmdi zmdi-laptop"></i> <span>Producto dispositivos</span>
            </a>
        </li>

        <li>
            <a href="{{ route('Product.index') }}">
                <i class="zmdi zmdi-laptop"></i> <span>Producto en el sitio web</span>
            </a>
        </li>

        <li>
            <a href="{{ route('User.index') }}">
                <i class="zmdi zmdi-account"></i> <span>Usuario</span>
            </a>
        </li>

        <li class="sidebar-header">Finanzas</li>

        
        <li>
            <a href="tables.html">
                <i class="zmdi zmdi-paypal-alt"></i> <span>Venta</span>
            </a>
        </li>
        <li>
            <a href="tables.html">
                <i class="zmdi zmdi-n-1-square"></i> <span>Calculo Empresarial</span>
            </a>
        </li>
        <li>
            <a href="tables.html">
                <i class="zmdi zmdi-pin"></i> <span>Pedidos de productos</span>
            </a>
        </li>
        <!--
          <li class="sidebar-header">LABELS</li>
      <li><a href="javaScript:void();"><i class="zmdi zmdi-chart-donut text-success"></i> <span>Warning</span></a>
      </li>
      <li><a href="javaScript:void();"><i class="zmdi zmdi-share text-info"></i> <span>Information</span></a></li>

    -->


    </ul>

</div>
<!--End sidebar-wrapper-->
