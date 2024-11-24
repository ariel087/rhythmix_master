<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Step-by-Step Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="stage1.css">
</head>

<body>

        <form id="multiStepForm">
            <div class="form-step form-step-active">
                <p>Complete the rhythmic pattern by adding the notes or rest to the staff.</p>
                <table class="table table-bordered">

                    <tbody>


                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
                <div class="all_cont">
                    <div class="part">
                    <img class="note" src="./assets/images/note 2-4.png" alt="">
                        <!-- Drop Containers for Shapes -->
                        <div class="drop-container" shapenumber="1" isFilled="false">
                            <canvas id="dropContainer1" class="drop-container-canvas" width="110" height="110"></canvas>
                        </div>
                    </div>

                    <div class="part">

                        <div class="drop-container" shapenumber="3" isFilled="false">
                            <canvas id="dropContainer3" class="drop-container-canvas" width="110" height="110"></canvas>
                        </div>
                    </div>

                    <!-- Horizontal Spacing -->
                    <div class="part">

                        <div class="drop-container" shapenumber="5" isFilled="false">
                            <canvas id="dropContainer5" class="drop-container-canvas" width="110" height="110"></canvas>
                        </div>
                    </div>
                    <div class="part">

                        <div class="drop-container" shapenumber="7" isFilled="false">
                            <canvas id="dropContainer7" class="drop-container-canvas" width="110" height="110"></canvas>
                        </div>
                    </div>
                </div>

                <div id="shapeContainer">

                    <canvas id="wholeNote" class="shape"></canvas>

                    <canvas id="halfNote" class="shape"></canvas>
                    <canvas id="quarterNote" class="shape"></canvas>
                    <canvas id="eightNote" class="shape"></canvas>
                    <canvas id="sixteenthNote" class="shape"></canvas>
                    <canvas id="halfRest" class="shape"></canvas>
                    <canvas id="wholeRest" class="shape"></canvas>
                    <canvas id="quarterRest" class="shape"></canvas>
                    <canvas id="eightRest" class="shape"></canvas>
                    <canvas id="sixteenRest" class="shape"></canvas>
 
                </div>
                        <button type="button" class="btn btn-primary next-btn btnnext level1">Next</button>
                    
            </div>
                <!-- <button type="button" class="btn btn-secondary prev-btn btnprev">Previous</button>
                <button type="button" class="btn btn-primary next-btn btnnext">Next</button> -->

        </form>
        <div class="progress-indicator mt-4">
            <div class="progress-step progress-step-active"></div>
            <div class="progress-step"></div>
            <div class="progress-step"></div>
            <div class="progress-step"></div>
        </div>
    </div>
    <input type="hidden" id="userlrn" value="<?php echo $_SESSION["user_lrn"]?>">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="stages.js"></script>
    <script src="stage1.js"></script>
</body>

</html>