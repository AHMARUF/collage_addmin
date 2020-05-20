@extends('admin.layout')
@section('content')
<div class="card">
<div class="card-body">
  <h2 class="card-title">Data table</h2>
  <div class="row">
    <div class="col-12">
      <table id="order-listing" class="table table-striped" style="width:100%;">
        <thead>
          <tr>
              <th>Name</th>
              <th>Phone</th>
              <th>Image</th>
              <th>Address</th>
              <th>Diperment</th>
              <th>Actions</th>
          </tr>
        </thead>
        <tbody>
        	@foreach($teacher as $row)
          <tr>
              <td>{{$row->name}}</td>
              <td>{{$row->phone}}</td>
              <td><img src="{{URL::to($row->images)}}" height="80" width="80"></td>
              <td>{{$row->address}}</td>
              <td>
              	@if($row->diparment== 1)
              	<span class="label babel-success">{{'CST'}}</span>
              	@elseif($row->diparment== 2)
              	<span class="label babel-success">{{'CT'}}</span>
              	@elseif($row->diparment== 3)
              	<span class="label babel-success">{{'AIDT'}}</span>
              	@elseif($row->diparment== 4)
              	<span class="label babel-success">{{'ET'}}</span>
              	@else
              	<span class="label babel-important">{{'Not Deparment'}}</span>
              	@endif
              </td>
              <td>
                <a href="{{URL::to('/teacher/delete/'.$row->id)}}" class="btn btn-outline-danger" id="delete"  type="submit">Delete</a>
              </td>
          </tr>
          
        @endforeach
         
          
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>
@endsection