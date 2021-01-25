

new fullpage('.home-fullpage', {
    
  
    
    
})



function f(){
    document.getElementsByClassName("test").style.display = 'block';
}





function init(){
	new SmoothScroll(document,250,10)
}

function SmoothScroll(target, speed, smooth) {
	if (target === document)
		target = (document.scrollingElement 
              || document.documentElement 
              || document.body.parentNode 
              || document.body) // cross browser support for document scrolling
      
	var moving = false
	var pos = target.scrollTop
  var frame = target === document.body 
              && document.documentElement 
              ? document.documentElement 
              : target // safari is the new IE
  
	target.addEventListener('mousewheel', scrolled, { passive: false })
	target.addEventListener('DOMMouseScroll', scrolled, { passive: false })

	function scrolled(e) {
		e.preventDefault(); // disable default scrolling

		var delta = normalizeWheelDelta(e)

		pos += -delta * speed
		pos = Math.max(0, Math.min(pos, target.scrollHeight - frame.clientHeight)) // limit scrolling

		if (!moving) update()
	}

	function normalizeWheelDelta(e){
		if(e.detail){
			if(e.wheelDelta)
				return e.wheelDelta/e.detail/40 * (e.detail>0 ? 1 : -1) // Opera
			else
				return -e.detail/3 // Firefox
		}else
			return e.wheelDelta/120 // IE,Safari,Chrome
	}

	function update() {
		moving = true
    
		var delta = (pos - target.scrollTop) / smooth
    
		target.scrollTop += delta
    
		if (Math.abs(delta) > 0.5)
			requestFrame(update)
		else
			moving = false
	}

	var requestFrame = function() { // requestAnimationFrame cross browser
		return (
			window.requestAnimationFrame ||
			window.webkitRequestAnimationFrame ||
			window.mozRequestAnimationFrame ||
			window.oRequestAnimationFrame ||
			window.msRequestAnimationFrame ||
			function(func) {
				window.setTimeout(func, 1000 / 50);
			}
		);
	}()
}



function changeImage(className) {



    console.log(document.getElementById("likes-one"));

    if (document.getElementById(className).getAttribute("src") == "../../../images/icon/cwishlist.png") 
    {
        
        document.getElementById(className).src = "../../../images/icon/clike.png";
    }
    else if (document.getElementById(className).getAttribute("src") == "../../../images/icon/clike.png") 
    {
        document.getElementById(className).src = "../../../images/icon/cwishlist.png";
    }

    else
    document.getElementById(className).src = "../../../images/icon/cwishlist.png";
}







function changeImage1(className) {

    console.log(document.getElementById("likes-one"));

    if (document.getElementById(className).getAttribute("src") == "./images/icon/cwishlist.png") 
    {
        document.getElementById(className).src = "./images/icon/clike.png";
    }
    else if (document.getElementById(className).getAttribute("src") == "./images/icon/clike.png") 
    {
        document.getElementById(className).src = "./images/icon/cwishlist.png";
    }

    else
    document.getElementById(className).src = "./images/icon/cwishlist.png";
}





















function popp(){
    console.log("sfgdssg");
    document.getElementsByClassName("profile")[0].style.display = "flex";
    document.getElementsByClassName("backlock")[0].style.display = "flex";

}

function pop(){
    console.log("sfgdssg");
    document.getElementsByClassName("sign")[0].style.display = "flex";
}



function poppout(){
    document.getElementsByClassName("profile")[0].style.display = "none";
    document.getElementsByClassName("backlock")[0].style.display = "none";

}

function cancel(){
    document.getElementsByClassName("sign")[0].style.display = "none";
}

function search(){
    document.getElementsByClassName("search-bar")[0].style.display = "flex";
    document.getElementsByClassName("click-out")[0].style.display = "flex";

}

function searchout(){
    document.getElementsByClassName("search-bar")[0].style.display = "none";
    document.getElementsByClassName("click-out")[0].style.display = "none";
}







function quickviewclose(){
    document.getElementsByClassName("quick-view")[0].style.display = "none";
  

}


function quickviewclose1(className){

    var captureClassName = className;
    var productid = captureClassName.substring(0,12); 
    document.getElementsByClassName(productid)[0].style.display = "none";
    

}

















function formalshirt1(className){


    var captureClassName = className;
    var productid = captureClassName.substring(0,19); 
    var loc = captureClassName.substring(20,28); 

    var productName = captureClassName.substring(29,46); 

    
    console.log(productid);


    document.getElementById(productid).src="../../../images/"+loc+"/"+productName+".png";
}


