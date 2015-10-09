<?php




?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>dvhsdhv</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href= "//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.min.css" rel="stylesheet">

    <!-- Bootstrap css -->
    <link rel="stylesheet" media="screen" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">

    <!--ikony  font-awesome-->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="jumbotron">
    <div class="container">
        <h1>Wypozyczalnia ksiazek</h1>

        <p>Witaj w mojej wypozyczalni ksiazek</p>

    </div>


</div>

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<!-- formularz dodawania ksiazki-->
            <form action="" class="form-horizontal">
                <div class="form-group">
                    <label for="bookName" class="col-sm-3">Nazwa ksiazki:</label>
                    <div class="col-sm-9">
                        <input type="text" name="bookName" id="bookName" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="bookAuthor" class="col-sm-3">Autor ksiazki:</label>
                    <div class="col-sm-9">
                        <input type="text" name="bookAuthor" id="bookAuthor" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="bookDescription" class="col-sm-3">Opis ksiazki:</label>

                    <div class="col-sm-9">
                        <textarea name="bookDescription" id="bookDescription" class="form-control"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-9">
                        <button type="submit" class="btn btn-default codersAjax" data-method="POST"><i class="fa fa-plus-circle"></i>
                            Dodaj ksiazke</button>
                    </div>

                </div>
            </form>

        </div>
    </div>

</div>




<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="js.js"></script>
</body>
</html>


<?php
