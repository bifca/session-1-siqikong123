<html>
<head>
  <title>weather</title>
<script>
function showFilm(str) {
  if (str=="") {
    document.getElementById("txtHint").innerHTML="";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("txtHint").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","test.php?q="+str,true);
  xmlhttp.send();
}
</script>
</head>
<body>

<form>
Select a city:
<select name="cds" onchange="showweather(this.value)">
<option value="Beijing">Beijing</option>
<option value="Wuhan">Wuhan</option>
<option value="Shanghai">Shanghai</option>
<option value="Tokyo">Tokyo</option>
<option value="London">London</option>
<option value="Birmingham">Birmingham</option>
<option value="New York">New York</option>
<option value="Los Angeles">Los Angeles</option>
<option value="Sydney">Sydney</option>
</select>
</form>


</body>
</html>
