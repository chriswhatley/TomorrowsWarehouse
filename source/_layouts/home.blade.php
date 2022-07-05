<!DOCTYPE html>
<html lang="en">
    <head>
         @include('_partials/meta')
    </head>
    <body class="antialiased font-sans text-gray-900">
        
        <section class="h-screen hero text-white bg-gray-800 bg-center bg-cover xl:bg-fixed">  
     
            <div class="absolute w-full z-50" x-data="{ open: false }">
                <div class="primary-navigation fixed w-full py-3 bg-gray-900 shadow-lg border-b-4 md:border-b-8 border-red-800">
                    @include('_partials/navigation')
                </div>
            </div>

            <div class="container mx-auto px-10">
                <div class="h-screen flex items-center justify-center lg:justify-start z-50 hero-watermark">
                    <div class="text-center lg:text-left sm:pt-12">
                        <h1 class="text-3xl md:text-5xl lg:text-6xl uppercase font-extrabold leading-none tracking-tight mb-4 font-medium text-white">
                            <span class="font-medium text-lg lg:text-2xl inline-block leading-loose">Welcome to the</span>
                            <span class="block text-red-500">Tomorrow's</span> Warehouse
                            <span class="">Event</span>
                        </h1>
                        <p class="mb-8 text-xl md:text-2xl font-semiobold leading-relaxed tracking-tight">
                            9<sup>th</sup> June 2022                        
                            <span class="hidden sm:inline-block"> - </span>
                            <br class="inline-block sm:hidden" />
                            The CBS Arena, Coventry
                        </p>
                        <div class="space-y-6 sm:space-y-0">
                            <a href="{{ $page->resourcePath('/why-visit') }}" class="btn btn-red mr-1">
                                <div class="text-lg md:text-xl">Visit</div>
                                <div>
                                    <svg class="fill-current text-white inline-block h-6 w-4">
                                        <path class="heroicon-ui" d="M9.3 8.7a1 1 0 0 1 1.4-1.4l4 4a1 1 0 0 1 0 1.4l-4 4a1 1 0 0 1-1.4-1.4l3.29-3.3-3.3-3.3z"/>
                                    </svg>
                                </div>
                            </a>
                            <a href="{{ $page->resourcePath('/why-exhibit') }}" class="btn btn-gray">
                                <div class="text-lg md:text-xl">Exhibit</div>
                                <div>
                                    <svg class="fill-current text-white inline-block h-6 w-4">
                                        <path class="heroicon-ui" d="M9.3 8.7a1 1 0 0 1 1.4-1.4l4 4a1 1 0 0 1 0 1.4l-4 4a1 1 0 0 1-1.4-1.4l3.29-3.3-3.3-3.3z"/>
                                    </svg>
                                </div>
                            </a>
                        </div>
                    </div> 
                </div>
            </div>

            <div class="hidden lg:block container mx-auto">
                <div class="flex justify-center">
                    <a href="#about-tomorrows-warehouse" class="absolute bottom-0 pb-6">
                        <div class="mouse_scroll">
                            <div class="mouse">
                                <div class="wheel"></div>
                            </div>
                            <div>
                                <span class="m_scroll_arrows one"></span>
                                <span class="m_scroll_arrows two"></span>
                                <span class="m_scroll_arrows three"></span>
                            </div>
                        </div>                                
                    </a>     
                </div>
            </div>

        </section>

        @yield('content')

        @include('_partials/footer')
    </body>
</html>
