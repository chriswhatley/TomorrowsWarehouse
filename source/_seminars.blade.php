@extends('_layouts.master', ['page_title' => 'Seminars', 'nav_selector' => 'seminars', 'meta_title' => 'Tomorrow\'s Warehouse Seminar Programme', 'meta_description' => 'In just a single day, the Tomorrow\'s Warehouse seminar programme will cover key topics of interest, including: automation, the future of storage, robotics and the future of the forklift.'])

@section('content')
	
	<div class="container mx-auto">
    	<div class="flex flex-wrap py-6 md:py-10 px-4">

    		<h3 class="w-full text-md md:text-lg font-bold leading-tight uppercase tracking-tight text-center">EACH SEMINAR SESSION WILL LOOK AT KEY TOPICS OF INTEREST</h3>

    		<div class="container mx-auto">
				
				<div class="grid grid-cols-1 md:grid-cols-2 gap-4 my-8 text-white">

					<div class="bg-gray-800 overflow-hidden flex-col lg:flex lg:flex-row rounded">
						<div class="seminars-automation bg-cover bg-left w-full h-32 order-1 flex flex-col lg:w-1/3 lg:h-auto lg:order-2">
						</div>
						<div class="order-2 w-full flex flex-col p-6 lg:w-2/3 lg:order-1">
							<h3 class="text-md md:text-lg font-bold leading-tight uppercase tracking-tight">AUTOMATION:</h3>
							<div class="mt-4">
								<p class="leading-relaxed">The pressures of eComm were always great and have been felt throughout operations, from the growth of single Picking to a huge surge in Returns. The pandemic has accelerated this in ways that would have seemed outlandish a year before.</p>
								<p class="leading-relaxed">Automation promises to be an answer - bringing speed and accuracy to operations. It can lower reliance on labour and make warehouse work less of a chore, boosting staff retention. But it must be specified and managed correctly. Learn more at the Event.</p>
							</div>
						</div>
					</div>  

					<div class="h-full bg-gray-600 overflow-hidden flex-col lg:flex lg:flex-row rounded">
						<div class="seminars-future-storage bg-cover bg-center w-full h-32 order-1 flex flex-col lg:w-1/3 lg:h-auto lg:order-2 lg:bg-right-bottom">
						</div>
						<div class="order-2 w-full flex flex-col p-6 lg:w-2/3 lg:order-1">
							<h3 class="text-md md:text-lg font-bold leading-tight uppercase tracking-tight">THE FUTURE OF STORAGE:</h3>
							<div class="mt-4">
								<p class="leading-relaxed">It's all about optimising space as warehouse property increases in price. eCommerce and the pandemic will lead to sustained warehouse transformation and demand for space. This means specifying the right kind of new build for the needs of the future warehouse.</p>
								<p class="leading-relaxed">It emphasises the need to create slicker, more efficient operations within an existing footprint, using high bay racking systems, automated storage solutions, mezzanines, OR simply ensuring best use of indoor space through design and outdoor space with the installation of bespoke structures & canopies. Learn more at the Event.</p>
							</div>
						</div>
					</div>  

					<div class="h-full bg-gray-800 overflow-hidden flex-col lg:flex lg:flex-row rounded order-3 md:order-4">
						<div class="seminars-robotics bg-cover bg-bottom md:bg-right w-full h-32 order-1 flex flex-col lg:w-1/3 lg:h-auto lg:order-2"></div>
						<div class="order-2 w-full flex flex-col p-6 lg:w-2/3 lg:order-1">
							<h3 class="text-md md:text-lg font-bold leading-tight uppercase tracking-tight">ROBOTICS:</h3>
							<div class="mt-4">
								<p class="leading-relaxed">Robotics is making serious inroads into logistics. Autonomous Mobile Robots (AMRs) promise to bring automation benefits to picking and other processes with relatively low footprint and at price ranges suitable for SMEs (as well as larger companies), that can be scaled up to support growth. We’ll explore the rationale, software, on-boarding, ownership & payment models and much more. Learn all about it at the Event.</p>									
							</div>
						</div>
					</div> 

					<div class="bg-gray-600 overflow-hidden flex-col lg:flex lg:flex-row rounded order-4 md:order-3">
						<div class="seminars-future-forklift bg-cover bg-center w-full h-32 flex flex-col lg:w-1/3 lg:h-auto lg:order-2"></div>
						<div class="order-2 w-full flex flex-col p-6 lg:w-2/3 lg:order-1">
							<h3 class="text-md md:text-lg font-bold leading-tight uppercase tracking-tight">THE FUTURE OF THE FORKLIFT:</h3>
							<div class="mt-4">
								<p class="leading-relaxed">The industry workhorse is not standing still, and there is increasing demand for lift trucks that are more reliable, greener, safer, and more connected. The forklift is changing fast, and companies must reckon with the cost of diesel fuel and engines increasing substantially in the coming years.</p>
								<p class="leading-relaxed">In addition, lithium-based batteries are at the cutting edge promising dramatically lower downtime and more predictable and efficient operation. What is the right option for your operation? Learn more at the Event.</p>
							</div>
						</div>
					</div>   

				</div>

			</div>	
		</div>		
	</div>
	
	@include('_partials/parallax-exhibit')
	@include('_partials/feature-visit')


	
@endsection