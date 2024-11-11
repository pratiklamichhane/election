<!-- this blade contains all the flash messages that are displayed to the user.  -->

@if (session('success'))
    <div class="alert alert-success alert-dismissible d-flex align-items-center fade show" role="alert">
        <i class="bi bi-check-circle fs-2 me-2 lh-1"></i>
        <div>
            <strong>Success!</strong> {{ session('success') }}
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger alert-dismissible d-flex align-items-center fade show" role="alert">
        <i class="bi bi-exclamation-circle fs-2 me-2 lh-1"></i>
        <div>
            <strong>Error!</strong> {{ session('error') }}
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if (session('warning'))
    <div class="alert alert-warning alert-dismissible d-flex align-items-center fade show" role="alert">
        <i class="bi bi-exclamation-triangle fs-2 me-2 lh-1"></i>
        <div>
            <strong>Warning!</strong> {{ session('warning') }}
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if (session('info'))
    <div class="alert alert-info alert-dismissible d-flex align-items-center fade show" role="alert">
        <i class="bi bi-info-circle fs-2 me-2 lh-1"></i>
        <div>
            <strong>Info!</strong> {{ session('info') }}
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif