<!DOCTYPE html>
<html>
<head>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>


<style type="text/css">

    .conf-cont {
        display:none;
    }
</style>
</head>  

<body>
    <h1>same page tho!</h1>
    <div class="container contact-cont">
        <div class="align">
            <div class="row pads">
                <div class="col-xs-12 col-md-8 col-md-offset-2 cent">
                <h2 class="cont-title">Per a qualsevol dubte o consulta, estarem agraïts que ens ho comuniquis omplint les teves dades de contacte.</h2>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 col-md-offset-3">
                <form id="ajax-contact" class="contact" method="post" action="mailer.php">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6"><input type="text" id="nom" name="nom" placeholder="Nom" class="required form-control" autocomplete="off" required /></div>
                        <div class="col-xs-12 col-sm-6"><input type="text" id="poblacio" name="poblacio" placeholder="Població"></div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6"><input type="email" id="email" name="email" placeholder="Correu electrònic" class="required" autocomplete="off" required /></div>
                        <div class="col-xs-12 col-sm-6"><input type="tel" id="tel" name="tel" placeholder="Telèfon" autocomplete="off"></div>
                    </div>  
                    <div class="row">
                        <div class="col-xs-12">
                            <textarea id="comentari" name="comentari" placeholder="El teu comentari" class="required" autocomplete="off"required></textarea>
                        </div>  
                    </div>
                    <div class="row">
                        <div class="col-xs-12 cent accept">
                            <input id="czech" type="checkbox" name="accept-legal" class="required" required />
                            <label for="czech"><span></span></label>
                            <p>He llegit i accepto les condicions legals.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 cent aq">
                            <p><span style="color:rgba(243,160,171,1);">*</span>Aquests camps son obligatoris</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 cent">
                            <input id="cont-submit" type="submit" placeholder="Enviar">
                        </div>
                    </div>
                </form>
                <!--error messages-->
                <div id="form-messages"></div>
            </div>  
        </div>
    </div>
 <!--success message-->
    <div id="form-messages"></div>
    <div class="conf-cont container">
        <div class="align">
            <div class="row pads">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
                    <h2 class="conf-title cent">Gràcies per confiar en nosaltres!
        Ens posarem en contacte amb tu al més aviat possible.</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-2 col-md-offset-5" style="text-align:center;">
                    <button type="button" id="conf-accept" onclick="location.href='http://orgullpages.wp#main-anchor'">Aceptar</button>
                </div>
            </div>
        </div>
    </div><!--container-->

</body>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="app.js"></script>
</html>

