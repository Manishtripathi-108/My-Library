@props(['type' => 0])

@switch($type)
	@case(1)
	@break

	@default
		<div class="bg-primary text-primary relative flex w-11/12 max-w-[350px] flex-col items-center rounded-2xl border-4 border-solid border-transparent bg-clip-padding p-12 text-center shadow-neu-xs after:absolute after:-bottom-1 after:-left-1 after:-right-1 after:-top-1 after:-z-10 after:block after:rounded-2xl dark:shadow-neu-dark-xs">
			<div class="size-44 relative overflow-hidden rounded-full">
				<img class="absolute left-2/4 top-2/4 aspect-auto w-full -translate-x-2/4 -translate-y-2/4 object-cover" src="{{ asset('images/fox.png') }}" />
			</div>

			<h2 class="text-nowrap text-primary mt-6 text-2xl font-semibold">Ashborn GodSlayer</h2>
			<small class="text-secondary text-base">@ashborn_gs</small>
			<div class="flex-center mt-6">
				<button class="neu-btn rounded-l-full rounded-r-full px-5">Follow</button>
				<button class="neu-btn neu-icon-only-btn ml-3">
					<x-svg.upload class="size-7" />
				</button>
				<button class="neu-btn neu-icon-only-btn ml-3">
					<x-svg.3dots class="size-7" />
				</button>
			</div>

			<div class="flex-center mt-10">
				<a class="text-secondary mx-1.5 no-underline" href="#">
					<x-svg.twitter class="size-5" />
				</a>
				<a class="text-secondary mx-1.5 no-underline" href="#">
					<x-svg.facebook class="size-5" />
				</a>
				<a class="text-secondary mx-1.5 no-underline" href="#">
					<x-svg.instagram class="size-5" />
				</a>
			</div>
		</div>
@endswitch