function data(className){

  
    var captureClassName = className;
    var productid = captureClassName.substring(0,19); 
    var loc = captureClassName.substring(20,28); 

  
    
    console.log(productid);
   

   
    
}

function rr(className,a){

    
    var captureClassName = className;
    var productid = captureClassName.substring(0,19); 
    var loc = captureClassName.substring(20,28); 
   
    var productName = captureClassName.substring(29,46); 
    var bool = a;
    
    console.log(bool);


    document.getElementById(productid).src=bool;
}


function formalshirt11(className){

    var bool = "<?php echo $img2 ?>";
    var captureClassName = className;
    var productid = captureClassName.substring(0,19); 
    var loc = captureClassName.substring(20,28); 

    var productName = captureClassName.substring(29,46); 

    
    console.log(bool);


    document.getElementById(productid).src=bool;
}




function formalshirtqv(className){

    var captureClassName = className;
    var productid = captureClassName.substring(0,17); 
    var loc = captureClassName.substring(18,26); 

    
   
    document.getElementsByClassName("quick-view")[0].style.display = "flex";
}
  

function formalshirtqv1(className){

    var captureClassName = className;
    var productid = captureClassName.substring(0,17); 
    var loc = captureClassName.substring(18,26); 

    
   
    document.getElementsByClassName("quick-view-1")[0].style.display = "flex";

    document.getElementById("change------------1").src="./images/"+loc+"/"+productid+".png";
}

function formalshirtqv2(className){

    var captureClassName = className;
    var productid = captureClassName.substring(0,17); 
    var loc = captureClassName.substring(18,26); 

    
   
    document.getElementsByClassName("quick-view-2")[0].style.display = "flex";

    document.getElementById("change------------1").src="./images/"+loc+"/"+productid+".png";
}

function formalshirtqv3(className){

    var captureClassName = className;
    var productid = captureClassName.substring(0,17); 
    var loc = captureClassName.substring(18,26); 

    
   
    document.getElementsByClassName("quick-view-3")[0].style.display = "flex";

    document.getElementById("change------------1").src="../../../images/"+loc+"/"+productid+".png";
}

function formalshirtqv4(className){

    var captureClassName = className;
    var productid = captureClassName.substring(0,17); 
    var loc = captureClassName.substring(18,26); 

    
   
    document.getElementsByClassName("quick-view-4")[0].style.display = "flex";

    document.getElementById("change------------1").src="../../../images/"+loc+"/"+productid+".png";
}

function formalshirtqv5(className){

    var captureClassName = className;
    var productid = captureClassName.substring(0,17); 
    var loc = captureClassName.substring(18,26); 

    
   
    document.getElementsByClassName("quick-view-5")[0].style.display = "flex";

    document.getElementById("change------------1").src="../../../images/"+loc+"/"+productid+".png";
}

function formalshirtqv6(className){

    var captureClassName = className;
    var productid = captureClassName.substring(0,17); 
    var loc = captureClassName.substring(18,26); 

    
   
    document.getElementsByClassName("quick-view-6")[0].style.display = "flex";

    document.getElementById("change------------1").src="../../../images/"+loc+"/"+productid+".png";
}

function formalshirtqv7(className){

    var captureClassName = className;
    var productid = captureClassName.substring(0,17); 
    var loc = captureClassName.substring(18,26); 

    
   
    document.getElementsByClassName("quick-view-7")[0].style.display = "flex";

    document.getElementById("change------------1").src="../../../images/"+loc+"/"+productid+".png";
}

function formalshirtqv8(className){

    var captureClassName = className;
    var productid = captureClassName.substring(0,17); 
    var loc = captureClassName.substring(18,26); 

    
   
    document.getElementsByClassName("quick-view-8")[0].style.display = "flex";

    document.getElementById("change------------1").src="../../../images/"+loc+"/"+productid+".png";
}

function formalshirtq(className){

    



    var captureClassName = className;
    var productid = captureClassName.substring(0,17); 
    var loc = captureClassName.substring(18,26); 

    console.log(productid);
   
    document.getElementsByClassName("quick-view")[0].style.display = "flex";

    document.getElementById("change------------1").src="./images/"+loc+"/"+productid+".png";
}


