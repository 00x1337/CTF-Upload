<?php  


setcookie('id', rand(1000,9999), time() + (86400 * 30), "/");

if(!isset($_GET["admin"]) && isset($_COOKIE['id'])){
    
?>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
function showHint(str) {
    var i = 0;
    $.post("check.php",
    {
      name: str,
    },
    function(data,status){

        document.getElementById("ret").innerHTML = data ;

    });

}
</script>
</head>
<body>
    <center>
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTvRaF6RiXPUqaUwK_rfgTPmJehpf4Kplhbcg&usqp=CAU" alt="">
        <br>
        <br>
<label for="fname">GO to admin :</label>
<input type="text" id="fname" name="fname" onkeyup="showHint(this.value)">
<p>result : <span id="ret"></span></p>
</center>
</body>
</html>
<?php 
}elseif(isset($_GET["admin"]) && $_COOKIE['id']  == 0){
?>

<form class="form-inline" action="save.php" enctype="multipart/form-data" method="POST">
    <label for="userfile">Upload a file: </input>
    <input name="upload_file" id="userfile" type="file" />
    <br />
    Name :
    <input type="text" id="fname" name="save_name" >

    <input type="submit" class="btn btn-primary" id="submit-btn" value="Send File" />
  </form>
<?php }?>