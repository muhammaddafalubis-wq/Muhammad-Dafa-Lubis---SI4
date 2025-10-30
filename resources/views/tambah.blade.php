@include('layout')

<div class="container mt-5">
    <h1>Form Tambah Produk</h1>
    <form class="mt-4">
        <div class="row mb-3">
            <div class="col">
                <label>Kode Produk</label>
                <input type="text" class="form-control" placeholder="Input Kode Produk">
            </div>
            <div class="col">
                <label>Nama Produk</label>
                <input type="text" class="form-control" placeholder="Input Nama Produk">
            </div>
            <div class="col">
                <label>Jenis Produk</label>
                <select class="form-select">
                    <option>Pilih Produk</option>
                    @foreach($jenis as $j)
                        <option>{{ $j }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="mb-3">
            <label>Harga</label>
            <input type="text" class="form-control" placeholder="Input Harga">
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>
