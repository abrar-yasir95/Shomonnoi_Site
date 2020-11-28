
function copyToClipboard(element, textData, data) {
    var $temp = $("<input>");
    $("body").append($temp);
    $temp.val($(element).text()).select();
    document.execCommand("copy");
    // console.log(data)
    // navigator.clipboard.readText().then(clipText =>
    //     document.getElementById("outbox").innerText = clipText);
    //
    // var pasteText = document.querySelector("#output");
    // pasteText.focus();
    // document.execCommand("paste");
    // console.log(pasteText.textContent);
    document.getElementById("output").innerHTML=textData;
    document.getElementById("outputModal").innerHTML=data;
    document.getElementById("outputModal").href='tel:'+data;

    // $("#output").find("p").html("asd");
    $temp.remove();
};

$('.custom-file-input').on('change', function() {
    let fileName = $(this).val().split('\\').pop();
    $(this).siblings('.custom-file-label').addClass('selected').html(fileName);
});


var app = document.getElementById('app');

var typewriter = new Typewriter(app, {
    loop: true
});

typewriter.typeString('ShomonnoiBD')
    .pauseFor(2500)
    .deleteAll()
    .typeString('সমন্বয় বাংলাদেশ')
    .pauseFor(2500)
    .start();



var images=new Array('img/landing_map.jpg','assets/img/bg2.jpg','assets/img/bg3.jpg');
var nextimage=0;
doSlideshow();
function doSlideshow(){
    if(nextimage>=images.length){nextimage=0;}
    $('#page-header')
        .css('background-image','url("'+images[nextimage++]+'")')
        .show(1000,function(){
            setTimeout(doSlideshow,2000);
        });
}


//
// $(document).ready(function() {
//     // $("#carousel").waterwheelCarousel({
//     //     // include options like this:
//     //     // (use quotes only for string values, and no trailing comma after last option)
//     //     // option: value,
//     //     // option: value
//     // });
//
//     var carousel = $("#carousel").waterwheelCarousel({
//         flankingItems: 3,
//         autoPlay:3000
//     });
//
//     $('#prev').bind('click', function () {
//         carousel.prev();
//         return false
//     });
//
//     $('#next').bind('click', function () {
//         carousel.next();
//         return false;
//     });
//
//
// });

var owl = $('.owl-carousel');
owl.owlCarousel({
    items:2,
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:4000,
    autoplayHoverPause:true,

    responsive:{
        280:{
            items:1
        },
        320:{
            items:2
        },
        480:{
            items:2
        },

        678:{
            items:3
        },

        960:{
            items:4
        }
    }
});
$('.play').on('click',function(){
    owl.trigger('play.owl.autoplay',[1000])
})
$('.stop').on('click',function(){
    owl.trigger('stop.owl.autoplay')
})
