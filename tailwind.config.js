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
                'space-out-up': 'spaceOutUp 1s infinite',
                'space-out-right': 'spaceOutRight 1s infinite',
                'space-out-down': 'spaceOutDown 1s infinite',
                'space-out-left': 'spaceOutLeft 1s infinite',
                'space-in-up': 'spaceInUp 1s infinite',
                'space-in-right': 'spaceInRight 1s infinite',
                'space-in-down': 'spaceInDown 1s infinite',
                'space-in-left': 'spaceInLeft 1s infinite',

                /* ------------------------------- Perspective ------------------------------ */
                'perspective-down': 'perspectiveDown 1s',
                'perspective-down-return': 'perspectiveDownReturn 1s',
                'perspective-left': 'perspectiveLeft 1s',
                'perspective-left-return': 'perspectiveLeftReturn 1s',
                'perspective-right': 'perspectiveRight 1s',
                'perspective-right-return': 'perspectiveRightReturn 1s',
                'perspective-up': 'perspectiveUp 1s',
                'perspective-up-return': 'perspectiveUpReturn 1s',

                /* ---------------------------------- Rotate --------------------------------- */
                'rotate-down': 'rotateDown 1s',
                'rotate-left': 'rotateLeft 1s',
                'rotate-right': 'rotateRight 1s',
                'rotate-up': 'rotateUp 1s',

                /* ---------------------------------- Slide --------------------------------- */
                'slide-down': 'slideDown 1s',
                'slide-down-return': 'slideDownReturn 1s',
                'slide-left': 'slideLeft 1s',
                'slide-left-return': 'slideLeftReturn 1s',
                'slide-right': 'slideRight 1s',
                'slide-right-return': 'slideRightReturn 1s',
                'slide-up': 'slideUp 1s',
                'slide-up-return': 'slideUpReturn 1s',

                /* ---------------------------------- Open ---------------------------------- */
                'open-down-left': 'openDownLeft 1s',
                'open-down-left-return': 'openDownLeftReturn 1s',
                'open-down-right': 'openDownRight 1s',
                'open-down-right-return': 'openDownRightReturn 1s',
                'open-up-left': 'openUpLeft 1s',
                'open-up-left-return': 'openUpLeftReturn 1s',
                'open-up-right': 'openUpRight 1s',
                'open-up-right-return': 'openUpRightReturn 1s',
                'open-down-left-out': 'openDownLeftOut 1s',
                'open-down-right-out': 'openDownRightOut 1s',
                'open-up-left-out': 'openUpLeftOut 1s',
                'open-up-right-out': 'openUpRightOut 1s',

                /* ---------------------------------- Bling ---------------------------------- */
                'puff-in': 'puffIn 1s',
                'puff-out': 'puffOut 1s',
                'vanish-in': 'vanishIn 1s',
                'vanish-out': 'vanishOut 1s',

                /* ---------------------------------- Boing ---------------------------------- */
                'boing-in-up': 'boingInUp 1s',
                'boing-out-down': 'boingOutDown 1s',

                /* ---------------------------------- Bomb ---------------------------------- */
                'bomb-left-out': 'bombLeftOut 1s',
                'bomb-right-out': 'bombRightOut 1s',

                /* ---------------------------------- Magic ---------------------------------- */
                'magic': 'magic 1s',
                'swap': 'swap 1s',
                'twister-in-down': 'twisterInDown 1s',
                'twister-in-up': 'twisterInUp 1s',

                /* ---------------------------------- Math ---------------------------------- */
                'foolish-in': 'foolishIn 1s',
                'foolish-out': 'foolishOut 1s',
                'hole-out': 'holeOut 1s',
                'swash-in': 'swashIn 1s',
                'swash-out': 'swashOut 1s',

                



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



            },
            backgroundImage: {
                'btn-gradient': 'linear-gradient(145deg, #e1c9ac, #fffbeb)',
                'btn-gradient-dark': 'linear-gradient(145deg, #1f1f1f, #2e2e2e)',
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
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                poppins: ['Poppins', 'sans-serif'],
                playfair: ['"Playfair Display"', 'Georgia', 'serif'],
                karla: ['Karla', 'Arial', 'sans-serif'],
                alegreya: ['Alegreya', 'serif'],
            },
        },
    },

    darkMode: "class",

    plugins: [],
};
