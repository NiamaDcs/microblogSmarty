<?php
    if(preg_match("/@[a-z-_]/", " je joue à @mon_pseudola guitare.")) {
    
     preg_replace("/@[a-z-_]/", "/<a>@[a-z-_]</a>/")

        echo "Vrai";
    }else
    {
        echo "FAUX";
    }

?>