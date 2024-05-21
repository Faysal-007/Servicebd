@extends('admin.layouts.admin_master')
@section('title')
    Add Blog Categories
@endsection
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Add Blog</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{route('insert_blog_category')}}" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" name="name"
                                        placeholder="Enter Class Name">
                                </div>
                                <div class="form-group">
                                    <label>meta_title</label>
                                    <input type="text" class="form-control" name="meta_title"
                                        placeholder="Enter Class Name">
                                </div>
                                <div class="form-group">
                                    <label>meta_description</label>
                                    <input type="text" class="form-control" name="meta_description"
                                        placeholder="Enter Class Name">
                                </div>
                                <div class="form-group">
                                    <label>meta_keyword</label>
                                    <input type="text" class="form-control" name="meta_keyword"
                                        placeholder="Enter Class Name">
                                </div>
                                <div class="form-group">
                                    <label>Status</label>
                                    <select name="status" class="form-control">
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <section>
        </div>
        @endsection
