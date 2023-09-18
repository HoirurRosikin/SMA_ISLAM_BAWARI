@extends('layouts.app')
@section('head')
    <title>Blog | Dashboard</title>
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
                        <li class="breadcrumb-item"><a href="{{ route('blog') }}">Blog</a></li>
                        <li class="breadcrumb-item active">Detail</li>
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
                <div class="col-md-12">
                    <div class="card card-default">
                        <div class="card-header">
                            <h3 class="card-title">
                                Blog Detail
                            </h3>
                            <div class="card-tools">
                                <span class="description text-end">Shared publicly -
                                    {{ $data->created_at->translatedFormat('d M Y, h:i A') }}</span>

                            </div>
                            {{-- <span class="description text-end">Shared publicly - {{ $data->created_at }}</span> --}}
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            {{-- <div></div> --}}
                            <img src="{{ asset($data->image_thumbnail) }}" class="img-fluid mb-3">
                            <h1 class=" mb-3 text-bold">{{ $data->judul }}</h1>

                            {!! $data->isi !!}
                            <div class="text-center">
                                @foreach ($data->image_blog as $im)
                                    {{-- <img src="{{ asset()}}" width= '80' height='80'> --}}
                                    <img src="{{ asset('/storage/' . $im->image) }}" class="img-fluid mb-3 ">
                                @endforeach

                            </div>





                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            {{-- <button type="submit" class="btn btn-info">Submit</button> --}}
                            <a href="{{ route('blog') }}" class="btn btn-default float-right">Back</a>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
    </section>
@endsection

@section('script')
@endsection
