server {
	listen   80;
	server_name web997.com www.web997.com;	
	return 301 https://$server_name$request_uri;
}
