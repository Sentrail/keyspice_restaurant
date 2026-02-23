<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keyspice Restaurant & Bar | Abule Egba, Lagos</title>
    <meta name="description" content="Keyspice Restaurant & Bar - Family friendly dining in Abule Egba. Open 24 Hours. Dine-in and Takeaway available.">
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- External Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Tailwind Config Script (kept here as it must run before Tailwind processes) -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            orange: '#D97706',
                            dark: '#1F2937',
                            light: '#FFFBEB',
                            green: '#059669',
                        }
                    },
                    fontFamily: {
                        sans: ['Poppins', 'sans-serif'],
                        serif: ['Playfair Display', 'serif'],
                    }
                }
            }
        }
    </script>
</head>
<body class="font-sans text-gray-700 bg-gray-50 scroll-smooth">

    <!-- Navigation -->
    <nav class="bg-white shadow-md fixed w-full z-50 transition-all duration-300" id="navbar">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <!-- Logo -->
            <a href="#" class="text-2xl font-serif font-bold text-brand-dark flex items-center gap-2">
                <i class="fas fa-utensils text-brand-orange"></i>
                Keyspice
            </a>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="#home" class="hover:text-brand-orange transition font-medium">Home</a>
                <a href="#about" class="hover:text-brand-orange transition font-medium">About</a>
                <a href="#menu" class="hover:text-brand-orange transition font-medium">Menu</a>
                <a href="#services" class="hover:text-brand-orange transition font-medium">Services</a>
                <a href="#contact" class="hover:text-brand-orange transition font-medium">Contact</a>
                <a href="tel:+2348000000000" class="bg-brand-orange text-white px-5 py-2 rounded-full hover:bg-amber-700 transition shadow-lg animate-pulse">
                    <i class="fas fa-phone-alt mr-2"></i>Order Now
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <button id="mobile-menu-btn" class="md:hidden text-2xl text-brand-dark focus:outline-none">
                <i class="fas fa-bars"></i>
            </button>
        </div>

        <!-- Mobile Menu Dropdown -->
        <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-100 absolute w-full shadow-xl">
            <div class="flex flex-col p-4 space-y-4">
                <a href="#home" class="block text-gray-800 hover:text-brand-orange font-medium">Home</a>
                <a href="#about" class="block text-gray-800 hover:text-brand-orange font-medium">About</a>
                <a href="#menu" class="block text-gray-800 hover:text-brand-orange font-medium">Menu</a>
                <a href="#services" class="block text-gray-800 hover:text-brand-orange font-medium">Services</a>
                <a href="#contact" class="block text-gray-800 hover:text-brand-orange font-medium">Contact</a>
                <a href="tel:+2348000000000" class="block bg-brand-orange text-white text-center py-3 rounded-lg">
                    Call to Order
                </a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header id="home" class="hero-bg h-screen flex items-center justify-center text-center px-4 pt-16">
        <div class="max-w-3xl mx-auto text-white">
            <div class="inline-block bg-brand-orange px-4 py-1 rounded-full text-sm font-bold mb-4 uppercase tracking-wider shadow-lg">
                <i class="fas fa-clock mr-2"></i>Open 24 Hours
            </div>
            <h1 class="text-4xl md:text-6xl font-serif font-bold mb-6 leading-tight">
                Taste the Soul of Lagos at <span class="text-brand-orange">Keyspice</span>
            </h1>
            <p class="text-lg md:text-xl text-gray-200 mb-8 max-w-2xl mx-auto">
                Your favorite family spot for authentic meals and late-night cravings. Dine-in or takeaway, anytime you want.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="#contact" class="bg-brand-orange hover:bg-amber-700 text-white px-8 py-4 rounded-lg font-bold text-lg transition shadow-lg transform hover:-translate-y-1">
                    Visit Us
                </a>
                <a href="#menu" class="bg-white hover:bg-gray-100 text-brand-dark px-8 py-4 rounded-lg font-bold text-lg transition shadow-lg transform hover:-translate-y-1">
                    View Menu
                </a>
            </div>
            
            <!-- Google Rating Badge -->
            <div class="mt-12 flex justify-center items-center bg-white/10 backdrop-blur-sm p-4 rounded-xl inline-flex border border-white/20">
                <div class="flex text-yellow-400 text-xl mr-3">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="text-left">
                    <p class="font-bold text-white text-lg leading-none">3.9 Stars</p>
                    <p class="text-xs text-gray-300">Based on 26 Google Reviews</p>
                </div>
            </div>
        </div>
    </header>

    <!-- Features / Highlights Bar -->
    <section class="bg-brand-light py-8 border-b border-orange-100">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-center">
                <div class="flex items-center justify-center gap-3">
                    <i class="fas fa-utensils text-brand-orange text-2xl"></i>
                    <span class="font-semibold text-gray-700">Family-Friendly Dining</span>
                </div>
                <div class="flex items-center justify-center gap-3">
                    <i class="fas fa-wallet text-brand-orange text-2xl"></i>
                    <span class="font-semibold text-gray-700">Affordable (₦6k - ₦8k)</span>
                </div>
                <div class="flex items-center justify-center gap-3">
                    <i class="fas fa-map-marker-alt text-brand-orange text-2xl"></i>
                    <span class="font-semibold text-gray-700">Located in Abule Egba</span>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row items-center gap-12">
                <div class="md:w-1/2 relative">
                    <img src="/images/bg2.png" alt="Restaurant Interior" class="rounded-2xl shadow-2xl w-full object-cover h-96">
                    <div class="absolute -bottom-6 -right-6 bg-brand-orange text-white p-6 rounded-xl shadow-lg hidden md:block">
                        <p class="text-3xl font-bold font-serif">24/7</p>
                        <p class="text-sm">Always Open</p>
                    </div>
                </div>
                <div class="md:w-1/2">
                    <h4 class="text-brand-orange font-bold uppercase tracking-wider mb-2">About Us</h4>
                    <h2 class="text-3xl md:text-4xl font-serif font-bold text-brand-dark mb-6">More Than Just a Restaurant, We Are Home.</h2>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Welcome to <strong>Keyspice Restaurant & Bar</strong>. Located on the bustling Meiran Road in Abule Egba, we are dedicated to serving delicious, comforting meals around the clock. Whether you're looking for a hearty family dinner, a quick lunch, or a late-night bite, our doors never close.
                    </p>
                    <p class="text-gray-600 mb-8 leading-relaxed">
                        We pride ourselves on offering consistent service and high-quality food at prices that respect your wallet. Join us and experience the warmth of true Lagos hospitality.
                    </p>
                    <a href="#menu" class="text-brand-orange font-bold hover:text-amber-700 transition border-b-2 border-brand-orange pb-1">
                        Check our Menu <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-20 bg-gray-50">
        <div class="container mx-auto px-6 text-center">
            <div class="max-w-2xl mx-auto mb-16">
                <h2 class="text-3xl md:text-4xl font-serif font-bold text-brand-dark mb-4">Our Services</h2>
                <p class="text-gray-600">Designed for your convenience and comfort.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition transform hover:-translate-y-2">
                    <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-chair text-brand-orange text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-brand-dark mb-3">Dine-In Experience</h3>
                    <p class="text-gray-600">Enjoy our cozy, air-conditioned space perfect for family gatherings and group hangouts.</p>
                </div>

                <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition transform hover:-translate-y-2">
                    <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-shopping-bag text-brand-orange text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-brand-dark mb-3">Quick Takeaway</h3>
                    <p class="text-gray-600">In a rush? Order ahead and pick up your hot, fresh meal on your way home or to work.</p>
                </div>

                <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition transform hover:-translate-y-2">
                    <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-glass-cheers text-brand-orange text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-brand-dark mb-3">Bar & Lounge</h3>
                    <p class="text-gray-600">Relax with our selection of chilled drinks and spirits. The perfect spot to unwind.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Menu Preview Section -->
    <section id="menu" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h4 class="text-brand-orange font-bold uppercase tracking-wider mb-2">Taste the Magic</h4>
                <h2 class="text-3xl md:text-4xl font-serif font-bold text-brand-dark">Our Popular Menu</h2>
                <p class="text-gray-500 mt-2">Average price per person: ₦6,000 – ₦8,000</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Menu Category: Mains -->
                <div>
                    <h3 class="text-2xl font-bold text-brand-dark mb-6 border-b pb-2">Main Dishes</h3>
                    <div class="space-y-6">
                        <div class="flex justify-between items-start">
                            <div>
                                <h4 class="font-bold text-lg text-gray-800">Keyspice Special Jollof</h4>
                                <p class="text-sm text-gray-500">Served with grilled chicken or fish and plantain.</p>
                            </div>
                            <span class="font-bold text-brand-orange">₦4,500</span>
                        </div>
                        <div class="flex justify-between items-start">
                            <div>
                                <h4 class="font-bold text-lg text-gray-800">Grilled Catfish & Chips</h4>
                                <p class="text-sm text-gray-500">Spicy grilled catfish served with yam or potato chips.</p>
                            </div>
                            <span class="font-bold text-brand-orange">₦7,000</span>
                        </div>
                        <div class="flex justify-between items-start">
                            <div>
                                <h4 class="font-bold text-lg text-gray-800">Seafood Okra</h4>
                                <p class="text-sm text-gray-500">Rich okra soup with fresh seafood and semovita/poundo.</p>
                            </div>
                            <span class="font-bold text-brand-orange">₦6,500</span>
                        </div>
                        <div class="flex justify-between items-start">
                            <div>
                                <h4 class="font-bold text-lg text-gray-800">Asun & Fried Rice</h4>
                                <p class="text-sm text-gray-500">Spicy goat meat paired with our signature fried rice.</p>
                            </div>
                            <span class="font-bold text-brand-orange">₦5,000</span>
                        </div>
                    </div>
                </div>

                <!-- Menu Category: Drinks & Specials -->
                <div>
                    <h3 class="text-2xl font-bold text-brand-dark mb-6 border-b pb-2">Drinks & Specials</h3>
                    <div class="space-y-6">
                        <div class="flex justify-between items-start">
                            <div>
                                <h4 class="font-bold text-lg text-gray-800">Chapman Cocktail</h4>
                                <p class="text-sm text-gray-500">Classic Nigerian cocktail with cucumber and fruits.</p>
                            </div>
                            <span class="font-bold text-brand-orange">₦2,500</span>
                        </div>
                        <div class="flex justify-between items-start">
                            <div>
                                <h4 class="font-bold text-lg text-gray-800">Pepper Soup (Goat Meat)</h4>
                                <p class="text-sm text-gray-500">Hot and spicy broth, perfect for the evening.</p>
                            </div>
                            <span class="font-bold text-brand-orange">₦3,500</span>
                        </div>
                        <div class="flex justify-between items-start">
                            <div>
                                <h4 class="font-bold text-lg text-gray-800">Chicken & Chips Platter</h4>
                                <p class="text-sm text-gray-500">Great for sharing with friends.</p>
                            </div>
                            <span class="font-bold text-brand-orange">₦6,000</span>
                        </div>
                        <div class="flex justify-between items-start">
                            <div>
                                <h4 class="font-bold text-lg text-gray-800">Fresh Juice</h4>
                                <p class="text-sm text-gray-500">Watermelon, Pineapple, or Orange.</p>
                            </div>
                            <span class="font-bold text-brand-orange">₦1,500</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12">
                <button class="bg-brand-dark text-white px-8 py-3 rounded-full hover:bg-gray-800 transition">Download Full Menu (PDF)</button>
            </div>
        </div>
    </section>

    <!-- Reviews / Social Proof -->
    <section class="py-20 bg-brand-light">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-serif font-bold text-center text-brand-dark mb-12">What Our Customers Say</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-xl shadow-md">
                    <div class="flex text-yellow-400 mb-4">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <p class="text-gray-600 italic mb-4">"The best place for a late night meal in Abule Egba. The catfish was well grilled and the service was surprisingly fast for 2 AM!"</p>
                    <p class="font-bold text-gray-800">- Chinedu O.</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-md">
                    <div class="flex text-yellow-400 mb-4">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                    </div>
                    <p class="text-gray-600 italic mb-4">"Lovely environment for the family. We went there for Sunday lunch and the kids loved the space. Affordable prices too."</p>
                    <p class="font-bold text-gray-800">- Mrs. Adebayo</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-md">
                    <div class="flex text-yellow-400 mb-4">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
                    </div>
                    <p class="text-gray-600 italic mb-4">"Good vibes and cold drinks. A solid spot to chill after work on Meiran Road."</p>
                    <p class="font-bold text-gray-800">- Tola J.</p>
                </div>
            </div>
            <div class="text-center mt-8">
                <a href="https://www.google.com/maps" target="_blank" class="text-brand-orange hover:underline font-medium">Read all 26 Google Reviews</a>
            </div>
        </div>
    </section>

    <!-- Location & Contact -->
    <section id="contact" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="flex flex-col lg:flex-row gap-12 bg-white rounded-3xl overflow-hidden shadow-2xl">
                <div class="lg:w-1/3 bg-brand-dark text-white p-10 flex flex-col justify-center">
                    <h3 class="text-3xl font-serif font-bold mb-6">Visit Us</h3>
                    
                    <div class="space-y-6">
                        <div class="flex items-start gap-4">
                            <i class="fas fa-map-marker-alt text-brand-orange text-xl mt-1"></i>
                            <div>
                                <h5 class="font-bold text-lg">Address</h5>
                                <p class="text-gray-300">Meiran Road, Abule Egba,<br>Lagos 102213, Nigeria</p>
                                <p class="text-sm text-brand-orange mt-1">Plus Code: J7VC+H9 Lagos</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <i class="fas fa-clock text-brand-orange text-xl mt-1"></i>
                            <div>
                                <h5 class="font-bold text-lg">Hours</h5>
                                <p class="text-gray-300">Monday - Sunday</p>
                                <p class="text-brand-orange font-bold">Open 24 Hours</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <i class="fas fa-phone text-brand-orange text-xl mt-1"></i>
                            <div>
                                <h5 class="font-bold text-lg">Contact</h5>
                                <p class="text-gray-300">+234 800 123 4567</p>
                                <p class="text-gray-300">info@keyspice.com</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-10">
                        <button onclick="window.location.href='https://www.google.com/maps/dir/?api=1&destination=Meiran+Road,Abule+Egba,Lagos+Nigeria'" class="w-full bg-brand-orange hover:bg-amber-700 text-white font-bold py-3 rounded-lg transition">
                            Get Directions
                        </button>
                    </div>
                </div>

                <div class="lg:w-2/3 h-96 lg:h-auto bg-gray-200 relative">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.9524163296306!2d3.2796717!3d6.6498539!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwMzgnNTkuNSJOIDPCsDE2JzQ2LjgiRQ!5e0!3m2!1sen!2sng!4v1735680000000"
                        width="100%" 
                        height="100%" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy"
                        class="absolute inset-0 w-full h-full grayscale hover:grayscale-0 transition duration-500">
                    </iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-400 py-12">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row justify-between items-center mb-8">
                <div class="mb-4 md:mb-0">
                    <a href="#" class="text-2xl font-serif font-bold text-white flex items-center gap-2">
                        <i class="fas fa-utensils text-brand-orange"></i>
                        Keyspice
                    </a>
                </div>
                <div class="flex space-x-6">
                    <a href="#home" class="hover:text-white transition">Home</a>
                    <a href="#menu" class="hover:text-white transition">Menu</a>
                    <a href="#about" class="hover:text-white transition">About</a>
                    <a href="#contact" class="hover:text-white transition">Contact</a>
                </div>
            </div>
            <div class="border-t border-gray-800 pt-8 flex flex-col md:flex-row justify-between items-center text-sm">
                <p>&copy; 2025 Keyspice Restaurant & Bar. All rights reserved.</p>
                <div class="flex space-x-4 mt-4 md:mt-0">
                    <a href="#" class="hover:text-brand-orange"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="hover:text-brand-orange"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="hover:text-brand-orange"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <!-- External JavaScript -->
    <script src="assets/js/script.js"></script>
</body>
</html>