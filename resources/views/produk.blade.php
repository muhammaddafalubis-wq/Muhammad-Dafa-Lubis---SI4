@include('layout')

<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center">
        <h1>Halaman Produk</h1>
        <a href="/tambah-produk" class="btn btn-primary">Tambah Produk</a>
    </div>

    <table class="table table-bordered table-striped mt-3">
        <thead class="table-primary">
            <tr>
                <th>Kode Produk</th>
                <th>Nama Produk</th>
                <th>Jenis Produk</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            @foreach($produk as $p)
            <tr>
                <td>{{ $p['kode'] }}</td>
                <td>{{ $p['nama'] }}</td>
                <td>{{ $p['jenis'] }}</td>
                <td>{{ $p['harga'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
