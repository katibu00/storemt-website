@extends('front.layouts.app')
@section('pageTitle','Home')
@section('content')

    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Home 7 : Hero Section 
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
<div class="home-7_hero-section" id="hero">
  <div class="container">
    <div class="row row--custom">
      <div class="col-xxl-auto col-xl-5 col-lg-5 col-md-5 col-sm-6 col-xs-8 col-8" data-aos-duration="1000" data-aos="fade-left" data-aos-delay="300">
        <div class="home-7_hero-image">
          <img class="hero-image" src="/front/elhabibplumbing.com_admin_home.png" alt="banner image">
        </div>
      </div>
      <div class="col-xxl-auto col-xl-7 col-lg-7 col-md-10" data-aos-duration="1000" data-aos="fade-right" data-aos-delay="300">
        <div class="home-7_hero-content">
          <div class="home-7_hero-content-text">
            <span class="badge badge--white">Nigeria's Premier POS Solution!</span>
            <h1 class="hero-content__title heading-xxl fw-700">
              {{-- Fast & reliable web hosting for your website --}}
              Empowering Nigerian Businesses to Thrive
            </h1>
            <p>Take Control of Your Business On the Go with our Mobile-Compatible POS Software Tailored for Nigerian Entrepreneurs.</p>
          </div>
          <div class="home-7_hero-content-button">
            <a href="#" class="btn-masco btn-primary-l07 rounded-pill btn-shadow">Start a 30-day free trial</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~
Home 7 : Fact Section
~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<div class="home-7_fact-section">
  <div class="container">
    <div class="row row--custom  fact-widget-divider">
      <div class="col-xxl-auto  col-lg-3 col-md-6 col-sm-8 col-xs-9">
        <div class="fact-widget">
          <div>
            <img src="/front/image/home-7/fact-icon-1.svg" alt="image alt">
          </div>
          <div>
            <h3 class="fact-widget_title">Exceptional Customer Service</h3>
            <p>Support available 24/7 for your needs.</p>
          </div>
        </div>
      </div>
      <div class="col-xxl-auto col-lg-3 col-md-6 col-sm-8 col-xs-9">
        <div class="fact-widget">
          <div>
            <img src="/front/image/home-7/fact-icon-2.svg" alt="image alt">
          </div>
          <div>
            <h3 class="fact-widget_title">Tailored for Nigeria</h3>
            <p>Uniquely crafted for Nigerian business success.</p>
          </div>
        </div>
      </div>
      <div class="col-xxl-auto  col-lg-3 col-md-6 col-sm-8 col-xs-9">
        <div class="fact-widget last-child">
          <div>
            <img src="/front/image/home-7/fact-icon-3.svg" alt="image alt">
          </div>
          <div>
            <h3 class="fact-widget_title">Mobile-Friendly</h3>
            <p>Conduct all your business on your phone.</p>
          </div>
        </div>
      </div>
      <div class="col-xl-2 col-lg-3 col-md-3 col-sm-5 col-xs-6 col-auto">
        <div class="home-7_fact-navigation-image">
          <div class="fact-round-image">
            <img class="" src="/front/image/home-7/text-circle.png" alt="image alt">
          </div>
          <img src="/front/image/home-7/fact-arrow-icon.png" alt="image alt">
        </div>
      </div>
    </div>
  </div>
</div>
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
Home 7  : Content Section 1
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
<div class="home-7_content-section-1 padding-top-120 padding-bottom-150 bg-light-2">
  <div class="container">
    <div class="row row--custom ">
      <div class=" col-xl-6 col-lg-5 col-auto" data-aos-duration="1000" data-aos="fade-right">
        <div class="home-7_content-image-1 content-image--mobile-width">
          <img src="/front/sales_page.png" alt="transaction page">
        </div>
      </div>
      <div class="col-xl-6 col-lg-7 col-md-9 col-auto" data-aos-duration="1000" data-aos="fade-left">
        <div class="content">
          <div class="content-text-block">
            <span class="badge badge--yellow"> Your Bridge to Business Excellence </span>
            <h2 class="content-title heading-lg heading-lg--cabin text-l7-primary">Meet Shopmate!</h2>
            <p>Shopmate is your trusted partner for business success. Our software solutions are designed to empower Nigerian businesses and beyond. We understand the unique challenges and opportunities of the Nigerian market, and we're committed to helping businesses thrive.</p>
            <p>Our user-friendly and mobile-friendly POS systems offer seamless integration, simplifying your operations. With Shopmate, you can efficiently manage inventory, provide exceptional customer service, and make data-driven decisions through powerful reporting.</p>
            <p> We're more than just software; we're your path to efficiency, profitability, and growth. Choose Shopmate and unlock the potential of your business.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
