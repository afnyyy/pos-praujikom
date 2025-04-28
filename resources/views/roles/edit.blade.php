@extends('layouts.admin-layout')
@section('page-title', 'Edit Role')
@section('content')
<section class="section">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Edit Roles</h5>
        <form action="{{ route('roles.update', $edit->id) }}" method="post">
          @csrf
          @method('put')
          <div class="mb-3">
            <label for="" class="col-form-label">Role Name</label>
            <input type="text" class="form-control" name="name" placeholder="Enter Your Role Name" required value="{{ $edit->name }}">
          </div>
          <div class="mb-3">
            <label for="" class="col-form-label">Status</label></label>
            <input type="checkbox" name="is_active" id="is_active" class="form-check-input" value="1" {{ old('is_active', $edit->is_active) ? 'checked' : '' }}>
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
