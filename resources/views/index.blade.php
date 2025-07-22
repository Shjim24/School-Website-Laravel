<!-- resources/views/index.blade.php -->

@extends('layouts.app')

@section('title', 'XYZ School & College - Home')

@section('content')

<!-- Hero and Notice Container -->
<div class="hero-notice-container">
  <!-- Hero Section (75% width) -->
  <section class="hero-area">
    <div class="hero-slider owl-carousel">
      <!-- Slide 1 -->
      <div
        class="hero-single-slide"
        style="background-image: url('{{ asset('images/slider-img-1.png') }}')"
      >
        <div class="hero-content">
          <h1 class="hero-title animate__animated animate__fadeInDown">
            স্বাগতম XYZ স্কুল এবং কলেজ
          </h1>
          <p
            class="hero-subtitle animate__animated animate__fadeIn animate__delay-1s"
          >
            জ্ঞানই শক্তি, শিক্ষাই আলো
          </p>
          <div
            class="hero-btn-container animate__animated animate__fadeInUp animate__delay-2s"
          >
            <a href="{{ url('/about') }}" class="hero-btn">আমাদের সম্পর্কে</a>
          </div>
        </div>
      </div>

      <!-- Slide 2 -->
      <div
        class="hero-single-slide"
        style="background-image: url('{{ asset('images/slider-img-2.png') }}')"
      >
        <div class="hero-content">
          <h1 class="hero-title animate__animated animate__fadeInDown">
            গুণগত শিক্ষার জন্য আমাদের প্রতিষ্ঠান
          </h1>
          <p
            class="hero-subtitle animate__animated animate__fadeIn animate__delay-1s"
          >
            ভবিষ্যত গড়ার কারিগর
          </p>
          <div
            class="hero-btn-container animate__animated animate__fadeInUp animate__delay-2s"
          >
            <a href="{{ url('/info') }}" class="hero-btn">ভর্তি তথ্য</a>
          </div>
        </div>
      </div>

      <!-- Slide 3 -->
      <div
        class="hero-single-slide"
        style="background-image: url('{{ asset('images/slider-img-3.png') }}')"
      >
        <div class="hero-content">
          <h1 class="hero-title animate__animated animate__fadeInDown">
            আধুনিক সুযোগ সুবিধা
          </h1>
          <p
            class="hero-subtitle animate__animated animate__fadeIn animate__delay-1s"
          >
            সৃজনশীল শিক্ষার পরিবেশ
          </p>
          <div
            class="hero-btn-container animate__animated animate__fadeInUp animate__delay-2s"
          >
            <a href="{{ url('/buildings') }}" class="hero-btn"
              >সুবিধাদি দেখুন</a
            >
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Notice Board Section (25% width) -->
  <div class="notice-section">
    <div class="notice-board">
      <div class="notice-header">
        <h3 class="notice-title">
          <i class="fas fa-bullhorn"></i> নোটিশ বোর্ড
        </h3>
      </div>
      <div class="notice-content">
        <ul class="notice-list">
          <li class="notice-item">
            <div class="notice-info">
              <i class="fas fa-bell notice-icon"></i>
              <div class="notice-text-wrapper">
                <span class="notice-text"
                  >আগামীকাল মহান স্বাধীনতা দিবস উপলক্ষে স্কুল এবং কলেজ বন্ধ
                  থাকবে</span
                >
                <span class="notice-date">প্রকাশিত: ১৪ জুলাই, ২০২৫</span>
              </div>
            </div>
            <a href="{{ url('/notices') }}" class="notice-btn">বিস্তারিত</a>
          </li>
          <li class="notice-item">
            <div class="notice-info">
              <i class="fas fa-bell notice-icon"></i>
              <div class="notice-text-wrapper">
                <span class="notice-text"
                  >২০২৪ ভর্তি সংক্রান্ত জরুরি বিজ্ঞপ্তি!</span
                >
                <span class="notice-date">প্রকাশিত: ১৩ জুলাই, ২০২৫</span>
              </div>
            </div>
            <a href="{{ url('/notices') }}" class="notice-btn">বিস্তারিত</a>
          </li>
          <li class="notice-item">
            <div class="notice-info">
              <i class="fas fa-bell notice-icon"></i>
              <div class="notice-text-wrapper">
                <span class="notice-text"
                  >সবক্লাসের ১ম সেমিস্টার পরীক্ষার রুটিন</span
                >
                <span class="notice-date">প্রকাশিত: ১২ জুলাই, ২০২৫</span>
              </div>
            </div>
            <a href="{{ url('/notices') }}" class="notice-btn">বিস্তারিত</a>
          </li>
          <li class="notice-item">
            <div class="notice-info">
              <i class="fas fa-bell notice-icon"></i>
              <div class="notice-text-wrapper">
                <span class="notice-text"
                  >বেতন সংক্রান্ত জরুরি বিজ্ঞপ্তি!</span
                >
                <span class="notice-date">প্রকাশিত: ১১ জুলাই, ২০২৫</span>
              </div>
            </div>
            <a href="{{ url('/notices') }}" class="notice-btn">বিস্তারিত</a>
          </li>
          <li class="notice-item">
            <div class="notice-info">
              <i class="fas fa-bell notice-icon"></i>
              <div class="notice-text-wrapper">
                <span class="notice-text"
                  >পহেলা বৈশাখ উপলক্ষে আগামীকাল স্কুল ও কলেজ বন্ধ
                  থাকবে</span
                >
                <span class="notice-date">প্রকাশিত: ১০ জুলাই, ২০২৫</span>
              </div>
            </div>
            <a href="{{ url('/notices') }}" class="notice-btn">বিস্তারিত</a>
          </li>
        </ul>
        <div class="notice-footer">
          <a href="{{ url('/notices') }}" class="view-all-btn"
            >সকল নোটিশ দেখুন <i class="fas fa-arrow-right"></i
          ></a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Quick Links and Leaders Container -->
