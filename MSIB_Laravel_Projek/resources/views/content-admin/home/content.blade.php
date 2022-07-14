<div class="row  mb-5">
    <div class="col-lg-12 mb-4 order-0">
        <div class="card">
            <div class="d-flex align-items-end row">
                <div class="col-sm-7">
                    <div class="card-body">
                        <h1 class="card-title">Dashboard</h1>
                        <p class="mb-4">
                            {{-- You have done <span class="fw-bold">72%</span> more sales today. Check your new badge in
                your profile. --}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row  mb-5">
        <div class="col-md-6 col-lg-3">
            <div class="card shadow border-left-warning py-2">
                <div class="card-body">
                    <div class="row align-items-center no-gutters">
                        <div class="col mr-2">
                            <div class="text-uppercase font-weight-bold text-xs mb-1">
                                <span>Jumlah petugas</span>
                            </div>
                            <div class=" font-weight-bold h5 mb-0" style="color: rgb(26, 19, 212)">
                                <span>{{ $petugas }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="card shadow border-left-warning py-2">
                <div class="card-body">
                    <div class="row align-items-center no-gutters">
                        <div class="col mr-2">
                            <div class="text-uppercase font-weight-bold text-xs mb-1">
                                <span>Jumlah Jenis vaksin</span>
                            </div>
                            <div class=" font-weight-bold h5 mb-0" style="color: rgb(26, 19, 212)">
                                <span>{{ $jenisVaksin }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="card shadow border-left-warning py-2">
                <div class="card-body">
                    <div class="row align-items-center no-gutters">
                        <div class="col mr-2">
                            <div class="text-uppercase font-weight-bold text-xs mb-1">
                                <span>Jumlah penduduk</span>
                            </div>
                            <div class=" font-weight-bold h5 mb-0" style="color: red">
                                <span>{{ $penduduk }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="card shadow border-left-warning py-2">
                <div class="card-body">
                    <div class="row align-items-center no-gutters">
                        <div class="col mr-2">
                            <div class="text-uppercase font-weight-bold text-xs mb-1">
                                <span>Jumlah vaksinasi</span>
                            </div>
                            <div class="font-weight-bold h5 mb-0" style="color: rgb(26, 19, 212)">
                                <span>{{ $vaksinasi }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Total Revenue -->
    <div class="col-12 mb-4">
        <div class="card">
            <div style="width: 800px;margin: 0px auto;">
                <canvas id="myChart"></canvas>
            </div>
        </div>
    </div>
    <!--/ Total Revenue -->
</div>
