<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<!-- link bootstap -->
<link rel="stylesheet" href="../../../css/bootstrap.min.css">
<link rel="stylesheet" href="../../../css/tab.css">
<link rel="stylesheet" href="../../../css/sidebar.css">
<!-- link js  -->
<script src="../../../js/jquery.js"></script>
<script src="../../../js/bootstrap.min.js"></script>



<body>
    <?php include_once("../../../layout/navbarAdmin.php");

?>

<div class="container">
<div class="col-md-12">    

<table class="table table-dark">
        <thead>
            <td>login_id</td>
            <td>login_email</td>
            <td>login_role </td>
            <td>login_status</td>
            <td>Operation</td>
        </thead>
        <?php
        include_once("../../functions/db_conn.php");
        $conn = connection();
        
        if(isset($_GET['id'])){

            $id=($_GET['id']);
            $delete=mysqli_query ($conn,"UPDATE `login_tbl` SET `login_role` = 'doctor' WHERE `login_tbl`.`login_id` ='$id';");
        }
        
        
        if($conn->connect_error){
            die("connection failed:".$conn->connect_error);
        }


        $sql = "SELECT login_id,login_email,login_role,login_status FROM login_tbl";
        $result=$conn->query($sql);
        if($result-> num_rows>0){
            while ($row=$result->fetch_assoc()){
                echo "<tr><td>".$row["login_id"]."</td>";
                echo "<td>".$row["login_email"]."</td>";
                echo "<td>".$row["login_role"]."</td>";
                echo "<td>".$row["login_status"]."</td>
                <td><a href='Permison.php' id='".$row["login_id"]."'> Delete </a></td></tr>";
             


            }
        }
        ?>

       
    </table>
</body>
<script>
        $(document).ready(function() {
            $('#doc').click(function() {
                $('#load').load('addDoc.php');
            });
        });
        </script>
</html>