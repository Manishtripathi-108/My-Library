<x-app-layout>

	<x-grid title="Forms">
		<x-slot name="description">
			Forms are used to collect user input. Use input elements like text fields, buttons, checkboxes, radio buttons, and many more.
		</x-slot>

		<x-grid.item title="Form Input">
			<form class="w-full md:w-2/3" action="#">
				<div class="neu-form-group mb-4">
					<label class="neu-form-label" for="email">Email address</label>
					<input class="neu-form-input" id="email" type="email">
					<small class="neu-form-text" id="emailHelp">We'll never share your email with anyone else.</small>
				</div>
				<div class="neu-form-group mb-4">
					<label class="neu-form-label" for="password">Password</label>
					<input class="neu-form-input" id="password" type="password">
				</div>
				<div class="neu-form-group mb-4">
					<label class="neu-form-checkbox-label" for="remember">
						<input class="neu-form-checkbox" id="remember" type="checkbox" value="" checked>
						<span class="neu-form-checkbox-text">Remember me</span>
					</label>
				</div>
				<button class="neu-btn" type="submit">Submit</button>
			</form>

			<x-slot name="cssCode">
				<style>
					.neu-form-group {
						@apply flex flex-col gap-2;
					}

					.neu-form-label,
					.neu-form-checkbox-label,
					.neu-form-text {
						@apply text-secondary font-karla text-sm leading-3;
					}

					.neu-form-input {
						@apply bg-primary text-secondary appearance-none rounded-lg border border-light-secondary px-3 py-2 font-karla shadow-neu-inset-sm outline-none placeholder:tracking-wide;
						/* dark mode */
						@apply dark:shadow-neu-dark-inset-sm dark:border-dark-secondary;
					}

					.neu-form-checkbox-label {
						@apply flex items-center gap-2;
					}

					.neu-form-checkbox {
						@apply bg-primary flex-center size-4 appearance-none rounded border border-light-secondary shadow-neu-inset-xs outline-none transition duration-300 ease-in-out placeholder:tracking-wide;
						/* dark mode */
						@apply dark:shadow-neu-dark-inset-xs dark:border-dark-secondary;
					}

					.neu-form-checkbox:checked {
						@apply bg-primary text-primary flex-center;
					}

					.neu-form-checkbox:checked:after {
						content: "\2713";
						@apply text-primary size-full flex-center font-bold transition-all;
					}

					.neu-form-checkbox:checked:after {
						transform: scale(0.8);
					}
				</style>
			</x-slot>
		</x-grid.item>

		<x-grid.item title="Form with Icons">
			<div class="w-full md:w-2/3">
				<div class="neu-input-group neu-input-group-prepend">
					<x-svg.ex class="neu-input-icon" />
					<input class="neu-form-input" type="text" placeholder="Icon Left" />
				</div>

				<div class="neu-input-group neu-input-group-append mt-4">
					<input class="neu-form-input" type="text" placeholder="Icon Right" />
					<x-svg.ex class="neu-input-icon" />
				</div>
			</div>

			<x-slot name="cssCode">
				<style>
					.neu-form-input {
						@apply bg-primary w-full active:placeholder:text-primary focus:placeholder:text-primary placeholder:text-secondary text-secondary appearance-none rounded-lg border border-light-secondary px-3 py-2 font-karla shadow-neu-inset-sm outline-none placeholder:tracking-wide transition duration-300;
						/* dark mode */
						@apply dark:shadow-neu-dark-inset-sm dark:border-dark-secondary;
					}

					/*-- ------ neu-input-group & Icon ------ */
					.neu-input-group {
						@apply flex w-full items-center rounded-lg border border-light-secondary dark:border-dark-secondary;
					}

					.neu-input-icon {
						@apply size-10 text-secondary border-r border-light-secondary px-2 py-1 dark:border-dark-secondary;
					}

					.neu-input-group-prepend .neu-form-input {
						@apply rounded-r-lg rounded-l-none;
					}

					.neu-input-group-append .neu-form-input {
						@apply rounded-l-lg rounded-r-none;
					}

					.neu-input-group .neu-form-input {
						@apply border-none;
					}

					.neu-input-group:hover .neu-form-input,
					.neu-input-group:focus .neu-form-input,
					.neu-input-group:hover .neu-input-icon,
					.neu-input-group:focus .neu-input-icon {
						@apply placeholder:text-primary text-primary;
					}
				</style>
			</x-slot>
		</x-grid.item>

		<x-grid.item title="Select Input">
			<div class="neu-form-group w-full">
				<label class="neu-form-label" for="neu_select">Select</label>
				<select class="neu-form-select" id="neu_select">
					<option value="" disabled selected>Select an option</option>
					<option value="1">Option 1</option>
					<option value="2">Option 2</option>
					<option value="3">Option 3</option>
				</select>
			</div>
			<x-slot name="cssCode">
				<style>
					.neu-form-select {
						@apply appearance-none bg-primary text-secondary rounded-lg border border-light-secondary px-3 py-2 font-karla shadow-neu-inset-sm outline-none transition duration-300 bg-no-repeat pr-10;
						/* dark mode */
						@apply dark:shadow-neu-dark-inset-sm dark:border-dark-secondary;
						background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path fill="%23767676" d="M8.037 11.166L14.5 22.36c.825 1.43 2.175 1.43 3 0l6.463-11.195c.826-1.43.15-2.598-1.5-2.598H9.537c-1.65 0-2.326 1.17-1.5 2.6z"/></svg>');
						background-position: right 0.5rem center;
						background-size: 1.5rem 1.5rem;
					}
				</style>
			</x-slot>
		</x-grid.item>

		<x-grid.item title="Textarea">
			<div class="neu-form-group">
				<label class="neu-form-label" for="textarea">Textarea</label>
				<textarea class="neu-form-textarea scrollbar-thin" id="textarea" rows="2"></textarea>
			</div>

			<x-slot name="cssCode">
				<style>
					.neu-form-textarea {
						@apply bg-primary w-full transition-all duration-500 ease-Out-expo active:placeholder:text-primary focus:placeholder:text-primary placeholder:text-secondary text-secondary appearance-none rounded-lg border border-light-secondary px-3 py-2 font-karla shadow-neu-inset-sm outline-none placeholder:tracking-wide;
						/* dark mode */
						@apply dark:shadow-neu-dark-inset-sm dark:border-dark-secondary;
					}

					.scrollbar-thin {
						&::-webkit-scrollbar {
							width: 4px;
							/* Set the width of the scrollbar */
							height: 4px;
							/* Set the height of the scrollbar for vertical scrollbar */
						}

						&::-webkit-scrollbar-thumb {
							background: #888;
							/* Set the color of the scrollbar thumb */
							border-radius: 10px;
							/* Set the border radius of the scrollbar thumb */
						}

						&::-webkit-scrollbar-thumb:hover {
							background: #555;
							/* Set the color of the scrollbar thumb on hover */
						}
					}
				</style>
			</x-slot>
		</x-grid.item>

		<x-grid title="File Uploads">
			<x-slot name="description">
				You can use the file input to allow users to select one or more files from their device storage to be uploaded to a server or manipulated by JavaScript.
			</x-slot>

			<x-grid.item title="Basic File Upload">
				<div class="neu-form-file-group">
					<label for="file">Upload File</label>
					<input class="neu-form-file" id="file" type="file">
				</div>

				<x-slot name="cssCode">
					<style>
						.neu-form-file-group {
							@apply flex flex-col gap-2 w-full;
						}

						.neu-form-file {
							@apply hidden;
						}

						.neu-form-file-group label {
							@apply bg-primary shadow-neu-xs px-4 py-2 rounded-lg text-secondary active:shadow-neu-inset-sm hover:text-primary font-karla cursor-pointer transition duration-300 ease-in-out relative overflow-hidden border border-light-secondary;
							/* dark mode */
							@apply dark:shadow-neu-dark-xs dark:active:shadow-neu-dark-inset-sm dark:border-dark-secondary;
						}

						.neu-form-file-group label:after {
							content: "Browse";
							@apply text-secondary bg-secondary px-4 py-2 font-karla absolute top-0 right-0;
						}
					</style>
				</x-slot>
			</x-grid.item>

			<x-grid.item title="Upload File Name Preview">
				<div class="neu-form-file-group" x-data="fileUploadName()">
					<label for="file-preview-name" x-text="fileName">Upload File</label>
					<input class="neu-form-file" id="file-preview-name" type="file" @change="previewFileName">
				</div>

				<x-slot name="cssCode">
					<style>
						.neu-form-file-group {
							@apply flex flex-col gap-2 w-full;
						}

						.neu-form-file {
							@apply hidden;
						}

						.neu-form-file-group label {
							@apply bg-primary shadow-neu-xs px-4 py-2 rounded-lg text-secondary active:shadow-neu-inset-sm hover:text-primary font-karla cursor-pointer transition duration-300 ease-in-out relative overflow-hidden border border-light-secondary;
							/* dark mode */
							@apply dark:shadow-neu-dark-xs dark:active:shadow-neu-dark-inset-sm dark:border-dark-secondary;
						}

						.neu-form-file-group label:after {
							content: "Browse";
							@apply text-secondary bg-secondary px-4 py-2 font-karla absolute top-0 right-0;
						}
					</style>
				</x-slot>

				<x-slot name="jsCode">
					<script>
						function fileUploadName() {
							return {
								fileName: 'Upload File',
								previewFileName(event) {
									const file = event.target.files[0];
									if (file) {
										this.fileName = file.name;
									} else {
										this.fileName = 'Upload File';
									}
								}
							}
						}
					</script>
				</x-slot>

			</x-grid.item>

			<x-grid.item title="Upload Image with Preview">
				<div class="neu-form-file-group" x-data="fileUploadPreview()">
					<div class="neu-form-file-preview">
						<template x-if="fileUrl">
							<img class="h-auto max-h-96 max-w-full rounded-md border-light-secondary object-cover" alt="File Preview" :src="fileUrl">
						</template>
						<template x-if="!fileUrl">
							<div class="flex-center text-secondary flex-col gap-2 p-10">
								<x-svg.upload class="size-12" />
								<p>Browse Image to upload!</p>
							</div>
						</template>
					</div>
					<label for="file-preview">Upload Image</label>
					<input class="neu-form-file" id="file-preview" type="file" @change="previewFile">
				</div>

				<x-slot name="cssCode">
					<style>
						.neu-form-file-group {
							@apply flex flex-col gap-2 w-full;
						}

						.neu-form-file {
							@apply hidden;
						}

						.neu-form-file-group label {
							@apply bg-primary shadow-neu-xs px-4 py-2 rounded-lg text-secondary active:shadow-neu-inset-sm hover:text-primary font-karla cursor-pointer transition duration-300 ease-in-out relative overflow-hidden border border-light-secondary;
							/* dark mode */
							@apply dark:shadow-neu-dark-xs dark:active:shadow-neu-dark-inset-sm dark:border-dark-secondary;
						}

						.neu-form-file-group label:after {
							content: "Browse";
							@apply text-secondary bg-secondary px-4 py-2 font-karla absolute top-0 right-0;
						}

						.neu-form-file-preview {
							@apply bg-primary size-fit rounded-lg border border-light-secondary shadow-neu-inset-sm p-3;
							/* dark mode */
							@apply dark:shadow-neu-dark-inset-sm dark:border-dark-secondary;
						}
					</style>
				</x-slot>

				<x-slot name="jsCode">
					<script>
						function fileUploadPreview() {
							return {
								fileUrl: '',
								previewFile(event) {
									const file = event.target.files[0];
									if (file) {
										this.fileUrl = URL.createObjectURL(file);
									} else {
										this.fileUrl = '';
									}
								}
							}
						}
					</script>
				</x-slot>
			</x-grid.item>
		</x-grid>

		<x-grid.item title="CheckBoxes">
			<div class="neu-form-group-checkbox">
				<label class="neu-form-checkbox-label" for="check0">
					<input class="neu-form-checkbox" id="check0" type="checkbox" value="" checked>
					<span class="neu-form-checkbox-text">Checked CheckBox</span>
				</label>
				<label class="neu-form-checkbox-label" for="check1">
					<input class="neu-form-checkbox" id="check1" type="checkbox" value="">
					<span class="neu-form-checkbox-text">CheckBox 1</span>
				</label>
				<label class="neu-form-checkbox-label" for="check2">
					<input class="neu-form-checkbox" id="check2" type="checkbox" value="">
					<span class="neu-form-checkbox-text">CheckBox 2</span>
				</label>
				<label class="neu-form-checkbox-label" for="check3">
					<input class="neu-form-checkbox" id="check3" type="checkbox" disabled>
					<span class="neu-form-checkbox-text">Disabled CheckBox</span>
				</label>
			</div>

			<x-slot name="cssCode">
				<style>
					.neu-form-group-checkbox {
						@apply flex items-start gap-2 flex-col bg-primary rounded-2xl px-16 py-12 shadow-neu-inset-xs dark:shadow-neu-dark-inset-xs;
					}

					.neu-form-checkbox-label {
						@apply inline-flex items-center cursor-pointer;
					}

					.neu-form-checkbox {
						@apply bg-primary flex-center size-4 appearance-none rounded border border-light-secondary shadow-neu-inset-xs outline-none transition-all duration-300 ease-in-out placeholder:tracking-wide disabled:text-secondary;
						/* dark mode */
						@apply dark:shadow-neu-dark-inset-xs dark:border-dark-secondary;
					}

					.neu-form-checkbox:checked {
						@apply bg-primary text-primary flex-center;
					}

					.neu-form-checkbox:checked:after {
						content: "\2713";
						@apply text-primary size-full flex-center font-bold transition-all;
					}

					.neu-form-checkbox:checked:after {
						transform: scale(0.8);
					}

					.neu-form-checkbox-text {
						@apply ml-2 text-secondary text-sm font-karla transition-all duration-500;
					}

					.neu-form-checkbox-label:hover .neu-form-checkbox-text,
					.neu-form-checkbox:checked~.neu-form-checkbox-text {
						@apply translate-x-2 text-primary;
					}
				</style>
			</x-slot>
		</x-grid.item>

		<x-grid.item title="Radio">
			<div class="neu-form-group-radio">
				<label class="neu-form-radio-label" for="radio1">
					<input class="neu-form-radio" id="radio1" name="radio1" type="radio" value="Radio 1" checked>
					<div class="neu-form-radio-indicator"></div>
					<span class="neu-form-radio-text">Checked Radio</span>
				</label>
				<label class="neu-form-radio-label" for="radio2">
					<input class="neu-form-radio" id="radio2" name="radio1" type="radio" value="Radio 2">
					<div class="neu-form-radio-indicator"></div>
					<span class="neu-form-radio-text">Radio 1</span>
				</label>
				<label class="neu-form-radio-label" for="radio3">
					<input class="neu-form-radio" id="radio3" name="radio1" type="radio" value="Radio 3">
					<div class="neu-form-radio-indicator"></div>
					<span class="neu-form-radio-text">Radio 2</span>
				</label>
				<label class="neu-form-radio-label" for="radio4">
					<input class="neu-form-radio" id="radio4" name="radio1" type="radio" value="Radio 4" disabled>
					<div class="neu-form-radio-indicator"></div>
					<span class="neu-form-radio-text">Disabled Radio</span>
				</label>
			</div>

			<x-slot name="cssCode">
				<style>
					.neu-form-group-radio {
						@apply flex items-start gap-2 flex-col bg-primary rounded-2xl px-16 py-12 shadow-neu-inset-xs dark:shadow-neu-dark-inset-xs;
					}

					.neu-form-radio-label {
						@apply relative inline-flex cursor-pointer items-center;
					}

					.neu-form-radio {
						@apply appearance-none;
					}

					.neu-form-radio-indicator {
						@apply size-5 before:size-4/5 relative overflow-hidden rounded-full shadow-neu-xs before:absolute before:left-[10%] before:top-[10%] before:rounded-full before:shadow-neu-md-soft dark:shadow-neu-dark-xs dark:before:shadow-neu-dark-md;
					}

					.neu-form-radio-text {
						@apply ml-2 font-karla text-secondary transition-all duration-500;
					}

					.neu-form-radio-label:hover .neu-form-radio-text,
					.neu-form-radio:checked~.neu-form-radio-text {
						@apply translate-x-2 text-primary;
					}

					.neu-form-radio:checked~.neu-form-radio-indicator:before {
						@apply shadow-neu-inset-xs dark:shadow-neu-dark-inset-xs;
					}
				</style>
			</x-slot>
		</x-grid.item>

		<x-grid.item title="Switch">
			<label class="neu-form-switch-label">
				<input class="neu-form-switch" type="checkbox" value="">
				<div class="neu-form-switch-indicator"></div>
			</label>

			<x-slot name="cssCode">
				<style>
					.neu-form-switch-label {
						@apply relative inline-flex cursor-pointer items-center;
					}

					.neu-form-switch {
						@apply sr-only;
					}

					.neu-form-switch-indicator {
						@apply bg-primary h-12 w-24 rounded-full shadow-neu-inset-sm outline-none ring-0;
						@apply dark:shadow-neu-dark-inset-sm;
					}

					.neu-form-switch-indicator:after {
						@apply bg-primary absolute left-1 top-1 flex -rotate-180 items-center justify-center size-10 rounded-full shadow-neu-xs outline-none duration-300 content-['✖️'] ease-Out-back;
						@apply dark:shadow-neu-dark-xs;
					}

					.neu-form-switch:hover~.neu-form-switch-indicator:after {
						@apply scale-95;
					}

					.neu-form-switch:checked~.neu-form-switch-indicator:after {
						@apply translate-x-12 rotate-0 content-['✔️'];
					}
				</style>
			</x-slot>
		</x-grid.item>

		<x-grid.item title="slider">
			<div class="neu-form-range-group" x-data="{ value: 50 }">
				<label class="neu-form-label" for="range-slider">Range Slider</label>
				<input class="neu-form-range" id="range-slider" type="range" min="0" max="1000" step="10" x-model="value" :style="`background: linear-gradient(to right, #44CCFF ${value / 10}%, #00000000 ${value / 10}%);`">
				<div class="neu-badge mt-2 w-fit font-playfair">
					<span x-text="value"></span>
				</div>
			</div>

			<x-slot name="cssCode">
				<style>
					.neu-form-range-group {
						@apply w-full;
					}

					.neu-form-range {
						@apply appearance-none relative w-full bg-primary h-2 rounded-full outline-none shadow-neu-xs dark:shadow-neu-dark-xs;
					}

					.neu-form-range::-webkit-slider-thumb {
						@apply appearance-none w-6 h-6 bg-accent rounded-full shadow-neu-xs dark:shadow-neu-dark-xs cursor-pointer transition duration-300 ease-in-out;
					}

					.neu-form-range::-moz-range-thumb {
						@apply appearance-none w-6 h-6 bg-accent relative rounded-full shadow-neu-xs cursor-pointer transition duration-300 ease-in-out;
					}
				</style>
			</x-slot>
		</x-grid.item>

		<x-grid.item title="Date Picker">
			<div class="neu-calendar-container" x-data="datePicker()" @click.away="showCalendar=false" x-init="init()">
				<div class="neu-input-group-prepend neu-input-group" @click="showCalendar = true, showCalendarItem = 'day'" @keydown.escape="showCalendar = false">
					<x-svg.calendar class="neu-input-icon" />
					<input class="neu-form-input" type="text" x-model="date" placeholder="Select date" @input="updateDate()">
				</div>

				<!-- Calendar -->
				<div class="neu-calendar" x-cloak x-show="showCalendar">
					<!-- Days -->
					<div x-show="showCalendarItem === 'day'">
						<!-- Header -->
						<div class="neu-calendar-header">
							<button class="neu-calendar-header-btn" @click="prevMonth"><x-svg.left class="size-5" /></button>
							<div class="neu-calendar-header-title" x-text="monthNames[month] +' '+ year" @click="showCalendarItem = 'year'"></div>
							<button class="neu-calendar-header-btn" @click="nextMonth"><x-svg.right class="size-5" /></button>
						</div>
						<!-- List of days -->
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

					<!-- Month -->
					<div x-show="showCalendarItem === 'month'">
						<!-- Header -->
						<div class="neu-calendar-header">
							<button class="neu-calendar-header-btn" @click="showCalendarItem = 'year'"><x-svg.left class="size-5" /></button>
							<div class="neu-calendar-header-title" x-text="year" @click="showCalendarItem = 'year'"></div>
							<button class="neu-calendar-header-btn" @click="showCalendarItem = 'year'"><x-svg.right class="size-5" /></button>
						</div>
						<!-- List of Months -->
						<div class="neu-calendar-body-months">
							<template x-for="(value, index) in monthNames" :key="index">
								<div class="neu-calendar-item" :class="{ 'active': index === month }" x-text="value" @click="selectMonth(index)"></div>
							</template>
						</div>
					</div>

					<!-- Year -->
					<div x-show="showCalendarItem === 'year'">
						<!-- Header -->
						<div class="neu-calendar-header">
							<button class="neu-calendar-header-btn" @click="prevYear"><x-svg.left class="size-5" /></button>
							<div class="neu-calendar-header-title" x-text="yearList[1] + ' - ' + yearList[10]" @click="showCalendarItem = 'day'"></div>
							<button class="neu-calendar-header-btn" @click="nextYear"><x-svg.right class="size-5" /></button>
						</div>
						<!-- List of Years -->
						<div class="neu-calendar-body-years">
							<template x-for="(value,index) in yearList" :key="index">
								<div class="neu-calendar-item" :class="{ 'text-secondary': index === 0 || index === 11, 'active': year === value }" x-text="value" @click="selectYear(value)"></div>
							</template>
						</div>
					</div>
				</div>
			</div>

			<x-slot name="cssCode">
				<style>
					/* -------------------------------------------------------------------------- */
					/*                                neu-calendar                                */
					/* -------------------------------------------------------------------------- */
					.neu-calendar-container {
						@apply relative w-72;
					}

					.neu-calendar {
						@apply bg-primary absolute left-0 top-12 z-50 mt-2 w-full overflow-hidden rounded-lg shadow-neu-xs dark:shadow-neu-dark-xs;
					}

					.neu-calendar-header {
						@apply flex items-center justify-between px-4 py-2 shadow-neu-xs dark:shadow-neu-dark-sm;
					}

					.neu-calendar-header-btn {
						@apply neu-btn p-1.5;
					}

					.neu-calendar-header-title {
						@apply neu-btn text-nowrap mx-3 w-full px-4 py-1.5 text-sm;
					}

					.neu-calendar-body,
					.neu-calendar-body-days,
					.neu-calendar-body-months,
					.neu-calendar-body-years {
						@apply m-1 grid gap-1 p-4 text-sm shadow-neu-inset-xs dark:shadow-neu-dark-inset-xs;
					}

					.neu-calendar-body-days {
						@apply grid-cols-7;
					}

					.neu-calendar-body-months {
						@apply grid-cols-3;
					}

					.neu-calendar-body-years {
						@apply grid-cols-4;
					}

					.neu-calendar-item {
						@apply text-primary hover:bg-secondary flex cursor-pointer items-center justify-center rounded-lg p-2 transition hover:text-white hover:shadow-neu-xs dark:hover:shadow-neu-dark-xs;
					}

					.neu-calendar-item.active {
						@apply text-white bg-secondary shadow-neu-xs dark:shadow-neu-dark-xs;
					}
				</style>
			</x-slot>

			<x-slot name="jsCode">
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
							yearList: [],
							monthNames: [
								'January', 'February', 'March', 'April', 'May', 'June',
								'July', 'August', 'September', 'October', 'November', 'December'
							],
							init() {
								this.date = `${this.today}/${this.month + 1}/${this.year}`;
								this.updateDaysInMonth();
								this.updateYearsList();
							},
							updateDaysInMonth() {
								const daysInMonth = new Date(this.year, this.month + 1, 0).getDate();
								const dayOfWeek = new Date(this.year, this.month, 1).getDay();
								const prevDaysInMonth = new Date(this.year, this.month, 0).getDate();

								this.prevDays = Array.from({
									length: dayOfWeek
								}, (_, i) => prevDaysInMonth - dayOfWeek + 1 + i);
								this.daysInMonth = Array.from({
									length: daysInMonth
								}, (_, i) => i + 1);

								const remainingDays = (dayOfWeek + daysInMonth) % 7;
								this.nextDays = remainingDays ? Array.from({
									length: 7 - remainingDays
								}, (_, i) => i + 1) : [];
							},

							// Update date when input is changed
							updateDate() {
								const [day, month, year] = this.date.split('/').map(Number);
								const currentDate = new Date();

								this.month = month > 0 && month < 13 ? month - 1 : currentDate.getMonth();
								this.year = year > 0 ? year : currentDate.getFullYear();

								this.updateDaysInMonth();
							},

							// Select date
							selectDate(day, type) {
								if (type === 'previousMonth') {
									this.prevMonth();
								} else if (type === 'nextMonth') {
									this.nextMonth();
								}
								this.date = `${day}/${this.month + 1}/${this.year}`;
								this.showCalendar = false;
							},
							isSelected(day) {
								return this.date === `${day}/${this.month + 1}/${this.year}`;
							},

							// Navigation for month
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
							selectMonth(month) {
								this.month = month;
								this.updateDaysInMonth();
								this.showCalendarItem = 'day';
							},

							// Navigation for year
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

							// Update year list
							updateYearsList() {
								this.yearList = Array.from({
									length: 12
								}, (_, i) => this.year - (this.year % 10) + i);
							}
						};
					}
				</script>
			</x-slot>
		</x-grid.item>

		<x-grid.item title="title">
			<img src="asset('image/portrait/angry-lion.png')" alt="">
		</x-grid.item>

	</x-grid>

	@pushOnce('scripts')
		<script>
			function fileUploadPreview() {
				return {
					fileUrl: '',
					previewFile(event) {
						const file = event.target.files[0];
						if (file) {
							this.fileUrl = URL.createObjectURL(file);
						} else {
							this.fileUrl = '';
						}
					}
				}
			}

			function fileUploadName() {
				return {
					fileName: 'Upload File',
					previewFileName(event) {
						const file = event.target.files[0];
						if (file) {
							this.fileName = file.name;
						} else {
							this.fileName = 'Upload File';
						}
					}
				}
			}

			function datePicker() {
				return {
					showCalendar: false,
					showCalendarItem: 'day',
					date: '',
					month: new Date().getMonth(),
					year: new Date().getFullYear(),
					today: new Date().getDate(),
					daysInMonth: [],
					yearList: [],
					monthNames: [
						'January', 'February', 'March', 'April', 'May', 'June',
						'July', 'August', 'September', 'October', 'November', 'December'
					],
					init() {
						this.date = `${this.today}/${this.month + 1}/${this.year}`;
						this.updateDaysInMonth();
						this.updateYearsList();
					},
					updateDaysInMonth() {
						const daysInMonth = new Date(this.year, this.month + 1, 0).getDate();
						const dayOfWeek = new Date(this.year, this.month, 1).getDay();
						const prevDaysInMonth = new Date(this.year, this.month, 0).getDate();

						this.prevDays = Array.from({
							length: dayOfWeek
						}, (_, i) => prevDaysInMonth - dayOfWeek + 1 + i);
						this.daysInMonth = Array.from({
							length: daysInMonth
						}, (_, i) => i + 1);

						const remainingDays = (dayOfWeek + daysInMonth) % 7;
						this.nextDays = remainingDays ? Array.from({
							length: 7 - remainingDays
						}, (_, i) => i + 1) : [];
					},

					// Update date when input is changed
					updateDate() {
						const [day, month, year] = this.date.split('/').map(Number);
						const currentDate = new Date();

						this.month = month > 0 && month < 13 ? month - 1 : currentDate.getMonth();
						this.year = year > 0 ? year : currentDate.getFullYear();

						this.updateDaysInMonth();
					},

					// Select date
					selectDate(day, type) {
						if (type === 'previousMonth') {
							this.prevMonth();
						} else if (type === 'nextMonth') {
							this.nextMonth();
						}
						this.date = `${day}/${this.month + 1}/${this.year}`;
						this.showCalendar = false;
					},
					isSelected(day) {
						return this.date === `${day}/${this.month + 1}/${this.year}`;
					},

					// Navigation for month
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
					selectMonth(month) {
						this.month = month;
						this.updateDaysInMonth();
						this.showCalendarItem = 'day';
					},

					// Navigation for year
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

					// Update year list
					updateYearsList() {
						this.yearList = Array.from({
							length: 12
						}, (_, i) => this.year - (this.year % 10) + i);
					}
				};
			}
		</script>
	@endPushOnce

</x-app-layout>
