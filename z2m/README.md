
You need to authorize your conbee key on the current user as the docker is running without root user.

sudo usermod -a -G dialout $USER

If the previous command fails, run the following

sudo chmod 666 /dev/ttyACM0

If any reboot reset these rights, you need to create a rules files and set the rights on startup :
sudo nano /etc/udev/rules.d/69-sonoff.rules
KERNEL=="ttyUSB0", GROUP="dialout", MODE="0777"
