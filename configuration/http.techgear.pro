server {
	listen 80;
	server_name web997.com www.web997.com;	
	root /home/ubuntu/web997.com/public;
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

