@extends('layouts.admin.app')

@section('title', 'Dashboard')

@section('content')
<div class="page-heading">
    <h3>Statistik Inventaris</h3>
</div>
<div class="page-content">
    <section class="row">
        <div class="col-12 col-lg-12">
            <div class="row">
                <div class="col-6 col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon purple"><i class="bi bi-box-seam"></i></div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Total Aset</h6>
                                    <h6 class="font-extrabold mb-0">{{ $total_aset ?? 0 }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon blue"><i class="bi bi-check-circle"></i></div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Aset Baik</h6>
                                    <h6 class="font-extrabold mb-0">{{ $aset_baik ?? 0 }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon red"><i class="bi bi-tools"></i></div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Aset Rusak</h6>
                                    <h6 class="font-extrabold mb-0">{{ $aset_rusak ?? 0 }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header"><h4>Aset Terbaru</h4></div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-lg">
                                    <thead>
                                        <tr>
                                            <th>Kode</th>
                                            <th>Nama Aset</th>
                                            <th>Kondisi</th>
                                            <th>Lokasi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($daftar_aset as $aset)
                                        <tr>
                                            <td class="text-bold-500">{{ $aset['kode'] }}</td>
                                            <td>{{ $aset['nama'] }}</td>
                                            <td>
                                                @if ($aset['kondisi'] == 'Baik')
                                                    <span class="badge bg-success">Baik</span>
                                                @else
                                                    <span class="badge bg-warning">{{ $aset['kondisi'] }}</span>
                                                @endif
                                            </td>
                                            <td>{{ $aset['lokasi'] }}</td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="4" class="text-center">Belum ada data aset.</td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@push('scripts-bottom')
    <script src="{{ asset('assets-admin/vendors/apexcharts/apexcharts.js') }}"></script>
    <script src="{{ asset('assets-admin/js/pages/dashboard.js') }}"></script>
@endpush