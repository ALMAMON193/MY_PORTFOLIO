@extends('frontend.app')
@section('title','index')
@section('content')
<main>
    <section class="py-[30px] md:py-[80px]">
      <div class="container">
        <div class="menuBox" data-aos="fade-up" data-aos-delay="50">
          <div class="inline-block rounded-full border border-text px-[20px] py-[5px]">
            <div class="flex items-center gap-[6px]">
              <span>
                <i class="fa-light fa-diagram-project text-[14px] text-white"></i>
              </span>
              <span class="pl-[6px] text-[14px] text-white">Portfolio</span>
            </div>
          </div>
        </div>
        <br>
        <div class="mt-[10px] md:mt-[20px]">
          <h2 class="text-[32px] font-semibold uppercase leading-tight text-white md:text-[52px]" data-aos="fade-up" data-aos-delay="100">
            Never Compromise For Our <br class="hidden md:block">
            Portfolio to
            <span class="text-theme"> Quality!</span>
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
          <div class="grid gap-y-[30px] md:grid-cols-12 md:gap-x-[30px]">
            <div class="col-span-12 md:col-span-6 lg:col-span-4" data-aos="fade-up" data-aos-delay="200">
              <div class="group rounded-2xl bg-btn p-[30px]">
                <div class="overflow-hidden rounded-2xl">
                  <img src="{{asset('frontend/images/projects/project-1.png')}}" alt="Lariv - React Portfolio Template" class="w-full object-cover transition-all duration-500 group-hover:scale-[110%]">
                </div>
                <div>
                  <p class="mt-[16px] text-[14px] text-text">
                    Mobile Application
                  </p>
                  <div class="portfolio-button-open cursor-pointer text-white transition-all duration-300 hover:text-theme">
                    <a href="#">
                      <h2 class="mt-[15px] text-[20px] font-medium capitalize md:text-[20px]">
                        Minto - Ai Resume Builder Case Study- UI/UX Design
                      </h2>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-span-12 md:col-span-6 lg:col-span-4" data-aos="fade-up" data-aos-delay="250">
              <div class="group rounded-2xl bg-btn p-[30px]">
                <div class="overflow-hidden rounded-2xl">
                  <img src="{{asset('frontend/images/projects/project-2.png')}}" alt="Lariv - React Portfolio Template" class="w-full object-cover transition-all duration-500 group-hover:scale-[110%]">
                </div>
                <div>
                  <p class="mt-[16px] text-[14px] text-text">
                    Mobile Application
                  </p>
                  <div class="portfolio-button-open cursor-pointer text-white transition-all duration-300 hover:text-theme">
                    <a href="#">
                      <h2 class="mt-[15px] text-[20px] font-medium capitalize md:text-[20px]">
                        Crypto &amp; Stocks Wallet - UI/UX | Mobile App
                      </h2>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-span-12 md:col-span-6 lg:col-span-4" data-aos="fade-up" data-aos-delay="300">
              <div class="group rounded-2xl bg-btn p-[30px]">
                <div class="overflow-hidden rounded-2xl">
                  <img src="{{asset('frontend/images/projects/project-3.png')}}" alt="Lariv - React Portfolio Template" class="w-full object-cover transition-all duration-500 group-hover:scale-[110%]">
                </div>
                <div>
                  <p class="mt-[16px] text-[14px] text-text">
                    Mobile Application
                  </p>
                  <div class="portfolio-button-open cursor-pointer text-white transition-all duration-300 hover:text-theme">
                    <a href="#">
                      <h2 class="mt-[15px] text-[20px] font-medium capitalize md:text-[20px]">
                        E-commerce Dashboard Case Study application
                      </h2>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-span-12 md:col-span-6 lg:col-span-4" data-aos="fade-up" data-aos-delay="200">
              <div class="group rounded-2xl bg-btn p-[30px]">
                <div class="overflow-hidden rounded-2xl">
                  <img src="{{asset('frontend/images/projects/project-4.png')}}" alt="Lariv - React Portfolio Template" class="w-full object-cover transition-all duration-500 group-hover:scale-[110%]">
                </div>
                <div>
                  <p class="mt-[16px] text-[14px] text-text">
                    Mobile Application
                  </p>
                  <div class="portfolio-button-open cursor-pointer text-white transition-all duration-300 hover:text-theme">
                    <a href="#">
                      <h2 class="mt-[15px] text-[20px] font-medium capitalize md:text-[20px]">
                        Pry Finance CRM - Mobile App &amp; UX UI Design
                      </h2>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-span-12 md:col-span-6 lg:col-span-4" data-aos="fade-up" data-aos-delay="250">
              <div class="group rounded-2xl bg-btn p-[30px]">
                <div class="overflow-hidden rounded-2xl">
                  <img src="{{asset('frontend/images/projects/project-5.png')}}" alt="Lariv - React Portfolio Template" class="w-full object-cover transition-all duration-500 group-hover:scale-[110%]">
                </div>
                <div>
                  <p class="mt-[16px] text-[14px] text-text">
                    Mobile Application
                  </p>
                  <div class="portfolio-button-open cursor-pointer text-white transition-all duration-300 hover:text-theme">
                    <a href="#">
                      <h2 class="mt-[15px] text-[20px] font-medium capitalize md:text-[20px]">
                        Citisum - Real Estate Dashboard Design application
                      </h2>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-span-12 md:col-span-6 lg:col-span-4" data-aos="fade-up" data-aos-delay="300">
              <div class="group rounded-2xl bg-btn p-[30px]">
                <div class="overflow-hidden rounded-2xl">
                  <img src="{{asset('frontend/images/projects/project-6.png')}}" alt="Lariv - React Portfolio Template" class="w-full object-cover transition-all duration-500 group-hover:scale-[110%]">
                </div>
                <div>
                  <p class="mt-[16px] text-[14px] text-text">
                    Mobile Application
                  </p>
                  <div class="portfolio-button-open cursor-pointer text-white transition-all duration-300 hover:text-theme">
                    <h2 class="mt-[15px] text-[20px] font-medium capitalize md:text-[20px]">
                      SmartLock - Branding &amp; Smart Home UX UI Design
                    </h2>
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
