@extends('dashboard-layout.app')

@section('breadcrumb')
<span>Home</span> / <span class="menu-text">Partys/Create</span>
@endsection

@section('content')

<div class="row">
  <div class="col-xxl-12">
    @include('components.message-flash')

    <!-- Form to Add New Entry -->
    <div class="card shadow mb-4">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-center">
          <h5 class="card-title">Create</h5>
        </div>
        <form action="{{route('partys.store')}}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="row mb-3">
            <!-- Name Input -->
            <div class="col-md-4">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" required>
            </div>

            <!-- Description Input -->
            <div class="col-md-4">
              <label for="description" class="form-label">Description</label>
              <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter description" required></textarea>
            </div>

            <!-- Logo Input -->
            <div class="col-md-4">
              <label for="logo">Logo</label>
              <input type="file" id="logo" name="logo" class="form-control" required>
            </div>
          </div>

          <!-- Submit Button Row -->
          <div class="row">
            <div class="col-md-12 text-right">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
