@extends('layouts.admin')
@section('title')
    admin index page
@endsection

@section('content')
    <div class="card">
        @if(session('status'))
            <h5 class="alert alert-success">{{ session('status') }}</h5>
        @endif
        <div class="card-header">
            <h4>Add Category</h4>
        </div>
        <div class="card-body">
            <form action="{{ url('insert-category') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="slug">slug</label>
                        <input type="text" name="slug" id="slug">
                    </div>
                    <div class="col-md-12 mb-3">
                        <textarea name="description" id="desc" cols="3" class="form-control"></textarea>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="status">status</label>
                        <input type="checkbox" name="status" id="status">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="popular">popular</label>
                        <input type="checkbox" name="popular" id="popular">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="meta_title">Meta title</label>
                        <input type="text" name="meta_title" id="meta_title">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="meta_description">Meta description</label>
                        <textarea name="meta_description" id="meta_description" cols="3" class="form-control"></textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="meta_keywords">Meta keywords</label>
                        <textarea name="meta_keywords" id="meta_keywords" cols="3" class="form-control"></textarea>
                    </div>
                    <div class="col-md-6 mb-3">
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="col-md-12 mb-3">
                        <button type="submit" class="btn btn-primary">add category</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection