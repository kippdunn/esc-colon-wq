# ESC:wq
Just a CTF-hosting website for fun

# About
## Platforms
This website runs on the LEMP (Linux, Nginx, MySQL, PHP/Python) stack!
### Linux
* Ubuntu
* * Runs on an AWS EC2 instance
### Nginx
* This webserver was chosen for its simplicity for serving static web-pages
* [Nginx Documentation](https://nginx.org/en/docs/)
* **MacOS**
  * `brew install nginx`
  * Nginx binary linked to /usr/local/bin/nginx
  * Configs are stored in /usr/local/etc/nginx/servers
* **Ubuntu**
  * `sudo apt-get install nginx`
  * Starts by default
    * `service nginx (status|start|stop|restart)`
  * Configs are stored in /etc/nginx
### MySQL
* TBD
### PHP
* **MacOS**
  * Located in `/etc/php-fpm.conf` and `/etc/php-fpm.d/www.conf`
  * Run as daemon with `php-fpm`
  * Uses `fastcgi_pass 127.0.0.1:9000` in nginx config

### Made by: Kipp Dunn and Harrison Gertler
