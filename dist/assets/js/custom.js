require('jquery-validation');

$(function () {

  $('#form').validate({
    rules: {
      firstName: 'required',
      lastName: 'required',
      title: 'required',
      email: {
        required: true,
        email: true,
      },
      phone: 'required',
      select: 'required',
    },
    errorClass: 'is-invalid',
    errorElement: 'span',
    submitHandler: function(form) {
      form.submit();
    }
  });
});
