
   function adds(){
document.getElementById("form1").style.display="block";


  }
   function deletes(s1){
var s=confirm("Are you sure you want to delete?");
if (s) {
	
	location.href="connect1.php?id="+s1;
}
else{

  }}
