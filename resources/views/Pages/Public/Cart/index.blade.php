@extends('layouts.public.content')
@section('content')
    <div id="shopify-section-template--16717966934237__main" class="shopify-section">
        <section class="text-scheme-text bg-scheme-background relative overflow-hidden  "
                 data-color-scheme="primary">

            <div class="section-content py-section-vertical-spacing px-section mx-auto" style="max-width: 70%">

                <div class="text-scheme-text card-container">
                    <div class="card p-5 lg:p-10">

                        <h1 class="text-center font-heading  heading-feature heading-style full_shadow" style="font-size: 60px !important;">Orders</h1>

                        <div class="mx-auto mt-5">

                            <style>
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
                            <div>
                                <table class="table">
                                    <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Product</th>
                                        <th scope="col">Qty</th>
                                        <th scope="col">Amount</th>
                                        <th scope="col">Discount</th>
                                        <th scope="col">Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>

                            <div class="row" style="margin-top: 30px">
                                <div class="col-md-6 col-sm-12">
                                    <div class="custom-card" style="background-color: #d6d6d652 !important; cursor: default !important;">
                                        @if($address)
                                        <p>
                                            <strong>Name :</strong>{{ $address->name }}
                                            <br><br>

                                            <strong>Mobile :</strong>{{ $address->mobile }}
                                            <br><br>

                                            <strong>Address :</strong>{{ $address->address .', '. $address->city .', '. $address->state .', '. $address->pincode }}
                                            <br><br>

                                            <a class="btn" href="{{ route('public.account.address') }}">Change Address</a>
                                        </p>
                                        @else
                                            <p style="height: 150px; text-align: center">
                                                <a href="{{ route('public.account.address.add') }}" class="btn" style="margin-top: 50px">Add Address</a>
                                            </p>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="custom-card" style="background-color: #d6d6d652 !important; cursor: default !important;">
                                        <p>
                                            <strong>Sub Total :</strong> ₹<span id="subTotal"></span>
                                            <br><br>

                                            <strong>Discounts :</strong> <span id="discount" style="color: green"></span>
                                            <br><br>

                                            <strong>Shipping Charge :</strong> ₹<span id="shipping">0</span>
                                            <br><br>

                                            <strong>Total :</strong> ₹<span id="total"></span>
                                        </p>
                                    </div>
                                </div>

                                @if($address)
                                <div class="col-12 checkout-btn-div">
                                    <a href="{{ route('public.checkout') }}" class="btn ">Checkout</a>
                                </div>
                                @endif
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script>

            function qtyIncrease(id) {
                let cart = JSON.parse(localStorage.getItem('cart'));
                let data = cart.find(el => el.id == id);
                if(data && data.quantity < 10){
                    data.quantity++
                }
                localStorage.setItem('cart', JSON.stringify(cart))
                showCart()
            }

            function qtyDecrease(id) {
                let cart = JSON.parse(localStorage.getItem('cart'));
                let data = cart.find(el => el.id == id);
                if(data && data.quantity > 0 ){
                    data.quantity--
                }
                if(data && data.quantity === 0 ){
                    // remove data from cart
                    cart = cart.filter(el => el.id != id)
                }
                localStorage.setItem('cart', JSON.stringify(cart))
                showCart()
            }
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
                        totalDiscount += discount;
                        subTotal += item.price * item.quantity;
                        const row = "<tr>" +
                            "<th scope='row'>" + (index + 1) + "</th>" +
                            "<td>" + item.name + "</td>" +
                            "<td>" +
                                "<div class=\"input-container\"> " +
                                "<button onclick='qtyDecrease("+ item.id +")'>-</button>" +
                                "<input type=\"number\" value="+item.quantity+">" +
                                "<button id=\"increase-btn\" onclick='qtyIncrease("+ item.id +")'>+</button>" +
                                "</div>" +
                            "</td>" +
                            "<td>" + item.price + "</td>" +
                            "<td>" + discount + "</td>" +
                            "<td>" + total + "</td>" +
                            "</tr>";
                        $('tbody').append(row);
                    });
                    //subTotal,discount,shipping,total
                    $('#subTotal').text(subTotal);
                    $('#discount').text('₹'+totalDiscount);
                    $('#total').text(totalAmount);
                } else {
                    window.location.href = "{{ route('public.product') }}"
                }
            }
            $(document).ready(function () {
                showCart()
            })
            // Get references to the HTML elements
            const decreaseBtn = document.getElementById('decrease-btn');
            const increaseBtn = document.getElementById('increase-btn');
            const counterInput = document.getElementById('counter');

            // Initialize the counter value
            let counterValue = 1;

            // Update the input field value and counterValue variable
            function updateCounter(newValue) {
                counterInput.value = newValue;
                counterValue = newValue;
            }

            // Decrease button click event
            decreaseBtn.addEventListener('click', () => {
                if (counterValue > 1) {
                    updateCounter(counterValue - 1);
                }
            });

            // Increase button click event
            increaseBtn.addEventListener('click', () => {
                updateCounter(counterValue + 1);
            });

            // Initial setup
            updateCounter(counterValue);
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
