@extends('layout')

@section('content')
    <div class="pt-5 pb-5" style="background-color: #CCB9B1;">
        <div class="uk-card uk-card-default uk-card-body m-5" style="">
            @if (session('success'))
                <div class="uk-alert-success" uk-alert>
                    <a class="uk-alert-close" uk-close></a>
                    <p>{{ session('success') }}</p>
                </div>
            @endif
            <h2 class="mb-5 text-center">
                Terima Kasih telah melakukan pemesanan!
            </h2>
            <div class="text-center">
                <span uk-icon="icon: check; ratio: 3"></span><br>
                <p class="mt-3">Pesanan Anda telah masuk ke database kami! Silakan ikuti beberapa langkah dibawah
                    ini</p>
            </div>
            <ul class="js-filter uk-child-width-1-2@s
uk-child-width-1-3@m uk-child-width-1-4@l uk-text-center mt-5"
                uk-grid>
                <li>
                    <div class="uk-card uk-card-secondary uk-card-hover uk-light" style="height: 100%">
                        <div class="uk-card-body p-4 d-flex flex-column" style="min-height: 203px">
                            <span uk-icon="icon: sign-out; ratio: 3"></span><br>
                            <h3 class="uk-card-title">
                                Pergi ke ATM terdekat / buka mobile banking
                            </h3>
                            <p>Pergi menuju ke ATM terdekat atau jika ada buka aplikasi mobile banking Anda</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="uk-card uk-card-secondary uk-card-hover uk-light" style="height: 100%">
                        <div class="uk-card-body p-4 d-flex flex-column" style="min-height: 203px">
                            <span uk-icon="icon: credit-card; ratio: 3"></span><br>
                            <h3 class="uk-card-title">
                                Lakukan transfer
                            </h3>
                            <p>Lakukan transfer menuju ke rekening kami di xxxx-xxxx-xxxx dengan Bank tujuan XXXXXX</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="uk-card uk-card-secondary uk-card-hover uk-light" style="height: 100%">
                        <div class="uk-card-body p-4 d-flex flex-column" style="min-height: 203px">
                            <span uk-icon="icon: pencil; ratio: 3"></span><br>
                            <h3 class="uk-card-title">
                                Masukkan nominal
                            </h3>
                            <p>Masukkan nominal uang yang akan ditransfer sebesar Rp <span class="total-cart"
                                    onload="disableKuy()"></span> ( pastikan jumlah sesuai sampai digit terakhir )</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="uk-card uk-card-secondary uk-card-hover uk-light" style="height: 100%">
                        <div class="uk-card-body p-4 d-flex flex-column" style="min-height: 203px">
                            <span uk-icon="icon: forward; ratio: 3"></span><br>

                            <h3 class="uk-card-title">
                                Pesanan dikirim
                            </h3>
                            <p>Pesanan akan dikirim segera setelah pembayaran telah dilakukan ke alamat yang telah
                                dimasukkan</p>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="text-center mt-5">
                <a href="{{ url('/') }}">
                    <button class="uk-button uk-button-primary"
                        style="background-color: #BD9354 !important; color: white !important">Kembali ke Homepage</button>
                </a>
            </div>
        </div>
    </div>
@endsection
