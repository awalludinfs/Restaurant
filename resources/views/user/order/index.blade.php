@extends('user.navbar.main')

@section('judul','Halaman Order|Restaurant')

@section('halaman')
<div class="container-fluid" style="height: auto !important;">
    <div class="row">
        <div class="col-lg-12">
    <br>
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Order Area</h1>

    <div class="row">
        <div class="col col-sm-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">Table Status</div>
                    <div class="card-body" id="table">
                        <a type="button" name="table_button" id="table_1" class="btn btn-secondary mb-4 table_button"  data-table_name="Table 1" href="/ordermeja">Table 1<br>2 Person</a>
                        <a type="button" name="table_button" id="table_2" class="btn btn-secondary mb-4 table_button"  data-table_name="Table 2" href="/ordermeja">Table 2<br>4 Person</a>
                        <a type="button" name="table_button" id="table_3" class="btn btn-secondary mb-4 table_button"  data-table_name="Table 3"href="/ordermeja">Table 3<br>4 Person</a> 
                        <a type="button" name="table_button" id="table_4" class="btn btn-secondary mb-4 table_button"  data-table_name="Table 4"href="/ordermeja">Table 4<br>4 Person</a> 
                        <a type="button" name="table_button" id="table_5" class="btn btn-secondary mb-4 table_button"  data-table_name="Table 5" href="/ordermeja">Table 5<br>3 Person</a>
                 </div>
            </div>
        </div>
        <div class="col col-sm-8">
            <div class="card shadow mb-4">
                <div class="card-header py-3">Order Status</div>
                <div class="card-body">
                    <div class="table-responsive" id="order_status">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr scope="row">
                               <th style="width: 5px;">No</th>
                               <th style="width: 19px;">Product name </th>
                               <th style="width: 19%;">Product price</th>
                               <th style="width: 8px;">Action</th>
                           </tr>
                         </thead>
                         <tbody> 
                           @foreach ($errors as $order)
                           <tr role="row" class="odd">
                               <td>{{$loop->iteration}}</td>
                               <td>{{$order->product_name}}</td>
                               <td>{{$order->product_price}}</td>
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
    </div>
 </div>
@endsection