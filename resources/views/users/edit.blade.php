@extends('layouts.admin-layout')
@section('page-title', 'Edit User')
@section('content')
<section class="section">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Edit Users</h5>
        <form action="{{ route('users.update', $edit->id) }}" method="post">
          @csrf
          @method('put')
          <div class="mb-3">
            <label for="" class="col-form-label">Name</label>
            <input type="text" class="form-control" name="name" placeholder="Enter Your Name" required value="{{ $edit->name }}">
          </div>
          <div class="mb-3">
            <label for="" class="col-form-label">Email</label>
            <input type="email" class="form-control" name="email" placeholder="Enter Your Email" required value="{{ $edit->email }}">
          </div>
          <div class="mb-3">
            <label for="" class="col-form-label">Password</label>
            <input type="password" class="form-control" name="password" placeholder="Enter Your Password">
          </div>
            <div class="mb-3">
                <label class="form-label d-block">Roles</label>
                @foreach ($roles as $role)
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="roles[]" value="{{ $role->id }}"
                            id="role-{{ $role->id }}" {{ in_array($role->id, $edit->roles->pluck('id')->toArray()) ? 'checked' : '' }}>
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
