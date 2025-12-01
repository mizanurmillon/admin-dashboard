@extends('backend.app')
@section('title', 'System Settings')
@push('style')
    
@endpush
@section('page-content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-xl-4 col-sm-7 box-col-3">
                    <h3>System Settings</h3>
                </div>
                <div class="col-5 d-none d-xl-block">

                </div>
                <div class="col-xl-3 col-sm-5 box-col-4">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"
                                    fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                                    <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                                    <path d="M10 12h4v4h-4z" />
                                </svg>
                            </a></li>
                        <li class="breadcrumb-item">System Settings</li>
                        <li class="breadcrumb-item active">System Setting Info</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="edit-profile">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-xl-12">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h4 class="card-title mb-0">System Setting Info</h4>
                            <div class="card-options"><a class="card-options-collapse" href="#"
                                    data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a
                                    class="card-options-remove" href="#" data-bs-toggle="card-remove"><i
                                        class="fe fe-x"></i></a></div>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('system.update') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">System Name</label>
                                        <input class="form-control @error('system_name') is-invalid @enderror" type="text" name="system_name" placeholder="Enter your system name"
                                            value="{{ old('system_name', $setting->system_name ?? '') }}">
                                        @error('system_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Support Email</label>
                                        <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" placeholder="Enter your support email"
                                            value="{{ old('email', $setting->email ?? '') }}">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 col-md-12">
                                        <label class="form-label">Copyright Text</label>
                                        <input class="form-control @error('copyright_text') is-invalid @enderror" type="text" name="copyright_text" placeholder="Enter your copyright text"
                                            value="{{ old('copyright_text', $setting->copyright_text ?? '') }}">
                                        @error('copyright_text')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 col-md-4">
                                        <label class="form-label">Logo</label>
                                        <input class="dropify form-control @error('logo') is-invalid @enderror" type="file" name="logo" placeholder="Enter your logo" data-default-file="{{ asset($setting->logo ?? 'backend/assets/images/image_placeholder.png') }}">
                                        @error('logo')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label class="form-label">Logo Dark</label>
                                        <input class="dropify form-control @error('logo_dark') is-invalid @enderror" type="file" name="logo_dark" placeholder="Enter your dark logo" data-default-file="{{ asset( $setting->logo_dark ?? 'backend/assets/images/image_placeholder.png') }}">
                                        @error('logo_dark')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label class="form-label">Favicon</label>
                                        <input class="dropify form-control @error('favicon') is-invalid @enderror" type="file" name="favicon" placeholder="Enter your favicon"
                                           data-default-file="{{ asset($setting->favicon ?? 'backend/assets/images/image_placeholder.png') }}">
                                        @error('favicon')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-footer">
                                    <button class="btn btn-primary btn-block">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

@endsection