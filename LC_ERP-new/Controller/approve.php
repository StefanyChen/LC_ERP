<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "peopleresource";

try {
    $conn = mysqli_connect($servername,$username ,$password,$dbname);

    switch ($_GET['b']) {
      case 'btrip':
        switch ($_GET['c']) {
          case 'hr':
            if($_GET['a']=='yes'){
              $sql = "UPDATE `business` SET b_hrCheck='通過' WHERE id={$_GET['id']}";
            }
            else{
              $sql = "UPDATE `business` SET b_hrCheck='不通過' WHERE id={$_GET['id']}";
              $sql = "UPDATE `business` SET b_bossCheck=' ' WHERE id={$_GET['id']}";
            }
            break;
          case 'boss':
            if($_GET['a']=='yes'){
              $sql = "UPDATE` `business` SET b_bossCheck='通過' WHERE id={$_GET['id']}";
            }
            else{
              $sql = "UPDATE `business` SET b_bossCheck='不通過' WHERE id={$_GET['id']}";
            }
            break;
          default:
            break;
        }
        mysqli_query($conn,$sql);
        header("Location:../admin-Model/admin_bTrip.php");
        break;# btrip-END
      case 'leave':
        switch ($_GET['c']) {
          case 'hr':
            if($_GET['a']=='yes'){
              $sql = "UPDATE `leave` SET l_hrCheck='通過' WHERE id={$_GET['id']}";
            }
            else{
              $sql = "UPDATE `leave` SET l_hrCheck='不通過',l_bossCheck=' ' WHERE id={$_GET['id']}";
            }
            break;
          case 'boss':
            if($_GET['a']=='yes'){
              $sql = "UPDATE `leave` SET l_bossCheck='通過' WHERE id={$_GET['id']}";
            }
            else{
              $sql = "UPDATE `leave` SET l_bossCheck='不通過' WHERE id={$_GET['id']}";
            }
            break;
          default:
            break;
        }
        mysqli_query($conn,$sql);
        header("Location:../admin-Model/admin_leave.php");
        break;# leave-END
      case 'overtime':
        switch ($_GET['c']) {
          case 'hr':
            if($_GET['a']=='yes'){
              $sql = "UPDATE `overtime_apply` SET o_hrCheck='通過' WHERE id={$_GET['id']}";
            }
            else{
              $sql = "UPDATE `overtime_apply` SET o_hrCheck='不通過',o_bossCheck=' ' WHERE id={$_GET['id']}";
            }
            break;
          case 'boss':
            if($_GET['a']=='yes'){
              $sql = "UPDATE `overtime_apply` SET o_bossCheck='通過' WHERE id={$_GET['id']}";
            }
            else{
              $sql = "UPDATE `overtime_apply` SET o_bossCheck='不通過' WHERE id={$_GET['id']}";
            }
            break;
          default:
            break;
        }
        mysqli_query($conn,$sql);
        header("Location:../admin-Model/admin_overtime.php");
        break;# overtime-END
      default:
        break;
      }
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

?>