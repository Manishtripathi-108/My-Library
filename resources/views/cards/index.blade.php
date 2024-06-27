<x-app-layout>
	<div class="flex flex-col items-center justify-center gap-y-5 p-5">
		<div>
			<h2 class="playfair-display-font mb-5 text-center text-2xl font-bold tracking-wider text-[rgb(57,74,86)]">
				Card Components
			</h2>

			<div class="mb-2 grid h-full grid-cols-1 items-center justify-center gap-4 border-b border-gray-600 p-3 md:grid-cols-2 lg:grid-cols-4">
				<div class="col-span-1 w-full lg:col-span-2">
					<a class="cursor-pointer transition-all hover:-translate-y-[1px] active:translate-y-[2px]" href="">
						{{-- @include('cards.basic-card') --}}
					</a>
					<h3 class="karla-font mt-3 flex items-center justify-center text-center text-xl tracking-wider">
						Basic Card Component
					</h3>
				</div>

				<div class="col-span-1 w-full lg:col-span-2">
					<a class="cursor-pointer transition-all hover:-translate-y-[1px] active:translate-y-[2px]" href="">
						@include('cards.image-card')
					</a>
					<h3 class="karla-font mt-3 flex items-center justify-center text-center text-xl tracking-wider">
						Image Card Component
					</h3>
				</div>

				<div class="col-span-1 w-full lg:col-span-2">
					<a class="cursor-pointer transition-all hover:-translate-y-[1px] active:translate-y-[2px]" href="">
						@include('cards.icon-card')
					</a>
					<h3 class="karla-font mt-3 flex items-center justify-center text-center text-xl tracking-wider">
						Icon Card Component
					</h3>
				</div>

				<div class="col-span-1 w-full lg:col-span-2">
					<a class="cursor-pointer transition-all hover:-translate-y-[1px] active:translate-y-[2px]" href="">
						@include('cards.badge-card')
					</a>
					<h3 class="karla-font mt-3 flex items-center justify-center text-center text-xl tracking-wider">
						Badge Card Component
					</h3>
				</div>

				<div class="col-span-1 w-full lg:col-span-2">
					<a class="cursor-pointer transition-all hover:-translate-y-[1px] active:translate-y-[2px]" href="">
						{{-- @include('cards.comment') --}}
					</a>
					<h3 class="karla-font mt-3 flex items-center justify-center text-center text-xl tracking-wider">
						Comment Card Component
					</h3>
				</div>
			</div>
		</div>

		<div>
			<h2 class="playfair-display-font mb-5 text-center text-2xl font-bold tracking-wider text-[rgb(57,74,86)]">
				Products Cards
			</h2>

			<div class="mb-2 grid h-full grid-cols-1 items-center justify-center gap-4 border-b border-gray-600 p-3 md:grid-cols-2 lg:grid-cols-4">

				<div class="col-span-1 w-full lg:col-span-2">
					<a class="cursor-pointer transition-all hover:-translate-y-[1px] active:translate-y-[2px]" href="">
						@include('cards.comment')
					</a>
					<h3 class="karla-font mt-3 flex items-center justify-center text-center text-xl tracking-wider">
						Comment Card
					</h3>
				</div>

			</div>
		</div>

		<div>
			@include('cards.reflect-hover')
		</div>
	</div>
</x-app-layout>
