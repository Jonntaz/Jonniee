
   function add(){
document.getElementById("form1").style.display="block";


  }
   function deletes(s1){
var s=confirm("Are you sure you want to delete?");
if (s) {
	
	location.href="fruits.php?id="+s1;
}
else{

  }}
