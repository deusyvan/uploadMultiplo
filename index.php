<pre>
<?php 

if(isset($_FILES['arquivo'])){
    
    if (count($_FILES['arquivo']['tmp_name']) > 0) {
        
        for ($q=0; $q<count($_FILES['arquivo']['tmp_name']);$q++){
            
            move_uploaded_file($_FILES['arquivo']['tmp_name'][$q], 'arquivos/');
        }
    }
    
}

?>
</pre>

<form method="POST" enctype="multipart/form-data">

	Arquivo: <br/>
	
	<input type="file" name="arquivo[]" multiple /><br/><br/>
	
	<input type="submit" value="Enviar Arquivos" />

</form>