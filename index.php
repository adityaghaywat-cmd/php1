```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>LaptopZone - Best Laptops</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#2563eb',
                        dark: '#0f172a'
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-slate-50 text-slate-800">

<!-- ================= NAVBAR ================= -->

<header class="bg-white shadow-sm sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">

        <!-- Logo -->
        <div class="flex items-center gap-2">
            <div class="text-3xl">💻</div>
            <h1 class="text-2xl font-bold text-blue-600">
                Laptop<span class="text-slate-900">Zone</span>
            </h1>
        </div>

        <!-- Navigation -->
        <nav class="hidden md:flex gap-8 font-medium">
            <a href="#home" class="text-blue-600 hover:text-blue-800">Home</a>
            <a href="#laptops" class="hover:text-blue-600">Laptops</a>
            <a href="#offers" class="hover:text-blue-600">Offers</a>
            <a href="#about" class="hover:text-blue-600">About</a>
            <a href="#contact" class="hover:text-blue-600">Contact</a>
        </nav>

        <!-- Buttons -->
        <div class="flex items-center gap-3">
            <button class="text-xl hover:text-blue-600">
                🛒
            </button>

            <button class="bg-blue-600 text-white px-5 py-2 rounded-lg hover:bg-blue-700">
                Sign In
            </button>
        </div>

    </div>
</header>


<!-- ================= HERO ================= -->

<section id="home" class="bg-gradient-to-r from-blue-50 to-indigo-100">

    <div class="max-w-7xl mx-auto px-6 py-20 grid md:grid-cols-2 items-center gap-12">

        <!-- Hero Content -->

        <div>

            <span class="inline-block bg-blue-100 text-blue-700 px-4 py-2 rounded-full text-sm font-semibold mb-5">
                🚀 Latest Laptops • Best Prices
            </span>

            <h2 class="text-5xl md:text-6xl font-bold leading-tight text-slate-900">
                Your Perfect
                <span class="text-blue-600"> Laptop</span>
                Is Just a Click Away
            </h2>

            <p class="mt-6 text-lg text-slate-600 max-w-xl">
                Discover powerful laptops from top brands.
                Whether you're working, studying, coding or gaming,
                we have the perfect laptop for you.
            </p>

            <div class="mt-8 flex gap-4">

                <a href="#laptops"
                   class="bg-blue-600 text-white px-7 py-3 rounded-lg font-semibold hover:bg-blue-700 transition">
                    Shop Now →
                </a>

                <a href="#offers"
                   class="border border-blue-600 text-blue-600 px-7 py-3 rounded-lg font-semibold hover:bg-blue-600 hover:text-white transition">
                    Explore Deals
                </a>

            </div>

        </div>


        <!-- Hero Laptop -->

        <div class="flex justify-center">

            <div class="bg-white rounded-3xl shadow-2xl p-8">

                <div class="text-[180px] md:text-[220px] text-center">
                    💻
                </div>

                <div class="text-center">

                    <p class="text-slate-500">
                        Premium Performance
                    </p>

                    <h3 class="text-2xl font-bold">
                        ProBook X15
                    </h3>

                    <p class="text-blue-600 font-bold text-xl mt-2">
                        ₹69,999
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- ================= FEATURES ================= -->

<section class="bg-white border-y">

    <div class="max-w-7xl mx-auto px-6 py-8 grid md:grid-cols-4 gap-8">

        <div class="flex items-center gap-4">
            <div class="text-3xl">🚚</div>
            <div>
                <h3 class="font-bold">Free Shipping</h3>
                <p class="text-sm text-slate-500">
                    On orders above ₹4999
                </p>
            </div>
        </div>


        <div class="flex items-center gap-4">
            <div class="text-3xl">🛡️</div>
            <div>
                <h3 class="font-bold">1 Year Warranty</h3>
                <p class="text-sm text-slate-500">
                    Shop with confidence
                </p>
            </div>
        </div>


        <div class="flex items-center gap-4">
            <div class="text-3xl">🎧</div>
            <div>
                <h3 class="font-bold">24/7 Support</h3>
                <p class="text-sm text-slate-500">
                    We're here to help
                </p>
            </div>
        </div>


        <div class="flex items-center gap-4">
            <div class="text-3xl">↩️</div>
            <div>
                <h3 class="font-bold">Easy Returns</h3>
                <p class="text-sm text-slate-500">
                    7 day easy returns
                </p>
            </div>
        </div>

    </div>

</section>


<!-- ================= LAPTOPS ================= -->

<section id="laptops" class="max-w-7xl mx-auto px-6 py-20">

    <div class="flex justify-between items-end mb-10">

        <div>
            <p class="text-blue-600 font-semibold">
                FEATURED LAPTOPS
            </p>

            <h2 class="text-4xl font-bold mt-2">
                Top Picks For You
            </h2>
        </div>

        <a href="#" class="text-blue-600 font-semibold">
            View All →
        </a>

    </div>


    <!-- Product Grid -->

    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">


        <!-- Product 1 -->

        <div class="bg-white rounded-xl shadow-md overflow-hidden hover:-translate-y-2 transition duration-300">

            <div class="bg-slate-100 h-52 flex items-center justify-center">

                <div class="text-8xl">
                    💻
                </div>

            </div>

            <div class="p-5">

                <h3 class="text-xl font-bold">
                    MacBook Air M2
                </h3>

                <p class="text-sm text-slate-500 mt-2">
                    13.6" | Apple M2 | 8GB | 256GB SSD
                </p>

                <div class="text-yellow-500 mt-3">
                    ★★★★★
                    <span class="text-slate-500 text-sm">
                        4.8 (124)
                    </span>
                </div>

                <p class="text-2xl font-bold mt-3">
                    ₹89,990
                </p>

                <button class="w-full mt-4 bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700">
                    🛒 Add to Cart
                </button>

            </div>

        </div>


        <!-- Product 2 -->

        <div class="bg-white rounded-xl shadow-md overflow-hidden hover:-translate-y-2 transition duration-300">

            <div class="bg-slate-100 h-52 flex items-center justify-center">

                <div class="text-8xl">
                    💻
                </div>

            </div>

            <div class="p-5">

                <h3 class="text-xl font-bold">
                    Dell Inspiron 15
                </h3>

                <p class="text-sm text-slate-500 mt-2">
                    15.6" | Intel Core i5 | 8GB | 512GB SSD
                </p>

                <div class="text-yellow-500 mt-3">
                    ★★★★★
                    <span class="text-slate-500 text-sm">
                        4.5 (98)
                    </span>
                </div>

                <p class="text-2xl font-bold mt-3">
                    ₹54,990
                </p>

                <button class="w-full mt-4 bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700">
                    🛒 Add to Cart
                </button>

            </div>

        </div>


        <!-- Product 3 -->

        <div class="bg-white rounded-xl shadow-md overflow-hidden hover:-translate-y-2 transition duration-300">

            <div class="bg-slate-100 h-52 flex items-center justify-center">

                <div class="text-8xl">
                    🎮
                </div>

            </div>

            <div class="p-5">

                <h3 class="text-xl font-bold">
                    ASUS ROG Strix G15
                </h3>

                <p class="text-sm text-slate-500 mt-2">
                    15.6" | Ryzen 7 | 16GB | 1TB SSD
                </p>

                <div class="text-yellow-500 mt-3">
                    ★★★★★
                    <span class="text-slate-500 text-sm">
                        4.7 (156)
                    </span>
                </div>

                <p class="text-2xl font-bold mt-3">
                    ₹94,990
                </p>

                <button class="w-full mt-4 bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700">
                    🛒 Add to Cart
                </button>

            </div>

        </div>


        <!-- Product 4 -->

        <div class="bg-white rounded-xl shadow-md overflow-hidden hover:-translate-y-2 transition duration-300">

            <div class="bg-slate-100 h-52 flex items-center justify-center">

                <div class="text-8xl">
                    💻
                </div>

            </div>

            <div class="p-5">

                <h3 class="text-xl font-bold">
                    HP Pavilion 14
                </h3>

                <p class="text-sm text-slate-500 mt-2">
                    14" | Intel Core i5 | 8GB | 512GB SSD
                </p>

                <div class="text-yellow-500 mt-3">
                    ★★★★★
                    <span class="text-slate-500 text-sm">
                        4.4 (76)
                    </span>
                </div>

                <p class="text-2xl font-bold mt-3">
                    ₹46,990
                </p>

                <button class="w-full mt-4 bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700">
                    🛒 Add to Cart
                </button>

            </div>

        </div>

    </div>

</section>


<!-- ================= OFFER ================= -->

<section id="offers" class="max-w-7xl mx-auto px-6 pb-20">

    <div class="bg-gradient-to-r from-slate-900 to-blue-900 rounded-2xl p-10 md:p-16 text-white">

        <div class="md:flex items-center justify-between">

            <div>

                <p class="text-blue-300 font-semibold">
                    LIMITED TIME OFFER
                </p>

                <h2 class="text-4xl font-bold mt-3">
                    Get Up To 15% Off
                </h2>

                <p class="text-slate-300 mt-3">
                    On selected laptops. Upgrade your tech today.
                </p>

                <button class="mt-6 bg-white text-blue-700 px-7 py-3 rounded-lg font-bold hover:bg-slate-100">
                    Shop Deals →
                </button>

            </div>

            <div class="text-[150px] mt-8 md:mt-0">
                💻
            </div>

        </div>

    </div>

</section>


<!-- ================= BRANDS ================= -->

<section id="about" class="bg-white py-20">

    <div class="max-w-7xl mx-auto px-6 text-center">

        <p class="text-blue-600 font-semibold">
            TOP BRANDS
        </p>

        <h2 class="text-4xl font-bold mt-2">
            Trusted Laptop Brands
        </h2>

        <div class="grid grid-cols-2 md:grid-cols-6 gap-8 mt-12">

            <div class="text-2xl font-bold text-slate-700">
                Apple
            </div>

            <div class="text-2xl font-bold text-blue-600">
                Dell
            </div>

            <div class="text-2xl font-bold text-blue-500">
                HP
            </div>

            <div class="text-2xl font-bold text-red-600">
                Lenovo
            </div>

            <div class="text-2xl font-bold text-slate-800">
                ASUS
            </div>

            <div class="text-2xl font-bold text-green-600">
                Acer
            </div>

        </div>

    </div>

</section>


<!-- ================= TESTIMONIALS ================= -->

<section class="max-w-7xl mx-auto px-6 py-20">

    <div class="text-center">

        <p class="text-blue-600 font-semibold">
            CUSTOMER REVIEWS
        </p>

        <h2 class="text-4xl font-bold mt-2">
            Loved By Laptop Users
        </h2>

    </div>


    <div class="grid md:grid-cols-3 gap-6 mt-12">


        <div class="bg-white p-7 rounded-xl shadow">

            <div class="text-yellow-500">
                ★★★★★
            </div>

            <p class="mt-4 text-slate-600">
                "Great selection of laptops and super fast delivery.
                The customer support team was very helpful!"
            </p>

            <h3 class="font-bold mt-5">
                Rahul Sharma
            </h3>

            <p class="text-sm text-slate-500">
                Verified Buyer
            </p>

        </div>


        <div class="bg-white p-7 rounded-xl shadow">

            <div class="text-yellow-500">
                ★★★★★
            </div>

            <p class="mt-4 text-slate-600">
                "Best prices compared to other websites.
                My Dell laptop is working perfectly."
            </p>

            <h3 class="font-bold mt-5">
                Priya Patel
            </h3>

            <p class="text-sm text-slate-500">
                Verified Buyer
            </p>

        </div>


        <div class="bg-white p-7 rounded-xl shadow">

            <div class="text-yellow-500">
                ★★★★★
            </div>

            <p class="mt-4 text-slate-600">
                "Amazing experience. Easy ordering process
                and excellent service."
            </p>

            <h3 class="font-bold mt-5">
                Amit Joshi
            </h3>

            <p class="text-sm text-slate-500">
                Verified Buyer
            </p>

        </div>

    </div>

</section>


<!-- ================= FOOTER ================= -->

<footer id="contact" class="bg-slate-950 text-white">

    <div class="max-w-7xl mx-auto px-6 py-14 grid md:grid-cols-4 gap-10">

        <div>

            <h2 class="text-2xl font-bold text-blue-500">
                Laptop<span class="text-white">Zone</span>
            </h2>

            <p class="text-slate-400 mt-4">
                Better Laptops. Better Futures.
            </p>

        </div>


        <div>

            <h3 class="font-bold text-lg">
                Quick Links
            </h3>

            <ul class="mt-4 space-y-2 text-slate-400">

                <li>
                    <a href="#home" class="hover:text-white">
                        Home
                    </a>
                </li>

                <li>
                    <a href="#laptops" class="hover:text-white">
                        Laptops
                    </a>
                </li>

                <li>
                    <a href="#offers" class="hover:text-white">
                        Offers
                    </a>
                </li>

                <li>
                    <a href="#about" class="hover:text-white">
                        About
                    </a>
                </li>

            </ul>

        </div>


        <div>

            <h3 class="font-bold text-lg">
                Customer Service
            </h3>

            <ul class="mt-4 space-y-2 text-slate-400">

                <li>Shipping Policy</li>
                <li>Return Policy</li>
                <li>Warranty</li>
                <li>FAQs</li>

            </ul>

        </div>


        <div>

            <h3 class="font-bold text-lg">
                Contact Us
            </h3>

            <p class="text-slate-400 mt-4">
                📧 support@laptopzone.com
            </p>

            <p class="text-slate-400 mt-2">
                📞 +91 98765 43210
            </p>

            <div class="flex gap-4 mt-5 text-2xl">
                <span>📘</span>
                <span>📸</span>
                <span>▶️</span>
                <span>💼</span>
            </div>

        </div>

    </div>


    <div class="border-t border-slate-800">

        <div class="max-w-7xl mx-auto px-6 py-5 text-center text-slate-500 text-sm">

            © 2026 LaptopZone. All rights reserved.

        </div>

    </div>

</footer>


</body>
</html>
```
