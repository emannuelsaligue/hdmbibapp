<!DOCTYPE html>
<html>
    <head>
       <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
        <meta name="format-detection" content="telephone=no" />
      <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0"/>
 
        <link href="imageviewer/css/boilerplate.css" rel="stylesheet" type="text/css"/>
         <link href='imageviewer/css/forimageviewer.css' rel='stylesheet' type='text/css'/>
        <link href="imageviewer/css/style.css" rel="stylesheet" type="text/css"/> 
        <link href="imageviewer/css/fluid-grid.css" rel="stylesheet" type="text/css"/>
        <link href="imageviewer/css/iphone4orless.css" rel="stylesheet" type="text/css"/>
        <link href="imageviewer/css/iphone5orlater.css" rel="stylesheet" type="text/css"/>
        <link href="imageviewer/css/ipad.css" rel="stylesheet" type="text/css"/>
        <link href="imageviewer/css/main.css" rel="stylesheet" type="text/css"/>
        
        <link href="imageviewer/css/jquery.mobile.structure-1.0.min.css" rel="stylesheet" type="text/css"/>
        <script src="imageviewer/js/jquery.js" type="text/javascript"></script>
        <script src="imageviewer/js/jquery.mobile-1.4.1.min.js" type="text/javascript"></script>
        
        <script src="imageviewer/js/custom.js" type="text/javascript"></script>
         
		
          
   <link rel="stylesheet" href="css/themes/be1432.min.css" />
<link rel="stylesheet" href="css/themes/jquery.mobile.icons.min.css" />
                
		<!-- jQuery -->
		<script src="js/jquery.min.js"></script>
		
		<!-- jQueryMobile -->
		<script src="js/jquery.mobile.min.js"></script>
		
		<!-- Owl Carousel -->
		<script src="js/owl.carousel.min.js"></script>
		
		<!-- NIGHTLY JS -->
		<script src="js/nightly.js"></script>
        
        <script src="js/panel.js"></script>

         
         
         <script src="imageviewer/js/search_f_f.js" type="text/javascript"></script>
         
         
        <script src="imageviewer/js/hammer.js"></script>
        <script src="imageviewer/js/jquery.hammer.js"></script>
        <script src="imageviewer/js/myLogic.js"></script>
    
 
        
         
        <title>HFU Bib</title>
        <script>
    var txt='';
        document.addEventListener("deviceready", onDeviceReady, false);

// PhoneGap is loaded and it is now safe to make calls PhoneGap methods
//
function onDeviceReady() {


 
   if(checkConnection()){
   // alert('you are ONline');
    }
    else{
      //    alert('you are Offline');
    }
    $(document).addEventListener("touchmove", function (e) {
        
    e.preventDefault(); 
}, false);
 $(document).addEventListener("touchMove" ,onTouchMoveScrollable);


}
function getParameterByName(name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
        results = regex.exec(location.search);
    return results == null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}
 
        </script>
     

    </head>
    <body onload="">
 
    
    <!-- ########################################################  Tour  -->
<div data-role="page" id="imageviewer_f"  style="direction:rtl;background-color: #fff;">
       
<!--
 <div data-role="header" data-tap-toggle="false" data-theme='a'>
                <div id="homeb" ontouchstart="nav2('index.html');" style="color: #be1432;">h</div>       
            <div  id="backb" ontouchend="onBackKeyDown2();"  style="color: #be1432;">b</div>    <h1 class="header-title">Medien</h1>
                
  </div>
  -->
   <div id="menu">
         <div id="buttonContainer">
            <div id="homeb" ontouchstart="nav2('index.html');">h</div>       
            <div  id="backb" ontouchend="onBackKeyDown2();">b</div>
         
            <div class="clearfix"></div>
         </div> 
      </div>

 
  
     <div id="zoomwrapper"     >
    <div id="zoom" class="zoomProps"   >
        <div class="polaroid"   id="img_f"   >
            <img src="images/s/f/a.png" alt="" id="floorp" />
        </div>
    </div>
    </div>
<!----> 
  <script type="text/javascript">
leftpanel();
</script>

</div><!-- endof page imageviewer-->
 
 
 
   
 
  
 
<img src="css/img/menu_bg.png" style="display:none;" /> 
  
        <script type="text/javascript" src="cordova.js"></script>
        <script type="text/javascript" src="imageviewer/js/index.js"></script>
        <script type="text/javascript">
            app.initialize();
            $("body").css("display", "none");
            $("body").fadeIn(500);
                 
                 
      var discription;
     var forr= getParameterByName('for');
     var filename=    getParameterByName('filename');
      var file=    getParameterByName('file');
      /*
       alert(forr+" =for");
              alert(filename+" =filename");
               alert(file+" =file");
       */
     
      
          discription= search_f_f(file,'discription');      
      
/* document.getElementById("img_f").innerHTML='<img  src="imageviewer/hdm_bib_EG_bereinigt_end.png'+ filename+'" alt="" id="floorp" /> '      

  */  document.getElementById("img_f").innerHTML='<img  src="imageviewer/hdm_bib_EG_bereinigt_end.png" alt="" id="floorp" /> '      
        </script>
    </body>
</html>
