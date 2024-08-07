@pushOnce('styles')
	<style>
		.container {
			display: flex;
			align-items: center;
			justify-content: center;
		}

		.inner-skew {
			width: 200px;
			height: 250px;
			border-radius: 20px;
			background: linear-gradient(170deg, rgba(58, 56, 56, 0.623) 0%, rgb(31, 31, 31) 100%);
			position: relative;
			box-shadow: 0 25px 50px rgba(0, 0, 0, 0.55);
			cursor: pointer;
			transition: all .3s;
		}

		.inner-skew:hover {
			transform: scale(0.9);
		}

		.inner-skew span {
			position: absolute;
			overflow: hidden;
			width: 150px;
			height: 150px;
			top: -10px;
			left: -10px;
			display: flex;
			align-items: center;
			justify-content: center;
		}

		.inner-skew span::before {
			content: 'Premium';
			position: absolute;
			width: 150%;
			height: 40px;
			background-image: linear-gradient(45deg, #ff6547 0%, #ffb144 51%, #ff7053 100%);
			transform: rotate(-45deg) translateY(-20px);
			display: flex;
			align-items: center;
			justify-content: center;
			color: #fff;
			font-weight: 600;
			letter-spacing: 0.1em;
			text-transform: uppercase;
			box-shadow: 0 5px 10px rgba(0, 0, 0, 0.23);
		}

		.inner-skew span::after {
			content: '';
			position: absolute;
			width: 10px;
			bottom: 0;
			left: 0;
			height: 10px;
			z-index: -1;
			box-shadow: 140px -140px #cc3f47;
			background-image: linear-gradient(45deg, #FF512F 0%, #F09819 51%, #FF512F 100%);
		}
	</style>
@endPushOnce

<div class="container">
	<div class="inner-skew">
		<span></span>
	</div>
</div>

<x-slot name="cssCode">
	<style>
		.container {
			display: flex;
			align-items: center;
			justify-content: center;
		}

		.inner-skew {
			width: 200px;
			height: 250px;
			border-radius: 20px;
			background: linear-gradient(170deg, rgba(58, 56, 56, 0.623) 0%, rgb(31, 31, 31) 100%);
			position: relative;
			box-shadow: 0 25px 50px rgba(0, 0, 0, 0.55);
			cursor: pointer;
			transition: all .3s;
		}

		.inner-skew:hover {
			transform: scale(0.9);
		}

		.inner-skew span {
			position: absolute;
			overflow: hidden;
			width: 150px;
			height: 150px;
			top: -10px;
			left: -10px;
			display: flex;
			align-items: center;
			justify-content: center;
		}

		.inner-skew span::before {
			content: 'Premium';
			position: absolute;
			width: 150%;
			height: 40px;
			background-image: linear-gradient(45deg, #ff6547 0%, #ffb144 51%, #ff7053 100%);
			transform: rotate(-45deg) translateY(-20px);
			display: flex;
			align-items: center;
			justify-content: center;
			color: #fff;
			font-weight: 600;
			letter-spacing: 0.1em;
			text-transform: uppercase;
			box-shadow: 0 5px 10px rgba(0, 0, 0, 0.23);
		}

		.inner-skew span::after {
			content: '';
			position: absolute;
			width: 10px;
			bottom: 0;
			left: 0;
			height: 10px;
			z-index: -1;
			box-shadow: 140px -140px #cc3f47;
			background-image: linear-gradient(45deg, #FF512F 0%, #F09819 51%, #FF512F 100%);
		}
	</style>
</x-slot>
