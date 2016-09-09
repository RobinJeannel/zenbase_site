<head>
    <link rel="stylesheet" type="text/css" href="animate.css" />
</head>

Scroll down
<div class="container">
<div class="row">
 <div class="col-xs-4">
   <div class="postCenter">Blah blah blah </div>
 </div>
 <div class="col-xs-4">
   <div class="postCenter">Blah blah blah </div>
 </div>
 <div class="col-xs-4">
   <div class="postCenter">Blah blah blah </div>
 </div>
</div>

<style>
    
    @import url('http://getbootstrap.com/dist/css/bootstrap.css');

.postCenter {
    height: 100px;
    background: green;
    color: white;
    transition: opacity 1s;
}

.hiddenClass {
    opacity: 0,1;
}

.visibleClass {
    opacity: 1;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="homepage/scroll-effects/assets/viewportchecker.js"></script>
<script type="text/javascript">
    $('.postCenter').each(function(i){
    $(this).addClass("hiddenClass").data('delay', i * 1500);
}).viewportChecker({
    callbackFunction: function(elem, action){
        setTimeout(function(){
            $(elem).addClass('visibleClass');
        }, $(elem).data('delay'));
    }
});
</script>