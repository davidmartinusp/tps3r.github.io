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
                        <li class="breadcrumb-item active">About</li>
                    </ul>
                </nav>
                <h1 class="text-center">About Us</h1>
            </div>
        </div>
    </div>
</div>
<main>
    <style>
        .divider {
            background-color: #0cc81c;
        }
    </style>
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

    <div class="page-section counter-section">
        <div class="container">
            <div class="row align-items-center text-center">
                <div class="col-lg-4">
                    <p>Total Kunjungan</p>
                    <h2><span class="number" data-number="816278"></span></h2>
                </div>
                <div class="col-lg-4">
                    <p>Kunjungan Tahunan</p>
                    <h2><span class="number" data-number="216422"></span></h2>
                </div>
                <div class="col-lg-4">
                    <p>Rasio</p>
                    <h2><span class="number" data-number="73"></span>%</h2>
                </div>
            </div>
        </div> <!-- .container -->
    </div> <!-- .page-section -->


</main>
@endsection