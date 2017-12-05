<?php 

function teste($callback){
	//pçrocesso lento
	$callback();
}


teste(function(){
	echo 'Terminou';
});

?>