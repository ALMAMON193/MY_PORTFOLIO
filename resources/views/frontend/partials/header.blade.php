<header class="relative z-[99]">
    <div class="container mx-auto pt-[30px]">
        <div class="flex justify-between rounded-[10px] bg-card px-[15px] py-[30px] md:px-[30px]">
            <div class="logo flex items-center">
                <a href="/">
                    <img style="height:50px;" src="{{ asset('') }}frontend/images/icon/logo.png" alt="Lariv - React Portfolio Template" />
                </a>
            </div>
            <menu class="hidden items-center lg:flex">
                <ul class="flex gap-[40px]">
                    <li>
                        <a href="{{route('home')}}" class="navActive">Home</a>
                    </li>
                    <li>
                        <a href="{{route('about')}}" class="navNotActive">About Us</a>
                    </li>
                    <li>
                        <a href="{{route('portfolio')}}" class="navNotActive">Portfolio</a>
                    </li>
                    <li>
                        <a href="{{route('service')}}" class="navNotActive">Service</a>
                    </li>
                    <li>
                        <a href="{{route('blog')}}" class="navNotActive">Blog</a>
                    </li>
                    <li>
                        <a href="{{route('contact')}}" class="navNotActive">Contact</a>
                    </li>
                </ul>
            </menu>
            <div class="block lg:hidden">
                <div class="flex items-center gap-4 px-[10px]">
                    <span
                        class="sidebar-open rounded-full border border-[#919295] flex justify-center items-center w-[50px] h-[50px]">
                        <i class="fa-light fa-bars-sort text-text text-[22px]"></i>
                    </span>
                </div>
            </div>
        </div>
    </div>
</header>
