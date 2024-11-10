@extends('frontend.app')
@section('title','index')
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
                      <h3 class="wow fadeIn  text-[24px] font-semibold text-white animated" data-aos="fade-up" data-aos-delay="100" style="visibility: visible; animation-name: fadeIn;">
                        Hy! I’m
                        <span class="text-theme"> AMIT!</span>
                      </h3>
                      <p class="mt-[6px] text-text" data-aos="fade-up" data-aos-delay="150">
                        Software Developer
                      </p>
                      <div class="mt-[26px] flex justify-center" data-aos="fade-up" data-aos-delay="200">
                        <img src="assets/images/profile/user.png" alt="Lariv portfolio web template" class="w-full rounded-2xl object-cover">
                      </div>
                      <div class="mt-[26px]" data-aos="fade-up" data-aos-delay="250">
                        <p class="text-[20px] text-text" data-aos="fade-up" data-aos-delay="100">
                          admin@demo.com
                        </p>
                        <p class="mt-[10px] text-text" data-aos="fade-up" data-aos-delay="150">
                          4688 Hickman Street <br>
                          Chicago, IL 60605
                        </p>
                      </div>
                      <div class="mt-[30px] flex justify-center gap-3" data-aos="fade-up" data-aos-delay="200">
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
                        <a href="assets/pdf/Resume-of-Amit-Biswas-MERN.pdf" class="block rounded-full border-2 border-theme bg-theme py-[10px] font-medium text-white transition-all duration-300 hover:bg-transparent">
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
              <h2 class="text-[32px] font-semibold uppercase leading-tight text-white md:text-[52px]" data-aos="fade-up" data-aos-delay="50">
                I can develop that
                <br class="hidden md:block">
                help
                <span class="text-theme"> people!</span>
              </h2>
              <p class="mt-[20px] text-text" data-aos="fade-up" data-aos-delay="100">
                Since starting my excursion as an independent creator almost
                quite a while back, I've accomplished remote work for
                organizations, counseled for new companies, and teamed up with
                capable individuals to make computerized items for both
                business and purchaser use. I'm discreetly sure, normally
                inquisitive, and ceaselessly dealing with further developing
                my chops each plan issue in turn.
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
                  <p class="mt-2 text-[16px] text-text">Amit Biswas</p>
                </div>
                <div class="col-span-6" data-aos="fade-up" data-aos-delay="200">
                  <p class="text-[18px] font-medium">Birthday</p>
                  <p class="mt-2 text-[16px] text-text">22 Dec, 1994</p>
                </div>
              </div>
              <div class="mt-[20px] grid grid-cols-12">
                <div class="col-span-6" data-aos="fade-up" data-aos-delay="250">
                  <p class="text-[18px] font-medium">Email</p>
                  <p class="mt-2 text-[16px] text-text">contact@amitjs.com</p>
                </div>
                <div class="col-span-6" data-aos="fade-up" data-aos-delay="250">
                  <p class="text-[18px] font-medium">Skype</p>
                  <p class="mt-2 text-[16px] text-text">amitjs963</p>
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
                  <i class="fa-solid fa-fire-flame-curved absolute left-[-13px] top-[-25px] text-[30px] text-theme"></i>

                  <div>
                    <p class="text-text" data-aos="fade-up" data-aos-delay="50">
                      2021 - Present
                    </p>
                    <h3 class="mt-[10px] text-[20px] font-medium text-white md:text-[25px]" data-aos="fade-up" data-aos-delay="100">
                      Framer Designer &amp; Developer
                    </h3>
                    <p class="mt-[5px] text-[18px] font-medium text-text" data-aos="fade-up" data-aos-delay="150">
                      Liza Yoolo ITC Company
                    </p>
                    <p class="mt-[15px] text-text" data-aos="fade-up" data-aos-delay="200">
                      Since starting my excursion as an independent creator
                      almost quite a while back, I've accomplished remote work
                      for organizations, counseled for new companies, and
                      teamed up with capable individuals to make computerized
                      items for both business and purchaser use.
                    </p>
                  </div>

                  <div>
                    <p class="text-text" data-aos="fade-up" data-aos-delay="50">
                      2016 - 2020
                    </p>
                    <h3 class="mt-[10px] text-[20px] font-medium text-white md:text-[25px]" data-aos="fade-up" data-aos-delay="100">
                      Web Application Manager
                    </h3>
                    <p class="mt-[5px] text-[18px] font-medium text-text" data-aos="fade-up" data-aos-delay="150">
                      Ultra Luca Company
                    </p>
                    <p class="mt-[15px] text-text" data-aos="fade-up" data-aos-delay="200">
                      Since starting my excursion as an independent creator
                      almost quite a while back, I've accomplished remote work
                      for organizations, counseled for new companies, and
                      teamed up with capable individuals to make computerized
                      items for both business and purchaser use.
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
                  <i class="fa-solid fa-fire-flame-curved absolute left-[-13px] top-[-25px] text-[30px] text-theme"></i>

                  <div>
                    <p class="text-text" data-aos="fade-up" data-aos-delay="100">
                      2021 - Present
                    </p>
                    <h3 class="mt-[10px] text-[20px] font-medium text-white md:text-[25px]" data-aos="fade-up" data-aos-delay="150">
                      MBA
                    </h3>
                    <p class="mt-[5px] text-[18px] font-medium text-text" data-aos="fade-up" data-aos-delay="200">
                      University of Dhaka
                    </p>
                    <p class="mt-[15px] text-text" data-aos="fade-up" data-aos-delay="250">
                      Since starting my excursion as an independent creator
                      almost quite a while back, I've accomplished remote work
                      for organizations, counseled for new companies, and
                      teamed up with capable individuals to make computerized
                      items for both business and purchaser use.
                    </p>
                  </div>

                  <div>
                    <p class="text-text" data-aos="fade-up" data-aos-delay="50">
                      2016 - 2020
                    </p>
                    <h3 class="mt-[10px] text-[20px] font-medium text-white md:text-[25px]" data-aos="fade-up" data-aos-delay="100">
                      BBA
                    </h3>
                    <p class="mt-[5px] text-[18px] font-medium text-text" data-aos="fade-up" data-aos-delay="150">
                      University of Dhaka
                    </p>
                    <p class="mt-[15px] text-text" data-aos="fade-up" data-aos-delay="200">
                      Since starting my excursion as an independent creator
                      almost quite a while back, I've accomplished remote work
                      for organizations, counseled for new companies, and
                      teamed up with capable individuals to make computerized
                      items for both business and purchaser use.
                    </p>
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
                  <i class="fa-solid fa-fire-flame-curved absolute left-[-13px] top-[-25px] text-[30px] text-theme"></i>

                  <div>
                    <p class="text-text" data-aos="fade-up" data-aos-delay="100">
                      2016 - 2020
                    </p>
                    <h3 class="mt-[10px] text-[20px] font-medium text-white md:text-[25px]" data-aos="fade-up" data-aos-delay="150">
                      Figma
                    </h3>
                    <p class="mt-[5px] text-[18px] font-medium text-text" data-aos="fade-up" data-aos-delay="200">
                      UI/UX Design
                    </p>
                    <div class="mt-[20px] w-full">
                      <div class="mb-2 flex items-center justify-between gap-4" data-aos="fade-up" data-aos-delay="250">
                        <p class="text-[16px] font-medium text-white">
                          Figma
                        </p>
                        <h6 class="text-white">85%</h6>
                      </div>
                      <div class="border border-theme/20 bg-theme/10 py-[8px] px-1 flex items-center h-[12px] w-full overflow-hidden font-sans text-xs font-medium rounded-full">
                        <div class="h-[6px] justify-center overflow-hidden rounded-full bg-theme wow" style="width: 85%; visibility: hidden; animation-name: none;"></div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <p class="text-text" data-aos="fade-up" data-aos-delay="100">
                      2016 - 2020
                    </p>
                    <h3 class="mt-[10px] text-[20px] font-medium text-white md:text-[25px]" data-aos="fade-up" data-aos-delay="150">
                      NEXT Prisma Application
                    </h3>
                    <p class="mt-[5px] text-[18px] font-medium text-text" data-aos="fade-up" data-aos-delay="200">
                      Web Application Developer
                    </p>
                    <div class="mt-[20px] w-full">
                      <div class="mb-2 flex items-center justify-between gap-4" data-aos="fade-up" data-aos-delay="250">
                        <p class="text-[16px] font-medium text-white">
                          NEXT-JS
                        </p>
                        <h6 class="text-white">95%</h6>
                      </div>
                      <div class="border border-theme/20 bg-theme/10 py-[8px] px-1 flex items-center h-[12px] w-full overflow-hidden font-sans text-xs font-medium rounded-full">
                        <div class="h-[6px] justify-center overflow-hidden rounded-full bg-theme wow" style="width: 95%; visibility: hidden; animation-name: none;"></div>
                      </div>
                    </div>
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
