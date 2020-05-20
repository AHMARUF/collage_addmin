@extends('student_layut')
@php
  function convert_diparment($value){
  $values=[
    1=>'CST',
    2=>'CT',
    3=>'AIDT',
    4=>'ET',
  ];
  return $values[$value];
}
@endphp
@section('content')
  <div class="row user-profile">
    <div class="col-lg-12 side-left">
      <div class="card mb-4">
        <div class="card-body avatar">
          <h2 class="card-title">Info</h2>
          <img src="{{URL::to($student_Profile->images)}}" alt="">
          <p class="name">{{strtoupper($student_Profile->name)}}</p>
          <p class="designation">{{$student_Profile->roll}}</p>
          <a class="email" href="#">{{$student_Profile->email}}</a>
          <a class="number" href="#">{{$student_Profile->phone}}</a>
        </div>
      </div>
      <div class="card mb-4">
        <div class="card-body overview">
          <h2 class="card-title mt-2 mb-4" style="font-family: cursive;color: maroon;font-weight:bold;">Compact polytrchinc Instutud</h2>
          <div class="wrapper about-user">
            <h2 class="card-title mt-4 mb-4">About</h2>
            <p>The Total Information of This Student Are Give Below.</p>
          </div>
          <div class="info-links">
            <a class="website">
              <label>Father's Name :</label>
              <span style="font-weight: 500; font-family: vendor; font-size: 16px;">{{$student_Profile->fathername}}</span>
            </a>
            <a class="social-link">
              <label>Mother's Name :</label>
              <span style="font-weight: 500; font-family: vendor; font-size: 16px;">{{$student_Profile->mothername}}</span>
            </a>
            <a class="social-link">
              <label>Address :</label>
              <span style="font-weight: 500; font-family: vendor; font-size: 16px;">{{$student_Profile->address}}</span>
            </a>
            <a class="social-link">
              <label>Deparment :</label>
              <span style="font-weight: 500; font-family: vendor; font-size: 16px;">{{convert_diparment($student_Profile->diparment)}}</span>
            </a>
            <a class="social-link">
              <label>admission year :</label>
              <span style="font-weight: 500; font-family: vendor; font-size: 16px;">{{$student_Profile->admission_year}}</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection