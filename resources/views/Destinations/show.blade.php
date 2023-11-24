@extends("template")

@section("content")
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Detail Destinasi</div>

                <div class="card-body">
                    <h2>{{ $destinations->name }}</h2>
                    <p>{{ $destinations->location }}</p>
                    <p>{{ $destinations->details }}</p>
                    <p>{{ $destinations->day_open }}</p>
                    <p>{{ $destinations->time_open }}</p>
                    <p>{{ $destinations->pricing }}</p>
                </div>
                <a class="btn btn-primary me-3" href="{{ route('destinations.index') }}">lihat data</a>
                    <a href="{{ url('wisata') }}" class="btn btn-danger ms-3">
                            Kembali
                    </a>
            </div>
        </div>
    </div>
</div>
@endsection