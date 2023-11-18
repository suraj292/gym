@extends('layouts.public.content')
@section('content')
    <div id="shopify-section-template--16717966934237__main" class="shopify-section">
        <section class="text-scheme-text bg-scheme-background relative overflow-hidden  "
                 data-color-scheme="primary">

            <div class="section-content py-section-vertical-spacing px-section max-w-3xl mx-auto">

                <div class="text-scheme-text card-container">
                    <div class="card p-5 lg:p-10">

                        <h1 class="text-center font-heading  heading-feature heading-style full_shadow" style="font-size: 60px !important;">Address</h1>

                        <div class="row mt-5">

                            @if(count($addresses) > 0)
                                @foreach($addresses as $address)
                                <div class="col-md-6 col-sm-12">
                                    <div class="custom-card @if($address->is_default) address-card-1 @else address-card-2 @endif">
                                        <a class="address-card-button-1" title="Set Default" href="{{ route('public.account.address.default', encrypt($address->id)) }}">Default</a>
                                        <a class="address-card-button-2" href="{{ route('public.account.address.destroy', encrypt($address->id)) }}">Delete</a>
                                        <p>
                                            <strong>Name :</strong>{{ $address->name }}
                                            <br><br>

                                            <strong>Mobile :</strong>{{ $address->mobile }}
                                            <br><br>

                                            <strong>Address :</strong>{{ $address->address }}, {{ $address->city }}, {{ $address->state }}, ({{ $address->pincode }})
                                        </p>
                                    </div>
                                </div>
                                @endforeach
                            @endif

                            <div class="col-md-6 col-sm-12">
                                <a href="{{ route('public.account.address.add') }}" title="add new address">
                                    <div class="custom-card">
                                        <svg width="80" height="80" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg" style="margin: auto;">
                                            <rect y="11" width="26" height="4" rx="1" fill="#F5F5F5"/>
                                            <rect x="15" width="26" height="4" rx="1" transform="rotate(90 15 0)" fill="#F5F5F5"/>
                                        </svg>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop
