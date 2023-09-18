@extends('home_page.app2')
@section('head')
    <title>berita umum detail</title>
@endsection

@section('isi')
    <p class="text-end">| Oleh {{ $data->user->name }}</p>
    <br>
    <div class="container-fluid">
        <div class="col">
            <div>
                <img class="mx-auto d-block" height="400" src="{{ asset($data->image_thumbnail) }}" alt="">
            </div>
            <p class="h2 text-center mb-5">{{ $data->judul }}</p>

            <p class="lead mb-5">{!! $data->isi !!}</p>

            <div class="mb-5">
                @foreach ($data->image_blog as $im)
                    {{-- <img src="{{ asset()}}" width= '80' height='80'> --}}
                    <div class="text-center">
                        <img src="{{ asset('/storage/' . $im->image) }}" class=" mb-3" width="300">
                    </div>
                @endforeach
            </div>
            <div>ini bagian file</div>

            @foreach ($data->lampiran as $file)
                {{-- {{ link_to_asset('/storage/' . $file->path, 'Open the pdf!') }} --}}
                <a href="{{ route('download_pdf', ['id' => $file->id]) }}"><i
                        class="bi bi-filetype-pdf">{{ $file->keterangan }}</i></a> <br>
                {{-- <ion-icon name="document-outline"></ion-icon> --}}

                {{-- <p>{{ $file->keterangan }}</p> --}}
            @endforeach

            <p class="h4"></p @endsection @section('script') @endsection>

        </div>

    </div>

    {{-- <p></p> --}}
