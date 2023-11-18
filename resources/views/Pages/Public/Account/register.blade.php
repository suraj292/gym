
@extends('layouts.public.content')
@section('content')
    <div id="shopify-section-template--16717966934237__main" class="shopify-section" style="position: relative">
        <section class="text-scheme-text bg-scheme-background relative overflow-hidden  "
                 data-color-scheme="primary">

            <div class="section-content py-section-vertical-spacing px-section max-w-3xl mx-auto">

                <div class="text-scheme-text card-container">
                    <div class="card p-5 lg:p-10">

                        <h1 class="text-center font-heading heading-feature heading-style full_shadow">Register</h1>

                        <div class="mt-5">
                            <form method="post" action="{{ route('public.submitRegistration') }}" accept-charset="UTF-8" class="outline-none">
                                @csrf
                                <label class="mt-5 mb-1 block font-secondary text-sm" for="RegistrationFormEmail">Name</label>
                                <input type="text" name="name" class="w-full input" required>
                                @error('name')<p style="color: red;">{{ $message }}</p>@enderror

                                <label class="mt-5 mb-1 block font-secondary text-sm" for="RegistrationFormEmail">Email</label>
                                <input type="email" name="email" class="w-full input" required>
                                @error('email')<p style="color: red;">{{ $message }}</p>@enderror

                                <label class="mt-5 mb-1 block font-secondary text-sm" >Mobile</label>
                                <input type="number" name="phone" class="w-full input" maxlength="10" required>
                                @error('phone')<p style="color: red;">{{ $message }}</p>@enderror

                                <label class="mt-5 mb-1 block font-secondary text-sm">Password</label>
                                <input type="password" name="password" class="w-full input" minlength="8" required>
                                @error('password')<p style="color: red;">{{ $message }}</p>@enderror

                                <label class="mt-5 mb-1 block font-secondary text-sm">Confirm Password</label>
                                <input type="password" name="confirm_password" class="w-full input" required>
                                @error('confirm_password')<p style="color: red;">{{ $message }}</p>@enderror

                                <!-- Additional registration fields can be added here -->
                                <div class="push-btn w-full mt-5">
                                    <input type="submit" class="push-btn-surface w-full" value="Register">
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

@section('footer')

@stop
