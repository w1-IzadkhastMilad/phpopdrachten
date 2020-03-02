</div>
<div class="box">
    <?php

    date_default_timezone_set("Europe/Amsterdam");
    $uur = date("H:i");
    $moment ='';
    if($uur >= '00:01' && $uur <= '05:00'){
        $moment = 'Goedennacht';
    }
    elseif ($uur >= '05:01' && $uur <= '12:00'){
        $moment = 'Goedenochtend';
    }
    elseif($uur >= '12:01' && $uur <= '17:00'){
        $moment = 'Goedenmiddag';
    }
    elseif ($uur >= '17:01' && $uur <= '00:00'){
        $moment = 'Goedenavond';
    }

    echo $moment + ' bezoeker, &copy; ' + ${USER} + ' ' + ${YEAR};
    ?>
</div>
</body>
</html>