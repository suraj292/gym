
@extends('layouts.public.content')
@section('content')
<div id="shopify-section-template--16717966934237__main" class="shopify-section">
    <section class="text-scheme-text bg-scheme-background relative overflow-hidden  "
             data-color-scheme="primary">

        <div class="section-content py-section-vertical-spacing px-section max-w-3xl mx-auto">

            <div class="text-scheme-text card-container">
                <div class="card p-5 lg:p-10">

                    <h1 class="text-center font-heading  heading-feature heading-style full_shadow">Contact</h1>

                    <div class="rte mt-5">
                        <p>
                            <strong>Address:</strong><br>
                            A 55, B 3 Nikunj Appartment, Shyam Park Extension, Sahibabad, Ghaziabad (201005)

                            <br><br>
                            <strong>Phone:</strong><br>
                            +91-921-0040-321

                            <br><br>
                            <strong>Email:</strong><br>
                            <a href="mailto:contact@athletenutrition.in"
                               class="text-scheme-text hover:text-scheme-text-hover">
                                contact@athletenutrition.in
                            </a>
                        </p>
                    </div>


                    <div class="mt-5">
                        <form method="post" action="/contact#ContactForm" id="ContactForm"
                              accept-charset="UTF-8" class="outline-none"><input type="hidden" name="form_type"
                                                                                 value="contact" /><input type="hidden" name="utf8" value="✓" />


                            <div class="lg:grid lg:grid-cols-2 lg:gap-4">
                                <div>
                                    <label class="mt-5 mb-1 block font-secondary text-sm"
                                           for="ContactFormName">Name</label>
                                    <input type="text" class="w-full input" name="contact[name]"
                                           id="ContactFormName" value="" required aria-required="true">
                                </div>
                                <div>
                                    <label class="mt-5 mb-1 block font-secondary text-sm"
                                           for="ContactFormEmail">Email</label>
                                    <input type="email" name="contact[email]" id="ContactFormEmail"
                                           class="w-full input " value="" spellcheck="false" autocomplete="off"
                                           autocapitalize="off" required aria-required="true">
                                </div>
                            </div>

                            <label class="mt-5 mb-1 block font-secondary text-sm" for="ContactFormPhone">Phone
                                Number</label>
                            <input type="tel" name="contact[phone]" id="ContactFormPhone" class="w-full input"
                                   value="" pattern="[0-9\-]*">

                            <label class="mt-5 mb-1 block font-secondary text-sm"
                                   for="ContactFormMessage">Message</label>
                            <textarea rows="10" name="contact[body]" id="ContactFormMessage" required
                                      aria-required="true" class="w-full input"></textarea>

                            <div class="push-btn w-full mt-5">
                                <input type="submit" class="push-btn-surface w-full" value="Send">
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
