@extends('app')

@section('content')

<div class="pb-2">
     <form action="{{route('updateTask',$task['id'])}}" method="POST">
      @method('put')
      @csrf
    <div class="input-group mb-3">
      <input type="text" class="form-control" placeholder="{{$task['name']}}" value="{{$task['name']}}" name="name">
      <button class="btn btn-primary">Save</button>
     </div>
  </form>
</div>
@endsection