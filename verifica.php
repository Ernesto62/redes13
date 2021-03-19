<?php
if (isset($_POST['a']) && isset($_POST['b']) && isset($_POST['c']) && isset($_POST['d']) ) {

	$txt1=$_POST['a'];
	$txt2=$_POST['b'];
	$txt3=$_POST['c'];
	$txt4=$_POST['d'];
	if ($txt1>=0 && $txt1<=255 && $txt2>=0 && $txt2<=255 && $txt3>=0 && $txt3<=255 && $txt4>=0 && $txt4<=255 ) {
		if($txt1>=1 && $txt1<=126){
        echo "classe A ";
        if ($txt1==10) {

        	echo "Privado";
        }

    }
    elseif ($txt1==127) {

    	echo "loopback ou localhoost";
    	
    }
    elseif($txt1>=128 && $txt1<=191){
        echo "classe B ";
        if ($txt1==172 && $txt2>=16 && $txt1==172 && $txt2==31) {

        	echo "Privado";
        }
    }
    elseif($txt1>=192 && $txt1<=223){
        echo "classe C ";
         if ($txt1==192 && $txt2==168) {

        	echo "Privado";
        }
        else {
        	echo "Publico";
        }
    }
    elseif($txt1>=224 && $txt1<=239){
        echo "classe D ";
        echo "publico";
    }
    elseif($txt1>=240 && $txt1<=254){
        echo "classe E ";
        echo "Publico e não utilizada";

    }

}


   else {echo ("ERRO");}
}
?>