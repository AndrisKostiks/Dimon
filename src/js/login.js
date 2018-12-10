$().ready(function () {
    $('#LForm1').hide();
    $('#LForm2').hide();
});
$('#button1').on( 'click', (function () {
    $('#LForm1').show();
    $('#LForm2').hide();
}));
var modal = document.getElementById('myModal');
window.onclick = function(event) {
    if (event.target === modal) {
        modal.style.display = "none";
        alert("IDI NAHOOY!");
    }
};
$('#button2').on( 'click', (function () {
    $('#LForm2').show();
    $('#LForm1').hide();

}));
