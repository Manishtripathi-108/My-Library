<x-app-layout title="Tables">

	<x-grid title="Tables">
		<x-slot name="description">
			Tables are a design pattern for displaying large amounts of data in rows and columns, making them efficient for doing comparative analysis on categorical items. They are commonly used in financial reports, project management reports, and any other reports that require a lot of data to be shown in a tabular format.
		</x-slot>

		<x-grid.item title="Basic Table">
			<table class="bg-primary min-w-full rounded-lg border border-light-secondary shadow-neu-lg dark:border-dark-secondary dark:shadow-neu-dark-lg">
				<thead class="text-primary *:*:font-karla *:*:px-4 *:*:py-3 *:*:tracking-wider *:*:text-left">
					<tr>
						<th class="border-b border-light-secondary dark:border-dark-secondary" id="class" scope="col">Class</th>
						<th class="border-b border-light-secondary dark:border-dark-secondary" id="teacher" scope="col">Homeroom Teacher</th>
						<th class="border-b border-light-secondary dark:border-dark-secondary" id="males" scope="col">Males</th>
						<th class="border-b border-light-secondary dark:border-dark-secondary" id="females" scope="col">Females</th>
					</tr>
				</thead>
				<tbody class="text-secondary *:*:font-karla *:*:px-4 *:*:py-3 *:*:tracking-wide">
					<tr class="hover:bg-secondary">
						<th class="border-b border-light-secondary text-left dark:border-dark-secondary" id="1year" scope="row" rowspan="2">First Year</th>
						<td class="border-b border-light-secondary dark:border-dark-secondary">Shota Aizawa</td>
						<td class="border-b border-light-secondary dark:border-dark-secondary">11</td>
						<td class="border-b border-light-secondary dark:border-dark-secondary">7</td>
					</tr>
					<tr class="hover:bg-secondary">
						<td class="border-b border-light-secondary dark:border-dark-secondary">Kakashi Hatake</td>
						<td class="border-b border-light-secondary dark:border-dark-secondary">8</td>
						<td class="border-b border-light-secondary dark:border-dark-secondary">6</td>
					</tr>
					<tr class="hover:bg-secondary">
						<th class="border-b border-light-secondary text-left dark:border-dark-secondary" id="2year" scope="row" rowspan="3">Second Year</th>
						<td class="border-b border-light-secondary dark:border-dark-secondary">Koro-sensei</td>
						<td class="border-b border-light-secondary dark:border-dark-secondary">10</td>
						<td class="border-b border-light-secondary dark:border-dark-secondary">5</td>
					</tr>
					<tr class="hover:bg-secondary">
						<td class="border-b border-light-secondary dark:border-dark-secondary">All Might</td>
						<td class="border-b border-light-secondary dark:border-dark-secondary">7</td>
						<td class="border-b border-light-secondary dark:border-dark-secondary">8</td>
					</tr>
					<tr class="hover:bg-secondary">
						<td class="border-b border-light-secondary dark:border-dark-secondary">Iruka Umino</td>
						<td class="border-b border-light-secondary dark:border-dark-secondary">6</td>
						<td class="border-b border-light-secondary dark:border-dark-secondary">9</td>
					</tr>
				</tbody>
			</table>

		</x-grid.item>

	</x-grid>

</x-app-layout>
