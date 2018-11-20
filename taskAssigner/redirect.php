<html>



<head>
    <title>
        Task Assigned
    </title>

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
                <h2 class="title" style="text-align: center; margin-top: -20px;"><b>Assigned Tasks</b></h2>

                <table border="1">
                    <tr>
                        <th>Name</th>
                        <th>Task Assigned</th>
                    </tr>
                    <tr>
                        <td>
                            <?php echo $writer = $_POST['writer'];?>
                        </td>
                        <td>
                            <?php echo $title = $_POST['title'];?>
                        </td>
                    </tr>
                </table>

            </div>
        </div>
    </div>
</body>
</html>