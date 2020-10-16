<!DOCTYPE html>
<html>


<head>
    <meta charset = "utf-8">
    <title>경희한의원</title>
    <link rel = 'stylesheet' href = 'css\background.css'/>
    <link rel = 'stylesheet' href = 'css\style.css'/>
</head>   


<body>
    <main>
        <form method='post' action = "./lib/join.php">
            <a href = './main1.html'><img id = 'logo2' src='./images/logo.png' alt='Kyunghee Oriental Clinic'></a>
                <div><input id = 'join_patientName' name = 'join_patientName' type='text' placeholder = ' 이름' required></div>
                <div><input id = 'join_patientTel' name ='join_patientTel' type = 'tel' placeholder = ' 전화번호' required></div>
                <div><input id = 'join_addressSearch' name = 'join_addressSearch' type = 'text' placeholder = ' 한의원 주소를 검색하세요' required></div>
                <div><button id = 'join_addressSearch2' name = 'join_addressSearch2' type = 'button' onclick = "locatin.href='./main5.html'">주소 검색</div>
                <div><input id = 'join_juminNumber' name = 'join_juminNumber' type = 'text' placeholder = ' 주민등록번호'></div>
                <div><input id = 'join_recommendPatient' name = 'join_recommendPatient' type = 'text' placeholder = ' 소개환자(선택)'></div>
                <div><button id = 'join_enter' type="submit" a href='http://apple3095.dothome.co.kr/main3.php'>증상입력하기</button></div>
        </form>
</body>
</html>