Home 7 : Service Section 
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
<div class="home-7_service-section padding-bottom-150 bg-light-2" id="services">
  <div class="container">
    <div class="section-heading-wrapper">
      <div class="row justify-content-center text-center">
        <div class="col-xxl-6 col-lg-7 col-md-9">
          <div class="section-heading">
            <span class="badge badge badge--blue">Shopmate's Key Features at a Glance</span>
            <h2 class="section-heading__title heaading-lg heading-lag--cabin text-la7-primary">Fueling Nigerian Businesses with Innovative Tools</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="row justify-content-center gutter-y-default">
      <div class="col-lg-3 col-md-6" data-aos-duration="1000" data-aos="fade-left" data-aos-delay="800">
        <div class="service-card-2">
          <div class="service-card-2__icon">
            <img src="/front/image/home-7/feature-1.svg" alt="image alt">
          </div>
          <div class="service-card-2__body">
            <h3 class="service-card-2__title ">Pilferage Prevention</h3>
            <p>Safeguard your business with security measures like user access controls, transaction tracking, and inventory audits to minimize losses.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6" data-aos-duration="1000" data-aos="fade-left" data-aos-delay="700">
        <div class="service-card-2">
          <div class="service-card-2__icon">
            <img src="/front/image/home-7/feature-2.svg" alt="image alt">
          </div>
          <div class="service-card-2__body">
            <h3 class="service-card-2__title ">Sales and Reorder Management</h3>
            <p>Streamline sales processes, generate invoices, manage returns and place reorder for improved customer satisfaction.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6" data-aos-duration="1000" data-aos="fade-left" data-aos-delay="600">
        <div class="service-card-2">
          <div class="service-card-2__icon">
            <img src="/front/image/home-7/feature-3.svg" alt="image alt">
          </div>
          <div class="service-card-2__body">
            <h3 class="service-card-2__title ">Reporting and Analytics</h3>
            <p>Gain valuable insights into sales, inventory, expenses, returns, and other financials across your branches to make data-driven business decisions.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6" data-aos-duration="1000" data-aos="fade-left" data-aos-delay="500">
        <div class="service-card-2">
          <div class="service-card-2__icon">
            <img src="/front/image/home-7/feature-4.svg" alt="image alt">
          </div>
          <div class="service-card-2__body">
            <h3 class="service-card-2__title ">Credit Sales and Deposits</h3>
            <p>Offer credit sales and manage customer deposits seamlessly. Provide your customers with flexible payment choices, boosting sales and trust.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6" data-aos-duration="1000" data-aos="fade-left" data-aos-delay="400">
        <div class="service-card-2">
          <div class="service-card-2__icon">
            <img src="/front/image/home-7/feature-5.svg" alt="image alt">
          </div>
          <div class="service-card-2__body">
            <h3 class="service-card-2__title "> Multi-Branch Support</h3>
            <p>Effortlessly manage multiple branches with centralized control. Sync data across locations, ensuring consistency and efficiency.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6" data-aos-duration="1000" data-aos="fade-left" data-aos-delay="300">
        <div class="service-card-2">
          <div class="service-card-2__icon">
            <img src="/front/image/home-7/feature-6.svg" alt="image alt">
          </div>
          <div class="service-card-2__body">
            <h3 class="service-card-2__title ">Mobile Accessibility</h3>
            <p>Manage your business something you already own: your cellphone. Process transactions, access real-time data, and manage your business from your smartphone or tablet.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6" data-aos-duration="1000" data-aos="fade-left" data-aos-delay="200">
        <div class="service-card-2">
          <div class="service-card-2__icon">
            <img src="/front/image/home-7/feature-7.svg" alt="image alt">
          </div>
          <div class="service-card-2__body">
            <h3 class="service-card-2__title ">Customer Relationship Management</h3>
            <p>Build lasting customer relationships with detailed customer profiles and credit purchase management. Keep customers coming back with personalized service.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6" data-aos-duration="1000" data-aos="fade-left" data-aos-delay="100">
        <div class="service-card-2">
          <div class="service-card-2__icon">
            <img src="/front/image/home-7/feature-8.svg" alt="image alt">
          </div>
          <div class="service-card-2__body">
            <h3 class="service-card-2__title ">Inventory Management</h3>
            <p>Simplify inventory management with real-time tracking, stock alerts, and reorder management. Shopmate ensures you have the right products in stock when you need them.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
