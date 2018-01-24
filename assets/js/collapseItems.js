$(document).ready(function () {
    HEIGHT = $(window).height();
    WIDTH = $(window).width();
    collapseItems();
    showMore();
    biggestSize();
});


function collapseItems() {
    var $myGroup = $('.groupCollapse');
    $myGroup.on('show.bs.collapse', '.collapse', function () {
        $myGroup.find('.collapse.in').collapse('hide');
    });
}
 
function showMore() {
    $('.hiddenDiv').hide();
    $('.hiddenDegree').on('click', function () {
        var p = $(this).attr('curren-p');
        $('.hiddenDiv').hide();
        $('.hiddenDiv').addClass('hide_div');
        $('.hiddenDiv').each(function () {
            var current = $(this).attr('current-div');
            if (p == current) {
                console.log($(this).hasClass('hide_div'));
                if($(this).hasClass('show_div')) {
                    $(this).removeClass('show_div');
                    $(this).hide();
                } else {
                    if ($(this).hasClass('hide_div')) {
                        $('.hiddenDiv').hide();
                        $(this).removeClass('hide_div');
                        $(this).addClass('show_div');
                        $(this).show();
                    }
                }

            }
        });
    });
}

function biggestSize() {
    var maxHeight = -1;
    $('.subtitle_heigh').each(function() {
        if ($(this).height() > maxHeight) {
            maxHeight = $(this).height();
        }
    });
    $('.subtitle_heigh').height(maxHeight+20);
}