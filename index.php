<?php include 'navbar.php'; ?>
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.3/dist/tailwind.min.css" rel="stylesheet">
<style>
@keyframes floatSlow {
  0%, 100% { transform: translateY(0); }
  50% { transform: translateY(-20px); }
}
.animate-floatSlow {
  animation: floatSlow 6s ease-in-out infinite;
}
@keyframes fadeInUp {
  from { opacity: 0; transform: translateY(20px); }
  to { opacity: 1; transform: translateY(0); }
}
.animate-fadeInUp {
  animation: fadeInUp 1s ease forwards;
}
.animate-fadeInDown {
  animation: fadeInUp 1s ease forwards reverse;
}
.delay-200 { animation-delay: 0.2s; }
</style>
<!-- Hero Section -->
<section class="relative bg-pink-100 min-h-screen flex items-center justify-center overflow-hidden">
    <div class="container mx-auto px-6 md:px-12 text-center relative z-10">
        <h1 class="text-5xl md:text-6xl font-bold text-purple-700 mb-4 animate-fadeInDown">Donia <span class="text-pink-500">Kathleen's Luxe</span></h1>
        <p class="text-lg md:text-2xl text-purple-600 mb-8 animate-fadeInUp delay-200">Your Hair, Your Crown, Our Luxe 👑</p>
        <a href="tel:09163241865" class="inline-block bg-purple-700 text-white font-semibold px-8 py-4 rounded-lg shadow-lg hover:bg-pink-500 transition duration-500 animate-bounce">Call Now</a>
    </div>

    <!-- Decorative floating scrunchies images -->
    <img src="scrunchie1.jpg" alt="Scrunchie" class="absolute top-10 left-10 w-24 animate-floatSlow">
    <img src="scrunchie2.jpg" alt="Scrunchie" class="absolute bottom-10 right-10 w-28 animate-floatSlow delay-200">
</section>

<!-- Services Section -->
<section class="bg-white py-20">
    <div class="container mx-auto px-6 md:px-12 text-center">
        <h2 class="text-4xl font-bold text-purple-700 mb-12 animate-fadeInUp">Our Services</h2>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <div class="p-6 border rounded-lg shadow-lg hover:scale-105 transition-transform duration-500">
                <h3 class="text-xl font-semibold text-purple-700 mb-2">Scrunchies</h3>
            </div>
            <div class="p-6 border rounded-lg shadow-lg hover:scale-105 transition-transform duration-500">
                <h3 class="text-xl font-semibold text-purple-700 mb-2">Bonnet</h3>
            </div>
            <div class="p-6 border rounded-lg shadow-lg hover:scale-105 transition-transform duration-500">
                <h3 class="text-xl font-semibold text-purple-700 mb-2">Hair Clips</h3>
            </div>
            <div class="p-6 border rounded-lg shadow-lg hover:scale-105 transition-transform duration-500">
                <h3 class="text-xl font-semibold text-purple-700 mb-2">Bands & More</h3>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="bg-pink-50 py-20">
    <div class="container mx-auto px-6 md:px-12 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-purple-700 mb-6 animate-fadeInUp">Contact Us</h2>
        <p class="text-purple-600 mb-6 animate-fadeInUp delay-200">
            📞 09163241865 | 07050977252 <br>
            <a href="https://wa.me/2349163241865" class="text-pink-500 hover:underline">Chat on WhatsApp</a>
        </p>
    </div>
</section>

<?php include 'footer.php'; ?>
