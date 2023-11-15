<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anonim Forum</title>
</head>
<body>
    <header>
        <button class="header_menu-btn inline" onclick="open_menu()"><img class="header_menu-btn-img" src="img/menu.png"></button>
        <h3 class="inline">Messages</h3>
    </header>
    <section>
        <?php 
            $messages = file_get_contents('messages.json');
            $object = json_decode($messages);
            echo '<div><strong>'.$object->name.'</strong><p>'.$object->text.'</p></div>';
        ?>
    </section>
    <footer>
        <form class="general_border_message" method="POST">
            <div class="border_message">
                <input type="text" name="name" placeholder="Name">
                <textarea name="text" class="message_text" placeholder="Message..."></textarea>
            </div>
            <input class="border_message-btn" type="submit" name="send" value="Send">
        </form>
    </footer>
</body>
</html>