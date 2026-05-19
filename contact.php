<?php
require_once 'includes/data.php';
$page_title = 'Contact Us | Akropolis Super Speciality Hospital';
include 'includes/head.php';
?>

<!-- Emergency Bar -->
<div class="bg-[#D66C43] text-white py-2 px-4 text-center sticky top-0 z-50">
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
  <section class="relative bg-gradient-to-r from-[#328CCB] to-[#2a7bb5] text-white overflow-hidden">
    <div
      class="absolute inset-0 bg-cover bg-center bg-no-repeat"
      style="background-image: url('https://images.pexels.com/photos/236380/pexels-photo-236380.jpeg?auto=compress&cs=tinysrgb&w=1600');"
    >
      <div class="absolute inset-0 bg-[#328CCB] bg-opacity-75"></div>
    </div>

    <div class="relative container mx-auto px-4 py-20 lg:py-32">
      <div class="max-w-4xl mx-auto text-center">
        <div class="flex items-center justify-center space-x-2 mb-6">
          <?php echo getIcon('Phone', 'h-6 w-6 text-yellow-400'); ?>
          <span class="text-yellow-400 font-semibold">Get in Touch</span>
        </div>

        <h1 class="text-4xl lg:text-6xl font-bold mb-6 leading-tight">
          Contact Akropolis
          <span class="block">Super Speciality Hospital</span>
        </h1>

        <p class="text-xl lg:text-2xl mb-8 text-blue-100 max-w-3xl mx-auto leading-relaxed">
          We're here to help you with appointments, emergency services, and all your healthcare needs.
        </p>
      </div>
    </div>
  </section>

  <!-- Book Appointment CTA -->
  <section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
      <div class="text-center mb-12">
        <div class="inline-flex items-center space-x-2 bg-[#328CCB]/10 text-[#328CCB] px-4 py-2 rounded-full text-sm font-medium mb-6">
          <?php echo getIcon('Calendar', 'h-4 w-4'); ?>
          <span>Book Appointment</span>
        </div>
        <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-6">
          Schedule Your
          <span class="text-[#328CCB]"> Appointment</span>
        </h2>
        <p class="text-gray-600 text-lg max-w-3xl mx-auto leading-relaxed">
          Fill out the form below and our team will contact you within 24 hours to confirm your appointment.
        </p>
      </div>
    </div>
  </section>

  <!-- Contact Form & Operating Hours -->
  <section id="contact-form" class="py-20 bg-white">
    <div class="container mx-auto px-4">
      <div class="grid lg:grid-cols-2 gap-16">
        <!-- Contact Form -->
        <div class="bg-gray-50 rounded-3xl shadow-xl p-8 lg:p-12 floating-card">
          <div class="mb-8">
            <div class="inline-flex items-center space-x-2 bg-[#D66C43]/10 text-[#D66C43] px-4 py-2 rounded-full text-sm font-medium mb-6">
              <?php echo getIcon('Calendar', 'h-4 w-4'); ?>
              <span>Book Appointment</span>
            </div>
            <h3 class="text-3xl font-bold text-gray-900 mb-4">
              Book Your Appointment
            </h3>
            <p class="text-gray-600 leading-relaxed">
              Fill out the form below and our team will contact you within 24 hours to confirm your appointment.
            </p>
          </div>

          <form accept-charset="UTF-8" action="https://app.formester.com/forms/26PHowyy9/submissions" method="POST" class="space-y-6">
            <!-- Name Field -->
            <div>
              <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">
                Full Name *
              </label>
              <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                  <?php echo getIcon('User', 'h-5 w-5 text-gray-400'); ?>
                </div>
                <input
                  type="text"
                  id="name"
                  name="name"
                  required
                  class="block w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#328CCB] focus:border-[#328CCB] transition-colors duration-200 form-input"
                  placeholder="Enter your full name"
                />
              </div>
            </div>

            <!-- Email Field -->
            <div>
              <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">
                Email Address *
              </label>
              <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                  <?php echo getIcon('Mail', 'h-5 w-5 text-gray-400'); ?>
                </div>
                <input
                  type="email"
                  id="email"
                  name="email"
                  required
                  class="block w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#328CCB] focus:border-[#328CCB] transition-colors duration-200 form-input"
                  placeholder="Enter your email address"
                />
              </div>
            </div>

            <!-- Phone Field -->
            <div>
              <label for="phone" class="block text-sm font-semibold text-gray-700 mb-2">
                Phone Number
              </label>
              <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                  <?php echo getIcon('Phone', 'h-5 w-5 text-gray-400'); ?>
                </div>
                <input
                  type="tel"
                  id="phone"
                  name="phone"
                  class="block w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#328CCB] focus:border-[#328CCB] transition-colors duration-200 form-input"
                  placeholder="Enter your phone number"
                />
              </div>
            </div>

            <!-- Subject Field -->
            <div>
              <label for="subject" class="block text-sm font-semibold text-gray-700 mb-2">
                Subject *
              </label>
              <select
                id="subject"
                name="subject"
                required
                class="block w-full px-3 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#328CCB] focus:border-[#328CCB] transition-colors duration-200 form-input"
              >
                <option value="">Select department</option>
                <option value="orthopedics">Orthopedics</option>
                <option value="cardiology">Cardiology</option>
                <option value="neurology">Neurology</option>
                <option value="pediatrics">Pediatrics</option>
                <option value="oncology">Oncology</option>
                <option value="general-surgery">General Surgery</option>
                <option value="other">Other</option>
              </select>
            </div>

            <!-- Message Field -->
            <div>
              <label for="message" class="block text-sm font-semibold text-gray-700 mb-2">
                Message *
              </label>
              <div class="relative">
                <div class="absolute top-3 left-3 pointer-events-none">
                  <?php echo getIcon('MessageSquare', 'h-5 w-5 text-gray-400'); ?>
                </div>
                <textarea
                  id="message"
                  name="message"
                  rows="5"
                  required
                  class="block w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#328CCB] focus:border-[#328CCB] transition-colors duration-200 resize-none form-input"
                  placeholder="Please describe your inquiry or message..."
                ></textarea>
              </div>
            </div>

            <!-- Submit Button -->
            <button
              type="submit"
              class="w-full bg-[#D66C43] hover:bg-[#c55a36] text-white px-6 py-4 rounded-lg font-semibold transition-all duration-300 flex items-center justify-center space-x-2 transform hover:scale-105 shadow-lg cta-glow"
            >
              <?php echo getIcon('Calendar', 'h-5 w-5'); ?>
              <span>Book Appointment</span>
            </button>

            <!-- Form Note -->
            <p class="text-sm text-gray-500 text-center">
              We'll get back to you within 24 hours. For emergencies, please call
              <a href="tel:<?php echo CONTACT_INFO['emergency']; ?>" class="text-[#D66C43] font-semibold hover:underline">
                <?php echo CONTACT_INFO['emergency']; ?>
              </a>
            </p>
          </form>
        </div>

        <!-- Operating Hours & Additional Info -->
        <div class="space-y-8">
          <!-- Operating Hours -->
          <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-8 service-card">
            <div class="flex items-center space-x-3 mb-6">
              <div class="bg-[#328CCB]/10 p-3 rounded-xl">
                <?php echo getIcon('Clock', 'h-6 w-6 text-[#328CCB]'); ?>
              </div>
              <div>
                <h3 class="text-2xl font-bold text-gray-900">Operating Hours</h3>
                <p class="text-gray-600">Our service timings</p>
              </div>
            </div>

            <div class="space-y-4">
              <?php
              $operatingHours = [
                ['day' => 'Emergency Services', 'time' => '24/7 Available', 'highlight' => true],
                ['day' => 'OPD Timings', 'time' => '8:00 AM - 8:00 PM', 'highlight' => false],
                ['day' => 'Laboratory', 'time' => '6:00 AM - 10:00 PM', 'highlight' => false],
                ['day' => 'Pharmacy', 'time' => '24/7 Available', 'highlight' => true],
                ['day' => 'Radiology', 'time' => '7:00 AM - 9:00 PM', 'highlight' => false],
                ['day' => 'Dialysis Center', 'time' => '24/7 Available', 'highlight' => true]
              ];

              foreach ($operatingHours as $hour):
              ?>
                <div class="flex items-center justify-between p-4 rounded-lg <?php echo $hour['highlight'] ? 'bg-[#D66C43]/10 border border-[#D66C43]/20' : 'bg-gray-50'; ?>">
                  <span class="font-semibold <?php echo $hour['highlight'] ? 'text-[#D66C43]' : 'text-gray-700'; ?>">
                    <?php echo $hour['day']; ?>
                  </span>
                  <span class="font-bold <?php echo $hour['highlight'] ? 'text-[#D66C43]' : 'text-gray-900'; ?>">
                    <?php echo $hour['time']; ?>
                  </span>
                </div>
              <?php endforeach; ?>
            </div>
          </div>

          <!-- Hospital Features -->
          <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-8 service-card">
            <div class="flex items-center space-x-3 mb-6">
              <div class="bg-[#D66C43]/10 p-3 rounded-xl">
                <?php echo getIcon('Award', 'h-6 w-6 text-[#D66C43]'); ?>
              </div>
              <div>
                <h3 class="text-2xl font-bold text-gray-900">Why Choose Us</h3>
                <p class="text-gray-600">Our key features</p>
              </div>
            </div>

            <div class="space-y-4">
              <?php
              $features = [
                'NABH Accredited Hospital',
                '24×7 Emergency Services',
                'Advanced Diagnostic Center',
                'Expert Medical Team',
                'Insurance Cashless Facility',
                'Patient-Centric Care'
              ];

              foreach ($features as $feature):
              ?>
                <div class="flex items-center space-x-3">
                  <?php echo getIcon('CheckCircle', 'h-5 w-5 text-[#D66C43] flex-shrink-0'); ?>
                  <span class="text-gray-700 font-medium"><?php echo $feature; ?></span>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Map Section -->
  <section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
      <div class="text-center mb-16">
        <div class="inline-flex items-center space-x-2 bg-[#328CCB]/10 text-[#328CCB] px-4 py-2 rounded-full text-sm font-medium mb-6">
          <?php echo getIcon('MapPin', 'h-4 w-4'); ?>
          <span>Find Us</span>
        </div>
        <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-6">
          Visit Our
          <span class="text-[#328CCB]"> Hospital</span>
        </h2>
        <p class="text-gray-600 text-lg max-w-3xl mx-auto leading-relaxed">
          Located in the heart of Noida with easy accessibility and ample parking facilities.
        </p>
      </div>

      <div class="bg-white rounded-3xl shadow-xl overflow-hidden floating-card">
        <div class="grid lg:grid-cols-2">
          <!-- Map Placeholder -->
          <div class="bg-gray-200 h-96 lg:h-full flex items-center justify-center">
            <div class="text-center">
              <?php echo getIcon('MapPin', 'h-16 w-16 text-gray-400 mx-auto mb-4'); ?>
              <h3 class="text-xl font-bold text-gray-600 mb-2">Interactive Map</h3>
              <p class="text-gray-500">Google Maps integration would be here</p>
            </div>
          </div>

          <!-- Location Details -->
          <div class="p-8 lg:p-12 flex flex-col justify-center">
            <h3 class="text-3xl font-bold text-gray-900 mb-6">
              Hospital Location
            </h3>

            <div class="space-y-6 mb-8">
              <div class="flex items-start space-x-4">
                <div class="bg-[#328CCB]/10 p-3 rounded-lg flex-shrink-0">
                  <?php echo getIcon('MapPin', 'h-6 w-6 text-[#328CCB]'); ?>
                </div>
                <div>
                  <h4 class="font-bold text-gray-900 mb-1">Address</h4>
                  <p class="text-gray-700 leading-relaxed"><?php echo CONTACT_INFO['address']; ?></p>
                </div>
              </div>

              <div class="flex items-start space-x-4">
                <div class="bg-green-100 p-3 rounded-lg flex-shrink-0">
                  <?php echo getIcon('Navigation', 'h-6 w-6 text-green-600'); ?>
                </div>
                <div>
                  <h4 class="font-bold text-gray-900 mb-1">Directions</h4>
                  <p class="text-gray-700 leading-relaxed">
                    Easy access via metro, bus, and private transport. Ample parking available.
                  </p>
                </div>
              </div>

              <div class="flex items-start space-x-4">
                <div class="bg-purple-100 p-3 rounded-lg flex-shrink-0">
                  <?php echo getIcon('Clock', 'h-6 w-6 text-purple-600'); ?>
                </div>
                <div>
                  <h4 class="font-bold text-gray-900 mb-1">Visiting Hours</h4>
                  <p class="text-gray-700 leading-relaxed">
                    OPD: 8:00 AM - 8:00 PM | Emergency: 24/7 Available
                  </p>
                </div>
              </div>
            </div>

            <a
              href="https://maps.app.goo.gl/GdmJvL8Yuz1VUMvw8"
              target="_blank"
              rel="noopener noreferrer"
              class="bg-[#D66C43] hover:bg-[#c55a36] text-white px-8 py-4 rounded-xl font-semibold text-lg transition-all duration-300 transform hover:scale-105 flex items-center space-x-2 shadow-lg cta-glow"
            >
              <?php echo getIcon('Navigation', 'h-5 w-5'); ?>
              <span>Get Directions</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<!-- Footer -->
<?php include 'includes/footer.php'; ?>

<!-- Scripts -->
<?php include 'includes/scripts.php'; ?>
