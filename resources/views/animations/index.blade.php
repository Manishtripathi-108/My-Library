@php
	$Animations = [
	    'Space' => [['name' => 'Space In Down', 'animation' => 'animate-space-in-down'], ['name' => 'Space In Left', 'animation' => 'animate-space-in-left'], ['name' => 'Space In Right', 'animation' => 'animate-space-in-right'], ['name' => 'Space In Up', 'animation' => 'animate-space-in-up'], ['name' => 'Space Out Down', 'animation' => 'animate-space-out-down'], ['name' => 'Space Out Left', 'animation' => 'animate-space-out-left'], ['name' => 'Space Out Right', 'animation' => 'animate-space-out-right'], ['name' => 'Space Out Up', 'animation' => 'animate-space-out-up']],
	    'Perspective' => [['name' => 'Perspective Down', 'animation' => 'animate-perspective-down'], ['name' => 'Perspective Down Return', 'animation' => 'animate-perspective-down-return'], ['name' => 'Perspective Left', 'animation' => 'animate-perspective-left'], ['name' => 'Perspective Left Return', 'animation' => 'animate-perspective-left-return'], ['name' => 'Perspective Right', 'animation' => 'animate-perspective-right'], ['name' => 'Perspective Right Return', 'animation' => 'animate-perspective-right-return'], ['name' => 'Perspective Up', 'animation' => 'animate-perspective-up'], ['name' => 'Perspective Up Return', 'animation' => 'animate-perspective-up-return']],
	    'Rotate' => [['name' => 'Rotate Down', 'animation' => 'animate-rotate-down'], ['name' => 'Rotate Left', 'animation' => 'animate-rotate-left'], ['name' => 'Rotate Right', 'animation' => 'animate-rotate-right'], ['name' => 'Rotate Up', 'animation' => 'animate-rotate-up']],
	    'Slide' => [['name' => 'Slide Down', 'animation' => 'animate-slide-down'], ['name' => 'Slide Down Return', 'animation' => 'animate-slide-down-return'], ['name' => 'Slide Left', 'animation' => 'animate-slide-left'], ['name' => 'Slide Left Return', 'animation' => 'animate-slide-left-return'], ['name' => 'Slide Right', 'animation' => 'animate-slide-right'], ['name' => 'Slide Right Return', 'animation' => 'animate-slide-right-return'], ['name' => 'Slide Up', 'animation' => 'animate-slide-up'], ['name' => 'Slide Up Return', 'animation' => 'animate-slide-up-return']],
	    'Open' => [['name' => 'Open Down Left', 'animation' => 'animate-open-down-left'], ['name' => 'Open Down Left Out', 'animation' => 'animate-open-down-left-out'], ['name' => 'Open Down Left Return', 'animation' => 'animate-open-down-left-return'], ['name' => 'Open Down Right', 'animation' => 'animate-open-down-right'], ['name' => 'Open Down Right Out', 'animation' => 'animate-open-down-right-out'], ['name' => 'Open Down Right Return', 'animation' => 'animate-open-down-right-return'], ['name' => 'Open Up Left', 'animation' => 'animate-open-up-left'], ['name' => 'Open Up Left Out', 'animation' => 'animate-open-up-left-out'], ['name' => 'Open Up Left Return', 'animation' => 'animate-open-up-left-return'], ['name' => 'Open Up Right', 'animation' => 'animate-open-up-right'], ['name' => 'Open Up Right Out', 'animation' => 'animate-open-up-right-out'], ['name' => 'Open Up Right Return', 'animation' => 'animate-open-up-right-return']],
	    'PuffVanish' => [['name' => 'Puff In', 'animation' => 'animate-puff-in'], ['name' => 'Puff Out', 'animation' => 'animate-puff-out'], ['name' => 'Vanish In', 'animation' => 'animate-vanish-in'], ['name' => 'Vanish Out', 'animation' => 'animate-vanish-out']],
	    'BoingBomb' => [['name' => 'Boing In Up', 'animation' => 'animate-boing-in-up'], ['name' => 'Boing Out Down', 'animation' => 'animate-boing-out-down'], ['name' => 'Bomb Left Out', 'animation' => 'animate-bomb-left-out'], ['name' => 'Bomb Right Out', 'animation' => 'animate-bomb-right-out']],
	    'Miscellaneous' => [['name' => 'Foolish In', 'animation' => 'animate-foolish-in'], ['name' => 'Foolish Out', 'animation' => 'animate-foolish-out'], ['name' => 'Hole Out', 'animation' => 'animate-hole-out'], ['name' => 'Magic', 'animation' => 'animate-magic'], ['name' => 'Swash In', 'animation' => 'animate-swash-in'], ['name' => 'Swash Out', 'animation' => 'animate-swash-out'], ['name' => 'Swap', 'animation' => 'animate-swap'], ['name' => 'Twister In Down', 'animation' => 'animate-twister-in-down'], ['name' => 'Twister In Up', 'animation' => 'animate-twister-in-up']],
	    'Tin' => [['name' => 'Tin Down In', 'animation' => 'animate-tin-down-in'], ['name' => 'Tin Down Out', 'animation' => 'animate-tin-down-out'], ['name' => 'Tin Left In', 'animation' => 'animate-tin-left-in'], ['name' => 'Tin Left Out', 'animation' => 'animate-tin-left-out'], ['name' => 'Tin Right In', 'animation' => 'animate-tin-right-in'], ['name' => 'Tin Right Out', 'animation' => 'animate-tin-right-out'], ['name' => 'Tin Up In', 'animation' => 'animate-tin-up-in'], ['name' => 'Tin Up Out', 'animation' => 'animate-tin-up-out']],
	    'Circle' => [['name' => 'Circle In Bottom Left', 'animation' => 'animate-circle-in-bottom-left'], ['name' => 'Circle In Bottom Right', 'animation' => 'animate-circle-in-bottom-right'], ['name' => 'Circle In Center', 'animation' => 'animate-circle-in-center'], ['name' => 'Circle In Hesitate', 'animation' => 'animate-circle-in-hesitate'], ['name' => 'Circle In Swoop', 'animation' => 'animate-circle-in-swoop'], ['name' => 'Circle In Top Left', 'animation' => 'animate-circle-in-top-left'], ['name' => 'Circle In Top Right', 'animation' => 'animate-circle-in-top-right'], ['name' => 'Circle Out Bottom Left', 'animation' => 'animate-circle-out-bottom-left'], ['name' => 'Circle Out Bottom Right', 'animation' => 'animate-circle-out-bottom-right'], ['name' => 'Circle Out Center', 'animation' => 'animate-circle-out-center'], ['name' => 'Circle Out Hesitate', 'animation' => 'animate-circle-out-hesitate'], ['name' => 'Circle Out Swoop', 'animation' => 'animate-circle-out-swoop'], ['name' => 'Circle Out Top Left', 'animation' => 'animate-circle-out-top-left'], ['name' => 'Circle Out Top Right', 'animation' => 'animate-circle-out-top-right']],
	    'Square' => [['name' => 'Square In Bottom Left', 'animation' => 'animate-square-in-bottom-left'], ['name' => 'Square In Bottom Right', 'animation' => 'animate-square-in-bottom-right'], ['name' => 'Square In Center', 'animation' => 'animate-square-in-center'], ['name' => 'Square In Hesitate', 'animation' => 'animate-square-in-hesitate'], ['name' => 'Square In Top Left', 'animation' => 'animate-square-in-top-left'], ['name' => 'Square In Top Right', 'animation' => 'animate-square-in-top-right'], ['name' => 'Square Out Bottom Left', 'animation' => 'animate-square-out-bottom-left'], ['name' => 'Square Out Bottom Right', 'animation' => 'animate-square-out-bottom-right'], ['name' => 'Square Out Center', 'animation' => 'animate-square-out-center'], ['name' => 'Square Out Hesitate', 'animation' => 'animate-square-out-hesitate'], ['name' => 'Square Out Top Left', 'animation' => 'animate-square-out-top-left'], ['name' => 'Square Out Top Right', 'animation' => 'animate-square-out-top-right']],
	    'Wipe' => [
	        ['name' => 'Wipe Cinematic In', 'animation' => 'animate-wipe-cinematic-in'],
	        ['name' => 'Wipe Cinematic Out', 'animation' => 'animate-wipe-cinematic-out'],
	        ['name' => 'Wipe In Bottom Left', 'animation' => 'animate-wipe-in-bottom-left'],
	        ['name' => 'Wipe In Bottom Right', 'animation' => 'animate-wipe-in-bottom-right'],
	        ['name' => 'Wipe In Down', 'animation' => 'animate-wipe-in-down'],
	        ['name' => 'Wipe In Left', 'animation' => 'animate-wipe-in-left'],
	        ['name' => 'Wipe In Right', 'animation' => 'animate-wipe-in-right'],
	        ['name' => 'Wipe In Top Left', 'animation' => 'animate-wipe-in-top-left'],
	        ['name' => 'Wipe In Top Right', 'animation' => 'animate-wipe-in-top-right'],
	        ['name' => 'Wipe In Up', 'animation' => 'animate-wipe-in-up'],
	        ['name' => 'Wipe Out Bottom Left', 'animation' => 'animate-wipe-out-bottom-left'],
	        ['name' => 'Wipe Out Bottom Right', 'animation' => 'animate-wipe-out-bottom-right'],
	        ['name' => 'Wipe Out Down', 'animation' => 'animate-wipe-out-down'],
	        ['name' => 'Wipe Out Left', 'animation' => 'animate-wipe-out-left'],
	        ['name' => 'Wipe Out Right', 'animation' => 'animate-wipe-out-right'],
	        ['name' => 'Wipe Out Top Left', 'animation' => 'animate-wipe-out-top-left'],
	        ['name' => 'Wipe Out Top Right', 'animation' => 'animate-wipe-out-top-right'],
	        ['name' => 'Wipe Out Up', 'animation' => 'animate-wipe-out-up'],
	    ],
	    'Diamond' => [['name' => 'Diamond In Center', 'animation' => 'animate-diamond-in-center'], ['name' => 'Diamond In Hesitate', 'animation' => 'animate-diamond-in-hesitate'], ['name' => 'Diamond Out Center', 'animation' => 'animate-diamond-out-center'], ['name' => 'Diamond Out Hesitate', 'animation' => 'animate-diamond-out-hesitate']],
	    'Polygon' => [['name' => 'Polygon In Opposing Corners', 'animation' => 'animate-polygon-in-opposing-corners'], ['name' => 'Polygon Out Opposing Corners', 'animation' => 'animate-polygon-out-opposing-corners']],
	];

	// Sorting function for animations by 'name'
	function sortByName($a, $b)
	{
	    return strcmp($a['name'], $b['name']);
	}

	// Sort categories by their names (keys)
	ksort($Animations);

	// Loop through each category and sort the animations by 'name'
	foreach ($Animations as $key => $category) {
	    usort($Animations[$key], 'sortByName');
	}
