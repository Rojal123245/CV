<?php 
if(isset($_POST['Submit'])){
    $to = "rozalpra@gmail.com";
$subject = $_POST['subject'];
$txt = $_POST['message'];
$headers = $_POST['email'];

if(mail($to,$subject,$txt,$headers) == true){
    echo "Succesful";
}
else {
    echo "Not Succesful";
}

}
?>