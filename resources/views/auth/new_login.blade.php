@extends('layouts.app')
@section('content')

<!-- Login 9 - Bootstrap Brain Component -->
<section class="bg-primary py-3 py-md-5 py-xl-8">
    <div class="container">
        <div class="row gy-4 align-items-center">
            <div class="col-12 col-md-6 col-xl-7">
                <div class="d-flex justify-content-center text-bg-primary">
                    <div class="col-12 col-xl-9">
                        <img class="img-fluid rounded mb-4" loading="lazy" src="./assets/img/bsb-logo-light.svg"
                            width="245" height="80" alt="BootstrapBrain Logo">
                        <hr class="border-primary-subtle mb-4">
                        <h2 class="h1 mb-4">We make digital products that drive you to stand out.</h2>
                        <p class="lead mb-5">We write words, take photos, make videos, and interact with artificial
                            intelligence.</p>
                        <div class="text-endx">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor"
                                class="bi bi-grip-horizontal" viewBox="0 0 16 16">
                                <path
                                    d="M2 8a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm0-3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm3 3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm0-3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm3 3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm0-3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm3 3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm0-3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm3 3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm0-3a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-xl-5">
                <div class="card border-0 rounded-4">
                    <div class="card-body p-3 p-md-4 p-xl-5">
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-4">
                                    <h3>Sign in</h3>
                                </div>
                            </div>
                        </div>
                        <form method="POST" action="#!">
                            @csrf

                            <div class="row gy-3 overflow-hidden">
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <select class="form-control" name="number" id="number" required>
                                            <option value="">Pilih Sebagai</option>
                                            <option value="koordinator">Koordinator</option>
                                            <option value="doseno">Dosen</option>
                                            <option value="mahasiswa">Mahasiswa</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="number" class="form-control" name="number" id="number"
                                            placeholder="2008107010083" required>
                                        <label for="email" class="form-label">NPM/NIP</label>
                                    </div>
                                </div>
                                @error('number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            id="password" value="" placeholder="Password" required
                                            autocomplete="current-password">
                                        <label for="password" class="form-label">Password</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" name="remember_me"
                                            id="remember_me">
                                        <label class="form-check-label text-secondary" for="remember_me">
                                            Keep me logged in
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="d-grid">
                                        <button class="btn btn-primary btn-lg" type="submit">Log in now</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection