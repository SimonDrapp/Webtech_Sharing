





/*---Slider---*/
$(function () {
    $("#slider-range").slider({
        range: true,
        min: 1,
        max: 200,
        values: [0, 125],
        slide: function (event, ui) {
            $("#amount").val("Preis: €" + ui.values[0] + " - €" + ui.values[1]);
        }
    });
    $("#amount").val("Preis: €" + $("#slider-range").slider("values", 0) +
        " - €" + $("#slider-range").slider("values", 1));
});


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

/*---MehrAnzeigenButton---*/
$(function () {
    $(".showMore").slice(0, 4).show();
    $("#loadMore").on('click', function (e) {
        e.preventDefault();
        $(".showMore:hidden").slice(0, 4).slideDown();
    });
});

/*---NächsteAnzeigenButton---*/
$(function () {
    $(".showMoreResults").slice(0, 4).show();
    $("#loadMoreResults").on('click', function (e) {
        e.preventDefault();
        $(".showMoreResults:hidden").slice(0, 4).slideDown();
    });
});

/*---FilterButton---*/
var filterCounter = 0;

function displayFilter() {
    if (filterCounter % 2 == 0) {
        document.getElementById("searchFilter").style.display = "block";
        filterCounter++;
    } else if (filterCounter % 2 != 0) {
        document.getElementById("searchFilter").style.display = "none";
        filterCounter++;
    }
}

