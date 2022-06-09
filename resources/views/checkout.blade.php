@extends('layout')

@section('content')
    <div class="p-3" style="background-color: #CCB9B1;">
        <a href="javascript:history.back()" style="text-decoration: none;">
            <h4 style="align-items: center; color: #85603f !important"><span
                    uk-icon="icon: chevron-left; ratio: 2"></span>Back</h4>
        </a>
        <div class="uk-card uk-card-default uk-card-body m-3" style="">
            @if (session('success'))
                <div class="uk-alert-success" uk-alert>
                    <a class="uk-alert-close" uk-close></a>
                    <p>{{ session('success') }}</p>
                </div>
            @endif
            <h2 class="mb-5">
                Checkout
            </h2>
            {{-- <div style="width: 500px" id="reader"></div> --}}
            <div class="uk-overflow-auto">
                <table class="show-cart uk-table uk-table-striped">

                </table>
            </div>
            <div class="uk-text-left fw-bold" style="width: fit-content">
                TOTAL HARGA: Rp <span class="total-cart"></span>
            </div>
            <div class=" uk-margin-large-top">
                <h3>Masukkan data diri : </h3>
                <form action="{{ url('success') }}" class="uk-margin">
                    <div class="uk-margin">
                        <label class="uk-form-label" for="form-stacked-text">Nama</label>
                        <div class="uk-form-controls">
                            <input class="uk-input" type="text" placeholder="Masukkan nama">
                        </div>
                    </div>
                    <div class="uk-margin">
                        <label class="uk-form-label" for="form-stacked-text">Email</label>
                        <div class="uk-form-controls">
                            <input class="uk-input" type="text" placeholder="Masukkan email">
                        </div>
                    </div>
                    <div class="uk-margin">
                        <label class="uk-form-label" for="form-stacked-text">Nomor telepon</label>
                        <div class="uk-form-controls">
                            <input class="uk-input" type="text" placeholder="Masukkan nomor telepon">
                        </div>
                    </div>
                    <div class="uk-margin">
                        <label class="uk-form-label" for="form-stacked-text">Alamat</label>
                        <div class="uk-form-controls">
                            <textarea class="uk-textarea" rows="5" placeholder="Alamat lengkap"></textarea>
                        </div>
                    </div>
                    <div class="uk-margin-medium-top">
                        <a href="{{ url('/success') }}">
                            <button class="uk-button uk-button-primary"
                                style="width: 100%; background-color: #BD9354 !important; color: white !important"
                                type="submit">Submit</button>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $(document).ready(function() {
            $("input[name$='group']").click(function() {
                var test = $(this).val();

                $("div.desc").hide();
                $("#site" + test).show();
            });
        });
    </script>

    <script>
        // $("#submitdata").click(function(){
        $(document).ready(function() {
            let testurl = "";
            for (let i = 0; i < cart.length; i++) {
                testurl += "halah%5B" + i + "%5D%5Bname%5D=" + cart[i].name + "&" + "halah%5B" + i +
                    "%5D%5Bprice%5D=" + cart[i].price + "&" + "halah%5B" + i + "%5D%5Bcount%5D=" + cart[i].count +
                    "&";
            };
            var usertoken = '{{ csrf_token() }}';
            var nexturl = "/checkout/" + usertoken + testurl;
            var cartdata = [];
            cartdata = cart;
            document.getElementById('lalala').action += testurl;
            document.getElementById('lalala2').action += testurl;

            let totalni = document.getElementById('totalni');
            totalni.value += shoppingCart.totalCart(cart);

            let totalni2 = document.getElementById('totalni2');
            totalni2.value += shoppingCart.totalCart(cart);

        });
    </script>
@endsection
