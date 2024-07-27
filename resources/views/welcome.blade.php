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

	<div class="w-full">
		<div class="relative w-72" x-data="datePicker()">
			<div class="neu-input-group neu-input-group-prepend" @click="showCalendar = !showCalendar, showCalendarItem = 'day'" @keydown.escape="showCalendar = false">
				<x-svg.calendar class="neu-input-icon" />
				<input class="neu-form-input" type="text" x-model="date" placeholder="Select date" />
			</div>

			<div class="bg-primary absolute left-0 top-12 z-10 mt-2 w-full overflow-hidden rounded-lg shadow-neu-xs dark:shadow-neu-dark-xs" x-show="showCalendar" @click.away="showCalendar=false">
				<div x-show="showCalendarItem === 'day'">
					{{-- Header --}}
					<div class="neu-calendar-header">
						<button class="neu-calendar-header-btn" @click="prevMonth"><x-svg.left class="size-5" /></button>
						<div class="neu-calendar-header-title" x-text="monthNames[month] +' '+ year" @click="showCalendarItem = 'year'"></div>
						<button class="neu-calendar-header-btn" @click="nextMonth"><x-svg.right class="size-5" /></button>
					</div>
					{{-- List of days --}}
					<div class="neu-calendar-body-days">
						<template x-for="(day, index) in prevDays" :key="index">
							<div class="neu-calendar-item text-secondary" @click="selectDate(day,'previousMonth')" x-text="day"></div>
						</template>
						<template x-for="(day, index) in daysInMonth" :key="index">
							<div class="neu-calendar-item" @click="selectDate(day,'currentMonth')" :class="{ 'active': isSelected(day) }" x-text="day"></div>
						</template>
						<template x-for="(day, index) in nextDays" :key="index">
							<div class="neu-calendar-item text-secondary" @click="selectDate(day,'nextMonth')" x-text="day"></div>
						</template>
					</div>
				</div>

				<div x-show="showCalendarItem === 'month'">
					{{-- Header --}}
					<div class="neu-calendar-header">
						<button class="neu-calendar-header-btn" @click="showCalendarItem = 'year'"><x-svg.left class="size-5" /></button>
						<div class="neu-calendar-header-title" x-text="year" @click="showCalendarItem = 'year'"></div>
						<button class="neu-calendar-header-btn" @click="showCalendarItem = 'year'"><x-svg.right class="size-5" /></button>
					</div>
					{{-- List of Months --}}
					<div class="neu-calendar-body-months">
						<template x-for="(value, index) in monthNames" :key="index">
							<div class="neu-calendar-item" :class="{ 'active': index === month }" x-text="value" @click="selectMonth(index)"></div>
						</template>
					</div>
				</div>

				<div x-show="showCalendarItem === 'year'">
					{{-- Header --}}
					<div class="neu-calendar-header">
						<button class="neu-calendar-header-btn" @click="prevYear"><x-svg.left class="size-5" /></button>
						<div class="neu-calendar-header-title" x-text="yearList[1] + ' - ' + yearList[10]" @click="showCalendarItem = 'day'"></div>
						<button class="neu-calendar-header-btn" @click="nextYear"><x-svg.right class="size-5" /></button>
					</div>
					{{-- List of Years --}}
					<div class="neu-calendar-body-years">
						<template x-for="(value,index) in yearList" :key="index">
							<div class="neu-calendar-item" :class="{ 'text-secondary': index === 0 || index === 11, 'active': year === value }" x-text="value" @click="selectYear(value)"></div>
						</template>
					</div>
				</div>
			</div>
		</div>

		<script>
			function datePicker() {
				return {
					showCalendar: false,
					showCalendarItem: 'day',
					date: '',
					month: new Date().getMonth(),
					year: new Date().getFullYear(),
					today: new Date().getDate(),
					daysInMonth: [],
					yearList: ['2021'],
					monthNames: [
						'January', 'February', 'March', 'April', 'May', 'June',
						'July', 'August', 'September', 'October', 'November', 'December'
					],
					init() {
						this.date = `${this.monthNames[this.month]} ${this.today}, ${this.year}`;
						this.updateDaysInMonth();
						this.updateYearsList();
					},
					updateDaysInMonth() {
						const daysInMonth = new Date(this.year, this.month + 1, 0).getDate();
						const dayOfWeek = new Date(this.year, this.month).getDay();
						const prevDaysInMonth = new Date(this.year, this.month, 0).getDate();
						const nextDaysInMonth = new Date(this.year, this.month + 2, 0).getDate();

						const days = Array.from({
							length: daysInMonth
						}, (_, i) => i + 1);

						this.prevDays = Array.from({
							length: dayOfWeek
						}, (_, i) => prevDaysInMonth - i).reverse();

						this.daysInMonth = Array.from({
							length: daysInMonth
						}, (_, i) => i + 1);

						if (((dayOfWeek + daysInMonth) % 7)) {
							this.nextDays = Array.from({
								length: 7 - (dayOfWeek + daysInMonth) % 7
							}, (_, i) => i + 1);
						} else {
							this.nextDays = [];
						}
					},

					// Month
					prevMonth() {
						if (this.month === 0) {
							this.month = 11;
							this.year--;
						} else {
							this.month--;
						}
						this.updateDaysInMonth();
					},
					nextMonth() {
						if (this.month === 11) {
							this.month = 0;
							this.year++;
						} else {
							this.month++;
						}
						this.updateDaysInMonth();
					},
					selectDate(day, type) {
						if (type === 'previousMonth') {
							this.prevMonth();
							this.date = `${this.monthNames[this.month]} ${day}, ${this.year}`;
						} else if (type === 'nextMonth') {
							this.nextMonth();
							this.date = `${this.monthNames[this.month]} ${day}, ${this.year}`;
						} else {
							this.date = `${this.monthNames[this.month]} ${day}, ${this.year}`;
						}
						this.showCalendar = false;
					},
					isSelected(day) {
						return this.date === `${this.monthNames[this.month]} ${day}, ${this.year}`;
					},
					selectMonth(month) {
						this.month = month;
						this.updateDaysInMonth();
						this.showCalendarItem = 'day';
					},

					// Year
					updateYearsList() {
						this.yearList = Array.from({
							length: 12
						}, (_, i) => this.year - (this.year % 10) + i);
					},
					prevYear() {
						this.year -= 10;
						this.updateYearsList();
					},
					nextYear() {
						this.year += 10;
						this.updateYearsList();
					},
					selectYear(year) {
						this.year = year;
						this.updateDaysInMonth();
						this.updateYearsList();
						this.showCalendarItem = 'month';
					},
				};
			}
		</script>
	</div>

	<div class="mt-10 hidden gap-5 p-10" x-data="{ animation: '' }">
		<div class="size-40 animation-duration-1000 bg-gray-700" :class="animation"></div>

		<div class="h-96 overflow-y-auto">
			<ul class="*:cursor-pointer">
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

				<li @click="animation = 'animate-open-down-left'">open-down-left</li>
				<li @click="animation = 'animate-open-down-left-return'">open-down-left-return</li>
				<li @click="animation = 'animate-open-down-right'">open-down-right</li>
				<li @click="animation = 'animate-open-down-right-return'">open-down-right-return</li>
				<li @click="animation = 'animate-open-up-left'">open-up-left</li>
				<li @click="animation = 'animate-open-up-left-return'">open-up-left-return</li>
				<li @click="animation = 'animate-open-up-right'">open-up-right</li>
				<li @click="animation = 'animate-open-up-right-return'">open-up-right-return</li>
				<li @click="animation = 'animate-open-down-left-out'">open-down-left-out</li>
				<li @click="animation = 'animate-open-down-right-out'">open-down-right-out</li>
				<li @click="animation = 'animate-open-up-left-out'">open-up-left-out</li>
				<li @click="animation = 'animate-open-up-right-out'">open-up-right-out</li>

				<li @click="animation = 'animate-puff-in'">puff-in</li>
				<li @click="animation = 'animate-puff-out'">puff-out</li>
				<li @click="animation = 'animate-vanish-in'">vanish-in</li>
				<li @click="animation = 'animate-vanish-out'">vanish-out</li>

				<li @click="animation = 'animate-boing-in-up'">boing-in-up</li>
				<li @click="animation = 'animate-boing-out-down'">boing-out-down</li>

				<li @click="animation = 'animate-bomb-left-out'">bomb-left-out</li>
				<li @click="animation = 'animate-bomb-right-out'">bomb-right-out</li>

				<li @click="animation = 'animate-magic'">magic</li>
				<li @click="animation = 'animate-swap'">swap</li>
				<li @click="animation = 'animate-twister-in-down'">twister-in-down</li>
				<li @click="animation = 'animate-twister-in-up'">twister-in-up</li>

				<li @click="animation = 'animate-foolish-in'">foolish-in</li>
				<li @click="animation = 'animate-foolish-out'">foolish-out</li>
				<li @click="animation = 'animate-hole-out'">hole-out</li>
				<li @click="animation = 'animate-swash-in'">swash-in</li>
				<li @click="animation = 'animate-swash-out'">swash-out</li>

				<li @click="animation = 'animate-tin-down-in'">tin-down-in</li>
				<li @click="animation = 'animate-tin-down-out'">tin-down-out</li>
				<li @click="animation = 'animate-tin-left-in'">tin-left-in</li>
				<li @click="animation = 'animate-tin-left-out'">tin-left-out</li>
				<li @click="animation = 'animate-tin-right-in'">tin-right-in</li>
				<li @click="animation = 'animate-tin-right-out'">tin-right-out</li>
				<li @click="animation = 'animate-tin-up-in'">tin-up-in</li>
				<li @click="animation = 'animate-tin-up-out'">tin-up-out</li>

				<li @click="animation = 'animate-circle-in-hesitate'">circle-in-hesitate</li>
				<li @click="animation = 'animate-circle-in-center'">circle-in-center</li>
				<li @click="animation = 'animate-circle-in-top-right'">circle-in-top-right</li>
				<li @click="animation = 'animate-circle-in-top-left'">circle-in-top-left</li>
				<li @click="animation = 'animate-circle-in-bottom-right'">circle-in-bottom-right</li>
				<li @click="animation = 'animate-circle-in-bottom-left'">circle-in-bottom-left</li>
				<li @click="animation = 'animate-circle-out-hesitate'">circle-out-hesitate</li>
				<li @click="animation = 'animate-circle-out-center'">circle-out-center</li>
				<li @click="animation = 'animate-circle-out-top-right'">circle-out-top-right</li>
				<li @click="animation = 'animate-circle-out-top-left'">circle-out-top-left</li>
				<li @click="animation = 'animate-circle-out-bottom-right'">circle-out-bottom-right</li>
				<li @click="animation = 'animate-circle-out-bottom-left'">circle-out-bottom-left</li>
				<li @click="animation = 'animate-circle-in-swoop'">circle-in-swoop</li>
				<li @click="animation = 'animate-circle-out-swoop'">circle-out-swoop</li>

				<li @click="animation = 'animate-square-in-center'">square-in-center</li>
				<li @click="animation = 'animate-square-in-hesitate'">square-in-hesitate</li>
				<li @click="animation = 'animate-square-in-top-right'">square-in-top-right</li>
				<li @click="animation = 'animate-square-in-top-left'">square-in-top-left</li>
				<li @click="animation = 'animate-square-in-bottom-right'">square-in-bottom-right</li>
				<li @click="animation = 'animate-square-in-bottom-left'">square-in-bottom-left</li>
				<li @click="animation = 'animate-square-out-center'">square-out-center</li>
				<li @click="animation = 'animate-square-out-hesitate'">square-out-hesitate</li>
				<li @click="animation = 'animate-square-out-top-right'">square-out-top-right</li>
				<li @click="animation = 'animate-square-out-top-left'">square-out-top-left</li>
				<li @click="animation = 'animate-square-out-bottom-right'">square-out-bottom-right</li>
				<li @click="animation = 'animate-square-out-bottom-left'">square-out-bottom-left</li>

				<li @click="animation = 'animate-wipe-in-right'">wipe-in-right</li>
				<li @click="animation = 'animate-wipe-in-left'">wipe-in-left</li>
				<li @click="animation = 'animate-wipe-in-up'">wipe-in-up</li>
				<li @click="animation = 'animate-wipe-in-down'">wipe-in-down</li>
				<li @click="animation = 'animate-wipe-in-top-right'">wipe-in-top-right</li>
				<li @click="animation = 'animate-wipe-in-top-left'">wipe-in-top-left</li>
				<li @click="animation = 'animate-wipe-in-bottom-right'">wipe-in-bottom-right</li>
				<li @click="animation = 'animate-wipe-in-bottom-left'">wipe-in-bottom-left</li>
				<li @click="animation = 'animate-wipe-cinematic-in'">wipe-cinematic-in</li>
				<li @click="animation = 'animate-wipe-out-right'">wipe-out-right</li>
				<li @click="animation = 'animate-wipe-out-left'">wipe-out-left</li>
				<li @click="animation = 'animate-wipe-out-up'">wipe-out-up</li>
				<li @click="animation = 'animate-wipe-out-down'">wipe-out-down</li>
				<li @click="animation = 'animate-wipe-out-top-right'">wipe-out-top-right</li>
				<li @click="animation = 'animate-wipe-out-top-left'">wipe-out-top-left</li>
				<li @click="animation = 'animate-wipe-out-bottom-right'">wipe-out-bottom-right</li>
				<li @click="animation = 'animate-wipe-out-bottom-left'">wipe-out-bottom-left</li>
				<li @click="animation = 'animate-wipe-cinematic-out'">wipe-cinematic-out</li>

				<li @click="animation = 'animate-diamond-in-center'">diamond-in-center</li>
				<li @click="animation = 'animate-diamond-in-hesitate'">diamond-in-hesitate</li>
				<li @click="animation = 'animate-diamond-out-center'">diamond-out-center</li>
				<li @click="animation = 'animate-diamond-out-hesitate'">diamond-out-hesitate</li>
				<li @click="animation = 'animate-polygon-in-opposing-corners'">polygon-in-opposing-corners</li>
				<li @click="animation = 'animate-polygon-out-opposing-corners'">polygon-out-opposing-corners</li>

			</ul>
		</div>
	</div>

</x-app-layout>
