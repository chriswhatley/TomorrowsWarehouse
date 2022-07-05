@extends('_layouts.home', ['nav_selector' => false, 'meta_title' => 'Tomorrow\'s Warehouse - 30th September 2020 - Ricoh Arena, Coventry', 'meta_description' => 'Tomorrow\'s Warehouse is a one-day, free-to attend conference  tackling operational challenges in warehousing and logistics  at a time of unprecedented transformation.' ])

@section('content')

	<main class="z-20">
        {{-- <div class="h-4" id="about-tomorrows-warehouse"></div> --}}
	
        <section class="relative lg:h-140 lg:my-24 lg:flex lg:items-center" id="about-tomorrows-warehouse">     

            <div class="intro hidden lg:block absolute top-0 left-0 h-full w-1/2"></div> 

            <div class="container mx-auto px-10 pt-4 pb-10">
                <div class="w-full lg:ml-auto lg:pl-12 lg:w-1/2">                                                                                          
                    <h2 class="pb-4 text-xl md:text-2xl font-bold leading-tight uppercase tracking-tight">
	                    About <br /> Tomorrow's Warehouse
	                </h2>                     

                    <p class="leading-relaxed">Now in its second year, Tomorrow’s Warehouse puts the spotlight on unprecedented transformation in the warehouse, tracking trends and offering insights. This one-day, free-to attend conference also highlights a range of solutions that boost warehouse performance and flexibility.</p>
                    <p class="leading-relaxed">We were already in a time of unprecedented logistics transformation thanks to eCommerce. Now the coronavirus pandemic has made revitalising warehousing and logistics essential.</p>
                    <div class="mt-6">
                    	<a href="{{ $page->registrationURL }}" target="_blank" class="btn btn-red" rel="noopener">
                            <div>Register Now</div>
                            <div>
                                <svg class="fill-current text-white inline-block h-6 w-4">
                                    <path class="heroicon-ui" d="M9.3 8.7a1 1 0 0 1 1.4-1.4l4 4a1 1 0 0 1 0 1.4l-4 4a1 1 0 0 1-1.4-1.4l3.29-3.3-3.3-3.3z"/>
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

        </section>

        <section class="px-10 text-white pb-12 lg:pb-24">            
            <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                
                <div class="col-span-1 flex flex-col p-6 rounded-lg bg-red-500 place-content-between">
                    <h3 class="pb-4 text-xl md:text-2xl font-bold leading-tight uppercase tracking-tight">Why Visit</h3> 
                    <p class="leading-relaxed">Attend Tomorrow’s Warehouse to gain practical, actionable insights that will help you make sure operations are a match for changing commercial realities.</p>
                    <a href="{{ $page->resourcePath('/why-visit') }}" class="btn btn-gray mt-10">
                        <div>Find Out More</div>
                        <div>
                            <svg class="fill-current text-white inline-block h-6 w-4">
                                <path class="heroicon-ui" d="M9.3 8.7a1 1 0 0 1 1.4-1.4l4 4a1 1 0 0 1 0 1.4l-4 4a1 1 0 0 1-1.4-1.4l3.29-3.3-3.3-3.3z"/>
                            </svg>
                        </div>
                    </a>
                </div>

                <div class="home-visit-exhibit col-span-1 md:hidden lg:block flex flex-col bg-center bg-cover rounded-lg overflow-hidden"></div>
               
                <div class="col-span-1 flex flex-col p-6 bg-gray-800 rounded-lg place-content-between">
                    <h3 class="pb-4 text-xl md:text-2xl font-bold leading-tight uppercase tracking-tight">Why Exhibit</h3> 
                    <p class="leading-relaxed">Exhibit to access operations professionals who are seeking insights and solutions to boost their logistics processes in times of rapid and deep transformation.</p>
                    <a href="{{ $page->resourcePath('/why-exhibit') }}" class="btn btn-red mt-10">
                        <div>Find Out More</div>
                        <div>
                            <svg class="fill-current text-white inline-block h-6 w-4">
                                <path class="heroicon-ui" d="M9.3 8.7a1 1 0 0 1 1.4-1.4l4 4a1 1 0 0 1 0 1.4l-4 4a1 1 0 0 1-1.4-1.4l3.29-3.3-3.3-3.3z"/>
                            </svg>
                        </div>
                    </a>
                </div>

            </div>
        </section>

        @include('_partials/logo-carousel', ['title' => 'Sponsors & Supporters', 'filter' => 'Sponsors'])

        <section class="feature-1 text-white bg-gray-800 bg-bottom bg-cover xl:bg-fixed">  
   
            <div class="flex py-12 flex-row flex-col items-center">
                <h2 class="text-center text-2xl md:text-3xl lg:text-4xl uppercase font-semibold leading-tight tracking-tight mb-2 font-medium">Tomorrow's Warehouse</h2>
                <p class="w-full text-center text-md md:text-lg leading-relaxed font-semibold uppercase">9<span class="text-xs lowercase">th</span> June 2022 <br class="block md:hidden"> <span class="hidden md:inline-block"> - </span> CBS Arena, Coventry</p>

                <div class="flex flex-wrap w-full md:w-auto">

                    <div class="w-1/3 px-3 md:px-10">
                        <div class="w-full py-6 md:flex md:mx-auto items-center">
                            <div class="inline-block w-full md:w-20 lg:w-24">
                                 <img src="{{ $page->resourcePath('/assets/img/icons/user-feature-icon.svg') }}" data-src="{{ $page->resourcePath('/assets/img/icons/user-feature-icon.svg') }}" class="w-12 mx-auto md:w-20 lg:w-24 lazyload" alt="User Icon" />
                            </div>
                            <div class="flex flex-col mt-1 md:ml-2 text-white tracking-tight font-semibold uppercase">
                                <div class="w-full text-center leading-tight text-sm">
                                    <div class="text-3xl lg:text-6xl -mb-1">30+</div>
                                    <div class="mt-2 lg:text-xl text-red-500">Leading<br />Exhibitors</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="w-1/3 px-3 md:px-10">
                        <div class="w-full py-6 md:flex md:mx-auto items-center">
                            <div class="inline-block w-full md:w-20 lg:w-24">
                                 <img src="{{ $page->resourcePath('/assets/img/icons/clock-feature-icon.svg') }}" data-src="{{ $page->resourcePath('/assets/img/icons/clock-feature-icon.svg') }}" class="w-12 mx-auto md:w-20 lazyload" alt="CLock Icon" />
                            </div>
                            <div class="flex flex-col mt-1 md:ml-2 text-white tracking-tight font-semibold uppercase">
                                <div class="w-full text-center leading-tight text-sm">
                                    <div class="text-3xl lg:text-6xl -mb-1">6 <sup class="-ml-2 text-sm lg:text-lg">hours</sup></div>
                                    <div class="mt-2 lg:text-xl text-red-500">Educational<br />Content</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="w-1/3 px-3 md:px-10">
                        <div class="w-full py-6 md:flex md:mx-auto items-center">
                            <div class="inline-block w-full md:w-20 lg:w-24 mx-auto">
                                 <img src="{{ $page->resourcePath('/assets/img/icons/education-feature-icon.svg') }}" data-src="{{ $page->resourcePath('/assets/img/icons/education-feature-icon.svg') }}" class="w-12 mx-auto md:w-20 lazyload" alt="Education Icon" />
                            </div>
                            <div class="flex flex-col mt-1 md:ml-1 text-white tracking-tight font-semibold uppercase">
                                <div class="w-full text-center leading-tight text-sm">
                                    <div class="text-3xl lg:text-6xl">6+</div>
                                    <div class="mt-2 lg:text-xl text-red-500">Expert<br />Speakers</div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-4">
                    <a href="{{ $page->registrationURL }}" class="btn btn-red" rel="noopener" target="_blank">
                        <div>Register Now</div>
                        <div>
                            <svg class="fill-current text-white inline-block h-6 w-4">
                                <path class="heroicon-ui" d="M9.3 8.7a1 1 0 0 1 1.4-1.4l4 4a1 1 0 0 1 0 1.4l-4 4a1 1 0 0 1-1.4-1.4l3.29-3.3-3.3-3.3z"/>
                            </svg>
                        </div>
                    </a>
                </div>

            </div>
        </section>

        {{-- <section class="relative py-12 lg:py-24 lg:my-24">      --}}
        <section class="relative lg:h-140 lg:my-24 lg:flex lg:items-center py-10">      

            <div class="home-register hidden lg:block absolute top-0 right-0 h-full w-1/2"></div> 

            <div class="container mx-auto px-10">
                <div class="w-full lg:mr-auto lg:pr-12 lg:w-1/2 lg:text-right">                                                                                          
                    <h2 class="pb-4 text-xl md:text-2xl font-bold leading-tight uppercase tracking-tight">
                         Register Your Interest
                    </h2>                     

                    <p class="leading-relaxed">Don't miss this free-to attend conference tackling operational challenges in warehousing and logistics at a time of unprecedented transformation.</p>
                    <div class="mt-6">
                        <a href="{{ $page->registrationURL }}" target="_blank" class="btn btn-red" rel="noopener">
                            <div>Register Now</div>
                            <div>
                                <svg class="fill-current text-white inline-block h-6 w-4">
                                    <path class="heroicon-ui" d="M9.3 8.7a1 1 0 0 1 1.4-1.4l4 4a1 1 0 0 1 0 1.4l-4 4a1 1 0 0 1-1.4-1.4l3.29-3.3-3.3-3.3z"/>
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

        </section>

        @include('_partials/map')

	</main>

@endsection
