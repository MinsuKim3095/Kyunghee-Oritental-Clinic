<!DOCTYPE html>
<html>


<head>
    <meta charset = "utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>경희한의원</title>
    <link rel = 'stylesheet' href = 'css\background.css'/>
    <link rel = 'stylesheet' href = 'css\style.css'/>
    <script type = "text/javascript">
    $(document).ready(function(){
        $('#enter').click(function(){
            var action = $('#Login').attr('action');
            var form_data = {
                join_patientName : $("#join_patientName").val(),
                join_patientTel : $("join_patientTel").val()
            };
            $.ajax({
                type:'POST',
                url:action,
                data:form_data,
                success:function(response){
                    if(response.trim() == 'success'){
                        sessionStorage.setItem('join_patientName',form_data.join_patientName);
                        $('#msg').html('<p>로그인성공!</p>')
                    }else{
                        $('#msg').html('<p>로그인실패!</p>');
                    }
                },
                error:function(){
                    $('#msg').html('<h2>error</h2>');
                }
            });
        });
    });
    /*$(document).ready(function(){
        $('#Login').submit(function(e){
            e.preventDefault();
            $.ajax({
                type:'POST',
                url:'http://apple3095.dothome.co.kr/lib/login',
                data:$(this).serialize(),
                success:function(result){
                    if(result=='success'){
                        alert("로그인 성공");
                        location.replace('http://apple3095.dothome.co.kr/main3')
                    }else if(result=='Fail:session'){
                        alert("세션 저장 실패");
                    }else if(result=='Fail:empty'){
                        alert("회원 정보가 없습니다. 회원가입을 해주세요.");
                    }
                },
                error:function(xtr,status,error){
                    alert(xtr+":"+status+":"+error);
                }
            });
        });
    });*/
    </script>
</head>   


<body>
    <a href = './index.php'><img id = 'logo' src='./images/logo.png' alt='Kyunghee Oriental Clinic'></a>
            <form id = 'Login' name = 'Login' action = './lib/login.php' method='post'>
                <div><input id = 'join_patientName' name='join_patientName' type='text' placeholder = '  이름' autocomplete='off' required></div>
                <div><input id = 'join_patientTel' name='join_patientTel'type='tel' placeholder = '  전화번호' autocomplete='off' required></div>
                <div><button id = 'enter' type="submit">증상입력하기</button></div>
            </form>
                <div><span>처음 방문하셨습니까?</span>
                <a id ='join' href = './main2.php' target='_self'>환자등록</a></div>

</body>
</html>