@pushOnce('styles')
	<style>
		input[type="checkbox"]::after {
			content: url({{ asset('images/logo.svg') }});
		}
	</style>
@endPushOnce

<div class="neu-inset-checkbox"></div>