<div class="quick-about-container">
  <!-- Quick Links Section (75% width) -->
  <section class="quick-links-section">
    <div class="section-header">
      <h2 class="section-title">দ্রুত লিঙ্ক</h2>
    </div>
    <div class="row g-4">
      <!-- Changed g-2 to g-4 for more spacing -->
      <div class="col-md-6 col-lg-3">
        <div class="quick-link-box compact-box">
          <div class="box-icon">
            <i class="fas fa-school"></i>
          </div>
          <h4>পরিচিতি ও প্রশাসন</h4>
          <ul class="box-links">
            <li><a href="{{ url('/about') }}">এক নজরে</a></li>
            <li><a href="{{ url('/history') }}">প্রতিষ্ঠানের ইতিহাস</a></li>
            <li>
              <a href="{{ url('/school-information') }}"
                >সাফল্য ও অর্জন</a
              >
            </li>
            <li>
              <a href="{{ url('/management-committee') }}"
                >ব্যবস্থাপনা কমিটি</a
              >
            </li>
            <li>
              <a href="{{ url('/approved-positions') }}"
                >আসন সংখ্যা</a
              >
            </li>
          </ul>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="quick-link-box compact-box">
          <div class="box-icon">
            <i class="fas fa-chalkboard-teacher"></i>
          </div>
          <h4>শিক্ষক ও শিক্ষার্থী</h4>
          <ul class="box-links">
            <li>
              <a href="{{ url('/teachers-info') }}">শিক্ষকদের তথ্য</a>
            </li>
            <li>
              <a href="{{ url('/current-students') }}"
                >ছাত্রছাত্রীদের তালিকা</a
              >
            </li>
            <li>
              <a href="{{ url('/student-attendance') }}"
                >শিক্ষার্থী উপস্থিতি</a
              >
            </li>
            <li><a href="{{ url('/merit-list') }}">মেধা তালিকা</a></li>
            <li>
              <a href="{{ url('/current-students') }}"
                >শিক্ষার্থী নীতিমালা</a
              >
            </li>
          </ul>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="quick-link-box compact-box">
          <div class="box-icon">
            <i class="fas fa-file-signature"></i>
          </div>
          <h4>ভর্তি ও পরীক্ষা</h4>
          <ul class="box-links">
            <li>
              <a href="{{ url('/application') }}">অনলাইন ভর্তি ফরম</a>
            </li>
            <li>
              <a href="{{ url('/notices') }}">ভর্তি সংক্রান্ত নোটিস</a>
            </li>
            <li>
              <a href="{{ url('/results') }}">ভর্তি পরীক্ষার ফলাফল</a>
            </li>
            <li><a href="{{ url('/schedule') }}">পরীক্ষার রুটিন</a></li>
            <li>
              <a href="{{ url('/class-routine') }}">ক্লাস রুটিন</a>
            </li>
          </ul>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="quick-link-box compact-box">
          <div class="box-icon">
            <i class="fas fa-award"></i>
          </div>
          <h4>একাডেমিক ও ফলাফল</h4>
          <ul class="box-links">
            <li>
              <a href="{{ url('/public-results') }}"
                >পাবলিক পরীক্ষার ফল</a
              >
            </li>
            <li>
              <a href="{{ url('/internal-results') }}"
                >অভ্যন্তরীণ পরীক্ষার ফলাফল</a
              >
            </li>
            <li><a href="#academic-calendar">শিক্ষা বর্ষপঞ্জি</a></li>
            <li><a href="{{ url('/laboratory') }}">গবেষণাগার</a></li>
            <li><a href="{{ url('/notices') }}">নোটিশ বোর্ড</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Leaders Section (25% width) -->
  <section class="leaders-section-standalone">
    <div class="section-header">
      <h2 class="section-title">স্কুল পরিচালকদের বাণী</h2>
    </div>
    <div class="leaders-slider owl-carousel">
      <!-- Principal's Message -->
      <div class="leader-card box-shadow-effect">
        <div class="leader-image">
          <img src="{{ asset('images/principle.jpeg') }}" alt="Principal" />
        </div>
        <div class="leader-content">
          <h4 class="leader-name">মোঃ মোস্তফা কামাল ভূঁইয়া</h4>
          <p class="leader-position">অধ্যক্ষ</p>
          <div class="leader-message">
            <p>
              প্রিয় শিক্ষার্থীবৃন্দ, আজ আমি আপনাদের সামনে দাঁড়িয়েছি একজন
              শিক্ষক, একজন অভিভাবক এবং একজন বন্ধু হিসেবে... আপনারা সকলেই
              সক্ষম। শুধুমাত্র কঠোর পরিশ্রম, সততা ও শ্রদ্ধাশীল মনোভাব
              আপনাদের সাফল্যের চাবিকাঠি।
            </p>
          </div>
        </div>
      </div>

      <!-- Vice Principal's Message -->
      <div class="leader-card box-shadow-effect">
        <div class="leader-image">
          <img src="{{ asset('images/vice-principal.png') }}" alt="Vice Principal" />
        </div>
        <div class="leader-content">
          <h4 class="leader-name">মিসেস শিউলী আক্তার</h4>
          <p class="leader-position">উপাধ্যক্ষ</p>
          <div class="leader-message">
            <p>
              আমাদের স্কুলের মূল লক্ষ্য শিক্ষার্থীদের একটি সুন্দর ও সুস্থ
              পরিবেশে মানসম্মত শিক্ষা প্রদান করা। আমরা শিক্ষার্থীদের মেধা
              বিকাশে সর্বদা সহায়তা করছি এবং তাদেরকে আদর্শ সুনাগরিক হিসেবে
              গড়ে তুলতে আন্তরিকভাবে কাজ করছি।
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<!-- About Section -->
<section class="about-section">
  <div class="container">
    <div class="about-content-wrapper">
      <div class="about-content">
        <h2 class="section-title">প্রতিষ্ঠান সম্পর্কে</h2>
        <div class="about-text">
          <p>
            XYZ স্কুল এবং কলেজ এর অতীত গৌরবোজ্জ্বল বর্তমান প্রশংসনীয়। ২০২৩
            ইংরেজীর ২০ শে জানুয়ারী XYZ স্কুল এবং কলেজ এর স্থানীয়
            ম্যাজিষ্ট্রেট অফিসের তৎকালীন প্রধান কারণিক মি: XYZ কর্তৃক
            প্রতিষ্ঠিত। তখন এটা XYZ গভর্ণমেন্ট স্কুল নামে পরিচিত ছিল। ৯ জন
            বাংলাদেশী, ১ জন হিন্দু ও ৮ জন মুসলমান বিদ্যোৎসাহী ব্যক্তির একটি
            কমিটির উপর এর পরিচালনার দায়িত্ব ন্যাস্ত ছিল। এদেশের অধিবাসীদের
            বাংলায় শিক্ষায় শিক্ষিত করার জন্য এ বিদ্যালয় চালু করা হয়। ২০২৩
            ইংরেজির ১ ই মে মি: XYZ বিদ্যালয়ের প্রধান শিক্ষক নিযুক্ত হন।
          </p>
          <p>
            প্রতিষ্ঠানটি শুরু থেকেই শিক্ষার গুণগত মান উন্নয়নে কাজ করে
            যাচ্ছে। আমাদের লক্ষ্য হল শিক্ষার্থীদেরকে শুধুমাত্র পাঠ্যপুস্তকের
            জ্ঞানই নয় বরং নৈতিকতা, মূল্যবোধ ও দেশপ্রেমে উদ্বুদ্ধ করে গড়ে
            তোলা। আমাদের প্রতিষ্ঠানে রয়েছে আধুনিক সকল সুযোগ-সুবিধা, অভিজ্ঞ
            শিক্ষকমন্ডলী এবং শিক্ষার্থীবান্ধব পরিবেশ।
          </p>
        </div>
        <div class="about-footer">
          <a href="{{ url('/about') }}" class="read-more-btn"
            >বিস্তারিত পড়ুন</a
          >
        </div>
      </div>
      <div class="about-image">
        <img src="{{ asset('images/about-img.png') }}" alt="About School" />
      </div>
    </div>
  </div>
