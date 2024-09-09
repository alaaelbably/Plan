<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>plaNest</title>
    <!-- animation link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <link
        href="https://fonts.googleapis.com/css2?family=Italianno&family=Playwrite+DE+Grund:wght@100..400&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/LANDING.CSS">
</head>

<body>

    <?php  include('navBar.php'); ?>

    <div class="section-1">

        <div class="section-1-text">
            <h1>Plan Your Work, <br> Work Your Plan</h1>
        </div>

        <div class="section-1-video">
            <svg class="animated" id="freepik_stories-notes" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 500"
                version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs">
                <style>
                    svg#freepik_stories-notes:not(.animated) .animable {
                        opacity: 0;
                    }

                    svg#freepik_stories-notes.animated #freepik--Floor--inject-2 {
                        animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) slideDown;
                        animation-delay: 0s;
                    }

                    svg#freepik_stories-notes.animated #freepik--Shadow--inject-2 {
                        animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) lightSpeedRight;
                        animation-delay: 0s;
                    }

                    svg#freepik_stories-notes.animated #freepik--note-1--inject-2 {
                        animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomOut, 1.5s Infinite linear wind;
                        animation-delay: 0s, 1s;
                    }

                    svg#freepik_stories-notes.animated #freepik--note-2--inject-2 {
                        animation: 1s 1 forwards ease-in slideUp, 1.5s Infinite linear wind;
                        animation-delay: 0s, 1s;
                    }

                    svg#freepik_stories-notes.animated #freepik--note-3--inject-2 {
                        animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) slideLeft, 1.5s Infinite linear wind;
                        animation-delay: 0s, 1s;
                    }

                    svg#freepik_stories-notes.animated #freepik--Bookmarks--inject-2 {
                        animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) fadeIn, 1.5s Infinite linear wind;
                        animation-delay: 0s, 1s;
                    }

                    svg#freepik_stories-notes.animated #freepik--Puff--inject-2 {
                        animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) lightSpeedLeft;
                        animation-delay: 0s;
                    }

                    svg#freepik_stories-notes.animated #freepik--Character--inject-2 {
                        animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) slideLeft;
                        animation-delay: 0s;
                    }

                    svg#freepik_stories-notes.animated #freepik--Plant--inject-2 {
                        animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) lightSpeedRight, 1.5s Infinite linear wind;
                        animation-delay: 0s, 1s;
                    }

                    @keyframes slideDown {
                        0% {
                            opacity: 0;
                            transform: translateY(-30px);
                        }

                        100% {
                            opacity: 1;
                            transform: translateY(0);
                        }
                    }

                    @keyframes lightSpeedRight {
                        from {
                            transform: translate3d(50%, 0, 0) skewX(-20deg);
                            opacity: 0;
                        }

                        60% {
                            transform: skewX(10deg);
                            opacity: 1;
                        }

                        80% {
                            transform: skewX(-2deg);
                        }

                        to {
                            opacity: 1;
                            transform: translate3d(0, 0, 0);
                        }
                    }

                    @keyframes zoomOut {
                        0% {
                            opacity: 0;
                            transform: scale(1.5);
                        }

                        100% {
                            opacity: 1;
                            transform: scale(1);
                        }
                    }

                    @keyframes wind {
                        0% {
                            transform: rotate(0deg);
                        }

                        25% {
                            transform: rotate(1deg);
                        }

                        75% {
                            transform: rotate(-1deg);
                        }
                    }

                    @keyframes slideUp {
                        0% {
                            opacity: 0;
                            transform: translateY(30px);
                        }

                        100% {
                            opacity: 1;
                            transform: inherit;
                        }
                    }

                    @keyframes slideLeft {
                        0% {
                            opacity: 0;
                            transform: translateX(-30px);
                        }

                        100% {
                            opacity: 1;
                            transform: translateX(0);
                        }
                    }

                    @keyframes fadeIn {
                        0% {
                            opacity: 0;
                        }

                        100% {
                            opacity: 1;
                        }
                    }

                    @keyframes lightSpeedLeft {
                        from {
                            transform: translate3d(-50%, 0, 0) skewX(20deg);
                            opacity: 0;
                        }

                        60% {
                            transform: skewX(-10deg);
                            opacity: 1;
                        }

                        80% {
                            transform: skewX(2deg);
                        }

                        to {
                            opacity: 1;
                            transform: translate3d(0, 0, 0);
                        }
                    }

                    .animator-hidden {
                        display: none;
                    }
                </style>
                <g id="freepik--Floor--inject-2" class="animable animator-hidden"
                    style="transform-origin: 250px 384.13px;">
                    <polygon
                        points="41.45 384.13 93.59 383.88 145.73 383.8 250 383.63 354.27 383.79 406.41 383.88 458.55 384.13 406.41 384.37 354.27 384.46 250 384.63 145.73 384.46 93.59 384.37 41.45 384.13"
                        style="fill: rgb(38, 50, 56); transform-origin: 250px 384.13px;" id="el52l8teogl6"
                        class="animable"></polygon>
                </g>
                <g id="freepik--Shadow--inject-2" class="animable animator-hidden"
                    style="transform-origin: 250px 431.88px;">
                    <ellipse cx="250" cy="431.88" rx="195.67" ry="27.51"
                        style="fill: rgb(235, 235, 235); transform-origin: 250px 431.88px;" id="elqcg4u5h20sq"
                        class="animable"></ellipse>
                </g>
                <g id="freepik--note-1--inject-2" class="animable" style="transform-origin: 318.65px 197.485px;">
                    <path
                        d="M427.18,54.08V340.89H210.12V54.08h3.67l1.38,6L221.1,64v4.52h7v-7h-5.4l.53-7.38h15.52l.46,7.38h-1v7h7v-7h-3l.93-7.38h10.53l1.63,7.38v7h7v-7h-2.65l1.54-7.38H273l.62,7.38h-1.25v7h7v-7h-2.92V54.08h11.35l.3,2.2,1.55,5.18h-.19v7h7v-7h-2.67l-.53-4.76L293,54.08h15.23v2.74c0,.17,1.31,4.64,1.31,4.64H306.6v7h7v-7h-1.86V54.08h13.78l-.75,7.38H323.7v7h7v-7H329l-.39-7.38h11.84l.48,7.38h-.17v7h7v-7h-2.92l-2.08-7.38h14.76l.33,7.38v7h7v-7H362l-.84-7.38H373l2,9.81v4.58h7v-7h-3.86l1.31-7.38H392.1V68.47h7v-7h-4.36l-1-7.38H404.9l4.31,9.37v5h7v-7h-4.79l-.38-7.38Z"
                        style="fill: rgb(235, 235, 235); transform-origin: 318.65px 197.485px;" id="el9pz7jkcit6"
                        class="animable"></path>
                    <rect x="226.38" y="92.33" width="184.54" height="0.75"
                        style="fill: rgb(219, 219, 219); transform-origin: 318.65px 92.705px;" id="elcg3ycfjdzav"
                        class="animable"></rect>
                    <rect x="226.38" y="102.25" width="184.54" height="0.75"
                        style="fill: rgb(219, 219, 219); transform-origin: 318.65px 102.625px;" id="el8zecy4qb5h4"
                        class="animable"></rect>
                    <rect x="226.38" y="112.17" width="184.54" height="0.75"
                        style="fill: rgb(219, 219, 219); transform-origin: 318.65px 112.545px;" id="elwxwwe6yret8"
                        class="animable"></rect>
                    <rect x="226.38" y="122.1" width="184.54" height="0.75"
                        style="fill: rgb(219, 219, 219); transform-origin: 318.65px 122.475px;" id="elp2freekho19"
                        class="animable"></rect>
                    <rect x="226.38" y="132.02" width="184.54" height="0.75"
                        style="fill: rgb(219, 219, 219); transform-origin: 318.65px 132.395px;" id="elyvfk8l46qi"
                        class="animable"></rect>
                    <rect x="226.38" y="141.94" width="184.54" height="0.75"
                        style="fill: rgb(219, 219, 219); transform-origin: 318.65px 142.315px;" id="elg50fxbg6x2f"
                        class="animable"></rect>
                    <rect x="226.38" y="151.86" width="184.54" height="0.75"
                        style="fill: rgb(219, 219, 219); transform-origin: 318.65px 152.235px;" id="ell2z488zvcbl"
                        class="animable"></rect>
                    <rect x="226.38" y="161.78" width="184.54" height="0.75"
                        style="fill: rgb(219, 219, 219); transform-origin: 318.65px 162.155px;" id="el5xguzqucrw"
                        class="animable"></rect>
                    <rect x="226.38" y="171.7" width="184.54" height="0.75"
                        style="fill: rgb(219, 219, 219); transform-origin: 318.65px 172.075px;" id="el0e4st1lroh2j"
                        class="animable"></rect>
                    <rect x="226.38" y="181.63" width="184.54" height="0.75"
                        style="fill: rgb(219, 219, 219); transform-origin: 318.65px 182.005px;" id="elro6b4eajvb"
                        class="animable"></rect>
                    <rect x="226.38" y="191.55" width="184.54" height="0.75"
                        style="fill: rgb(219, 219, 219); transform-origin: 318.65px 191.925px;" id="el9zkqawqucwf"
                        class="animable"></rect>
                    <rect x="226.38" y="201.47" width="184.54" height="0.75"
                        style="fill: rgb(219, 219, 219); transform-origin: 318.65px 201.845px;" id="elgq8spj80trr"
                        class="animable"></rect>
                    <rect x="226.38" y="211.39" width="184.54" height="0.75"
                        style="fill: rgb(219, 219, 219); transform-origin: 318.65px 211.765px;" id="el3b3a3x6scnz"
                        class="animable"></rect>
                    <rect x="226.38" y="221.31" width="184.54" height="0.75"
                        style="fill: rgb(219, 219, 219); transform-origin: 318.65px 221.685px;" id="els448yzhwu1r"
                        class="animable"></rect>
                    <rect x="226.38" y="231.23" width="184.54" height="0.75"
                        style="fill: rgb(219, 219, 219); transform-origin: 318.65px 231.605px;" id="el0zxswg4h02ve"
                        class="animable"></rect>
                    <rect x="226.38" y="241.15" width="184.54" height="0.75"
                        style="fill: rgb(219, 219, 219); transform-origin: 318.65px 241.525px;" id="elbn0hebumo7v"
                        class="animable"></rect>
                    <rect x="226.38" y="251.08" width="184.54" height="0.75"
                        style="fill: rgb(219, 219, 219); transform-origin: 318.65px 251.455px;" id="elxqom2zpvwfk"
                        class="animable"></rect>
                    <rect x="226.38" y="261" width="184.54" height="0.75"
                        style="fill: rgb(219, 219, 219); transform-origin: 318.65px 261.375px;" id="elq512j7m9nea"
                        class="animable"></rect>
                    <rect x="226.38" y="270.92" width="184.54" height="0.75"
                        style="fill: rgb(219, 219, 219); transform-origin: 318.65px 271.295px;" id="elj7cgxn7y9n"
                        class="animable"></rect>
                    <rect x="226.38" y="280.84" width="184.54" height="0.75"
                        style="fill: rgb(219, 219, 219); transform-origin: 318.65px 281.215px;" id="elvwky2vnx35p"
                        class="animable"></rect>
                    <rect x="226.38" y="290.76" width="184.54" height="0.75"
                        style="fill: rgb(219, 219, 219); transform-origin: 318.65px 291.135px;" id="el2gtkxha52qg"
                        class="animable"></rect>
                    <rect x="226.38" y="300.68" width="184.54" height="0.75"
                        style="fill: rgb(219, 219, 219); transform-origin: 318.65px 301.055px;" id="eldul8il7qhqk"
                        class="animable"></rect>
                    <rect x="226.38" y="310.6" width="184.54" height="0.75"
                        style="fill: rgb(219, 219, 219); transform-origin: 318.65px 310.975px;" id="elyf4jrsa2dkq"
                        class="animable"></rect>
                    <rect x="226.38" y="320.53" width="184.54" height="0.75"
                        style="fill: rgb(219, 219, 219); transform-origin: 318.65px 320.905px;" id="elqj2ca11hb1q"
                        class="animable"></rect>
                    <polygon
                        points="232.55 99.71 254.07 99.46 275.6 99.32 318.65 99.21 361.7 99.32 383.23 99.46 404.75 99.71 383.23 99.95 361.7 100.09 318.65 100.21 275.6 100.09 254.07 99.95 232.55 99.71"
                        style="fill: rgb(38, 50, 56); transform-origin: 318.65px 99.71px;" id="elad5ruzao32d"
                        class="animable"></polygon>
                    <path
                        d="M232.55,109.63c10.6-.21,21.2-.3,31.8-.38l31.8-.12,31.8.11,15.9.14,15.9.25-15.9.24L328,110l-31.8.12-31.8-.12C253.75,109.93,243.15,109.83,232.55,109.63Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 296.15px 109.625px;" id="el4ntqvreb5cx"
                        class="animable"></path>
                    <polygon
                        points="232.55 119.55 254.07 119.31 275.6 119.17 318.65 119.05 361.7 119.17 383.23 119.31 404.75 119.55 383.23 119.79 361.7 119.93 318.65 120.05 275.6 119.93 254.07 119.79 232.55 119.55"
                        style="fill: rgb(38, 50, 56); transform-origin: 318.65px 119.55px;" id="el75weg7qw43s"
                        class="animable"></polygon>
                    <path
                        d="M232.55,129.47c6.94-.21,13.87-.3,20.81-.38l20.81-.12,20.8.12,10.41.14c3.46.08,6.93.13,10.4.24-3.47.11-6.94.16-10.4.25l-10.41.14-20.8.11-20.81-.12C246.42,129.77,239.49,129.68,232.55,129.47Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 274.165px 129.47px;" id="ele4o5fk1pk86"
                        class="animable"></path>
                    <polygon
                        points="232.55 149.31 254.07 149.07 275.6 148.93 318.65 148.81 361.7 148.93 383.23 149.07 404.75 149.31 383.23 149.56 361.7 149.7 318.65 149.81 275.6 149.7 254.07 149.56 232.55 149.31"
                        style="fill: rgb(38, 50, 56); transform-origin: 318.65px 149.31px;" id="el8nsh1cdpt2s"
                        class="animable"></polygon>
                    <path
                        d="M232.55,159.24c10.58-.21,21.17-.31,31.75-.39l31.75-.11,31.74.11,15.88.14,15.87.25-15.87.24-15.88.14-31.74.11-31.75-.11C253.72,159.54,243.13,159.44,232.55,159.24Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 296.045px 159.235px;" id="el3upflpqj4u4"
                        class="animable"></path>
                    <path
                        d="M232.55,169.16c11.77-.21,23.53-.31,35.3-.39l35.29-.11,35.29.11,17.65.14,17.65.25-17.65.24-17.65.14-35.29.12-35.29-.12C256.08,169.46,244.32,169.36,232.55,169.16Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 303.14px 169.16px;" id="el9tb145qmep5"
                        class="animable"></path>
                    <path
                        d="M232.55,189c8.77-.21,17.54-.3,26.3-.38l26.31-.12,26.3.11,13.15.14,13.15.25-13.15.24-13.15.14-26.3.12-26.31-.12C250.09,189.3,241.32,189.21,232.55,189Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 285.155px 189px;" id="elumxb2zh6lyq"
                        class="animable"></path>
                    <polygon
                        points="232.55 198.92 254.07 198.68 275.6 198.54 318.65 198.42 361.7 198.54 383.23 198.68 404.75 198.92 383.23 199.17 361.7 199.31 318.65 199.42 275.6 199.3 254.07 199.16 232.55 198.92"
                        style="fill: rgb(38, 50, 56); transform-origin: 318.65px 198.92px;" id="els7jlwzv5dl7"
                        class="animable"></polygon>
                    <path
                        d="M232.55,208.84c11.77-.2,23.53-.3,35.3-.38l35.29-.12,35.29.12,17.65.14,17.65.24-17.65.25-17.65.14-35.29.11-35.29-.11C256.08,209.15,244.32,209.05,232.55,208.84Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 303.14px 208.84px;" id="elndoknk1hryf"
                        class="animable"></path>
                    <polygon
                        points="232.55 218.76 254.07 218.52 275.6 218.38 318.65 218.26 361.7 218.38 383.23 218.52 404.75 218.76 383.23 219.01 361.7 219.15 318.65 219.26 275.6 219.15 254.07 219.01 232.55 218.76"
                        style="fill: rgb(38, 50, 56); transform-origin: 318.65px 218.76px;" id="el7og2rbcd1d3"
                        class="animable"></polygon>
                    <path
                        d="M232.55,228.68c8.57-.2,17.15-.3,25.72-.38l25.72-.11,25.72.11,12.86.14,12.86.24-12.86.25-12.86.14-25.72.11-25.72-.11C249.7,229,241.12,228.89,232.55,228.68Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 283.99px 228.685px;" id="eln3hg8v39mz8"
                        class="animable"></path>
                </g>
                <g id="freepik--note-2--inject-2" class="animable animator-active"
                    style="transform-origin: 201.85px 140.47px;">
                    <path
                        d="M229.3,184.45H159.36a122.37,122.37,0,0,1-1.51-17.51V96.49h88v71.36C245.81,175,229.3,184.45,229.3,184.45Z"
                        style="fill: rgb(155, 164, 181); transform-origin: 201.85px 140.47px;" id="elwskiywicux"
                        class="animable"></path>
                    <g id="elbgwo7blrx7w">
                        <path
                            d="M245.8,167.84c0,6.93-15.51,16-16.47,16.56,2.57-1.74,2.13-15.51,2.13-15.51S245.54,167.06,245.8,167.84Z"
                            style="opacity: 0.2; transform-origin: 237.565px 176.023px;" class="animable"></path>
                    </g>
                    <path
                        d="M170.8,117.27c10.34-.84,20.69-1,31-1.08s20.69.23,31,1.08c-10.34.86-20.69,1-31,1.09S181.14,118.12,170.8,117.27Z"
                        style="fill: rgb(255, 255, 255); transform-origin: 201.8px 117.276px;" id="eluw0dgn8vsbb"
                        class="animable"></path>
                    <path
                        d="M170.8,128.87c8.14-.85,16.28-1,24.41-1.09s16.28.24,24.42,1.09A243.29,243.29,0,0,1,195.21,130C187.08,129.92,178.94,129.72,170.8,128.87Z"
                        style="fill: rgb(255, 255, 255); transform-origin: 195.215px 128.884px;" id="elqpdsxathkdh"
                        class="animable"></path>
                    <path
                        d="M170.8,140.47c8.14-.85,16.28-1.05,24.41-1.09a243.29,243.29,0,0,1,24.42,1.09c-8.14.85-16.28,1.05-24.42,1.09S178.94,141.32,170.8,140.47Z"
                        style="fill: rgb(255, 255, 255); transform-origin: 195.215px 140.47px;" id="eln71u64aqqcq"
                        class="animable"></path>
                </g>
                <g id="freepik--note-3--inject-2" class="animable" style="transform-origin: 350.86px 334.035px;">
                    <path
                        d="M395.8,380.57H312.38s-4.13-8.52-4.13-16.6V297.15h83.42v67.68C391.67,371.6,395.8,380.57,395.8,380.57Z"
                        style="fill: rgb(155, 164, 181); transform-origin: 352.025px 338.86px;" id="el21k65638xbsj"
                        class="animable"></path>
                    <g id="elxpuorz1mdad">
                        <path
                            d="M395.8,380.57H312.38s-4.13-8.52-4.13-16.6V297.15h83.42v67.68C391.67,371.6,395.8,380.57,395.8,380.57Z"
                            style="fill: rgb(255, 255, 255); opacity: 0.8; transform-origin: 352.025px 338.86px;"
                            class="animable"></path>
                    </g>
                    <rect x="308.25" y="302.84" width="83.42" height="0.25"
                        style="fill: rgb(219, 219, 219); transform-origin: 349.96px 302.965px;" id="el3spftn9v7f5"
                        class="animable"></rect>
                    <rect x="308.25" y="308.83" width="83.42" height="0.25"
                        style="fill: rgb(219, 219, 219); transform-origin: 349.96px 308.955px;" id="elm0an030rtd"
                        class="animable"></rect>
                    <rect x="308.25" y="314.83" width="83.42" height="0.25"
                        style="fill: rgb(219, 219, 219); transform-origin: 349.96px 314.955px;" id="el21lfvtfnuhj"
                        class="animable"></rect>
                    <rect x="308.25" y="320.82" width="83.42" height="0.25"
                        style="fill: rgb(219, 219, 219); transform-origin: 349.96px 320.945px;" id="elhnmub8is2g"
                        class="animable"></rect>
                    <rect x="308.25" y="326.82" width="83.42" height="0.25"
                        style="fill: rgb(219, 219, 219); transform-origin: 349.96px 326.945px;" id="elqo169ntd2dn"
                        class="animable"></rect>
                    <rect x="308.25" y="332.81" width="83.42" height="0.25"
                        style="fill: rgb(219, 219, 219); transform-origin: 349.96px 332.935px;" id="el5zap37p452i"
                        class="animable"></rect>
                    <rect x="308.25" y="338.8" width="83.42" height="0.25"
                        style="fill: rgb(219, 219, 219); transform-origin: 349.96px 338.925px;" id="el8jit1qm1jsj"
                        class="animable"></rect>
                    <rect x="308.25" y="344.8" width="83.42" height="0.25"
                        style="fill: rgb(219, 219, 219); transform-origin: 349.96px 344.925px;" id="elampmozj0at9"
                        class="animable"></rect>
                    <rect x="308.25" y="350.79" width="83.42" height="0.25"
                        style="fill: rgb(219, 219, 219); transform-origin: 349.96px 350.915px;" id="el6iljseybcmg"
                        class="animable"></rect>
                    <rect x="308.25" y="356.79" width="83.42" height="0.25"
                        style="fill: rgb(219, 219, 219); transform-origin: 349.96px 356.915px;" id="elvc9uz5339j7"
                        class="animable"></rect>
                    <rect x="308.25" y="362.78" width="83.42" height="0.25"
                        style="fill: rgb(219, 219, 219); transform-origin: 349.96px 362.905px;" id="elefc38tsqpn"
                        class="animable"></rect>
                    <path d="M392.09,369H308.72a1.87,1.87,0,0,1,0-.25h83.37C392.06,368.86,392.08,369,392.09,369Z"
                        style="fill: rgb(219, 219, 219); transform-origin: 350.403px 368.875px;" id="elboc9099rtr7"
                        class="animable"></path>
                    <path d="M393.67,375H310.23a1.83,1.83,0,0,1-.08-.25h83.44A1.83,1.83,0,0,0,393.67,375Z"
                        style="fill: rgb(219, 219, 219); transform-origin: 351.91px 374.875px;" id="elrh7rra675p"
                        class="animable"></path>
                    <path
                        d="M317.78,380.57h-.26c-.66-1.8-1.32-3.7-1.9-5.55,0-.09-.05-.17-.07-.25a48.46,48.46,0,0,1-1.46-5.74,2.21,2.21,0,0,1,0-.25,15.42,15.42,0,0,1-.26-2.61v-69H314v69a15.42,15.42,0,0,0,.26,2.61c0,.08,0,.16,0,.25a50.67,50.67,0,0,0,1.47,5.74c0,.08.05.17.08.25C316.46,376.88,317.12,378.78,317.78,380.57Z"
                        style="fill: rgb(219, 219, 219); transform-origin: 315.805px 338.87px;" id="elsubnmc0e9up"
                        class="animable"></path>
                    <path
                        d="M323.78,380.57h-.26c-.66-1.8-1.32-3.7-1.9-5.55,0-.09-.05-.17-.07-.25a48.46,48.46,0,0,1-1.46-5.74,2.21,2.21,0,0,1,0-.25,15.42,15.42,0,0,1-.26-2.61v-69H320v69a15.42,15.42,0,0,0,.26,2.61c0,.08,0,.16,0,.25a50.67,50.67,0,0,0,1.47,5.74c0,.08.05.17.08.25C322.46,376.88,323.12,378.78,323.78,380.57Z"
                        style="fill: rgb(219, 219, 219); transform-origin: 321.805px 338.87px;" id="elbm8umu7belg"
                        class="animable"></path>
                    <path
                        d="M329.77,380.57h-.26c-.66-1.8-1.32-3.7-1.9-5.55,0-.09-.05-.17-.07-.25a48.46,48.46,0,0,1-1.46-5.74,2.21,2.21,0,0,1-.05-.25,15.42,15.42,0,0,1-.26-2.61v-69H326v69a15.42,15.42,0,0,0,.26,2.61c0,.08,0,.16,0,.25a50.67,50.67,0,0,0,1.47,5.74c0,.08,0,.17.08.25C328.45,376.88,329.11,378.78,329.77,380.57Z"
                        style="fill: rgb(219, 219, 219); transform-origin: 327.77px 338.87px;" id="elz0warp46bar"
                        class="animable"></path>
                    <path
                        d="M335.77,380.57h-.26c-.66-1.8-1.32-3.7-1.9-5.55,0-.09-.05-.17-.08-.25a50.49,50.49,0,0,1-1.46-5.74c0-.08,0-.17,0-.25a15.42,15.42,0,0,1-.26-2.61v-69H332v69a15.42,15.42,0,0,0,.26,2.61c0,.08,0,.16,0,.25a50.67,50.67,0,0,0,1.47,5.74c0,.08,0,.17.08.25C334.45,376.88,335.11,378.78,335.77,380.57Z"
                        style="fill: rgb(219, 219, 219); transform-origin: 333.79px 338.87px;" id="elvftfi0nyytm"
                        class="animable"></path>
                    <path
                        d="M341.76,380.57h-.26c-.66-1.8-1.32-3.7-1.9-5.55,0-.09-.05-.17-.07-.25a48.46,48.46,0,0,1-1.46-5.74,2.21,2.21,0,0,1-.05-.25,15.42,15.42,0,0,1-.26-2.61v-69H338v69a15.42,15.42,0,0,0,.26,2.61c0,.08,0,.16,0,.25a50.67,50.67,0,0,0,1.47,5.74c0,.08.05.17.08.25C340.44,376.88,341.1,378.78,341.76,380.57Z"
                        style="fill: rgb(219, 219, 219); transform-origin: 339.76px 338.87px;" id="eltu8btnzh52"
                        class="animable"></path>
                    <path
                        d="M347.76,380.57h-.26c-.66-1.8-1.32-3.7-1.9-5.55,0-.09-.05-.17-.07-.25a48.46,48.46,0,0,1-1.46-5.74,2.21,2.21,0,0,1-.05-.25,15.42,15.42,0,0,1-.26-2.61v-69H344v69a15.42,15.42,0,0,0,.26,2.61c0,.08,0,.16,0,.25a50.67,50.67,0,0,0,1.47,5.74c0,.08.05.17.08.25C346.44,376.88,347.1,378.78,347.76,380.57Z"
                        style="fill: rgb(219, 219, 219); transform-origin: 345.76px 338.87px;" id="eldowsl2tlat"
                        class="animable"></path>
                    <path
                        d="M353.75,380.57h-.26c-.66-1.8-1.32-3.7-1.9-5.55,0-.09,0-.17-.08-.25a50.49,50.49,0,0,1-1.46-5.74c0-.08,0-.17,0-.25a15.42,15.42,0,0,1-.26-2.61v-69H350v69a15.42,15.42,0,0,0,.26,2.61c0,.08,0,.16,0,.25a50.67,50.67,0,0,0,1.47,5.74c0,.08.05.17.08.25C352.43,376.88,353.09,378.78,353.75,380.57Z"
                        style="fill: rgb(219, 219, 219); transform-origin: 351.77px 338.87px;" id="eldk57wgq67jv"
                        class="animable"></path>
                    <path
                        d="M359.75,380.57h-.26c-.66-1.8-1.32-3.7-1.9-5.55,0-.09,0-.17-.08-.25a50.49,50.49,0,0,1-1.46-5.74c0-.08,0-.17,0-.25a15.42,15.42,0,0,1-.26-2.61v-69H356v69a15.42,15.42,0,0,0,.26,2.61c0,.08,0,.16,0,.25a50.67,50.67,0,0,0,1.47,5.74c0,.08.05.17.08.25C358.43,376.88,359.09,378.78,359.75,380.57Z"
                        style="fill: rgb(219, 219, 219); transform-origin: 357.77px 338.87px;" id="elf89sb5ubqgw"
                        class="animable"></path>
                    <path
                        d="M365.74,380.57h-.26c-.66-1.8-1.32-3.7-1.9-5.55,0-.09-.05-.17-.07-.25a48.46,48.46,0,0,1-1.46-5.74,2.21,2.21,0,0,1-.05-.25,15.42,15.42,0,0,1-.26-2.61v-69H362v69a15.42,15.42,0,0,0,.26,2.61c0,.08,0,.16,0,.25a50.67,50.67,0,0,0,1.47,5.74c0,.08.05.17.08.25C364.42,376.88,365.08,378.78,365.74,380.57Z"
                        style="fill: rgb(219, 219, 219); transform-origin: 363.74px 338.87px;" id="el0890gxk9lc8a"
                        class="animable"></path>
                    <path
                        d="M371.74,380.57h-.26c-.66-1.8-1.32-3.7-1.9-5.55,0-.09-.05-.17-.07-.25a48.46,48.46,0,0,1-1.46-5.74,2.21,2.21,0,0,1-.05-.25,15.42,15.42,0,0,1-.26-2.61v-69H368v69a15.42,15.42,0,0,0,.26,2.61c0,.08,0,.16,0,.25a50.67,50.67,0,0,0,1.47,5.74c0,.08.05.17.08.25C370.42,376.88,371.08,378.78,371.74,380.57Z"
                        style="fill: rgb(219, 219, 219); transform-origin: 369.74px 338.87px;" id="elyvp6lwzu24r"
                        class="animable"></path>
                    <path
                        d="M377.73,380.57h-.26c-.66-1.8-1.32-3.7-1.9-5.55,0-.09-.05-.17-.08-.25A50.49,50.49,0,0,1,374,369c0-.08,0-.17,0-.25a15.42,15.42,0,0,1-.26-2.61v-69H374v69a15.42,15.42,0,0,0,.26,2.61c0,.08,0,.16,0,.25a50.67,50.67,0,0,0,1.47,5.74c0,.08.05.17.08.25C376.41,376.88,377.07,378.78,377.73,380.57Z"
                        style="fill: rgb(219, 219, 219); transform-origin: 375.735px 338.855px;" id="el7e9dk6sd6sk"
                        class="animable"></path>
                    <path
                        d="M383.73,380.57h-.26c-.66-1.8-1.32-3.7-1.9-5.55,0-.09-.05-.17-.08-.25A50.49,50.49,0,0,1,380,369c0-.08,0-.17,0-.25a15.42,15.42,0,0,1-.26-2.61v-69H380v69a15.42,15.42,0,0,0,.26,2.61c0,.08,0,.16,0,.25a50.67,50.67,0,0,0,1.47,5.74c0,.08.05.17.08.25C382.41,376.88,383.07,378.78,383.73,380.57Z"
                        style="fill: rgb(219, 219, 219); transform-origin: 381.735px 338.855px;" id="el2vrqnjed56e"
                        class="animable"></path>
                    <path
                        d="M389.72,380.57h-.26c-.66-1.8-1.32-3.7-1.9-5.55,0-.09-.05-.17-.07-.25A48.46,48.46,0,0,1,386,369a2.21,2.21,0,0,1,0-.25,15.42,15.42,0,0,1-.26-2.61v-69H386v69a15.42,15.42,0,0,0,.26,2.61c0,.08,0,.16,0,.25a50.67,50.67,0,0,0,1.47,5.74c0,.08.05.17.08.25C388.4,376.88,389.06,378.78,389.72,380.57Z"
                        style="fill: rgb(219, 219, 219); transform-origin: 387.73px 338.855px;" id="elgmyfz9usz7f"
                        class="animable"></path>
                    <path
                        d="M320.79,313.58c4.93-.21,9.87-.3,14.8-.38s9.86-.08,14.8-.12,9.86,0,14.79.12l7.4.14c2.47.08,4.93.13,7.4.24-2.47.11-4.93.16-7.4.25l-7.4.14c-4.93.07-9.86.07-14.79.11s-9.87,0-14.8-.12S325.72,313.79,320.79,313.58Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 350.385px 313.58px;" id="elc7c516uw0ir"
                        class="animable"></path>
                    <path
                        d="M320.79,319.46c4.93-.2,9.87-.3,14.8-.38s9.86-.08,14.8-.12,9.86,0,14.79.12l7.4.14c2.47.08,4.93.13,7.4.24-2.47.12-4.93.16-7.4.25l-7.4.14c-4.93.08-9.86.07-14.79.11s-9.87,0-14.8-.11S325.72,319.67,320.79,319.46Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 350.385px 319.46px;" id="elpn10j8imkn"
                        class="animable"></path>
                    <path
                        d="M320.79,325.34c3.53-.2,7-.3,10.58-.38s7.05-.1,10.58-.12,7.05,0,10.58.12l5.28.14c1.77.08,3.53.13,5.29.24-1.76.12-3.52.17-5.29.25l-5.28.14c-3.53.09-7.06.1-10.58.11s-7.06,0-10.58-.11S324.32,325.55,320.79,325.34Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 341.945px 325.338px;" id="elir5aczpgox8"
                        class="animable"></path>
                    <path
                        d="M320.79,337.11c2.14-.21,4.28-.3,6.42-.38s4.28-.11,6.42-.12,4.28,0,6.43.11l3.21.14c1.07.09,2.14.13,3.21.25-1.07.11-2.14.16-3.21.24l-3.21.14c-2.15.09-4.29.11-6.43.12s-4.28,0-6.42-.12S322.93,337.31,320.79,337.11Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 333.635px 337.11px;" id="el1xfxyeh1ceh"
                        class="animable"></path>
                    <path
                        d="M320.79,343c4.93-.21,9.87-.3,14.8-.38s9.86-.08,14.8-.12,9.86,0,14.79.11l7.4.14c2.47.09,4.93.14,7.4.25-2.47.11-4.93.16-7.4.24l-7.4.14c-4.93.08-9.86.08-14.79.12s-9.87,0-14.8-.12S325.72,343.2,320.79,343Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 350.385px 343px;" id="el9qzwf8opmx8"
                        class="animable"></path>
                    <path
                        d="M320.79,348.87c4.19-.2,8.37-.3,12.56-.38s8.37-.08,12.56-.12,8.37,0,12.56.12l6.28.14c2.09.08,4.19.13,6.28.24-2.09.11-4.19.16-6.28.25l-6.28.14c-4.19.08-8.37.07-12.56.11s-8.37,0-12.56-.12S325,349.08,320.79,348.87Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 345.91px 348.87px;" id="elvt7fwxdrznm"
                        class="animable"></path>
                    <path
                        d="M320.79,354.75c3.46-.2,6.91-.3,10.37-.38s6.91-.1,10.37-.12,6.91,0,10.37.12l5.19.14c1.73.08,3.45.13,5.18.24-1.73.12-3.45.17-5.18.25l-5.19.14c-3.46.09-6.91.1-10.37.11s-6.91,0-10.37-.11S324.25,355,320.79,354.75Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 341.53px 354.748px;" id="el0inplozrdr78"
                        class="animable"></path>
                    <g id="elm218cyv5w7j">
                        <g style="opacity: 0.5; transform-origin: 350.86px 302.35px;" class="animable">
                            <polygon
                                points="331.45 288.66 327.81 291.03 331.92 289.45 333.47 292.04 331.81 293.49 333.93 292.8 334.52 293.8 332.26 295.44 334.84 294.33 335.29 295.08 304.8 313.3 303.46 311.06 305.85 309.48 303.11 310.46 302.54 309.51 304.33 308.23 302.24 309 301.96 308.54 304.81 306.23 301.24 307.34 300.27 305.71 330.76 287.5 331.45 288.66"
                                style="fill: rgb(255, 255, 255); transform-origin: 317.78px 300.4px;" id="el5cpm8iz6nms"
                                class="animable"></polygon>
                            <polygon
                                points="400.58 311.5 397.21 308.87 399.98 312.2 398.03 314.5 396.15 313.42 397.46 315.17 396.7 316.06 394.46 314.49 396.3 316.54 395.74 317.2 369.11 294.59 370.8 292.6 373.02 294.32 371.25 292.08 371.97 291.22 373.73 292.49 372.35 290.78 372.7 290.37 375.77 292.3 373.6 289.3 374.82 287.86 401.45 310.47 400.58 311.5"
                                style="fill: rgb(255, 255, 255); transform-origin: 385.28px 302.53px;"
                                id="eliadvmi70bac" class="animable"></polygon>
                        </g>
                    </g>
                </g>
                <g id="freepik--Bookmarks--inject-2" class="animable" style="transform-origin: 418.22px 242.105px;">
                    <polygon
                        points="446.52 261.55 390.44 261.55 377.89 252.94 390.44 244.34 446.52 244.34 446.52 261.55"
                        style="fill: rgb(155, 164, 181); transform-origin: 412.205px 252.945px;" id="eloj9xx1pbzqd"
                        class="animable"></polygon>
                    <polygon
                        points="458.55 239.88 402.46 239.88 389.92 231.27 402.46 222.66 458.55 222.66 458.55 239.88"
                        style="fill: rgb(69, 90, 100); transform-origin: 424.235px 231.27px;" id="elmep0wqarcp"
                        class="animable"></polygon>
                </g>
                <g id="freepik--Puff--inject-2" class="animable animator-hidden"
                    style="transform-origin: 159.107px 328.368px;">
                    <path
                        d="M83,429.09l159.75.68c38.83-30.49,42.84-75.66,15.14-103-16.77-16.56-38.06-13.22-58.33-15.86h-.06a59.74,59.74,0,0,1-20.56-6c-20.87-11-32.64-37-50.2-58.84-2.19-2.74-4.47-5.41-6.88-8-14.44-15.42-43.18-15.92-58.21,5.75C25.47,298.86,43,380.84,83,429.09Z"
                        style="fill: rgb(219, 219, 219); transform-origin: 159.107px 328.368px;" id="eldquneg3j6lr"
                        class="animable"></path>
                    <path
                        d="M79.47,303.06c4.18,65.54,79.88,90,127.15,70.37,41.11-17.07,27.65-56-7-62.56h-.06a59.74,59.74,0,0,1-20.56-6c-20.87-11-32.64-37-50.2-58.84C102.6,232.4,76.4,255.06,79.47,303.06Z"
                        style="fill: rgb(199, 199, 199); transform-origin: 155.631px 311.067px;" id="elj75us8rr3bp"
                        class="animable"></path>
                </g>
                <g id="freepik--Character--inject-2" class="animable animator-hidden"
                    style="transform-origin: 221.456px 334.573px;">
                    <path
                        d="M134.89,213.6c11.39,10.8,19.22,38.89,13.45,56.62-6.88,21.12-25.72,31.9-41.17,26.9-14-4.54-20.21-18.72-15.06-29.27,5-10.18,14.48-13.91,16.24-23,.84-4.34-.61-11.54-.25-18.08C108.74,214.9,126,205.2,134.89,213.6Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 120.3px 254.385px;" id="el4z6vhinar5r"
                        class="animable"></path>
                    <path
                        d="M90.23,270.29A22.48,22.48,0,0,1,93,264.05a27.91,27.91,0,0,1,4.16-5.16c1.58-1.53,3.13-3.11,4.63-4.76a29.11,29.11,0,0,0,4-5.5,20,20,0,0,0,1.45-3.22,14.93,14.93,0,0,0,.62-3.57,68.09,68.09,0,0,0-.16-7.16,30.8,30.8,0,0,1,.34-7,20.63,20.63,0,0,1,2.73-6.4,19.23,19.23,0,0,0-3.11,6.28,30.32,30.32,0,0,0-.59,7.12c0,2.38.21,4.76,0,7.07a14.72,14.72,0,0,1-.62,3.34,19.78,19.78,0,0,1-1.41,3c-2.14,3.95-5.37,7-8.39,10.24a28.33,28.33,0,0,0-4,5.43A21.75,21.75,0,0,0,90.23,270.29Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 100.5px 245.785px;" id="eloja1pv7fms"
                        class="animable"></path>
                    <path
                        d="M217.29,458.63c-2.35-.86-55.39-43.25-56.39-46.14-.38-1.1,5.34-9.18,12.53-18.75,1.55-2.07,3.17-4.2,4.82-6.35,10.72-14,22.42-28.53,22.42-28.53l35.56,28.25-23.39,27.76-5.13,6.1s13,25.31,13.8,28.6S219.64,459.49,217.29,458.63Z"
                        style="fill: rgb(211, 118, 106); transform-origin: 198.556px 408.783px;" id="eljxakw0n0phm"
                        class="animable"></path>
                    <path
                        d="M217.29,458.63c-2.35-.86-55.39-43.25-56.39-46.14-.46-1.34,8.08-13,17.35-25.1l34.59,27.48-5.13,6.1s13,25.31,13.8,28.6S219.64,459.49,217.29,458.63Z"
                        style="fill: rgb(255, 255, 255); transform-origin: 191.268px 423.048px;" id="ele8shezvhozs"
                        class="animable"></path>
                    <path
                        d="M217.29,458.63c-2.35-.86-55.39-43.25-56.39-46.14-.38-1.1,5.34-9.18,12.53-18.75L207.71,421s13,25.31,13.8,28.6S219.64,459.49,217.29,458.63Z"
                        style="fill: rgb(155, 164, 181); transform-origin: 191.268px 426.223px;" id="elrinp3uvvpxf"
                        class="animable"></path>
                    <path
                        d="M218.23,455.9c-8.72-7.32-44.57-36-53.74-42.61-.08-.06-.12,0-.05,0,8.48,7.45,44.56,35.88,53.67,42.71C218.3,456.19,218.41,456.06,218.23,455.9Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 191.363px 434.679px;" id="elje94akan0e"
                        class="animable"></path>
                    <path
                        d="M219.62,444.94a9.12,9.12,0,0,0-7.05-2.08,8.81,8.81,0,0,0-5.78,3.16c0,.05.06.13.11.08a10.57,10.57,0,0,1,12.64-1.05A.07.07,0,0,0,219.62,444.94Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 213.213px 444.451px;" id="ela43c7r5njab"
                        class="animable"></path>
                    <path
                        d="M210.45,424.61c-3.52-2.9-8.65-4.94-13.19-3.79-.17,0-.11.29,0,.32a63.1,63.1,0,0,1,12.86,3.95A.28.28,0,0,0,210.45,424.61Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 203.865px 422.817px;" id="elhd41aaiv0dc"
                        class="animable"></path>
                    <path
                        d="M212.34,427.87c-3.52-2.89-8.65-4.93-13.19-3.79-.17.05-.11.3,0,.33a63.1,63.1,0,0,1,12.86,3.95A.29.29,0,0,0,212.34,427.87Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 205.756px 426.084px;" id="elhx2rdoia0fm"
                        class="animable"></path>
                    <path
                        d="M214.23,431.14c-3.52-2.89-8.65-4.93-13.19-3.79-.17,0-.11.29,0,.32a62.32,62.32,0,0,1,12.86,4A.29.29,0,0,0,214.23,431.14Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 207.655px 429.372px;" id="elt0pb12wdqoq"
                        class="animable"></path>
                    <path
                        d="M216.12,434.41c-3.52-2.9-8.65-4.94-13.18-3.8-.18.05-.11.3,0,.33a62.91,62.91,0,0,1,12.86,3.95A.28.28,0,0,0,216.12,434.41Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 209.538px 432.613px;" id="elf7lj7nf3f9p"
                        class="animable"></path>
                    <path d="M173.5,406.65c-4-3.18-8.95,3-4.94,6.22S177.51,409.84,173.5,406.65Z"
                        style="fill: rgb(255, 255, 255); transform-origin: 171.031px 409.766px;" id="ely08jyuuyhwm"
                        class="animable"></path>
                    <path
                        d="M221.88,418.18c-.6-2.93-4-3.28-6.39-2.62A23.85,23.85,0,0,0,205,422.08a.12.12,0,0,0,0,.19.57.57,0,0,0,.41.8c3.94.27,8.11,1.05,12,.1C219.71,422.62,222.46,421,221.88,418.18Zm-10.41,4.08c-1.94-.09-3.86-.27-5.8-.29,2.05-1.26,4-2.61,6.22-3.67a26.77,26.77,0,0,1,3.22-1.36c1.71-.55,7.58-.74,4.84,3.42C218.44,422.65,213.78,422.36,211.47,422.26Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 213.453px 419.453px;" id="el2zrtuatfyd2"
                        class="animable"></path>
                    <path
                        d="M195.09,416.33c2.72,2.95,6.62,4.62,10,6.58a.55.55,0,0,0,.78-.43c.08,0,.15-.05.13-.14a23.83,23.83,0,0,0-5.11-11.26c-1.58-1.86-4.63-3.47-6.77-1.37S193.5,414.61,195.09,416.33Zm-.53-3.74c0-5,4.81-1.56,5.92-.15a24.49,24.49,0,0,1,1.92,2.92,72,72,0,0,1,3.13,6.51c-1.62-1.07-3.32-2-5-3C198.57,417.68,194.54,415.33,194.56,412.59Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 199.534px 415.84px;" id="elvgkukhswux"
                        class="animable"></path>
                    <path
                        d="M272.15,332.79c-2.43,18.47-48,71.81-53.23,77.93l-1.2,1.39-37.66-28.95.43-.56,33.17-43.42-98.93-.58,37.56-29.21s3.05,1.76,9.38.83c21.84-3.19,71.06-10.27,82.67-9.8C259.31,301,274.39,315.83,272.15,332.79Z"
                        style="fill: rgb(55, 71, 79); transform-origin: 193.551px 356.254px;" id="el3sq4mbhsvdj"
                        class="animable"></path>
                    <path
                        d="M225.57,323a46.93,46.93,0,0,0-3.42,4.39c-1.17,1.54-2.36,3.06-3.53,4.6l0,0c.21-.45.41-.9.63-1.35.74-1.53,1.33-3.11,2.2-4.57a.08.08,0,0,0-.13-.09c-.9,1.46-1.94,2.84-2.71,4.37-.37.72-.71,1.44-1,2.18-.17.41-.35.82-.51,1.23a5.89,5.89,0,0,0-.21.59c-.53.71-1,1.43-1.55,2.16-1.12,1.62-2.1,3.33-3.23,4.93-.06.09.07.17.14.09,1.14-1.51,2.42-2.92,3.59-4.42s2.3-3.09,3.41-4.67,2.14-3.09,3.22-4.64a46.66,46.66,0,0,0,3.27-4.76C225.7,323.05,225.62,323,225.57,323Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 218.917px 332.281px;" id="el21rdz543aca"
                        class="animable"></path>
                    <path
                        d="M134.76,274.79c5.35,10.27,25.85,43.13,37.33,44.46,7.53.87,37-4.94,41.47-12.49,1.93-3.29-3.95-24.33-7.84-23.09s-27.46,6.74-30.48,6.18-27.49-23.71-36.32-29.19C123.7,251.22,131.88,269.26,134.76,274.79Z"
                        style="fill: rgb(211, 118, 106); transform-origin: 171.956px 288.655px;" id="elyzno28wozo"
                        class="animable"></path>
                    <path
                        d="M196.55,283l3.8,32.11s-23.19,6.63-33.66,3.72c-12.73-3.53-33.35-41-36.24-47.15-4.74-10.16-4-16.53,1.9-15.35,2.3.44,5.37,2,9.21,5,4,3.1,27.21,23.39,34.36,27C179.91,290.45,196.55,283,196.55,283Z"
                        style="fill: rgb(69, 90, 100); transform-origin: 163.849px 287.879px;" id="elct2hhr3hurm"
                        class="animable"></path>
                    <path
                        d="M196.55,283l3.8,32.12s-3.85,1.1-9.12,2.2c-7.66,1.61-18.33,3.23-24.54,1.51-12.72-3.53-33.35-41-36.24-47.16-3.43-7.34-4-12.71-1.79-14.67a4.12,4.12,0,0,1,3.7-.68c2.28.45,5.36,2,9.2,5,4,3.1,27.2,23.4,34.35,27.06C179.91,290.46,196.55,283,196.55,283Z"
                        style="fill: rgb(155, 164, 181); transform-origin: 163.849px 287.856px;" id="elw3gjsxqdj0g"
                        class="animable"></path>
                    <path
                        d="M194.44,315c-.71-4.73-2.88-24.18-3.06-28.42,0-.29.17-.37.22-.07,2.45,14.12,2.57,23.78,3,28.45C194.63,315.08,194.45,315.12,194.44,315Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 192.992px 300.696px;" id="elzj19r27eh5o"
                        class="animable"></path>
                    <path
                        d="M130.45,271.68c2.88,6.19,23.52,43.64,36.23,47.16,3.14.87,7.43.88,11.89.49l-47-63.11a3.65,3.65,0,0,0-2.91.79C126.46,259,127,264.34,130.45,271.68Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 152.958px 287.875px;" id="elakeewo3f19"
                        class="animable"></path>
                    <path
                        d="M95.13,334.68l60.16-15.37-5.93-21.72s4.76-6.81,2.73-13.31c-1.8-5.79-15.52-23-18.29-25.31-4.75-3.93-13.25-5.25-17.9.24C96.72,281.82,95.13,334.68,95.13,334.68Z"
                        style="fill: rgb(155, 164, 181); transform-origin: 125.21px 295.113px;" id="el2qa4sfel357"
                        class="animable"></path>
                    <g id="el9a1pi8pzqj">
                        <path
                            d="M130.5,256.93l-16,4c.45-.59.91-1.16,1.38-1.72l.33-.37L127.69,256A15.27,15.27,0,0,1,130.5,256.93Zm3.77,2.47-22.58,5.67c-.1.17-.21.34-.3.51l23.23-5.83Zm2.91,3.22-28,7c-.31.62-.62,1.26-.92,1.9L138.34,264C137.94,263.51,137.55,263.05,137.18,262.62Zm3.45,4.22-34.11,8.56-.2.48,34.6-8.67Zm2.55,3.31-38.34,9.62q-.33.92-.63,1.83l40-10C143.89,271.08,143.53,270.61,143.18,270.15Zm3.15,4.3L103,285.32a4,4,0,0,0-.14.46l43.7-11C146.5,274.7,146.41,274.58,146.33,274.45Zm2.28,3.37-46.82,11.75c-.15.59-.31,1.19-.47,1.78l48.21-12.09C149.24,278.8,148.94,278.32,148.61,277.82Zm2.62,4.44L100.44,295c0,.15-.07.31-.11.46l51.09-12.82A2.69,2.69,0,0,0,151.23,282.26Zm1.23,3.63L99.52,299.17l-.36,1.76,53.43-13.4A10.16,10.16,0,0,0,152.46,285.89Zm-54,18.63c0,.15-.06.31-.08.46l53.67-13.46c0-.16.08-.31.11-.47Zm-.7,4.12c-.09.59-.18,1.17-.26,1.74l52-13.05a21.09,21.09,0,0,0,1.09-1.94Zm52.39-8.05L97,313.93l-.06.45L150.29,301Zm1,3.69L96.51,318c-.07.59-.14,1.16-.2,1.72l55.3-13.88Zm1.3,4.77L95.94,323.23c0,.15,0,.3,0,.45l56.7-14.22Zm1,3.69L95.59,327.26c0,.6-.09,1.17-.13,1.7l58.46-14.66Zm1.3,4.76L95.25,332.44c0,.15,0,.3,0,.44l59.69-15Z"
                            style="opacity: 0.1; transform-origin: 125.095px 294.44px;" class="animable"></path>
                    </g>
                    <path
                        d="M141.82,267.88c1.51,1.88,3.15,3.68,4.71,5.53-.69-1.36-1.38-2.71-2.13-4,0,0,0-.05,0,0a28.12,28.12,0,0,1,2.88,5,37.12,37.12,0,0,1,3.2,4.4A17.87,17.87,0,0,1,153,284.7a15,15,0,0,1-.27,6.43,40.72,40.72,0,0,1-2.66,7.06c-.14.3-.59.08-.48-.22,1.48-4,3.15-8.22,2.49-12.51s-3.18-7.93-5.64-11.4a60.46,60.46,0,0,0-4.76-6.09C141.61,267.9,141.76,267.8,141.82,267.88Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 147.444px 283.092px;" id="elctc4k1k0g6"
                        class="animable"></path>
                    <path
                        d="M140.48,294.74a59.43,59.43,0,0,0-8,3.6c-1.27.72-2.49,1.48-3.7,2.28-.61.4-1.22.77-1.84,1.14a8.9,8.9,0,0,1-2,1,.05.05,0,1,0,0,.1,15.08,15.08,0,0,0,2.06-.59,16.89,16.89,0,0,0,1.87-.9c1.29-.71,2.54-1.48,3.83-2.2,2.59-1.46,5.17-2.92,7.86-4.19C140.7,294.9,140.61,294.69,140.48,294.74Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 132.76px 298.796px;" id="el57zpn5nlo7d"
                        class="animable"></path>
                    <path
                        d="M148.09,295.36A65.11,65.11,0,0,0,141,296.9c-1.17.32-2.3.71-3.43,1.14-.54.2-1.07.41-1.6.63s-1.15.56-1.73.79c-.07,0,0,.12,0,.1.57-.2,1.16-.31,1.74-.48l1.72-.51c1.16-.34,2.31-.67,3.46-1,2.3-.7,4.6-1.37,6.93-2C148.27,295.52,148.22,295.34,148.09,295.36Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 141.208px 297.46px;" id="el2eiyyrl0yfe"
                        class="animable"></path>
                    <path
                        d="M122,259.05c.36,1.08,6.31,7.76,11.34,7.05,1.63-.23.76-9.23.76-9.23l.09-.67,1.21-9.51-11.59-6-1.66-.79s-.16,2.63-.33,5.89l0,.47c0,.18,0,.36,0,.53,0,.49-.06,1-.08,1.48s0,.75,0,1.15l0,1.18A61.67,61.67,0,0,0,122,259.05Z"
                        style="fill: rgb(211, 118, 106); transform-origin: 128.548px 253.026px;" id="el1bpre848jup"
                        class="animable"></path>
                    <path
                        d="M121.83,245.8a19.22,19.22,0,0,0,12.37,10.4l1.21-9.51-11.59-6-1.66-.79S122,242.54,121.83,245.8Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 128.62px 248.05px;" id="eljsd9elary2j"
                        class="animable"></path>
                    <path
                        d="M147.3,229.71c4.29,16.26-5,20.67-8.47,21.59-3.18.84-14.13,3.28-20.08-12.45S119,216,126.18,213.7,143,213.46,147.3,229.71Z"
                        style="fill: rgb(211, 118, 106); transform-origin: 132.387px 232.437px;" id="els1emqaanypl"
                        class="animable"></path>
                    <path
                        d="M144.4,229a11.18,11.18,0,0,1-1.16,0,1.92,1.92,0,0,1-1.18-.25.61.61,0,0,1-.14-.72,1.48,1.48,0,0,1,1.37-.61,2.16,2.16,0,0,1,1.49.5A.64.64,0,0,1,144.4,229Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 143.409px 228.213px;" id="elvhcororfpy"
                        class="animable"></path>
                    <path
                        d="M132.89,230.61a10.07,10.07,0,0,0,1.07-.45,1.87,1.87,0,0,0,1-.66.61.61,0,0,0-.14-.72,1.49,1.49,0,0,0-1.5-.07,2.16,2.16,0,0,0-1.2,1A.63.63,0,0,0,132.89,230.61Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 133.53px 229.595px;" id="elbvni67ekn85"
                        class="animable"></path>
                    <path
                        d="M135.93,233.32s-.08.08-.07.12c.28,1.11.41,2.43-.52,3,0,0,0,.08,0,.06C136.56,236.08,136.37,234.33,135.93,233.32Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 135.803px 234.912px;" id="eldmclqqhd5z"
                        class="animable"></path>
                    <path d="M134.68,232.37c-1.83.25-1.2,3.89.5,3.66S136.21,232.16,134.68,232.37Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 134.876px 234.201px;" id="ello3l133m3a"
                        class="animable"></path>
                    <path
                        d="M134,232.69c-.28.26-.53.68-.91.78s-.84-.2-1.19-.52c0,0-.06,0-.06.06.12.7.51,1.36,1.27,1.34s1.09-.73,1.14-1.46C134.26,232.75,134.11,232.58,134,232.69Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 133.045px 233.503px;" id="elg4fgc44yjwn"
                        class="animable"></path>
                    <path
                        d="M142.5,231.75s.09,0,.1.09c.15,1.13.52,2.41,1.6,2.61,0,0,0,.07,0,.07C142.93,234.55,142.46,232.85,142.5,231.75Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 143.349px 233.135px;" id="elym423oj22lb"
                        class="animable"></path>
                    <path d="M143.31,230.41c1.79-.44,2.54,3.18.88,3.58S141.8,230.78,143.31,230.41Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 143.8px 232.197px;" id="ell8zkmbriud"
                        class="animable"></path>
                    <path
                        d="M144.11,230.49c.33.13.68.42,1,.37s.61-.51.79-.93c0-.05,0,0,.06,0,.16.68.08,1.45-.55,1.72s-1.15-.25-1.46-.91C143.92,230.65,144,230.43,144.11,230.49Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 144.987px 230.815px;" id="el0ih12v6mk0xv"
                        class="animable"></path>
                    <path
                        d="M138,242.91c.3.24.62.57,1,.55a3.13,3.13,0,0,0,1.18-.44s.08,0,.06,0a1.54,1.54,0,0,1-1.36.8,1.23,1.23,0,0,1-1-.89C137.82,242.92,137.9,242.88,138,242.91Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 139.051px 243.36px;" id="elj9phmw8iat"
                        class="animable"></path>
                    <path
                        d="M141.89,238s.55,1.64.7,2.43c0,.07-.17.15-.44.21h0a3.81,3.81,0,0,1-3.92-.73.08.08,0,0,1,.09-.13,5.81,5.81,0,0,0,3.63.35c0-.23-1-2.78-.91-2.81a7.13,7.13,0,0,1,1.88.07c-1-3.44-2.62-6.69-3.6-10.14a.11.11,0,0,1,.2-.09,58,58,0,0,1,4.34,10.76C144,238.34,142.24,238.05,141.89,238Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 141.036px 233.998px;" id="elfdoyqazqn2"
                        class="animable"></path>
                    <path
                        d="M118.92,239.76a7,7,0,0,0,3.24-6.06,18,18,0,0,0,6.69-6.72c-.07.36-.61,2.94-.92,4.25,10.41-3.16,12.81-11.66,12.81-11.66a18.53,18.53,0,0,1,5.38,6.23s-.65-6.53-4.48-10.53A10.58,10.58,0,0,0,131.45,212a15.1,15.1,0,0,0-14.17,6.13C111.2,226.43,118.92,239.76,118.92,239.76Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 130.533px 225.753px;" id="elrif35ktrbfp"
                        class="animable"></path>
                    <path
                        d="M135.82,228.58a19.58,19.58,0,0,1-5.24,2.6s0,0,0,0a16.78,16.78,0,0,0,7.28-5.58,15.9,15.9,0,0,0,1.94-3.46,10.83,10.83,0,0,0,1-4.21c0-.11.16-.11.16,0a12.9,12.9,0,0,1-.38,4.29,11.77,11.77,0,0,1-2,3.78,13.94,13.94,0,0,1-2.76,2.61"
                        style="fill: rgb(38, 50, 56); transform-origin: 135.79px 224.514px;" id="elbw9rm132he"
                        class="animable"></path>
                    <path d="M121.67,239.42s-4.51-4.54-6.64-2.85,1.9,8.72,4.83,9.27a2.84,2.84,0,0,0,3.49-2.16Z"
                        style="fill: rgb(211, 118, 106); transform-origin: 118.891px 241.062px;" id="eluci2zq5cofd"
                        class="animable"></path>
                    <path
                        d="M116.23,238.56s0,.07,0,.07c2.07.45,3.4,2.07,4.43,3.8a1.57,1.57,0,0,0-2.39,0s0,.11.07.09a1.76,1.76,0,0,1,2,.27,8.61,8.61,0,0,1,1.18,1.38c.12.16.41,0,.31-.18l0,0C121.43,241.46,118.92,238.35,116.23,238.56Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 119.04px 241.393px;" id="elorkuvxiky5o"
                        class="animable"></path>
                    <path
                        d="M108.93,267.55c-9,14.1-19.3,36.61-19.58,52.53-.14,7.77,13.3,14.83,18.2,12.48,11.5-5.55,27.52-18.29,33.82-26.69,2.23-3-21.58-22.91-23.33-19.35s-2.83,5.64-4.58,7c-.86.67,4.2-9.8,6.75-24.46C123.68,249.05,112.19,262.44,108.93,267.55Z"
                        style="fill: rgb(211, 118, 106); transform-origin: 115.433px 295.716px;" id="elb44ib10an7h"
                        class="animable"></path>
                    <path d="M136.87,252.32s-3.73-4.62-.37-6.9,6.29,2.86,6.29,2.86Z"
                        style="fill: rgb(255, 145, 180); transform-origin: 138.943px 248.578px;" id="elx082oesoqb"
                        class="animable"></path>
                    <g id="elaj07zogi5xg">
                        <rect x="147.88" y="246.48" width="7.16" height="41.74"
                            style="fill: rgb(155, 164, 181); transform-origin: 151.46px 267.35px; transform: rotate(-34.31deg);"
                            class="animable"></rect>
                    </g>
                    <g id="elsyc2p34zjwq">
                        <rect x="147.88" y="246.48" width="7.16" height="41.74"
                            style="opacity: 0.2; transform-origin: 151.46px 267.35px; transform: rotate(-34.31deg);"
                            class="animable"></rect>
                    </g>
                    <g id="elufcl6f0ddnd">
                        <rect x="135.86" y="249.78" width="8.36" height="1.66"
                            style="fill: rgb(55, 71, 79); transform-origin: 140.04px 250.61px; transform: rotate(-34.31deg);"
                            class="animable"></rect>
                    </g>
                    <g id="elqgqrs995gxd">
                        <rect x="136.89" y="251.29" width="8.36" height="1.66"
                            style="fill: rgb(55, 71, 79); transform-origin: 141.07px 252.12px; transform: rotate(-34.31deg);"
                            class="animable"></rect>
                    </g>
                    <path
                        d="M166.19,282.56l.68,5.78.23,1.9-1.7-.9-5.13-2.74v-1.26l1.17.46v-1.27l1.18.46v-1.26l1.19.45v-1.26l1.18.45v-1.26Z"
                        style="fill: rgb(255, 255, 255); transform-origin: 163.685px 286.175px;" id="el6f7j0t908kj"
                        class="animable"></path>
                    <polygon points="166.87 288.34 167.1 290.24 165.4 289.34 166.87 288.34"
                        style="fill: rgb(55, 71, 79); transform-origin: 166.25px 289.29px;" id="elihqxygxnzqh"
                        class="animable"></polygon>
                    <path
                        d="M153.91,257.87c2.13,2.94-5.56,7.57-5.56,7.57a6.63,6.63,0,0,1,4.33,1.38c2.11,1.78.24,5.86.24,5.86a8.18,8.18,0,0,1,4.34,2.18c1.84,1.91.54,6.29.54,6.29a7.22,7.22,0,0,1,2.61,4.33c.68,4.59-5.08,8.82-8.13,12.15-3.27,3.56-9.68,6.95-12.16,9.54l-22.84-18.81S124.59,269.8,131,264.8C134.57,262,150.66,253.38,153.91,257.87Z"
                        style="fill: rgb(211, 118, 106); transform-origin: 138.873px 281.884px;" id="el0tc3m5zb3z5"
                        class="animable"></path>
                    <path
                        d="M148.23,265.4c-4.66,1.64-8.91,4.38-13,7.08-.09.06,0,.2.1.14,4-2.73,8.87-4.45,13-7A.12.12,0,0,0,148.23,265.4Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 141.797px 269.012px;" id="eluhrhi7sa86j"
                        class="animable"></path>
                    <path
                        d="M152.6,272.45a13,13,0,0,0-2.84,1.81c-1,.7-1.91,1.43-2.84,2.17q-2.82,2.2-5.51,4.57c-.08.07,0,.2.09.14,1.87-1.47,3.76-2.91,5.7-4.3,1-.7,1.93-1.38,2.91-2.07a15.21,15.21,0,0,0,2.67-2A.17.17,0,0,0,152.6,272.45Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 147.125px 276.791px;" id="eloytuq8wsibn"
                        class="animable"></path>
                    <path
                        d="M157.72,281.21a9.07,9.07,0,0,0-2.47,1.76c-.84.69-1.68,1.38-2.53,2.06-1.69,1.36-3.39,2.72-5.13,4-.09.06,0,.2.1.14,1.77-1.32,3.57-2.61,5.33-3.94.87-.65,1.73-1.31,2.59-2a8.54,8.54,0,0,0,2.19-2S157.77,281.2,157.72,281.21Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 152.676px 285.196px;" id="elxfpot0gxexg"
                        class="animable"></path>
                    <path
                        d="M129.75,265.92a13.62,13.62,0,0,1,6.82-4.51c.11,0,.11,0,0,.08a32.3,32.3,0,0,0-6.78,4.47A0,0,0,1,1,129.75,265.92Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 133.201px 263.685px;" id="eld3k9apvf0n5"
                        class="animable"></path>
                    <path
                        d="M142.5,310.06l-24.83-24.45-3.79,6.87s5.66-15.29,7.1-23.63,1.2-18.12-9.38-5.62c-10.36,12.24-24.24,47.55-23.53,56.7s12.35,14.69,18.21,13.64S142.5,310.06,142.5,310.06Z"
                        style="fill: rgb(155, 164, 181); transform-origin: 115.272px 295.485px;" id="elju1ll59qh"
                        class="animable"></path>
                    <path
                        d="M136,312.7c-3.47-3.29-17.17-17.27-19.93-20.49-.19-.23-.09-.4.14-.19,10.63,9.6,16.68,17.13,19.91,20.53C136.22,312.64,136.11,312.78,136,312.7Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 126.065px 302.324px;" id="ellbxury1ays"
                        class="animable"></path>
                    <path
                        d="M96.12,317.25c1.34-2.32,2.9-4.55,4.39-6.79s3-4.51,4.56-6.71,3.26-4.35,4.94-6.5c.83-1.08,2.46-3.18,3.3-4.25s.92-.82.13.34-2.31,3.26-3.07,4.38c-1.49,2.2-3,4.42-4.49,6.59s-3.15,4.32-4.74,6.47-3.14,4.43-4.85,6.55C96.22,317.42,96.07,317.35,96.12,317.25Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 105.049px 304.845px;" id="ell8yg9pxpm29"
                        class="animable"></path>
                    <path
                        d="M115.94,284.89c.86-2.53,1.9-5,2.57-7.62,0-.1.19-.06.16,0-.5,1.71-.89,3.44-1.34,5.16a2.39,2.39,0,0,0,.13-.21c.39-.66.77-1.34,1.14-2,.05-.09.19,0,.14.09-.34.69-.68,1.39-1,2.09a9.19,9.19,0,0,1-.85,1.65c-.11.37-.21.74-.33,1.11a56.07,56.07,0,0,1-2.85,7.43.15.15,0,0,1-.27-.11C114.18,289.94,115.07,287.4,115.94,284.89Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 116.094px 284.931px;" id="el19b6u6w0hgs"
                        class="animable"></path>
                    <path
                        d="M117.48,285.47c.08-.13.69.51,1,.85.05.05,0,.08-.09,0s-.43-.24-.62-.4c-.58,1.16-3.8,6.63-4,6.87s-.2,0-.15-.14C113.76,292.08,116.76,286.66,117.48,285.47Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 116.046px 289.172px;" id="elm29ythzkilc"
                        class="animable"></path>
                    <path
                        d="M114.43,329.31c7.16-5.23,14.46-10.29,21.93-15.08,2-1.32,4-2.73,6-4.1-.22-.14-2.24-2.28-2.3-2.36s0-.1,0-.06c.23.19,2.81,2.28,3,2.52s-7.49,5.33-11.08,7.87-7.36,4.95-11.09,7.35c-2.12,1.36-4.25,2.7-6.41,4C114.42,329.5,114.35,329.37,114.43,329.31Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 128.729px 318.576px;" id="elvuse6peperb"
                        class="animable"></path>
                    <polygon points="195.89 318.57 158.44 321.81 171.78 272.25 209.23 269.01 195.89 318.57"
                        style="fill: rgb(235, 235, 235); transform-origin: 183.835px 295.41px;" id="elvuvsr5siju8"
                        class="animable"></polygon>
                    <polygon points="198.46 318.35 161 321.58 174.34 272.02 211.79 268.79 198.46 318.35"
                        style="fill: rgb(155, 164, 181); transform-origin: 186.395px 295.185px;" id="el33esvbmu003"
                        class="animable"></polygon>
                    <path
                        d="M178.32,271.68a3.35,3.35,0,0,1-1.44,2.1c-.34.22-.47-.24-.14-.45a2.41,2.41,0,0,0,1-1.33,2.13,2.13,0,0,0,.07-.27,1.77,1.77,0,0,0,0-.92.59.59,0,0,0-.23-.31l0,0-.05,0a.16.16,0,0,1-.07,0,.4.4,0,0,0-.26,0,1.21,1.21,0,0,0-.41.32,2.46,2.46,0,0,0-.33.53c0,.09-.09.19-.14.29v.06l0,.1a.25.25,0,0,0,0,.07l-.53.05a4,4,0,0,1,.43-1,2,2,0,0,1,1.36-1,.82.82,0,0,1,.9.69A2.2,2.2,0,0,1,178.32,271.68Z"
                        style="fill: rgb(69, 90, 100); transform-origin: 177.141px 271.877px;" id="el7m8a029gxus"
                        class="animable"></path>
                    <path
                        d="M181.25,271.43a3.35,3.35,0,0,1-1.44,2.1c-.34.22-.47-.24-.13-.45a2.51,2.51,0,0,0,1-1.33c0-.09.05-.19.06-.27a1.78,1.78,0,0,0,0-.92.58.58,0,0,0-.24-.31l0,0s0,0,0,0h-.08a.41.41,0,0,0-.26,0,1.06,1.06,0,0,0-.4.31,4,4,0,0,0-.47.83l0,.06a.69.69,0,0,0,0,.1.19.19,0,0,0,0,.07l-.53,0a4.12,4.12,0,0,1,.43-1,2,2,0,0,1,1.36-1,.82.82,0,0,1,.9.69A2.2,2.2,0,0,1,181.25,271.43Z"
                        style="fill: rgb(69, 90, 100); transform-origin: 180.109px 271.602px;" id="elzq7svfkkk0f"
                        class="animable"></path>
                    <path
                        d="M184.18,271.18a3.31,3.31,0,0,1-1.43,2.09c-.34.23-.48-.23-.14-.45a2.53,2.53,0,0,0,1-1.32,2.8,2.8,0,0,0,.06-.28,1.78,1.78,0,0,0,0-.92.67.67,0,0,0-.24-.31l0,0s0,0,0,0h-.07a.54.54,0,0,0-.27.05,1,1,0,0,0-.4.31,1.87,1.87,0,0,0-.33.53,1.55,1.55,0,0,0-.14.29l0,.07a.3.3,0,0,0,0,.1s0,0,0,.06l-.53.05a4.12,4.12,0,0,1,.43-1,2.06,2.06,0,0,1,1.36-1,.83.83,0,0,1,.9.7A2.08,2.08,0,0,1,184.18,271.18Z"
                        style="fill: rgb(69, 90, 100); transform-origin: 183.037px 271.389px;" id="elnjcd2miravm"
                        class="animable"></path>
                    <path
                        d="M187.11,270.92a3.3,3.3,0,0,1-1.43,2.1c-.34.22-.48-.24-.14-.45a2.46,2.46,0,0,0,1-1.33,2.14,2.14,0,0,0,.06-.27,1.78,1.78,0,0,0,0-.92.61.61,0,0,0-.24-.31l0,0-.05,0h-.07a.48.48,0,0,0-.26,0,1.12,1.12,0,0,0-.41.32,2.12,2.12,0,0,0-.33.53,2.59,2.59,0,0,0-.14.29l0,.06,0,.1s0,0,0,.07l-.54.05a4,4,0,0,1,.43-1,2.06,2.06,0,0,1,1.36-1,.83.83,0,0,1,.91.69A2.2,2.2,0,0,1,187.11,270.92Z"
                        style="fill: rgb(69, 90, 100); transform-origin: 185.917px 271.117px;" id="elqaeld5hkc7"
                        class="animable"></path>
                    <path
                        d="M190.05,270.67a3.35,3.35,0,0,1-1.44,2.1c-.34.22-.48-.24-.14-.45a2.46,2.46,0,0,0,1-1.33c0-.09.05-.19.06-.27a1.78,1.78,0,0,0,0-.92.54.54,0,0,0-.24-.31l0,0,0,0h-.07a.4.4,0,0,0-.26,0,1.09,1.09,0,0,0-.41.31,2.52,2.52,0,0,0-.33.54c-.05.09-.09.19-.14.29l0,.06a.22.22,0,0,0,0,.1s0,0,0,.07l-.53,0a3.85,3.85,0,0,1,.42-1,2,2,0,0,1,1.36-1,.82.82,0,0,1,.91.69A2.2,2.2,0,0,1,190.05,270.67Z"
                        style="fill: rgb(69, 90, 100); transform-origin: 188.9px 270.841px;" id="elurc7zgsj0k"
                        class="animable"></path>
                    <path
                        d="M193,270.42a3.33,3.33,0,0,1-1.44,2.09c-.34.23-.48-.23-.14-.45a2.47,2.47,0,0,0,1-1.32,2.86,2.86,0,0,0,.07-.28,1.74,1.74,0,0,0,0-.91.58.58,0,0,0-.23-.32l0,0H192a.48.48,0,0,0-.26.05,1,1,0,0,0-.41.31,2.46,2.46,0,0,0-.33.53c0,.09-.09.19-.14.29l0,.07a.38.38,0,0,0,0,.1s0,0,0,.06l-.53,0a4.07,4.07,0,0,1,.42-1,2.08,2.08,0,0,1,1.36-1,.84.84,0,0,1,.91.7A2.2,2.2,0,0,1,193,270.42Z"
                        style="fill: rgb(69, 90, 100); transform-origin: 191.704px 270.604px;" id="elffqe53d5lsp"
                        class="animable"></path>
                    <path
                        d="M195.91,270.17a3.36,3.36,0,0,1-1.44,2.09c-.34.22-.47-.24-.14-.45a2.41,2.41,0,0,0,1-1.33,2.13,2.13,0,0,0,.07-.27,1.77,1.77,0,0,0,0-.92.59.59,0,0,0-.23-.31l0,0-.05,0H195a.48.48,0,0,0-.26,0,1.12,1.12,0,0,0-.41.32,2.46,2.46,0,0,0-.33.53c-.05.09-.09.19-.14.29v.07a.36.36,0,0,0,0,.09.25.25,0,0,0,0,.07l-.53,0a3.6,3.6,0,0,1,.43-1,2,2,0,0,1,1.36-1,.82.82,0,0,1,.9.69A2.24,2.24,0,0,1,195.91,270.17Z"
                        style="fill: rgb(69, 90, 100); transform-origin: 194.689px 270.332px;" id="eljyg2mapis8"
                        class="animable"></path>
                    <path
                        d="M198.84,269.91a3.35,3.35,0,0,1-1.44,2.1c-.34.22-.47-.24-.13-.45a2.51,2.51,0,0,0,1-1.33c0-.09.05-.19.06-.27a1.78,1.78,0,0,0,0-.92.58.58,0,0,0-.24-.31l0,0,0,0h-.08a.41.41,0,0,0-.26,0,1.06,1.06,0,0,0-.4.31,1.91,1.91,0,0,0-.33.54,1.55,1.55,0,0,0-.14.29l0,.06,0,.1a.19.19,0,0,0,0,.07l-.53,0a4.31,4.31,0,0,1,.43-1,2,2,0,0,1,1.36-1,.82.82,0,0,1,.9.69A2.2,2.2,0,0,1,198.84,269.91Z"
                        style="fill: rgb(69, 90, 100); transform-origin: 197.699px 270.082px;" id="elwhoacoicg4p"
                        class="animable"></path>
                    <path
                        d="M201.77,269.66a3.31,3.31,0,0,1-1.43,2.09c-.34.23-.48-.23-.14-.44a2.59,2.59,0,0,0,1-1.33,2.8,2.8,0,0,0,.06-.28,1.74,1.74,0,0,0,0-.91.65.65,0,0,0-.24-.32l0,0h-.11a.54.54,0,0,0-.27.05,1,1,0,0,0-.4.31,2,2,0,0,0-.33.53,1.55,1.55,0,0,0-.14.29l0,.07a.42.42,0,0,0,0,.1s0,0,0,.06l-.53.05a4.12,4.12,0,0,1,.43-1,2.06,2.06,0,0,1,1.36-1,.83.83,0,0,1,.9.7A2.2,2.2,0,0,1,201.77,269.66Z"
                        style="fill: rgb(69, 90, 100); transform-origin: 200.589px 269.869px;" id="elc8e3do42a8"
                        class="animable"></path>
                    <path
                        d="M204.7,269.41a3.31,3.31,0,0,1-1.43,2.09c-.34.22-.48-.24-.14-.45a2.51,2.51,0,0,0,1-1.33,2.14,2.14,0,0,0,.06-.27,1.78,1.78,0,0,0,0-.92.61.61,0,0,0-.24-.31l0,0,0,0h-.07a.48.48,0,0,0-.26,0,1.12,1.12,0,0,0-.41.32,2.12,2.12,0,0,0-.33.53,2.59,2.59,0,0,0-.14.29l0,.07a.3.3,0,0,0,0,.1s0,0,0,.06l-.54.05a4,4,0,0,1,.43-1,2.06,2.06,0,0,1,1.36-1,.82.82,0,0,1,.9.69A2.12,2.12,0,0,1,204.7,269.41Z"
                        style="fill: rgb(69, 90, 100); transform-origin: 203.549px 269.597px;" id="elo71zvbeiw4l"
                        class="animable"></path>
                    <path
                        d="M207.64,269.15a3.35,3.35,0,0,1-1.44,2.1c-.34.22-.48-.24-.14-.45a2.46,2.46,0,0,0,1-1.33,2.61,2.61,0,0,0,.06-.27,1.78,1.78,0,0,0,0-.92.54.54,0,0,0-.24-.31l0,0,0,0h-.07a.4.4,0,0,0-.26,0,1.2,1.2,0,0,0-.41.31,2.52,2.52,0,0,0-.33.54c0,.09-.09.19-.14.29l0,.06a.22.22,0,0,0,0,.1s0,.05,0,.07l-.53,0a3.65,3.65,0,0,1,.42-1,2,2,0,0,1,1.36-1,.82.82,0,0,1,.91.69A2.2,2.2,0,0,1,207.64,269.15Z"
                        style="fill: rgb(69, 90, 100); transform-origin: 206.49px 269.321px;" id="ell49d6fw61oe"
                        class="animable"></path>
                    <path
                        d="M210.57,268.9a3.33,3.33,0,0,1-1.44,2.09c-.34.23-.48-.23-.14-.44a2.53,2.53,0,0,0,1-1.33c0-.09.05-.19.07-.27a1.77,1.77,0,0,0,0-.92.55.55,0,0,0-.24-.32h0l-.05,0h-.07a.48.48,0,0,0-.26.05,1,1,0,0,0-.41.31,2.73,2.73,0,0,0-.33.53c0,.09-.09.19-.14.29l0,.07a.38.38,0,0,0,0,.1s0,0,0,.06l-.53.05a4.07,4.07,0,0,1,.42-1,2.08,2.08,0,0,1,1.36-1,.84.84,0,0,1,.91.7A2.2,2.2,0,0,1,210.57,268.9Z"
                        style="fill: rgb(69, 90, 100); transform-origin: 209.38px 269.109px;" id="eljkz9tsjosqj"
                        class="animable"></path>
                    <path
                        d="M210.53,280.69c1.92,4.09,6.77,9.18,7.15,12.52a3.85,3.85,0,0,1-2.16,4.06s3.32,1.68,3.17,4.76c-.08,1.59-2.68,2.86-2.68,2.86s2.6,1.46,2.29,4.19c-.24,2.18-2.81,3.13-2.81,3.13s1.84,2.56.88,4.7c-1.94,4.34-20.77,4.25-23.64-2.7-1.34-3.24,3.26-3,3.26-3s-6.51-2-6.59-5.87,5.87-3.16,5.87-3.16-6.3-2-6-6c.33-4.2,6.16-2.46,6.16-2.46s-4.17-2.86-3.21-5.89c1.57-5,9.47,1.34,13.61.38l2.32-6.81Z"
                        style="fill: rgb(211, 118, 106); transform-origin: 203.977px 300.274px;" id="elb3ph4nn207"
                        class="animable"></path>
                    <path d="M214.27,286.64c-1.47-4,3.54-9,2.68-13-1.16-5.49-7.36-.15-8.77,7.81l0,6.37Z"
                        style="fill: rgb(211, 118, 106); transform-origin: 212.615px 279.607px;" id="elakfi74a4g9p"
                        class="animable"></path>
                    <path
                        d="M215.1,312.42c.06,0,.08.08,0,.09a32.65,32.65,0,0,1-19.38-1.25c-.2-.08-.15-.43.08-.39A66.83,66.83,0,0,0,215.1,312.42Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 205.374px 312.147px;" id="el8jtym0vhxmt"
                        class="animable"></path>
                    <path
                        d="M216.1,304.93c.07,0,.08.11,0,.13-6.4,1.49-14.57.95-21.06-2.68-.23-.13-.3-.46,0-.34C199.52,304.13,210,305.41,216.1,304.93Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 205.498px 303.924px;" id="ely3a9v1fn5oo"
                        class="animable"></path>
                    <path
                        d="M195.07,293.32c6.36,3.24,13.12,4.12,20.19,4,.1,0,.09.13,0,.15-3.44,1-8,.58-11.44,0a18.81,18.81,0,0,1-8.87-3.92C194.86,293.46,194.94,293.25,195.07,293.32Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 205.121px 295.689px;" id="elw3a5qpqk9zs"
                        class="animable"></path>
                    <path
                        d="M354.79,398.73c-.87,2.34-43.43,55.25-46.33,56.24-1.09.38-9.16-5.37-18.71-12.59-2.06-1.56-4.18-3.19-6.33-4.85C269.49,426.77,255,415,255,415l28.37-35.47L311,403l6.08,5.15s25.35-13,28.65-13.71S355.66,396.38,354.79,398.73Z"
                        style="fill: rgb(211, 118, 106); transform-origin: 304.934px 417.259px;" id="eljrggvmkz6jm"
                        class="animable"></path>
                    <path
                        d="M354.79,398.73c-.87,2.34-43.43,55.25-46.33,56.24-1.34.46-13-8.12-25-17.44L311,403l6.08,5.15s25.35-13,28.65-13.71S355.66,396.38,354.79,398.73Z"
                        style="fill: rgb(255, 255, 255); transform-origin: 319.164px 424.655px;" id="ell4s8l13syvh"
                        class="animable"></path>
                    <path
                        d="M354.79,398.73c-.87,2.34-43.43,55.25-46.33,56.24-1.09.38-9.16-5.37-18.71-12.59l27.34-34.19s25.35-13,28.65-13.71S355.66,396.38,354.79,398.73Z"
                        style="fill: rgb(155, 164, 181); transform-origin: 322.309px 424.675px;" id="el83f6v5nhdxf"
                        class="animable"></path>
                    <path
                        d="M352.06,397.78c-7.35,8.7-36.18,44.45-42.79,53.6,0,.08,0,.12.06.05,7.47-8.46,36-44.45,42.88-53.53C352.35,397.71,352.22,397.6,352.06,397.78Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 330.77px 424.577px;" id="elm9y2v7pr8n9"
                        class="animable"></path>
                    <path
                        d="M341.1,396.35a9.13,9.13,0,0,0-2.1,7,8.83,8.83,0,0,0,3.14,5.79c.05,0,.13-.06.08-.11a10.57,10.57,0,0,1-1-12.64A.07.07,0,0,0,341.1,396.35Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 340.585px 402.734px;" id="elzsz4lom6l5h"
                        class="animable"></path>
                    <path
                        d="M320.74,405.46c-2.9,3.51-5,8.63-3.83,13.17,0,.18.29.12.32,0a63,63,0,0,1,4-12.85A.29.29,0,0,0,320.74,405.46Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 318.929px 412.035px;" id="elpy6v3ody3f"
                        class="animable"></path>
                    <path
                        d="M324,403.58c-2.9,3.51-5,8.63-3.83,13.17,0,.18.29.11.32,0a63,63,0,0,1,4-12.85A.29.29,0,0,0,324,403.58Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 322.189px 410.154px;" id="el3ga3ql2c6kh"
                        class="animable"></path>
                    <path
                        d="M327.29,401.7c-2.91,3.51-5,8.63-3.84,13.17,0,.18.29.11.32,0a63.07,63.07,0,0,1,4-12.84A.28.28,0,0,0,327.29,401.7Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 325.472px 408.277px;" id="el07qz94u8x2ma"
                        class="animable"></path>
                    <path
                        d="M330.56,399.82c-2.91,3.51-5,8.63-3.84,13.17,0,.18.3.11.33,0a62.85,62.85,0,0,1,4-12.84A.28.28,0,0,0,330.56,399.82Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 328.747px 406.395px;" id="el9vlb94biv7"
                        class="animable"></path>
                    <path d="M302.67,442.35c-3.2,4,3,9,6.2,5S305.86,438.35,302.67,442.35Z"
                        style="fill: rgb(255, 255, 255); transform-origin: 305.77px 444.85px;" id="el18cp3det9ei"
                        class="animable"></path>
                    <path
                        d="M314.35,394c-2.93.6-3.3,4-2.64,6.39a23.89,23.89,0,0,0,6.48,10.53.12.12,0,0,0,.19,0,.55.55,0,0,0,.8-.41c.29-3.93,1.08-8.1.15-12C318.79,396.19,317.13,393.44,314.35,394Zm4,10.43c-.1,1.94-.29,3.86-.31,5.8a71.9,71.9,0,0,1-3.65-6.23,26.19,26.19,0,0,1-1.35-3.23c-.55-1.71-.71-7.58,3.43-4.83C318.81,397.46,318.51,402.12,318.4,404.43Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 315.6px 402.455px;" id="elvbkuxe4dthk"
                        class="animable"></path>
                    <path
                        d="M312.41,420.79c3-2.7,4.65-6.6,6.62-10a.55.55,0,0,0-.43-.78c0-.08-.05-.15-.14-.13a23.84,23.84,0,0,0-11.28,5.07c-1.86,1.58-3.49,4.63-1.39,6.77S310.68,422.38,312.41,420.79Zm-3.74.52c-5-.05-1.55-4.81-.13-5.92a25.83,25.83,0,0,1,2.93-1.91,70.78,70.78,0,0,1,6.52-3.11c-1.07,1.62-2,3.31-3,5C313.78,417.32,311.41,421.34,308.67,421.31Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 311.943px 416.332px;" id="elgaswoc0pp5"
                        class="animable"></path>
                    <path
                        d="M309.53,397.69,280,437.52,180.4,368.39l-9.61-6.66s-2.72,1.83-6.81,4.09c-5.69,3.14-14,7.12-21.4,8.21-12.36,1.83-31,1.63-41.43-12.3-8.78-11.74-6-27.05-6-27.05l13.58-5.83s32.14-26.77,53-27.58c8.84-.35,21.71,6.35,33.63,13.35S309.53,397.69,309.53,397.69Z"
                        style="fill: rgb(55, 71, 79); transform-origin: 202.131px 369.388px;" id="elluz7zo9lp4m"
                        class="animable"></path>
                    <path d="M170.79,361.73s-2.72,1.83-6.81,4.09c-7.24-8.66-22.57-24.4-23-25Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 155.885px 353.32px;" id="elyibqytfna9"
                        class="animable"></path>
                    <path
                        d="M120.49,319.89c-1.92,1.33-3.78,2.75-5.68,4.12s-3.78,2.61-5.56,4.08-3.51,3.09-5.2,4.7c-.82.78-1.64,1.56-2.43,2.37a22,22,0,0,0-2.31,2.51c-.06.08.06.18.14.13a25.76,25.76,0,0,0,2.57-2.09l2.69-2.29c1.73-1.47,3.49-2.89,5.21-4.37s3.3-3.06,5-4.54,3.73-3.06,5.62-4.56C120.56,319.92,120.53,319.86,120.49,319.89Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 109.92px 328.848px;" id="eldlxnrhgwuou"
                        class="animable"></path>
                    <path
                        d="M302.6,396.26c-1.92,2.07-3.69,4.29-5.48,6.47s-3.57,4.4-5.34,6.61c-3.54,4.42-7.11,8.82-10.59,13.29-1.92,2.46-3.8,4.93-5.58,7.49-.08.11.1.24.2.14,3.8-4.19,7.29-8.66,10.82-13.07s7.06-8.87,10.54-13.35c1.9-2.45,3.86-4.89,5.6-7.45A.11.11,0,0,0,302.6,396.26Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 289.185px 413.266px;" id="elv7dyqsug5a"
                        class="animable"></path>
                    <path
                        d="M227,400.6c-5-3.9-16.23-11.53-21.37-15.19s-10.22-7.3-15.41-10.84q-2.23-1.51-4.49-3c-1.5-1-3.06-1.92-4.53-2.95-.08-.06-.16.08-.08.14,1.35,1,2.62,2.05,4,3.05s2.52,1.93,3.79,2.87c2.49,1.84,5,3.65,7.52,5.47,5.08,3.67,10.21,7.31,15.39,10.86,2.94,2,12,8,15,9.9C226.93,401,227.15,400.74,227,400.6Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 204.069px 384.767px;" id="elkzkdv3qb7il"
                        class="animable"></path>
                    <path
                        d="M258.23,359.45c-4.58-3.79-15-11.09-19.82-14.6s-9.68-7.13-14.56-10.66l-14.51-10.48c-4.68-3.39-9.35-6.84-14.3-9.84-2.71-1.64-5.49-3.16-8.35-4.53a53.77,53.77,0,0,0-8.62-3.52.08.08,0,0,0-.06.14c2.44,1.37,5,2.51,7.47,3.83s4.85,2.67,7.22,4.1c4.91,3,9.55,6.37,14.21,9.72,9.69,7,19.35,14,29.1,20.82,5.46,3.85,16.34,11.79,22,15.32A.19.19,0,0,0,258.23,359.45Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 218.131px 332.793px;" id="elc0347sazdfr"
                        class="animable"></path>
                </g>
                <g id="freepik--Plant--inject-2" class="animable" style="transform-origin: 429.167px 335.647px;">
                    <path
                        d="M453.39,312.56c-9.78,13.25-20,28.62-22.46,45.23a.22.22,0,0,0,.43.09,98.36,98.36,0,0,1,4.33-13.3c6.43-1.77,12.74-3.23,16.12-9.61,3.44-6.56,3-15.12,2.35-22.26C454.11,312.32,453.59,312.31,453.39,312.56Z"
                        style="fill: rgb(155, 164, 181); transform-origin: 442.768px 335.217px;" id="ela1ucmdxd65e"
                        class="animable"></path>
                    <path
                        d="M435.78,344.45c4.4-9.86,10-19.76,17.21-27.87.05-.05.12,0,.08.08-4.7,5.78-8.26,12.07-11.75,18.46,3.24-3.28,6.79-6.23,9.86-9.72.06-.06.15,0,.1.1-3,3.66-6.38,7.63-10.35,10.34q-1.59,2.94-3.22,5.9c.26-.15.54-.28.81-.42.05,0,.09.05.05.07-.31.16-.61.32-.92.45-.51.93-1,1.86-1.55,2.79C436,344.84,435.69,344.66,435.78,344.45Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 444.423px 330.642px;" id="el8nj7tcaxks2"
                        class="animable"></path>
                    <path
                        d="M439.05,341a58,58,0,0,0,7.51-5c.06-.05.16,0,.09.09a39.49,39.49,0,0,1-7.49,5.11C439,341.26,438.93,341.08,439.05,341Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 442.832px 338.596px;" id="elz5beuoe5tss"
                        class="animable"></path>
                    <path
                        d="M429.8,355.32a.18.18,0,0,0,.36,0c0-5.47,0-11,.08-16.46,1.4-2.83,4.41-4.4,6.5-6.66a29.68,29.68,0,0,0,3.91-5.44,39.14,39.14,0,0,0,4.52-15.09c.58-5.85-1.64-25.16-4.11-24.49-1.28.35-5.42,9.91-6.51,13.07a91,91,0,0,0-3.9,16C428.65,329.15,428.82,342.37,429.8,355.32Z"
                        style="fill: rgb(155, 164, 181); transform-origin: 437.178px 321.332px;" id="eldn26ixd55df"
                        class="animable"></path>
                    <path
                        d="M429.76,331.72l0,0c.3-6.92,1.86-13.91,3.32-20.62,1.57-7.24,3.41-14.05,7.14-20.5.06-.12.24,0,.18.11a76.48,76.48,0,0,0-5.73,15.73c.25-.39.55-.76.81-1.13.1-.14.34,0,.24.14a10,10,0,0,1-1.16,1.65l-.05,0c-1.28,5.17-2.2,10.46-3,15.73l.18-.2c0-.05.11,0,.08.06l-.32.52c-.39,2.68-.76,5.35-1.13,8,4.77-4.07,8.84-8.88,11.14-14.8a0,0,0,0,1,0,0c-2.25,6.14-5.8,11.59-11.26,15.32q-.13,1.06-.3,2.13c0,.15-.25.11-.25,0,0-.63,0-1.26.06-1.9A.15.15,0,0,1,429.76,331.72Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 435.555px 312.254px;" id="el0x94xktnyrug"
                        class="animable"></path>
                    <path
                        d="M432,321.69A109.7,109.7,0,0,0,441.72,305c0-.07.14,0,.11,0a54.14,54.14,0,0,1-9.64,16.81C432.1,321.93,431.93,321.8,432,321.69Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 436.909px 313.413px;" id="el46enju542bl"
                        class="animable"></path>
                    <path
                        d="M436.85,303.62c1.5-2.67,3.1-5.27,4.52-8,0-.07.14,0,.11.07a41.71,41.71,0,0,1-4.4,8.06A.13.13,0,0,1,436.85,303.62Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 439.159px 299.704px;" id="elxph3rfq162"
                        class="animable"></path>
                    <path d="M436.26,304.79a0,0,0,1,1,0,0A0,0,0,1,1,436.26,304.79Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 436.26px 304.79px;" id="el0qammo06yz0h"
                        class="animable"></path>
                    <path
                        d="M426.09,339.5a55.69,55.69,0,0,1-1.27,10.78c.05.39.11.78.17,1.18a51.09,51.09,0,0,0,1.92-12,.35.35,0,0,0,0-.37v0a79.33,79.33,0,0,0-1.21-16.27c-1.69-10.06-5.39-19.71-12.41-27.24a.49.49,0,0,0-.77.16c-2.83,7.19-1.84,15.78.57,23a41.93,41.93,0,0,0,5.56,10.91C421.07,333,424.14,335.81,426.09,339.5Z"
                        style="fill: rgb(155, 164, 181); transform-origin: 418.88px 323.458px;" id="ellptri8l4ieb"
                        class="animable"></path>
                    <path
                        d="M414.14,298.91c6.65,10.79,11.27,23.58,11.84,36.32,0,.22-.37.28-.4,0-.16-1.14-.34-2.28-.52-3.41h0a43.71,43.71,0,0,1-7.54-8.7c0-.06.05-.13.09-.08a90.83,90.83,0,0,0,7.33,8c-.48-2.81-1-5.59-1.71-8.32-.18-.2-.35-.41-.52-.61s.07-.34.19-.2l.16.17a96.61,96.61,0,0,0-3.47-11c-1.69-2-3.58-3.76-4.82-6.19,0-.06.05-.1.09-.05,1,1.39,1.95,2.79,3.07,4.08.45.51.94,1,1.41,1.49a85.82,85.82,0,0,0-5.44-11.34A.15.15,0,0,1,414.14,298.91Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 419.936px 317.146px;" id="elag9kyr5ngs"
                        class="animable"></path>
                    <path
                        d="M415.49,312.22c2.15,2.89,4.59,5.65,6.59,8.63.06.09-.07.18-.14.11a44.26,44.26,0,0,1-6.6-8.66C415.28,312.21,415.42,312.13,415.49,312.22Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 418.71px 316.583px;" id="el3snspwsf5fi"
                        class="animable"></path>
                    <path
                        d="M422.38,321.52l.09.1c.07.06,0,.16-.1.09l-.09-.09C422.22,321.56,422.32,321.46,422.38,321.52Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 422.38px 321.618px;" id="elvvlat13m0fb"
                        class="animable"></path>
                    <path
                        d="M403.73,319.65a33.24,33.24,0,0,0,7,16.45,17.58,17.58,0,0,0,5.69,4.44c2.46,1.22,5,2.62,7.59,3.62a50.24,50.24,0,0,1,2.69,9.54c.08-.27.16-.56.24-.84-1.63-14.05-10.72-26.06-22.35-33.77A.57.57,0,0,0,403.73,319.65Z"
                        style="fill: rgb(155, 164, 181); transform-origin: 415.333px 336.354px;" id="elk1u5tnfi11i"
                        class="animable"></path>
                    <path
                        d="M407.75,323.8c-.08-.08,0-.22.12-.16a47.71,47.71,0,0,1,14.82,18.26c.08.2-.18.36-.29.17-.54-.94-1.1-1.87-1.66-2.77h0c-2.66-.5-5.17-2.37-7.14-4.14-.06-.05,0-.13.08-.08a16,16,0,0,0,3.36,2.36c1.08.55,2.24.9,3.37,1.34-1-1.56-2-3.06-3.08-4.51a31,31,0,0,1-8-4.49c-.07,0,0-.18.08-.13a78.9,78.9,0,0,0,7.41,4,67,67,0,0,0-5.23-6.11c-.91-.47-1.82-.95-2.69-1.46a.08.08,0,0,1,.05-.14,9.47,9.47,0,0,1,2.07,1C410,325.87,408.91,324.82,407.75,323.8Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 415.211px 332.89px;" id="elygkvidmuxtr"
                        class="animable"></path>
                    <path
                        d="M408,328.65a2.75,2.75,0,0,1,.44.32c.05,0,0,.09-.05.07a3.1,3.1,0,0,1-.47-.26A.08.08,0,0,1,408,328.65Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 408.181px 328.845px;" id="elntfuwr4itj"
                        class="animable"></path>
                    <polygon
                        points="445.1 384.13 413.24 384.13 415.81 355.11 416.38 348.71 441.96 348.71 442.53 355.11 445.1 384.13"
                        style="fill: rgb(69, 90, 100); transform-origin: 429.17px 366.42px;" id="eleo4fta9bo0r"
                        class="animable"></polygon>
                    <polygon points="442.53 355.11 415.81 355.11 416.38 348.71 441.96 348.71 442.53 355.11"
                        style="fill: rgb(38, 50, 56); transform-origin: 429.17px 351.91px;" id="elk6uxqd6g5p8"
                        class="animable"></polygon>
                    <rect x="414.85" y="344.24" width="28.64" height="6.33"
                        style="fill: rgb(69, 90, 100); transform-origin: 429.17px 347.405px;" id="el67ib2g8eq6j"
                        class="animable"></rect>
                </g>
                <defs>
                    <filter id="active" height="200%">
                        <feMorphology in="SourceAlpha" result="DILATED" operator="dilate" radius="2"></feMorphology>
                        <feFlood flood-color="#32DFEC" flood-opacity="1" result="PINK"></feFlood>
                        <feComposite in="PINK" in2="DILATED" operator="in" result="OUTLINE"></feComposite>
                        <feMerge>
                            <feMergeNode in="OUTLINE"></feMergeNode>
                            <feMergeNode in="SourceGraphic"></feMergeNode>
                        </feMerge>
                    </filter>
                    <filter id="hover" height="200%">
                        <feMorphology in="SourceAlpha" result="DILATED" operator="dilate" radius="2"></feMorphology>
                        <feFlood flood-color="#ff0000" flood-opacity="0.5" result="PINK"></feFlood>
                        <feComposite in="PINK" in2="DILATED" operator="in" result="OUTLINE"></feComposite>
                        <feMerge>
                            <feMergeNode in="OUTLINE"></feMergeNode>
                            <feMergeNode in="SourceGraphic"></feMergeNode>
                        </feMerge>
                        <feColorMatrix type="matrix"
                            values="0   0   0   0   0                0   1   0   0   0                0   0   0   0   0                0   0   0   1   0 ">
                        </feColorMatrix>
                    </filter>
                </defs>
            </svg>
        </div>

    </div>

    <div class="section-2">
        <div class="about-us">

            <div class="about-us-img section hidden">
                <img src="images/abt.jpg" alt="">
            </div>

            <div class="about-us-content">
                <div class="icon-svg-right section hidden">
                    <h2 id="aboutus" >ABOUT US</h2>
                    <img src="images/about-svgrepo-com (1).svg " alt="">
                </div>
                <p class="first-ltr section hidden">
                    Welcome to plaNest –
                    <br>
                    We turn your to-do lists into epic quests and mundane tasks into victories.
                    <br>
                    At
                    plaNest, we
                    empower you to conquer your day with our customizable task sprints and team
                    collaboration
                    tools. <br>
                    Our mission is to make productivity not just efficient but exciting.
                    <br>

                    Join us and
                    transform every task into a triumph!
                </p>
            </div>
        </div>
    </div>

    <!-- <div class="whats-new-section">

        <div class="whats-new-header">
            <h2>What to Expect from </h2>
            <p>Get certified, master modern tech skills,
                and level up your career — whether you’re starting out or a seasoned pro.
                <br>
                95% of eLearning learners
                report our hands-on content directly helped their careers.
            </p>
        </div>

    </div> -->
    <div class="section-c">
        <div class="section-c-header" id="#discover">
            <h2 id="discover" >DISCOVER OUR WEBSITE</h2>
        </div>
        <div class="progress-container">
            <div id="progress-bar"></div>
            <div class="phase-buttons">
                <button onclick="updateProgressAndShowDiv(1)">1</button>
                <button onclick="updateProgressAndShowDiv(2)">2</button>
                <button onclick="updateProgressAndShowDiv(3)">3</button>
                <button onclick="updateProgressAndShowDiv(4)">4</button>
                <button onclick="updateProgressAndShowDiv(5)">5</button>
            </div>
        </div>
        <div class="buttons-section">
            <div id="div1" class="content-div">
                <div class="steps-toknow">
                    <div class="my-web">
                        <img class="my-web" src="images/WhatsApp Image 2024-08-21 at 23.37.01_05980410.jpg" alt="">
                    </div>
                    <div class="how-to">
                        <img src="">
                        <h2>Subscribtion <i class="fa-regular fa-credit-card"></i></h2>
                        <p> To subscribe to a plan, visit our pricing page and choose the option that best suits your team's needs. Once you've selected a plan, follow the on-screen instructions to complete your subscription. After subscribing, you can start adding projects.
                        </p>
                    </div>
                </div>
            </div>
            <div id="div2" class="content-div">

                <div class="steps-toknow">
                    <div class="my-web">
                        <img class="my-web" src="images/photo_59266_y.jpg" alt="">
                    </div>
                    <div class="how-to">
                        <img src="">
                        <h2>To add a project <i class="fa-solid fa-diagram-project"></i></h2>
                        <p> To add a project, simply click the plus sign next to your projects. A field will appear where you can enter the project name. Once you've entered the name, click "Confirm", The project will be added to your list immediately.
                        </p>
                    </div>
                </div>
            </div>
            <div id="div3" class="content-div">

                <div class="steps-toknow">
                    <div class="my-web">
                        <img class="my-web" src="images/photo_5924565587495863864_y44 (1).jpg" alt="">
                    </div>
                    <div class="how-to">
                        <img src="">
                        <h2>To add a sprint <i class="fa-solid fa-shuttle-space"></i></h2>
                        <p> To add a sprint, you'll typically need to click "Add Sprint" button, enter a name for the sprint, select a start and end date, and then submit the information. 
                        </p>
                    </div>
                </div>
            </div>
            <div id="div4" class="content-div">

                <div class="my-web">
                    <img class="my-web" src="images/photo_5924565587495863865_y.jpg" alt="">
                </div>
                <div class="how-to">
                    <img src="">
                    <h2>To add a member <i class="fa-solid fa-user-plus"></i></h2>
                    <p> To add a member, simply click the "Add Member" button. A field will appear where you can enter the member's email address. Once you've entered the email, click "Add" then you'll receive a confirmation message indicating that the member was added successfully.</p>
                </div>
            </div>
            <div id="div5" class="content-div">

                <div class="my-web">
                    <img class="my-web" src="images/Screenshot 2024-08-21 233535.png" alt="">
                </div>
                <div class="how-to">
                    <img src="">
                    <h2>To add a task <i class="fa-solid fa-list-check"></i></h2>
                    <p> To add a task, click the "Add Task" button. Enter the task name, label, assignee's email, description, start and end dates, priority, and category. Then, click "Add" to create the task.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Div -->
    <div class="main-footer">
        <!-- First Div -->
        <div class="FOOTER" id="contactus">
            <div class="ADRESS">
                <h2>plaNest</h2>
            </div>
            <div class="INFO">
                <h3> plaNest</h3>
                <a href="#about"> About Us</a>
                <br>
                <a href="terms.html">Terms and Conditions</a>
            </div>
            <div class="INFO">
                <h3>Learn More</h3>
                <a href="">Discover</a>
                <br>
                <a href="">Join Us Now</a>
            </div>
            <div class="INFO">
                <h3>Contact us</h3>
                <div class="social-links">
                    <button class="button">
                        <svg viewBox="0 0 24 24" fill="none" height="24" width="24" xmlns="http://www.w3.org/2000/svg"
                            aria-hidden="true" class="w-6 h-6 text-gray-800 dark:text-white">
                            <path clip-rule="evenodd"
                                d="M3 8a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5H8a5 5 0 0 1-5-5V8Zm5-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3H8Zm7.597 2.214a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2h-.01a1 1 0 0 1-1-1ZM12 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6Zm-5 3a5 5 0 1 1 10 0 5 5 0 0 1-10 0Z"
                                fill-rule="evenodd" fill="currentColor"></path>
                        </svg>
                    </button>
                    <button class="button">
                        <svg viewBox="0 0 24 24" fill="none" height="24" width="24" xmlns="http://www.w3.org/2000/svg"
                            aria-hidden="true" class="w-6 h-6 text-gray-800 dark:text-white">
                            <path clip-rule="evenodd"
                                d="M12 4a8 8 0 0 0-6.895 12.06l.569.718-.697 2.359 2.32-.648.379.243A8 8 0 1 0 12 4ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.96 9.96 0 0 1-5.016-1.347l-4.948 1.382 1.426-4.829-.006-.007-.033-.055A9.958 9.958 0 0 1 2 12Z"
                                fill-rule="evenodd" fill="currentColor"></path>
                            <path
                                d="M16.735 13.492c-.038-.018-1.497-.736-1.756-.83a1.008 1.008 0 0 0-.34-.075c-.196 0-.362.098-.49.291-.146.217-.587.732-.723.886-.018.02-.042.045-.057.045-.013 0-.239-.093-.307-.123-1.564-.68-2.751-2.313-2.914-2.589-.023-.04-.024-.057-.024-.057.005-.021.058-.074.085-.101.08-.079.166-.182.249-.283l.117-.14c.121-.14.175-.25.237-.375l.033-.066a.68.68 0 0 0-.02-.64c-.034-.069-.65-1.555-.715-1.711-.158-.377-.366-.552-.655-.552-.027 0 0 0-.112.005-.137.005-.883.104-1.213.311-.35.22-.94.924-.94 2.16 0 1.112.705 2.162 1.008 2.561l.041.06c1.161 1.695 2.608 2.951 4.074 3.537 1.412.564 2.081.63 2.461.63.16 0 .288-.013.4-.024l.072-.007c.488-.043 1.56-.599 1.804-1.276.192-.534.243-1.117.115-1.329-.088-.144-.239-.216-.43-.308Z"
                                fill="currentColor"></path>
                        </svg>
                    </button>
                    <button class="button">
                        <svg viewBox="0 0 24 24" fill="currentColor" height="24" width="24"
                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                            class="w-6 h-6 text-gray-800 dark:text-white">
                            <path clip-rule="evenodd"
                                d="M22 5.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.343 8.343 0 0 1-2.605.981A4.13 4.13 0 0 0 15.85 4a4.068 4.068 0 0 0-4.1 4.038c0 .31.035.618.105.919A11.705 11.705 0 0 1 3.4 4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 6.1 13.635a4.192 4.192 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 2 18.184 11.732 11.732 0 0 0 8.291 20 11.502 11.502 0 0 0 19.964 8.5c0-.177 0-.349-.012-.523A8.143 8.143 0 0 0 22 5.892Z"
                                fill-rule="evenodd"></path>
                        </svg>
                    </button>
                    <button class="button">
                        <svg viewBox="0 0 24 24" fill="currentColor" height="24" width="24"
                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                            class="w-6 h-6 text-gray-800 dark:text-white">
                            <path clip-rule="evenodd"
                                d="M21.7 8.037a4.26 4.26 0 0 0-.789-1.964 2.84 2.84 0 0 0-1.984-.839c-2.767-.2-6.926-.2-6.926-.2s-4.157 0-6.928.2a2.836 2.836 0 0 0-1.983.839 4.225 4.225 0 0 0-.79 1.965 30.146 30.146 0 0 0-.2 3.206v1.5a30.12 30.12 0 0 0 .2 3.206c.094.712.364 1.39.784 1.972.604.536 1.38.837 2.187.848 1.583.151 6.731.2 6.731.2s4.161 0 6.928-.2a2.844 2.844 0 0 0 1.985-.84 4.27 4.27 0 0 0 .787-1.965 30.12 30.12 0 0 0 .2-3.206v-1.516a30.672 30.672 0 0 0-.202-3.206Zm-11.692 6.554v-5.62l5.4 2.819-5.4 2.801Z"
                                fill-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <div class="INFO Copy">
            <p>plaNest &copy; 2024 All rights reserved.</p>
        </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/LANDING.JS"></script>

</body>

</html>