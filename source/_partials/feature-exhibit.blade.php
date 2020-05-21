<div class="container mx-auto">
	<div class="flex flex-wrap my-1 md:my-8 text-white text-center"> 

		<div class="w-full md:w-1/3 flex flex-col p-3">
			<div class="bg-gray-800 overflow-hidden flex-1 flex flex-col">
				<div class="bg-cover h-48" style="background-image: url({{ $page->resourcePath('/assets/img/factory-1-compressed.jpg') }});"></div>
				<div class="p-4 flex-1 flex flex-col" style="">
					<div class="mb-4 flex-1">
						<h3 class="pb-4 text-md md:text-lg font-bold leading-tight uppercase tracking-tight">Find out more about sponsorship &amp; exhibiting at Tomorrow's Warehouse</h3>
					</div>
					<a href="{{ $page->resourcePath('/contact') }}" class="btn btn-red">
                        <div>Request a media pack</div>
                        <div>
                            <svg class="fill-current text-white inline-block h-6 w-4">
                                <path class="heroicon-ui" d="M9.3 8.7a1 1 0 0 1 1.4-1.4l4 4a1 1 0 0 1 0 1.4l-4 4a1 1 0 0 1-1.4-1.4l3.29-3.3-3.3-3.3z"/>
                            </svg>
                        </div>
                    </a>
				</div>
			</div>  
		</div>

		<div class="w-full md:w-1/3 flex flex-col p-3">
			<div class="bg-gray-600 overflow-hidden flex-1 flex flex-col">
				<div class="bg-cover h-48" style="background-image: url({{ $page->resourcePath('/assets/img/network-1-compressed.jpg') }});"></div>
				<div class="p-4 flex-1 flex flex-col" style="">
					<div class="mb-4 flex-1">
						<h3 class="pb-4 text-md md:text-lg font-bold leading-tight uppercase tracking-tight">Find out which leading manufacturers &amp; suppliers are exhibiting at Tomorrow's Warehouse</h3>
					</div>
					<a href="{{ $page->resourcePath('/exhibitors') }}" class="btn btn-red">
                        <div>Exhibitor List</div>
                        <div>
                            <svg class="fill-current text-white inline-block h-6 w-4">
                                <path class="heroicon-ui" d="M9.3 8.7a1 1 0 0 1 1.4-1.4l4 4a1 1 0 0 1 0 1.4l-4 4a1 1 0 0 1-1.4-1.4l3.29-3.3-3.3-3.3z"/>
                            </svg>
                        </div>
                    </a>
				</div>
			</div>  
		</div>

		<div class="w-full md:w-1/3 flex flex-col p-3">
			<div class="bg-gray-800 overflow-hidden flex-1 flex flex-col">
				<div class="bg-cover h-48" style="background-image: url({{ $page->resourcePath('/assets/img/register-2-compressed.jpg')  }});"></div>
				<div class="p-4 flex-1 flex flex-col" style="">
					<div class="mb-4 flex-1">
						<h3 class="pb-4 text-md md:text-lg font-bold leading-tight uppercase tracking-tight">Find out more about how Tomorrow's Warehouse can benefit your company</h3>
					</div>
					<a href="{{ $page->resourcePath('/contact') }}" class="btn btn-red">
                        <div>Contact Sales</div>
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
</div>