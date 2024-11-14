@extends('dashboard-layout.app')

@section('breadcrumb')
<span>Home</span> / <span class="menu-text">Parties/Edit</span>
@endsection

@section('content')

<div class="row">
    <div class="col-xxl-12">
        @include('components.message-flash')

        <!-- Form to Edit Party -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="card-title">Edit Party</h5>
                </div>
                <hr>
                <form action="{{ route('partys.update', $party->id) }}" method="Post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row mb-3">
                        <!-- Name Input -->
                        <div class="col-md-4">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" required value="{{ old('name', $party->name) }}">
                        </div>

                        <!-- Description Input -->
                        <div class="col-md-4">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter description" required>{{ old('description', $party->description) }}</textarea>
                        </div>

                        <!-- Logo Input (Upload New Logo) -->
                        <div class="col-md-4">
                            <label for="logo" class="form-label">Logo</label>
                            <input type="file" class="form-control" id="logo" name="logo" accept="image/*">
                            @if ($party->logo)
                                <p>Current logo:</p>
                                <img src="{{ asset('storage/' . $party->logo) }}" alt="Party Logo"  style="max-width: 100px; max-height: 100px;"">
                            @endif
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
