@pushOnce('styles')
	<style>
		input[type="checkbox"] {
			width: 200px;
			height: 200px;
			appearance: none;
			box-shadow: -10px -10px 15px rgba(255, 255, 255, 0.5),
				10px 10px 15px rgba(70, 70, 70, 0.15);
			border-radius: 50%;
			border: solid 8px #ecf0f3;
			outline: none;
			display: flex;
			justify-content: center;
			align-items: center;
			cursor: pointer;
		}

		input[type="checkbox"]::after {
			content: url({{ asset('images/logo.svg') }});
		}

		input[type="checkbox"]:checked {
			box-shadow: -10px -10px 15px rgba(255, 255, 255, 0.5),
				10px 10px 15px rgba(70, 70, 70, 0.15),
				inset -10px -10px 15px rgba(255, 255, 255, 0.5),
				inset 10px 10px 15px rgba(70, 70, 70, 0.15);
		}

		input[type="checkbox"]:checked::after {
			color: #FF5C58;
		}
	</style>
@endPushOnce

<input type="checkbox">
