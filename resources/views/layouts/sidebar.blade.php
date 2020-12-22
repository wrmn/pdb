<div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
    <div class="c-sidebar-brand d-lg-down-none">
        SIP
    </div>
    <ul class="c-sidebar-nav ps">
        <li class="c-sidebar-nav-item">
            <a href="{{ route('penduduk.index') }}" class="c-sidebar-nav-link">
                <i class="c-sidebar-nav-icon cil-people"></i>Pengelolaan Penduduk</a>
        </li>

        <li class="c-sidebar-nav-item">
            <a href="{{ route('keluarga.index') }}" class="c-sidebar-nav-link">
                <i class="c-sidebar-nav-icon cil-featured-playlist"></i> Pengelolaan Kartu Keluarga</a>
        </li>

        <li class="c-sidebar-nav-item">
            <a href="{{ route('produktif') }}" class="c-sidebar-nav-link">
                <i class="c-sidebar-nav-icon cil-file"></i>Laporan Usia Produktif</a>
        </li>

        <li class="c-sidebar-nav-item">
            <a href="{{ route('nagari') }}" class="c-sidebar-nav-link">
                <i class="c-sidebar-nav-icon cil-file"></i>Laporan Penduduk Tiap Nagari</a>
        </li>

        <li class="c-sidebar-nav-item">
            <a href="{{ route('educate') }}" class="c-sidebar-nav-link">
                <i class="c-sidebar-nav-icon cil-file"></i>Laporan Penduduk SMP</a>
        </li>
    </ul>
    <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-minimized"></button>
</div>
