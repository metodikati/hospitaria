<div class="main-menu">
    <div class="main-menu-header">
        <img class="img-40" src="{{URL::to('/')}}/back/assets/images/user.png" alt="User-Profile-Image">
        <div class="user-details">
            <span>{{ Auth::user()->name }}</span>
            {{--<span id="more-details">{{ Auth::user()->userGroup->name }}<i class="ti-angle-down"></i></span>--}}
        </div>
    </div>
    <div class="main-menu-content">
        <ul class="main-navigation">
            <li class="more-details">
                <a href="{{URL::to(Config::get('app.base_url_admin'))}}"><i class="ti-user"></i>Mi Pérfil</a>
                <a href="{{URL::to('account/logout')}}"><i class="ti-layout-sidebar-left"></i>Logout</a>
            </li>

            {{-- Menu --}}
            <li class="nav-item">
            	<a href="#!">
            		<i class=""></i>
            		<span data-i18n="nav.dash.main">Sistema</span>
            	</a>

            	<ul class="tree-1">
					   <li class="has-class">
					       <a href="{{URL::to(Config::get('app.base_url_admin'). '/system/user')}}" data-i18n="nav.dash.default">Usuarios </a></li>
					   <li>
				</ul>

                <!--<ul class="tree-1">
                       <li class="has-class">
                           <a href="{{--URL::to(Config::get('app.base_url_admin'). '/system/profile')--}}" data-i18n="nav.dash.default">Perfil de Usuarios </a></li>
                       <li>
                </ul>-->
            </li>
            <li class="nav-item">
                <a href="{{URL::to(Config::get('app.base_url_admin'). '/especialidades')}}">
                    <i class=""></i>Especialidades
                </a>
            </li>
            <li class="nav-item">
                <a href="{{URL::to(Config::get('app.base_url_admin'). '/doctores')}}">
                    <i class=""></i>Doctores
                </a>
            </li>


            <li class="nav-item">
                <a href="#!">
                    <i class=""></i>
                    <span data-i18n="nav.dash.main">Reportes</span>
                </a>

                <ul class="tree-1">
                    <li class="has-class">
                        <a href="{{ url('admin/dashboard/grafica_contactos_recibidos') }}" data-i18n="nav.dash.default">Gráfica de contactos recibidos por día</a></li>
                    <li>
                </ul>

                <ul class="tree-1">
                    <li class="has-class">
                        <a href="{{ url('admin/dashboard/contactos_recibidos') }}" data-i18n="nav.dash.default">Contactos recibidos</a></li>
                    <li>
                </ul>
            </li>


            <!--<li class="nav-item">
                <a href="{-{URL::to(Config::get('app.base_url_admin'). '/categorias')}}">
                    <i class=""></i>Categorias
                </a>
            </li>
            <li class="nav-item">
                <a href="{-{URL::to(Config::get('app.base_url_admin'). '/cotizador')}}">
                    <i class=""></i>Cotizador
                </a>
            </li>-->
        </ul>
    </div>
</div>
