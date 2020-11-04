<?php
    require_once "../session.php";
    include '../header.php';
    $nic= $_SESSION["id-4"];

    // queries
    $sql = "SELECT * FROM organization WHERE UserName= '$nic'";
    $result = mysqli_query($link, $sql);
    $sql2 = "SELECT  TelephoneNo FROM organization_telephone WHERE OrgId = '$nic' ORDER BY Flag DESC";
    $result2 = mysqli_query($link, $sql2);
    $count= mysqli_num_rows($result2);

   $telephone= array();
   $telephone[1]="";
    $i=0;
    while ($rows=mysqli_fetch_assoc($result2)) {
    $telephone[$i]= $rows["TelephoneNo"];
    $i++;
    }

    $tel1= $telephone[0];
    $tel2= $telephone[1];

    if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
    
        $username = $row["UserName"];
        $orgname = $row["OrganizationName"];
        $president= $row["President"];
        $location = $row["District"];
        $password = $row["Password"];
        $purpose = $row["Purpose"];
        $email = $row["Email"];

        }
    } else {
        echo "Something went wrong while loading...";
    }
?>


<?php
    $org_err=$district_err=$president_err=$username_err=$mobile_err=$email_err=$mobile_err="";
    if($_SERVER['REQUEST_METHOD']=="GET"){
        if (isset($_GET['org'])) {$org_err=$_GET['org'];}
        if (isset($_GET['dis'])) {$district_err=$_GET['dis'];}
        if (isset($_GET['pre'])) {$president_err=$_GET['pre'];}
        if (isset($_GET['user'])) {$username_err=$_GET['user'];}
        if (isset($_GET['email'])) {$email_err=$_GET['email'];}
        if (isset($_GET['mob'])) {$mobile_err=$_GET['mob'];}
        
    }
    

?>

<body>
    
    <div class="container-row organization">
        <?php
            require_once "../sidebar.php";
        ?>

        <div class="main clearfix">
            <div class="topic">

            <form action="../application/edit-organization.php" method="post">
                <div class="form-row clearfix">
                    <div class="form-group <?php echo (!empty($org_err)) ? 'has-error' : ''; ?>">
                        <label>Organization Name</label>
                        <input type="text" name="orgname" class="form-control" value="<?php echo $orgname; ?>">
                    </div>
                    <div class="form-group <?php echo (!empty($president_err)) ? 'has-error' : ''; ?>">
                        <label>President Name</label>
                        <input type="text" name="name" class="form-control" value="<?php echo $president; ?>">
                    </div>
                    
                </div>
        
                <div class="form-row">
                    <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                        <label>User Name</label>
                        <input type="text" name="username" value="<?php echo $username; ?>">  
                           
                    </div>
                    <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                        <label>Email</label>
                        <input type="email" name="email" value="<?php echo $email; ?>">  
                           
                    </div>
                    <div class="form-group <?php echo (!empty($district_err)) ? 'has-error' : ''; ?>">
                        <label>District</label>
                        <select id="location" name="location" class="form-control">
                                <option value="<?php echo $location; ?>"><?php echo $location; ?></option>
                                <option value="Ampara">Ampara</option>
                                <option value="Anuradhapura">Anuradhapura</option>
                                <option value="Badulla">Badulla</option>
                                <option value="Batticaloa">Batticoloa</option>
                                <option value="Colombo">Colombo</option>
                                <option value="Galle">Galle</option>
                                <option value="Gampaha">Gampaha</option>
                                <option value="Hambantota">Hambantota</option>
                                <option value="Jaffna">Jaffna</option>
                                <option value="Kalutara">Kalutara</option>
                                <option value="Kandy">Kandy</option>
                                <option value="Kegalle">Kegalle</option>
                                <option value="Kilinochchi">Kilinochchi</option>
                                <option value="Kurunegala">Kurunegala</option>
                                <option value="Mannar">Mannar</option>
                                <option value="Matale">Matale</option>
                                <option value="Matara">Matara</option>
                                <option value="Monaragala">Monaragala</option>
                                <option value="Mullativu">Mullativu</option>
                                <option value="Nuwara Eliya">Nuwara Eliya</option>
                                <option value="Polonnaruwa">Polonnaruwa</option>
                                <option value="Puttalam">Puttalam</option>
                                <option value="Ratnapura">Ratnapura</option>
                                <option value="Trincomalee">Trincomalee</option>
                                <option value="Vavniya">Vavniya</option>
                            </select>
                    </div>
                    
                </div>

                <div class="form-row">
                    <div class="form-group <?php echo (!empty($mobile_err)) ? 'has-error' : ''; ?>">
                        <label>Telephone</label>
                        <input type="number" name="mobile" class="form-control" value="<?php echo $telephone[0]; ?>">
                    </div>
                    <div class="form-group">
                        <label>Telephone2</label>
                        <input type="number" name="mobile2" class="form-control" value="<?php echo $telephone[1]; ?>">
                    </div>
                </div>

                <div class="form-row clearfix">

                    <div class="form-group">
                        <label>Purpose(Optional)</label>
                        <textarea name="purpose" placeholder="  please give a precise description" cols="90" rows="5"><?php echo $purpose; ?>
                        </textarea>
                    </div>    

                    </div>


            <center><input type="submit"  name="Submit"></center>
            <div style="margin-top: : -50px; ">
                <a href="edit-password" style="color: #848484; font-size: 15px;">Edit Password</a>
            </div>

            </form>
          
            
            </div>
            
               
        </div>
    </div>
<?php include '../../footer.php'; ?>