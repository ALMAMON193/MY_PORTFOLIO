@extends('frontend.app')
@section('title', 'index')
@section('content')
    <main>
        <section class="py-[30px] md:py-[80px]">
            <div class="container">
                <div class="menuBox" data-aos="fade-up" data-aos-delay="50">
                    <div class="inline-block rounded-full border border-text px-[20px] py-[5px]">
                        <div class="flex items-center gap-[6px]">
                            <span>
                                <i class="fa-light fa-envelope text-[14px] text-white"></i>
                            </span>
                            <span class="pl-[6px] text-[14px] text-white">Contact</span>
                        </div>
                    </div>
                </div>
                <br>
                <div class="mt-[10px] md:mt-[20px]">
                    <h2 class="text-[32px] font-semibold uppercase leading-tight text-white md:text-[52px]"
                        data-aos="fade-up" data-aos-delay="100">
                        Let’s discuss about <br class="hidden md:block">
                        an <span class="text-theme">innovative project!</span>
                    </h2>
                    <p class="mt-[20px] text-text lg:w-[60%]" data-aos="fade-up" data-aos-delay="150">
                        In today’s fast-paced digital world, building integrated, scalable, and seamless experiences
                        is crucial for businesses to stay ahead. As a <strong>Full-Stack Developer</strong>, I specialize
                        in crafting robust applications that blend **cutting-edge UI/UX, scalable back-end systems,
                        and secure, high-performance architecture**.
                    </p>
                    <p class="mt-[15px] text-text lg:w-[60%]" data-aos="fade-up" data-aos-delay="200">
                        Whether you need a **custom web application, an advanced API, a scalable e-commerce platform, or a high-speed SaaS solution**,
                        I’m here to turn your ideas into reality. Let’s collaborate to build something exceptional!
                    </p>
                </div>


                <div class="mt-[60px] md:mt-[80px]">
                    <div>
                        <h2 class="text-[32px] font-semibold" data-aos="fade-up" data-aos-delay="100">
                            Let's Work Together!
                        </h2>
                    </div>
                    <div class="grid grid-cols-12 gap-[30px]">
                        <div class="col-span-12 mt-[30px] lg:col-span-7">
                            <form method="POST" action="{{ route('contact.store') }}" enctype="multipart/form-data"
                                class="contact-form" data-aos="fade-up" data-aos-delay="100">
                                @csrf
                                <div class="grid gap-[30px] md:flex">
                                    <input class="inputBox" type="text" placeholder="Enter Your Name" id="name"
                                        name="name" required="required">
                                    <input class="inputBox" type="email" id="email" name="email" required="required"
                                        placeholder="Enter Your Email">
                                </div>
                                <div class="mt-[30px]">
                                    <input class="inputBox" placeholder="Website Link:" type="text" id="website"
                                        name="subject" required="required">
                                </div>
                                <div class="mt-[30px]">
                                    <textarea name="message" id="message" cols="30" rows="10" placeholder="Enter Your Massage"
                                        class="w-full rounded-lg border bg-transparent p-[15px] pl-[10px] text-text focus:outline-none dark:border-btn"></textarea>
                                </div>
                                <div class="wow fadeIn animated mt-[30px]"
                                    style="visibility: hidden; animation-name: none;">
                                    <button type="submit" class="btn">SEND MESSAGE</button>
                                    <!-- <p>success</p> -->
                                </div>
                            </form>
                        </div>
                        <div class="col-span-12 lg:col-span-5" data-aos="fade-up" data-aos-delay="100">
                            <div class="mt-[30px] rounded-xl bg-card p-[10px]">
                                <div class="contact-map">
                                    <iframe title="Mirpur Shewrapara Map"
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.3006317122045!2d90.3664210752873!3d23.80635867864148!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c15226c8c88f%3A0x9caa16b536ca0077!2sShewrapara%2C%20Mirpur%2C%20Dhaka%201212%2C%20Bangladesh!5e0!3m2!1sen!2sbd!4v1710600000000!5m2!1sen!2sbd"
                                            height="390" width="100%" style="border:0;" allowfullscreen="" loading="lazy">
                                    </iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
