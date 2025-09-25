const globalModal = document.getElementById('globalModal');
const modalTitle = globalModal.querySelector('#globalModalTitle');
const modalBody = globalModal.querySelector('#globalModalBody');
const actionBtn = globalModal.querySelector('#globalModalActionBtn');

// Default reset setiap kali modal mau dibuka
globalModal.addEventListener('show.bs.modal', function (event) {
  const button = event.relatedTarget;

  // Ambil data dari tombol
  const action = button.getAttribute('data-action');
  const type = button.getAttribute('data-type') ?? "default";
  const id = button.getAttribute('data-id');
  const username = button.getAttribute('data-username');

  // Reset isi
  modalTitle.textContent = "";
  modalBody.innerHTML = "";
  actionBtn.style.display = "inline-block";
  actionBtn.textContent = "OK";
  actionBtn.className = "btn btn-primary";
  actionBtn.onclick = null;

  // ---- CASE: HAPUS ----
  if (action === "hapus") {
    modalTitle.textContent = "Konfirmasi Hapus";
    modalBody.innerHTML = `Yakin ingin menghapus <strong>${username}</strong> (ID: ${id})?`;
    actionBtn.textContent = "Hapus";
    actionBtn.className = "btn btn-danger";
    actionBtn.onclick = () => window.location.href = `hapus_${type}.php?id=${id}`;
  }

  // ---- CASE: EDIT ----
  if (action === "edit") {
    modalTitle.textContent = "Edit Data";
    modalBody.innerHTML = `
      <form action="edit_${type}.php" method="post">
        <input type="hidden" name="id" value="${id}">
        <div class="mb-3">
          <label class="form-label">Username</label>
          <input type="text" class="form-control" name="username" value="${username}">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </form>
    `;
    actionBtn.style.display = "none";
  }

  // ---- CASE: DETAIL ----
  if (action === "detail") {
    modalTitle.textContent = `Detail ${type}`;
    modalBody.innerHTML = `
      <p><strong>ID:</strong> ${id}</p>
      <p><strong>Username:</strong> ${username ?? "-"}</p>
    `;
    actionBtn.style.display = "none";
  }
});

// Reset tombol default setiap kali modal ditutup
globalModal.addEventListener('hidden.bs.modal', function () {
  actionBtn.style.display = "inline-block";
  actionBtn.textContent = "OK";
  actionBtn.className = "btn btn-primary";
  actionBtn.onclick = null;
});
