<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hello Welcom</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

        <!-- Styles -->
        
        @vite('resources/css/app.css')
    </head>
    <body class="font-sans antialiased bg-white dark:bg-gray-900 dark:text-white/50">

        {{-- NAVBAR --}}
        <nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="" class="flex items-center space-x-3 rtl:space-x-reverse"></a>
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>
            </div>
            <div id="top-section" class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul id="menu" class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="#" id="scroll-to-top" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 active:bg-blue-700 active:text-white">Home</a>
                    </li>
                    <li>
                        <a href="#about-section" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
                    </li>
                    <li>
                        <a href="#services-section" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">projects</a>
                    </li>
                </ul>
            
                <script>
                    document.addEventListener('DOMContentLoaded', function () {
                        const menuItems = document.querySelectorAll('#menu a');
            
                        // Set default active state for Home
                        menuItems[0].classList.add('bg-blue-700', 'text-white', 'md:text-blue-700', 'md:bg-transparent');
                        menuItems[0].classList.remove('text-gray-900', 'dark:text-white');
            
                        menuItems.forEach(item => {
                            item.addEventListener('click', function (event) {
                                event.preventDefault();
            
                                // Remove active state from all items
                                menuItems.forEach(link => {
                                    link.classList.remove('bg-blue-700', 'text-white', 'md:text-blue-700', 'md:bg-transparent');
                                    link.classList.add('text-gray-900', 'dark:text-white');
                                });
            
                                // Add active state to the clicked item
                                this.classList.add('bg-blue-700', 'text-white', 'md:text-blue-700', 'md:bg-transparent');
                                this.classList.remove('text-gray-900', 'dark:text-white');
                            });
                        });
                    });
                </script>
                <script>
                    document.addEventListener('DOMContentLoaded', function () {
                        const scrollToTopButton = document.getElementById('scroll-to-top');
                
                        scrollToTopButton.addEventListener('click', function (event) {
                            event.preventDefault();
                
                            const topSection = document.getElementById('top-section');
                            const topOffset = topSection.offsetTop;
                
                            // Smooth scroll to top of the page
                            smoothScrollTo(0, topOffset, 800); // 800 milliseconds for smooth scroll
                        });
                
                        function smoothScrollTo(targetX, targetY, duration) {
                            const startX = window.scrollX || window.pageXOffset;
                            const startY = window.scrollY || window.pageYOffset;
                            const distanceX = targetX - startX;
                            const distanceY = targetY - startY;
                            const startTime = new Date().getTime();
                
                            // Easing function: easeInOutCubic
                            const easeInOutCubic = function (t, b, c, d) {
                                t /= d / 2;
                                if (t < 1) return c / 2 * t * t * t + b;
                                t -= 2;
                                return c / 2 * (t * t * t + 2) + b;
                            };
                
                            const animation = function () {
                                const currentTime = new Date().getTime();
                                const timeElapsed = currentTime - startTime;
                
                                window.scrollTo(
                                    startX + easeInOutCubic(timeElapsed, 0, distanceX, duration),
                                    startY + easeInOutCubic(timeElapsed, 0, distanceY, duration)
                                );
                
                                if (timeElapsed < duration) {
                                    requestAnimationFrame(animation);
                                } else {
                                    window.scrollTo(targetX, targetY);
                                }
                            };
                
                            animation();
                        }
                    });
                </script>
                
                
            </div>
            </div>
        </nav>
  

        {{-- CONTETNT 1--}}
        <section class="bg-gradient-to-b from-blue-900 to-black-900 bg-no-repeat bg-center bg-cover w-full">
            <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56 flex flex-col items-center justify-between md:flex-row md:text-left">
                <div class="md:w-1/2 text-white md:text-right md:ml-auto">
                    <h1 class="mb-4 text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-6xl">
                            Hei, i'm
                        <span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">
                            Rahman
                        </span> 
                        </h1>
                    <p class="text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400">Innovative technology enthusiast skilled in</p>

                    <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl">
                        mobile programming, UI/UX & AI
                    </p>
                </div>
                <div class="md:w-1/2 flex justify-center items-center mt-8 md:mt-0 md:ml-auto">
                    <img src="/img/poto1.png" class="w-2/3 h-120 object-cover rounded-l-full shadow-lg">
                </div>
            </div>
        </section>

        {{-- CONTENT 2 --}}
        <div id="about-section" class="w-full p-4 text-center bg-white dark:bg-gray-900 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700 mt-10">
            <h5 class="mb-2 mt-10 text-3xl font-bold text-gray-900 dark:text-white">About</h5>
            <p class="mb-12 text-base text-gray-500 sm:text-lg dark:text-gray-400">
                <a>
                    <h5 class="mb-16 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        Step into My Universe
                    </h5>
                </a>
            </p>
            <div class="flex flex-wrap justify-center space-y-4 sm:space-y-0 sm:space-x-4 rtl:space-x-reverse">             
                <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="https://drive.google.com/file/d/1bcZGteUSPs4LVia4ZgSx2xhNnCwz8kUp/view">
                        <div class="flex justify-center">
                            <img src="/img/poto.png" class="w-40 h-40 mt-2 object-cover object-top rounded-full shadow-lg dark:ring-gray-500">
                        </div>
                        <div class="mt-4">
                            <a class="block mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                Auliya Rahman Pakarti
                            </a>
                            <p class="text-sm text-gray-700 dark:text-gray-400 text-justify">
                                As a software engineer with a certificate of expertise in mobile application or website development, I have expertise in producing innovative solutions to meet user needs.
                                Throughout my career, I have a track record of carrying out various application development and maintenance projects, ranging from designing websites for faculties and study programs in my college, working on projects at internship sites such as websites in managing office documents, tax calculations for commodities, and mobile apps for the process of recording commodity harvests.
                                I am dedicated to gaining a deeper understanding of how to analyze user data to make better decisions for app development.
                            </p>
                        </div>
                    </a>
                </div>  
                <div class="flex flex-col space-y-4 md:pl-0">
                    <a href="https://www.linkedin.com/in/auliya-rahman-p-48b7ab218?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-700 transition duration-300 ease-in-out">
                        <div class="flex justify-center">
                            <img src="https://img.freepik.com/premium-vector/linkedin-icon_488108-5.jpg?w=360" class="w-24 h-24 md:w-40 md:h-40 object-cover rounded-full shadow-lg">
                        </div>
                        <div class="text-center mt-4">
                            <h5 class="mb-5 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">LinkedIn Profile</h5>
                        </div>
                    </a>
                
                    <a href="https://github.com/rahmanpakarti22" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-700 transition duration-300 ease-in-out">
                        <div class="flex justify-center">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c2/GitHub_Invertocat_Logo.svg/180px-GitHub_Invertocat_Logo.svg.png" class="w-24 h-24 md:w-40 md:h-40 object-cover rounded-full shadow-lg">
                        </div>
                        <div class="text-center mt-4">
                            <h5 class="mb-5 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">GitHub</h5>
                        </div>
                    </a>
                </div>   
                <div class="flex flex-col space-y-4 pl-4 md:pl-0">
                    <a href="mailto:your-email@example.com" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-700 transition duration-300 ease-in-out">
                        <div class="flex justify-center">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTZUF-iZHxeoX2OZMgP3wEhmHXmmRp50jh399G8YpGqCJjOxba2w6ZvQQR9SsAL5--W90Y&usqp=CAU" class="w-24 h-24 md:w-40 md:h-40 object-cover rounded-full shadow-lg">
                        </div>
                        <div class="text-center mt-4">
                            <h5 class="mb-5 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Mail</h5>
                        </div>
                    </a>                    
                
                    <a href="https://www.youtube.com/@auliyarahmanp1306" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-700 transition duration-300 ease-in-out">
                        <div class="flex justify-center">
                            <img src="https://cdn2.iconfinder.com/data/icons/social-media-8/512/youtube.png" class="w-24 h-24 md:w-40 md:h-40 object-cover rounded-full shadow-lg">
                        </div>
                        <div class="text-center mt-4">
                            <h5 class="mb-5 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Youtube</h5>
                        </div>
                    </a>
                </div>         
            </div>
        </div>
        
    
        <script>
            // Smooth scroll for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
    
                    const target = document.querySelector(this.getAttribute('href'));
                    const duration = 2000; // Duration in milliseconds
                    const targetPosition = target.getBoundingClientRect().top;
                    const startPosition = window.pageYOffset;
                    let startTime = null;
    
                    function animation(currentTime) {
                        if (startTime === null) startTime = currentTime;
                        const timeElapsed = currentTime - startTime;
                        const run = ease(timeElapsed, startPosition, targetPosition, duration);
                        window.scrollTo(0, run);
                        if (timeElapsed < duration) requestAnimationFrame(animation);
                    }
    
                    function ease(t, b, c, d) {
                        t /= d / 2;
                        if (t < 1) return c / 2 * t * t + b;
                        t--;
                        return -c / 2 * (t * (t - 2) - 1) + b;
                    }
    
                    requestAnimationFrame(animation);
                });
            });
        </script>
        <script>
            // Smooth scroll for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
    
                    const target = document.querySelector(this.getAttribute('href'));
                    const duration = 2000; // Duration in milliseconds
                    const targetPosition = target.getBoundingClientRect().top;
                    const startPosition = window.pageYOffset;
                    let startTime = null;
    
                    function animation(currentTime) {
                        if (startTime === null) startTime = currentTime;
                        const timeElapsed = currentTime - startTime;
                        const run = ease(timeElapsed, startPosition, targetPosition, duration);
                        window.scrollTo(0, run);
                        if (timeElapsed < duration) requestAnimationFrame(animation);
                    }
    
                    function ease(t, b, c, d) {
                        t /= d / 2;
                        if (t < 1) return c / 2 * t * t + b;
                        t--;
                        return -c / 2 * (t * (t - 2) - 1) + b;
                    }
    
                    requestAnimationFrame(animation);
                });
            });
        </script>

        
        
        {{-- CONTENT 3 --}}
        <section class="bg-white dark:bg-gray-900">
            <div id="services-section" class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16">
                <div class="bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg p-8 md:p-12 mb-8">
                    <a class="bg-blue-100 text-blue-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-blue-400 mb-2">
                        <svg class="w-2.5 h-2.5 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20.75 3h-17.5C2.56 3 2 3.56 2 4.25v15.5c0 .69.56 1.25 1.25 1.25h17.5c.69 0 1.25-.56 1.25-1.25V4.25C22 3.56 21.44 3 20.75 3zM20 19H4V5h16v14zM6 14h12v-2H6v2zm0-4h12V8H6v2z"/>
                        </svg>                        
                        Expertise
                    </a>
                    <h1 class="text-gray-900 dark:text-white text-3xl md:text-5xl font-extrabold mb-2">Certificate</h1>
                    <p class="text-lg font-normal text-gray-500 dark:text-gray-400 mb-6">Unlock the next level of expertise, explore my certificate and discover the skills that set me apart.</p>
                    <a href="https://drive.google.com/file/d/1zjKIPmIoVmMuwPeWrovKiCKpgPdRqanR/view" class="inline-flex justify-center items-center py-2.5 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                        See my expertise
                        <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                </div>
                <div class="grid md:grid-cols-2 gap-8">
                    <div class="bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg p-8 md:p-12">
                        <a class="bg-green-100 text-green-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-green-400 mb-2">
                            <svg class="w-2.5 h-2.5 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                                <path d="M17 11h-2.722L8 17.278a5.512 5.512 0 0 1-.9.722H17a1 1 0 0 0 1-1v-5a1 1 0 0 0-1-1ZM6 0H1a1 1 0 0 0-1 1v13.5a3.5 3.5 0 1 0 7 0V1a1 1 0 0 0-1-1ZM3.5 15.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2ZM16.132 4.9 12.6 1.368a1 1 0 0 0-1.414 0L9 3.55v9.9l7.132-7.132a1 1 0 0 0 0-1.418Z"/>
                            </svg>
                            Design
                        </a>
                        <h2 class="text-gray-900 dark:text-white text-3xl font-extrabold mb-2">My Design</h2>
                        <p class="text-lg font-normal text-gray-500 dark:text-gray-400 mb-4">Explore my design portfolio: a curated showcase of creativity and innovation. From digital illustrations to sleek UI/UX designs, each project highlights my dedication to excellence.</p>
                        <a href="https://drive.google.com/file/d/1g8FAXlpVz2QXVGNmVGYT_0TP1cwGOJxx/view?usp=sharing" class="text-blue-600 dark:text-blue-500 hover:underline font-medium text-lg inline-flex items-center">See the art
                            <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                        </a>
                    </div>
                    <div class="bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg p-8 md:p-12">
                        <a href="#" class="bg-purple-100 text-purple-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-purple-400 mb-2">
                            <svg class="w-2.5 h-2.5 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4 1 8l4 4m10-8 4 4-4 4M11 1 9 15"/>
                            </svg>
                            Code
                        </a>
                        <h2 class="text-gray-900 dark:text-white text-3xl font-extrabold mb-2">Innovation in Every Line of Code</h2>
                        <p class="text-lg font-normal text-gray-500 dark:text-gray-400 mb-4">Explore my coding portfolio: where innovation meets functionality. Discover projects showcasing my expertise in developing robust, efficient software solutions and seamless user experiences.</p>
                        <a href="https://drive.google.com/file/d/1pXtZO-8fqIvdIiBYe19KX1K4tYhhlXfH/view?usp=sharing" class="text-blue-600 dark:text-blue-500 hover:underline font-medium text-lg inline-flex items-center">See more
                            <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        {{-- FOOTER --}}
        <footer class="fixed bottom-0 left-0 z-20 w-full p-4 bg-white border-t border-gray-200 shadow flex items-center justify-center md:p-6 dark:bg-gray-800 dark:border-gray-600">
            <span class="text-sm text-gray-500 text-center dark:text-gray-400">© 2024 <a href="https://www.linkedin.com/in/auliya-rahman-p-48b7ab218?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" class="hover:underline">AULIYA RAHMAN PAKARTI</a>. 
                All Rights Reserved.
            </span>
        </footer>        
    </body>
</html>
