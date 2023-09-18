<div class="modal fade" id="modal-lg">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Large Modal</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.save') }}" method="POST" autocomplete="off" enctype="multipart/form-data">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Name" name="name" id="name"
                            autocomplete="off" @error('name') is-invalid @enderror required>

                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>

                    </div> @error('name')
                        <div class="invalid-feddback">
                            {{ $message }}
                        </div>
                    @enderror
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Email" name="email" id="email"
                            autocomplete="off" @error('email') is-invalid @enderror required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>

                    </div> @error('email')
                        <div class="invalid-feddback">
                            {{ $message }}
                        </div>
                    @enderror
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Password" name="password"
                            id="password" @error('password') is-invalid @enderror required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>

                    </div> @error('password')
                        <div class="invalid-feddback">
                            {{ $message }}
                        </div>
                    @enderror
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Retype password"
                            name="password_confirmation" id="password_confirmation"
                            @error('password_confirmation') is-invalid @enderror required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>

                    </div> @error('password_confirmation')
                        <div class="invalid-feddback">
                            {{ $message }}
                        </div>
                    @enderror
                    <div class="row">

                        <!-- /.col -->
                        {{-- <div class="col-12">
                      <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                  </div> --}}
                        <!-- /.col -->
                    </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>


@foreach ($data as $key => $val)
    <div class="modal fade" id="modal-lg{{ $val->id }}">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Modal</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin.save') }}" method="POST">
                        @csrf
                        <input type="hidden" value="{{ $val->id }}" name="id" id="id">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Name" name="name" id="name"
                                @error('name') is-invalid @enderror value="{{ $val->name }}" required>

                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>

                        </div>
                        @error('name')
                            <div class="invalid-feddback">
                                {{ $message }}
                            </div>
                        @enderror
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" placeholder="Email" name="email" id="email"
                                @error('email') is-invalid @enderror value="{{ $val->email }}" required>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>

                        </div>
                        @error('email')
                            <div class="invalid-feddback">
                                {{ $message }}
                            </div>
                        @enderror
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" placeholder="Password" name="password"
                                id="password" @error('password') is-invalid @enderror autocomplete="off">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>

                        </div>
                        @error('password')
                            <div class="invalid-feddback">
                                {{ $message }}
                            </div>
                        @enderror
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" placeholder="Retype password"
                                name="password_confirmation" id="password_confirmation"
                                @error('password_confirmation') is-invalid @enderror>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>

                        </div>
                        @error('password_confirmation')
                            <div class="invalid-feddback">
                                {{ $message }}
                            </div>
                        @enderror
                        <div class="row">

                            <!-- /.col -->
                            {{-- <div class="col-12">
                    <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                </div> --}}
                            <!-- /.col -->
                        </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                </form>

            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
@endforeach
