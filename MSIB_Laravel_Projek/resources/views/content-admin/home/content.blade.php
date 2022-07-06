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
        <div class="row row-bordered g-0">
          <div class="col-md-8">
            <h5 class="card-header m-0 me-2 pb-3">Grafik Vaksin</h5>
            <div id="totalRevenueChart" class="px-2"></div>
          </div>
          <div class="col-md-4">
            <div class="card-body">
              <div class="text-center">
                <div class="dropdown">
                  <button
                    class="btn btn-sm btn-outline-primary dropdown-toggle"
                    type="button"
                    id="growthReportId"
                    data-bs-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                  >
                    2022
                  </button>
                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="growthReportId">
                    <a class="dropdown-item" href="javascript:void(0);">2021</a>
                    <a class="dropdown-item" href="javascript:void(0);">2020</a>
                    <a class="dropdown-item" href="javascript:void(0);">2019</a>
                  </div>
                </div>
              </div>
            </div>
            <div id="growthChart"></div>
            <div class="text-center fw-semibold pt-3 mb-2">62% Company Growth</div>

            <div class="d-flex px-xxl-4 px-lg-2 p-4 gap-xxl-3 gap-lg-1 gap-3 justify-content-between">
              <div class="d-flex">
                <div class="me-2">
                  <span class="badge bg-label-primary p-2"><i class="bx bx-dollar text-primary"></i></span>
                </div>
                <div class="d-flex flex-column">
                  <small>2022</small>
                  <h6 class="mb-0">$32.5k</h6>
                </div>
              </div>
              <div class="d-flex">
                <div class="me-2">
                  <span class="badge bg-label-info p-2"><i class="bx bx-wallet text-info"></i></span>
                </div>
                <div class="d-flex flex-column">
                  <small>2021</small>
                  <h6 class="mb-0">$41.2k</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ Total Revenue -->
  </div>
