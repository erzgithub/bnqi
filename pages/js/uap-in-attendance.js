$(document).ready(function(){
    var myVar = setInterval(function() {
        myTimer() }, 1000);
        function myTimer() {
            var d = new Date();
            var t = d.toLocaleTimeString();
            document.getElementById("date").innerHTML = t;
        }
    function check() {
        var code = $("#barcode").val();
        if (code) 
            $.ajax({
                type:"post",
                url: "checker.php",
                async: true,
                data:{code:code},
                success: function(html){
                    alert(html);
                        $("#barcode").val("");
                        $("#barcode").focus();
                }
            });
    }
    var typingTimer;
        var doneTypingInterval = 800;
        $("#barcode").keyup(function(e){
            clearTimeout(typingTimer);
            typingTimer = setTimeout(check, doneTypingInterval);
        });

});