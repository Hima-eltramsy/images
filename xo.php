<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
if(isset($_POST["name"])){
    $name=$_POST["name"];
    $logo=rand().$_FILES["file"]["name"];
    $logo_size=$_FILES["file"]["size"];
    if ($logo_size > 5*1000*1000 ){
        die("large bic");
    }
    $r=move_uploaded_file($_FILES["file"]["tmp_name"],"images/".$logo);
    if($r==true){
        echo "saved";
    }else{
        echo"not saved";
    }
}
    ?>
</body>
</html>