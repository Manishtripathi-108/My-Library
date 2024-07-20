<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" {{ $attributes->merge(['class' => ' ']) }}>
	<g fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="2">
		<path stroke-dasharray="60" stroke-dashoffset="60" stroke-opacity="0.3" d="M12 3C16.9706 3 21 7.02944 21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3Z">
			<animate values="60;0" values="60;0" values="60;0" values="60;0" fill="freeze" attributeName="stroke-dashoffset" dur="1.3s" />
		</path>
		<path stroke-dasharray="15" stroke-dashoffset="15" d="M12 3C16.9706 3 21 7.02944 21 12">
			<animate values="15;0" values="15;0" values="15;0" values="15;0" fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" />
			<animateTransform type="rotate" values="0 12 12;360 12 12" values="0 12 12;360 12 12" values="0 12 12;360 12 12" values="0 12 12;360 12 12" attributeName="transform" dur="1.5s" repeatCount="indefinite" />
		</path>
	</g>
</svg>
