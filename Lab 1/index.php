<?php
require_once "config.php";
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];
$error = false;
$res;
if (isset($_POST['submit'])) {
    foreach ($_POST as $key => $value) {
        if (empty($value)) {
            $res .= "$key is required, ";
            $error = true;
        }
    }
    if (!$error) {
        if (strlen($name) > $max_name_length) {
            $res .= "Name length must be less than 100, ";
            $error = true;
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $res .= "Email must be valid, ";
            $error = true;
        }
        if (strlen($message) > $max_message_length) {
            $res .= "Message must be less than 255 characters, ";
            $error = true;
        }
    }
}

?>


<html>

<head>
    <title> contact form </title>


</head>

<body>
    <?php
    if ($error) {
        ?>
        <h3> Contact Form </h3>
        <div id="after_submit">

        </div>
        <h3>
            <?php echo $res; ?>
        </h3>
        <form id="contact_form" action="#" method="POST" enctype="multipart/form-data">

            <div class="row">
                <label class="required" for="name">Your name:</label><br />
                <input id="name" class="input" name="name" type="text" value="<?php echo $name ?>" size="30" /><br />

            </div>
            <div class="row">
                <label class="required" for="email">Your email:</label><br />
                <input id="email" class="input" name="email" type="text" value="<?php echo $email ?>" size="30" /><br />

            </div>
            <div class="row">
                <label class="required" for="message">Your message:</label><br />
                <textarea id="message" class="input" name="message" rows="7"
                    cols="30"><?php echo $message ?></textarea><br />

            </div>

            <input id="submit" name="submit" type="submit" value="Send email" />
            <input id="clear" name="clear" type="reset" value="clear form" />

        </form>
        <?php
    } else {
        $res = "Thank you for contacting Us";
        ?>

        <div>
            <h3 style="color:green;">
                <?php echo $res; ?>
            </h3>
            <p>Name:
                <?php echo $name; ?>
            </p>
            <p>Email:
                <?php echo $email; ?>
            </p>
            <p>Message:
                <?php echo $message; ?>
            </p>
        </div>

        <?php
    }
    ?>
</body>

</html>