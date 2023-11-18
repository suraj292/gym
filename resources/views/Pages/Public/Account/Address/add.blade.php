@extends('layouts.public.content')
@section('content')
    <div id="shopify-section-template--16717966934237__main" class="shopify-section">
        <section class="text-scheme-text bg-scheme-background relative overflow-hidden  "
                 data-color-scheme="primary">

            <div class="section-content py-section-vertical-spacing px-section max-w-3xl mx-auto">

                <div class="text-scheme-text card-container">
                    <div class="card p-5 lg:p-10">

                        <h1 class="text-center font-heading  heading-feature heading-style full_shadow" style="font-size: 60px !important;">Address</h1>

                        <div class="mx-auto mt-5">

                            <form method="post" action="{{ route('public.account.address.store') }}" id="ContactForm" accept-charset="UTF-8" class="outline-none">
                                @csrf
                                <input type="hidden" name="user_id" value="" />


                                <div class="lg:grid lg:grid-cols-2 lg:gap-4">
                                    <div>
                                        <label class="mt-5 mb-1 block font-secondary text-sm"
                                               for="ContactFormName">Name</label>
                                        <input type="text" class="w-full input" name="name"
                                               id="ContactFormName" value="" required aria-required="true">
                                        @error('name')<p class="text-danger">{{ $message }}</p>@enderror
                                    </div>
                                    <div>
                                        <label class="mt-5 mb-1 block font-secondary text-sm"
                                               for="ContactFormEmail">Mobile</label>
                                        <input type="tel" name="mobile" id="ContactFormEmail"
                                               class="w-full input " value="" spellcheck="false" autocomplete="off"
                                               autocapitalize="off" required aria-required="true" maxlength="10" pattern="[0-9\-]*">
                                        @error('mobile')<p class="text-danger">{{ $message }}</p>@enderror
                                    </div>
                                </div>

                                <label class="mt-5 mb-1 block font-secondary text-sm" for="ContactFormPhone">Address</label>
                                <input type="text" name="address" id="ContactFormPhone" class="w-full input"
                                       value="">
                                @error('address')<p class="text-danger">{{ $message }}</p>@enderror

                                <div class="lg:grid lg:grid-cols-2 lg:gap-4">
                                    <div>
                                        <label class="mt-5 mb-1 block font-secondary text-sm"
                                               for="ContactFormName">City</label>
                                        <input type="text" class="w-full input" name="city"
                                               id="" value="" required aria-required="true">
                                        @error('city')<p class="text-danger">{{ $message }}</p>@enderror
                                    </div>
                                    <div>
                                        <label class="mt-5 mb-1 block font-secondary text-sm"
                                               for="ContactFormEmail">State</label>
                                        <input type="text" name="state" id=""
                                               class="w-full input " value="" spellcheck="false" autocomplete="off"
                                               autocapitalize="off" required aria-required="true">
                                        @error('state')<p class="text-danger">{{ $message }}</p>@enderror
                                    </div>
                                </div>

                                <div class="lg:grid lg:grid-cols-2 lg:gap-4">
                                    <div>
                                        <label class="mt-5 mb-1 block font-secondary text-sm"
                                               for="ContactFormName">Pincode</label>
                                        <input type="text" class="w-full input" name="pincode"
                                               id="" value="" required aria-required="true">
                                        @error('pincode')<p class="text-danger">{{ $message }}</p>@enderror
                                    </div>
                                    <div>
                                        <label class="mt-5 mb-1 block font-secondary text-sm"
                                               for="ContactFormEmail">Landmark</label>
                                        <input type="text" name="landmark" id=""
                                               class="w-full input " value="" spellcheck="false" autocomplete="off"
                                               autocapitalize="off" >
                                        @error('landmark')<p class="text-danger">{{ $message }}</p>@enderror
                                    </div>
                                </div>

                                <div class="push-btn w-full mt-5">
                                    <input type="submit" class="push-btn-surface w-full" value="Send">
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop
