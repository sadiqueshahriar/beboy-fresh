@extends('layouts.frontend.app')



@section('content')



<main>

    <section class="py-50">

        <div class="container">

            <div class="row g-5">

                <div class="col-md-6">

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.1364674133515!2d90.37732731429749!3d23.778154293633925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c74e8282b185%3A0x5e029ded49de5bfc!2sIDB%20Bhaban%2C%20E%2F8-A%2C%20Dhaka%201207!5e0!3m2!1sen!2sbd!4v1618745914956!5m2!1sen!2sbd" class="w-100 h-100" loading="lazy"></iframe>

                </div>

                <div class="col-md-6 ">

                    @if(Session::has('message'))
                    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                    @endif

                    <h2 class="heading heading--secondary mb-5">GET IN TOUCH</h2>

                    

                    <form action="{{route('contactus')}}" method="post">

                        @csrf

                        <div class="row g-3">

                            <div class="col-12">

                                <input type="text" name="name" placeholder="Name*" require>

                            </div>

                            <div class="col-12">

                                <input type="email" name="email" placeholder="Email*" require>

                            </div>

                            <div class="col-12">

                                <input type="text" name="subject" placeholder="Subject*" require>

                            </div>

                            <div class="col-12">

                                <textarea name="message" placeholder="Write Your Message ...*" require></textarea>

                            </div>

                            <div class="col-12">

                                <button type="submit" class="button button-red">SEND A MESSAGE</button>

                            </div>

                        </div>

                    </form>

                </div>

                

                <!-- <div class="col-md-6">

                    <h2 class="heading heading--secondary mb-5">INFORMATION ABOUT US</h2>

                    

                    <p class="fz-normal">Consectetur aliquet a erat per sem nisi leo placerat dui a adipiscing a sagittis vestibulum. Sagittis posuere id nam quis vestibulum faucibus a est tristique ridiculus sed.</p>

                    <p class="fz-normal">Sagittis posuere id nam quis vestibulum vestibulum a facilisi at elit hendrerit scelerisque sodales nam dis orci non aliquet enim.</p>



                    <h2 class="heading heading--secondary mb-5 mt-5">CONTACT US</h2>



                    <p class="fz-normal">Sagittis posuere id nam quis vestibulum vestibulum a facilisi at elit hendrerit scelerisque sodales nam dis orci non aliquet enim.</p>



                    <div class="row g-5">

                        <div class="col-6">

                            <div class="contact-info d-flex">

                                <div class="me-4" style="font-size: 3rem;"><i class="fal fa-envelope"></i></div>

                                <div>

                                    <p class="fz-normal mb-0">Tel: 877-45-44-33</p>

                                    <p class="fz-normal mb-0">E-Mail: shop@store.uk</p>

                                </div>

                            </div>

                        </div>

                        <div class="col-6">

                            <div class="contact-info d-flex">

                                <div class="me-4" style="font-size: 3rem;"><i class="fal fa-clock"></i></div>

                                <div>

                                    <p class="fz-normal mb-0">Tel: 877-45-44-33</p>

                                    <p class="fz-normal mb-0">E-Mail: shop@store.uk</p>

                                </div>

                            </div>

                        </div>

                        <div class="col-6">

                            <div class="contact-info d-flex">

                                <div class="me-4" style="font-size: 3rem;"><i class="fal fa-location-arrow"></i></div>

                                <div>

                                    <p class="fz-normal mb-0">Tel: 877-45-44-33</p>

                                    <p class="fz-normal mb-0">E-Mail: shop@store.uk</p>

                                </div>

                            </div>

                        </div>

                        <div class="col-6">

                            <div class="contact-info d-flex">

                                <div class="me-4" style="font-size: 3rem;"><i class="fal fa-rocket-launch"></i></div>

                                <div>

                                    <p class="fz-small mb-0">Tel: 877-45-44-33</p>

                                    <p class="fz-small mb-0">E-Mail: shop@store.uk</p>

                                </div>

                            </div>

                        </div>

                    </div>

                </div> -->

            </div>

        </div>

    </section>

</main>



@endsection