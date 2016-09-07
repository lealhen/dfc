<?php
/**
 * Created by PhpStorm.
 * User: learegachuelo
 * Date: 8/18/16
 * Time: 9:46 AM
 */
$servername = "localhost";
//$username = "root";
$username = "u985821698_root";
$password = "r00tb33r";
//$dbname = "dfc";
$dbname = "u985821698_dfc";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//$dbcon=mysqli_connect("localhost","root","r00tb33r");
//mysqli_select_db($dbcon,"dfc");

if(isset($_POST['admin_login']))//this will tell us what to do if some data has been post through form with button.
{
    $admin_name=$_POST['username'];
    $admin_pass=$_POST['password'];

    $sql="select * from accounts where username='$admin_name' AND password='$admin_pass' AND ac_type=2";
    $sql2="select * from accounts where username='$admin_name' AND password='$admin_pass' AND ac_type=1";
    $result = $conn->query($sql);
    $result2 = $conn->query($sql2);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            session_start();
            $_SESSION['logged'] = "admin";
            $_SESSION['uid'] = $row['accounts_id'];
            $_SESSION['uname']=$row['username'];

            echo "<script>alert('Welcome!')</script>
                <script>window.open('admin.php?categories','_self')</script>
                ";        }
    } elseif ($result2->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            session_start();
            $_SESSION['logged'] = "member";
            $_SESSION['uid'] = $row['accounts_id'];
            $_SESSION['uname']=$row['username'];

            echo "<script>alert('Welcome!')</script>
                <script>window.open('admin.php','_self')</script>
                ";        }
    }else {
        echo "<script>alert('Admin Details are incorrect..!')</script>";
    }



}

if(isset($_GET['logout'])){
    session_start();
//    foreach(array_keys($_SESSION) as $k) unset($_SESSION[$k]);
    unset($_SESSION['logged']);
    session_unset();
    session_destroy();
    echo "<script>window.open('index.php','_self')</script>";
}





if (isset($_POST['saveeditcat'])){
    $id = $_GET['edit'];
    $name = $_POST['catname'];
    $desc = $_POST['desc'];

    $q = "UPDATE category SET catname='$name', catdesc ='$desc' WHERE cat_id = $id";

        echo "<script>alert('Successfully updated!');</script>";
        $r = $conn->query($q);
        header("Location: admin.php?categories");

}

if (isset($_GET['delete'])){
    $id = $_GET['delete'];

    $sql = "DELETE FROM category where cat_id=$id";
    $result = $conn->query($sql);

    echo "<script>alert('Successfully deleted!');</script>";
    header("Location: admin.php?categories");

}

if (isset($_GET['deleteprod'])){
    $id = $_GET['deleteprod'];

    $q = "select prod_image from products where prod_id=$id";
    $r = $conn->query($q);
    $row = mysqli_fetch_array($r);
    unlink("upload/".$row['prod_image']);

    $sql = "DELETE FROM products where prod_id=$id";
    $result = $conn->query($sql);
    ?>
    <script>
        alert('Successfully deleted');
        window.location.href='admin.php?products';
    </script>
    <?php
}

if (isset($_GET['deletevid'])){
    $id = $_GET['deletevid'];

    $sql = "DELETE FROM videos where vid_id=$id";
    $result = $conn->query($sql);
    ?>
    <script>
        alert('Successfully deleted');
        window.location.href='admin.php?videos';
    </script>
    <?php
}


if (isset($_POST['addcat'])){
    $name = $_POST['catname'];
    $desc = $_POST['desc'];
    $q = "INSERT INTO category 
			(catname, catdesc)
			VALUES
			('$name', '$desc')
		";

    $q2 = "SELECT * from category WHERE catname='$name'";
    $r2 = $conn->query($q2);

    if($r2 -> num_rows > 0){
        echo "<script>alert('Duplicate entry!');</script>";

    }else{
        echo "<script>alert('Successfully added!');</script>";
        $r = $conn->query($q);
    }
}



$conn->close();
