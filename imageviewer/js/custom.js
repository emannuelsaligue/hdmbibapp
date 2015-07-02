    var lang='no';
    function checkConnection() {
    var networkState = navigator.network.connection.type;

    var states = {};
    states[Connection.UNKNOWN]  = 'Unknown connection';
    states[Connection.ETHERNET] = 'Ethernet connection';
    states[Connection.WIFI]     = 'WiFi connection';
    states[Connection.CELL_2G]  = 'Cell 2G connection';
    states[Connection.CELL_3G]  = 'Cell 3G connection';
    states[Connection.CELL_4G]  = 'Cell 4G connection';
    states[Connection.NONE]     = 'No network connection';

    
     if(networkState==Connection.NONE)
          return false;
        else
         return true; 
         networkState = null;
         states = null;
    }
    function nav(navi) {
    
    $.mobile.changePage(navi,{reverse:false,transition:"none"});
    return false;
    }
    function nav2(navi) {
        
    window.location=navi;
    return false;
    }
    function internal(navi) {
            if(checkConnection()){
                 $.mobile.changePage(navi,{reverse:false,transition:"none"});
                  
                  return false;
                }
            else{
                nointernet();
            }
    }
    function external(navi) {
            if(checkConnection()){
                window.open(navi, '_system'); 
                  return false;
                }
            else{
                nointernet();
            }
    }
    function home(navi){
         $('#searchtextdiv').html('<input type="text" name="search" id="searchtext" maxlength="2" />');
         $('#searchtextdiv2').html('<input type="text" name="search" id="searchtext2" maxlength="2" />');
         $('#searchtextdiv3').html('<input type="text" name="search" id="searchtext3" maxlength="2" />');
             $.mobile.changePage(navi,{reverse:false,transition:"none"});
    }
    function onBackKeyDown() {
         $('#searchtextdiv').html('<input type="text" name="search" id="searchtext" maxlength="2" />');
        $('#searchtextdiv2').html('<input type="text" name="search" id="searchtext2" maxlength="2" />');
        $('#searchtextdiv3').html('<input type="text" name="search" id="searchtext3" maxlength="2"/>');
    history.go(-1);
    navigator.app.backHistory();
    $('#searchtext').blur();
    $('#searchtext2').blur();
    $('#searchtext3').blur();
    return false;
    }
    function onBackKeyDown2() {
       history.go(-1);
    }
    function historyback() {
    if($.mobile.activePage.is('#furtwangen')){
       alert("furtwangen");
        
       // e.preventDefault();
       // navigator.app.exitApp();
    }
    else{
        alert("notfurtwangen" + $.mobile.activePage.attr('id'));
    }
       
    }

 function nointernet() {
           
var text='' ;
var lang = navigator.language.split("-");
var current_lang = (lang[0]);
     if(current_lang=='de'){
         navigator.notification.alert(
            'Internetzugang notwendig',  // message
            alertDismissed,         // callback
            'Achtung',            // title
            'OK'                  // buttonName
        );
     }
    else{
         navigator.notification.alert(
            'Internet access required',  // message
            alertDismissed,         // callback
            'Attention',            // title
            'OK'                  // buttonName
        );
    }
    
    }
function na(target){ 
}
function langtext(eng,deutsch){
  
var text='' ;
var lang = navigator.language.split("-");
var current_lang = (lang[0]);
 //alert( "current_lang: " + current_lang );
    
    if(current_lang=='de'){
          text=deutsch;
            
        }
    else{
          text=eng; 
           
        }
    current_lang=null;
    
    lang=null;
    return text;
}

 
 