Home 7  : Content Section 2
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
<div class="home-7_content-section-2 padding-bottom-120 bg-light-2">
  <div class="container">
    <div class="row row--custom ">
      <div class=" col-xl-6 col-lg-5 col-auto" data-aos-duration="2000" data-aos="fade-right">
        <div class="home-7_content-image-2 content-image--mobile-width">
          <img src="/front/customer_profile.png" alt="alternative text">
        </div>
      </div>
      <div class="col-xl-6 col-lg-7 col-md-9 col-auto" data-aos-duration="2000" data-aos="fade-left">
        <span class="badge badge badge--purple">Unlock Efficiency Today</span>
        <div class="content">
          <div class="content-text-block">
            <h2 class="content-title heading-md heading-lg heading-lg--cabin text-l7-primary">
              Streamline Operations, Boost Profits
            </h2>
            <p>Experience the power of Shopmate, your gateway to a digitally transformed business landscape. From effortless inventory management to personalized customer interactions, we redefine how you operate.</p>
          </div>
          <div class="content-list-block">
            <ul class="content-list">
              <li class="content-list-item">
                <img src="/front/image/icons/icon-check-black.svg" alt="alternative text">
                Boost Productivity: Streamline tasks, enhance efficiency.
              </li>
              <li class="content-list-item">
                <img src="/front/image/icons/icon-check-black.svg" alt="alternative text">
                Efficient Inventory Control: Minimize losses, optimize stock.
              </li>
              <li class="content-list-item">
                <img src="/front/image/icons/icon-check-black.svg" alt="alternative text">
                Data-Driven Decision Making: Make informed choices.
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
Home 7 : Pricing Section
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
<div class="home-7_pricing-section section-padding-120" id="pricing">
  <div class="container">
    <div class="row text-center justify-content-center">
      <div class="col-xxl-6 col-xl-7 col-lg-8 col-md-9">
        <div class="section-heading">
          <span class="badge badge badge--yellow">Tailored Pricing Tiers</span>
          <h2 class="section-heading__title heading-lg heading-lg--cabin text-white">Choose, Grow, Succeed with Shopmate</h2>
          <div class="home-7_pricing-control-block">
            <div class="pricing-control-rounded">
              <span class="active" data-pricing-trigger="pricing-1" data-target="monthly">Monthly</span>
              <span data-pricing-trigger="pricing-1" data-target="yearly">Yearly</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row row--custom" data-plan-id="pricing-1" data-plan-active="monthly">
      <div class="col-lg-4 col-md-6" data-aos-duration="1000" data-aos="fade-up">
        <div class="pricing-card-3 h-100">
          <div class="pricing-card-3__head">
            <h3 class="pricing-card-3__plan">Basic</h3>
            <div class="pricing-card-3__price-block">
              <h3><span class="pricing-card-3__price-sign">₦</span><span class="pricing-card-3__price dynamic-value" data-yearly="5500" data-monthly="6000">6000</span></h3>
              <span class="pricing-card-3__price-time">Per month</span>
            </div>
          </div>
          <div class="pricing-card-3__body">
            <ul class="pricing-card-3__list">
              <li>Single Location</li>
              <li>Up to 100 Registered Customers</li>
              <li>Basic Reorder Management</li>
              <li>Advanced Pilferage Prevention Mechanisms</li>
              <li>Inventory tracking and management</li>
              <li>Basic reporting and analytics</li>
              <li class="disabled">Multiple Locations</li>
              <li class="disabled">Advanced Reorder Management</li>
            </ul>
          </div>
          <div class="pricing-card-3__button">
            <a href="pricing.html" class="btn-masco btn-outline rounded-pill w-100">Purchase now</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6" data-aos-duration="1000" data-aos="fade-up">
        <div class="pricing-card-3 active h-100">
          <div class="pricing-card-3__head">
            <h3 class="pricing-card-3__plan">Business</h3>
            <div class="pricing-card-3__price-block">
              <h3><span class="pricing-card-3__price-sign">₦</span><span class="pricing-card-3__price dynamic-value" data-yearly="9000" data-monthly="9500">9500</span></h3>
              <span class="pricing-card-3__price-time">Per month</span>
            </div>
          </div>
          <div class="pricing-card-3__body">
            <ul class="pricing-card-3__list">
              <li>Up to 3 Locations</li>
              <li>Up to 500 Registered Customers</li>
              <li>Basic and Advanced Reorder Management</li>
              <li>Advanced Pilferage Prevention Mechanisms</li>
              <li>Priority Support</li>
              <li>Credit purchases management for customers</li>
              <li class="disabled">Unlimited staffs</li>
              <li class="disabled">Customization and Branding</li>
            </ul>
          </div>
          <div class="pricing-card-3__button">
            <a href="pricing.html" class="btn-masco btn-primary-l07 rounded-pill  w-100">Purchase now</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6" data-aos-duration="1000" data-aos="fade-up">
        <div class="pricing-card-3 h-100">
          <div class="pricing-card-3__head">
            <h3 class="pricing-card-3__plan">Enterprise</h3>
            <div class="pricing-card-3__price-block">
              <h3><span class="pricing-card-3__price-sign">₦</span><span class="pricing-card-3__price dynamic-value" data-yearly="48000" data-monthly="50000">50000</span></h3>
              <span class="pricing-card-3__price-time">Per month</span>
            </div>
          </div>
          <div class="pricing-card-3__body">
            <ul class="pricing-card-3__list">
              <li>Unlimited Locations</li>
              <li>Unlimited Registered Customers and Staffs</li>
              <li>Basic and Advanced Reorder Management</li>
              <li>Advanced Reporting</li>
              <li>Priority Support</li>
              <li>Dedicated Account Manager</li>
              <li>Customizable Features and Branding Options</li>
              <li>Offline Mode</li>
            </ul>
          </div>
          <div class="pricing-card-3__button">
            <a href="pricing.html" class="btn-masco btn-outline rounded-pill w-100">Purchase now</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
