import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],


    theme: {
        extend: {
            animation: {
                'auth-slide-top': 'auth-slide-top 0.7s cubic-bezier(0.73,-0.67,0.27,1.67) forwards',
                'auth-slide-bottom': 'auth-slide-bottom 0.7s cubic-bezier(0.73,-0.67,0.27,1.67) forwards',
                'auth-scale-up-center': 'auth-scale-up-center 0.7s cubic-bezier(0.73,-0.67,0.27,1.67) forwards',
                'auth-scale-down-center': 'auth-scale-down-center 0.7s cubic-bezier(0.73,-0.67,0.27,1.67) forwards',
                'auth-slider': 'auth-slider 1.25s',

                /* ---------------------------------- Space --------------------------------- */
                'space-out-up': 'spaceOutUp 2s',
                'space-out-right': 'spaceOutRight 2s',
                'space-out-down': 'spaceOutDown 2s',
                'space-out-left': 'spaceOutLeft 2s',
                'space-in-up': 'spaceInUp 2s',
                'space-in-right': 'spaceInRight 2s',
                'space-in-down': 'spaceInDown 2s',
                'space-in-left': 'spaceInLeft 2s',

                /* ------------------------------- Perspective ------------------------------ */
                'perspective-down': 'perspectiveDown 2s',
                'perspective-down-return': 'perspectiveDownReturn 2s',
                'perspective-left': 'perspectiveLeft 2s',
                'perspective-left-return': 'perspectiveLeftReturn 2s',
                'perspective-right': 'perspectiveRight 2s',
                'perspective-right-return': 'perspectiveRightReturn 2s',
                'perspective-up': 'perspectiveUp 2s',
                'perspective-up-return': 'perspectiveUpReturn 2s',

                /* ---------------------------------- Rotate --------------------------------- */
                'rotate-down': 'rotateDown 2s',
                'rotate-left': 'rotateLeft 2s',
                'rotate-right': 'rotateRight 2s',
                'rotate-up': 'rotateUp 2s',

                /* ---------------------------------- Slide --------------------------------- */
                'slide-down': 'slideDown 2s',
                'slide-down-return': 'slideDownReturn 2s',
                'slide-left': 'slideLeft 2s',
                'slide-left-return': 'slideLeftReturn 2s',
                'slide-right': 'slideRight 2s',
                'slide-right-return': 'slideRightReturn 2s',
                'slide-up': 'slideUp 2s',
                'slide-up-return': 'slideUpReturn 2s',

                /* ---------------------------------- Open ---------------------------------- */
                'open-down-left': 'openDownLeft 2s',
                'open-down-left-return': 'openDownLeftReturn 2s',
                'open-down-right': 'openDownRight 2s',
                'open-down-right-return': 'openDownRightReturn 2s',
                'open-up-left': 'openUpLeft 2s',
                'open-up-left-return': 'openUpLeftReturn 2s',
                'open-up-right': 'openUpRight 2s',
                'open-up-right-return': 'openUpRightReturn 2s',
                'open-down-left-out': 'openDownLeftOut 2s',
                'open-down-right-out': 'openDownRightOut 2s',
                'open-up-left-out': 'openUpLeftOut 2s',
                'open-up-right-out': 'openUpRightOut 2s',

                /* ---------------------------------- Bling ---------------------------------- */
                'puff-in': 'puffIn 2s',
                'puff-out': 'puffOut 2s',
                'vanish-in': 'vanishIn 2s',
                'vanish-out': 'vanishOut 2s',

                /* ---------------------------------- Boing ---------------------------------- */
                'boing-in-up': 'boingInUp 2s',
                'boing-out-down': 'boingOutDown 2s',

                /* ---------------------------------- Bomb ---------------------------------- */
                'bomb-left-out': 'bombLeftOut 2s',
                'bomb-right-out': 'bombRightOut 2s',

                /* ---------------------------------- Magic ---------------------------------- */
                'magic': 'magic 2s',
                'swap': 'swap 2s',
                'twister-in-down': 'twisterInDown 2s',
                'twister-in-up': 'twisterInUp 2s',

                /* ---------------------------------- Math ---------------------------------- */
                'foolish-in': 'foolishIn 2s',
                'foolish-out': 'foolishOut 2s',
                'hole-out': 'holeOut 2s',
                'swash-in': 'swashIn 2s',
                'swash-out': 'swashOut 2s',

                /* ---------------------------------- Tin ---------------------------------- */
                'tin-down-in': 'tinDownIn 2s',
                'tin-down-out': 'tinDownOut 2s',
                'tin-left-in': 'tinLeftIn 2s',
                'tin-left-out': 'tinLeftOut 2s',
                'tin-right-in': 'tinRightIn 2s',
                'tin-right-out': 'tinRightOut 2s',
                'tin-up-in': 'tinUpIn 2s',
                'tin-up-out': 'tinUpOut 2s',

                /* ---------------------------------- Circle ---------------------------------- */
                'circle-in-hesitate': 'circle-in-hesitate 2s',
                'circle-in-center': 'circle-in-center 2s',
                'circle-in-top-right': 'circle-in-top-right 2s',
                'circle-in-top-left': 'circle-in-top-left 2s',
                'circle-in-bottom-right': 'circle-in-bottom-right 2s',
                'circle-in-bottom-left': 'circle-in-bottom-left 2s',
                'circle-out-hesitate': 'circle-out-hesitate 2s',
                'circle-out-center': 'circle-out-center 2s',
                'circle-out-top-right': 'circle-out-top-right 2s',
                'circle-out-top-left': 'circle-out-top-left 2s',
                'circle-out-bottom-right': 'circle-out-bottom-right 2s',
                'circle-out-bottom-left': 'circle-out-bottom-left 2s',
                'circle-in-swoop': 'in-circle-swoop 2s',
                'circle-out-swoop': 'out-circle-swoop 2s',


                /* ---------------------------------- Cube ---------------------------------- */
                'square-in-center': 'square-in-center 2s',
                'square-in-hesitate': 'square-in-hesitate 2s',
                'square-in-top-right': 'square-in-top-right 2s',
                'square-in-top-left': 'square-in-top-left 2s',
                'square-in-bottom-right': 'square-in-bottom-right 2s',
                'square-in-bottom-left': 'square-in-bottom-left 2s',
                'square-out-center': 'square-out-center 2s',
                'square-out-hesitate': 'square-out-hesitate 2s',
                'square-out-top-right': 'square-out-top-right 2s',
                'square-out-top-left': 'square-out-top-left 2s',
                'square-out-bottom-right': 'square-out-bottom-right 2s',
                'square-out-bottom-left': 'square-out-bottom-left 2s',

                /* ---------------------------------- Wipe ---------------------------------- */
                'wipe-in-right': 'wipe-in-right 2s',
                'wipe-in-left': 'wipe-in-left 2s',
                'wipe-in-up': 'wipe-in-up 2s',
                'wipe-in-down': 'wipe-in-down 2s',
                'wipe-in-top-right': 'wipe-in-top-right 2s',
                'wipe-in-top-left': 'wipe-in-top-left 2s',
                'wipe-in-bottom-right': 'wipe-in-bottom-right 2s',
                'wipe-in-bottom-left': 'wipe-in-bottom-left 2s',
                'wipe-cinematic-in': 'wipe-cinematic-in 2s',
                'wipe-out-right': 'wipe-out-right 2s',
                'wipe-out-left': 'wipe-out-left 2s',
                'wipe-out-up': 'wipe-out-up 2s',
                'wipe-out-down': 'wipe-out-down 2s',
                'wipe-out-top-right': 'wipe-out-top-right 2s',
                'wipe-out-top-left': 'wipe-out-top-left 2s',
                'wipe-out-bottom-right': 'wipe-out-bottom-right 2s',
                'wipe-out-bottom-left': 'wipe-out-bottom-left 2s',
                'wipe-cinematic-out': 'wipe-cinematic-out 2s',

                /* ---------------------------------- Diamond ---------------------------------- */
                'diamond-in-center': 'diamond-in-center 2s',
                'diamond-in-hesitate': 'diamond-in-hesitate 2s',
                'diamond-out-center': 'diamond-out-center 2s',
                'diamond-out-hesitate': 'diamond-out-hesitate 2s',
                'polygon-in-opposing-corners': 'polygon-in-opposing-corners 2s',
                'polygon-out-opposing-corners': 'polygon-out-opposing-corners 2s',

            },
            keyframes: {
                /* ---------------------------------- Auth ---------------------------------- */
                'auth-slide-top': {
                    '0%': { transform: 'translateY(160px)' },
                    '100%': { transform: 'translateY(-200px)' },
                },
                'auth-slide-bottom': {
                    '0%': { transform: 'translateY(-200px)' },
                    '100%': { transform: 'translateY(160px)' },
                },
                'auth-scale-up-center': {
                    '0%': { transform: 'scale(0)', opacity: '0', visibility: 'hidden' },
                    '100%': { transform: 'scale(1)', opacity: '1', visibility: 'visible' },
                },
                'auth-scale-down-center': {
                    '0%': { transform: 'scale(1)', opacity: '1', visibility: 'visible' },
                    '100%': { transform: 'scale(0)', opacity: '0', visibility: 'hidden' },
                },
                'auth-slider': {
                    '0%, 10%, 100%': { width: '400px' },
                    '30%, 50%': { width: '500px' },
                },

                /* ---------------------------------- Space --------------------------------- */
                spaceOutUp: {
                    '0%': { opacity: '1', transformOrigin: '50% 0%', transform: 'scale(1) translate(0%, 0%)' },
                    '100%': { opacity: '0', transformOrigin: '50% 0%', transform: 'scale(0.2) translate(0%, -200%)' },
                },
                spaceInRight: {
                    '0%': { opacity: '0', transformOrigin: '0% 50%', transform: 'scale(0.2) translate(200%, 0%)' },
                    '100%': { opacity: '1', transformOrigin: '0% 50%', transform: 'scale(1) translate(0%, 0%)' },
                },
                spaceOutDown: {
                    '0%': { opacity: '1', transformOrigin: '50% 100%', transform: 'scale(1) translate(0%, 0%)' },
                    '100%': { opacity: '0', transformOrigin: '50% 100%', transform: 'scale(0.2) translate(0%, 200%)' },
                },
                spaceOutLeft: {
                    '0%': { opacity: '1', transformOrigin: '0% 50%', transform: 'scale(1) translate(0%, 0%)' },
                    '100%': { opacity: '0', transformOrigin: '0% 50%', transform: 'scale(0.2) translate(-200%, 0%)' },
                },
                spaceInUp: {
                    '0%': { opacity: '0', transformOrigin: '50% 0%', transform: 'scale(0.2) translate(0%, -200%)' },
                    '100%': { opacity: '1', transformOrigin: '50% 0%', transform: 'scale(1) translate(0%, 0%)' },
                },
                spaceOutRight: {
                    '0%': { opacity: '1', transformOrigin: '100% 50%', transform: 'scale(1) translate(0%, 0%)' },
                    '100%': { opacity: '0', transformOrigin: '100% 50%', transform: 'scale(0.2) translate(200%, 0%)' },
                },
                spaceInDown: {
                    '0%': { opacity: '0', transformOrigin: '50% 100%', transform: 'scale(0.2) translate(0%, 200%)' },
                    '100%': { opacity: '1', transformOrigin: '50% 100%', transform: 'scale(1) translate(0%, 0%)' },
                },
                spaceInLeft: {
                    '0%': { opacity: '0', transformOrigin: '0% 50%', transform: 'scale(0.2) translate(-200%, 0%)' },
                    '100%': { opacity: '1', transformOrigin: '0% 50%', transform: 'scale(1) translate(0%, 0%)' },
                },

                /* ------------------------------- Perspective ------------------------------ */
                perspectiveDown: {
                    '0%': { transformOrigin: '0 100%', transform: 'perspective(800px) rotateX(0deg)' },
                    '100%': { transformOrigin: '0 100%', transform: 'perspective(800px) rotateX(-180deg)' },
                },
                perspectiveDownReturn: {
                    '0%': { transformOrigin: '0 100%', transform: 'perspective(800px) rotateX(-180deg)' },
                    '100%': { transformOrigin: '0 100%', transform: 'perspective(800px) rotateX(0deg)' },
                },
                perspectiveLeft: {
                    '0%': { transformOrigin: '0 0', transform: 'perspective(800px) rotateY(0deg)' },
                    '100%': { transformOrigin: '0 0', transform: 'perspective(800px) rotateY(-180deg)' },
                },
                perspectiveLeftReturn: {
                    '0%': { transformOrigin: '0 0', transform: 'perspective(800px) rotateY(-180deg)' },
                    '100%': { transformOrigin: '0 0', transform: 'perspective(800px) rotateY(0deg)' },
                },
                perspectiveRight: {
                    '0%': { transformOrigin: '100% 0', transform: 'perspective(800px) rotateY(0deg)' },
                    '100%': { transformOrigin: '100% 0', transform: 'perspective(800px) rotateY(180deg)' },
                },
                perspectiveRightReturn: {
                    '0%': { transformOrigin: '100% 0', transform: 'perspective(800px) rotateY(180deg)' },
                    '100%': { transformOrigin: '100% 0', transform: 'perspective(800px) rotateY(0deg)' },
                },
                perspectiveUp: {
                    '0%': { transformOrigin: '0 0', transform: 'perspective(800px) rotateX(0deg)' },
                    '100%': { transformOrigin: '0 0', transform: 'perspective(800px) rotateX(180deg)' },
                },
                perspectiveUpReturn: {
                    '0%': { transformOrigin: '0 0', transform: 'perspective(800px) rotateX(180deg)' },
                    '100%': { transformOrigin: '0 0', transform: 'perspective(800px) rotateX(0deg)' },
                },

                /* ---------------------------------- Rotate --------------------------------- */
                rotateDown: {
                    '0%': { opacity: '1', transformOrigin: '0 0', transform: 'perspective(800px) rotateX(0deg) translateZ(0px)' },
                    '100%': { opacity: '0', transformOrigin: '50% 100%', transform: 'perspective(800px) rotateX(-180deg) translateZ(300px)' },
                },
                rotateLeft: {
                    '0%': { opacity: '1', transformOrigin: '0 0', transform: 'perspective(800px) rotateY(0deg) translateZ(0px)' },
                    '100%': { opacity: '0', transformOrigin: '50% 0', transform: 'perspective(800px) rotateY(-180deg) translateZ(300px)' },
                },
                rotateRight: {
                    '0%': { opacity: '1', transformOrigin: '0 0', transform: 'perspective(800px) rotateY(0deg) translateZ(0px)' },
                    '100%': { opacity: '0', transformOrigin: '50% 0', transform: 'perspective(800px) rotateY(180deg) translateZ(150px)' },
                },
                rotateUp: {
                    '0%': { opacity: '1', transformOrigin: '0 0', transform: 'perspective(800px) rotateX(0deg) translateZ(0px)' },
                    '100%': { opacity: '0', transformOrigin: '50% 0', transform: 'perspective(800px) rotateX(180deg) translateZ(100px)' },
                },

                /* ---------------------------------- Slide --------------------------------- */
                slideDown: {
                    '0%': { transformOrigin: '0 0', transform: 'translateY(0%)' },
                    '100%': { transformOrigin: '0 0', transform: 'translateY(100%)' },
                },
                slideDownReturn: {
                    '0%': { transformOrigin: '0 0', transform: 'translateY(100%)' },
                    '100%': { transformOrigin: '0 0', transform: 'translateY(0%)' },
                },
                slideLeft: {
                    '0%': { transformOrigin: '0 0', transform: 'translateX(0%)' },
                    '100%': { transformOrigin: '0 0', transform: 'translateX(-100%)' },
                },
                slideLeftReturn: {
                    '0%': { transformOrigin: '0 0', transform: 'translateX(-100%)' },
                    '100%': { transformOrigin: '0 0', transform: 'translateX(0%)' },
                },
                slideRight: {
                    '0%': { transformOrigin: '0 0', transform: 'translateX(0%)' },
                    '100%': { transformOrigin: '0 0', transform: 'translateX(100%)' },
                },
                slideRightReturn: {
                    '0%': { transformOrigin: '0 0', transform: 'translateX(100%)' },
                    '100%': { transformOrigin: '0 0', transform: 'translateX(0%)' },
                },
                slideUp: {
                    '0%': { transformOrigin: '0 0', transform: 'translateY(0%)' },
                    '100%': { transformOrigin: '0 0', transform: 'translateY(-100%)' },
                },
                slideUpReturn: {
                    '0%': { transformOrigin: '0 0', transform: 'translateY(-100%)' },
                    '100%': { transformOrigin: '0 0', transform: 'translateY(0%)' },
                },

                /* ---------------------------------- Open ---------------------------------- */
                openUpLeft: {
                    '0%': { transformOrigin: 'top left', transform: 'rotate(0deg)', animationTimingFunction: 'ease-out' },
                    '100%': { transformOrigin: 'top left', transform: 'rotate(110deg)', animationTimingFunction: 'ease-in-out' },
                },
                openUpLeftReturn: {
                    '0%': { transformOrigin: 'top left', transform: 'rotate(110deg)', animationTimingFunction: 'ease-in-out' },
                    '100%': { transformOrigin: 'top left', transform: 'rotate(0deg)', animationTimingFunction: 'ease-out' },
                },
                openUpRight: {
                    '0%': { transformOrigin: 'top right', transform: 'rotate(0deg)', animationTimingFunction: 'ease-out' },
                    '100%': { transformOrigin: 'top right', transform: 'rotate(-110deg)', animationTimingFunction: 'ease-in-out' },
                },
                openUpRightReturn: {
                    '0%': { transformOrigin: 'top right', transform: 'rotate(-110deg)', animationTimingFunction: 'ease-in-out' },
                    '100%': { transformOrigin: 'top right', transform: 'rotate(0deg)', animationTimingFunction: 'ease-out' },
                },
                openUpLeftOut: {
                    '0%': { opacity: '1', transformOrigin: 'top left', transform: 'rotate(0deg)', animationTimingFunction: 'ease-out' },
                    '100%': { opacity: '0', transformOrigin: 'top left', transform: 'rotate(110deg)', animationTimingFunction: 'ease-in-out' },
                },
                openUpRightOut: {
                    '0%': { opacity: '1', transformOrigin: 'top right', transform: 'rotate(0deg)', animationTimingFunction: 'ease-out' },
                    '100%': { opacity: '0', transformOrigin: 'top right', transform: 'rotate(-110deg)', animationTimingFunction: 'ease-in-out' },
                },
                openDownLeftOut: {
                    '0%': { opacity: '1', transformOrigin: 'bottom left', transform: 'rotate(0deg)', animationTimingFunction: 'ease-out' },
                    '100%': { opacity: '0', transformOrigin: 'bottom left', transform: 'rotate(-110deg)', animationTimingFunction: 'ease-in-out' },
                },
                openDownRightOut: {
                    '0%': { opacity: '1', transformOrigin: 'bottom right', transform: 'rotate(0deg)', animationTimingFunction: 'ease-out' },
                    '100%': { opacity: '0', transformOrigin: 'bottom right', transform: 'rotate(110deg)', animationTimingFunction: 'ease-in-out' },
                },
                openDownLeft: {
                    '0%': { transformOrigin: 'bottom left', transform: 'rotate(0deg)', animationTimingFunction: 'ease-out' },
                    '100%': { transformOrigin: 'bottom left', transform: 'rotate(-110deg)', animationTimingFunction: 'ease-in-out' },
                },
                openDownLeftReturn: {
                    '0%': { transformOrigin: 'bottom left', transform: 'rotate(-110deg)', animationTimingFunction: 'ease-in-out' },
                    '100%': { transformOrigin: 'bottom left', transform: 'rotate(0deg)', animationTimingFunction: 'ease-out' },
                },
                openDownRight: {
                    '0%': { transformOrigin: 'bottom right', transform: 'rotate(0deg)', animationTimingFunction: 'ease-out' },
                    '100%': { transformOrigin: 'bottom right', transform: 'rotate(110deg)', animationTimingFunction: 'ease-in-out' },
                },
                openDownRightReturn: {
                    '0%': { transformOrigin: 'bottom right', transform: 'rotate(110deg)', animationTimingFunction: 'ease-in-out' },
                    '100%': { transformOrigin: 'bottom right', transform: 'rotate(0deg)', animationTimingFunction: 'ease-out' },
                },

                /* ---------------------------------- Bling ---------------------------------- */
                puffIn: {
                    '0%': { opacity: 0, transformOrigin: '50% 50%', transform: 'scale(2, 2)', filter: 'blur(2px)' },
                    '100%': { opacity: 1, transformOrigin: '50% 50%', transform: 'scale(1, 1)', filter: 'blur(0px)' },
                },
                puffOut: {
                    '0%': { opacity: 1, transformOrigin: '50% 50%', transform: 'scale(1, 1)', filter: 'blur(0px)' },
                    '100%': { opacity: 0, transformOrigin: '50% 50%', transform: 'scale(2, 2)', filter: 'blur(2px)' },
                },
                vanishIn: {
                    '0%': { opacity: 0, transformOrigin: '50% 50%', transform: 'scale(2, 2)', filter: 'blur(90px)' },
                    '100%': { opacity: 1, transformOrigin: '50% 50%', transform: 'scale(1, 1)', filter: 'blur(0px)' },
                },
                vanishOut: {
                    '0%': { opacity: 1, transformOrigin: '50% 50%', transform: 'scale(1, 1)', filter: 'blur(0px)' },
                    '100%': { opacity: 0, transformOrigin: '50% 50%', transform: 'scale(2, 2)', filter: 'blur(20px)' },
                },

                /* ---------------------------------- Boing ---------------------------------- */
                boingInUp: {
                    '0%': { opacity: '0', transformOrigin: '50% 0%', transform: 'perspective(800px) rotateX(-90deg)' },
                    '50%': { opacity: '1', transformOrigin: '50% 0%', transform: 'perspective(800px) rotateX(50deg)' },
                    '100%': { opacity: '1', transformOrigin: '50% 0%', transform: 'perspective(800px) rotateX(0deg)' },
                },
                boingOutDown: {
                    '0%': { opacity: '1', transformOrigin: '100% 100%', transform: 'perspective(800px) rotateX(0deg) rotateY(0deg)' },
                    '20%': { opacity: '1', transformOrigin: '100% 100%', transform: 'perspective(800px) rotateX(0deg) rotateY(10deg)' },
                    '30%': { opacity: '1', transformOrigin: '0% 100%', transform: 'perspective(800px) rotateX(0deg) rotateY(0deg)' },
                    '40%': { opacity: '1', transformOrigin: '0% 100%', transform: 'perspective(800px) rotateX(10deg) rotateY(10deg)' },
                    '100%': { opacity: '0', transformOrigin: '100% 100%', transform: 'perspective(800px) rotateX(90deg) rotateY(0deg)' },
                },

                /* ---------------------------------- Bomb ---------------------------------- */
                bombLeftOut: {
                    '0%': { opacity: '1', transformOrigin: '50% 50%', transform: 'rotate(0deg)', filter: 'blur(0px)' },
                    '50%': { opacity: '1', transformOrigin: '-100% 50%', transform: 'rotate(-160deg)', filter: 'blur(0px)' },
                    '100%': { opacity: '0', transformOrigin: '-100% 50%', transform: 'rotate(-160deg)', filter: 'blur(20px)' },
                },
                bombRightOut: {
                    '0%': { opacity: '1', transformOrigin: '50% 50%', transform: 'rotate(0deg)', filter: 'blur(0px)' },
                    '50%': { opacity: '1', transformOrigin: '200% 50%', transform: 'rotate(160deg)', filter: 'blur(0px)' },
                    '100%': { opacity: '0', transformOrigin: '200% 50%', transform: 'rotate(160deg)', filter: 'blur(20px)' },
                },

                /* ---------------------------------- Magic ---------------------------------- */
                magic: {
                    '0%': { opacity: '1', transformOrigin: '100% 200%', transform: 'scale(1, 1) rotate(0deg)' },
                    '100%': { opacity: '0', transformOrigin: '200% 500%', transform: 'scale(0, 0) rotate(270deg)' },
                },
                swap: {
                    '0%': { opacity: '0', transformOrigin: '0 100%', transform: 'scale(0, 0) translate(-700px, 0px)' },
                    '100%': { opacity: '1', transformOrigin: '100% 100%', transform: 'scale(1, 1) translate(0px, 0px)' },
                },
                twisterInDown: {
                    '0%': { opacity: '0', transformOrigin: '0 100%', transform: 'scale(0, 0) rotate(360deg) translateY(-100%)' },
                    '30%': { transformOrigin: '0 100%', transform: 'scale(0, 0) rotate(360deg) translateY(-100%)' },
                    '100%': { opacity: '1', transformOrigin: '100% 100%', transform: 'scale(1, 1) rotate(0deg) translateY(0%)' },
                },
                twisterInUp: {
                    '0%': { opacity: '0', transformOrigin: '100% 0', transform: 'scale(0, 0) rotate(360deg) translateY(100%)' },
                    '30%': { transformOrigin: '100% 0', transform: 'scale(0, 0) rotate(360deg) translateY(100%)' },
                    '100%': { opacity: '1', transformOrigin: '0 0', transform: 'scale(1, 1) rotate(0deg) translateY(0)' },
                },

                /* ---------------------------------- Math ---------------------------------- */
                foolishIn: {
                    '0%': { opacity: '0', transformOrigin: '50% 50%', transform: 'scale(0, 0) rotate(360deg)' },
                    '20%': { opacity: '1', transformOrigin: '0% 100%', transform: 'scale(0.5, 0.5) rotate(0deg)' },
                    '40%': { opacity: '1', transformOrigin: '100% 100%', transform: 'scale(0.5, 0.5) rotate(0deg)' },
                    '60%': { opacity: '1', transformOrigin: '0%', transform: 'scale(0.5, 0.5) rotate(0deg)' },
                    '80%': { opacity: '1', transformOrigin: '0% 0%', transform: 'scale(0.5, 0.5) rotate(0deg)' },
                    '100%': { opacity: '1', transformOrigin: '50% 50%', transform: 'scale(1, 1) rotate(0deg)' },
                },
                foolishOut: {
                    '0%': { opacity: '1', transformOrigin: '50% 50%', transform: 'scale(1, 1) rotate(360deg)' },
                    '20%': { opacity: '1', transformOrigin: '0% 0%', transform: 'scale(0.5, 0.5) rotate(0deg)' },
                    '40%': { opacity: '1', transformOrigin: '100% 0%', transform: 'scale(0.5, 0.5) rotate(0deg)' },
                    '60%': { opacity: '1', transformOrigin: '0%', transform: 'scale(0.5, 0.5) rotate(0deg)' },
                    '80%': { opacity: '1', transformOrigin: '0% 100%', transform: 'scale(0.5, 0.5) rotate(0deg)' },
                    '100%': { opacity: '0', transformOrigin: '50% 50%', transform: 'scale(0, 0) rotate(0deg)' },
                },
                holeOut: {
                    '0%': { opacity: '1', transformOrigin: '50% 50%', transform: 'scale(1, 1) rotateY(0deg)' },
                    '100%': { opacity: '0', transformOrigin: '50% 50%', transform: 'scale(0, 0) rotateY(180deg)' },
                },
                swashIn: {
                    '0%': { opacity: '0', transformOrigin: '50% 50%', transform: 'scale(0, 0)' },
                    '90%': { opacity: '1', transformOrigin: '50% 50%', transform: 'scale(0.9, 0.9)' },
                    '100%': { opacity: '1', transformOrigin: '50% 50%', transform: 'scale(1, 1)' },
                },
                swashOut: {
                    '0%': { opacity: '1', transformOrigin: '50% 50%', transform: 'scale(1, 1)' },
                    '80%': { opacity: '1', transformOrigin: '50% 50%', transform: 'scale(0.9, 0.9)' },
                    '100%': { opacity: '0', transformOrigin: '50% 50%', transform: 'scale(0, 0)' },
                },

                /* ---------------------------------- Tin ---------------------------------- */
                tinDownIn: {
                    '0%': { opacity: '0', transform: 'scale(1, 1) translateY(900%)' },
                    '50%, 70%, 90%': { opacity: '1', transform: 'scale(1.1, 1.1) translateY(0)' },
                    '60%, 80%, 100%': { opacity: '1', transform: 'scale(1, 1) translateY(0)' },
                },
                tinDownOut: {
                    '0%, 20%, 40%, 50%': { opacity: '1', transform: 'scale(1, 1) translateY(0)' },
                    '10%, 30%': { opacity: '1', transform: 'scale(1.1, 1.1) translateY(0)' },
                    '100%': { opacity: '0', transform: 'scale(1, 1) translateY(900%)' },
                },
                tinLeftIn: {
                    '0%': { opacity: '0', transform: 'scale(1, 1) translateX(-900%)' },
                    '50%, 70%, 90%': { opacity: '1', transform: 'scale(1.1, 1.1) translateX(0)' },
                    '60%, 80%, 100%': { opacity: '1', transform: 'scale(1, 1) translateX(0)' },
                },
                tinLeftOut: {
                    '0%, 20%, 40%, 50%': { opacity: '1', transform: 'scale(1, 1) translateX(0)' },
                    '10%, 30%': { opacity: '1', transform: 'scale(1.1, 1.1) translateX(0)' },
                    '100%': { opacity: '0', transform: 'scale(1, 1) translateX(-900%)' },
                },
                tinRightIn: {
                    '0%': { opacity: '0', transform: 'scale(1, 1) translateX(900%)' },
                    '50%, 70%, 90%': { opacity: '1', transform: 'scale(1.1, 1.1) translateX(0)' },
                    '60%, 80%, 100%': { opacity: '1', transform: 'scale(1, 1) translateX(0)' },
                },
                tinRightOut: {
                    '0%, 20%, 40%, 50%': { opacity: '1', transform: 'scale(1, 1) translateX(0)' },
                    '10%, 30%': { opacity: '1', transform: 'scale(1.1, 1.1) translateX(0)' },
                    '100%': { opacity: '0', transform: 'scale(1, 1) translateX(900%)' },
                },
                tinUpIn: {
                    '0%': { opacity: '0', transform: 'scale(1, 1) translateY(-900%)' },
                    '50%, 70%, 90%': { opacity: '1', transform: 'scale(1.1, 1.1) translateY(0)' },
                    '60%, 80%, 100%': { opacity: '1', transform: 'scale(1, 1) translateY(0)' },
                },
                tinUpOut: {
                    '0%, 20%, 40%, 50%': { opacity: '1', transform: 'scale(1, 1) translateY(0)' },
                    '10%, 30%': { opacity: '1', transform: 'scale(1.1, 1.1) translateY(0)' },
                    '100%': { opacity: '0', transform: 'scale(1, 1) translateY(-900%)' },
                },

                /* ---------------------------------- Circle ---------------------------------- */
                'circle-in-hesitate': {
                    '0%': { 'clip-path': 'circle(0%)' },
                    '40%': { 'clip-path': 'circle(40%)' },
                    '100%': { 'clip-path': 'circle(125%)' },
                },
                'circle-in-center': {
                    '0%': { 'clip-path': 'circle(0%)' },
                    '100%': { 'clip-path': 'circle(125%)' },
                },
                'circle-in-top-right': {
                    '0%': { 'clip-path': 'circle(0%)' },
                    '100%': { 'clip-path': 'circle(150% at top right)' },
                },
                'circle-in-top-left': {
                    '0%': { 'clip-path': 'circle(0%)' },
                    '100%': { 'clip-path': 'circle(150% at top left)' },
                },
                'circle-in-bottom-right': {
                    '0%': { 'clip-path': 'circle(0%)' },
                    '100%': { 'clip-path': 'circle(150% at bottom right)' },
                },
                'circle-in-bottom-left': {
                    '0%': { 'clip-path': 'circle(0%)' },
                    '100%': { 'clip-path': 'circle(150% at bottom left)' },
                },
                'circle-out-hesitate': {
                    '0%': { 'clip-path': 'circle(125%)' },
                    '40%': { 'clip-path': 'circle(40%)' },
                    '100%': { 'clip-path': 'circle(0%)' },
                },
                'circle-out-center': {
                    '0%': { 'clip-path': 'circle(125%)' },
                    '100%': { 'clip-path': 'circle(0%)' },
                },
                'circle-out-top-right': {
                    '0%': { 'clip-path': 'circle(125% at top right)' },
                    '100%': { 'clip-path': 'circle(0% at top right)' },
                },
                'circle-out-top-left': {
                    '0%': { 'clip-path': 'circle(125% at top left)' },
                    '100%': { 'clip-path': 'circle(0% at top left)' },
                },
                'circle-out-bottom-right': {
                    '0%': { 'clip-path': 'circle(125% at bottom right)' },
                    '100%': { 'clip-path': 'circle(0% at bottom right)' },
                },
                'circle-out-bottom-left': {
                    '0%': { 'clip-path': 'circle(125% at bottom left)' },
                    '100%': { 'clip-path': 'circle(0% at bottom left)' },
                },
                'circle-in-swoop': {
                    from: { 'clip-path': 'var(--circle-top-right-out)' },
                    to: { 'clip-path': 'var(--circle-bottom-right-in)' },
                },
                'circle-out-swoop': {
                    from: { 'clip-path': 'var(--circle-bottom-right-in)' },
                    to: { 'clip-path': 'var(--circle-top-right-out)' },
                },

                /* ---------------------------------- Square ---------------------------------- */
                'square-in-center': {
                    from: { 'clip-path': 'inset(100% 100% 100% 100%)' },
                    to: { 'clip-path': 'inset(0 0 0 0)' },
                },
                'square-in-hesitate': {
                    '0%': { 'clip-path': 'inset(100% 100% 100% 100%)' },
                    '40%': { 'clip-path': 'inset(33% 33% 33% 33%)' },
                    '100%': { 'clip-path': 'inset(0 0 0 0)' },
                },
                'square-in-top-right': {
                    from: { 'clip-path': 'inset(100% 100% 0 0)' },
                    to: { 'clip-path': 'inset(0 0 0 0)' },
                },
                'square-in-top-left': {
                    from: { 'clip-path': 'inset(100% 0 0 100%)' },
                    to: { 'clip-path': 'inset(0 0 0 0)' },
                },
                'square-in-bottom-right': {
                    from: { 'clip-path': 'inset(0 100% 100% 0)' },
                    to: { 'clip-path': 'inset(0 0 0 0)' },
                },
                'square-in-bottom-left': {
                    from: { 'clip-path': 'inset(0 0 100% 100%)' },
                    to: { 'clip-path': 'inset(0 0 0 0)' },
                },
                'square-out-center': {
                    from: { 'clip-path': 'inset(0 0 0 0)' },
                    to: { 'clip-path': 'inset(100% 100% 100% 100%)' },
                },
                'square-out-hesitate': {
                    '0%': { 'clip-path': 'inset(0 0 0 0)' },
                    '40%': { 'clip-path': 'inset(33% 33% 33% 33%)' },
                    '100%': { 'clip-path': 'inset(100% 100% 100% 100%)' },
                },
                'square-out-top-right': {
                    from: { 'clip-path': 'inset(0 0 0 0)' },
                    to: { 'clip-path': 'inset(0 0 100% 100%)' },
                },
                'square-out-top-left': {
                    from: { 'clip-path': 'inset(0 0 0 0)' },
                    to: { 'clip-path': 'inset(0 100% 100% 0)' },
                },
                'square-out-bottom-right': {
                    from: { 'clip-path': 'inset(0 0 0 0)' },
                    to: { 'clip-path': 'inset(100% 0 0 100%)' },
                },
                'square-out-bottom-left': {
                    from: { 'clip-path': 'inset(0 0 0 0)' },
                    to: { 'clip-path': 'inset(100% 100% 0 0)' },
                },

                /* ---------------------------------- Wipe ---------------------------------- */
                'wipe-in-right': {
                    from: { 'clip-path': 'inset(0 100% 0 0)' },
                    to: { 'clip-path': 'inset(0 0 0 0)' },
                },
                'wipe-in-left': {
                    from: { 'clip-path': 'inset(0 0 0 100%)' },
                    to: { 'clip-path': 'inset(0 0 0 0)' },
                },
                'wipe-in-up': {
                    from: { 'clip-path': 'inset(100% 0 0 0)' },
                    to: { 'clip-path': 'inset(0 0 0 0)' },
                },
                'wipe-in-down': {
                    from: { 'clip-path': 'inset(0 0 100% 0)' },
                    to: { 'clip-path': 'inset(0 0 0 0)' },
                },
                'wipe-in-top-right': {
                    from: { 'clip-path': 'polygon(-50% 50%, 50% 150%, 50% 150%, -50% 50%)' },
                    to: { 'clip-path': 'polygon(50% -50%, 150% 50%, 50% 150%, -50% 50%)' },
                },
                'wipe-in-top-left': {
                    from: { 'clip-path': 'polygon(150% 50%, 150% 50%, 50% 150%, 50% 150%)' },
                    to: { 'clip-path': 'polygon(50% -50%, 150% 50%, 50% 150%, -50% 50%)' },
                },
                'wipe-in-bottom-right': {
                    from: { 'clip-path': 'polygon(0 0, 0 0, 0 0, 0 50%)' },
                    to: { 'clip-path': 'polygon(-50% 0%, 200% 0, 0 200%, 0 -50%)' },
                },
                'wipe-in-bottom-left': {
                    from: { 'clip-path': 'polygon(50% -50%, 150% 50%, 150% 50%, 50% -50%)' },
                    to: { 'clip-path': 'polygon(50% -50%, 150% 50%, 50% 150%, -50% 50%)' },
                },
                'wipe-cinematic-in': {
                    '0%': { 'clip-path': 'inset(100% 0 100% 0)' },
                    '30%, 70%': { 'clip-path': 'inset(10% 0 10% 0)' },
                    '100%': { 'clip-path': 'inset(0 0 0 0)' },
                },
                'wipe-out-right': {
                    from: { 'clip-path': 'inset(0 0 0 0)' },
                    to: { 'clip-path': 'inset(0 0 0 100%)' },
                },
                'wipe-out-left': {
                    from: { 'clip-path': 'inset(0 0 0 0)' },
                    to: { 'clip-path': 'inset(0 100% 0 0)' },
                },
                'wipe-out-up': {
                    from: { 'clip-path': 'inset(0 0 0 0)' },
                    to: { 'clip-path': 'inset(0 0 100% 0)' },
                },
                'wipe-out-down': {
                    from: { 'clip-path': 'inset(0 0 0 0)' },
                    to: { 'clip-path': 'inset(100% 0 0 0)' },
                },
                'wipe-out-top-right': {
                    from: { 'clip-path': 'polygon(50% -50%, 150% 50%, 50% 150%, -50% 50%)' },
                    to: { 'clip-path': 'polygon(50% -50%, 150% 50%, 150% 50%, 50% -50%)' },
                },
                'wipe-out-top-left': {
                    from: { 'clip-path': 'polygon(-50% 0%, 200% 0, 0 200%, 0 -50%)' },
                    to: { 'clip-path': 'polygon(0 0, 0 0, 0 0, 0 50%)' },
                },
                'wipe-out-bottom-right': {
                    from: { 'clip-path': 'polygon(50% -50%, 150% 50%, 50% 150%, -50% 50%)' },
                    to: { 'clip-path': 'polygon(150% 50%, 150% 50%, 50% 150%, 50% 150%)' },
                },
                'wipe-out-bottom-left': {
                    from: { 'clip-path': 'polygon(50% -50%, 150% 50%, 50% 150%, -50% 50%)' },
                    to: { 'clip-path': 'polygon(-50% 50%, 50% 150%, 50% 150%, -50% 50%)' },
                },
                'wipe-cinematic-out': {
                    '0%': { 'clip-path': 'inset(0 0 0 0)' },
                    '30%, 70%': { 'clip-path': 'inset(10% 0 10% 0)' },
                    '100%': { 'clip-path': 'inset(100% 0 100% 0)' },
                },

                /* ---------------------------------- Diamond ---------------------------------- */
                'diamond-in-center': {
                    from: { 'clip-path': 'polygon(50% 50%, 50% 50%, 50% 50%, 50% 50%)' },
                    to: { 'clip-path': 'polygon(-50% 50%, 50% -50%, 150% 50%, 50% 150%)' },
                },
                'diamond-in-hesitate': {
                    '0%': { 'clip-path': 'polygon(50% 50%, 50% 50%, 50% 50%, 50% 50%)' },
                    '50%': { 'clip-path': 'polygon(45% 50%, 50% 25%, 55% 50%, 50% 75%)' },
                    '100%': { 'clip-path': 'polygon(-50% 50%, 50% -50%, 150% 50%, 50% 150%)' },
                },
                'diamond-out-center': {
                    from: { 'clip-path': 'polygon(-50% 50%, 50% -50%, 150% 50%, 50% 150%)' },
                    to: { 'clip-path': 'polygon(50% 50%, 50% 50%, 50% 50%, 50% 50%)' },
                },
                'diamond-out-hesitate': {
                    '0%': { 'clip-path': 'polygon(-50% 50%, 50% -50%, 150% 50%, 50% 150%)' },
                    '50%': { 'clip-path': 'polygon(45% 50%, 50% 25%, 55% 50%, 50% 75%)' },
                    '100%': { 'clip-path': 'polygon(50% 50%, 50% 50%, 50% 50%, 50% 50%)' },
                },
                'polygon-in-opposing-corners': {
                    from: { 'clip-path': 'polygon(0 0, 50% 50%, 100% 100%, 50% 50%)' },
                    to: { 'clip-path': 'polygon(0 0, 0 100%, 100% 100%, 100% 0)' },
                },
                'polygon-out-opposing-corners': {
                    from: { 'clip-path': 'polygon(0 0, 0 100%, 100% 100%, 100% 0)' },
                    to: { 'clip-path': 'polygon(0 0, 50% 50%, 100% 100%, 50% 50%)' },
                },





            },
            backgroundImage: {
                'btn-gradient': 'linear-gradient(145deg, #e1c9ac, #fffbeb)',
                'btn-gradient-dark': 'linear-gradient(145deg, #1f1f1f, #2e2e2e)',
            },
            boxShadow: {
                'neu-sun': '6px 6px 13px #cca48e, -6px -6px 13px #fff6d6',
                'neu-moon': 'inset 4px 4px 9px #131313, inset -4px -4px 9px #4d4d4d, 4px 4px 9px #131313, -4px -4px 9px #4d4d4d',

                'neu-xs': '2px 2px 4px #ccbaa6, -2px -2px 4px #fffffa',
                'neu-md-soft': '-5px -5px 9px #fff9df, 5px 5px 9px #edd9c1',
                'neu-lg': '6px 6px 9px #ccb7ac, -6px -6px 9px #ffffe5',
                'neu-xl': '6px 6px 13px #cca48e, -6px -6px 9px #ffffe5',
                'neu-xl-soft': '-10px -10px 15px #fff9df, 10px 10px 15px #4c4c4c40',

                'neu-inset-xs': 'inset 2px 2px 5px #d6c4af, inset -2px -2px 5px #fffff1',
                'neu-inset-sm': 'inset 4px 3px 3px 0px #dbc8b3, inset -2px -4px 4px 0px #ffffe5',
                'neu-inset-md': '#ccb7ac 2px 2px 5px 0px inset, #ffffe5 -3px -3px 7px 0px inset',
                'neu-inset-md-hard': '#FFFFFF0D 0px -15px 15px 0px, #FFFFFF0D 0px -15px 15px 0px inset, #00000033 0px 15px 15px 0px, #00000021 0px 15px 15px 0px inset',
                'neu-inset-lg': '-10px -10px 15px #fff9df, 10px 10px 15px #4c4c4c40, inset -10px -10px 15px #fff9df, inset 10px 10px 15px #4c4c4c40',
                'neu-inset-xl': 'inset 6px 6px 12px #665d53, inset -6px -6px 12px #ffffff',

                'neu-outset-sm': '#00000040 5px 5px 7px 0px, #FFFFFF40 2px 2px 5px 0px inset, #00000080 -3px -3px 5px 0px inset',
                'neu-outset-md': '#41414130 -3px -3px 12px 1.5px, #ffffff30 0px 0px 42px 0px,#dedede5e -5px 0px 8px 0px inset, #8a8a8a3c 0px 5px 8px 0px inset,#8282823c 5px 0px 8px 0px inset, #d5d5d53c 0px -5px 8px 0px inset',
                'neu-outset-lg': '2.19px 2.05px 26.30px 1px rgba(0, 0, 0, 0.40), 0px 0px 113.40px 0px rgba(255, 255, 255, 0.27), inset -5px 0px 7.50px rgba(34, 34, 34, 0.24), inset 0px 5px 7.50px rgba(214, 214, 214, 0.24), inset 5px 0px 7.50px rgba(221, 221, 221, 0.24), inset 0px -5px 7.50px rgba(41, 41, 41, 0.24)',

                'neu-dark-xs': '2px 2px 4px #070707, -2px -2px 4px #3d3d3d',
                'neu-dark-sm': '#FFFFFF0D -5px -5px 10px, #00000080 5px 5px 15px',
                'neu-dark-md': '3px 3px 6px #000000, -3px -3px 6px #FFE9D040',
                'neu-dark-lg': '6px 6px 12px #000000, -6px -6px 12px #ffe9d03b',
                'neu-dark-xl': '-10px -10px 15px #ffe9d03b, 10px 10px 15px #000000',

                'neu-dark-inset-xs': 'inset 3px 3px 3px #000000, inset -3px -3px 3px #2e2e2e',
                'neu-dark-inset-sm': 'inset 4px 3px 3px #000000, inset -2px -4px 4px #3d3d3d',
                'neu-dark-inset-md': '#000000 2px 2px 5px 0px inset, #3d3d3d -3px -3px 7px 0px inset',
                'neu-dark-inset-md-hard': ' #000000E8 0px -15px 15px 0px, #0E0E0ED1 0px -15px 15px 0px inset, #060606 0px -15px 15px 0px, #101010E0 0px -15px 15px 0px inset',
                'neu-dark-inset-lg': '-10px -10px 15px #ffe9d03b, 10px 10px 15px #000000, inset -10px -10px 15px #ffe9d03b, inset 10px 10px 15px #000000',

                'neu-dark-outset-sm': '15px 5px 19px 7.5px rgba(0, 0, 0, 0.21), 0px 0px 21px rgba(255, 255, 255, 0.14), inset -3.5px 0 5px hsla(0, 0%, 3.015%, 0.18), inset 0 3.5px 5px hsla(0, 0%, 67.101%, 0.18), inset 3.5px 0 5px hsla(0, 0%, 82.985%, 0.18), inset 0 -3.5px 5px hsla(0, 0%, 3.015%, 0.18)',
                'neu-dark-outset-md': '12px 10px 22px 7.5px rgba(0, 0, 0, 0.37), 0px 0px 32px rgba(255, 255, 255, 0.25), inset -3.5px 0 5px hsla(100, 0%, 11.15%, 0.32), inset 0 3.5px 5px hsla(100, 0%, 81.47%, 0.32), inset 3.5px 0 5px hsla(100, 0%, 88.86%, 0.32), inset 0 -3.5px 5px hsla(100, 0%, 11.15%, 0.32)',
                'neu-dark-outset-lg': '12px 10px 22px 7.5px rgba(0, 0, 0, 0.37), 0px 0px 32px rgba(255, 255, 255, 0.25), inset -3.5px 0 5px hsla(100, 0%, 11.15%, 0.32), inset 0 3.5px 5px hsla(100, 0%, 81.47%, 0.32), inset 3.5px 0 5px hsla(100, 0%, 88.86%, 0.32), inset 0 -3.5px 5px hsla(100, 0%, 11.15%, 0.32)',
            },
            colors: {
                light: {
                    primary: "#FFE9D0",
                    'primary-dim': '#fff0e0',
                    secondary: "#FFCDB2",
                    accent: "#44CCFF",
                    highlight: "#B1AFFF",
                    text: "#1B1B1B",
                    'text-secondary': '#767676',
                    'text-tertiary': '#6f7378',
                },
                dark: {
                    primary: "#131419",
                    'primary-dim': '#1D1D1D',
                    secondary: "#303030",
                    accent: "#66CCFF",
                    highlight: "#8888FF",
                    text: "#FFE9D0",
                    'text-secondary': '#aaaaaa',
                    'text-tertiary': '#88929c',
                },
            },
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                poppins: ['Poppins', 'sans-serif'],
                playfair: ['"Playfair Display"', 'Georgia', 'serif'],
                karla: ['Karla', 'Arial', 'sans-serif'],
                alegreya: ['Alegreya', 'serif'],
            },
            transitionTimingFunction: {
                'InOut-sine': 'cubic-bezier(0.45, 0.05, 0.55, 0.95)',
                'InOut-quad': 'cubic-bezier(0.46, 0.03, 0.52, 0.96)',
                'InOut-cubic': 'cubic-bezier(0.65, 0.05, 0.36, 1)',
                'InOut-quart': 'cubic-bezier(0.77, 0, 0.18, 1)',
                'InOut-quint': 'cubic-bezier(0.79, 0.14, 0.15, 0.86)',
                'InOut-expo': 'cubic-bezier(0.86, 0, 0.07, 1)',
                'InOut-circ': 'cubic-bezier(1, 0, 0, 1)',
                'InOut-back': 'cubic-bezier(0.68, -0.55, 0.27, 1.55)',

                'In-sine': 'cubic-bezier(0.39, 0.57, 0.56, 1)',
                'In-quad': 'cubic-bezier(0.55, 0.08, 0.68, 0.53)',
                'In-cubic': 'cubic-bezier(0.55, 0.06, 0.68, 0.19)',
                'In-quart': 'cubic-bezier(0.9, 0.03, 0.69, 0.22)',
                'In-quint': 'cubic-bezier(0.76, 0.05, 0.86, 0.06)',
                'In-expo': 'cubic-bezier(0.95, 0.05, 0.8, 0.04)',
                'In-circ': 'cubic-bezier(0.6, 0.04, 0.98, 0.34)',
                'In-back': 'cubic-bezier(0.6, -0.28, 0.74, 0.05)',

                'Out-sine': 'cubic-bezier(0.39, 0.57, 0.56, 1)',
                'Out-quad': 'cubic-bezier(0.25, 0.46, 0.45, 0.94)',
                'Out-cubic': 'cubic-bezier(0.22, 0.61, 0.36, 1)',
                'Out-quart': 'cubic-bezier(0.17, 0.84, 0.44, 1)',
                'Out-quint': 'cubic-bezier(0.23, 1, 0.32, 1)',
                'Out-expo': 'cubic-bezier(0.19, 1, 0.22, 1)',
                'Out-circ': 'cubic-bezier(0.08, 0.82, 0.17, 1)',
                'Out-back': 'cubic-bezier(0.18, 0.89, 0.32, 1.27)',
            },
        },
    },

    darkMode: "class",

    plugins: [],
};
