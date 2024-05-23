@extends('admin.layouts.admin_master')
@section('title')
Role List 
@endsection
@section('content')
<div class="content-wrapper">
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card" style="margin-top:10px">
              @if (session()->has('message'))
                  <div class="alert alert-success alert-dismissible">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                      <strong> {{ session()->get('message') }}</strong>
                  </div>
                @endif
              <div class="card-header">
                <div class="search_area">
                  <form action="{{ url('admin/role/list') }}" method="get">
                      <div class="row">
                          <div class="col-md-3 form-group">
                              <input type="search" name="name" class="form-control" placeholder="search by class name" value="{{ Request::get('name') }}"
                                  class="mod_form_css">
                          </div>
                          <div class="col-md-3 form-group">
                              <div>
                                  <button class="btn btn-primary" type="submit">Search</button>
                                  <a href="{{ url('admin/role/list') }}" class="btn btn-primary">Reset</a>
                              </div>
                          </div>
                          <div class="col-md-3" style="position: absolute;right: 0">
                            <a class="btn btn-primary" style="float:right" href="{{url('/admin/role/add')}}">Add Role</a>
                          </div>
                      </div>
                  </form>
                </div>
              </div>
              
              <div class="card-body">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Title</th>
                      <th>Created_by</th>
                      <th>Created_at</th>
                      <th colspan="2">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($data as $value)
                    <tr>
                      <td>{{$value->role_name}}</td>
                      <td>{{$value->created_by}}</td>
                      <td>{{$value->created_at}}</td>
                      <td><a class="btn btn-primary" href="{{url('/admin/role/edit',$value->id)}}">Edit</a></td>
                      <td><a class="btn btn-danger" href="{{url('/admin/role/delete',$value->id)}}" onclick="return confirm('Are you sure?')">Delete</a></td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
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
    </section>
  </div>
@endsection