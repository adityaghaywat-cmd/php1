```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>iPhone Store - Premium iPhones</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    animation: {
                        'fade-in': 'fadeIn 0.8s ease-out',
                        'float': 'float 3s ease-in-out infinite',
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': {
                                opacity: '0',
                                transform: 'translateY(20px)'
                            },
                            '100%': {
                                opacity: '1',
                                transform: 'translateY(0)'
                            }
                        },
                        float: {
                            '0%, 100%': {
                                transform: 'translateY(0)'
                            },
                            '50%': {
                                transform: 'translateY(-12px)'
                            }
                        }
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-black text-white">

<!-- ================= NAVBAR ================= -->

<header class="fixed top-0 left-0 right-0 z-50 bg-black/80 backdrop-blur-lg border-b border-white/10">

    <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">

        <div class="flex items-center gap-3">
            <div class="text-3xl"></div>
            <h1 class="text-xl font-bold">
                iPhone Store
            </h1>
        </div>

        <nav class="hidden md:flex items-center gap-8 text-sm text-gray-300">
            <a href="#home" class="hover:text-white transition">
                Home
            </a>

            <a href="#products" class="hover:text-white transition">
                iPhones
            </a>

            <a href="#features" class="hover:text-white transition">
                Features
            </a>

            <a href="#contact" class="hover:text-white transition">
                Contact
            </a>
        </nav>

        <a href="#products"
           class="bg-white text-black px-5 py-2 rounded-full text-sm font-semibold hover:bg-gray-200 transition">
            Shop Now
        </a>

    </div>

</header>


<!-- ================= HERO ================= -->

<section id="home"
         class="min-h-screen flex items-center pt-24 bg-gradient-to-b from-gray-950 via-black to-black">

    <div class="max-w-7xl mx-auto px-6 w-full">

        <div class="grid md:grid-cols-2 gap-12 items-center">

            <!-- LEFT -->

            <div class="animate-fade-in">

                <p class="text-gray-400 uppercase tracking-[0.3em] text-sm mb-5">
                    New Generation
                </p>

                <h2 class="text-5xl md:text-7xl font-bold leading-tight">
                    Meet the
                    <span class="text-gray-400">
                        iPhone
                    </span>
                </h2>

                <p class="text-gray-400 text-lg mt-6 max-w-lg leading-relaxed">
                    Powerful performance. Stunning design.
                    Incredible camera. Experience the next generation
                    of smartphone technology.
                </p>

                <div class="flex flex-wrap gap-4 mt-8">

                    <a href="#products"
                       class="bg-white text-black px-7 py-3 rounded-full font-semibold hover:bg-gray-200 transition">
                        Explore iPhones
                    </a>

                    <a href="#features"
                       class="border border-white/30 px-7 py-3 rounded-full font-semibold hover:bg-white hover:text-black transition">
                        Learn More
                    </a>

                </div>

                <div class="flex gap-10 mt-12">

                    <div>
                        <p class="text-3xl font-bold">48MP</p>
                        <p class="text-gray-500 text-sm">Pro Camera</p>
                    </div>

                    <div>
                        <p class="text-3xl font-bold">A18</p>
                        <p class="text-gray-500 text-sm">Chip</p>
                    </div>

                    <div>
                        <p class="text-3xl font-bold">5G</p>
                        <p class="text-gray-500 text-sm">Connectivity</p>
                    </div>

                </div>

            </div>


            <!-- RIGHT PHONE -->

            <div class="flex justify-center animate-float">

                <div class="relative">

                    <div class="absolute inset-0 bg-white/10 blur-3xl rounded-full"></div>

                    <div class="relative w-64 h-[520px]
                                bg-gradient-to-br from-gray-700 via-gray-900 to-black
                                rounded-[45px]
                                border-[6px] border-gray-700
                                shadow-2xl">

                        <!-- Dynamic Island -->

                        <div class="absolute top-4 left-1/2 -translate-x-1/2
                                    w-24 h-7 bg-black rounded-full">
                        </div>

                        <!-- Camera -->
```
