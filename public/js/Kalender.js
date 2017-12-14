$(document).ready(function (){
    var date_von=$('input[name="inputVon"]'); //our date input has the name "date"
    var date_bis=$('input[name="inputBis"]');
    var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
    var options={
        format: 'dd/mm/yyyy',
        container: container,
        orientation: "bottom-right",
        todayHighlight: true,
        autoclose: true,

    };
    date_von.datepicker(options);
    date_bis.datepicker(options);
})
