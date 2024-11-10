@extends('frontend.app')
@section('title','index')
@section('content')
<main>
    <section class="py-[30px] md:py-[80px]">
        <div class="container">
            <!-- Intro Section  -->
            <div class="grid grid-cols-12 gap-[30px]">
                <div class="order-2 col-span-12 mt-[40px] py-[40px] md:mt-0 md:pr-[60px] lg:order-1 lg:col-span-8">
                    <p class="text-[22px] wow animated fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.3s">
                        <span class="text-theme">Hi!</span> There I’m
                    </p>
                    <h2 class="relative mt-[20px] inline-block text-[32px] font-semibold leading-tight md:text-[62px] wow animated fadeInUp"
                        data-wow-duration="1.5s" data-wow-delay="0.4s" data-wow-offset="0">
                        HI, I'M AMIT!
                        <span class="absolute bottom-[15px] right-[-100px]">
                            <img src="{{ asset('') }}frontend/images/icon/icon-1.png"
                                alt="Lariv - React Portfolio Template" class="wobble-hor-bottom" />
                        </span>
                    </h2>
                    <h2 class="text-[52px] font-semibold leading-tight md:text-[62px] wow animated fadeInUp"
                        data-wow-duration="1.5s" data-wow-delay="0.5s">
                        CREATIVE <span class="text-theme">DEVELOPER!</span>
                    </h2>
                    <br />
                    <p class="text-text wow animated fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.6s">
                        I'm a passionate UI/UX designer with a mission to create
                        delightful and intuitive digital experiences. With a strong
                        foundation in design principles and a keen eye for detail, I
                        specialize in translating complex ideas into user-friendly
                        interfaces that captivate and engage.
                    </p>
                    <div class="mt-[50px] wow animated fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.7s">
                        <a href="/" class="btn"> Hire Me Now! </a>
                    </div>

                    <!-- Count Section  -->
                    <div class="mt-[60px] grid grid-cols-12 gap-[30px] md:gap-2">
                        <div class="col-span-12 md:col-span-4 wow animated fadeInUp" data-wow-duration="1.5s"
                            data-wow-delay="0.3s">
                            <h2 class="text-[50px] font-semibold">
                                <span class="counter">4</span>+
                            </h2>
                            <p class="text-white">
                                YEARS OF AWESOME <br />
                                EXPERIENCE
                            </p>
                        </div>
                        <div class="col-span-12 md:col-span-4 wow animated fadeInUp" data-wow-duration="1.5s"
                            data-wow-delay="0.3s">
                            <h2 class="text-[50px] font-semibold">
                                <span class="counter">200</span>+
                            </h2>
                            <p class="text-white">
                                PROJECTS COMPLETED <br />
                                ON THIS YEAR
                            </p>
                        </div>
                        <div class="col-span-12 md:col-span-4 wow animated fadeInUp" data-wow-duration="1.5s"
                            data-wow-delay="0.3s">
                            <h2 class="text-[50px] font-semibold">
                                <span class="counter">780</span>+
                            </h2>
                            <p class="text-white">
                                HAVE TEAM MEMBER <br />
                                ON 10 COUNTRY
                            </p>
                        </div>
                    </div>

                    <!-- Inner Card  -->
                    <div class="mt-[60px] grid grid-cols-12 gap-[30px]">
                        <div class="col-span-12 md:col-span-4 wow animated fadeInUp" data-wow-duration="1.5s"
                            data-wow-delay="0.3s">
                            <a href="/service">
                                <div
                                    class="grid gap-[30px] rounded-lg border-2 border-dotted border-text p-[20px]">
                                    <h3 class="text-center text-[24px]">Services</h3>
                                    <div class="flex justify-around p-[10px]">
                                        <img src="{{ asset('frontend/images/icon/icon-2.png') }}"
                                            alt="Lariv - React Portfolio Template" />
                                        <img src="{{ asset('frontend/images/icon/icon-3.png') }}"
                                            alt="Lariv - React Portfolio Template" />
                                        <img src="{{ asset('frontend/images/icon/icon-4.png') }}"
                                            alt="Lariv - React Portfolio Template" />
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-span-12 md:col-span-4 wow animated fadeInUp" data-wow-duration="1.5s"
                            data-wow-delay="0.35s">
                            <a href="/project">
                                <div
                                    class="grid gap-[10px] rounded-lg border-2 border-dotted border-text p-[20px]">
                                    <h3 class="text-center text-[24px]">Projects</h3>
                                    <div class="flex justify-around">
                                        <img src="{{ asset('frontend/images/show/show-1.png') }}"
                                            alt="Lariv - React Portfolio Template" />
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-span-12 md:col-span-4 wow animated fadeInUp" data-wow-duration="1.5s"
                            data-wow-delay="0.4s">
                            <a href="/about">
                                <div
                                    class="grid gap-[38px] rounded-lg border-2 border-dotted border-text p-[20px]">
                                    <h3 class="text-center text-[24px]">About Us</h3>
                                    <div class="flex justify-around p-[10px]">
                                        <img src="{{ asset('frontend/images/logo.svg') }}"
                                            alt="Lariv - React Portfolio Template" />
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="order-1 col-span-12 lg:order-2 lg:col-span-4">
                    <div class="relative mt-[50px]">
                        <div class="wow animated fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.3s">
                            <img src="{{ asset('frontend/images/profile/user-1.png') }}"
                                alt="Lariv - React Portfolio Template" class="w-full" />
                            <img src="{{ asset('frontend/images/icon/figma.png') }}"
                                alt="Lariv - React Portfolio Template"
                                class="slide-top-1 absolute left-[-10px] top-[90px] w-[60px] md:top-[170px] md:w-[80px] lg:top-[120px]" />
                            <img src="{{ asset('frontend/images/icon/photoshop-logo.png') }}"
                                alt="Lariv - React Portfolio Template"
                                class="slide-top-2 absolute right-[-10px] top-[260px] w-[60px] md:top-[450px] md:w-[80px] lg:top-[250px]" />
                        </div>
                        <div class="pulse absolute bottom-[-50px] right-[40px] flex items-center gap-[20px] rounded-full bg-card px-[40px] py-[18px] md:bottom-[-17px] lg:right-[-34px] wow animated fadeInUp"
                            data-wow-duration="1.5s" data-wow-delay="0.4s">
                            <div>
                                <FaSeedling class="text-[40px] text-theme" />
                            </div>
                            <div>
                                <h2 class="text-[26px] font-semibold">
                                    <span class="counter">1100</span> k+
                                </h2>
                                <p class="text-base text-white">Real Customers</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