</section>

<!-- Academic Calendar Section -->
<section class="calendar-section" id="academic-calendar">
  <div class="container">
    <div class="section-header">
      <h2 class="section-title">একাডেমিক ক্যালেন্ডার</h2>
    </div>
    <div class="calendar-container">
      <div class="calendar-header">
        <h3>২০২৫ শিক্ষাবর্ষের ক্যালেন্ডার</h3>
        <a href="#" class="download-btn">
          <i class="fas fa-download"></i> ডাউনলোড করুন
        </a>
      </div>
      <div class="calendar-table">
        <table>
          <thead>
            <tr>
              <th>মাস</th>
              <th>ঘটনা</th>
              <th>তারিখ</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>জানুয়ারী</td>
              <td>শীতকালীন ছুটি শেষ</td>
              <td>১ জানুয়ারী</td>
            </tr>
            <tr>
              <td>ফেব্রুয়ারী</td>
              <td>মধ্যবর্তী পরীক্ষা</td>
              <td>১৫-২০ ফেব্রুয়ারী</td>
            </tr>
            <tr>
              <td>মার্চ</td>
              <td>স্বাধীনতা দিবস উদযাপন</td>
              <td>২৬ মার্চ</td>
            </tr>
            <tr>
              <td>এপ্রিল</td>
              <td>পহেলা বৈশাখ উদযাপন</td>
              <td>১৪ এপ্রিল</td>
            </tr>
            <tr>
              <td>মে</td>
              <td>বার্ষিক ক্রীড়া প্রতিযোগিতা</td>
              <td>১০-১২ মে</td>
            </tr>
            <tr>
              <td>জুন</td>
              <td>বার্ষিক পরীক্ষা</td>
              <td>১৫-৩০ জুন</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>

