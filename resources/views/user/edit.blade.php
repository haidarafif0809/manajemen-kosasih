@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
<div class="col-md-12">
<ul class="breadcrumb">
<li><a href="{{ url('/home') }}">Dashboard</a></li>
<li><a href="{{ url('/tracking/user') }}">User</a></li>
<li class="active">Ubah User</li>
</ul>
<div class="panel panel-default">
<div class="panel-heading">
<h2 class="panel-title">Ubah User</h2>
</div>
<div class="panel-body">
{!! Form::model($user, ['url' => route('user.update', $user->id),
'method'=>'put', 'class'=>'form-horizontal']) !!}
@include('user._form')
{!! Form::close() !!}
</div>
</div>
</div>
</div>
</div>
@endsection