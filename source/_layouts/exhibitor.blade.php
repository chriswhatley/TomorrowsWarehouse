@extends('_layouts.master', 
    [
        'page_title' => "$page->exhibitor",
        'nav_selector' => 'visit',
        'meta_title' => "Tomorrow's Warehouse Exhibitor : $page->exhibitor",
        'meta_description' => "$page->description"
    ]
)

@section('content')
    
    <div class="container mx-auto mb-8">
        <div class="flex flex-wrap py-6 md:py-10 px-4">

            @if ($page->logo)
	            <div class="w-full">
	            	<img src="{{ $page->logo }}" alt="{{ $page->exhibitor }}" class="mb-2 md:max-w-xs">
	            </div>
            @endif

            <div class="w-full mt-6 md:mt-4 md:w-1/3 order-1 md:order-2">
            	<div class="p-6 bg-gray-800 rounded text-white">
            		<div class="text-2xl font-bold uppercase">Stand No : {{ $page->stand_number }}</div>
	            	<div class="mt-3">
	            		<span class="block text-sm font-bold uppercase">Address</span>
	            		{{ $page->address }}
	            	</div>
	            	<div class="mt-3">
	            		<span class="block text-sm font-bold uppercase">Website</span>
	            		<a href="{{ $page->website }}" target="_blank">{{ $page->website }}</a>
	            	</div>
            	</div>     	
            </div>

			<div class="flex flex-wrap w-full mt-4 md:w-2/3 order-2 md:order-1 md:pr-6 exhibitor-profile">
				@yield('profile_content')	
			</div>          
         
        </div>  

         <nav class="w-full px-4 flex justify-center md:justify-end text-sm md:text-base">	 
          	<div>
           		@if ($next = $page->getNext())
	           		<a class="btn btn-gray" href="{{ $next->getUrl() }}" title="Previous Exhibitor: {{ $next->exhibitor }}">
	           			<svg class="transform rotate-180 fill-current text-white inline-block h-6 w-4">
                            <path class="heroicon-ui" d="M9.3 8.7a1 1 0 0 1 1.4-1.4l4 4a1 1 0 0 1 0 1.4l-4 4a1 1 0 0 1-1.4-1.4l3.29-3.3-3.3-3.3z"/>
                        </svg>
                        {{ $next->exhibitor }}
	           		</a>
           		@endif
           	</div>    

           	<div class="ml-2">
           		@if ($previous = $page->getPrevious())
	           		<a class="btn btn-red" href="{{ $previous->getUrl() }}" title="Next Exhibitor: {{ $previous->exhibitor }}">
	           			{{ $previous->exhibitor }}
	           			<svg class="fill-current text-white inline-block h-6 w-4">
                            <path class="heroicon-ui" d="M9.3 8.7a1 1 0 0 1 1.4-1.4l4 4a1 1 0 0 1 0 1.4l-4 4a1 1 0 0 1-1.4-1.4l3.29-3.3-3.3-3.3z"/>
                        </svg>
	           		</a>
           		@endif
           	</div>	      
       </nav>    
    </div>
    
@endsection