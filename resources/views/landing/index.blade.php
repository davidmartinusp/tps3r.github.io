@extends('layout.layout')

@section('section')
<div class="page-banner home-banner">
    <div class="container h-100">
        <div class="row align-items-center h-100">
            <div class="col-lg-6 py-3 wow fadeInUp">
                <h1 class="mb-4">Menjadi Bagian dari Kita</h1>
                <p class="text-lg mb-5">Bapeling adalah aplikasi yang membantu masyarakat
                    dalam menyalurkan sampah mereka kepada orang
                    yang tepat.</p>

                <a href="#" class="btn btn-outline-success rounded-pill ml-2">Lebih Banyak</a>
                <a href="#" class="btn btn-success btn-split ml-2">Tonton Video <div class="fab"><span class="mai-play text-success"></span></div></a>
            </div>
            <div class="col-lg-6 py-3 wow zoomIn">
                <div class="img-place">
                    <img src="../assets/img/logo_baru.jpeg" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<main>
    <!-- style line -->
    <style>
        .divider {
            background-color: #0cc81c;
        }
    </style>
    <div class="page-section features">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4 py-3 wow fadeInUp">
                    <div class="d-flex flex-row">
                        <div class="img-fluid mr-3">
                            <img src="../assets/img/reduce.png" alt="image" style="width:80px;height:80px;">
                        </div>
                        <div>
                            <h4>Reduce</h4>
                            <p>Mengurangi segala sesuatu yang mengakibatkan sampah.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 py-3 wow fadeInUp">
                    <div class="d-flex flex-row">
                        <div class="img-fluid mr-3">
                            <img src="../assets/img/reuse.png" alt="image" style="width:80px;height:80px;">
                        </div>
                        <div>
                            <h4>Reuse</h4>
                            <p>Menggunakan kembali sampah yang masih dapat digunakan.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 py-3 wow fadeInUp">
                    <div class="d-flex flex-row">
                        <div class="img-fluid mr-3">
                            <img src="../assets/img/recycle.png" alt="image" style="width:80px;height:80px;">
                        </div>
                        <div>
                            <h4>Recycle</h4>
                            <p>Mengolah kembali (daur ulang) sampah menjadi barang atau produk baru yang bermanfaat.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- .container -->
    </div> <!-- .page-section -->

    <div class="page-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 py-3 wow zoomIn">
                    <div class="img-place text-center">
                        <img src="../assets/img/sampah 2.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 py-3 wow fadeInRight">
                    <h2 class="title-section">Mari Mengenal <span class="marked text-success">Kami</span> Lebih Dekat</h2>
                    <div class="divider"></div>
                    <p>Plastik adalah limbah yang tidak mudah terurai, proses
                        pengolahannya menimbulkan toksik dan bersifat karsinogenik
                        atau zat yang menyebabkan kanker.</p>
                    <p>
                        Sampah plastik menjadi permasalahan utama dalam pencemaran
                        lingkungan baik pencemaran tanah maupun laut.
                    </p>
                    <a href="#" class="btn btn-success">Lebih Detail</a>
                </div>
            </div>
        </div> <!-- .container -->
    </div> <!-- .page-section -->

    <div class="page-section">
        <div class="container">
            <div class="text-center wow fadeInUp">
                <div class="subhead">Kenapa Harus Kami</div>
                <h2 class="title-section">Kenyamananmu adalah <span class="marked text-success">Prioritas</span> Kami</h2>
                <div class="divider mx-auto"></div>
            </div>

            <div class="row mt-5 text-center">
                <div class="col-lg-4 py-3 wow fadeInUp">
                    <div class="display-3"><span class="mai-shapes"></span></div>
                    <h5>High Performance</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, sit.</p>
                </div>
                <div class="col-lg-4 py-3 wow fadeInUp">
                    <div class="display-3"><span class="mai-shapes"></span></div>
                    <h5>Friendly Prices</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, sit.</p>
                </div>
                <div class="col-lg-4 py-3 wow fadeInUp">
                    <div class="display-3"><span class="mai-shapes"></span></div>
                    <h5>No time-confusing</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, sit.</p>
                </div>
            </div>
        </div> <!-- .container -->
    </div> <!-- .page-section -->

    <!-- Blog -->
    <div class="page-section border-top">
        <div class="container">
            <div class="text-center wow fadeInUp">
                <div class="subhead">Blog Kami</div>
                <h2 class="title-section">Berita <span class="marked text-success">Terbaru</span></h2>
                <div class="divider mx-auto"></div>
            </div>
            <div class="row my-5 card-blog-row-success ">
                <div class="col-md-6 col-lg-3 py-3 wow fadeInUp ">
                    <div class="card-blog">
                        <div class="header">
                            <div class="avatar">
                                <img src="../assets/img/person/person_2.jpg" alt="">
                            </div>
                            <div class="entry-footer">
                                <div class="post-author">Sam Newman</div>
                                <a href="#" class="post-date">23 Apr 2020</a>
                            </div>
                        </div>
                        <div class="body">
                            <div class="post-title"><a href="blog-single.html">What is Business Management?</a></div>
                            <div class="post-excerpt">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</div>
                        </div>
                        <div class="footer">
                            <a class="text-success" href="blog-single.html">Lebih Banyak <span class="mai-chevron-forward text-sm"></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 py-3 wow fadeInUp">
                    <div class="card-blog">
                        <div class="header">
                            <div class="avatar">
                                <img src="../assets/img/person/person_1.jpg" alt="">
                            </div>
                            <div class="entry-footer">
                                <div class="post-author">Sam Newman</div>
                                <a href="#" class="post-date">23 Apr 2020</a>
                            </div>
                        </div>
                        <div class="body">
                            <div class="post-title"><a href="blog-single.html">What is Business Management?</a></div>
                            <div class="post-excerpt">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</div>
                        </div>
                        <div class="footer">
                            <a class="text-success" href="blog-single.html">Lebih Banyak<span class="mai-chevron-forward text-sm"></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 py-3 wow fadeInUp">
                    <div class="card-blog">
                        <div class="header">
                            <div class="avatar">
                                <img src="../assets/img/person/person_2.jpg" alt="">
                            </div>
                            <div class="entry-footer">
                                <div class="post-author">Sam Newman</div>
                                <a href="#" class="post-date">23 Apr 2020</a>
                            </div>
                        </div>
                        <div class="body">
                            <div class="post-title"><a href="blog-single.html">What is Business Management?</a></div>
                            <div class="post-excerpt">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</div>
                        </div>
                        <div class="footer">
                            <a class="text-success" href="blog-single.html">Lebih Banyak <span class="mai-chevron-forward text-sm"></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 py-3 wow fadeInUp">
                    <div class="card-blog">
                        <div class="header">
                            <div class="avatar">
                                <img src="../assets/img/person/person_3.jpg" alt="">
                            </div>
                            <div class="entry-footer">
                                <div class="post-author">Sam Newman</div>
                                <a href="#" class="post-date">23 Apr 2020</a>
                            </div>
                        </div>
                        <div class="body">
                            <div class="post-title"><a href="blog-single.html">What is Business Management?</a></div>
                            <div class="post-excerpt">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</div>
                        </div>
                        <div class="footer">
                            <a class="text-success" href="blog-single.html">Lebih Banyak <span class="mai-chevron-forward text-sm"></span></a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="text-center">
                <a href="blog.html" class="btn btn-outline-success rounded-pill">Lebih Lanjut</a>
            </div>
        </div> <!-- .container -->
    </div> <!-- .page-section -->

    <!-- contact us -->
    <div class="page-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 py-3 wow fadeInUp">
                    <h2 class="title-section text">Tetap Terhubung</h2>
                    <div class="divider"></div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> Laborum ratione autem quidem veritatis!</p>

                    <ul class="contact-list">
                        <li>
                            <div class="icon"><span class="mai-map text-success"></span></div>
                            <div class="content">123 Fake Street, New York, USA</div>
                        </li>
                        <li>
                            <div class="icon"><span class="mai-mail text-success"></span></div>
                            <div class="content"><a href="#">info@digigram.com</a></div>
                        </li>
                        <li>
                            <div class="icon"><span class="mai-phone-portrait text-success"></span></div>
                            <div class="content"><a href="#">+00 1122 3344 55</a></div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 py-3 wow fadeInUp">
                    <div class="subhead">Kontak Kami</div>
                    <h2 class="title-section">Beri Kami Masukan</h2>
                    <div class="divider"></div>

                    <form action="#">
                        <div class="py-2">
                            <input type="text" class="form-control" placeholder="Nama Lengkap">
                        </div>
                        <div class="py-2">
                            <input type="text" class="form-control" placeholder="Email">
                        </div>
                        <div class="py-2">
                            <textarea rows="6" class="form-control" placeholder="Masukan Pesan"></textarea>
                        </div>
                        <button type="submit" class="btn btn-success rounded-pill mt-4">Kirim Pesan</button>
                    </form>
                </div>
            </div>
        </div> <!-- .container -->
    </div> <!-- .page-section -->

</main>
@endsection