<!-- Teachers Area -->
<section class="teachers-section">
  <div class="container">
    <div class="section-header">
      <h2 class="section-title">আমাদের শিক্ষকবৃন্দ</h2>
    </div>
    <div class="teachers-slider owl-carousel">
      <!-- Teacher 1 -->
      <div class="teacher-card box-shadow-effect">
        <div class="teacher-image">
          <img src="{{ asset('images/teacher-1.png') }}" alt="Teacher" />
        </div>
        <div class="teacher-info">
          <h4 class="teacher-name">আবদুল্লাহ আল নোমান</h4>
          <p class="teacher-subject">সিনিয়র বাংলা শিক্ষক</p>
          <div class="teacher-social">
            <a href="#"><i class="fas fa-phone"></i></a>
            <a href="#"><i class="fas fa-envelope"></i></a>
            <a href="#"><i class="fab fa-facebook-f"></i></a>
          </div>
          <a href="{{ url('/teacher-details') }}" class="teacher-btn"
            >বিস্তারিত দেখুন</a
          >
        </div>
      </div>

      <!-- Teacher 2 -->
      <div class="teacher-card box-shadow-effect">
        <div class="teacher-image">
          <img src="{{ asset('images/teacher-2.png') }}" alt="Teacher" />
        </div>
        <div class="teacher-info">
          <h4 class="teacher-name">মাহবুব সরকার</h4>
          <p class="teacher-subject">সিনিয়র ইংরেজি শিক্ষক</p>
          <div class="teacher-social">
            <a href="#"><i class="fas fa-phone"></i></a>
            <a href="#"><i class="fas fa-envelope"></i></a>
            <a href="#"><i class="fab fa-facebook-f"></i></a>
          </div>
          <a href="{{ url('/teacher-details') }}" class="teacher-btn"
            >বিস্তারিত দেখুন</a
          >
        </div>
      </div>

      <!-- Teacher 3 -->
      <div class="teacher-card box-shadow-effect">
        <div class="teacher-image">
          <img src="{{ asset('images/teacher-3.png') }}" alt="Teacher" />
        </div>
        <div class="teacher-info">
          <h4 class="teacher-name">সোনিয়া আক্তার</h4>
          <p class="teacher-subject">গণিত শিক্ষিকা</p>
          <div class="teacher-social">
            <a href="#"><i class="fas fa-phone"></i></a>
            <a href="#"><i class="fas fa-envelope"></i></a>
            <a href="#"><i class="fab fa-facebook-f"></i></a>
          </div>
          <a href="{{ url('/teacher-details') }}" class="teacher-btn"
            >বিস্তারিত দেখুন</a
          >
        </div>
      </div>

      <!-- Teacher 4 -->
      <div class="teacher-card box-shadow-effect">
        <div class="teacher-image">
          <img src="{{ asset('images/teacher-4.png') }}" alt="Teacher" />
        </div>
        <div class="teacher-info">
          <h4 class="teacher-name">তাসনিম জারা শাওন</h4>
          <p class="teacher-subject">সিনিয়র বিজ্ঞান শিক্ষিকা</p>
          <div class="teacher-social">
            <a href="#"><i class="fas fa-phone"></i></a>
            <a href="#"><i class="fas fa-envelope"></i></a>
            <a href="#"><i class="fab fa-facebook-f"></i></a>
          </div>
          <a href="{{ url('/teacher-details') }}" class="teacher-btn"
            >বিস্তারিত দেখুন</a
          >
        </div>
      </div>
    </div>
    <div class="section-footer">
      <a href="{{ url('/teachers-info') }}" class="view-all-btn"
        >সকল শিক্ষক দেখুন</a
      >
    </div>
  </div>
