<x-app-layout title="Neumorphism Carousels">

	<x-grid title="Carousels">

		<x-slot name="description">
			Carousels are used to display a collection of images or other content in a rotating manner. They are commonly used to showcase a series of images or products on a website. Carousels can be used to create interactive and engaging user experiences, allowing users to scroll through content at their own pace. They are often used on homepages, product pages, and other areas of a website to highlight featured content.
		</x-slot>

		<x-grid.item title="Basic Carousel">
			<div class="relative h-[500px] w-full overflow-hidden rounded-md p-5 shadow-neu-lg dark:shadow-neu-dark-lg" x-data="carousel()">
				<div class="flex-center size-full relative overflow-hidden rounded-md">
					<!-- Slide 1 -->
					<div class="absolute opacity-0 transition-opacity duration-700" :class="{ 'opacity-100': activeIndex === 0 }">
						<img class="size-full object-cover" src="{{ asset('images/fantasy-plane.png') }}" alt="Slide 1">
					</div>
					<!-- Slide 2 -->
					<div class="absolute opacity-0 transition-opacity duration-700" :class="{ 'opacity-100': activeIndex === 1 }">
						<img class="size-full object-cover" src="{{ asset('images/lady-rabbit.png') }}" alt="Slide 2">
					</div>
					<!-- Slide 3 -->
					<div class="absolute opacity-0 transition-opacity duration-700" :class="{ 'opacity-100': activeIndex === 2 }">
						<img class="size-full object-cover" src="{{ asset('images/cards/flower.png') }}" alt="Slide 3">
					</div>
					<!-- Controls -->
					<button class="carousel-control prev text-secondary hover:text-primary focus:text-primary absolute inset-y-0 left-0 flex items-center justify-center focus:outline-none" @click="prev">
						<svg class="h-10 w-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
						</svg>
					</button>
					<button class="carousel-control next text-secondary hover:text-primary focus:text-primary absolute inset-y-0 right-0 flex items-center justify-center focus:outline-none" @click="next">
						<svg class="h-10 w-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
						</svg>
					</button>
				</div>
			</div>

			<x-slot name="jsCode">
				<script>
					document.addEventListener('alpine:init', () => {
						Alpine.data('carousel', () => ({
							activeIndex: 0,
							prev() {
								this.activeIndex = (this.activeIndex - 1 + 3) % 3;
							},
							next() {
								this.activeIndex = (this.activeIndex + 1) % 3;
							}
						}))
					})
				</script>
			</x-slot>
		</x-grid.item>

		<x-grid.item title="Carousel with Animation">
			<div class="relative h-[500px] w-full overflow-hidden rounded-md p-5 shadow-neu-lg dark:shadow-neu-dark-lg" x-data="carousel_animate()">
				<div class="flex-center size-full relative overflow-hidden rounded-md">
					<!-- Slide 1 -->
					<div class="absolute opacity-0 transition-opacity duration-1000 animation-duration-700" :class="{ 'opacity-100': activeIndex === 0, 'animate-slide-right-return': direction === 'next' && activeIndex === 0, 'animate-slide-left-return': direction === 'prev' && activeIndex === 0, 'animate-slide-left': direction === 'next' && previousIndex === 0, 'animate-slide-right': direction === 'prev' && previousIndex === 0 }">
						<img class="size-full object-cover" src="{{ asset('images/fantasy-plane.png') }}" alt="Slide 1">
					</div>
					<!-- Slide 2 -->
					<div class="absolute opacity-0 transition-opacity duration-1000 animation-duration-700" :class="{ 'opacity-100': activeIndex === 1, 'animate-slide-right-return': direction === 'next' && activeIndex === 1, 'animate-slide-left-return': direction === 'prev' && activeIndex === 1, 'animate-slide-left': direction === 'next' && previousIndex === 1, 'animate-slide-right': direction === 'prev' && previousIndex === 1 }">
						<img class="size-full object-cover" src="{{ asset('images/lady-rabbit.png') }}" alt="Slide 2">
					</div>
					<!-- Slide 3 -->
					<div class="absolute opacity-0 transition-opacity duration-1000 animation-duration-700" :class="{ 'opacity-100': activeIndex === 2, 'animate-slide-right-return': direction === 'next' && activeIndex === 2, 'animate-slide-left-return': direction === 'prev' && activeIndex === 2, 'animate-slide-left': direction === 'next' && previousIndex === 2, 'animate-slide-right': direction === 'prev' && previousIndex === 2 }">
						<img class="size-full object-cover" src="{{ asset('images/cards/flower.png') }}" alt="Slide 3">
					</div>
					<!-- Controls -->
					<button class="carousel-control prev text-secondary hover:text-primary focus:text-primary absolute inset-y-0 left-0 flex items-center justify-center focus:outline-none" @click="prev">
						<svg class="h-10 w-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
						</svg>
					</button>
					<button class="carousel-control next text-secondary hover:text-primary focus:text-primary absolute inset-y-0 right-0 flex items-center justify-center focus:outline-none" @click="next">
						<svg class="h-10 w-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
						</svg>
					</button>
				</div>
			</div>
		</x-grid.item>

	</x-grid>

	<x-slot name="rightSidenav">

		<x-sidenav-list>Basic Carousel</x-sidenav-list>

	</x-slot>

	@push('scripts')
		<script>
			function carousel_animate() {
				return {
					activeIndex: 0,
					previousIndex: 0,
					direction: '',
					slides: 3,
					prev() {
						this.direction = 'prev';
						this.previousIndex = this.activeIndex;
						this.activeIndex = (this.activeIndex === 0) ? this.slides - 1 : this.activeIndex - 1;
					},
					next() {
						this.direction = 'next';
						this.previousIndex = this.activeIndex;
						this.activeIndex = (this.activeIndex === this.slides - 1) ? 0 : this.activeIndex + 1;
					}
				}
			}
		</script>
		<script>
			document.addEventListener('alpine:init', () => {
				Alpine.data('carousel', () => ({
					activeIndex: 0,
					prev() {
						this.activeIndex = (this.activeIndex - 1 + 3) % 3;
					},
					next() {
						this.activeIndex = (this.activeIndex + 1) % 3;
					}
				}))
			})
		</script>
	@endpush

</x-app-layout>
