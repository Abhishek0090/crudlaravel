@extends('layouts.app')
@section('main')

<div class="container mt-5">
  <h2>New Category</h2>
  <div class="row">
    <div class="col-sm-4"> 
  <form action="/category-store" method="post">
    @csrf
    <label>Title</label>
    <input type="text" name="title" class="form-control" value="{{old('title')}}"/>
    @if($errors->has('title'))
    <p class="text-danger">{{$errors->first('title')}}</p>
    @endif
    <button class="btn btn-info mt-4" type="submit">Create</button>
  </form> 
    </div>
    </div>
</div>

</body>
</html>
@endsection