<?php include 'navbar.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Donia Kathleen's Luxe - Your Hair, Your Crown, Our Luxe. Premium hair accessories including scrunchies, bonnets, hair clips, and more.">
  <meta name="keywords" content="Hair Accessories, Scrunchies, Hair Clips, Bonnet, Luxe Hair Products, Donia Kathleen">
  <meta name="author" content="Donia Kathleen's Luxe">
  <title>Donia Kathleen's Luxe | Your Hair, Your Crown</title>
  <link rel="icon" href="favicon.svg" type="image/svg+xml">
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    .animate-floatSlow {
      animation: floatSlow 6s ease-in-out infinite alternate;
    }
    @keyframes floatSlow {
      0% { transform: translateY(0); }
      100% { transform: translateY(-20px); }
    }
  </style>
</head>
<body class="bg-gradient-to-b from-pink-50 to-yellow-50 text-gray-800 font-sans">

  <!-- Hero Section -->
  <header class="relative bg-white shadow-md overflow-hidden">
    <div class="container mx-auto px-6 py-16 text-center">
      <h1 class="text-4xl md:text-6xl font-bold text-pink-700">Donia Kathleen's Luxe</h1>
      <p class="mt-4 text-lg md:text-2xl">Your Hair, Your Crown, Our Luxe 👑</p>
      <a href="tel:09163241865" class="mt-6 inline-block bg-pink-600 text-white px-6 py-3 rounded-full shadow-lg hover:bg-pink-700 transition">Call Now</a>
    </div>

    <!-- Decorative floating scrunchies -->
    <img src="scrunchie1.jpg" onerror="this.onerror=null; this.src='scrunchie-icon.svg';" alt="Scrunchie" class="absolute top-10 left-10 w-24 animate-floatSlow">
    <img src="scrunchie2.jpg" onerror="this.onerror=null; this.src='scrunchie-icon.svg';" alt="Scrunchie" class="absolute bottom-10 right-10 w-28 animate-floatSlow delay-200">
  </header>

  <!-- Services Section -->
  <section class="py-20 bg-white">
    <div class="container mx-auto px-6 text-center">
      <h2 class="text-3xl md:text-4xl font-bold text-pink-600 mb-10">Our Services</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">

        <div class="bg-pink-50 p-6 rounded-xl shadow hover:shadow-xl transition">
          <img src="scrunchie1.jpg" onerror="this.onerror=null; this.src='scrunchie-icon.svg';" alt="Scrunchies" class="mx-auto mb-4 w-24">
          <h3 class="text-xl font-semibold">Scrunchies</h3>
          <p class="mt-2 text-gray-600">Premium hair scrunchies for all hair types.</p>
        </div>

        <div class="bg-yellow-50 p-6 rounded-xl shadow hover:shadow-xl transition">
          <img src="bonnet.jpg" onerror="this.onerror=null; this.src='bonnet-icon.svg';" alt="Bonnet" class="mx-auto mb-4 w-24">
          <h3 class="text-xl font-semibold">Bonnets</h3>
          <p class="mt-2 text-gray-600">Protect your hair in style while you sleep.</p>
        </div>

        <div class="bg-green-50 p-6 rounded-xl shadow hover:shadow-xl transition">
          <img src="clip.jpg" onerror="this.onerror=null; this.src='clip-icon.svg';" alt="Hair Clips" class="mx-auto mb-4 w-24">
          <h3 class="text-xl font-semibold">Hair Clips</h3>
          <p class="mt-2 text-gray-600">Elegant and practical hair clips for every occasion.</p>
        </div>

        <div class="bg-purple-50 p-6 rounded-xl shadow hover:shadow-xl transition">
          <img src="band.jpg" onerror="this.onerror=null; this.src='band-icon.svg';" alt="Bands & More" class="mx-auto mb-4 w-24">
          <h3 class="text-xl font-semibold">Bands & More</h3>
          <p class="mt-2 text-gray-600">Fashionable hair bands and accessories to complete your look.</p>
        </div>

      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section class="py-20 bg-gradient-to-r from-pink-100 via-yellow-100 to-pink-100">
    <div class="container mx-auto px-6 text-center">
      <h2 class="text-3xl md:text-4xl font-bold text-pink-700 mb-6">Contact Us</h2>
      <p class="text-lg md:text-xl mb-4">📞 09163241865 | 07050977252</p>
      <a href="https://wa.me/2349163241865" class="inline-block bg-green-500 text-white px-6 py-3 rounded-full shadow-lg hover:bg-green-600 transition">Chat on WhatsApp</a>
    </div>
  </section>

<?php include 'footer.php'; ?>

</body>
</html>
