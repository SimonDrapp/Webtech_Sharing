$(function () {
    var dateFormat = "yy-mm-dd",
        from = $("#datevon1")
            .datepicker({
                dateFormat: "yy-mm-dd",
                defaultDate: "0w",
                changeMonth: true,
                numberOfMonths: 1,
                minDate: 0,
                monthNames: ['Januar', 'Februar', 'März', 'April', 'Mai', 'Juni',
                    'Juli', 'August', 'September', 'Oktober', 'November', 'Dezember'],
                monthNamesShort: ['Jan', 'Feb', 'Mär', 'Apr', 'Mai', 'Jun',
                    'Jul', 'Aug', 'Sep', 'Okt', 'Nov', 'Dez'],
                dayNames: ['Sonntag', 'Montag', 'Dienstag', 'Mittwoch', 'Donnerstag', 'Freitag', 'Samstag'],
                dayNamesShort: ['So', 'Mo', 'Di', 'Mi', 'Do', 'Fr', 'Sa'],
                dayNamesMin: ['So', 'Mo', 'Di', 'Mi', 'Do', 'Fr', 'Sa']
            })
            .on("change", function () {
                to.datepicker("option", "minDate", getDate(this));
            }),
        to = $("#datebis1").datepicker({
            //      defaultDate: "0w",
            dateFormat: "yy-mm-dd",
            changeMonth: true,
            numberOfMonths: 1,
            minDate:0,
            monthNames: ['Januar', 'Februar', 'März', 'April', 'Mai', 'Juni',
                'Juli', 'August', 'September', 'Oktober', 'November', 'Dezember'],
            monthNamesShort: ['Jan', 'Feb', 'Mär', 'Apr', 'Mai', 'Jun',
                'Jul', 'Aug', 'Sep', 'Okt', 'Nov', 'Dez'],
            dayNames: ['Sonntag', 'Montag', 'Dienstag', 'Mittwoch', 'Donnerstag', 'Freitag', 'Samstag'],
            dayNamesShort: ['So', 'Mo', 'Di', 'Mi', 'Do', 'Fr', 'Sa'],
            dayNamesMin: ['So', 'Mo', 'Di', 'Mi', 'Do', 'Fr', 'Sa']
        })
            .on("change", function () {
                from.datepicker("option", "maxDate", getDate(this));
            });

    function getDate(element) {
        var date;
        try {
            date = $.datepicker.parseDate(dateFormat, element.value);
        } catch (error) {
            date = null;
        }

        return date;
    }
});

$('#searchCity1').on('keyup', function () {

    $value = $(this).val();

    if ($value == "") {
        $('#liveSearch').html("");
        $('#liveSearch').css({border: "0px"});
    } else {


        $.ajax({
            type: 'GET',
            url: '/search',
            data: {'search': $value},
            success: function (data) {

                if (data == "") {
                    $('#liveSearch').html("");
                    $('#liveSearch').css({border: "0px"});
                } else {

                    $('#liveSearch').html(data);
                    $('#liveSearch').css({border: "1px solid #A5ACB2"});
                }
            }


        })
    }
});

$(document).on('click', '#cities', function () {

    $valueLiveSearch = $(this).text();
    //console.log($valueLiveSearch);
    $('#searchCity1').css({fontSize: "14px"});
    $('#searchCity1').val($valueLiveSearch);
    $('#liveSearch').html("");
    $('#liveSearch').css({border: "0px"});
});