</section>

<!-- School Committee Area -->
<section class="committee-section">
  <div class="container">
    <div class="section-header">
      <h2 class="section-title">স্কুল কমিটি সদস্যবৃন্দ</h2>
    </div>
    <div class="committee-slider owl-carousel">
      <!-- Committee Member 1 -->
      <div class="committee-card box-shadow-effect">
        <div class="committee-image">
          <img src="{{ asset('images/committee-1.png') }}" alt="Committee Member" />
        </div>
        <div class="committee-info">
          <h4 class="member-name">আব্দুল লতিফ খান</h4>
          <p class="member-position">স্কুল সভাপতি</p>
          <div class="member-details">
            <p>
              <i class="fas fa-calendar-alt"></i> যোগদান: ১ জানুয়ারী, ২০২২
            </p>
            <p><i class="fas fa-clock"></i> মেয়াদ: ১ জানুয়ারী, ২০২৭</p>
          </div>
          <div class="member-social">
            <a href="#"><i class="fas fa-phone"></i></a>
            <a href="#"><i class="fas fa-envelope"></i></a>
            <a href="#"><i class="fab fa-facebook-f"></i></a>
          </div>
        </div>
      </div>

      <!-- Committee Member 2 -->
      <div class="committee-card box-shadow-effect">
        <div class="committee-image">
          <img src="{{ asset('images/committee-2.jpg') }}" alt="Committee Member" />
        </div>
        <div class="committee-info">
          <h4 class="member-name">হাসমত উল্লাহ</h4>
          <p class="member-position">স্কুল সহ-সভাপতি</p>
          <div class="member-details">
            <p>
              <i class="fas fa-calendar-alt"></i> যোগদান: ১ জানুয়ারী, ২০২২
            </p>
            <p><i class="fas fa-clock"></i> মেয়াদ: ১ জানুয়ারী, ২০২৭</p>
          </div>
          <div class="member-social">
            <a href="#"><i class="fas fa-phone"></i></a>
            <a href="#"><i class="fas fa-envelope"></i></a>
            <a href="#"><i class="fab fa-facebook-f"></i></a>
          </div>
        </div>
      </div>

      <!-- Committee Member 3 -->
      <div class="committee-card box-shadow-effect">
        <div class="committee-image">
          <img src="{{ asset('images/committee-3.jpg') }}" alt="Committee Member" />
        </div>
        <div class="committee-info">
          <h4 class="member-name">রেজাউল ইসলাম</h4>
          <p class="member-position">স্কুল ক্যাশিয়ার</p>
          <div class="member-details">
            <p>
              <i class="fas fa-calendar-alt"></i> যোগদান: ১ জানুয়ারী, ২০২২
            </p>
            <p><i class="fas fa-clock"></i> মেয়াদ: ১ জানুয়ারী, ২০২৭</p>
          </div>
          <div class="member-social">
            <a href="#"><i class="fas fa-phone"></i></a>
            <a href="#"><i class="fas fa-envelope"></i></a>
            <a href="#"><i class="fab fa-facebook-f"></i></a>
          </div>
        </div>
      </div>

      <!-- Committee Member 4 -->
      <div class="committee-card box-shadow-effect">
        <div class="committee-image">
          <img src="{{ asset('images/committee-4.jpg') }}" alt="Committee Member" />
        </div>
        <div class="committee-info">
          <h4 class="member-name">মাহবুব আলম</h4>
          <p class="member-position">স্কুল সেক্রেটারী</p>
          <div class="member-details">
            <p>
              <i class="fas fa-calendar-alt"></i> যোগদান: ১ জানুয়ারী, ২০২২
            </p>
            <p><i class="fas fa-clock"></i> মেয়াদ: ১ জানুয়ারী, ২০২৭</p>
          </div>
          <div class="member-social">
            <a href="#"><i class="fas fa-phone"></i></a>
            <a href="#"><i class="fas fa-envelope"></i></a>
            <a href="#"><i class="fab fa-facebook-f"></i></a>
          </div>
        </div>
      </div>
    </div>
    <div class="section-footer">
      <a
        href="{{ url('/management-committee') }}"
        class="view-all-btn"
        >সকল সদস্য দেখুন</a
      >
    </div>
  </div>
