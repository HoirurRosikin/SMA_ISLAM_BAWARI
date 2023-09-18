@extends('layouts.app')
@section('head')
    <title>Admin | Dashboard</title>
@endsection
@section('url')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Saran Detail</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('saran') }}">Saran</a></li>
                        <li class="breadcrumb-item active">Saran Detail</li>
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
            <div class="col-md-12">
          <div class="card card-primary card-outline">
            <div class="card-header">
              {{-- <h3 class="card-title"></h3> --}}

              {{-- <div class="card-tools">
                <a href="#" class="btn btn-tool" title="Previous"><i class="fas fa-chevron-left"></i></a>
                <a href="#" class="btn btn-tool" title="Next"><i class="fas fa-chevron-right"></i></a>
              </div> --}}
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <div class="mailbox-read-info">
                <h5>Saran dan masukan dari : {{ $data->nama }}</h5>
                <h6>From : <a href="https://mail.google.com/" >{{ $data->kontak }}</a> 
                  <span class="mailbox-read-time float-right">{{ $data->created_at->translatedFormat('d M Y, h:i A') }}</span></h6>
              </div>
              <!-- /.mailbox-read-info -->
              <!-- /.mailbox-controls -->
              <div class="mailbox-read-message">
                <p>hai, {{Auth::user()->name }}</p>
                <p class="mb-3 mt-3">{{ $data->pesan }}</p>
              </div>
              <!-- /.mailbox-read-message -->
            </div>
            <!-- /.card-footer -->
            <div class="card-footer">
              <div class="float-right">
                {{-- <button type="button" class="btn btn-default"><i class="fas fa-share"></i> Forward</button> --}}
                <a href="{{ route('saran') }}" class="btn btn-default">Back</a>
              </div>
            </div>
            <!-- /.card-footer -->
          </div>
          <!-- /.card -->
        </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
@endsection

@section('script')

@endsection
