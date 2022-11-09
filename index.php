
<?php require_once("header.php"); ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HomePage HW 5</title>
    
    
    
     <base href = "https://www.tutorialspoint.com/" />
      
      <script type = "text/JavaScript">
        function thisisjava()
        {
         document.body.innerHTML="this id JAVA CONTANT";
        }
        
        
        
         function Hello() 
        {
            alert("Hello, tHIS TEXT WAS WRITTEN VIA JAVA");
        }
      </script>
    
    
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  

    
  
  
  
  <body>
    thisisjava();
    
        <br>
    
        <br>
   <input type = "button" onclick = "Hello();" name = "ok" value = "Click Me" />
        <br>
    <br>
    <button type="button"
onclick="document.getElementById('demo').innerHTML = Date()">
Click me to display Date and Time.</button>

<p id="demo"></p>

        <br>
        <br>
<form>
  
  first number: <input typpe="number1" name ="enter first Number">
  second number: <input typpe="number2" name ="enter second Number">
  third number: <input typpe="number3" name ="enter third Number">
 <input type="submit" name ="Submit">
  
  </form>
   
    


    
       
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>
