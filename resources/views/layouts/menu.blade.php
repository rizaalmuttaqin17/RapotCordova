<div class="deznav-scroll">
    <ul class="metismenu" id="menu">
        <li class="nav-item">
            <a href="{{ route('home') }}" class="nav-link {{ Request::is('home*')||Request::is('home*') ? 'active' : '' }}">
                <i class="fa fa-home"></i>
                <span class="nav-text">Home</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('guru') }}" class="nav-link {{ Request::is('guru*')||Request::is('guru*') ? 'active' : '' }}">
                <i class="fa fa-home"></i>
                <span class="nav-text">Guru</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('siswa') }}" class="nav-link {{ Request::is('siswa*')||Request::is('siswa*') ? 'active' : '' }}">
                <i class="fa fa-home"></i>
                <span class="nav-text">Siswa</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('mata_pelajaran') }}" class="nav-link {{ Request::is('mata_pelajaran*')||Request::is('mata_pelajaran*') ? 'active' : '' }}">
                <i class="fa fa-home"></i>
                <span class="nav-text">Mata Pelajaran</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('rapot') }}" class="nav-link {{ Request::is('rapot*')||Request::is('rapot*') ? 'active' : '' }}">
                <i class="fa fa-home"></i>
                <span class="nav-text">Rapot</span>
            </a>
        </li>
    </ul>
</div>