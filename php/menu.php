<?php
/* Function for creating menu of all files in directory;
Version 29-12-2008;
Function parameters description:
1 - directory for getting pages for menu (self directory by default);
2 - relative or absolute links (absolute links by default);
3,4 - wraps the whole menu (<ul class="menu"> ... </ul> by default);
5,6 - wraps each item (<li> ... </li> by default);
7,8 - wraps active element (<li class="active"><strong> ... </strong></li> by default);

Examples of usage:
menu('../dir','rel','<div>','</div>','<span>','</span>',<b>,</b>);
menu('dir/dir2/');
menu();
By default: menu('/','abs','<ul class="menu">','</ul>','<li>','</li>','<li class="active"><strong>','</strong></li>');
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

include_once 'title.php';

function menu($menu_directory='/',
$rel_abs='abs',
$wrap_menu_begin='<ul class="menu">',
$wrap_menu_end='</ul>',
$wrap_item_begin='<li>',
$wrap_item_end='</li>',
$wrap_act_begin='<li class="active"><strong>',
$wrap_act_end='</strong></li>'){
	
// ! ------ Fix this link (prozirka/color/../color/index.php) - realpath()
// ! ------ make regular expression only for latin caracter names 

	$menu_directory = trim($menu_directory);
	if ($menu_directory=='') {$menu_directory='/';}
// removing first slash if it is in the path
	if ($menu_directory <> '/') {
		if ($menu_directory[0] == '/'){
			$menu_directory = substr($menu_directory,1); 
		}
	}
// removing last slash if it is in the path
	if ($menu_directory <> '/') {
		if ($menu_directory[strlen($menu_directory)-1] == '/'){
			$menu_directory = substr($menu_directory,0,-1);
		}
	}
// Global variables
	$path_array = pathinfo ($_SERVER['SCRIPT_NAME']);
	//$filename_patern = '^[a-zA-Z0-9]+\.htm|html|php|php3|phtml|asp$';
	//$filename_patern = '^[a-zA-Z0-9\-]+\.htm|html|php|php3|phtml|asp$';
	$filename_patern = '^.+\.php|html|htm|xhtml$';
	
	
// ========== Generating menu from self directory ('/')
	if ($menu_directory == '/') {
		if (empty($path_array['dirname'])) {
			$menu_directory = '';
			echo '<div class="error">Does not working in parent directory.</div>';
			return false;
		} else {
			$path_string = $path_array['dirname'];
			$path_array = explode('/',$path_string);
			$menu_directory = '../'.$path_array[count($path_array)-1].'/';
		}
		
// Generating list of file names;	
		if ((is_dir($menu_directory))) {
			$dir_handle = opendir($menu_directory);
			while ($file_handle = readdir($dir_handle)) {
				if (($file_handle!='.')&&($file_handle!='..')) {
					if (is_file($file_handle)) {
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
		
		if (empty($filelist)){
			echo '<div class="error">Current directory is empty.</div>';
			return false;
		} else {
			sort($filelist);
			echo chr(10).'	'.$wrap_menu_begin.chr(10);
			foreach ($filelist as $file) {
				$path_array = pathinfo($_SERVER['SCRIPT_NAME']);
				$path_to_folder = $path_array['dirname'];
				//$path_to_folder = substr($path_to_folder,1); // removing first slash
				$path_to_folder = $path_to_folder.'/';
				if ($rel_abs == 'rel') {$path_to_folder = '';}
				$path_for_title = $menu_directory.$file;
				$title = title($path_for_title);
// Generating menu; 
// variant 1: if ($path_array['basename'] == $file)
// variant 2: if (filesize($path_array['basename']) == filesize($menu_directory.$file))
				if (filemtime($path_array['basename']) == filemtime($file)) {
					echo '		'.$wrap_act_begin.$title.$wrap_act_end.chr(10);
				} else {
					echo '		'.$wrap_item_begin.'<a href="'.$path_to_folder.$file.'" title="'.$title.'">'.$title.'</a>'.$wrap_item_end.chr(10);
				}
			}
			echo '	'.$wrap_menu_end.chr(10);
		}
	} else {
		
// ========== Generating menu of some directory
// Generating list of file names;	
		$menu_directory=$menu_directory.'/';
		if ((is_dir($menu_directory))) {
			$dir_handle=opendir($menu_directory);
			while ($file_handle = readdir($dir_handle)) {
				if (($file_handle!='.')&&($file_handle!='..')) {
					if (is_file($menu_directory.'/'.$file_handle)) {
						if (ereg($filename_patern, $file_handle)) {
							$filelist[]=$file_handle;
						}
					}
				}
			}
			closedir($dir_handle);
		} else {
			echo '<div class="error">Failed to open <strong>'.$menu_directory.'</strong> directory.</div>';
			return false;
		}
		
		if (empty($filelist)){
			echo '<div class="error">Directory <strong>'.$menu_directory.'</strong> is empty.</div>';
			return false;
		} else {
			sort($filelist);
			echo chr(10).'	'.$wrap_menu_begin.chr(10);
			foreach ($filelist as $file) {
				$path_array = pathinfo($_SERVER['SCRIPT_NAME']);
				$path_to_folder = $path_array['dirname'];
				if (!empty($path_to_folder)){
					$path_to_folder = substr($path_to_folder,1); // removing first slash
					$path_to_folder = $path_to_folder.'/';
				}
				
				if ($rel_abs == 'rel') {$path_to_folder = '';}
				
				$path_for_title = $menu_directory.$file;
				$title = title($path_for_title);
// Generating menu; 
				if (filemtime($path_array['basename']) == filemtime($menu_directory.$file)) {
					echo '		'.$wrap_act_begin.$title.$wrap_act_end.chr(10);
				} else {
					echo '		'.$wrap_item_begin.'<a href="'.$path_to_folder.$menu_directory.$file.'" title="'.$title.'">'.$title.'</a>'.$wrap_item_end.chr(10);
				}
			}
			echo '	'.$wrap_menu_end.chr(10);
		}
	}

	
}


/*class A {
    function example() {
        echo "I am the original function A::example().<br />\n";
    }
}

class B extends A {
    function example() {
        echo "I am the redefined function B::example().<br />\n";
        A::example();
    }
}

// there is no object of class A.
// this will print
//   I am the original function A::example().<br />
A::example();

// create an object of class B.
$b = new B;

// this will print 
//   I am the redefined function B::example().<br />
//   I am the original function A::example().<br />
$b->example();

*/
