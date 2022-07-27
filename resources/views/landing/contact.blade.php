@extends('layout.layout')

@section('section')
<br>
<br>
<br>
<br>
<div class="container mt-5">
    <div class="page-banner">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-md-6">
                <nav aria-label="Breadcrumb">
                    <ul class="breadcrumb justify-content-center py-0 bg-transparent">
                        <li class="breadcrumb-item"><a class="text-success" href="/">Home</a></li>
                        <li class="breadcrumb-item active">Contact</li>
                    </ul>
                </nav>
                <h1 class="text-center">Contact Us</h1>
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