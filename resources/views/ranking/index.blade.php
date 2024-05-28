@extends('app')
@section('content')
    <div class="page-wrapper">
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-7 align-self-center">
                    <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Ranking Peserta Beasiswa</h4>
                    <div class="d-flex align-items-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb m-0 p-0">
                                <li class="breadcrumb-item">
                                    <a href="index.html" class="text-muted">Ranking</a>
                                </li>
                                <li class="breadcrumb-item text-muted active" aria-current="page">Ranking Peserta</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Ranking Peserta</h4>
                            <h6 class="card-subtitle">Berikut adalah ranking peserta</a>
                            </h6>
                            <table id="zero_config_wrapper" class="table table-striped table-bordered" role="grid"
                                aria-describedby="zero_config_info" width="100%" cellspacing="">

                                <thead>
                                    <tr>
                                        <th width="15px">No</th>
                                        <th class="text-center">Nama</th>
                                        <th class="text-center">Total Nilai</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($all_beasiswa as $data)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $data['nama_mahasiswa'] }}</td>
                                            <td class="text-center">{{ round($data['total'], 2) }}</td>
                                            <td class="text-center">
                                                <div class="btn btn-toolbar justify-content-center">
                                                    <button type="button" class="btn btn-rounded btn-primary mr-2"
                                                        data-toggle="modal" data-target="#exampleModal-{{ $data['id'] }}">
                                                        Detail
                                                    </button>
                                                </div>
                                            </td>
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal-{{ $data['id'] }}" tabindex="-1"
                                                role="dialog" aria-labelledby="exampleModal-{{ $data['id'] }}Label"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title"
                                                                id="exampleModal-{{ $data['id'] }}Label">
                                                                <b>Info Detail</b></h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <small><b>Nama</b></small>
                                                                            <p>{{ $data['nama_mahasiswa'] }}</p>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <small><b>Total Nilai</b></small>
                                                                            <p>{{ round($data['total'], 2) }}</p>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col-md-3">
                                                                            <small><b>IPK</b></small>
                                                                            <p>{{ $data['ipk'] }}</p>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <small><b>Nilai Fuzzy</b></small>
                                                                            <p>{{ round($data['nilai_ipk'], 3) }}
                                                                            </p>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <small><b>Nilai Normalisasi</b></small>
                                                                            <p>{{ round($data['normalized_ipk'], 3) }}
                                                                            </p>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <small><b>Nilai Preferensi IPK</b></small>
                                                                            <p>{{ round($data['preferensi_ipk'], 3) }}
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-3">
                                                                            <small><b>Semester</b></small>
                                                                            <p>{{ $data['semester'] }}</p>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <small><b>Nilai Fuzzy</b></small>
                                                                            <p>{{ round($data['nilai_semester'], 3) }}
                                                                            </p>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <small><b>Nilai Normalisasi</b></small>
                                                                            <p>{{ round($data['normalized_semester'], 3) }}
                                                                            </p>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <small><b>Nilai Preferensi Semester</b></small>
                                                                            <p>{{ round($data['preferensi_semester'], 3) }}
                                                                            </p>
                                                                        </div>
                                                                    </div>


                                                                    <div class="row">
                                                                        <div class="col-md-3">
                                                                            <small><b>Tanggungan Orang Tua</b></small>
                                                                            <p>{{ $data['tanggungan'] }}</p>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <small><b>Nilai Fuzzy</b></small>
                                                                            <p>{{ round($data['nilai_tanggungan'], 3) }}
                                                                            </p>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <small><b>Nilai Normalisasi</b></small>
                                                                            <p>{{ round($data['normalized_tanggungan'], 3) }}
                                                                            </p>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <small><b>Nilai Preferensi Tanggungan</b></small>
                                                                            <p>{{ round($data['preferensi_tanggungan'], 3) }}
                                                                            </p>
                                                                        </div>
                                                                    </div>


                                                                    <div class="row">
                                                                        <div class="col-md-3">
                                                                            <small><b>Usia</b></small>
                                                                            <p>{{ $data['usia'] }}</p>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <small><b>Nilai Fuzzy</b></small>
                                                                            <p>{{ round($data['nilai_usia'], 3) }}
                                                                            </p>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <small><b>Nilai Normalisasi</b></small>
                                                                            <p>{{ round($data['normalized_usia'], 3) }}
                                                                            </p>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <small><b>Nilai Preferensi Usia</b></small>
                                                                            <p>{{ round($data['preferensi_usia'],3) }}
                                                                            </p>
                                                                        </div>
                                                                    </div>


                                                                    <div class="row">
                                                                        <div class="col-md-3">
                                                                            <small><b>Penghasilan Orang Tua</b></small>
                                                                            <p>{{ $data['penghasilan'] }}</p>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <small><b>Nilai Fuzzy</b></small>
                                                                            <p>{{ round($data['nilai_penghasilan'], 3) }}
                                                                            </p>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <small><b>Nilai Normalisasi</b></small>
                                                                            <p>{{ round($data['normalized_penghasilan'], 3) }}
                                                                            </p>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <small><b>Nilai Preferensi Penghasilan</b></small>
                                                                            <p>{{ round($data['preferensi_penghasilan'], 3) }}
                                                                            </p>
                                                                        </div>
                                                                    </div>




                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-rounded btn-danger"
                                                                data-dismiss="modal">Tutup</button>
                                                        </div>
                                                    </div>
                                                </div>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#zero_config_wrapper').DataTable({
                searching: true, // Aktifkan fitur pencarian
                lengthMenu: [10, 25, 50, 100] // Menentukan jumlah data yang ditampilkan per halaman
            });
        });
    </script>
@endsection
