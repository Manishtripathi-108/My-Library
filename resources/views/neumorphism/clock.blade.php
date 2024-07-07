<x-app-layout>
	<x-slot name="header">
		<h2 class="text-primary text-xl font-semibold leading-tight">
			{{ __('Clock') }}
		</h2>
	</x-slot>

	<div class="h-dvh grid-center w-full grid-cols-3 gap-10">
		<div class="flex-center w-full">
			<div class="size-80 flex-center before:size-4 bg-clock rounded-full border-4 border-solid border-light-primary shadow-neu-inset-md before:z-50 before:rounded-full before:bg-dark-secondary dark:border-dark-primary dark:shadow-neu-dark-inset-md">
				<div class="size-40 absolute">
					<div class="size-40 hr flex justify-center rounded-full before:absolute before:z-10 before:h-20 before:w-2 before:rounded-t-full before:bg-dark-primary dark:before:bg-light-secondary"></div>
				</div>
				<div class="size-52 absolute">
					<div class="size-52 mn flex justify-center rounded-full before:absolute before:z-20 before:h-24 before:w-1 before:rounded-t-full before:bg-dark-secondary"></div>
				</div>
				<div class="size-60 absolute">
					<div class="size-60 sc flex justify-center rounded-full before:absolute before:z-30 before:h-36 before:w-0.5 before:rounded-t-full before:bg-dark-secondary"></div>
				</div>
			</div>
		</div>

		<div class="flex-center w-full">
			<div class="size-80 flex-center text-secondary relative rounded-full text-xl shadow-neu-inset-md [&>*:nth-child(3n)]:text-4xl [&>*:nth-child(3n)]:font-bold" id="clock">

				@for ($i = 1; $i <= 12; $i++)
					<div class="absolute h-[95%] font-playfair" id="{{ $i }}">{{ $i }}</div>
				@endfor
                
			</div>
		</div>

		<div class="flex-center w-full">
			<div class="size-80 before:size-4 flex-center text-secondary relative rounded-full border-4 border-solid border-light-primary text-xl shadow-neu-inset-md before:z-50 before:rounded-full before:bg-dark-secondary dark:border-dark-primary dark:shadow-neu-dark-inset-md [&>*:nth-child(3n)]:text-4xl [&>*:nth-child(3n)]:font-bold" id="clock">

				@for ($i = 1; $i <= 12; $i++)
					<div class="absolute h-[95%] font-playfair" id="{{ $i }}">{{ $i }}</div>
				@endfor

				<div class="size-40 absolute">
					<div class="size-40 hr flex justify-center rounded-full before:absolute before:z-10 before:h-20 before:w-2 before:rounded-t-full before:bg-dark-primary dark:before:bg-light-secondary"></div>
				</div>
				<div class="size-52 absolute">
					<div class="size-52 mn flex justify-center rounded-full before:absolute before:z-20 before:h-24 before:w-1 before:rounded-t-full before:bg-dark-secondary"></div>
				</div>
				<div class="size-60 absolute">
					<div class="size-60 sc flex justify-center rounded-full before:absolute before:z-30 before:h-36 before:w-0.5 before:rounded-t-full before:bg-dark-secondary"></div>
				</div>

			</div>
		</div>
	</div>

	@pushOnce('scripts')
		<script>
			// for loop to create the clock
			for (let i = 1; i <= 12; i++) {
				const id = document.getElementById(i);
				id.style.transform = `rotateZ(${i * 30}deg)`;
			}

			// function to run the clock
			function clock() {
				const deg = 6;
				const hrs = document.querySelectorAll('.hr');
				const mns = document.querySelectorAll('.mn');
				const scs = document.querySelectorAll('.sc');

				const day = new Date();
				const hh = day.getHours() * 30;
				const mm = day.getMinutes() * deg;
				const ss = day.getSeconds() * deg;

				hrs.forEach(hr => {
					hr.style.transform = `rotateZ(${hh + mm / 12}deg)`;
				});
				mns.forEach(mn => {
					mn.style.transform = `rotateZ(${mm}deg)`;
				});
				scs.forEach(sc => {
					sc.style.transform = `rotateZ(${ss}deg)`;
				});
			}

			setInterval(clock, 1000);
		</script>
	@endPushOnce
</x-app-layout>
