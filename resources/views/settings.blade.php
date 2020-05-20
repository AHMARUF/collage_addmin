@extends('student_layut')
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
          <h2 class="card-title">Update Your Profile</h2>
          <form class="forms-sample"action="{{URL::to('/updatestudent')}}" method="post" enctype="multipart/form-data">
            @csrf
              
              
             <div class="form-group">
                  <label for="exampleInputEmail1">Student name</label>
                  <input type="text" class="form-control p-input" name="name" aria-describedby="emailHelp" value="{{$settings->name}}" >
              </div>
              <div class="form-group">
                  <label for="exampleInputEmail1">Student Phone</label>
                  <input type="text" class="form-control p-input" name="phone" aria-describedby="emailHelp" value="{{$settings->phone}}" >
              </div>
              
              <div class="form-group">
                  <label for="exampleTextarea">Student Address</label>
                  <textarea class="form-control p-input" name="address" rows="3">{{$settings->address}}</textarea>
              </div>
              <button type="submit" class="btn btn-success btn-block">Update</button>

          </form>
      </div>
  </div>
</div>

@endsection