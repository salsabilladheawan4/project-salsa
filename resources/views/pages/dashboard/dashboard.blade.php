<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard - Sistem Manajemen</title>

  <link rel="shortcut icon" type="image/png" href="{{ asset('assets-admin/images/logos/favicon.png') }}" />
  <link rel="stylesheet" href="{{ asset('assets-admin/css/styles.min.css') }}" />
</head>

<body>
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">

    <aside class="left-sidebar">
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="{{ route('dashboard') }}" class="text-nowrap logo-img">
            <img src="{{ asset('assets-admin/images/logos/dark-logo.svg') }}" width="180" alt="" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>

        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Home</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link active" href="{{ route('dashboard') }}" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>

            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Master Data</span>
            </li>
             <li class="sidebar-item">
              <a class="sidebar-link" href="{{ route('aset.index') }}" aria-expanded="false">
                <span>
                  <i class="ti ti-box"></i>
                </span>
                <span class="hide-menu">Aset</span>
              </a>
            </li>
             <li class="sidebar-item">
              <a class="sidebar-link" href="{{ route('warga.index') }}" aria-expanded="false">
                <span>
                  <i class="ti ti-users"></i>
                </span>
                <span class="hide-menu">Warga</span>
              </a>
            </li>
             <li class="sidebar-item">
              <a class="sidebar-link" href="{{ route('user.index') }}" aria-expanded="false">
                <span>
                  <i class="ti ti-user-circle"></i>
                </span>
                <span class="hide-menu">User</span>
              </a>
            </li>

          </ul>
        </nav>
        </div>
      </aside>
    <div class="body-wrapper">
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                <i class="ti ti-bell-ringing"></i>
                <div class="notification bg-primary rounded-circle"></div>
              </a>
            </li>
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <img src="{{ asset('assets-admin/images/profile/user-1.jpg') }}" alt="" width="35" height="35" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-user fs-6"></i>
                      <p class="mb-0 fs-3">{{ Auth::user()->name ?? 'My Profile' }}</p>
                    </a>

                    <form action="{{ route('logout') }}" method="POST" class="mx-3 mt-2 d-block">
                        @csrf
                        <button type="submit" class="btn btn-outline-primary w-100">Logout</button>
                    </form>

                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <h3 class="fw-semibold mb-4">Statistik Inventaris</h3>
            </div>

            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-4">
                                <div class="text-center">
                                    <i class="ti ti-box text-primary" style="font-size: 3rem;"></i>
                                </div>
                            </div>
                            <div class="col-8">
                                <h6 class="text-muted font-semibold">Total Aset</h6>
                                <h6 class="fw-semibold mb-0 fs-6">{{ $total_aset ?? 0 }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-4">
                                <div class="text-center">
                                    <i class="ti ti-circle-check text-success" style="font-size: 3rem;"></i>
                                </div>
                            </div>
                            <div class="col-8">
                                <h6 class="text-muted font-semibold">Aset Baik</h6>
                                <h6 class="fw-semibold mb-0 fs-6">{{ $aset_baik ?? 0 }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-4">
                                <div class="text-center">
                                    <i class="ti ti-settings-cog text-danger" style="font-size: 3rem;"></i>
                                </div>
                            </div>
                            <div class="col-8">
                                <h6 class="text-muted font-semibold">Aset Rusak</h6>
                                <h6 class="fw-semibold mb-0 fs-6">{{ $aset_rusak ?? 0 }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex align-items-stretch">
            <div class="card w-100">
              <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-4">Aset Terbaru</h5>
                <div class="table-responsive">

                  <table class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                      <tr>
                        <th class="border-bottom-0"><h6 class="fw-semibold mb-0">Kode</h6></th>
                        <th class="border-bottom-0"><h6 class="fw-semibold mb-0">Nama Aset</h6></th>
                        <th class="border-bottom-0"><h6 class="fw-semibold mb-0">Kondisi</h6></th>
                        <th class="border-bottom-0"><h6 class="fw-semibold mb-0">Lokasi</h6></th>
                      </tr>
                    </thead>
                    <tbody>
                      @forelse ($daftar_aset as $aset)
                      <tr>
                        <td class="border-bottom-0"><h6 class="fw-semibold mb-0">{{ $aset['kode'] }}</h6></td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal">{{ $aset['nama'] }}</p>
                        </td>
                        <td class="border-bottom-0">
                            @if ($aset['kondisi'] == 'Baik')
                                <span class="badge bg-success rounded-3 fw-semibold">Baik</span>
                            @else
                                <span class="badge bg-danger rounded-3 fw-semibold">{{ $aset['kondisi'] }}</span>
                            @endif
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal">{{ $aset['lokasi'] }}</Fp>
                        </td>
                      </tr>
                      @empty
                      <tr>
                        <td colspan="4" class="text-center border-bottom-0">
                            <p class="mb-0 fw-normal">Belum ada data aset.</p>
                        </td>
                      </tr>
                      @endforelse
                    </tbody>
                  </table>

                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="py-6 px-6 text-center">
          <p class="mb-0 fs-4">Design and Developed by <a href="https://adminmart.com/" target="_blank" class="pe-1 text-primary text-decoration-underline">AdminMart.com</a> Distributed by <a href="https://themewagon.com">ThemeWagon</a></p>
        </div>
      </div>
      </div>
  </div>

  <script src="{{ asset('assets-admin/libs/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('assets-admin/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets-admin/js/sidebarmenu.js') }}"></script>
  <script src="{{ asset('assets-admin/js/app.min.js') }}"></script>
  <script src="{{ asset('assets-admin/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
  <script src="{{ asset('assets-admin/libs/simplebar/dist/simplebar.js') }}"></script>

  </body>

</html>