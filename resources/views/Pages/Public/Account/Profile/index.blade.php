@extends('layouts.public.content')
@section('content')
    <div id="shopify-section-template--16717966934237__main" class="shopify-section">
        <section class="text-scheme-text bg-scheme-background relative overflow-hidden  "
                 data-color-scheme="primary">

            <div class="section-content py-section-vertical-spacing px-section max-w-3xl mx-auto">

                <div class="text-scheme-text card-container">
                    <div class="card p-5 lg:p-10">

                        <h1 class="text-center font-heading  heading-feature heading-style full_shadow" style="font-size: 60px !important;">Welcome {{ explode(' ', $user->name)[0] }}</h1>

                        <div class="mt-5">
                            <br><br>
                            <p>
                                <strong>Phone:</strong> {{ $user->phone }}
                                <br><br>

                                <strong>Email:</strong> {{ $user->email }}
                                <br><br>

                                <strong>Primary Address:</strong> {{ 'Address' }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop
