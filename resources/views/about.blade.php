{{-- resources/views/about.blade.php --}}

@extends('layouts.app')

@section('title', 'About Us - XYZ School & College')

{{-- This pushes the page-specific CSS into the <head> of your master layout --}}
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endpush


@section('content')

    <!-- About Page Hero Section -->
    <section class="about-hero-section">
      <div class="container">
        <div class="about-hero-content">
          <h1 class="about-hero-title animate__animated animate__fadeInDown">
            প্রতিষ্ঠান পরিচিতি
          </h1>
          <div
            class="breadcrumb animate__animated animate__fadeIn animate__delay-1s"
          >
            <a href="{{ url('/') }}">মূলপাতা</a>
            <i class="fas fa-angle-double-right"></i>
            <span>প্রতিষ্ঠান পরিচিতি</span>
          </div>
        </div>
      </div>
    </section>

    <!-- About School Section -->
    <section class="about-school-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-7">
            <div class="about-school-content">
              <h2
                class="section-title"
                style="text-align: left; display: block"
              >
                XYZ স্কুল এবং কলেজ সম্পর্কে
              </h2>
              <p class="about-text">
                XYZ স্কুল এবং কলেজ এর অতীত গৌরবোজ্জ্বল বর্তমান প্রশংসনীয়। ২০২৩
                ইংরেজীর ২০ শে জানুয়ারী XYZ স্কুল এবং কলেজ এর স্থানীয়
                ম্যাজিষ্ট্রেট অফিসের তৎকালীন প্রধান কারণিক মি: XYZ কর্তৃক
                প্রতিষ্ঠিত। তখন এটা XYZ গভর্ণমেন্ট স্কুল নামে পরিচিত ছিল। ৯ জন
                বাংলাদেশী, ১ জন হিন্দু ও ৮ জন মুসলমান বিদ্যোৎসাহী ব্যক্তির একটি
                কমিটির উপর এর পরিচালনার দায়িত্ব ন্যাস্ত ছিল। এদেশের অধিবাসীদের
                বাংলায় শিক্ষায় শিক্ষিত করার জন্য এ বিদ্যালয় চালু করা হয়। ২০২৩
                ইংরেজির ১ ই মে মি: XYZ বিদ্যালয়ের প্রধান শিক্ষক নিযুক্ত হন।
              </p>
              <p class="about-text">
                প্রতিষ্ঠানটি শুরু থেকেই শিক্ষার গুণগত মান উন্নয়নে কাজ করে
                যাচ্ছে। আমাদের লক্ষ্য হল শিক্ষার্থীদেরকে শুধুমাত্র পাঠ্যপুস্তকের
                জ্ঞানই নয় বরং নৈতিকতা, মূল্যবোধ ও দেশপ্রেমে উদ্বুদ্ধ করে গড়ে
                তোলা। আমাদের প্রতিষ্ঠানে রয়েছে আধুনিক সকল সুযোগ-সুবিধা, অভিজ্ঞ
                শিক্ষকমন্ডলী এবং শিক্ষার্থীবান্ধব পরিবেশ।
              </p>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="about-school-image">
              <img
                src="{{ asset('images/about-img.png') }}"
                alt="XYZ School Building"
                class="img-fluid"
              />
              <div class="image-overlay">
                <a
                  href="{{ asset('images/about-img.png') }}"
                  class="image-zoom"
                  data-fancybox="about-gallery"
                >
                  <i class="fas fa-search-plus"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Mission Vision Section -->
    <section class="mission-vision-section">
      <div class="container">
        <div class="row g-4">
          <div class="col-lg-4 col-md-6">
            <div class="mv-card mission-card">
              <div class="mv-icon">
                <i class="fas fa-bullseye"></i>
              </div>
              <h3>আমাদের মিশন</h3>
              <p>
                গুণগত শিক্ষার মাধ্যমে দক্ষ, নৈতিকতাসম্পন্ন ও দেশপ্রেমিক নাগরিক
                গড়ে তোলা যারা জাতীয় ও আন্তর্জাতিক পর্যায়ে অবদান রাখতে সক্ষম।
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="mv-card vision-card">
              <div class="mv-icon">
                <i class="fas fa-eye"></i>
              </div>
              <h3>আমাদের ভিশন</h3>
              <p>
                একটি আদর্শ শিক্ষাপ্রতিষ্ঠান হিসেবে গড়ে তোলা যা শিক্ষার্থীদের
                সর্বাঙ্গীণ বিকাশ নিশ্চিত করবে এবং তাদেরকে ভবিষ্যতের জন্য
                প্রস্তুত করবে।
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-12">
            <div class="mv-card values-card">
              <div class="mv-icon">
                <i class="fas fa-heart"></i>
              </div>
              <h3>আমাদের মূল্যবোধ</h3>
              <p>
                সততা, নিষ্ঠা, শৃঙ্খলা, সহনশীলতা, সহমর্মিতা এবং দেশপ্রেম - এই
                মূল্যবোধগুলো আমাদের শিক্ষার্থীদের মধ্যে গড়ে তোলাই আমাদের লক্ষ্য।
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- History Timeline Section -->
    <section class="history-section">
      <div class="container">
        <div class="section-header">
          <h2 class="section-title">আমাদের ইতিহাস</h2>
          <p class="section-subtitle">
            গৌরবময় অতীত থেকে বর্তমান পর্যন্ত আমাদের যাত্রা
          </p>
        </div>

        <div class="timeline">
          <div class="timeline-container left">
            <div class="timeline-content">
              <h3>২০২৩</h3>
              <p>
                XYZ স্কুল এবং কলেজ প্রতিষ্ঠিত হয়। প্রথমে এটি XYZ গভর্ণমেন্ট
                স্কুল নামে পরিচিত ছিল।
              </p>
            </div>
          </div>
          <div class="timeline-container right">
            <div class="timeline-content">
              <h3>২০২৪</h3>
              <p>
                প্রথম ব্যাচের শিক্ষার্থীরা এসএসসি পরীক্ষায় অংশগ্রহণ করে এবং ৯৫%
                পাশের হার অর্জন করে।
              </p>
            </div>
          </div>
          <div class="timeline-container left">
            <div class="timeline-content">
              <h3>২০২৫</h3>
              <p>
                কলেজ শাখা চালু করা হয় এবং বিজ্ঞান, মানবিক ও বাণিজ্য বিভাগ খোলা
                হয়।
              </p>
            </div>
          </div>
          <div class="timeline-container right">
            <div class="timeline-content">
              <h3>২০২৬</h3>
              <p>
                প্রথম এইচএসসি পরীক্ষায় অংশগ্রহণ করে এবং ৯৮% পাশের হার অর্জন করে।
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Facilities Section -->
    <section class="facilities-section">
      <div class="container">
        <div class="section-header">
          <h2 class="section-title">আমাদের সুযোগ-সুবিধা</h2>
          <p class="section-subtitle">
            আধুনিক শিক্ষার জন্য প্রয়োজনীয় সকল সুবিধা
          </p>
        </div>

        <div class="facilities-grid">
          <div class="facility-card">
            <div class="facility-icon">
              <i class="fas fa-flask"></i>
            </div>
            <h3>আধুনিক ল্যাবরেটরি</h3>
            <p>
              পদার্থবিজ্ঞান, রসায়ন, জীববিজ্ঞান এবং কম্পিউটার ল্যাব সহ আধুনিক
              সুবিধা সম্বলিত ল্যাবরেটরি।
            </p>
          </div>

          <div class="facility-card">
            <div class="facility-icon">
              <i class="fas fa-book"></i>
            </div>
            <h3>সমৃদ্ধ লাইব্রেরি</h3>
            <p>
              ১০,০০০+ বই সম্বলিত আধুনিক লাইব্রেরি যেখানে রয়েছে পাঠাগার ও গবেষণার
              সুবিধা।
            </p>
          </div>

          <div class="facility-card">
            <div class="facility-icon">
              <i class="fas fa-laptop"></i>
            </div>
            <h3>মাল্টিমিডিয়া ক্লাসরুম</h3>
            <p>
              সব ক্লাসরুমে প্রজেক্টর ও সাউন্ড সিস্টেম সহ মাল্টিমিডিয়া শিক্ষার
              সুবিধা।
            </p>
          </div>
        </div>
      </div>
    </section>

@endsection

{{-- This pushes the page-specific JS to the end of the <body> of your master layout --}}
@push('scripts')
    <script src="{{ asset('js/about.js') }}"></script>
@endpush