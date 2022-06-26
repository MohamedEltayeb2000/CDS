<!DOCTYPE html>
<html lang="en">

<head>
    <title>Cronona Detection System</title>
    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body class="layout_2">

    <header>
        <div class="container-fluid">
            <h1> Cronona Detection System</h1>
        </div>
        <!-- /container -->
    </header>
    <!-- /Header -->

    <div class="container-fluid">
        <div id="form_container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div id="wizard_container">
                        <div id="top-wizard">
                            <div id="progressbar"></div>
                        </div>
                     
                      
                        <h1 class="text-center">Covid-19 : {{$result}} %</h1>
                     <form action="/q" method="get">
                         <div class="text-center">
                               <button type="submit" class="btn btn-primary">Go Back Quessoinare</button>
                         </div>
                      
                    
                     </form>
 


        <!-- COMMON SCRIPTS -->
        <script src="js/jquery-3.6.0.min.js"></script>
        <script src="js/common_scripts.min.js"></script>
        <script src="js/velocity.min.js"></script>
        <script src="js/common_functions.js"></script>

        <!-- Wizard script with branch -->
        <script src="js/wizard_with_branch.js"></script>

</body>

</html>
