Developed by Dev IL. 


If you have a question or just want talk with me, you can come on [my Twitter](https://twitter.com/DevIl00110000).


# EULA
Is simple : 
* Don't do something illégal.
* I'm not responsible to what do you do. (i'm not your mother)

# How to use

### Start
* Download the zip
* Extract all files
* Modify param.json, change the value of EULA to true IF YOU ACCEPT THE TERMS OF USE

It's like that : 
``` json
"EULA" : false,
```
And need to be like that : 
``` json
"EULA" : true,
```


### Default password
The default password for access to cloud is **cloud**

The default password for upload to cloud is **upload**

### Setting
All parameters are in "param.json" :
``` json
{
	"EULA" : true,

	"max_file_size" : 104857600,

	"access_mdp" : ["000e793db70c59309fa6f0f36d0046d110f3be3c"],
	"upload_mdp" : ["bb73aaafa1596e5425dc514a361ad4ef658f2758"],

	"ext_image" : ["png", "jpg", "jpeg", "gif"],
	"ext_audio" : ["wma", "wav", "ogg", "mp3"],
	"ext_video" : ["avi", "wmv", "mov", "webm", "mp4"],
	"ext_docum" : ["text", "txt", "pdf", "doc", "docx"]
}
```
Explication :
* ***max_file_size*** : Maximum size of the uploaded file
* ***access_mdp*** : Password allowed to access files (encrypted in php sha1)
* ***upload_mdp*** : Password allowed to upload files (encrypted in php sha1)
* ***ext_XXXXX*** : extensions of which you consider like a XXXXX

## /!\ WARNING /!\
If you don't want password, _access_mdp_ and/or _upload_mdp_ need to be
like that :
``` json
"access_mdp" : [],
```
not like that : 
``` json
"access_mdp" : [""],
```

# Coded in...
* **HTML**
* **CSS**
* **PHP**
* **Json**

Size : **10.4 Mo** *with example files*.