</section>

<!-- Parent Recommendation Section -->
<section class="parents-section">
  <div class="container">
    <div class="section-header">
      <h2 class="section-title">অভিভাবকের মতামত</h2>
    </div>
    <div class="parents-slider owl-carousel">
      <!-- Parent 1 -->
      <div class="parent-card box-shadow-effect">
        <div class="parent-image">
          <img src="{{ asset('images/parent-1.jpg') }}" alt="Parent" />
        </div>
        <div class="parent-info">
          <h4 class="parent-name">মোঃ রফিকুল ইসলাম</h4>
          <p class="parent-details">
            ব্যবসায়ী, স্থানীয় ব্যবসায়ী সমিতির সভাপতি
          </p>
          <div class="parent-rating">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <p class="parent-message">
            এই স্কুলে আমার দুই সন্তান পড়াশোনা করছে। শিক্ষকদের পাঠদানের
            পদ্ধতি খুবই প্রশংসনীয়। এখানে তারা পড়াশোনার পাশাপাশি নৈতিকতা ও
            সামাজিক মূল্যবোধও শিখছে।
          </p>
        </div>
      </div>

      <!-- Parent 2 -->
      <div class="parent-card box-shadow-effect">
        <div class="parent-image">
          <img src="{{ asset('images/parent-2.jpg') }}" alt="Parent" />
        </div>
        <div class="parent-info">
          <h4 class="parent-name">মিসেস নাসরিন আক্তার</h4>
          <p class="parent-details">গৃহিণী, স্থানীয় মহিলা সমিতির সদস্য</p>
          <div class="parent-rating">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
          <p class="parent-message">
            আমার মেয়ে এই স্কুলে পড়ে এবং তার প্রতিটি দিন উন্নতির দিকে
            যাচ্ছে। শিক্ষকরা যথেষ্ট যত্নবান এবং স্কুলের পরিবেশ একদমই শিশুদের
            উপযোগী ও নিরাপদ বলা যায়।
          </p>
        </div>
      </div>

      <!-- Parent 3 -->
      <div class="parent-card box-shadow-effect">
        <div class="parent-image">
          <img src="{{ asset('images/parent-3.jpg') }}" alt="Parent" />
        </div>
        <div class="parent-info">
          <h4 class="parent-name">মোঃ জাহিদ হাসান</h4>
          <p class="parent-details">সরকারি কর্মকর্তা</p>
          <div class="parent-rating">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <p class="parent-message">
            XYZ স্কুলে আমার সন্তান অত্যন্ত আনন্দের সাথে পড়ালেখা করছে। এখানে
            শিক্ষাব্যবস্থা যত্নবান, পাঠক্রম আধুনিক এবং সহ-শিক্ষামূলক
            কার্যক্রমও বেশ উপভোগ্য ও কার্যকর।
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Gallery Section -->
<section class="gallery-section">
  <div class="container">
    <div class="section-header">
      <h2 class="section-title">আমাদের গ্যালারি</h2>
    </div>
    <div class="gallery-container">
      <!-- Gallery Item 1 -->
      <div class="gallery-item">
        <a
          href="{{ asset('images/gallery-1.jpg') }}"
          data-fancybox="gallery"
          class="gallery-link"
        >
          <img src="{{ asset('images/gallery-1.png') }}" alt="School Event" />
          <div class="gallery-overlay">
            <div class="gallery-content">
              <i class="fas fa-plus"></i>
              <h5>স্কুল পরিচ্ছন্নতা কর্মসূচি ২০২৩</h5>
            </div>
          </div>
        </a>
      </div>

      <!-- Gallery Item 2 -->
      <div class="gallery-item">
        <a
          href="{{ asset('images/gallery-2.jpg') }}"
          data-fancybox="gallery"
          class="gallery-link"
        >
          <img src="{{ asset('images/gallery-2.png') }}" alt="School Event" />
          <div class="gallery-overlay">
            <div class="gallery-content">
              <i class="fas fa-plus"></i>
              <h5>পাঠদান কার্যক্রম</h5>
            </div>
          </div>
        </a>
      </div>

      <!-- Gallery Item 3 -->
      <div class="gallery-item">
        <a
          href="{{ asset('images/gallery-3.jpg') }}"
          data-fancybox="gallery"
          class="gallery-link"
        >
          <img src="{{ asset('images/gallery-3.png') }}" alt="School Event" />
          <div class="gallery-overlay">
            <div class="gallery-content">
              <i class="fas fa-plus"></i>
              <h5>ছাত্রছাত্রীদের আনন্দঘন খেলাধুলা</h5>
            </div>
          </div>
        </a>
      </div>

      <!-- Gallery Item 4 -->
      <div class="gallery-item">
        <a
          href="{{ asset('images/gallery-4.jpg') }}"
          data-fancybox="gallery"
          class="gallery-link"
        >
          <img src="{{ asset('images/gallery-4.jpg') }}" alt="School Event" />
          <div class="gallery-overlay">
            <div class="gallery-content">
              <i class="fas fa-plus"></i>
              <h5>পুরস্কার বিতরণী অনুষ্ঠান ২০২৪</h5>
            </div>
          </div>
        </a>
      </div>
    </div>
    <div class="section-footer">
      <a href="{{ url('/gallery') }}" class="view-all-btn"
        >সম্পূর্ণ গ্যালারি দেখুন</a
      >
    </div>
  </div>
