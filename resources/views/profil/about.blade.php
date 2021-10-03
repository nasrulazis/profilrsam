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
            <h1 class="pagetitle__heading my-3">Tentang Kami</h1>
            <nav>
              <ol class="breadcrumb my-3">
                <li class="breadcrumb-item"><a href="index.html">Beranda</a></li>
                <li class="breadcrumb-item"><a href="about-us.html">Profil</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tentang Kami</li>
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
                <div class="bg-img"><img src="{{asset('assets/images/banners/5.jpg')}}" alt="background"></div>
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
                <a class="accordion__title" href="#">Profil</a>
              </div><!-- /.accordion-item-header -->
              <div id="collapse3" class="collapse show" data-parent="#accordion">
                <div class="accordion__body">
                  <p>Rumah Sakit Umum Daerah R. Ali Manshur selanjutnya disingkat dengan RSUD R. Ali Manshur adalah salah satu Rumah Sakit Pemerintah Daerah yang berada di wilayah Kabupaten Tuban Jawa Timur yang merupakan pengembangan dari Puskesmas Rawat Inap Jatirogo dengan dasar untuk meningkatkan pelayanan rujukan di wilayah Tuban ujung Barat. Untuk meningkatkan pelayanan kesehatan rujukan khusus di wilayah Barat Kabupaten Tuban maka dikembangkanlah Puskesmas Jatirogo menjadi Rumah Sakit Umum Kelas D yang selanjutnya disebut sebagai Rumah Sakit Umum Daerah R. Ali Manshur.</p><br>
                  <p>Rumah Sakit Umum Daerah R. Ali Manshur adalah unit pelaksana teknis Dinas Kesehatan Kabupaten Tuban yang bertanggung menyelenggarakan pembangunan kesehatan. Rumah Sakit Umum Daerah R. Ali Manshur adalah salah satu Rumah Sakit Umum yang berada di wilayah Kabupaten Tuban yang terletak di Ujung Barat dan berbatasan dengan Propinsi Jawa Tengah. Jarak Rumah Sakit Umum Daerah R. Ali Manshur dengan Rumah Sakit Kabupaten Tuban 60 Km, dengan Rumah Sakit Kabupaten Bojonegoro 50 Km serta dengan Rumah Sakit Kabupaten Rembang berjarak 45 Km. Wilayah terdekat Rumah Sakit Umum Daerah R. Ali Manshur terdiri dari 5 Kecamatan terdekat yaitu Kecamatan Jatirogo, Kecamatan Kenduruan, Kecamatan bancar, Kecamatan Bangilan, Kecamatan Senori serta Kecamatan Sale Propinsi Jawa Tengah.</p><br>
                    <p>Jarak yang cukup jauh antara Rumah Sakit Umum Daerah R. Ali Manshur dengan Rumah Sakit Kabupaten telah menjadikan Rumah Sakit Umum Daerah R. Ali Manshur menjadi pilihan masyarakat wilayah Jatirogo dan sekitarnya dalam hal pelayanan kesehatan lanjutan yang utama bagi masyarakat. Dari kenyataan ini maka Rumah Sakit Umum Daerah R. Ali Manshur dituntut untuk bisa memberikan pelayanan kesehatan lanjutan yang baik dan bermutu. Rumah Sakit Umum Daerah R. Ali Manshur dibangun mulai tahun 2013 sampai dengan tahun 2019 dimana sarana fisik/gedung RSUD R. Ali Manshur terdiri dari (1) Gedung Gawat Darurat dengan lantai 2 yang digunakan untuk kegiatan Instalasi Gawat Darurat dan Kamar Operasi, (2) Gedung Poli dengan lantai 2 yang digunakan untuk ruangan Poli, Ponek, Neonatus, Apotek dan Administrasi (3) Gedung Manajemen dengan lantai 2 digunakan untuk gedung pertemuan dan administrasi rumah sakit, (4) Gedung Rawat Inap dengan 2 lantai untuk Pelayanan Kesehatan Rawat Inap, (5) Gedung Radiologi dengan lantai 2 yang digunakan untuk Intensive Care Unit, Instalasi Gizi, Ruang Laundry, Instalasi Farmasi, Instalasi Pemeliharaan Sarana Rumah Sakit, dan Unit x ray, (6) Gedung IPAL digunakan sebagai lahan IPAL dan Incenerator serta Rawat Jenazah.
                    </p><br>
                </div><!-- /.accordion-item-body -->
              </div>
            </div><!-- /.accordion-item -->
            <div class="accordion-item">
              <div class="accordion__header" data-toggle="collapse" data-target="#collapse1">
                <a class="accordion__title" href="#">Kondisi Umum</a>
              </div><!-- /.accordion-item-header -->
              <div id="collapse1" class="collapse" data-parent="#accordion">
                <div class="accordion__body">
                  <ul>
                    <li>Nama		: RSUD R. Ali Manshur</li>
                    <li>Alamat		: Jl. Raya timur 131 Jatirogo Kecamatan Jatirogo Kabupaten Tuban</li>
                    <li>Telepon		: (0356) 551064</li>
                    <li>Berdiri		: 2019</li>
                    <li>Tipe		: Kelas D</li>
                  </ul>
                </div><!-- /.accordion-item-body -->
              </div>
            </div><!-- /.accordion-item -->
            <div class="accordion-item">
              <div class="accordion__header" data-toggle="collapse" data-target="#collapse2">
                <a class="accordion__title" href="#">Luas dan Batas Wilayah</a>
              </div><!-- /.accordion-item-header -->
              <div id="collapse2" class="collapse" data-parent="#accordion">
                <div class="accordion__body">
                  <p>Luas tanah RSUD R. Ali Manshur ± Km²</p>
                  <p> Batas-batas wilayah 	:</p>
                  <ul>
                    <li>UTARA 		: Kecamatan Bancar (wilayah kerja Puskesmas Bancar dan Bulu)</li>
                    <li>SELATAN	: Kecamatan Kenduruan (wilayah kerja Puskesmas Kenduruan)</li>
                    <li>BARAT		: Kecamatan Jatirogo (wilayah kerja Puskesmas Jatirogo dan kebonharjo serta Kecamatan Sale/Jawa Tengah)</li>
                    <li>TIMUR		: Kecamatan Bangilan (wilayah kerja Puskesmas Bangilan dan Senori)</li>
                  </ul>  
                  <img src="{{asset('assets\images\gallery\denah.png')}}" alt="">
                </div><!-- /.accordion-item-body -->
              </div>
            </div><!-- /.accordion-item -->
          </div><!-- /.col-lg-8 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.FAQ -->

@endsection