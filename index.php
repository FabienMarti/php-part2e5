<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex5</title>
</head>
<body>
    <p>
        <?php 
            $gender = 'Femme';
            if($gender != 'Homme'){
                echo('C\'est une développeuse !!!');
            }
            else{
                echo('C\'est un développeur !!!'); 
            }
        ?>
    </p>
</body>
</html>