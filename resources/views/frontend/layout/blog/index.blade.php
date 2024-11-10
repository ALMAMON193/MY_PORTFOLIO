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
                <fablog class="fa-light fa-user text-[14px] text-white">
              </fablog></span>
              <span class="pl-[6px] text-[14px] text-white">Blog</span>
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
            <div class="col-span-12 md:col-span-6 lg:col-span-4" data-aos="fade-up" data-aos-delay="100">
              <div class="group rounded-xl bg-card p-[25px]">
                <div class="h-[260px] w-full overflow-hidden rounded-2xl">
                  <img src="{{asset('frontend/images/blog/blog-1.png')}}" alt="Lariv - React Portfolio Template" class="h-full w-full object-cover transition-all duration-500 group-hover:scale-[110%]">
                </div>
                <div>
                  <p class="mt-[20px] inline-block rounded-md bg-theme/10 p-[4px] text-sm text-theme">
                    App Development
                  </p>
                  <a href="blog-details.html">
                    <h2 class="mt-[12px] text-[20px] font-semibold transition-all duration-300 hover:text-theme md:text-[24px]">
                      All that You Believe Should Realize About Making
                    </h2>
                  </a>

                  <p class="mt-[14px] text-base text-text">
                    SASS is poised to revolutionize how businesses operate by,
                    and scalable software platform.
                  </p>
                  <div class="mt-[20px] flex items-center gap-[20px]">
                    <div class="flex items-center gap-[6px]">
                      <span>
                        <i class="fa-regular fa-clock text-base text-theme"></i>
                      </span>
                      <span class="text-sm text-text">
                        September 16, 2023
                      </span>
                    </div>
                    <div class="flex items-center gap-[6px]">
                      <span>
                        <i class="fa-regular fa-comment text-base text-theme"></i>
                      </span>
                      <span class="text-sm text-text">3 Comments</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-span-12 md:col-span-6 lg:col-span-4" data-aos="fade-up" data-aos-delay="150">
              <div class="group rounded-xl bg-card p-[25px]">
                <div class="h-[260px] w-full overflow-hidden rounded-2xl">
                  <img src="{{asset('frontend/images/blog/blog-2.png')}}" alt="Lariv - React Portfolio Template" class="h-full w-full object-cover transition-all duration-500 group-hover:scale-[110%]">
                </div>
                <div>
                  <p class="mt-[20px] inline-block rounded-md bg-theme/10 p-[4px] text-sm text-theme">
                    App Development
                  </p>
                  <a href="blog-details.html">
                    <h2 class="mt-[12px] text-[20px] font-semibold transition-all duration-300 hover:text-theme md:text-[24px]">
                      All that You Believe Should Realize About Making
                    </h2>
                  </a>

                  <p class="mt-[14px] text-base text-text">
                    SASS is poised to revolutionize how businesses operate by,
                    and scalable software platform.
                  </p>
                  <div class="mt-[20px] flex items-center gap-[20px]">
                    <div class="flex items-center gap-[6px]">
                      <span>
                        <i class="fa-regular fa-clock text-base text-theme"></i>
                      </span>
                      <span class="text-sm text-text">
                        September 16, 2023
                      </span>
                    </div>
                    <div class="flex items-center gap-[6px]">
                      <span>
                        <i class="fa-regular fa-comment text-base text-theme"></i>
                      </span>
                      <span class="text-sm text-text">3 Comments</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-span-12 md:col-span-6 lg:col-span-4" data-aos="fade-up" data-aos-delay="200">
              <div class="group rounded-xl bg-card p-[25px]">
                <div class="h-[260px] w-full overflow-hidden rounded-2xl">
                  <img src="{{asset('frontend/images/blog/blog-3.png')}}" alt="Lariv - React Portfolio Template" class="h-full w-full object-cover transition-all duration-500 group-hover:scale-[110%]">
                </div>
                <div>
                  <p class="mt-[20px] inline-block rounded-md bg-theme/10 p-[4px] text-sm text-theme">
                    App Development
                  </p>
                  <a href="blog-details.html">
                    <h2 class="mt-[12px] text-[20px] font-semibold transition-all duration-300 hover:text-theme md:text-[24px]">
                      All that You Believe Should Realize About Making
                    </h2>
                  </a>

                  <p class="mt-[14px] text-base text-text">
                    SASS is poised to revolutionize how businesses operate by,
                    and scalable software platform.
                  </p>
                  <div class="mt-[20px] flex items-center gap-[20px]">
                    <div class="flex items-center gap-[6px]">
                      <span>
                        <i class="fa-regular fa-clock text-base text-theme"></i>
                      </span>
                      <span class="text-sm text-text">
                        September 16, 2023
                      </span>
                    </div>
                    <div class="flex items-center gap-[6px]">
                      <span>
                        <i class="fa-regular fa-comment text-base text-theme"></i>
                      </span>
                      <span class="text-sm text-text">3 Comments</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-span-12 md:col-span-6 lg:col-span-4" data-aos="fade-up" data-aos-delay="100">
              <div class="group rounded-xl bg-card p-[25px]">
                <div class="h-[260px] w-full overflow-hidden rounded-2xl">
                  <img src="{{asset('frontend/images/blog/blog-4.png')}}" alt="Lariv - React Portfolio Template" class="h-full w-full object-cover transition-all duration-500 group-hover:scale-[110%]">
                </div>
                <div>
                  <p class="mt-[20px] inline-block rounded-md bg-theme/10 p-[4px] text-sm text-theme">
                    App Development
                  </p>
                  <a href="blog-details.html">
                    <h2 class="mt-[12px] text-[20px] font-semibold transition-all duration-300 hover:text-theme md:text-[24px]">
                      All that You Believe Should Realize About Making
                    </h2>
                  </a>

                  <p class="mt-[14px] text-base text-text">
                    SASS is poised to revolutionize how businesses operate by,
                    and scalable software platform.
                  </p>
                  <div class="mt-[20px] flex items-center gap-[20px]">
                    <div class="flex items-center gap-[6px]">
                      <span>
                        <i class="fa-regular fa-clock text-base text-theme"></i>
                      </span>
                      <span class="text-sm text-text">
                        September 16, 2023
                      </span>
                    </div>
                    <div class="flex items-center gap-[6px]">
                      <span>
                        <i class="fa-regular fa-comment text-base text-theme"></i>
                      </span>
                      <span class="text-sm text-text">3 Comments</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-span-12 md:col-span-6 lg:col-span-4" data-aos="fade-up" data-aos-delay="150">
              <div class="group rounded-xl bg-card p-[25px]">
                <div class="h-[260px] w-full overflow-hidden rounded-2xl">
                  <img src="{{asset('frontend/images/blog/blog-5.png')}}" alt="Lariv - React Portfolio Template" class="h-full w-full object-cover transition-all duration-500 group-hover:scale-[110%]">
                </div>
                <div>
                  <p class="mt-[20px] inline-block rounded-md bg-theme/10 p-[4px] text-sm text-theme">
                    App Development
                  </p>
                  <a href="blog-details.html">
                    <h2 class="mt-[12px] text-[20px] font-semibold transition-all duration-300 hover:text-theme md:text-[24px]">
                      All that You Believe Should Realize About Making
                    </h2>
                  </a>

                  <p class="mt-[14px] text-base text-text">
                    SASS is poised to revolutionize how businesses operate by,
                    and scalable software platform.
                  </p>
                  <div class="mt-[20px] flex items-center gap-[20px]">
                    <div class="flex items-center gap-[6px]">
                      <span>
                        <i class="fa-regular fa-clock text-base text-theme"></i>
                      </span>
                      <span class="text-sm text-text">
                        September 16, 2023
                      </span>
                    </div>
                    <div class="flex items-center gap-[6px]">
                      <span>
                        <i class="fa-regular fa-comment text-base text-theme"></i>
                      </span>
                      <span class="text-sm text-text">3 Comments</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-span-12 md:col-span-6 lg:col-span-4" data-aos="fade-up" data-aos-delay="200">
              <div class="group rounded-xl bg-card p-[25px]">
                <div class="h-[260px] w-full overflow-hidden rounded-2xl">
                  <img src="{{asset('frontend/images/blog/blog-6.png')}}" alt="Lariv - React Portfolio Template" class="h-full w-full object-cover transition-all duration-500 group-hover:scale-[110%]">
                </div>
                <div>
                  <p class="mt-[20px] inline-block rounded-md bg-theme/10 p-[4px] text-sm text-theme">
                    App Development
                  </p>
                  <a href="blog-details.html">
                    <h2 class="mt-[12px] text-[20px] font-semibold transition-all duration-300 hover:text-theme md:text-[24px]">
                      All that You Believe Should Realize About Making
                    </h2>
                  </a>

                  <p class="mt-[14px] text-base text-text">
                    SASS is poised to revolutionize how businesses operate by,
                    and scalable software platform.
                  </p>
                  <div class="mt-[20px] flex items-center gap-[20px]">
                    <div class="flex items-center gap-[6px]">
                      <span>
                        <i class="fa-regular fa-clock text-base text-theme"></i>
                      </span>
                      <span class="text-sm text-text">
                        September 16, 2023
                      </span>
                    </div>
                    <div class="flex items-center gap-[6px]">
                      <span>
                        <i class="fa-regular fa-comment text-base text-theme"></i>
                      </span>
                      <span class="text-sm text-text">3 Comments</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- pagination  -->
          <div class="mt-[60px]" data-aos="fade-up" data-aos-delay="100">
            <ul class="flex justify-center space-x-4">
              <li class="group">
                <a href="blog-details.html" class="pagination">
                  <i class="fa-light fa-arrow-left"></i>
                </a>
              </li>
              <li class="group">
                <a href="blog-details.html" class="pagination"> 1 </a>
              </li>
              <li class="group">
                <a href="#" class="pagination"> 2 </a>
              </li>
              <li class="group">
                <a to="#" class="pagination"> ... </a>
              </li>
              <li class="group">
                <a to="#" class="pagination"> 10 </a>
              </li>
              <li class="group">
                <a to="#" class="pagination">
                  <i class="fa-light fa-arrow-right"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection
