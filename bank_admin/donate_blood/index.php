
<?php
    require '../session.php';
    require '../header.php';

?>
<body class="">

	
	<div class="container-row donor">

        <?php
            require '../dashboard.php';
        ?>

        <div class="main">

            <div class="topic">
                 <div class="form-style-2-heading">Donate Blood</div>
            </div>

            <h2 class="center">Categories</h2>
            <center>
                <div class="tile-container">
                    <a href="add_request?bloodbank">
                        <div class="tile">
                            <p class="title"><i class="fa fa-building"></i>Blood Bank Hospital</p>
                        </div>
                    </a><br>
                    <a href="add_request?hospital">
                    <div class="tile">
                        <p class="title"><i class="fa fa-university"></i>Normal Hospitals</p>
                    </div>
                    </a>
                    
                </div>
            </center>

        </div>

    </div>



<?php include '../../footer.php'; ?>

