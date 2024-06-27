@pushOnce('styles')
	<style>
		.body {
			display: flex;
			align-items: center;
			justify-content: center;
			background-color: #ecf0f3;
		}

		.neu-radio-group {
			padding: 48px 64px;
			border-radius: 16px;
			background: #ecf0f3;
			box-shadow:
				4px 4px 4px 0px #d1d9e6 inset,
				-4px -4px 4px 0px #ffffff inset;
		}

		.neu-radio-wrapper {
			margin: 8px 0;
		}

		.neu-radio-state {
			position: absolute;
			top: 0;
			right: 0;
			opacity: 1e-5;
			pointer-events: none;
		}

		.neu-radio-label {
			display: inline-flex;
			align-items: center;
			cursor: pointer;
			color: #394a56;
		}

		.neu-radio-text {
			margin-left: 16px;
			opacity: .6;
			transition: opacity .2s linear, transform .2s ease-out;
		}

		.neu-radio-indicator {
			position: relative;
			border-radius: 50%;
			height: 30px;
			width: 30px;
			box-shadow: -8px -4px 8px 0px #ffffff, 8px 4px 12px 0px #d1d9e6;
			overflow: hidden;
		}

		.neu-radio-indicator::before,
		.neu-radio-indicator::after {
			content: '';
			position: absolute;
			top: 10%;
			left: 10%;
			height: 80%;
			width: 80%;
			border-radius: 50%;
		}

		.neu-radio-indicator::before {
			box-shadow:
				-4px -2px 4px 0px #d1d9e6,
				4px 2px 8px 0px #fff;
		}

		.neu-radio-indicator::after {
			background-color: #ecf0f3;
			box-shadow: -4px -2px 4px 0px #fff, 4px 2px 8px 0px #d1d9e6;
			transform: scale3d(1, 1, 1);
			transition: opacity .25s ease-in-out, transform .25s ease-in-out;
		}

		.neu-radio-state:checked~.neu-radio-label .neu-radio-indicator::after {
			transform: scale3d(.975, .975, 1) translate3d(0, 10%, 0);
			opacity: 0;
		}

		.neu-radio-state:focus~.neu-radio-label .neu-radio-text {
			transform: translate3d(8px, 0, 0);
			opacity: 1;
		}

		.neu-radio-label:hover .neu-radio-text {
			opacity: 1;
		}
	</style>
@endPushOnce

<div class="neu-radio-group">
	<div class="neu-radio-wrapper">
		<input class="neu-radio-state" id="a" name="app" type="radio" value="a">
		<label class="neu-radio-label" for="a">
			<div class="neu-radio-indicator"></div>
			<span class="neu-radio-text">close</span>
		</label>
	</div>
	<div class="neu-radio-wrapper">
		<input class="neu-radio-state" id="b" name="app" type="radio" value="b">
		<label class="neu-radio-label" for="b">
			<div class="neu-radio-indicator"></div>
			<span class="neu-radio-text">remove</span>
		</label>
	</div>
	<div class="neu-radio-wrapper">
		<input class="neu-radio-state" id="c" name="app" type="radio" value="c">
		<label class="neu-radio-label" for="c">
			<div class="neu-radio-indicator"></div>
			<span class="neu-radio-text">delete</span>
		</label>
	</div>
	<div class="neu-radio-wrapper">
		<input class="neu-radio-state" id="d" name="app" type="radio" value="d">
		<label class="neu-radio-label" for="d">
			<div class="neu-radio-indicator"></div>
			<span class="neu-radio-text">all of the above</span>
		</label>
	</div>
</div>
