<!doctype html>
<html lang="en">


<?php require 'src/findDate.php' ?>

<!-- HEAD -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.5/css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>Retour vers le futur</title>
</head>

<body>

<h1>Retour vers le futur</h1>


<div class="container-fluid">
    <div id="contenu" class="row">

        <div class="col-lg-6">

            <div class="container">
                <form class="form-group" method="get">


                    <div class="form-group">
                        <br/>
                        <label for="date">Start Date</label>
                        <input type="date" class="form-control" id="date" name="date" value="1985-12-31">
                    </div>

                    <div class="form-group">
                        <br/>
                        <label for="interval">Duration (from Marty's calculation)</label>
                        <input type="text" class="form-control" id="interval" name="interval" value="1000000000">
                    </div>

                    <div class="form-group">
                        <br/>
                        <input type="submit" name="submit" value="Let's go !">
                    </div>

                    <div class="form-group">
                        <br/>
                        <form>
                            <input type="button" value="New calculation" onclick="history.back()">
                        </form>
                    </div>

                </form>
            </div>
        </div>

        <div class="col-lg-6">

            <div class="container">
                <br/>
                <?php
                if (isset($_GET['date']) and isset($_GET['interval'])){
                    ?>
                <ul>
                    <p>Results :</p>
                    <li>
                        <?php
                            $calcul = new FindDate($_GET['date'], $_GET['interval']);
                            echo "According to Marty's calculation, Doc is back on " . $calcul -> finalDate();
                            ?>
                    </li>
                    <li>
                        <?php echo $calcul->getTravelInfo(); ?>
                    </li>
                    <li>
                        <?php echo $calcul->backToTheFutureStepByStep(); ?>
                    </li>

                </ul>
                <?php } ?>


            </div>
        </div>
    </div>
</div>

<














<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.5/js/mdb.min.js"></script>
</body>
</html>