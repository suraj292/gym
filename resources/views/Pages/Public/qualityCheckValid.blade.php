@extends('layouts.public.content')
@section('content')
    <div id="shopify-section-template--16717966934237__main" class="shopify-section">
        <section class="text-scheme-text bg-scheme-background relative overflow-hidden  "
                 data-color-scheme="primary">

            <div class="section-content py-section-vertical-spacing px-section max-w-3xl mx-auto">

                <div class="text-scheme-text card-container">
                    <div class="card p-5 lg:p-10">

                        <h1 class="text-center font-heading  heading-feature heading-style full_shadow">Quality Check</h1>

                        <div class="rte mt-5">

                        </div>


                        <div class="mt-5">
                            <div class="mx-auto text-center">
                                <div class="pt-5">
                                    <svg width="100" height="100" viewBox="0 0 800 800" fill="none" xmlns="http://www.w3.org/2000/svg" class="mx-auto">
                                        <path d="M400 784.375C612.284 784.375 784.375 612.284 784.375 400C784.375 187.716 612.284 15.625 400 15.625C187.716 15.625 15.625 187.716 15.625 400C15.625 612.284 187.716 784.375 400 784.375Z" stroke="#0C5600" stroke-width="31.25" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M180.531 419.953L313.547 552.969L619.469 247.031" stroke="#0C5600" stroke-width="31.25" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                                <div class="p-5">
                                    <h2>Your Product with Serial Number: {{ $serialNumber->serial_number }} is genuine</h2>
                                    <h2>Expiry Date: July 2026</h2>
                                </div>

                            </div>
                        </div>


                    </div>
                    <div class="card-border"></div>
                </div>
            </div>
        </section>

    </div>
@stop
