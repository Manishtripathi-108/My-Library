<x-app-layout>
	<x-slot name="header">
		<h2 class="text-primary text-xl font-semibold leading-tight">
			{{ __('Login & Sign up Forms') }}
		</h2>
	</x-slot>

	<div class="*:bg-light-primary *:bg-transparent bg-circles flex w-full flex-col bg-slate-200">
		<div class="h-dvh flex w-full items-center justify-center">
			@include('auth.login')
		</div>
		<div class="h-dvh flex w-full items-center justify-center">
			@include('auth.login')
		</div>
		
	</div>
</x-app-layout>