$(document).ready(function () {

    $checkFilter = 'all';

    var slider_E = document.getElementById("myRangeDistance");
    var output_E = document.getElementById("demoDistance");
    output_E.innerHTML = slider_E.value;

    slider_E.oninput = function () {
        output_E.innerHTML = this.value;
    }


    /*---Ajax---*/

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

    /*---FilterButtons---*/
    var btnContainer = document.getElementById("btnContainer");
    console.log(btnContainer);
    var btns = btnContainer.getElementsByClassName("btn");
    console.log(btns);
    for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function () {
            var current = document.getElementsByClassName("active");
            console.log(current);
            current[0].className = current[0].className.replace(" active", "");
            this.className += " active";
        });
    }
    /*---FilterButtonsMobile---*/
    var btnContainerMobil = document.getElementById("btnContainerMobil");
    var btnsMobil = btnContainerMobil.getElementsByClassName("btn");
    for (var i = 0; i < btnsMobil.length; i++) {
        btnsMobil[i].addEventListener("click", function () {
            var current = document.getElementsByClassName("ac");
            current[0].className = current[0].className.replace(" ac", "");
            this.className += " ac";
        });
    }


    /*---FilterButtons change the Filter---*/
    $('.all').click(function () {
        $checkFilter = 'all';

        $.get("/changeFilterAll", function (data) {
            $('.inputFilter').empty();
            $('.inputFilter').html(data);

            /*---MehrAnzeigenButton---*/
            $(function () {
                $(".showMore").slice(0, 4).show();
                $("#loadMore").on('click', function (e) {
                    e.preventDefault();
                    $(".showMore:hidden").slice(0, 4).slideDown();
                });
            });
        });
    });

    $('.cars').click(function () {
        $checkFilter = 'cars';

        $.get("/changeFilterCars", function (data) {
            $('.inputFilter').empty();
            $('.inputFilter').html(data);


            /*---Ajax Baujahr--*/
            $('select').change(function () {
                var baujahr = $("select option:selected").text();
                //alert(baujahr);
                $.ajax({
                    type: 'GET',
                    url: '/searchVehiclesFilter',
                    data: {'baujahr': baujahr},
                    success: function (data) {
                        $('.searchResults_block').empty();
                        $('.searchResults_block').html(data);
                        /*---MehrAnzeigenButtonResults---*/
                        $(function () {
                            $(".showMoreResults").slice(0, 4).show();
                            $("#loadMoreResults").on('click', function (e) {
                                e.preventDefault();
                                $(".showMoreResults:hidden").slice(0, 4).slideDown();
                            });
                        });
                    }
                })
            });
            /*---MehrAnzeigenButton---*/
            $(function () {
                $(".showMore").slice(0, 4).show();
                $("#loadMore").on('click', function (e) {
                    e.preventDefault();
                    $(".showMore:hidden").slice(0, 4).slideDown();
                });
            });
        });
    });

    $('.bicycles').click(function () {
        $checkFilter = 'bicycles';

        $.get("/changeFilterBicycles", function (data) {
            $('.inputFilter').empty();
            $('.inputFilter').html(data);
        });
    });

    $(document).on('click', '#cities', function () {

        $valueLiveSearch = $(this).text();
        //console.log($valueLiveSearch);
        $('#searchCity1').css({fontSize: "14px"});
        $('#searchCity1').val($valueLiveSearch);
        $('#liveSearch').html("");
        $('#liveSearch').css({border: "0px"});
    });


    $(document).on('click', '#autoMarken', function () {

        var aMarken_id = $(this).attr('value');
        //console.log(aMarken_id);
        var $aModelle = $('#aModelle');

        $.ajax({
            type: 'GET',
            url: '/findAutoModelle',
            data: {'id': aMarken_id},
            success: function (data) {

                $("#aModelle").empty();
                $.each(data, function (i, aModell) {
                    //console.log(aModell);
                    $aModelle.append('<li class="showMore" id="autoModelle"><a id="AutoModelle" value=' + aModell.id + '>' + aModell.aModellname + '</a></li>')
                });
                /*---MehrAnzeigenButton---*/
                $(function () {
                    $(".showMore").slice(0, 4).show();
                    $("#loadMore").on('click', function (e) {
                        e.preventDefault();
                        $(".showMore:hidden").slice(0, 4).slideDown();
                    });
                });
            }
        })
    });

    /*---SuchenButton---*/
    $(document).live('click', '#buttonSearch1, .all, .cars, .bicycles, #buttonSearchMobil', function () {

        var ort = null;
        var plz = null;


        var ortplz = $('#searchCity1').val();
        if(ortplz) {
            var ortArray = ortplz.split(", ");
            var ort = ortArray[0];
            if (ort.indexOf(" ") > -1) {
                ortArray1 = ort.split(" ");
                var ort = ortArray1[0];
            }
            var plz = ortArray[1];
        }
        var startdate = $('#datevon1').val();
        var enddate = $('#datebis1').val();



        //console.log($checkFilter);

        $.ajax({
            type: 'GET',
            url: '/searchVehicles',
            data: {
                'ort': ort,
                'plz': plz,
                'startdate': startdate,
                'enddate': enddate,
                'checkFilter': $checkFilter
            },
            success: function (data) {
                $('.searchResults_block').empty();
                $('.searchResults_block').html(data);
                /*---NächsteAnzeigenButton---*/
                $(function () {
                    $(".showMoreResults").slice(0, 4).show();
                    $("#loadMoreResults").on('click', function (e) {
                        e.preventDefault();
                        $(".showMoreResults:hidden").slice(0, 4).slideDown();
                    });
                });
            }
        })
    });

    /*---Ajax Preis slider--*/
    $('#slider-range').mouseup(function () {


        var minPreis = $("#slider-range").slider("values", 0);
        var maxPreis = $("#slider-range").slider("values", 1);

        $.ajax({
            type: 'GET',
            url: '/searchVehiclesFilter',
            data: {'minPreis': minPreis, 'maxPreis': maxPreis},
            success: function (data) {
                //console.log(data)
                $('.searchResults_block').empty();
                $('.searchResults_block').html(data);
                /*---NächsteAnzeigenButton---*/
                $(function () {
                    $(".showMoreResults").slice(0, 4).show();
                    $("#loadMoreResults").on('click', function (e) {
                        e.preventDefault();
                        $(".showMoreResults:hidden").slice(0, 4).slideDown();
                    });
                });
            }
        })
    });

    /*---Ajax AutoMarken---*/
    $(document).on('click', '#autoMarken, #fahrradMarken', function () {

        var marke = $(this).text();
        $.ajax({
            type: 'GET',
            url: '/searchVehiclesFilter',
            data: {'marke': marke},
            success: function (data) {
                console.log(data)
                $('.searchResults_block').empty();
                $('.searchResults_block').html(data);
                /*---NächsteAnzeigenButton---*/
                $(function () {
                    $(".showMoreResults").slice(0, 4).show();
                    $("#loadMoreResults").on('click', function (e) {
                        e.preventDefault();
                        $(".showMoreResults:hidden").slice(0, 4).slideDown();
                    });
                });
            }
        })
    });

    /*---Ajax AutoModelle--*/
    $(document).on('click', '#autoModelle, #fahrradModelle', function () {

        var modell = $(this).text();
        $.ajax({
            type: 'GET',
            url: '/searchVehiclesFilter',
            data: {'modell': modell},
            success: function (data) {
                //console.log(data)
                $('.searchResults_block').empty();
                $('.searchResults_block').html(data);
                /*---NächsteAnzeigenButton---*/
                $(function () {
                    $(".showMoreResults").slice(0, 4).show();
                    $("#loadMoreResults").on('click', function (e) {
                        e.preventDefault();
                        $(".showMoreResults:hidden").slice(0, 4).slideDown();
                    });
                });
            }
        })
    });

    /*---Ajax Kraftstoff--*/
    $(document).on('click', '#autoKraftstoff', function () {

        var kraftstoff = $(this).text();
        $.ajax({
            type: 'GET',
            url: '/searchVehiclesFilter',
            data: {'kraftstoff': kraftstoff},
            success: function (data) {
                //console.log(data)
                $('.searchResults_block').empty();
                $('.searchResults_block').html(data);
                /*---NächsteAnzeigenButton---*/
                $(function () {
                    $(".showMoreResults").slice(0, 4).show();
                    $("#loadMoreResults").on('click', function (e) {
                        e.preventDefault();
                        $(".showMoreResults:hidden").slice(0, 4).slideDown();
                    });
                });
            }
        })
    });
    /*---Ajax FahrradArt--*/
    $(document).on('click', '#fahrradArt', function () {

        var art = $(this).text();
        $.ajax({
            type: 'GET',
            url: '/searchVehiclesFilter',
            data: {'art': art},
            success: function (data) {
                //console.log(data)
                $('.searchResults_block').empty();
                $('.searchResults_block').html(data);
                /*---NächsteAnzeigenButton---*/
                $(function () {
                    $(".showMoreResults").slice(0, 4).show();
                    $("#loadMoreResults").on('click', function (e) {
                        e.preventDefault();
                        $(".showMoreResults:hidden").slice(0, 4).slideDown();
                    });
                });
            }
        })
    });
});
