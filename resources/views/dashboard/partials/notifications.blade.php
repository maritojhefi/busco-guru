
<div class="position-fixed bottom-1 end-1 z-index-2">
  @if (session('success'))
  <div class="toast fade p-2 mt-2 bg-gradient-success show" role="alert" aria-live="assertive" id="infoToast" aria-atomic="true">
    <div class="toast-header border-0">
      <i class="ni ni-bell-55 text-white me-2"></i>
      <span class="me-auto text-white font-weight-bold">Soft UI Dashboard</span>
      <small class="text-white">11 mins ago</small>
      <i class="fas fa-times text-md text-white ms-3 cursor-pointer" data-bs-dismiss="toast" aria-label="Close" aria-hidden="true"></i>
    </div>
    <hr class="horizontal light m-0">
    <div class="toast-body text-white">
      {{ session('message') }}
    </div>
  </div>

@endif
@if (session('info'))
    <div class="toast fade p-2 mt-2 bg-gradient-info show" role="alert" aria-live="assertive" id="infoToast" aria-atomic="true">
      <div class="toast-header border-0">
        <i class="ni ni-bell-55 text-white me-2"></i>
        <span class="me-auto text-white font-weight-bold">Soft UI Dashboard</span>
        <small class="text-white">11 mins ago</small>
        <i class="fas fa-times text-md text-white ms-3 cursor-pointer" data-bs-dismiss="toast" aria-label="Close" aria-hidden="true"></i>
      </div>
      <hr class="horizontal light m-0">
      <div class="toast-body text-white">
        {{ session('message') }}
      </div>
    </div>
  @endif  
  @if (session('warning'))

    <div class="toast fade p-2 mt-2 bg-white hide" role="alert" aria-live="assertive" id="warningToast" aria-atomic="true">
      <div class="toast-header border-0">
        <i class="ni ni-spaceship text-warning me-2"></i>
        <span class="me-auto font-weight-bold">Soft UI Dashboard</span>
        <small class="text-body">11 mins ago</small>
        <i class="fas fa-times text-md ms-3 cursor-pointer" data-bs-dismiss="toast" aria-label="Close" aria-hidden="true"></i>
      </div>
      <hr class="horizontal dark m-0">
      <div class="toast-body">
        {{ session('message') }}
      </div>
    </div>
    @endif
    @if (session('danger'))

    <div class="toast fade p-2 mt-2 bg-white hide" role="alert" aria-live="assertive" id="dangerToast" aria-atomic="true">
        <div class="toast-header border-0">
          <i class="ni ni-notification-70 text-danger me-2"></i>
          <span class="me-auto text-gradient text-danger font-weight-bold">Soft UI Dashboard</span>
          <small class="text-body">11 mins ago</small>
          <i class="fas fa-times text-md ms-3 cursor-pointer" data-bs-dismiss="toast" aria-label="Close" aria-hidden="true"></i>
        </div>
        <hr class="horizontal dark m-0">
        <div class="toast-body">
          {{ session('message') }}
        </div>
      </div>
      @endif
  </div>
