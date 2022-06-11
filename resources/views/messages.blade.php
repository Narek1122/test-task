@if($errors->any())
<div class="alert alert-danger">
  <ul>
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
  </ul>

</div>
@endif

@if(Session::has('error'))
<div class="alert alert-danger">
  {{Session::get('error')}}

</div>
@endif

@if(Session::has('message'))
<div class="alert alert-primary">
  {{Session::get('message')}}

</div>
@endif