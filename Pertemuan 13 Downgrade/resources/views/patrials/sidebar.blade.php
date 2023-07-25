<div id="sidebar" class="active" style="background-color:rgb(238, 238, 238)">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <img src="assets/images/logo/logo-pradita.png" alt="Logo" srcset="" style="width: 60%; height: 100%; margin-left:8px "></a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>

        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Jawa Barat</li>

                <li class="sidebar-item {{ Request::is('beranda') ? 'active' : '' }}">
                    <a href="{{ route('web.index') }}" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Beranda</span>
                    </a>
                </li>

                <li class="sidebar-item {{ Request::is('tentang-kami') ? 'active' : '' }}">
                    <a href="{{ route('web.about') }}" class='sidebar-link'>
                        <i class="bi bi-person-circle"></i>
                        <span>Tentang Kami</span>
                    </a>
                </li>

                <li class="sidebar-item has-sub {{ Request::is('peta*') ? 'active' : '' }}">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-map"></i>
                        <span>Detail</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item {{ Request::is('petajumlahpenduduk') ? 'active' : '' }}">
                            <a href="{{ route('web.jumlahpenduduk') }}">
                                <i class="bi bi-people"></i>
                                <span>Jumlah Penduduk</span>
                            </a>
                        </li>

                        <li class="submenu-item {{ Request::is('petajumlahpendudukmiskin') ? 'active' : '' }}">
                            <a href="{{ route('web.jumlahpendudukmiskin') }}">
                                <i class="bi bi-person-lines-fill"></i>
                                <span>Jumlah Penduduk Miskin</span>
                            </a>
                        </li>

                        <li class="submenu-item {{ Request::is('petaangkaharapanhidup') ? 'active' : '' }}">
                            <a href="{{ route('web.angkaharapanhidup') }}">
                                <i class="bi bi-person-plus-fill"></i>
                                <span>Angka Harapan Hidup</span>
                            </a>
                        </li>

                        <li class="submenu-item {{ Request::is('petajumlahpengangguran') ? 'active' : '' }}">
                            <a href="{{ route('web.jumlahpengangguran') }}">
                                <i class="bi bi-person-dash-fill"></i>
                                <span>Jumlah Pengangguran</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item {{ Request::is('kesimpulan') ? 'active' : '' }}">
                    <a href="{{ route('web.kesimpulan') }}" class='sidebar-link'>
                        <i class="bi bi-file-earmark-medical-fill"></i>
                        <span>Kesimpulan</span>
                    </a>
                </li>
            </ul>
        </div>


    </div>
</div>
