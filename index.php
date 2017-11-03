<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> <style>
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">    
html *
{
   font-size: 16px; !important;
   color: forestgreen;
    font-family: 'Open Sans', sans-serif;
    
}    
body {
    background-image: url(anxiety1.jpg);
    background-size: 100% 100%;
    background-repeat: no-repeat;
    background-attachment: fixed;
    
}    
#big {
    width: 360px;
    height: flex;
    display: none;
    background-color: transparent;
    border: 1px solid black;
    border-radius: 3px;
    position: absolute;
    padding: 8px;
    padding-top: 3px;
    margin: 0px auto;
}  
input[type=text], select {
    background-color: transparent;
    width: 71.8%;
    height: 27px;
    
    border-bottom: 1px solid black;
    border-left: none;
    border-right: none;
    border-top: none;
    border-radius: 0px;
    box-sizing: border-box;
    color: white;
}
input[type=text]:focus {
    border-bottom: 1px solid black;
    outline: none;
}
input[type=submit] {
    width: 100%;
    background-color: #45a049;
    color: white;
    padding: 0px;
    border: 1px solid black;
    border-radius: 2px;
    cursor: pointer;
}
input[type=submit]:hover {
    background-color: #45a049;
    border-color:cornflowerblue;
}
.avatarDiv {
    height: 50px;
    width: 52px;
    border: 1px solid black;
    display: inline-block;
    cursor:pointer;
}
.avatarDiv:hover {
    border-color:cornflowerblue;
    border-width: 1px;
}    
#avatarContainer {
    padding: 5px;
    padding-top: 5px;
    display: none;
    height: auto;
}
#choose {
    width: 100%;
    float: right;
    height: 100%;
    color:forestgreen;
    cursor:pointer;
    margin-top: 2px;
    margin-bottom: 2px;
    
}
label {
    width: 27%;
    height: 100%;
    border: none;
    color:forestgreen;
    cursor:pointer;
    margin-top: 5px; 
}
#label2 {
    width: 100%;
    height: 100%;
    border: none;
    color:forestgreen;
    cursor:pointer;
    margin-top: 5px;
    padding-right: 5px;
}
.col-sm-4 {
    top: 25%;
    display:flex;
    justify-content: center;
}
.filler {
    height: 200px;
    width: 100%;
    clear:both;
}    

</style>    
<script>
$(document).ready(function(){
    $("#big").fadeIn(4000);
    $("label").click(function(){
        $("#avatarContainer").slideDown("slow");
        $("#up").click(function(){
        $("#avatarContainer").slideUp("slow");
    });
});
});
</script>
    
</head>
<body>
<div class="filler"></div>    
<div class="col-sm-2"></div>
<div class="col-sm-2"></div>
<div class="col-sm-4"><div id="big">
    <form method="post" action="login.php">
    <label>Avatar name:</label>
    <input type="text" name="avatar">
        <label id="label2">Choose Avatar...<span class="glyphicon glyphicon-chevron-down" style="float:right;margin-top:4px"></span></label>    
    <div id="avatarContainer">
        <div class="avatarDiv" id="avatar1"></div>
        <div class="avatarDiv" id="avatar2"></div>
        <div class="avatarDiv" id="avatar3"></div>
        <div class="avatarDiv" id="avatar4"></div>
        <div class="avatarDiv" id="avatar5"></div>
        <div class="avatarDiv" id="avatar6"></div>
        <div class="avatarDiv" id="avatar7"></div>
        <div class="avatarDiv" id="avatar8"></div>
        <div class="avatarDiv" id="avatar9"></div>
        <div class="avatarDiv" id="avatar10"></div>
        <div class="avatarDiv" id="avatar11"></div>
        <span id="up" class="glyphicon glyphicon-chevron-up" style="float:right;margin-top:37px;color:#45a049;cursor:pointer"></span>
    </div>
    <input type="submit" name="submit" value="Enter">
    </form>
</div>    
</div>
<div class="col-sm-2"></div>
<div class="col-sm-2"></div>    

</body>
</html>