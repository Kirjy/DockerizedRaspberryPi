# Mounted share
As we are using an already mounted share, please note that you could have a permission issue if not mounted correctly !
Here is my fstab content. The share is fully opened in my local network.
- //ROUTER/sda1  /mnt/routershare  cifs  uid=1000,gid=1000,guest,noauto,x-systemd.automount  0  0
The important part is the uid and gid which need to be the same as the ones set up in the compose file.

If you have the same configuration, then, you need to use the following commands :
sudo apt update -y
sudo apt-get install cifs-utils
sudo mkdir /mnt/routershare
and then add to the /etc/fstab file the following line :

# Here I want to mount the //192.168.0.1/sda1 share on /mnt/routershare as standard user
//192.168.0.1/sda1  /mnt/routershare  cifs  uid=1000,gid=1000,guest,noauto,x-systemd.automount  0  0
