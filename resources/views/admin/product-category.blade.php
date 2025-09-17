@extends('layouts.admin') {{-- your layout file --}}

@section('content')

 <main class="app-main">
     <!--begin::App Content-->
     <div class="app-content mt-5">
         <!--begin::Container-->
         <div class="container-fluid">
             <div class="row">
                 <div class="container-fluid">
                     <div class="row g-4">
                         <div class="col-md-12 mt-5">
                             <div class="card card-primary card-outline mb-4">
                                 <div class="card mb-4">
                                    <div class="card-header">
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal">ADD</button>
                                    </div>
                                     <div class="card-body">
                                         <table class="table table-bordered">
                                             <thead>
                                                 <tr>
                                                     <th style="width: 10px">#</th>
                                                     <th>Name</th>
                                                     <th>Image</th>
                                                     <th style="width: 40px">action</th>
                                                 </tr>
                                             </thead>
                                             <tbody>
                                                 @foreach ($data as $dt)
                                                     <tr class="align-middle">
                                                         <td>{{ $dt->id }}</td>
                                                         <td>{{ $dt->product_cat }}</td>
                                                         <td><img src="{{ asset($dt->product_img) }}" alt="Product Image" width="80" height="80" style="object-fit: cover; border-radius: 8px;"></td>
                                                         <td>
                                                             <a href="/delete/{{ $dt->id }}" class="text-danger">
                                                                 <i class="fa-solid fa-trash-can-arrow-up"></i>
                                                             </a>
                                                             <a href="javascript:void(0);" class="editProductCatBtn" data-id="{{ $dt->id }}"  data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                <i class="fa-solid fa-pen-to-square"></i>
                                                            </a>
                                                         </td>
                                                     </tr>
                                                 @endforeach
                                             </tbody>
                                         </table>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </main>
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title" id="exampleModalLabel">{{ $title ?? '' }}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="/save-product-category" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <input type="hidden" name="id" id="product_cat_id">

                        <div class="mb-3">
                            <label class="form-label">Category Name</label>
                            <input type="text" name="product_cat" id="product_cat" class="form-control"
                                placeholder="Category Name" />
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Upload Image</label>
                            <input type="file" name="product_img" id="product_img" class="form-control">

                            <!-- Preview wrapper -->
                            <div id="previewWrapper" class="mt-2 d-none">
                                <img id="previewImg" src="" alt="Preview" width="100" height="100"
                                    style="object-fit: cover; border-radius: 8px;">
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection


