server {
	listen   80;
	server_name techgear.pro www.techgear.pro;	
	return 301 https://$server_name$request_uri;
}
