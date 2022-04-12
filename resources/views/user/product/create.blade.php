@extends('user.navbar.main')

@section('judul','Tambah Menu | Restaurant')
    
@section('halaman')
<div class="container-fluid">
    <div class="row">
        <div class="col-8">
            <h2 class="mt-3 text-dark">Tambah Menu</h2>
            <form action="{{route('tmenu')}}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="category_name" class="form-label text-dark">Category</label>
                    <select name="category_name" class="form-control" id="category_name">
                        <option value="">===pilih category===</option>
                        @foreach ($Categorys as $category) 
                          <option value="{{ $category->category_name}}">{{ $category->category_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="product_name" class="form-label text-dark">Nama Makan</label>
                    <input type="text" name="product_name" class="form-control" id="product_name" placeholder="Masukkan Nama Makanan" required>
                </div>
                <div class="mb-3">
                    <label for="product_price" class="form-label text-dark">Harga</label>
                    <input type="text" name="product_price" class="form-control" id="product_price" placeholder="Masukkan Harga Makanan" required>
                </div>
                <div class="d-grip gap-2 d-md-block">
                    <button class="btn btn-lg btn-primary" type="submit">Simpan</button>
                    <a class="btn btn-lg btn-warning" href="/product" type="back">Back</a>
                </div>
                <input type="hidden" name="product_status" id="product-status" value="Enable">
            </form>
        </div>
    </div>
</div>
@endsection