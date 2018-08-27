    <?php
    /**
     * Created by PhpStorm.
     * User: комп
     * Date: 14.08.2018
     * Time: 19:07
     */



    /** days detector **/
/*
    $dayId = date('w');

    if ($dayId <= 5){
        $hour = (int)date('h');
        $workDayEndHour = 17;
        $workDayStartHour = 8;

        if($workDayStartHour < $hour && $hour < $workDayEndHour){
            $hoursToDayEnd = $WorkDayEndHour -  $hour;
            echo 'Today you should work only'. $hoursToDayEnd . 'hour(s)';
        }
        elseif($workDayStartHour > $hour){
            $hoursToWorkDayStart = $workDayStartHour - $hour;
            echo 'You should go to work after '. $hoursToWorkDayStart . ' hour(s)';
        }
        elseif($hour > $workDayEndHour){
            $hourAfterWork = $hour -  $workDayEndHour;
            echo 'You should be ar home at'. $hourAfterWork . 'hour(s)';
        }
        else {
            echo 'Thomething wrong with Time!' ;
        }
    }
    else {
        echo 'Weekend!!!' ;

    }

*/
    /*

    $dayId = date('w');

    if ($dayId <= 5) {
        $hour = (int)date('H');
        $workDayEndHour = 18;
        $workDayStartHour = 9;

        if ($workDayStartHour < $hour && $hour < $workDayEndHour) {
            $hoursToDayEnd = $workDayEndHour - $hour;
            echo 'Today you should work just ' . $hoursToDayEnd . ' hour(s)';
        } elseif ($workDayStartHour > $hour) {
            $hoursToWorkDayStart = $workDayStartHour - $hour;
            echo 'You should go to work after ' . $hoursToWorkDayStart . ' hour(s)';
        } elseif ($hour > $workDayEndHour) {
            $hoursAfterWork = $hour - $workDayEndHour;
            echo 'You should be at home ' . $hoursAfterWork . ' hour(s)';
        } else {
            echo 'Something is wrong with time';
        }
    } else {
        echo 'Weekend!!!';
    }

    */

    $dayId = date('w');

    if ($dayId<=5) {
        $hour = (int) date('H');
        $workDayEndHour = 18;
        $workDayStartHour = 9;

        if ($workDayStartHour< $hour && $hour < $workDayEndHour) {
            $hoursToDayEnd = $workDayEndHour - $hour;
            echo 'Today you should work just '. $hoursToDayEnd. 'hour (s)';
        }
elseif ($workDayStartHour>$hour) {
            $hoursToWorkDayStart = $workDayStartHour - $hour;
            echo  'You should go to work after'. $hoursToWorkDayStart. 'hour(s)';
        }
        elseif ($hour > $workDayEndHour) {
            $hoursAfterWork = $hour - $workDayEndHour;
            echo  'You should be at home'. $hoursAfterWork.'hour(s)';
        } else {
            echo  'Something is wrong with time';
        }
        }
        else {
            echo 'Weekend!!!!';
        }
