
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
                         <div class="col-md-6 mt-5">
                             <div class="card card-primary card-outline mb-4">
                                 <form method="POST" action="/save-gallery" enctype="multipart/form-data">
                                     @csrf
                                     <div class="card-body">
                                         <div class="mb-3">
                                             <label class="form-label">Add Image</label>
                                             <input type="file" name="img[]" class="form-control" multiple/>
                                             @error('name')
                                                 <span class="text-danger">{{ $message }}</span>
                                             @enderror
                                         </div>
                                     </div>
                                     <div class="card-footer">
                                         <button type="submit" class="btn btn-primary">Submit</button>
                                     </div>
                                 </form>
                             </div>
                         </div>
                         <div class="col-md-6 mt-5">
                             <div class="card card-primary card-outline mb-4">
                                 <div class="card mb-4">
                                     <div class="card-body">
                                         <table class="table table-bordered">
                                             <thead>
                                                 <tr>
                                                     <th style="width: 10px">#</th>
                                                     <th>Name</th>
                                                     <th style="width: 40px">action</th>
                                                 </tr>
                                             </thead>
                                             <tbody>
                                                 @foreach ($data as $dt)
                                                     <tr class="align-middle">
                                                         <td>{{ $dt->id }}</td>
                                                         <td>
                                                            @php
                                                                $images = json_decode($dt->img);
                                                            @endphp

                                                            @if (!empty($images))
                                                                @foreach ($images as $img)
                                                                    <img src="{{ asset('storage/' . $img) }}" width="80" height="80" style="object-fit:cover; border-radius:5px; margin:2px;">
                                                                @endforeach
                                                            @else
                                                                <span class="text-muted">No Images</span>
                                                            @endif
                                                        </td>
                                                         <td>
                                                             <a href="/delete/{{ $dt->id }}" class="text-danger">
                                                                 <i class="fa-solid fa-trash-can-arrow-up"></i>
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
@endsection
