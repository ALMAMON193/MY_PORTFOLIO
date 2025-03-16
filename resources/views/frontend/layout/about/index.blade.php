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
                                                Hy! I’m
                                                <span
                                                    class="text-theme">{{ ($personal_info->fname ?? 'AL') . ' ' . ($personal_info->lname ?? 'Mamon') }}</span>

                                            </h3>
                                            <p class="mt-[6px] text-text" data-aos="fade-up" data-aos-delay="150">
                                                Web Developer
                                            </p>
                                            <div class="mt-[26px] flex justify-center" data-aos="fade-up"
                                                data-aos-delay="200">
                                                <img src="{{ asset('frontend/images/profile/user.png') }}"
                                                    alt="Lariv portfolio web template"
                                                    class="object-cover w-full rounded-2xl">
                                            </div>
                                            <div class="mt-[26px]" data-aos="fade-up" data-aos-delay="250">
                                                <p class="text-[20px] text-text" data-aos="fade-up" data-aos-delay="100">
                                                    {{ $personal_info->email ?? 'mamunkhan14108@gmail.com' }}
                                                </p>
                                                <p class="mt-[10px] text-text" data-aos="fade-up" data-aos-delay="150">
                                                    {{ $personal_info->address ?? 'Dhaka, Bangladesh' }}<br>
                                                    {{ $personal_info->city ?? 'Dhaka' }},
                                                    {{ $personal_info->country ?? 'Bangladesh' }}
                                                    {{ $personal_info->postal_code ?? '1216' }}
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
                                I build solutions
                                <br class="hidden md:block">
                                that <span class="text-theme">empower people!</span>
                            </h2>
                            <p class="mt-[20px] text-text" data-aos="fade-up" data-aos-delay="100">
                                {{ $personal_info->bio ?? 'I am a skilled Full-Stack Developer with a passion for building digital solutions that simplify lives and drive businesses forward. Whether it’s a web platform, a scalable API, or a custom application, I turn ideas into reality!' }}
                            </p>
                        </div>

                        <!-- Personal Information  -->
                        <div class="mt-[60px]">
                            <h2 class="text-[32px] font-semibold" data-aos="fade-up" data-aos-delay="150">
                                Personal Info:
                            </h2>
                            <div class="mt-[20px] grid grid-cols-12">
                                <div class="col-span-6" data-aos="fade-up" data-aos-delay="200">
                                    <p class="text-[18px] font-medium">Name</p>
                                    <p class="mt-2 text-[16px] text-text">
                                        {{ ($personal_info->fname ?? 'AL') . ' ' . ($personal_info->lname ?? 'Mamon') }}</p>
                                </div>
                                <div class="col-span-6" data-aos="fade-up" data-aos-delay="200">
                                    <p class="text-[18px] font-medium">Birthday</p>
                                    <p class="mt-2 text-[16px] text-text">{{ $personal_info->birth_date ?? '08/04/2001' }}
                                    </p>
                                </div>
                            </div>
                            <div class="mt-[20px] grid grid-cols-12">
                                <div class="col-span-6" data-aos="fade-up" data-aos-delay="250">
                                    <p class="text-[18px] font-medium">Email</p>
                                    <p class="mt-2 text-[16px] text-text">
                                        {{ $personal_info->email ?? 'mamunkhan14108@gmail.com' }}</p>
                                </div>
                                <div class="col-span-6" data-aos="fade-up" data-aos-delay="250">
                                    <p class="text-[18px] font-medium">Phone</p>
                                    <p class="mt-2 text-[16px] text-text">{{ $personal_info->phone ?? '01768085606' }}</p>
                                </div>
                            </div>
                        </div>

                        <!-- Working Experience Information  -->
                        <div class="mt-[60px]">
                            <h2 class="text-[32px] font-semibold" data-aos="fade-up" data-aos-delay="300">
                                Working <span class="text-theme">Experience:</span>
                            </h2>
                            <div class="items mt-[40px] grid gap-[40px]">
                                @foreach ($working_info as $item)
                                    <div
                                        class="item relative grid gap-[40px] border-l-[2px] border-theme pb-[16px] pl-[35px]">
                                        <i
                                            class="fa-solid fa-fire-flame-curved absolute left-[-13px] top-[-25px] text-[30px] text-theme"></i>

                                        <div>
                                            <p class="text-text" data-aos="fade-up" data-aos-delay="50">
                                                {{ $item->start_date ?? '01/01/2021' }} -
                                                {{ $item->end_date ?? 'Present' }}

                                            </p>
                                            <h3 class="mt-[10px] text-[20px] font-medium text-white md:text-[25px]"
                                                data-aos="fade-up" data-aos-delay="100">
                                                {{ $item->job_title }}

                                            </h3>
                                            <p class="mt-[5px] text-[18px] font-medium text-text" data-aos="fade-up"
                                                data-aos-delay="150">
                                                {{ $item->company_name }}

                                            </p>
                                            <p class="mt-[15px] text-text" data-aos="fade-up" data-aos-delay="200">
                                                {{ $item->job_description }}
                                            </p>
                                        </div>
                                    </div>
                                @endforeach
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
                                        @forelse ($education_info as $item)
                                            <p class="text-text" data-aos="fade-up" data-aos-delay="50">
                                                {{ $item->start_date ?? '01/01/2021' }} -
                                                {{ $item->end_date ?? 'Present' }}
                                            </p>
                                            <h3 class="mt-[10px] text-[20px] font-medium text-white md:text-[25px]"
                                                data-aos="fade-up" data-aos-delay="100">
                                                {{ $item->degree ?? 'Degree Not Available' }}
                                            </h3>
                                            <p class="mt-[5px] text-[18px] font-medium text-text" data-aos="fade-up"
                                                data-aos-delay="150">
                                                {{ $item->institution_name ?? 'Institution Not Available' }}
                                            </p>
                                            <p class="mt-[15px] text-text" data-aos="fade-up" data-aos-delay="200">
                                                {{ $item->description ?? 'Description Not Available' }}
                                            </p>
                                        @empty
                                        @endforelse

                                        @if ($education_info->isEmpty())
                                            <p class="text-text" data-aos="fade-up" data-aos-delay="100">2021 - Present
                                            </p>
                                            <h3 class="mt-[10px] text-[20px] font-medium text-white md:text-[25px]"
                                                data-aos="fade-up" data-aos-delay="150">
                                                MBA
                                            </h3>
                                            <p class="mt-[5px] text-[18px] font-medium text-text" data-aos="fade-up"
                                                data-aos-delay="200">
                                                University of Dhaka
                                            </p>
                                            <p class="mt-[15px] text-text" data-aos="fade-up" data-aos-delay="250">
                                                Since starting my excursion as an independent creator, I've worked remotely,
                                                consulted, and collaborated on digital products.
                                            </p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Skill Information  -->
                        <div class="mt-[60px]">
                            <h2 class="text-[32px] font-semibold" data-aos="fade-up" data-aos-delay="50">
                                My <span class="text-theme">Advantages:</span>
                            </h2>
                            <div class="items mt-[40px] grid gap-[40px]">
                                <div class="item relative grid gap-[40px] border-l-[2px] border-theme pb-[16px] pl-[35px]">
                                    <i
                                        class="fa-solid fa-fire-flame-curved absolute left-[-13px] top-[-25px] text-[30px] text-theme"></i>
                                    <div>
                                        @forelse ($myskill_info as $skill)
                                            <h3 class="mt-[10px] text-[20px] font-medium text-white md:text-[25px]"
                                                data-aos="fade-up" data-aos-delay="150">
                                                {{ $skill->name ?? 'Skill Not Available' }}
                                            </h3>
                                            <p class="mt-[5px] text-[18px] font-medium text-text" data-aos="fade-up"
                                                data-aos-delay="200">
                                                {{ $skill->description ?? 'Description Not Available' }}
                                            </p>
                                            <div class="mt-[20px] w-full">
                                                <div class="flex items-center justify-between gap-4 mb-2"
                                                    data-aos="fade-up" data-aos-delay="250">
                                                    <p class="text-[16px] font-medium text-white">
                                                        {{ $skill->name ?? 'Skill Not Available' }}
                                                    </p>
                                                    <h6 class="text-white">{{ $skill->percentage ?? '0' }}%</h6>
                                                </div>
                                                <div
                                                    class="border border-theme/20 bg-theme/10 py-[8px] px-1 flex items-center h-[12px] w-full overflow-hidden font-sans text-xs font-medium rounded-full">
                                                    <div class="h-[6px] justify-center overflow-hidden rounded-full bg-theme wow"
                                                        style="width: {{ $skill->percentage ?? '0' }}%; visibility: hidden; animation-name: none;">
                                                    </div>
                                                </div>
                                            </div>
                                        @empty
                                            <p class="text-text" data-aos="fade-up" data-aos-delay="100">
                                                No skills available.
                                            </p>
                                        @endforelse
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
