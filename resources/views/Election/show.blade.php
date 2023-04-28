@extends('Template.Dashboard.layouts')

@section('main')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header bg-primary">
                    <h4 class="mb-0 text-white">Informasi Detail</h4>
                </div>
                <div class="card-body">
                    <h1 class="text-center">{{ $election->election_name . ' ' . $election->election_period }}</h1>
                    <div class="row">
                        <div class="col-lg-4 d-flex justify-content-center">
                            <div style="width: 300px;height:400px;">
                                <img src="{{ asset('storage/' . $election->election_image) }}" alt=""
                                    class="w-100 h-100 rounded-3" style="object-fit: cover; object-position:center center;">
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <p class="text-primary fw-bold">{{ $election->start_election->isoFormat('d MMMM Y') }} sampai
                                {{ $election->end_election->isoFormat('d MMMM Y') }}</p>
                            <p>{{ $election->description }} <br>Agenda yang dilaksanakan antara lain :</p>
                            <span class="mb-0 text-muted">Geser ke kanan untuk lebih detail</span>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead class="bg-primary text-white">
                                        <tr class="text-center">
                                            <th>No</th>
                                            <th>Kegiatan</th>
                                            <th>Periode</th>
                                            <th>Lokasi</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($election->event as $event)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $event->event_name }}</td>
                                                <td>{{ $event->agenda->start_event->isoFormat('d MMMM Y') . ' s/d ' . $event->agenda->end_event->isoFormat('d MMMM Y') }}
                                                </td>
                                                <td>{{ $event->agenda->location }}</td>
                                                <td>{{ $event->agenda->method }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
