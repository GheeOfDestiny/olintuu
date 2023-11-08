$('.tab-links').click(function() {
  $('.tab-links').not(this).removeClass(".tab-form-active");
  $(this).toggleClass(".tab-form-active");
});
