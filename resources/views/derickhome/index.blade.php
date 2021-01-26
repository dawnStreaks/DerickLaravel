@extends('layouts.app')
@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>Welcome</h2>
</div>
</div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
<p>{{ $message }}</p>
</div>
@endif
<table class="table table-bordered">
<tr>

<th>Enter Name</th>

<th width="280px">Action</th>
</tr>

<form action="derickshow/{productName}" method="get">
@csrf
<tr>
<td><input type="text" name="productName" /></td>
<td>
<button type="submit" class="btn btn-danger">Show</button>
</form>
</td>
</tr>
</table>
<!-- <p class="text-center text-primary"><small>Tutorial by Tutsmake.com</small></p> -->
@endsection
