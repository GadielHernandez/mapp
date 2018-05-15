function ajaxJson(dataObj) {
  return $.ajax({
    type: 'POST',
    url: 'inc/ajax.php',
    data: JSON.stringify(dataObj),
    contentType: "application/json; charset=utf-8",
    success: function(resp) {
              data = resp;
            }
  });
}
