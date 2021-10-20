<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="icon" href="https://cdn2.iconfinder.com/data/icons/ios7-inspired-mac-icon-set/512/Calculator_512.png">
    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Calculator</title>
  </head>
  <body>

    <section>
      <div class="container">
        <div class="row justify-content-center form-body align-items-center">
          <div class="col-lg-4">
            <div class="text">
              <h2>
                PHP
                <span>CALCULATOR</span>
              </h2>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="form">
              <form method="POST">
                <input type="number" name="num1" placeholder="Enter value">
                <input type="number" name="num2" placeholder="Enter value">
                <select name="operation">
                  <option value="add">ADD</option>
                  <option value="sub">SUB</option>
                  <option value="mult">MULT</option>
                  <option value="div">DIV</option>
                </select>
                <input type="submit" name="submit" value="Calculate">
              </form>
            </div>
           
          </div>

           <div class="col-lg-8 text-center">
            <h5>
            <?php

           if (isset($_POST['submit'])) {
             $num1 = $_POST['num1'];
             $num2 = $_POST['num2'];
             $operation = $_POST['operation'];

             switch ($operation) {
               case 'add':
                 $sum = $num1 + $num2;
                 echo "The addition of two number is $sum";
                 break;

               case 'sub':
                 $sum = $num1 - $num2;
                 echo "The subtraction of two number is $sum";
                 break;

               case 'mult':
                 $sum = $num1 * $num2;
                 echo "The multiplition of two number is $sum";
                 break;

               case 'div':
                 $sum = $num1 / $num2;
                 echo "The division of two number is $sum";
                 break;
               
               default:
                 echo "not exist";
                 break;
             }
           }

          ?>
        </h5>
            </div>


        </div>



      </div>
    </section>
    








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>