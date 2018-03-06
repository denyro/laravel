@extends('main')
@section('title', 'Contact Me')
@section('content')
<div class="row">
  <h1>Contact Me at!</h1>
</div>
      <div class="row">
        <h5>hallo nama saya adalah </h5>
      </div>
    
        <form>
            <div class="form-group">
              <label for="exampleFormControlInput1">Email address</label>
              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Example textarea</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
          </form>
@endsection