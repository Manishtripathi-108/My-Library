<x-app-layout title="Welcome Page">
	<div class="*:flex *:text-xs *:items-center *:justify-center m-5 grid grid-cols-4 gap-4 md:grid-cols-8">
		{{-- Auth --}}
		<a class="neu-btn" href="{{ route('register') }}">Register</a>
		<a class="neu-btn" href="{{ route('login') }}">Login</a>

		{{-- Pages --}}
		<a class="neu-btn" href="{{ route('book-page') }}">Book</a>
		<a class="neu-btn" href="{{ route('background-building') }}">Background Building</a>
		<a class="neu-btn" href="{{ route('background-sunrise') }}">Background Sunrise</a>
		<a class="neu-btn" href="{{ route('order-confirmation') }}">Order Confirm</a>

		{{-- Auth Page --}}
		<a class="neu-btn" href="{{ route('auth.login-signup') }}">Auth Page</a>

		{{-- Cards --}}
		<a class="neu-btn" href="{{ route('cards') }}">Cards</a>

		{{-- Buttons --}}
		<a class="neu-btn" href="{{ route('buttons') }}">Buttons</a>

		{{-- Neumorphism --}}
		<a class="neu-btn" href="{{ route('neumorphism') }}">Neumorphism</a>
		<a class="neu-btn" href="{{ route('neumorphism.shadows') }}">Neumorphism Shadows</a>

	</div>

	<div class="flex-center mt-10 gap-5 p-10" x-data="{ animation: '' }">
		<div class="size-40 animate-spaceInUp bg-gray-700" :class="animation"></div>

		<div class="list">
			<ul class="*:cursor-pointer">
				<li @click="animation = 'animate-boing-in-up'">boing-in-up</li>
				<li @click="animation = 'animate-openDownLeft'">openDownLeft</li>
				<li @click="animation = 'animate-space-out-up'">space-out-up</li>
				<li @click="animation = 'animate-space-out-right'">space-out-right</li>
				<li @click="animation = 'animate-space-out-down'">space-out-down</li>
				<li @click="animation = 'animate-space-out-left'">space-out-left</li>
				<li @click="animation = 'animate-space-in-up'">space-in-up</li>
				<li @click="animation = 'animate-space-in-right'">space-in-right</li>
				<li @click="animation = 'animate-space-in-down'">space-in-down</li>
				<li @click="animation = 'animate-space-in-left'">space-in-left</li>
				<li @click="animation = 'animate-perspective-down'">perspective-down</li>
				<li @click="animation = 'animate-perspective-down-return'">perspective-down-return</li>
				<li @click="animation = 'animate-perspective-left'">perspective-left</li>
				<li @click="animation = 'animate-perspective-left-return'">perspective-left-return</li>
				<li @click="animation = 'animate-perspective-right'">perspective-right</li>
				<li @click="animation = 'animate-perspective-right-return'">perspective-right-return</li>
				<li @click="animation = 'animate-perspective-up'">perspective-up</li>
				<li @click="animation = 'animate-perspective-up-return'">perspective-up-return</li>
				<li @click="animation = 'animate-rotate-down'">rotate-down</li>
				<li @click="animation = 'animate-rotate-left'">rotate-left</li>
				<li @click="animation = 'animate-rotate-right'">rotate-right</li>
				<li @click="animation = 'animate-rotate-up'">rotate-up</li>
				<li @click="animation = 'animate-slide-down'">slide-down</li>
				<li @click="animation = 'animate-slide-down-return'">slide-down-return</li>
				<li @click="animation = 'animate-slide-left'">slide-left</li>
				<li @click="animation = 'animate-slide-left-return'">slide-left-return</li>
				<li @click="animation = 'animate-slide-right'">slide-right</li>
				<li @click="animation = 'animate-slide-right-return'">slide-right-return</li>
				<li @click="animation = 'animate-slide-up'">slide-up</li>
				<li @click="animation = 'animate-slide-up-return'">slide-up-return</li>
			</ul>
		</div>
	</div>

</x-app-layout>
