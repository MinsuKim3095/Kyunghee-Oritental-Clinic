$(function(){
    $("#file_ref").on('input', function(){
        if($("#file_ref").val()=="")
            $("#refButton").attr("disabled",true);
        else
            $("#refButton").attr("disabled",false);
        });
    });

$(function(){
     $("#file_you").on('input', function(){
        if($("#file_you").val()=="")
            $("#youButton").attr("disabled",true);
        else
            $("#youButton").attr("disabled",false);
        });
    });


$(function(){
    $("#file_you").on('input', function(){
        var fileCheck = $("#file_ref").val();
        var fileCheck2 = $("#audio_ref").val();
        if(fileCheck && fileCheck){
            $("#scoreButton").attr("disabled",false);
        }else{
            $("#scoreButton").attr("disabled",true);
        };
    });
});