function size(className){

    var size = className;

    var transform = document.getElementById(size).style.border;
 
    if(transform == "0.5px solid rgb(187, 187, 187)")
    {
     document.getElementById(size).style.border = "3px solid black";
    }
    else
    document.getElementById(size).style.border = "0.5px solid rgb(187, 187, 187)";
}






















































function plus(){
    var transform = document.getElementById("number").innerHTML;
    transform = +transform + 1;
    document.getElementById("number").innerHTML = transform;

 
}

function minus(){


    var transform = document.getElementById("number").innerHTML;

    if(transform > 0){
        transform = +transform - 1;
        document.getElementById("number").innerHTML = transform;

    }
 
}







function sizefilter(className){

    var size = className;

    
   


    if (document.getElementById(size).getAttribute("src") == "../../../images/size/"+size+"-b.png") 
    {
        document.getElementById(size).src = "../../../images/size/"+size+"-bl.png";
    }
    else if (document.getElementById(size).getAttribute("src") == "../../../images/size/"+size+"-bl.png") 
    {
        document.getElementById(size).src = "../../../images/size/"+size+"-b.png";
    }

    else
    document.getElementById(size).src = "../../../images/size/"+size+"-b.png";
}




function select(className){
   
    var transform = document.getElementById(className).style.transform;
 
    if(transform ==  "scale(1)"){
     document.getElementById(className).style.transform = "scale(1.3)";
    }
 
    else
    document.getElementById(className).style.transform = "scale(1)";
 
     
 }
function test(ID,NAME, PRICE, IMAGE){

    side(ID,NAME, PRICE, IMAGE)

}

 function side(ID,NAME, PRICE, IMAGE){
 
    console.log("sdffsaddfsf");
    
    
     
    
        
        var div = document.createElement('div');
        div.setAttribute('class', 'cartbox-single');
        div.setAttribute('id', ID);
    
        var div2 = document.createElement('div');
        div2.setAttribute('class', 'cartbox-left');
    
        var img = document.createElement('img');
    
        img.setAttribute('src', IMAGE);
        img.setAttribute('id', 'cartbox-img');
        div2.appendChild(img);
        div.appendChild(div2);
    
        var div3 = document.createElement('div');
        div3.setAttribute('class', 'cartbox-right');
        div.appendChild(div3);
    
        var div4 = document.createElement('div');
        div4.setAttribute('class', 'cartbox-name');
        div3.appendChild(div4);
    
        var h = document.createElement("h5");
        var t = document.createTextNode(NAME); 
        h.appendChild(t); 
        div4.appendChild(h);
    
        var div5 = document.createElement('div');
        div5.setAttribute('class', 'cartbox-right-bottom');
        div3.appendChild(div5);
    
        var div6 = document.createElement('div');
        div6.setAttribute('class', 'cartbox-quantity');
        div5.appendChild(div6);
        var a = document.createElement("h5");
        var b = document.createTextNode("QUANTITY:"); 
        a.setAttribute('id', ID+'qty');
    
        a.appendChild(b); 
        div6.appendChild(a);
    
        var c = document.createElement("h5");
       var er= 1;
        var d = document.createTextNode(er); 
        c.appendChild(d); 
        div6.appendChild(c);
    
        var div7 = document.createElement('div');
        div7.setAttribute('class', 'cartbox-price');
        div5.appendChild(div7);
    
        var e = document.createElement("h5");
        var f = document.createTextNode("PRICE:"); 
        e.appendChild(f); 
        div7.appendChild(e);
    
        var g = document.createElement("h5");
        var h = document.createTextNode("$"+PRICE); 
        g.appendChild(h); 
        div7.appendChild(g);
        
       
       document.getElementsByClassName("cartlist")[0].appendChild(div);
      
        
   
   
       
        var f = document.getElementById("cartboxamount").innerHTML= "$"+PRICE;
    
    
    
    
        
        
        
    
    
    }




    function removeadmin(){
       
        document.getElementById("remmove-admin").style.display = "block";
    
    }

    



    function removeadminclose(){
       
        document.getElementById("remmove-admin").style.display = "none";
    
    }

    
    function removeuser(){
       
        document.getElementById("remmove-user").style.display = "block";
    
    }

    



    function removeuserclose(){
       
        document.getElementById("remmove-user").style.display = "none";
    
    }

    function updateadmin(){
       
        document.getElementById("updateadmin").style.display = "block";
    
    }
    
    function updateclose(){
      
       document.getElementById("updateadmin").style.display = "none";
    
    }

    function updateuser(){
       
        document.getElementById("updateuser").style.display = "block";
    
    }
    
    function updatecloseu(){
      
       document.getElementById("updateuser").style.display = "none";
    
    }
    

    function removeitem(){
       
        document.getElementById("removeitem").style.display = "block";
    
    }

    function rclose(){
      
       document.getElementById("removeitem").style.display = "none";
   
   }

   
   function updateitem(){
       
    document.getElementById("updateitem").style.display = "block";

}

function uclose(){
  
   document.getElementById("updateitem").style.display = "none";

}


    function addadmin(){
      
        document.getElementById("addpaneladmin").style.display = "block";
    
    }

    


function adminnclose(){
    
    document.getElementById("addpaneladmin").style.display = "none";

}

function adduser(){
      
    document.getElementById("addpaneluser").style.display = "block";

}




function usernclose(){

document.getElementById("addpaneluser").style.display = "none";

}

    function additem(){
       
         document.getElementById("addpanelitem").style.display = "block";
     
     }

     function iclose(){
       
        document.getElementById("addpanelitem").style.display = "none";
    
    }


  

    
    function  closeadminlist()
    {
   
        document.getElementById("adminview").style.display = "none";
    }
    
        
    function  openadminlist()
    {
       
        document.getElementById("adminview").style.display = "block";
    }

    
    function  closeuserlist()
    {
   
        document.getElementById("userview").style.display = "none";
    }
    
        
    function  openuserlist()
    {
       
        document.getElementById("userview").style.display = "block";
    }






function closeitem(){
   
    document.getElementById("itemview").style.display = "none";
}

    
function openitem(){
   
    document.getElementById("itemview").style.display = "block";
}


    

function admin(){

    document.getElementsByClassName("admin-drop")[0].style.display = "flex";
    document.getElementsByClassName("adminout")[0].style.display = "flex";

}

function adminout(){

    document.getElementsByClassName("admin-drop")[0].style.display = "none";
    document.getElementsByClassName("adminout")[0].style.display = "none";

}

function adminc(){

    document.getElementsByClassName("admin-drop-c")[0].style.display = "flex";
    document.getElementsByClassName("adminoutc")[0].style.display = "flex";

}

function adminoutc(){

    document.getElementsByClassName("admin-drop-c")[0].style.display = "none";
    document.getElementsByClassName("adminoutc")[0].style.display = "none";

}
 
function cartboxout(){
    document.getElementsByClassName("cartbox")[0].style.display = "none";
    document.getElementsByClassName("cartbox_back")[0].style.display = "none";
}
 
function mcartboxout(){
    document.getElementsByClassName("cartbox")[0].style.display = "none";
    document.getElementsByClassName("cartbox_back")[0].style.display = "none";
}

