@extends('admin.layout')
@section('content')
<div class="col-12 col-lg-6">
  @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
    @endif
  <div class="card">
      <div class="card-body">
          <h2 class="card-title">Add Teacher</h2>
          <form class="forms-sample"action="{{url('store/Teacher')}}" method="post" enctype="multipart/form-data">
            @csrf
              <div class="form-group">
                  <label for="exampleInputEmail1">Teacher Name</label>
                  <input type="text" class="form-control p-input" name="name" aria-describedby="emailHelp" placeholder="Teacher Name">
              </div>
              <div class="form-group">
                  <label for="exampleInputEmail1">Teacher Phone</label>
                  <input type="text" class="form-control p-input" name="phone" aria-describedby="emailHelp" placeholder="Teacher Phone">
              </div>
              <div class="form-group">
                  <label for="exampleTextarea">Student Address</label>
                  <textarea class="form-control p-input" name="address" rows="3"></textarea>
              </div>
              <div class="form-group">
                  <label for="exampleInputEmail1">Deparment</label>
                  <select class="form-control p-input" name="diparment">
                    <option value="1">CST</option>
                    <option value="2">CT</option>
                    <option value="3">AIDT</option>
                    <option value="4">ET</option>
                  </select>
              </div>
              <div class="form-group">
                  <label>Images file</label>
                  <div class="row">
                    <div class="col-12">
                      <label for="exampleInputFile2" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-upload btn-label btn-label-left"></i>Images</label>
                      <input type="file" id="exampleInputFile2"  class="form-control-file" name="image" aria-describedby="fileHelp">
                    </div>
                  </div>
              </div>
              <button type="submit" class="btn btn-success btn-block">Submit</button>
          </form>
      </div>
  </div>
</div>
@endsection