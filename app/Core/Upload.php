<?php

namespace App\Core;

class Upload
{

    public function __construct()
    {        

    }

	public static function register($data){
        $dirUser = 'images/users/';
		if (!is_dir(STRORAGE.$dirUser) ) {
			mkdir(STRORAGE.$dirUser);  
		}
		try {
			if ($data['name'] != '' && $data['temp'] != '' && $data['newName'] != '') {
				$filename   = $data['newName'];
				$extension  = pathinfo($data['name'], PATHINFO_EXTENSION );
				$basename   = $filename . "." . $extension;

				$source       = $data['temp'];
				$destination  = $dirUser.$basename;

				if(file_exists(STRORAGE .$destination)){
					unlink(STRORAGE .$destination);
				}
				if (move_uploaded_file($source, STRORAGE .$destination)) {
					return $destination;
				} else{
					return $dirUser."user.png";
				}
			} else {
				return $dirUser."user.png";
			}
			
		} catch(PDOException $e) {
			echo json_encode($e->getMessage());
		}	
	}

}
