<!DOCTYPE html>
<html>


<head>
    <meta charset = "utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>경희한의원</title>
    <link rel = 'stylesheet' href = './kyunghee/background.css'/>
    <link rel = 'stylesheet' href = './kyunghee/style.css'/>
</head>   


<body>
    <a href = './main.php'><img id = 'logo' src='./kyunghee/images/logo.png' alt='Kyunghee Oriental Clinic'></a>
            <form method='post' action = "login.php">
                <div><input id = 'patientName' type='text' placeholder = '  이름' autocomplete='off' required></div>
                <div><input id = 'patientTel' type='tel' placeholder = '  전화번호' autocomplete='off' required></div>
                <div><button id = 'enter' type="submit" >증상입력하기</button></div>
            </form>
                <div><span>처음 방문하셨습니까?</span>
                <a id ='join' href = './main2.html' target='_self'>환자등록</a></div>

</body>
</html>