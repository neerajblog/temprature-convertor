<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Sigmar+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Sigmar+One|Ultra&display=swap" rel="stylesheet">
   
   
</head>
<body>
    <h1>TEMP.CONVERTOR</h1>
    <section>
        <div class="main">
           
             
            
            <div class="right-side">
                <div class="right-upper">

                        <form method="POST">
                            <div class="input">
                                <input type="text" name="num" placeholder="enter number" class="enter">
                                <select class="select" name="operation">
                                    <option value="cal">Cal</option>
                                    <option value="far">Faher</option>
                                </select>
                            
                            </div>
                            <input type="submit" name="submit" value="convert" class="conversion">
                        
                        </form>

               
                </div>
                <div class="lower">
                            <p>
                                <?php
                                

                                    if(isset($_POST["submit"]))
                                    {
                                        $number=$_POST["num"];
                                        $operation=$_POST["operation"];

                                       switch($operation)
                                       {
                                           case "cal":
                                            {
                                                $cal=($number*9/5)+32;
                                                echo $cal.  " Fahrenheit";
                                            break;
                                            }
                                            case "far":
                                                {
                                                    $far=($number-32)*5/9;
                                                    echo $far.  "Celsius";
                                                }
                                       }

                                    }
                                ?>
                            </p>
                            </div>
                
               
            </div>
               
           
            
        </div>
    </section>
    <script>

        document.querySelector(".select").addEventListener("click",sel);
        function sel()
        {
            var select=document.querySelector(".select").value;
            console.log(select);

           var convert= document.querySelector(".conversion");
          
           if(select=="cal")
           {
               convert.value="con. into far";
           }
           else
           {
               convert.value='con. into cal';
           }
        }
      
    </script>

</body>
</html>