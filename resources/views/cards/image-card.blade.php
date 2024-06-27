@props(['type' => 1])

@switch($type)
	@case(1)
		<div class="group relative h-[500px] w-[360px] overflow-hidden shadow-[0_0_32px_-10px_rgba(0,0,0,0.08)]">
			<div class="absolute bottom-0 left-0 z-[1] w-full translate-y-0 bg-[#86B971] px-[60px] py-[50px] text-center transition-all duration-[0.35s] ease-[cubic-bezier(0.1,0.72,0.4,0.97)] will-change-[bottom,background-color,transform,padding] before:absolute before:-top-20 before:left-0 before:z-[-1] before:h-[120px] before:w-full before:bg-inherit before:content-[''] before:[clip-path:ellipse(60%_80px_at_bottom_center)] after:absolute after:-bottom-20 after:left-0 after:z-[-1] after:h-[120px] after:w-full after:bg-inherit after:content-[''] after:[clip-path:ellipse(60%_80px_at_top_center)] group-hover:bottom-full group-hover:translate-y-full group-hover:bg-[#DEE8C2] group-hover:px-[60px] group-hover:transition-all group-hover:duration-[0.35s] group-hover:ease-[cubic-bezier(0.1,0.72,0.4,0.97)]">
				<h3 class="mb-[1em] text-2xl">
					Make your <span class="text-[#2d7f0b]">choice</span> right now!
				</h3>
				<p class="text-xs">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officia quisquam doloremque nostrum laboriosam, blanditiis libero corporis nulla a aut?</p>
				<a class="group-hover absolute bottom-4 left-2/4 flex -translate-x-2/4 translate-y-[10%] flex-wrap items-center p-2.5 text-[#2d7f0b] no-underline opacity-0 transition-all duration-[0.35s] hover:opacity-100" href="#">
					<span>Learn How</span>
					<svg class="ml-1 w-[18px] transition-transform duration-[0.3s] group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
						<path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
					</svg>
				</a>
			</div>
			<img class="absolute left-0 top-0 z-[-1] h-full w-full scale-[1.2] object-cover object-center transition-transform duration-[0.35s] ease-[cubic-bezier(0.1,0.72,0.4,0.97)] group-hover:scale-100" src="{{ asset('images/drink.png') }}" alt="">
		</div>
	@break

	@case(2)
		<div class="w-5/6 max-w-xs sm:max-w-md md:max-w-lg lg:max-w-xl xl:max-w-2xl">
			<div class="relative overflow-hidden rounded-lg bg-white p-5 shadow-sm transition duration-150 ease-in-out focus-within:translate-y-[-5px] focus-within:shadow-md hover:translate-y-[-5px] hover:shadow-md">
				<figure class="overflow-hidden rounded-lg">
					<img class="block max-w-full" src="{{ asset('images/spider.png') }}" alt="" />
				</figure>
				<div class="mt-6 flex items-center justify-between">
					<a class="pr-4 text-lg font-semibold leading-tight text-gray-900 no-underline hover:text-gray-700 focus:text-gray-700" href="#">When life gives you spiders</a>
					<button class="duration-250 z-10 flex h-10 w-10 items-center justify-center rounded-full bg-white text-xl text-gray-600 shadow-sm transition ease-in-out hover:bg-red-500 hover:text-white focus:bg-red-500 focus:text-white">
						<svg class="h-6 w-6" id="Heart" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" display="block">
							<path d="M7 3C4.239 3 2 5.216 2 7.95c0 2.207.875 7.445 9.488 12.74a.985.985 0 0 0 1.024 0C21.125 15.395 22 10.157 22 7.95 22 5.216 19.761 3 17 3s-5 3-5 3-2.239-3-5-3z" />
						</svg>
					</button>
				</div>
				<div class="mt-5 flex flex-wrap items-center border-t border-gray-300 pt-5">
					<div class="flex items-center text-gray-700">
						<svg class="mr-2 h-6 w-6" id="EyeOpen" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" display="block">
							<path d="M21.257 10.962c.474.62.474 1.457 0 2.076C19.764 14.987 16.182 19 12 19c-4.182 0-7.764-4.013-9.257-5.962a1.692 1.692 0 0 1 0-2.076C4.236 9.013 7.818 5 12 5c4.182 0 7.764 4.013 9.257 5.962z" />
							<circle cx="12" cy="12" r="3" />
						</svg>
						<span>2,465</span>
					</div>
					<div class="ml-3 flex items-center text-gray-700">
						<svg class="mr-2 h-6 w-6" id="Calendar" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" display="block">
							<rect x="2" y="4" width="20" height="18" rx="4" />
							<path d="M8 2v4" />
							<path d="M16 2v4" />
							<path d="M2 10h20" />
						</svg>
						<span>Jul 26, 2019</span>
					</div>
				</div>
			</div>
		</div>
	@break

	@default
@endswitch
