{{-- Nav --}}
<div class="nav-scroller py-1 px-3 mb-3 border-bottom">
    <nav class="nav nav-underline justify-content-between">
        <a class="nav-item nav-link link-body-emphasis {{ request()->routeIs('index_school') ? 'active' : '' }}"
            href="{{ route('index_school') }}">Beranda</a>
        <a class="nav-item nav-link link-body-emphasis {{ request()->routeIs('index_profile') ? 'active' : '' }}"
            href="{{ route('index_profile') }}">Profile Sekolah</a>
        <a class="nav-item nav-link link-body-emphasis {{ request()->routeIs('index_ekstrakurikuler') ? 'active' : '' }}"
            href="{{ route('index_ekstrakurikuler') }}">Ekstrakurikuler</a>
        <a class="nav-item nav-link link-body-emphasis {{ request()->routeIs('index_gallery') ? 'active' : '' }}"
            href="{{ route('index_gallery') }}">Galeri</a>
        <a class="nav-item nav-link link-body-emphasis {{ request()->routeIs('index_news') ? 'active' : '' }}"
            href="{{ route('index_news') }}">Berita</a>
        <a class="nav-item nav-link link-body-emphasis {{ request()->routeIs('index_prestasi') ? 'active' : '' }}"
            href="{{ route('index_prestasi') }}">Prestasi</a>
    </nav>
</div>
{{-- Nav --}}
