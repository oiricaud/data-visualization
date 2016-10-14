<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="resources/img/favicon.png">
        <!-- Meta data -->
        <meta name="description" content="<?php echo $description ?>" />
        <meta name="keywords" content="<?php echo $keywords ?>" />
        <meta name="author" content="<?php echo $author ?>" />
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="<?php echo base_url(CSS."bootstrap/bootstrap.min.css");?>">
        <!-- Morris CSS -->
        <link rel="stylesheet" href="<?php echo base_url(CSS."morris/morris.css");?>">
        <!-- Main body content CSS -->
        <link rel="stylesheet" href="<?php echo base_url(CSS."body/cover.css");?>">
        <!-- Navigation top bar CSS -->
        <link rel="stylesheet" href="<?php echo base_url(CSS."navbar/navstyle.css");?>">
        <!-- Side bar CSS  -->
        <link rel="stylesheet" href="<?php echo base_url(CSS."sidebar/sidebar.css");?>">
        <!-- Awesome font CSS -->
        <link rel="stylesheet" href="<?php echo base_url(CSS."font/font-awesome.min.css");?>">
    </head>

    <title> <?php echo $title ?> </title>

    <?php echo $body ?>

    <!-- JQuery Java Scripts -->
    <script src="<?php echo base_url(JS."jquery/jquery-2.1.1.min.js");?>"></script>
    <!-- Bootstrap Java Script -->
    <script src="<?php echo base_url(JS."bootstrap/bootstrap.min.js");?>"></script>
    <!-- D3 Java Script -->
    <script src="<?php echo base_url(JS."d3/d3.v3.min.js");?>"></script>
    <!-- Morris Java Script Library -->
    <script src="<?php echo base_url(JS."morris/jquery.min.js");?>"></script>
    <script src="<?php echo base_url(JS."morris/raphael-min.js");?>"></script>
    <script src="<?php echo base_url(JS."morris/morris.min.js");?>"></script>
    <!-- Read CSV File Java Script -->
    <script src="<?php echo base_url(JS."graphs/read-file.js");?>"></script>
    <!-- Morris Water Customer Retail Data End of Fiscal Year Java Script-->
    <script src="<?php echo base_url(JS."graphs/water-customer-retail-data.js");?>"></script>
    <!-- Morris Line Graph Java Script-->
    <script src="<?php echo base_url(JS."graphs/linegraph.js");?>"></script>
    <!-- Morris Area Graph Java Script-->
    <script src="<?php echo base_url(JS."graphs/areagraph.js");?>"></script>
    <!-- Morris Bar Graph Java Script-->
    <script src="<?php echo base_url(JS."graphs/bargraph.js");?>"></script>
    <!-- Main body D3 -  Bar Chart Java Script -->
    <script src="<?php echo base_url(JS."graphs/chart.js");?>"></script>
    <!-- Side bar Java Script -->
    <script src="<?php echo base_url(JS."sidebar/angular.min.js");?>"></script>
    <!-- Navigation top bar Java Script-->
    <script src="<?php echo base_url(JS."sidebar/index.js");?>"></script>

</html>
