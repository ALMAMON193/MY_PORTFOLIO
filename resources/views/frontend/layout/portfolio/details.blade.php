@extends('frontend.app')
@section('title', 'index')
@section('content')
    <main>
        <section class="py-[30px] md:py-[80px]">
            <div class="container">
                <div class="grid grid-cols-12 gap-[20px]">
                    <div class="col-span-12 lg:col-span-4 lg:pr-[30px]">
                        <div class="menuBox" data-aos="fade-up" data-aos-delay="50">
                            <div class="inline-block rounded-full border border-text px-[20px] py-[5px]">
                                <div class="flex items-center gap-[6px]">
                                    <span>
                                        <i class="fa-regular fa-user text-[14px] text-white"></i>
                                    </span>
                                    <span class="pl-[6px] text-[14px] text-white">
                                        About Us
                                    </span>
                                </div>
                            </div>
                        </div>
                        <br>
                        <!-- Profile Info  -->
                        <div class="info-card mt-[10px] md:mt-[30px]">
                            <div class="rounded-[20px] bg-card px-[30px] py-[40px]">
                                <div>
                                    <div class="mt-[25px]">
                                        <div class="text-center">
                                            <h3 class="wow fadeIn  text-[24px] font-semibold text-white animated"
                                                data-aos="fade-up" data-aos-delay="100"
                                                style="visibility: visible; animation-name: fadeIn;">
                                                Hy! I’m <span class="text-theme">Amit Biswas</span>

                                            </h3>
                                            <p class="mt-[6px] text-text" data-aos="fade-up" data-aos-delay="150">
                                                Software Developer
                                            </p>
                                            <div class="mt-[26px] flex justify-center" data-aos="fade-up"
                                                data-aos-delay="200">
                                                <img src="{{ asset('frontend/images/profile/user.png') }}"
                                                    alt="Lariv portfolio web template"
                                                    class="object-cover w-full rounded-2xl">
                                            </div>
                                            <div class="mt-[26px]" data-aos="fade-up" data-aos-delay="250">
                                                <p class="text-[20px] text-text" data-aos="fade-up" data-aos-delay="100">
                                                    {{ $project->name ?? 'Amit Biswas' }}
                                                </p>
                                                <p class="mt-[10px] text-text" data-aos="fade-up" data-aos-delay="150">
                                                    {{ $project->description ?? 'Software Developer' }}
                                                </p>
                                                <p class="mt-[10px] text-text" data-aos="fade-up" data-aos-delay="150">
                                                    Live Link: <a
                                                        href="{{ $project->live_link ?? '#' }}">{{ $project->live_link ?? 'Not Available' }}</a>
                                                </p>
                                                <p class="mt-[10px] text-text" data-aos="fade-up" data-aos-delay="150">
                                                    Github Link: <a
                                                        href="{{ $project->github_link ?? '#' }}">{{ $project->github_link ?? 'Not Available' }}</a>
                                                </p>
                                            </div>
                                            <div class="mt-[30px] flex justify-center gap-3" data-aos="fade-up"
                                                data-aos-delay="200">
                                                <a href="#" class="block">
                                                    <i class="fa-brands fa-facebook-f socialRound"></i>
                                                </a>
                                                <a href="#" class="block">
                                                    <i class="fa-brands fa-twitter socialRound"></i>
                                                </a>
                                                <a href="#" class="block">
                                                    <i class="fa-brands fa-linkedin-in socialRound"></i>
                                                </a>
                                                <a href="#" class="block">
                                                    <i class="fa-brands fa-github socialRound"></i>
                                                </a>
                                            </div>
                                            <div class="mt-[30px]" data-aos="fade-up" data-aos-delay="250">
                                                <a href="assets/pdf/Resume-of-Amit-Biswas-MERN.pdf"
                                                    class="block rounded-full border-2 border-theme bg-theme py-[10px] font-medium text-white transition-all duration-300 hover:bg-transparent">
                                                    Download CV
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-8">
                        <div class="mt-[80px]">
                            <h2 class="text-[32px] font-semibold uppercase leading-tight text-white md:text-[52px]"
                                data-aos="fade-up" data-aos-delay="50">
                                I can develop that
                                <br class="hidden md:block">
                                help
                                <span class="text-theme"> people!</span>
                            </h2>
                            <p class="mt-[20px] text-text" data-aos="fade-up" data-aos-delay="100">
                                I am a professional web developer. I can develop that help people!
                            </p>
                        </div>

                        <!-- Personal Information  -->
                        <div class="mt-[60px]">
                            <h2 class="text-[32px] font-semibold" data-aos="fade-up" data-aos-delay="150">
                                Personal Info:
                            </h2>
                            <div class="mt-[20px] grid grid-cols-12">
                                <div class="col-span-6" data-aos="fade-up" data-aos-delay="200">
                                    <div class="relative">
                                        <img src="{{ asset('frontend/images/profile/user.png') }}" alt="Profile Image"
                                            class="h-[250px] w-full rounded-2xl object-cover">
                                        <div class="absolute top-0 left-0 flex items-center justify-center w-full h-full">
                                            <img src="{{ asset('frontend/images/profile/user.png') }}" alt="Profile Image"
                                                class="h-[250px] w-full rounded-2xl object-cover opacity-0 hover:opacity-100">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-6 flex flex-col gap-[20px]" data-aos="fade-up" data-aos-delay="250">
                                    <div>
                                        <p class="text-[18px] font-medium">Name</p>
                                        <p class="mt-2 text-[16px] text-text">Amit Biswas</p>
                                    </div>
                                    <div>
                                        <p class="text-[18px] font-medium">Birthday</p>
                                        <p class="mt-2 text-[16px] text-text">08/04/2001</p>
                                    </div>
                                    <div>
                                        <p class="text-[18px] font-medium">Email</p>
                                        <p class="mt-2 text-[16px] text-text">amitbiswas14108@gmail.com</p>
                                    </div>
                                    <div>
                                        <p class="text-[18px] font-medium">Phone</p>
                                        <p class="mt-2 text-[16px] text-text">01768085606</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Working Experience Information  -->
                        <div class="mt-[60px]">
                            <h2 class="text-[32px] font-semibold" data-aos="fade-up" data-aos-delay="300">
                                Working <span class="text-theme">Experience:</span>
                            </h2>
                            <div class="items mt-[40px] grid gap-[40px]">
                                <div class="item relative grid gap-[40px] border-l-[2px] border-theme pb-[16px] pl-[35px]">
                                    <i
                                        class="fa-solid fa-fire-flame-curved absolute left-[-13px] top-[-25px] text-[30px] text-theme"></i>

                                    <div>
                                        <p class="text-text" data-aos="fade-up" data-aos-delay="50">
                                            01/01/2021 - Present
                                        </p>
                                        <h3 class="mt-[10px] text-[20px] font-medium text-white md:text-[25px]"
                                            data-aos="fade-up" data-aos-delay="100">
                                            Junior Web Developer
                                        </h3>
                                        <p class="mt-[5px] text-[18px] font-medium text-text" data-aos="fade-up"
                                            data-aos-delay="150">
                                            MERN Stack
                                        </p>
                                        <p class="mt-[15px] text-text" data-aos="fade-up" data-aos-delay="200">
                                            Since starting my excursion as an independent creator, I've worked remotely,
                                            consulted, and collaborated on digital products.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Education Information  -->
                        <div class="mt-[60px]">
                            <h2 class="text-[32px] font-semibold" data-aos="fade-up" data-aos-delay="50">
                                Educational <span class="text-theme">Qualifications:</span>
                            </h2>
                            <div class="items mt-[40px] grid gap-[40px]">
                                <div class="item relative grid gap-[40px] border-l-[2px] border-theme pb-[16px] pl-[35px]">
                                    <i
                                        class="fa-solid fa-fire-flame-curved absolute left-[-13px] top-[-25px] text-[30px] text-theme"></i>
                                    <div>
                                        <p class="text-text" data-aos="fade-up" data-aos-delay="50">
                                            01/01/2021 - Present
                                        </p>
                                        <h3 class="mt-[10px] text-[20px] font-medium text-white md:text-[25px]"
                                            data-aos="fade-up" data-aos-delay="100">
                                            BSc in CSE
                                        </h3>
                                        <p class="mt-[5px] text-[18px] font-medium text-text" data-aos="fade-up"
                                            data-aos-delay="150">
                                            University of Dhaka
                                        </p>
                                        <p class="mt-[15px] text-text" data-aos="fade-up" data-aos-delay="200">
                                            Since starting my excursion as an independent creator, I've worked remotely,
                                            consulted, and collaborated on digital products.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="w-full md:w-1/2">
                            <div class="flex flex-col gap-[30px]">
                                <div class="flex flex-col gap-[15px]">
                                    <h3 class="text-[20px] font-semibold text-white md:text-[25px]" data-aos="fade-up"
                                        data-aos-delay="100">
                                        Experience
                                    </h3>
                                    <p class="mt-[5px] text-[18px] font-medium text-text" data-aos="fade-up"
                                        data-aos-delay="150">
                                        Web Developer
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        </div>
    @endsection
