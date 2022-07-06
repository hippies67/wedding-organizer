<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Beranda | Wedding Organizer</title>
        <link rel="stylesheet preload" as="style" href="{{ asset('front/css/preload.min.css') }}" />
        <link rel="stylesheet preload" as="style" href="{{ asset('front/css/icomoon.css') }}" />
        <link rel="stylesheet preload" as="style" href="{{ asset('front/css/libs.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('front/css/index.min.css') }}" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        @yield('css')
        <style>
            label.error {
                color: #f1556c;
                font-size: 13px;
                font-size: .875rem;
                font-weight: 400;
                line-height: 1.5;
                margin-top: 5px;
                padding: 0;
            }

            input.error {
                color: #f1556c;
                border: 1px solid #f1556c;
            }

            .alert {
                background: #f1556c;
                color: #ffffff;
                padding: 30px;
                margin-bottom: 20px;
                display: none;
            }
            
            .dropdown {
                position: relative;
                display: inline-block;
            }

            .dropdown-content {
                display: none;
                position: absolute;
                background-color: #f9f9f9;
                min-width: 160px;
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                padding: 12px 16px;
                z-index: 1;
            }

            .dropdown:hover .dropdown-content {
                display: block;
            }

            .btn-logout {
                width: 50% !important;
            }
        </style>
    </head>
    <body>
        <header class="header d-flex flex-wrap align-items-center" data-page="home" data-overlay="true">
            <div class="container d-flex flex-wrap flex-xl-nowrap align-items-center justify-content-between">
                <a class="brand header_logo d-flex align-items-center" href="{{ url('/') }}">
                    <span class="logo">
                        {{-- @foreach($web as $data)
                                    <p class="footer_secondary-copyright">
                                        {{ $data->name }} &copy;
                                        <span class="linebreak">All rights reserved Copyrights <span id="currentYear"></span></span>
                                    </p>
                                @endforeach
                                @if(count($web) < 1)
                                
                                @endif --}}
                    </span>
                    @foreach($web as $data)
                    <img class="logo-abbr" src="{{ isset($data) ? asset('profile/'. $data->logo) : '' }}" style="width: 100px !important;">
                    {{-- <span>{{ $data->name }}</span> --}}
                    @endforeach
                    @if(count($web) < 1)
                        <span class="accent">Wedding Organizer</span> 
                    @endif
                </a>
                <nav class="header_nav">
                    <ul class="header_nav-list">
                        <li class="header_nav-list_item">
                            <a class="nav-link d-inline-flex align-items-center" href="{{ url('/') }}">
                                Beranda
                            </a>
                        </li>
                        <li class="header_nav-list_item">
                            <a class="nav-link d-inline-flex align-items-center" href="{{ url('paket-wedding') }}">
                                Paket Wedding
                            </a>
                        </li>
                    </ul>
                </nav>
                <span class="header_trigger d-inline-flex d-xl-none flex-column justify-content-between">
                    <span class="line line--short"></span>
                    <span class="line line"></span>
                    <span class="line line--short"></span>
                    <span class="line line"></span>
                </span>
                <div class="header_user d-flex justify-content-end align-items-center">
                    <a class="header_user-action d-inline-flex align-items-center justify-content-center"
                        data-bs-toggle="offcanvas"
                        @if(Auth::guard('web')->user())
                        data-bs-target="#cartOffcanvas"
                        @else
                        data-bs-target="#loginCartCanvas"
                        @endif
                        aria-controls="cartOffcanvas">
                        <i class="icon-basket"></i>
                    </a>
                    @if(Auth::guard('web')->user())
                    
                        <a href="" style="margin-left: 10px;" data-bs-toggle="offcanvas"
                        data-bs-target="#logoutCanvas" aria-controls="cartOffcanvas"><span>{{ Auth::guard('web')->user()->nama }}</span></a>
                        <span><i class="fas fa-sort-down" style="margin-left: 5px;margin-bottom: 15px;"></i></span>  
                    @else
                        <a class="header_user-action d-inline-flex align-items-center justify-content-center" id="loginButtonTop" data-bs-toggle="offcanvas"
                        data-bs-target="#loginCanvas" aria-controls="cartOffcanvas">
                            <i class="fa-solid fa-arrow-right-to-bracket"></i>
                        </a>  
                    @endif
                    {{-- @guest
                        <a class="header_user-action d-inline-flex align-items-center justify-content-center" data-bs-toggle="offcanvas"
                        data-bs-target="#loginCanvas" aria-controls="cartOffcanvas">
                            <i class="fa-solid fa-arrow-right-to-bracket"></i>
                        </a>                    
                    @endguest --}}
                  
                </div>
            </div>
        </header>
        <!-- Homepage content start -->
        <main>
            @yield('content')
        </main>
        <!-- Homepage content end -->
        <footer class="footer">
            <div class="footer_main section">
                <div class="container d-flex flex-column flex-md-row flex-wrap flex-xl-nowrap justify-content-xl-between">
                    <div class="footer_main-about footer_main-block col-md-6 col-xl-auto">
                        <a class="brand footer_main-about_brand d-flex align-items-center" href="{{ url('/') }}">
                            {{-- <span class="logo"> --}}
                                {{-- @foreach($web as $data)
                                    <p class="footer_secondary-copyright">
                                        {{ $data->name }} &copy;
                                        <span class="linebreak">All rights reserved Copyrights <span id="currentYear"></span></span>
                                    </p>
                                @endforeach
                                @if(count($web) < 1)
                                
                                @endif --}}
                            {{-- </span> --}}
                            @foreach($web as $data)
                            <span class="accent">{{ $data->name }}</span>
                            {{-- <span>list</span> --}}
                            @endforeach
                            {{-- @if(count($web) < 1)
                            <span class="accent">Wedding Organizer</span>
                            @endif --}}
                        </a>
                        <div class="footer_main-about_wrapper">
                            @foreach($web as $data)
                            <p class="text">
                                {{ $data->description }}
                            </p>
                            @endforeach
                            @if(count($web) < 1)
                            <p class="text">
                               Isi data profile di admin
                            </p>
                            @endif
                            <ul class="socials d-flex align-items-center accent">
                                @foreach($web as $data)
                                <li class="list-item">
                                    <a class="link" href="https://facebook.com/{{ $data->facebook }}" rel="noopener norefferer">
                                        <i class="icon-facebook icon"></i>
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a class="link" href="https://instagram.com/{{ $data->instagram }}" rel="noopener norefferer">
                                        <i class="icon-instagram icon"></i>
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a class="link" href="https://twitter.com/{{ $data->twitter }}" rel="noopener norefferer">
                                        <i class="icon-twitter icon"></i>
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a class="link" href="https://wa.me/{{ $data->whatsapp }}" rel="noopener norefferer">
                                        <i class="icon-whatsapp icon"></i>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="footer_main-contacts footer_main-block col-md-6 col-xl-auto">
                        <h4 class="footer_main-contacts_header footer_main-header">Kontak Whatsapp</h4>
                        <ul class="footer_main-contacts_list">
                            <li class="list-item d-flex align-items-center">
                                <span class="icon d-flex justify-content-center align-items-center">
                                    <i class="icon-call"></i>
                                </span>
                                <div class="wrapper d-flex flex-column">
                                    @foreach($web as $data)
                                        <a class="link" href="https://wa.me/{{ $data->whatsapp }}">+{{ $data->whatsapp }}</a>
                                    @endforeach
                                    @if(count($web) < 1)
                                        <a class="link" href="https://wa.me/6285156574497">+6285156574497</a>
                                    @endif
                                </div>
                            </li>
                            {{-- <li class="list-item d-flex align-items-center">
                                <span class="icon d-flex justify-content-center align-items-center">
                                    <i class="icon-location"></i>
                                </span>
                                <div class="wrapper d-flex flex-column">
                                    <span>192 North Border Street</span>
                                    <span>Lithonia, GA 30038</span>
                                </div>
                            </li>
                            <li class="list-item d-flex align-items-center">
                                <span class="icon d-flex justify-content-center align-items-center">
                                    <i class="icon-clock"></i>
                                </span>
                                <div class="wrapper d-flex flex-column">
                                    <span>9:00 am to 5:00 pm</span>
                                    <span>Monday to Saturday</span>
                                </div>
                            </li> --}}
                        </ul>
                    </div>
                    {{-- <div class="footer_main-nav footer_main-block col-md-6 col-xl-auto">
                        <h4 class="footer_main-nav_header footer_main-header">Shop Products</h4>
                        <ul class="footer_main-nav_list d-flex flex-wrap flex-md-column">
                            <li class="list-item">
                                <a class="link d-inline-flex align-items-center" href="#">
                                    <i class="icon-caret_right accent icon"></i>
                                    Flower
                                </a>
                            </li>
                            <li class="list-item">
                                <a class="link d-inline-flex align-items-center" href="#">
                                    <i class="icon-caret_right accent icon"></i>
                                    Oils
                                </a>
                            </li>
                            <li class="list-item">
                                <a class="link d-inline-flex align-items-center" href="#">
                                    <i class="icon-caret_right accent icon"></i>
                                    Edibles
                                </a>
                            </li>
                            <li class="list-item">
                                <a class="link d-inline-flex align-items-center" href="#">
                                    <i class="icon-caret_right accent icon"></i>
                                    Concentrates
                                </a>
                            </li>
                            <li class="list-item">
                                <a class="link d-inline-flex align-items-center" href="#">
                                    <i class="icon-caret_right accent icon"></i>
                                    Seeds
                                </a>
                            </li>
                            <li class="list-item">
                                <a class="link d-inline-flex align-items-center" href="#">
                                    <i class="icon-caret_right accent icon"></i>
                                    Shop All
                                </a>
                            </li>
                        </ul>
                    </div> --}}
                    <div class="footer_main-instagram footer_main-block col-md-6 col-xl-auto">
                        <h4 class="footer_main-instagram_header footer_main-header">Instagram</h4>
                        <ul class="footer_main-instagram_list d-grid">
                            <li class="list-item">
                                <a class="link" href="#" rel="noopener norefferer">
                                    <picture>
                                        <source data-srcset="{{ asset('footer-4.jpg') }}" srcset="{{ asset('footer-4.jpg') }}" type="image/webp" />
                                        <img
                                            class="lazy preview"
                                            data-src="{{ asset('footer-4.jpg') }}"
                                            src="{{ asset('footer-4.jpg') }}"
                                            alt="instagram post"
                                        />
                                    </picture>
                                </a>
                            </li>
                            <li class="list-item">
                                <a class="link" href="#" rel="noopener norefferer">
                                    <picture>
                                        <source data-srcset="{{ asset('footer-1.jpg') }}" srcset="{{ asset('footer-1.jpg') }}" type="image/webp" />
                                        <img
                                            class="lazy preview"
                                            data-src="{{ asset('footer-1.jpg') }}"
                                            src="{{ asset('footer-1.jpg') }}"
                                            alt="instagram post"
                                        />
                                    </picture>
                                </a>
                            </li>
                            <li class="list-item">
                                <a class="link" href="#" rel="noopener norefferer">
                                    <picture>
                                        <source data-srcset="{{ asset('footer-3.jpg') }}" srcset="{{ asset('footer-3.jpg') }}" type="image/webp" />
                                        <img
                                            class="lazy preview"
                                            data-src="{{ asset('footer-3.jpg') }}"
                                            src="{{ asset('footer-3.jpg') }}"
                                            alt="instagram post"
                                        />
                                    </picture>
                                </a>
                            </li>
                            <li class="list-item">
                                <a class="link" href="#" rel="noopener norefferer">
                                    <picture>
                                        <source data-srcset="{{ asset('footer-2.jpg') }}" srcset="{{ asset('footer-2.jpg') }}" type="image/webp" />
                                        <img
                                            class="lazy preview"
                                            data-src="{{ asset('footer-2.jpg') }}"
                                            src="{{ asset('footer-2.jpg') }}"
                                            alt="instagram post"
                                        />
                                    </picture>
                                </a>
                            </li>
                            <li class="list-item">
                                <a class="link" href="#" rel="noopener norefferer">
                                    <picture>
                                        <source data-srcset="{{ asset('footer-5.jpg') }}" srcset="{{ asset('footer-5.jpg') }}" type="image/webp" />
                                        <img
                                            class="lazy preview"
                                            data-src="{{ asset('footer-5.jpg') }}"
                                            src="{{ asset('footer-5.jpg') }}"
                                            alt="instagram post"
                                        />
                                    </picture>
                                </a>
                            </li>
                            <li class="list-item">
                                <a class="link" href="#" rel="noopener norefferer">
                                    <picture>
                                        <source data-srcset="{{ asset('footer-6.jpg') }}" srcset="{{ asset('footer-6.jpg') }}" type="image/webp" />
                                        <img
                                            class="lazy preview"
                                            data-src="{{ asset('footer-6.jpg') }}"
                                            src="{{ asset('footer-6.jpg') }}"
                                            alt="instagram post"
                                        />
                                    </picture>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer_secondary">
                <div
                    class="container d-flex flex-column-reverse flex-md-row justify-content-center align-items-md-center"
                >
                @foreach($web as $data)
                    <p class="footer_secondary-copyright">
                        {{ $data->name }} &copy;
                        <span class="linebreak">All rights reserved Copyrights <span id="currentYear"></span></span>
                    </p>
                @endforeach
                @if(count($web) < 1)
                <p class="footer_secondary-copyright">
                    Wedding Organizer &copy;
                    <span class="linebreak">All rights reserved Copyrights <span id="currentYear"></span></span>
                </p>
                @endif
                    {{-- <ul class="footer_secondary-list d-flex justify-content-center align-items-center">
                        <li class="list-item">
                            <span class="vector">
                                <svg width="62" height="20" viewBox="0 0 62 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M40.3732 0.0307617C35.9754 0.0307617 32.0453 2.29548 32.0453 6.47972C32.0453 11.2783 39.0155 11.6097 39.0155 14.0203C39.0155 15.0354 37.8447 15.944 35.845 15.944C33.0071 15.944 30.886 14.6744 30.886 14.6744L29.9784 18.8967C29.9784 18.8967 32.4219 19.9692 35.6659 19.9692C40.4742 19.9692 44.2577 17.5932 44.2577 13.3375C44.2577 8.26694 37.2584 7.94535 37.2584 5.70787C37.2584 4.91274 38.2196 4.04153 40.2135 4.04153C42.4633 4.04153 44.2988 4.96487 44.2988 4.96487L45.187 0.886776C45.187 0.886776 43.1898 0.0307617 40.3732 0.0307617V0.0307617ZM0.137251 0.338543L0.0307617 0.954103C0.0307617 0.954103 1.88094 1.29052 3.54733 1.9616C5.69294 2.73113 5.84578 3.17912 6.20714 4.57052L10.1448 19.6518H15.4233L23.5552 0.338543H18.2888L13.0636 13.4697L10.9314 2.33912C10.7358 1.06523 9.74536 0.338543 8.53296 0.338543H0.137251V0.338543ZM25.6729 0.338543L21.5416 19.6518H26.5635L30.6803 0.338543H25.6729V0.338543ZM53.682 0.338543C52.471 0.338543 51.8294 0.982675 51.3586 2.10828L44.0011 19.6518H49.2675L50.2864 16.7279H56.7024L57.322 19.6518H61.9688L57.9149 0.338543H53.682V0.338543ZM54.3669 5.55638L55.9279 12.8037H51.7458L54.3669 5.55638V5.55638Z"
                                        fill="#1434CB"
                                    />
                                </svg>
                            </span>
                        </li>
                        <li class="list-item">
                            <span class="vector">
                                <svg width="49" height="30" viewBox="0 0 49 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_276_198133)">
                                        <path
                                            fill-rule="evenodd"
                                            clip-rule="evenodd"
                                            d="M18.1489 26.7542H30.9958V3.20239H18.1489V26.7542Z"
                                            fill="#FF5F00"
                                        />
                                        <path
                                            fill-rule="evenodd"
                                            clip-rule="evenodd"
                                            d="M18.965 14.9784C18.965 10.2003 21.158 5.94476 24.5728 3.20246C22.0752 1.19661 18.9243 0 15.4992 0C7.39105 0 0.818359 6.70616 0.818359 14.9784C0.818359 23.2506 7.39105 29.9568 15.4992 29.9568C18.9243 29.9568 22.0752 28.7602 24.5728 26.7543C21.158 24.0116 18.965 19.7565 18.965 14.9784Z"
                                            fill="#EB001B"
                                        />
                                        <path
                                            fill-rule="evenodd"
                                            clip-rule="evenodd"
                                            d="M47.8693 24.26V23.6787H47.7204L47.5495 24.0786L47.3782 23.6787H47.2294V24.26H47.3342V23.8215L47.4949 24.1997H47.6038L47.7645 23.8206V24.26H47.8693ZM46.9268 24.26V23.7778H47.1176V23.6796H46.6323V23.7778H46.8228V24.26H46.9268ZM48.3277 14.9784C48.3277 23.2506 41.7546 29.9568 33.6468 29.9568C30.2218 29.9568 27.0704 28.7602 24.5732 26.7543C27.9881 24.012 30.181 19.7565 30.181 14.9784C30.181 10.2007 27.9881 5.94517 24.5732 3.20246C27.0704 1.19661 30.2218 0 33.6468 0C41.7546 0 48.3277 6.70616 48.3277 14.9784Z"
                                            fill="#F79E1B"
                                        />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_276_198133">
                                            <rect width="48" height="30" fill="white" transform="translate(0.818359)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </span>
                        </li>
                        <li class="list-item">
                            <span class="vector">
                                <svg width="79" height="21" viewBox="0 0 79 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_276_198139)">
                                        <path
                                            d="M29.6368 4.29468H25.3349C25.1924 4.29459 25.0547 4.34596 24.9464 4.43953C24.8381 4.5331 24.7664 4.66272 24.7442 4.80504L23.0043 15.9649C22.9963 16.0167 22.9995 16.0697 23.0136 16.1201C23.0278 16.1705 23.0526 16.2172 23.0863 16.257C23.12 16.2968 23.1619 16.3287 23.209 16.3506C23.2561 16.3725 23.3073 16.3838 23.3591 16.3837H25.4129C25.5554 16.3837 25.6932 16.3323 25.8015 16.2386C25.9098 16.1449 25.9815 16.0151 26.0035 15.8727L26.4728 12.8627C26.4948 12.7203 26.5664 12.5907 26.6745 12.497C26.7827 12.4033 26.9204 12.3518 27.0628 12.3517H28.4247C31.2585 12.3517 32.8939 10.9644 33.3211 8.21531C33.5135 7.01259 33.3292 6.06759 32.7725 5.40577C32.1611 4.67904 31.0767 4.29468 29.6368 4.29468V4.29468ZM30.1331 8.37059C29.8979 9.93222 28.7184 9.93222 27.578 9.93222H26.9288L27.3843 7.01577C27.3976 6.93044 27.4406 6.85273 27.5055 6.79662C27.5704 6.74051 27.653 6.70968 27.7384 6.70968H28.0359C28.8128 6.70968 29.5456 6.70968 29.9243 7.15768C30.1501 7.42495 30.2193 7.82204 30.1331 8.37059V8.37059ZM42.4961 8.32031H40.436C40.3507 8.32031 40.2681 8.35115 40.2031 8.40726C40.1382 8.46337 40.0952 8.54108 40.0819 8.6264L39.9907 9.20931L39.8466 8.99804C39.4007 8.34322 38.4062 8.12431 37.4135 8.12431C35.1371 8.12431 33.1927 9.86859 32.8141 12.3154C32.6172 13.536 32.8971 14.703 33.5815 15.5169C34.2092 16.2653 35.1075 16.5771 36.1762 16.5771C38.0105 16.5771 39.0276 15.3839 39.0276 15.3839L38.9358 15.963C38.9276 16.0148 38.9306 16.0678 38.9446 16.1183C38.9586 16.1687 38.9833 16.2156 39.0169 16.2555C39.0505 16.2954 39.0922 16.3275 39.1393 16.3495C39.1863 16.3715 39.2375 16.383 39.2893 16.383H41.145C41.2875 16.3831 41.4253 16.3316 41.5336 16.2379C41.6419 16.1442 41.7136 16.0145 41.7356 15.872L42.849 8.73904C42.8572 8.68738 42.8542 8.63454 42.8402 8.58416C42.8263 8.53378 42.8017 8.48707 42.7681 8.44726C42.7346 8.40745 42.6929 8.37548 42.6459 8.35356C42.5989 8.33164 42.5478 8.3203 42.4961 8.32031V8.32031ZM39.6246 12.3765C39.4258 13.5671 38.4917 14.3664 37.3003 14.3664C36.7021 14.3664 36.224 14.1723 35.9171 13.8045C35.6126 13.4392 35.4969 12.9193 35.5938 12.3402C35.7793 11.1598 36.7292 10.3344 37.9023 10.3344C38.4873 10.3344 38.9628 10.531 39.2761 10.902C39.59 11.2769 39.7145 11.7999 39.6246 12.3765V12.3765ZM53.4677 8.32031H51.3976C51.2999 8.32047 51.2038 8.34472 51.1175 8.39096C51.0313 8.43721 50.9575 8.50404 50.9025 8.58568L48.0473 12.8404L46.8371 8.75177C46.7999 8.62707 46.7241 8.51778 46.6208 8.44007C46.5174 8.36237 46.3921 8.32038 46.2634 8.32031H44.2291C44.172 8.32016 44.1157 8.33381 44.0649 8.36012C44.014 8.38643 43.9701 8.42464 43.9368 8.47158C43.9035 8.51852 43.8818 8.57282 43.8735 8.62997C43.8651 8.68711 43.8704 8.74546 43.8888 8.80013L46.169 15.5698L44.0253 18.6313C43.9872 18.6856 43.9646 18.7494 43.96 18.8158C43.9554 18.8823 43.9689 18.9487 43.9991 19.0078C44.0293 19.067 44.075 19.1166 44.1312 19.1512C44.1874 19.1858 44.252 19.2041 44.3178 19.204H46.3854C46.482 19.2042 46.5771 19.1806 46.6627 19.1354C46.7482 19.0902 46.8217 19.0246 46.8767 18.9444L53.7621 8.88986C53.7994 8.83546 53.8213 8.77177 53.8254 8.70568C53.8295 8.6396 53.8156 8.57364 53.7853 8.51496C53.7549 8.45628 53.7093 8.40712 53.6533 8.37281C53.5973 8.3385 53.5332 8.32034 53.4677 8.32031V8.32031Z"
                                            fill="#253B80"
                                        />
                                        <path
                                            d="M60.3215 4.29483H56.0189C55.8766 4.29489 55.739 4.34632 55.6308 4.43988C55.5227 4.53344 55.451 4.66298 55.4289 4.80519L53.689 15.9651C53.6809 16.0168 53.684 16.0696 53.698 16.12C53.7121 16.1704 53.7367 16.2171 53.7703 16.2569C53.8039 16.2967 53.8457 16.3287 53.8926 16.3506C53.9396 16.3725 53.9908 16.3838 54.0425 16.3838H56.2504C56.35 16.3837 56.4463 16.3476 56.5219 16.282C56.5976 16.2165 56.6476 16.1257 56.663 16.0262L57.1568 12.8628C57.1789 12.7205 57.2504 12.5908 57.3586 12.4971C57.4668 12.4034 57.6045 12.3519 57.7469 12.3518H59.1081C61.9425 12.3518 63.5774 10.9646 64.0051 8.21546C64.1982 7.01273 64.0127 6.06773 63.456 5.40592C62.8452 4.67919 61.7613 4.29483 60.3215 4.29483V4.29483ZM60.8178 8.37073C60.5832 9.93237 59.4037 9.93237 58.2627 9.93237H57.6141L58.0702 7.01592C58.0833 6.93059 58.1261 6.85282 58.1909 6.79667C58.2558 6.74052 58.3384 6.70972 58.4237 6.70983H58.7212C59.4975 6.70983 60.2309 6.70983 60.6096 7.15783C60.8354 7.4251 60.904 7.82219 60.8178 8.37073V8.37073ZM73.1802 8.32046H71.1213C71.036 8.32022 70.9533 8.35098 70.8885 8.40715C70.8236 8.46332 70.7808 8.54117 70.7678 8.62655L70.6766 9.20946L70.5319 8.99819C70.086 8.34337 69.0921 8.12446 68.0995 8.12446C65.823 8.12446 63.8793 9.86873 63.5006 12.3156C63.3044 13.5361 63.583 14.7032 64.2674 15.5171C64.8964 16.2655 65.7934 16.5773 66.8622 16.5773C68.6964 16.5773 69.7136 15.3841 69.7136 15.3841L69.6217 15.9632C69.6135 16.0151 69.6166 16.0681 69.6306 16.1187C69.6447 16.1693 69.6695 16.2162 69.7032 16.2561C69.7369 16.296 69.7789 16.3281 69.826 16.35C69.8732 16.372 69.9246 16.3833 69.9765 16.3832H71.8315C71.9739 16.3831 72.1116 16.3316 72.2198 16.2379C72.328 16.1442 72.3995 16.0145 72.4216 15.8722L73.5356 8.73919C73.5435 8.68737 73.5402 8.63443 73.526 8.58401C73.5117 8.53359 73.4869 8.48689 73.4531 8.44711C73.4193 8.40733 73.3774 8.37541 73.3303 8.35355C73.2832 8.33169 73.232 8.3204 73.1802 8.32046V8.32046ZM70.3086 12.3766C70.1111 13.5673 69.1758 14.3666 67.9844 14.3666C67.3874 14.3666 66.9081 14.1725 66.6011 13.8046C66.2967 13.4394 66.1822 12.9195 66.2778 12.3404C66.4646 11.1599 67.4132 10.3346 68.5863 10.3346C69.1713 10.3346 69.6469 10.5312 69.9602 10.9022C70.2753 11.277 70.3998 11.8001 70.3086 12.3766V12.3766ZM75.6089 4.60092L73.8432 15.9651C73.8351 16.0168 73.8382 16.0696 73.8522 16.12C73.8663 16.1704 73.8909 16.2171 73.9245 16.2569C73.9581 16.2967 73.9999 16.3287 74.0468 16.3506C74.0938 16.3725 74.145 16.3838 74.1967 16.3838H75.9718C76.2668 16.3838 76.5172 16.1675 76.5625 15.8728L78.3036 4.71355C78.3117 4.66183 78.3086 4.60894 78.2946 4.55853C78.2806 4.50813 78.2559 4.46139 78.2223 4.42155C78.1887 4.3817 78.147 4.34968 78.1 4.3277C78.053 4.30571 78.0019 4.29428 77.9501 4.29419H75.9624C75.877 4.2945 75.7946 4.32553 75.7298 4.38173C75.665 4.43794 75.6222 4.51564 75.6089 4.60092Z"
                                            fill="#179BD7"
                                        />
                                        <path
                                            d="M5.1385 18.5525L5.46748 16.4385L4.73466 16.4213H1.23535L3.66719 0.82216C3.67443 0.774497 3.69836 0.731053 3.73462 0.699748C3.77087 0.668442 3.81704 0.65136 3.86471 0.651614H9.76503C11.7238 0.651614 13.0756 1.06398 13.7814 1.87789C14.1123 2.2597 14.323 2.6587 14.4249 3.0978C14.5318 3.55852 14.5337 4.10898 14.4293 4.78034L14.4218 4.82934V5.25952L14.7526 5.44916C15.0052 5.57862 15.2323 5.75375 15.4225 5.96589C15.7056 6.29234 15.8887 6.70725 15.966 7.19916C16.0459 7.70507 16.0195 8.30707 15.8887 8.98861C15.7377 9.77261 15.4936 10.4554 15.164 11.0142C14.8732 11.5147 14.4822 11.9482 14.016 12.2869C13.5782 12.6013 13.058 12.8399 12.4699 12.9926C11.9 13.1428 11.2502 13.2185 10.5375 13.2185H10.0783C9.74993 13.2185 9.43101 13.3382 9.18066 13.5526C8.93066 13.7694 8.76481 14.0688 8.71266 14.3977L8.67806 14.588L8.09684 18.3139L8.07042 18.4507C8.0635 18.494 8.05155 18.5156 8.03393 18.5302C8.01687 18.5444 7.99558 18.5522 7.97355 18.5525H5.1385Z"
                                            fill="#253B80"
                                        />
                                        <path
                                            d="M15.0662 4.87891C15.0486 4.99282 15.0285 5.10927 15.0058 5.22891C14.2277 9.27045 11.5656 10.6666 8.16572 10.6666H6.43462C6.01883 10.6666 5.66846 10.9721 5.60367 11.387L4.71736 17.0735L4.46638 18.6855C4.45638 18.7494 4.4602 18.8148 4.47757 18.8771C4.49494 18.9394 4.52544 18.9971 4.56699 19.0464C4.60854 19.0956 4.66014 19.1351 4.71824 19.1622C4.77635 19.1894 4.83957 19.2034 4.90355 19.2035H7.97386C8.33744 19.2035 8.6463 18.9362 8.70354 18.5735L8.73373 18.4156L9.31181 14.7044L9.34893 14.5007C9.40554 14.1367 9.71502 13.8695 10.0786 13.8695H10.5378C13.5125 13.8695 15.8412 12.6476 16.5218 9.112C16.8061 7.635 16.6589 6.40172 15.9066 5.53436C15.6681 5.26605 15.3834 5.04393 15.0662 4.87891V4.87891Z"
                                            fill="#179BD7"
                                        />
                                        <path
                                            d="M14.2521 4.55059C14.0036 4.47788 13.7509 4.42113 13.4954 4.38069C12.9904 4.30218 12.4802 4.26452 11.9693 4.26805H7.34468C7.16868 4.26791 6.99844 4.33148 6.86473 4.44725C6.73102 4.56303 6.64266 4.72338 6.61563 4.89932L5.63182 11.2031L5.60352 11.3871C5.63416 11.1864 5.7348 11.0034 5.88721 10.8713C6.03962 10.7392 6.23375 10.6666 6.43447 10.6667H8.16556C11.5655 10.6667 14.2275 9.26987 15.0057 5.22896C15.0289 5.10932 15.0484 4.99287 15.066 4.87896C14.8607 4.77003 14.6467 4.67871 14.4263 4.60596C14.3685 4.58656 14.3105 4.5681 14.2521 4.55059V4.55059Z"
                                            fill="#222D65"
                                        />
                                        <path
                                            d="M6.61582 4.89936C6.64262 4.72338 6.73093 4.56295 6.86471 4.44723C6.99848 4.33151 7.16885 4.26817 7.34487 4.26873H11.9695C12.5174 4.26873 13.0288 4.305 13.4955 4.38136C13.8114 4.43158 14.1229 4.50669 14.4271 4.606C14.6567 4.683 14.87 4.774 15.0669 4.879C15.2984 3.38545 15.065 2.36855 14.2667 1.44773C13.3867 0.434 11.7984 0 9.76601 0H3.86569C3.45053 0 3.09638 0.305455 3.03222 0.721L0.574593 16.4805C0.563146 16.5537 0.567501 16.6285 0.587359 16.6998C0.607217 16.7711 0.642107 16.8372 0.689629 16.8936C0.73715 16.95 0.796175 16.9952 0.862644 17.0263C0.929113 17.0574 1.00145 17.0735 1.07467 17.0736H4.7174L5.63201 11.2032L6.61582 4.89936V4.89936Z"
                                            fill="#253B80"
                                        />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_276_198139">
                                            <rect width="78" height="21" fill="white" transform="translate(0.568359)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </span>
                        </li>
                        <li class="list-item">
                            <span class="vector">
                                <svg width="31" height="30" viewBox="0 0 31 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_276_198146)">
                                        <path
                                            d="M30.1197 18.6274C28.1155 26.6675 19.9697 31.5548 11.9412 29.5506C3.90097 27.5465 -0.986467 19.4009 1.01773 11.3726C3.02194 3.33254 11.1559 -1.55479 19.1962 0.449365C27.2247 2.4418 32.1239 10.5873 30.1197 18.6274Z"
                                            fill="url(#paint0_linear_276_198146)"
                                        />
                                        <path
                                            d="M22.7109 13.1309C23.0039 11.1387 21.4922 10.0605 19.4062 9.3457L20.0859 6.63867L18.4453 6.22852L17.7891 8.86523C17.3555 8.75977 16.9102 8.6543 16.4648 8.56055L17.1211 5.91211L15.4805 5.50195L14.8125 8.19727C14.4492 8.11523 14.0977 8.0332 13.7578 7.95117V7.93945L11.4844 7.37695L11.0508 9.13477C11.0508 9.13477 12.2695 9.41602 12.2461 9.42773C12.9141 9.5918 13.0312 10.0371 13.0078 10.3887L12.2344 13.4707C12.2812 13.4824 12.3398 13.4941 12.4102 13.5293C12.3516 13.5176 12.293 13.5059 12.2344 13.4824L11.1562 17.7949C11.0742 17.9941 10.8633 18.2988 10.4062 18.1816C10.418 18.2051 9.21094 17.8887 9.21094 17.8887L8.39062 19.7754L10.5352 20.3145C10.9336 20.4199 11.3203 20.5137 11.707 20.6191L11.0273 23.3496L12.668 23.7598L13.3477 21.0527C13.793 21.1699 14.2383 21.2871 14.6602 21.3926L13.9922 24.0879L15.6328 24.498L16.3125 21.7676C19.125 22.2949 21.2344 22.084 22.1133 19.541C22.8281 17.502 22.0781 16.3184 20.6016 15.5449C21.6914 15.2988 22.5 14.584 22.7109 13.1309ZM18.9492 18.4043C18.4453 20.4434 15 19.3418 13.8867 19.0605L14.7891 15.4395C15.9023 15.7207 19.4883 16.2715 18.9492 18.4043ZM19.4648 13.0957C18.9961 14.959 16.1367 14.0098 15.2109 13.7754L16.0312 10.4941C16.957 10.7285 19.9453 11.1621 19.4648 13.0957Z"
                                            fill="white"
                                        />
                                    </g>
                                    <defs>
                                        <linearGradient
                                            id="paint0_linear_276_198146"
                                            x1="15.5604"
                                            y1="-0.00706574"
                                            x2="15.5604"
                                            y2="29.997"
                                            gradientUnits="userSpaceOnUse"
                                        >
                                            <stop offset="1" stop-color="#F7931A" />
                                        </linearGradient>
                                        <clipPath id="clip0_276_198146">
                                            <rect width="30" height="30" fill="white" transform="translate(0.568359)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </span>
                        </li>
                    </ul> --}}
                </div>
            </div>
        </footer>

        @include('sweetalert::alert')

        <script src="{{ asset('front/js/common.min.js') }}"></script>
        @if(Auth::guard('web')->user())
        <div class="cartOffcanvas offcanvas offcanvas-end" tabindex="-1" id="cartOffcanvas">
            <div class="cartOffcanvas_header d-flex align-items-center justify-content-between">
                <h2 class="cartOffcanvas_header-title" id="cartOffcanvasLabel">Keranjang</h2>
                <button class="cartOffcanvas_header-close" type="button" data-bs-dismiss="offcanvas" aria-label="Close">
                    <i class="icon-close"></i>
                </button>
            </div>
            <div class="cartOffcanvas_body">
                <ul class="cartOffcanvas_body-list">
                    
                    @if(count($keranjang) < 1) 
                        <div style="display: flex; justify-conten: center;">
                            <p style="color: ##556260;">Keranjang Kosong</p>
                            <i class="fas fa-cart-arrow-down" style="margin-left: 10px;margin-top: 6px;"></i>
                        </div>
                        @php
                            $check = \App\Models\Pemesanan::where('user_id', Auth::guard('web')->user()->id)->count();
                        @endphp
                       
                        @if($check >= 1)
                        <div style="display: flex; justify-conten: center;">
                            <a href="{{ route('pemesanan-wa', Auth::guard('web')->user()->id) }}" class="btn" style="font-size: 15px;margin-top: 20px !important;">Buka Pesanan Yang Belum Dibayar</a>
                        </div>
                        @endif
                    @else
                        <?php 
                            $jumlah_paket_value = 0;
                        ?>
                        @foreach($keranjang as $data)
                            @foreach($data->paket_wedding->get_first_foto as $foto)
                            <?php
                                $jumlah_paket_value += (int) $data->jumlah_paket * (int) $data->paket_wedding->harga_paket;
                            ?>
                            <li class="cartOffcanvas_body-list_item d-sm-flex align-items-center">
                                <div class="media">
                                    <a href="{{ url('paket-wedding', $data->paket_wedding->slug) }}" rel="noopener norefferer" style="width: 100% !important;">
                                        <picture style="width: 100% !important;">
                                            <source data-srcset="{{ asset('paket_wedding/'. $foto->url) }}" srcset="{{ asset('paket_wedding/'. $foto->url) }}" type="image/webp" />
                                            <img class="lazy" data-src="{{ asset('paket_wedding/'. $foto->url) }}" src="{{ asset('paket_wedding/'. $foto->url) }}" style="height: 300px !important; width: 100% !important; object-fit: cover;" alt="media" />
                                        </picture>
                                    </a>
                                </div>
                                <div class="main d-flex flex-wrap justify-content-between align-items-end align-items-lg-center">
                                    <a class="main_title" href="{{ url('paket-wedding', $data->paket_wedding->slug) }}" rel="noopener norefferer">
                                        <span class="main_title-product">{{ $data->paket_wedding->nama_paket }}</span>
                                    </a>
                                    <div class="main_price">
                                        <span class="price">Rp . {{ number_format((float)$data->paket_wedding->harga_paket, 0, ',', '.') }}</span>
                                    </div>
                                    <div class="qty d-flex align-items-center justify-content-between">
                                        <span class="d-flex align-items-center" onclick="kurangCanvas({{ $data->id }})">
                                            <i class="icon-minus"></i>
                                        </span>
                                        
                                        <input class="qty_amount" type="number" id="quantityValue{{ $data->id }}" readonly value="{{ $data->jumlah_paket }}" min="1" max="99" />
                                       
                                        <span class="d-flex align-items-center" onclick="tambahCanvas({{ $data->id }})">
                                            <i class="icon-plus"></i>
                                        </span>
                                    </div>
                                    <button type="button" class="btn--underline" onclick="deleteData({{ $data->id }})">Hapus</button>
                                    <input type="hidden" id="keranjangId{{ $data->id }}" value="{{ $data->id }}">
                                </div>
                            </li>
                            @endforeach
                        @endforeach
                    @endif
                </ul>
                @if(count($keranjang) < 1) 
                
                @else
                <div class="cartOffcanvas_body-total d-flex justify-content-between align-items-center">
                    <span>Total</span>
                    <span class="cartTotal" id="totalKeranjang">Rp. @php echo isset($jumlah_paket_value) ? number_format($jumlah_paket_value, 0, ',', '.') : '' @endphp</span>
                </div>
                <a href="{{ route('pembayaran.show', Auth::guard('web')->user()->id) }}" class="cartOffcanvas_body-btn btn">Lanjutkan Ke Pembayaran</a>
                @endif
            </div>
        </div>
        @endif
        
        <div class="cartOffcanvas offcanvas offcanvas-end" tabindex="-1" id="loginCartCanvas">
            <div class="cartOffcanvas_header d-flex align-items-center justify-content-between">
                <h2 class="cartOffcanvas_header-title" id="cartOffcanvasLabel">Login untuk melihat keranjang!</h2>
                <button class="cartOffcanvas_header-close" type="button" data-bs-dismiss="offcanvas" aria-label="Close">
                    <i class="icon-close"></i>
                </button>
            </div>
            <div class="cartOffcanvas_body">
                <form action="{{ route('login') }}" method="post" id="loginCartForm" autocomplete="off">
                    @csrf
                    <ul class="cartOffcanvas_body-list">
                        <div class="alert alert-cart">
                            <p>Username atau Password yang dimasukkan salah!</p>
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label> <br>
                            <input name="cart_username" class="header_user-search_field field required" type="text" autocomplete="new-username" placeholder="Username..." style="margin-top: 10px;width: 100%;">
                        </div>

                        <div class="form-group mt-4">
                            <label for="password">Password</label> <br>
                            <input name="cart_password" class="header_user-search_field field required" type="password" autocomplete="new-password" placeholder="Password..." style="margin-top: 10px;width: 100%;">
                        </div>
                    </ul>
                    <button type="button" class="cartOffcanvas_body-btn btn" id="loginCartButton">Login</button>
                </form>
            </div>
        </div>

        <div class="cartOffcanvas offcanvas offcanvas-end" tabindex="-1" id="loginCanvas">
            <div class="cartOffcanvas_header d-flex align-items-center justify-content-between">
                <h2 class="cartOffcanvas_header-title" id="cartOffcanvasLabel">Login</h2>
                <button class="cartOffcanvas_header-close" type="button" data-bs-dismiss="offcanvas" aria-label="Close">
                    <i class="icon-close"></i>
                </button>
            </div>
            <div class="cartOffcanvas_body">
                <form action="{{ route('login') }}" method="post" id="loginForm" autocomplete="off">
                    @csrf
                    <ul class="cartOffcanvas_body-list">
                        <div class="alert">
                            <p>Username atau Password yang dimasukkan salah!</p>
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label> <br>
                            <input name="username" class="header_user-search_field field required" type="text" autocomplete="new-username" placeholder="Username..." style="margin-top: 10px;width: 100%;">
                        </div>

                        <div class="form-group mt-4">
                            <label for="password">Password</label> <br>
                            <input name="password" class="header_user-search_field field required" type="password" autocomplete="new-password" placeholder="Password..." style="margin-top: 10px;width: 100%;">
                        </div>
                    </ul>
                    <button type="button" class="cartOffcanvas_body-btn btn" id="loginButton">Login</button>
                </form>
                <p style="margin-top: 20px !important;">Belum punya akun ? <a data-bs-toggle="offcanvas" data-bs-target="#registrasiCanvas" style="color:green;">Registrasi</a></p>
            </div>
        </div>

        <div class="cartOffcanvas offcanvas offcanvas-end" tabindex="-1" id="registrasiCanvas">
            <div class="cartOffcanvas_header d-flex align-items-center justify-content-between">
                <h2 class="cartOffcanvas_header-title" id="cartOffcanvasLabel">Registrasi</h2>
                <button class="cartOffcanvas_header-close" type="button" data-bs-dismiss="offcanvas" aria-label="Close">
                    <i class="icon-close"></i>
                </button>
            </div>
            <div class="cartOffcanvas_body">
                <form action="{{ route('user.store') }}" method="post" id="registrasiForm" autocomplete="off">
                    @csrf
                    <ul class="cartOffcanvas_body-list">
                        {{-- <div class="alert">
                            <p>Username atau Password yang dimasukkan salah!</p>
                        </div> --}}
                        <div class="form-group" >
                            <label for="nama">Nama Lengkap</label> <br>
                            <input name="register_nama" class="header_user-search_field field required" type="text" autocomplete="new-nama" placeholder="Nama Lengkap..." style="margin-top: 10px;width: 100%;">
                        </div>

                        <div class="form-group" style="margin-top: 15px;">
                            <label for="username">Username</label> <br> 
                            <input name="register_username" class="header_user-search_field field required" type="text" autocomplete="new-username" placeholder="Username..." style="margin-top: 10px;width: 100%;">
                        </div>

                        <div class="form-group" style="margin-top: 15px;">
                            <label for="register_email">Email</label> <br>
                            <input name="register_email" class="header_user-search_field field required" type="email" autocomplete="new-email" placeholder="Email..." style="margin-top: 10px;width: 100%;">
                        </div>

                        <div class="form-group" style="margin-top: 15px;">
                            <label for="register_no_hp">No Hp</label> <br>
                            <input name="register_no_hp" class="header_user-search_field field required" type="text" autocomplete="new-no-hp" placeholder="Nomor Hp..." style="margin-top: 10px;width: 100%;">
                        </div>

                        <div class="form-group" style="margin-top: 15px;">
                            <label for="register_alamat">Alamat</label> <br>
                            <input name="register_alamat" class="header_user-search_field field required" type="text" autocomplete="new-alamat" placeholder="Alamat..." style="margin-top: 10px;width: 100%;">
                        </div>

                        <div class="form-group mt-4">
                            <label for="password">Password</label> <br>
                            <input name="register_password" class="header_user-search_field field required" id="konfirmasi_password" type="password" autocomplete="new-password" placeholder="Password..." style="margin-top: 10px;width: 100%;">
                        </div>

                        <div class="form-group mt-4">
                            <label for="password">Konfirmasi Password</label> <br>
                            <input name="register_konfirmasi_password" class="header_user-search_field field required" type="password" autocomplete="new-password" placeholder="Password..." style="margin-top: 10px;width: 100%;">
                        </div>
                    </ul>
                    <button type="button" class="cartOffcanvas_body-btn btn" id="regsitrasiButton">Registrasi</button>
                </form>
            </div>
        </div>

        <div class="cartOffcanvas offcanvas offcanvas-end" tabindex="-1" id="logoutCanvas">
            <div class="cartOffcanvas_header d-flex align-items-center justify-content-between">
                <h2 class="cartOffcanvas_header-title" id="cartOffcanvasLabel">Logout</h2>
                <button class="cartOffcanvas_header-close" type="button" data-bs-dismiss="offcanvas" aria-label="Close">
                    <i class="icon-close"></i>
                </button>
            </div>
            <div class="cartOffcanvas_body">
                <a href="{{ route('user.logout') }}" class="cartOffcanvas_body-btn btn btn-logout" id="logoutButton">Logout <i class="fas fa-sign-out" style="margin-left: 10px;"></i></a>
            </div>
        </div>

        <script src="{{ asset('front/js/index.min.js')}}"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        
        <script>
            $("#loginButton").click(function() {
                $("#loginForm").validate();

                if($('#loginForm').valid()) {
                    
                    var username = $("input[name=username]").val();
                    var password = $("input[name=password]").val();
                    $.ajax({
                        url: "{{ route('login') }}",
                        method: "POST",
                        data: {"_token": "{{ csrf_token() }}", username:username, password:password},
                        success: function(data) {
                           if(data.status == "berhasil") {
                                location.reload();
                           } else {
                               $(".alert").css("display", "block");
                               $("input[name='username']").css("color", "#f1556c");
                               $("input[name='username']").css("border", "1px solid #f1556c");
                               $("input[name='password']").css("color", "#f1556c");
                               $("input[name='password']").css("border", "1px solid #f1556c");
                           }
                        }
                    });
                }
                
            });

            $("#regsitrasiButton").click(function() {
                $("#registrasiForm").validate();

                if($('#registrasiForm').valid()) {
                    
                    var register_nama = $("input[name=register_nama]").val();
                    var register_username = $("input[name=register_username]").val();
                    var register_email = $("input[name=register_email]").val();
                    var register_no_hp = $("input[name=register_no_hp]").val();
                    var register_alamat = $("input[name=register_alamat]").val();
                    var register_password = $("input[name=register_password]").val();

                    $.ajax({
                        url: "{{ route('user.store') }}",
                        method: "POST",
                        data: {
                            "_token": "{{ csrf_token() }}", 
                            register_nama:register_nama, 
                            register_username:register_username,
                            register_email:register_email,
                            register_no_hp:register_no_hp,
                            register_alamat:register_alamat,
                            register_password:register_password,
                        },
                        success: function(data) {
                            $(".cartOffcanvas_header-close").click();
                            if(data == "berhasil") {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Berhasil!',
                                    text: 'Paket telah berhasil dihapus dari keranjang!',
                                });
                                $("#loginButtonTop").click();
                            } else {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Error!',
                                    text: 'Paket gagal untuk dihapus dari keranjang!',
                                });  
                            }
                        }
                    });
                }
                
            });

            $("#loginCartButton").click(function() {
                $("#loginCartForm").validate();

                if($('#loginCartForm').valid()) {
                    
                    var username = $("input[name=cart_username]").val();
                    var password = $("input[name=cart_password]").val();
                    $.ajax({
                        url: "{{ route('login') }}",
                        method: "POST",
                        data: {"_token": "{{ csrf_token() }}", username:username, password:password},
                        success: function(data) {
                           if(data.status == "berhasil") {
                                location.reload();
                           } else {
                               $(".alert-cart").css("display", "block");
                               $("input[name='cart_username']").css("color", "#f1556c");
                               $("input[name='cart_username']").css("border", "1px solid #f1556c");
                               $("input[name='cart_password']").css("color", "#f1556c");
                               $("input[name='cart_password']").css("border", "1px solid #f1556c");
                           }
                        }
                    });
                }
                
            });


            function tambahCanvas(dataId) {
                var minCanvas = 1
                maxCanvas = 100;

                if($("#quantityValue" + dataId).val() < maxCanvas && $("#quantityValue" + dataId).val() >= minCanvas )
                $("#quantityValue" + dataId).val(Number($("#quantityValue" + dataId).val()) + 1);  // increment
                
                if($("#quantityValue" + dataId).val() < maxCanvas && $("#quantityValue" + dataId).val() >= minCanvas) {
                    var quantityValue = $("#quantityValue" + dataId).val();
                    var keranjangId = $("#keranjangId" + dataId).val();
                    $.ajax({
                        url: "{{ route('quantity-canvas') }}",
                        method: "POST",
                        data: {
                            "_token" : "{{ csrf_token() }}",
                            cart_quantity: "yes",
                            jumlah_paket_tambah: quantityValue,
                            keranjang_id: keranjangId
                        },
                        success: function(data) {
                            if(data[0] == "berhasil") {
                                var 	bilangan = data[1];
		
                                var	reverse = bilangan.toString().split('').reverse().join(''),
                                    ribuan 	= reverse.match(/\d{1,3}/g);
                                    ribuan	= ribuan.join('.').split('').reverse().join('');

                                $("#totalKeranjang").html("Rp. " + ribuan);
                            }
                        }
                    });
                }
            }

            function kurangCanvas(dataId) {
                var minCanvas = 1
                maxCanvas = 100;

                if($("#quantityValue" + dataId).val() <= maxCanvas && $("#quantityValue" + dataId).val() > minCanvas )
                $("#quantityValue" + dataId).val(Number($("#quantityValue" + dataId).val()) - 1);  // decrement

                if($("#quantityValue" + dataId).val() <= maxCanvas && $("#quantityValue" + dataId).val() >= minCanvas ) {

                var quantityValue = $("#quantityValue" + dataId).val();
                var keranjangId = $("#keranjangId" + dataId).val();
                    $.ajax({
                        url: "{{ route('quantity-canvas') }}",
                        method: "POST",
                        data: {
                            "_token" : "{{ csrf_token() }}",
                            cart_quantity: "yes",
                            jumlah_paket_kurang: quantityValue,
                            keranjang_id: keranjangId
                        },
                        success: function(data) {
                            if(data[0] == "berhasil") {
                                var 	bilangan = data[1];
		
                                var	reverse = bilangan.toString().split('').reverse().join(''),
                                    ribuan 	= reverse.match(/\d{1,3}/g);
                                    ribuan	= ribuan.join('.').split('').reverse().join('');

                                $("#totalKeranjang").html("Rp. " + ribuan);
                            }
                        }
                    });
                }
            }

        </script>

