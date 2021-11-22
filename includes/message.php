<?php 

// Sessão 
session_start();
if(isset($_SESSION['mensagem'])): ?>
	<script>
		// exibe mensagem de sucesso
		window.onload = function(){
			M.toast({html: '<?php echo $_SESSION['mensagem']; ?>'})
		};
	</script>

	<?php
endif;
// Encerra a sessão 
session_unset();
