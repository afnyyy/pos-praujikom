@extends('layouts.admin-layout')
@section('page-title', 'Role')

@section('content')
<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">{{ $title ?? ''}}</h5>
          <div class="mt-4 mb-3">
            <div align="right" class="mb-3">
              <a class="btn btn-primary" href="{{route('roles.create')}}">Add Roles</a>
            </div>
            <table class="table table-bordered">
              <thead class="table-primary" style="background-color: #ADD8E6;">
                <tr>

                  <th>No</th>
                  <th>Name Role</th>
                  <th>Status</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @php $no=1 @endphp
                @foreach ($datas as $index => $data)
                <tr>
                    <td>{{ $index += 1 }}</td>
                    <td>{{ $data->name }}</td>
                    <td><span class="badge {{ $data->is_active == 1 ? 'bg-success' : 'bg-secondary' }}">
                        {{ $data->is_active == 1 ? 'Active' : 'Inactive' }}
                        </span></td>
                  <td>
                    <a href="{{ route('roles.edit', $data->id) }}" class="btn btn-secondary"><i class="bi bi-pencil"></i></a>
                    <form class="d-inline" action="{{ route('roles.destroy', $data->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-warning">
                            <i class="bi bi-trash"></i>
                        </button>
                    </form>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>

    </div>

  </div>
</section>
@endsection
