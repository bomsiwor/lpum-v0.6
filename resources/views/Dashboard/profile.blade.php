@extends('Template.Dashboard.layouts')

@push('vendorStyle')
    @livewireStyles
@endpush

@section('main')
    <!-- ============================================================= -->
    <!-- Start Page Content -->
    <!-- ============================================================= -->
    <!-- Row -->
    <div class="row">
        <!-- Column -->
        <div class="col-lg-4 col-xlg-3 col-md-5">
            <div class="card">
                <div class="card-body">
                    <center class="mt-4">
                        <img src="{{ auth()->user()->image ? asset('storage/' . auth()->user()->image) : asset('assets/images/default_profile.png') }}"
                            class="rounded-circle object-fit-cover" width="150" height="150" />
                        <h4 class="mt-2">{{ auth()->user()->full_name }}</h4>
                        <h6 class="card-subtitle">{{ auth()->user()->study_program->study_program_name }}</h6>
                        <h6 class="card-subtitle">{{ auth()->user()->nim }}</h6>
                        <div class="d-flex justify-content-evenly">
                            <button class="btn btn-sm btn-orange text-white" data-bs-toggle="modal"
                                data-bs-target="#change-photo-modal">Ubah Foto profil</button>
                            @if (auth()->user()->image)
                                <button class="btn btn-sm btn-danger text-white" onclick="deletePicture()">Hapus Foto
                                    profil</button>
                            @endif
                        </div>
                    </center>
                </div>
                <div class="card-body pt-0">
                    <small class="text-muted">Surat Elektronik</small>
                    <h6>{{ auth()->user()->email }}</h6>
                    @if (auth()->user()->show_phone)
                        <small class="text-muted pt-4 db">No HP</small>
                        <h6>{{ auth()->user()->phone }}</h6>
                    @endif
                    @if (auth()->user()->show_address)
                        <small class="text-muted pt-4 db">Alamat</small>
                        <h6>{{ auth()->user()->address }}</h6>
                    @endif
                    <hr class="text-secondary">
                    @if (auth()->user()->show_socmed)
                        <small class="text-muted pt-4 db">Instagram</small>
                        <h6>{{ auth()->user()->instagram ?? '-' }}</h6>
                        <small class="text-muted pt-4 db">linkedin</small>
                        <h6>{{ auth()->user()->linkedin ?? '-' }}</h6>
                        <small class="text-muted pt-4 db">Twitter</small>
                        <h6>{{ auth()->user()->twitter ?? '-' }}</h6>
                    @endif
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-8 col-xlg-9 col-md-7">
            <div class="card overflow-hidden">
                <!-- Tabs -->
                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-profile-tab" data-bs-toggle="pill" href="#last-month"
                            role="tab" aria-controls="pills-profile" aria-selected="false">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="update-profile-tab" data-bs-toggle="pill" href="#update-profile"
                            role="tab" aria-controls="update-profile" aria-selected="false">Pengaturan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="change-password-tab" data-bs-toggle="pill" href="#change-password"
                            role="tab" aria-controls="change-password" aria-selected="false">Ubah Password</a>
                    </li>
                </ul>
                <!-- Tabs -->
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="last-month" role="tabpanel"
                        aria-labelledby="pills-profile-tab">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3 col-xs-6 b-r">
                                    <strong>Nama Lengkap</strong>
                                    <br />
                                    <p class="text-muted">{{ auth()->user()->full_name }}</p>
                                </div>
                                <div class="col-md-3 col-xs-6 b-r">
                                    <strong>Program Studi</strong>
                                    <br />
                                    <p class="text-muted">{{ auth()->user()->study_program->study_program_name }}</p>
                                </div>
                                <div class="col-md-3 col-xs-6 b-r">
                                    <strong>Surel</strong>
                                    <br />
                                    <p class="text-muted">{{ auth()->user()->email }}</p>
                                </div>
                                <div class="col-md-3 col-xs-6">
                                    <strong>NIM</strong>
                                    <br />
                                    <p class="text-muted">{{ auth()->user()->nim }}</p>
                                </div>
                            </div>
                            <hr />
                            <p class="mt-4">
                                {{ auth()->user()->description ?? '' }}
                            </p>
                            {{-- <h4 class="font-weight-medium mt-4">Organisasi</h4> --}}
                            {{-- <hr /> --}}
                        </div>
                    </div>

                    {{-- Update Profile --}}
                    <div class="tab-pane fade" id="update-profile" role="tabpanel" aria-labelledby="update-profile-tab">
                        @livewire('update-profile-component')
                    </div>

                    {{-- Change Password --}}
                    <div class="tab-pane fade" id="change-password" role="tabpanel" aria-labelledby="change-password-tab">
                        @livewire('change-password-component')
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
    </div>
    <!-- Row -->
    <!-- ============================================================= -->
    <!-- End PAge Content -->
    <!-- ============================================================= -->
    @livewire('change-profile-picture')
@endsection

@push('vendorScript')
    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endpush

@section('scripts')
    <script>
        window.addEventListener('profile-updated', event => {
            Swal.fire('Sukses', 'Memperbarui data profile', 'success');
        })

        window.addEventListener('photo-updated', event => {
            Swal.fire({
                title: "Sukses!",
                icon: 'success',
                text: "Mengubah foto profile",
                allowOutsideClick: false,
                allowEscapeKey: false,
            }).then((result) => {
                if (result.isConfirmed) {
                    location.reload()
                }
            });
        })
    </script>

    <script>
        function deletePicture() {
            Swal.fire({
                title: `Hapus foto profil ?`,
                showCancelButton: true,
                confirmButtonText: 'Lanjutkan',
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    $.ajax({
                        type: "delete",
                        url: "{{ route('user.deletePicture') }}",
                        data: {
                            _token: "{{ csrf_token() }}",
                        },
                        dataType: "json",
                        beforeSend: () => {
                            Swal.fire({
                                title: 'Tunggu...',
                                allowOutsideClick: false,
                                allowEscapeKey: false,
                                showConfirmButton: false,
                                didOpen: () => {
                                    Swal.showLoading()
                                }
                            })
                        },
                        success: function(response) {
                            let timerInterval
                            Swal.fire({
                                title: 'Sukses!',
                                icon: 'success',
                                html: `Hapus menghapus foto profil <br>Halaman akan diperbarui dalam <b></b> milliseconds.`,
                                timer: 2500,
                                timerProgressBar: true,
                                didOpen: () => {
                                    Swal.showLoading()
                                    const b = Swal.getHtmlContainer()
                                        .querySelector('b')
                                    timerInterval = setInterval(() => {
                                        b.textContent = Swal
                                            .getTimerLeft()
                                    }, 100)
                                },
                                willClose: () => {
                                    clearInterval(timerInterval)
                                }
                            }).then((result) => {
                                location.reload();
                            })
                        }
                    });
                }
            })
        }
    </script>
@endsection
