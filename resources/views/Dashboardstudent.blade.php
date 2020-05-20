@extends('student_layut')
@section('content')
<div class="col-sm-6 col-md-3 grid-margin">
  <div class="card">
    <div class="card-body">
      <div class="row">
        <div class="col-sm-7 col-md-7 col-7">
          <h2 class="card-title">All Student</h2>
        </div>
        @php
          $students=DB::table('students')->count('id');
        @endphp
        <div class="col-sm-5 col-md-5 col-5">
          <p style="font-family: cursive;font-size: 12px;">{{$students}}</p>
        </div>
      </div>
    </div>
    <div class="dashboard-chart-card-container">
      <div id="dashboard-card-chart-1" class="card-float-chart"></div>
    </div>
  </div>
</div>
<div class="col-sm-6 col-md-3 grid-margin">
  <div class="card">
    <div class="card-body">
      <div class="row">
        <div class="col-sm-7 col-md-7 col-7">
          <h2 class="card-title">All Teacher</h2>
        </div>
        @php
          $teacher=DB::table('teacher')->count('id');
        @endphp
        <div class="col-sm-5 col-md-5 col-5">
          <p style="font-family: cursive;font-size: 12px; text-align: center;">{{$teacher}}</p>
        </div>
      </div>
    </div>
    <div class="dashboard-chart-card-container">
      <div id="dashboard-card-chart-2" class="card-float-chart"></div>
    </div>
  </div>
</div>
<div class="col-sm-6 col-md-3 grid-margin">
  <div class="card">
    <div class="card-body">
      <div class="row">
        <div class="col-md-7"><h2 class="card-title">Semister Free</h2></div>
        <div class="col-md-5"><p style="font-size: 12px;">Mothly:$2500</p></div>
      </div>
    </div>
    <div class="dashboard-chart-card-container">
      <div id="dashboard-card-chart-3" class="card-float-chart"></div>
    </div>
  </div>
</div>
<div class="col-sm-6 col-md-3 grid-margin">
  <div class="card">
    <div class="card-body">
      <h2 class="card-title">Revenue</h2>
    </div>
    <div class="dashboard-chart-card-container">
      <div id="dashboard-card-chart-4" class="card-float-chart"></div>
    </div>
  </div>
</div>
</div>

@endsection