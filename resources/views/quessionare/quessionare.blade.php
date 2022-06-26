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
                        <!-- /top-wizard -->
                        <form id="wrapped" method="get" >
                            <input id="website" name="website" type="text" value="">
                            <!-- Leave for security protection, read docs for details -->
                            <div id="middle-wizard">

                                <div class="step">
                                    <h3 class="main_question"><i class="arrow_right"></i>Have you traveled to any one of the destinations below in the last 21 days?</h3>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="container_check version_2">China
                                                <input type="checkbox" name="question_1[]" value="China" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                            </div>
                                            <div class="form-group">
                                                <label class="container_check version_2">South Kore
                                                <input type="checkbox" name="question_1[]" value="South Korea" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                            </div>
                                            <div class="form-group">
                                                <label class="container_check version_2">Iran
                                                <input type="checkbox" name="question_1[]" value="Iran" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="container_check version_2">Europe
                                                <input type="checkbox" name="question_1[]" value="Europe" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                            </div>
                                            <div class="form-group">
                                                <label class="container_check version_2">US States
                                                <input type="checkbox" name="question_1[]" value="US States" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                            </div>
                                            <div class="form-group">
                                                <label class="container_check version_2">None of the above
                                                <input type="checkbox" name="question_1[]" value="Mobile Design" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /row -->
                                </div>
                                <!-- /step-->

                                <div class="step">
                                    <h3 class="main_question"><i class="arrow_right"></i>Have you recently been in contact with a person with Coronavirus?</h3>
                                    <div class="form-group">
                                        <label class="container_radio version_2">Yes
                                        <input type="radio" name="question_2" value="Yes" class="required">
                                        <span class="checkmark"></span>
                                    </label>
                                        <label class="container_radio version_2">No
                                        <input type="radio" name="question_2" value="No" class="required">
                                        <span class="checkmark"></span>
                                    </label>
                                    </div>
                                </div>
                                <!-- /step-->

                                <!-- /Start Branch ============================== -->
                                <div class="step" data-state="branchtype">
                                    <label class="custom add_top_10"></label>
                                    <h3 class="main_question"><i class="arrow_right"></i>Are you experiencing any difficulty in breathing?</h3>
                                    <div class="form-group">
                                        <label class="container_radio version_2">Yes
                                        <input type="radio" name="question_3" value="Yes" class="required">
                                        <span class="checkmark"></span>
                                    </label>
                                        <label class="container_radio version_2">No
                                        <input type="radio" name="question_3" value="No" class="required">
                                        <span class="checkmark"></span>
                                    </label>
                                    </div>

                                </div>

                                <!-- /difficulty in breathing > Yes ============================== -->
                                <div class="branch" id="Yes">
                                    <div class="step" data-state="No">
                                        <h3 class="main_question"><i class="arrow_right"></i>Please tick any one of the following symptoms that can be applies to you.</h3>
                                        <div class="form-group">
                                            <label class="container_check version_2">Shortness of breath or breathing very fast
                                            <input type="checkbox" name="question_4[]" value="Shortness of breath or breathing very fast" class="required">
                                            <span class="checkmark"></span>
                                        </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="container_check version_2">Shortness of breath & Intense chest pain.
                                            <input type="checkbox" name="question_4[]" value="Shortness of breath & Intense chest pain" class="required">
                                            <span class="checkmark"></span>
                                        </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="container_check version_2">Cannot complete a long sentence in one breath.
                                            <input type="checkbox" name="question_4[]" value="Cannot complete a long sentence in one breath" class="required">
                                            <span class="checkmark"></span>
                                        </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="container_check version_2">None of the above
                                            <input type="checkbox" name="question_4[]" value="None of the above" class="required">
                                            <span class="checkmark"></span>
                                        </label>
                                        </div>
                                    </div>
                                </div>
                                <!-- /step-->

                                <!-- /difficulty in breathing > No ============================== -->
                                <div class="step" id="No">
                                    <h3 class="main_question"><i class="arrow_right"></i>Do you have fever higher than 100.3° F?</h3>
                                    <div class="form-group">
                                        <label class="container_radio version_2">Yes
                                        <input type="radio" name="question_5" value="Yes" class="required">
                                        <span class="checkmark"></span>
                                    </label>
                                        <label class="container_radio version_2">No
                                        <input type="radio" name="question_5" value="No" class="required">
                                        <span class="checkmark"></span>
                                    </label>
                                    </div>
                                </div>
                                <!-- /step-->

                                <div class="step">
                                    <h3 class="main_question"><i class="arrow_right"></i>Do you have a runny nose?</h3>
                                    <div class="form-group">
                                        <label class="container_radio version_2">Yes
                                        <input type="radio" name="question_6" value="Yes" class="required">
                                        <span class="checkmark"></span>
                                    </label>
                                        <label class="container_radio version_2">No
                                        <input type="radio" name="question_6" value="No" class="required">
                                        <span class="checkmark"></span>
                                    </label>
                                    </div>
                                </div>
                                <!-- /step-->

                                <div class="step">
                                    <h3 class="main_question"><i class="arrow_right"></i>Are you experiencing muscle aches, weakness, or lightheadedness?</h3>
                                    <div class="form-group">
                                        <label class="container_radio version_2">Yes
                                        <input type="radio" name="question_7" value="Yes" class="required">
                                        <span class="checkmark"></span>
                                    </label>
                                        <label class="container_radio version_2">No
                                        <input type="radio" name="question_7" value="No" class="required">
                                        <span class="checkmark"></span>
                                    </label>
                                    </div>
                                </div>
                                <!-- /step-->

                                <div class="step">
                                    <h3 class="main_question"><i class="arrow_right"></i>Are you having diarrhea, stomach pain, vomiting?</h3>
                                    <div class="form-group">
                                        <label class="container_radio version_2">Yes
                                        <input type="radio" name="question_8" value="Yes" class="required">
                                        <span class="checkmark"></span>
                                    </label>
                                        <label class="container_radio version_2">No
                                        <input type="radio" name="question_8" value="No" class="required">
                                        <span class="checkmark"></span>
                                    </label>
                                    </div>
                                </div>
                                <!-- /step-->



                                <div class="submit step" id="end">
                                    <div class="summary text-center">
                                        <div class="wrapper">
                                            <h3>Thank your for your time</h3>
                                            <input type="submit" class="btn btn-primary" value="submit">
                                        </div>

                                    </div>

                                </div>


                               
                                <!-- /step last-->

                            </div>

                            <!-- /middle-wizard -->
                            <div id="bottom-wizard">
                                <button type="button" name="backward" class="backward">Prev</button>
                                <button type="button" name="forward" class="forward">Next</button>

                            </div>
                            <!-- /bottom-wizard -->
                
                        </form>
                        <!-- /Wizard container -->
                    </div>
                </div>
                <!-- /Row -->
            </div>
            <!-- /Form_container -->
        </div>


        <!-- COMMON SCRIPTS -->
        <script src="js/jquery-3.6.0.min.js"></script>
        <script src="js/common_scripts.min.js"></script>
        <script src="js/velocity.min.js"></script>
        <script src="js/common_functions.js"></script>

        <!-- Wizard script with branch -->
        <script src="js/wizard_with_branch.js"></script>

</body>

</html>
