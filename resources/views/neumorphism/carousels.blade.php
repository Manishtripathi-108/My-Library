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
					<button class="text-secondary hover:text-primary focus:text-primary flex-center absolute inset-y-0 left-0 focus:outline-none" @click="prev">
						<svg class="h-10 w-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
						</svg>
					</button>
					<button class="text-secondary hover:text-primary focus:text-primary flex-center absolute inset-y-0 right-0 focus:outline-none" @click="next">
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

		<x-grid.item title="Animated Carousel">
			<div class="relative h-[500px] w-full overflow-hidden rounded-md p-5 shadow-neu-lg dark:shadow-neu-dark-lg" x-data="animated_carousel()">
				<div class="flex-center size-full relative overflow-hidden rounded-md">
					<!-- Slide 1 -->
					<div class="animation-duration-700 absolute opacity-0 transition-opacity duration-1000" :class="{ 'opacity-100': activeIndex === 0, 'animate-slide-right-return': direction === 'next' && activeIndex === 0, 'animate-slide-left-return': direction === 'prev' && activeIndex === 0, 'animate-slide-left': direction === 'next' && previousIndex === 0, 'animate-slide-right': direction === 'prev' && previousIndex === 0 }">
						<img class="size-full object-cover" src="{{ asset('images/fantasy-plane.png') }}" alt="Slide 1">
					</div>
					<!-- Slide 2 -->
					<div class="animation-duration-700 absolute opacity-0 transition-opacity duration-1000" :class="{ 'opacity-100': activeIndex === 1, 'animate-slide-right-return': direction === 'next' && activeIndex === 1, 'animate-slide-left-return': direction === 'prev' && activeIndex === 1, 'animate-slide-left': direction === 'next' && previousIndex === 1, 'animate-slide-right': direction === 'prev' && previousIndex === 1 }">
						<img class="size-full object-cover" src="{{ asset('images/lady-rabbit.png') }}" alt="Slide 2">
					</div>
					<!-- Slide 3 -->
					<div class="animation-duration-700 absolute opacity-0 transition-opacity duration-1000" :class="{ 'opacity-100': activeIndex === 2, 'animate-slide-right-return': direction === 'next' && activeIndex === 2, 'animate-slide-left-return': direction === 'prev' && activeIndex === 2, 'animate-slide-left': direction === 'next' && previousIndex === 2, 'animate-slide-right': direction === 'prev' && previousIndex === 2 }">
						<img class="size-full object-cover" src="{{ asset('images/cards/flower.png') }}" alt="Slide 3">
					</div>
					<!-- Controls -->
					<button class="text-secondary hover:text-primary focus:text-primary flex-center absolute inset-y-0 left-0 focus:outline-none" @click="prev">
						<svg class="h-10 w-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
						</svg>
					</button>
					<button class="text-secondary hover:text-primary focus:text-primary flex-center absolute inset-y-0 right-0 focus:outline-none" @click="next">
						<svg class="h-10 w-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
						</svg>
					</button>
				</div>
			</div>

			<x-slot name="jsCode">
				<script>
					function animated_carousel() {
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
			</x-slot>
		</x-grid.item>

		<x-grid.item title="Carousel with indicators">
			<div class="relative h-[500px] w-full overflow-hidden rounded-md p-5 shadow-neu-lg dark:shadow-neu-dark-lg" x-data="animated_carousel()">
				<div class="flex-center size-full relative overflow-hidden rounded-md">
					<!-- Slide 1 -->
					<div class="animation-duration-700 absolute opacity-0 transition-opacity duration-1000" :class="{ 'opacity-100': activeIndex === 0, 'animate-slide-right-return': direction === 'next' && activeIndex === 0, 'animate-slide-left-return': direction === 'prev' && activeIndex === 0, 'animate-slide-left': direction === 'next' && previousIndex === 0, 'animate-slide-right': direction === 'prev' && previousIndex === 0 }">
						<img class="size-full object-cover" src="{{ asset('images/fantasy-plane.png') }}" alt="Slide 1">
					</div>
					<!-- Slide 2 -->
					<div class="animation-duration-700 absolute opacity-0 transition-opacity duration-1000" :class="{ 'opacity-100': activeIndex === 1, 'animate-slide-right-return': direction === 'next' && activeIndex === 1, 'animate-slide-left-return': direction === 'prev' && activeIndex === 1, 'animate-slide-left': direction === 'next' && previousIndex === 1, 'animate-slide-right': direction === 'prev' && previousIndex === 1 }">
						<img class="size-full object-cover" src="{{ asset('images/lady-rabbit.png') }}" alt="Slide 2">
					</div>
					<!-- Slide 3 -->
					<div class="animation-duration-700 absolute opacity-0 transition-opacity duration-1000" :class="{ 'opacity-100': activeIndex === 2, 'animate-slide-right-return': direction === 'next' && activeIndex === 2, 'animate-slide-left-return': direction === 'prev' && activeIndex === 2, 'animate-slide-left': direction === 'next' && previousIndex === 2, 'animate-slide-right': direction === 'prev' && previousIndex === 2 }">
						<img class="size-full object-cover" src="{{ asset('images/cards/flower.png') }}" alt="Slide 3">
					</div>
					<!-- Controls -->
					<button class="text-secondary hover:text-primary focus:text-primary flex-center absolute inset-y-0 left-0 focus:outline-none" @click="prev">
						<svg class="h-10 w-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
						</svg>
					</button>
					<!-- Indicators -->
					<div class="flex-center absolute inset-x-0 bottom-0">
						<button class="hover:text-primary focus:text-primary flex-center text-secondary focus:outline-none" @click="setIndex(0)">
							<x-svg.dot class="size-8 fill-none stroke-light-text-secondary dark:stroke-dark-text-secondary" ::class="{ ' fill-light-text dark:fill-dark-text dark:stroke-none stroke-none': activeIndex === 0 }" />
						</button>
						<button class="hover:text-primary focus:text-primary flex-center text-secondary focus:outline-none" @click="setIndex(1)">
							<x-svg.dot class="size-8 fill-none stroke-light-text-secondary dark:stroke-dark-text-secondary" ::class="{ ' fill-light-text dark:fill-dark-text dark:stroke-none stroke-none': activeIndex === 1 }" />
						</button>
						<button class="hover:text-primary focus:text-primary flex-center text-secondary focus:outline-none" @click="setIndex(2)">
							<x-svg.dot class="size-8 fill-none stroke-light-text-secondary dark:stroke-dark-text-secondary" ::class="{ ' fill-light-text dark:fill-dark-text dark:stroke-none stroke-none': activeIndex === 2 }" />
						</button>
					</div>
					<!-- Controls -->
					<button class="text-secondary hover:text-primary focus:text-primary flex-center absolute inset-y-0 right-0 focus:outline-none" @click="next">
						<svg class="h-10 w-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
						</svg>
					</button>
				</div>
			</div>

			<x-slot name="jsCode">
				<script>
					function animated_carousel() {
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
							},
							setIndex(index) {
								this.direction = (index > this.activeIndex) ? 'next' : 'prev';
								this.previousIndex = this.activeIndex;
								this.activeIndex = index;
							}
						}
					}
				</script>
			</x-slot>
		</x-grid.item>

		<x-grid.item title="Auto Changing Carousel">
			<div class="relative h-[500px] w-full overflow-hidden rounded-md p-5 shadow-neu-lg dark:shadow-neu-dark-lg" x-data="auto_changing_carousel()">
				<div class="flex-center size-full relative overflow-hidden rounded-md">
					<!-- Slide 1 -->
					<div class="animation-duration-700 absolute opacity-0 transition-opacity duration-1000" :class="{ 'opacity-100': activeIndex === 0, 'animate-slide-right-return': direction === 'next' && activeIndex === 0, 'animate-slide-left-return': direction === 'prev' && activeIndex === 0, 'animate-slide-left': direction === 'next' && previousIndex === 0, 'animate-slide-right': direction === 'prev' && previousIndex === 0 }">
						<img class="size-full object-cover" src="{{ asset('images/fantasy-plane.png') }}" alt="Slide 1">
					</div>
					<!-- Slide 2 -->
					<div class="animation-duration-700 absolute opacity-0 transition-opacity duration-1000" :class="{ 'opacity-100': activeIndex === 1, 'animate-slide-right-return': direction === 'next' && activeIndex === 1, 'animate-slide-left-return': direction === 'prev' && activeIndex === 1, 'animate-slide-left': direction === 'next' && previousIndex === 1, 'animate-slide-right': direction === 'prev' && previousIndex === 1 }">
						<img class="size-full object-cover" src="{{ asset('images/lady-rabbit.png') }}" alt="Slide 2">
					</div>
					<!-- Slide 3 -->
					<div class="animation-duration-700 absolute opacity-0 transition-opacity duration-1000" :class="{ 'opacity-100': activeIndex === 2, 'animate-slide-right-return': direction === 'next' && activeIndex === 2, 'animate-slide-left-return': direction === 'prev' && activeIndex === 2, 'animate-slide-left': direction === 'next' && previousIndex === 2, 'animate-slide-right': direction === 'prev' && previousIndex === 2 }">
						<img class="size-full object-cover" src="{{ asset('images/cards/flower.png') }}" alt="Slide 3">
					</div>
					<!-- Controls -->
					<button class="text-secondary hover:text-primary focus:text-primary flex-center absolute inset-y-0 left-0 focus:outline-none" @click="prev">
						<svg class="h-10 w-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
						</svg>
					</button>
					<!-- Indicators -->
					<div class="flex-center absolute inset-x-0 bottom-0">
						<button class="hover:text-primary focus:text-primary flex-center text-secondary focus:outline-none" @click="setIndex(0)">
							<x-svg.dot class="size-8 fill-none stroke-light-text-secondary dark:stroke-dark-text-secondary" ::class="{ ' fill-light-text dark:fill-dark-text dark:stroke-none stroke-none': activeIndex === 0 }" />
						</button>
						<button class="hover:text-primary focus:text-primary flex-center text-secondary focus:outline-none" @click="setIndex(1)">
							<x-svg.dot class="size-8 fill-none stroke-light-text-secondary dark:stroke-dark-text-secondary" ::class="{ ' fill-light-text dark:fill-dark-text dark:stroke-none stroke-none': activeIndex === 1 }" />
						</button>
						<button class="hover:text-primary focus:text-primary flex-center text-secondary focus:outline-none" @click="setIndex(2)">
							<x-svg.dot class="size-8 fill-none stroke-light-text-secondary dark:stroke-dark-text-secondary" ::class="{ ' fill-light-text dark:fill-dark-text dark:stroke-none stroke-none': activeIndex === 2 }" />
						</button>
					</div>
					<!-- Controls -->
					<button class="text-secondary hover:text-primary focus:text-primary flex-center absolute inset-y-0 right-0 focus:outline-none" @click="next">
						<svg class="h-10 w-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
						</svg>
					</button>
				</div>
			</div>

			<x-slot name="jsCode">
				<script>
					function auto_changing_carousel() {
						return {
							activeIndex: 0,
							previousIndex: 0,
							direction: '',
							slides: 3,
							interval: null,
							init() {
								this.startInterval();
							},
							startInterval() {
								this.interval = setInterval(() => {
									this.next();
								}, 3000);
							},
							stopInterval() {
								clearInterval(this.interval);
							},
							prev() {
								this.stopInterval();
								this.direction = 'prev';
								this.previousIndex = this.activeIndex;
								this.activeIndex = (this.activeIndex === 0) ? this.slides - 1 : this.activeIndex - 1;
								this.startInterval();
							},
							next() {
								this.stopInterval();
								this.direction = 'next';
								this.previousIndex = this.activeIndex;
								this.activeIndex = (this.activeIndex === this.slides - 1) ? 0 : this.activeIndex + 1;
								this.startInterval();
							},
							setIndex(index) {
								this.stopInterval();
								this.direction = (index > this.activeIndex) ? 'next' : 'prev';
								this.previousIndex = this.activeIndex;
								this.activeIndex = index;
								this.startInterval();
							}
						}
					}
				</script>
			</x-slot>

		</x-grid.item>

		<x-grid.item title="Carousel with captions">
			<div class="relative h-[500px] w-full overflow-hidden rounded-md p-5 shadow-neu-lg dark:shadow-neu-dark-lg" x-data="animated_carousel()">
				<div class="flex-center size-full relative overflow-hidden rounded-md">
					<!-- Slide 1 -->
					<div class="animation-duration-700 absolute opacity-0 transition-opacity duration-1000" :class="{ 'opacity-100': activeIndex === 0, 'animate-slide-right-return': direction === 'next' && activeIndex === 0, 'animate-slide-left-return': direction === 'prev' && activeIndex === 0, 'animate-slide-left': direction === 'next' && previousIndex === 0, 'animate-slide-right': direction === 'prev' && previousIndex === 0 }">
						<img class="size-full object-cover" src="{{ asset('images/fantasy-plane.png') }}" alt="Slide 1">
						<div class="flex-center absolute inset-0 bg-black bg-opacity-50">
							<h2 class="text-2xl text-white">Fantasy Plane</h2>
						</div>
					</div>
					<!-- Slide 2 -->
					<div class="animation-duration-700 absolute opacity-0 transition-opacity duration-1000" :class="{ 'opacity-100': activeIndex === 1, 'animate-slide-right-return': direction === 'next' && activeIndex === 1, 'animate-slide-left-return': direction === 'prev' && activeIndex === 1, 'animate-slide-left': direction === 'next' && previousIndex === 1, 'animate-slide-right': direction === 'prev' && previousIndex === 1 }">
						<img class="size-full object-cover" src="{{ asset('images/lady-rabbit.png') }}" alt="Slide 2">
						<div class="flex-center absolute inset-0 bg-black bg-opacity-50">
							<h2 class="text-2xl text-white">Lady with Rabbit</h2>
						</div>
					</div>
					<!-- Slide 3 -->
					<div class="animation-duration-700 absolute opacity-0 transition-opacity duration-1000" :class="{ 'opacity-100': activeIndex === 2, 'animate-slide-right-return': direction === 'next' && activeIndex === 2, 'animate-slide-left-return': direction === 'prev' && activeIndex === 2, 'animate-slide-left': direction === 'next' && previousIndex === 2, 'animate-slide-right': direction === 'prev' && previousIndex === 2 }">
						<img class="size-full object-cover" src="{{ asset('images/cards/flower.png') }}" alt="Slide 3">
						<div class="flex-center absolute inset-0 bg-black bg-opacity-50">
							<h2 class="text-2xl text-white">Flower</h2>
						</div>
					</div>
					<!-- Controls -->
					<button class="text-secondary hover:text-primary focus:text-primary flex-center absolute inset-y-0 left-0 focus:outline-none" @click="prev">
						<svg class="h-10 w-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
						</svg>
					</button>
					<!-- Indicators -->
					<div class="flex-center absolute inset-x-0 bottom-0">
						<button class="hover:text-primary focus:text-primary flex-center text-secondary focus:outline-none" @click="setIndex(0)">
							<x-svg.dot class="size-8 fill-none stroke-light-text-secondary dark:stroke-dark-text-secondary" ::class="{ ' fill-light-text dark:fill-dark-text dark:stroke-none stroke-none': activeIndex === 0 }" />
						</button>
						<button class="hover:text-primary focus:text-primary flex-center text-secondary focus:outline-none" @click="setIndex(1)">
							<x-svg.dot class="size-8 fill-none stroke-light-text-secondary dark:stroke-dark-text-secondary" ::class="{ ' fill-light-text dark:fill-dark-text dark:stroke-none stroke-none': activeIndex === 1 }" />
						</button>
						<button class="hover:text-primary focus:text-primary flex-center text-secondary focus:outline-none" @click="setIndex(2)">
							<x-svg.dot class="size-8 fill-none stroke-light-text-secondary dark:stroke-dark-text-secondary" ::class="{ ' fill-light-text dark:fill-dark-text dark:stroke-none stroke-none': activeIndex === 2 }" />
						</button>
					</div>
					<!-- Controls -->
					<button class="text-secondary hover:text-primary focus:text-primary flex-center absolute inset-y-0 right-0 focus:outline-none" @click="next">
						<svg class="h-10 w-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
						</svg>
					</button>
				</div>
			</div>

			<x-slot name="jsCode">
				<script>
					function animated_carousel() {
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
							},
							setIndex(index) {
								this.direction = (index > this.activeIndex) ? 'next' : 'prev';
								this.previousIndex = this.activeIndex;
								this.activeIndex = index;
							}
						}
					}
				</script>
			</x-slot>
		</x-grid.item>

	</x-grid>

	<x-slot name="rightSidenav">
		<x-sidenav-list>Basic Carousel</x-sidenav-list>
		<x-sidenav-list>Animated Carousel</x-sidenav-list>
		<x-sidenav-list>Carousel with indicators</x-sidenav-list>
		<x-sidenav-list>Auto Changing Carousel</x-sidenav-list>
		<x-sidenav-list>Carousel with captions</x-sidenav-list>
	</x-slot>

	@push('scripts')
		{{-- Auto Changing Carousel --}}
		<script>
			function auto_changing_carousel() {
				return {
					activeIndex: 0,
					previousIndex: 0,
					direction: '',
					slides: 3,
					interval: null,
					init() {
						this.startInterval();
					},
					startInterval() {
						this.interval = setInterval(() => {
							this.next();
						}, 3000);
					},
					stopInterval() {
						clearInterval(this.interval);
					},
					prev() {
						this.stopInterval();
						this.direction = 'prev';
						this.previousIndex = this.activeIndex;
						this.activeIndex = (this.activeIndex === 0) ? this.slides - 1 : this.activeIndex - 1;
						this.startInterval();
					},
					next() {
						this.stopInterval();
						this.direction = 'next';
						this.previousIndex = this.activeIndex;
						this.activeIndex = (this.activeIndex === this.slides - 1) ? 0 : this.activeIndex + 1;
						this.startInterval();
					},
					setIndex(index) {
						this.stopInterval();
						this.direction = (index > this.activeIndex) ? 'next' : 'prev';
						this.previousIndex = this.activeIndex;
						this.activeIndex = index;
						this.startInterval();
					}
				}
			}
		</script>

		{{-- Animated Carousel --}}
		<script>
			function animated_carousel() {
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
					},
					setIndex(index) {
						this.direction = (index > this.activeIndex) ? 'next' : 'prev';
						this.previousIndex = this.activeIndex;
						this.activeIndex = index;
					}
				}
			}
		</script>

		{{-- Basic Carousel --}}
		<script>
			function carousel() {
				return {
					activeIndex: 0,
					prev() {
						this.activeIndex = (this.activeIndex - 1 + 3) % 3;
					},
					next() {
						this.activeIndex = (this.activeIndex + 1) % 3;
					}
				}
			}
		</script>
	@endpush

</x-app-layout>
