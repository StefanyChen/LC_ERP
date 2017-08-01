<?php session_start(); ?>
<?php
$servername = "localhost";
$username = "root";
$password = "hn13441673";
$dbname = "peopleresource";

$l_name=$_SESSION['name'];
$l_startDate=$_POST['l_startDate'];
$l_startTime=$_POST['l_startTime'];
$l_endDate=$_POST['l_endDate'];
$l_endTime=$_POST['l_endTime'];
$l_state=$_POST['l_state'];
$l_comment=$_POST['l_comment'];
$l_type=$_POST['l_type'];
$l_hrs=$_POST['l_hrs'];
$l_compensatoryLevae=0;
$l_annualLeave=0;
$l_marriageLeave=0;
$l_officialLeave=0;
$l_personalLeave=0;
$l_funeralLeave=0;
$l_sickLeave=0;

try {
    $conn = mysqli_connect($servername,$username ,$password,$dbname);

    $sql = "SELECT `l_compensatoryLevae` FROM `leave` WHERE l_name='".$_SESSION['name']."'";

    // use exec() because no results are returned
    $result = mysqli_query($conn,$sql);
     
    while($row = mysqli_fetch_array($result)){

    switch($l_type){
        case "補休":
        $l_compensatoryLevae+=$_POST['l_hrs'];
        break;
        case "特休":
        $l_annualLeave+=$_POST['l_hrs'];
        break;
        case "婚產假":
        $l_marriageLeave+=$_POST['l_hrs'];
        break;
        case "公假":
        $l_officialLeave+=$_POST['l_hrs'];
        break;
        case "事假":
        $l_personalLeave+=$_POST['l_hrs'];
        break;
        case "喪假":
        $l_funeralLeave+=$_POST['l_hrs'];
        break;
        case "病假":
        $l_sickLeave+=$_POST['l_hrs'];
        break;
        }
    }
    if(COUNT($_POST)>0){
        $sql="INSERT INTO `leave`(`l_name`, `l_startDate`, `l_startTime`, `l_endDate`, `l_endTime`, `l_type`, `l_hrs`, `l_state`, `l_comment`,`l_compensatoryLevae`, `l_annualLeave`, `l_marriageLeave`, `l_officialLeave`, `l_personalLeave`, `l_funeralLeave`, `l_sickLeave`) VALUES('$l_name','$l_startDate','$l_startTime','$l_endDate','$l_endTime','$l_type','$l_hrs','$l_state','$l_comment','$l_compensatoryLevae','$l_annualLeave','$l_marriageLeave','$l_officialLeave','$l_personalLeave','$l_funeralLeave','$l_sickLeave')";
        $result = mysqli_query($conn,$sql);
        header("Location:user_Leave.php");
        }
}
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    };
?>