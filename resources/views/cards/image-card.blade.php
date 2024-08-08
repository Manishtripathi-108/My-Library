@props(['type' => 1])

@switch($type)
	@case(1)
		<div class="group relative h-[500px] w-[360px] overflow-hidden rounded-md shadow-md">
			<div class="absolute bottom-0 left-0 z-[1] w-full translate-y-0 bg-[#86B971] px-12 py-10 text-center transition-all duration-[0.35s] ease-[cubic-bezier(0.1,0.72,0.4,0.97)] will-change-[bottom,background-color,transform,padding] before:absolute before:-top-20 before:left-0 before:z-[-1] before:h-[120px] before:w-full before:bg-inherit before:content-[''] before:[clip-path:ellipse(60%_80px_at_bottom_center)] after:absolute after:-bottom-20 after:left-0 after:z-[-1] after:h-[120px] after:w-full after:bg-inherit after:content-[''] after:[clip-path:ellipse(60%_80px_at_top_center)] group-hover:bottom-full group-hover:translate-y-full group-hover:bg-[#DEE8C2] group-hover:px-[60px] group-hover:transition-all group-hover:duration-[0.35s] group-hover:ease-[cubic-bezier(0.1,0.72,0.4,0.97)]">
				<h3 class="mb-4 text-2xl">
					Make your <span class="text-green-700">choice</span> right now!
				</h3>
				<p class="text-xs">Join the adventures of Naruto Uzumaki as he strives to become Hokage.</p>
				<a class="group-hover absolute bottom-4 left-2/4 flex -translate-x-2/4 translate-y-[10%] flex-wrap items-center p-2.5 text-green-700 no-underline opacity-0 transition-all duration-[0.35s] group-hover:opacity-100" href="#">
					<span>Learn How</span>
					<x-svg.naruto class="ml-1 w-4 transition-transform duration-[0.3s] group-hover:translate-x-1" />
				</a>
			</div>
			<img class="absolute left-0 top-0 z-[-1] h-full w-full scale-[1.2] object-cover object-center transition-transform duration-[0.35s] ease-[cubic-bezier(0.1,0.72,0.4,0.97)] group-hover:scale-100" src="{{ asset('images/naruto.png') }}" alt="Naruto Uzumaki">
		</div>
	@break

	@case(2)
		<div class="w-5/6 max-w-xs sm:max-w-md md:max-w-lg lg:max-w-xl xl:max-w-2xl">
			<div class="bg-primary relative overflow-hidden rounded-lg p-5 shadow-md dark:shadow-gray-600 transition duration-150 ease-in-out focus-within:translate-y-[-5px] focus-within:shadow-lg hover:translate-y-[-5px] hover:shadow-lg">
				<figure class="overflow-hidden rounded-lg">
					<img class="block max-w-full" src="{{ asset('images/landscape/one_piece.png') }}" alt="One Piece" />
				</figure>
				<div class="mt-6 flex items-center justify-between">
					<a class="text-primary pr-4 text-lg font-semibold leading-tight text-gray-900 no-underline" href="#">Join Luffy's Adventure</a>
					<button class="duration-250 bg-primary z-10 flex h-10 w-10 items-center justify-center rounded-full text-xl text-gray-600 shadow-sm transition ease-in-out hover:bg-red-500 hover:text-white focus:bg-red-500 focus:text-white">
						<x-svg.luffy class="h-6 w-6" />
					</button>
				</div>
				<div class="mt-5 flex flex-wrap items-center border-t border-gray-600 pt-5">
					<div class="text-primary flex items-center">
						<x-svg.zoro class="mr-2 h-6 w-6" />
						<span>2,465</span>
					</div>
					<div class="text-primary ml-3 flex items-center">
						<x-svg.calendar class="mr-2 h-6 w-6" />
						<span>Jul 26, 2019</span>
					</div>
				</div>
			</div>
		</div>
	@break

	@default
@endswitch
