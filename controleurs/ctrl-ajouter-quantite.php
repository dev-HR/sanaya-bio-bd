<?php
	
	session_start() ;
	
	$code = $_GET[ 'codeProduit' ] ;
	$quantite = $_GET[ 'quantite' ] ;
	
		
	try {
		
		// VOTRE CODE ICI
		
		
		
				
		header( 'Location: ../vues/vue-stock.php' ) ;
	}
	catch( PDOException $e ){

		session_unset() ;
		session_destroy() ;
		
		header( 'Location: ../index.php?echec=0' ) ;
	}	
		
	
?>
