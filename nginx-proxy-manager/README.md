#Nginx Proxy Manager
Nginx is a reverse proxy. 

The purpose here is to take every incoming connexion on 443 port, check a certificate and redirect the connexion to the good container.
In addition, for containers that don't have an included password management, nginx will give the possibility to set up one.
The web interface will be used to avoid writting the YAML code all by yourself. The whole management will be simplified, specifically for users who don't know nginx very well.

Please be careful. The standard mapping is on ports 80 and 443.
You will either have to change these bindings or read the following documentation to allow access to unprivileged ports : https://docs.docker.com/engine/security/rootless/#exposing-privileged-ports
