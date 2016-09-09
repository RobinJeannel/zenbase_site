<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Zenbase</title>
    <!--<link rel="shortcut icon" href="http://emojipedia-us.s3.amazonaws.com/cache/e3/01/e301192e04353d2683f2894102bda853.png">-->
    <link rel="icon" type="image/png" href="images/logozenbaseorange.png" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="product.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
    <link href="http://emojicss.com/emoji.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.transitions.css">



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- Leave those next 4 lines if you care about users using IE8 -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
<?php
include("menu.php");
?>

<div class="container">
  <div class="row clearfix">
    <div class="col-xs-12 text-center">
      <div class="box-why"> 
        <h2 class="box-title">Zenbase n'est pas fait pour toutes les entreprises <i class="em em-raised_hand"></i></h2>
          <p class="box-subtitle">(Vous pouvez utiliser Zenbase si)</p>
          <div class="vertical-line"></div>
          <ul class="box-authorize" id="content-authorize">
            <li>Avez compris que des salariés engagés mutliplirons la valeur créée</li>
            <li>Avez compris que la base de la relation client passe par des équipes motivés</li>
            <li>Avez compris le boulvelersment que subit le monde du travail aujourd'hui</li>
            <li>Etes conscient qu'on en manage plus comme il y a 10 ans</li>
          </ul>
        <input type="submit" name="commit" value="Vous vous reconnaisez ? Essayer maintenant !" id="INPUT_3" />
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-6">
      <div class="view-answer">
        <div class="postCenter">
          <img src="images/aurélienmalfait.jpg" alt="" class="photo-manager">
          <p>Bonjour Robin, comment évalue-tu ta motivation cette semaine ?</p>
        </div>
        <div class="postCenter">
          <img src="images/aurélienmalfait.jpg" alt="" class="photo-manager">
          <p></p>
        </div>
        <div class="postCenter">
          <img src="images/aurélienmalfait.jpg" alt="" class="photo-manager">
          <p>Bonjour Robin, comment évalue-tu ta motivation cette semaine ?</p>
        </div>
        <div class="postCenter">
          <img src="images/aurélienmalfait.jpg" alt="" class="photo-manager">
          <p></p>
        </div>
      </div>
    </div>

    <div class="col-md-6 text-center">
      <p class="benefit-employee-title">Une interface pensée pour l'éxpérience de vos collaborateurs<i class="em em-tada"></i></p>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6">
    <p>feheofi</p>
    </div>

    <div class="col-md-6">
    <p>fhizeoihf</p>
    </div>
  </div>

</div>
 
</body>

<footer>
  
</footer>
<!-- Including Bootstrap JS (with its jQuery dependency) so that dynamic components work -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src='https://cdn.slaask.com/chat.js'></script>
    <script>
    _slaask.init('6d3a8a5fe1ab1a4be64623de9af8c9eb');
</script>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>

<script type="text/javascript">
  $('.postCenter').each(function(i){
    $(this).addClass("hiddenClass").data('delay', i * 500);
}).viewportChecker({
    callbackFunction: function(elem, action){
        setTimeout(function(){
            $(elem).addClass('visibleClass');
        }, $(elem).data('delay'));
    }
});
</script>
