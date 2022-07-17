$( document ).ready(function() {
    var array = [1, 200.1]
    $.ajax({
        method: "POST",
        url: "/ajax.php",
        dataType: "json",
        data: { step: "one", params: array}
    })
        .done(function( res ) {
            if(res.status ==1){
                $("#test-button").removeAttr("disabled")
            }else if(res.status == 0){
                $("#test-button").hide();
                $("#test-main-result").text("данные не найдены");
            }
            if(res.BarCode){
                $("#test-modal .modal-body #test-modal-result span.text").text("ваш трек");
                $("#test-modal .modal-body #test-modal-result span.bar").text(res.BarCode);
            }

        });
});

function sendAjax(){
    var input= $("#test-input").val()
    var bar= $("#test-modal-result span.bar").text()
    var array = [input, bar]
    $.ajax({
        method: "POST",
        url: "/ajax.php",
        dataType: "json",
        data: { step: "two", ans: array}
    }).done(function( res ) {
        if(res.status ==1){
            $("#test-button").removeAttr("disabled")
        }else if(res.status == 0){
            $("#test-button").hide();
            $("#test-main-result").text("данные не найдены");
        }
        if(res.BarCode){
            $("#test-modal .modal-body #test-modal-result span.bar").hide();
            $("#test-modal .modal-body #test-modal-result span.text").text(res.input);
            $("#test-modal #test-input").val("")
        }
    });
}
