<?php
 $color=$_POST["color"];
 $dateofbirth=$_POST["date"];
 $firstname=$_POST["firstname"];
 $secondname=$_POST["secondname"];
 $email=$_POST["email"];
 $gender=$_POST["gender"];
 $department=$_POST["department"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body{
            background-color:<?php echo $color ;?>;
        }
        .grid{
            display:grid;
            grid-template-columns:20% 25% 25% 20% ;
            grid-template-rows:auto auto;
            justify-content:space-between;
            align-content:center;
        }
        .grid-item1{
            grid-column:2/4;
    
        }
        .grid-item2{
            grid-row:2/3;
    
        }
       .grid-item4{
        grid-area:2/3/3/4 ;
       } 
       .grid-item3{
        grid-area:2/2/3/3 ;
       } 
       h1{
           text-align:center;
       }

        
@media screen and (max-width:800px) {
        .grid{
            font-size:14px;
            display:grid;
            grid-template-columns:auto;
            grid-template-rows:auto auto auto auto ;
            justify-content:space-between;
            align-content:center;
            row-gap:10px
        }
         .grid-item1{
            grid-column:1/2;
    
        }
        .grid-item2{
            grid-row:2/3;
    
        }
       .grid-item3{
        grid-area:3 / 1 /4 / 2;
       } 
       .grid-item4{
        grid-area: 4 / 1/ 5 / 2;
       }  
       
} 
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body >
<h1>my web page</h1>
    <div class="grid">
       <div class="grid-item1"><h3>wejapa Internship week 3 task (form validation)</h3></div>
       <div class="grid-item2">My name is <?php echo $firstname." ". $secondname ; ?> I was born <?php echo $dateofbirth;?> I am a <?php echo $gender ;?> from Nigeria and I'm single, in the department of <?php echo $department;?> and my email address is <?php echo $email ; ?> </div>
       <div class="grid-item3">I'm a mechanical Engineering graduate from formally Anambra state university now Chukwuemeka Odumegwu Ojukwu university.</div>
       <div class="grid-item4">I love coding, sport(soccer), mathematics, cars and technology.</div>
    </div>
</body>
</html>