$(function () {
  var $newItem = $("#newItem");
  var $submitNew = $("#submitNew");
  var $toDoList = $("#toDoList");
  var $AddTaskBar = $("#submitinlineFormInput");
  var $submitButton = $("#submitButton");

  $submitNew.hide();
  $newItem.show();

  $newItem.click(function () {
    $newItem.hide();
    $submitNew.show();
  });

  $submitButton.on("click", function (e) {
    // console.log("Hello");
    e.preventDefault();
    var $value = $AddTaskBar.val();
    console.log($value);
    $toDoList.append(
      '<div class="form-group">' +
        '<input type="text" class="form-control" id="formGroupExampleInput2"' +
        "value = "+$value+">" +
        "</div>"
    );
    $submitNew.hide();
    $newItem.show();
    $AddTaskBar.val("");
  });
});
