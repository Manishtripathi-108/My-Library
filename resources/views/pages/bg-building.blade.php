<x-app-layout title="Building BG">

	@pushOnce('styles')
		<style>
			:root {
				--luz1: #cb326d9c;
				--luz2: #7d2658;
				--luz3: #601d44;
				--frame: #070b32;
				--bush: #181b38;
				--dot1: radial-gradient(circle at 50% 50%, var(--bush) 0 0.25vmin, #fff0 calc(0.25vmin + 1px) 100%);
				--dot2: radial-gradient(circle at 50% 50%, var(--bush) 0 0.5vmin, #fff0 calc(0.5vmin + 1px) 100%);
				--dot3: radial-gradient(circle at 50% 50%, var(--bush) 0 1.15vmin, #fff0 calc(1.15vmin + 1px) 100%);
			}

			* {
				transform-style: preserve-3d;
				box-sizing: border-box;
			}

			.page-container {
				margin: 0;
				padding: 0;
				width: 100vw;
				height: 100vh;
				overflow: hidden;
				display: flex;
				align-items: flex-end;
				justify-content: center;
				background: linear-gradient(180deg, #190f2c 5%, #341c5e, #50587e);
			}

			.page-container:before {
				content: "";
				position: absolute;
				width: 100%;
				height: 100%;
				--s1: radial-gradient(0.125vmin 0.125vmin at 50% 50%, #ffffff, #fff0);
				--s2: radial-gradient(0.175vmin 0.175vmin at 50% 50%, #ffffff, #fff0);
				background-image: var(--s1), var(--s1), var(--s1), var(--s2), var(--s2), var(--s1), var(--s2), var(--s1), var(--s2), var(--s1), var(--s2), var(--s1), var(--s2), var(--s1), var(--s1), var(--s2), var(--s2), var(--s1), var(--s1), var(--s2), var(--s1), var(--s1);
				background-repeat: repeat-x;
				background-size: 26% 25%, 43.33% 33.33%, 50% 80%, 20% 20%, 33.33% 75.33%, 26% 73%, 39.33% 22%, 33.33% 26%, 31% 32%, 14.33% 35.33%, 18.33% 62.33%, 39.33% 86.33%, 29.33% 69%, 12.33% 30.33%, 29.33% 41.33%, 22.33% 46.33%, 35.33% 27.33%, 22.33% 39.33%, 20.33% 44.33%, 33.33% 56.33%;
				filter: drop-shadow(0px 0px 2px #fff) drop-shadow(0px 0px 5px #fff);
				background-position: -8% -10%;
			}

			.content {
				width: 80vmin;
				height: 100vh;
				/* box-shadow: 0 0 0 100vmax #232323; */
				/*transform: rotateY(-8deg);*/
				display: flex;
				align-items: flex-end;
				justify-content: center;
			}

			.content:before {
				content: "";
				position: absolute;
				width: 20vmin;
				height: 20vmin;
				bottom: 77vmin;
				margin-left: 80vmin;
				border-radius: 100%;
				background: radial-gradient(circle at 50% 50%, #fdfdfd 0% 7vmin, #ffffff00 7.25vmin 100%), #fff;
				box-shadow: 0 0 6em 3em #6493a9, 0 0 8em -16em #ff660000 inset, 0 0 20px 5px #fdfdfd;
				mix-blend-mode: exclusion;
			}

			.content:after {
				content: "";
				background: radial-gradient(circle at 0% 40%, #efefef91 0% 60%, #e9e9e9 75% 100%);
				width: 5vmin;
				height: 5vmin;
				position: absolute;
				bottom: 87vmin;
				left: 74vmin;
				border-radius: 100%;
				filter: blur(1px);
				box-shadow: 2vmin 5vmin 0vmin -0.65vmin currentColor05, 1.82vmin 4.95vmin 0vmin -1vmin #ffffff;
			}

			.cuboid {
				--width: 20;
				--depth: 20;
				--height: 20;
				--hue: 235;
				--sat: 25%;
				height: calc(var(--height) * 1vmin);
				width: calc(var(--width) * 1vmin);
				position: absolute;
				animation: cube1 0.6s linear 0s infinite;
				transform: rotateY(-8deg) rotateX(5deg) translateZ(-24vmin);
			}

			.cuboid .side {
				position: absolute;
				top: 50%;
				left: 50%;
				height: 100%;
				width: 100%;
				border-radius: 1px;
			}

			.cuboid .side:nth-of-type(1) {
				--sat: 40%;
				transform: translate3d(-50%, -50%, calc(var(--depth) * 0.5vmin));
				background: hsl(var(--hue), var(--sat), 18%);
			}

			.cuboid .side:nth-of-type(2) {
				transform: translate3d(-50%, -50%, calc(var(--depth) * -0.5vmin)) rotateY(180deg);
				background: hsl(var(--hue), var(--sat), 35%);
			}

			.cuboid .side:nth-of-type(3) {
				width: calc(var(--depth) * 1vmin);
				transform: translate(-50%, -50%) rotateY(90deg) translate3d(0, 0, calc(var(--width) * 0.5vmin));
				background: hsl(var(--hue), var(--sat), 35%);
			}

			.cuboid .side:nth-of-type(4) {
				width: calc(var(--depth) * 1vmin);
				transform: translate(-50%, -50%) rotateY(-90deg) translate3d(0, 0, calc(var(--width) * 0.5vmin));
				background: hsl(var(--hue), var(--sat), 40%);
			}

			.cuboid .side:nth-of-type(5) {
				--sat: 60%;
				height: calc(var(--depth) * 1vmin);
				transform: translate(-50%, -50%) rotateX(90deg) translate3d(0, 0, calc(var(--height) * 0.5vmin));
				background: hsl(var(--hue), var(--sat), 10%);
			}

			.cuboid .side:nth-of-type(6) {
				--sat: 60%;
				height: calc(var(--depth) * 1vmin);
				transform: translate(-50%, -50%) rotateX(-90deg) translate3d(0, 0, calc(var(--height) * 0.5vmin));
				background: hsl(var(--hue), var(--sat), 10%);
			}

			/*** FLOOR ***/
			.cuboid.floor {
				--width: 40;
				--depth: 89;
				--height: 8;
				bottom: -5vmin;
				left: 16vmin;
				--lines-front: repeating-linear-gradient(90deg, var(--luz1) 0% calc(100% - 0.275vmin), var(--frame) calc(100% - 0.275vmin) 100%);
				--lines-side: repeating-linear-gradient(90deg, var(--luz1) 0% calc(100% - 1.5vmin), var(--frame) calc(100% - 1.5vmin) 100%);
			}

			.cuboid.floor .side {
				border: 3px solid var(--frame);
			}

			/*** ROOF ***/
			.cuboid.roof {
				--height: 3;
				--width: 42;
				--depth: 100;
				bottom: 3vmin;
				left: 16vmin;
				transform: rotateY(-8deg) rotateX(5deg) translateZ(-18vmin);
			}

			.cuboid.floor.two {
				bottom: 5vmin;
			}

			.cuboid.roof.two {
				bottom: 13vmin;
			}

			.cuboid.floor.three {
				bottom: 15vmin;
			}

			.cuboid.roof.three {
				bottom: 23vmin;
			}

			.cuboid.floor.four {
				bottom: 25vmin;
			}

			.cuboid.roof.four {
				bottom: 33vmin;
			}

			.cuboid.floor.five {
				bottom: 35vmin;
			}

			.cuboid.roof.five {
				bottom: 43vmin;
			}

			.cuboid.floor.six {
				bottom: 45vmin;
			}

			.cuboid.roof.six {
				bottom: 53vmin;
			}

			.cuboid.floor.seven {
				bottom: 55vmin;
			}

			.cuboid.roof.seven {
				bottom: 63vmin;
			}

			.cuboid.floor.eight {
				bottom: 65vmin;
			}

			.cuboid.roof.eight {
				bottom: 73vmin;
			}

			.cuboid.floor .side:nth-of-type(1) {
				background: conic-gradient(from 116deg at 0 0, var(--luz2) 0 25%, #fff0 0 100%), linear-gradient(31deg, #fff0 60%, var(--luz2) 61%), linear-gradient(31deg, #fff0 20%, var(--luz2) 21%), linear-gradient(31deg, #fff0 65%, var(--luz2) 21%), linear-gradient(90deg, var(--luz1) 19.5%, transparent 19.5% 20%, var(--luz1) 20.5% 39.5%, transparent 40% 61%, #b4316a 61% 80.25%, #fff0 80% 81%, var(--luz1) 81% 100%);
				background-size: 2.5% 51%, 19.5% 100%, 19.5% 100%, 19.5% 100%, 100% 100%;
				background-repeat: no-repeat;
				background-position: 79.75% 100%, 0 0, 25% 0, 75.4% 0, 0 0;
			}

			.cuboid.floor .side:nth-of-type(3) {
				background: var(--lines-side), hsl(var(--hue) var(--sat) 75% / 0.5);
				background-size: 35.45% 100%;
			}

			.cuboid.floor .side:nth-of-type(4) {
				background: var(--lines-side), hsl(var(--hue) var(--sat) 40% / 0.5);
				background-size: 35.45% 100%;
			}

			/*** AIR COOLER ***/
			.cuboid.air-cooler {
				--height: 3.9;
				--width: 10;
				--depth: 52;
				bottom: 78.5vmin;
				left: 25vmin;
			}

			.cuboid.air-cooler+.cuboid.air-cooler {
				--height: 2.4;
				--width: 5;
				--depth: 52;
				bottom: 78.5vmin;
				left: 42vmin;
			}

			.cuboid.air-cooler .side:nth-of-type(1) {
				border: 1px solid #0002;
			}

			.cuboid.air-cooler .side:nth-of-type(1):before {
				content: "";
				width: calc(100% - 1vmin);
				height: calc(100% - 1vmin);
				position: absolute;
				background: repeating-linear-gradient(180deg, #000, #0a0d29, #434770);
				margin: 0.5vmin;
				background-size: 100% 25%;
			}

			/* persianas */
			.cuboid.floor .side:nth-of-type(1):before,
			.cuboid.floor .side:nth-of-type(1):after,
			.cuboid.floor .side:nth-of-type(3):before,
			.cuboid.floor .side:nth-of-type(3):after {
				position: absolute;
				content: "";
				width: 40%;
				height: 100%;
				left: 20%;
				background: repeating-linear-gradient(180deg, #101010, transparent), repeating-linear-gradient(90deg, #383e70 0 calc(100% - 0.25vmin), var(--frame) calc(100% - 0.25vmin) 100%);
				background-size: 100% 0.365vmin, 8vmin 100%;
			}

			.cuboid.floor .side:nth-of-type(1):after {
				width: 20%;
				left: 80.25%;
			}

			.cuboid.floor.two .side:nth-of-type(1):before {
				width: 59.5%;
				left: 40.75%;
				box-shadow: 0.2vmin 0.5vmin 0.25vmin 0.25vmin #0006 inset;
			}

			.cuboid.floor.two .side:nth-of-type(1):after {
				width: 20%;
				left: -1px;
				box-shadow: none;
				box-shadow: 0vmin 0.65vmin 0.25vmin 0.25vmin #0006 inset;
				background-color: #3d4176;
			}

			/* luces */
			span {
				background: linear-gradient(32deg, #fff0 17%, var(--luz2) 19%), var(--luz1);
				position: absolute;
				width: 20%;
				height: 100%;
				left: 20%;
			}

			.cuboid.floor.one .side:nth-of-type(1):before,
			.cuboid.floor.one .side:nth-of-type(1):after {
				box-shadow: 0vmin 0.65vmin 0.25vmin 0.25vmin #0006 inset;
			}

			.cuboid.floor.one .side:nth-of-type(1):after {
				box-shadow: 0vmin 0.65vmin 0.25vmin 0.25vmin #0006 inset, -7.75vmin 0 0 0 #0a0a0a;
			}

			.cuboid.floor.two .side span:before,
			.cuboid.floor.five .side span:before {
				content: "";
				position: absolute;
				width: calc(100% + 2px);
				height: 30%;
				top: -1px;
				left: -1px;
				background: repeating-linear-gradient(180deg, black, #383e70);
				background-size: 100% 0.35vmin;
				box-shadow: 0.01vmin 0.75vmin 0.15vmin 0.125vmin #0005 inset;
			}

			.cuboid.floor.three .side:nth-of-type(1):after {
				background: #1c1f3e;
				left: 40.25%;
				width: 19.75%;
				box-shadow: 0.2vmin 0.525vmin 0.5vmin 0.125vmin #0006 inset;
			}

			.cuboid.floor.three .side:nth-of-type(1):before {
				display: none;
			}

			.cuboid.floor.four .side:nth-of-type(1):before,
			.cuboid.floor.eight .side:nth-of-type(1):before {
				position: absolute;
				content: "";
				width: 60%;
				height: 100%;
				left: 40%;
				--luz1: #434770;
				--lines-front: repeating-linear-gradient(90deg, var(--luz1) 0% calc(100% - 0.275vmin), var(--frame) calc(100% - 0.275vmin) 100%);
				background: repeating-linear-gradient(90deg, black, transparent), linear-gradient(91deg, #fff0 35%, #000 calc(36% + 1px) 52%, #fff0 52%), linear-gradient(-91deg, #fff0 36%, #000 calc(37% + 1px) 55%, #fff0 55%), var(--lines-front), repeating-linear-gradient(90deg, #364e69, #141f59);
				background-size: 0.35vmin 100%, 100% 100%, 100% 100%, 33.6% 100%, 4% 100%;
				z-index: 1;
			}

			.cuboid.floor.four .side:nth-child(1):after {
				box-shadow: 0.05vmin 0.7vmin 0.25vmin 0.125vmin #0006 inset, 7.5vmin -7.3vmin 0 0 #0a0d29;
				left: -1px;
				width: 81%;
			}

			.cuboid.floor.four .side:nth-of-type(1):before {
				background: repeating-linear-gradient(90deg, black, transparent), linear-gradient(94deg, #fff0 41%, #000 calc(42% + 1px) 52%, #fff0 52%), linear-gradient(-95deg, #fff0 45%, #000 calc(46% + 1px) 55%, #fff0 55%), var(--lines-front), repeating-linear-gradient(90deg, #364e69, #141f59);
				background-size: 0.375vmin 100%, 100% 100%, 100% 100%, 33.6% 100%, 4% 100%;
				left: 0;
			}

			.cuboid.floor.five .side:nth-of-type(1):before {
				width: 19.25%;
				left: 40.75%;
			}

			.cuboid.floor.five .side:nth-of-type(1):after {
				display: none;
			}

			.cuboid.roof.five .side:nth-child(-n+4):before {
				content: "";
				position: absolute;
				width: 100%;
				height: 3vmin;
				top: -3vmin;
				background: var(--dot3), var(--dot2), var(--dot1), var(--dot1), var(--dot1), var(--dot1), var(--dot1), var(--dot1);
				background-position: -16.2vmin 1.825vmin, -16.7vmin 0.5vmin, -15.72vmin 0.65vmin, -17.57vmin 0.5vmin, -17.2vmin 0.25vmin, -16.5vmin 0.1vmin, -17.4vmin 0.95vmin, -15.175vmin 0.95vmin;
				background-repeat: no-repeat;
				filter: drop-shadow(16px 0px 0px var(--bush)) drop-shadow(24vmin 0px 0px var(--bush)) drop-shadow(8vmin 0px 0px var(--bush));
			}

			.cuboid.floor.six .side:nth-of-type(1):before {
				left: -0.1vmin;
				box-shadow: 0.025vmin 0.7vmin 0.25vmin 0.125vmin #0006 inset;
				width: 40.25%;
				background: repeating-linear-gradient(90deg, #101010, transparent), repeating-linear-gradient(90deg, #383e70 0 calc(100% - 0.25vmin), var(--frame) calc(100% - 0.25vmin) 100%);
				background-size: 0.25vmin 100%, 8vmin 100%;
			}

			.cuboid.floor.six .side:nth-of-type(1):after {
				left: 60%;
				width: 40%;
				background: repeating-linear-gradient(90deg, #101010, transparent), repeating-linear-gradient(90deg, #383e70 0 calc(100% - 0.25vmin), var(--frame) calc(100% - 0.25vmin) 100%);
				background-size: 0.25vmin 100%, 8vmin 100%;
			}

			.cuboid.floor.six .side span {
				left: 40.5%;
				width: 19%;
				background: #0a0a0a;
			}

			.cuboid.floor.seven .side:nth-of-type(1):after {
				display: none;
			}

			.cuboid.floor.seven .side:nth-of-type(1):before {
				box-shadow: 0.15vmin 0.65vmin 0.25vmin 0.125vmin #0006 inset;
			}

			.cuboid.floor.eight .side:nth-of-type(1):after {
				width: 60%;
				left: 40%;
				box-shadow: 0.025vmin 0.65vmin 0.5vmin 0.25vmin #0006 inset;
				background: repeating-linear-gradient(180deg, black, transparent);
				background-size: 100% 4%;
			}

			/***  RIGHT SIDE  ***/
			.cuboid.floor .side:nth-of-type(3):before,
			.cuboid.floor .side:nth-of-type(3):after {
				width: 33.95%;
				box-shadow: 0.025vmin 1.75vmin 0.4vmin 0.125vmin #0006 inset;
				background-size: 100% 0.365vmin, 33vmin 100%;
				filter: brightness(1.25);
			}

			.cuboid.floor.one .side:nth-of-type(3):before,
			.cuboid.floor.two .side:nth-of-type(3):before {
				left: 0;
			}

			.cuboid.floor.one .side:nth-of-type(3):after,
			.cuboid.floor.two .side:nth-of-type(3):after {
				left: 35.25%;
			}

			.cuboid.floor.three .side:nth-of-type(3):before,
			.cuboid.floor.three .side:nth-of-type(3):after {
				left: 70.75%;
				width: 29.25%;
			}

			.cuboid.floor.four .side:nth-of-type(3):before,
			.cuboid.floor.four .side:nth-of-type(3):after {
				left: 35.25%;
				background: repeating-linear-gradient(90deg, #1d1e26, transparent), repeating-linear-gradient(90deg, #383e70 0 calc(100% - 0.25vmin), var(--frame) calc(100% - 0.25vmin) 100%);
				background-size: 2.5vmin 100%, 33vmin 100%;
			}

			.cuboid.floor.five .side:nth-of-type(3):before,
			.cuboid.floor.seven .side:nth-of-type(3):before {
				left: 35.25%;
				width: 34.25%;
				top: -1px;
				background: #1e223e;
				box-shadow: -1.975vmin 1.75vmin 1.5vmin 0.125vmin #0005 inset, 0.025vmin 1.75vmin 0.4vmin 0.125vmin #0002 inset;
			}

			.cuboid.floor.five .side:nth-of-type(3):after,
			.cuboid.floor.seven .side:nth-of-type(3):after {
				left: 70.75%;
				width: 29.25%;
				top: -1px;
				background: #1e223e;
				box-shadow: -1.975vmin 1.75vmin 1.5vmin 0.125vmin #0005 inset, 0.025vmin 1.75vmin 0.4vmin 0.125vmin #0002 inset;
			}

			.cuboid.roof.five .side:nth-child(3):before {
				filter: drop-shadow(3vmin 0px 0px var(--bush)) drop-shadow(6vmin 0px 0px var(--bush)) drop-shadow(10vmin 0px 0px var(--bush)) drop-shadow(-30vmin 0px 0px var(--bush)) drop-shadow(30vmin 1px 0px var(--bush)) drop-shadow(25px -2px 0px var(--bush)) drop-shadow(25px 0px 0px var(--bush));
			}

			.cuboid.floor.six .side:nth-of-type(3):before,
			.cuboid.floor.six .side:nth-of-type(3):after {
				left: 0;
				background: repeating-linear-gradient(90deg, #1d1e26, transparent), repeating-linear-gradient(90deg, #383e70 0 calc(100% - 0.25vmin), var(--frame) calc(100% - 0.25vmin) 100%);
				background-size: 1.85vmin 100%, 33vmin 100%;
			}

			.cuboid.floor.six .side:nth-of-type(3):after {
				left: 35.25%;
			}

			.cuboid.floor.eight .side:nth-of-type(3):before {
				left: 0;
				background: repeating-linear-gradient(90deg, #101010, transparent), repeating-linear-gradient(90deg, #383e70 0 calc(100% - 0.25vmin), var(--frame) calc(100% - 0.25vmin) 100%);
				background-size: 2.55vmin 100%, 33vmin 100%;
			}

			.cuboid.floor.eight .side:nth-of-type(3):after {
				left: 64vmin;
				bottom: -19.85vmin;
				width: 29.65%;
				background: repeating-linear-gradient(90deg, #1d1e26, transparent), repeating-linear-gradient(90deg, #383e70 0 calc(100% - 0.25vmin), var(--frame) calc(100% - 0.25vmin) 100%);
				background-size: 1.85vmin 100%, 33vmin 100%;
			}

			/*** MAN ***/
			i.man {
				background: radial-gradient(circle at 50% 0.4vmin, var(--bush) 0 0.35vmin, #fff0 calc(0.35vmin + 1px) 100%), radial-gradient(circle at 50% 0.35vmin, #0c0d1c 0 0.35vmin, #fff0 calc(0.35vmin + 1px) 100%), conic-gradient(from 137deg at 50% 0.51vmin, var(--bush) 0 25%, #fff0 0 100%);
				width: 1.5vmin;
				height: 3.5vmin;
				position: absolute;
				bottom: 1.25vmin;
				left: 10.5vmin;
				z-index: 1;
				transform: rotate(-1deg);
				border-radius: 1vmin 100% 0 0;
			}

			i.man:before {
				content: "";
				background: var(--bush);
				width: 1vmin;
				height: 1vmin;
				border-radius: 0.3vmin;
				position: absolute;
				bottom: 1.25vmin;
				left: -0.25vmin;
				transform: rotate(55deg);
			}

			i.man:after {
				content: "";
			}

			/*** CAT ***/
			i.cat {
				background: radial-gradient(circle at 50% 26%, var(--bush) 0 0.35vmin, #fff0 calc(0.35vmin + 1px) 100%), conic-gradient(from 125deg at 100% 0, var(--bush) 0 25%, #fff0 0 100%), conic-gradient(from 136deg at 0 0, var(--bush) 0 25%, #fff0 0 100%);
				width: 0.75vmin;
				height: 2.5vmin;
				position: absolute;
				bottom: 1.25vmin;
				left: 2.3vmin;
				transform: scale(0.85);
			}

			i.cat:before {
				content: "";
				background: var(--bush);
				width: 1.8vmin;
				height: 1.95vmin;
				border-radius: 100% 39% 0 0;
				position: absolute;
				bottom: -0.35vmin;
				left: -1vmin;
			}

			i.cat:after {
				content: "";
				background: #fff0;
				width: 1.65vmin;
				height: 1.75vmin;
				border-radius: 100%;
				border-left: 0.35vmin solid var(--bush);
				border-bottom: 0.35vmin solid #fff0;
				border-top: 0.15vmin solid #fff0;
				position: absolute;
				bottom: 0.15vmin;
				left: -1.25vmin;
				transform: rotate(-20deg);
			}

			i.cat+i.cat {
				transform: rotateY(180deg) scale(0.9);
				left: 4vmin;
			}

			i.cat+i.cat:after {
				transform: rotate(-27deg) rotateY(180deg);
				left: -2.6vmin;
				bottom: -0.2vmin;
			}

			/*** FLOWERS ***/
			i.flowers {
				background: var(--luz3);
				width: 70%;
				height: 1vmin;
				position: absolute;
				bottom: 1vmin;
				left: 15%;
			}

			i.flowers:before {
				content: "";
				position: absolute;
				background: var(--luz3);
				width: 0.75vmin;
				height: 2vmin;
				bottom: 0;
				left: 60%;
			}

			i.flowers:after {
				content: "";
				position: absolute;
				background: conic-gradient(from -22deg at 50% 100%, var(--luz3) 0 2%, #fff0 0 5%, var(--luz3) 0 7%, #fff0 0 10%, var(--luz3) 0 12%, #fff0 0 100%),
					radial-gradient(circle at 50% 0.25vmin, var(--luz3) 0 0.25vmin, #fff0 0 100%),
					radial-gradient(circle at 25% 0.45vmin, var(--luz3) 0 0.25vmin, #fff0 0 100%),
					radial-gradient(circle at 80% 0.4vmin, var(--luz3) 0 0.25vmin, #fff0 0 100%);
				width: 1.5vmin;
				height: 1.5vmin;
				bottom: 1.5vmin;
				left: 52%;
			}

			/*** CACTUS ***/
			i.cactus {
				background: var(--bush);
				width: 0.85vmin;
				height: 2vmin;
				position: absolute;
				bottom: 3vmin;
				left: 3px;
				border-radius: 100% 100% 10% 45%;
				transform: rotate(-2deg);
			}

			i.cactus:before {
				content: "";
				position: absolute;
				background: var(--bush);
				width: 0.75vmin;
				height: 2vmin;
				bottom: 1.4vmin;
				left: -0.35vmin;
				border-radius: 100%;
			}

			i.cactus:after {
				content: "";
				position: absolute;
				background: var(--bush);
				width: 0.5vmin;
				height: 1.5vmin;
				bottom: 3vmin;
				left: 0.075vmin;
				border-radius: 100%;
				box-shadow: -0.6vmin 0.2vmin 0 -0.075vmin var(--bush), 0.4vmin 1.5vmin 0 -0.075vmin var(--bush);
			}

			.cuboid.roof.six .cactus {
				left: 93%;
				transform: rotateY(60deg) rotate(-5deg);
				border-radius: 0% 50%;
				filter: drop-shadow(-2px 1px 0px #434770);
			}

			/*** bush ***/
			i.bush {
				background: var(--bush);
				width: 0.95vmin;
				height: 2vmin;
				position: absolute;
				bottom: 3vmin;
				left: 3px;
				border-radius: 100% 100% 10% 45%;
				transform: rotate(-2deg);
			}

			i.bush:before {
				content: "";
				position: absolute;
				background: var(--bush);
				width: 0.5vmin;
				height: 1.25vmin;
				bottom: 0.4vmin;
				left: -0.3vmin;
				border-radius: 100%;
				transform: rotate(-24deg);
			}

			i.bush:after {
				content: "";
				position: absolute;
				background: var(--bush);
				width: 0.5vmin;
				height: 1.5vmin;
				bottom: 1.7vmin;
				left: 0.075vmin;
				border-radius: 100%;
				box-shadow: -0.36vmin 0.5vmin 0 -0.075vmin var(--bush), 0.4vmin 0.75vmin 0 -0.025vmin var(--bush), 0.3vmin 0.25vmin 0 -0.025vmin var(--bush);
			}

			.cuboid.roof.two .side:nth-child(3) i.bush {
				left: 91%;
				bottom: 2.95vmin;
				transform: rotateY(128deg);
				border-radius: 100% 100% 10% 40%;
				filter: drop-shadow(-2px -1px 0px #5a5d85);
			}
		</style>
	@endPushOnce

    {{-- -------------------------------------------------------------------------- --}}
    {{--                                    HTML                                    --}}
    {{-- -------------------------------------------------------------------------- --}}

	<div class="page-container">
	    <div class="content">
    
    		<div class="cuboid floor one">
    			<div class="side"></div>
    			<div class="side"></div>
    			<div class="side"></div>
    			<div class="side"></div>
    			<div class="side"></div>
    			<div class="side"></div>
    		</div>
    		<div class="cuboid roof one">
    			<div class="side"><i class="cactus"></i></div>
    			<div class="side"></div>
    			<div class="side"></div>
    			<div class="side"></div>
    			<div class="side"></div>
    			<div class="side"></div>
    		</div>
    		<div class="cuboid floor two">
    			<div class="side"><span><i class="flowers"></i></span></div>
    			<div class="side"></div>
    			<div class="side"></div>
    			<div class="side"></div>
    			<div class="side"></div>
    			<div class="side"></div>
    		</div>
    		<div class="cuboid roof two">
    			<div class="side"><i class="bush"></i></div>
    			<div class="side"></div>
    			<div class="side"></div>
    			<div class="side"></div>
    			<div class="side"></div>
    			<div class="side"></div>
    		</div>
    		<div class="cuboid floor three">
    			<div class="side"></div>
    			<div class="side"></div>
    			<div class="side"></div>
    			<div class="side"></div>
    			<div class="side"></div>
    			<div class="side"></div>
    		</div>
    		<div class="cuboid roof three">
    			<div class="side"></div>
    			<div class="side"></div>
    			<div class="side"></div>
    			<div class="side"></div>
    			<div class="side"></div>
    			<div class="side"></div>
    		</div>
    		<div class="cuboid floor four">
    			<div class="side"><i class="man"></i></div>
    			<div class="side"></div>
    			<div class="side"></div>
    			<div class="side"></div>
    			<div class="side"></div>
    			<div class="side"></div>
    		</div>
    		<div class="cuboid roof four">
    			<div class="side"></div>
    			<div class="side"></div>
    			<div class="side"></div>
    			<div class="side"></div>
    			<div class="side"></div>
    			<div class="side"></div>
    		</div>
    		<div class="cuboid floor five">
    			<div class="side"><span></span></div>
    			<div class="side"></div>
    			<div class="side"></div>
    			<div class="side"></div>
    			<div class="side"></div>
    			<div class="side"></div>
    		</div>
    		<div class="cuboid roof five">
    			<div class="side"></div>
    			<div class="side"></div>
    			<div class="side"><i class="cactus"></i></div>
    			<div class="side"></div>
    			<div class="side"></div>
    			<div class="side"></div>
    		</div>
    		<div class="cuboid floor six">
    			<div class="side"><span><i class="cat"></i><i class="cat"></i></span></div>
    			<div class="side"></div>
    			<div class="side"></div>
    			<div class="side"></div>
    			<div class="side"></div>
    			<div class="side"></div>
    		</div>
    		<div class="cuboid roof six">
    			<div class="side"></div>
    			<div class="side"></div>
    			<div class="side"></div>
    			<div class="side"></div>
    			<div class="side"></div>
    			<div class="side"></div>
    		</div>
    		<div class="cuboid floor seven">
    			<div class="side"></div>
    			<div class="side"></div>
    			<div class="side"></div>
    			<div class="side"></div>
    			<div class="side"></div>
    			<div class="side"></div>
    		</div>
    		<div class="cuboid roof seven">
    			<div class="side"></div>
    			<div class="side"></div>
    			<div class="side"></div>
    			<div class="side"></div>
    			<div class="side"></div>
    			<div class="side"></div>
    		</div>
    		<div class="cuboid floor eight">
    			<div class="side"></div>
    			<div class="side"></div>
    			<div class="side"></div>
    			<div class="side"></div>
    			<div class="side"></div>
    			<div class="side"></div>
    		</div>
    		<div class="cuboid roof eight">
    			<div class="side"></div>
    			<div class="side"></div>
    			<div class="side"></div>
    			<div class="side"></div>
    			<div class="side"></div>
    			<div class="side"></div>
    		</div>
    		<div class="cuboid air-cooler">
    			<div class="side"></div>
    			<div class="side"></div>
    			<div class="side"></div>
    			<div class="side"></div>
    			<div class="side"></div>
    			<div class="side"></div>
    		</div>
    		<div class="cuboid air-cooler">
    			<div class="side"></div>
    			<div class="side"></div>
    			<div class="side"></div>
    			<div class="side"></div>
    			<div class="side"></div>
    			<div class="side"></div>
    		</div>
    
    	</div>
	</div>

</x-app-layout>
