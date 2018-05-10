<div class="main-menu">
    <div class="main-menu-header">
        <img class="img-40" src="{{URL::to('/')}}/back/assets/images/user.png" alt="User-Profile-Image">
        <div class="user-details">
            <span>{{ Auth::user()->name }}</span>
            <span id="more-details">Terza CMS<i class="ti-angle-down"></i></span>
        </div>
    </div>
    <div class="main-menu-content">
        <ul class="main-navigation">
            <li class="more-details">
                <a href="{{URL::to('cms/dashboard')}}"><i class="ti-user"></i>Mi Pérfil</a>
                <a href="{{URL::to('cms/account/logout')}}"><i class="ti-layout-sidebar-left"></i>Logout</a>
            </li>

            <li class="nav-item">
                <a href="#!">
                    <i class="ti-settings"></i>
                    <span data-i18n="nav.dash.main">Sistema</span>
                </a>

                <ul class="tree-1">
                    <li>
                        <a href="{{URL::to('cms/dashboard/system/user')}}" data-i18n="nav.dash.default">Usuario </a></li>
                    <li>
                </ul>
            </li>

            {{-- Catálogs --}}
            <li class="nav-item">
                <a href="#!">
                    <i class="ti-settings"></i>
                    <span data-i18n="nav.dash.main">Catálogos</span>
                </a>

                <!--ul class="tree-1">
                    <li class="has-class">
                        <a href="{{URL::to('cms/dashboard/catalog/type')}}" data-i18n="nav.dash.default">Tipos </a></li>
                    <li>
                </ul-->

                <ul class="tree-1">
                    <li>
                        <a href="{{URL::to('cms/dashboard/catalog/brand')}}" data-i18n="nav.dash.default">Marcas </a></li>
                    <li>
                </ul>

                <ul class="tree-1">
                    <li>
                        <a href="{{URL::to('cms/dashboard/catalog/color')}}" data-i18n="nav.dash.default">Colores </a></li>
                    <li>
                </ul>

                <ul class="tree-1">
                    <li>
                        <a href="{{URL::to('cms/dashboard/catalog/design')}}" data-i18n="nav.dash.default">Estilos </a></li>
                    <li>
                </ul>

                <ul class="tree-1">
                    <li>
                        <a href="{{URL::to('cms/dashboard/catalog/use')}}" data-i18n="nav.dash.default">Usos </a></li>
                    <li>
                </ul>

                <ul class="tree-1">
                    <li>
                        <a href="{{URL::to('cms/dashboard/catalog/finish')}}" data-i18n="nav.dash.default">Acabados </a></li>
                    <li>
                </ul>

                <ul class="tree-1">
                    <li>
                        <a href="{{URL::to('cms/dashboard/catalog/tone')}}" data-i18n="nav.dash.default">Tonos </a></li>
                    <li>
                </ul>

            </li>

            {{-- Catálogs --}}
            <li class="nav-item">
                <a href="#!">
                    <i class="ti-settings"></i>
                    <span data-i18n="nav.dash.main">Productos</span>
                </a>

                <ul class="tree-1">
                    <li>
                        <a href="{{URL::to('cms/dashboard/product/carpet')}}" data-i18n="nav.dash.default">Alfombras </a></li>
                    <li>
                </ul>            

                <ul class="tree-1">
                    <li>
                        <a href="{{URL::to('cms/dashboard/product/laminate')}}" data-i18n="nav.dash.default">Laminados </a></li>
                    <li>
                </ul>            

                <ul class="tree-1">
                    <li>
                        <a href="{{URL::to('cms/dashboard/product/wood')}}" data-i18n="nav.dash.default">Maderas </a></li>
                    <li>
                </ul>            

                <ul class="tree-1">
                    <li>
                        <a href="{{URL::to('cms/dashboard/product/rug')}}" data-i18n="nav.dash.default">Tapetes </a></li>
                    <li>
                </ul>            

                <ul class="tree-1">
                    <li>
                        <a href="{{URL::to('cms/dashboard/product/vinyl')}}" data-i18n="nav.dash.default">Viniles </a></li>
                    <li>
                </ul>            

                <ul class="tree-1">
                    <li>
                        <a href="{{URL::to('cms/dashboard/product/grass')}}" data-i18n="nav.dash.default">Pastos </a></li>
                    <li>

                </ul>
            </li>

            <li class="nav-item">
                <a href="#!">
                    <i class="ti-settings"></i>
                    <span data-i18n="nav.dash.main">Reportes</span>
                </a>

                <ul class="tree-1">
                    <li>
                        <a href="{{URL::to('cms/dashboard/report/contact_info')}}" data-i18n="nav.dash.default">Gráfica de contactos recibidos por día</a></li>
                    <li>
                </ul>

                <ul class="tree-1">
                    <li>
                        <a href="{{URL::to('cms/dashboard/product/email')}}" data-i18n="nav.dash.default">Contactos recibidos</a></li>
                    <li>
                </ul>

            </li>

        </ul>

    </div>
</div>