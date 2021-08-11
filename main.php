<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice </title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="flex-container">
        <div class="header">     
            <div class="content-wrapp header">
                
               <?php include 'logo.inc.php' ?>         
               <?php include 'menu.inc.php' ?>	   
            </div>
        </div>       
        <div class="about_me">         
            <div class="content-wrapp">
                <h1><?php  echo $p  ?> </h1>
            </div>
            <div class="data">
                <div class="content-wrapp">
                    <div class="myImg">
                        <?php  echo '<img src="img/php.jpg">'; ?>                    
                    </div>
                    <div class="fullname">
                        <p> Меня зовут 
                        <?php echo $name, ' ', $surname . '<br>'; 
                            echo 'город', ' ', $city; ?>                                      
                        </p> 
            
                        <p> Мне
                        <?php  echo $age;   ?>          
                        лет </p>
                        <p> Мы научились создавать переменные </p>
                        <p> Изучили простые операции с ними </p>
                        
                    </div>
                </div>
            </div>
            <div class="knowledge">
                <div class="content-wrapp">                   
                    <?php  include 'knowledge.inc.php'; ?>
                    <?php   echo $a, ' ', $b, ' ', $c; ?> <br>
                                       
                    <?php
                        $a = 10;
                        $b = 20;
                        $c = $a + $b;
                        echo $c;
                    ?>   <br>                
                     <?php
                        echo $d;
                    ?> 
                </div>
            </div>
            <div class="article">
                <div class="content-wrapp">
                <p class="text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                    Recusandae asperiores ducimus dolore explicabo. Animi est amet quibusdam molestias! 
                    Minus laudantium sapiente dignissimos possimus natus cumque delectus sed, accusantium totam quia?
                </p>        
                </div>
            </div> 

        </div>
        <?php include 'footer.inc.php' ?>
    </div>
</body>
</html>
