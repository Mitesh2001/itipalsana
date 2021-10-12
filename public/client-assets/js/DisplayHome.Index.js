$(document).ready(function () {

    $("#displayrow div.sim-row-delete").remove();
    $("#displayrow .sim-row").removeClass("ui-draggable");
    $("#displayrow .sim-row-edit").removeAttr("data-type");
    $("#displayrow .sim-row-edit").removeClass("sim-row-edit");
    $("#displayrow div.rightbg").remove();
    $("#displayrow div.notshow").remove();
    $('.hdcolor div.mainbgdiv').remove();
   // $('.hdcolor').find('div').first().remove();
});