@extends('layouts.master')

@section('content')
<section class="home">
    <!-- START : BANNER -->
    <div class="video-container h-screen overflow-hidden w-screen" id="banner">
        <div class="text-banner pt-32 px-10 lg:px-20 absolute z-20">
            <h1 class="text-[#DDDDDD] text-[14vw] lg:text-8xl text-center leading-[1.1] font-bold">Create Your Dream <span class="text-[#F05454]"> Website </span> and <span class="text-[#F05454]"> Software </span> with Us</h1>
            <a href="#about">
                <div class="w-10 h-10 p-2 rounded-full bg-[#F05454] mx-auto mt-16 animate-bounce cursor-pointer">
                    <img src="{{asset('assets/images/down-arrow.png')}}" alt="Arrow Down" width="100%" height="100%">
                </div>
            </a>
        </div>
        <div class="overlay bg-[#222831] w-full h-screen opacity-90 absolute z-10"></div>
        <video autoplay muted loop class="max-w-[initial] md:max-w-[280%] lg:max-w-full">
            <source src="{{asset('assets/video/video-home.mp4')}}" type="video/mp4">
        </video>
    </div>
    <!-- END: BANNER -->

    <!-- START: About and Services -->
    <div class="about px-10 lg:px-20 py-10" id="about">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
            <div class="">
                <h2 class="text-4xl text-[#222831] font-bold">
                    Diferso <span class="text-[#F05454]">Agency</span>
                </h2>
                <p class="text-sm mt-2 mb-6">
                    Website & Software Development
                </p>
                <a href="" class="text-[#F05454] hover:text-[#222831] transition-colors border-b border-b-[#F05454] hover:border-b-[#222831] pb-2">
                    See Our Portfolio >
                </a>
            </div>
            <div class="text-justify">
                <p>Formed to assist you in meeting your needs in website and software development. Done by Expert Staff to produce maximum results and exceed your expectations</p>
            </div>
            <div class="text-justify">
                <p>We work professionally and keep in touch with you as a Client, so that the programs we produce can suit your needs. Because the key to producing a good program is communication</p>
            </div>
        </div>
    </div>

    <!-- Services -->
    <div class="services px-10 lg:px-20 mb-20">
        <h2 class="font-bold mb-5 text-4xl text-right">Our <span class="text-[#F05454]">Services</span></h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-20">
            <div class="text-center px-10 py-7 bg-[#222831] rounded-lg">
                <img src="{{asset('assets/images/website-icon.svg')}}" alt="" width="30%" height="auto" class="mx-auto">
                <h3 class="mt-3 font-bold text-xl text-[#F05454] mb-3">Web Development</h3>
                <p class="text-justify text-[#dddddd]">Solutions for your website needs, in addition to a beautiful website by design but we also focus on SEO so that your website can show up on google and build your brand more exposure</p>
            </div>
            <div class="text-center px-10 py-7 bg-[#222831] rounded-lg">
                <img src="{{asset('assets/images/software-icon.svg')}}" alt="" width="30%" height="auto" class="mx-auto">
                <h3 class="mt-3 font-bold text-xl text-[#F05454] mb-3">Software Development</h3>
                <p class="text-justify text-[#dddddd]">Create software according to your wishes with a transparent process and keep in touch with you during development to produce the best software according to your expectations</p>
            </div>
            <div class="text-center px-10 py-7 bg-[#222831] rounded-lg">
                <img src="{{asset('assets/images/mobile-icon.svg')}}" alt="" width="30%" height="auto" class="mx-auto">
                <h3 class="mt-3 font-bold text-xl text-[#F05454] mb-3">Mobile Application</h3>
                <p class="text-justify text-[#dddddd]">We make mobile applications that on both Android and iOS and work on all mobile devices. Produce quality mobile applications with us to meet your mobile application needs</p>
            </div>
        </div>
    </div>
    <!-- END: About and Services -->

    <!-- START: Portfolio -->
    <div class="portfolio relative" id="portfolio">
        <div class="px-10 lg:px-20 z-20 absolute">
            <h2 class="z-20 text-4xl font-bold">Our Portfolio</h2>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-10 mt-10">
                <div>
                    <img src="{{asset('assets/images/dumy.jpg')}}" alt="" width="100%" height="auto" class="rounded-lg">
                </div>
                <div>
                    <h3 class="font-bold text-[#222831] lg:text-[#F05454] text-3xl">Tekenens Studio </h3>
                    <div class="desc mt-3">
                        <p>Year : <span class="font-bold">2022</span></p>
                        <p>Project : <span class="font-bold">Website Development</span></p>
                    </div>
                    <div class="qoutes mt-4">
                       <p class="text-sm">"Pembuatan Website untuk Studio Gambar dan Illustrasi di Surabaya"</p>
                    </div>
                    <div class="button-to mt-6">
                        <a href="https://tekenens.com/" class="text-sm text-[#F05454] border-b-[#F05454] border-b pb-1 hover:text-black transition-colors hover:border-b-black">
                            Go to Project >
                        </a>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-10 mt-10">
                <div></div>
                <div>
                    <h3 class="font-bold text-[#F05454] text-3xl text-right">ERP</h3>
                    <div class="desc mt-3 text-right">
                        <p>Year : <span class="font-bold">2021</span></p>
                        <p>Project : <span class="font-bold">Software Development</span></p>
                    </div>
                    <div class="qoutes mt-4 text-right">
                       <p class="text-sm">"Sistem ERP untuk seluruh sektor di perusahaan"</p>
                    </div>
                    <div class="button-to mt-6 text-right">
                        <a href="https://tekenens.com/" class="text-sm text-[#F05454] border-b-[#F05454] border-b pb-1 hover:text-black transition-colors hover:border-b-black">
                            < Go to Project
                        </a>
                    </div>
                </div>
                <div>
                    <img src="{{asset('assets/images/dumy.jpg')}}" alt="" width="100%" height="auto" class="rounded-lg">
                </div>
            </div>
        </div>
        <div class="mb-64">
            <div class="w-48 h-96 bg-[#F05454] z-10 "></div>
        </div>
    </div>
