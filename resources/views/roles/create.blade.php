@extends('layouts.admin-layout')
@section('page-title', 'Add Role')
@section('content')
<section class="section">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Add New Role </h5>
        <form action="{{ route('roles.store') }}" method="post">
          @csrf
          <div class="mb-3">
            <label for="" class="col-form-label">Name Role</label>
            <input type="text" class="form-control" name="name" placeholder="Enter Your Name" required>
          </div>
          <div class="mb-3">
            <label for="" class="col-form-label">Status</label></label>
            <input class="form-check-input" type="checkbox" name="is_active">
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
