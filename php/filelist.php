<?php
/* Function for creating list of files in directory;
Version 08-12-2009;
Function parameters description:
1 - directory for getting files ('/' - by default);

Examples of usage:
filelist('../dir');
filelist('dir/dir2/');
filelist();
By default: filelist('/');
======================
function is_dir():
WORKS:
color
color/
/
NOT WORKS:
/color
/color/
------------------------------------ */


function filelist($directory='/'){


	$directory = trim($directory);
	$filename_patern = '^.+\.jpg|png|gif|txt|php|html|htm$';
	
	if ((is_dir($directory))) {
		$dir_handle = opendir($directory);
		while ($file_handle = readdir($dir_handle)) {
			
			if (($file_handle!='.')&&($file_handle!='..')) {
				if (is_file($directory.'/'.$file_handle)) {
					if (ereg($filename_patern, $file_handle)) {
						$filelist[] = $file_handle;
					}
				}
			}
		}
		closedir($dir_handle);
	} else {
		echo '<div class="error">Failed to open current directory.</div>';
		return false;
	}
	sort($filelist);
	
	return $filelist;
	
}

