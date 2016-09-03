# Welcome on board!
![Logo](https://raw.githubusercontent.com/APIJet/APIJet/master/resources/api-jet-logo.png)

# Getting started
For quick start it's recomend to have a look at the skeleton project [APIJet/skeleton](https://github.com/APIJet/skeleton).

# Web server config (nginx)
```
server {
	listen 80;
	server_name your-restful-api.com;

	root /usr/share/nginx/your-restful-api.com/Public/;
	index index.php;
	error_log /var/log/nginx/your-restful-api.com-error.log;

	location / {
		try_files $uri $uri/ /index.php?$uri&$args;
		if (-f $request_filename) {
			break;
		}
		if (-d $request_filename) {
			break;
		}
		rewrite ^(.+)$ /index.php?$1 last;
	}

	location ~ \.php$ {
		try_files $uri $uri/ /index.php?$query_string;
		fastcgi_pass unix:/var/run/php5-fpm.sock;
		fastcgi_index index.php;
		fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
		include fastcgi_params;
	}
}
```
