$(function () {
    $().get('dashboard/getData', function (o) {
        alert(o);
    }, 'json');
   $('#AJAXInsert').submit(function () {
       let url = $(this).attr('action');
       let data = $(this).serialize();
       $.post(url,data,function (o) {
           alert(1);
       });
       return false;
   });
});