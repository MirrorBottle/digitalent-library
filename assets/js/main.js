$(function() {
  $("#datatable").DataTable();

  $(".delete-btn").on('click', function(e) {
    const message = $(this).data('message');
    Swal.fire({
      title: 'Apa anda yakin?',
      text: message,
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ya, hapus!',
      cancelButtonText: 'Batal'
    }).then((result) => {
      if (result.isConfirmed) {
        Swal.fire(
          'Deleted!',
          'Your file has been deleted.',
          'success'
        )
      }
    })
  })
})