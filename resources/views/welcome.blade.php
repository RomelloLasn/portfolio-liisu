<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Liisu</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white overflow-hidden">
    <!-- Intro Animation -->
    <div id="intro" class="fixed inset-0 bg-black flex items-center justify-center z-50 transition-opacity duration-1000">
        <!-- Animated Background Elements -->
        <div class="absolute inset-0 overflow-hidden">
            <!-- Musical note animations -->
            <div class="absolute top-1/4 left-1/4 text-dark-red text-2xl opacity-0 transition-all duration-1000" id="note-1" style="transition-delay: 0.5s;">♪</div>
            <div class="absolute top-1/3 right-1/4 text-red text-3xl opacity-0 transition-all duration-1000" id="note-2" style="transition-delay: 1s;">♫</div>
            <div class="absolute bottom-1/4 left-1/3 text-bright-red text-2xl opacity-0 transition-all duration-1000" id="note-3" style="transition-delay: 1.5s;">♪</div>
            <div class="absolute bottom-1/3 right-1/3 text-red text-xl opacity-0 transition-all duration-1000" id="note-4" style="transition-delay: 2s;">♩</div>
            
            <!-- Additional musical notes -->
            <div class="absolute top-1/2 left-1/6 text-bright-red text-xl opacity-0 transition-all duration-1000" id="note-5" style="transition-delay: 0.8s;">♬</div>
            <div class="absolute top-3/4 right-1/6 text-dark-red text-2xl opacity-0 transition-all duration-1000" id="note-6" style="transition-delay: 1.3s;">♪</div>
            <div class="absolute top-1/6 right-1/2 text-red text-xl opacity-0 transition-all duration-1000" id="note-7" style="transition-delay: 1.8s;">♫</div>
            <div class="absolute bottom-1/6 left-1/2 text-bright-red text-lg opacity-0 transition-all duration-1000" id="note-8" style="transition-delay: 2.2s;">♩</div>
            <div class="absolute top-2/3 left-3/4 text-red text-xl opacity-0 transition-all duration-1000" id="note-9" style="transition-delay: 1.1s;">♪</div>
            
            <!-- Flowing artistic vine lines -->
            <div class="absolute top-0 left-0 w-full h-full">
                <svg class="w-full h-full opacity-40">
                    <!-- Main vine line -->
                    <path d="M0,200 Q400,100 800,300 Q1200,500 1600,200" stroke="#FF0000" stroke-width="3" fill="none" opacity="0" id="art-line-1"/>
                    <path d="M0,400 Q600,200 1200,500 Q1800,800 2400,300" stroke="#950101" stroke-width="2" fill="none" opacity="0" id="art-line-2"/>
                </svg>
            </div>
            
            <!-- Artistic brush strokes -->
            <div class="absolute top-16 right-16 w-20 h-1 bg-bright-red opacity-0 transition-all duration-1000 rotate-12" id="brush-1" style="transition-delay: 1.2s;"></div>
            <div class="absolute bottom-20 left-20 w-16 h-1 bg-red opacity-0 transition-all duration-1000 -rotate-12" id="brush-2" style="transition-delay: 1.8s;"></div>
            <div class="absolute top-32 left-16 w-12 h-1 bg-dark-red opacity-0 transition-all duration-1000 rotate-45" id="brush-3" style="transition-delay: 2.4s;"></div>
        </div>
        
        <!-- Main Content -->
        <div class="text-center z-10 relative">
            <!-- Animated container -->
            <div class="relative overflow-hidden">
                <!-- Background accent -->
                <div class="absolute inset-0 bg-gradient-to-r from-transparent via-bright-red to-transparent h-px top-1/2 transform -translate-y-1/2 opacity-0 transition-opacity duration-1000" id="text-underline" style="transition-delay: 2.5s;"></div>
                
                <!-- Main Text with reveal animation -->
                <div class="relative overflow-hidden mb-6 px-4">
                    <h1 class="font-britney text-bright-red text-6xl md:text-8xl font-bold tracking-wide opacity-0 transition-all duration-1000 ease-out" id="main-text" style="transition-delay: 0.5s;">
                        LIISU
                    </h1>
                </div>
                
                <!-- Subtitle with reveal animation -->
                <div class="relative overflow-hidden">
                    <p class="font-dancing text-red text-2xl md:text-3xl opacity-0 transition-all duration-800 ease-out" id="subtitle" style="transition-delay: 0.8s;">
                        Portfolio
                    </p>
                </div>
            </div>
            

        </div>
        
        <!-- Creative tagline -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 text-white text-sm font-dancing tracking-wider opacity-0 transition-opacity duration-500" id="tagline" style="transition-delay: 1s;">
            Creating Art Through Music & Design
        </div>

        <!-- ASCII artwork bottom-right -->
        <div class="absolute bottom-4 right-4 text-bright-red/80 pointer-events-none select-none">
            <pre class="m-0 p-0 font-mono text-[10px] leading-[1.05] whitespace-pre">