function rt(Id,name, price, image){
 
console.log("sdffsaddfsf");

    localStorage.setItem(sname, name);
   var NAME = localStorage.getItem(sname); 

   localStorage.setItem(sprice, price);
   var PRICE = localStorage.getItem(sprice); 

   localStorage.setItem(simage, image);
   var IMAGE = localStorage.getItem(simage); 

   localStorage.setItem(sid, Id);
   var ID = localStorage.getItem(sid); 


    
    var div = document.createElement('div');
    div.setAttribute('class', 'cartbox-single');
    div.setAttribute('id', ID);

    var div2 = document.createElement('div');
    div2.setAttribute('class', 'cartbox-left');

    var img = document.createElement('img');

    img.setAttribute('src', IMAGE);
    img.setAttribute('id', 'cartbox-img');
    div2.appendChild(img);
    div.appendChild(div2);

    var div3 = document.createElement('div');
    div3.setAttribute('class', 'cartbox-right');
    div.appendChild(div3);

    var div4 = document.createElement('div');
    div4.setAttribute('class', 'cartbox-name');
    div3.appendChild(div4);

    var h = document.createElement("h5");
    var t = document.createTextNode(NAME); 
    h.appendChild(t); 
    div4.appendChild(h);

    var div5 = document.createElement('div');
    div5.setAttribute('class', 'cartbox-right-bottom');
    div3.appendChild(div5);

    var div6 = document.createElement('div');
    div6.setAttribute('class', 'cartbox-quantity');
    div5.appendChild(div6);
    var a = document.createElement("h5");
    var b = document.createTextNode("QUANTITY:"); 
    a.setAttribute('id', Id+'qty');

    a.appendChild(b); 
    div6.appendChild(a);

    var c = document.createElement("h5");
   var er= 1;
    var d = document.createTextNode(er); 
    c.appendChild(d); 
    div6.appendChild(c);

    var div7 = document.createElement('div');
    div7.setAttribute('class', 'cartbox-price');
    div5.appendChild(div7);

    var e = document.createElement("h5");
    var f = document.createTextNode("PRICE:"); 
    e.appendChild(f); 
    div7.appendChild(e);

    var g = document.createElement("h5");
    var h = document.createTextNode("$"+PRICE); 
    g.appendChild(h); 
    div7.appendChild(g);
    
   
   document.getElementsByClassName("cartlist")[0].appendChild(div);
    var  q= "q"+Id;
    q = parseFloat(price);
    var total = [];
    total.unshift(0);
   
        total.push(q);
    
    
   
    var sum = total.reduce(function(a, b){
        return a + b;
    }, 0);
    console.log(total);
    var f = document.getElementById("cartboxamount").innerHTML= "$"+sum;




    
    var NAME =name;
    localStorage.setItem("name", NAME);

    var IMG = image;
    localStorage.setItem("image",IMG);

    var PRICE = price;
    localStorage.setItem("price",PRICE);

    var ID = Id;
    localStorage.setItem("id",ID);

    

     
   for(let i = 0; i <localStorage.length; i++){
       const key = localStorage.key(i);
       const value = localStorage.getItem(key);
   }

console.log(localStorage)
    


}

function quantity(id){

    document.getElementById(id+'qty').innerHTML.h5= er+1;
}

function tr(Id,name, price, image){



    var aname = localStorage.getItem(Id);
    var aimage = localStorage.getItem(Id);
    var aId = localStorage.getItem(Id);
    var aprice = localStorage.getItem(Id);
    
    
    
    
    
    
    
    
    
    var div8 = document.createElement('div');
    div8.setAttribute('class', 'cart-cont-single');
    div8.setAttribute('id', aId);
    
    
    var div9 = document.createElement('div');
    div9.setAttribute('class', 'ccs-image');
    div8.appendChild(div9); 
    
    var div10 = document.createElement('img');
    div10.setAttribute('src', aimage);
    div9.appendChild(div10); 
    
    var div11 = document.createElement('div');
    div11.setAttribute('class', 'ccs-name');
    div8.appendChild(div11); 
    
    var div12 = document.createElement('h4');
    var b = document.createTextNode(aname); 
    div12.appendChild(b); 
    div11.appendChild(div12); 
    
    
    var div13 = document.createElement('div');
    div13.setAttribute('class', 'ccs-quantity');
    div8.appendChild(div13); 
    
    var div14 = document.createElement('button');
    var z = document.createTextNode('-'); 
    div14.appendChild(z);
    div13.appendChild(div14);
    
    var div15 = document.createElement('h5');
    var zz = document.createTextNode('500'); 
    div15.appendChild(zz);
    div13.appendChild(div15);
    
    var div16 = document.createElement('button');
    var zzz = document.createTextNode('+'); 
    div16.appendChild(zzz);
    div13.appendChild(div16);
    
    
    
    var div17 = document.createElement('div');
    div17.setAttribute('class', 'ccs-price');
    div8.appendChild(div17); 
    
    
    var div18 = document.createElement('h5');
    var zza = document.createTextNode(aprice + 'for/each'); 
    div18.appendChild(zza);
    div17.appendChild(div18);
    
    
    var div19 = document.createElement('div');
    div19.setAttribute('class', 'ccs-remove');
    
    var div20 = document.createElement('button');
    div20.setAttribute('id', 'ccs-remove'); 
    
    div19.appendChild(div20);
    
    div8.appendChild(div19); 
    
    
    
    document.getElementById("cart-contlist").appendChild(div8);
    console.log(document.getElementById("cart-contlist"));
    
     
    
    
    
    
    
    
    }


function cartbox(){

    document.getElementsByClassName("cartbox")[0].style.display = "flex";
    document.getElementsByClassName("cartbox_back")[0].style.display = "flex";

}



function mcartbox(){

    document.getElementsByClassName("cartbox")[0].style.display = "flex";
    document.getElementsByClassName("cartbox_back")[0].style.display = "flex";

}
















