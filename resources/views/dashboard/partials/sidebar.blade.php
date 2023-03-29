<div class="vertical-menu">

    <div data-simplebar class="h-100">
        <!-- User details -->
        <div class="user-profile text-center mt-3">
            <div class="">
                <img src="{{ asset('dashboard/images/users/avatar-1.jpg') }}" alt="" class="avatar-md rounded-circle">
            </div>
            <div class="mt-3">
                <h4 class="font-size-16 mb-1">User name</h4>
                <span class="text-muted"><i class="ri-record-circle-line align-middle font-size-14 text-success"></i> Online</span>
            </div>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">ECOMMERCE</li>
                <li>
                    <a href="{{ route('admin.dashboard') }}" class="waves-effect">
                        <i class="ri-dashboard-line"></i><span class="badge rounded-pill bg-success float-end">3</span>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span>Замовлення</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#">Всі замовлення</a></li>
                        <li><a href="#">Продані</a></li>
                        <li><a href="#">Створені</a></li>
                        <li><a href="#">Відхилені</a></li>                                         
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span>Товари</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#">Всі товари</a></li>
                        <li><a href="#">Додати товар</a></li>
                        <li><a href="#">Архів</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-layout-3-line"></i>
                        <span>Категорізація</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">Категорії товарів </a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="#">Основні Категорії</a></li>
                                <li><a href="#">Підкатегорії</a></li>
                                <li><a href="#">Під підкатегорії</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" class=" waves-effect">
                        <i class="ri-calendar-2-line"></i>
                        <span>Бренди</span>
                    </a>
                </li>   
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>