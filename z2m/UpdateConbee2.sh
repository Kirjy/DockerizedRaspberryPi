docker run -it --rm --entrypoint "/firmware-update.sh" --privileged --cap-add=ALL -v /dev:/dev -v /lib/modules:/lib/modules -v /sys:/sy -v ./temp:/usr/share/deCONZ/firmware/ deconzcommunity/deconz
