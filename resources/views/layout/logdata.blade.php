@extends('master')
@section('title', 'Logdata')
@section('content')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
            data-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Logdata</li>
                    </ol>
                    <h6 class="font-weight-bolder mb-0">Logdata</h6>
                </nav>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    </div>
                    <ul class="navbar-nav  justify-content-end">
                        <li class="nav-item d-flex align-items-center">
                            <a class="btn btn-outline-primary btn-sm mb-0 me-3" target="_blank"
                                href="../pages/map.html">Lokasi Alat : Sekolah Vokasi IPB University</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Logdata</h6>
                        </div>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">
                        <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
                        <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
                        <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap4.min.js"></script>

                        <div class="container-fluid mx-auto">
                            <table id="logDataTable" class="table align-items-center justify-content-center mb-0 dataTable">

                            </table>
                            <div class="container-fluid mx-auto">
                                <table id="example" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>ID Monitoring</th>
                                            <th>Waktu</th>
                                            <th>Nama Device</th>
                                            <th>CO</th>
                                            <th>NO2</th>
                                            <th>PM2.5</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($logdata as $row)
                                            <tr>
                                                <td>{{ $row->idMonitoring }}</td>
                                                <td>{{ $row->waktu }}</td>
                                                <td>{{ $row->namadevice }}</td>
                                                <td>{{ $row->co }}</td>
                                                <td>{{ $row->no2 }}</td>
                                                <td>{{ $row->pm25 }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>ID Monitoring</th>
                                            <th>Waktu</th>
                                            <th>Nama Device</th>
                                            <th>CO</th>
                                            <th>NO2</th>
                                            <th>PM2.5</th>
                                        </tr>
                                    </tfoot>
                                </table>
                                <script>
                                    new DataTable('#example');
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
                @include('include.footer')
            </div>
    </main>
@endsection