</section>

<!-- Student Counter Section -->
<section class="counter-section">
  <div class="container">
    <div class="section-header">
      <h2 class="section-title">ছাত্র/ছাত্রীদের পরিসংখ্যান</h2>
    </div>
    <div class="counter-grid">
      <div class="counter-item box-shadow-effect">
        <div class="counter-icon">
          <i class="fas fa-users"></i>
        </div>
        <div class="counter-number" data-count="1200">0</div>
        <div class="counter-label">মোট শিক্ষার্থী</div>
      </div>
      <div class="counter-item box-shadow-effect">
        <div class="counter-icon">
          <i class="fas fa-male"></i>
        </div>
        <div class="counter-number" data-count="650">0</div>
        <div class="counter-label">ছাত্র</div>
      </div>
      <div class="counter-item box-shadow-effect">
        <div class="counter-icon">
          <i class="fas fa-female"></i>
        </div>
        <div class="counter-number" data-count="550">0</div>
        <div class="counter-label">ছাত্রী</div>
      </div>
      <div class="counter-item box-shadow-effect">
        <div class="counter-icon">
          <i class="fas fa-chalkboard-teacher"></i>
        </div>
        <div class="counter-number" data-count="45">0</div>
        <div class="counter-label">শিক্ষক</div>
      </div>
      <div class="counter-item box-shadow-effect">
        <div class="counter-icon">
          <i class="fas fa-school"></i>
        </div>
        <div class="counter-number" data-count="12">0</div>
        <div class="counter-label"> শ্রেণণিকক্ষ</div>
      </div>
      <div class="counter-item box-shadow-effect">
        <div class="counter-icon">
          <i class="fas fa-calendar-alt"></i>
        </div>
        <div class="counter-number" data-count="25">0</div>
        <div class="counter-label">প্রতিষ্ঠার বছর</div>
      </div>
    </div>
  </div>
