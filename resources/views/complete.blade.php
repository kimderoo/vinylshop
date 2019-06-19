@extends('layouts.layout')
@section('content')

<div class="row">
    <div class="ml-2 col-md-6">
    <p>Thank you, your transaction id is: {{ $mytransaction }}</p>
    </div>
</div>

<form name="myform" method="POST" action="{{Route('orders.store')}}" enctype="multipart/form-data">
    
    <div class="form-group">
        <input type="hidden" name="token" value="{{ $mytransaction }}">
    </div>

    <div class="form-group">
        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
    </div>
    @csrf

    <button class="ml-2 mb-4 btn btn-outline-success" type="submit">Go back to Shop</button>
</form>

<!--<script type="text/javascript">
    document.myform.submit();
</script>-->
@endsection