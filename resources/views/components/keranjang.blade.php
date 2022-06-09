<button class="uk-button px-5 text-white"
    style="bottom: 0; right: 0; position: fixed; z-index: 300; background-color: #BD9354 !important"
    href="#modal-overflow" uk-toggle>
    Keranjang ( <span class="total-count"></span> )
</button>

<div id="modal-overflow" class="uk-modal-container" uk-modal style="width: 100%">
    <div class="uk-modal-dialog">

        <button class="uk-modal-close-default" type="button" uk-close></button>

        <div class="uk-modal-header">
            <h2 class="uk-modal-title">Keranjang</h2>
        </div>

        <div class="uk-modal-body" uk-overflow-auto>
            <table class="show-cart table">

            </table>
        </div>

        <div class="uk-modal-footer d-flex flex-row">
            <div class="uk-text-left fw-bold" style="width: fit-content">
                TOTAL HARGA: Rp<span class="total-cart"></span>
            </div>
            <div class="uk-text-right" style="width: fit-content; margin-left: auto">
                <button class="uk-button uk-button-default uk-modal-close" type="button">Tutup</button>
                <a href="{{ url('/checkout') }}">
                    <button class="uk-button uk-button-primary"
                        style="background-color: #BD9354 !important; color: white !important"
                        type="button">Checkout</button>

                </a>
            </div>
        </div>

    </div>
</div>
