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
                        <li class="breadcrumb-item active">Services</li>
                    </ul>
                </nav>
                <h1 class="text-center">Services</h1>
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
                <div class="col-lg-6 py-3">
                    <h2 class="title-section">Kami Siap Memberikan <span class="marked text-success">Pelayanan Terbaik</span> </h2>
                    <div class="divider"></div>
                    <p class="mb-5">We provide marketing services to startups & small business to looking for partner for their digital media, design & dev lead generation & communication.</p>
                    <a href="#" class="btn btn-success">Lebih detail</a>
                    <a href="#" class="btn btn-outline ml-2">Lihat harga</a>
                </div>
                <div class="col-lg-6 py-3">
                    <div class="img-place text-center">
                        <img src="../assets/img/customer.png" alt="">
                    </div>
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
                <div class="col-lg-4 py-3">
                    <div class="display-3"><span class="mai-shapes"></span></div>
                    <h5>High Performance</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, sit.</p>
                </div>
                <div class="col-lg-4 py-3">
                    <div class="display-3"><span class="mai-shapes"></span></div>
                    <h5>Friendly Prices</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, sit.</p>
                </div>
                <div class="col-lg-4 py-3">
                    <div class="display-3"><span class="mai-shapes"></span></div>
                    <h5>No time-confusing</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, sit.</p>
                </div>
            </div>
        </div> <!-- .container -->
    </div> <!-- .page-section -->
</main>

@endsection