<div class="container mx-auto">
	<div class="flex flex-wrap my-1 md:my-8 text-white text-center"> 

		<div class="w-full md:w-1/3 flex flex-col p-3">
			<div class="bg-gray-800 overflow-hidden flex-1 flex flex-col rounded">
				<div class="feature-visit-exhibitors bg-cover h-48"></div>
				<div class="p-4 flex-1 flex flex-col" style="">
					<div class="mb-4 flex-1">
						<h3 class="pb-4 text-md md:text-lg font-bold leading-tight uppercase tracking-tight">Discover new technologies to revamp operations for a challenging future</h3>
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
			<div class="bg-gray-600 overflow-hidden flex-1 flex flex-col rounded">
				<div class="feature-visit-seminars bg-cover bg-center h-48"></div>
				<div class="p-4 flex-1 flex flex-col" style="">
					<div class="mb-4 flex-1">
						<h3 class="pb-4 text-md md:text-lg font-bold leading-tight uppercase tracking-tight">Debate and discuss the issues you are facing</h3>
					</div>
					<a href="{{ $page->resourcePath('/seminars') }}" class="btn btn-red">
                        <div>Seminars</div>
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
			<div class="bg-gray-800 overflow-hidden flex-1 flex flex-col rounded">
				<div class="feature-visit-register bg-cover bg-bottom h-48"></div>
				<div class="p-4 flex-1 flex flex-col" style="">
					<div class="mb-4 flex-1">
						<h3 class="pb-4 text-md md:text-lg font-bold leading-tight uppercase tracking-tight">Network with logistics professional peers</h3>
					</div>
					<a href="{{ $page->registrationURL }}" target="_blank" class="btn btn-red">
                        <div>Register</div>
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