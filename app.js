window.onload = function(){
    

    var xmlHttp;
    var SearchBttn = document.getElementById("SearchBtn");
    var Result = document.getElementById("result");
   

    SearchBttn.addEventListener('click',function(e){
        e.preventDefault();
        

        
        var search = document.getElementById("search").value;
        
         //Create request object
        xmlHttp  = new XMLHttpRequest();
    
        //url = 'superheroes.php?q='+search;
        url = 'superheroes.php?search=' + search;
        
        //Receive a request
        
        xmlHttp.onreadystatechange = Request;
        xmlHttp.open('GET', url);
        //xmlHttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xmlHttp.send();
        
    });
    
    


    function Request(){
        if((xmlHttp.readyState === XMLHttpRequest.DONE) && (xmlHttp.status === 200))
        {
            
            //Output response
           //var response = xmlHttp.responseText;
           //alert(response);
           Result.innerHTML = xmlHttp.responseText;
        }
       
    }


};