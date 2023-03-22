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
    echo "Ai! Ja het is vandaag bistro maandag";
} else {
    echo "Nee! Het is vandaag snack-" . $today . ".";
}
