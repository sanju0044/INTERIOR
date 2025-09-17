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
                                                     <th>Provide Solution</th>
                                                     <th>Image</th>
                                                     <th style="width: 40px">action</th>
                                                 </tr>
                                             </thead>
                                             <tbody>
                                                 @foreach ($data as $dt)
                                                    <tr class="align-middle">
                                                        <td>{{ $loop->index+1 }}</td>
                                                        <td>{{ $dt->category->product_cat ?? 'N/A' }}</td>
                                                        <td>{{ $dt->solution }}</td>
                                                        <td><img src="{{ asset($dt->provide_solutions_img) }}" alt="Product Image" width="80" height="80" style="object-fit: cover; border-radius: 8px;"></td>
                                                        <td>
                                                            <a href="/delete/{{ $dt->id }}" class="text-danger">
                                                                <i class="fa-solid fa-trash-can-arrow-up"></i>
                                                            </a>
                                                            <a href="javascript:void(0);" class="editProductSolBtn" data-id="{{ $dt->id }}"  data-bs-toggle="modal" data-bs-target="#exampleModal">
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
                <form method="POST" action="/save" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="form-label">Category Name</label>
                            <input type="hidden" name="id" id="product_sol_id">

                            <select name="all_product_id" id="all_product_id" class="form-control mb-3">
                                <option disabled {{ empty($data_sul?->all_product_id) ? 'selected' : '' }}>Select...</option>
                                    @foreach($category as $cat)
                                        <option value="{{ $cat->id }}"
                                            {{ ($data_sul?->all_product_id ?? old('all_product_id')) == $cat->id ? 'selected' : '' }}>
                                            {{ $cat->product_cat }}
                                        </option>
                                    @endforeach
                            </select>
                        </div>
                         <div class="form-group">
                            <label class="form-label">Provide Solutons</label>
                            <input type="text" name="solution" id="solution" class="form-control"
                                placeholder="Category Name" />
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Upload Image</label>
                            <input type="file" name="provide_solutions_img" id="provide_solutions_img" class="form-control">
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