<script>
$(document).ready(function() {
  
    $.ajaxSetup({
        headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    
    $("#loginForm").validate({
        rules: {
            username:{
                required: true,
            },
            password:{
                required: true,
            },
        },
        messages: {
            username: {
                  required: "Username harus di isi",
            },
            password: {
                    required: "Password harus di isi",
            }
        },
        submitHandler: function(form) {
          $("#loginButton").prop('disabled', true);
              form.submit();
        }
    });
    
    $("#loginCartForm").validate({
        rules: {
            cart_username:{
                required: true,
            },
            cart_password:{
                required: true,
            },
        },
        messages: {
            cart_username: {
                  required: "Username harus di isi",
            },
            cart_password: {
                    required: "Password harus di isi",
            }
        },
        submitHandler: function(form) {
          $("#loginCartButton").prop('disabled', true);
              form.submit();
        }
    });

    $("#registrasiForm").validate({
        rules: {
            register_nama:{
                required: true,
            },
            register_username:{
                required: true,
            },
            register_email:{
                required: true,
            },
            register_no_hp:{
                required: true,
            },
            register_alamat:{
                required: true,
            },
            register_password:{
                required: true,
            },
            register_konfirmasi_password : {
                required: true,
                equalTo : "#konfirmasi_password"
            }
        },
        messages: {
            register_nama: {
                  required: "Nama harus di isi",
            },
            register_username: {
                    required: "Username harus di isi",
            },
            register_email: {
                    required: "Email harus di isi",
                    email: "Mohon masukkan format email yang valid"
            },
            register_no_hp: {
                    required: "No Hp harus di isi"
            },
            register_alamat: {
                    required: "Alamat harus di isi"
            },
            register_password: {
                    required: "Password harus di isi",
            },
            register_konfirmasi_password: {
                    required: "Konfirmasi Password harus di isi",
                    equalTo: "Konfirmasi Password tidak sama"
            }
            
        },
        submitHandler: function(form) {
          $("#registrasiButton").prop('disabled', true);
              form.submit();
        }
    });

  });

function deleteData(dataId) {
    $(".cartOffcanvas_header-close").click();
    Swal.fire({
        title: "Hapus paket ?",
        text: `Paket yang ada di keranjang akan terhapus. Anda tidak akan dapat mengembalikan
                aksi ini!`,
        icon: "warning",
        showCancelButton: !0,
        confirmButtonColor: "rgb(11, 42, 151)",
        cancelButtonColor: "rgb(209, 207, 207)",
        confirmButtonText: "Ya, hapus!",
        cancelButtonText: "Batal"
    }).then(function(t) {
        if (t.value) {
            var keranjangId = $("#keranjangId" + dataId).val()
            $.ajax({
                url: "{{ route('keranjang.hapus') }}",
                method: "POST",
                data: {
                    "_token": "{{ csrf_token() }}", 
                    id:keranjangId
                },
                success: function(data) {
                    if(data == "berhasil") {
                        Swal.fire({
                            icon: 'success',
                            title: 'Berhasil!',
                            text: 'Paket telah berhasil dihapus dari keranjang!',
                        }).then(function(){ 
                            location.reload();
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error!',
                            text: 'Paket gagal untuk dihapus dari keranjang!',
                        }).then(function(){ 
                            location.reload();
                        });    
                    }
                }
            });
        }
    })
}

    // var minCanvas = 1
    // maxCanvas = 100;

    // $("#tambahCanvas").click(function(){
    // if($("#quantityValue").val() < maxCanvas && $("#quantityValue").val() >= minCanvas )
    //     $("#quantityValue").val(Number($("#quantityValue").val()) + 1);  // increment
    // });

    // $("#kurangCanvas").click(function(){
    // if($("#quantityValue").val() <= maxCanvas && $("#quantityValue").val() > minCanvas )
    //     $("#quantityValue").val(Number($("#quantityValue").val()) - 1);  // decrement
    // });
</script>

        @yield('js')
        
    </body>
</html>
