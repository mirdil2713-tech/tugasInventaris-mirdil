@extends('layouts.admin')

@section('title', 'Tambah Data Barang')

@section('content')


                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tambah Data Barang Inventaris</h1>
                    <p class="mb-4">Silahkan Isi Formulir Di Bawah Ini Untuk Menambahkan Data Barang!</p>


                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">    
                                Formulir Tambah Barang
                            </h6>
                            <a href="{{ route('barang.index') }}" class="btn btn-sm btn-primary shadow-sm">
                                <i class="fas fa-arrow-left fa-sm text-white-50-mr-1"></i> Kembali  
                          </a>
                        </div>
                        <div class="card-body">

                        <!--peringatan jika terjadi error-->
                            @if($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach($errors->any() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif

                            <!--formulir tambah barang-->
                            <form action="{{ route('barang.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="kode_barang">Kode Barang<span class="text-danger">
                                                *</span></label>
                                            <input type="text" name="kode_barang" id="kode_barang" class="form-control @error('kode_barang') is-invalid @enderror" value="{{ old('kode_barang') }}" placeholder="Contoh: INV_001" required>

                                        </div>
                                        <div class="form-group">
                                            <label for="nama_barang">Nama Barang<span class="text-danger">
                                                *</span></label>
                                            <input type="text" name="nama_barang" id="nama_barang" class="form-control @error('nama_barang') is-invalid @enderror" value="{{ old('nama_barang') }}" placeholder="Contoh: Laptop" required>
                                        <div class="form-group">
                                            <label for="kode_barang">Kode Barang<span class="text-danger">
                                                *</span></label>
                                            <input type="text" name="kode_barang" id="kode_barang" class="form-control @error('kode_barang') is-invalid @enderror" value="{{ old('kode_barang') }}" placeholder="Contoh: LAPTOP ASUS" required>
                                        
                                    </div>
                                    <div class="from-group">
                                        <label for="kategori">Nama Barang<span class="text-danger">*</span></label>
                                        <select name="kategori" id="kategori" class="form-control" required>
                                            <option value="">Pilih Kategori</option>
                                            <option value="Elektronik" {{ old('kategori') == 'Elektronik' ? 'selected' : '' }}>Elektronik</option>
                                            <option value="Furnitur" {{ old('kategori') == 'Furnitur' ? 'selected' : '' }}>Furnitur</option>
                                            <option value="ATK" {{ old('kategori') == 'ATK' ? 'selected' : '' }}>ATK</option>
                                        </select>
                                </div>
                                   <div class="from-group">
                                        <label for="Kondisi">Kondisi<span class="text-danger">*</span></label>
                                        <select name="Kondisi" id="Kondisi" class="form-control" required>
                                            <option value="">Pilih Kondisi</option>
                                            <option value="Baik {{ old('Kondisi') == 'Baik' ? 'selected' : '' }}">Baik</option>
                                            <option value="Rusak Ringan {{ old('Kondisi') == 'Rusak Ringan' ? 'selected' : '' }}">Rusak Ringan</option>
                                            <option value="Rusak Berat {{ old('Kondisi') == 'Rusak Berat' ? 'selected' : '' }}">Rusak Berat</option>
                                        </select>
                                        </select>
                            </form>
                        </div>
                        <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="kode_barang">Jumlah<span class="text-danger">
                                                *</span></label>
                                            <input type="number" name="jumlah" id="jumlah" class="form-control @error('jumlah') is-invalid @enderror" value="{{ old('jumlah') }}" placeholder="min= "0" required>

                     </div>
                     <div class="form-group">
                                            <label for="lokasi">Lokasi<span class="text-danger">
                                                *</span></label>
                                            <input type="text" name="lokasi" id="lokasi" class="form-control @error('lokasi') is-invalid @enderror" value="{{ old('lokasi') }}" placeholder="Contoh: LAPTOP ASUS" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="tanggal_masuk">Tanggal Masuk<span class="text-danger">
                                                *</span></label>
                                            <input type="date" name="tanggal_masuk" id="tanggal_masuk" class="form-control @error('tanggal_masuk') is-invalid @enderror" value="{{ old('tanggal_masuk', date('Y-m-d')) }}" required>
                                        </div>
                                    </div>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save mr-1"></i> 
                            Simpan Data

                            </button>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
       @endsection
  <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

