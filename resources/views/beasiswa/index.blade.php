@extends('app')

@section('content')
    <div class="page-wrapper">
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-7 align-self-center">
                    <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Daftar Mahasiswa</h4>
                    <div class="d-flex align-items-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb m-0 p-0">
                                <li class="breadcrumb-item"><a href="index.html" class="text-muted">Data</a></li>
                                <li class="breadcrumb-item text-muted active" aria-current="page">Daftar Peserta Beasiswa
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="card">

                        <div class="card-body">
                            <h4 class="card-title">Daftar Peserta Beasiswa</h4>
                            <h6 class="card-subtitle">Berikut adalah daftar nama peserta beasiswa yang telah terdaftar
                                ke
                                dalam sistem</h6>
                            @csrf
                            <button id="delete-all-btn" style="margin-bottom: 10px; display: none;"
                                class="btn btn-rounded btn-danger delete_all"
                                data-url="{{ route('beasiswa.deleteAll') }}">Delete All
                                Selected</button>
                            <div class="card-subtitle float-right mr-4 mb-4">
                                <button type="button" class="btn btn-rounded btn-primary" data-toggle="modal"
                                    data-target="#myModal">Import Data</button>
                                <!-- Modal -->
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Import Data</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="{{ route('importbeasiswa') }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <input type="file" name="file" required>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Tutup</button>
                                                    <button type="submit" class="btn btn-primary"
                                                        onclick="saveChanges()">Submit Data</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <a href ="{{ route('exportbeasiswa') }}" class="btn btn-rounded btn-primary">Export Data</a>
                                {{-- <button type="button" href="{{ route('exportbeasiswa') }}" class="btn btn-primary">Export
                                    Data</button> --}}
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="zero_config_wrapper" class="table table-striped table-bordered no-wrap">
                                        <thead>
                                            <tr class="text-center">
                                                <th width="50px"><input type="checkbox" id="master"></th>
                                                <th width="15px">No</th>
                                                <th>Nama</th>
                                                <th>IPK</th>
                                                <th>Semester</th>
                                                <th>Tanggungan Orang Tua</th>
                                                <th>Usia</th>
                                                <th>Penghasilan Orang Tua</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($all_beasiswa as $data)
                                                <tr>

                                                    <td><input type="checkbox" class="sub_chk"
                                                            data-id="{{ $data->id }}"></td>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $data['nama_mahasiswa'] }}</td>
                                                    <td>{{ $data['ipk'] }}</td>
                                                    <td>{{ $data['semester'] }}</td>
                                                    <td>{{ $data['tanggungan'] }}</td>
                                                    <td>{{ $data['usia'] }}</td>
                                                    <td>{{ $data['penghasilan'] }}</td>
                                                    <td class="text-center">
                                                        <a href="{{ route('beasiswa.edit', $data->id) }}"
                                                            class="btn btn-sm btn-rounded btn-primary">Edit</a>
                                                        <div class="btn btn-toolbar justify-content-center">
                                                            <form action="{{ route('beasiswa.destroy', $data['id']) }}"
                                                                method="post"
                                                                onsubmit="return confirm('Apakah anda yakin ingin menghapus data ini?')">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="button"
                                                                    class="btn btn-sm btn-rounded btn-danger"
                                                                    data-toggle="modal"
                                                                    data-target="#deleteModal{{ $data->id }}">
                                                                    Delete
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </td>
                                                    <div class="modal fade" id="deleteModal{{ $data->id }}"
                                                        tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="deleteModalLabel">Konfirmasi
                                                                        Penghapusan</h5>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Apakah Anda yakin ingin menghapus data ini?
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Tutup</button>
                                                                    <!-- Form untuk menghapus data saat dikonfirmasi -->
                                                                    <form
                                                                        action="{{ route('beasiswa.destroy', $data->id) }}"
                                                                        method="post">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit"
                                                                            class="btn btn-danger">Hapus</button>
                                                                    </form>
                                                                </div>
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
        </div>

        <script>
            $(document).ready(function() {
                $('#zero_config_wrapper').DataTable({
                    searching: true, // Aktifkan fitur pencarian
                    lengthMenu: [10, 25, 50, 100] // Menentukan jumlah data yang ditampilkan per halaman
                });
            });

            $(document).ready(function() {
                function updateDeleteButtonVisibility() {
                    var anyChecked = $('.sub_chk:checked').length > 0;
                    if (anyChecked) {
                        $('#delete-all-btn').fadeIn('fast');
                    } else {
                        $('#delete-all-btn').fadeOut('fast');
                    }
                }

                $('#master').on('click', function(e) {
                    $(".sub_chk").prop('checked', $(this).prop('checked'));
                    updateDeleteButtonVisibility();
                });

                $('.sub_chk').on('change', function(e) {
                    updateDeleteButtonVisibility();
                });

                $('.delete_all').on('click', function(e) {
                    var allVals = [];
                    $(".sub_chk:checked").each(function() {
                        allVals.push($(this).attr('data-id'));
                    });

                    if (allVals.length <= 0) {
                        alert("Please select row.");
                    } else {
                        var check = confirm("Yakin ingin menghapus data ini?");
                        if (check == true) {
                            var join_selected_values = allVals.join(",");

                            $.ajax({
                                url: $(this).data('url'),
                                type: 'DELETE',
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                },
                                data: {
                                    ids: join_selected_values
                                },
                                success: function(data) {
                                    if (data['success']) {
                                        $(".sub_chk:checked").each(function() {
                                            $(this).parents("tr").remove();
                                        });
                                        alert(data['success']);
                                        // Redirect to beasiswa.index after deletion
                                        window.location.href = "{{ route('beasiswa.index') }}";
                                    } else if (data['error']) {
                                        alert(data['error']);
                                    } else {
                                        alert('Terjadi Kesalahan');
                                    }
                                },
                                error: function(data) {
                                    alert(data.responseText);
                                }
                            });
                            $.each(allVals, function(index, value) {
                                $('table tr').filter("[data-row-id='" + value + "']").remove();
                            });
                        }
                    }
                });
            });
        </script>
    @endsection
