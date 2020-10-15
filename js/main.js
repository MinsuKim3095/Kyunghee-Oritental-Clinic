function colorChange(){
    var color =['rgb(157,28,32,0.75);' , '#b8b8b8;'];

    var num = Math.floor(Math.random() * color.length);
    var bodyTag = document.getElementById('colorCont');
    bodyTag.style.backgroundColor = color[num];
}