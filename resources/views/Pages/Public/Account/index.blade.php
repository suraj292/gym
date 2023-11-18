
@extends('layouts.public.content')
@section('content')
    <div id="shopify-section-template--16717966934237__main" class="shopify-section">
        <section class="text-scheme-text bg-scheme-background relative overflow-hidden  "
                 data-color-scheme="primary">

            <div class="section-content py-section-vertical-spacing px-section max-w-3xl mx-auto">

                <div class="text-scheme-text card-container">
                    <div class="card p-5 lg:p-10">

                        <h1 class="text-center font-heading  heading-feature heading-style full_shadow">Login</h1>

                        <div class="mt-5">
                            <form method="post" action="{{ route('public.submitLogin') }}" id="ContactForm"
                                  accept-charset="UTF-8" class="outline-none">
                                @csrf
                                <label class="mt-5 mb-1 block font-secondary text-sm" for="ContactFormPhone">Email</label>
                                <input type="Email" name="email" class="w-full input">

                                <label class="mt-5 mb-1 block font-secondary text-sm" for="ContactFormPhone">Password</label>
                                <input type="password" name="password" class="w-full input">

                                @if(session()->has('error_message'))<h2 class="text-center mt-4" style="color: red;">Authentication Failed</h2>@endif

                                <!-- make text for forgot password and register -->
                                <div class="mt-5 mb-1 block font-secondary text-sm" >
                                    <a href="/forgot-password">Forgot Password</a>
                                </div>
                                <div class="mt-5 mb-1 block font-secondary text-sm" >
                                    <a href="/register">Register</a>
                                </div>

                                <div class="push-btn w-full mt-5">
                                    <input type="submit" class="push-btn-surface w-full" value="Submit">
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
