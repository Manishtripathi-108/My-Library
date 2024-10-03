@php
	$animeContents = [['id' => 1, 'title' => 'Naruto', 'genre' => 'Action/Adventure', 'year' => 2002, 'rating' => '8.0', 'episodes' => 220, 'studio' => 'Pierrot'], ['id' => 2, 'title' => 'Attack on Titan', 'genre' => 'Action/Fantasy', 'year' => 2013, 'rating' => '9.0', 'episodes' => 87, 'studio' => 'Wit Studio'], ['id' => 3, 'title' => 'My Hero Academia', 'genre' => 'Action/Superhero', 'year' => 2016, 'rating' => '8.5', 'episodes' => 138, 'studio' => 'Bones'], ['id' => 4, 'title' => 'Demon Slayer', 'genre' => 'Action/Fantasy', 'year' => 2019, 'rating' => '8.7', 'episodes' => 44, 'studio' => 'Ufotable'], ['id' => 5, 'title' => 'One Piece', 'genre' => 'Adventure', 'year' => 1999, 'rating' => '8.9', 'episodes' => 1000, 'studio' => 'Toei Animation'], ['id' => 6, 'title' => 'Fullmetal Alchemist', 'genre' => 'Adventure/Fantasy', 'year' => 2003, 'rating' => '8.7', 'episodes' => 51, 'studio' => 'Bones']];
@endphp
<x-app-layout title="tables">

	<x-grid title="tables">
		<x-slot name="description">
			Tables are used to display information in a structured manner. They are used to display content in a more organized and visually appealing way.
		</x-slot>

		<x-grid.item title="Table with a Sticky Column">
			<div class="bg-primary w-full max-w-2xl rounded-2xl border border-gray-600 shadow-xl dark:shadow-gray-800">
				<!-- Table heading -->
				<header class="border-b border-gray-600 px-4 py-3">
					<h2 class="text-primary font-semibold">Anime Content Table</h2>
				</header>

				<!-- Table structure -->
				<div class="p-3">
					<div class="scrollbar-thin overflow-x-auto">
						<table class="w-full table-auto">
							<!-- Table header -->
							<thead class="text-secondary text-[13px]">
								<tr>
									<th class="bg-secondary px-5 py-2 first:rounded-l first:pl-3 last:sticky last:right-0 last:rounded-r last:pl-5 last:pr-3">
										<div class="text-left font-medium">Title</div>
									</th>
									<th class="bg-secondary px-5 py-2 first:rounded-l first:pl-3 last:sticky last:right-0 last:rounded-r last:pl-5 last:pr-3">
										<div class="text-left font-medium">Genre</div>
									</th>
									<th class="bg-secondary px-5 py-2 first:rounded-l first:pl-3 last:sticky last:right-0 last:rounded-r last:pl-5 last:pr-3">
										<div class="text-left font-medium">Year</div>
									</th>
									<th class="bg-secondary px-5 py-2 first:rounded-l first:pl-3 last:sticky last:right-0 last:rounded-r last:pl-5 last:pr-3">
										<div class="text-left font-medium">Rating</div>
									</th>
									<th class="bg-secondary px-5 py-2 first:rounded-l first:pl-3 last:sticky last:right-0 last:rounded-r last:pl-5 last:pr-3">
										<div class="text-left font-medium">Episodes</div>
									</th>
									<th class="bg-secondary px-5 py-2 first:rounded-l first:pl-3 last:sticky last:right-0 last:rounded-r last:pl-5 last:pr-3">
										<div class="text-left font-medium">Studio</div>
									</th>
									<th class="bg-secondary px-5 py-2 first:rounded-l first:pl-3 last:sticky last:right-0 last:rounded-r last:pl-5 last:pr-3">
										<div class="text-left font-medium">Action</div>
									</th>
								</tr>
							</thead>

							<!-- Table body -->
							<tbody class="text-primary text-sm font-medium">
								@foreach ($animeContents as $anime)
									<tr>
										<td class="border-b border-gray-600 px-5 py-3 first:pl-3 last:sticky last:right-0 last:border-none last:bg-gradient-to-r last:from-transparent last:to-light-primary last:to-[12px] last:pl-5 last:pr-3 dark:last:to-dark-primary">{{ $anime['title'] }}</td>
										<td class="border-b border-gray-600 px-5 py-3 first:pl-3 last:sticky last:right-0 last:border-none last:bg-gradient-to-r last:from-transparent last:to-light-primary last:to-[12px] last:pl-5 last:pr-3 dark:last:to-dark-primary">{{ $anime['genre'] }}</td>
										<td class="border-b border-gray-600 px-5 py-3 first:pl-3 last:sticky last:right-0 last:border-none last:bg-gradient-to-r last:from-transparent last:to-light-primary last:to-[12px] last:pl-5 last:pr-3 dark:last:to-dark-primary">{{ $anime['year'] }}</td>
										<td class="border-b border-gray-600 px-5 py-3 first:pl-3 last:sticky last:right-0 last:border-none last:bg-gradient-to-r last:from-transparent last:to-light-primary last:to-[12px] last:pl-5 last:pr-3 dark:last:to-dark-primary">{{ $anime['rating'] }}</td>
										<td class="border-b border-gray-600 px-5 py-3 first:pl-3 last:sticky last:right-0 last:border-none last:bg-gradient-to-r last:from-transparent last:to-light-primary last:to-[12px] last:pl-5 last:pr-3 dark:last:to-dark-primary">{{ $anime['episodes'] }}</td>
										<td class="border-b border-gray-600 px-5 py-3 first:pl-3 last:sticky last:right-0 last:border-none last:bg-gradient-to-r last:from-transparent last:to-light-primary last:to-[12px] last:pl-5 last:pr-3 dark:last:to-dark-primary">{{ $anime['studio'] }}</td>
										<td class="border-b border-gray-600 px-5 py-3 first:pl-3 last:sticky last:right-0 last:border-none last:bg-gradient-to-r last:from-transparent last:to-light-primary last:to-[12px] last:pl-5 last:pr-3 dark:last:to-dark-primary">
											<button class="neu-btn" href="#">Edit</button>
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</x-grid.item>

	</x-grid>

</x-app-layout>
