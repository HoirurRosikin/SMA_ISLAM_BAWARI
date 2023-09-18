<div class="container-fluid mb-5">
    <div class="card d-flex justify-content-center">
        <div class="card-header">
            Saran dan Masukan
        </div>
        <div class="card-body">
            {{-- <h5 class="card-title">Saran dan Masukan</h5> --}}
            {{-- <form action="{{ route('saran.save') }}" method="POST" enctype="multipart/form-data">
                @csrf --}}
            <form action="{{ route('saran.save') }}" method="POST" autocomplete="off" enctype="multipart/form-data">
                @csrf
                <label class="form-label">Kontak</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Masukan email atau no hp" name="kontak"
                        id="kontak" autocomplete="off" @error('kontak') is-invalid @enderror required>
                </div>
                @error('kontak')
                    <div class="invalid-feddback">
                        {{ $message }}
                    </div>
                @enderror
                <label class="form-label">Nama</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Masukan nama" name="name" id="name"
                        autocomplete="off" @error('name') is-invalid @enderror required>
                </div>
                @error('name')
                    <div class="invalid-feddback">
                        {{ $message }}
                    </div>
                @enderror
                <label class="form-label">Pesan dan Masukan</label>
                <div class="input-group mb-3">
                    <textarea name="pesan" id="pesan" cols="30" placeholder="Masukan pesan dan masukan" class="form-control"
                        rows="10"></textarea>
                </div>
                @error('pesan')
                    <div class="invalid-feddback">
                        {{ $message }}
                    </div>
                @enderror
                <div class="card-footer text-start">
                    <button type="submit" class="btn btn-info">Submit</button>
                    {{-- <a href="{{ route('blog') }}" class="btn btn-default float-right">Cancel</a> --}}
                </div>
            </form>
        </div>
    </div>
</div>
