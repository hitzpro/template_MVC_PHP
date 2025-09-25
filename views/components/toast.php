<!-- views/components/toast.php -->
<div class="toast-container position-fixed bottom-0 end-0 p-3">
  <div class="toast align-items-center text-bg-dark border-0" id="liveToast">
    <div class="d-flex">
      <div class="toast-body">
        <i class="fa fa-check-circle text-success"></i> Action completed successfully!
      </div>
      <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
    </div>
  </div>
</div>

<!-- Trigger -->
<button class="btn btn-warning" id="showToast">
  <i class="fa fa-bell"></i> Show Toast
</button>

<script>
document.getElementById('showToast').addEventListener('click', () => {
  const toastEl = document.getElementById('liveToast');
  const toast = new bootstrap.Toast(toastEl);
  toast.show();
});
</script>
