<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Liisu</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
        <!-- Image loading performance hints -->
        <link rel="preconnect" href="https://picsum.photos" crossorigin>
        <link rel="dns-prefetch" href="//picsum.photos">
        <link rel="preconnect" href="https://i.picsum.photos" crossorigin>
        <link rel="dns-prefetch" href="//i.picsum.photos">
        <!-- Preload hero/above-the-fold images so they are ready when the main stage slides in -->
        <link rel="preload" as="image" href="https://picsum.photos/seed/liisu-01/800/1200" crossorigin>
        <link rel="preload" as="image" href="https://picsum.photos/seed/liisu-02/900/1300" crossorigin>
        <link rel="preload" as="image" href="https://picsum.photos/seed/liisu-03/1000/1600" crossorigin>
        <link rel="preload" as="image" href="https://picsum.photos/seed/liisu-04/1000/1600" crossorigin>
        <link rel="preload" as="image" href="https://picsum.photos/seed/liisu-05/900/1400" crossorigin>
        <link rel="preload" as="image" href="https://picsum.photos/seed/photographer-hero/900/1100" crossorigin>
        <!-- Preload others at lower priority via JS (below) to avoid over-fetching on slow networks -->
        <script>
            document.addEventListener('DOMContentLoaded', function(){
                const lowPriority = [
                    'https://picsum.photos/seed/liisu-06/800/1200',
                    'https://picsum.photos/seed/liisu-07/1200/1800',
                    'https://picsum.photos/seed/liisu-08/1200/900',
                    'https://picsum.photos/seed/liisu-09/1400/900',
                    'https://picsum.photos/seed/liisu-10/1400/900',
                    'https://picsum.photos/seed/liisu-11/1200/800',
                    'https://picsum.photos/seed/liisu-12/1400/900',
                    'https://picsum.photos/seed/liisu-13/1200/800',
                    'https://picsum.photos/seed/liisu-14/1400/900',
                    'https://picsum.photos/seed/liisu-15/1200/800',
                    'https://picsum.photos/seed/liisu-16/1400/900'
                ];
                lowPriority.forEach((u)=>{ const im = new Image(); im.decoding='async'; im.loading='eager'; im.src=u; });
            });
        </script>
        <style>
            :root{
                --bg1: rgba(128, 0, 32, 0.35);  /* maroon glow */
                --bg2: rgba(200, 0, 40, 0.25);  /* red glow */
                --bg3: rgba(90, 10, 18, 0.28);  /* deep wine */
                --bg4: rgba(140, 0, 30, 0.22);  /* extra maroon */
                --bg5: rgba(255, 30, 30, 0.12); /* subtle bright red */
            }
            @keyframes float1 { 0% { transform: translate3d(0,0,0) scale(1);} 100% { transform: translate3d(8vw,6vh,0) scale(1.08);} }
            @keyframes float2 { 0% { transform: translate3d(0,0,0) scale(1);} 100% { transform: translate3d(-6vw,4vh,0) scale(1.06);} }
            @keyframes float3 { 0% { transform: translate3d(0,0,0) scale(1);} 100% { transform: translate3d(5vw,-5vh,0) scale(1.07);} }
            @keyframes float4 { 0% { transform: translate3d(0,0,0) scale(1);} 100% { transform: translate3d(-4vw,-6vh,0) scale(1.05);} }
            @keyframes float5 { 0% { transform: translate3d(0,0,0) scale(1);} 100% { transform: translate3d(6vw,-3vh,0) scale(1.04);} }

            /* Gentle pulse for decorative spark dots */
            @keyframes pulse {
                0%, 100% { opacity: .15; transform: scale(1); }
                50%      { opacity: .35; transform: scale(1.08); }
            }
            /* Tiny drift for spark dots */
            @keyframes driftA { from { transform: translate3d(0,0,0); } to { transform: translate3d(6px,-4px,0); } }
            @keyframes driftB { from { transform: translate3d(0,0,0); } to { transform: translate3d(-5px,5px,0); } }
            @keyframes driftC { from { transform: translate3d(0,0,0); } to { transform: translate3d(4px,3px,0); } }

            /* Soft fade at image bottom to avoid a harsh cutoff */
            .soft-bottom{
                -webkit-mask-image: linear-gradient(to bottom, rgba(0,0,0,1) 0%, rgba(0,0,0,1) 90%, rgba(0,0,0,0) 100%);
                        mask-image: linear-gradient(to bottom, rgba(0,0,0,1) 0%, rgba(0,0,0,1) 90%, rgba(0,0,0,0) 100%);
                border-bottom-left-radius: 0.75rem; /* match rounded-xl */
                border-bottom-right-radius: 0.75rem;
            }
            /* Decorative corner brackets */
            .corner {
                position: absolute; width: 26px; height: 26px; pointer-events: none;
            }
            .corner:before, .corner:after {
                content: ""; position: absolute; background: rgba(255, 59, 59, 0.55);
            }
            .corner.tl:before { left:0; top:0; width:18px; height:2px; }
            .corner.tl:after  { left:0; top:0; width:2px; height:18px; }
            .corner.tr:before { right:0; top:0; width:18px; height:2px; }
            .corner.tr:after  { right:0; top:0; width:2px; height:18px; }
            .corner.bl:before { left:0; bottom:0; width:18px; height:2px; }
            .corner.bl:after  { left:0; bottom:0; width:2px; height:18px; }
            .corner.br:before { right:0; bottom:0; width:18px; height:2px; }
            .corner.br:after  { right:0; bottom:0; width:2px; height:18px; }
            /* Spark styling */
            .spark { opacity: .2; transform-box: fill-box; transform-origin: center; }
            .spark.a { animation: pulse var(--pulse,3.8s) ease-in-out infinite, driftA var(--dur,6s) ease-in-out infinite alternate; }
            .spark.b { animation: pulse var(--pulse,4.4s) ease-in-out infinite .2s, driftB var(--dur,7s) ease-in-out infinite alternate; }
            .spark.c { animation: pulse var(--pulse,4.0s) ease-in-out infinite .4s, driftC var(--dur,5.6s) ease-in-out infinite alternate; }
            /* Rotating badge */
            @keyframes spinSlow { to { transform: rotate(360deg); } }
            .badge-spin { animation: spinSlow 26s linear infinite; }
            @media (prefers-reduced-motion: reduce) {
                .badge-spin { animation: none; }
                .spark, .spark.a, .spark.b, .spark.c { animation: none; }
            }

            /* Gallery marquee */
            @keyframes marqueeX {
                0% { transform: translate3d(0,0,0); }
                100% { transform: translate3d(-50%,0,0); }
            }
            #gallery-marquee .gallery-viewport { overflow: hidden; }
            #gallery-marquee .gallery-track {
                display: flex; gap: 24px; width: max-content;
                will-change: transform; backface-visibility: hidden;
                animation: marqueeX var(--dur,48s) linear infinite;
            }
            #gallery-marquee .gallery-track.paused { animation-play-state: paused; }
            #gallery-marquee .card {
                width: clamp(200px, 20vw, 320px); height: clamp(120px, 14vw, 220px);
                border-radius: 14px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,.45);
                background: linear-gradient(135deg,#3f3f46,#111827);
                transform: translateZ(0); transition: transform 240ms cubic-bezier(.22,1,.36,1), box-shadow 240ms ease;
                position: relative;
            }
            #gallery-marquee .card img { width: 100%; height: 100%; object-fit: cover; display: block; }
            #gallery-marquee .card:hover { transform: scale(1.08); z-index: 5; box-shadow: 0 18px 40px rgba(0,0,0,.6); }
            /* Reusable decorative underline */
            .heading-underline { height: 2px; width: 96px; background: linear-gradient(90deg, rgba(255,77,77,0), rgba(255,77,77,0.9), rgba(255,77,77,0)); }
        </style>
