@props(['type' => 1])

@switch ($type)
	@case(1)
		<div class="flex-center max-w-96 flex-col">
			<img class="w-full object-cover" src="{{ asset('images/landscape/anime-one-piece.png') }}" alt="" lazy>
			<div class="flex w-full drop-shadow-lg dark:drop-shadow-[0_0_10px_#FFE9D030]">
				<div class="notebook-page bg-primary flex flex-col overflow-hidden rounded-md bg-no-repeat pl-8 leading-5">
					<div class="p-5">
						<h2 class="text-primary my-5 font-playfair text-base font-bold tracking-wider">One Piece</h2>
						<div class="*:my-5 text-secondary">
							<p>"Power isn't determined by your size, but the size of your heart and dreams." — Monkey D. Luffy</p>
							<p>"When the world shoves you around, you just gotta stand up and shove back." — Roronoa Zoro</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	@break

	@case(2)
		<div class="flex min-h-fit p-4 drop-shadow-lg dark:drop-shadow-[0_0_10px_#FFE9D030]">
			<div class="notebook-page notebook-page-mask bg-primary flex flex-col overflow-hidden rounded-md bg-no-repeat pl-8 leading-5">
				<div class="before:bg-primary after:bg-primary relative h-64 px-5 pt-5 before:absolute before:right-1/3 before:top-0 before:h-11 before:w-5 before:rotate-45 before:opacity-60 after:absolute after:-bottom-5 after:left-1/3 after:h-11 after:w-5 after:-rotate-45 after:opacity-60">
					<img class="h-full w-full object-cover" src="{{ asset('images/landscape/man-staring-ghost.png') }}" alt="" lazy>
				</div>
				<div class="p-5">
					<h2 class="text-primary my-5 font-playfair text-base font-bold tracking-wider">Man Staring Ghost</h2>
					<div class="*:my-5 text-secondary">
						<p>"Ghosts are not to be feared; they are simply echoes of what once was." — Unknown</p>
						<p>"The bravest thing you can do is face your own darkness." — Unknown</p>
					</div>
				</div>
			</div>
		</div>
	@break

	@default
		<div class="flex-center max-w-96 flex-col">
			<img class="w-full object-cover" src="{{ asset('images/landscape/anime-one-piece.png') }}" alt="" lazy>
			<div class="flex w-full drop-shadow-lg dark:drop-shadow-[0_0_10px_#FFE9D030]">
				<div class="notebook-page bg-primary flex flex-col overflow-hidden rounded-md bg-no-repeat pl-8 leading-5">
					<div class="p-5">
						<h2 class="text-primary my-5 font-playfair text-base font-bold tracking-wider">One Piece</h2>
						<div class="*:my-5 text-secondary">
							<p>"Power isn't determined by your size, but the size of your heart and dreams." — Monkey D. Luffy</p>
							<p>"When the world shoves you around, you just gotta stand up and shove back." — Roronoa Zoro</p>
						</div>
					</div>
				</div>
			</div>
		</div>
@endswitch
