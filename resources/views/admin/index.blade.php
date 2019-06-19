@extends('layouts.dashboard')
@section('content')
<div class="container">
    <div class="row">
        <h1 class="mx-auto mt-5 display-3 text-success">Welcome back {{ Auth::user()->name }} ! <i class="fas fa-hand-paper"></i></h1>
    </div>
    <div class="row">
        <h2 class="p-2 mt-3 text-white bg-dark mx-auto display-5">What do you want to do today ?</h2>
    </div>
</div>
@stop
