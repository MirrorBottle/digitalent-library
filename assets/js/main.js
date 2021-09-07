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

  $("#navbar-toggle-btn").on('click', function(e) {
    e.preventDefault();
    console.log($(this).hasClass('to-open'));
    if($(this).hasClass('to-open')) {
      $("aside").css("margin-left", "0px").animate();
      $("main").removeClass("col-12");
      $("main").addClass("col-md-9 offset-md-3 offset-lg-2 ml-sm-auto col-lg-10");
      $(this).removeClass('to-open')
    } else {
      $("aside").css("margin-left", "-250px").animate();
      $("main").removeClass("col-md-9 offset-md-3 offset-lg-2 ml-sm-auto col-lg-10");
      $("main").addClass("col-12");
      $(this).addClass('to-open')
    }
  })
  function readURL(input, target) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        console.log(read, input, $(target));
        reader.onload = function (e) {
            $(target).attr('src', e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
    }
  }
  $('.form-control-image-preview').on('change', function(e) {
    const target = $(this).data('target');
    if ($(this).prop('files') && $(this).prop('files')[0]) {
      const reader = new FileReader();
      reader.onload = function (e) {
          $(target).attr('src', e.target.result);
      };
      reader.readAsDataURL($(this).prop('files')[0]);
    }
  })
})