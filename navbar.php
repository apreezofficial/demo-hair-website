<nav class="bg-purple-700 text-white shadow-lg fixed w-full z-50">
    <div class="container mx-auto px-6 py-4 flex justify-between items-center">
        <a href="index.php" class="font-bold text-2xl hover:text-pink-500 transition duration-300">Donia Luxe</a>
        <ul class="hidden md:flex space-x-6">
            <li><a href="#hero" class="hover:text-pink-500 transition duration-300">Home</a></li>
            <li><a href="#services" class="hover:text-pink-500 transition duration-300">Services</a></li>
            <li><a href="#contact" class="hover:text-pink-500 transition duration-300">Contact</a></li>
        </ul>
        <div class="md:hidden">
            <button id="menu-btn" class="focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
    </div>
    <div id="mobile-menu" class="hidden md:hidden bg-purple-600">
        <ul class="flex flex-col items-center py-4 space-y-4">
            <li><a href="#hero" class="hover:text-pink-300 transition duration-300">Home</a></li>
            <li><a href="#services" class="hover:text-pink-300 transition duration-300">Services</a></li>
            <li><a href="#contact" class="hover:text-pink-300 transition duration-300">Contact</a></li>
        </ul>
    </div>
</nav>

<script>
const btn = document.getElementById('menu-btn');
const menu = document.getElementById('mobile-menu');

btn.addEventListener('click', () => {
    menu.classList.toggle('hidden');
});
</script>
