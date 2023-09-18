@extends('home_page.app2')
@section('head')
    <title>Sejarah</title>
@endsection

@section('isi')
    <br>

    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="row">
                    @if ($data != null)
                        @foreach ($data as $dataBlog)
                            <div class="col-sm-4 mb-6 mb-sm-0">
                                <div class="card">
                                    <img src="{{ asset($dataBlog->image_thumbnail) }}" class="card-img-top" alt="gambar"
                                        height="300">
                                    {{-- <img src="{{ asset($data->image_thumbnail) }}" width='80' height='80'> --}}

                                    <div class="card-body">
                                        <h5 class="card-title">{{ $dataBlog->judul }} || {{ $kategori }} </h5>
                                        </p>
                                        <a href="{{ route('detail.blog', ['id' => $dataBlog->id]) }}"
                                            class="btn btn-primary">Lihat</a>
                                        {{-- <a href="{{ route('detail.blog', ['id' => $val->id]) }}" class="btn btn-secondary"><i class="fa fa-info"></i></a> --}}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <p>no data</p>
                    @endif

                    <br>

                </div>
            </div>
            <div class="col-md-auto">
                @include('home_page.section.saran_masukan')
            </div>

        </div>

    </div>


@endsection


@section('script')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        @if (session()->has('success'))
            swal("Success!", "Terima kasih atas saran dan masukannya", "success");
            {{ session()->forget('success') }}
        @endif
    </script>
@endsection
