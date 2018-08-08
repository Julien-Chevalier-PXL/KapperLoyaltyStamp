$(document).ready(function () {
    var i = 1;
    var nbOfStamps = 3;
    for (i; i <= 5; i++) {
        var div = $('<div></div>').addClass("stampPlace col text-center");
        if (i <= nbOfStamps) {
            div.append($('<span class="fas fa-stamp"></span>'));
        } else {
            div.append($('<span class="far fa-square"></span>'));
        }
        $("#firstRow").append(div);
    }
    for (i; i <= 9; i++) {
        var div = $('<div></div>').addClass("stampPlace col text-center");
        if (i <= nbOfStamps) {
            div.append($('<span class="fas fa-stamp"></span>'));
        } else {
            div.append($('<span class="far fa-square"></span>'));
        }
        $("#secondRow").append(div);
    }
    var giftDiv = $('<div></div>').addClass("stampPlace col text-center");
    giftDiv.append('<span class="fas fa-gift"></span>');
    $("#secondRow").append(giftDiv);
});