</section>

<!-- Students Area -->
<section class="students-section">
  <div class="container">
    <div class="section-header">
      <h2 class="section-title">সেরা ছাত্র/ছাত্রী</h2>
    </div>
    <div class="students-slider owl-carousel">
      <!-- Student 1 -->
      <div class="student-card box-shadow-effect">
        <div class="student-image">
          <img src="{{ asset('images/student-1.jpg') }}" alt="Student" />
        </div>
        <div class="student-info">
          <h4 class="student-name">নাহিদুল ইসলাম</h4>
          <p class="student-class">(ক্লাস টেন)</p>
          <div class="student-details">
            <p><i class="fas fa-id-card"></i> রোল নং: ১</p>
            <p><i class="fas fa-calendar"></i> সময়: ২০২৩</p>
            <p><i class="fas fa-star"></i> জিপিএ: ৫.০০</p>
          </div>
        </div>
      </div>

      <!-- Student 2 -->
      <div class="student-card box-shadow-effect">
        <div class="student-image">
          <img src="{{ asset('images/student-2.png') }}" alt="Student" />
        </div>
        <div class="student-info">
          <h4 class="student-name">তানিয়া আক্তার</h4>
          <p class="student-class">(ক্লাস টেন)</p>
          <div class="student-details">
            <p><i class="fas fa-id-card"></i> রোল নং: 2</p>
            <p><i class="fas fa-calendar"></i> সময়: ২০২৩</p>
            <p><i class="fas fa-star"></i> জিপিএ: ৫.০০</p>
          </div>
        </div>
      </div>

      <!-- Student 3 -->
      <div class="student-card box-shadow-effect">
        <div class="student-image">
          <img src="{{ asset('images/student-3.png') }}" alt="Student" />
        </div>
        <div class="student-info">
          <h4 class="student-name">মাজেদুল ইসলাম</h4>
          <p class="student-class">(ক্লাস নাইন)</p>
          <div class="student-details">
            <p><i class="fas fa-id-card"></i> রোল নং: ১</p>
            <p><i class="fas fa-calendar"></i> সময়: ২০২৩</p>
            <p><i class="fas fa-star"></i> জিপিএ: ৫.০০</p>
          </div>
        </div>
      </div>

      <!-- Student 4 -->
      <div class="student-card box-shadow-effect">
        <div class="student-image">
          <img src="{{ asset('images/student-4.png') }}" alt="Student" />
        </div>
        <div class="student-info">
          <h4 class="student-name">রহমান হোসেন</h4>
          <p class="student-class">(ক্লাস নাইন)</p>
          <div class="student-details">
            <p><i class="fas fa-id-card"></i> রোল নং: 2</p>
            <p><i class="fas fa-calendar"></i> সময়: ২০২৩</p>
            <p><i class="fas fa-star"></i> জিপিএ: ৫.০০</p>
          </div>
        </div>
      </div>

      <!-- Student 5 -->
      <div class="student-card box-shadow-effect">
        <div class="student-image">
          <img src="{{ asset('images/student-5.jpg') }}" alt="Student" />
        </div>
        <div class="student-info">
          <h4 class="student-name">সুমাইয়া আক্তার</h4>
          <p class="student-class">(ক্লাস এইট)</p>
          <div class="student-details">
            <p><i class="fas fa-id-card"></i> রোল নং: ১</p>
            <p><i class="fas fa-calendar"></i> সময়: ২০২৩</p>
            <p><i class="fas fa-star"></i> জিপিএ: ৫.০০</p>
          </div>
        </div>
      </div>
    </div>
    <div class="section-footer">
      <a href="{{ url('/merit-list') }}" class="view-all-btn"
        >আরো দেখুন</a
      >
    </div>
  </div>
</section>
@endsection