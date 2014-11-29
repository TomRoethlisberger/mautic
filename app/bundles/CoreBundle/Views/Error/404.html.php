<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>An Error Occurred: <?php echo $status_text; ?></title>
    </head>
    <body>
        <h1>Oops! An Error Occurred</h1>
        <h2>The server returned a "<?php echo $status_code; ?> <?php echo $status_text; ?>".</h2>

        <div>
            Something is broken. Please let us know what you were doing when this error occurred.
            We will fix it as soon as possible. Sorry for any inconvenience caused.
        </div>
    </body>
</html>