Home 7  : Testimonial Section 
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
<div class="home-7_testimonial-section section-padding-120 bg-light-2" id="testimonial">
  <div class="container">
    <div class="row row--custom">
      <div class="col-xl-5 col-lg-6 col-md-9 col-sm-11 home-7_testimonial-card-wrapper">
        <div class="testimonial-card-2 ">
          <div class="testimonial-card-2__image">
            <img src="/front/image/icons/star-five.svg" class="testimonial-card-2__star" alt="image alt">
          </div>
          <div class="testimonial-card-2__body">
            <h3 class="testimonial-card-2__title">Game-Changer for My Boutique! </h3>
            <p>Shopmate transformed my boutique operations! The inventory management is a game-changer, and the support is unmatched. Grateful for the boost in efficiency and customer satisfaction.</p>
          </div>
          <div class="testimonial-card-2__metadata">
            <h4 class="testimonial-card-2__user-name">Blessing Okon</h4>
            <span class="testimonial-card-2__user-position">Blissful Trends Boutique</span>
          </div>
        </div>
        <div class="testimonial-card-2 ">
          <div class="testimonial-card-2__image">
            <img src="/front/image/icons/star-five.svg" class="testimonial-card-2__star" alt="image alt">
          </div>
          <div class="testimonial-card-2__body">
            <h3 class="testimonial-card-2__title">Efficient and All-On-Phone Solution </h3>
            <p>Switching to Shopmate was the best decision for my electronics store. The user-friendly interface and efficient inventory control have simplified daily tasks. Highly recommended!</p>
          </div>
          <div class="testimonial-card-2__metadata">
            <h4 class="testimonial-card-2__user-name">Tunde Adeoye</h4>
            <span class="testimonial-card-2__user-position">Tech Haven Electronics</span>
          </div>
        </div>
        <div class="testimonial-card-2 ">
          <div class="testimonial-card-2__image">
            <img src="/front/image/icons/star-five.svg" class="testimonial-card-2__star" alt="image alt">
          </div>
          <div class="testimonial-card-2__body">
            <h3 class="testimonial-card-2__title">Top-Notch Support and Features </h3>
            <p>Shopmate's support is unparalleled, and the features are exactly what my fashion store needed. The credit sales management is a standout feature. Great product! ❤</p>
          </div>
          <div class="testimonial-card-2__metadata">
            <h4 class="testimonial-card-2__user-name">Ahmed Muhammad Bello</h4>
            <span class="testimonial-card-2__user-position"> StyleVogue Fashion</span>
          </div>
        </div>
      </div>
      <div class="offset-xl-2 col-xl-5  col-lg-6 col-md-8 col-xs-11">
        <div class="testimonial-content">
          <span class="badge badge--blue">Clients Reviews</span>
          <div class="content">
            <div class="content-text-block">
              <h2 class="heading-lg heading-lg--cabin text-l7-primary">Customers Speak, We Deliver Excellence</h2>
              <p>Discover why businesses trust Shopmate. Real results, exceptional service.</p>
            </div>
            <div class="content-button-block">
              <a href="" class="btn-masco btn-primary-l07 rounded-pill btn-shadow">Read All Trustpilot Reviews</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="cta-home-7" id="contact">
  <div class="container">
    <div class="cta-content-block">
      <div class="cta-text-block">
        <h2 class=" heading-lg heading-lg--cabin text-white">Sign up for the best business updates today</h2>
      </div>
      <div class="cta-form-wrapper">
        <form action="#">
          <div class="cta-form__input-block">
            <input type="text" placeholder="Enter your email">
            <button class="btn-masco btn-primary-l07 rounded-pill"><span>Get Started</span></button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection