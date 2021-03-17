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
            <div class="list">
                <div class="title-container">
                    <h1 class="header">To do list</h1>
                </div>




                <ul class="items">
                    <li><span class="item">Pick up shopping</span>
                    <button class="done-button"><a href="#">Mark as done</a>
                </li></button>
                    <li><span class="item done">walk doggo</span></li>
                </ul>


                <span class="search-bar">
                    <form class="items-add" action="add.php" method="post">
                        <input type="text" name="name" placeholder="Type a new item here" class="input" autocomplete="off" required>
                        <input type="submit" value="Add" class="submit-btn">
                    </form>
                </span>

            </div>
        


            

        </body>
</html>

