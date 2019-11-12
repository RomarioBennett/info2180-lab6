window.onload = function(){                                    


//function myFunction() {
//  alert("$s");
//};



var httpRequest;

var loadButton = document.queryselector("#loadBtn");
 
//loadButton.addEventListener('click', function(myFunction){
//myFunction.preventDefault();

//GET request
var httpRequest = new XMLHttpRequest();
var url = "superheroes.php";
httpRequest.onreadystatechange = myFunction;
httpRequest.open('GET', url);
httpRequest.send();

});

function myFunction() {
  
  
  
  
  
  
  
  
    if (httpRequest.readyState === XMLHttpRequest.DONE) {
      if (httpRequest.status === 200) {
        var response = httpRequest.responseText;
        alert(response);
      } else {
        alert('There was a problem with the request.');
      }
    }
  
}
};