$('.sl').slick();

$('.btn.rec').click(function(){

  var link = $(this).attr("href");
  var id = $(this).prop("id")

  $.ajax({
    url: link,
    method:"GET",
    success: function(data)
    {

      $(`#${id}`).removeClass('btn-success');
      $(`#${id}`).removeClass('btn-danger');
      $(`#${id}`).addClass(data);

    }

  })

})

$('.btn.ready').click(function(){

  var link = $(this).attr("href");
  var id = $(this).prop("id");

  $.ajax({
    url: link,
    method:"GET",
    success: function(data)
    {

      $(`#${id}`).remove();
      alert('Опубликовано!');

    }

  })

})

  $('.btn.del').click(function(){

    var link = $(this).attr("href");
    var id = $(this).prop("id");

    console.log(link);
    console.log(id);

    $.ajax({
      url: link,
      method:"GET",
      success: function(data)
      {

        $(`.del#${id}`).remove();
        $(`.t#${id}`).remove();
        alert('Удаление выполнено!');


      }

})

})
