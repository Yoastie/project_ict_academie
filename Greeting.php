<?php

date_default_timezone_set('Europe/Amsterdam');

$Hour = date('H');

if ($Hour >= 5 && $Hour <= 11)
{
    echo "Goede Morgen";
}
else if ($Hour >= 12 && $Hour <= 18)
{
    echo "Goede Middag";
}
else if ($Hour >= 19 || $Hour <= 4)
{
    echo "Goede Avond";
}

