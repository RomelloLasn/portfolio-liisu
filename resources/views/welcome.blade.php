<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Liisu</title>
    <meta name="description" content="Liizuh · Creative portfolio—design, photography, motion, socials, and music.">
    <!-- OpenGraph -->
    <meta property="og:title" content="Liizuh · Creative Portfolio"/>
    <meta property="og:description" content="Design, photography, and motion. Curated gallery, socials, and music."/>
    <meta property="og:type" content="website"/>
    <meta property="og:image" content="https://picsum.photos/seed/liisu-03/1200/630"/>
    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:title" content="Liizuh · Creative Portfolio"/>
    <meta name="twitter:description" content="Design, photography, and motion. Curated gallery, socials, and music."/>
    <meta name="twitter:image" content="https://picsum.photos/seed/liisu-03/1200/630"/>
            <script type="application/ld+json">
            @verbatim
            {
                "@context": "https://schema.org",
                "@graph": [
                    {
                        "@type": "Person",
                        "name": "Liisu",
                        "alternateName": "Liizuh",
                        "url": "
            @endverbatim{{ url('/') }}@verbatim",
                        "image": "https://picsum.photos/seed/photographer-hero/900/1100",
                        "jobTitle": "Creative",
                        "knowsAbout": ["Photography", "Design", "Motion"],
                        "sameAs": []
                    },
                    {
                        "@type": "WebSite",
                        "name": "Liisu Portfolio",
                        "url": "
            @endverbatim{{ url('/') }}@verbatim",
                        "inLanguage": "en"
                    }
                ]
            }
            @endverbatim
            </script>
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
            /* Reverse direction for second row */
            @keyframes marqueeXR {
                0% { transform: translate3d(-50%,0,0); }
                100% { transform: translate3d(0,0,0); }
            }
            #gallery-marquee .gallery-viewport, #gallery-marquee-2 .gallery-viewport { overflow: hidden; }
            #gallery-marquee .gallery-track, #gallery-marquee-2 .gallery-track {
                display: flex; gap: 24px; width: max-content;
                will-change: transform; backface-visibility: hidden;
                animation: marqueeX var(--dur,48s) linear infinite;
            }
            #gallery-marquee .gallery-track.paused, #gallery-marquee-2 .gallery-track.paused { animation-play-state: paused; }
            /* Apply reverse animation to second row (higher specificity to override base) */
            #gallery-marquee-2 .gallery-track { animation-name: marqueeXR; }
            #gallery-marquee .card, #gallery-marquee-2 .card {
                width: clamp(200px, 20vw, 320px); height: clamp(120px, 14vw, 220px);
                border-radius: 14px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,.45);
                background: linear-gradient(135deg,#3f3f46,#111827);
                transform: translateZ(0); transition: transform 240ms cubic-bezier(.22,1,.36,1), box-shadow 240ms ease;
                position: relative;
            }
            #gallery-marquee .card img, #gallery-marquee-2 .card img { width: 100%; height: 100%; object-fit: cover; display: block; }
            #gallery-marquee .card:hover, #gallery-marquee-2 .card:hover { transform: scale(1.08); z-index: 5; box-shadow: 0 18px 40px rgba(0,0,0,.6); }
            /* Reusable decorative underline */
            .heading-underline { height: 2px; width: 96px; background: linear-gradient(90deg, rgba(255,77,77,0), rgba(255,77,77,0.9), rgba(255,77,77,0)); }

            /* Social section cards */
            .social-card {
                background: radial-gradient(120% 120% at 20% 10%, rgba(255,77,77,0.10), rgba(0,0,0,0.0) 60%), linear-gradient(135deg, #17171b, #0b0b0f);
                border-radius: 16px; border: 1px solid rgba(255,77,77,0.15);
                transition: transform 260ms cubic-bezier(.22,1,.36,1), box-shadow 260ms ease, border-color 260ms ease;
                box-shadow: 0 10px 30px rgba(0,0,0,0.35);
            }
            .social-card:hover {
                transform: translateY(-6px) scale(1.02);
                border-color: rgba(255,77,77,0.35);
                box-shadow: 0 18px 48px rgba(0,0,0,0.55), 0 0 0 1px rgba(255,77,77,0.08) inset;
            }
            .social-icon {
                width: 40px; height: 40px; border-radius: 9999px;
                display: grid; place-items: center;
                background: radial-gradient(closest-side, rgba(255,77,77,0.35), rgba(255,77,77,0.12));
                box-shadow: 0 6px 18px rgba(255,77,77,0.22);
                transition: transform 260ms cubic-bezier(.22,1,.36,1), box-shadow 260ms ease;
            }
            .social-card:hover .social-icon {
                transform: scale(1.08) translateY(-2px);
                box-shadow: 0 10px 26px rgba(255,77,77,0.28);
            }
            .social-card svg { width: 22px; height: 22px; }
            .social-title { color: #fff; font-weight: 700; letter-spacing: 0.02em; }
            .social-sub { color: rgba(255,255,255,0.6); font-size: 12px; }

            /* Custom scrollbar (WebKit + Firefox) */
            html { scrollbar-width: thin; scrollbar-color: #ff4d4d #0b0b0c; }
            ::-webkit-scrollbar { width: 10px; height: 10px; }
            ::-webkit-scrollbar-track { background: #0b0b0c; }
            ::-webkit-scrollbar-thumb {
                background: linear-gradient(180deg, #ff3b3b, #b30027);
                border-radius: 9999px;
                border: 2px solid #0b0b0c;
            }
            ::-webkit-scrollbar-thumb:hover { background: linear-gradient(180deg, #ff6363, #d10036); }

            /* Cursor glow that follows the pointer */
            #cursor-glow {
                position: fixed; left: 0; top: 0; width: 34px; height: 34px; border-radius: 9999px; pointer-events: none;
                mix-blend-mode: screen; filter: blur(6px);
                background: radial-gradient(closest-side, rgba(255,77,77,0.85), rgba(255,77,77,0.25) 60%, rgba(255,77,77,0) 70%);
                transform: translate3d(-100px, -100px, 0); opacity: 0.85; z-index: 100;
                transition: opacity 200ms ease;
            }

            /* Music section (player + lyrics) */
            .music-card {
                background: radial-gradient(120% 140% at 10% 0%, rgba(255,77,77,0.10), rgba(0,0,0,0) 60%), linear-gradient(135deg, #15151a, #0b0b0f);
                border: 1px solid rgba(255,77,77,0.15);
                border-radius: 16px; box-shadow: 0 12px 36px rgba(0,0,0,.45);
            }
            .music-card .art {
                width: 96px; height: 96px; border-radius: 14px; overflow: hidden;
                background: linear-gradient(135deg,#3f3f46,#111827);
                box-shadow: 0 8px 24px rgba(0,0,0,.35);
                background-size: cover; background-position: center;
            }
            .music-btn {
                width: 52px; height: 52px; border-radius: 9999px; display: grid; place-items:center;
                background: radial-gradient(closest-side, rgba(255,77,77,.85), rgba(255,77,77,.35));
                color: white; box-shadow: 0 10px 26px rgba(255,77,77,.25);
                transition: transform 220ms cubic-bezier(.22,1,.36,1), box-shadow 220ms ease;
            }
            .music-btn:hover { transform: scale(1.06); box-shadow: 0 14px 34px rgba(255,77,77,.32); }
            .music-meta { color:#fff; font-weight:800; letter-spacing:.02em; font-size: clamp(16px, 2.2vw, 22px); }
            .music-artist { color: rgba(255,255,255,.75); font-size: clamp(12px, 1.6vw, 16px); }
            .music-artist a { color: #ff6b6b; text-decoration: none; }
            .music-artist a:hover { text-decoration: underline; }
            .music-progress { height: 6px; background: linear-gradient(90deg,#2a2a30,#16161b); border-radius: 9999px; overflow: hidden; }
            .music-progress > span { display:block; height:100%; width:0%; background: linear-gradient(90deg,#ff4d4d,#d10036); }
            .lyrics {
                line-height: 2.1; color: rgba(255,255,255,.7); font-size: clamp(16px, 2vw, 22px);
            }
            .lyrics-line { margin: 6px 0; transition: color 200ms ease; }
            .lyrics-line.active { color: rgba(255,255,255,.88); }
            .lyrics-word { transition: color 120ms ease, text-shadow 120ms ease; }
            .lyrics-word.active { color: #ffb3b3; text-shadow: 0 0 10px rgba(255,77,77,.35); }

            /* Equalizer bars (animate only while playing) */
            .equalizer-bars { display:flex; gap:4px; width:24px; height:16px; align-items:flex-end; margin-left:10px; }
            .equalizer-bars .bar { width:4px; height:4px; background: linear-gradient(180deg, #ff9ea1, #ff4d4d); border-radius: 2px; opacity: .9; }
            @keyframes eqA { 0%,100% { height:4px } 50% { height:16px } }
            @keyframes eqB { 0%,100% { height:4px } 50% { height:12px } }
            @keyframes eqC { 0%,100% { height:4px } 50% { height:14px } }
            .music-card.playing .equalizer-bars .bar:nth-child(1){ animation: eqA 820ms ease-in-out infinite; }
            .music-card.playing .equalizer-bars .bar:nth-child(2){ animation: eqB 760ms ease-in-out infinite 60ms; }
            .music-card.playing .equalizer-bars .bar:nth-child(3){ animation: eqC 700ms ease-in-out infinite 120ms; }

            /* Rotate cover art while playing */
            .music-card.playing .art { animation: spinSlow 20s linear infinite; }

            /* Compact mute/volume controls */
            .music-ctrl { width:36px; height:36px; border-radius:9999px; display:grid; place-items:center; color:#fff; cursor:pointer;
                background: linear-gradient(135deg, #1a1a1e, #0f0f14); border:1px solid rgba(255,77,77,0.15);
                transition: transform 220ms cubic-bezier(.22,1,.36,1), box-shadow 220ms ease; }
            .music-ctrl:hover { transform: scale(1.06); box-shadow: 0 10px 26px rgba(255,77,77,.22); }
            .vol-wrap { display:flex; align-items:center; gap:8px; margin-left:8px; }
            input[type="range"].vol { width:120px; height:4px; accent-color:#ff4d4d; }
            @media (max-width: 420px){ input[type="range"].vol { width: 90px; } }

            /* Sticky dock for the player */
            #music-dock { position: fixed; left: 50%; bottom: 16px; transform: translateX(-50%);
                width: min(92vw, 780px); z-index: 90; pointer-events: none; }
            #music-dock .music-card { pointer-events: auto; }
            @media (max-width: 520px){ #music-dock { bottom: 10px; width: min(96vw, 680px); } }

            /* (Overlay removed per request) */
            
            /* Footer styles */
            .footer-title {
                font-weight: 900; letter-spacing: 0.08em; color: #fff;
            }
            .footer-bar { height:1px; background: linear-gradient(90deg, rgba(255,77,77,0), rgba(255,77,77,.55), rgba(255,77,77,0)); }
            .footer-link { color: rgba(255,255,255,.85); text-decoration: none; }
            .footer-link:hover { color: #ff6b6b; text-decoration: underline; }
            .footer-meta { color: rgba(255,255,255,.6); font-size: 12px; }
            .footer-waves path { stroke: rgba(255,77,77,.8); }

            /* Dot nav (scrollspy) */
            #dot-nav{ position: fixed; right: 16px; top: 50%; transform: translateY(-50%); z-index: 80; display: grid; gap: 12px; }
            #dot-nav button{ width: 10px; height: 10px; border-radius: 9999px; background: rgba(255,255,255,.35); border: 1px solid rgba(255,77,77,.4); box-shadow: 0 2px 10px rgba(0,0,0,.25); cursor: pointer; }
            #dot-nav button.active{ background: #ff4d4d; box-shadow: 0 0 0 4px rgba(255,77,77,.18); }
            #dot-nav button:hover{ transform: scale(1.15); }

            /* Blur-up for images */
            .blur-up{ filter: blur(12px); transform: scale(1.02); }
            .blur-up.loaded{ filter: blur(0); transform: none; transition: filter 400ms ease, transform 400ms ease; }

            /* Focus outlines (accessibility) */
            :focus-visible{ outline: 2px solid #ff4d4d; outline-offset: 2px; }

            /* Reduced motion */
            @media (prefers-reduced-motion: reduce){
                * { animation-duration: .01ms !important; animation-iteration-count: 1 !important; transition-duration: .01ms !important; scroll-behavior: auto !important; }
                #gallery-marquee .gallery-track, #gallery-marquee-2 .gallery-track { animation: none !important; }
            }

            /* Theme toggle */
            #theme-toggle{ position: fixed; right: 16px; bottom: 16px; z-index: 85; background: linear-gradient(135deg, #1a1a1e, #0f0f14); color: #fff; border:1px solid rgba(255,77,77,.25); width: 44px; height: 44px; border-radius: 9999px; display:grid; place-items:center; box-shadow: 0 8px 24px rgba(0,0,0,.35); cursor:pointer; }
            #theme-toggle:hover{ transform: scale(1.06); box-shadow: 0 10px 30px rgba(255,77,77,.25); }
            html[data-theme="light"] .music-card { background: linear-gradient(135deg, #fff, #f7f7fb); box-shadow: 0 8px 24px rgba(0,0,0,.08); }

            /* Light theme: global overrides (keep intro dark) */
            html[data-theme="light"] { 
                --bg1: rgba(214, 31, 65, 0.12);
                --bg2: rgba(214, 31, 65, 0.10);
                --bg3: rgba(150, 24, 40, 0.10);
                --bg4: rgba(180, 20, 40, 0.10);
                --bg5: rgba(255, 77, 77, 0.06);
            }
            html[data-theme="light"] body { background: #f8f9fb !important; color: #111; }
            html[data-theme="light"] #main-content { background: #ffffff !important; }
            html[data-theme="light"] #bg-anim > .inset-0 { background: transparent !important; }
            html[data-theme="light"] #cursor-glow { mix-blend-mode: multiply; opacity: .6; background: radial-gradient(closest-side, rgba(214,31,65,0.35), rgba(214,31,65,0.15) 60%, rgba(214,31,65,0) 70%); }

            /* Scrollbar (light) */
            html[data-theme="light"] { scrollbar-color: #cc1f3a #f0f1f5; }
            html[data-theme="light"] ::-webkit-scrollbar-track { background: #f0f1f5; }
            html[data-theme="light"] ::-webkit-scrollbar-thumb { background: linear-gradient(180deg, #ff6b6b, #cc1f3a); border: 2px solid #f0f1f5; }

            /* Dot nav (light) */
            html[data-theme="light"] #dot-nav button{ background: rgba(0,0,0,.35); border: 1px solid rgba(179,0,39,.25); box-shadow: 0 2px 10px rgba(0,0,0,.15); }
            html[data-theme="light"] #dot-nav button.active{ background: #ff4d4d; box-shadow: 0 0 0 4px rgba(179,0,39,.18); }

            /* Theme toggle (light) */
            html[data-theme="light"] #theme-toggle{ background: linear-gradient(135deg, #ffffff, #f4f4f8); color: #111; border-color: rgba(179,0,39,.25); box-shadow: 0 6px 18px rgba(0,0,0,.10); }

            /* Social cards (light) */
            html[data-theme="light"] .social-card{
                background: radial-gradient(120% 120% at 20% 10%, rgba(214,31,65,0.06), rgba(255,255,255,1) 60%), linear-gradient(135deg,#ffffff,#f7f7fb);
                border: 1px solid rgba(214,31,65,0.20);
                box-shadow: 0 6px 20px rgba(0,0,0,0.08);
            }
            html[data-theme="light"] .social-card:hover{
                border-color: rgba(214,31,65,0.35);
                box-shadow: 0 10px 30px rgba(0,0,0,0.16), 0 0 0 1px rgba(214,31,65,0.06) inset;
            }
            html[data-theme="light"] .social-title{ color:#111; }
            html[data-theme="light"] .social-sub{ color:#555; }
            html[data-theme="light"] .social-icon{ background: radial-gradient(closest-side, rgba(214,31,65,0.25), rgba(214,31,65,0.10)); box-shadow: 0 6px 18px rgba(214,31,65,0.18); color:#b30027; }

            /* Gallery cards (light) */
            html[data-theme="light"] #gallery-marquee .card, html[data-theme="light"] #gallery-marquee-2 .card{
                background: linear-gradient(135deg,#f3f4f7,#e9ecf2);
                box-shadow: 0 6px 18px rgba(0,0,0,.12);
            }
            html[data-theme="light"] #gallery-marquee .card:hover, html[data-theme="light"] #gallery-marquee-2 .card:hover{
                box-shadow: 0 12px 28px rgba(0,0,0,.18);
            }

            /* Music (light) */
            html[data-theme="light"] .music-ctrl { background: linear-gradient(135deg, #ffffff, #f2f2f7); color:#111; border-color: rgba(179,0,39,0.20); box-shadow: 0 6px 16px rgba(0,0,0,0.10); }
            html[data-theme="light"] .music-progress { background: linear-gradient(90deg,#ebedf1,#dfe3ea); }
            html[data-theme="light"] .music-lyrics-box { border-top-color: rgba(0,0,0,0.12) !important; }
            html[data-theme="light"] .lyrics { color: rgba(20,20,20,.78); }
            html[data-theme="light"] .lyrics-line.active { color: rgba(8,8,8,.95); }
            html[data-theme="light"] .lyrics-word.active { color: #b30027; text-shadow: 0 0 8px rgba(214,31,65,.18); }
            html[data-theme="light"] #music-card h4 { color: #111 !important; }
            html[data-theme="light"] .music-meta{ color:#111; }
            html[data-theme="light"] .music-artist{ color:#444; }
            html[data-theme="light"] .music-artist a{ color:#b30027; }

            /* Footer (light) */
            html[data-theme="light"] .footer-title{ color:#111; }
            html[data-theme="light"] .footer-link{ color:#222; }
            html[data-theme="light"] .footer-link:hover{ color:#b30027; }
            html[data-theme="light"] .footer-meta{ color:#555; }
            html[data-theme="light"] .footer-waves path{ stroke: rgba(179,0,39,.85); }
        </style>
</head>
<body class="bg-black overflow-hidden">
    <!-- Dot navigation (scrollspy) -->
    <nav id="dot-nav" aria-label="Section navigation" style="visibility:hidden;">
        <button type="button" data-target="#photographer" aria-label="About"></button>
        <button type="button" data-target="#gallery" aria-label="Gallery"></button>
        <button type="button" data-target="#social" aria-label="Social"></button>
        <button type="button" data-target="#music" aria-label="Music"></button>
        <button type="button" data-target="#footer" aria-label="Footer"></button>
    </nav>
    <!-- Theme toggle button -->
    <button id="theme-toggle" aria-label="Toggle light/dark theme" title="Toggle theme" style="visibility:hidden;">
        ☾
    </button>
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
                <img src="https://picsum.photos/seed/liisu-01/800/1200" alt="Portfolio placeholder 01" class="w-full h-full object-cover soft-bottom blur-up" loading="eager" fetchpriority="high" decoding="async" referrerpolicy="no-referrer"
                    srcset="https://picsum.photos/seed/liisu-01/400/600 400w, https://picsum.photos/seed/liisu-01/800/1200 800w, https://picsum.photos/seed/liisu-01/1200/1800 1200w"
                    sizes="(min-width: 1024px) 8.33vw, 40vw"/>
                    <span class="text-white text-[10px] font-semibold absolute bottom-1.5 left-1.5 bg-black/60 px-1.5 py-0.5 rounded-sm">01</span>
                </div>
            </div>
            
            <!-- Image 2 - Top center BEHIND email box, visible portrait slightly larger than #1 -->
            <div class="absolute z-20 pointer-events-none transform translate-y-8 transition-all duration-1200 ease-out" id="image-2" style="top: -8.5vh; left: 44vw; transition-delay: 0.4s;">
                <div class="w-[10vw] h-[28vh] bg-gradient-to-br from-gray-600 to-gray-800 rounded-xl shadow-2xl overflow-hidden relative">
                <img src="https://picsum.photos/seed/liisu-02/900/1300" alt="Portfolio placeholder 02" class="w-full h-full object-cover soft-bottom blur-up" loading="eager" fetchpriority="high" decoding="async" referrerpolicy="no-referrer"
                    srcset="https://picsum.photos/seed/liisu-02/450/650 450w, https://picsum.photos/seed/liisu-02/900/1300 900w, https://picsum.photos/seed/liisu-02/1200/1700 1200w"
                    sizes="(min-width: 1024px) 10vw, 48vw"/>
                    <span class="text-white text-[10px] font-semibold absolute bottom-1.5 right-1.5 bg-black/60 px-1.5 py-0.5 rounded-sm">02</span>
                </div>
            </div>
            
            <!-- Image 3 - Right side, large RED portrait -->
                        <div class="absolute z-20 pointer-events-none transform translate-y-8 transition-all duration-1200 ease-out" id="image-3" style="top: -26.22vh; right: -2vw; transition-delay: 0.6s;">
                <div class="w-[17.78vw] h-[39.51vh] bg-gradient-to-br from-gray-600 to-gray-800 rounded-xl shadow-2xl overflow-hidden relative">
                <img src="https://picsum.photos/seed/liisu-03/1000/1600" alt="Portfolio placeholder 03" class="w-full h-full object-cover soft-bottom blur-up" loading="eager" fetchpriority="high" decoding="async" referrerpolicy="no-referrer"
                    srcset="https://picsum.photos/seed/liisu-03/500/800 500w, https://picsum.photos/seed/liisu-03/1000/1600 1000w, https://picsum.photos/seed/liisu-03/1400/2200 1400w"
                    sizes="(min-width: 1024px) 17.78vw, 60vw"/>
                    <span class="text-white text-[10px] font-semibold absolute bottom-1.5 left-1.5 bg-black/60 px-1.5 py-0.5 rounded-sm">03</span>
                </div>
            </div>
            
            <!-- Image 4 - Left side big portrait below Image 1 -->
            <div class="absolute z-20 pointer-events-none transform translate-y-8 transition-all duration-1200 ease-out" id="image-4" style="top: 45.54vh; left: 4.17vw; transition-delay: 0.8s;">
                <div class="w-[15vw] h-[50vh] bg-gradient-to-br from-gray-700 to-gray-900 rounded-xl shadow-2xl overflow-hidden relative">
                <img src="https://picsum.photos/seed/liisu-04/1000/1600" alt="Portfolio placeholder 04" class="w-full h-full object-cover soft-bottom blur-up" loading="eager" fetchpriority="high" decoding="async" referrerpolicy="no-referrer"
                    srcset="https://picsum.photos/seed/liisu-04/600/960 600w, https://picsum.photos/seed/liisu-04/1000/1600 1000w, https://picsum.photos/seed/liisu-04/1400/2100 1400w"
                    sizes="(min-width: 1024px) 15vw, 56vw"/>
                    <span class="text-white text-[10px] font-semibold absolute bottom-1.5 left-1.5 bg-black/60 px-1.5 py-0.5 rounded-sm">04</span>
                </div>
            </div>
            
            <!-- Image 5 - Right side middle positioned precisely -->
            <div class="absolute z-20 pointer-events-none transform translate-y-8 transition-all duration-1200 ease-out" id="image-5" style="top: 15.9vh; left: 64.78vw; transition-delay: 1.0s;">
                <div class="w-[14vw] h-[39.51vh] bg-gradient-to-br from-gray-600 to-gray-800 rounded-xl shadow-2xl overflow-hidden relative">
                <img src="https://picsum.photos/seed/liisu-05/900/1400" alt="Portfolio placeholder 05" class="w-full h-full object-cover soft-bottom blur-up" loading="eager" fetchpriority="high" decoding="async" referrerpolicy="no-referrer"
                    srcset="https://picsum.photos/seed/liisu-05/450/700 450w, https://picsum.photos/seed/liisu-05/900/1400 900w, https://picsum.photos/seed/liisu-05/1200/1860 1200w"
                    sizes="(min-width: 1024px) 14vw, 56vw"/>
                    <span class="text-white text-[10px] font-semibold absolute bottom-1.5 left-1.5 bg-black/60 px-1.5 py-0.5 rounded-sm">05</span>
                </div>
            </div>
            
            <!-- Image 6 - Bottom center small -->
            <div class="absolute z-20 pointer-events-none transform translate-y-8 transition-all duration-1200 ease-out" id="image-6" style="right: 86.5vw; bottom: 67.88vh; transition-delay: 1.2s;">
                <div class="w-[8.33vw] h-[26vh] bg-gradient-to-br from-gray-700 to-gray-900 rounded-xl shadow-2xl overflow-hidden relative">
                <img src="https://picsum.photos/seed/liisu-06/800/1200" alt="Portfolio placeholder 06" class="w-full h-full object-cover soft-bottom blur-up" loading="lazy" decoding="async" referrerpolicy="no-referrer"
                    srcset="https://picsum.photos/seed/liisu-06/400/600 400w, https://picsum.photos/seed/liisu-06/800/1200 800w, https://picsum.photos/seed/liisu-06/1200/1800 1200w"
                    sizes="(min-width: 1024px) 8.33vw, 40vw"/>
                    <span class="text-white text-[10px] font-semibold absolute bottom-1.5 left-1.5 bg-black/60 px-1.5 py-0.5 rounded-sm">06</span>
                </div>
            </div>
            
            <!-- Image 7 - Right edge extending off-screen, very large -->
            <div class="absolute z-20 pointer-events-none transform translate-y-8 transition-all duration-1200 ease-out" id="image-7" style="top: 44.88vh; right: -18.94vw; transition-delay: 1.4s;">
                <div class="w-[22.22vw] h-[48vh] bg-gradient-to-br from-gray-600 to-gray-800 rounded-xl shadow-2xl overflow-hidden relative">
                <img src="https://picsum.photos/seed/liisu-07/1200/1800" alt="Portfolio placeholder 07" class="w-full h-full object-cover soft-bottom blur-up" loading="lazy" decoding="async" referrerpolicy="no-referrer"
                    srcset="https://picsum.photos/seed/liisu-07/600/900 600w, https://picsum.photos/seed/liisu-07/1200/1800 1200w, https://picsum.photos/seed/liisu-07/1600/2400 1600w"
                    sizes="(min-width: 1024px) 22.22vw, 80vw"/>
                    <span class="text-white text-[10px] font-semibold absolute bottom-1.5 left-1.5 bg-black/60 px-1.5 py-0.5 rounded-sm">07</span>
                </div>
            </div>
            
            <!-- Image 8 - Bottom far right, landscape going OUT OF FRAME -->
            <div class="absolute z-20 pointer-events-none transform translate-y-8 transition-all duration-1200 ease-out" id="image-8" style="right: 9.33vw; bottom: 6.7vh; transition-delay: 1.6s;">
                <div class="w-[16vw] h-[32vh] bg-gradient-to-br from-gray-600 to-gray-800 rounded-xl shadow-2xl overflow-hidden relative">
                <img src="https://picsum.photos/seed/liisu-08/1200/900" alt="Portfolio placeholder 08" class="w-full h-full object-cover soft-bottom blur-up" loading="lazy" decoding="async" referrerpolicy="no-referrer"
                    srcset="https://picsum.photos/seed/liisu-08/600/450 600w, https://picsum.photos/seed/liisu-08/1200/900 1200w, https://picsum.photos/seed/liisu-08/1600/1200 1600w"
                    sizes="(min-width: 1024px) 16vw, 70vw"/>
                    <span class="text-white text-[10px] font-semibold absolute bottom-1.5 right-1.5 bg-black/60 px-1.5 py-0.5 rounded-sm">08</span>
                </div>
            </div>

            <!-- Image 9 - New landscape image to fill empty spot -->
            <div class="absolute z-20 pointer-events-none transform translate-y-8 transition-all duration-1200 ease-out" id="image-9" style="top: 73.81vh; left: 30.67vw; transition-delay: 1.8s;">
                <div class="w-[20vw] h-[21vh] bg-gradient-to-br from-gray-600 to-gray-800 rounded-xl shadow-2xl overflow-hidden relative">
                <img src="https://picsum.photos/seed/liisu-09/1400/900" alt="Portfolio placeholder 09" class="w-full h-full object-cover soft-bottom blur-up" loading="lazy" decoding="async" referrerpolicy="no-referrer"
                    srcset="https://picsum.photos/seed/liisu-09/700/450 700w, https://picsum.photos/seed/liisu-09/1400/900 1400w, https://picsum.photos/seed/liisu-09/1800/1150 1800w"
                    sizes="(min-width: 1024px) 20vw, 80vw"/>
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

        <!-- Side accents to fill empty edges -->
        <div aria-hidden="true" class="pointer-events-none absolute inset-y-0 left-0 w-[12vw]" style="z-index:0;">
            <div class="absolute inset-y-10 left-0 w-[14vw] bg-gradient-to-r from-red-500/10 to-transparent blur-2xl rounded-r-full"></div>
            <svg class="absolute left-3 top-1/3 opacity-20" width="120" height="260" viewBox="0 0 120 260" fill="none">
                <defs>
                    <linearGradient id="pl" x1="0" x2="1" y1="0" y2="0">
                        <stop offset="0%" stop-color="#ff4d4d" stop-opacity="0.0"/>
                        <stop offset="60%" stop-color="#ff4d4d" stop-opacity="0.9"/>
                        <stop offset="100%" stop-color="#ff4d4d" stop-opacity="0.0"/>
                    </linearGradient>
                </defs>
                <line x1="0" y1="30" x2="110" y2="10" stroke="url(#pl)" stroke-width="1"/>
                <line x1="-40" y1="120" x2="110" y2="90" stroke="url(#pl)" stroke-width="1"/>
                <line x1="-20" y1="210" x2="120" y2="180" stroke="url(#pl)" stroke-width="1"/>
            </svg>
        </div>
        <div aria-hidden="true" class="pointer-events-none absolute inset-y-0 right-0 w-[12vw]" style="z-index:0;">
            <div class="absolute inset-y-10 right-0 w-[14vw] bg-gradient-to-l from-red-500/10 to-transparent blur-2xl rounded-l-full"></div>
            <svg class="absolute right-3 top-1/4 opacity-20" width="120" height="260" viewBox="0 0 120 260" fill="none">
                <defs>
                    <linearGradient id="pr" x1="1" x2="0" y1="0" y2="0">
                        <stop offset="0%" stop-color="#ff4d4d" stop-opacity="0.0"/>
                        <stop offset="60%" stop-color="#ff4d4d" stop-opacity="0.9"/>
                        <stop offset="100%" stop-color="#ff4d4d" stop-opacity="0.0"/>
                    </linearGradient>
                </defs>
                <line x1="10" y1="20" x2="120" y2="40" stroke="url(#pr)" stroke-width="1"/>
                <line x1="-10" y1="120" x2="120" y2="140" stroke="url(#pr)" stroke-width="1"/>
                <line x1="0" y1="210" x2="120" y2="230" stroke="url(#pr)" stroke-width="1"/>
            </svg>
        </div>

        <!-- Flying spark dots overlay -->
        <svg class="pointer-events-none absolute inset-0 z-0 w-full h-full opacity-20" aria-hidden="true">
            <circle class="spark a" cx="14%" cy="18%" r="1.8" fill="#ff4d4d" style="--dur:6.6s"></circle>
            <circle class="spark b" cx="32%" cy="72%" r="2.0" fill="#ff5c5c" style="--dur:6.0s"></circle>
            <circle class="spark c" cx="64%" cy="26%" r="1.6" fill="#ff6b6b" style="--dur:5.4s"></circle>
            <circle class="spark a" cx="78%" cy="58%" r="1.7" fill="#ff3b3b" style="--dur:7.2s"></circle>
            <circle class="spark b" cx="20%" cy="44%" r="1.5" fill="#ff5e5e" style="--dur:5.8s"></circle>
            <circle class="spark c" cx="86%" cy="32%" r="1.9" fill="#ff4d4d" style="--dur:6.8s"></circle>
            <circle class="spark a" cx="46%" cy="86%" r="1.6" fill="#ff5252" style="--dur:7.6s"></circle>
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
    <section id="gallery" class="relative py-16 md:py-20" style="visibility: hidden;">
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
        <!-- Spark dots overlay for gallery -->
        <svg class="pointer-events-none absolute inset-0 w-full h-full opacity-20" aria-hidden="true" style="z-index:0;">
            <circle class="spark a" cx="10%" cy="24%" r="1.8" fill="#ff4d4d"></circle>
            <circle class="spark b" cx="28%" cy="70%" r="1.6" fill="#ff5e5e" style="--dur:6.2s"></circle>
            <circle class="spark c" cx="52%" cy="18%" r="2.0" fill="#ff6b6b" style="--dur:5.6s"></circle>
            <circle class="spark a" cx="76%" cy="62%" r="1.7" fill="#ff3b3b" style="--dur:7.4s"></circle>
            <circle class="spark b" cx="90%" cy="34%" r="1.9" fill="#ff5252" style="--dur:6.8s"></circle>
        </svg>
        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <div class="mb-6 text-center -mt-10 md:-mt-16">
                <div class="inline-flex mb-3 px-3 py-1 rounded-full text-[10px] tracking-[0.18em] font-semibold bg-red-600/15 text-red-300/90" data-animate="up" data-delay="40">CURATED • LIMITED SET</div>
                <div class="relative inline-block max-w-2xl w-full" data-animate="up" data-delay="80">
                    <span class="absolute -inset-x-8 -inset-y-4 bg-red-500/5 blur-lg rounded-full"></span>
                    <h3 class="relative font-britney text-transparent bg-clip-text bg-gradient-to-r from-rose-400 via-red-400 to-rose-300 drop-shadow-[0_0_18px_rgba(255,0,50,.18)] text-4xl md:text-5xl font-bold leading-tight">
                        Gallery
                    </h3>
                    <div class="heading-underline mt-2 mx-auto"></div>
                    <span class="corner tl" style="left:-16px; top:-10px;"></span>
                    <span class="corner tr" style="right:-16px; top:-10px;"></span>
                </div>
                <div class="text-red-300/80 text-xs md:text-sm mt-2" data-animate="up" data-delay="120">Auto‑scrolling • Hover a card to pause and zoom</div>
            </div>
        </div>
        <div id="gallery-marquee" class="relative z-10">
            <div class="gallery-viewport">
                <div class="gallery-track">
                    <!-- Unique slides (limited set) -->
                    <div class="card"><img class="blur-up" src="https://picsum.photos/seed/liisu-10/1400/900" alt="gallery 10" loading="lazy" decoding="async" referrerpolicy="no-referrer"
                        srcset="https://picsum.photos/seed/liisu-10/400/257 400w, https://picsum.photos/seed/liisu-10/800/514 800w, https://picsum.photos/seed/liisu-10/1200/771 1200w"
                        sizes="(max-width: 640px) 200px, (min-width: 1280px) 320px, 20vw"/></div>
                    <div class="card"><img class="blur-up" src="https://picsum.photos/seed/liisu-11/1200/800" alt="gallery 11" loading="lazy" decoding="async" referrerpolicy="no-referrer"
                        srcset="https://picsum.photos/seed/liisu-11/400/267 400w, https://picsum.photos/seed/liisu-11/800/533 800w, https://picsum.photos/seed/liisu-11/1200/800 1200w"
                        sizes="(max-width: 640px) 200px, (min-width: 1280px) 320px, 20vw"/></div>
                    <div class="card"><img class="blur-up" src="https://picsum.photos/seed/liisu-12/1400/900" alt="gallery 12" loading="lazy" decoding="async" referrerpolicy="no-referrer"
                        srcset="https://picsum.photos/seed/liisu-12/400/257 400w, https://picsum.photos/seed/liisu-12/800/514 800w, https://picsum.photos/seed/liisu-12/1200/771 1200w"
                        sizes="(max-width: 640px) 200px, (min-width: 1280px) 320px, 20vw"/></div>
                    <div class="card"><img class="blur-up" src="https://picsum.photos/seed/liisu-13/1200/800" alt="gallery 13" loading="lazy" decoding="async" referrerpolicy="no-referrer"
                        srcset="https://picsum.photos/seed/liisu-13/400/267 400w, https://picsum.photos/seed/liisu-13/800/533 800w, https://picsum.photos/seed/liisu-13/1200/800 1200w"
                        sizes="(max-width: 640px) 200px, (min-width: 1280px) 320px, 20vw"/></div>
                    <div class="card"><img class="blur-up" src="https://picsum.photos/seed/liisu-14/1400/900" alt="gallery 14" loading="lazy" decoding="async" referrerpolicy="no-referrer"
                        srcset="https://picsum.photos/seed/liisu-14/400/257 400w, https://picsum.photos/seed/liisu-14/800/514 800w, https://picsum.photos/seed/liisu-14/1200/771 1200w"
                        sizes="(max-width: 640px) 200px, (min-width: 1280px) 320px, 20vw"/></div>
                    <div class="card"><img class="blur-up" src="https://picsum.photos/seed/liisu-15/1200/800" alt="gallery 15" loading="lazy" decoding="async" referrerpolicy="no-referrer"
                        srcset="https://picsum.photos/seed/liisu-15/400/267 400w, https://picsum.photos/seed/liisu-15/800/533 800w, https://picsum.photos/seed/liisu-15/1200/800 1200w"
                        sizes="(max-width: 640px) 200px, (min-width: 1280px) 320px, 20vw"/></div>
                </div>
            </div>
        </div>
        <!-- Second marquee row, moving left-to-right -->
        <div id="gallery-marquee-2" class="relative z-10 mt-10 md:mt-12" style="--dur:54s;">
            <div class="gallery-viewport">
                <div class="gallery-track reverse">
                    <!-- Alternate order for variety -->
                    <div class="card"><img class="blur-up" src="https://picsum.photos/seed/liisu-13/1200/800" alt="gallery 13b" loading="lazy" decoding="async" referrerpolicy="no-referrer"
                        srcset="https://picsum.photos/seed/liisu-13/400/267 400w, https://picsum.photos/seed/liisu-13/800/533 800w, https://picsum.photos/seed/liisu-13/1200/800 1200w"
                        sizes="(max-width: 640px) 200px, (min-width: 1280px) 320px, 20vw"/></div>
                    <div class="card"><img class="blur-up" src="https://picsum.photos/seed/liisu-16/1400/900" alt="gallery 16" loading="lazy" decoding="async" referrerpolicy="no-referrer"
                        srcset="https://picsum.photos/seed/liisu-16/400/257 400w, https://picsum.photos/seed/liisu-16/800/514 800w, https://picsum.photos/seed/liisu-16/1200/771 1200w"
                        sizes="(max-width: 640px) 200px, (min-width: 1280px) 320px, 20vw"/></div>
                    <div class="card"><img class="blur-up" src="https://picsum.photos/seed/liisu-11/1200/800" alt="gallery 11b" loading="lazy" decoding="async" referrerpolicy="no-referrer"
                        srcset="https://picsum.photos/seed/liisu-11/400/267 400w, https://picsum.photos/seed/liisu-11/800/533 800w, https://picsum.photos/seed/liisu-11/1200/800 1200w"
                        sizes="(max-width: 640px) 200px, (min-width: 1280px) 320px, 20vw"/></div>
                    <div class="card"><img class="blur-up" src="https://picsum.photos/seed/liisu-14/1400/900" alt="gallery 14b" loading="lazy" decoding="async" referrerpolicy="no-referrer"
                        srcset="https://picsum.photos/seed/liisu-14/400/257 400w, https://picsum.photos/seed/liisu-14/800/514 800w, https://picsum.photos/seed/liisu-14/1200/771 1200w"
                        sizes="(max-width: 640px) 200px, (min-width: 1280px) 320px, 20vw"/></div>
                    <div class="card"><img class="blur-up" src="https://picsum.photos/seed/liisu-12/1400/900" alt="gallery 12b" loading="lazy" decoding="async" referrerpolicy="no-referrer"
                        srcset="https://picsum.photos/seed/liisu-12/400/257 400w, https://picsum.photos/seed/liisu-12/800/514 800w, https://picsum.photos/seed/liisu-12/1200/771 1200w"
                        sizes="(max-width: 640px) 200px, (min-width: 1280px) 320px, 20vw"/></div>
                    <div class="card"><img class="blur-up" src="https://picsum.photos/seed/liisu-15/1200/800" alt="gallery 15b" loading="lazy" decoding="async" referrerpolicy="no-referrer"
                        srcset="https://picsum.photos/seed/liisu-15/400/267 400w, https://picsum.photos/seed/liisu-15/800/533 800w, https://picsum.photos/seed/liisu-15/1200/800 1200w"
                        sizes="(max-width: 640px) 200px, (min-width: 1280px) 320px, 20vw"/></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Social media section (moved below gallery) -->
    <section id="social" class="relative pt-8 md:pt-10 pb-10 md:pb-12 overflow-hidden" style="visibility: hidden;">
        <!-- Decorative background sweep -->
        <svg class="pointer-events-none absolute inset-0 w-full h-full opacity-[0.07]" aria-hidden="true" style="z-index:0;">
            <defs>
                <linearGradient id="sline" x1="0" x2="1" y1="0" y2="0">
                    <stop offset="0%" stop-color="#ff4d4d" stop-opacity="0"/>
                    <stop offset="50%" stop-color="#ff4d4d" stop-opacity="1"/>
                    <stop offset="100%" stop-color="#ff4d4d" stop-opacity="0"/>
                </linearGradient>
            </defs>
            <line x1="-200" y1="120" x2="2200" y2="40" stroke="url(#sline)" stroke-width="1"/>
            <line x1="-300" y1="420" x2="2000" y2="260" stroke="url(#sline)" stroke-width="1"/>
        </svg>
        <div class="relative z-10 max-w-7xl mx-auto px-6">
            <div class="text-center mb-8">
                <div class="inline-flex mb-3 px-3 py-1 rounded-full text-[10px] tracking-[0.18em] font-semibold bg-red-600/15 text-red-300/90" data-animate="up" data-delay="40">CONNECT</div>
                <h3 class="font-britney text-transparent bg-clip-text bg-gradient-to-r from-rose-400 via-red-400 to-rose-300 text-3xl md:text-4xl font-bold" data-animate="up" data-delay="80">Follow & Listen</h3>
                <div class="heading-underline mx-auto mt-2" data-animate="up" data-delay="120"></div>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5" role="list">
                <!-- Instagram -->
                <a class="group social-card p-5 flex items-center gap-4" href="#" target="_blank" rel="noopener" data-animate="up" data-delay="140" aria-label="Instagram">
                    <div class="social-icon">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="3" y="3" width="18" height="18" rx="5" stroke="#ff4d4d" stroke-width="1.5"/>
                            <circle cx="12" cy="12" r="4.2" stroke="#ff6b6b" stroke-width="1.5"/>
                            <circle cx="17.3" cy="6.7" r="1.2" fill="#ff4d4d"/>
                        </svg>
                    </div>
                    <div>
                        <div class="social-title">Instagram</div>
                        <div class="social-sub">Photography & stories</div>
                    </div>
                </a>
                <!-- Spotify -->
                <a class="group social-card p-5 flex items-center gap-4" href="#" target="_blank" rel="noopener" data-animate="up" data-delay="160" aria-label="Spotify">
                    <div class="social-icon">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="12" cy="12" r="9" stroke="#ff4d4d" stroke-width="1.5"/>
                            <path d="M7 10.5c3.3-1.1 6.7-.9 9.9.6" stroke="#ff6b6b" stroke-width="1.5" stroke-linecap="round"/>
                            <path d="M7.6 13c2.8-.9 5.6-.7 8.2.5" stroke="#ff5c5c" stroke-width="1.4" stroke-linecap="round"/>
                            <path d="M8.2 15.2c2.3-.7 4.7-.5 6.8.5" stroke="#ff4d4d" stroke-width="1.3" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <div>
                        <div class="social-title">Spotify</div>
                        <div class="social-sub">Playlists & tracks</div>
                    </div>
                </a>
                <!-- Facebook -->
                <a class="group social-card p-5 flex items-center gap-4" href="#" target="_blank" rel="noopener" data-animate="up" data-delay="180" aria-label="Facebook">
                    <div class="social-icon">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13 10h2.5l.5-3H13V5.5c0-.8.2-1.3 1.4-1.3H16V1.1C15.4 1 14.5.9 13.5.9 11 .9 9.3 2.4 9.3 5.1V7H7v3h2.3v9h3.7v-9z" fill="#ff4d4d"/>
                        </svg>
                    </div>
                    <div>
                        <div class="social-title">Facebook</div>
                        <div class="social-sub">News & updates</div>
                    </div>
                </a>
                <!-- TikTok -->
                <a class="group social-card p-5 flex items-center gap-4" href="#" target="_blank" rel="noopener" data-animate="up" data-delay="200" aria-label="TikTok">
                    <div class="social-icon">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16 3c.4 1.9 1.8 3.4 3.6 3.8v3.2c-1.4-.1-2.8-.6-3.9-1.4v6.3c0 3-2.5 5.4-5.6 5.1-2.4-.3-4.4-2.2-4.7-4.6-.5-3.8 2.8-6.9 6.5-6.1v3.1c-1.1-.4-2.3.1-2.8 1.1-.7 1.5.3 3.3 2 3.5 1.1.1 2.2-.5 2.5-1.6.1-.3.2-.6.2-.9V3h2.2z" fill="#ff5c5c"/>
                        </svg>
                    </div>
                    <div>
                        <div class="social-title">TikTok</div>
                        <div class="social-sub">Shorts & snippets</div>
                    </div>
                </a>
            </div>
        </div>
        <!-- Spark overlay for consistency -->
        <svg class="pointer-events-none absolute inset-0 w-full h-full opacity-20" aria-hidden="true" style="z-index:0;">
            <circle class="spark a" cx="12%" cy="22%" r="1.6" fill="#ff4d4d"></circle>
            <circle class="spark b" cx="38%" cy="74%" r="1.8" fill="#ff5c5c"></circle>
            <circle class="spark c" cx="68%" cy="28%" r="1.5" fill="#ff6b6b"></circle>
            <circle class="spark a" cx="86%" cy="64%" r="1.7" fill="#ff3b3b"></circle>
        </svg>
    </section>

    <!-- Music + Lyrics Section (inline card under Social) -->
    <section id="music" class="relative pt-8 md:pt-10 pb-16 md:pb-20 overflow-hidden" style="visibility: hidden;">
        <div class="absolute inset-0 pointer-events-none opacity-[0.07]" aria-hidden="true">
            <svg class="w-full h-full">
                <defs>
                    <linearGradient id="mline" x1="0" x2="1" y1="0" y2="0">
                        <stop offset="0%" stop-color="#ff4d4d" stop-opacity="0"/>
                        <stop offset="50%" stop-color="#ff4d4d" stop-opacity="1"/>
                        <stop offset="100%" stop-color="#ff4d4d" stop-opacity="0"/>
                    </linearGradient>
                </defs>
                <line x1="-200" y1="120" x2="2200" y2="40" stroke="url(#mline)" stroke-width="1"/>
                <line x1="-300" y1="420" x2="2000" y2="260" stroke="url(#mline)" stroke-width="1"/>
            </svg>
        </div>
        <div class="relative z-10 max-w-6xl mx-auto px-6">
            <div class="grid grid-cols-1 gap-8 items-start">
                <!-- Spotify-like Player Card with embedded lyrics -->
                <div class="music-card p-6" id="music-card" data-animate="up" data-delay="60">
                    <div class="flex items-center gap-4">
                        <div class="art" id="music-art" aria-hidden="true"></div>
                        <div class="min-w-0">
                            <div class="music-meta truncate" id="music-title">Demo Song</div>
                            <div class="music-artist truncate">by <a id="music-artist" href="#" target="_blank" rel="noopener">Demo Artist</a></div>
                        </div>
                        <button id="music-toggle" class="music-btn ml-auto" type="button" aria-label="Play or pause music" style="cursor:pointer;">
                            <svg id="icon-play" viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M8 5v14l11-7z"/></svg>
                            <svg id="icon-pause" viewBox="0 0 24 24" width="18" height="18" fill="currentColor" style="display:none;"><path d="M6 5h4v14H6zM14 5h4v14h-4z"/></svg>
                        </button>
                        <div class="equalizer-bars" aria-hidden="true">
                            <span class="bar"></span><span class="bar"></span><span class="bar"></span>
                        </div>
                        <button id="music-mute" class="music-ctrl" type="button" aria-label="Mute or unmute" title="Mute/Unmute">
                            <svg id="icon-vol-on" viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M3 10v4h4l5 5V5L7 10H3z"/></svg>
                            <svg id="icon-vol-off" viewBox="0 0 24 24" width="16" height="16" fill="currentColor" style="display:none;"><path d="M16.5 12l3.5 3.5-1.5 1.5L15 13.5 11.5 17V7l3.5 3.5 3.5-3.5 1.5 1.5-3.5 3.5z"/></svg>
                        </button>
                        <div class="vol-wrap">
                            <input id="music-vol" class="vol" type="range" min="0" max="1" step="0.01" value="0.18" aria-label="Volume" />
                        </div>
                    </div>
                    <div class="mt-4 music-progress" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                        <span id="music-progress"></span>
                    </div>
                    <div class="mt-2 text-[11px] text-gray-400 flex justify-between tabular-nums">
                        <span id="music-current">0:00</span>
                        <span id="music-duration">0:00</span>
                    </div>
                    <div id="audio-tip" class="mt-2 text-[11px] text-gray-400" style="display:none;">Tap to enable audio</div>
                    <div class="music-lyrics-box mt-4 pt-3 border-t border-white/10">
                        <h4 class="text-white font-semibold mb-2 text-base md:text-lg">Lyrics</h4>
                        <div id="lyrics" class="lyrics" style="max-height: 320px; overflow:auto;"></div>
                    </div>
                    <audio id="bg-audio" preload="auto" playsinline src="https://www.soundhelix.com/examples/mp3/SoundHelix-Song-1.mp3"></audio>
                </div>
            </div>
        </div>
        <!-- Sparkles -->
        <svg class="pointer-events-none absolute inset-0 w-full h-full opacity-20" aria-hidden="true" style="z-index:0;">
            <circle class="spark a" cx="20%" cy="22%" r="1.6" fill="#ff4d4d"></circle>
            <circle class="spark b" cx="60%" cy="74%" r="1.8" fill="#ff5c5c"></circle>
            <circle class="spark c" cx="78%" cy="28%" r="1.5" fill="#ff6b6b"></circle>
        </svg>
    </section>

    <!-- Footer (Let’s Collaborate) -->
    <section id="footer" class="relative pt-14 md:pt-20 pb-0 overflow-hidden" style="visibility: hidden;">
        <div class="relative z-10 max-w-7xl mx-auto px-6">
            <div class="text-center md:text-left grid grid-cols-1 md:grid-cols-3 gap-6 items-end">
                <div class="md:col-span-3">
                    <h3 class="footer-title text-3xl md:text-5xl tracking-widest" data-animate="up" data-delay="60">LET’S COLLABORATE</h3>
                </div>
                <div class="text-[12px] text-gray-300 leading-relaxed" data-animate="up" data-delay="120">
                    Got an idea you’re excited about? I design, shoot, and ship delightful experiences. Tell me your vision—let’s make it real.
                </div>
                <div class="text-[12px] md:text-right flex md:block gap-4 justify-center md:justify-end" data-animate="up" data-delay="160">
                    <a class="footer-link" href="#" target="_blank" rel="noopener">Instagram</a>
                    <span class="hidden md:inline text-gray-600 mx-2">/</span>
                    <a class="footer-link" href="#" target="_blank" rel="noopener">X / Twitter</a>
                    <span class="hidden md:inline text-gray-600 mx-2">/</span>
                    <a class="footer-link" href="#" target="_blank" rel="noopener">Behance</a>
                    <span class="hidden md:inline text-gray-600 mx-2">/</span>
                    <a class="footer-link" href="#" target="_blank" rel="noopener">Dribbble</a>
                    <span class="hidden md:inline text-gray-600 mx-2">/</span>
                    <a class="footer-link" href="#" target="_blank" rel="noopener">LinkedIn</a>
                </div>
            </div>
            <div class="footer-bar mt-6 mb-5"></div>
            <div class="flex flex-wrap items-center justify-between gap-3 footer-meta mb-8">
                <span>©2025</span>
                <span>Last update: Oct 2025</span>
                <a class="footer-link" href="mailto:hello@liizu.design">→ hello@liizu.design</a>
                <a href="#top" class="footer-link ml-auto">Top ↑</a>
            </div>
        </div>
        <!-- Decorative waves -->
        <div class="relative">
            <svg class="footer-waves w-full" viewBox="0 0 1440 360" fill="none" preserveAspectRatio="none" aria-hidden="true">
                <g opacity="0.9">
                    <path d="M0 40 C 240 80, 480 0, 720 40 S 1200 80, 1440 40" stroke-width="6"/>
                    <path d="M0 90 C 240 130, 480 50, 720 90 S 1200 130, 1440 90" stroke-width="6"/>
                    <path d="M0 140 C 240 180, 480 100, 720 140 S 1200 180, 1440 140" stroke-width="6"/>
                    <path d="M0 190 C 240 230, 480 150, 720 190 S 1200 230, 1440 190" stroke-width="6"/>
                    <path d="M0 240 C 240 280, 480 200, 720 240 S 1200 280, 1440 240" stroke-width="6"/>
                    <path d="M0 290 C 240 330, 480 250, 720 290 S 1200 330, 1440 290" stroke-width="6"/>
                </g>
            </svg>
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
                        const gallery = document.getElementById('gallery');
                        if (gallery) gallery.style.visibility = 'visible';
                        const social = document.getElementById('social');
                        if (social) social.style.visibility = 'visible';
                        const music = document.getElementById('music');
                        if (music) music.style.visibility = 'visible';
                        const footer = document.getElementById('footer');
                        if (footer) footer.style.visibility = 'visible';
                        const dotnav = document.getElementById('dot-nav');
                        if (dotnav) dotnav.style.visibility = 'visible';
                        const themeT = document.getElementById('theme-toggle');
                        if (themeT) themeT.style.visibility = 'visible';
                        const asciiCorner = document.getElementById('ascii-corner');
                        if (asciiCorner) asciiCorner.style.visibility = 'visible';
                    } catch (e) { console.warn('Finalization guard caught:', e); }
                    document.body.style.overflow = 'auto';
                    animateAboutSection();
                    setupScrollAnimations();
                    setupGalleryMarquee();
                    setupCursorGlow();
                    setupMusicSection();
                    setupScrollSpy();
                    setupThemeToggle();
                    setupBlurUp();
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
            const roots = document.querySelectorAll('#gallery-marquee, #gallery-marquee-2');
            if(!roots.length) return;
            roots.forEach((root)=>{
                const track = root.querySelector('.gallery-track');
                if(!track || track.dataset.init === '1') return;
                track.dataset.init = '1';
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
            });
        }

        // Soft cursor glow following the pointer (desktop only)
        function setupCursorGlow(){
            try {
                const mq = window.matchMedia('(hover: hover) and (pointer: fine)');
                if (!mq.matches) return;
                let glow = document.getElementById('cursor-glow');
                if (!glow) {
                    glow = document.createElement('div');
                    glow.id = 'cursor-glow';
                    document.body.appendChild(glow);
                }
                let tx = -100, ty = -100, x = -100, y = -100;
                const speed = 0.22;
                function loop(){
                    x += (tx - x) * speed;
                    y += (ty - y) * speed;
                    glow.style.transform = `translate3d(${(x-17).toFixed(2)}px, ${(y-17).toFixed(2)}px, 0)`;
                    requestAnimationFrame(loop);
                }
                window.addEventListener('mousemove', (e)=>{ tx = e.clientX; ty = e.clientY; }, { passive: true });
                document.addEventListener('visibilitychange', ()=>{ glow.style.opacity = document.hidden ? '0' : '0.85'; });
                requestAnimationFrame(loop);
            } catch (e) { console.warn('Cursor glow setup failed:', e); }
        }

        // Music + lyrics synchronized highlighting
        function setupMusicSection(){
            try {
                const audio = document.getElementById('bg-audio');
                if(!audio) return;
                const card = document.getElementById('music-card');
                const titleEl = document.getElementById('music-title');
                const artistAnchor = document.getElementById('music-artist');
                const artEl = document.getElementById('music-art');
                const toggle = document.getElementById('music-toggle');
                const iconPlay = document.getElementById('icon-play');
                const iconPause = document.getElementById('icon-pause');
                const muteBtn = document.getElementById('music-mute');
                const volSlider = document.getElementById('music-vol');
                const progressBar = document.querySelector('.music-progress');
                const progress = document.getElementById('music-progress');
                const curLab = document.getElementById('music-current');
                const durLab = document.getElementById('music-duration');

                // Demo track metadata (swap these to your real song)
                const track = {
                    title: 'Calm Fields (Demo)',
                    artistName: 'SoundHelix',
                    artistUrl: 'https://open.spotify.com/',
                    art: 'https://picsum.photos/seed/liisu-album/400/400'
                };
                if(titleEl) titleEl.textContent = track.title;
                if(artistAnchor) { artistAnchor.textContent = track.artistName; artistAnchor.href = track.artistUrl; }
                if(artEl) artEl.style.backgroundImage = `url('${track.art}')`;
                audio.volume = 0.18;

                // One-time silent unlock for iOS/Android: ensures media can start after first gesture
                const __unlockOnce = (ev) => {
                    try {
                        const prevVol = audio.volume;
                        audio.muted = true; audio.volume = 0;
                        const p = audio.play();
                        if (p && typeof p.then === 'function') {
                            p.then(() => {
                                audio.pause();
                                audio.currentTime = 0;
                                audio.muted = false;
                                audio.volume = prevVol;
                            }).catch(() => {
                                audio.muted = false;
                                audio.volume = prevVol;
                            });
                        } else {
                            try { audio.pause(); } catch(_) {}
                            audio.muted = false; audio.volume = prevVol;
                        }
                    } catch (_) { /* no-op */ }
                };
                window.addEventListener('pointerdown', __unlockOnce, { once: true, capture: true });

                function fmt(secs){
                    if(!isFinite(secs)) return '0:00';
                    const m = Math.floor(secs/60); const s = Math.floor(secs%60);
                    return `${m}:${s.toString().padStart(2,'0')}`;
                }
                function updateIcons(){
                    const playing = !audio.paused && !audio.ended;
                    if(iconPlay) iconPlay.style.display = playing ? 'none' : '';
                    if(iconPause) iconPause.style.display = playing ? '' : 'none';
                    if(card) card.classList.toggle('playing', playing);
                }
                audio.addEventListener('loadedmetadata', ()=>{ if(durLab) durLab.textContent = fmt(audio.duration); });
                audio.addEventListener('play', updateIcons);
                audio.addEventListener('pause', updateIcons);

                function togglePlayDirect(){
                    const tip = document.getElementById('audio-tip');
                    try {
                        if (audio.paused || audio.ended) {
                            const p = audio.play();
                            if (p && typeof p.then === 'function') {
                                p.then(() => { updateIcons(); if (tip) tip.style.display = 'none'; })
                                 .catch((err) => {
                                    console.warn('Direct play blocked:', err);
                                    // Fallback: muted play + ramp volume up
                                    const targetVol = audio.volume || 0.18;
                                    audio.muted = true; audio.volume = 0;
                                    const p2 = audio.play();
                                    if (p2 && typeof p2.then === 'function') {
                                        p2.then(() => {
                                            let step = 0, steps = 10;
                                            const iv = setInterval(() => {
                                                step++;
                                                if (step >= steps) { clearInterval(iv); audio.muted = false; audio.volume = targetVol; }
                                                else { audio.volume = Math.min(targetVol, (step/steps) * targetVol); }
                                            }, 80);
                                            updateIcons(); if (tip) tip.style.display = 'none';
                                        }).catch((e2) => {
                                            console.warn('Muted fallback failed:', e2);
                                            if (tip) { tip.textContent = 'Tap again to enable audio'; tip.style.display = ''; setTimeout(() => { tip.style.display = 'none'; }, 2500); }
                                        });
                                    }
                                 });
                            } else {
                                updateIcons();
                            }
                        } else {
                            audio.pause();
                            updateIcons();
                        }
                    } catch (e) { console.warn('togglePlayDirect error:', e); }
                }
                // Primary control: only the play button (no card-wide toggle)
                let __lastAct = 0;
                const __guard = ()=>{
                    const now = performance.now();
                    if(now - __lastAct < 400) return false;
                    __lastAct = now; return true;
                };
                if(toggle){
                    // pointerdown gives the earliest user gesture on touch and mouse
                    toggle.addEventListener('pointerdown', (e)=>{ e.stopPropagation(); if(__guard()) togglePlayDirect(); });
                    toggle.addEventListener('click', (e)=>{ e.stopPropagation(); if(__guard()) togglePlayDirect(); });
                    toggle.addEventListener('touchstart', (e)=>{ e.stopPropagation(); if(__guard()) togglePlayDirect(); }, {passive:true});
                    toggle.addEventListener('keydown', (e)=>{
                        if(e.key === ' ' || e.key === 'Enter'){ e.preventDefault(); togglePlayDirect(); }
                    });
                }
                // Card-wide toggle removed per request
                // Mute + volume controls
                function updateMuteIcons(){
                    const on = document.getElementById('icon-vol-on');
                    const off = document.getElementById('icon-vol-off');
                    if(!on || !off) return;
                    on.style.display = audio.muted || audio.volume === 0 ? 'none' : '';
                    off.style.display = audio.muted || audio.volume === 0 ? '' : 'none';
                }
                if(muteBtn){
                    muteBtn.addEventListener('click', (e)=>{
                        e.stopPropagation();
                        audio.muted = !audio.muted; updateMuteIcons();
                    });
                }
                if(volSlider){
                    volSlider.addEventListener('input', (e)=>{
                        const v = parseFloat(volSlider.value);
                        audio.volume = isNaN(v) ? 0.18 : v;
                        if(audio.volume > 0 && audio.muted) audio.muted = false;
                        updateMuteIcons();
                    });
                }
                if(progressBar){
                    progressBar.addEventListener('click', (e)=>{
                        const rect = progressBar.getBoundingClientRect();
                        const ratio = Math.min(1, Math.max(0, (e.clientX - rect.left)/rect.width));
                        if(isFinite(audio.duration)) audio.currentTime = ratio * audio.duration;
                    });
                }

                // Demo lyrics data (word-level timing). Replace with your LRC/JSON later.
                // Each line has a start time t, and words with offsets.
                const lyricsData = [
                    { t: 0.0, words: [
                        {t:0.00, text:'Drifting'}, {t:0.55, text:'through'}, {t:1.05, text:'the'}, {t:1.25, text:'calm'}, {t:1.85, text:'night'}, {t:2.45, text:'sky'}
                    ]},
                    { t: 3.2, words: [
                        {t:0.00, text:'Soft'}, {t:0.50, text:'echoes'}, {t:1.10, text:'bloom'}, {t:1.70, text:'and'}, {t:2.05, text:'fade'}
                    ]},
                    { t: 6.1, words: [
                        {t:0.00, text:'Breaths'}, {t:0.60, text:'of'}, {t:0.85, text:'light'}, {t:1.45, text:'and'}, {t:1.80, text:'color'}
                    ]},
                    { t: 8.8, words: [
                        {t:0.00, text:'Carry'}, {t:0.55, text:'me'}, {t:0.95, text:'away'}
                    ]},
                    { t: 11.2, words: [
                        {t:0.00, text:'Hold'}, {t:0.45, text:'the'}, {t:0.70, text:'moment'}, {t:1.35, text:'still'}
                    ]},
                    { t: 13.4, words: [
                        {t:0.00, text:'Let'}, {t:0.45, text:'the'}, {t:0.70, text:'stars'}, {t:1.10, text:'unfurl'}
                    ]},
                    { t: 15.7, words: [
                        {t:0.00, text:'We'}, {t:0.35, text:'are'}, {t:0.65, text:'here'}, {t:1.05, text:'tonight'}
                    ]},
                    { t: 18.0, words: [
                        {t:0.00, text:'Falling'}, {t:0.65, text:'into'}, {t:1.10, text:'view'}
                    ]}
                ];

                // Render lyrics
                const lyrRoot = document.getElementById('lyrics');
                const rendered = [];
                if(lyrRoot){
                    lyrRoot.innerHTML = '';
                    lyricsData.forEach((line, i)=>{
                        const lineEl = document.createElement('div');
                        lineEl.className = 'lyrics-line';
                        lineEl.dataset.t = String(line.t);
                        line.words.forEach((w, j)=>{
                            const span = document.createElement('span');
                            span.className = 'lyrics-word';
                            span.textContent = w.text + (j < line.words.length-1 ? ' ' : '');
                            span.dataset.t = String(line.t + w.t);
                            lineEl.appendChild(span);
                        });
                        lyrRoot.appendChild(lineEl);
                        rendered.push(lineEl);
                    });
                }

                let rafId = 0;
                function loop(){
                    // progress + time labels
                    if(isFinite(audio.duration)){
                        const pct = (audio.currentTime / audio.duration) * 100;
                        if(progress){ progress.style.width = `${pct}%`; progressBar?.setAttribute('aria-valuenow', String(Math.round(pct))); }
                        if(curLab) curLab.textContent = fmt(audio.currentTime);
                        if(durLab) durLab.textContent = fmt(audio.duration);
                    }
                    // lyrics highlighting
                    const t = audio.currentTime;
                    // find current line (last with start <= t)
                    let currentLineIdx = -1;
                    for(let i=0;i<lyricsData.length;i++){
                        if(lyricsData[i].t <= t) currentLineIdx = i; else break;
                    }
                    rendered.forEach((el, idx)=> el.classList.toggle('active', idx === currentLineIdx));
                    if(currentLineIdx >= 0){
                        const lineEl = rendered[currentLineIdx];
                        const words = Array.from(lineEl.querySelectorAll('.lyrics-word'));
                        let activeWordIdx = -1;
                        for(let i=0;i<words.length;i++){
                            const wt = parseFloat(words[i].dataset.t || '0');
                            if(wt <= t) activeWordIdx = i; else break;
                        }
                        words.forEach((w, idx)=> w.classList.toggle('active', idx === activeWordIdx));
                        // Optional: autoscroll lyrics slightly to keep active line in view
                        const parent = lyrRoot;
                        if(parent && lineEl){
                            const pr = parent.getBoundingClientRect();
                            const lr = lineEl.getBoundingClientRect();
                            if(lr.bottom > pr.bottom - 16){ parent.scrollBy({ top: lr.bottom - pr.bottom + 16, behavior: 'smooth' }); }
                            if(lr.top < pr.top + 16){ parent.scrollBy({ top: lr.top - pr.top - 16, behavior: 'smooth' }); }
                        }
                    }
                    rafId = requestAnimationFrame(loop);
                }
                // Use rAF for smoother syncing; also update on timeupdate/seeked
                audio.addEventListener('play', ()=>{ cancelAnimationFrame(rafId); rafId = requestAnimationFrame(loop); });
                audio.addEventListener('pause', ()=>{ cancelAnimationFrame(rafId); });
                audio.addEventListener('seeking', ()=>{ if(curLab) curLab.textContent = fmt(audio.currentTime); });
                audio.addEventListener('timeupdate', ()=>{ if(!audio.paused) return; /* if paused, still reflect current time */ if(curLab) curLab.textContent = fmt(audio.currentTime); });
                audio.addEventListener('ended', ()=>{ updateIcons(); });
                updateIcons(); updateMuteIcons();
            } catch (e) { console.warn('Music section setup failed:', e); }
        }

        // Scrollspy / Dot nav
        function setupScrollSpy(){
            try{
                const nav = document.getElementById('dot-nav');
                if(!nav) return;
                const btns = Array.from(nav.querySelectorAll('button'));
                btns.forEach(b=>{
                    b.addEventListener('click', ()=>{
                        const sel = b.getAttribute('data-target');
                        const el = sel ? document.querySelector(sel) : null;
                        if(el) el.scrollIntoView({behavior:'smooth', block:'start'});
                    });
                });
                const map = btns.map(b=>({btn:b, id:(b.getAttribute('data-target')||'').replace('#','')}));
                const obs = new IntersectionObserver((entries)=>{
                    entries.forEach(e=>{
                        if(e.isIntersecting){
                            const id = e.target.id;
                            map.forEach(m=> m.btn.classList.toggle('active', m.id===id));
                        }
                    });
                }, {threshold: 0.5});
                map.forEach(m=>{ const el = document.getElementById(m.id); if(el) obs.observe(el); });
            }catch(e){ console.warn('ScrollSpy setup failed:', e); }
        }

        // Theme toggle (light/dark)
        function setupThemeToggle(){
            try{
                const btn = document.getElementById('theme-toggle');
                if(!btn) return;
                const root = document.documentElement;
                const stored = localStorage.getItem('theme');
                if(stored){ root.setAttribute('data-theme', stored); btn.textContent = stored==='light' ? '☀' : '☾'; }
                else if(window.matchMedia && window.matchMedia('(prefers-color-scheme: light)').matches){ root.setAttribute('data-theme','light'); btn.textContent='☀'; }
                btn.addEventListener('click', ()=>{
                    const cur = root.getAttribute('data-theme')==='light' ? 'light':'dark';
                    const next = cur==='light' ? 'dark' : 'light';
                    if(next==='dark') root.removeAttribute('data-theme'); else root.setAttribute('data-theme','light');
                    localStorage.setItem('theme', next);
                    btn.textContent = next==='light' ? '☀' : '☾';
                });
            }catch(e){ console.warn('Theme toggle failed:', e); }
        }

        // Blur-up loader for images
        function setupBlurUp(){
            try{
                document.querySelectorAll('img.blur-up').forEach(img=>{
                    if(img.complete){ img.classList.add('loaded'); return; }
                    img.addEventListener('load', ()=> img.classList.add('loaded'), { once:true });
                });
            }catch(e){ console.warn('Blur-up init failed:', e); }
        }
    </script>
</body>
</html> 