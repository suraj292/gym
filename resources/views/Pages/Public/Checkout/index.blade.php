@extends('layouts.public.content')
@section('content')
    <div id="shopify-section-template--16717966934237__main" class="shopify-section">
        <section class="text-scheme-text bg-scheme-background relative overflow-hidden  "
                 data-color-scheme="primary">

            <div class="section-content py-section-vertical-spacing px-section mx-auto" style="max-width: 70%">

                <div class="text-scheme-text card-container">
                    <div class="card p-5 lg:p-10">

                        <h1 class="text-center font-heading  heading-feature heading-style full_shadow hd" >Checkout</h1>

                        <div class="mx-auto mt-5">

                            <style>
                                @media only screen and (max-width: 480px) {
                                    .hd{
                                        font-size: 35px !important;
                                    }
                                }
                                @media only screen and (min-width: 481px) {
                                    .hd {
                                        font-size: 60px !important;
                                    }
                                }
                                .table {
                                    width: 100%;
                                }
                                tbody td {
                                    text-align: center;
                                }
                                th, td {
                                    padding: 5px;
                                }
                                /* Style for the dark header (thead-dark) */
                                .thead-dark {
                                    background-color: #343a40; /* Dark background color */
                                    color: white; /* Text color for the header */
                                }

                                .input-container {
                                    display: flex;
                                    align-items: center;
                                }

                                .input-container::after {
                                    display: none;
                                }

                                /* Styles for the decrease and increase buttons */
                                .input-container button {
                                    font-size: 1.2rem;
                                    padding: 5px 10px;
                                    background-color: #007bff;
                                    color: #fff;
                                    border: none;
                                    cursor: pointer;
                                }

                                /* Style for the input field */
                                .input-container input {
                                    font-size: 1.2rem;
                                    width: 50px;
                                    text-align: center;
                                }

                            </style>

                            <div class="row" style="margin-top: 30px">
                                <div class="col-md-6 col-sm-12">
                                    <div class="custom-card" style="background-color: #d6d6d652 !important; cursor: default !important;">
                                        <h1 class="" style="text-align: center">BANK DETAILS</h1>
                                        <br>
                                        <p>
                                            <strong>BANK NAME</strong> : HDFC BANK
                                            <br><br>
                                            <strong>Account Name</strong> : ATHLETE NUTRITION
                                            <br><br>
                                            <strong>Account Number</strong> : 5020 0080 9895 60
                                            <br><br>
                                            <strong>IFSC Code</strong> : HDFC0001266
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="custom-card" style="background-color: #d6d6d652 !important; cursor: default !important;">
                                        <h1 class="" style="text-align: center">SCAN TO PAY</h1>
                                        <div id="qrcode"></div>
                                    </div>
                                </div>
                            </div>

                            <div style="width: 100%; text-align: center; padding-top: 20px">
{{--                                <a id="checkout" class="btn">Verify Payment</a>--}}
                                <a href="https://wa.me/919910748329" class="btn" id="checkout">
                                    <i class="fab fa-whatsapp" style="font-size: 25px;"></i>
                                    Share Screenshot
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop
@section('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        #qrcode img{
            padding-top: 20px;
            padding-bottom: 30px;
            margin: auto;
        }
    </style>
@endsection
@section('footer')
    <script src="{{ asset('js/qrcode.js') }}"></script>
    <script>
        // Calculate Amount
        function showCart() {
            let cart = JSON.parse(localStorage.getItem('cart'));
            if (cart.length > 0) {
                $('tbody').empty();
                let totalAmount = 0;
                let totalDiscount = 0;
                let subTotal = 0;
                cart.forEach((item, index) => {
                    let discount = item.discount == null ? 0 : (item.discount * item.quantity)
                    let total = (item.price - discount) * item.quantity
                    totalAmount += total;
                });
                return totalAmount;
            }
        }
        // Show QR Code
        var qrcode = new QRCode(document.getElementById("qrcode"), {
            text: "upi://pay?pn=Athlete+Nutrition&pa=vyapar.168340151388@hdfcbank&cu=INR&am="+showCart(),
            width: 128,
            height: 128,
            colorDark : "#000000",
            colorLight : "#ffffff",
            correctLevel : QRCode.CorrectLevel.H
        });
        // Verify Payment
        var checkout = $('#checkout');
        checkout.on('click', function () {
            let cart = JSON.parse(localStorage.getItem('cart'));
            if (cart.length > 0) {
                let totalAmount = 0;
                let totalDiscount = 0;
                let subTotal = 0;
                $.ajax({
                    url: "{{ route('public.checkout.success') }}",
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        'user_id' : {{ auth()->user()->id }},
                        'address_id' : {{ $address->id }},
                        'cart' : localStorage.getItem('cart'),
                    },
                    success: function (response) {
                            localStorage.removeItem('cart');
                            //window.location.href = "{{ route('public.checkout.success') }}?number="+response.number;

                    },
                    error: function (error) {
                        console.log(error);
                    }
                });
            }
        });

    </script>
@endsection
