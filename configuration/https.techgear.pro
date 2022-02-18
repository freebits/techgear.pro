server {
    listen 443 ssl http2;

    server_name web997.com www.web997.com;
    index index.html;

    root /home/ubuntu/web997.com/public;

    ssl_certificate /etc/letsencrypt/live/web997.com/fullchain.pem;
    ssl_certificate_key /etc/letsencrypt/live/web997.com/privkey.pem;

    location / {
        try_files $uri $uri/ =404;
    }

    location ~ \.php$ {
        include snippets/fastcgi-php.conf;
        fastcgi_pass unix:/var/run/php/php-fpm.sock;
    }
    
    location /.well-known/acme-challenge {
        root /home/ubuntu/certs;
        default_type "text/plain";
        try_files $uri =404;
    }
    
    location ~* \.(?:css|js|jpg|jpeg|png|gif|ico|webp|svg|bmp|mov|webm)$ {
        expires 5m;
        add_header Cache-Control "public";
    }
}
