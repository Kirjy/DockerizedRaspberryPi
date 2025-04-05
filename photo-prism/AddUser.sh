# Ajouter un utilisateur (remplacer 'password' par le mot de passe souhaité)
docker compose exec photoprism photoprism users add -p password -n "Nom Utilisateur" nomutilisateur

# Supprimer un utilisateur
docker compose exec photoprism photoprism users rm nomutilisateur
