@extends('admin/adminlayout')

@section('content')
    <div class="m-5 d-flex flex-column" style="min-height: 100vh">
        <div class="d-flex flex-row">
            <h1 class="fw-bold my-3">Kelola Produk</h1>
            <div class="uk-button uk-button-primary ms-auto me-5 my-4" style="background-color: #85603f !important"
                href="#modal-full-plus" uk-toggle>+ Tambah Produk</div>

        </div>
        <div id="modal-full-plus" class="uk-modal-full" uk-modal>
            <div class="uk-modal-dialog">
                <button class="uk-modal-close-full uk-close-large" type="button" uk-close></button>
                <div class="uk-grid-collapse uk-child-width-1-2@s
uk-flex-middle" uk-grid>
                    <div class="uk-background-cover"
                        style="background-image: url('https://images.unsplash.com/photo-1579389083046-e3df9c2b3325?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8bWFuYWdlfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60');"
                        uk-height-viewport></div>
                    <div class="p-5 d-flex flex-column">
                        <h1 class="fw-bold mb-5">+ Tambah produk baru</h1>
                        <div class="d-flex flex-row">
                            <h3 class="me-3" style="min-width: fit-content">Nama</h3>
                            <input class="uk-input" type="text">
                        </div>
                        <div class="d-flex flex-row">
                            <h3 class="me-3" style="min-width: fit-content">Harga</h3>
                            <input class="uk-input" type="number">
                        </div>
                        <div class="d-flex flex-row">
                            <h3 class="me-3" style="min-width: fit-content">Stok</h3>
                            <input class="uk-input" type="number">
                        </div>
                        <div>
                            <h3>Tambah Gambar</h3>
                            <div class="d-flex flex-column mb-3">
                                <div class="js-upload uk-placeholder uk-text-center">
                                    <span uk-icon="icon: cloud-upload"></span>
                                    <span class="uk-text-middle">Drag n drop ke sini atau</span>
                                    <div uk-form-custom>
                                        <input type="file" multiple>
                                        <span class="uk-link">Pilih dalam file</span>
                                    </div>
                                </div>

                                <progress id="js-progressbar" class="uk-progress" value="0" max="100" hidden></progress>

                            </div>
                        </div>
                        <button href="#" class="uk-button uk-button-secondary mt-4">Tambah Produk</button>
                        {{-- <button href="#" class="uk-button uk-button-danger mt-4">Hapus Produk</button> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex flex-row mt-5">
            <div class="d-flex flex-column mx-3">
                <div style="position: sticky; top: 100px; z-index: 200">
                    <h3>Kategori</h3>
                    <div>
                        <div uk-grid>
                            <div class="uk-width-auto@m">
                                <ul class="uk-tab-left"
                                    uk-tab="connect: #component-tab-left; animation: uk-animation-fade">
                                    <li><a href="#">Robusta</a></li>
                                    <li><a href="#">Arabika</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-width-expand@m d-flex flex-column mx-3">
                <ul id="component-tab-left" class="uk-switcher">
                    @foreach ($products as $product)
                        @if ($product->category == 'Robusta')
                            <li id="robusta">
                                <ul class="uk-child-width-1-4 ml-1" style="width: -webkit-fill-available" uk-grid>
                                    <li class="col-lg-3 mt-3" data-color="fut">
                                        <div class="uk-card uk-card-default uk-card-hover"
                                            style="cursor: pointer; height: 100%">
                                            <div class="uk-card-media-top"
                                                style="max-width: 100%; max-height: 300px; overflow: hidden">
                                                <img style="width: 100%" src="{{ asset('images/' . $product->image) }}"
                                                    alt="">

                                            </div>
                                            <div class="uk-card-body p-4 d-flex flex-column" style="min-height: 203px">
                                                <h3 class="uk-card-title mb-0 fw-bold">{{ $product->name }}</h3>
                                                <h4 class="mt-0 text-primary fw-bold" style="color: #85603f !important">Rp
                                                    {{ $product->price }}</h4>
                                                </h4>
                                                <button href="#edit-{{ $product->id }}-{{ $product->category }}"
                                                    uk-toggle class="add-to-cart uk-button uk-button-secondary mt-auto"
                                                    style="float: right">Edit Produk</button>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        @else
                            <li id="arabika">
                                <ul class="uk-child-width-1-4 ml-1" style="width: -webkit-fill-available" uk-grid>
                                    <li class="col-lg-3 mt-3" data-color="fut">
                                        <div class="uk-card uk-card-default uk-card-hover"
                                            style="cursor: pointer; height: 100%">
                                            <div class="uk-card-media-top"
                                                style="max-width: 100%; max-height: 300px; overflow: hidden">
                                                <img style="width: 100%" src="{{ asset('images/' . $product->image) }}"
                                                    alt="">

                                            </div>
                                            <div class="uk-card-body p-4 d-flex flex-column" style="min-height: 203px">
                                                <h3 class="uk-card-title mb-0 fw-bold">{{ $product->name }}</h3>
                                                <h4 class="mt-0 text-primary fw-bold" style="color: #85603f !important">Rp
                                                    {{ $product->price }}</h4>
                                                </h4>
                                                <button href="#edit-{{ $product->id }}-{{ $product->category }}"
                                                    uk-toggle class="add-to-cart uk-button uk-button-secondary mt-auto"
                                                    style="float: right">Edit Produk</button>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    @endforeach
                </ul>
                @foreach ($products as $product)
                    <div id="edit-{{ $product->id }}-{{ $product->category }}"
                        class="uk-edit-{{ $product->id }}-{{ $product->category }}" uk-modal>
                        <div class="uk-modal-dialog">
                            <button class="uk-modal-close-full uk-close-large" type="button" uk-close></button>
                            <div class="uk-grid-collapse uk-child-width-1-2@s
uk-flex-middle"
                                uk-grid>
                                <div class="uk-background-cover"
                                    style="background-image: url('{{ asset('images/' . $product->image) }}');"
                                    uk-height-viewport></div>

                                <div class="p-5 d-flex flex-column">
                                    <h1 class="fw-bold">{{ $product->name }}</h1>
                                    <h2 class="text-primary" style="color: #85603f !important">Rp
                                        {{ $product->price }}</h2>
                                    <div class="d-flex flex-row">
                                        <h3 class="me-3" style="min-width: fit-content">
                                            Ganti
                                            Nama</h3>
                                        <input name="name" class="uk-input" type="text">
                                    </div>
                                    <div class="d-flex flex-row">
                                        <h3 class="me-3" style="min-width: fit-content">
                                            Ganti
                                            Harga</h3>
                                        <input name="price" class="uk-input" type="number">
                                    </div>
                                    <div class="d-flex flex-row">
                                        <h3 class="me-3" style="min-width: fit-content">
                                            Stok
                                        </h3>
                                        <input name="stock" class="uk-input" type="number">
                                    </div>
                                    <button href="#" class="uk-button uk-button-secondary mt-4">Edit
                                        Produk</button>
                                    <button href="#" class="uk-button uk-button-danger mt-4">Hapus
                                        Produk</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>

    </div>
    <a href="#" uk-totop uk-scroll style="position: fixed; bottom: 55px; right: 20px"></a>
@endsection
