<?php 

require_once 'app/init.php';

$itemsQuery = $db->prepare("
        SELECT id, name, done 
        FROM items
        WHERE user = :user
");

$itemsQuery->execute([
    'user' => $_SESSION['user_id']
]);

$items = $itemsQuery->rowCount() ? $itemsQuery : [];

?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css2?family=Chango&family=Dancing+Script&family=Indie+Flower&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="stylesheet" href="assets/css/all.min.css">
        <script src="https://kit.fontawesome.com/6a824a900d.js" crossorigin="anonymous"></script>
        <title>To do list</title>
    </head>

    <body>

        <!-- TITRE -->

            <div class="list">
                <div class="title-container">
                    <h1 class="header">To do list</h1>
                </div>

        <!-- LISTE TACHE -->

                
                <?php if(!empty($items)): ?>
                <ul class="items">
                    <?php foreach($items as $item): ?>
                            <li class="item-box">
                                <span class="item<?php echo $item['done'] ? ' done': ' ' ?>"><?php echo $item['name']; ?> </span>
                                <?php if(!$item['done']): ?>
                                    <button class="button"><a href="mark.php?as=done&item=<?php echo $item['id']; ?>">Mark as done</a></button>
                                <?php elseif($item['done']): ?>
                                    <button class="button"><a href="mark.php?as=notdone&item=<?php echo $item['id']; ?>">Not done</a></button>    
                                <?php endif; ?>
                                <button class="trash"><a href="mark.php?as=delete&item=<?php echo $item['id']; ?>"><i class="fas fa-trash-alt"></i></a></button> 
                            </li>   
                            
                    <?php endforeach; ?>
                </ul>
                <?php else: ?>
                    <p>You haven't added any items yet.</p>
                <?php endif; ?>
                
                
                
                


            <!-- BARRE D'ENTREE -->


                <span class="search-bar">
                    <form class="items-add" action="add.php" method="post">
                        <input type="text" name="name" placeholder="Type a new item here" class="input" autocomplete="off" required>
                        <input type="submit" value="Add" class="submit-btn">
                    </form>
                </span>

            
        



            

        </body>
</html>



