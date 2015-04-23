<!-- BEGIN SIDEBAR MENU -->
<ul class="page-sidebar-menu page-sidebar-menu-hover-submenu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
    <li class="start active ">
        <a href="index.html">
            <i class="icon-home"></i>
            <span class="title">Dashboard</span>
            <span class="selected"></span>
        </a>
    </li>
    <li>
        <a href="javascript:;">
            <i class="icon-basket"></i>
            <span class="title">Karyawan</span>
            <span class="arrow "></span>
        </a>
        <ul class="sub-menu">
            <li>
                <a href="{!! route('employee.index') !!}">
                    <i class="icon-home"></i>
                    Database Karyawan</a>
            </li>
        </ul>
    </li>
    <li class="last ">
        <a href="javascript:;">
            <i class="icon-pointer"></i>
            <span class="title">Laporan</span>
            <span class="arrow "></span>
        </a>
        <ul class="sub-menu">
            <li>
                <a href="maps_google.html">
                    Detail Kehadiran</a>
            </li>
            <li>
                <a href="maps_vector.html">
                    Rekap Kehadiran</a>
            </li>
        </ul>
    </li>
</ul>
<!-- END SIDEBAR MENU -->