<!DOCTYPE html>
<html>


<head>
    <?php
        session_start();
        ?>
    <meta charset = "utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>경희한의원</title>
    <link rel = 'stylesheet' href = 'css/background.css'/>
    <link rel = 'stylesheet' href = 'css/style2.css'/>
    <script type = 'text/javascript' src='./js/selectSymptom.js'>
    $(document).ready(function(){
        $('#selectEnter').click(function(){
            var action = $('#selectEnter').attr('action');
            var form_data = {
                select1 : $("#select1").val(),
                select2 : $("#select2").val(),
                select3 : $("#select3").val(),
                select4 : $("#select4").val(),
                select5 : $("#select5").val(),
                select6 : $("#select6").val(),
                select7 : $("#select7").val(),
                select8 : $("#select8").val()
            };
            $.ajax({
                type:'POST',
                url:action,
                data:form_data,
                success:function(response){
                    if(response.trim() == 'success'){
                        $('#msg').html('<p>증상입력성공!</p>')
                    }else{
                        $('#msg').html('<p>증상입력실패!</p>');
                    }
                },
                error:function(){
                    $('#msg').html('<h2>error</h2>');
                }
            });
        });
    });
</script>
</head>   


<body id = 'colorCont'>
    <main>
        <a href = './index.php'><img id = 'logo3' src='./images/logo.png' alt='Kyunghee Oriental Clinic'></a>
        <div id = selectGuide>해당하는 사항만 클릭해주세요</div>
        <form id = 'selectSymptom' name = 'selectSymptom' action = './lib/inputSymptom.php' method = 'post'>
            <button type = 'button' id = 'select1'  name = 'select1' onclick = 'valueChange1()' value = '0'>고혈압</button>
            <button type = 'button' id = 'select2'  name = 'select2' onclick = 'valueChange2()' value = '0'>당뇨</button>
            <button type = 'button' id = 'select3'  name = 'select3' onclick = 'valueChange3()' value = '0'>간염</button>
            <button type = 'button' id = 'select4'  name = 'select4' onclick = 'valueChange4()' value = '0'>알레르기</button>
            <button type = 'button' id = 'select5'  name = 'select5' onclick = 'valueChange5()' value = '0'>수술이력</button>
            <button type = 'button' id = 'select6'  name = 'select6' onclick = 'valueChange6()' value = '0'>복용약</button>
            <button type = 'button' id = 'select7'  name = 'select7' onclick = 'valueChange7()' value = '0'>음주</button>
            <button type = 'button' id = 'select8'  name = 'select8' onclick = 'valueChange8()' value = '0'>흡연</button>
            <div><button id = 'selectEnter' type="submit">제출하기</button></div>
</form>
</body>
</html>