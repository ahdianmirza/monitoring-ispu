@extends('master')

@section('title', 'Dashboard')

@section('content')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
            data-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a>
                        </li>
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
                    </ol>
                    <h6 class="font-weight-bolder mb-0">Dashboard</h6>
                </nav>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    </div>
                    <ul class="navbar-nav  justify-content-end">
                        <li class="nav-item d-flex align-items-center">
                            <a class="btn btn-outline-primary btn-sm mb-0 me-3" target="_blank"
                                href="{{ url('map') }}">Lokasi Alat : PT Amerta Indah Otsuka</a>
                        </li>
                        <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->

        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-xl-6 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-header px-3 py-2 text-center bg-gradient-primary">
                            <h6 class="m-0 p-0" style="color: #fff">Nilai Karbon Monoksida</h6>
                        </div>
                        <div class="card-body px-3">
                            <div class="d-flex flex-wrap justify-content-between" style="width: 100%;">
                                <div class="text-start">
                                    <h4 id="co-value" class="mb-0"></h4>
                                    <p>Nilai Sensor</p>
                                </div>
                                <div class="text-end">
                                    <h4 id="ispu-co" class="mb-0"></h4>
                                    <p>Nilai ISPU</p>
                                </div>
                            </div>
                            <div class="text-center">
                                <p class="fw-bold fs-5">Kategori : <span id="ispu-status-co"></span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-header px-3 py-2 text-center bg-gradient-success">
                            <h6 class="m-0 p-0" style="color: #fff">Nilai Nitrogen Dioksida</h6>
                        </div>
                        <div class="card-body px-3">
                            <div class="d-flex flex-wrap justify-content-between" style="width: 100%;">
                                <div class="text-start">
                                    <h4 id="no2-value" class="mb-0"></h4>
                                    <p>Nilai Sensor</p>
                                </div>
                                <div class="text-end">
                                    <h4 id="ispu-no2" class="mb-0"></h4>
                                    <p>Nilai ISPU</p>
                                </div>
                            </div>
                            <div class="text-center">
                                <p class="fw-bold fs-5">Kategori : <span id="ispu-status-no2"></span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-xl-6 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-header px-3 py-2 text-center bg-gradient-danger">
                            <h6 class="m-0 p-0" style="color: #fff">Nilai PM 2.5</h6>
                        </div>
                        <div class="card-body px-3">
                            <div class="d-flex flex-wrap justify-content-between" style="width: 100%;">
                                <div class="text-start">
                                    <h4 id="pm25-value" class="mb-0"></h4>
                                    <p>Nilai Sensor</p>
                                </div>
                                <div class="text-end">
                                    <h4 id="ispu-pm25" class="mb-0"></h4>
                                    <p>Nilai ISPU</p>
                                </div>
                            </div>
                            <div class="text-center">
                                <p class="fw-bold fs-5">Kategori : Baik</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-header px-3 py-2 text-center bg-gradient-danger">
                            <h6 class="m-0 p-0" style="color: #fff">Nilai ISPU</h6>
                        </div>
                        <div class="card-body px-3">
                            <div class="text-center">
                                <h4 id="ispu-value" class="mb-0"></h4>
                            </div>
                            <div class="text-center">
                                <p class="fw-bold fs-5">Kategori : <span id="kategori-ispu"></span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Chart --}}
            <br>
            <h3>ISPU Monitoring Chart</h3>
            <div class="row mb-4">
                <div class="col-lg-8 col-md-6 mb-md-0 mb-4">

                    <head>
                        <meta charset="UTF-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <title>Dynamic Chart with Chart.js</title>
                        <!-- Load Chart.js library -->
                        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                    </head>

                    <div class="card">
                        <div style="width: 80%; margin: auto;">
                            <canvas id="myChart" width="400" height="200"></canvas>
                        </div>
                    </div>


                    <?php
                    // Data logs
                    
                    // Process data for Chart.js
                    $labels = [];
                    $coData = [];
                    $no2Data = [];
                    $pm25Data = [];
                    
                    foreach ($logdata as $log) {
                        $labels[] = date('M d', strtotime($log['created_at']));
                        $coData[] = $log['co'];
                        $no2Data[] = $log['no2'];
                        $pm25Data[] = $log['pm25'];
                    }
                    
                    $chartData = [
                        'labels' => $labels,
                        'datasets' => [
                            [
                                'label' => 'ISPU CO',
                                'data' => $coData,
                                'backgroundColor' => 'rgba(255, 99, 132, 0.2)',
                                'borderColor' => 'rgba(255, 99, 132, 1)',
                                'borderWidth' => 1,
                            ],
                            [
                                'label' => 'ISPU NO2',
                                'data' => $no2Data,
                                'backgroundColor' => 'rgba(54, 162, 235, 0.2)',
                                'borderColor' => 'rgba(54, 162, 235, 1)',
                                'borderWidth' => 1,
                            ],
                            [
                                'label' => 'ISPU PM2.5',
                                'data' => $pm25Data,
                                'backgroundColor' => 'rgba(255, 206, 86, 0.2)',
                                'borderColor' => 'rgba(255, 206, 86, 1)',
                                'borderWidth' => 1,
                            ],
                        ],
                    ];
                    ?>

                    <script>
                        var ctx = document.getElementById('myChart').getContext('2d');
                        var myChart = new Chart(ctx, {
                            type: 'line',
                            data: <?php echo json_encode($chartData); ?>,
                            options: {
                                scales: {
                                    y: {
                                        beginAtZero: true
                                    }
                                }
                            }
                        });
                    </script>


                </div>
            </div>

            <div class="row mt-4">
                <div class="row mt-4">
                    <div class="col-lg-6 mt-4 mb-3">
                        <div class="card z-index-2 ">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                                <div class="bg-gradient-dark shadow-dark border-radius-lg py-3 pe-1">
                                    <div class="chart">
                                        <p style="color: white">&nbsp; Dampak</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="d-flex ">
                                    <p class="mb-0 text-sm" id="dampak"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-4 mb-3">
                        <div class="card z-index-2 ">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                                <div class="bg-gradient-dark shadow-dark border-radius-lg py-3 pe-1">
                                    <div class="chart">
                                        <p style="color: white">&nbsp; Rekomendasi Kegiatan</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="d-flex ">
                                    <p class="mb-0 text-sm rekomendasii" id="rekomendasi"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                @include('include.footer')
            </div>
    </main>

    <script>
        let dataSendTrigger = false;

        const getDataDashboard = () => {
            const request = new Request("api/data-dashboard", {
                method: "GET"
            });
            const response = fetch(request);

            response
                .then(res => res.json())
                .then(json => {
                    console.info("Data Dashboard request: ", json);
                    document.getElementById('co-value').textContent = `${json.co} μg/m3`;
                    document.getElementById('no2-value').textContent = `${json.no2} μg/m3`;
                    document.getElementById('pm25-value').textContent = `${json.pm25} μg/m3`;
                    document.getElementById('pm25-value').textContent = `${json.pm25} μg/m3`;
                    document.getElementById('ispu-co').textContent = json.ispu_co;
                    document.getElementById('ispu-no2').textContent = json.ispu_no2;
                    document.getElementById('ispu-pm25').textContent = json.ispu_pm25;

                    let ispu = Math.max(json.ispu_pm25, json.ispu_co, json.ispu_no2);
                    document.getElementById('ispu-value').textContent = ispu;

                    const dampak = document.getElementById('dampak');
                    const rekomendasi = document.getElementById('rekomendasi');
                    const ispu_status_co = document.getElementById('ispu-status-co');
                    const ispu_status_no2 = document.getElementById('ispu-status-no2');
                    const kategori_ispu = document.getElementById('kategori-ispu');

                    if (json.ispu_co >= 0 && json.ispu_co <= 50) {
                        let kategori_ispu_value = "Baik";
                        ispu_status_co.textContent = kategori_ispu_value;
                    } else if (json.ispu_co >= 51 && json.ispu_co <= 100) {
                        let kategori_ispu_value = "Sedang";
                        ispu_status_co.textContent = kategori_ispu_value;
                    } else if (json.ispu_co >= 101 && json.ispu_co <= 200) {
                        let kategori_ispu_value = "Tidak Sehat";
                        ispu_status_co.textContent = kategori_ispu_value;
                    } else if (json.ispu_co >= 201 && json.ispu_co <= 300) {
                        let kategori_ispu_value = "Sangat Tidak Sehat";
                        ispu_status_co.textContent = kategori_ispu_value;
                    } else if (json.ispu_co >= 301) {
                        let kategori_ispu_value = "Berbahaya";
                        ispu_status_co.textContent = kategori_ispu_value;
                    }

                    if (json.ispu_no2 >= 0 && json.ispu_no2 <= 50) {
                        let kategori_ispu_value = "Baik";
                        ispu_status_no2.textContent = kategori_ispu_value;
                    } else if (json.ispu_no2 >= 51 && json.ispu_no2 <= 100) {
                        let kategori_ispu_value = "Sedang";
                        ispu_status_no2.textContent = kategori_ispu_value;
                    } else if (json.ispu_no2 >= 101 && json.ispu_no2 <= 200) {
                        let kategori_ispu_value = "Tidak Sehat";
                        ispu_status_no2.textContent = kategori_ispu_value;
                    } else if (json.ispu_no2 >= 201 && json.ispu_no2 <= 300) {
                        let kategori_ispu_value = "Sangat Tidak Sehat";
                        ispu_status_no2.textContent = kategori_ispu_value;
                    } else if (json.ispu_no2 >= 301) {
                        let kategori_ispu_value = "Berbahaya";
                        ispu_status_no2.textContent = kategori_ispu_value;
                    }

                    // kerjaan putut
                    if (ispu >= 0 && ispu <= 50) {
                        let kategori_ispu_value = "Baik";
                        let dampak_value =
                            "Tingkat kualitas udara yang sangat baik, tidak memberikan efek negatif terhadap manusia, hewan, tumbuhan"
                        let rekomendasi_value = "Sangat baik melakukan kegiatan di luar";
                        dampak.textContent = dampak_value;
                        rekomendasi.textContent = rekomendasi_value;
                        kategori_ispu.textContent = kategori_ispu_value;
                    } else if (ispu >= 51 && ispu <= 100) {
                        let kategori_ispu_value = "Sedang";
                        let dampak_value =
                            "Tingkat kualitas udara masih dapat diterima pada kesehatan manusia, hewan dan tumbuhan.";
                        let rekomendasi_value =
                            "Kelompok sensitif: Kurangi aktivitas fisik yang terlalu lama atau berat. \n Setiap orang: Masih dapat beraktivitas di luar";
                        dampak.textContent = dampak_value;
                        rekomendasi.textContent = rekomendasi_value;
                        kategori_ispu.textContent = kategori_ispu_value;
                    } else if (ispu >= 101 && ispu <= 200) {
                        let kategori_ispu_value = "Tidak Sehat";
                        let dampak_value =
                            "Tingkat kualitas udara yang bersifat merugikan pada manusia, hewan dan tumbuhan.";
                        let rekomendasi_value =
                            "Kelompok sensitif: Boleh melakukan aktivitas di luar, tetapi mengambil rehat lebih sering dan melakukan aktivitas ringan. Amati gejala berupa batuk atau nafas sesak. Penderita asma harus mengikuti petunjuk kesehatan untuk asma dan menyimpan obat asma. \nPenderita penyakit jantung: gejala seperti palpitasi/jantung berdetak lebih cepat, sesak nafas, atau kelelahan yang tidak biasa mungkin mengindikasikan masalah serius. \n Setiap orang: Mengurangi aktivitas fisik yang terlalu lama di luar ruangan.";
                        dampak.textContent = dampak_value;
                        rekomendasi.textContent = rekomendasi_value;
                        kategori_ispu.textContent = kategori_ispu_value;
                    } else if (ispu >= 201 && ispu <= 300) {
                        let kategori_ispu_value = "Sangat Tidak Sehat";
                        let dampak_value =
                            "Tingkat kualitas udara yang dapat meningkatkan resiko kesehatan pada sejumlah segmen populasi yang terpapar";
                        let rekomendasi_value =
                            "Kelompok sensitif: Hindari semua aktivitas di luar. Perbanyak aktivitas di dalam ruangan atau lakukan penjadwalan ulang pada waktu dengan kualitas udara yang baik. \n Setiap orang: Hindari aktivitas fisik yang terlalu lama di luar ruangan, pertimbangkan untuk melakukan aktivitas di dalam ruangan";
                        dampak.textContent = dampak_value;
                        rekomendasi.textContent = rekomendasi_value;
                        kategori_ispu.textContent = kategori_ispu_value;
                    } else if (ispu >=
                        300
                    ) { // Adjusted to use '>' instead of '>=', since 300 was covered in the previous condition
                        let kategori_ispu_value = "Berbahaya";
                        let dampak_value =
                            "Tingkat kualitas udara yang dapat merugikan kesehatan serius pada populasi dan perlu penanganan cepat";
                        let rekomendasi_value =
                            "Kelompok sensitif: Tetap di dalam ruangan dan hanya melakukan sedikit aktivitas. \n Setiap orang: Hindari semua aktivitas di luar";
                        dampak.textContent = dampak_value;
                        rekomendasi.textContent = rekomendasi_value;
                        kategori_ispu.textContent = kategori_ispu_value;
                    }
                })
                .catch(error => {
                    console.info(error);
                })
        }

        const setDefaultData = () => {
            document.getElementById('co-value').textContent = '-';
            document.getElementById('no2-value').textContent = '-';
            document.getElementById('pm25-value').textContent = '-';
            document.getElementById('ispu-value').textContent = '-';
        }

        setInterval(() => {
            dataSendTrigger = true;
            getDataDashboard();
        }, 3000);

        if (dataSendTrigger != true) {
            setDefaultData();
        }
    </script>
@endsection
