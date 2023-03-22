<?php

$formatter = new IntlDateFormatter(
    'nl_NL',
    IntlDateFormatter::FULL,
    IntlDateFormatter::NONE,
    null,
    null,
    'EEEE'
);

$today = $formatter->format(new DateTime());

if ($today === "maandag") {
    $title = 'Ja 😢';
    $image = 'sad_guy.svg';
    $text = 'Het is vandaag bistro-maandag. Maar McDonalds-maandag is ook lekker!';
} else {
    $title = 'Nee 🥳';
    $image = 'bbq_guy.svg';
    $text = 'Het is vandaag snack-'.$today;
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ishetbistromaandag.nl</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f2f2f2;
            padding: 50px;
        }
        h1 {
        font-size: 2.5em;
        color: #333;
        }
        p {
            font-size: 1.5em;
            color: #555;
        }
        img {
            max-width: 100%;
            height: auto;
            margin: 30px 0;
        }
    </style>
</head>
    <body>
        <h1><?php echo $title; ?></h1>
        <img src="<?php echo $image; ?>" alt="BBQ Guy">
        <p><?php echo $text; ?></p>
    </body>
</html>
