@extends('dashboard-layout.app')

@section('breadcrumb')
<span>Home</span> / <span class="menu-text">Elections</span>
@endsection

@section('content')

<div class="row">
  <div class="col-xxl-12">
    @include('components.message-flash')

    <div class="card shadow mb-4">
      <div class="card-body">
        <!-- Election List Header with Create Button -->
        <div class="d-flex justify-content-between align-items-center">
          <h5 class="card-title">Election List</h5>
          <!-- Create Button -->
          <a href="{{ route('elections.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-lg"></i> Create Election
          </a>
        </div>
        <hr>

        <!-- Election Table -->
        <div class="table-responsive">
          <table class="table align-middle table-hover m-0" id="dataTable">
            <thead>
              <tr>
                <th>SN</th> <!-- Serial Number Column Header -->
                <th>Name</th>
                <th>Description</th>
                <th>Date</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <!-- Loop through existing elections -->
              @foreach ($elections as $election)
              <tr>
                <td>{{ $loop->iteration }}</td> <!-- Serial Number Column -->
                <td>{{ $election->name }}</td>
                <td>{{ $election->description }}</td>
                <td>{{ $election->date }}</td>
                <td class="d-flex align-items-center">
                  <!-- Actions: Edit & Delete Icons with gap and larger size -->
                  <a href="{{ route('elections.edit', $election->id) }}" class="text-warning me-3" title="Edit" style="font-size: 1.5rem;">
                    <i class="bi bi-pencil-square"></i>
                  </a>
                  <form action="{{ route('elections.destroy', $election->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete it?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-link text-danger p-0" title="Delete" style="font-size: 1.5rem;">
                      <i class="bi bi-trash-fill"></i>
                    </button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>

          <!-- Pagination links -->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