⣴⠛⠛⠛⠒⠒⠶⢤⣄⡀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣀⣀⣤⠤⠴⠶⠒⠒⠲⠶⠦⢤⣼⡃⠀⠀⠀⠀⠀⠀⠀⠈⠙⠳⣴⠛⠻⡆⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣀⣀⣀⠀⠀⢀⣠⠶⠛⠉⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠈⠙⢶⣄⠀⠀⠀⠀⠀⠀⠀⣠⠿⢦⡴⠇⠀⠀
⠀⠀⠀⠀⠀⠀⠀⢀⣠⡴⠟⠉⠈⠉⠻⣦⠟⠁⠀⠀⠀⠀⠀⢀⣀⣀⣀⠀⠀⠀⠀⠀⠀⠀⠀⠈⠻⣆⠀⠀⠀⢠⡾⠁⠀⠀⠀⠀⠀⠀
⠀⢀⣀⠀⢀⣠⠶⠋⠁⠀⠀⠀⠀⠀⣰⠃⠀⠀⠀⠀⠀⠀⣴⣿⣿⣿⣿⣿⡄⠀⠀⠀⠀⠀⠀⠀⠀⠘⣷⠤⠴⠋⠀⠀⠀⠀⠀⠀⠀⠀
⢰⡏⠈⢳⣟⠁⠀⠀⠀⠀⠀⠀⠀⢰⡇⠀⠀⠀⠀⠀⠀⢸⡟⠉⣿⣿⣧⣨⠇⢀⣀⣀⡀⠀⠀⠀⠀⠀⢸⡆⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠛⠚⠋⠉⠳⢦⡀⠀⠀⠀⠀⠀⡾⠀⠀⠀⠀⠀⠀⠀⢀⠙⠿⢿⣿⣿⣯⠞⠋⠁⠈⠉⠳⢦⡄⠀⠀⢠⡇⠀⠀⠀⠀⠀⠀⢀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠙⢷⣄⠀⠀⢀⡇⠀⠀⠀⠀⠀⣤⠞⠉⠉⠉⠙⠛⠛⠋⠀⠀⠀⠀⠀⠀⢠⡀⠙⣦⠀⣸⠃⠀⢰⠋⠉⠳⠋⠉⠙⡆⠀
⠀⠀⠀⠀⢀⠤⠤⣄⡀⠈⠛⠚⠋⣷⠀⠀⠀⢀⡾⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢠⡶⢛⣿⣁⠀⢸⣦⡟⠀⠀⠸⣆⠀⠀⠀⠀⡼⠃⠀
⠀⠀⠀⠀⡏⠀⠀⠀⠵⠒⠲⢤⠀⠹⡆⠀⠀⢸⠇⢀⣤⡤⠤⣄⠀⠀⢠⠄⣄⠀⠀⢰⣿⠿⣿⣀⣸⡟⠀⠀⠀⠀⠈⠓⢤⡴⠊⠀⠀⠀
⠀⠀⠀⠀⢳⡀⠀⠀⠀⠀⠀⢨⠇⠀⠙⢦⡀⢸⡄⠀⣻⣴⣶⡶⠀⠀⣬⠭⠅⡆⠀⠈⣴⠟⠉⠉⢻⣦⡶⢲⡆⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠳⡄⠀⣀⡤⠖⠉⠀⠀⠀⠀⠙⢦⣿⣤⣛⣿⠿⢧⣄⠀⠈⠒⣒⣡⡤⢾⡇⠀⢠⣴⣟⣯⡛⠛⠃⠀⠀⠀⢠⡏⠉⠳⠖⠲
⠀⠀⠀⣀⣀⡀⠹⠋⠁⠀⠀⠀⠀⠀⠀⠀⠀⢸⣅⣿⠋⢉⣛⣿⠀⠀⢹⠟⠉⠀⠀⠀⠀⠈⠳⣶⠟⠀⠀⠀⡰⠒⠓⢆⠀⠀⠀⠘⠒⠉⠀
⠹⢄⣀⠀⡰⠃⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢸⡗⠒⠲⣶⠀⠀⠺⣥⣽⣦⡴⠟⠀⠀⠀⠀⠀⠀⣿⠀⠀⠀⢰⡇⠀⠀⢨⡧⣄⡀⠀⠀⠀⠀
⠀⠀⠈⠉⠁⠀⠀⣀⣀⡞⠉⠙⡆⠀⣧⣴⣄⠹⣦⣀⣀⣸⡅⠀⠀⠀⠀⠀⠀⠀⠀⠀⣤⠀⠀⣹⡇⠀⠀⠀⠀⠀⣇⣀⣀⣀⣀⣀⡼⠃⠀⠀⠀
⠀⠀⠀⠀⠀⢠⠏⠁⠈⠀⠀⠀⡀⠀⠈⠀⠙⠳⠦⣬⣭⣽⣿⣆⠀⠀⠀⠀⠀⣤⠀⠀⣹⡇⠀⠀⠀⠀⠀⣇⣀⣀⣀⣀⣀⡼⠃⠀⠀⠀
⠀⠀⠀⠀⠀⠈⢧⣄⣀⣀⠀⢠⠇⠀⠀⠀⠀⠀⠀⠀⠀⡟⠀⠁⠀⠀⠀⠀⣰⠏⠀⠀⠻⣇⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠉⠉⠉⠀⠀⠀⠀⠀⠀⠀⠀⠀⢻⡄⠀⠀⠀⠀⠛⣉⠀⠀⠀⠀⣿⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠻⢦⣀⣀⣤⠞⠛⠶⠤⠴⠚⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
            </pre>
        </div>
    </div>

    
    <div id="main-content" class="min-h-screen bg-black opacity-0 transition-opacity duration-1000 overflow-hidden">
        <!-- Top Navigation Bar -->
        <nav class="fixed top-0 left-0 right-0 z-50 px-8 py-6 flex items-center justify-between">
            <!-- Logo -->
            <div class="transform opacity-0 transition-all duration-800" id="nav-logo">
                <div class="flex items-center gap-2">
                    <div class="w-8 h-8 rounded-full border-2 border-white flex items-center justify-center">
                        <span class="text-white text-xs font-bold">◉</span>
                    </div>
                    <span class="text-white font-bold text-sm tracking-wider">VALMAX</span>
                </div>
            </div>
            
            <!-- Email Input -->
            <div class="transform opacity-0 transition-all duration-800" id="nav-email" style="transition-delay: 0.2s;">
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 rounded-full border border-gray-600 flex items-center justify-center">
                        <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <input 
                        type="email" 
                        placeholder="Got an idea for a photo shoot? Send your e-mail" 
                        class="bg-transparent border-none text-gray-400 text-sm placeholder-gray-600 focus:outline-none w-80"
                    />
                    <button class="bg-white text-black px-6 py-2 rounded-md text-sm font-semibold hover:bg-gray-200 transition-colors">
                        Send
                    </button>
                </div>
            </div>
            
            <!-- Menu Button -->
            <div class="transform opacity-0 transition-all duration-800" id="nav-menu" style="transition-delay: 0.4s;">
                <button class="flex items-center gap-2 text-white">
                    <span class="text-sm font-semibold">Menu</span>
                    <div class="flex flex-col gap-1">
                        <div class="w-5 h-0.5 bg-white"></div>
                        <div class="w-5 h-0.5 bg-white"></div>
                        <div class="w-5 h-0.5 bg-white"></div>
                    </div>
                </button>
            </div>
        </nav>
        
        <!-- About Me Section -->
        <div class="relative h-screen flex items-center justify-center px-8 py-24">
            <!-- Background Elements -->
            <div class="absolute inset-0 overflow-hidden">
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
                <div class="mb-8 transform translate-y-8 opacity-0 transition-all duration-1000 ease-out" id="about-content">
                    <h1 class="font-britney text-white text-5xl md:text-7xl font-bold tracking-wide mb-6 leading-tight">
                        RALPH<br/>EDWARDS
                    </h1>
                    <div class="max-w-lg mx-auto">
                        <p class="text-gray-400 text-sm md:text-base leading-relaxed">
                            Crafting digital experiences that<br/>captivate and inspire. Elevating your<br/>brand through design and innovation.
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- Portfolio Images - Positioned exactly like picture 2 -->
            <!-- CLEAN REWRITE: ensure only one element per id and Picsum placeholders -->
            <!-- Image 1 - Top left above Image 4, small dark portrait -->
            <div class="absolute z-0 opacity-0 transition-all duration-1200 ease-out" id="image-1" style="top: 13.31vh; left: 22.17vw; transition-delay: 0.2s;">
                <div class="w-[8.33vw] h-[26vh] bg-gradient-to-br from-gray-700 to-gray-900 rounded-sm shadow-2xl overflow-hidden relative">
                    <img src="https://picsum.photos/seed/liisu-01/800/1200" alt="Portfolio placeholder 01" class="w-full h-full object-cover" loading="lazy" referrerpolicy="no-referrer"/>
                    <span class="text-white text-[10px] font-semibold absolute bottom-1.5 left-1.5 bg-black/60 px-1.5 py-0.5 rounded-sm">01</span>
                </div>
            </div>
            
            <!-- Image 2 - Top center BEHIND email box, visible portrait slightly larger than #1 -->
            <div class="absolute z-0 opacity-0 transition-all duration-1200 ease-out" id="image-2" style="top: -8.5vh; left: 44vw; transition-delay: 0.4s;">
                <div class="w-[10vw] h-[28vh] bg-gradient-to-br from-gray-600 to-gray-800 rounded-sm shadow-2xl overflow-hidden relative">
                    <img src="https://picsum.photos/seed/liisu-02/900/1300" alt="Portfolio placeholder 02" class="w-full h-full object-cover" loading="lazy" referrerpolicy="no-referrer"/>
                    <span class="text-white text-[10px] font-semibold absolute bottom-1.5 right-1.5 bg-black/60 px-1.5 py-0.5 rounded-sm">02</span>
                </div>
            </div>
            
            <!-- Image 3 - Right side, large RED portrait -->
            <div class="absolute z-0 opacity-0 transition-all duration-1200 ease-out" id="image-3" style="top: -26.22vh; right: -2vw; transition-delay: 0.6s;">
                <div class="w-[17.78vw] h-[39.51vh] bg-gradient-to-br from-red-900 to-red-800 rounded-sm shadow-2xl overflow-hidden relative">
                    <img src="https://picsum.photos/seed/liisu-03/1000/1600" alt="Portfolio placeholder 03" class="w-full h-full object-cover" loading="lazy" referrerpolicy="no-referrer"/>
                    <span class="text-white text-[10px] font-semibold absolute bottom-1.5 right-1.5 bg-black/60 px-1.5 py-0.5 rounded-sm">03</span>
                </div>
            </div>
            
            <!-- Image 4 - Left side, large LIGHT portrait (silhouette) -->
            <div class="absolute z-0 opacity-0 transition-all duration-1200 ease-out" id="image-4" style="top: 45.54vh; left: 4.17vw; transition-delay: 0.8s;">
                <div class="w-[15vw] h-[50vh] bg-gradient-to-br from-gray-300 to-gray-500 rounded-sm shadow-2xl overflow-hidden relative">
                    <img src="https://picsum.photos/seed/liisu-04/1000/1600" alt="Portfolio placeholder 04" class="w-full h-full object-cover" loading="lazy" referrerpolicy="no-referrer"/>
                    <span class="text-gray-800 text-[10px] font-semibold absolute bottom-1.5 left-1.5 bg-white/70 px-1.5 py-0.5 rounded-sm">04</span>
                </div>
            </div>
            
            <!-- Image 5 - Left of center below EDWARDS text, medium LIGHT portrait -->
            <div class="absolute z-0 opacity-0 transition-all duration-1200 ease-out" id="image-5" style="top: 20.4vh; left: 66.28vw; transition-delay: 1.0s;">
                <div class="w-[14vw] h-[39.51vh] bg-gradient-to-br from-gray-400 to-gray-600 rounded-sm shadow-2xl overflow-hidden relative">
                    <img src="https://picsum.photos/seed/liisu-05/900/1400" alt="Portfolio placeholder 05" class="w-full h-full object-cover" loading="lazy" referrerpolicy="no-referrer"/>
                    <span class="text-gray-800 text-[10px] font-semibold absolute bottom-1.5 left-1.5 bg-white/70 px-1.5 py-0.5 rounded-sm">05</span>
                </div>
            </div>
            
            <!-- Image 6 - Bottom right of center, large dark portrait (two people) -->
            <div class="absolute z-0 opacity-0 transition-all duration-1200 ease-out" id="image-6" style="bottom: 1.88vh; right: 63vw; transition-delay: 1.2s;">
                <div class="w-[8.33vw] h-[26vh] bg-gradient-to-br from-gray-700 to-gray-900 rounded-sm shadow-2xl overflow-hidden relative">
                    <img src="https://picsum.photos/seed/liisu-06/800/1200" alt="Portfolio placeholder 06" class="w-full h-full object-cover" loading="lazy" referrerpolicy="no-referrer"/>
                    <span class="text-white text-[10px] font-semibold absolute bottom-1.5 left-1.5 bg-black/60 px-1.5 py-0.5 rounded-sm">06</span>
                </div>
            </div>
            
            <!-- Image 7 - Far right BEHIND menu button, RED portrait going OUT OF FRAME -->
            <div class="absolute z-0 opacity-0 transition-all duration-1200 ease-out" id="image-7" style="top: 44.88vh; right: -18.94vw; transition-delay: 1.4s;">
                <div class="w-[22.22vw] h-[48vh] bg-gradient-to-br from-red-900 to-red-700 rounded-sm shadow-2xl overflow-hidden relative">
                    <img src="https://picsum.photos/seed/liisu-07/1200/1800" alt="Portfolio placeholder 07" class="w-full h-full object-cover" loading="lazy" referrerpolicy="no-referrer"/>
                    <span class="text-white text-[10px] font-semibold absolute bottom-1.5 left-1.5 bg-black/60 px-1.5 py-0.5 rounded-sm">07</span>
                </div>
            </div>
            
            <!-- Image 8 - Bottom far right, landscape going OUT OF FRAME -->
            <div class="absolute z-0 opacity-0 transition-all duration-1200 ease-out" id="image-8" style="bottom: -8.8vh; right: 15.83vw; transition-delay: 1.6s;">
                <div class="w-[16vw] h-[32vh] bg-gradient-to-br from-gray-600 to-gray-800 rounded-sm shadow-2xl overflow-hidden relative">
                    <img src="https://picsum.photos/seed/liisu-08/1200/900" alt="Portfolio placeholder 08" class="w-full h-full object-cover" loading="lazy" referrerpolicy="no-referrer"/>
                    <span class="text-white text-[10px] font-semibold absolute bottom-1.5 right-1.5 bg-black/60 px-1.5 py-0.5 rounded-sm">08</span>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Modern portfolio intro animation
        window.addEventListener('load', function() {
            // Start artistic animations
            setTimeout(() => {
                // Animate vine lines
                document.getElementById('art-line-1').style.opacity = '1';
                document.getElementById('art-line-2').style.opacity = '1';
                
                // Animate musical notes
                document.getElementById('note-1').style.opacity = '1';
                document.getElementById('note-1').style.transform = 'translateY(-10px)';
            }, 500);
            
            // Early musical notes
            setTimeout(() => {
                document.getElementById('note-5').style.opacity = '1';
                document.getElementById('note-5').style.transform = 'translateY(-8px) rotate(10deg)';
            }, 800);
            
            // More musical notes
            setTimeout(() => {
                document.getElementById('note-2').style.opacity = '1';
                document.getElementById('note-2').style.transform = 'translateY(-15px) rotate(15deg)';
                
                document.getElementById('note-9').style.opacity = '1';
                document.getElementById('note-9').style.transform = 'translateY(-12px) rotate(-5deg)';
            }, 1000);
            
            // Creative tagline
            setTimeout(() => {
                document.getElementById('tagline').style.opacity = '1';
            }, 1000);
            
            // More notes appearing
            setTimeout(() => {
                document.getElementById('note-6').style.opacity = '1';
                document.getElementById('note-6').style.transform = 'translateY(-10px) rotate(20deg)';
            }, 1300);
            
            // More artistic elements
            setTimeout(() => {
                document.getElementById('brush-1').style.opacity = '1';
                document.getElementById('note-3').style.opacity = '1';
                document.getElementById('note-3').style.transform = 'translateY(-12px)';
            }, 1500);
            
            setTimeout(() => {
                document.getElementById('brush-2').style.opacity = '1';
                document.getElementById('note-4').style.opacity = '1';
                document.getElementById('note-4').style.transform = 'translateY(-8px) rotate(-10deg)';
                
                document.getElementById('note-7').style.opacity = '1';
                document.getElementById('note-7').style.transform = 'translateY(-14px) rotate(25deg)';
            }, 1800);
            
            setTimeout(() => {
                document.getElementById('note-8').style.opacity = '1';
                document.getElementById('note-8').style.transform = 'translateY(-9px) rotate(-15deg)';
            }, 2200);
            
            setTimeout(() => {
                document.getElementById('brush-3').style.opacity = '1';
            }, 2400);
            
            // Text reveal animations (much earlier now)
            setTimeout(() => {
                document.getElementById('main-text').style.opacity = '1';
            }, 500);
            
            setTimeout(() => {
                document.getElementById('subtitle').style.opacity = '1';
            }, 800);
            
            setTimeout(() => {
                document.getElementById('text-underline').style.opacity = '1';
            }, 2500);
            
            // Start smooth transition to main content
            setTimeout(() => {
                const intro = document.getElementById('intro');
                const mainContent = document.getElementById('main-content');
                
                // Start showing main content behind intro
                mainContent.style.display = 'block';
                
                // Gradually fade out intro while fading in main content
                setTimeout(() => {
                    intro.style.opacity = '0';
                    mainContent.style.opacity = '1';
                    
                    // Complete transition
                    setTimeout(() => {
                        intro.style.display = 'none';
                        document.body.style.overflow = 'auto';
                        
                        // Start About Me animations immediately
                        animateAboutSection();
                    }, 1000); // Wait for fade transition to complete
                    
                }, 100); // Small delay for smooth transition
                
            }, 4000); // Show intro for 4 seconds total
        });
        
        // About Me section animations - Updated for off-screen positioning
        function animateAboutSection() {
            // Navigation elements animate in
            setTimeout(() => {
                document.getElementById('nav-logo').style.opacity = '1';
                document.getElementById('nav-email').style.opacity = '1';
                document.getElementById('nav-menu').style.opacity = '1';
            }, 100);
            
            // Central content slides in first
            setTimeout(() => {
                const content = document.getElementById('about-content');
                content.style.opacity = '1';
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
            
            // Images appear with precise positions (only remove Y offset)
            setTimeout(() => {
                const image1 = document.getElementById('image-1');
                image1.style.opacity = '1';
            }, 600);
            
            setTimeout(() => {
                const image2 = document.getElementById('image-2');
                image2.style.opacity = '1';
            }, 700);
            
            setTimeout(() => {
                const image3 = document.getElementById('image-3');
                image3.style.opacity = '1';
            }, 800);
            
            setTimeout(() => {
                const image4 = document.getElementById('image-4');
                image4.style.opacity = '1';
            }, 900);
            
            setTimeout(() => {
                const image5 = document.getElementById('image-5');
                image5.style.opacity = '1';
            }, 1000);
            
            setTimeout(() => {
                const image6 = document.getElementById('image-6');
                image6.style.opacity = '1';
            }, 1100);
            
            setTimeout(() => {
                const image7 = document.getElementById('image-7');
                image7.style.opacity = '1';
            }, 1200);
            
            setTimeout(() => {
                const image8 = document.getElementById('image-8');
                image8.style.opacity = '1';
            }, 1300);
        }

        // Developer calibration mode to fine-tune image positions
        (function calibrationTool() {
            let debug = false;
            let selected = null;
            const ids = ['image-1','image-2','image-3','image-4','image-5','image-6','image-7','image-8'];

            // HUD
            const hud = document.createElement('div');
            hud.style.cssText = 'position:fixed;bottom:12px;left:12px;z-index:1000;background:rgba(0,0,0,.6);color:#fff;padding:8px 10px;border-radius:6px;font:12px/1.2 ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;display:none;';
            hud.id = 'pos-hud';
            hud.textContent = 'Debug: off';
            document.body.appendChild(hud);

            function updateHud() {
                if (!debug) { hud.style.display = 'none'; return; }
                hud.style.display = 'block';
                if (!selected) { hud.textContent = 'Debug ON — click an image or press 1-8 to select'; return; }
                const s = selected.style;
                hud.textContent = `${selected.id}  top:${s.top||'-'}  left:${s.left||'-'}  right:${s.right||'-'}  bottom:${s.bottom||'-'}`;
            }

            // Toggle debug with key "d"
            window.addEventListener('keydown', (e) => {
                if (e.key === 'd' || e.key === 'D') {
                    debug = !debug; updateHud();
                }
                if (!debug) return;

                // Select by number 1..8
                if (/^[1-8]$/.test(e.key)) {
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
    </script>
</body>
</html>