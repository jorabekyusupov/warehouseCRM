<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item " style="width: calc(100% - 27px)">
                <a class="navbar-brand" href="">

                    <img id="LogoAPP" src="" style="width: 50%;">
                </a>
            </li>
            <li class="nav-item nav-toggle">
                <a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse">
                    <i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i>
                    <i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc"
                       data-ticon="disc"></i>
                </a>
            </li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">



                <li class="  ">
                    <a class="d-flex align-items-center" href="{{route('warehouse.index')}}">
                        <i data-feather='shopping-bag'></i>
                        <span class="menu-title text-truncate" data-i18n="Orders">{{__('pages.warehouse')}}</span>

                    </a>
                </li>
            <li class="  ">
                <a class="d-flex align-items-center" href="{{route('product.index')}}">
                    <i data-feather='shopping-bag'></i>
                    <span class="menu-title text-truncate" data-i18n="Orders">{{__('pages.products')}}</span>

                </a>
            </li>
            <li class="  ">
                <a class="d-flex align-items-center" href="{{route('stock.arrival')}}">
                    <i data-feather='shopping-bag'></i>
                    <span class="menu-title text-truncate" data-i18n="Orders">{{__('pages.arrival')}}</span>

                </a>
            </li>




        </ul>
    </div>
</div>
