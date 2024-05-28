@extends('app')

@section('content')
    <div class="page-wrapper">
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-7 align-self-center">
                    <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Edit</h4>
                    <div class="d-flex align-items-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb m-0 p-0">
                                <li class="breadcrumb-item"><a href="index.html" class="text-muted">Data</a></li>
                                <li class="breadcrumb-item text-muted active" aria-current="page">Edit Peserta Beasiswa
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 mt-2">
                    <a href="{{ route('beasiswa.index') }}" class="btn btn-rounded btn-primary mb-3"><i class="fas fa-angle-left mr-2"></i>Kembali</a>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            @if (session('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                            @endif

                            <form action="{{ route('beasiswa.update', $beasiswa->id) }}" method="POST">
                                @csrf

                                <div class="form-group">
                                    <label for="nama_mahasiswa">Nama Mahasiswa:</label>
                                    <input type="text" class="form-control" id="nama_mahasiswa" name="nama_mahasiswa"
                                        value="{{ $beasiswa->nama_mahasiswa }}" required>
                                </div>

                                <div class="form-group">
                                    <label for="ipk">IPK:</label>
                                    <select class="form-control" id="ipk" name="ipk" required>
                                        <option value="3.00-3.09" {{ $beasiswa->ipk == '3.00-3.09' ? 'selected' : '' }}>
                                            3.00-3.09</option>
                                        <option value="3.10-3.19" {{ $beasiswa->ipk == '3.10-3.19' ? 'selected' : '' }}>
                                            3.10-3.19</option>
                                        <option value="3.20-3.39" {{ $beasiswa->ipk == '3.20-3.39' ? 'selected' : '' }}>
                                            3.20-3.39</option>
                                        <option value="3.40-3.59" {{ $beasiswa->ipk == '3.40-3.59' ? 'selected' : '' }}>
                                            3.40-3.59</option>
                                        <option value="3.60-4.00" {{ $beasiswa->ipk == '3.60-4.00' ? 'selected' : '' }}>
                                            3.60-4.00</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="semester">Semester:</label>
                                    <select class="form-control" id="semester" name="semester" required>
                                        <option value="Semester 1-2"
                                            {{ $beasiswa->semester == 'Semester 1-2' ? 'selected' : '' }}>Semester 1-2
                                        </option>
                                        <option value="Semester 3-4"
                                            {{ $beasiswa->semester == 'Semester 3-4' ? 'selected' : '' }}>Semester 3-4
                                        </option>
                                        <option value="Semester 5-6"
                                            {{ $beasiswa->semester == 'Semester 5-6' ? 'selected' : '' }}>Semester 5-6
                                        </option>
                                        <option value="Semester 7"
                                            {{ $beasiswa->semester == 'Semester 7' ? 'selected' : '' }}>Semester 7</option>
                                        <option value="Semester 8 atau lebih"
                                            {{ $beasiswa->semester == 'Semester 8 atau lebih' ? 'selected' : '' }}>Semester
                                            8 atau lebih</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="tanggungan">Tanggungan:</label>
                                    <select class="form-control" id="tanggungan" name="tanggungan" required>
                                        <option value="Tanggungan 1"
                                            {{ $beasiswa->tanggungan == 'Tanggungan 1' ? 'selected' : '' }}>Tanggungan 1
                                        </option>
                                        <option value="Tanggungan 2"
                                            {{ $beasiswa->tanggungan == 'Tanggungan 2' ? 'selected' : '' }}>Tanggungan 2
                                        </option>
                                        <option value="Tanggungan 3"
                                            {{ $beasiswa->tanggungan == 'Tanggungan 3' ? 'selected' : '' }}>Tanggungan 3
                                        </option>
                                        <option value="Tanggungan 4"
                                            {{ $beasiswa->tanggungan == 'Tanggungan 4' ? 'selected' : '' }}>Tanggungan 4
                                        </option>
                                        <option value="Tanggungan 5 atau lebih"
                                            {{ $beasiswa->tanggungan == 'Tanggungan 5 atau lebih' ? 'selected' : '' }}>
                                            Tanggungan 5 atau lebih</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="usia">Usia:</label>
                                    <select class="form-control" id="usia" name="usia" required>
                                        <option value="19 Tahun" {{ $beasiswa->usia == '19 Tahun' ? 'selected' : '' }}>19
                                            Tahun</option>
                                        <option value="20 Tahun" {{ $beasiswa->usia == '20 Tahun' ? 'selected' : '' }}>20
                                            Tahun</option>
                                        <option value="21 Tahun" {{ $beasiswa->usia == '21 Tahun' ? 'selected' : '' }}>21
                                            Tahun</option>
                                        <option value="22 Tahun" {{ $beasiswa->usia == '22 Tahun' ? 'selected' : '' }}>22
                                            Tahun</option>
                                        <option value="23 Tahun" {{ $beasiswa->usia == '23 Tahun' ? 'selected' : '' }}>23
                                            Tahun</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="penghasilan">Penghasilan:</label>
                                    <select class="form-control" id="penghasilan" name="penghasilan" required>
                                        <option value="<= Rp 1.000.000"
                                            {{ $beasiswa->penghasilan == '<= Rp 1.000.000' ? 'selected' : '' }}>&lt;= Rp
                                            1.000.000</option>
                                        <option value="Rp 1.000.000 - Rp 1.999.999"
                                            {{ $beasiswa->penghasilan == 'Rp 1.000.000 - Rp 1.999.999' ? 'selected' : '' }}>
                                            Rp 1.000.000 - Rp 1.999.999</option>
                                        <option value="Rp 2.000.000 - Rp 2.999.999"
                                            {{ $beasiswa->penghasilan == 'Rp 2.000.000 - Rp 2.999.999' ? 'selected' : '' }}>
                                            Rp 2.000.000 - Rp 2.999.999</option>
                                        <option value="Rp 3.000.000 - Rp 3.999.999"
                                            {{ $beasiswa->penghasilan == 'Rp 3.000.000 - Rp 3.999.999' ? 'selected' : '' }}>
                                            Rp 3.000.000 - Rp 3.999.999</option>
                                        <option value="Rp 4.000.000"
                                            {{ $beasiswa->penghasilan == 'Rp 4.000.000' ? 'selected' : '' }}>Rp 4.000.000
                                        </option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-rounded btn-success float-right">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
