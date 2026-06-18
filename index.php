<?php
require_once 'includes/data.php';
require_once 'includes/schema.php';
$page_title = 'Best Multi-Specialty Hospital Gurugram | Akropolis';
$meta_description = 'Akropolis Super Speciality Hospital - NABH accredited multi-specialty hospital in Gurugram, Haryana. Expert doctors, advanced technology, 24×7 emergency care. Book appointment now!';
$canonical_url = '/';
$schema_blocks = [
    schemaWebSite(),
    schemaBreadcrumb([['name' => 'Home', 'url' => '/']]),
];
include 'includes/head.php';
?>

<!-- Emergency Bar -->
<div class="bg-[#EA580C] text-white py-2 px-4 text-center sticky top-0 z-50">
  <div class="container mx-auto flex items-center justify-center space-x-2">
    <?php echo getIcon('Phone', 'h-4 w-4'); ?>
    <span class="font-semibold text-sm md:text-base">
      Emergency 24×7: <?php echo CONTACT_INFO['emergency']; ?>
    </span>
  </div>
</div>

<!-- Header -->
<?php include 'includes/header-v2.php'; ?>

<main>
  <!-- Hero Section -->
  <!-- Hero Section (Redesigned Premium UI) -->
  <section class="hero-section relative min-h-screen bg-[#0B1120] overflow-hidden flex items-center">
    <!-- Animated Gradient Background Mesh -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
      <div class="absolute -top-[20%] -left-[10%] w-[50%] h-[50%] rounded-full bg-gradient-to-br from-[#1E3A8A]/40 to-transparent blur-[120px] hero-blob hero-blob-1"></div>
      <div class="absolute top-[20%] -right-[10%] w-[40%] h-[60%] rounded-full bg-gradient-to-bl from-[#EA580C]/20 to-[#1E3A8A]/20 blur-[100px] hero-blob hero-blob-2"></div>
      <div class="absolute -bottom-[20%] left-[20%] w-[60%] h-[50%] rounded-full bg-gradient-to-tr from-[#1E3A8A]/30 to-transparent blur-[120px] hero-blob"></div>
    </div>
    
    <!-- Subtle Grid Overlay -->
    <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PHBhdHRlcm4gaWQ9ImdyaWQiIHdpZHRoPSI0MCIgaGVpZ2h0PSI0MCIgcGF0dGVyblVuaXRzPSJ1c2VyU3BhY2VPblVzZSI+PHBhdGggZD0iTSAwIDEwIEwgNDAgMTAgTSAxMCAwIEwgMTAgNDAiIGZpbGw9Im5vbmUiIHN0cm9rZT0icmdiYSgyNTUsIDI1NSwgMjU1LCAwLjAzKSIgc3Ryb2tlLXdpZHRoPSIxIi8+PC9wYXR0ZXJuPjwvZGVmcz48cmVjdCB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBmaWxsPSJ1cmwoI2dyaWQpIi8+PC9zdmc+')] opacity-50"></div>

    <div class="container mx-auto px-4 pt-32 pb-24 relative z-10">
      <div class="grid lg:grid-cols-12 gap-12 items-center">
        
        <!-- Left Content -->
        <div class="lg:col-span-6 text-center lg:text-left hero-content">
          <!-- Trust Badge -->
          <div class="inline-flex items-center space-x-2 bg-white/5 border border-white/10 backdrop-blur-md px-5 py-2.5 rounded-full mb-8 float-slow shadow-[0_0_20px_rgba(30,58,138,0.3)]">
            <?php echo getIcon('Award', 'h-5 w-5 text-yellow-400'); ?>
            <span class="text-sm font-medium tracking-wide text-gray-200 uppercase letter-spacing">NABH Accredited Hospital</span>
          </div>

          <!-- Main Headline -->
          <h1 class="text-5xl lg:text-7xl font-extrabold text-white leading-[1.1] mb-6 font-heading tracking-tight">
            Your Health,<br />
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#3b82f6] to-[#60a5fa] drop-shadow-sm">Our Priority</span>
          </h1>

          <!-- Subheadline -->
          <p class="text-lg lg:text-xl text-gray-400 mb-10 leading-relaxed max-w-2xl mx-auto lg:mx-0 font-light">
            Experience world-class healthcare at Akropolis Hospital. Driven by cutting-edge technology and unparalleled medical expertise.
          </p>

          <!-- CTA Buttons -->
          <div class="flex flex-col sm:flex-row gap-5 justify-center lg:justify-start mb-12">
            <a
              href="/contact"
              class="bg-gradient-to-r from-[#1E3A8A] to-[#1e40af] hover:from-[#1e40af] hover:to-[#1e3a8a] text-white px-8 py-4 rounded-xl font-semibold text-lg transition-all duration-300 transform hover:scale-105 flex items-center justify-center space-x-3 shadow-[0_10px_30px_-10px_rgba(30,58,138,0.8)] border border-blue-500/30 group"
            >
              <?php echo getIcon('Calendar', 'h-5 w-5 group-hover:rotate-12 transition-transform'); ?>
              <span>Book Appointment</span>
            </a>
            <a
              href="tel:<?php echo CONTACT_INFO['emergency']; ?>"
              class="bg-gradient-to-r from-[#EA580C] to-[#c2410c] hover:from-[#c2410c] hover:to-[#ea580c] text-white px-8 py-4 rounded-xl font-semibold text-lg transition-all duration-300 transform hover:scale-105 flex items-center justify-center space-x-3 shadow-[0_10px_30px_-10px_rgba(234,88,12,0.8)] border border-orange-500/30 group emergency-glow"
            >
              <div class="relative">
                <?php echo getIcon('Phone', 'h-5 w-5 relative z-10'); ?>
                <div class="absolute inset-0 bg-white/20 rounded-full animate-ping"></div>
              </div>
              <span><?php echo CONTACT_INFO['emergency']; ?></span>
            </a>
          </div>

        </div>

        <!-- Right Image & Overlapping Cards -->
        <div class="lg:col-span-6 relative hero-image mt-10 lg:mt-0">
          
          <!-- Main Hero Image with Glass Border -->
          <div class="relative rounded-3xl p-2 glass-premium shadow-2xl z-10 transform lg:rotate-2 hover:rotate-0 transition-transform duration-700">
            <div class="overflow-hidden rounded-2xl relative group h-[450px] lg:h-[600px]">
              <img
                src="https://brandingpioneers.co.in/akropolis/hero-banner.webp"
                alt="Modern Hospital Building"
                class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-1000"
              />
              <div class="absolute inset-0 bg-gradient-to-t from-[#0B1120] via-transparent to-transparent opacity-80"></div>
            </div>
          </div>

          <!-- Overlapping Card 1: 24/7 Emergency -->
          <div class="absolute -left-6 top-12 lg:-left-12 lg:top-20 z-20 glass-premium rounded-2xl p-5 shadow-2xl float-delay-1 float-slow border-l-4 border-l-[#EA580C]">
            <div class="flex items-center space-x-4">
              <div class="bg-gradient-to-br from-[#EA580C] to-[#c2410c] p-3 rounded-xl shadow-inner">
                <?php echo getIcon('Activity', 'h-6 w-6 text-white'); ?>
              </div>
              <div>
                <div class="text-xl font-bold text-white tracking-tight">24/7</div>
                <div class="text-xs text-gray-300 uppercase tracking-wider font-semibold">Emergency Care</div>
              </div>
            </div>
          </div>

          <!-- Overlapping Card 2: 5K+ Treatments -->
          <div class="absolute -right-4 top-1/2 -translate-y-1/2 z-20 glass-premium rounded-2xl p-5 shadow-2xl float-delay-2 float-slow-reverse border-l-4 border-l-[#3b82f6]">
            <div class="flex items-center space-x-4">
              <div class="bg-gradient-to-br from-[#1E3A8A] to-[#3b82f6] p-3 rounded-xl shadow-inner">
                <?php echo getIcon('Heart', 'h-6 w-6 text-white'); ?>
              </div>
              <div>
                <div class="text-xl font-bold text-white tracking-tight">5,000+</div>
                <div class="text-xs text-gray-300 uppercase tracking-wider font-semibold">Treatments</div>
              </div>
            </div>
          </div>

          <!-- Overlapping Card 3: Expert Doctors -->
          <div class="absolute -left-2 -bottom-6 lg:left-10 lg:-bottom-10 z-20 glass-premium rounded-2xl p-5 shadow-2xl float-delay-3 float-gentle border-l-4 border-l-green-500">
            <div class="flex items-center space-x-4">
              <div class="bg-gradient-to-br from-green-500 to-green-600 p-3 rounded-xl shadow-inner">
                <?php echo getIcon('Users', 'h-6 w-6 text-white'); ?>
              </div>
              <div>
                <div class="flex -space-x-2 mb-1">
                  <img class="w-8 h-8 rounded-full border-2 border-[#0B1120]" src="https://brandingpioneers.co.in/akropolis/doctors/dr-anu-nagpal.webp" alt="Dr. Anu" />
                  <img class="w-8 h-8 rounded-full border-2 border-[#0B1120]" src="https://brandingpioneers.co.in/akropolis/doctors/dr-madan-lal.webp" alt="Dr. Madan" />
                  <div class="w-8 h-8 rounded-full border-2 border-[#0B1120] bg-gray-800 flex items-center justify-center text-xs font-bold text-white">+48</div>
                </div>
                <div class="text-xs text-gray-300 uppercase tracking-wider font-semibold mt-1">Expert Doctors</div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <!-- Bottom Wave Separator -->
    <div class="absolute bottom-0 left-0 right-0 transform translate-y-[1px]">
      <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 120L60 110C120 100 240 80 360 70C480 60 600 60 720 65C840 70 960 80 1080 85C1200 90 1320 90 1380 90L1440 90V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0Z" fill="#F9FAFB" />
      </svg>
    </div>
  </section>

  <!-- Trust Signals Section -->
  <section class="py-12 lg:py-16 bg-gray-50 section-fade">
    <div class="container mx-auto px-4">
      <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 lg:gap-6">
        <?php foreach (TRUST_SIGNALS as $index => $signal): ?>
          <div class="trust-card bg-white rounded-xl p-4 lg:p-6 text-center shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
            <div class="flex justify-center mb-4 trust-icon">
              <div class="bg-[#1E3A8A]/10 p-2 lg:p-3 rounded-full">
                <?php echo getIcon($signal['icon'], 'h-6 w-6 lg:h-8 lg:w-8 text-[#1E3A8A]'); ?>
              </div>
            </div>
            <h3 class="font-bold text-gray-900 mb-2 text-xs lg:text-base">
              <?php echo $signal['title']; ?>
            </h3>
            <p class="text-gray-600 text-xs lg:text-sm leading-tight lg:leading-relaxed">
              <?php echo $signal['description']; ?>
            </p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- About Section -->
  <section id="about" class="py-20 bg-white relative overflow-hidden section-fade">
    <div class="container mx-auto px-4 relative z-10">
      <div class="grid lg:grid-cols-2 gap-16 items-center">
        <!-- Image Section -->
        <div class="relative floating-card">
          <div class="relative overflow-hidden rounded-3xl shadow-2xl img-zoom">
            <img
              src="https://brandingpioneers.co.in/akropolis/help-desk-img.webp"
              alt="Modern Hospital Building"
              class="w-full h-[500px] object-cover"
            />
          </div>
        </div>

        <!-- Content Section -->
        <div>
          <div class="mb-8">
            <div class="inline-flex items-center space-x-2 bg-[#1E3A8A]/10 text-[#1E3A8A] px-4 py-2 rounded-full text-sm font-medium mb-6">
              <?php echo getIcon('Heart', 'h-4 w-4'); ?>
              <span>About Akropolis</span>
            </div>
            <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 leading-tight mb-6">
              Committed to
              <span class="text-[#1E3A8A]"> Healthcare Excellence</span>
            </h2>
            <p class="text-gray-600 text-lg leading-relaxed">
              Akropolis Hospital is a top choice for your health. We offer great medical care with modern tools. Our hospital is NABH accredited. This means we meet high standards to keep you safe and healthy.
            </p>
          </div>

          <div class="flex flex-col sm:flex-row gap-4">
            <a
              href="/about"
              class="bg-[#EA580C] hover:bg-[#C2410C] text-white px-8 py-4 rounded-xl font-semibold text-lg transition-all duration-300 transform hover:scale-105 flex items-center space-x-2 w-fit shadow-lg cta-glow"
            >
              <span>Learn More About Us</span>
              <?php echo getIcon('ArrowRight', 'h-5 w-5'); ?>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Departments Section -->
  <section id="departments" class="py-20 bg-gray-50 section-fade">
    <div class="container mx-auto px-4">
      <div class="text-center mb-16">
        <div class="inline-flex items-center space-x-2 bg-[#1E3A8A]/10 text-[#1E3A8A] px-4 py-2 rounded-full text-sm font-medium mb-6">
          <?php echo getIcon('Heart', 'h-4 w-4'); ?>
          <span>Our Departments</span>
        </div>
        <h3 class="text-4xl lg:text-5xl font-bold text-gray-900 mt-2 mb-6">
          World-Class <span class="text-[#1E3A8A]">Medical Excellence</span>
        </h3>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <?php
        $featuredDepts = [
            ['id' => 'cardiology', 'page' => 'cardiology.php', 'title' => 'Cardiology', 'description' => 'Advanced heart care with state-of-the-art cardiac procedures.', 'icon' => 'Heart', 'image' => 'https://brandingpioneers.co.in/akropolis/Cardiology.jpg'],
            ['id' => 'neurology', 'page' => 'neurology.php', 'title' => 'Neurology', 'description' => 'Comprehensive brain and nervous system care.', 'icon' => 'Brain', 'image' => 'https://images.pexels.com/photos/3779448/pexels-photo-3779448.jpeg?auto=compress&cs=tinysrgb&w=800'],
            ['id' => 'nephrology', 'page' => 'nephrology.php', 'title' => 'Nephrology', 'description' => 'Comprehensive kidney care and dialysis services.', 'icon' => 'Droplets', 'image' => 'https://brandingpioneers.co.in/akropolis/Nephrology.webp'],
            ['id' => 'orthopedics', 'page' => 'orthopedics.php', 'title' => 'Orthopedics', 'description' => 'Expert bone, joint, and muscle care.', 'icon' => 'Bone', 'image' => 'https://brandingpioneers.co.in/akropolis/Orthopaedics.jpg'],
            ['id' => 'pediatrics', 'page' => 'pediatrics.php', 'title' => 'Pediatrics', 'description' => 'Specialized care for newborns and children.', 'icon' => 'Baby', 'image' => 'https://brandingpioneers.co.in/akropolis/NICU & Pediatrics.webp'],
            ['id' => 'oncology', 'page' => 'oncology.php', 'title' => 'Oncology', 'description' => 'Comprehensive cancer care and treatment.', 'icon' => 'Activity', 'image' => 'https://brandingpioneers.co.in/akropolis/Oncology.webp']
        ];

        foreach ($featuredDepts as $dept):
        ?>
          <div class="department-card bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100 overflow-hidden">
            <div class="relative h-48 overflow-hidden">
              <img width="800" height="600" src="<?php echo $dept['image']; ?>" alt="<?php echo $dept['title']; ?>" class="w-full h-full object-cover" />
              <div class="absolute top-4 left-4 bg-white/95 backdrop-blur-sm p-3 rounded-xl shadow-lg">
                <?php echo getIcon($dept['icon'], 'h-6 w-6 text-[#1E3A8A]'); ?>
              </div>
            </div>
            <div class="p-6">
              <h3 class="text-xl font-bold text-gray-900 mb-2"><?php echo $dept['title']; ?></h3>
              <p class="text-gray-600 text-sm mb-4"><?php echo $dept['description']; ?></p>
              <a href="/<?php echo $dept['page']; ?>" class="inline-flex items-center space-x-2 bg-[#1E3A8A] hover:bg-[#1E40AF] text-white px-4 py-2 rounded-lg font-semibold text-sm transition-all duration-300">
                <span>Learn More</span>
                <?php echo getIcon('ArrowRight', 'h-4 w-4'); ?>
              </a>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

      <div class="text-center mt-16">
        <a href="/departments" class="bg-[#EA580C] hover:bg-[#C2410C] text-white px-8 py-4 rounded-xl font-semibold text-lg transition-all duration-300 transform hover:scale-105 flex items-center space-x-2 w-fit mx-auto shadow-lg cta-glow">
          <span>View All Departments</span>
          <?php echo getIcon('ArrowRight', 'h-5 w-5'); ?>
        </a>
      </div>
    </div>
  </section>

  <!-- Doctors Section -->
  <section id="doctors" class="py-20 bg-white overflow-hidden section-fade">
    <div class="container mx-auto px-4">
      <div class="flex flex-col md:flex-row justify-between items-end mb-12">
        <div class="max-w-2xl">
          <div class="inline-flex items-center space-x-2 bg-[#1E3A8A]/10 text-[#1E3A8A] px-4 py-2 rounded-full text-sm font-medium mb-6">
            <?php echo getIcon('Users', 'h-4 w-4'); ?>
            <span>Expert Team</span>
          </div>
          <h3 class="text-4xl lg:text-5xl font-bold text-gray-900 leading-tight">
            Consult Our <span class="text-[#1E3A8A]">Specialist Doctors</span>
          </h3>
          <p class="text-gray-600 mt-4 text-lg">
            Our expert doctors have years of training. They work hard to give you the best care possible.
          </p>
        </div>
        <div class="flex space-x-4 mt-8 md:mt-0">
          <button class="doctors-prev p-3 rounded-full border-2 border-gray-100 text-gray-400 hover:border-[#1E3A8A] hover:text-[#1E3A8A] transition-all duration-300">
            <?php echo getIcon('ChevronLeft', 'h-6 w-6'); ?>
          </button>
          <button class="doctors-next p-3 rounded-full border-2 border-gray-100 text-gray-400 hover:border-[#1E3A8A] hover:text-[#1E3A8A] transition-all duration-300">
            <?php echo getIcon('ChevronRight', 'h-6 w-6'); ?>
          </button>
        </div>
      </div>

      <div class="doctors-slider relative">
        <div class="doctors-track flex transition-transform duration-500 ease-out">
          <?php foreach ($doctors as $doctor): ?>
            <div class="doctor-card-wrapper flex-shrink-0 w-full md:w-1/2 lg:w-1/3 px-4">
              <div class="doctor-card bg-white rounded-3xl shadow-lg border border-gray-100 overflow-hidden hover:shadow-2xl transition-all duration-300 group">
                <div class="relative h-80 overflow-hidden">
                  <img
                    src="<?php echo htmlspecialchars($doctor['image']); ?>"
                    alt="<?php echo htmlspecialchars($doctor['name']); ?>"
                    class="w-full h-full object-cover"
                  />
                  <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                  <div class="absolute bottom-4 left-4 right-4 translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                    <a href="/doctors/<?php echo $doctor['id']; ?>" class="w-full bg-white/95 backdrop-blur-sm text-[#1E3A8A] py-3 rounded-xl font-bold text-center block shadow-lg">
                      View Profile
                    </a>
                  </div>
                </div>
                <div class="p-6 text-center">
                  <h3 class="text-xl font-bold text-gray-900 mb-1"><?php echo htmlspecialchars($doctor['name']); ?></h3>
                  <p class="text-[#1E3A8A] font-semibold text-sm mb-4"><?php echo htmlspecialchars($doctor['specialization']); ?></p>
                  <div class="flex items-center justify-center space-x-2 text-gray-500 text-sm mb-6">
                    <?php echo getIcon('Award', 'h-4 w-4'); ?>
                    <span><?php echo htmlspecialchars($doctor['experience']); ?> Experience</span>
                  </div>
                  <a href="tel:<?php echo CONTACT_INFO['phone']; ?>" class="inline-flex items-center space-x-2 text-[#EA580C] font-bold hover:text-[#C2410C] transition-colors">
                    <?php echo getIcon('Calendar', 'h-4 w-4'); ?>
                    <span>Book Appointment</span>
                  </a>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
        
        <!-- Slider Indicators -->
        <div class="flex justify-center space-x-2 mt-12">
          <?php 
          $numIndicators = ceil(count($doctors) / 3);
          for($i=0; $i < $numIndicators; $i++): 
          ?>
            <button class="doctor-indicator w-3 h-3 rounded-full bg-gray-200 transition-all duration-300 <?php echo $i===0 ? 'active bg-[#1E3A8A] w-8' : ''; ?>"></button>
          <?php endfor; ?>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials Section -->
  <section class="py-20 bg-gray-50 relative overflow-hidden section-fade">
    <!-- Background Accents -->
    <div class="absolute top-0 right-0 w-96 h-96 bg-blue-100/30 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2"></div>
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-green-100/30 rounded-full blur-3xl translate-y-1/2 -translate-x-1/2"></div>

    <div class="container mx-auto px-4 relative z-10">
      <div class="text-center mb-16">
        <div class="inline-flex items-center space-x-2 bg-[#1E3A8A]/10 text-[#1E3A8A] px-4 py-2 rounded-full text-sm font-medium mb-6">
          <?php echo getIcon('Quote', 'h-4 w-4'); ?>
          <span>Patient Stories</span>
        </div>
        <h3 class="text-4xl lg:text-5xl font-bold text-gray-900 leading-tight">
          Heartfelt Journeys of <span class="text-[#1E3A8A]">Healing & Hope</span>
        </h3>
      </div>

      <div class="grid lg:grid-cols-2 gap-12 items-center">
        <!-- Video Testimonial Slider -->
        <div class="testimonials-slider relative">
          <?php foreach ($testimonials as $index => $testimonial): ?>
            <div class="testimonial-card <?php echo $index === 0 ? 'block' : 'hidden'; ?> animate-fade-in">
              <div class="relative rounded-3xl overflow-hidden shadow-2xl group aspect-video">
                <img width="800" height="600" 
                  src="<?php echo $testimonial['videoThumbnail']; ?>" 
                  alt="<?php echo $testimonial['patientName']; ?>"
                  class="w-full h-full object-cover"
                />
                <div class="absolute inset-0 bg-black/40 flex items-center justify-center">
                  <button 
                    onclick="openVideoModal('https://www.youtube.com/embed/<?php 
                      preg_match('/vi\/([^\/]+)\//', $testimonial['videoThumbnail'], $matches);
                      echo $matches[1] ?? ''; 
                    ?>')"
                    class="w-20 h-20 bg-white rounded-full flex items-center justify-center text-[#1E3A8A] shadow-2xl transform transition-all duration-300 group-hover:scale-110 hover:bg-[#1E3A8A] hover:text-white"
                  >
                    <?php echo getIcon('Play', 'h-8 w-8 ml-1'); ?>
                  </button>
                </div>
              </div>
              
              <div class="mt-8 bg-white p-8 rounded-2xl shadow-lg border border-gray-100 relative">
                <div class="absolute -top-6 left-8 bg-[#1E3A8A] text-white p-4 rounded-xl shadow-lg">
                  <?php echo getIcon('Quote', 'h-6 w-6'); ?>
                </div>
                <p class="text-gray-600 text-lg italic leading-relaxed mb-6 pt-4">
                  "<?php echo $testimonial['testimonial']; ?>"
                </p>
                <div class="flex items-center justify-between">
                  <div>
                    <h4 class="font-bold text-gray-900 text-xl"><?php echo $testimonial['patientName']; ?></h4>
                    <p class="text-[#1E3A8A] font-medium"><?php echo $testimonial['condition']; ?></p>
                  </div>
                  <div class="flex text-yellow-400">
                    <?php for($i=0; $i<5; $i++) echo getIcon('Star', 'h-5 w-5 fill-current'); ?>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>

          <!-- Slider Controls -->
          <div class="flex items-center space-x-6 mt-8">
            <div class="flex space-x-2">
              <button class="testimonial-prev p-2 rounded-lg bg-white shadow-md text-gray-600 hover:text-[#1E3A8A] transition-colors">
                <?php echo getIcon('ChevronLeft', 'h-6 w-6'); ?>
              </button>
              <button class="testimonial-next p-2 rounded-lg bg-white shadow-md text-gray-600 hover:text-[#1E3A8A] transition-colors">
                <?php echo getIcon('ChevronRight', 'h-6 w-6'); ?>
              </button>
            </div>
            <div class="flex space-x-2 testimonial-indicators">
              <?php foreach ($testimonials as $index => $t): ?>
                <button class="testimonial-indicator w-2 h-2 rounded-full <?php echo $index === 0 ? 'bg-[#1E3A8A] w-6' : 'bg-gray-300'; ?> transition-all duration-300"></button>
              <?php endforeach; ?>
            </div>
          </div>
        </div>

        <!-- Trust & Stats Column -->
        <div class="lg:pl-12">
          <h3 class="text-3xl font-bold text-gray-900 mb-8">Why Thousands Trust Us?</h3>
          <div class="space-y-6">
            <div class="flex items-start space-x-4 p-6 bg-white rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition-all duration-300">
              <div class="bg-blue-50 p-3 rounded-xl">
                <?php echo getIcon('Award', 'h-8 w-8 text-[#1E3A8A]'); ?>
              </div>
              <div>
                <h4 class="font-bold text-gray-900 mb-1 text-lg">NABH Accredited</h4>
                <p class="text-gray-600">This is a top mark for quality care in India. It means you are safe with us.</p>
              </div>
            </div>
            <div class="flex items-start space-x-4 p-6 bg-white rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition-all duration-300">
              <div class="bg-green-50 p-3 rounded-xl">
                <?php echo getIcon('Heart', 'h-8 w-8 text-green-600'); ?>
              </div>
              <div>
                <h4 class="font-bold text-gray-900 mb-1 text-lg">Patient-First Approach</h4>
                <p class="text-gray-600">We put you first. We care for you with kindness, honesty, and great medical skill.</p>
              </div>
            </div>
            <div class="flex items-start space-x-4 p-6 bg-white rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition-all duration-300">
              <div class="bg-orange-50 p-3 rounded-xl">
                <?php echo getIcon('Zap', 'h-8 w-8 text-[#EA580C]'); ?>
              </div>
              <div>
                <h4 class="font-bold text-gray-900 mb-1 text-lg">24/7 Response</h4>
                <p class="text-gray-600">We are always ready. Our emergency, heart, and trauma teams work all day and night.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Insurance Section -->
  <section class="py-16 bg-white overflow-hidden section-fade">
    <div class="container mx-auto px-4">
      <div class="text-center mb-12">
        <h3 class="text-3xl font-bold text-gray-900">Our Insurance & TPA Partners</h3>
        <p class="text-gray-600 mt-2">Cashless treatment facility available with leading insurance providers</p>
      </div>

      <div class="insurance-slider relative">
        <div class="insurance-track flex items-center animate-scroll">
          <!-- Double the list for seamless loop -->
          <?php $allLogos = array_merge($insuranceLogos, $insuranceLogos); ?>
          <?php foreach ($allLogos as $partner): ?>
            <div class="partner-card flex-shrink-0 w-48 px-4 flex items-center justify-center grayscale hover:grayscale-0 transition-all duration-300">
              <img width="200" height="100" 
                src="<?php echo $partner['logo']; ?>" 
                alt="<?php echo $partner['name']; ?>"
                class="max-h-16 w-auto object-contain"
                loading="lazy"
              />
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>

  <!-- Latest News / Blog Section -->
  <section class="py-20 bg-gray-50 section-fade">
    <div class="container mx-auto px-4">
      <div class="flex flex-col md:flex-row justify-between items-end mb-12">
        <div class="max-w-2xl">
          <div class="inline-flex items-center space-x-2 bg-[#1E3A8A]/10 text-[#1E3A8A] px-4 py-2 rounded-full text-sm font-medium mb-6">
            <?php echo getIcon('FileText', 'h-4 w-4'); ?>
            <span>Health Insights</span>
          </div>
          <h3 class="text-4xl lg:text-5xl font-bold text-gray-900">Latest from <span class="text-[#1E3A8A]">Our Blog</span></h3>
        </div>
        <a href="/" class="text-[#1E3A8A] font-bold flex items-center space-x-2 hover:translate-x-2 transition-transform mt-6 md:mt-0">
          <span>Read All Articles</span>
          <?php echo getIcon('ArrowRight', 'h-5 w-5'); ?>
        </a>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <?php foreach (array_slice($blogPosts, 0, 3) as $post): ?>
          <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden group hover:shadow-2xl transition-all duration-300">
            <div class="relative h-56 overflow-hidden">
              <img width="800" height="600" 
                src="<?php echo $post['image']; ?>" 
                alt="<?php echo $post['title']; ?>"
                class="w-full h-full object-cover"
              />
              <div class="absolute top-4 left-4 bg-[#1E3A8A] text-white px-3 py-1 rounded-full text-xs font-bold">
                <?php echo $post['category']; ?>
              </div>
            </div>
            <div class="p-6">
              <div class="flex items-center space-x-4 text-sm text-gray-500 mb-3">
                <span class="flex items-center space-x-1">
                  <?php echo getIcon('Calendar', 'h-4 w-4'); ?>
                  <span><?php echo $post['date']; ?></span>
                </span>
                <span class="flex items-center space-x-1">
                  <?php echo getIcon('Clock', 'h-4 w-4'); ?>
                  <span><?php echo $post['readTime']; ?></span>
                </span>
              </div>
              <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-[#1E3A8A] transition-colors">
                <?php echo $post['title']; ?>
              </h3>
              <p class="text-gray-600 text-sm mb-6 line-clamp-2">
                <?php echo $post['excerpt']; ?>
              </p>
              <a href="/" class="inline-flex items-center space-x-2 text-[#EA580C] font-bold hover:text-[#C2410C] transition-colors">
                <span>Read More</span>
                <?php echo getIcon('ArrowRight', 'h-4 w-4'); ?>
              </a>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
</main>

<!-- Footer -->
<?php include 'includes/footer.php'; ?>

<!-- Scripts -->
<?php include 'includes/scripts.php'; ?>