@extends('layouts.app')
@section('head')
    <title>Admin | Dashboard</title>
@endsection
@section('url')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">User</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">User</a></li>
                        {{-- <li class="breadcrumb-item active">Blog</li> --}}
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection
@section('konten')
    <section class="content">
        <div class="container-fluid">
            <!-- /.row -->
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <form action="simple-results.html">
                        <div class="input-group">
                            <input type="search" class="form-control form-control-lg"
                                placeholder="Type your keywords here">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-lg btn-default">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Responsive Hover Table</h3>
                            {{-- <h3 class="card-title">Responsive Hover Table</h3> --}}
                            <a href="" class="btn btn-success float-right" data-toggle="modal"
                                data-target="#modal-lg"><i class="fa fa-plus"></i></a>
                            {{-- <button type="button" class="btn btn-default" >
                                Launch Large Modal
                              </button> --}}
                            {{-- <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control float-right"
                                        placeholder="Search">

                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">

                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Action</th>
                                        <th>Name</th>
                                        <th>Kontak</th>
                                        <th>Created</th>
                                        {{-- <th>Created</th> --}}

                                        {{-- <th>Reason</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $key => $val)
                                        <tr>
                                            <td> {{ $key + $data->firstItem() }}</td>
                                            <td>
                                                <a href="{{ route('saran.show', ['id' => $val->id]) }}" class="btn btn-secondary"><i class="fa fa-info"></i></a>
                                                {{-- <a class="btn btn-primary" data-toggle="modal"
                                                    data-target="#modal-lg{{ $val->id }}"><i
                                                        class="fa fa-edit"></i></a> --}}
                                                <a class="btn btn-danger saranDelete" data-id="{{ $val->id }}"><i
                                                        class="fa fa-trash"></i></a>
                                            </td>
                                            <td>{{ $val->nama }}</td>
                                            <td>{{ $val->kontak }}</td>
                                            <td>{{ $val->created_at }}</td>

                                            {{-- <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td> --}}
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $data->links() }}

                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
        @include('admin.admin.form')
    </section>
@endsection

@section('script')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script>
        @if (session()->has('success_hapus'))
            swal("Success!", "Data Berhasil dihapus", "success");
            {{ session()->forget('success_hapus'); }}
        @endif
        $('.saranDelete').click(function() {
            var id = $(this).attr('data-id');
            swal({
                    title: "Apakah Anda Yakin?",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location = "saran/delete/" + id;
                    } else {
                        swal("Batal menghapus data!");
                    }
                });
        });
    </script>
@endsection
