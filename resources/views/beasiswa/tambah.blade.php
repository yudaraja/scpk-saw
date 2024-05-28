@extends('app')

@section('content')
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-7 align-self-center">
                    <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Tambah Mahasiswa</h4>
                    <div class="d-flex align-items-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb m-0 p-0">
                                <li class="breadcrumb-item"><a href="index.html" class="text-muted">Data</a></li>
                                <li class="breadcrumb-item text-muted active" aria-current="page">Tambah Mahasiswa</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <!-- basic table -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="table-responsive">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-8">
                                        <form id="form-beasiswa"  action="{{ route('beasiswa.store') }}" method="post">
                                            @csrf
                                            <div class="mb-3">

                                                <label for="nama_mahasiswa" class="form-label">Nama</label>
                                                <input type="text"
                                                    class="form-control @error('nama_mahasiswa') is-invalid @enderror"
                                                    id="nama_mahasiswa" name="nama_mahasiswa"
                                                    value="{{ old('nama_mahasiswa') }}" placeholder="Input Nama mahasiswa"
                                                    required>
                                                @error('nama_mahasiswa')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="ipk" class="form-label">IPK</label>
                                                <select name="ipk" id="ipk"
                                                    class="form-control @error('ipk') is-invalid @enderror" required>
                                                    <option selected disabled>Pilih IPK</option>
                                                    <option value="3.00-3.09"
                                                        {{ old('ipk') == '3.00-3.09' ? 'selected' : '' }}>
                                                        3.00-3.09</option>
                                                    <option value="3.10-3.19"
                                                        {{ old('ipk') == '3.10-3.19' ? 'selected' : '' }}>
                                                        3.10-3.19</option>
                                                    <option value="3.20-3.39"
                                                        {{ old('ipk') == '3.20-3.39' ? 'selected' : '' }}>
                                                        3.20-3.39</option>
                                                    <option value="3.40-3.59"
                                                        {{ old('ipk') == '3.40-3.59' ? 'selected' : '' }}>
                                                        3.40-3.59</option>
                                                    <option value="3.60-4.00"
                                                        {{ old('ipk') == '3.60-4.00' ? 'selected' : '' }}>
                                                        3.60-4.00</option>
                                                </select>
                                                @error('ipk')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="semester" class="form-label">Semester</label>
                                                <select name="semester" id="semester"
                                                    class="form-control @error('semester') is-invalid @enderror" required>
                                                    <option selected disabled>Pilih Semester</option>
                                                    <option value="Semester 1-2"
                                                        {{ old('semester') == 'Semester 1-2' ? 'selected' : '' }}>
                                                        Semester 1-2
                                                    </option>
                                                    <option value="Semester 3-4"
                                                        {{ old('semester') == 'Semester 3-4' ? 'selected' : '' }}>
                                                        Semester 3-4
                                                    </option>
                                                    <option value="Semester 5-6"
                                                        {{ old('semester') == 'Semester 5-6' ? 'selected' : '' }}>
                                                        Semester 5-6
                                                    </option>
                                                    <option value="Semester 7"
                                                        {{ old('semester') == 'Semester 7' ? 'selected' : '' }}>
                                                        Semester 7</option>
                                                    <option value="Semester 8 atau lebih"
                                                        {{ old('semester') == 'Semester 8 atau lebih' ? 'selected' : '' }}>
                                                        Semester 8 atau lebih</option>
                                                </select>
                                                @error('semester')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label for="tanggungan" class="form-label">Jumlah Tanggungan</label>
                                                <select name="tanggungan" id="tanggungan"
                                                    class="form-control @error('tanggungan') is-invalid @enderror" required>
                                                    <option selected disabled>Jumlah Tanggungan</option>
                                                    <option value="Tanggungan 1"
                                                        {{ old('tanggungan') == 'Tanggungan 1' ? 'selected' : '' }}>
                                                        Tanggungan 1
                                                    </option>
                                                    <option value="Tanggungan 2"
                                                        {{ old('tanggungan') == 'Tanggungan 2' ? 'selected' : '' }}>
                                                        Tanggungan 2
                                                    </option>
                                                    <option value="Tanggungan 3"
                                                        {{ old('tanggungan') == 'Tanggungan 3' ? 'selected' : '' }}>
                                                        Tanggungan 3
                                                    </option>
                                                    <option value="Tanggungan 4"
                                                        {{ old('tanggungan') == 'Tanggungan 4' ? 'selected' : '' }}>
                                                        Tanggungan 4</option>
                                                    <option value="Tanggungan 5 atau lebih"
                                                        {{ old('tanggungan') == ' Tanggungan 5 atau lebih' ? 'selected' : '' }}>
                                                        Tanggungan 5 atau lebih</option>
                                                </select>
                                                @error('tanggungan')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label for="usia" class="form-label">Usia (Tahun)</label>
                                                <select name="usia" id="usia"
                                                    class="form-control @error('usia') is-invalid @enderror" required>
                                                    <option selected disabled>Usia</option>
                                                    <option value="23 Tahun"
                                                        {{ old('usia') == '23 Tahun' ? 'selected' : '' }}>
                                                        23 Tahun
                                                    </option>
                                                    <option value="22 Tahun"
                                                        {{ old('usia') == '22 Tahun' ? 'selected' : '' }}>
                                                        22 Tahun
                                                    </option>
                                                    <option value="21 Tahun"
                                                        {{ old('usia') == '21 Tahun' ? 'selected' : '' }}>
                                                        21 Tahun
                                                    </option>
                                                    <option value="20 Tahun"
                                                        {{ old('usia') == '20 Tahun' ? 'selected' : '' }}>
                                                        20 Tahun</option>
                                                    <option value="19 Tahun"
                                                        {{ old('usia') == '19 Tahun' ? 'selected' : '' }}>
                                                        19 Tahun</option>
                                                </select>
                                                @error('usia')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="penghasilan" class="form-label">Jumlah Penghasilan Orang
                                                    Tua</label>
                                                <select name="penghasilan" id="penghasilan"
                                                    class="form-control @error('penghasilan') is-invalid @enderror"
                                                    required>
                                                    <option selected disabled>Jumlah Penghasilan</option>
                                                    <option value="<= Rp 1.000.000"
                                                        {{ old('penghasilan') == '<= Rp 1.000.000' ? 'selected' : '' }}>
                                                        <= Rp 1.000.000 </option>
                                                    <option value="Rp 1.000.000 - Rp 1.999.999"
                                                        {{ old('penghasilan') == 'Rp 1.000.000 - Rp 1.999.999' ? 'selected' : '' }}>
                                                        Rp 1.000.000 - Rp 1.999.999
                                                    </option>
                                                    <option value="Rp 2.000.000 - Rp 2.999.999"
                                                        {{ old('penghasilan') == 'Rp 2.000.000 - Rp 2.999.999' ? 'selected' : '' }}>
                                                        Rp 2.000.000 - Rp 2.999.999
                                                    </option>
                                                    <option value="Rp 3.000.000 - Rp 3.999.999"
                                                        {{ old('penghasilan') == 'Rp 3.000.000 - Rp 3.999.999' ? 'selected' : '' }}>
                                                        Rp 3.000.000 - Rp 3.999.999</option>
                                                    <option value="Rp 4.000.000"
                                                        {{ old('penghasilan') == 'Rp 4.000.000' ? 'selected' : '' }}>
                                                        Rp 4.000.000</option>
                                                </select>
                                                @error('penghasilan')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <button type="submit" class="btn btn-rounded btn-success float-right">Submit
                                                Data</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->
        <script>
            function saveChanges() {
                // Tambahkan logika penyimpanan perubahan di sini jika diperlukan
                // Misalnya, simpan data ke server, dll.

                // Setelah menyimpan perubahan, tutup modal
                $('#myModal').modal('hide');
            }

            // Mendapatkan elemen formulir
            var form = document.getElementById('form-beasiswa');

            // Mendapatkan tombol submit
            // var submitButton = document.querySelector('button[type="submit"]');

            // Menonaktifkan tombol submit saat halaman dimuat
            // submitButton.setAttribute('disabled', 'disabled');

            // Mendengarkan event input pada semua elemen input dan select dalam formulir
            form.addEventListener('input', function() {
                // Variabel untuk menentukan apakah formulir dapat disubmit
                var canSubmit = true;

                // Mendapatkan semua elemen input dan select dalam formulir
                var inputs = form.querySelectorAll('input');
                var selects = form.querySelectorAll('select');

                // Melakukan iterasi pada semua elemen input
                inputs.forEach(function(input) {
                    // Jika nilai input masih kosong, maka formulir tidak dapat disubmit
                    if (input.value === '') {
                        canSubmit = false;
                        return;
                    }
                });

                // Melakukan iterasi pada semua elemen select
                selects.forEach(function(select) {
                    // Jika nilai select masih default (disabled), maka formulir tidak dapat disubmit
                    if (select.value === '') {
                        canSubmit = false;
                        return;
                    }
                });

                // Menentukan apakah tombol submit harus dinonaktifkan atau diaktifkan
                if (canSubmit) {
                    submitButton.removeAttribute('disabled');
                } else {
                    submitButton.setAttribute('disabled', 'disabled');
                }
            });
        </script>
    @endsection
