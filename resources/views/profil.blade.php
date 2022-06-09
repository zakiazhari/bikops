@extends('layout')

@section('content')
    <div class="m-5" style="min-height: 100vh">
        <div class="uk-card uk-card-default uk-card-body">
            <div class="uk-card-title">
                <h1>Profil</h1>
            </div>
            <form action="{{ url('/profile/update/' . Auth::user()->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="d-flex flex-row">
                    <div class="d-flex flex-column col-lg-3">
                        @if (Auth::user()->image)
                            <img style="border-radius: 50%;" src="{{ asset('images/' . Auth::user()->image) }}" alt="">
                        @else
                            <img style="border-radius: 50%;" src="{{ asset('images/default.png') }}" alt="">
                        @endif
                        <h2 class="text-center mt-2 fw-bold">{{ Auth::user()->name }}</h2>
                        <h6 class="text-center mt-2">{{ Auth::user()->email }}</h6>
                    </div>

                    <div class="d-flex flex-column col-lg-9">
                        <div class="d-flex flex-row">
                            <div class="d-flex- flex-column ms-3 me-3 col-lg-5">
                                <div class="d-flex flex-column mb-3">
                                    <label for="name">Name</label>
                                    <input name="name" class="uk-input" type="text"
                                        value="{{ Auth::user()->name }}">
                                </div>
                                <div class="d-flex flex-column mb-3">
                                    <label for="email">Email</label>
                                    <input name="email" class="uk-input" type="text"
                                        value="{{ Auth::user()->email }}">
                                </div>
                                <div class="d-flex flex-column mb-3">
                                    <label for="nohp">No. hp</label>
                                    <input name="phone" class="uk-input" type="text"
                                        value="{{ Auth::user()->phone }}">
                                </div>
                                <div class="d-flex flex-column mb-3">
                                    <label for="alamat">Alamat</label>
                                    <textarea name="address" class="uk-textarea" rows="5">{{ Auth::user()->address }}</textarea>
                                </div>
                            </div>
                            <div class="d-flex flex-column ms-3 col-lg-6">
                                <div class="d-flex flex-column mb-3">
                                    <div class="d-flex flex-column mb-3">
                                        <label for="nohp">Password Baru</label>
                                        <input name="password" class="uk-input" type="password">
                                    </div>
                                    <div class="d-flex flex-column mb-3">
                                        <label for="nohp">Ulang Password Baru</label>
                                        <input name="password_confirmation" class="uk-input" type="password">
                                    </div>
                                    <label for="update">Update foto profil</label>
                                    <div class="js-upload uk-placeholder uk-text-center">
                                        <span uk-icon="icon: cloud-upload"></span>
                                        {{-- <span class="uk-text-middle">Drag n drop ke sini atau</span> --}}
                                        <div uk-form-custom>
                                            <input type="file" multiple name="image">
                                            <span class="uk-link text-dark"><u>Upload file</u></span>

                                        </div>
                                    </div>

                                    <progress id="js-progressbar" class="uk-progress" value="0" max="100"
                                        hidden></progress>

                                </div>
                            </div>
                        </div>
                        <button type="submit" class="uk-button uk-button-secondary mt-3">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <x-keranjang />
@endsection
