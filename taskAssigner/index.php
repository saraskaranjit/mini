<!DOCTYPE html>
<html lang="en">
<?php
@require('mail_handler.php');
?>
<head>

    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Au Register Forms by Colorlib</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all"><!--
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">


</head>

<body>

<!--<script type="text/javascript">-->
<!---->
<!--        function test() {-->
<!--        var abc = document.getElementById("nissan");-->
<!--        anc = "b@b.com";-->
<!--        console.log(abc);-->
<!--    }-->
<!---->
<!--</script>-->
<script type="text/javascript" src="particles.js"></script>
<script type="text/javascript" src="app.js"></script>

<div id="particles-js">

</div>

<div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
    <nav class="navbar navbar-default" style="width: 80%; margin: auto; margin-bottom: 30px">
        <div class="container-fluid">

            <ul class="nav navbar-nav">
                <img src="logo.png" style="width: 30px; height: 30px; float: left; margin-top: 10px; margin-right: 10px; margin-left: 500px">
                <a class="navbar-brand" href="http://www.techlekh.com" style="color: #222;">TechLekh</a>
                <!--
                <li class="nav-item" style="margin-left: 300px"><a class="nav-link active" href="aboutus.html" style="color: #222">Status</a></li>
                <li><a  href="details.html" style="color: #222">History</a></li>-->
            </ul>
        </div>
    </nav>
    <div class="wrapper wrapper--w680">
        <div class="card card-4">
            <div class="card-body" style="margin-top: -20px;">
                <h2 class="title" style="text-align: center; margin-top: -20px;"><b>Task Assignment</b></h2>


                <!--                --><?php
                //                if (isset($_POST['submit'])){
                //                    require 'phpmailer/PHPMailerAutoload.php';
                //
                //                    function sendemail($to, $from, $title, $reference){
                //                        $mail = new PHPMailer();
                //                        $mail->setFrom($from, $title);
                //                        $mail->addAddress($to);
                //                        $mail->Subject = 'Task Assignment - Email';
                //                        $mail->Body = $reference;
                //                        $mail->isHTML(false);
                //
                //                        return $mail->send();
                //                    }
                //
                //                    $title = $_POST['title'];
                //                    $reference = $_POST['reference'];
                //
                //                    if(sendemail('skaranjit24@gmail.com','saras.karanjit@deerwalk.edu.np',$title,$reference))
                //                        $msg = 'Email sent!';
                //                    else
                //                        $msg = 'Email not sent!';
                //
                //                }
                //
                //
                //                ?>


                <form method="POST" action="mail_handler.php" name="myForm">
                    <div class="row row-space">
                        <div class="col-4" style="margin: auto">
                            <div class="input-group">
                                <label class="label" style="color: #444; font-size: 15px">Article Title</label>
                                <input class="input--style-4" type="text" name="title">
                            </div>
                        </div>

                        <div class="col-4" style="margin: auto">
                            <div class="input-group">
                                <label class="label" style="color: #444; font-size: 15px">Reference Link</label>
                                <input class="input--style-4" type="text" name="reference">
                            </div>
                        </div>
                    </div>

                    <div class="input-group" style="margin: auto; margin-bottom: 20px">
                        <label class="label" style="color: #444; font-size: 15px">Assigned To</label>
                        <div class="rs-select2 js-select-simple select--no-search">
                            <select name="subject">
                                <option disabled="disabled" selected="selected" name="writer">Choose Writer</option>
                                <option value="saras.karanjit@deerwalk.edu.np" id="nissan">Nissan</option>
                                <option value="saras.karanjit@deerwalk.edu.np" id="anmol">Anmol</option>
                                <option value="saras.karanjit@deerwalk.edu.np" id="akankshya">Akankshya</option>
                                <option value="saras.karanjit@deerwalk.edu.np" id="jubin">Jubin</option>
                            </select>
                            <div class="select-dropdown"></div>
                        </div>
                    </div>

                    <div class="row row-space" style="margin: auto">
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label" style="color: #444; font-size: 15px">Deadline</label>
                                <div class="input-group-icon">
                                    <input class="input--style-4 js-datepicker" type="text" name="deadline">
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row row-space">
                        <div class="col-4">
                            <div class="input-group">
                                <label class="label" style="color: #444; font-size: 15px">Remarks/Notes</label>
                                <input class="input--style-4" type="text" name="remarks">
                            </div>
                        </div>

                    </div>

                    <div class="p-t-15">
                        <button class="btn btn--radius-2 btn--blue" type="submit" name='submit' value="submit" style="margin-left: 40%">Assign Task</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

<!-- Jquery JS-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Vendor JS-->
<script src="vendor/select2/select2.min.js"></script>
<script src="vendor/datepicker/moment.min.js"></script>
<script src="vendor/datepicker/daterangepicker.js"></script>

<!-- Main JS-->
<script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->