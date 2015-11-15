<!DOCTYPE html>
<html>
<head>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous">



<style type="text/css">
    .conf-news{
        display:none;
    }

</style>

</head>
<body>
    <h1>to keep</h1>
<div class="news-cont container">
    <div class="align">
        <form id="email-form" method="post" action="subscribe.php" accept-charset="utf-8">
            <div class="row pads">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
                    <h2 class="news-title cent">Rep al teu mail les últimes notícies d’Orgull Pagès</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
                    <input id="em" type="email" name="email" placeholder="El teu correu electrònic">
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-2 col-md-offset-5" style="text-align:center;">
                    <button type="submit" id="news-submit">Subscriure</button>
                </div>
            </div>
        </form>

    </div>
</div><!--container-->

<!-- SUCCESS-->
<div class="conf-news container">
    <div class="align">
        <div class="row pads">
            <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                <h2 class="conf-title cent">Bé!<br>
    Pots confirmar la subscripció a la bústia d’entrada del teu correu electrònic</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-md-2 col-md-offset-5" style="text-align:center;">
                <button type="button" onclick="location.href='http://orgullpages.wp#main-anchor'" id="conf-news">Aceptar</button>
            </div>
        </div>
    </div>
</div><!--container-->

<div id="form-messages"></div>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
<script type="text/javascript" src="app.js"></script>


</html>
