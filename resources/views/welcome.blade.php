@extends('app')

@section('content')

<div class="pb-2">
    <form action="{{route('storeTask')}}" method="POST">
      @csrf
  <div class="card">
    <div class="card-body">
      <div class="d-flex flex-row align-items-center">
        <input type="text" class="form-control form-control-lg" id="exampleFormControlInput1"
          placeholder="@error('name')
            {{$message}}
          @enderror" name="name">
        <div>
          <button type="submit" class="btn btn-primary">Add</button>
        </div>
      </div>
    </div>
  </div>
  </form>
</div>

<hr class="my-4">
@if (count($datas))
@foreach ($datas as $data)
<ul class="list-group list-group-horizontal rounded-0 bg-transparent">

  <li
    class="list-group-item px-3 py-1 d-flex align-items-center flex-grow-1 border-0 bg-transparent">
    <p class="lead fw-normal mb-0">
      {{$data['name'] ?? null}}
    </p>
  </li>
  <li class="list-group-item ps-3 pe-0 py-1 rounded-0 border-0 bg-transparent">
    <div class="d-flex flex-row justify-content-end mb-1">
      <a href="{{route('editTask',$data['id'])}}" class="btn text-info">
          <i class="fas fa-pencil-alt me-3"></i>
      </a>
      <form method="POST" action="{{route('deleteTask',$data['id'])}}">
        @method('delete')
        @csrf
       <button  class="btn text-danger">
          <i class="fas fa-trash-alt"></i>
      </button>
      </form>
    </div>
    <div class="text-end text-muted">
      <a href="#!" class="text-muted" data-mdb-toggle="tooltip" title="Created date">
        <p class="small mb-0">
        {{$data['created_at'] ?? null}}
    </p>
      </a>
    </div>
  </li>
</ul>
@endforeach
  
@endif
@endsection