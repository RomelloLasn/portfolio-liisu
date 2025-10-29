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
    </div>

    
    <div id="main-content" class="min-h-screen bg-black opacity-0 transition-opacity duration-1000 overflow-hidden">
        <!-- About Me Section -->
        <div class="relative h-screen flex items-center justify-center px-8 py-24">
            <!-- Background Elements -->
            <div class="absolute inset-0 overflow-hidden">
                <!-- Geometric connecting lines like in reference -->
                <svg class="w-full h-full opacity-30">
                    <defs>
                        <filter id="glow">
                            <feGaussianBlur stdDeviation="2" result="coloredBlur"/>
                            <feMerge> 
                                <feMergeNode in="coloredBlur"/>
                                <feMergeNode in="SourceGraphic"/> 
                            </feMerge>
                        </filter>
                    </defs>
                    <!-- Connecting lines between image areas -->
                    <line x1="150" y1="100" x2="400" y2="250" stroke="#950101" stroke-width="1" opacity="0" id="line-1"/>
                    <line x1="900" y1="150" x2="600" y2="300" stroke="#3D0000" stroke-width="1" opacity="0" id="line-2"/>
                    <line x1="200" y1="400" x2="800" y2="200" stroke="#FF0000" stroke-width="1" opacity="0" id="line-3"/>
                    <line x1="1100" y1="350" x2="300" y2="500" stroke="#950101" stroke-width="1" opacity="0" id="line-4"/>
                    <line x1="500" y1="100" x2="1000" y2="450" stroke="#3D0000" stroke-width="1" opacity="0" id="line-5"/>
                    <line x1="250" y1="300" x2="950" y2="400" stroke="#FF0000" stroke-width="1" opacity="0" id="line-6"/>
                </svg>
            </div>
            
            <!-- Central Content - Back to Center -->
            <div class="relative z-10 max-w-2xl mx-auto text-center">
                <!-- Main Title and Description -->
                <div class="mb-12 transform translate-y-8 opacity-0 transition-all duration-1000 ease-out" id="about-content">
                    <h2 class="font-britney text-white text-3xl md:text-5xl font-bold tracking-wide mb-6">
                        LIISU EDWARDS
                    </h2>
                    <div class="max-w-lg mx-auto">
                        <p class="text-gray-300 text-base md:text-lg leading-relaxed">
                            Crafting digital experiences that captivate and inspire. Elevating your brand through design and innovation.
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- Portfolio Images - Cleaner layout with fewer images -->
            
            <!-- Image 1 - Large, top left -->
            <div class="absolute top-16 left-16 transform translate-y-32 opacity-0 transition-all duration-1200 ease-out" id="image-1" style="transition-delay: 0.2s;">
                <div class="w-44 h-56 bg-gradient-to-br from-gray-800 to-gray-900 rounded-lg shadow-2xl overflow-hidden">
                    <div class="w-full h-full bg-gradient-to-br from-red-900 to-gray-800 flex items-center justify-center">
                        <span class="text-white text-sm font-semibold">Portfolio</span>
                    </div>
                </div>
            </div>
            
            <!-- Image 2 - Medium, top right, extending off-screen -->
            <div class="absolute -top-8 -right-20 transform translate-y-32 opacity-0 transition-all duration-1200 ease-out" id="image-2" style="transition-delay: 0.5s;">
                <div class="w-40 h-52 bg-gradient-to-br from-gray-700 to-gray-800 rounded-lg shadow-2xl overflow-hidden">
                    <div class="w-full h-full bg-gradient-to-br from-red-900 to-gray-700 flex items-center justify-center">
                        <span class="text-white text-xs font-semibold">Featured</span>
                    </div>
                </div>
            </div>
            
            <!-- Image 4 - Large, left side -->
            <div class="absolute top-1/2 left-8 transform -translate-y-1/2 translate-y-32 opacity-0 transition-all duration-1200 ease-out" id="image-4" style="transition-delay: 0.8s;">
                <div class="w-48 h-60 bg-gradient-to-br from-gray-800 to-gray-900 rounded-lg shadow-2xl overflow-hidden">
                    <div class="w-full h-full bg-gradient-to-br from-gray-800 to-red-800 flex items-center justify-center">
                        <span class="text-white text-sm font-semibold">Design</span>
                    </div>
                </div>
            </div>
            
            <!-- Image 5 - Medium, right side -->
            <div class="absolute top-1/3 right-16 transform translate-y-32 opacity-0 transition-all duration-1200 ease-out" id="image-5" style="transition-delay: 1.1s;">
                <div class="w-38 h-50 bg-gradient-to-br from-gray-700 to-gray-800 rounded-lg shadow-2xl overflow-hidden">
                    <div class="w-full h-full bg-gradient-to-br from-red-800 to-gray-800 flex items-center justify-center">
                        <span class="text-white text-sm font-semibold">Creative</span>
                    </div>
                </div>
            </div>
            
            <!-- Image 6 - Medium, bottom left -->
            <div class="absolute bottom-20 left-20 transform translate-y-32 opacity-0 transition-all duration-1200 ease-out" id="image-6" style="transition-delay: 1.4s;">
                <div class="w-42 h-54 bg-gradient-to-br from-gray-800 to-gray-900 rounded-lg shadow-2xl overflow-hidden">
                    <div class="w-full h-full bg-gradient-to-br from-gray-900 to-red-900 flex items-center justify-center">
                        <span class="text-white text-sm font-semibold">Gallery</span>
                    </div>
                </div>
            </div>
            
            <!-- Image 8 - Large, bottom right -->
            <div class="absolute bottom-12 right-12 transform translate-y-32 opacity-0 transition-all duration-1200 ease-out" id="image-8" style="transition-delay: 1.7s;">
                <div class="w-50 h-64 bg-gradient-to-br from-gray-800 to-gray-900 rounded-lg shadow-2xl overflow-hidden">
                    <div class="w-full h-full bg-gradient-to-br from-gray-800 to-red-800 flex items-center justify-center">
                        <span class="text-white text-sm font-semibold">Projects</span>
                    </div>
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
            // Central content slides in first
            setTimeout(() => {
                const content = document.getElementById('about-content');
                content.style.opacity = '1';
                content.style.transform = 'translateY(0)';
            }, 100);
            
            // Connecting lines appear
            setTimeout(() => {
                const lines = ['line-1', 'line-2', 'line-3', 'line-4', 'line-5', 'line-6'];
                lines.forEach((lineId, index) => {
                    setTimeout(() => {
                        const lineElement = document.getElementById(lineId);
                        if (lineElement) {
                            lineElement.style.opacity = '0.1';
                        }
                    }, index * 150);
                });
            }, 300);
            
            // Images appear with dynamic sizing and closer positioning
            setTimeout(() => {
                const image1 = document.getElementById('image-1');
                image1.style.opacity = '1';
                image1.style.transform = 'translateY(0)';
            }, 500);
            
            setTimeout(() => {
                const image2 = document.getElementById('image-2');
                image2.style.opacity = '1';
                image2.style.transform = 'translateY(0)';
            }, 600);
            
            setTimeout(() => {
                const image4 = document.getElementById('image-4');
                image4.style.opacity = '1';
                image4.style.transform = 'translateY(0) translateY(-50%)';
            }, 700);
            
            setTimeout(() => {
                const image5 = document.getElementById('image-5');
                image5.style.opacity = '1';
                image5.style.transform = 'translateY(0)';
            }, 800);
            
            setTimeout(() => {
                const image6 = document.getElementById('image-6');
                image6.style.opacity = '1';
                image6.style.transform = 'translateY(0)';
            }, 900);
            
            setTimeout(() => {
                const image8 = document.getElementById('image-8');
                image8.style.opacity = '1';
                image8.style.transform = 'translateY(0)';
            }, 1000);
        }
    </script>
</body>
</html>