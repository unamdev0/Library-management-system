<?php
require('dbconn.php');
?>

<?php
if ($_SESSION['RollNo']) {
    require('header.php');
    $no=$_SESSION['RollNo'];
    $sql = "select * from LMS.user where RollNo='$no'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $name=$row['Name'];
    $emailid=$row['EmailId'];
    $mobno=$row['MobNo'];
    ?>
<div class="page-content">
    <!-- Page Header-->
    <div class="page-header no-margin-bottom">
        <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Update Details</h2>
        </div>
    </div>
    <!-- Breadcrumb-->
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
            <li class="breadcrumb-item active">Update details</li>
        </ul>
    </div>
    <section class="no-padding-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="block">
                        <div class="title"><strong >Update details</strong>
                        </div>
                        <div class="block-body">


                            <form action="update_details_admin.php" method="post">
                                <div class="form row">
                                    <div class="form-group col-md-12">
                                        <label class="col-sm-3 form-control-label ">Name:</label>
                                        <input type="text" name="name" id="name" class="form-control" value=<?php echo $name?>>
                                    </div>
                                </div>
                                <div class="form row">
                                    <div class="form-group col-md-6">
                                        <label class="col-sm-3 form-control-label ">Email:</label>
                                        <input type="email" name="email" id="email" class="form-control" value=<?php echo $emailid?>>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-sm-3 form-control-label ">Phone:</label>
                                        <input type="text" name="phone" id="phone" class="form-control" value=<?php echo $mobno?>>
                                    </div>
                                </div>
                                <!--<div class="form row">
                                    <div class="form-group col-md-6">
                                        <label class="col-sm-3 form-control-label ">City:</label>
                                        <input type="text" name="city" id="city" class="form-control" value="City">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-sm-3 form-control-label ">State:</label>
                                        <input type="text" name="state" id="state" class="form-control" value="State">
                                    </div>
                                </div>
                                <div class="form row">
                                    <div class="form-group col-md-12">
                                        <label class="col-sm-3 form-control-label ">Address:</label>
                                        <textarea name="address" id="address" class="form-control" value="Address"></textarea>
                                    </div>
                                </div>-->
                                <div><strong class="text-primary small" style="margin-top:20px;" id="incorrect"></STRONG></div>
                                <div>
                                    <div  class="text-center">
                                        <button type="submit" name="submit" value="Update details" class="btn btn-primary">Update Details</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    $m=$_SESSION['message'];
    echo "<script type='text/javascript'>document.getElementById('incorrect').innerText = '$m' </script>";
    $_SESSION['message']='';
    /*if(isset($_POST['submit']))
    {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $city=$_POST['city'];
        $state=$_POST['state'];
        $address=$_POST['address'];
        $sql1="UPDATE LMS.user SET Name='$name', EmailId='$email', MobNo='$phone' WHERE RollNo='$no'";

        if($conn->query($sql1) === TRUE){
            echo "<script type='text/javascript'>document.getElementById('incorrect').innerText = 'Details Updated' </script>";
        }
        else
        {//echo $conn->error;
            echo "<script type='text/javascript'>document.getElementById('incorrect').innerText = 'Update failed'</script>";
        }

    }*/
    require ('footer.php');
    }
    else {
        echo "<script type='text/javascript'>alert('Access Denied!!!')</script>";
    } ?>
