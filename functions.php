<?php
function create4Div($colorsArray) {
    for ($i = 0; $i < 4; $i++){
        $randomColor = mt_rand(0, (count($colorsArray) - 1));
        echo '<div style="background-color:'.$colorsArray[$randomColor].'; width:300px; height:300px;"></div>';
        unset($colorsArray[$randomColor]);
        $colorsArray = array_values($colorsArray);
    }
}

function calendar($month) {
        echo '<table cellpadding="10" border="4" style="font-size:100px; margin: 10px auto; border-collapse: collapse; text-align:center;">';
        addDaysName();
        switch($month) {
            case 1:
                addDaysNumber(6, 31);
                break;
            case 2:
                addDaysNumber(2, 28);
                break;
            case 3:
                addDaysNumber(2, 31);
                break;
            case 4:
                addDaysNumber(5, 30);
                break;
            case 5:
                addDaysNumber(7, 31);
                break;
            case 6:
                addDaysNumber(3, 30);
                break;
            case 7:
                addDaysNumber(5, 31);
                break;
            case 8:
                addDaysNumber(1, 31);
                break;
            case 9:
                addDaysNumber(4, 30);
                break;
            case 10:
                addDaysNumber(6, 31);
                break;
            case 11:
                addDaysNumber(2, 30);
                break;
            case 12:
                addDaysNumber(4, 31);
                break;
            default:
                echo 'Wrong month number';
                break;
        }
        echo '</table>';
    }

function addDaysName() {
        $days = ['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'];
        echo '<tr>';
        foreach ($days as $k => $v) {
            if ($k < 5) {
                echo '<td>'.$v.'</td>';
            } else {
                echo '<td style="color: red";>'.$v.'</td>';
            }
        }
        echo '</tr>';
    }


function addDaysNumber($startDayName, $daysInMonth) {
        $day = 1;
        while ($day <= $daysInMonth) {
            echo '<tr>';   
            for ($i = 1; $i < 8; $i++) {
                if ($i < $startDayName || $day > $daysInMonth) {
                    echo '<td></td>';
                } else {
                    if ($i < 6) {
                        echo '<td>'.$day.'</td>';
                    } else {
                        echo '<td style="color: red";>'.$day.'</td>';
                    }

                    $day++;
                }         
            }
            $startDayName = 1;
            echo '</tr>';
        }


    }