@endphp

<x-app-layout title="Animations">

	<x-grid title="Animations">
		<x-slot name="description">
			Animations are a great way to add visual interest to your website. They can be used to draw attention to important elements, create a sense of movement, or simply make your site more engaging. In this section, you will find a collection of animations that you can use in your projects.
		</x-slot>

		<x-grid.item title="Animation Square">
			<div class="animation-square size-28 bg-highlight animation-iteration-infinite flex-center animation-duration-2000 z-50 rounded-lg text-sm text-white"></div>
		</x-grid.item>

	</x-grid>

	<x-slot name="rightSidenav">
		@foreach ($Animations as $category => $items)
			<div class="text-primary mt-3 flex items-center justify-start text-sm">
				{{ $category }}
			</div>
			@foreach ($items as $item)
				<div class="mt-2 flex items-center justify-start pl-2 text-xs transition-colors">
					<button class="text-secondary hover:text-primary" animation-class="{{ $item['animation'] }}">
						{{ $item['name'] }}
					</button>
				</div>
			@endforeach
		@endforeach
	</x-slot>

	@pushOnce('scripts')
		<script>
			const btns = document.querySelectorAll('#right-sidenav button');
			const animeSquare = document.querySelector('.animation-square');
			const title = document.querySelector('#animation-square').children[0];

			let previousAnimationClass = '';

			btns.forEach(btn => {
				const animationClass = btn.getAttribute('animation-class');

				btn.addEventListener('click', () => {
					// Set the title of the animation square
					title.textContent = btn.textContent;

					// Remove the previous animation class
					if (previousAnimationClass) {
						animeSquare.classList.remove(previousAnimationClass);
					}

					// Add the animation class
					animeSquare.classList.add(animationClass);

					// Set the previous animation class
					previousAnimationClass = animationClass;

					// Copy the class name to the clipboard
					// copyToClipboard(animationClass, (message) => {
					// 	console.log(message);
					// });

				})
			});
		</script>
	@endPushOnce

</x-app-layout>
