<?php
/*
	Image Uploader Class
	developed by: Novi
	Date Developed: September 27,2014
	(c) 2014 | novhz0514@gmail.com
	github: github.com/novhex
	
	
	Description:
	Multiple Image Upload with Simple image validation
	You can use it in your projects but don't forget to give credits to me :)
	
	You can modify the source if you want.
	For suggestions email me :)
	
	*/
class Foo
{
	//folder where to save uploaded images
	private $dir_path="file-uploads/";
	

	
	
	public function __construct(){
		/* This function will be called everytime to check if the folder 'file-uploads' exists*/
		$this->checkFolder();	
}
	
/*
Check if the folder exists 
returns true if the folder exists
if not it will generate the folder
*/
private function checkFolder(){

		if(!file_exists($this->dir_path))
		{
			mkdir($this->dir_path);	
		}else
		{
			return true;
		}
}

/*
Uploading your image file to the directory 'file-uploads'
*/
	
public function upload_Image($source_file,$file_name)
	{
			if(isset($file_name)&&isset($source_file))
			{
			
					for($i=0; $i<$this->image_count=count($source_file);$i++)
					{
						if(getimagesize($source_file[$i])) {
							$this->uploaded_state=move_uploaded_file($source_file[$i],$this->dir_path.$file_name[$i]);
						}else
						{
							echo "Invalid Image File: ".$file_name[$i];	
						}
					}

			}
		}
	
}

?>
