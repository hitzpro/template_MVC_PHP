<!-- Toast Container -->
<div class="toast-container position-fixed top-0 end-0 p-3">
  <div class="toast align-items-center border-0" id="globalToast" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="d-flex">
      <div class="toast-body d-flex align-items-center">
        <i id="toastIcon" class="fa fa-info-circle me-2"></i>
        <span id="toastMessage">Ini contoh pesan.</span>
      </div>
      <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast"></button>
    </div>
  </div>
</div>


<script src="public/js/toast.js"></script>

<script>
  document.addEventListener('DOMContentLoaded',()=>{
    showToast("success", "Berhasil tambah data!");
  })
</script>