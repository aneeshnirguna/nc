<!DOCTYPE html>
<html lang="en">
<head>
<?php
	    include "v_head.php";
?>
<!--<link rel="stylesheet" href="<?=NC_ASSSETS_CSS?>createarticle.css">-->
</head>
<body id="top">
<?php
	    // include "v_menu.php";
?>
<script src="<?=NC_ASSSETS_EDITOR?>ckeditor.js"></script>
 <form>
            <textarea name="editor1" id="editor1">
               
            </textarea>
            <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
               // CKEDITOR.replace( 'editor1' );
			   
				CKEDITOR.replace( 'editor1', {
				//language: 'fr',
				 extraPlugins: 'imageuploader',
				uiColor: '#9AB8F3'
				
			
					});
            </script>
        </form>

</body>
</html>