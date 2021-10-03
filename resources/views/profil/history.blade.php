@extends('layout.main')
@section('content')
  
    <!-- ========================
       page title 
    =========================== -->
    <section class="page-title page-title-layout5">
      <div class="bg-img"><img src="{{asset('assets/images/backgrounds/6.jpg')}}" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-12 d-flex justify-content-between flex-wrap align-items-center">
            <h1 class="pagetitle__heading my-3">Sejarah</h1>
            <nav>
              <ol class="breadcrumb my-3">
                <li class="breadcrumb-item"><a href="index.html">Beranda</a></li>
                <li class="breadcrumb-item"><a href="about-us.html">Profil</a></li>
                <li class="breadcrumb-item active" aria-current="page">Sejarah</li>
              </ol>
            </nav>
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ======================
       FAQ
    ========================= -->
    <section class="faq pt-120 pb-70">
      <div class="container">
        <div class="row">
          {{-- sidebar --}}
          <div class="col-sm-12 col-md-12 col-lg-4">
            <aside class="sidebar has-marign-right">
              <div class="widget widget-help bg-overlay bg-overlay-secondary-gradient">
                <div class="bg-img"><img src="assets/images/banners/5.jpg" alt="background"></div>
                <div class="widget-content">
                  <div class="widget__icon">
                    <i class="icon-call3"></i>
                  </div>
                  <h4 class="widget__title">Emergency Cases</h4>
                  <p class="widget__desc">Please feel welcome to contact our friendly reception staff with any general
                    or medical enquiry call us.
                  </p>
                  <a href="tel:+201061245741" class="phone__number">
                    <i class="icon-phone"></i> <span>01061245741</span>
                  </a>
                </div><!-- /.widget-content -->
              </div><!-- /.widget-help -->
              <div class="widget widget-schedule">
                <div class="widget-content">
                  <div class="widget__icon">
                    <i class="icon-charity2"></i>
                  </div>
                  <h4 class="widget__title">Opening Hours</h4>
                  <ul class="time__list list-unstyled mb-0">
                    <li><span>Monday - Friday</span><span>8.00 - 7:00 pm</span></li>
                    <li><span>Saturday</span><span>9.00 - 10:00 pm</span></li>
                    <li><span>Sunday</span><span>10.00 - 12:00 pm</span></li>
                  </ul>
                </div><!-- /.widget-content -->
              </div><!-- /.widget-schedule -->
            </aside><!-- /.sidebar -->
          </div><!-- /.col-lg-4 -->

          <div class="col-sm-12 col-md-12 col-lg-8" id="accordion">
            <div class="accordion-item opened">
              <div class="accordion__header" data-toggle="collapse" data-target="#collapse3">
                <a class="accordion__title" href="#">Sejarah RSUD R. Ali Manshur</a>
              </div><!-- /.accordion-item-header -->
              <div id="collapse3" class="collapse show" data-parent="#accordion">
                <div class="accordion__body">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint alias rerum asperiores atque eveniet ipsa id autem repudiandae voluptatum maiores nam qui perferendis praesentium labore officiis quos libero omnis ullam delectus voluptate, magni perspiciatis? Laborum esse fugit dolor explicabo recusandae, voluptatum nostrum aut facilis deserunt sunt, animi natus adipisci voluptatibus fuga qui temporibus corporis cupiditate. Voluptas debitis laudantium mollitia, eum cumque officia quis necessitatibus laborum reiciendis eveniet aspernatur? Id, animi molestiae perferendis eligendi consequuntur accusamus fuga ad quia ducimus sint, voluptas sed tenetur inventore! Enim voluptas veniam, repudiandae temporibus autem ut aspernatur magnam. Eaque, fugit voluptatum officia sunt adipisci debitis.</p>
                </div><!-- /.accordion-item-body -->
              </div>
            </div><!-- /.accordion-item -->
            <div class="accordion-item">
              <div class="accordion__header" data-toggle="collapse" data-target="#collapse1">
                <a class="accordion__title" href="#">Daftar Direktur</a>
              </div><!-- /.accordion-item-header -->
              <div id="collapse1" class="collapse" data-parent="#accordion">
                <div class="accordion__body">
                  <p>With any financial product that you buy, it is important that you know you are getting the best
                    advice from a reputable company as often</p>
                </div><!-- /.accordion-item-body -->
              </div>
            </div><!-- /.accordion-item -->
          </div><!-- /.col-lg-8 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.FAQ -->

@endsection