<!-- END: PORTFOLIO -->

<!-- START : CONTACT -->
    <div class="contact mt-[45rem] md:mt-[70rem] lg:mt-10" id="contact">
        <div class="px-10 lg:px-20">
            <h2 class="text-4xl font-bold">Our Contact</h2>
            <p class="mt-3 text-[#F05454]">Love to hear for you, Get In Touch with us !</p>
            <form action="{{route('send_offer_mail')}}" method="POST" class="mt-5">
                @csrf
                <div class="grid grid-cols-2 gap-5">
                    <div>
                        <label for="name" class="font-bold">Your Name</label>
                        <br>
                        <input type="text" name="name" id="name" class="mt-3 border border-[#F05454] rounded-xl bg-transparent px-4 py-2 h-7 focus:outline-transparent focus:border-2 w-full">
                    </div>
                    <div>
                        <label for="email" class="font-bold">Your Email</label>
                        <br>
                        <input type="email" name="email" id="email" class="mt-3 border border-[#F05454] rounded-xl bg-transparent px-4 py-2 h-7 focus:outline-transparent focus:border-2 w-full">
                    </div>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-5 mt-6">
                    <div>
                        <label for="name" class="font-bold">What's Your Need</label>
                        <br>
                        <div>
                            <select name="services" id="services" class="mt-3 border border-[#F05454] rounded-xl bg-transparent px-4 h-7 focus:outline-transparent focus:border-2 w-full">
                                <option value="web">Our Services</option>
                                <option value="web">Web Development</option>
                                <option value="software">Software Development</option>
                                <option value="mobile">Mobile Application</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <label for="email" class="font-bold">Your Budget</label>
                        <br>
                        <div>
                            <select name="budgets" id="budgets" class="mt-3 border border-[#F05454] rounded-xl bg-transparent px-4 h-7 focus:outline-transparent focus:border-2 w-full">
                                <option value="3jt">< Rp.3.000.000</option>
                                <option value="3-5jt">Rp.3.000.000 - Rp.5.000.000</option>
                                <option value="5-10jt">Rp.5.000.000 - Rp.10.000.000</option>
                                <option value="10-50jt">Rp.10.000.000 - Rp.50.000.000</option>
                                <option value="50jt">> Rp.50.000.000</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <label for="company" class="font-bold">Your Company Name</label>
                        <br>
                        <input type="company" name="company" id="company" class="mt-3 border border-[#F05454] rounded-xl bg-transparent px-4 py-2 h-7 focus:outline-transparent focus:border-2 w-full">
                    </div>
                </div>
                <div class="mt-10">
                    <label for="company" class="font-bold">Your Messages</label>
                    <br>
                    <textarea id="w3review" name="messages" rows="4" cols="50" class="w-full mt-3  border border-[#F05454] rounded-xl bg-transparent px-4 focus:outline-transparent focus:border-2"></textarea>
                </div>
                <button type="submit" class="mt-10 bg-[#222831] px-5 py-2 text-[#F05454] rounded-xl hover:text-[#222831] hover:bg-[#F05454] transition-colors">Send Messages</button>
            </form>
        </div>
    </div>
    <div class="whatsapp mt-20">
        <div class="bg-[#F05454] w-screen h-32 pt-3 lg:pt-11">
            <div class="px-20 grid grid-cols-1 lg:grid-cols-2 gap-5 items-center">
                <div class="lg:w-[45rem] text-center">
                    <p class="text-[#DDDDDD] text-xl lg:text-3xl font-bold inline">Confused about your needs? Consult with us</p>
                </div>
                <div class="w-60 text-center">
                    <a href="https://api.whatsapp.com/send/?phone=628993994131&text&type=phone_number&app_absent=0" class="text-center bg-[#222831] px-5 py-2 ml-3 lg:ml-[100%] text-[#dddddd] rounded-xl">08993994131</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
