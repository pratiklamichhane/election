 @extends('dashboard-layout.app')



@section('breadcrumb')
<span>Home</span> / <span class="menu-text">Dashbord</span>
@endsection

 @section('content')
 
 @if(auth()->user()->role =='admin')
 <div class="row">
              <div class="col-lg-4 col-sm-6 col-12">
                <div class="card shadow mb-4 p-3 rounded-2 justify-content-between flex-row">
                  <div class="mt-3">
                    <h5 class="text-secondary fw-light">Total Users</h5>
                    <h1 class="text-primary">
                      {{App\Models\User::where('role', 'user')->count()}}
                    </h1>
                    <span class="badge border border-primary text-primary me-3">Total</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-sm-6 col-12">
                <div class="card shadow mb-4 p-3 rounded-2 justify-content-between flex-row">
                  <div class="mt-3">
                    <h5 class="text-secondary fw-light">Elections</h5>
                    <h1 class="text-primary">0</h1>
                    <span class="badge border border-primary text-primary me-3">Total</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-sm-12 col-12">
                <div class="card shadow mb-4 p-3 rounded-2 justify-content-between flex-row">
                  <div class="mt-3">
                    <h5 class="text-secondary fw-light">Leaders</h5>
                    <h1 class="text-primary">0</h1>
                    <span class="badge border border-primary text-primary me-3">Total</span>
                  </div>
                </div>
              </div>
            </div>
            <!-- Row end -->

            @else

            @endif

        

            @endsection
