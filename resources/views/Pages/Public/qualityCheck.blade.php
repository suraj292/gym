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
                            <form method="post" action="{{ route('public.quality.check.serial') }}" id="ContactForm"
                                  accept-charset="UTF-8" class="outline-none">
                                @csrf

                                <label class="mt-5 mb-1 block font-secondary text-sm" for="ContactFormPhone">
                                    Serial Number
                                </label>
                                <input type="text" name="serial_number" id="ContactFormPhone" class="w-full input"
                                       value="" required placeholder="Enter your Serial Number">

                                <div class="push-btn w-full mt-5">
                                    <input type="submit" class="push-btn-surface w-full" value="Check">
                                </div>

                            </form>
                        </div>


                    </div>
                    <div class="card-border"></div>
                </div>
            </div>
        </section>

    </div>
@stop
