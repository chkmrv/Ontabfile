	<?php
	   if($_FILES["filename"]["size"] > 1024*3*1024)
	   {
	     echo ("Размер файла превышает три мегабайта");
	     exit;
	   }
	   if(is_uploaded_file($_FILES["filename"]["tmp_name"]))
	   {
	     move_uploaded_file($_FILES["filename"]["tmp_name"], "/path/to/file/".$_FILES["filename"]["name"]);
	   } else {
	      echo("Ошибка загрузки файла");
	   }
	?>