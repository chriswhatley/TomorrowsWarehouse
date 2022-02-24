@extends('_layouts.master', 
	['page_title' => 'Why Visit', 
	'nav_selector' => 'visit', 
	'meta_title' => 'Why Visit Tomorrow\'s Warehouse', 
	'meta_description' => 'Discover new technologies to revamp operations for a challenging future - Network with logistics professional peers - Debate and discuss the issues you are facing',
	'partial' => 'parallax-visit'])

@section('content')
	
	<div class="container mx-auto">
    	<div class="flex flex-wrap py-6 md:py-10 px-5">

    		<div class="md:w-1/2 md:pr-10">
				<h2 class="pb-4 text-xl md:text-2xl font-bold leading-tight uppercase tracking-tight">Visiting Tomorrow's Warehouse</h2> 
    			<p class="leading-relaxed">Tomorrow's Warehouse is a one day, free to attend conference tackling operational challenges in warehousing and logistics at a time of unprecedented transformation.</p>
				
				<div class="bg-gray-600 mt-4 p-6  font-semibold text-md uppercase text-center text-white rounded">
					<span class="block text-2xl">Save the date</span>
					<span class="block mt-3 text-md">9th June, 2022 at the CBS Arena - Coventry</span>
				</div>
				
				<p class="mt-4 leading-relaxed">Many warehouse managers and occupiers will be Planning for Peak. Many will be feeling the pinch with warehouse space in short supply, and as we face an uncertain economy. The industry is dealing with a labour crisis and is busy interrogating sustainability goals and seeking ways to make the warehouse more green.</p>
				<p class="mt-4 leading-relaxed">The Tomorrow’s Warehouse conference will help with all of this and more, providing insights and market trends. But not just that, we take pride in providing answers and takeaways that have real practical benefits. We have a plethora of partners on site who can help boost your processes and projects with solutions from warehouse automation, to innovative storage, insightful IT, intelligent forklifts, and much more. </p>
				<div class="mt-6">
                	<a href="{{ $page->registrationURL }}" target="_blank" class="btn btn-red">
                        <div>Register Now</div>
                        <div>
                            <svg class="fill-current text-white inline-block h-6 w-4">
                                <path class="heroicon-ui" d="M9.3 8.7a1 1 0 0 1 1.4-1.4l4 4a1 1 0 0 1 0 1.4l-4 4a1 1 0 0 1-1.4-1.4l3.29-3.3-3.3-3.3z"/>
                            </svg>
                        </div>
                    </a>
                </div>
    		</div>

    		<div class="why-visit hidden md:block md:w-1/2 bg-center bg-cover rounded-lg overflow-hidden"></div>
		</div>
	</div>
	
	@include('_partials/parallax-visit')
	@include('_partials/feature-visit')


	
@endsection