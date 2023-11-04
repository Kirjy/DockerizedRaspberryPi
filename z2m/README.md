
You need to authorize your conbee key on the current user as the docker is running without root user.

sudo usermod -a -G dialout $USER

If the previous command fails, run the following

sudo chmod 666 /dev/ttyACM0