</head>
<body class="bg-black overflow-hidden">
    <!-- Animated maroon/black background -->
    <div id="bg-anim" class="fixed inset-0 pointer-events-none overflow-hidden" style="z-index:0;">
        <!-- Slower, larger glow blobs for calmer ambiance -->
        <div class="absolute rounded-full" style="width:64vw;height:64vw;top:-30vh;left:-26vw;background: radial-gradient(closest-side, var(--bg1), rgba(0,0,0,0)); filter: blur(72px); animation: float1 28s ease-in-out infinite alternate;"></div>
        <div class="absolute rounded-full" style="width:58vw;height:58vw;top:36vh;right:-22vw;background: radial-gradient(closest-side, var(--bg2), rgba(0,0,0,0)); filter: blur(68px); animation: float2 34s ease-in-out infinite alternate;"></div>
        <div class="absolute rounded-full" style="width:44vw;height:44vw;bottom:-22vw;left:28vw;background: radial-gradient(closest-side, var(--bg3), rgba(0,0,0,0)); filter: blur(78px); animation: float3 40s ease-in-out infinite alternate;"></div>
        <!-- Two additional subtle blobs -->
        <div class="absolute rounded-full" style="width:36vw;height:36vw;top:6vh;left:42vw;background: radial-gradient(closest-side, var(--bg4), rgba(0,0,0,0)); filter: blur(65px); animation: float4 32s ease-in-out infinite alternate;"></div>
        <div class="absolute rounded-full" style="width:30vw;height:30vw;bottom:-10vh;right:-12vw;background: radial-gradient(closest-side, var(--bg5), rgba(0,0,0,0)); filter: blur(80px); animation: float5 46s ease-in-out infinite alternate;"></div>
        <div class="absolute inset-0" style="background: radial-gradient(60% 50% at 50% 45%, rgba(0,0,0,0), rgba(0,0,0,0.65));"></div>
    </div>

    <!-- Tiny ASCII art in top-left (visible after intro) -->
    <pre id="ascii-corner" class="fixed top-2 left-2 z-30 text-red-600 opacity-80 pointer-events-none text-[3px] sm:text-[4px] md:text-[5px] leading-[1.05]"
        style="visibility: hidden; opacity: 0; font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, 'Liberation Mono', 'Courier New', monospace; white-space: pre; transform: translate3d(0, -6px, 0);">
