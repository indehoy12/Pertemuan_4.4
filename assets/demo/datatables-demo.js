// Call the dataTables jQuery plugin safely
$(document).ready(function () {
  // ✅ Jalankan hanya jika ada elemen dengan ID dataTable
  if ($('#dataTable').length) {
    $('#dataTable').DataTable();
  }
});
