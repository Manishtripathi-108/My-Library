<x-app-layout title="Shadows | Neumorphism">

	{{-- Light Shadows --}}
	<section class="w-full rounded-lg bg-light-primary p-4">
		<h2 class="mb-3 font-playfair text-2xl font-bold tracking-wider text-light-text">
			Light Shadows
		</h2>

		<div class="font-karla text-sm text-light-text-secondary">
			Just Copy and Paste the class names to your project.
		</div>

		<div class="flex-center mb-2 mt-10 w-full flex-wrap gap-10 p-3 pb-10">

			{{-- Sun Shadows --}}
			<x-shadow-box shadowCss="box-shadow: 6px 6px 13px #cca48e, -6px -6px 13px #fff6d6;">shadow-neu-sun</x-shadow-box>

			{{-- Neumorphism Shadows light --}}
			<x-shadow-box shadowCss="box-shadow: 6px 6px 13px #cca48e, -6px -6px 13px #fff6d6;">shadow-neu-xs</x-shadow-box>
			<x-shadow-box shadowCss="box-shadow: -5px -5px 9px #fff9df, 5px 5px 9px #edd9c1;">shadow-neu-md-soft</x-shadow-box>
			<x-shadow-box shadowCss="box-shadow: 6px 6px 9px #ccb7ac, -6px -6px 9px #ffffe5;">shadow-neu-lg</x-shadow-box>
			<x-shadow-box shadowCss="box-shadow: 6px 6px 13px #cca48e, -6px -6px 9px #ffffe5;">shadow-neu-xl</x-shadow-box>
			<x-shadow-box shadowCss="box-shadow: -10px -10px 15px #fff9df, 10px 10px 15px #4c4c4c40;">shadow-neu-xl-soft</x-shadow-box>

			{{-- Inset Shadows --}}
			<x-shadow-box shadowCss="box-shadow: inset 2px 2px 5px #d6c4af, inset -2px -2px 5px #fffff1;">shadow-neu-inset-xs</x-shadow-box>
			<x-shadow-box shadowCss="box-shadow: inset 4px 3px 3px 0px #dbc8b3, inset -2px -4px 4px 0px #ffffe5;">shadow-neu-inset-sm</x-shadow-box>
			<x-shadow-box shadowCss="box-shadow: #ccb7ac 2px 2px 5px 0px inset, #ffffe5 -3px -3px 7px 0px inset;">shadow-neu-inset-md</x-shadow-box>
			<x-shadow-box shadowCss="box-shadow: #FFFFFF0D 0px -15px 15px 0px, #FFFFFF0D 0px -15px 15px 0px inset, #00000033 0px 15px 15px 0px, #00000021 0px 15px 15px 0px inset;">shadow-neu-inset-md-hard</x-shadow-box>
			<x-shadow-box shadowCss="box-shadow: -10px -10px 15px #fff9df, 10px 10px 15px #4c4c4c40, inset -10px -10px 15px #fff9df, inset 10px 10px 15px #4c4c4c40;">shadow-neu-inset-lg</x-shadow-box>
			<x-shadow-box shadowCss="box-shadow: inset 6px 6px 12px #665d53, inset -6px -6px 12px #ffffff;">shadow-neu-inset-xl</x-shadow-box>

			{{-- Outset Shadows --}}
			<x-shadow-box shadowCss="box-shadow: #00000040 5px 5px 7px 0px, #FFFFFF40 2px 2px 5px 0px inset, #00000080 -3px -3px 5px 0px inset">shadow-neu-outset-sm</x-shadow-box>
			<x-shadow-box shadowCss="box-shadow: #41414130 -3px -3px 12px 1.5px, #ffffff30 0px 0px 42px 0px,#dedede5e -5px 0px 8px 0px inset, #8a8a8a3c 0px 5px 8px 0px inset,#8282823c 5px 0px 8px 0px inset, #d5d5d53c 0px -5px 8px 0px inset">shadow-neu-outset-md</x-shadow-box>
			<x-shadow-box shadowCss="box-shadow: 2.19px 2.05px 26.30px 1px rgba(0, 0, 0, 0.40), 0px 0px 113.40px 0px rgba(255, 255, 255, 0.27), inset -5px 0px 7.50px rgba(34, 34, 34, 0.24), inset 0px 5px 7.50px rgba(214, 214, 214, 0.24), inset 5px 0px 7.50px rgba(221, 221, 221, 0.24), inset 0px -5px 7.50px rgba(41, 41, 41, 0.24)">shadow-neu-outset-lg</x-shadow-box>
		</div>
	</section>

	{{-- Dark Shadows --}}
	<section class="w-full rounded-lg bg-dark-primary p-4">
		<h2 class="mb-3 font-playfair text-2xl font-bold tracking-wider text-dark-text">
			Dark Shadows
		</h2>

		<div class="font-karla text-sm text-dark-text-secondary">
			Just Copy and Paste the class names to your project.
		</div>

		<div class="flex-center mb-2 mt-10 w-full flex-wrap gap-10 p-3 pb-10">

			<x-shadow-box shadowCss="box-shadow: inset 4px 4px 9px #131313, inset -4px -4px 9px #4d4d4d, 4px 4px 9px #131313, -4px -4px 9px #4d4d4d;" isDark="true">shadow-neu-moon</x-shadow-box>

			{{-- Neumorphism Shadows Dark --}}
			<x-shadow-box shadowCss="box-shadow: 2px 2px 4px #070707, -2px -2px 4px #3d3d3d;" isDark="true">shadow-neu-dark-xs</x-shadow-box>
			<x-shadow-box shadowCss="box-shadow: #FFFFFF0D -5px -5px 10px, #00000080 5px 5px 15px;" isDark="true">shadow-neu-dark-sm</x-shadow-box>
			<x-shadow-box shadowCss="box-shadow: 3px 3px 6px #000000, -3px -3px 6px #FFE9D040;" isDark="true">shadow-neu-dark-md</x-shadow-box>
			<x-shadow-box shadowCss="box-shadow: 6px 6px 12px #000000, -6px -6px 12px #ffe9d03b;" isDark="true">shadow-neu-dark-lg</x-shadow-box>
			<x-shadow-box shadowCss="box-shadow: -10px -10px 15px #ffe9d03b, 10px 10px 15px #000000;" isDark="true">shadow-neu-dark-xl</x-shadow-box>

			{{-- Inset Shadows Dark --}}
			<x-shadow-box shadowCss="box-shadow: inset 3px 3px 3px #000000, inset -3px -3px 3px #2e2e2e;" isDark="true">shadow-neu-dark-inset-xs</x-shadow-box>
			<x-shadow-box shadowCss="box-shadow: inset 4px 3px 3px #000000, inset -2px -4px 4px #3d3d3d;" isDark="true">shadow-neu-dark-inset-sm</x-shadow-box>
			<x-shadow-box shadowCss="box-shadow: #000000E8 0px -15px 15px 0px, #0E0E0ED1 0px -15px 15px 0px inset, #060606 0px -15px 15px 0px, #101010E0 0px -15px 15px 0px inset;" isDark="true">shadow-neu-dark-inset-md-hard</x-shadow-box>
			<x-shadow-box shadowCss="box-shadow: -10px -10px 15px #ffe9d03b, 10px 10px 15px #000000, inset -10px -10px 15px #ffe9d03b, inset 10px 10px 15px #000000;" isDark="true">shadow-neu-dark-inset-lg</x-shadow-box>

			{{-- Outset Shadows Dark --}}
			<x-shadow-box shadowCss="box-shadow: 15px 5px 19px 7.5px rgba(0, 0, 0, 0.21), 0px 0px 21px rgba(255, 255, 255, 0.14), inset -3.5px 0 5px hsla(0, 0%, 3.015%, 0.18), inset 0 3.5px 5px hsla(0, 0%, 67.101%, 0.18), inset 3.5px 0 5px hsla(0, 0%, 82.985%, 0.18), inset 0 -3.5px 5px hsla(0, 0%, 3.015%, 0.18);" isDark="true">shadow-neu-dark-outset-sm</x-shadow-box>
			<x-shadow-box shadowCss="box-shadow: 12px 10px 22px 7.5px rgba(0, 0, 0, 0.37), 0px 0px 32px rgba(255, 255, 255, 0.25), inset -3.5px 0 5px hsla(100, 0%, 11.15%, 0.32), inset 0 3.5px 5px hsla(100, 0%, 81.47%, 0.32), inset 3.5px 0 5px hsla(100, 0%, 88.86%, 0.32), inset 0 -3.5px 5px hsla(100, 0%, 11.15%, 0.32);" isDark="true">shadow-neu-dark-outset-md</x-shadow-box>
			<x-shadow-box shadowCss="box-shadow: 12px 10px 22px 7.5px rgba(0, 0, 0, 0.37), 0px 0px 32px rgba(255, 255, 255, 0.25), inset -3.5px 0 5px hsla(100, 0%, 11.15%, 0.32), inset 0 3.5px 5px hsla(100, 0%, 81.47%, 0.32), inset 3.5px 0 5px hsla(100, 0%, 88.86%, 0.32), inset 0 -3.5px 5px hsla(100, 0%, 11.15%, 0.32);" isDark="true">shadow-neu-dark-outset-lg</x-shadow-box>
		</div>
	</section>

</x-app-layout>
