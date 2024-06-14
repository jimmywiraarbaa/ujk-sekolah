@extends('layouts.app')

@section('content')
    @include('layouts.header')
    <div class="container">
        @include('layouts.nav')

        {{-- Hero --}}
        <div class="col-xxl-8 px-4 py-4">
            <div class="row d-flex justify-content-lg-between flex-lg-row-reverse align-items-center g-5 py-5">
                <div class="col-12 col-sm-8 col-lg-5 d-flex justify-content-center justify-content-lg-start">
                    <img src="{{ asset('images/school/stm1.jpg') }}" alt="SMK Negeri 5 Padang" loading="lazy"
                        class="w-100 rounded">
                </div>
                <div class="col-lg-6">
                    <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">SMK Negeri 5 Padang</h1>
                    <p class="lead">SMK Negeri 5 Padang (dahulu bernama STM Negeri 2 Padang) adalah sekolah menengah
                        kejuruan
                        negeri yang terletak di Jalan Beringin Nomor 4, Kelurahan Lolong Belanti, Kecamatan Padang Utara,
                        Kota
                        Padang.</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                        <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Maps</button>
                        <button type="button" class="btn btn-outline-secondary btn-lg px-4">Contact</button>
                    </div>
                </div>
            </div>
        </div>
        {{-- Hero --}}

        {{-- Informasi --}}
        <div class="information my-3">
            <h2 class="text-center text-decoration-underline ">Informasi</h2>
            @include('layouts.informasi')
        </div>
        {{-- Informasi --}}

        {{-- News --}}
        <div class="news my-3">
            <h2 class="text-center text-decoration-underline ">Berita</h2>
            @include('layouts.berita')
        </div>
        {{-- News --}}

    </div>

    @include('layouts.footer')
@endsection
