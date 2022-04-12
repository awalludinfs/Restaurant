@extends('user.navbar.main')

@section('judul','Data Product|Restaurant')
    
@section('halaman')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="row">
            <div class="col">
                <h6 class="m-0 font-weight-bold text-primary">Menu List</h6>
            </div>
            <div class="col" align="right">
                <a type="button" class="btn btn-success btn-circle btn-sm" href="/tambahmenu">tambah</a>
            </div>
        </div>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <div class="row">
                <div class="col-sm-12">
                    <table class="table table-bordered dataTable no-footer" width="100%" cellspacing="0"  style="width: 100%;">
                          <thead>
                             <tr scope="row">
                                <th style="width: 5px;">No</th>
                                <th style="width: 19px;">Product name </th>
                                <th style="width: 19%;">Product price</th>
                                <th style="width: 19px;">Category name</th>
                                <th style="width: 9px;">Product status</th>
                                <th style="width: 8px;">Action</th>
                            </tr>
                          </thead>
                          <tbody> 
                            @foreach ($product as $product)
                            <tr role="row" class="odd">
                                <td>{{$loop->iteration}}</td>
                                <td>{{$product->product_name}}</td>
                                <td>{{$product->product_price}}</td>
                                <td>{{$product->category_name }}</td>
                                <td><button class="btn btn-primary">{{$product->product_status}}</button></td>
                                <td>
                                    <button class="btn btn-danger">Delete</button>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
         </div> 
    </div> 
@endsection