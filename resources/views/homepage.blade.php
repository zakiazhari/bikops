@extends('layout')

@section('content')
    <div class="m-5 d-flex flex-column" style="min-height: 100vh">
        {{-- <h1 class="text-center mb-3">What's New</h1> --}}
        <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1"
            uk-slider="autoplay: true; autoplay-interval: 5000; pause-on-hover: false"
            style="height: 80vh; max-height: 80vh !important;">

            <ul class="uk-slider-items uk-grid">
                <li class="uk-width-4-5">
                    <div class="uk-panel">
                        <img style="width: 100%"
                            src="https://images.unsplash.com/photo-1626402679707-b248aa61e5ff?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1631&q=80"
                            alt="">

                        <div class="uk-position-center uk-text-center">
                            <h2 uk-slider-parallax="x: 100,-100">Bikop.id</h2>
                            <p uk-slider-parallax="x: 200,-200">Terbuat dari biji kopi berkualitas</p>
                        </div>
                    </div>
                </li>
                <li class="uk-width-4-5">
                    <div class="uk-panel">
                        <img style="width: 100%"
                            src="https://images.unsplash.com/photo-1552346989-e069318e20a5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1174&q=80"
                            alt="">


                        <div class="uk-position-center uk-text-center">
                            {{-- <h2 uk-slider-parallax="x: 100,-100">Produk Baru #1</h2>
                        <p uk-slider-parallax="x: 200,-200">Nyaman dan berkualitas</p> --}}
                        </div>
                    </div>
                </li>
                <li class="uk-width-4-5">
                    <div class="uk-panel">
                        <img style="width: 100%"
                            src="https://images.unsplash.com/photo-1524350876685-274059332603?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1171&q=80"
                            alt="">


                        <div class="uk-position-center uk-text-center">
                            {{-- <h2 uk-slider-parallax="x: 100,-100">Produk Baru #1</h2>
                        <p uk-slider-parallax="x: 200,-200">Nyaman dan berkualitas</p> --}}
                        </div>
                    </div>
                </li>
            </ul>

            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous
                uk-slider-item="previous"></a>
            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next
                uk-slider-item="next"></a>

        </div>
        <div class="uk-divider-icon"></div>
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
                    <li id="robusta">
                        <ul class="uk-child-width-1-4 ml-1" style="width: -webkit-fill-available" uk-grid>
                            <li class="col-lg-3 mt-3" data-color="fut">
                                <div class="uk-card uk-card-default uk-card-hover" style="cursor: pointer; height: 100%">
                                    <div class="uk-card-media-top"
                                        style="max-width: 100%; max-height: 300px; overflow: hidden">
                                        <img style="width: 100%"
                                            src="https://images.unsplash.com/photo-1595950411750-1323532fe72e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80"
                                            alt="">

                                    </div>
                                    <div class="uk-card-body p-4 d-flex flex-column" style="min-height: 203px">
                                        <h3 class="uk-card-title mb-0 fw-bold">Produk Robusta #1</h3>
                                        <h4 class="mt-0 text-primary fw-bold" style="color: #85603f !important">Rp 55.000
                                        </h4>
                                        <button class="add-to-cart uk-button uk-button-secondary mt-auto"
                                            style="float: right" data-name="Produk Robusta 1" data-price="55000">+ Add to
                                            cart</button>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li id="arabika">
                        <ul class="uk-child-width-1-4 ml-1" style="width: -webkit-fill-available" uk-grid>
                            <li class="col-lg-3 mt-3" data-color="fut">
                                <div class="uk-card uk-card-default uk-card-hover" style="cursor: pointer; height: 100%">
                                    <div class="uk-card-media-top"
                                        style="max-width: 100%; max-height: 300px; overflow: hidden">
                                        <img style="width: 100%"
                                            src="https://images.unsplash.com/photo-1595950411750-1323532fe72e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80"
                                            alt="">

                                    </div>
                                    <div class="uk-card-body p-4 d-flex flex-column" style="min-height: 203px">
                                        <h3 class="uk-card-title mb-0 fw-bold">Produk Arabika #1</h3>
                                        <h4 class="mt-0 text-primary fw-bold" style="color: #85603f !important">Rp 55.000
                                        </h4>
                                        <button class="add-to-cart uk-button uk-button-secondary mt-auto"
                                            style="float: right" data-name="Produk americano 1" data-price="55000">+ Add to
                                            cart</button>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>

        </div>
    </div>
    <a href="#" uk-totop uk-scroll style="position: fixed; bottom: 55px; right: 20px"></a>
    <x-keranjang />
@endsection
