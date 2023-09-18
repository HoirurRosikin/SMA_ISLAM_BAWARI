@extends('layouts.app')
@section('head')
    <title>Blog | Dashboard</title>
@endsection
@section('url')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Form blog</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('blog') }}">Blog</a></li>
                        <li class="breadcrumb-item active">Form</li>
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
            <br>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('blog.save') }}" id="form_blog" method="POST" enctype="multipart/form-data">
                                @csrf
                                @isset($data)
                                    <input type="hidden" name="id" value="{{ $data->id }}">
                                @endisset
                                <label for="judul">Judul</label>
                                <input type="hidden" value="{{ Auth::user()->id }}" name="user_id" id="user_id"">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="judul" name="judul"
                                        id="judul" autocomplete="off"
                                        value="@isset($data) {{ $data->judul }} @endisset">
                                </div>
                                @error('judul')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <div class="form-group">
                                    <label>Thumbnail</label>
                                    <br>
                                    <input type="file" name="image_thumbnail" id="image_thumbnail">
                                    @isset($data)
                                        <img src="{{ asset($data->image_thumbnail) }}" width='80' height='80'>
                                    @endisset
                                </div>
                                @error('image_thumbnail')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror

                                <div class="form-group">
                                    <label>Gambar</label>
                                    <br>
                                    <input type="file" name="image[]" multiple>
                                    @isset($data)
                                        @foreach ($data->image_blog as $im)
                                            <img src="{{ asset('/storage/'.$im->image) }}" width='80' height='80'>
                                        @endforeach
                                    @endisset

                                </div>
                                @error('image')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                                {{-- <br> --}}
                                <label class="form-label">Lampiran</label>
                                <div class="mb-3">
                                    <input type="file" name="path[]" multiple>
                                </div>
                                @error('path')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <br>
                                <label for="keterangan">Keterangan Lampiran</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="keterangan" name="keterangan"id="keterangan" autocomplete="off" value="@isset($data)@if($data->lampiran->count() > 1){!! $data->lampiran->last()->keterangan !!}@endif @endisset">
                                </div>
                                @error('keterangan')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <div class="form-group">
                                    <label>Kategori</label>
                                    <select class="form-control" name="kategori" id="kategori" required>
                                        @if (isset($data))
                                            <option value="{{ $data->kategori_id }}">{{ $data->kategori->nama_kategori }}
                                            </option>
                                        @else
                                            <option></option>
                                        @endif

                                        @foreach ($kategoris as $kategori)
                                            <option value="{{ $kategori->id }}">{{ $kategori->nama_kategori }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('kategori')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <label>Konten</label>
                                <textarea name="isi" id="isi" rows="4" cols="50">
                                        @isset($data)
                                            {!! $data->isi !!}
                                        @endisset
                                </textarea>
                                @error('isi')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-info">Submit</button>
                            <a href="{{ route('blog') }}" class="btn btn-default float-right">Cancel</a>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div><!-- /.container-fluid -->
        </form>
    </section>
@endsection

@section('script')
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.2/classic/ckeditor.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"
        type="text/javascript"></script>

    <script>
        ClassicEditor
            .create(document.querySelector('#isi'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
        $().ready(function() {
            $("#form_blog").validate({
                ignore: [],
                rules: {
                    isi: {
                        required: true,
                    },
                },
                messages: {
                    isi: {
                        required: "",
                    },
                },
            });
        });
    </script>

    <script>
        @isset($data)
        @endisset
    </script>
@endsection
