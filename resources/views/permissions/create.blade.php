@extends('layouts.app')
@section('title', 'Create Permission')
@section('content')

  @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
      </ul>
    </div><br />
  @endif
<div class = 'container'>
  <div class="row">
      <div class="col-12">
          <div class="card">
            <div class="card-header">
              Add new Permission
            </div>
              <div class="card-body">
                <form method="post" action="{{ route('permissions.store') }}">
                    <div class="form-group">
                        @csrf
                        <label for="name">Permission name</label>
                        <input type="text" name = "name" class = "form-control" placeholder = "Name">
                    </div>

                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
              </div>
          </div>
      </div>
  </div>
</div>

@endsection
