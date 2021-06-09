<section class="bg-gray-100">  
    <div>
        <div class="flex px-5 py-12 flex-row flex-col items-center">
            <h2 class="text-xl md:text-2xl uppercase font-semibold leading-tight tracking-tight mb-4 font-medium text-red-500">Sponsors & Partners</h2>

            <div class="flex flex-wrap pb-6">

                @foreach($supporters as $supporter)
                    <div class="w-1/3 xl:w-1/6">
                        <a href="{{ $supporter->getPath() }}">
                            <img src="{{ $supporter->logo }}" alt="{{ $supporter->name }}" class="w-64">    
                        </a>
                    </div>
                @endforeach

                {{-- <div class="w-1/3 xl:w-1/6">
                    <img src="assets/img/supporters/swisslog.svg" alt="Swisslog" class="w-56">
                </div>
                <div class="w-1/3 xl:w-1/6">
                    <img src="assets/img/supporters/combilift.svg" alt="Combilift" class="w-56">
                </div>
                <div class="w-1/3 xl:w-1/6">
                    <img src="assets/img/supporters/tgw.svg" alt="TGW" class="w-56">
                </div>
                <div class="w-1/3 xl:w-1/6">
                    <img src="assets/img/supporters/toyota.svg" alt="Toyota Material Handling" class="w-56">
                </div>
                <div class="w-1/3 xl:w-1/6">
                    <img src="assets/img/supporters/ukmha.svg" alt="UKMHA" class="w-56">
                </div>
                <div class="w-1/3 xl:w-1/6">
                    <img src="assets/img/supporters/ukwa.svg" alt="UKWA" class="w-56">
                </div> --}}

            </div>

            <div>
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