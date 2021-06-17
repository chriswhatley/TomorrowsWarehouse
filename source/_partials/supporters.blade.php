<section class="bg-gray-100">  
    <div>
        <div class="flex px-5 py-12 flex-row flex-col items-center">
            <h2 class="text-xl md:text-2xl uppercase font-semibold leading-tight tracking-tight mb-4 font-medium text-red-500">Sponsors & Partners</h2>

            <ul class="mt-6 mb-6 flex ">

                @foreach($supporters as $supporter)   
                    
                    {{-- Filter out exhxibitors (only display sponsors/partners, etc.) --}}
                    @continue($supporter->partner_status == 'Exhibitor')
                    
                    <li class="">
                        <img src="{{ $page->baseUrl . $supporter->logo }}" alt="{{ $supporter->name }}" class="w-48">
                    </li>
                    
                @endforeach

            </ul>
            
            

            <div class="mt-4">
                <a href="supporters" class="btn btn-gray">
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