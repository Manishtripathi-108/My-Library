<x-app-layout title="Buttons">

	<x-grid title="Buttons">
		<x-slot name="description">
			Buttons are used to interact with the user, they can be used to submit forms, navigate to other pages, or trigger actions.
		</x-slot>

		<x-grid.item title="Delete Button">
			@include('buttons.del-btn')
		</x-grid.item>

		<x-grid.item title="Documents Button">
			@include('buttons.docs-btn')
		</x-grid.item>

		<x-grid.item title="Reflect Button">
			<button class="group/button relative inline-flex items-center justify-center overflow-hidden rounded-md border border-white bg-gray-800 px-6 py-2 text-base font-semibold text-white transition-all duration-300 ease-in-out hover:scale-110 hover:shadow-xl hover:shadow-gray-800/50 dark:hover:shadow-white/20">
				<span class="text-lg">Reflect</span>
				<div class="absolute inset-0 flex h-full w-full justify-center [transform:skew(-13deg)_translateX(-100%)] group-hover/button:duration-1000 group-hover/button:[transform:skew(-13deg)_translateX(100%)]">
					<div class="relative h-full w-10 bg-white/30"></div>
				</div>
			</button>
		</x-grid.item>

		<x-grid.item title="Arrow Buttons">
			<div class="flex flex-wrap gap-10">
				<!-- Up Arrow Button -->
				<button class="animation-iteration-infinite animate-bounce-up cursor-pointer rounded-md bg-gray-800 px-3 py-2 tracking-wider text-white shadow-xl hover:animate-none">
					<svg class="h-5 w-5" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M12 3L4.5 10.5M12 3l7.5 7.5M12 3v18" stroke-linejoin="round" stroke-linecap="round"></path>
					</svg>
				</button>

				<!-- Down Arrow Button -->
				<button class="animation-iteration-infinite animate-bounce-down cursor-pointer rounded-md bg-gray-800 px-3 py-2 tracking-wider text-white shadow-xl hover:animate-none">
					<svg class="h-5 w-5" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M12 21L4.5 13.5M12 21l7.5-7.5M12 21V3" stroke-linejoin="round" stroke-linecap="round"></path>
					</svg>
				</button>

				<!-- Left Arrow Button -->
				<button class="animation-iteration-infinite animate-bounce-left cursor-pointer rounded-md bg-gray-800 px-3 py-2 tracking-wider text-white shadow-xl hover:animate-none">
					<svg class="h-5 w-5" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M3 12l7.5-7.5M3 12l7.5 7.5M3 12h18" stroke-linejoin="round" stroke-linecap="round"></path>
					</svg>
				</button>

				<!-- Right Arrow Button -->
				<button class="animation-iteration-infinite animate-bounce-right cursor-pointer rounded-md bg-gray-800 px-3 py-2 tracking-wider text-white shadow-xl hover:animate-none">
					<svg class="h-5 w-5" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M21 12l-7.5-7.5M21 12l-7.5 7.5M21 12H3" stroke-linejoin="round" stroke-linecap="round"></path>
					</svg>
				</button>
			</div>

			<x-slot name="cssCode">
				<style>
					@keyframes bounce-up {

						0%,
						100% {
							transform: translateY(0);
						}

						50% {
							transform: translateY(25%);
						}
					}

					.animate-bounce-up {
						animation: bounce-up 2s;
					}

					@keyframes bounce-down {

						0%,
						100% {
							transform: translateY(0);
						}

						50% {
							transform: translateY(-25%);
						}
					}

					.animate-bounce-down {
						animation: bounce-down 2s;
					}

					@keyframes bounce-left {

						0%,
						100% {
							transform: translateX(0);
						}

						50% {
							transform: translateX(25%);
						}
					}

					.animate-bounce-left {
						animation: bounce-left 2s;
					}

					@keyframes bounce-right {

						0%,
						100% {
							transform: translateX(0);
						}

						50% {
							transform: translateX(-25%);
						}
					}

					.animate-bounce-right {
						animation: bounce-right 2s;
					}
				</style>
			</x-slot>
		</x-grid.item>

		<x-grid.item title="Pattern Button">
			<button class="group relative z-10 cursor-pointer overflow-hidden rounded-full bg-gradient-to-r from-red-500 to-orange-500 px-10 py-3 font-serif uppercase tracking-widest text-transparent shadow-xl shadow-red-600 after:absolute after:left-1/2 after:top-1/2 after:h-[85%] after:w-[95%] after:-translate-x-1/2 after:-translate-y-1/2 after:rounded-full after:bg-red-200 hover:saturate-[1.15] active:saturate-[1.4] group-hover:shadow-2xl group-hover:shadow-red-600" style="-webkit-box-reflect: below 0px linear-gradient(to bottom, rgba(0,0,0,0.0), rgba(0,0,0,0.4));">
				Button
				<p class="absolute left-1/2 top-1/2 z-40 h-full w-full -translate-x-1/2 -translate-y-[30%] bg-gradient-to-r from-red-500 to-orange-500 bg-clip-text font-semibold tracking-widest text-transparent transition-all duration-300 group-hover:-translate-y-full">
					Naruto
				</p>
				<p class="absolute left-1/2 top-1/2 z-40 h-full w-full -translate-x-1/2 translate-y-full bg-gradient-to-r from-red-700 to-orange-700 bg-clip-text font-extrabold tracking-widest text-transparent transition-all duration-300 group-hover:-translate-y-[40%]">
					Uzumaki
				</p>
				<svg class="absolute left-1/2 top-1/2 z-30 h-full w-full -translate-x-1/2 -translate-y-1/2 rotate-180 scale-x-125 animate-pulse transition-all duration-300 group-hover:-translate-y-[45%] group-hover:animate-none" viewBox="0 0 2400 800" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xmlns="http://www.w3.org/2000/svg">
					<defs>
						<linearGradient id="sssurf-grad" y2="100%" x2="50%" y1="0%" x1="50%">
							<stop offset="0%" stop-opacity="1" stop-color="hsl(37, 99%, 67%)"></stop>
							<stop offset="100%" stop-opacity="1" stop-color="hsl(316, 73%, 52%)"></stop>
						</linearGradient>
					</defs>
					<g transform="matrix(1,0,0,1,0,-91.0877685546875)" fill="url(#sssurf-grad)">
						<path opacity="0.05" transform="matrix(1,0,0,1,0,35)" d="M 0 305.9828838196134 Q 227.6031525693441 450 600 302.17553022897005 Q 1010.7738828515054 450 1200 343.3024459932802 Q 1379.4406250195766 450 1800 320.38902780838214 Q 2153.573162029817 450 2400 314.38564046970816 L 2400 800 L 0 800 L 0 340.3112176762882 Z"></path>
						<path opacity="0.21" transform="matrix(1,0,0,1,0,70)" d="M 0 305.9828838196134 Q 227.6031525693441 450 600 302.17553022897005 Q 1010.7738828515054 450 1200 343.3024459932802 Q 1379.4406250195766 450 1800 320.38902780838214 Q 2153.573162029817 450 2400 314.38564046970816 L 2400 800 L 0 800 L 0 340.3112176762882 Z"></path>
						<path opacity="0.37" transform="matrix(1,0,0,1,0,105)" d="M 0 305.9828838196134 Q 227.6031525693441 450 600 302.17553022897005 Q 1010.7738828515054 450 1200 343.3024459932802 Q 1379.4406250195766 450 1800 320.38902780838214 Q 2153.573162029817 450 2400 314.38564046970816 L 2400 800 L 0 800 L 0 340.3112176762882 Z"></path>
						<path opacity="0.53" transform="matrix(1,0,0,1,0,140)" d="M 0 305.9828838196134 Q 227.6031525693441 450 600 302.17553022897005 Q 1010.7738828515054 450 1200 343.3024459932802 Q 1379.4406250195766 450 1800 320.38902780838214 Q 2153.573162029817 450 2400 314.38564046970816 L 2400 800 L 0 800 L 0 340.3112176762882 Z"></path>
						<path opacity="0.68" transform="matrix(1,0,0,1,0,175)" d="M 0 305.9828838196134 Q 227.6031525693441 450 600 302.17553022897005 Q 1010.7738828515054 450 1200 343.3024459932802 Q 1379.4406250195766 450 1800 320.38902780838214 Q 2153.573162029817 450 2400 314.38564046970816 L 2400 800 L 0 800 L 0 340.3112176762882 Z"></path>
						<path opacity="0.84" transform="matrix(1,0,0,1,0,210)" d="M 0 305.9828838196134 Q 227.6031525693441 450 600 302.17553022897005 Q 1010.7738828515054 450 1200 343.3024459932802 Q 1379.4406250195766 450 1800 320.38902780838214 Q 2153.573162029817 450 2400 314.38564046970816 L 2400 800 L 0 800 L 0 340.3112176762882 Z"></path>
						<path opacity="1" transform="matrix(1,0,0,1,0,245)" d="M 0 305.9828838196134 Q 227.6031525693441 450 600 302.17553022897005 Q 1010.7738828515054 450 1200 343.3024459932802 Q 1379.4406250195766 450 1800 320.38902780838214 Q 2153.573162029817 450 2400 314.38564046970816 L 2400 800 L 0 800 L 0 340.3112176762882 Z"></path>
					</g>
				</svg>
				<svg class="absolute left-1/2 top-1/2 z-40 h-full w-full -translate-x-1/2 -translate-y-[30%] fill-red-500 transition-all duration-500 group-hover:-translate-y-[33%] group-hover:scale-95" viewBox="0 0 1440 320" xmlns="http://www.w3.org/2000/svg">
					<path
						d="M0,288L9.2,250.7C18.5,213,37,139,55,133.3C73.8,128,92,192,111,224C129.2,256,148,256,166,256C184.6,256,203,256,222,250.7C240,245,258,235,277,213.3C295.4,192,314,160,332,170.7C350.8,181,369,235,388,229.3C406.2,224,425,160,443,122.7C461.5,85,480,75,498,74.7C516.9,75,535,85,554,101.3C572.3,117,591,139,609,170.7C627.7,203,646,245,665,256C683.1,267,702,245,720,245.3C738.5,245,757,267,775,266.7C793.8,267,812,245,831,234.7C849.2,224,868,224,886,218.7C904.6,213,923,203,942,170.7C960,139,978,85,997,53.3C1015.4,21,1034,11,1052,48C1070.8,85,1089,171,1108,197.3C1126.2,224,1145,192,1163,197.3C1181.5,203,1200,245,1218,224C1236.9,203,1255,117,1274,106.7C1292.3,96,1311,160,1329,170.7C1347.7,181,1366,139,1385,128C1403.1,117,1422,139,1431,149.3L1440,160L1440,320L1430.8,320C1421.5,320,1403,320,1385,320C1366.2,320,1348,320,1329,320C1310.8,320,1292,320,1274,320C1255.4,320,1237,320,1218,320C1200,320,1182,320,1163,320C1144.6,320,1126,320,1108,320C1089.2,320,1071,320,1052,320C1033.8,320,1015,320,997,320C978.5,320,960,320,942,320C923.1,320,905,320,886,320C867.7,320,849,320,831,320C812.3,320,794,320,775,320C756.9,320,738,320,720,320C701.5,320,683,320,665,320C646.2,320,628,320,609,320C590.8,320,572,320,554,320C535.4,320,517,320,498,320C480,320,462,320,443,320C424.6,320,406,320,388,320C369.2,320,351,320,332,320C313.8,320,295,320,277,320C258.5,320,240,320,222,320C203.1,320,185,320,166,320C147.7,320,129,320,111,320C92.3,320,74,320,55,320C36.9,320,18,320,9,320L0,320Z"
						fill-opacity="1"></path>
				</svg>
			</button>
		</x-grid.item>

	</x-grid>

</x-app-layout>
