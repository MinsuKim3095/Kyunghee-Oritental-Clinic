<!DOCTYPE html>
<html>


<head>
    <meta charset = "utf-8">
    <title>경희한의원</title>
    <link rel = 'stylesheet' href = 'css/background.css'/>
    <link rel = 'stylesheet' href = 'css/style2.css'/>
</head>   


<body id = 'colorCont'>
    <main>
        <a href = 'http://apple3095.dothome.co.kr/index.html'><img id = 'logo3' src='./images/logo.png' alt='Kyunghee Oriental Clinic'></a>
        <div id = selectGuide>해당하는 사항만 클릭해주세요</div>
        <script type='text/javascript' src='selectSymptom.js'></script>
        <button id = select1 onclick = 'colorChange()'>고혈압</button>
        <button id = select2 onclick = 'colorChange()'>당뇨</button>
        <button id = select3 onclick = 'colorChange()'>간염</button>
        <button id = select4 onclick = 'colorChange()'>알레르기</button>
        <button id = select5 onclick = 'colorChange()'>수술이력</button>
        <button id = select6 onclick = 'colorChange()'>복용약</button>
        <button id = select7 onclick = 'colorChange()'>음주</button>
        <button id = select8 onclick = 'colorChange()'>흡연</button>
        <div><button id = selectEnter type="button" onclick="location.href='./main4.php' ">제출하기</button></div>
</body>
</html>