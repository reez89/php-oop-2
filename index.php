<!-- Crea un diagramma per una tabella di db che rappresenti gli Users di un blog.
Crea una classe User che rappresenti quella tabella, e usala per stampare in pagina i dati di alcuni Users.
Il database e la tabella non devono essere realmente creati.
 -->

 <?php 

include  __DIR__ . '/classes/user.php';
include __DIR__ . '/classes/moderator.php';
include __DIR__ . '/classes/admin.php';

    $users = [
        new User ('nicola','reez89','ad10s','no','M',31),
        new User ('rosalia','rosy845','1234absjd','si','F',25),
        new User ('antonio','anthonyMac54','boomer45','si','M',57)
 ];


    $moderators =[
        new Moderatore ('franco','francuzzo88','mancopert3','si','M',22,'SI'),
        new Moderatore ('gianna','giannaLapanna34','mancopert3','si','F',18,'SI'),
        new Moderatore ('ernesto','ernestThegreat','mancopert3','si','M',23,'SI')
    ];

    $admins =[
        new Admin ('Luca','lucaadmin90','machere223','si','m',25,'SI')
    ];
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <style>
        *{margin:0;padding:0;box-sizing: border-box;}
        body {display: flex; }
        .users-container, .moderators-container { margin: 0 1.2rem}
        .users-container p,.moderators-container p {padding: 1.2rem 0}

    </style>
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
            <div class="moderators-container">
                <?php 
                    foreach ($moderators as $moderetor) {?>
                        <div class="user">
                            <h1> <?php echo $moderetor->nickname?> </h1>
                            <p> <?php echo $moderetor->gender ?> </p>
                            <p> <?php echo $moderetor->age ?> </p>
                            <p> <?php echo $moderetor->privilegi_mod ?> </p>
                        </div>
                    <?php 
                    } 
                    ?>
            </div>
            
        </body>
</html>