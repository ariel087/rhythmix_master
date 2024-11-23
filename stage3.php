<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Step-by-Step Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="stage3.css">
</head>

<body>
    <div class="container mt-5">
        <form id="multiStepForm">
            <div class="form-step form-step-active">
                <p>Complete the rhythmic pattern by adding the notes or rest to the staff.</p>
                <table class="table table-bordered">
                    <img class="note" src="./assets/images/note 4-4.png" alt="">

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
                        <!-- Drop Containers for Shapes -->
                        <div class="drop-container" shapenumber="1" isFilled="false">
                            <canvas id="dropContainer1" class="drop-container-canvas" width="110" height="110"></canvas>
                        </div>

                        <div class="drop-container" shapenumber="2" isFilled="false">
                            <canvas id="dropContainer2" class="drop-container-canvas" width="110" height="110"></canvas>
                        </div>
                        <div class="drop-container" shapenumber="3" isFilled="false">
                            <canvas id="dropContainer3" class="drop-container-canvas" width="110" height="110"></canvas>
                        </div>
                        <div class="drop-container" shapenumber="4" isFilled="false">
                            <canvas id="dropContainer4" class="drop-container-canvas" width="110" height="110"></canvas>
                        </div>
                    </div>

                    <div class="part">

                        <div class="drop-container" shapenumber="5" isFilled="false">
                            <canvas id="dropContainer5" class="drop-container-canvas" width="110" height="110"></canvas>
                        </div>
                        <div class="drop-container" shapenumber="6" isFilled="false">
                            <canvas id="dropContainer6" class="drop-container-canvas" width="110" height="110"></canvas>
                        </div>
                        <div class="drop-container" shapenumber="7" isFilled="false">
                            <canvas id="dropContainer7" class="drop-container-canvas" width="110" height="110"></canvas>
                        </div>
                        <div class="drop-container" shapenumber="8" isFilled="false">
                            <canvas id="dropContainer8" class="drop-container-canvas" width="110" height="110"></canvas>
                        </div>
                    </div>

                    <!-- Horizontal Spacing -->
                    <div class="part">

                        <div class="drop-container" shapenumber="9" isFilled="false">
                            <canvas id="dropContainer9" class="drop-container-canvas" width="110" height="110"></canvas>
                        </div>
                        <div class="drop-container" shapenumber="10" isFilled="false">
                            <canvas id="dropContainer10" class="drop-container-canvas" width="110" height="110"></canvas>
                        </div>
                        <div class="drop-container" shapenumber="11" isFilled="false">
                            <canvas id="dropContainer11" class="drop-container-canvas" width="110" height="110"></canvas>
                        </div>
                        <div class="drop-container" shapenumber="12" isFilled="false">
                            <canvas id="dropContainer12" class="drop-container-canvas" width="110" height="110"></canvas>
                        </div>
                    </div>
                    <div class="part">

                        <div class="drop-container" shapenumber="13" isFilled="false">
                            <canvas id="dropContainer13" class="drop-container-canvas" width="110" height="110"></canvas>
                        </div>
                        <div class="drop-container" shapenumber="14" isFilled="false">
                            <canvas id="dropContainer14" class="drop-container-canvas" width="110" height="110"></canvas>
                        </div>
                        <div class="drop-container" shapenumber="15" isFilled="false">
                            <canvas id="dropContainer15" class="drop-container-canvas" width="110" height="110"></canvas>
                        </div>
                        <div class="drop-container" shapenumber="16" isFilled="false">
                            <canvas id="dropContainer16" class="drop-container-canvas" width="110" height="110"></canvas>
                        </div>
                    </div>
                </div>

                <div id="shapeContainer">

                    <canvas id="wholeNote" class="shape"></canvas>
                    <canvas id="wholeNote" class="shape"></canvas>
                    <canvas id="halfNote" class="shape"></canvas>
                    <canvas id="halfNote" class="shape"></canvas>
                    <canvas id="quarterNote" class="shape"></canvas>
                    <canvas id="quarterNote" class="shape"></canvas>
                    <canvas id="eightNote" class="shape"></canvas>
                    <canvas id="eightNote" class="shape"></canvas>
                    <canvas id="sixteenthNote" class="shape"></canvas>
                    <canvas id="sixteenthNote" class="shape"></canvas>
                    <canvas id="halfRest" class="shape"></canvas>
                    <canvas id="halfRest" class="shape"></canvas>
                    <canvas id="wholeRest" class="shape"></canvas>
                    <canvas id="wholeRest" class="shape"></canvas>
                    <canvas id="quarterRest" class="shape"></canvas>
                    <canvas id="quarterRest" class="shape"></canvas>
                    <canvas id="eightRest" class="shape"></canvas>
                    <canvas id="eightRest" class="shape"></canvas>
                    <canvas id="sixteenRest" class="shape"></canvas>
                    <canvas id="sixteenRest" class="shape"></canvas>

                </div>

                <button type="button" class="btn btn-secondary prev-btn btnprev">Previous</button>
                <button type="button" class="btn btn-primary next-btn btnnext level3">Next</button>
            </div>

        </form>
        <div class="progress-indicator mt-4">
            <div class="progress-step"></div>
            <div class="progress-step"></div>
            <div class="progress-step progress-step-active"></div>
            <div class="progress-step"></div>
        </div>
    </div>
    <input type="hidden" id="userlrn" value="<?php echo $_SESSION["user_lrn"]?>">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="stage3.js"></script>
    <script src="stages.js"></script>
</body>

</html>