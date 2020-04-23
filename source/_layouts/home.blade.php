<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>{{ $page->siteTitle }}</title>
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;700;800;900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ trim($page->baseUrl, '/') }}{{ mix('css/main.css') }}">
    </head>
    <body class="antialiased font-sans">
        
        <section class="text-white bg-gray-900 bg-center bg-cover md:bg-fixed" style="background-image: url(assets/img/hero-1-compressed.jpg);">  
     
            @include('_partials/navigation')
               
            <div class="container mx-auto">
                <div class="flex px-5 pt-40 pb-24 md:flex-row flex-col items-center z-50">
                    <div class="lg:flex-grow md:max-w-xl md:pr-16 flex flex-col md:items-start md:text-left md:ml-6 mb-16 md:mb-0 items-center text-center">
                        <h1 class="text-3xl md:text-4xl uppercase font-semibold leading-tight tracking-tight mb-4 font-medium text-white">
                            Welcome to the 
                            <br class="hidden lg:inline-block">Tomorrow's Warehouse
                            <br class="hidden lg:inline-block">Event
                        </h1>
                        <p class="mb-8 text-lg font-semibold leading-relaxed tracking-tight">
                            30th September 2020                        
                            <span class="hidden md:inline-block"> - </span>
                            <br class="inline-block md:hidden" />
                            Ricoh Arena, Coventry
                        </p>
                        <div class="flex justify-center">
                            <a href="" class="btn btn-red mr-1">
                                <div>Visit</div>
                                <div>
                                    <svg class="fill-current text-white inline-block h-6 w-4">
                                        <path class="heroicon-ui" d="M9.3 8.7a1 1 0 0 1 1.4-1.4l4 4a1 1 0 0 1 0 1.4l-4 4a1 1 0 0 1-1.4-1.4l3.29-3.3-3.3-3.3z"/>
                                    </svg>
                                </div>
                            </a>

                            <a href="" class="btn btn-gray">
                                <div>Exhibit</div>
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

        </section>

        @yield('content')

        @include('_partials/footer')

        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    </body>
</html>
