
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
