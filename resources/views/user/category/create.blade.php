@extends('user.navbar.main')

@section('judul','Tambah Category | Restaurant')
    
@section('halaman')
<div class="container-fluid">
    <div class="row">
        <div class="col-8">
            <h2 class="mt-3 text-dark">Tambah Category</h2>
            <form action="{{route('tcategory')}}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="category_name" class="form-label text">Nama Category</label>
                    <input type="text" name="category_name" class="form-control" id="category_name" placeholder="Masukan Category" required>
                </div>
                <div class="d-grip gap-2 d-md-block">
                        <button class="btn btn-lg btn-primary" type="sumbit">Simpan</button>
                        <a class="btn btn-lg btn-warning" href="/category" type="back">Back</a>
                </div>
                <input type="hidden" value="Enable" id="status" name="status">
            </form>
        </div>
    </div>
</div>
@endsection