@extends('layout')

@section('content')
    <div class="m-5" style="min-height: 100vh">
        <h1 class="fw-bold mb-3">Riwayat</h1>
        <div class="mx-5">
            <table class="uk-table uk-table-justify uk-table-divider">
                <thead style="position: sticky; top: 88px; background-color: white">
                    <tr>
                        <th class="uk-width-small">Tanggal</th>
                        <th>Produk</th>
                        <th>Nama Barang</th>
                        <th class="text-center">Review</th>
                        <th class="text-center">Status Pemesanan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>12/02/2022</td>
                        <td><img style="width: 100px"
                                src="https://images.unsplash.com/photo-1595950411750-1323532fe72e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80"
                                alt=""></td>
                        <td>Produk Robusta #1</td>
                        <td><button class="uk-button uk-button-default mx-auto d-flex" type="button" href="#modal-full"
                                uk-toggle>Review</button></td>
                        <td>
                            <div class="card card-warning text-center text-white fw-bold">Pesanan sedang dikirim</div>
                        </td>
                    </tr>
                    <tr>
                        <td>22/01/2022</td>
                        <td><img style="width: 100px"
                                src="https://images.unsplash.com/photo-1595950411750-1323532fe72e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80"
                                alt=""></td>

                        <td>Produk Arabika #1</td>
                        <td><button class="uk-button uk-button-default mx-auto d-flex" type="button" disabled>Sudah
                                direview</button></td>
                        <td>
                            <div class="card card-success text-center text-white fw-bold">Pesanan selesai</div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div id="modal-full" class="uk-modal-full" uk-modal>
            <div class="uk-modal-dialog">
                <button class="uk-modal-close-full uk-close-large" type="button" uk-close></button>
                <div class="uk-grid-collapse uk-child-width-1-2@s
uk-flex-middle" uk-grid>
                    <div class="uk-background-cover"
                        style="background-image: url('https://images.unsplash.com/photo-1595950411750-1323532fe72e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80');"
                        uk-height-viewport></div>
                    <div class="uk-padding-large d-flex flex-column">
                        <h1 class="fw-bold">Produk Robusta #1</h1>
                        <h2 class="text-primary" style="color: #85603f !important">Rp 55.000</h2>
                        <div class="d-flex flex-row mt-2">
                            <h3 class="me-3">Rating</h3>
                            <svg aria-hidden="true" style="position: absolute; width: 0; height: 0; overflow: hidden;"
                                version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <defs>
                                    <symbol id="icon-star" viewBox="0 0 26 28">
                                        <path
                                            d="M26 10.109c0 0.281-0.203 0.547-0.406 0.75l-5.672 5.531 1.344 7.812c0.016 0.109 0.016 0.203 0.016 0.313 0 0.406-0.187 0.781-0.641 0.781-0.219 0-0.438-0.078-0.625-0.187l-7.016-3.687-7.016 3.687c-0.203 0.109-0.406 0.187-0.625 0.187-0.453 0-0.656-0.375-0.656-0.781 0-0.109 0.016-0.203 0.031-0.313l1.344-7.812-5.688-5.531c-0.187-0.203-0.391-0.469-0.391-0.75 0-0.469 0.484-0.656 0.875-0.719l7.844-1.141 3.516-7.109c0.141-0.297 0.406-0.641 0.766-0.641s0.625 0.344 0.766 0.641l3.516 7.109 7.844 1.141c0.375 0.063 0.875 0.25 0.875 0.719z">
                                        </path>
                                    </symbol>
                                    <symbol id="icon-star-half" viewBox="0 0 13 28">
                                        <path
                                            d="M13 0.5v20.922l-7.016 3.687c-0.203 0.109-0.406 0.187-0.625 0.187-0.453 0-0.656-0.375-0.656-0.781 0-0.109 0.016-0.203 0.031-0.313l1.344-7.812-5.688-5.531c-0.187-0.203-0.391-0.469-0.391-0.75 0-0.469 0.484-0.656 0.875-0.719l7.844-1.141 3.516-7.109c0.141-0.297 0.406-0.641 0.766-0.641v0z">
                                        </path>
                                    </symbol>
                                </defs>
                            </svg>
                            <div class="comment-stars">

                                <input class="comment-stars-input" type="radio" name="rating" value="5" id="rating-5">
                                <label class="comment-stars-view" for="rating-5"><svg class="icon icon-star">
                                        <use xlink:href="#icon-star"></use>
                                    </svg></label>
                                <input class="comment-stars-input" type="radio" name="rating" value="4.5" id="rating-4.5"
                                    checked="checked"> <label class="comment-stars-view is-half" for="rating-4.5"><svg
                                        class="icon icon-star-half">
                                        <use xlink:href="#icon-star-half"></use>
                                    </svg></label>
                                <input class="comment-stars-input" type="radio" name="rating" value="4" id="rating-4">
                                <label class="comment-stars-view" for="rating-4"><svg class="icon icon-star">
                                        <use xlink:href="#icon-star"></use>
                                    </svg></label>
                                <input class="comment-stars-input" type="radio" name="rating" value="3.5" id="rating-3.5">
                                <label class="comment-stars-view is-half" for="rating-3.5"><svg class="icon icon-star-half">
                                        <use xlink:href="#icon-star-half"></use>
                                    </svg></label>
                                <input class="comment-stars-input" type="radio" name="rating" value="3" id="rating-3">
                                <label class="comment-stars-view" for="rating-3"><svg class="icon icon-star">
                                        <use xlink:href="#icon-star"></use>
                                    </svg></label>
                                <input class="comment-stars-input" type="radio" name="rating" value="2.5" id="rating-2.5">
                                <label class="comment-stars-view is-half" for="rating-2.5"><svg class="icon icon-star-half">
                                        <use xlink:href="#icon-star-half"></use>
                                    </svg></label>
                                <input class="comment-stars-input" type="radio" name="rating" value="2" id="rating-2">
                                <label class="comment-stars-view" for="rating-2"><svg class="icon icon-star">
                                        <use xlink:href="#icon-star"></use>
                                    </svg></label>
                                <input class="comment-stars-input" type="radio" name="rating" value="1.5" id="rating-1.5">
                                <label class="comment-stars-view is-half" for="rating-1.5"><svg class="icon icon-star-half">
                                        <use xlink:href="#icon-star-half"></use>
                                    </svg></label>
                                <input class="comment-stars-input" type="radio" name="rating" value="1" id="rating-1">
                                <label class="comment-stars-view" for="rating-1"><svg class="icon icon-star">
                                        <use xlink:href="#icon-star"></use>
                                    </svg></label>
                                <input class="comment-stars-input" type="radio" name="rating" value="0.5" id="rating-0.5">
                                <label class="comment-stars-view is-half" for="rating-0.5"><svg class="icon icon-star-half">
                                        <use xlink:href="#icon-star-half"></use>
                                    </svg></label>
                            </div>
                        </div>
                        <textarea name="" id="" class="uk-textarea"></textarea>
                        <div class="js-upload uk-placeholder uk-text-center">
                            <span uk-icon="icon: cloud-upload"></span>
                            <span class="uk-text-middle">Drag n drop ke sini atau</span>
                            <div uk-form-custom>
                                <input type="file" multiple>
                                <span class="uk-link text-dark"><u>Pilih dalam file</u></span>
                            </div>
                        </div>

                        <progress id="js-progressbar" class="uk-progress" value="0" max="100" hidden></progress>

                        <button href="#" class=" uk-button uk-button-secondary mt-5" style="float: right">Submit
                            Review</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-keranjang />
@endsection
