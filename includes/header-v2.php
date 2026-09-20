<?php
// Header Component v2 - Fixed Dropdown
// Note: Emergency bar is included in each page template
?>
<header class="bg-white shadow-lg sticky top-8 z-50">
  <div class="container mx-auto px-4">
    <div class="flex items-center justify-between h-16 lg:h-20">
      <!-- Logo -->
      <div class="flex items-center space-x-3 h-full">
        <a href="/" class="nav-link flex items-center h-full" data-page="home">
          <img
            src="https://brandingpioneers.co.in/akropolis/WhatsApp%20Image%202025-08-16%20at%2012.12.12_9a8761f4.jpg"
            alt="Akropolis Hospital Logo"
            class="h-12 lg:h-16 w-auto"
          />
        </a>
      </div>

      <!-- Desktop Navigation -->
      <nav class="hidden lg:flex items-stretch h-full space-x-8">
        <?php
        $navigation = [
            ['name' => 'Home', 'href' => '/', 'page' => 'home'],
            ['name' => 'About', 'href' => '#about', 'page' => 'about'],
            ['name' => 'Departments', 'href' => '#departments', 'page' => 'departments'],
            ['name' => 'Doctors', 'href' => '#doctors', 'page' => 'doctors'],
            ['name' => 'Contact', 'href' => '#contact', 'page' => 'contact']
        ];

        foreach ($navigation as $item):
        ?>
          <div class="relative h-full flex items-center nav-dropdown-container">
            <a
              href="<?php echo $item['href']; ?>"
              class="nav-link h-full px-2 text-gray-700 hover:text-[#328CCB] font-medium transition-colors duration-200 flex items-center space-x-1"
              data-page="<?php echo $item['page'] ?? ''; ?>"
            >
              <span><?php echo $item['name']; ?></span>
            </a>
          </div>
        <?php endforeach; ?>
      </nav>

      <!-- Desktop CTAs -->
      <div class="hidden lg:flex items-center space-x-4">
        <a href="tel:<?php echo CONTACT_INFO['emergency']; ?>" class="bg-[#D66C43] hover:bg-[#c55a36] text-white px-4 py-2 rounded-lg font-semibold transition-colors duration-200 flex items-center space-x-2 emergency-btn glow-hover-secondary">
          <?php echo getIcon('Phone', 'h-4 w-4'); ?>
          <span>Emergency</span>
        </a>
      </div>

      <!-- Mobile Menu Button -->
      <button class="mobile-menu-btn lg:hidden p-2 text-[#328CCB]" onclick="toggleMobileMenu()" aria-label="Toggle Menu">
        <?php echo getIcon('Menu', 'h-7 w-7'); ?>
      </button>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="mobile-menu closed lg:hidden py-4 border-t hidden">
      <nav class="space-y-4">
        <?php foreach ($navigation as $item): ?>
          <a href="<?php echo $item['href']; ?>" onclick="toggleMobileMenu()" class="nav-link block text-gray-700 hover:text-[#328CCB] font-medium py-2" data-page="<?php echo $item['page'] ?? ''; ?>"><?php echo $item['name']; ?></a>
        <?php endforeach; ?>
        <div class="pt-4 space-y-3">
          <a href="tel:<?php echo CONTACT_INFO['emergency']; ?>" class="w-full bg-[#D66C43] hover:bg-[#c55a36] text-white px-4 py-3 rounded-lg font-semibold transition-colors duration-200 flex items-center justify-center space-x-2 emergency-glow">
            <?php echo getIcon('Phone', 'h-4 w-4'); ?>
            <span>Emergency Services</span>
          </a>
          <a href="#contact" onclick="toggleMobileMenu()" class="nav-link w-full bg-[#328CCB] hover:bg-[#2a7bb5] text-white px-4 py-3 rounded-lg font-semibold transition-colors duration-200 flex items-center justify-center space-x-2" data-page="contact">
            <?php echo getIcon('Calendar', 'h-4 w-4'); ?>
            <span>Book Appointment</span>
          </a>
        </div>
      </nav>
    </div>
  </div>
</header>

<style>
.nav-dropdown-container { position: relative; }
.dropdown-panel { position: absolute; top: 100%; left: 50%; transform: translateX(-50%); z-index: 100; display: none; }
.nav-dropdown-container:hover .dropdown-panel { display: block; }
</style>

<script>
function toggleMobileMenu() {
    const menu = document.getElementById('mobile-menu');
    menu.classList.toggle('hidden');
    menu.classList.toggle('open');
    menu.classList.toggle('closed');
}
function toggleMobileDeptMenu() {
    const deptMenu = document.getElementById('mobile-dept-menu');
    const chevron = document.querySelector('.dept-chevron');
    deptMenu.classList.toggle('hidden');
    if (chevron) { chevron.classList.toggle('rotate-180'); }
}
</script>
