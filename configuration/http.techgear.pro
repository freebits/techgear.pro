server {
	listen 80;
	server_name techgear.pro www.techgear.pro;	
	root /home/ubuntu/techgear.pro/public;
	location / {
		try_files $uri $uri/ =404;
	}

	location /.well-known/acme-challenge {
		root /home/ubuntu/certs;
		default_type "text/plain";
		try_files $uri =404;
	}
	
	location ~ \.php$ {
		include snippets/fastcgi-php.conf;
		fastcgi_pass unix:/var/run/php/php-fpm.sock;
	}
}

