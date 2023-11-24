@extends("template")

@section("title")
@endsection

@section("content")
<h1 class="h3 mb-2 text-gray-800">Data Tempat Wisata</h1>
<div class="card shadow mt-3 mb-4">
    <div class="card-header py-3">
        <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" action="{{ url('destinations/search') }}" method="post">
            @csrf
            <div class="input-group">
                <input name="search" type="text" class="form-control bg-gray border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
            </div>
        </form>
        <a href="{{ route('destinations.create') }}" class="btn btn-primary float-right">
            <i class="fas fa-plus"></i>
            Tambah Wisata
        </a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="tabel table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th class="text-center">ID</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Location</th>
                        <th class="text-center">Details</th>
                        <th class="text-center">Day/Time Open</th>
                        <th class="text-center">Pricing</th>
                        <th class="text-center">#</th>
                    </tr>
                </thead>
                <tbody>
                @forelse($destinations as $data)
                    <tr>
                    <td class="text-center">{{ $data->id }}</td>
                    <td>{{ $data->name }}</td>
                    <td class="text-center">{{ $data->location }}</td>
                    <td class="text-center">{{ $data->details }}</td>
                    <td class="text-center">
                        {{ $data->day_open }},
                        {{ $data->time_open }}
                    </td>
                    <td class="text-center">{{ $data->pricing }}</td>
                    <td class="text-center">
                        <form onsubmit="return confirm('Apakah anda yakin ingin menghapus ?');" class="rounded" action="{{ route('destinations.destroy', $data->id) }}" method="POST">
                            
                            <a href="{{ route('destinations.show', $data->id) }}" class="btn btn-sm btn-info mt-1"><i class="fas fa-eye"></i> show</a>
                            <a href="{{ route('destinations.edit', $data->id) }}" class="btn btn-sm btn-success mt-1"><i class="fas fa-edit"></i> Edit</a>
                            @csrf
                            @METHOD('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger mt-1"><i class="fas fa-trash"></i> Hapus</button>
                        </form>
                    </td>
                </tr>
                @empty
                <!-- <div class="alert alert-danger">
                    Data Film Belum Tersedia
                </div> -->
                @endforelse
                </tbody>
            </table>
        </div>
        {{ $destinations->links('vendor.pagination.bootstrap-5') }}
    </div>
</div>

@endsection