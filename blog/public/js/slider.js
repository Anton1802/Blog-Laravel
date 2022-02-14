$('.sl').slick();

$('.btn.rec').click(function(){

  var link = $(this).attr("href");
  var id = $(this).prop("id")

  $.ajax({
    url: link,
    method:"GET",
    success: function(data)
    {
      $(`button.btn.#${id}`).removeClass('btn-success');
      $(`button.btn.#${id}`).removeClass('btn-danger');
      $(`button.btn.#${id}`).addClass(data);
      console.log(data);
    }

  })

})

$('.btn.public').click(function(){

  var link = $(this).attr("href");
  var id = $(this).prop("id")

  $.ajax({
    url: link,
    method:"GET",
    success: function(data)
    {
      $(`button.btn.#${id}`).removeClass('btn-success');
      $(`button.btn.#${id}`).removeClass('btn-danger');
      $(`button.btn.#${id}`).addClass(data);
      console.log(data);
    }

  })

})
