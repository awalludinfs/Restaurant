@extends('user.navbar.main')

@section('judul','Daftar Menu|Restaurant')
    
@section('halaman')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="row">
            <div class="col">
                <h6 class="m-0 font-weight-bold text-primary">Category List</h6>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{session('status')}}
                    </div>
                @endif
            </div>
            <div class="col" align="right">
                <a type="button" class="btn btn-success btn-circle btn-sm" href="/tambahcategory">tambah</a>
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
                                 <th style="width: 10px;">NO</th>
                                <th style="width: 197px;">Category Name</th>
                                <th style="width: 64px;">Status</th>
                                <th style="width: 86px;">Action</th>
                            </tr>
                          </thead>
                          <tbody> 
                            @foreach ($categorys as $category) 
                            <tr role="row" class="odd">
                                <td>{{$loop->iteration}}</td>
                                <td>{{$category->category_name}}</td>
                                <td>
                                    <button type="button" name="status" class="btn btn-primary btn-sm status_button" data-id="12" data-status="Enable">Enable</button>
                                </td>
                                <td class="btn-center">
                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{'categorys.destroy',$category->id}}" method="post">
                                        {{-- <a href="{{route('category.edit',$category->id)}}" class="btn btn-sm btn-primary">Edit</a> --}}
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                          </tbody>
                    </table>
                </div>
            </div>
         </div> 
    </div> 
@endsection