function showToast(type = "info", message = "Default message") {
    const toastEl = document.getElementById("globalToast");
    const toastMessage = document.getElementById("toastMessage");
    const toastIcon = document.getElementById("toastIcon");
  
    // Reset class
    toastEl.className = "toast align-items-center border-0";
    toastIcon.className = "fa me-2";
  
    // Style berdasarkan type
    switch (type) {
      case "success":
        toastEl.classList.add("text-bg-success");
        toastIcon.classList.add("fa-check-circle");
        break;
      case "error":
        toastEl.classList.add("text-bg-danger");
        toastIcon.classList.add("fa-times-circle");
        break;
      case "warning":
        toastEl.classList.add("text-bg-warning");
        toastIcon.classList.add("fa-exclamation-triangle");
        break;
      case "info":
      default:
        toastEl.classList.add("text-bg-info");
        toastIcon.classList.add("fa-info-circle");
        break;
    }
  
    // Set pesan
    toastMessage.textContent = message;
  
    // Show toast
    const toast = new bootstrap.Toast(toastEl, { delay: 3000, autohide: true });
    toast.show();
  }