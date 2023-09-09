<?php

namespace App\Helpers;

use DateTime;

class Validator {

    public static function dates(array $dates, string $format = "Y-m-d"): bool {

        if (is_array($dates)) {

            foreach ($dates as $name => $date) {

                $d = DateTime::createFromFormat($format, $date);

                if ($d === false || $d->format($format) !== $date) {

                    return false;
                }
            }
            return true;
        }
    }

    public static function input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }


}
