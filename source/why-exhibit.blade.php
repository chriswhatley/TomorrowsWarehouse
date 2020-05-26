@extends('_layouts.master', ["page_title" => "Why Exhibit", "nav_selector" => "exhibit", 'meta_title' => 'Why exhibit at Tomorrow\'s Warehouse', 'meta_description' => 'Guarantee your exhibitor/sponsor presence at the Tomorrow`s Warehouse Event and secure your company`s opportunity to engage with Warehouse, Logistics, Distribution, Operations, Production & Facilities Managers & Directors, together with Buyers and Health & Safety professionals looking to make informed decisions for their logistical processes.'])

@section('content')
	
	<div class="container mx-auto">
    	<div class="flex flex-wrap py-6 md:py-10 px-5 md:px-12">

    		<div class="w-full md:w-1/2 pr-10">
				<h2 class="pb-4 text-xl md:text-2xl font-bold leading-tight uppercase tracking-tight">Exhibiting at Tomorrow's Warehouse </h2> 
    			<p class="leading-relaxed">Guarantee your exhibitor/sponsor presence at the Tomorrow's Warehouse Event and secure your company's opportunity to engage with Warehouse, Logistics, Distribution, Operations, Production &amp; Facilities Managers &amp; Directors, together with Buyers and Health &amp; Safety professionals looking to make informed decisions for their logistical processes.</p>
				
				<div class="mt-6">
                	<a href="{{ $page->resourcePath('/contact') }}" class="btn btn-red">
                        <div>Contact the sales team</div>
                        <div>
                            <svg class="fill-current text-white inline-block h-6 w-4">
                                <path class="heroicon-ui" d="M9.3 8.7a1 1 0 0 1 1.4-1.4l4 4a1 1 0 0 1 0 1.4l-4 4a1 1 0 0 1-1.4-1.4l3.29-3.3-3.3-3.3z"/>
                            </svg>
                        </div>
                    </a>
                </div>
    		</div>

    		<div class="hidden md:block md:w-1/2 bg-center bg-cover rounded" style="background-image: url({{ $page->resourcePath('/assets/img/why-visit-1-compressed.jpg') }})"></div>
		</div>
	</div>
	
	@include('_partials/parallax-exhibit')
	@include('_partials/feature-exhibit')

@endsection