<div class="app-header d-flex align-items-center">

<!-- Toggle buttons start -->
<div class="d-flex">
  <button class="btn btn-primary me-2 toggle-sidebar" id="toggle-sidebar">
    <i class="bi bi-chevron-left fs-5"></i>
  </button>
  <button class="btn btn-primary me-2 pin-sidebar" id="pin-sidebar">
    <i class="bi bi-chevron-left fs-5"></i>
  </button>
</div>
<!-- Toggle buttons end -->

<!-- App brand sm start -->

<!-- App brand sm end -->

<!-- App header actions start -->
<div class="header-actions">

  <div class="dropdown ms-3">
    <a id="userSettings" class="dropdown-toggle d-flex py-2 align-items-center text-decoration-none"
      href="#!" role="button" data-bs-toggle="dropdown" aria-expanded="false">
      <span class="d-none d-md-block me-2">
        {{auth()->user()->name}}
      </span>
      <img src="https://th.bing.com/th/id/OIP._oHjxcDbPRe0HSQA1B4SygHaHa?rs=1&pid=ImgDetMain" class="rounded-circle img-3x" alt="Bootstrap Gallery" />
    </a>
    <div class="dropdown-menu dropdown-menu-end shadow">
      <a class="dropdown-item d-flex align-items-center" href="#"><i
          class="bi bi-person fs-4 me-2"></i>Profile</a>
      <a class="dropdown-item d-flex align-items-center" href="#"><i
          class="bi bi-gear fs-4 me-2"></i>Account Settings</a>
      <form method="POST" action="{{ route('logout') }}">
        @csrf
        <a class="dropdown-item d-flex align-items-center" href="{{ route('logout') }}"
          onclick="event.preventDefault(); this.closest('form').submit();">
          <i class="bi bi-box-arrow-right fs-4 me-2"></i>Logout
        </a>
      </form>

    </div>
  </div>
</div>
<!-- App header actions end -->

</div>