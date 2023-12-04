@extends('layouts.public.content')
@section('content')
    <div id="shopify-section-template--16717966934237__main" class="shopify-section">
        <section class="text-scheme-text bg-scheme-background relative overflow-hidden  "
                 data-color-scheme="primary">

            <div class="section-content py-section-vertical-spacing px-section mx-auto" style="max-width: 70%">

                <div class="text-scheme-text card-container">
                    <div class="card p-5 lg:p-10">

                        <h1 class="text-center font-heading  heading-feature heading-style full_shadow hd" >Orders</h1>

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
                                .table-responsive {
                                    overflow-x: auto;
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
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Product</th>
                                        <th scope="col">Qty</th>
                                        <th scope="col">Amount</th>
                                        <th scope="col">Discount</th>
                                        <th scope="col">Total</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script>
            function showCart() {
                var invoice = @json($user->onlineInvoice);
                if (invoice.length > 0) {
                    var overallIndex = 0;
                    for (let i = 0; i < invoice.length; i++) {
                        var data = invoice[i].order.cart;
                        var cart = JSON.parse(data);

                        cart.forEach((item, index) => {
                            overallIndex = overallIndex + 1;
                            var discount = item.discount == null ? 0 : (item.discount * item.quantity)
                            var total = (item.price - discount) * item.quantity
                            const row = "<tr>" +
                                "<th scope='row'>" + overallIndex + "</th>" +
                                "<td>" + item.name + "</td>" +
                                "<td>" + item.quantity + "</td>" +
                                "<td>" + item.price + "</td>" +
                                "<td>" + discount + "</td>" +
                                "<td>" + total + "</td>" +
                                "<td class='uppercase'>" + invoice[i].delivery_status + "</td>" +
                                "</tr>";
                            $('tbody').append(row);
                        });

                    }
                }
            }

            $(document).ready(function () {
                showCart();
            })
        </script>
    </div>
@stop
@section('head')
    <style>
        .checkout-btn-div{
            width: 100%;
            text-align: center;
        }
        .checkout-btn-div a{
            margin-top: 10px;
        }
    </style>
@stop
@section('footer')
    <script>

    </script>
@endsection
