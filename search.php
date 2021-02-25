
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<style type="text/css">
		#search{
			width: 60%;
			margin-left: 20%;
			margin-right: 20%;
			height: 30px;
			border-radius: 5px;
			font-size: 16px;
		}
		#child{
			background-color: #efefef;
			margin-left: 20%;
			width: 60%;
			margin-top: -10px;
		}
		#pa{
			margin-left: 10px;
			color: black;
			font-size: 15.4px;
			margin-bottom: 5px;
		}
	</style>
<div id="parent">
<input type="text" placeholder="search here" name="search" id="search" onkeyup="return search1(this);">
</div>
<div id="child"></div>
</body>
<script type="text/javascript">
	var child=document.getElementById("child");
	var search=document.getElementById("search").value;
	var ar=new Array();
	var str="get from site";
ar.push(str+"meals");
ar.push(str+"about");
var ar2=new Array();
function search1(){
	var child=document.getElementById("child");
	var search=document.getElementById("search").value;
	child.innerHTML="";
for (var i = 0; i < ar.length; i++) {
	if (ar[i].includes(search)) {
		ar2.push(ar[i])
	}
}
for (var i = 0; i < ar2.length; i++) {
	var p=document.createElement("p");
	p.innerHTML=ar2[i];
	p.setAttribute("onclick","return loadpage(this);");
	p.setAttribute("id","pa");
	child.appendChild(p);
}
if (ar2.length==0) {
	var p=document.createElement("p");
	p.innerHTML="No item matches you search";
	p.setAttribute("onclick","return loadpage(this);");
	p.setAttribute("id","pa");
	child.appendChild(p);
}
//child.style.display="block";
}

function loadpage(){
	for (var i = 0; i < ar2.length; i++) {
		if (ar2[i].includes("about")) {
			window.location.replace("home.php");
		}
	}
}
</script>
</html>