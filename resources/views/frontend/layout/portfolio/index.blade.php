@extends('frontend.app')
@section('title', 'index')
@push('style')

@endpush
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
                    <h2 class="text-[32px] font-semibold uppercase leading-tight text-white md:text-[52px]"
                        data-aos="fade-up" data-aos-delay="100">
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
                        @foreach ($portfolio as $item)
                            <div class="col-span-12 md:col-span-6 lg:col-span-4" data-aos="fade-up" data-aos-delay="200">
                                <div class="group rounded-2xl bg-btn p-[30px]">
                                    <div class="overflow-hidden rounded-2xl">
                                        @if(isset($image[$item->id]) && $image[$item->id]->isNotEmpty())
                                            <img src="{{ asset($image[$item->id]->first()->image) }}"
                                                 alt="{{ $item->name }}"
                                                 class="w-full object-cover transition-all duration-500 group-hover:scale-[110%]">
                                        @else
                                            <img src="{{ asset('frontend/images/projects/project-1.png') }}"
                                                 alt="Default Project Image"
                                                 class="w-full object-cover transition-all duration-500 group-hover:scale-[110%]">
                                        @endif
                                    </div>
                                    <div>
                                        <p class="mt-[16px] text-[14px] text-text">
                                            {{ $item->name }}
                                        </p>
                                        <div class="text-white transition-all duration-300 cursor-pointer portfolio-button-open hover:text-theme">
                                            <a href="{{ route('portfolio.details', $item->id) }}">
                                                <h2 class="mt-[15px] text-[20px] font-medium capitalize md:text-[20px]">
                                                    {{ \Illuminate\Support\Str::limit(strip_tags($item->description), 30) }}
                                                </h2>
                                            </a>
                                        </div>
                                        <!-- GitHub and Live buttons -->
                                        <div class="mt-[15px] flex gap-4 flex-wrap justify-start">
                                            <!-- GitHub Button -->
                                            @if($item->github_link)
                                                <a href="https://www.mozycihad.me.uk" target="_blank" class="git_btn_button flex items-center justify-center gap-2" style="
        display: inline-block;
        border-radius: 0.375rem;
        border: none; /* Removed the border */
        --tw-bg-opacity: 1;
        background-color: rgb(255 1 79 / var(--tw-bg-opacity));
        padding: 12px 26px;
        font-weight: 600;
        width: 48%;
        text-align: center;
        transition: all 0.3s ease;">
                                                    <!-- GitHub Icon -->
                                                    <i class="fab fa-github"></i>
                                                    GitHub
                                                </a>
                                            @endif

                                            <!-- Live Button -->
                                            @if($item->live_link)
                                                <a href="https://www.nux.com" target="_blank" class="live_link_btn flex items-center justify-center gap-2" style="
        display: inline-block;
        text-align: center;
        border-radius: 0.375rem;
        border: none; /* Removed the border */
        --tw-bg-opacity: 1;
        background-color: #000000;
        padding: 12px 26px;
        font-weight: 600;
        width: 48%;
        transition: all 0.3s ease;">
                                                    <!-- Live Icon -->
                                                    <i class="fas fa-link"></i>
                                                    Live
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
