<?php


function buttons(){
    $db_server = "localhost";
    $db_name = "soundman_sound";
    $db_user = "soundman_sound";
    $db_pass = "GZq9Jizs";
    $conn = mysql_connect($db_server,$db_user,$db_pass);
    @mysql_select_db($db_name, $conn) or die( "Unable to select $db_name");

    $button_list = array (
        drum_vol_up,
        piano_vol_up,
        guitar_vol_up,
        bass_vol_up,
        leader_vol_up,
        alto_vol_up,
        soprano_vol_up,
        tenor_vol_up,
        drum_vol_dn,
        piano_vol_dn,
        guitar_vol_dn,
        bass_vol_dn,
        leader_vol_dn,
        alto_vol_dn,
        soprano_vol_dn,
        tenor_vol_dn
    );


    global $normal_background;
    global $alert_background;
    global $body_background;

    $normal_background = 'bgcolor="404040"';
    $alert_background = 'background="images/alert_background.gif"';
    $body_background = $normal_background;


    $drum_vol_up_query = "select status from button_status where name='drum_vol_up'";
    $piano_vol_up_query = "select status from button_status where name='piano_vol_up'";
    $guitar_vol_up_query = "select status from button_status where name='guitar_vol_up'";
    $bass_vol_up_query = "select status from button_status where name='bass_vol_up'";
    $leader_vol_up_query = "select status from button_status where name='leader_vol_up'";
    $alto_vol_up_query = "select status from button_status where name='alto_vol_up'";
    $soprano_vol_up_query = "select status from button_status where name='soprano_vol_up'";
    $tenor_vol_up_query = "select status from button_status where name='tenor_vol_up'";

    $drum_vol_dn_query = "select status from button_status where name='drum_vol_dn'";
    $piano_vol_dn_query = "select status from button_status where name='piano_vol_dn'";
    $guitar_vol_dn_query = "select status from button_status where name='guitar_vol_dn'";
    $bass_vol_dn_query = "select status from button_status where name='bass_vol_dn'";
    $leader_vol_dn_query = "select status from button_status where name='leader_vol_dn'";
    $alto_vol_dn_query = "select status from button_status where name='alto_vol_dn'";
    $soprano_vol_dn_query = "select status from button_status where name='soprano_vol_dn'";
    $tenor_vol_dn_query = "select status from button_status where name='tenor_vol_dn'";

    // UPDATE ALL BUTTONS FROM THE DATABASE
    $drum_vol_up_button = mysql_fetch_assoc(mysql_query($drum_vol_up_query));
    $drum_vol_up_button = $drum_vol_up_button[status];
    if ($_POST['drum_vol_up']){
        if ($drum_vol_up_button == 0){
            mysql_query("update button_status set status='1' where name='drum_vol_up'");
            $drum_vol_up_button = 1;
        }else if ($drum_vol_up_button == 1){
            mysql_query("update button_status set status='0' where name='drum_vol_up'");
            $drum_vol_up_button = 0;
        }
    }


    $drum_vol_dn_button = mysql_fetch_assoc(mysql_query($drum_vol_dn_query));
    $drum_vol_dn_button = $drum_vol_dn_button[status];
    if ($_POST['drum_vol_dn']){
        if ($drum_vol_dn_button == 0){
            mysql_query("update button_status set status='1' where name='drum_vol_dn'");
            $drum_vol_dn_button = 1;
        }else if ($drum_vol_dn_button == 1){
            mysql_query("update button_status set status='0' where name='drum_vol_dn'");
            $drum_vol_dn_button = 0;
        }
    }


    $piano_vol_up_button = mysql_fetch_assoc(mysql_query($piano_vol_up_query));
    $piano_vol_up_button = $piano_vol_up_button[status];
    if ($_POST['piano_vol_up']){
        if ($piano_vol_up_button == 0){
            mysql_query("update button_status set status='1' where name='piano_vol_up'");
            $piano_vol_up_button = 1;
        }else if ($piano_vol_up_button == 1){
            mysql_query("update button_status set status='0' where name='piano_vol_up'");
            $piano_vol_up_button = 0;
        }
    }


    $piano_vol_dn_button = mysql_fetch_assoc(mysql_query($piano_vol_dn_query));
    $piano_vol_dn_button = $piano_vol_dn_button[status];
    if ($_POST['piano_vol_dn']){
        if ($piano_vol_dn_button == 0){
            mysql_query("update button_status set status='1' where name='piano_vol_dn'");
            $piano_vol_dn_button = 1;
        }else if ($piano_vol_dn_button == 1){
            mysql_query("update button_status set status='0' where name='piano_vol_dn'");
            $piano_vol_dn_button = 0;
        }
    }


    $guitar_vol_up_button = mysql_fetch_assoc(mysql_query($guitar_vol_up_query));
    $guitar_vol_up_button = $guitar_vol_up_button[status];
    if ($_POST['guitar_vol_up']){
        if ($guitar_vol_up_button == 0){
            mysql_query("update button_status set status='1' where name='guitar_vol_up'");
            $guitar_vol_up_button = 1;
        }else if ($guitar_vol_up_button == 1){
            mysql_query("update button_status set status='0' where name='guitar_vol_up'");
            $guitar_vol_up_button = 0;
        }
    }


    $guitar_vol_dn_button = mysql_fetch_assoc(mysql_query($guitar_vol_dn_query));
    $guitar_vol_dn_button = $guitar_vol_dn_button[status];
    if ($_POST['guitar_vol_dn']){
        if ($guitar_vol_dn_button == 0){
            mysql_query("update button_status set status='1' where name='guitar_vol_dn'");
            $guitar_vol_dn_button = 1;
        }else if ($guitar_vol_dn_button == 1){
            mysql_query("update button_status set status='0' where name='guitar_vol_dn'");
            $guitar_vol_dn_button = 0;
        }
    }


    $bass_vol_up_button = mysql_fetch_assoc(mysql_query($bass_vol_up_query));
    $bass_vol_up_button = $bass_vol_up_button[status];
    if ($_POST['bass_vol_up']){
        if ($bass_vol_up_button == 0){
            mysql_query("update button_status set status='1' where name='bass_vol_up'");
            $bass_vol_up_button = 1;
        }else if ($bass_vol_up_button == 1){
            mysql_query("update button_status set status='0' where name='bass_vol_up'");
            $bass_vol_up_button = 0;
        }
    }


    $bass_vol_dn_button = mysql_fetch_assoc(mysql_query($bass_vol_dn_query));
    $bass_vol_dn_button = $bass_vol_dn_button[status];
    if ($_POST['bass_vol_dn']){
        if ($bass_vol_dn_button == 0){
            mysql_query("update button_status set status='1' where name='bass_vol_dn'");
            $bass_vol_dn_button = 1;
        }else if ($bass_vol_dn_button == 1){
            mysql_query("update button_status set status='0' where name='bass_vol_dn'");
            $bass_vol_dn_button = 0;
        }
    }


$leader_vol_up_button = mysql_fetch_assoc(mysql_query($leader_vol_up_query));
$leader_vol_up_button = $leader_vol_up_button[status];
if ($_POST['leader_vol_up']){
    if ($leader_vol_up_button == 0){
        mysql_query("update button_status set status='1' where name='leader_vol_up'");
        $leader_vol_up_button = 1;
    }else if ($leader_vol_up_button == 1){
        mysql_query("update button_status set status='0' where name='leader_vol_up'");
        $leader_vol_up_button = 0;
    }
}


$leader_vol_dn_button = mysql_fetch_assoc(mysql_query($leader_vol_dn_query));
$leader_vol_dn_button = $leader_vol_dn_button[status];
if ($_POST['leader_vol_dn']){
    if ($leader_vol_dn_button == 0){
        mysql_query("update button_status set status='1' where name='leader_vol_dn'");
        $leader_vol_dn_button = 1;
    }else if ($leader_vol_dn_button == 1){
        mysql_query("update button_status set status='0' where name='leader_vol_dn'");
        $leader_vol_dn_button = 0;
    }
}


$alto_vol_up_button = mysql_fetch_assoc(mysql_query($alto_vol_up_query));
$alto_vol_up_button = $alto_vol_up_button[status];
if ($_POST['alto_vol_up']){
    if ($alto_vol_up_button == 0){
        mysql_query("update button_status set status='1' where name='alto_vol_up'");
        $alto_vol_up_button = 1;
    }else if ($alto_vol_up_button == 1){
        mysql_query("update button_status set status='0' where name='alto_vol_up'");
        $alto_vol_up_button = 0;
    }
}


$alto_vol_dn_button = mysql_fetch_assoc(mysql_query($alto_vol_dn_query));
$alto_vol_dn_button = $alto_vol_dn_button[status];
if ($_POST['alto_vol_dn']){
    if ($alto_vol_dn_button == 0){
        mysql_query("update button_status set status='1' where name='alto_vol_dn'");
        $alto_vol_dn_button = 1;
    }else if ($alto_vol_dn_button == 1){
        mysql_query("update button_status set status='0' where name='alto_vol_dn'");
        $alto_vol_dn_button = 0;
    }
}


$soprano_vol_up_button = mysql_fetch_assoc(mysql_query($soprano_vol_up_query));
$soprano_vol_up_button = $soprano_vol_up_button[status];
if ($_POST['soprano_vol_up']){
    if ($soprano_vol_up_button == 0){
        mysql_query("update button_status set status='1' where name='soprano_vol_up'");
        $soprano_vol_up_button = 1;
    }else if ($soprano_vol_up_button == 1){
        mysql_query("update button_status set status='0' where name='soprano_vol_up'");
        $soprano_vol_up_button = 0;
    }
}


$soprano_vol_dn_button = mysql_fetch_assoc(mysql_query($soprano_vol_dn_query));
$soprano_vol_dn_button = $soprano_vol_dn_button[status];
if ($_POST['soprano_vol_dn']){
    if ($soprano_vol_dn_button == 0){
        mysql_query("update button_status set status='1' where name='soprano_vol_dn'");
        $soprano_vol_dn_button = 1;
    }else if ($soprano_vol_dn_button == 1){
        mysql_query("update button_status set status='0' where name='soprano_vol_dn'");
        $soprano_vol_dn_button = 0;
    }
}


$tenor_vol_up_button = mysql_fetch_assoc(mysql_query($tenor_vol_up_query));
$tenor_vol_up_button = $tenor_vol_up_button[status];
if ($_POST['tenor_vol_up']){
    if ($tenor_vol_up_button == 0){
        mysql_query("update button_status set status='1' where name='tenor_vol_up'");
        $tenor_vol_up_button = 1;
    }else if ($tenor_vol_up_button == 1){
        mysql_query("update button_status set status='0' where name='tenor_vol_up'");
        $tenor_vol_up_button = 0;
    }
}


$tenor_vol_dn_button = mysql_fetch_assoc(mysql_query($tenor_vol_dn_query));
$tenor_vol_dn_button = $tenor_vol_dn_button[status];
if ($_POST['tenor_vol_dn']){
    if ($tenor_vol_dn_button == 0){
        mysql_query("update button_status set status='1' where name='tenor_vol_dn'");
        $tenor_vol_dn_button = 1;
    }else if ($tenor_vol_dn_button == 1){
        mysql_query("update button_status set status='0' where name='tenor_vol_dn'");
        $tenor_vol_dn_button = 0;
    }
}

$message =  mysql_fetch_assoc(mysql_query("select text from button_status where name='message'"));
$message = $message[text];

if ($_POST['message']){
    $message = $_POST['message'];
    mysql_query("update button_status set text='$message' where name='message'");
}

if ($_POST['reset_message']){
    $message = "";
    mysql_query("update button_status set text='' where name='message'");
}

if ($_POST['clear_all']){
    $message = "";
    mysql_query("update button_status set text='' where name='message'");
    mysql_query("update button_status set status='0' where name='drum_vol_up'");
    mysql_query("update button_status set status='0' where name='drum_vol_dn'");
    mysql_query("update button_status set status='0' where name='piano_vol_up'");
    mysql_query("update button_status set status='0' where name='piano_vol_dn'");
    mysql_query("update button_status set status='0' where name='guitar_vol_up'");
    mysql_query("update button_status set status='0' where name='guitar_vol_dn'");
    mysql_query("update button_status set status='0' where name='bass_vol_up'");
    mysql_query("update button_status set status='0' where name='bass_vol_dn'");
    mysql_query("update button_status set status='0' where name='leader_vol_up'");
    mysql_query("update button_status set status='0' where name='leader_vol_dn'");
    mysql_query("update button_status set status='0' where name='alto_vol_up'");
    mysql_query("update button_status set status='0' where name='alto_vol_dn'");
    mysql_query("update button_status set status='0' where name='soprano_vol_up'");
    mysql_query("update button_status set status='0' where name='soprano_vol_dn'");
    mysql_query("update button_status set status='0' where name='tenor_vol_up'");
    mysql_query("update button_status set status='0' where name='tenor_vol_dn'");

}



// SETTING BUTTON CLASSES
if ($drum_vol_up_button == 0){
    $drum_vol_up_class = "greenbutton";
}if ($drum_vol_up_button == 1){
    $drum_vol_up_class = "redbutton";
}
if ($piano_vol_up_button == 0){
    $piano_vol_up_class = "greenbutton";
}if ($piano_vol_up_button == 1){
    $piano_vol_up_class = "redbutton";
}
if ($guitar_vol_up_button == 0){
    $guitar_vol_up_class = "greenbutton";
}if ($guitar_vol_up_button == 1){
    $guitar_vol_up_class = "redbutton";
}
if ($bass_vol_up_button == 0){
    $bass_vol_up_class = "greenbutton";
}if ($bass_vol_up_button == 1){
    $bass_vol_up_class = "redbutton";
}
if ($leader_vol_up_button == 0){
    $leader_vol_up_class = "greenbutton";
}if ($leader_vol_up_button == 1){
    $leader_vol_up_class = "redbutton";
}
if ($alto_vol_up_button == 0){
    $alto_vol_up_class = "greenbutton";
}if ($alto_vol_up_button == 1){
    $alto_vol_up_class = "redbutton";
}
if ($soprano_vol_up_button == 0){
    $soprano_vol_up_class = "greenbutton";
}if ($soprano_vol_up_button == 1){
    $soprano_vol_up_class = "redbutton";
}
if ($tenor_vol_up_button == 0){
    $tenor_vol_up_class = "greenbutton";
}if ($tenor_vol_up_button == 1){
    $tenor_vol_up_class = "redbutton";
}
if ($drum_vol_dn_button == 0){
    $drum_vol_dn_class = "greenbutton";
}if ($drum_vol_dn_button == 1){
    $drum_vol_dn_class = "redbutton";
}
if ($piano_vol_dn_button == 0){
    $piano_vol_dn_class = "greenbutton";
}if ($piano_vol_dn_button == 1){
    $piano_vol_dn_class = "redbutton";
}
if ($guitar_vol_dn_button == 0){
    $guitar_vol_dn_class = "greenbutton";
}if ($guitar_vol_dn_button == 1){
    $guitar_vol_dn_class = "redbutton";
}
if ($bass_vol_dn_button == 0){
    $bass_vol_dn_class = "greenbutton";
}if ($bass_vol_dn_button == 1){
    $bass_vol_dn_class = "redbutton";
}
if ($leader_vol_dn_button == 0){
    $leader_vol_dn_class = "greenbutton";
}if ($leader_vol_dn_button == 1){
    $leader_vol_dn_class = "redbutton";
}
if ($alto_vol_dn_button == 0){
    $alto_vol_dn_class = "greenbutton";
}if ($alto_vol_dn_button == 1){
    $alto_vol_dn_class = "redbutton";
}
if ($soprano_vol_dn_button == 0){
    $soprano_vol_dn_class = "greenbutton";
}if ($soprano_vol_dn_button == 1){
    $soprano_vol_dn_class = "redbutton";
}
if ($tenor_vol_dn_button == 0){
    $tenor_vol_dn_class = "greenbutton";
}if ($tenor_vol_dn_button == 1){
    $tenor_vol_dn_class = "redbutton";
}

//SET BACKGROUND BASED ON IF A BUTTON IS RED
if (($drum_vol_up_button or
    $drum_vol_dn_button or
    $piano_vol_up_button or
    $piano_vol_dn_button or
    $guitar_vol_up_button or
    $guitar_vol_dn_button or
    $bass_vol_up_button or
    $bass_vol_dn_button or
    $leader_vol_up_button or
    $leader_vol_dn_button or
    $alto_vol_up_button or
    $alto_vol_dn_button or
    $soprano_vol_up_button or
    $soprano_vol_dn_button or
    $tenor_vol_up_button or
    $tenor_vol_dn_button
== 1) or ($message != "")){
    $body_background = $alert_background;
}else{
    $body_background = $normal_background;
}


/* FOREACH LOOP TEST
foreach ($button_list as $i => &$button){
    $button_query = "select status from button_status where name='$button'";
    $button_status = mysql_fetch_assoc(mysql_query($button_query));
    $button_status = $button_status[status];
    //echo $button_status;
    if ($button_status == 0){
        //global $button_class;
        //echo $button_class;
        $button_class = "greenbutton";
    }else if ($button_status == 1){
        $button_class = "redbutton";
    }
    //echo $button_class;
    //return $button_class;
};

// OUTPUT ALL BUTTON STATUSES FOR TESTING

echo "<br>drum_vol_up_button = ".$drum_vol_up_button;
echo "<br>piano_vol_up_button = ".$piano_vol_up_button;
echo "<br>guitar_vol_up_button = ".$guitar_vol_up_button;
echo "<br>bass_vol_up_button = ".$bass_vol_up_button;
echo "<br>leader_vol_up_button = ".$leader_vol_up_button;
echo "<br>alto_vol_up_button = ".$alto_vol_up_button;
echo "<br>soprano_vol_up_button = ".$soprano_vol_up_button;
echo "<br>tenor_vol_up_button = ".$tenor_vol_up_button;
echo "<br><br>";
echo "<br>drum_vol_dn_button = ".$drum_vol_dn_button;
echo "<br>piano_vol_dn_button = ".$piano_vol_dn_button;
echo "<br>guitar_vol_dn_button = ".$guitar_vol_dn_button;
echo "<br>bass_vol_dn_button = ".$bass_vol_dn_button;
echo "<br>leader_vol_dn_button = ".$leader_vol_dn_button;
echo "<br>alto_vol_dn_button = ".$alto_vol_dn_button;
echo "<br>soprano_vol_dn_button = ".$soprano_vol_dn_button;
echo "<br>tenor_vol_dn_button = ".$tenor_vol_dn_button;
*/


echo '
<body '.$body_background.' text="white">

<table cellpadding="10" border="0" style="margin: 0 auto;">
<tr>
    <td align="center">
<!--
    <h1>Hey Mr. Soundguy</h1>
--!>
';



    echo '
    <table border="0" cellpadding="20" style="margin: o auto">
    <form action="index.php" method=POST>
    <tr>
        <td align="center" colspan="4">
            <font size="10">Music
        </td>
    </tr>
    <tr>
        <td align=center>
            <font size=6>Drums <br><br>
            <input class='.$drum_vol_up_class.' type="submit" name="drum_vol_up" value="Vol Up"><br><br>
       	    <input class='.$drum_vol_dn_class.' type="submit" name="drum_vol_dn" value="Vol Dn">
        </td>
        <td align=center>
            <font size=6>Piano <br><br>
            <input class='.$piano_vol_up_class.' type="submit" name="piano_vol_up" value="Vol Up"><br><br>
            <input class='.$piano_vol_dn_class.' type="submit" name="piano_vol_dn" value="Vol Dn">
        </td>
        <td align=center>
            <font size=6>Guitar <br><br>
            <input class='.$guitar_vol_up_class.' type="submit" name="guitar_vol_up" value="Vol Up"><br><br>
            <input class='.$guitar_vol_dn_class.' type="submit" name="guitar_vol_dn" value="Vol Dn">
        </td>
        <td align=center>
            <font size=6>Bass <br><br>
            <input class='.$bass_vol_up_class.' type="submit" name="bass_vol_up" value="Vol Up"><br><br>
            <input class='.$bass_vol_dn_class.' type="submit" name="bass_vol_dn" value="Vol Dn">
        </td>
    </tr>
    <tr>
        <td align=center colspan=4>
            <font size=10>Vocals
        </td>
    </tr>
    <tr>
        <td align=center>
            <font size=6>Leader <br><br>
            <input class='.$leader_vol_up_class.' type="submit" name="leader_vol_up" value="Vol Up"><br><br>
            <input class='.$leader_vol_dn_class.' type="submit" name="leader_vol_dn" value="Vol Dn">
        </td>
        <td align=center>
            <font size=6>Soprano <br><br>
            <input class='.$soprano_vol_up_class.' type="submit" name="soprano_vol_up" value="Vol Up"><br><br>
            <input class='.$soprano_vol_dn_class.' type="submit" name="soprano_vol_dn" value="Vol Dn">
        </td>
        <td align=center>
            <font size=6>Alto <br><br>
            <input class='.$alto_vol_up_class.' type="submit" name="alto_vol_up" value="Vol Up"><br><br>
            <input class='.$alto_vol_dn_class.' type="submit" name="alto_vol_dn" value="Vol Dn">
        </td>
        <td align=center>
            <font size=6>Tenor <br><br>
            <input class='.$tenor_vol_up_class.' type="submit" name="tenor_vol_up" value="Vol Up"><br><br>
            <input class='.$tenor_vol_dn_class.' type="submit" name="tenor_vol_dn" value="Vol Dn">
        </td>
    </tr>
    </form>
</table>
';


    echo '<br><br>
    <font size="10">Message
    <form action="index.php" method=POST>
    <input style="width:400" align="left" type="text" name="message">
    <input class=blackbutton type="submit" value="Send">
    <input class=blackbutton type="submit" name="reset_message" value="Clear">
    ';
    echo '<br><table style="align:left" align="left" width="400" height="100" bgcolor="black" border="0"><tr>
    <td style="text-align:left; vertical-align:top">';
    echo $message;
    echo '</td></tr></table>';
    echo '<br><br>
    <input class=blackbutton type="submit" name="refresh_page" value="Refresh Page">
    <input class=blackbutton type="submit" name="clear_all" value="Clear All">
    ';
}

$header1 = '
<html>
<head>'
;

$header2 = '
</head>

';


$footer = '
    </td>
</tr>
</table>


</div>
</body>
</html>

';

echo $header1;
echo '<link rel="stylesheet" href="style.css" type="text/css">';
echo $header2;
echo $body;
buttons();
echo "<br><br>";
echo $footer;


// Dump the current php to the browser
ob_flush();
flush();


$update_time_on_load = shell_exec("sudo sh update_time.sh");
$update_time_on_load = rtrim($update_time_on_load);

//Loop to reload page when database is updated
function end_loop($update_time_on_load){
    $update_time = shell_exec("sudo sh update_time.sh");
    $update_time = rtrim($update_time);

    if ($update_time_on_load == $update_time){
        end_loop($update_time_on_load);
    }
    if ($update_time_on_load != $update_time){
        //echo "Database was updated";
        // Refresh Page
        echo '<html><head><meta http-equiv="refresh" content="0"></head></html>';
    }
}
end_loop($update_time_on_load);

?>
