<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" key="t-menu">Menu</li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="bx bx-home-circle"></i><span class="badge badge-pill badge-info float-right"></span>
                        <span key="t-dashboards">SENA 2021</span>

                    </a>

                    <!--<ul class="sub-menu" aria-expanded="false">
                        <li><a href="index.html" key="t-default">Default</a></li>
                        <li><a href="dashboard-saas.html" key="t-saas">Saas</a></li>
                        <li><a href="dashboard-crypto.html" key="t-crypto">Crypto</a></li>
                    </ul>-->
                </li>

                <li>
                     <a href="javascript: void(0);" class="has-arrow waves-effect">
                         <i class="bx bx-layout"></i>
                         <span key="t-layouts">Fichas y mucho mas</span>
                     </a>
                     <ul class="sub-menu" aria-expanded="false">
                         <a href="{{route('dashboard.perfil')}}">Perfil</a>
                         <a href="{{route('dashboard.index')}}">Index</a>
                         <a href="{{route('ficha.index')}}">Ficha</a>
                         <a href="{{route('Aprendiz.index')}}">Aprendices</a>
                         <a href="{{route('Instructor.index')}}">Instructor</a>
                     </ul>
                 </li>


             </ul>
         </div>
         <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
