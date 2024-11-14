@extends('dashboard-layout.app')

@section('breadcrumb')
<span>Home</span> / <span class="menu-text">Elections/Edit</span>
@endsection

@section('content')

<div class="row">
    <div class="col-xxl-12">
        @include('components.message-flash')

        <!-- Form to Add New Entry -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="card-title">Edit</h5>
                </div>
                <hr>
                <form action="{{ route('elections.update', $election->id) }}" method="Post">
                    @csrf
                    @method('PUT')
                 
                    <div class="row mb-3">
                        <!-- Name Input -->
                        <div class="col-md-4">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter name"
                                required value="{{$election->name}}">
                        </div>

                        <!-- Description Input -->
                        <div class="col-md-4">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="3"
                                placeholder="Enter description" required>{{$election->description}}</textarea>
                        </div>

                        <!-- Date Input -->
                        <div class="col-md-4">
                            <label for="date" class="form-label">Date</label>
                            <input type="date" class="form-control" id="date" name="date" required
                                value="{{$election->date}}">
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