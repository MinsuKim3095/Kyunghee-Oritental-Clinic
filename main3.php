<!DOCTYPE html>
<html>


<head>
    <meta charset = "utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>경희한의원</title>
    <link rel = 'stylesheet' href = 'css/background.css'/>
    <link rel = 'stylesheet' href = 'css/style2.css'/>
</head>   


<body id = 'colorCont'>
    <main>
        <a href = 'http://apple3095.dothome.co.kr/index.html'><img id = 'logo3' src='./images/logo.png' alt='Kyunghee Oriental Clinic'></a>
        <div id = selectGuide>해당하는 사항만 클릭해주세요</div>
        <script type='text/javascript' src='selectSymptom.js'></script>
        <button id = select1 type = submit class = stylebutton onclick = 'colorChange()'>고혈압</button>
        <button id = select2 type = submit class = stylebutton onclick = 'colorChange()'>당뇨</button>
        <button id = select3 type = submit class = stylebutton onclick = 'colorChange()'>간염</button>
        <button id = select4 type = submit class = stylebutton onclick = 'colorChange()'>알레르기</button>
        <button id = select5 type = submit class = stylebutton onclick = 'colorChange()'>수술이력</button>
        <button id = select6 type = submit class = stylebutton onclick = 'colorChange()'>복용약</button>
        <button id = select7 type = submit class = stylebutton onclick = 'colorChange()'>음주</button>
        <button id = select8 type = submit class = stylebutton onclick = 'colorChange()'>흡연</button>
        <div><button id = selectEnter type="button" onclick="location.href='./main4.php' ">제출하기</button></div>
</body>
</html>