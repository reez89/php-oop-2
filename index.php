<!-- Crea un diagramma per una tabella di db che rappresenti gli Users di un blog.
Crea una classe User che rappresenti quella tabella, e usala per stampare in pagina i dati di alcuni Users.
Il database e la tabella non devono essere realmente creati.
 -->

 <?php 

include  __DIR__ . '/classes/user.php';

 $users = [
     new User ('nicola','reez89','ad10s','no','M',31),
     new User ('rosalia','rosy845','1234absjd','si','F',25),
     new User ('antonio','anthonyMac54','boomer45','si','M',57)
 ];

    foreach ($users as $user){
       
    };
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="users-container">
        <?php 
        foreach ($users as $user) {?>
            <div class="user">
                <h1> <?php echo $user->nickname?> </h1>
                <p> <?php echo $user->gender ?> </p>
                <p> <?php echo $user->age ?> </p>
            </div>
        <?php 
        } 
        ?>
    </div>
</body>
</html>