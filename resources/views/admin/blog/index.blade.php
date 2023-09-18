@extends('layouts.app')
@section('head')
    <title>Blog | Dashboard</title>
    <style>
        td p {
            width: 320px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
    </style>
@endsection
@section('url')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Blog</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Blog</a></li>
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
                            <a href="{{ route('blog.create') }}" class="btn btn-success float-right"><i
                                    class="fa fa-plus"></i></a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">

                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Action</th>
                                        <th>Thumbnail</th>
                                        <th>Judul</th>
                                        <th>Kategori</th>
                                        {{-- <th>Thumbnail</th> --}}
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
                                                {{-- <a href="" class="btn btn-secondary"><i class="fa fa-info"></i></a> --}}
                                                <a href="{{ route('blog.show', ['id' => $val->id]) }}"
                                                    class="btn btn-secondary"><i class="fa fa-info"></i></a>
                                                <a href="{{ route('blog.edit', ['id' => $val->id]) }}"
                                                    class="btn btn-primary"><i class="fa fa-edit"></i></a>

                                                <a class="btn btn-danger deleteBlog" data-id="{{ $val->id }}"><i
                                                        class="fa fa-trash"></i></a>
                                            </td>
                                            <td>
                                                {{-- <img src="" width= '50' height='50'  alt="image_thumbnail"> --}}
                                                <img src="{{ asset($val->image_thumbnail) }}" width='50' height='50'>
                                                {{-- {{ $val->image_thumbnail }} --}}
                                                {{-- {{ asset($val->image_thumbnail) }} --}}
                                            </td>
                                            {{-- <img src="{{ asset($item->photo) }}" width= '50' height='50' --}}
                                            <td>
                                                <p>{{ $val->judul }}</p>
                                            </td>
                                            <td>{{ $val->kategori->nama_kategori }}</td>
                                            <td>{{ $val->created_at->translatedFormat('d M Y, h:i A') }}</td>

                                            {{-- <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td> --}}
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $data->links() }}

                        </div>
                        <!-- /.card-body -->
                    </div>
                    {{-- <textarea name="isi" id="isi"></textarea> --}}

                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>

@endsection

@section('script')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        @if (session()->has('success'))
            swal("Success!", "Data Berhasil dibuat", "success");
            {{ session()->forget('success'); }}
        @endif
        @if (session()->has('successEdit'))
            swal("Success!", "Data Berhasil diedit", "success");
            {{ session()->forget('successEdit'); }}
        @endif
        @if (session()->has('success_hapus'))
            swal("Success!", "Data Berhasil dihapus", "success");
            {{ session()->forget('success_hapus'); }}
        @endif
        $('.deleteBlog').click(function() {
            var id = $(this).attr('data-id');
            swal({
                    title: "Apakah Anda Yakin?",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location = "blog/delete/" + id;
                    } else {
                        swal("Batal menghapus akun!");
                    }
                });
        });
    </script>
@endsection
