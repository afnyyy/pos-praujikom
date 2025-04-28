@extends('layouts.admin-layout')
@section('page-title', 'Add User')
@section('content')
<section class="section">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Add New User </h5>
        <form action="{{ route('users.store') }}" method="post">
          @csrf
          <div class="mb-3">
            <label for="" class="col-form-label">Name</label>
            <input type="text" class="form-control" name="name" placeholder="Enter Your Name" required>
          </div>
          <div class="mb-3">
            <label for="" class="col-form-label">Email</label></label>
            <input type="email" class="form-control" name="email" placeholder="Enter Your Email" required>
          </div>
          <div class="mb-3">
            <label for="" class="col-form-label">Password</label>
            <input type="password" class="form-control" name="password" placeholder="Enter Your Password" required>
          </div>
            <div class="mb-3">
                <label class="form-label d-block">Role</label>
                @foreach ($roles as $role)
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="roles[]"
                            value="{{ $role->id }}" id="role-{{ $role->id }}">
                        <label class="form-check-label" for="role-{{ $role->id }}">{{ $role->name }}</label>
                    </div>
                @endforeach
            </div>
          <div class="mb-3">
            <button class="btn btn-primary" type="submit">Save </button>
            <button class="btn btn-danger" type="reset">Cancel </button>
            <a href="{{ url()->previous() }}" class="text-primary">Back</a>

          </div>

        </form>
      </div>
    </div>
  </div>

</section>

@endsection
