<!DOCTYPE HTML>
<html>
<head>
<style>    
.error {color: red;};
</style>    
</head>    

<body>
<?php
$array = array();
$avatar = "";
$error = "";    
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["avatar"])){
        $error = "You need a name";
    }
    else{
        $avatar = test_input($_POST["avatar"]);
        if(!preg_match("/^[a-zA-Z1-999]*$/",$avatar)){
            $error = "Only Letters, numbers and Spaces";
            }
        else
        }
    }
}    
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
function storeUsers($data){
    
    array_push($array, $data);
}    
echo "<h1>YO</h1>";
echo $_POST["avatar"]; 
?>!    
</body>
</html>