<li class="nav-item">
    <a href="{{ route('mahasiswas.index') }}"
       class="nav-link {{ Request::is('mahasiswa*') ? 'active' : '' }}">
        <p>Mahasiswa</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('dosens.index') }}"
       class="nav-link {{ Request::is('dosens*') ? 'active' : '' }}">
        <p>Dosen</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('makuls.index') }}"
       class="nav-link {{ Request::is('makuls*') ? 'active' : '' }}">
        <p>Mata Kuliah</p>
    </a>
</li>


