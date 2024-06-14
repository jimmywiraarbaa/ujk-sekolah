@extends('layouts.app')
@php
    $title = 'Daftar';
@endphp

@section('content')
    <section class="vh-100 bg-info ">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">

                                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Masuk
                                    </h5>

                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf

                                        <div data-mdb-input-init class="form-outline mb-2">
                                            <label class="form-label" for="name">Nama</label>
                                            <input id="name" type="text"
                                                class="form-control @error('name') is-invalid @enderror" name="name"
                                                value="{{ old('name') }}" required autocomplete="name" autofocus>

                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div data-mdb-input-init class="form-outline mb-2">
                                            <label class="form-label" for="form2Example17">Email address</label>
                                            <input id="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email') }}" required autocomplete="email" autofocus>

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div data-mdb-input-init class="form-outline mb-2">
                                            <label class="form-label" for="form2Example27">Password</label>
                                            <input id="password" type="password"
                                                class="form-control @error('password') is-invalid @enderror" name="password"
                                                required autocomplete="current-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div data-mdb-input-init class="form-outline mb-2">
                                            <label class="form-label" for="password-confirm">Password</label>
                                            <input id="password-confirm" type="password" class="form-control"
                                                name="password_confirmation" required autocomplete="new-password">
                                        </div>

                                        <div class="pt-1 mb-4">
                                            <button class="btn btn-dark btn-lg btn-block" type="submit">Daftar</button>
                                        </div>
                                    </form>
                                    <p class="" style="color: #393f81;">Sudah punya akun? <a
                                            href="{{ route('login') }}" style="color: #393f81;">Masuk disini</a>
                                    </p>

                                </div>
                            </div>
                            <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <img src="{{ asset('images/school/login.jpg') }}" alt="login form"
                                    class="img-thumbnail border-0" style="border-radius: 0 1rem 1rem 0;" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
