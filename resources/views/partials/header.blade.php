<nav class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 bg-transparent">
  <div class="container-custom">
    <div class="flex items-center justify-between py-4">

      <!-- Logo -->
      <div class="flex items-center space-x-3">
        <img src="/assets/azure-logo.png"
             alt="Azure Dev"
             class="h-12 w-auto object-contain"> <!-- bigger logo, keeps aspect -->
      </div>

      <!-- Navbar Links -->
      <div class="hidden lg:flex items-center space-x-8">
        <button class=" font-bold hover:text-red-400 transition-colors duration-300">Home</button>
        <button class=" font-bold hover:text-red-400 transition-colors duration-300">Courses</button>
        <button class=" font-bold hover:text-red-400 transition-colors duration-300">About</button>
        <button class=" font-bold hover:text-red-400 transition-colors duration-300">Services</button>
        <button class=" font-bold hover:text-red-400 transition-colors duration-300">Pricing</button>
        <button class=" font-bold hover:text-red-400 transition-colors duration-300">Testimonials</button>
        <button class=" font-bold hover:text-red-400 transition-colors duration-300">FAQs</button>
        <button class=" font-bold hover:text-red-400 transition-colors duration-300">Blog</button>
        <button class=" font-bold hover:text-red-400 transition-colors duration-300">Contact</button>
      </div>

      <!-- CTA Button -->
      <div class="hidden lg:block">
        <button
          class="inline-flex items-center justify-center gap-2 rounded-md text-sm font-medium h-10 px-4 py-2 bg-primary text-primary-foreground hover:bg-primary-glow shadow-glow">
          Get Started
        </button>
      </div>

      <!-- Mobile Menu -->
      <button class="inline-flex items-center justify-center h-9 px-3 lg:hidden text-white rounded-md">
        <i class="fas fa-bars"></i>
      </button>
    </div>
  </div>
</nav>
