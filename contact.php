<?php
    ob_start();

    $page_title = null;
    $page_title = 'Contact';
    require_once('header.php');
?>

<div class="container">
        <form method="post" action="send-contact.php" enctype="multipart/form-data" class="form-signin">
            <h2 class="form-signin-heading">Have a question? Please Enquire Below</h2>
            <label for="inputName">Name:</label>
            <input type="text" name="inputName" id="inputName" class="form-control" placeholder="Name" required autofocus>
            <label for="inputEmail">Email address:</label>
            <input type="email" name="inputEmail" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
            <label for="inputMessage">Message:</label>
            <textarea class="form-control" id="inputMessage" name="inputMessage" rows="3">
             
            </textarea>
            <button class="btn btn-lg btn-primary" type="submit">Submit</button>
        </form>
        </div>

<?php
//embed footer
require_once('footer.php');
ob_flush();
?>