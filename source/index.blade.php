@extends('_layouts.home')

@section('content')

	<main class="z-20">
		
		<section class="about-wbm relative bg-gray-800 bg-no-repeat bg-center lg:bg-left bg-contain text-white">      
            <div class="container mx-auto px-10">
                <div class="py-12 w-full lg:w-1/2 lg:pr-12">                                                                                          
                    <h2 class="pb-4 text-xl md:text-2xl font-bold leading-tight uppercase tracking-tight">
	                    About  <br /> Tomorrow's Warehouse 
	                </h2>                        
                    <p class="leading-relaxed">Tomorrow's Warehouse is a one-day, free-to attend conference  tackling operational challenges in warehousing and logistics  at a time of unprecedented transformation.</p>
                    <div class="mt-6">
                    	<a href="" class="btn btn-red">
                            <div>Find Out More</div>
                            <div>
                                <svg class="fill-current text-white inline-block h-6 w-4">
                                    <path class="heroicon-ui" d="M9.3 8.7a1 1 0 0 1 1.4-1.4l4 4a1 1 0 0 1 0 1.4l-4 4a1 1 0 0 1-1.4-1.4l3.29-3.3-3.3-3.3z"/>
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
                    
            <div class="hidden lg:block absolute top-0 right-0 h-full w-1/2 bg-cover" style="background-image: url(assets/img/intro-1-compressed.jpg);"></div>                                                                 
        </section>

        <section class="text-white">
        		<div class="flex flex-wrap">

        			<div class="w-full h-56 md:h-auto md:w-1/2 lg:w-1/4 bg-gray-400 bg-center bg-cover md:order-1" style="background-image: url(assets/img/why-visit-1-compressed.jpg);"></div>

        			<div class="w-full md:w-1/2 lg:w-1/4 bg-red-500 p-10 md:order-2">
        				<h3 class="pb-4 text-xl md:text-2xl font-bold leading-tight uppercase tracking-tight">Why Visit</h3> 
        				<p class="leading-relaxed">The Tomorrow's Warehouse Event has been launched to tackle the concerns of End Users and Logistics professionals as they face the future in an exciting, dynamic and fast-changing industry.</p>
        				<a href="" class="btn btn-gray mt-10">
        					<div>Find Out More</div>
        					<div>
        						<svg class="fill-current text-white inline-block h-6 w-4">
        							<path class="heroicon-ui" d="M9.3 8.7a1 1 0 0 1 1.4-1.4l4 4a1 1 0 0 1 0 1.4l-4 4a1 1 0 0 1-1.4-1.4l3.29-3.3-3.3-3.3z"/>
        						</svg>
        					</div>
        				</a>
        			</div>

					<div class="w-full h-56 md:h-auto md:w-1/2 lg:w-1/4 bg-gray-400 bg-center bg-cover md:order-4 lg:order-3" style="background-image: url(assets/img/why-exhibit-1-compressed.jpg);"></div>        			
        			
        			<div class="w-full md:w-1/2 lg:w-1/4 bg-gray-800 p-10 md:order-3 lg:order-4">
        				<h3 class="pb-4 text-xl md:text-2xl font-bold leading-tight uppercase tracking-tight">Why Exhibit</h3> 
        				<p class="leading-relaxed">Secure your company's opportunity to engage with Warehouse, Logistics, Distribution, Operations, Production & Facilities Managers &amp; Directors, together with Buyers and Health &amp; Safety professionals looking to make informed decisions for their logistical processes.</p>
        				<a href="" class="btn btn-red mt-10">
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

        <section class="text-white bg-gray-900 bg-bottom bg-cover md:bg-fixed" style="background-image: url(assets/img/feature-1-compressed.jpg);">  
            <div class="container mx-auto">
                <div class="flex px-5 py-20 flex-row flex-col items-center">
                    <div class="lg:flex-grow md:max-w-xl md:pr-16 flex flex-col md:ml-6 items-center text-center ">
                        <h2 class="text-3xl md:text-3xl uppercase font-semibold leading-tight tracking-tight mb-4 font-medium text-white">
                            Tomorrow's Warehouse
                        </h1>
            
                        <p class="font-bold text-lg uppercase">30<sup class="lowercase">th</sup> September 2020 <span class="hidden lg:inline-block lg:mx-1">-</span><br class="block lg:hidden" /> Ricoh Arena, Coventry</p>
                    
                        <div class="my-8 font-bold text-xl uppercase">
                            <div>30+ Exhibitors</div>
                            <div class="my-2">6 hours of educational content</div>
                            <div>All in just 1 day!</div> 
                        </div>

                        <div class="flex justify-center">
                            <a href="https://www.eventbrite.co.uk/e/90942221633" class="btn btn-red">
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
            </div>
        </section>

        <section class="text-white bg-gray-900">  
            <div>
                <div class="flex px-5 py-12 flex-row flex-col items-center">
                    <h2 class="text-xl md:text-2xl uppercase font-semibold leading-tight tracking-tight mb-4 font-medium">Supporters</h2>
                   
                   <div class="flex flex-wrap pb-6">
                   		<div class="w-1/3 xl:w-1/6">
                   			<img src="assets/img/sponsors/aislemaster-compressed.png" alt="Aislemaster">
                   		</div>
                   		<div class="w-1/3 xl:w-1/6">
                   			<img src="assets/img/sponsors/combilift-compressed.png" alt="Combilift">
                   		</div>
                   		<div class="w-1/3 xl:w-1/6">
                   			<img src="assets/img/sponsors/daifuku-compressed.png" alt="Daifuku">
                   		</div>
                   		<div class="w-1/3 xl:w-1/6">
                   			<img src="assets/img/sponsors/konecranes-compressed.png" alt="Konecranes">
                   		</div>
                   		<div class="w-1/3 xl:w-1/6">
                   			<img src="assets/img/sponsors/swisslog-compressed.png" alt="Swisslog">
                   		</div>
                   		<div class="w-1/3 xl:w-1/6">
                   			<img src="assets/img/sponsors/toyota-compressed.png" alt="Toyota Material Handling">
                   		</div>
					</div>

                    <div>
                        <a href="" class="btn btn-gray">
                            <div>Find Out More</div>
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

        <section class="relative bg-gray-800 bg-no-repeat bg-center lg:bg-left bg-contain text-white">      
            <div class="hidden md:block absolute top-0 left-0 h-full w-1/2 bg-cover bg-center" style="background-image: url(assets/img/register-1-compressed.jpg);"></div>                                                                 

            <div class="container mx-auto px-10">
                <div class="py-12 w-full md:w-1/2 md:ml-auto md:pl-12">                                                                                          
                    <h2 class="pb-4 text-xl md:text-2xl font-bold leading-tight uppercase tracking-tight">
	                    Register Your Interest
	                </h2>                        
                    <p class="leading-relaxed">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam pariatur harum culpa inventore porro unde sapiente iste asperiores, itaque modi libero! Minus sunt ipsa iusto sapiente ad nesciunt similique! Itaque.</p>
                    <div class="mt-6">
                    	<a href="https://www.eventbrite.co.uk/e/90942221633" class="btn btn-red" target="_blank">
                            <div>Register now</div>
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
