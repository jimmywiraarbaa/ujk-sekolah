@extends('layouts.app')

@section('content')
    @include('layouts.header')
    <div class="container">
        @include('layouts.nav')

        <h2 class="text-center text-decoration-underline">{{ $title }} SMKN 5 Padang</h2>

        <main>

            <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class=""
                        aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"
                        class="active" aria-current="true"></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"
                        class=""></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item">
                        <img src="{{ asset('images/school/carousel/carousel1.jpg') }}" alt="Slide 1" class="w-100">
                        <div class="container">
                            <div class="carousel-caption text-start">
                                <h1>SMKN 5 Padang</h1>
                                <p class="opacity-75">Sekolah Menengah Kejuruan unggulan di Padang dengan berbagai program
                                    studi dan fasilitas modern.</p>
                                <p><a class="btn btn-lg btn-primary" href="#">Lihat detail »</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item active">
                        <img src="{{ asset('images/school/carousel/carousel2.jpg') }}" alt="Slide 2" class="w-100">
                        <div class="container">
                            <div class="carousel-caption">
                                <h1>Fasilitas Terbaik</h1>
                                <p>SMKN 5 Padang dilengkapi dengan laboratorium komputer, perpustakaan modern, dan ruang
                                    praktik yang memadai.</p>
                                <p><a class="btn btn-lg btn-primary" href="#">Lihat detail »</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/school/carousel/carousel3.jpg') }}" alt="Slide 3" class="w-100">
                        <div class="container">
                            <div class="carousel-caption text-end">
                                <h1>Kurikulum Inovatif</h1>
                                <p class="">SMKN 5 Padang menawarkan kurikulum yang terus dikembangkan sesuai dengan
                                    kebutuhan
                                    industri.</p>
                                <p><a class="btn btn-lg btn-primary" href="#">Lihat detail »</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>


            <div class="container">

                <div class="row mt-5">
                    <div class="col-lg-4 text-center p-3">
                        <div class="border border-black rounded-4 p-4">
                            <svg class="bd-placeholder-img rounded-circle" width="140" height="140"
                                xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder"
                                preserveAspectRatio="xMidYMid slice" focusable="false">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect>
                            </svg>
                            <h2 class="fw-normal">Visi</h2>
                            <p>Menjadi pusat pendidikan kejuruan unggulan yang berorientasi pada inovasi dan teknologi.</p>
                            <p><a class="btn btn-secondary" href="#">Lihat detail »</a></p>
                        </div>
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4 text-center p-3">
                        <div class="border border-black rounded-4 p-4">
                            <svg class="bd-placeholder-img rounded-circle" width="140" height="140"
                                xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder"
                                preserveAspectRatio="xMidYMid slice" focusable="false">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect>
                            </svg>
                            <h2 class="fw-normal">Misi</h2>
                            <p>Mengembangkan potensi siswa dalam bidang akademik dan non-akademik sesuai dengan tuntutan
                                dunia kerja.</p>
                            <p><a class="btn btn-secondary" href="#">Lihat detail »</a></p>
                        </div>
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4 text-center p-3">
                        <div class="border border-black rounded-4 p-4">
                            <svg class="bd-placeholder-img rounded-circle" width="140" height="140"
                                xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder"
                                preserveAspectRatio="xMidYMid slice" focusable="false">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect>
                            </svg>
                            <h2 class="fw-normal">Program Unggulan</h2>
                            <p>Mendorong kolaborasi industri dan pengembangan keterampilan berbasis teknologi.</p>
                            <p><a class="btn btn-secondary" href="#">Lihat detail »</a></p>
                        </div>
                    </div><!-- /.col-lg-4 -->
                </div>

                <hr class="featurette-divider">

                <div class="row featurette">
                    <div class="col-md-7">
                        <h2 class="featurette-heading fw-normal lh-1">Profil SMKN 5 Padang<span
                                class="text-body-secondary">: Menyediakan Pendidikan Berkualitas untuk Masa Depan.</span>
                        </h2>
                        <p class="lead">SMKN 5 Padang adalah lembaga pendidikan menengah kejuruan yang bertujuan untuk
                            memberikan pendidikan yang berkualitas dan relevan sesuai dengan tuntutan dunia industri saat
                            ini. Dengan kurikulum yang dikembangkan secara cermat, sekolah ini mempersiapkan siswa untuk
                            sukses dalam karir mereka.</p>
                    </div>
                    <div class="col-md-5">
                        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                            src="{{ asset('images/school/profile/profile1.jpg') }}" alt="Placeholder: 500x500">
                    </div>
                </div>

                <hr class="featurette-divider">

                <div class="row featurette">
                    <div class="col-md-7 order-md-2">
                        <h2 class="featurette-heading fw-normal lh-1">Komunitas Siswa dan Guru yang Solid<span
                                class="text-body-secondary">: Membangun Karakter dan Kolaborasi.</span></h2>
                        <p class="lead">Di SMKN 5 Padang, tercipta lingkungan yang mendukung pembelajaran kolaboratif dan
                            pengembangan karakter siswa. Komunitas siswa dan guru yang solid membantu menciptakan atmosfer
                            belajar yang positif dan mendukung.</p>
                    </div>
                    <div class="col-md-5 order-md-1">
                        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                            src="{{ asset('images/school/profile/profile2.jpg') }}" alt="Placeholder: 500x500">
                    </div>
                </div>

                <hr class="featurette-divider">

                <div class="row featurette">
                    <div class="col-md-7">
                        <h2 class="featurette-heading fw-normal lh-1">Inovasi dalam Pendidikan<span
                                class="text-body-secondary">: Mempersiapkan Siswa untuk Tantangan Global.</span></h2>
                        <p class="lead">SMKN 5 Padang terus berinovasi dalam pendidikan untuk mempersiapkan siswa
                            menghadapi tantangan global. Dengan program pembelajaran yang berorientasi pada teknologi dan
                            keterampilan yang dibutuhkan industri, sekolah ini mengembangkan potensi siswa untuk masa depan
                            yang cerah.</p>
                    </div>
                    <div class="col-md-5">
                        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                            src="{{ asset('images/school/profile/profile3.jpg') }}" alt="Placeholder: 500x500">
                    </div>
                </div>

                <hr class="featurette-divider">


                <!-- /END THE FEATURETTES -->

            </div>
        </main>
    </div>
    @include('layouts.footer')
@endsection
