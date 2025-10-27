@extends('layouts.admin.app')

@section('title', 'Tambah Warga Baru')

@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Formulir Tambah Warga</h3>
                <p class="text-subtitle text-muted">Masukkan data warga baru ke dalam sistem.</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('warga.index') }}">Daftar Warga</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Tambah Warga</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Data Warga Baru</h4>
            </div>
            <div class="card-body">
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('warga.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">No. KTP</label>
                        <input type="text" name="no_ktp" class="form-control" value="{{ old('no_ktp') }}" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nama Lengkap</label>
                        <input type="text" name="nama" class="form-control" value="{{ old('nama') }}" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-select" required>
                            <option value="">Pilih Jenis Kelamin</option>
                            <option value="Laki-laki" {{ old('jenis_kelamin') == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                            <option value="Perempuan" {{ old('jenis_kelamin') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Agama</label>
                        <input type="text" name="agama" class="form-control" value="{{ old('agama') }}" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Pekerjaan</label>
                        <input type="text" name="pekerjaan" class="form-control" value="{{ old('pekerjaan') }}" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">No. Telepon (Opsional)</label>
                        <input type="text" name="telp" class="form-control" value="{{ old('telp') }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email (Opsional)</label>
                        <input type="email" name="email" class="form-control" value="{{ old('email') }}">
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{ route('warga.index') }}" class="btn btn-light">Kembali</a>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection