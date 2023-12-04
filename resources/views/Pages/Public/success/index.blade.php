@extends('layouts.public.content')
@section('content')
    <div id="shopify-section-template--16717966934237__main" class="shopify-section">
        <section class="text-scheme-text bg-scheme-background relative overflow-hidden  "
                 data-color-scheme="primary">

            <div class="section-content py-section-vertical-spacing px-section mx-auto" style="max-width: 70%">

                <div class="text-scheme-text card-container">
                    <div class="card p-5 lg:p-10">

                        <h1 class="text-center font-heading  heading-feature heading-style full_shadow hd" >order placed</h1>

                        <div class="mx-auto mt-5">

                            <style>
                                @media only screen and (max-width: 480px) {
                                    .hd{
                                        font-size: 40px !important;
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

                            <div class="row" style="margin-top: 30px; text-align: center;">
                                <i class="fa-regular fa-circle-check"></i>
                            </div>

                            <div style="width: 100%; text-align: center; padding-top: 20px">
                                <!-- <a id="checkout" class="btn">Verify Payment</a> -->
                                <strong>Order Number :</strong>ANON-{{ sprintf("%06d", $invoice->order_number) }}
                                <br>
                                <br>
                                Payment Verification Pending
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop
@section('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        #qrcode img{
            padding-top: 20px;
            padding-bottom: 30px;
            margin: auto;
        }
        .fa-circle-check{
            font-size: 150px;
            color: green;
            margin: auto;
        }
    </style>
@endsection
@section('footer')
    <script>
        $(document).ready(function () {
        });

    </script>
@endsection
