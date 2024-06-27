<x-app-layout>
	<div class="flex flex-col items-center justify-center gap-y-5 p-5">
		<div class="grid h-full items-center justify-center">
			<h2 class="playfair-display-font mb-2 text-center text-2xl font-bold text-[rgb(57,74,86)]">
				Icons / Buttons
			</h2>
			@include('neumorphism.color-change-icons')
		</div>

		<div class="grid h-full items-center justify-center">
			<h2 class="playfair-display-font mb-2 text-center text-2xl font-bold text-[#394a56]">
				Neumorphism Radio Buttons
			</h2>
			@include('neumorphism.radio-btn')
		</div>

		<div class="grid h-full items-center justify-center">
			<h2 class="playfair-display-font mb-2 text-center text-2xl font-bold text-[#394a56]">
				Neumorphism Switch
			</h2>
			@include('neumorphism.switch')
		</div>
</x-app-layout>
