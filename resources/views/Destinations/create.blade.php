@extends("template")

@section("title")
@endsection

@section("content")
<div class="card shadow mt-3 mb-4">
<div class="card-body">
<form action="{{ route('destinations.store') }}" method="post">
    @csrf
    <div class="row mb-3">
        <div class="col">
            <label for="id" class="form-label">ID</label>
            <input type="text" name="id" class="form-control" placeholder="Masukkan ID" id="id">
        </div>
        <div class="col">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" placeholder="Masukkkan Nama" id="name">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <label for="location " class="form-label">Location</label>
            <input type="text"  name="location" class="form-control" placeholder="Tempat Lokasi" id="location">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <div class="mb-3">
                <label for="details" class="form-label">Details</label>
                <textarea name="details" class="form-control" id="details" rows="3" placeholder="Masukkan Details"></textarea>
            </div>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <label for="day_open " class="form-label">Day Open</label>
            <input type="text"  name="day_open" class="form-control" placeholder="Masukkan Hari Buka" id="day_open">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <label for="time_open " class="form-label">Time Open</label>
            <input type="text"  name="time_open" class="form-control" placeholder="Masukkan Waktu Buka" id="time_open">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
        <label for="pricing">Pricing</label><br>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="pricing" value="Paid" id="Paid" checked placeholder="Masukkan Pricing">
            <label for="pricing" class="form-check-label">Paid</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="pricing" value="Free" id="Free">
            <label for="pricing" class="form-check-label">Free</label>
        </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary me-3">Simpan</button>
        <a href="{{ route('destinations.index') }}" class="btn btn-danger ms-3">
                Kembali
        </a>
</form>
</div>
</div>

@endsection