<x-app-layout>
	<x-slot name="header">
		<h2 class="text-primary text-xl font-semibold leading-tight">
			{{ __('Clock') }}
		</h2>
	</x-slot>

	<div class="h-dvh flex-center w-full gap-10">
		<div class="flex-center w-full">
			<div class="size-80 flex-center before:size-4 bg-clock rounded-full border-4 border-solid border-light-primary shadow-neu-inset-md before:z-50 before:rounded-full before:bg-dark-secondary dark:border-dark-primary dark:shadow-neu-dark-inset-md">
				<div class="size-40 absolute">
					<div class="size-40 flex justify-center rounded-full before:absolute before:z-10 before:h-20 before:w-2 before:rounded-t-full before:bg-dark-primary dark:before:bg-light-secondary" id="hr"></div>
				</div>
				<div class="size-52 absolute">
					<div class="size-52 flex justify-center rounded-full before:absolute before:z-20 before:h-24 before:w-1 before:rounded-t-full before:bg-dark-secondary" id="mn"></div>
				</div>
				<div class="size-60 absolute">
					<div class="size-60 flex justify-center rounded-full before:absolute before:z-30 before:h-36 before:w-0.5 before:rounded-t-full before:bg-dark-secondary" id="sc"></div>
				</div>
			</div>
		</div>
	</div>

	@pushOnce('scripts')
		<script>
			function clock() {
				let deg = 6;
				let hr = document.getElementById('hr');
				let mn = document.getElementById('mn');
				let sc = document.getElementById('sc');

				let day = new Date();
				let hh = day.getHours() * 30;
				let mm = day.getMinutes() * deg;
				let ss = day.getSeconds() * deg;

				hr.style.transform = `rotateZ(${hh + mm / 12}deg)`;
				mn.style.transform = `rotateZ(${mm}deg)`;
				sc.style.transform = `rotateZ(${ss}deg)`;
			}

			setInterval(clock, 1000);
		</script>
	@endPushOnce
</x-app-layout>
