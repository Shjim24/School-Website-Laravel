<!-- resources/views/partials/header.blade.php -->

<!-- Topbar Area -->
<div class="topbar-area">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-8">
        <div class="notice-ticker">
          <div class="scrolling-text">
            <i class="fas fa-bullhorn me-2"></i>নাম বিস্তৃতি ******খণ্ডকালীন
            পদার্থবিজ্ঞান প্রভাষক নিয়োগ বিজ্ঞপ্তি******পঞ্চম ও দ্বাদশ
            শ্রেণির শ্রেণিপাঠদান বন্ধ প্রসঙ্গে ******একাদশ শ্রেণির বার্ষিক
            পরীক্ষা-২০২৫ এর ফলাফল (দিবা) *****একাদশ শ্রেণির বার্ষিক
            পরীক্ষা-২০২৫ এর ফলাফল (প্রভাতি) *****
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="d-flex align-items-center justify-content-end">
          <div class="language-toggle me-3">
            <select class="form-select form-select-sm">
              <option value="bn">বাংলা</option>
              <option value="en">English</option>
            </select>
          </div>
          <a href="{{ url('/login') }}" class="btn btn-sm btn-success">লগইন</a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Header Area -->
<header class="header-area">
  <div class="container">
    <div class="row align-items-center">
      <!-- Logo Area -->
      <div class="col-lg-2 col-md-3 col-6">
        <div class="header-logo">
          <a href="{{ url('/') }}">
            <img src="{{ asset('images/logo.svg') }}" alt="XYZ School & College" />
          </a>
        </div>
      </div>

      <!-- Desktop Navigation -->
      <div class="col-lg-10 col-md-9 d-none d-md-block">
        <nav class="navigation">
          <ul class="header-menu-list">
            <li><a href="{{ url('/') }}">মূলপাতা</a></li>

            <li>
              <a href="{{ url('/about') }}">পরিচিতি</a>
              <ul class="sub-menu">
                <li>
                  <a href="{{ url('/about') }}">প্রতিষ্ঠানের পরিচিতি</a>
                </li>
                <li>
                  <a href="{{ url('/history') }}">প্রতিষ্ঠানের ইতিহাস</a>
                </li>
                <li>
                  <a href="{{ url('/school-information') }}"
                    >বিদ্যালয়ের তথ্যাদি</a
                  >
                </li>
                <li>
                  <a href="{{ url('/corner-message') }}"
                    >স্কুল পরিচালকদের বাণী</a
                  >
                </li>
                <li>
                  <a href="{{ url('/land-schedule') }}">ভূমির তপসিল</a>
                </li>
                <li>
                  <a href="{{ url('/land-ownership') }}"
                    >ভূমি মালিকানা তথ্য</a
                  >
                </li>
                <li><a href="{{ url('/memorial') }}">স্মরণিকা</a></li>
              </ul>
            </li>

            <li>
              <a href="#">প্রশাসন</a>
              <ul class="sub-menu">
                <li>
                  <a href="{{ url('/management-committee') }}"
                    >ব্যবস্থাপনা কমিটি</a
                  >
                </li>
                <li>
                  <a href="{{ url('/mp-nationalization') }}"
                    >এমপি ও জাতীয়করণ তথ্য</a
                  >
                </li>
                <li>
                  <a href="{{ url('/approved-positions') }}"
                    >অনুমোদিত পদ সংখ্যা</a
                  >
                </li>
              </ul>
            </li>

            <li>
              <a href="#">শিক্ষক/কর্মচারী</a>
              <ul class="sub-menu">
                <li>
                  <a href="{{ url('/teachers-info') }}"
                    >শিক্ষকদের তথ্য</a
                  >
                </li>
                <li>
                  <a href="{{ url('/teacher-attendance') }}"
                    >শিক্ষক উপস্থিতি</a
                  >
                </li>
                <li>
                  <a href="{{ url('/staff-info') }}"
                    >কর্মকর্তা/কর্মচারী তথ্য</a
                  >
                </li>
                <li>
                  <a href="{{ url('/staff-attendance') }}"
                    >কর্মচারী উপস্থিতি</a
                  >
                </li>
              </ul>
            </li>

            <li>
              <a href="#">শিক্ষার্থী</a>
              <ul class="sub-menu">
                <li>
                  <a href="{{ url('/gender-data') }}"
                    >লিঙ্গ ভিত্তিক তথ্য</a
                  >
                </li>
                <li>
                  <a href="{{ url('/current-students') }}"
                    >অধ্যয়নরত শিক্ষার্থীর তালিকা</a
                  >
                </li>
                <li>
                  <a href="{{ url('/student-attendance') }}"
                    >শিক্ষার্থী উপস্থিতি</a
                  >
                </li>
                <li>
                  <a href="{{ url('/merit-list') }}">মেধা তালিকা</a>
                </li>
                <li><a href="{{ url('/pass-lists') }}">পাস তালিকা</a></li>
                <li><a href="{{ url('/fail-lists') }}">ফেল তালিকা</a></li>
              </ul>
            </li>

            <li>
              <a href="#">ভর্তি</a>
              <ul class="sub-menu">
                <li>
                  <a href="{{ url('/application') }}">ভর্তি আবেদন</a>
                </li>
                <li><a href="{{ url('/info') }}">ভর্তি তথ্য</a></li>
                <li><a href="{{ url('/fees') }}">ভর্তি ফি</a></li>
                <li><a href="{{ url('/results') }}">ভর্তি ফলাফল</a></li>
                <li>
                  <a href="{{ url('/download-form') }}"
                    >অনলাইন ফরম ডাউনলোড</a
                  >
                </li>
              </ul>
            </li>

            <li>
              <a href="#">একাডেমিক</a>
              <ul class="sub-menu">
                <li>
                  <a href="{{ url('/multimedia-classes') }}"
                    >মাল্টিমিডিয়া ক্লাস</a
                  >
                </li>
                <li><a href="{{ url('/laboratory') }}">গবেষণাগার</a></li>
                <li>
                  <a href="#academic-calendar">শিক্ষা বর্ষপঞ্জি</a>
                </li>
              </ul>
            </li>

            <li>
              <a href="#">পাঠদান ও স্বীকৃতি</a>
              <ul class="sub-menu">
                <li>
                  <a href="{{ url('/class-routine') }}">ক্লাস রুটিন</a>
                </li>
                <li><a href="#">ক্লাস কক্ষ</a></li>
                <li><a href="{{ url('/class-fees') }}">ফি তথ্য</a></li>
                <li><a href="{{ url('/syllabus') }}">পাঠ্যসূচি</a></li>
                <li>
                  <a href="{{ url('/approved-positions') }}"
                    >আসন সংখ্যা</a
                  >
                </li>
                <li>
                  <a href="{{ url('/book-list') }}">বইয়ের তালিকা</a>
                </li>
                <li><a href="{{ url('/dress') }}">পোশাকের বিবরণ</a></li>
                <li>
                  <a href="{{ url('/pathdan-onumuti') }}"
                    >পাঠদানের অনুমতি ও স্বীকৃতি</a
                  >
                </li>
              </ul>
            </li>

            <li>
              <a href="#">পরীক্ষা ও ফলাফল</a>
              <ul class="sub-menu">
                <li>
                  <a href="{{ url('/internal-results') }}"
                    >অভ্যন্তরীণ ফলাফল</a
                  >
                </li>
                <li>
                  <a href="{{ url('/public-results') }}"
                    >পাবলিক পরীক্ষার ফল</a
                  >
                </li>
                <li><a href="{{ url('/schedule') }}">পরীক্ষার রুটিন</a></li>
              </ul>
            </li>

            <li>
              <a href="#">সুবিধাদি</a>
              <ul class="sub-menu">
                <li><a href="{{ url('/buildings') }}">ভবন</a></li>
                <li>
                  <a href="{{ url('/computer-lab') }}"
                    >কম্পিউটার ল্যাব</a
                  >
                </li>
                <li><a href="{{ url('/playground') }}">খেলার মাঠ</a></li>
                <li>
                  <a href="{{ url('/cultural') }}"
                    >ক্রীড়া ও সাংস্কৃতিক কার্যক্রম</a
                  >
                </li>
                <li>
                  <a href="{{ url('/Cleanliness') }}"
                    >পরিষ্ছন্নতা, শারীরচর্চা এবং স্যানিটেশন</a
                  >
                </li>
              </ul>
            </li>

            <li><a href="{{ url('/gallery') }}">গ্যালারি</a></li>

            <li><a href="{{ url('/contact') }}">যোগাযোগ</a></li>
          </ul>
        </nav>
      </div>

      <!-- Mobile Menu Button -->
      <div class="col-6 d-md-none text-end">
        <button class="mobile-menu-btn btn btn-sm btn-primary">
          <i class="fas fa-bars"></i> মেনু
        </button>
      </div>
    </div>
  </div>
</header>