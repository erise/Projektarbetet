


var image1 = new Image ()
image1.src="../css/pics/bildspel1.png"
var image2 = new Image ()
image2.src="../css/pics/bildspel2.png"
var image3= new Image ()
image3.src="../css/pics/bildspel6.png"
var image4= new Image ()
image4.src="../css/pics/bildspel9.jpg"


var step=1
var whichimage=1

function slideit() {
    
    document.images.slide.src=eval ("image"+step+".src");
    whichimage=step
    if(step<4)
    step++
    else
    step=1
    
    

    setTimeout("slideit()",5000)
}


slideit();

function slidelink(){
if (whichimage==1)
window.location="utbildningar.html"
else if (whichimage==2)
window.location="utbildningar.html"
else if (whichimage==3)
window.location="utbildningar.html"
else if (whichimage==4)
window.location="utbildningar.html"
}