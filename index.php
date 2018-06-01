<pre>
<?php 

if(isset($_FILES['arquivo'])){
    
    //Envio de 1 unico arquivo
    $nome = $_FILES['arquivo']['name']; // arquivo.jpg
    
    //Envio de multiplos arquivos
    $nome = $_FILES['arquivo']['name']; // ARRAY
    
}

?>
</pre>

<form method="POST" enctype="multipart/form-data">

	Arquivo: <br/>
	
	<input type="file" name="arquivo[]" multiple /><br/><br/>
	
	<input type="submit" value="Enviar Arquivos" />

</form>