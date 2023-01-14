<?php
    include "koneksi.php";
    if(isset($_POST['bsimpan'])){
      mysqli_query($connect, "insert into biodata set
      No = '$_POST[tno]'
      Nama = '$_POST[tnama]',
      Nim = '$_POST[tnim]',
      Tempat_Lahir = '$_POST[tttl]'");
      

    }
    include "koneksi.php";
    if(isset($_POST['simpan'])){
      mysqli_query($connect, "insert into riwayat_pendidikan set
      Nama = '$_POST[tnama]',
      SD = '$_POST[tsd]',
      SMP = '$_POST[tsmp]',
      SMA = '$_POST[tsmp]',
      S1 = '$_POST[ts1]'");

    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Personal Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Personal - v4.9.1
  * Template URL: https://bootstrapmade.com/personal-free-resume-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">

      <h1><a href="index.html">Monicha Hartini</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="mr-auto"><img src="assets/img/logo.jpg" alt="" class="img-fluid"></a> -->
      <h2>Saya seorang <span>Mahasiswa</span> Universitas Cokroaminoto Palopo</h2>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link active" href="#header">Home</a></li>
          <li><a class="nav-link" href="#about">About</a></li>
          <li><a class="nav-link" href="#resume">Resume</a></li>
          <li><a class="nav-link" href="#portfolio">Portfolio</a></li>
          <li><a class="nav-link" href="#biodata">Biodata</a></li>
          <li><a class="nav-link" href="#pendidikan">Pendidikan</a></li>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="social-links">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
      </div>

    </div>
  </header><!-- End Header -->

  <!-- ======= About Section ======= -->
  <section id="about" class="about">

    <!-- ======= About Me ======= -->
    <div class="about-me container">

      <div class="section-title">
        <h2>TENTANG</h2>
        <p>INI BIODATA TENTANG SAYA</p>
      </div>

      <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
          <img src="assets/img/me.jpeg" class="img-fluid" alt="">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
          <h3>Biodata </h3>
          <p class="fst-">
            Saya seorang mahasiswi semester 5 Universitas Cokroaminoto Palopo Fakultas Taknik Komputer Program Studi Informatika
          </p>
          <div class="row">
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Nama:</strong> <span> Monicha Hartini</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>TTL:</strong> <span> Langkidi 02 Juni 2000</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>No Hp:</strong> <span>082 253 543 236</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Alamat:</strong> <span>Bajo, Luwu Sulawesi Selatan</span></li>
              </ul>
            </div>
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Umur:</strong> <span>22</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Status:</strong> <span>Mahasiswa</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>email:</strong> <span>monichahartini26@gmail.com</span></li>
                
              </ul>
            </div>
          </div>
          <p>
            
          </p>
        </div>
      </div>

    </div><!-- End About Me -->

    <!-- ======= Counts ======= -->
    <div class="counts container">

      <div class="row">

        <div class="col-lg-3 col-md-6">
          <div class="count-box">
            <i class="bi bi-emoji-smile"></i>
            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
            <p>Happy Clients</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
          <div class="count-box">
            <i class="bi bi-journal-richtext"></i>
            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
            <p>Projects</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
          <div class="count-box">
            <i class="bi bi-headset"></i>
            <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
            <p>Hours Of Support</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
          <div class="count-box">
            <i class="bi bi-award"></i>
            <span data-purecounter-start="0" data-purecounter-end="24" data-purecounter-duration="1" class="purecounter"></span>
            <p>Awards</p>
          </div>
        </div>

      </div>

    </div><!-- End Counts -->

    <!-- ======= Skills  ======= -->
    <div class="skills container">

      <div class="section-title">
        <h2>Skills</h2>
      </div>

      <div class="row skills-content">

        <div class="col-lg-6">

          <div class="progress">
            <span class="skill">HTML <i class="val">30%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">CSS <i class="val">10%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">JavaScript <i class="val">75%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

        </div>

        <div class="col-lg-6">

          <div class="progress">
            <span class="skill">PHP <i class="val">40%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">WordPress/CMS <i class="val">35%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">Photoshop <i class="val">10%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

        </div>

      </div>

    </div><!-- End Skills -->

    

    <!-- ======= Testimonials ======= -->
    <div class="testimonials container">

      <div class="section-title">
        <h2>Quote Of The Day</h2>
      </div>

      <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                "Teruslah berbuat baik meski itu melelahkan, karena lelahnya akan hilang sedangkan pahalanya InsyaAllah akan terus ada".
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="assets/img/testimonials/testimonials -1.jpg" class="testimonial-img" alt="">
              <h3>Ustads Hanan Ataki</h3>
              <h4>Ulama</h4>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                "Akar pendidikan itu pahit, tapi buahnya manis". 
              </p>
              <img src="assets/img/testimonials/testimonials -2.jpg" class="testimonial-img" alt="">
              <h3>Aristoteles</h3>
              <h4>Filsuf</h4>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                "Pendidikan adalah apa yang tersisa setelah melupakan semua yang dia pelajari di sekolah"
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="assets/img/testimonials/testimonials -3.jpg" class="testimonial-img" alt="">
              <h3>Albert Einstein</h3>
              <h4>Fisikawan</h4>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                "Apapun yang dilakukan oleh seseorang itu, hendaknya dapat bermanfaat bagi dirinya sendiri, bermanfaat bagi bangsanya, dan bermanfaat bagi manusia di dunia pada umumnya" 
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="assets/img/testimonials/testimonials -4.jpg" class="testimonial-img" alt="">
              <h3>Ki Hadjar Dewantara</h3>
              <h4>Mantan Menteri Pengajaran Republik Indonesia</h4>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                "Kalau impianmu tak bisa membuatmu takut, mungkin karena impianmu tak cukup besar."
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="assets/img/testimonials/testimonials -5.jpg" class="testimonial-img" alt="">
              <h3>Muhammad Ali</h3>
              <h4>Mantan petinju professional </h4>
            </div>
          </div><!-- End testimonial item -->

        </div>
        <div class="swiper-pagination"></div>
      </div>

      <div class="owl-carousel testimonials-carousel">

      </div>

    </div><!-- End Testimonials  -->

  </section><!-- End About Section -->

  

    <!-- ======= My Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container">

        <div class="section-title">
          <h2>Resume</h2>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <h3 class="resume-title">Cek Resume Saya</h3>
            <div class="resume-item pb-0">
              <h4>Ringkasan</h4>
              <p>
              <ul>
                Nama saya Monicha Hartini. Saya kuliah di jurusan Teknik Komputer semester 5. Saat ini saya masih mengembangkan keahlian saya di bidang IT dengan berkuliah di Universitas Cokroaminoto Palopo.
                
              </ul>
              </p>
            </div>

            
          </div>
          <div class="col-lg-6">
            <h3 class="resume-title">Pendidikan</h3>
            <div class="resume-item">
              <h4>Pelajar</h4>
              <h5>2006 - Sekarang</h5>
              <p>
              <ul>
                <li>SD: SDN 248 Kamp. Baru</li>
                <li>SMP: SMP Negeri 1 Bajo</li>
                <li>SMA: SMA Negeri 12 Luwu</li>
                <li>Perguruan Tinggi: Universitas Cokroaminoto Palopo</li>
              </ul>
              </p>
            </div>
            <div class="resume-item">
              
    </section><!-- End My Resume Section -->

  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">
    <div class="container">

      <div class="section-title">
        <h2>Portfolio</h2>
        <p>Foto</p>
      </div>

      <div class="row">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">Keluarga</li>
            <li data-filter=".filter-card">Idol</li>
            <li data-filter=".filter-web">Teman</li>
          </ul>
        </div>
      </div>

      <div class="row portfolio-container">

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Keluarga 1</h4>
              <p>Keluarga</p>
              <div class="portfolio-links">
                <a href="" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Keluarga 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Teman 3</h4>
              <p>Teman</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="TEman "><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Keluarga 2</h4>
              <p>Keluarga</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Keluarga 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Idol 2</h4>
              <p>Idol</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Idol 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Teman 2</h4>
              <p>Teman</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Teman 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Keluarga 3</h4>
              <p>Keluarga</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Keluarga 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Idol 1</h4>
              <p>Idol</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Idol 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Teman 3</h4>
              <p>Teman</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Teman 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Teman 3</h4>
              <p>Teman</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Teman 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Portfolio Section -->

  <!-- Biodata Section -->
  <section id="biodata" class = "biodata">
  <div class="container" data-aos="fade-up">
            <h3 class="text-center"><strong>Form Input</strong></h3>

            <!-- awal row -->
            <div class="row">
              <div class="col-md-8 mx-auto">
                <!-- awal card -->
                  <div class="card mt-3 text-dark">
                      
                      <div class="card-body">
                        <!-- awal form -->
                          <form method="POST">
                            <div class="card-header  text-center">
                            <strong>Form Input Data</strong> 
                            </div>
                            <div class="mb-3">
                              <label class="form-label">No</label>
                              <input type="text" name="tno" class="form-control" placeholder="Masukkan No">
                            </div>

                            <div class="mb-3">
                              <label class="form-label">Nama</label>
                              <input type="text" name="tnama" class="form-control" placeholder="Masukkan Nama">
                            </div>

                            <div class="mb-3">
                              <label class="form-label">Nim</label>
                              <input type="text" name="tnim" class="form-control" placeholder="Masukkan Nim">
                            </div>

                            <div class="mb-3">
                              <label class="form-label">Tempat Tanggal Lahir</label>
                              <input type="text" name="tttl" class="form-control" placeholder="Masukkan Tempat Tanggal Lahir">
                            </div>

                            <div class="text-center">
                                <button class="btn btn-primary" name="bsimpan" type="submit"> Simpan</button>
                            </div>
                        </form>
                        <!-- akhir form -->
                      </div>
                  </div>
                <!-- akhir card -->
              </div>
              <!-- awal table -->
          <div class="col-md-8 mx-auto text-dark">
                  <div class="card mt-5 mx-auto">
                          <div class="card-header bg-success text-light text-center">
                            Table Biodata Mahasiswa
                          </div>

                          <div class="card-body">
                                  <table class="table table-striped table-hover table-bordered ">
                                        <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Nim</th>
                                                <th>Tempat Tanggal Lahir</th>
                                                
                                        </tr>

                                        <?php
                                          include "koneksi.php";
                                          $No=1;
                                          $ambildata = mysqli_query($connect,"select * from biodata");
                                          while ($tampil = mysqli_fetch_array($ambildata)){
                                            echo "
                                          
                                          <tr>
                                            <td>$No</td>
                                            <td>$tampil[No]</td>
                                            <td>$tampil[Nama]</td>
                                            <td>$tampil[Nim]</td>
                                            <td>$tampil[Tempat_Tanggal_Lahir]</td>
                                          </tr>";

                                          $No++;
                                          }
                                        ?>
                                     
                                  </table>
                          </div>
                  </div>
          </div>
          <!-- akhir tabel -->

      <!--akhir col-->
              </div>
    <!-- akhir row -->
        </div>
  </div>
</section>
  <!-- Akhir Tabel Form -->
            </div>
            <!-- akhir row -->
  </div>
</section>
  <!-- End Biodata Section -->
  <section id="pendidikan" class = "pendidikan">
  <div class="container" data-aos="fade-up">
            <h3 class="text-center"><strong>Form Input</strong></h3>

            <!-- awal row -->
            <div class="row">
              <div class="col-md-8 mx-auto">
                <!-- awal card -->
                  <div class="card mt-3 text-dark">
                      
                      <div class="card-body">
                        <!-- awal form -->
                          <form method="POST">
                            <div class="card-header  text-center">
                            <strong>Form Input Data</strong> 
                            </div>
                            <div class="mb-3">
                              <label class="form-label">Nama</label>
                              <input type="text" name="tnama" class="form-control" placeholder="Masukkan Nama">
                            </div>

                            <div class="mb-3">
                              <label class="form-label">SD</label>
                              <input type="text" name="tsd" class="form-control" placeholder="Masukkan SD">
                            </div>

                            <div class="mb-3">
                              <label class="form-label">SMP</label>
                              <input type="text" name="tsmp" class="form-control" placeholder="Masukkan SMP">
                            </div>

                            <div class="mb-3">
                              <label class="form-label">SMA</label>
                              <input type="text" name="tsma" class="form-control" placeholder="Masukkan SMA">
                            </div>

                            <div class="mb-3">
                              <label class="form-label">S1</label>
                              <input type="text" name="ts1" class="form-control" placeholder="Masukan S1">
                            </div>

                            <div class="text-center">
                                <button class="btn btn-primary" name="simpan" type="submit"> Simpan</button>
                            </div>
                        </form>
                        <!-- akhir form -->
                      </div>
                  </div>
                <!-- akhir card -->
              </div>
               <!-- awal table -->
          <div class="col-md-8 mx-auto">
                  <div class="card mt-5 mx-auto">
                          <div class="card-header bg-success text-light text-center">
                            Table Pendidikan
                          </div>

                          <div class="card-body text-dark">
                                  <table class="table table-striped table-hover table-bordered ">
                                        <tr>
                                                <th>Nama</th>
                                                <th>SD</th>
                                                <th>SMP</th>
                                                <th>SMA</th>
                                                <th>S1</th>
                                        </tr>

                                        <?php
                                          include "koneksi.php";
                                          $No=1;
                                          $ambildata = mysqli_query($connect,"select * from riwayat_pendidikan");
                                          while ($tampil = mysqli_fetch_array($ambildata)){
                                            echo "
                                          
                                          <tr>
                                            <td>$tampil[Nama]</td>
                                            <td>$tampil[SD]</td>
                                            <td>$tampil[SMP]</td>
                                            <td>$tampil[SMA]</td>
                                            <td>$tampil[S1]</td>
                                            
                                            
                                          </tr>";

                                          $No++;
                                          }
                                        ?>
                                     
                                  </table>
                          </div>
                  </div>
          </div>
          <!-- akhir tabel -->

            </div>
            <!-- akhir row -->
  </div>
</section>
  <!-- Pendidikan -->
  <!-- End Pendidikan -->

  <!-- ======= Footer ======= -->
  
  <div class="credits">
    <!-- All the links in the footer should remain intact. -->
    <!-- You can delete the links only if you purchased the pro version. -->
    <!-- Licensing information: https://bootstrapmade.com/license/ -->
    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/personal-free-resume-bootstrap-template/ -->
    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
  </div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>