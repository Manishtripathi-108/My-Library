<x-app-layout title="404 Error Pages">

	<x-grid title="404">
		<x-slot name="description">
			404 pages are displayed when a user tries to access a page that does not exist. They are used to inform the user that the page they are looking for cannot be found.
		</x-slot>

		<x-grid.item title="Simple">
			<!-- component -->
			<div class="bg-primary flex h-screen w-full flex-col items-center justify-center">
				<h1 class="text-primary text-9xl font-extrabold tracking-widest">404</h1>
				<div class="bg-accent absolute rotate-12 rounded px-2 text-sm">
					Page Not Found
				</div>
				<button class="mt-5">
					<a class="text-accent group relative inline-block text-sm font-medium focus:outline-none focus:ring active:text-orange-500">
						<span class="bg-accent absolute inset-0 translate-x-0.5 translate-y-0.5 transition-transform group-hover:translate-x-0 group-hover:translate-y-0"></span>

						<span class="bg-primary relative block border border-current px-8 py-3">
							<router-link to="/">Go Home</router-link>
						</span>
					</a>
				</button>
			</div>
		</x-grid.item>

		<x-grid.item title="Bouncing Emoji Page">
			<div class="bg-primary grid place-items-center">
				<svg class="animation-duration-3000 mt-24 animate-bounce" id="Layer_1" enable-background="new 0 0 226 249.135" height="249.135" overflow="visible" version="1.1" viewBox="0 0 226 249.135" width="226" xml:space="preserve">
					<circle cx="113" cy="113" fill="#FFE585" r="109" />
					<line enable-background="new    " fill="none" opacity="0.29" stroke="#6E6E96" stroke-linecap="round" stroke-linejoin="round" stroke-width="8" x1="88.866" x2="136.866" y1="245.135" y2="245.135" />
					<line enable-background="new    " fill="none" opacity="0.17" stroke="#6E6E96" stroke-linecap="round" stroke-linejoin="round" stroke-width="8" x1="154.732" x2="168.732" y1="245.135" y2="245.135" />
					<line enable-background="new    " fill="none" opacity="0.17" stroke="#6E6E96" stroke-linecap="round" stroke-linejoin="round" stroke-width="8" x1="69.732" x2="58.732" y1="245.135" y2="245.135" />
					<circle cx="68.732" cy="93" fill="#6E6E96" r="9" />
					<path d="M115.568,5.947c-1.026,0-2.049,0.017-3.069,0.045  c54.425,1.551,98.069,46.155,98.069,100.955c0,55.781-45.219,101-101,101c-55.781,0-101-45.219-101-101  c0-8.786,1.124-17.309,3.232-25.436c-3.393,10.536-5.232,21.771-5.232,33.436c0,60.199,48.801,109,109,109s109-48.801,109-109  S175.768,5.947,115.568,5.947z" enable-background="new    " fill="#FF9900" opacity="0.24" />
					<circle cx="156.398" cy="93" fill="#6E6E96" r="9" />
					<ellipse cx="67.732" cy="140.894" enable-background="new    " fill="#FF0000" opacity="0.18" rx="17.372" ry="8.106" />
					<ellipse cx="154.88" cy="140.894" enable-background="new    " fill="#FF0000" opacity="0.18" rx="17.371" ry="8.106" />
					<path d="M13,118.5C13,61.338,59.338,15,116.5,15c55.922,0,101.477,44.353,103.427,99.797  c0.044-1.261,0.073-2.525,0.073-3.797C220,50.802,171.199,2,111,2S2,50.802,2,111c0,50.111,33.818,92.318,79.876,105.06  C41.743,201.814,13,163.518,13,118.5z" fill="#FFEFB5" />
					<circle cx="113" cy="113" fill="none" r="109" stroke="#6E6E96" stroke-width="8" />
				</svg>

				<div class="mt-4 text-center tracking-widest">
					<span class="block text-6xl text-gray-500"><span>4 0 4</span></span>
					<span class="text-xl text-gray-500">Sorry, We couldn't find what you are looking for!</span>
				</div>

				<x-primary-btn class="mt-6">Go back </x-primary-btn>
			</div>
		</x-grid.item>

		<x-grid.item title="Alone Man in Space">
			<div class="relative h-screen w-full overflow-hidden bg-indigo-900">
				<img class="absolute h-full w-full object-cover" src="https://external-preview.redd.it/4MddL-315mp40uH18BgGL2-5b6NIPHcDMBSWuN11ynM.jpg?width=960&crop=smart&auto=webp&s=b98d54a43b3dac555df398588a2c791e0f3076d9" />
				<div class="absolute inset-0 bg-black opacity-25">
				</div>
				<div class="container relative z-10 mx-auto flex items-center px-6 py-32 md:px-12 xl:py-40">
					<div class="relative z-10 flex w-full flex-col items-center font-mono">
						<h1 class="mt-4 text-center text-5xl font-extrabold leading-tight text-white">
							You are all alone here
						</h1>
						<p class="my-44 animate-bounce text-8xl font-extrabold text-white">
							404
						</p>
					</div>
				</div>
			</div>
		</x-grid.item>

	</x-grid>

</x-app-layout>
