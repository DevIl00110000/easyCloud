<?php
define('PARAM', [
	
	"EULA" => true,
	"redirect_aft_upload" => false,
	"redirect_aft_delete" => false,
	"max_file_size" => 1073741824, /** Value in byte 
	* 1 Byte = 1 octet = 8 bits
	*
	* 1 Go = 1073741824 o
	* 1 Mo = 1048576 o
	* 1 Ko = 1024 o
	*/

	"access_mdp" => ["000e793db70c59309fa6f0f36d0046d110f3be3c"], // in sha1 , not just "" or a space  
	"upload_mdp" => ["bb73aaafa1596e5425dc514a361ad4ef658f2758"], // in sha1 , not just "" or a space  
	"delete_mdp" => ["9485989ff514b5106b7738850fd73c23e8c1e3f7"], // in sha1 , not just "" or a space  

	"ext_image" => ["png", "jpg", "jpeg", "gif"],
	"ext_audio" => ["wma", "wav", "ogg", "mp3"],
	"ext_video" => ["avi", "wmv", "mov", "webm", "mp4"],
	"ext_docum" => ["text", "txt", "pdf", "doc", "odt", "docx", "zip", "rar"]

]);
?>