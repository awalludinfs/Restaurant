@extends('user.navbar.main')

@section('judul','Order |Restaurant')
    
@section('halaman')
<div class="container-fluid">
    <div class="row">
        <div class="col-8">
            <h2 class="mt-3 text-dark">Order</h2>
            <form action="{{route('pesan')}}" method="post">
                @csrf
                <div class="mb-3">
                        <label for="category_name" class="form-label text-dark">category</label>
                        <select name="category_name" class="form-control" id="category_name">
                            <option value="">===pilih category===</option>
                            @foreach ($products as $product) 
                              <option value="{{ $product->category_name}}">{{ $product->category_name}}</option>
                            @endforeach
                        </select>
                </div>
                <div class="mb-3">
                    <label for="product_name" class="form-label text-dark">Product</label>
                    <select name="product_name" class="form-control" id="product_name">
                        <option value="">===pilih product===</option>
                        @foreach ($products as $product) 
                          <option value="{{ $product->product_name}}">{{ $product->product_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="product_price" class="form-label text-dark">harga</label>
                    <select name="product_price" class="form-control" id="product_price">
                        <option value="">===pilih===</option>
                        @foreach ($products as $product) 
                          <option value="{{ $product->product_price}}">{{ $product->product_price}}</option>
                        @endforeach
                    </select>
                </div>
              <div class="d-grip gap-2 d-md-block">
                    <button class="btn btn-lg btn-primary" type="sumbit">Order</button>
                    <a  class="btn btn-lg btn-warning" href="/order"  type="back">Back</a>
              </div>
            </form>
        </div>
    </div>
</div>
@endsection