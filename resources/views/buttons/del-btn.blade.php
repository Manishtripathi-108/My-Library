@pushOnce('styles')
	<style>
		@keyframes paper {

			10%,
			to {
				opacity: 1
			}

			20% {
				transform: translateY(-16px)
			}

			40% {
				transform: translateY(0)
			}

			70%,
			to {
				transform: translateY(24px)
			}
		}

		@keyframes cut {

			0%,
			40% {
				transform: translate(-.5px, -16px) scaleX(.5)
			}

			to {
				transform: translate(-.5px, 24px) scaleX(.5)
			}
		}

		.delButton {
			--background: #2b3044;
			--background-hover: #1e2235;
			--text: #fff;
			--shadow: rgba(0, 9, 61, .2);
			--paper: #5c86ff;
			--paper-lines: #fff;
			--trash: #e1e6f9;
			--trash-lines: #bbc1e1;
			--check: #fff;
			--check-background: #5c86ff;
			position: relative;
			border: 0;
			outline: 0;
			background: 0 0;
			padding: 10px 24px;
			border-radius: 7px;
			min-width: 142px;
			-webkit-appearance: none;
			-webkit-tap-highlight-color: transparent;
			cursor: pointer;
			display: flex;
			color: var(--text);
			background: var(--btn, var(--background));
			box-shadow: 0 var(--shadow-y, 4px) var(--shadow-blur, 8px) var(--shadow);
			transform: scale(var(--scale, 1));
			transition: transform .3s, box-shadow .3s, background .3s
		}

		.delButton span {
			display: block;
			font-size: 14px;
			line-height: 25px;
			font-weight: 600;
			opacity: var(--span-opacity, 1);
			transform: translateX(var(--span-x, 0)) translateZ(0);
			transition: transform .4s ease var(--span-delay, 0.2s), opacity .3s ease var(--span-delay, 0.2s)
		}

		.delButton .trash {
			display: block;
			position: relative;
			left: -8px;
			transform: translate(var(--trash-x, 0), var(--trash-y, 1px)) translateZ(0) scale(var(--trash-scale, 0.64));
			transition: transform .5s
		}

		.delButton .trash:after,
		.delButton .trash:before {
			content: "";
			position: absolute;
			height: 8px;
			width: 2px;
			border-radius: 1px;
			background: var(--icon, var(--trash));
			bottom: 100%;
			transform-origin: 50% 6px;
			transform: translate(var(--x, 3px), 2px) scaleY(var(--sy, 0.7)) rotate(var(--r, 0deg));
			transition: transform .4s, background .3s
		}

		.delButton .trash:before {
			left: 1px
		}

		.delButton .trash:after {
			right: 1px;
			--x: -3px
		}

		.delButton .trash .top {
			position: absolute;
			overflow: hidden;
			left: -4px;
			right: -4px;
			bottom: 100%;
			height: 40px;
			z-index: 1;
			transform: translateY(2px)
		}

		.delButton .trash .top:after,
		.delButton .trash .top:before {
			content: "";
			position: absolute;
			border-radius: 1px;
			background: var(--icon, var(--trash));
			width: var(--w, 12px);
			height: var(--h, 2px);
			left: var(--l, 8px);
			bottom: var(--b, 5px);
			transition: background .3s, transform .4s
		}

		.delButton .trash .top:after {
			--w: 28px;
			--h: 2px;
			--l: 0;
			--b: 0;
			transform: scaleX(var(--trash-line-scale, 1))
		}

		.delButton .trash .top .paper {
			width: 14px;
			height: 18px;
			background: var(--paper);
			left: 7px;
			bottom: 0;
			border-radius: 1px;
			position: absolute;
			transform: translateY(-16px);
			opacity: 0
		}

		.delButton .trash .top .paper:after,
		.delButton .trash .top .paper:before {
			content: "";
			width: var(--w, 10px);
			height: 2px;
			border-radius: 1px;
			position: absolute;
			left: 2px;
			top: var(--t, 2px);
			background: var(--paper-lines);
			transform: scaleY(.7);
			box-shadow: 0 9px 0 var(--paper-lines)
		}

		.delButton .trash .top .paper:after {
			--t: 5px;
			--w: 7px
		}

		.delButton .trash .box {
			width: 20px;
			height: 25px;
			border: 2px solid var(--icon, var(--trash));
			border-radius: 1px 1px 4px 4px;
			position: relative;
			overflow: hidden;
			z-index: 2;
			transition: border-color .3s
		}

		.delButton .trash .box:after,
		.delButton .trash .box:before {
			content: "";
			position: absolute;
			width: 4px;
			height: var(--h, 20px);
			top: 0;
			left: var(--l, 50%);
			background: var(--b, var(--trash-lines))
		}

		.delButton .trash .box:before {
			border-radius: 2px;
			margin-left: -2px;
			transform: translateX(-3px) scale(.6);
			box-shadow: 10px 0 0 var(--trash-lines);
			opacity: var(--trash-lines-opacity, 1);
			transition: transform .4s, opacity .4s
		}

		.delButton .trash .box:after {
			--h: 16px;
			--b: var(--paper);
			--l: 1px;
			transform: translate(-.5px, -16px) scaleX(.5);
			box-shadow: 7px 0 0 var(--paper), 14px 0 0 var(--paper), 21px 0 0 var(--paper)
		}

		.delButton .trash .check {
			padding: 4px 3px;
			border-radius: 50%;
			background: var(--check-background);
			position: absolute;
			left: 2px;
			top: 24px;
			opacity: var(--check-opacity, 0);
			transform: translateY(var(--check-y, 0)) scale(var(--check-scale, 0.2));
			transition: transform var(--check-duration, 0.2s) ease var(--check-delay, 0s), opacity var(--check-duration-opacity, 0.2s) ease var(--check-delay, 0s)
		}

		.delButton .trash .check svg {
			width: 8px;
			height: 6px;
			display: block;
			fill: none;
			stroke-width: 1.5;
			stroke-dasharray: 9px;
			stroke-dashoffset: var(--check-offset, 9px);
			stroke-linecap: round;
			stroke-linejoin: round;
			stroke: var(--check);
			transition: stroke-dashoffset .4s ease var(--checkmark-delay, 0.4s)
		}

		.delButton.delete {
			--span-opacity: 0;
			--span-x: 16px;
			--span-delay: 0s;
			--trash-x: 46px;
			--trash-y: 2px;
			--trash-scale: 1;
			--trash-lines-opacity: 0;
			--trash-line-scale: 0;
			--icon: #fff;
			--check-offset: 0;
			--check-opacity: 1;
			--check-scale: 1;
			--check-y: 16px;
			--check-delay: 1.7s;
			--checkmark-delay: 2.1s;
			--check-duration: 0.55s;
			--check-duration-opacity: 0.3s
		}

		.delButton.delete .trash:after,
		.delButton.delete .trash:before {
			--sy: 1;
			--x: 0
		}

		.delButton.delete .trash:before {
			--r: 40deg
		}

		.delButton.delete .trash:after {
			--r: -40deg
		}

		.delButton.delete .trash .top .paper {
			animation: paper 1.5s linear forwards .5s
		}

		.delButton.delete .trash .box:after {
			animation: cut 1.5s linear forwards .5s
		}

		.delButton.delete,
		.delButton:hover {
			--btn: var(--background-hover);
			--shadow-y: 5px;
			--shadow-blur: 9px
		}

		.delButton:active {
			--shadow-y: 2px;
			--shadow-blur: 5px;
			--scale: 0.94
		}
	</style>
@endPushOnce

<button class="delButton">
	<div class="trash">
		<div class="top">
			<div class="paper"></div>
		</div>
		<div class="box"></div>
		<div class="check">
			<svg viewBox="0 0 8 6">
				<polyline points="1 3.4 2.71428571 5 7 1" </polyline>
			</svg>
		</div>
	</div>
	<span>Delete Item</span>
</button>

@pushOnce('scripts')
	<script>
		document.querySelectorAll('.delButton').forEach(button => button.addEventListener('click', e => {
			if (!button.classList.contains('delete')) {
				button.classList.add('delete');
				setTimeout(() => button.classList.remove('delete'), 3200);
			}
			e.preventDefault();
		}));
	</script>
@endPushOnce
