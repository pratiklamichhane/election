@extends('dashboard-layout.app')

@section('breadcrumb')
<span>Home</span> / <span class="menu-text">Elections/Create</span>
@endsection

@section('content')
<div class="row">
  <div class="col-xxl-12">
    @include('components.message-flash')

    <!-- Form to Add New Entry -->
    <div class="card shadow mb-4">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-center">
          <h5 class="card-title">Add</h5>
        </div>
        <hr>
        <form action="#" method="POST" name="add-party">
          @csrf
          <div class="row mb-3">
            <!-- Election Dropdown -->
            <div class="col-md-6">
              <label for="election" class="form-label">Election</label>
              <select class="form-control" id="election" name="election" required>
                <option value="">Select Election</option>
                @foreach($elections as $election)
                  <option value="{{ $election->id }}">{{ $election->name }}</option>
                @endforeach
              </select>
            </div>
          </div>

          <!-- Party Fields Container -->
          <div id="party-container">
            <div class="party-fields row mb-3">
              <div class="col-md-6">
                <label for="party_name" class="form-label">Party Name</label>
                <select class="form-control" name="party_name[]" required>
                  <option value="">Select Party</option>
                  @foreach($partys as $party)
                    <option value="{{ $party->id }}">{{ $party->name }}</option>
                  @endforeach
                </select>
              </div>
            </div>
          </div>

          <!-- Add Party Button -->
          <div class="row mb-3">
            <div class="col-md-6">
              <button type="button" class="btn btn-secondary" id="add-party">Add Party</button>
            </div>
          </div>

          <!-- Submit Button -->
          <div class="row mb-3">
            <div class="col-md-6 d-flex justify-content-end">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')
  
@endsection
