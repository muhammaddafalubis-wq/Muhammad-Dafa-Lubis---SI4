<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {
        return view('home');
    }

    public function produk() {
        // Data produk (array)
        $produk = [
            ['kode' => 'BRG001', 'nama' => 'Pena', 'jenis' => 'Alat tulis', 'harga' => 20000],
            ['kode' => 'BRG002', 'nama' => 'Buku', 'jenis' => 'Alat tulis', 'harga' => 15000],
        ];

        return view('produk', ['produk' => $produk]);
    }

    public function tambahProduk() {
        // Data jenis produk dikirim ke dropdown
        $jenis = ['Alat tulis', 'Elektronik', 'Sembako'];

        return view('tambah', ['jenis' => $jenis]);
    }
}
