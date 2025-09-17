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
                                            data-bs-target="#exampleModal" data-bs-whatever="@mdo">ADD</button>
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th style="width: 10px">#</th>
                                                    <th>Product Category</th>
                                                    <th>Provide Solution</th>
                                                    <th>All Solution</th>
                                                    <th>Image</th>
                                                    <th>Description</th>
                                                    <th style="width: 40px">action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($data as $pd)
                                                    <tr class="align-middle">
                                                        <td>{{ $loop->index+1 }}</td>
                                                        <td>{{ $pd->category->product_cat }}</td>
                                                        <td>{{ $pd->solutions->solution ?? '' }}</td>
                                                        <td>{{ $pd->all_solution }}</td>
                                                        <td> <img src="{{ asset('storage/' . $pd->img) }}" alt="Product Image" width="80"></td>
                                                        <td>{{ $pd->description }}</td>
                                                        <td>

                                                            <a href="delete/{{ $pd->id }}" class="text-danger">
                                                                <i class="fa-solid fa-trash-can-arrow-up"></i>
                                                            </a>
                                                             <a href="javascript:void(0);" class="editProductBtn" data-id="{{ $pd->id }}"  data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                <i class="fa-solid fa-pen-to-square"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer clearfix">
                                        <ul class="pagination pagination-sm m-0 float-end">
                                            <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                                        </ul>
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
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self
        class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">{{ $title ?? '' }}</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                     <form method="POST" action="/product_save" enctype="multipart/form-data" id="productForm">
                    @csrf
                    <input type="hidden" name="id" id="product_id">

                    <div class="row g-3">
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Product Category</label>
                            <select name="product_cat_id" id="product_cat_id" class="form-control">
                                <option value="">— Choose —</option>
                                @foreach ($data_cat as $dc)
                                    <option value="{{ $dc->id }}">{{ $dc->product_cat }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3 col-md-6">
                            <label class="form-label">Provide Solution</label>
                            <select name="provide_solution_id" id="provide_solution_id" class="form-control">
                                <option value="">— Choose —</option>
                                @foreach ($data_pov_sol as $dps)
                                    <option value="{{ $dps->id }}">{{ $dps->solution }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3 col-md-6">
                            <label class="form-label">All Solution</label>
                            <input type="text" name="all_solution" id="all_solution" class="form-control" />
                        </div>

                        <div class="mb-3 col-md-6">
                            <label class="form-label">Image</label>
                            <input type="file" name="img" class="form-control" />
                            <div id="preview_product_image" class="mt-2"></div>
                        </div>

                        <div class="mb-3 col-md-12">
                            <label class="form-label">Product Description</label>
                            <textarea name="description" id="description" class="form-control" rows="5"></textarea>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
@endsection

