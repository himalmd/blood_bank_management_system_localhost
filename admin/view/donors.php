<?php
    require '../session.php';
    require '../header.php';
$date= Date("Y-m-d");   
$sql="SELECT a.first_name AS first_name, a.last_name AS last_name, a.dob AS dob,a.district AS district, a.bloodgroup AS bloodgroup, a.email AS email, GROUP_CONCAT(b.TelephoneNo SEPARATOR ' / ') AS TelephoneNo FROM donor a INNER JOIN donor_telephone b ON a.nic=b.NIC GROUP BY a.nic ORDER BY district ASC";
$result=mysqli_query($link,$sql);    

?>
<body class="">

	
	<div class="container-row donor">

        <?php
            require '../dashboard.php';
        ?>

        <div class="main">
            <div class="topic">
                 <div class="form-style-2-heading"><div align="center">Donors</div><?php echo"<input class=\"search\" type=\"text\" id=\"search\" placeholder=\"Search bar\">";?></div>
            </div>

            <div class="container-table100 clearfix" style="padding-top: 0px;">
                    <div style="width: 100%">
                        <div class="table100 ver2 m-b-110"> 
                    <div class="table100-head">
                        <table>
                            <thead>
                            <tr class="row100 head">
                            <th class="cell100 column6">Name</th>
                            <th class="cell100 column6">DOB | B.Group</th>
                            <th class="cell100 column6">District</th>
                            <th class="cell100 column4">Email</th>
                            <th class="cell100 column3">Contact</th>
                            </tr>
                            </thead>
                        </table>

                    </div>
                    <div class="table100-body">
                        <table>
                            
                          <?php
                                
                            if (mysqli_num_rows($result) > 0) {
                                    // output data of each row
                                while($row = mysqli_fetch_assoc($result)) {
                                    $fname=$row["first_name"];$lname=$row["last_name"];
                                    $name=$fname." ".$lname;
                                    $dob=$row["dob"];$bloodgroup=$row["bloodgroup"];
                                    $district=$row["district"];
                                    $email = $row["email"];
                                    $telephone = $row["TelephoneNo"];
                                    

                                        echo "<tr class='row100 body'><td class=\"cell100 column6\">".$name."</td>";
                                        echo "<td class=\"cell100 column6\" >".$dob.' | '.$bloodgroup."</td>";
                                        echo "<td class=\"cell100 column6\">".$district."</td>";
                                        echo "<td class=\"cell100 column4\">".$email."</td>";
                                    
                                        echo "<td class=\"cell100 column3\">".$telephone."</td></tr>";
                                }
                            }else{
                                echo "<center><p>No Updates Available !!!</p></center>";
                            }  
                                
                            ?>      
                            
                        
                        </table>
                    </div>
                    
                        </div>
                    </div>
                </div>

                <center><a href="../index" class="button">Back</a></center>

        </div>
<?php mysqli_close($link);?>
    </div>



<?php include '../../footer.php'; ?>