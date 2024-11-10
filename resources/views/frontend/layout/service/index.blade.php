@extends('frontend.app')
@section('content')
<main>
    <section class="py-[30px] md:py-[80px]">
        <div class="container">
            <div class="menuBox" data-aos="fade-up" data-aos-delay="50">
                <div class="inline-block rounded-full border border-text px-[20px] py-[5px]">
                    <div class="flex items-center gap-[6px]">
                        <span>
                            <facodemerge class="fa-light fa-user text-[14px] text-white">
                            </facodemerge>
                        </span>
                        <span class="pl-[6px] text-[14px] text-white">
                            All Service
                        </span>
                    </div>
                </div>
            </div>
            <br>
            <div class="mt-[10px] md:mt-[20px]">
                <h2 class="text-[32px] font-semibold uppercase leading-tight text-white md:text-[52px]"
                    data-aos="fade-up" data-aos-delay="100">
                    All the general services that
                    <br class="hidden md:block">I provide to
                    <span class="text-theme"> clients!</span>
                </h2>
                <p class="mt-[20px] text-text lg:w-[60%]" data-aos="fade-up" data-aos-delay="150">
                    The imperative for integrated, expansive, and seamless digital
                    experiences is fueling software product design and development
                    across organizations at an unprecedented scale. These demands
                    require capabilities to imagine, build, and run digital products
                    and services for new and existing.
                </p>
            </div>

            <div class="mt-[60px] md:mt-[80px]">
                <div class="grid gap-y-[60px] md:grid-cols-12 md:gap-x-[30px]">
                    <div class="col-span-12 md:col-span-6 lg:col-span-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="group rounded-2xl bg-btn p-[30px]">
                            <div>
                                <i class="fa-brands fa-blackberry text-[60px] text-theme"></i>
                            </div>
                            <h2 class="pt-5 text-[20px] font-medium text-white md:text-[26px]">
                                Good Business Stratagy
                            </h2>
                            <p class="mt-[10px] text-text">
                                Counseled for new companies, and teamed up with capable
                                individuals to make computerized items for both business and
                                purchaser use.
                            </p>
                        </div>
                    </div>
                    <div class="col-span-12 md:col-span-6 lg:col-span-4" data-aos="fade-up" data-aos-delay="150">
                        <div class="group rounded-2xl bg-btn p-[30px]">
                            <div>
                                <i class="fa-brands fa-html5 text-[60px] text-theme"></i>
                            </div>
                            <h2 class="pt-5 text-[20px] font-medium text-white md:text-[26px]">
                                Website Development
                            </h2>
                            <p class="mt-[10px] text-text">
                                Counseled for new companies, and teamed up with capable
                                individuals to make computerized items for both business and
                                purchaser use.
                            </p>
                        </div>
                    </div>
                    <div class="col-span-12 md:col-span-6 lg:col-span-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="group rounded-2xl bg-btn p-[30px]">
                            <div>
                                <i class="fa-brands fa-deezer text-[60px] text-theme"></i>
                            </div>
                            <h2 class="pt-5 text-[20px] font-medium text-white md:text-[26px]">
                                Marketing &amp; Reporting
                            </h2>
                            <p class="mt-[10px] text-text">
                                Counseled for new companies, and teamed up with capable
                                individuals to make computerized items for both business and
                                purchaser use.
                            </p>
                        </div>
                    </div>
                    <div class="col-span-12 md:col-span-6 lg:col-span-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="group rounded-2xl bg-btn p-[30px]">
                            <div>
                                \<i class="fa-solid fa-mobile-screen text-[60px] text-theme"></i>
                            </div>
                            <h2 class="pt-5 text-[20px] font-medium text-white md:text-[26px]">
                                Mobile App Development
                            </h2>
                            <p class="mt-[10px] text-text">
                                Counseled for new companies, and teamed up with capable
                                individuals to make computerized items for both business and
                                purchaser use.
                            </p>
                        </div>
                    </div>
                    <div class="col-span-12 md:col-span-6 lg:col-span-4" data-aos="fade-up" data-aos-delay="150">
                        <div class="group rounded-2xl bg-btn p-[30px]">
                            <div>
                                <i class="fa-brands fa-digital-ocean text-[60px] text-theme"></i>
                            </div>
                            <h2 class="pt-5 text-[20px] font-medium text-white md:text-[26px]">
                                Digital Marketing
                            </h2>
                            <p class="mt-[10px] text-text">
                                Counseled for new companies, and teamed up with capable
                                individuals to make computerized items for both business and
                                purchaser use.
                            </p>
                        </div>
                    </div>
                    <div class="col-span-12 md:col-span-6 lg:col-span-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="group rounded-2xl bg-btn p-[30px]">
                            <div>
                                <i class="fa-brands fa-uikit text-[60px] text-theme"></i>
                            </div>
                            <h2 class="pt-5 text-[20px] font-medium text-white md:text-[26px]">
                                UI/UX Design
                            </h2>
                            <p class="mt-[10px] text-text">
                                Counseled for new companies, and teamed up with capable
                                individuals to make computerized items for both business and
                                purchaser use.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Review Information  -->
            <div class="mt-[100px]">
                <h2 class="text-[32px] font-semibold" data-aos="fade-up" data-aos-delay="50">
                    What People Says?:
                </h2>

                <!-- Slider  -->
                <div class="mt-[30px]" data-aos="fade-up" data-aos-delay="150">
                    <div
                        class="swiper swiper-container slider swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                        <div class="swiper-wrapper" id="swiper-wrapper-85996526de6abb44" aria-live="off"
                            style="transform: translate3d(-1260px, 0px, 0px); transition-duration: 0ms;">
                            <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="2" role="group"
                                aria-label="1 / 11" style="width: 380px; margin-right: 40px;">
                                <div
                                    class="divide-y divide-dashed divide-theme rounded-xl bg-card px-[30px] py-[40px] shadow-none">
                                    <p class="pb-[30px] text-[18px] italic text-text">
                                        I recently had the pleasure of using LoraXD for my
                                        business, and I must say it has exceeded my expectations
                                        in every way possible.
                                    </p>

                                    <div class="flex items-center gap-4 pt-[30px]">
                                        <div class="inline-block w-[80px] overflow-hidden rounded-full">
                                            <img src="assets/images/user/user-3.png"
                                                alt="Lariv - React Portfolio Template">
                                        </div>
                                        <div class="grid gap-[10px]">
                                            <p class="text-base font-semibold text-white lg:text-[24px]">
                                                Larry N. Alexandre
                                            </p>
                                            <p>565 Snider Street Denver, CO 80202</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="3" role="group"
                                aria-label="2 / 11" style="width: 380px; margin-right: 40px;">
                                <div
                                    class="divide-y divide-dashed divide-theme rounded-xl bg-card px-[30px] py-[40px] shadow-none">
                                    <p class="pb-[30px] text-[18px] italic text-text">
                                        I recently had the pleasure of using LoraXD for my
                                        business, and I must say it has exceeded my expectations
                                        in every way possible.
                                    </p>

                                    <div class="flex items-center gap-4 pt-[30px]">
                                        <div class="inline-block w-[80px] overflow-hidden rounded-full">
                                            <img src="assets/images/user/user-4.png"
                                                alt="Lariv - React Portfolio Template">
                                        </div>
                                        <div class="grid gap-[10px]">
                                            <p class="text-base font-semibold text-white lg:text-[24px]">
                                                Larry N. Alexandre
                                            </p>
                                            <p>565 Snider Street Denver, CO 80202</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate swiper-slide-prev"
                                data-swiper-slide-index="4" role="group" aria-label="3 / 11"
                                style="width: 380px; margin-right: 40px;">
                                <div
                                    class="divide-y divide-dashed divide-theme rounded-xl bg-card px-[30px] py-[40px] shadow-none">
                                    <p class="pb-[30px] text-[18px] italic text-text">
                                        I recently had the pleasure of using LoraXD for my
                                        business, and I must say it has exceeded my expectations
                                        in every way possible.
                                    </p>

                                    <div class="flex items-center gap-4 pt-[30px]">
                                        <div class="inline-block w-[80px] overflow-hidden rounded-full">
                                            <img src="assets/images/user/user-5.png"
                                                alt="Lariv - React Portfolio Template">
                                        </div>
                                        <div class="grid gap-[10px]">
                                            <p class="text-base font-semibold text-white lg:text-[24px]">
                                                Larry N. Alexandre
                                            </p>
                                            <p>565 Snider Street Denver, CO 80202</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="0" role="group"
                                aria-label="4 / 11" style="width: 380px; margin-right: 40px;">
                                <div
                                    class="divide-y divide-dashed divide-theme rounded-xl bg-card px-[30px] py-[40px] shadow-none">
                                    <p class="pb-[30px] text-[18px] italic text-text">
                                        I recently had the pleasure of using LoraXD for my
                                        business, and I must say it has exceeded my expectations
                                        in every way possible.
                                    </p>

                                    <div class="flex items-center gap-4 pt-[30px]">
                                        <div class="inline-block w-[80px] overflow-hidden rounded-full">
                                            <img src="assets/images/user/user-1.png"
                                                alt="Lariv - React Portfolio Template">
                                        </div>
                                        <div class="grid gap-[10px]">
                                            <p class="text-base font-semibold text-white lg:text-[24px]">
                                                Larry N. Alexandre
                                            </p>
                                            <p>565 Snider Street Denver, CO 80202</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-next" data-swiper-slide-index="1" role="group"
                                aria-label="5 / 11" style="width: 380px; margin-right: 40px;">
                                <div
                                    class="divide-y divide-dashed divide-theme rounded-xl bg-card px-[30px] py-[40px] shadow-none">
                                    <p class="pb-[30px] text-[18px] italic text-text">
                                        I recently had the pleasure of using LoraXD for my
                                        business, and I must say it has exceeded my expectations
                                        in every way possible.
                                    </p>

                                    <div class="flex items-center gap-4 pt-[30px]">
                                        <div class="inline-block w-[80px] overflow-hidden rounded-full">
                                            <img src="assets/images/user/user-2.png"
                                                alt="Lariv - React Portfolio Template">
                                        </div>
                                        <div class="grid gap-[10px]">
                                            <p class="text-base font-semibold text-white lg:text-[24px]">
                                                Larry N. Alexandre
                                            </p>
                                            <p>565 Snider Street Denver, CO 80202</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-swiper-slide-index="2" role="group" aria-label="6 / 11"
                                style="width: 380px; margin-right: 40px;">
                                <div
                                    class="divide-y divide-dashed divide-theme rounded-xl bg-card px-[30px] py-[40px] shadow-none">
                                    <p class="pb-[30px] text-[18px] italic text-text">
                                        I recently had the pleasure of using LoraXD for my
                                        business, and I must say it has exceeded my expectations
                                        in every way possible.
                                    </p>

                                    <div class="flex items-center gap-4 pt-[30px]">
                                        <div class="inline-block w-[80px] overflow-hidden rounded-full">
                                            <img src="assets/images/user/user-3.png"
                                                alt="Lariv - React Portfolio Template">
                                        </div>
                                        <div class="grid gap-[10px]">
                                            <p class="text-base font-semibold text-white lg:text-[24px]">
                                                Larry N. Alexandre
                                            </p>
                                            <p>565 Snider Street Denver, CO 80202</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-swiper-slide-index="3" role="group" aria-label="7 / 11"
                                style="width: 380px; margin-right: 40px;">
                                <div
                                    class="divide-y divide-dashed divide-theme rounded-xl bg-card px-[30px] py-[40px] shadow-none">
                                    <p class="pb-[30px] text-[18px] italic text-text">
                                        I recently had the pleasure of using LoraXD for my
                                        business, and I must say it has exceeded my expectations
                                        in every way possible.
                                    </p>

                                    <div class="flex items-center gap-4 pt-[30px]">
                                        <div class="inline-block w-[80px] overflow-hidden rounded-full">
                                            <img src="assets/images/user/user-4.png"
                                                alt="Lariv - React Portfolio Template">
                                        </div>
                                        <div class="grid gap-[10px]">
                                            <p class="text-base font-semibold text-white lg:text-[24px]">
                                                Larry N. Alexandre
                                            </p>
                                            <p>565 Snider Street Denver, CO 80202</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate-prev" data-swiper-slide-index="4"
                                role="group" aria-label="8 / 11" style="width: 380px; margin-right: 40px;">
                                <div
                                    class="divide-y divide-dashed divide-theme rounded-xl bg-card px-[30px] py-[40px] shadow-none">
                                    <p class="pb-[30px] text-[18px] italic text-text">
                                        I recently had the pleasure of using LoraXD for my
                                        business, and I must say it has exceeded my expectations
                                        in every way possible.
                                    </p>

                                    <div class="flex items-center gap-4 pt-[30px]">
                                        <div class="inline-block w-[80px] overflow-hidden rounded-full">
                                            <img src="assets/images/user/user-5.png"
                                                alt="Lariv - React Portfolio Template">
                                        </div>
                                        <div class="grid gap-[10px]">
                                            <p class="text-base font-semibold text-white lg:text-[24px]">
                                                Larry N. Alexandre
                                            </p>
                                            <p>565 Snider Street Denver, CO 80202</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active"
                                data-swiper-slide-index="0" role="group" aria-label="9 / 11"
                                style="width: 380px; margin-right: 40px;">
                                <div
                                    class="divide-y divide-dashed divide-theme rounded-xl bg-card px-[30px] py-[40px] shadow-none">
                                    <p class="pb-[30px] text-[18px] italic text-text">
                                        I recently had the pleasure of using LoraXD for my
                                        business, and I must say it has exceeded my expectations
                                        in every way possible.
                                    </p>

                                    <div class="flex items-center gap-4 pt-[30px]">
                                        <div class="inline-block w-[80px] overflow-hidden rounded-full">
                                            <img src="assets/images/user/user-1.png"
                                                alt="Lariv - React Portfolio Template">
                                        </div>
                                        <div class="grid gap-[10px]">
                                            <p class="text-base font-semibold text-white lg:text-[24px]">
                                                Larry N. Alexandre
                                            </p>
                                            <p>565 Snider Street Denver, CO 80202</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next"
                                data-swiper-slide-index="1" role="group" aria-label="10 / 11"
                                style="width: 380px; margin-right: 40px;">
                                <div
                                    class="divide-y divide-dashed divide-theme rounded-xl bg-card px-[30px] py-[40px] shadow-none">
                                    <p class="pb-[30px] text-[18px] italic text-text">
                                        I recently had the pleasure of using LoraXD for my
                                        business, and I must say it has exceeded my expectations
                                        in every way possible.
                                    </p>

                                    <div class="flex items-center gap-4 pt-[30px]">
                                        <div class="inline-block w-[80px] overflow-hidden rounded-full">
                                            <img src="assets/images/user/user-2.png"
                                                alt="Lariv - React Portfolio Template">
                                        </div>
                                        <div class="grid gap-[10px]">
                                            <p class="text-base font-semibold text-white lg:text-[24px]">
                                                Larry N. Alexandre
                                            </p>
                                            <p>565 Snider Street Denver, CO 80202</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="2"
                                role="group" aria-label="11 / 11" style="width: 380px; margin-right: 40px;">
                                <div
                                    class="divide-y divide-dashed divide-theme rounded-xl bg-card px-[30px] py-[40px] shadow-none">
                                    <p class="pb-[30px] text-[18px] italic text-text">
                                        I recently had the pleasure of using LoraXD for my
                                        business, and I must say it has exceeded my expectations
                                        in every way possible.
                                    </p>

                                    <div class="flex items-center gap-4 pt-[30px]">
                                        <div class="inline-block w-[80px] overflow-hidden rounded-full">
                                            <img src="assets/images/user/user-3.png"
                                                alt="Lariv - React Portfolio Template">
                                        </div>
                                        <div class="grid gap-[10px]">
                                            <p class="text-base font-semibold text-white lg:text-[24px]">
                                                Larry N. Alexandre
                                            </p>
                                            <p>565 Snider Street Denver, CO 80202</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets"><span
                                class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0"
                                role="button" aria-label="Go to slide 1"></span><span
                                class="swiper-pagination-bullet" tabindex="0" role="button"
                                aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet"
                                tabindex="0" role="button" aria-label="Go to slide 3"></span><span
                                class="swiper-pagination-bullet" tabindex="0" role="button"
                                aria-label="Go to slide 4"></span><span class="swiper-pagination-bullet"
                                tabindex="0" role="button" aria-label="Go to slide 5"></span></div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
