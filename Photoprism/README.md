#Photoprism
Manages your photo album easily

#Management
To add or remove an user with the free version, you need to run the following commands
docker compose exec photoprism photoprism users add -p password -n "Name" name
docker compose exec photoprism photoprism users rm name