⠀⠀⠀⠀⠀⠀⠀⢀⣶⣾⣲⣆⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢰⣿⣯⣳⡄
⠀⠀⠀⠀⠀⠀⠀⠸⣿⣿⣟⡿⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣀⣽⣾⣿⣿⠇
⠀⠀⠀⠀⠀⠀⠀⠀⢈⣟⡟⣳⡄⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⣠⠴⡚⡋⡅⢸⠉⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⣼⠁⣏⠃⡟⢦⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣀⡵⠞⣫⠍⠡⠛⡗⠦⣼⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⢰⠇⠀⢩⣉⡈⠈⡻⣄⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣠⣤⣀⠀⠀⣀⣤⡶⠋⠁⠋⡄⢩⡏⠃⠇⠁⠆⣿⠀⠀⠀
⠀⠀⠀⠀⠀⠀⢀⣟⠇⣽⠧⡲⠁⡁⢌⡎⢷⡄⠀⠀⠀⠀⠀⠀⠀⣠⠞⠡⡀⠉⠳⣞⠙⠀⠄⠲⠇⡀⡈⠐⢍⡚⠀⠀⠃⣿⠀⠀⠀
⠀⠀⠀⠀⠀⠀⡾⠁⠑⠟⡎⢁⡀⠆⠠⠁⠧⡙⢦⡀⠀⠀⠀⢀⡼⠃⠈⠢⣌⠲⡄⠈⢯⡪⣟⠂⠏⠇⠄⠂⠨⠈⠀⣁⠈⡏⠀⠀⠀
⠀⠀⠀⠀⠀⣸⢋⠦⡄⠷⢶⠃⢋⠁⡉⢀⣀⣤⡭⠿⡶⠾⢶⡾⠡⡉⠢⢄⡀⠑⢌⠢⡊⣿⢍⠤⠀⠁⠂⠅⡁⠂⠐⠀⠄⡇⠀⠀⠀
⠀⠀⠀⠀⢠⡏⠁⠌⡆⡺⠙⠠⣢⡵⠞⠫⠋⠀⢀⠈⠢⢅⡞⠡⣀⠈⠑⠢⢍⠒⣄⡳⡌⢸⣆⠑⠐⠠⠀⠀⠁⠂⠀⠃⠈⡇⠀⠀⠀
⠀⠀⠀⠀⢾⠀⠊⡖⡂⣪⣴⠞⡛⡡⡄⠅⢀⠀⠄⠁⠁⣸⠀⠂⠤⣉⡒⠤⢄⣹⡟⠿⣾⠋⠉⠛⣶⠒⠛⠋⠉⠉⠙⠛⠲⠧⣤⡀⠀
⠀⠀⠀⠀⠈⠳⣇⡃⣰⣿⠃⠀⣻⣥⠤⠶⠾⠤⣅⡐⠀⠸⠷⣤⣀⣀⠉⠁⠒⠢⠍⢰⡇⠀⠀⣠⣟⣀⡭⠭⠍⣁⡒⠒⠤⢄⣀⠀⠀
⠀⠀⠀⠀⠄⠀⠈⣻⢿⡧⠇⡼⠏⠀⠀⠀⠀⠀⠀⠙⢦⠰⡀⠂⢉⠉⠙⠛⠛⠟⢻⠫⠛⣶⡶⠋⣐⠮⢟⡒⠤⣀⠈⠉⠒⠄⡾⠀⠀
⠀⠀⠀⠀⠀⠀⣼⠃⢐⢅⣵⠃⢀⣤⡄⠀⠀⢠⣤⡀⠘⣇⠂⠅⠆⠄⠀⣢⠁⢉⠓⡀⠌⡔⢿⡜⠮⡓⢄⡈⠑⠠⣍⠒⠤⣼⠃⠀⠀
⠀⣄⡀⠀⠀⢰⠏⡡⠁⠂⠙⣇⢸⣿⠇⠀⠀⠸⣿⡗⣸⠏⠀⠇⠀⠐⠵⠧⢃⠀⠈⠀⠄⡅⠈⠻⣄⠉⠢⣉⠢⢄⡀⠉⣾⠃⠀⠀⠀
⠀⠈⠙⠀⠀⣾⠀⡈⢂⡴⠶⣿⣷⣦⠀⡄⢠⠀⣴⣾⡷⠖⠓⠶⢷⣀⠂⠁⠀⠪⡀⠀⠅⠐⠀⠀⠹⢷⣄⠈⠑⠦⢉⡾⠁⠀⠀⠀⠀
⠀⠀⠀⠀⠀⡇⠀⣿⡋⠀⠀⠀⠙⠿⣟⣿⣿⡿⠟⠉⠀⠀⠀⠁⠀⠉⠛⢦⣧⡀⠀⠀⠀⠁⠄⢄⢀⠀⠊⠛⢶⠶⠋⢀⣀⡄⠀⠀⠀
⠉⠉⠁⠀⠀⡇⣸⠃⣟⣦⣄⡀⠀⠀⠈⠙⠉⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠉⠻⣦⠊⠠⠐⠊⡀⠂⠀⡐⠥⡾⠀⠀⠉⠉⠀⠀⠀⠀
⠀⠀⠀⠀⠀⢿⡿⠀⢸⣿⣿⣿⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⣤⣤⣴⣶⠄⠀⠀⠈⢿⡆⠈⠃⠠⠀⠀⠐⣸⠃⠀⢀⣀⡀⠀⠀⠀⠀
⠐⠚⠋⠀⠀⠘⣧⠀⠸⣿⣿⡿⠀⠀⢀⣀⡀⠀⠀⠀⠀⠀⠋⠁⠀⠀⠁⠀⠀⠀⠀⠀⢿⡀⠄⠀⠂⢠⡾⠁⠀⠀⠀⠉⠙⠁⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠈⢷⡀⠈⠉⠀⠀⠀⠻⠿⠇⣠⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣾⠗⠀⣡⡼⠋⠀⠀⠀⢤⣀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠙⢳⡤⠤⣴⠲⡽⣖⣚⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⣼⣣⡴⠛⠁⠀⠀⠀⠀⠀⠀⠙⠃⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⢰⠏⠀⠀⢨⣾⠁⣀⡉⠙⠓⢦⣀⣀⣀⣀⣀⣀⣤⣤⣴⣶⣿⣿⣿⣝⣷⠛⢳⠀⠀⠀⠀⠀⡀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠙⣀⣀⣠⣾⣷⡿⣛⡻⣷⠄⣼⠭⡽⣿⣿⣅⡀⠀⣿⡟⠛⠻⣏⠉⠉⠙⠛⠋⠀⠀⣀⣴⣿⣿⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠈⣏⠁⡞⣿⣟⠴⢜⣿⠷⠳⢾⣅⠀⠉⠛⣿⡷⣿⠿⣄⠀⠙⢦⡀⠀⠀⠀⠀⠸⢿⣿⣿⣿⡆⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠉⠛⠳⢬⣟⣯⢿⡃⠀⠀⠀⢩⣠⡴⠞⠁⠀⠻⣤⡽⠀⠀⠀⠙⢦⡀⠀⠀⢀⣼⣿⡿⠙⠃⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠉⠙⢧⣀⠀⣀⡼⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣠⣬⣷⣤⣴⣿⣿⠟⠁⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠉⢻⡉⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠛⠿⢿⠿⠛⠋⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠙⠂⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠛⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
    </pre>
    <!-- Intro Animation -->
    <div id="intro" class="fixed inset-0 flex items-center justify-center z-50 transition-transform duration-1000 ease-in-out" style="background-color: transparent; opacity: 0;">
        <!-- Animated Background Elements -->
    <div class="absolute inset-0 overflow-hidden z-0 pointer-events-none">
            <!-- Musical note animations -->
            <div class="absolute top-1/4 left-1/4 text-dark-red text-2xl transform translate-y-8 transition-all duration-1000" id="note-1">♪</div>
            <div class="absolute top-1/3 right-1/4 text-red text-3xl transform translate-y-8 transition-all duration-1000" id="note-2">♫</div>
            <div class="absolute bottom-1/4 left-1/3 text-bright-red text-2xl transform translate-y-8 transition-all duration-1000" id="note-3">♪</div>
            <div class="absolute bottom-1/3 right-1/3 text-red text-xl transform translate-y-8 transition-all duration-1000" id="note-4">♩</div>
            
            <!-- Additional musical notes -->
            <div class="absolute top-1/2 left-1/6 text-bright-red text-xl transform translate-y-8 transition-all duration-1000" id="note-5">♬</div>
            <div class="absolute top-3/4 right-1/6 text-dark-red text-2xl transform translate-y-8 transition-all duration-1000" id="note-6">♪</div>
            <div class="absolute top-1/6 right-1/2 text-red text-xl transform translate-y-8 transition-all duration-1000" id="note-7">♫</div>
            <div class="absolute bottom-1/6 left-1/2 text-bright-red text-lg transform translate-y-8 transition-all duration-1000" id="note-8">♩</div>
            <div class="absolute top-2/3 left-3/4 text-red text-xl transform translate-y-8 transition-all duration-1000" id="note-9">♪</div>
            
            <!-- Flowing artistic vine lines -->
            <div class="absolute top-0 left-0 w-full h-full">
                <svg class="w-full h-full opacity-40">
                    <!-- Main vine line -->
                    <path d="M0,200 Q400,100 800,300 Q1200,500 1600,200" stroke="#FF0000" stroke-width="3" fill="none" opacity="1" id="art-line-1"/>
                    <path d="M0,400 Q600,200 1200,500 Q1800,800 2400,300" stroke="#950101" stroke-width="2" fill="none" opacity="1" id="art-line-2"/>
        </svg>
    </div>
    
    </div>
        
        <!-- Soft vignette behind intro text for readability -->
        <div id="intro-vignette" class="absolute inset-0 z-10 pointer-events-none" 
             style="background: radial-gradient(60% 40% at 50% 45%, rgba(0,0,0,0.55), rgba(0,0,0,0.0) 60%);">
        </div>

        <!-- Intro hero content (centered) -->
        <div class="relative z-30 text-center select-none flex flex-col items-center">
            <h1 id="main-text" class="font-britney text-red-600 text-5xl md:text-7xl font-bold tracking-wide leading-tight transform translate-y-8 transition-all duration-1000">
                LIIZUH
            </h1>
            <div id="text-underline" class="mx-auto mt-3 h-[2px] w-24 bg-red-600 transform translate-y-8 transition-all duration-1000"></div>
            <p id="portfolio-label" class="font-britney text-red-600 text-3xl md:text-4xl mt-4 transform translate-y-8 transition-all duration-1000">
                Portfolio
            </p>
        </div>

        <!-- ASCII art in bottom-right corner -->
    <pre id="ascii-art" class="absolute bottom-6 right-6 z-20 text-red-600 text-[12px] sm:text-[14px] md:text-[16px] lg:text-[18px] leading-[1.05] transform translate-y-8 transition-all duration-1000" style="font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, 'Liberation Mono', 'Courier New', monospace; white-space: pre;">
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣴⠛⠛⠛⠒⠒⠶⢤⣄⡀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣀⣀⣤⠤⠴⠶⠒⠒⠲⠶⠦⢤⣼⡃⠀⠀⠀⠀⠀⠀⠀⠈⠙⠳⣴⠛⠻⡆⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣀⣀⣀⠀⠀⢀⣠⠶⠛⠉⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠈⠙⢶⣄⠀⠀⠀⠀⠀⠀⠀⣠⠿⢦⡴⠇⠀⠀
⠀⠀⠀⠀⠀⠀⠀⢀⣠⡴⠟⠉⠈⠉⠻⣦⠟⠁⠀⠀⠀⠀⠀⢀⣀⣀⣀⠀⠀⠀⠀⠀⠀⠀⠀⠈⠻⣆⠀⠀⠀⢠⡾⠁⠀⠀⠀⠀⠀⠀
⠀⢀⣀⠀⢀⣠⠶⠋⠁⠀⠀⠀⠀⠀⣰⠃⠀⠀⠀⠀⠀⠀⣴⣿⣿⣿⣿⣿⡄⠀⠀⠀⠀⠀⠀⠀⠀⠘⣷⠤⠴⠋⠀⠀⠀⠀⠀⠀⠀⠀
⢰⡏⠈⢳⣟⠁⠀⠀⠀⠀⠀⠀⠀⢰⡇⠀⠀⠀⠀⠀⠀⢸⡟⠉⣿⣿⣧⣨⠇⢀⣀⣀⡀⠀⠀⠀⠀⠀⢸⡆⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠛⠚⠋⠉⠳⢦⡀⠀⠀⠀⠀⠀⡾⠀⠀⠀⠀⠀⠀⠀⢀⠙⠿⢿⣿⣿⣯⠞⠋⠁⠈⠉⠳⢦⡄⠀⠀⢠⡇⠀⠀⠀⠀⠀⠀⢀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠙⢷⣄⠀⠀⢀⡇⠀⠀⠀⠀⠀⣤⠞⠉⠉⠙⠛⠛⠋⠀⠀⠀⠀⠀⠀⢠⡀⠙⣦⠀⣸⠃⠀⢰⠋⠉⠳⠋⠉⠙⡆⠀
⠀⠀⠀⠀⢀⠤⠤⣄⡀⠈⠛⠚⠋⣷⠀⠀⠀⢀⡾⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢠⡶⢛⣿⣁⠀⢸⣦⡟⠀⠀⠸⣆⠀⠀⠀⠀⡼⠃⠀
⠀⠀⠀⠀⡏⠀⠀⠀⠵⠒⠲⢤⠀⠹⡆⠀⠀⢸⠇⢀⣤⡤⠤⣄⠀⠀⢠⠄⣄⠀⠀⢰⣿⠿⣿⣀⣸⡟⠀⠀⠀⠀⠈⠓⢤⡴⠊⠀⠀⠀
⠀⠀⠀⠀⢳⡀⠀⠀⠀⠀⠀⢨⠇⠀⠙⢦⡀⢸⡄⠀⣻⣴⣶⡶⠀⠀⣬⠭⠅⡆⠀⠈⣴⠟⠉⠉⢻⣦⡶⢲⡆⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠳⡄⠀⣀⡤⠖⠉⠀⠀⠀⠀⠙⢦⣿⣤⣛⣿⠿⢧⣄⠀⠈⠒⣒⣡⡤⢾⡇⠀⢠⣴⣟⣯⡛⠛⠃⠀⠀⠀⢠⡏⠉⠳⠖⠲
⠀⠀⠀⣀⣀⡀⠹⠋⠁⠀⠀⠀⠀⠀⠀⠀⢀⣀⣈⣽⠿⣇⠀⠀⠹⡗⠚⣋⡭⠤⠤⣤⣷⡀⠀⢻⢿⣄⡿⠀⠀⠀⠀⠀⠀⠳⡀⠀⢀⡠
⡴⠚⠻⠇⠀⣹⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢸⣅⣿⠋⢉⣛⣿⠀⠀⢹⠟⠉⠀⠀⠀⠀⠈⠳⣶⠟⠀⠀⠀⡰⠒⠓⢆⠀⠀⠀⠘⠒⠉⠀
⠹⢄⣀⠀⡰⠃⠀⠀⠀⠀⠀⠀⠀⢸⡗⠒⠲⣶⠀⠀⠺⣥⣽⣦⡴⠟⠀⠀⠀⠀⠀⠀⠀⠀⣿⠀⠀⠀⢰⡇⠀⠀⢨⡧⣄⡀⠀⠀⠀⠀
⠀⠀⠈⠉⠁⠀⠀⣀⣀⡞⠉⠙⡆⠀⣧⣴⣄⠹⣦⣀⣀⣸⡅⠀⠀⠀⠀⠀⠀⠀⠀⠀⣀⡾⠃⠀⠀⠀⠘⡇⠀⠀⠀⠀⠀⠙⡆⠀⠀⠀
⠀⠀⠀⠀⠀⢠⠏⠁⠈⠀⠀⠀⡀⠀⠈⠀⠙⠳⠦⣬⣭⣽⣿⣆⠀⠀⠀⠀⠀⣤⠀⠀⣹⡇⠀⠀⠀⠀⠀⣇⣀⣀⣀⣀⣀⡼⠃⠀⠀⠀
⠀⠀⠀⠀⠀⠈⢧⣄⣀⣀⠀⢠⠇⠀⠀⠀⠀⠀⠀⠀⠀⡟⠀⠁⠀⠀⠀⠀⣰⠏⠀⠀⠻⣇⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠉⠉⠉⠀⠀⠀⠀⠀⠀⠀⠀⠀⢻⡄⠀⠀⠀⠀⠛⣉⠀⠀⠀⠀⣿⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠻⢦⣀⣀⣤⠞⠛⠶⠤⠴⠚⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
        </pre>
        </div>
    </div>
    <div id="main-content" class="min-h-screen bg-black overflow-hidden block" style="visibility: hidden;">
        <!-- About Me Section -->
    <div id="main-stage" class="relative h-screen flex items-center justify-center px-8 py-24" style="transform: translate3d(0, 105vh, 0); backface-visibility: hidden;">
            <!-- Background Elements -->
            <div class="absolute inset-0 overflow-hidden" style="-webkit-mask-image: linear-gradient(to bottom, rgba(0,0,0,1) 0%, rgba(0,0,0,1) 78%, rgba(0,0,0,0) 100%); mask-image: linear-gradient(to bottom, rgba(0,0,0,1) 0%, rgba(0,0,0,1) 78%, rgba(0,0,0,0) 100%);">
                <!-- Geometric connecting lines like in reference -->
                <svg class="w-full h-full opacity-10">
                    <defs>
                        <filter id="glow">
                            <feGaussianBlur stdDeviation="2" result="coloredBlur"/>
                            <feMerge> 
                                <feMergeNode in="coloredBlur"/>
                                <feMergeNode in="SourceGraphic"/> 
                            </feMerge>
                        </filter>
                    </defs>
                    <!-- Diagonal connecting lines crossing the screen -->
                    <line x1="0" y1="200" x2="1920" y2="600" stroke="#666666" stroke-width="1" opacity="0" id="line-1"/>
                    <line x1="0" y1="400" x2="1920" y2="200" stroke="#666666" stroke-width="1" opacity="0" id="line-2"/>
                    <line x1="300" y1="0" x2="1200" y2="800" stroke="#666666" stroke-width="1" opacity="0" id="line-3"/>
                    <line x1="1500" y1="0" x2="600" y2="800" stroke="#666666" stroke-width="1" opacity="0" id="line-4"/>
                    <line x1="0" y1="600" x2="1920" y2="300" stroke="#666666" stroke-width="1" opacity="0" id="line-5"/>
                    <!-- Circular background elements -->
                    <circle cx="50%" cy="50%" r="250" stroke="#333333" stroke-width="1" fill="none" opacity="0" id="circle-1"/>
                    <circle cx="50%" cy="50%" r="400" stroke="#333333" stroke-width="1" fill="none" opacity="0" id="circle-2"/>
                    <circle cx="50%" cy="50%" r="550" stroke="#333333" stroke-width="1" fill="none" opacity="0" id="circle-3"/>
                </svg>
            </div>
            
            <!-- Central Content -->
            <div class="relative z-10 max-w-2xl mx-auto text-center">
                <!-- Main Title and Description -->
                <div class="mb-8 transform translate-y-8 transition-all duration-1000 ease-out" id="about-content">
                    <!-- Eyebrow label -->
                    <div class="inline-block mb-4 px-3 py-1 rounded-full text-[10px] tracking-[0.18em] font-semibold bg-red-600/15 text-red-400">
                        EST. 2025 · CREATIVE PORTFOLIO
                    </div>
                    <h1 class="font-britney text-white text-5xl md:text-7xl font-bold tracking-wide mb-6 leading-tight">
                        LIIZUH
                    </h1>
                    <div class="max-w-lg mx-auto">
                        <p class="text-gray-400 text-sm md:text-base leading-relaxed">
                            Crafting digital experiences that<br/>captivate and inspire. Elevating your<br/>brand through design and innovation.
                        </p>
                    </div>
                    <!-- Micro tags -->
                    <div class="mt-5 flex items-center justify-center gap-2 text-[11px] text-gray-400">
                        <span class="px-2 py-0.5 rounded-full bg-white/5 border border-white/10">DESIGN</span>
                        <span class="px-2 py-0.5 rounded-full bg-white/5 border border-white/10">PHOTOGRAPHY</span>
                        <span class="px-2 py-0.5 rounded-full bg-white/5 border border-white/10">MOTION</span>
                    </div>

                    <!-- Decorative corners -->
                    <span class="corner tl" style="left:-16px; top:-8px;"></span>
                    <span class="corner tr" style="right:-16px; top:-8px;"></span>
                    <span class="corner bl" style="left:-16px; bottom:-8px;"></span>
                    <span class="corner br" style="right:-16px; bottom:-8px;"></span>
                </div>
            </div>

            <!-- Subtle sparkles overlay -->
            <svg class="pointer-events-none absolute inset-0 z-5 w-full h-full" aria-hidden="true">
                <!-- existing dots, now with classes for drift -->
                <circle class="spark a" cx="18%" cy="22%" r="2" fill="#ff4d4d"></circle>
                <circle class="spark b" cx="42%" cy="78%" r="2" fill="#ff3b3b"></circle>
                <circle class="spark c" cx="71%" cy="38%" r="2.2" fill="#ff5e5e"></circle>
                <circle class="spark a" cx="85%" cy="66%" r="1.8" fill="#ff3b3b" style="--dur:7.2s"></circle>
                <!-- additional dots -->
                <circle class="spark b" cx="12%" cy="58%" r="1.8" fill="#ff4d4d" style="--dur:6.8s"></circle>
                <circle class="spark c" cx="26%" cy="36%" r="1.6" fill="#ff5e5e" style="--dur:6.2s"></circle>
                <circle class="spark a" cx="58%" cy="18%" r="1.7" fill="#ff3b3b" style="--dur:5.8s"></circle>
                <circle class="spark b" cx="64%" cy="64%" r="1.9" fill="#ff5252" style="--dur:7.6s"></circle>
                <circle class="spark c" cx="78%" cy="28%" r="1.5" fill="#ff6b6b" style="--dur:5.4s"></circle>
                <circle class="spark a" cx="34%" cy="86%" r="1.7" fill="#ff4d4d" style="--dur:7.4s"></circle>
                <circle class="spark b" cx="90%" cy="46%" r="1.6" fill="#ff5c5c" style="--dur:6.0s"></circle>
            </svg>
            
            <!-- Portfolio Images - Positioned exactly like picture 2 -->
            <!-- CLEAN REWRITE: ensure only one element per id and Picsum placeholders -->
            <!-- Image 1 - Top left above Image 4, small dark portrait -->
            <div class="absolute z-20 pointer-events-none transform translate-y-8 transition-all duration-1200 ease-out" id="image-1" style="top: 13.31vh; left: 22.17vw; transition-delay: 0.2s;">
                <div class="w-[8.33vw] h-[26vh] bg-gradient-to-br from-gray-700 to-gray-900 rounded-xl shadow-2xl overflow-hidden relative">
                    <img src="https://picsum.photos/seed/liisu-01/800/1200" alt="Portfolio placeholder 01" class="w-full h-full object-cover soft-bottom" loading="eager" fetchpriority="high" decoding="async" referrerpolicy="no-referrer"/>
                    <span class="text-white text-[10px] font-semibold absolute bottom-1.5 left-1.5 bg-black/60 px-1.5 py-0.5 rounded-sm">01</span>
                </div>
            </div>
            
            <!-- Image 2 - Top center BEHIND email box, visible portrait slightly larger than #1 -->
            <div class="absolute z-20 pointer-events-none transform translate-y-8 transition-all duration-1200 ease-out" id="image-2" style="top: -8.5vh; left: 44vw; transition-delay: 0.4s;">
                <div class="w-[10vw] h-[28vh] bg-gradient-to-br from-gray-600 to-gray-800 rounded-xl shadow-2xl overflow-hidden relative">
                    <img src="https://picsum.photos/seed/liisu-02/900/1300" alt="Portfolio placeholder 02" class="w-full h-full object-cover soft-bottom" loading="eager" fetchpriority="high" decoding="async" referrerpolicy="no-referrer"/>
                    <span class="text-white text-[10px] font-semibold absolute bottom-1.5 right-1.5 bg-black/60 px-1.5 py-0.5 rounded-sm">02</span>
                </div>
            </div>
            
            <!-- Image 3 - Right side, large RED portrait -->
                        <div class="absolute z-20 pointer-events-none transform translate-y-8 transition-all duration-1200 ease-out" id="image-3" style="top: -26.22vh; right: -2vw; transition-delay: 0.6s;">
                <div class="w-[17.78vw] h-[39.51vh] bg-gradient-to-br from-gray-600 to-gray-800 rounded-xl shadow-2xl overflow-hidden relative">
                    <img src="https://picsum.photos/seed/liisu-03/1000/1600" alt="Portfolio placeholder 03" class="w-full h-full object-cover soft-bottom" loading="eager" fetchpriority="high" decoding="async" referrerpolicy="no-referrer"/>
                    <span class="text-white text-[10px] font-semibold absolute bottom-1.5 left-1.5 bg-black/60 px-1.5 py-0.5 rounded-sm">03</span>
                </div>
            </div>
            
            <!-- Image 4 - Left side big portrait below Image 1 -->
            <div class="absolute z-20 pointer-events-none transform translate-y-8 transition-all duration-1200 ease-out" id="image-4" style="top: 45.54vh; left: 4.17vw; transition-delay: 0.8s;">
                <div class="w-[15vw] h-[50vh] bg-gradient-to-br from-gray-700 to-gray-900 rounded-xl shadow-2xl overflow-hidden relative">
                    <img src="https://picsum.photos/seed/liisu-04/1000/1600" alt="Portfolio placeholder 04" class="w-full h-full object-cover soft-bottom" loading="eager" fetchpriority="high" decoding="async" referrerpolicy="no-referrer"/>
                    <span class="text-white text-[10px] font-semibold absolute bottom-1.5 left-1.5 bg-black/60 px-1.5 py-0.5 rounded-sm">04</span>
                </div>
            </div>
            
            <!-- Image 5 - Right side middle positioned precisely -->
            <div class="absolute z-20 pointer-events-none transform translate-y-8 transition-all duration-1200 ease-out" id="image-5" style="top: 15.9vh; left: 64.78vw; transition-delay: 1.0s;">
                <div class="w-[14vw] h-[39.51vh] bg-gradient-to-br from-gray-600 to-gray-800 rounded-xl shadow-2xl overflow-hidden relative">
                    <img src="https://picsum.photos/seed/liisu-05/900/1400" alt="Portfolio placeholder 05" class="w-full h-full object-cover soft-bottom" loading="eager" fetchpriority="high" decoding="async" referrerpolicy="no-referrer"/>
                    <span class="text-white text-[10px] font-semibold absolute bottom-1.5 left-1.5 bg-black/60 px-1.5 py-0.5 rounded-sm">05</span>
                </div>
            </div>
            
            <!-- Image 6 - Bottom center small -->
            <div class="absolute z-20 pointer-events-none transform translate-y-8 transition-all duration-1200 ease-out" id="image-6" style="right: 86.5vw; bottom: 67.88vh; transition-delay: 1.2s;">
                <div class="w-[8.33vw] h-[26vh] bg-gradient-to-br from-gray-700 to-gray-900 rounded-xl shadow-2xl overflow-hidden relative">
                    <img src="https://picsum.photos/seed/liisu-06/800/1200" alt="Portfolio placeholder 06" class="w-full h-full object-cover soft-bottom" loading="lazy" decoding="async" referrerpolicy="no-referrer"/>
                    <span class="text-white text-[10px] font-semibold absolute bottom-1.5 left-1.5 bg-black/60 px-1.5 py-0.5 rounded-sm">06</span>
                </div>
            </div>
            
            <!-- Image 7 - Right edge extending off-screen, very large -->
            <div class="absolute z-20 pointer-events-none transform translate-y-8 transition-all duration-1200 ease-out" id="image-7" style="top: 44.88vh; right: -18.94vw; transition-delay: 1.4s;">
                <div class="w-[22.22vw] h-[48vh] bg-gradient-to-br from-gray-600 to-gray-800 rounded-xl shadow-2xl overflow-hidden relative">
                    <img src="https://picsum.photos/seed/liisu-07/1200/1800" alt="Portfolio placeholder 07" class="w-full h-full object-cover soft-bottom" loading="lazy" decoding="async" referrerpolicy="no-referrer"/>
                    <span class="text-white text-[10px] font-semibold absolute bottom-1.5 left-1.5 bg-black/60 px-1.5 py-0.5 rounded-sm">07</span>
                </div>
            </div>
            
            <!-- Image 8 - Bottom far right, landscape going OUT OF FRAME -->
            <div class="absolute z-20 pointer-events-none transform translate-y-8 transition-all duration-1200 ease-out" id="image-8" style="right: 9.33vw; bottom: 6.7vh; transition-delay: 1.6s;">
                <div class="w-[16vw] h-[32vh] bg-gradient-to-br from-gray-600 to-gray-800 rounded-xl shadow-2xl overflow-hidden relative">
                    <img src="https://picsum.photos/seed/liisu-08/1200/900" alt="Portfolio placeholder 08" class="w-full h-full object-cover soft-bottom" loading="lazy" decoding="async" referrerpolicy="no-referrer"/>
                    <span class="text-white text-[10px] font-semibold absolute bottom-1.5 right-1.5 bg-black/60 px-1.5 py-0.5 rounded-sm">08</span>
                </div>
            </div>

            <!-- Image 9 - New landscape image to fill empty spot -->
            <div class="absolute z-20 pointer-events-none transform translate-y-8 transition-all duration-1200 ease-out" id="image-9" style="top: 73.81vh; left: 30.67vw; transition-delay: 1.8s;">
                <div class="w-[20vw] h-[21vh] bg-gradient-to-br from-gray-600 to-gray-800 rounded-xl shadow-2xl overflow-hidden relative">
                    <img src="https://picsum.photos/seed/liisu-09/1400/900" alt="Portfolio placeholder 09" class="w-full h-full object-cover soft-bottom" loading="lazy" decoding="async" referrerpolicy="no-referrer"/>
                    <span class="text-white text-[10px] font-semibold absolute bottom-1.5 right-1.5 bg-black/60 px-1.5 py-0.5 rounded-sm">09</span>
                </div>
            </div>
    </div>
    </div>

    <!-- Photographer/story section (scroll-reveal) -->
    <section id="photographer" class="relative py-24 md:py-32 overflow-hidden mt-[-1px]" style="visibility: hidden;">
        <!-- Section stays transparent so global animated background continues seamlessly -->
        <!-- Subtle diagonal line background -->
        <svg class="pointer-events-none absolute inset-0 w-full h-full opacity-10" aria-hidden="true" style="z-index:0;">
            <line x1="0" y1="180" x2="2000" y2="0" stroke="#7a7a7a" stroke-width="1" />
            <line x1="-200" y1="420" x2="1800" y2="240" stroke="#7a7a7a" stroke-width="1" />
        </svg>

        <!-- Removed floating badges/awards per request -->

        <div class="relative z-30 max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-10 px-6">
            <!-- Left: large framed portrait -->
            <div data-animate="up" data-delay="100">
                <div class="bg-white/95 rounded-xl shadow-2xl p-3 md:p-4">
                    <img src="https://picsum.photos/seed/photographer-hero/900/1100" alt="Featured portrait" class="w-full h-auto object-cover soft-bottom" loading="eager" decoding="async"/>
                    <div class="mt-3 text-black font-semibold tracking-wider text-lg leading-tight">
                        RALPH<br/>EDWARDS
                    </div>
                </div>
            </div>

            <!-- Right: headline + copy -->
            <div class="relative" data-animate="up" data-delay="150">
                <div class="mb-4 inline-flex items-center gap-2 px-3 py-1 rounded-full bg-red-600/15 text-red-400 text-[11px] tracking-[0.12em] font-semibold">
                    <span class="w-1.5 h-1.5 rounded-full bg-red-500"></span> FEATURED STORY
                </div>
                <h2 class="text-white font-bold leading-[1.05] text-3xl md:text-5xl" style="letter-spacing:0.01em;">
                    OUR PHOTOGRAPHER<br/>
                    WILL SELECT THE<br/>
                    BEST&nbsp;IMAGES AND IDEAS<br/>
                    FOR YOU
                </h2>
                <p class="mt-6 text-gray-400 text-sm md:text-base max-w-prose" data-animate="up" data-delay="300">
                    Once upon a time, nestled in a quaint little town, there lived an author named Alice. She wasn't your typical writer; her stories weren't just ink on paper; they were portals to worlds beyond imagination. Alice had a peculiar gift – she could breathe life into her characters, making them dance off the pages and into the hearts of her readers.
                </p>
                <p class="mt-4 text-gray-500 text-sm md:text-base max-w-prose" data-animate="up" data-delay="420">
                    Alice's love for storytelling began in her childhood. She would spend hours in her attic, surrounded by dusty old books, dreaming up adventures for her imaginary friends. As she grew older, her passion for writing only intensified.
                </p>

                <!-- Stats + CTA -->
                <div class="mt-8 grid grid-cols-3 gap-4 text-center" data-animate="up" data-delay="520">
                    <div>
                        <div class="text-white text-2xl font-bold">7+</div>
                        <div class="text-gray-400 text-xs tracking-wide">YEARS</div>
                    </div>
                    <div>
                        <div class="text-white text-2xl font-bold">120</div>
                        <div class="text-gray-400 text-xs tracking-wide">PROJECTS</div>
                    </div>
                    <div>
                        <div class="text-white text-2xl font-bold">48</div>
                        <div class="text-gray-400 text-xs tracking-wide">CLIENTS</div>
                    </div>
                </div>
                <div class="mt-6 flex flex-wrap items-center gap-4" data-animate="up" data-delay="620">
                    <a href="#contact" class="inline-flex items-center gap-2 px-4 py-2 rounded-lg bg-red-600 text-white text-sm font-semibold shadow-lg shadow-red-900/30 hover:bg-red-500 transition-colors">
                        Book a shoot
                    </a>
                    <a href="#gallery" class="text-gray-300 text-sm hover:text-white transition-colors">See full gallery →</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Moving Gallery Section -->
    <section id="gallery" class="relative py-20 md:py-28">
        <!-- Subtle decorative background lines for depth -->
        <svg class="pointer-events-none absolute inset-0 w-full h-full opacity-[0.08]" aria-hidden="true" style="z-index:0;">
            <defs>
                <linearGradient id="gline" x1="0" x2="1" y1="0" y2="0">
                    <stop offset="0%" stop-color="#ff4d4d" stop-opacity="0"/>
                    <stop offset="50%" stop-color="#ff4d4d" stop-opacity="1"/>
                    <stop offset="100%" stop-color="#ff4d4d" stop-opacity="0"/>
                </linearGradient>
            </defs>
            <line x1="0" y1="120" x2="2000" y2="40" stroke="url(#gline)" stroke-width="1"/>
            <line x1="-300" y1="380" x2="1800" y2="260" stroke="url(#gline)" stroke-width="1"/>
            <line x1="0" y1="640" x2="2200" y2="520" stroke="url(#gline)" stroke-width="1"/>
        </svg>
        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <div class="mb-8">
                <div class="inline-block mb-3 px-3 py-1 rounded-full text-[10px] tracking-[0.18em] font-semibold bg-red-600/15 text-red-400" data-animate="up" data-delay="40">CURATED • LIMITED SET</div>
                <div class="relative inline-block" data-animate="up" data-delay="80">
                    <h3 class="font-britney text-transparent bg-clip-text bg-gradient-to-r from-red-500 via-rose-400 to-red-300 drop-shadow-[0_0_18px_rgba(255,0,50,.18)] text-4xl md:text-5xl font-bold leading-tight">
                        Gallery
                    </h3>
                    <div class="heading-underline mt-2"></div>
                    <span class="corner tl" style="left:-16px; top:-10px;"></span>
                    <span class="corner tr" style="right:-16px; top:-10px;"></span>
                </div>
                <div class="text-red-300/70 text-xs md:text-sm mt-2" data-animate="up" data-delay="120">Auto‑scrolling • Hover a card to pause and zoom</div>
            </div>
        </div>
        <div id="gallery-marquee" class="relative z-10">
            <div class="gallery-viewport">
                <div class="gallery-track">
                    <!-- Unique slides (limited set) -->
                    <div class="card"><img src="https://picsum.photos/seed/liisu-10/1400/900" alt="gallery 10" loading="lazy" decoding="async"/></div>
                    <div class="card"><img src="https://picsum.photos/seed/liisu-11/1200/800" alt="gallery 11" loading="lazy" decoding="async"/></div>
                    <div class="card"><img src="https://picsum.photos/seed/liisu-12/1400/900" alt="gallery 12" loading="lazy" decoding="async"/></div>
                    <div class="card"><img src="https://picsum.photos/seed/liisu-13/1200/800" alt="gallery 13" loading="lazy" decoding="async"/></div>
                    <div class="card"><img src="https://picsum.photos/seed/liisu-14/1400/900" alt="gallery 14" loading="lazy" decoding="async"/></div>
                    <div class="card"><img src="https://picsum.photos/seed/liisu-15/1200/800" alt="gallery 15" loading="lazy" decoding="async"/></div>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Modern portfolio intro animation
        window.addEventListener('load', function() {
            console.log('Page loaded, starting animations...');
            // Define transition once at top-level so safety kickers can call it
            let __transitionStarted = false;
            function startTransition() {
                if (__transitionStarted) return; // idempotent
                __transitionStarted = true;
                console.log('Starting simultaneous content transition...');
                const intro = document.getElementById('intro');
                const mainContent = document.getElementById('main-content');
                let mainStage = document.getElementById('main-stage');
                if (!mainStage) { console.warn('main-stage not found; falling back to main-content'); mainStage = mainContent; }
                const overlapDelay = 150; // small overlap so main starts promptly but still behind intro

                // Prepare main content (ensure it's composited and ready)
                mainContent.style.visibility = 'visible';
                mainStage.style.willChange = 'transform';
                mainStage.style.backfaceVisibility = 'hidden';
                mainStage.style.transform = 'translate3d(0, 105vh, 0)';
                // Set initial state without animating
                mainStage.style.transition = 'none';
                // Force reflow so the browser applies the initial state
                void mainStage.offsetWidth;
                // Now enable the transition for the slide-in (slower for smoother feel)
                mainStage.style.transition = 'transform 1600ms cubic-bezier(0.22, 1, 0.36, 1)';

                // Transparent overlay and input pass-through
                intro.style.transition = 'background-color 300ms linear';
                intro.style.backgroundColor = 'transparent';
                intro.style.pointerEvents = 'none';

                // Start simultaneous animations in the next frame
                requestAnimationFrame(() => {
                    const introElements = [
                        'main-text', 'portfolio-label', 'ascii-art', 'tagline', 'text-underline',
                        'note-1', 'note-2', 'note-3', 'note-4', 'note-5', 'note-6', 'note-7', 'note-8', 'note-9', 'intro-vignette',
                        'brush-1', 'brush-2', 'brush-3', 'art-line-1', 'art-line-2'
                    ];

                    // Hint compositing for smoother transforms
                    introElements.forEach(id => {
                        const el = document.getElementById(id);
                        if (el) el.style.willChange = 'transform';
                    });

                    introElements.forEach(id => {
                        const el = document.getElementById(id);
                        if (el) {
                            const isPortfolio = id === 'portfolio-label';
                            const dur = isPortfolio ? 1100 : 1300; // slightly slower intro exit
                            const dist = isPortfolio ? '-130vh' : '-120vh';
                            el.style.transition = `transform ${dur}ms cubic-bezier(0.22, 1, 0.36, 1)`;
                            el.style.transform = `translate3d(0, ${dist}, 0)`;
                        }
                    });

                    // Start main slide with double rAF for reliability; optional tiny delay for overlap
                    const kickMain = () => requestAnimationFrame(() => {
                        console.log('Sliding in main stage');
                        mainStage.style.transform = 'translate3d(0, 0, 0)';
                    });
                    if (overlapDelay > 0) {
                        setTimeout(kickMain, overlapDelay);
                    } else {
                        requestAnimationFrame(kickMain);
                    }

                    // Bring in the top-left ASCII logo with the transition
                    const asciiCorner = document.getElementById('ascii-corner');
                    if (asciiCorner) {
                        asciiCorner.style.visibility = 'visible';
                        asciiCorner.style.willChange = 'opacity, transform';
                        asciiCorner.style.transition = 'opacity 600ms ease-out 220ms, transform 600ms cubic-bezier(0.22, 1, 0.36, 1) 220ms';
                        requestAnimationFrame(() => {
                            asciiCorner.style.opacity = '1';
                            asciiCorner.style.transform = 'translate3d(0,0,0)';
                        });
                    }
                });

                const finish = () => {
                    console.log('Finalizing transition');
                    try {
                        if (intro) {
                            intro.style.display = 'none';
                            intro.style.visibility = 'hidden';
                        }
                        if (mainContent) {
                            mainContent.style.display = 'block';
                            mainContent.style.visibility = 'visible';
                        }
                        // Reveal post-intro sections
                        const photographer = document.getElementById('photographer');
                        if (photographer) photographer.style.visibility = 'visible';
                        const asciiCorner = document.getElementById('ascii-corner');
                        if (asciiCorner) asciiCorner.style.visibility = 'visible';
                    } catch (e) { console.warn('Finalization guard caught:', e); }
                    document.body.style.overflow = 'auto';
                    animateAboutSection();
                    setupScrollAnimations();
                    setupGalleryMarquee();
                };
                // Prefer an event-driven finish to eliminate timing drift
                mainStage.addEventListener('transitionend', () => finish(), { once: true });
                // Normal finish time (align with slower main slide)
                setTimeout(finish, 1600 + overlapDelay + 120);
                // Safety fallback in case something was skipped
                setTimeout(() => {
                    const computed = getComputedStyle(mainStage).transform;
                    if (!computed || computed === 'none') { mainStage.style.transform = 'translate3d(0, 0, 0)'; }
                    if (intro && intro.style.display !== 'none') finish();
                }, 2600 + overlapDelay);
                // Extra safety: enforce final state after ~5.5s
                setTimeout(() => {
                    if (document.getElementById('intro')) {
                        console.warn('Extra safety: removing intro overlay');
                        finish();
                    }
                }, 5500);
            }
            
            // Start artistic animations: fade in the intro overlay, then slide elements
            setTimeout(() => {
                console.log('Starting intro animations...');
                // Fade in entire intro overlay for a soft entrance
                const introOverlay = document.getElementById('intro');
                if (introOverlay) {
                    introOverlay.style.willChange = 'opacity, transform';
                    introOverlay.style.transition = 'opacity 700ms ease-out';
                    introOverlay.style.opacity = '1';
                }
                
                // Animate main text sliding up (guard if not present)
                const mainText = document.getElementById('main-text');
                if (mainText) mainText.style.transform = 'translateY(0) translateZ(0)';
                
                // Animate first musical notes
                const note1 = document.getElementById('note-1');
                note1.style.transform = 'translateY(0)';
            }, 300);
            
            // Second wave of animations
            setTimeout(() => {
                // Portfolio label slides up
                const portfolioLabel = document.getElementById('portfolio-label');
                if (portfolioLabel) portfolioLabel.style.transform = 'translateY(0) translateZ(0)';
                
                // More musical notes slide up
                const note2 = document.getElementById('note-2');
                const note5 = document.getElementById('note-5');
                const note9 = document.getElementById('note-9');
                
                note2.style.transform = 'translateY(0)';
                note5.style.transform = 'translateY(0)';
                note9.style.transform = 'translateY(0)';
                
                // ASCII cat slides up (guard if not present)
                const asciiArt = document.getElementById('ascii-art');
                if (asciiArt) asciiArt.style.transform = 'translateY(0) translateZ(0)';
            }, 600);
            
            // Third wave of animations
            setTimeout(() => {
                const note6 = document.getElementById('note-6');
                const note3 = document.getElementById('note-3');
                
                note6.style.transform = 'translateY(0)';
                note3.style.transform = 'translateY(0)';
            }, 900);
            
            // Final wave of animations
            setTimeout(() => {
                const note7 = document.getElementById('note-7');
                const note4 = document.getElementById('note-4');
                const note8 = document.getElementById('note-8');
                
                note7.style.transform = 'translateY(0)';
                note4.style.transform = 'translateY(0)';
                note8.style.transform = 'translateY(0)';
                
                // Animate text underline
                // text underline is already visible
            }, 1200);

            // Kick off after ~3s so intro breathes; safety kicker at 4.5s only if not started
            setTimeout(startTransition, 3000);
            setTimeout(() => {
                if (__transitionStarted) return; // don't log or re-run if already started
                const intro = document.getElementById('intro');
                if (intro) {
                    console.warn('Safety: forcing transition start');
                    startTransition();
                }
            }, 4500);
            
            // More musical notes
            setTimeout(() => {
                document.getElementById('note-2').style.transform = 'translateY(-15px) rotate(15deg)';
                document.getElementById('note-9').style.transform = 'translateY(-12px) rotate(-5deg)';
            }, 1000);
            
            // Creative tagline
            // Tagline is visible initially; no fade
            
            // More notes appearing
            setTimeout(() => {
                document.getElementById('note-6').style.transform = 'translateY(-10px) rotate(20deg)';
            }, 1300);
            
            // More artistic elements
            setTimeout(() => {
                document.getElementById('note-3').style.transform = 'translateY(-12px)';
            }, 1500);
            
            setTimeout(() => {
                document.getElementById('note-4').style.transform = 'translateY(-8px) rotate(-10deg)';
                document.getElementById('note-7').style.transform = 'translateY(-14px) rotate(25deg)';
            }, 1800);
            
            setTimeout(() => {
                document.getElementById('note-8').style.transform = 'translateY(-9px) rotate(-15deg)';
            }, 2200);
            
            // Brushes are visible; no opacity animation
            
            // ASCII cat art appears with the early animations
            // ASCII art visibility handled via transform only
            
            // Text reveal animations (much earlier now)
            // No opacity for main-text; handled via transform only
            
            // No opacity for subtitle; handled via transform only
            
            // No opacity for underline
            
            // Note: Removed a duplicate transition block to avoid conflicting slide timings
        });
        
        // About Me section animations - Updated for off-screen positioning
        function animateAboutSection() {
            // Central content slides in first (transform-only)
            setTimeout(() => {
                const content = document.getElementById('about-content');
                content.style.transform = 'translateY(0)';
            }, 200);
            
            // Circular elements appear
            setTimeout(() => {
                const circle1 = document.getElementById('circle-1');
                const circle2 = document.getElementById('circle-2');
                const circle3 = document.getElementById('circle-3');
                if (circle1) circle1.style.opacity = '0.3';
                if (circle2) circle2.style.opacity = '0.2';
                if (circle3) circle3.style.opacity = '0.15';
            }, 400);
            
            // Connecting lines appear
            setTimeout(() => {
                const lines = ['line-1', 'line-2', 'line-3', 'line-4', 'line-5', 'line-6'];
                lines.forEach((lineId, index) => {
                    setTimeout(() => {
                        const lineElement = document.getElementById(lineId);
                        if (lineElement) {
                            lineElement.style.opacity = '0.15';
                        }
                    }, index * 150);
                });
            }, 500);
            
            // Images appear with precise positions (slide up from below, no opacity)
            setTimeout(() => {
                const image1 = document.getElementById('image-1');
                image1.style.transform = 'translateY(0)';
            }, 600);
            
            setTimeout(() => {
                const image2 = document.getElementById('image-2');
                image2.style.transform = 'translateY(0)';
            }, 700);
            
            setTimeout(() => {
                const image3 = document.getElementById('image-3');
                image3.style.transform = 'translateY(0)';
            }, 800);
            
            setTimeout(() => {
                const image4 = document.getElementById('image-4');
                image4.style.transform = 'translateY(0)';
            }, 900);
            
            setTimeout(() => {
                const image5 = document.getElementById('image-5');
                image5.style.transform = 'translateY(0)';
            }, 1000);
            
            setTimeout(() => {
                const image6 = document.getElementById('image-6');
                image6.style.transform = 'translateY(0)';
            }, 1100);
            
            setTimeout(() => {
                const image7 = document.getElementById('image-7');
                image7.style.transform = 'translateY(0)';
            }, 1200);
            
            setTimeout(() => {
                const image8 = document.getElementById('image-8');
                image8.style.transform = 'translateY(0)';
            }, 1300);

            setTimeout(() => {
                const image9 = document.getElementById('image-9');
                if (image9) image9.style.transform = 'translateY(0)';
            }, 1400);
        }
        
        // IntersectionObserver-based scroll-reveal for elements with [data-animate]
        function setupScrollAnimations(){
            const nodes = Array.from(document.querySelectorAll('[data-animate]'));
            if(!nodes.length) return;

            nodes.forEach((el)=>{
                const type = el.dataset.animate || 'up';
                const dist = el.dataset.distance || '28px';
                const delay = parseInt(el.dataset.delay||'0',10);
                const axis = (type === 'left' || type === 'right') ? 'X' : 'Y';
                const initial = axis === 'X'
                    ? `translate3d(${type==='left'?'-':type==='right'?'':''}${dist},0,0)`
                    : `translate3d(0, ${dist}, 0)`;
                el.dataset.initialTransform = initial; // store for reuse on exit
                el.style.opacity = '0';
                el.style.transform = initial;
                el.style.willChange = 'opacity, transform';
                el.style.transition = `transform 800ms cubic-bezier(0.22,1,0.36,1) ${delay}ms, opacity 800ms ease-out ${delay}ms`;
            });

            const io = new IntersectionObserver((entries)=>{
                entries.forEach((e)=>{
                    const el = e.target;
                    if(e.isIntersecting){
                        requestAnimationFrame(()=>{
                            el.style.opacity = '1';
                            el.style.transform = 'translate3d(0,0,0)';
                        });
                    } else {
                        // Animate out when leaving viewport
                        const initial = el.dataset.initialTransform || 'translate3d(0, 28px, 0)';
                        requestAnimationFrame(()=>{
                            el.style.opacity = '0';
                            el.style.transform = initial;
                        });
                    }
                });
            }, { threshold: 0.15, rootMargin: '0px 0px -10% 0px' });

            nodes.forEach(n=> io.observe(n));
        }
        
        // Developer calibration mode to fine-tune image positions
        (function calibrationTool() {
            let debug = false;
            let selected = null;
            const ids = ['image-1','image-2','image-3','image-4','image-5','image-6','image-7','image-8','image-9'];

            // HUD
            const hud = document.createElement('div');
            hud.style.cssText = 'position:fixed;bottom:12px;left:12px;z-index:1000;background:rgba(0,0,0,.6);color:#fff;padding:8px 10px;border-radius:6px;font:12px/1.2 ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;display:none;';
            hud.id = 'pos-hud';
            hud.textContent = 'Debug: off';
            document.body.appendChild(hud);

            function updateHud() {
                if (!debug) { hud.style.display = 'none'; return; }
                hud.style.display = 'block';
                if (!selected) { hud.textContent = 'Debug ON — click an image or press 1-9 to select'; return; }
                const s = selected.style;
                hud.textContent = `${selected.id}  top:${s.top||'-'}  left:${s.left||'-'}  right:${s.right||'-'}  bottom:${s.bottom||'-'}`;
            }

            // Toggle debug with key "d"
            window.addEventListener('keydown', (e) => {
                if (e.key === 'd' || e.key === 'D') {
                    debug = !debug; 
                    // Toggle pointer events on image wrappers so underlying content remains clickable when debug is off
                    ids.forEach(id => {
                        const el = document.getElementById(id);
                        if (!el) return;
                        el.style.pointerEvents = debug ? 'auto' : 'none';
                    });
                    updateHud();
                }
                if (!debug) return;

                // Select by number 1..9
                if (/^[1-9]$/.test(e.key)) {
                    selected = document.getElementById(`image-${e.key}`);
                    updateHud();
                }

                if (!selected) return;
                const s = selected.style;
                const stepVh = e.shiftKey ? 0.25 : 0.5; // vertical step in vh
                const stepVw = e.shiftKey ? 0.25 : 0.5; // horizontal step in vw

                function parseUnit(val, unit) {
                    if (!val) return 0;
                    const n = parseFloat(val);
                    return isNaN(n) ? 0 : n;
                }

                function setOrSwap(primaryProp, secondaryProp, delta, unit) {
                    if (s[primaryProp]) {
                        const v = parseUnit(s[primaryProp], unit) + delta;
                        s[primaryProp] = v.toFixed(2) + unit;
                    } else if (s[secondaryProp]) {
                        const v = parseUnit(s[secondaryProp], unit) - delta;
                        s[secondaryProp] = v.toFixed(2) + unit;
                    } else {
                        // default to primary
                        s[primaryProp] = (delta >= 0 ? delta : 0) + unit;
                    }
                }

                switch (e.key) {
                    case 'ArrowUp':   e.preventDefault(); setOrSwap('top','bottom', -stepVh, 'vh'); break;
                    case 'ArrowDown': e.preventDefault(); setOrSwap('top','bottom',  stepVh, 'vh'); break;
                    case 'ArrowLeft': e.preventDefault(); setOrSwap('left','right', -stepVw, 'vw'); break;
                    case 'ArrowRight':e.preventDefault(); setOrSwap('left','right',  stepVw, 'vw'); break;
                    case 's': case 'S':
                        e.preventDefault();
                        console.log(`${selected.id} -> style: top:${s.top}; right:${s.right}; bottom:${s.bottom}; left:${s.left}; transform:${s.transform||'none'}`);
                        break;
                }
                updateHud();
            });

            // Click to select when debug is on
            ids.forEach(id => {
                const el = document.getElementById(id);
                if (!el) return;
                el.addEventListener('click', (e) => {
                    if (!debug) return; e.preventDefault(); e.stopPropagation();
                    selected = el; updateHud();
                });
            });
        })();

        // Layer debug tool: Press 'l' to analyze elements overlapping main-text and subtitle, 'x' to clear overlays
        (function layerDebugTool(){
            const overlays = [];
            function getSelector(el){
                if(!el || !el.tagName) return '';
                let sel = el.tagName.toLowerCase();
                if(el.id) sel += `#${el.id}`;
                if(el.className && typeof el.className === 'string'){
                    const cls = el.className.trim().split(/\s+/).slice(0,3).join('.');
                    if(cls) sel += `.${cls}`;
                }
                return sel;
            }
            function colorIsVisible(bg){
                if(!bg) return false;
                if(bg === 'transparent' || bg === 'rgba(0, 0, 0, 0)') return false;
                return true;
            }
            function outline(el, color){
                const r = el.getBoundingClientRect();
                const o = document.createElement('div');
                o.style.cssText = `position:fixed;left:${r.left}px;top:${r.top}px;width:${r.width}px;height:${r.height}px;outline:2px dashed ${color};outline-offset:-2px;pointer-events:none;z-index:2147483647;`;
                document.body.appendChild(o); overlays.push(o);
            }
            function clear(){ overlays.splice(0).forEach(n=>n.remove()); }
            function analyze(targetId){
                const target = document.getElementById(targetId);
                if(!target) return;
                const tb = target.getBoundingClientRect();
                // scan all elements that overlap target rect
                const all = Array.from(document.body.getElementsByTagName('*'));
                const overlappers = [];
                for(const el of all){
                    if(el === target) continue;
                    const r = el.getBoundingClientRect();
                    if(r.width===0 || r.height===0) continue;
                    const overlap = !(r.right < tb.left || r.left > tb.right || r.bottom < tb.top || r.top > tb.bottom);
                    if(!overlap) continue;
                    const cs = getComputedStyle(el);
                    const z = cs.zIndex;
                    const bg = cs.backgroundColor;
                    const pos = cs.position;
                    const pe = cs.pointerEvents;
                    overlappers.push({el, z, bg, pos, pe, rect:r});
                }
                overlappers.sort((a,b)=>{
                    // approximate stacking by z-index numeric, NaN last
                    const az = parseInt(a.z); const bz = parseInt(b.z);
                    if(isNaN(az) && isNaN(bz)) return 0;
                    if(isNaN(az)) return -1; if(isNaN(bz)) return 1;
                    return az - bz;
                });
                console.group(`Layer analysis for #${targetId}`);
                console.log('Target rect:', tb);
                overlappers.forEach(({el,z,bg,pos,pe,rect})=>{
                    const selector = getSelector(el);
                    const visibleBg = colorIsVisible(bg);
                    const info = {selector, zIndex:z, position:pos, pointerEvents:pe, bg, rect};
                    if(visibleBg) outline(el, 'rgba(255,0,0,0.7)');
                    console.log(info);
                });
                outline(target, 'rgba(0,200,255,0.9)');
                console.groupEnd();
            }
            window.addEventListener('keydown', (e)=>{
                if(e.key==='l' || e.key==='L'){ clear(); analyze('main-text'); analyze('subtitle'); }
                if(e.key==='x' || e.key==='X'){ clear(); }
            });
            // Expose for console use
            window.__layersDebug = {analyze, clear};
        })();

        // Moving gallery marquee: duplicates slides, auto-scrolls, pause on hover
        function setupGalleryMarquee(){
            const root = document.getElementById('gallery-marquee');
            if(!root) return;
            const track = root.querySelector('.gallery-track');
            if(!track) return;
            // Duplicate children once so animation can run seamlessly
            const slides = Array.from(track.children);
            slides.forEach((n)=> track.appendChild(n.cloneNode(true)));
            // Pause/resume on card hover
            track.addEventListener('mouseenter', (e)=>{
                if(e.target && e.target.closest('.card')) track.classList.add('paused');
            }, true);
            track.addEventListener('mouseleave', (e)=>{
                if(e.target && e.target.closest('.card')) track.classList.remove('paused');
            }, true);
            // Optional: tap to pause on touch devices
            let paused = false; let touchTimer;
            track.addEventListener('touchstart', ()=>{
                paused = !paused; track.classList.toggle('paused', paused);
                clearTimeout(touchTimer);
                if(paused){ touchTimer = setTimeout(()=>{ paused=false; track.classList.remove('paused'); }, 3000); }
            }, {passive:true});
        }
    </script>
</body>
</html>