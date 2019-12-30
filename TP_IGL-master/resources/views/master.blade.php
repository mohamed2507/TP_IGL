<!DOCTYPE html>
<html lang="en">

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

    <link href="css/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="css/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="css/select2.min.css" rel="stylesheet" media="all">
    <link href="css/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
    <style>
        .error
        {
            color:red;
        }
        .sucess
        {
            text-align:center;
            color :#00e600;
            font-size: 20px;

        }
    </style>
</head>

<body>


    @yield('content')
        <!-- Jquery JS-->
        <script  src="/js/app.js"></script>
        <script src="js/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="js/select2.min.js"></script>
    <script src="js/moment.min.js"></script>
    <script src="js/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>


</body>

</html>
<!-- end document-->
