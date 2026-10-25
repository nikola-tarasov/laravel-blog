@extends('admin/layouts.default')


@section('title')
   Edit Category
@endsection



@section('content')    

<!-- Horizontal Form -->
<div class="col-md-6">
  <div class="card card-warning card-outline mb-4">
    <div class="card-header">
      <div class="card-title">Edit Category: <strong>{{ $category->title }} </strong> </div>
    </div>
    <form action="{{ route('categories.update', ['category'=> $category->id ])}}" method="POST">
        @csrf
        @method('PUT')
      <div class="card-body">

        <div class="row mb-3">
          <label for="title" class="col-sm-2 col-form-label">Category name</label>
          <div class="col-sm-10">
            <input type="text" name="title" class="form-control" id="title" value="{{ $category->title }}" />
          </div>
        </div>
        
        <div class="row mb-3">
          <label for="meta_desc" class="col-sm-2 col-form-label">Category description</label>
          <div class="col-sm-10">
            <input type="text" name="meta_desc" class="form-control" id="meta_desc" value="{{ $category->meta_desc }}" />
          </div>
        </div>

      </div>
      <div class="card-footer">
        <button type="submit" class="btn btn-warning">Save</button>
      </div>
    </form>
  </div>
</div>


@endsection