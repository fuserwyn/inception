if [ ! -f /etc/ssl/certs/nginx.crt ]; then
echo "Nginx: setting up ssl ...";
openssl req -x509 -nodes -days 365 -newkey rsa:4096 \
		-keyout /etc/ssl/private/nginx.key \
		-out /etc/ssl/certs/nginx.crt \
		-subj "/C=RU/ST=Moscow/L=Moscow/O=School21/OU=School21/CN=fuserwyn.42.fr/emailAddress=fuserwyn@student.21-school.ru"
echo "Nginx: ssl is set up!";
fi

nginx -g 'daemon off;';