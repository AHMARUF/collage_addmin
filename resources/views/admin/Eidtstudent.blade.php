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
          <h2 class="card-title">Add Student</h2>
          <form class="forms-sample"action="{{url('student/'.$student->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
              <div class="form-group">
                  <label for="exampleInputEmail1">Student Name</label>
                  <input type="text" class="form-control p-input" name="name" aria-describedby="emailHelp" value="{{$student->name}}">
              </div>
              <div class="form-group">
                  <label for="exampleInputEmail1">Student Roll</label>
                  <input type="text" class="form-control p-input" name="roll" aria-describedby="emailHelp" value="{{$student->roll}}">
              </div>
              <div class="form-group">
                  <label for="exampleInputEmail1">Father's Name</label>
                  <input type="text" class="form-control p-input" name="fathername" aria-describedby="emailHelp" value="{{$student->fathername}}">
              </div>
              <div class="form-group">
                  <label for="exampleInputEmail1">Mother's Name</label>
                  <input type="text" class="form-control p-input" name="mothername" aria-describedby="emailHelp" value="{{$student->mothername}}">
              </div>
              <div class="form-group">
                  <label for="exampleInputEmail1">Student Email</label>
                  <input type="email" class="form-control p-input" name="email" aria-describedby="emailHelp" value="{{$student->email}}">
              </div>
              <div class="form-group">
                  <label for="exampleInputEmail1">Student Phone</label>
                  <input type="text" class="form-control p-input" name="phone" aria-describedby="emailHelp" value="{{$student->phone}}">
              </div>
              <div class="form-group">
                  <label for="exampleTextarea">Student Address</label>
                  <textarea class="form-control p-input" name="address" rows="3">{{$student->address}}</textarea>
              </div>
              <div class="form-group">
                  <label for="exampleInputEmail1">Addmisoin Year</label>
                  <input type="date" class="form-control p-input" name="admission_year" aria-describedby="emailHelp" value="{{$student->admission_year}}">
              </div>
              <div class="form-group">
                  <label for="exampleInputPassword1">Student Password</label>
                  <input type="password" class="form-control p-input" name="passwrod" value="{{$student->passwrod}}">
              </div>
              <div class="form-group">
                  <label>Images file</label>
                  <div class="row">
                    <div class="col-12">
                      <label for="exampleInputFile2" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-upload btn-label btn-label-left"></i>Images</label>
                      <input type="file" id="exampleInputFile2"  class="form-control-file" name="image" aria-describedby="fileHelp">
                    </div>
                  </div>
                  <input type="hidden" name="old_photo"value="{{$student->images}}">
                  <img src="{{URL::to($student->images)}}" height="80" width="80">
              </div>
              <button type="submit" class="btn btn-success btn-block">Update</button>
          </form>
      </div>
  </div>
</div>
@endsection