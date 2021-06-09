@extends('_layouts.master', 
    [
        'page_title' => "$page->name",
        'nav_selector' => 'visit',
        'meta_title' => "Tomorrow's Warehouse Exhibitor : $page->name",
        'meta_description' => "$page->description"
    ]
)

@section('content')
    
    <div class="container mx-auto mb-8">
        <div class="flex flex-wrap py-6 md:py-10 px-4">

            <div>
                <a class="text-xs uppercase" href="{{ $page->resourcePath('/supporters') }}" title="Return to exhibitor list">
                    <svg class="transform rotate-180 fill-current inline-block h-5 w-4">
                        <path class="heroicon-ui" d="M9.3 8.7a1 1 0 0 1 1.4-1.4l4 4a1 1 0 0 1 0 1.4l-4 4a1 1 0 0 1-1.4-1.4l3.29-3.3-3.3-3.3z"/>
                    </svg>
                    <span class="-ml-1">Back to Supporters &amp; Partners List</span>
                </a>
            </div>

            @if ($page->logo)
	            <div class="w-full mt-6">
	            	<img src="{{ $page->resourcePath($page->logo) }}" alt="{{ $page->name }}" class="w-1/2 mx-auto mb-2 sm:w-1/3 md:w-1/4 md:mx-0">
	            </div>
            @endif

            <div class="w-full mt-6 md:mt-4 md:w-1/3 order-1 md:order-2">
            	<div class="p-6 bg-gray-800 rounded text-white">
            		@if($page->partner_status)
                        <div class="text-xl font-bold uppercase">{{ $page->partner_status }}</div>
                    @endif  

                    <div class="mt-3">
                        <span class="block text-sm font-bold uppercase">{{ $page->name }}</span>
                    </div>
	            	<div class="mt-3">
	            		<span class="block text-sm font-bold uppercase">Address</span>
	            		{{ $page->address }}
	            	</div>
	            	<div class="mt-6">
	            		<a class="btn btn-red" href="{{ $page->website }}" title="Visit {{ $page->name }} website" target="_blank">                      
                            Visit website
                            <svg class="fill-current text-white inline-block h-6 w-4">
                                <path class="heroicon-ui" d="M9.3 8.7a1 1 0 0 1 1.4-1.4l4 4a1 1 0 0 1 0 1.4l-4 4a1 1 0 0 1-1.4-1.4l3.29-3.3-3.3-3.3z"/>
                            </svg>
                        </a>
	            	</div>
            	</div>     	
            </div>

			<div class="flex flex-wrap w-full mt-4 md:w-2/3 order-2 md:order-1 md:pr-6 exhibitor-profile">
				@yield('profile_content')	
			</div>          
         
        </div>  

         <nav class="w-full px-4 flex flex-wrap justify-center md:justify-end text-sm md:text-base">	 
            <div class="my-1 mr-1">
                @if ($previous = $page->getPrevious())
                    <a class="btn btn-gray" href="{{ $previous->getUrl() }}" title="Previous Exhibitor: {{ $previous->name }}">
                        <svg class="transform rotate-180 fill-current text-white inline-block h-6 w-4">
                            <path class="heroicon-ui" d="M9.3 8.7a1 1 0 0 1 1.4-1.4l4 4a1 1 0 0 1 0 1.4l-4 4a1 1 0 0 1-1.4-1.4l3.29-3.3-3.3-3.3z"/>
                        </svg>
                        {{ $previous->name }}                    
                    </a>
                @endif
            </div>   

            <div class="my-1 ml-1">
                @if ($next = $page->getNext())
                    <a class="btn btn-red" href="{{ $next->getUrl() }}" title="Next Exhibitor: {{ $next->name }}">                      
                        {{ $next->name }}
                        <svg class="fill-current text-white inline-block h-6 w-4">
                            <path class="heroicon-ui" d="M9.3 8.7a1 1 0 0 1 1.4-1.4l4 4a1 1 0 0 1 0 1.4l-4 4a1 1 0 0 1-1.4-1.4l3.29-3.3-3.3-3.3z"/>
                        </svg>
                    </a>
                @endif
            </div>     	      
       </nav>    
    </div>
    
@endsection