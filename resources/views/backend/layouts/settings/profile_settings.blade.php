@extends('backend.app')
@section('title', 'Edit Profile')
@push('style')
<style>
    .show-hide {
        position: absolute;
        right: 20px;
        top: 19px;
        transform: translateY(-50%);
    }
    .img-container img {
        max-width: 100%;
        max-height: 500px;
    }
</style>
<link href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.13/cropper.min.css" rel="stylesheet">
@endpush
@section('page-content')

<x-breadcrumbs title="Profile" subtitle="Edit Profile" />


<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="edit-profile">
        <div class="row">
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4 class="card-title mb-0">My Profile</h4>
                        <div class="card-options"><a class="card-options-collapse" href="#" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a></div>
                    </div>
                    <div class="card-body">
                        <div class="row mb-2">
                            <div class="profile-title">
                                <div class="d-flex align-items-center gap-3">
                                    <!-- Profile Image -->
                                    <div class="position-relative d-inline-block" style="width: 70px; height: 70px;">
                                        @php
                                        $name = trim($userDetails->name);
                                        $firstLetter = $name !== '' ? mb_substr($name, 0, 1) : '';
                                        @endphp

                                        <img class="rounded-circle profile-picture {{ $userDetails->avatar ? '' : 'd-none' }}" alt="" src="{{ $userDetails->avatar ? asset($userDetails->avatar) : '#' }}" style="width: 70px; height: 70px; object-fit: cover;">
                                        
                                        @if(!$userDetails->avatar)
                                        <div class="profile-fallback d-flex align-items-center justify-content-center" style="background: #2b5f60; width: 70px; height: 70px; border-radius: 50%; color: #fff; font-size: 28px; font-weight: 700; text-transform: uppercase;">
                                            {{ $firstLetter }}
                                        </div>
                                        @endif

                                        <!-- Upload Button Icon on Image -->
                                        <div class="position-absolute" style="bottom: 0; right: 0; transform: translate(15%, 15%);">
                                            <input type="file" name="profile_picture" id="profile_picture_input" hidden>
                                            <label for="profile_picture_input" class="bg-white rounded-circle shadow border" style="cursor: pointer; width: 28px; height: 28px; display: flex; justify-content: center; align-items: center; transition: all 0.2s;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#2b5f60" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-camera">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M5 7h1a2 2 0 0 0 2 -2a1 1 0 0 1 1 -1h6a1 1 0 0 1 1 1a2 2 0 0 0 2 2h1a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-9a2 2 0 0 1 2 -2" />
                                                    <path d="M9 13a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                                                </svg>
                                            </label>
                                        </div>
                                    </div>

                                    <!-- User Details -->
                                    <div class="flex-grow-1">
                                        <h3 class="mb-1 f-w-600">{{ $userDetails->name }}</h3>
                                        <p class="mb-0 text-muted">{{ $userDetails->role }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-wrapper border rounded-3">
                            <form method="POST" action="{{ route('update.profile') }}">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">Name</label>
                                    <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" placeholder="Enter your name" value="{{ $userDetails->name }}">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Email-Address</label>
                                    <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" placeholder="Enter your Email" value="{{ $userDetails->email }}">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-footer">
                                    <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary">Back</a>
                                    <button class="btn btn-primary btn-block">Save</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-xl-8 card">
                <div class="card-header pb-0">
                    <h4 class="card-title mb-0">Update Password</h4>
                    <div class="card-options"><a class="card-options-collapse" href="#" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a></div>
                </div>

                <div class="card-body">
                    <div class="card-wrapper border rounded-3">
                        <form method="POST" action="{{ route('update.password') }}">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Current Password</label>
                                            <div class="form-input position-relative">
                                                <input class="form-control @error('password') is-invalid @enderror" type="password" placeholder="Enter your current password" name="password">
                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                                <div class="show-hide"><span class="show"> </span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">New Password</label>
                                            <div class="form-input position-relative">
                                                <input class="form-control @error('new_password') is-invalid @enderror" type="password" placeholder="Enter your new password" name="new_password">
                                                @error('new_password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                                {{-- <div class="show-hide"><span class="show"> </span></div>  --}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Confirm Password</label>
                                            <div class="form-input position-relative">
                                                <input class="form-control @error('new_password_confirmation') is-invalid @enderror" type="password" placeholder="Enter your confirm password" name="new_password_confirmation">
                                                @error('new_password_confirmation')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                                {{-- <div class="show-hide hide-show"><span class="show"> </span></div>  --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-end">
                                <button class="btn btn-primary" type="submit">Update Password</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Crop Modal -->
<div class="modal fade" id="cropModal" tabindex="-1" aria-labelledby="cropModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cropModalLabel">Crop Profile Picture</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="img-container text-center">
                    <img id="imageToCrop" src="" alt="Picture" style="max-width: 100%; display: block;">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" id="cropAndUpload">Crop & Upload</button>
            </div>
        </div>
    </div>
</div>

<!-- Container-fluid Ends-->
@endsection
@push('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.13/cropper.min.js"></script>
<script>
    let cropper;
    const image = document.getElementById('imageToCrop');
    let cropModal;

    $(document).ready(function() {
        cropModal = new bootstrap.Modal(document.getElementById('cropModal'), {
            backdrop: 'static'
        });

        $('#profile_picture_input').change(function(e) {
            const files = e.target.files;
            if (files && files.length > 0) {
                const file = files[0];
                
                // Ensure the file is an image
                if (!file.type.match('image.*')) {
                    toastr.error('Please select an image file.');
                    return;
                }

                const reader = new FileReader();
                reader.onload = function(event) {
                    image.src = event.target.result;
                    cropModal.show();
                };
                reader.readAsDataURL(file);
            }
        });

        $('#cropModal').on('shown.bs.modal', function() {
            cropper = new Cropper(image, {
                aspectRatio: 1,
                viewMode: 1,
                autoCropArea: 1,
                responsive: true,
                background: false
            });
        }).on('hidden.bs.modal', function() {
            if (cropper) {
                cropper.destroy();
                cropper = null;
            }
            $('#profile_picture_input').val(''); // Reset file input
        });

        $('#cropAndUpload').click(function() {
            if (!cropper) return;
            
            cropper.getCroppedCanvas({
                width: 400,
                height: 400
            }).toBlob(function(blob) {
                const formData = new FormData();
                formData.append('profile_picture', blob, 'profile.jpg');
                formData.append('_token', '{{ csrf_token() }}');

                const btn = $('#cropAndUpload');
                const originalText = btn.text();
                btn.text('Uploading...').prop('disabled', true);

                $.ajax({
                    url: '{{ route('update.profile.picture') }}',
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(data) {
                        if (data.success) {
                            let newImageUrl = data.image_url + '?v=' + new Date().getTime();
                            $('.profile-picture').attr('src', newImageUrl).removeClass('d-none');
                            $('.profile-fallback').addClass('d-none');
                            toastr.success('Profile picture updated successfully.');
                            cropModal.hide();
                        } else {
                            toastr.error(data.message || 'Failed to update profile picture.');
                        }
                    },
                    error: function(xhr) {
                        toastr.error('Something went wrong!');
                        console.log(xhr.responseText);
                    },
                    complete: function() {
                        btn.text(originalText).prop('disabled', false);
                    }
                });
            }, 'image/jpeg', 0.9);
        });
    });
</script>
@endpush
