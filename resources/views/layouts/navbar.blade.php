<nav class="grid grid-cols-2 md:flex justify-between px-10 md:px-20 items-center fixed py-4 navbar-all transition-all mt-5 z-50">
        <div class="w-[80%] md:w-[15%] logo-nav z-50 mr-auto" data-aos="fade-up">
            <a href="/" class="logo-link w-full">
                <img src="{{asset('assets/images/textdifw.png')}}" alt="Logo Diferso" width="100%" height="100%">
            </a>
        </div>
        <div class="justify-between w-[50%] hidden md:flex">
            <div class="w-3/4 flex justify-between text-center nav-links m;-auto">
                <a href="#banner" class="text-sm p-1 link text-[#DDDDDD] hover:text-[#F05454] transition-colors text-md font-bold">Home</a>
                <a href="#about" class="text-sm p-1 link text-[#DDDDDD] hover:text-[#F05454] transition-colors text-md font-bold">About</a>
                <a href="#portfolio" class="text-sm p-1 link text-[#DDDDDD] hover:text-[#F05454] transition-colors text-md font-bold">Portfolio</a>
            </div>
        </div>
        <div class="justify-end hidden w-[15%] md:flex">
                <a href="#contact" class="text-sm mx-auto font-bold bg-[#F05454] px-10 py-2 link text-[#DDDDDD] hover:bg-[#DDDDDD] rounded hover:text-[#F05454] transition-colors">Contact</a>
        </div>
        <div class=" w-3/12 block md:hidden hamburger z-50 ml-auto">
            <div class=" cursor-pointer space-y-2 w-fit mx-auto">
                <span class="block w-8 h-1 bg-[#DDDDDD] rounded-md"></span>
                <span class="block w-8 h-1 bg-[#DDDDDD] rounded-md"></span>
                <span class="block w-8 h-1 bg-[#DDDDDD] rounded-md"></span>
            </div>
        </div>
                   <!-- START: Menu Hamburger -->
        <div class="menu-hamburger hidden transition-all">
            <div class="w-screen h-96 bg-[#F05454] z-30 absolute top-0 left-0 right-0 bottom-0 py-5">
                <div class="justify-between w-[50%] md:flex mx-auto mt-20">
                    <div class="grid grid-cols-1 gap-5 justify-between text-center nav-links mx-auto">
                        <a href="#banner" class="text-lg p-1 link text-[#DDDDDD] hover:text-[#222831] transition-colors text-md font-bold md:hover:text-[#F05454]">Home</a>
                        <a href="#about" class="text-lg p-1 link text-[#DDDDDD] hover:text-[#222831] transition-colors text-md font-bold">About</a>
                        <a href="#portfolio" class="text-lg p-1 link text-[#DDDDDD] hover:text-[#222831] transition-colors text-md font-bold">Portfolio</a>
                        <a href="#contact" class="text-sm font-bold bg-[#222831] px-10 py-2 link text-[#F05454] hover:bg-[#DDDDDD] rounded hover:text-[#F05454] transition-colors">Contact</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Menu Hamburger -->
    </nav>
