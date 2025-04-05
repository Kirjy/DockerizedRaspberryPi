# Simple Mail Forwarder

Ce service permet de rediriger les emails envoyés vers votre domaine vers une adresse email spécifique.

## Configuration

1. Créez un fichier `.env` dans le même répertoire que le `compose.yaml` avec les variables suivantes :
   ```
   DESTINATION_EMAIL_DOMAIN=votre-domaine.com
   DESTINATION_EMAIL_ADDRESS=votre-email@example.com
   DESTINATION_EMAIL_PASSWORD=votre-mot-de-passe
   ```

2. Assurez-vous que les ports suivants sont disponibles :
   - Port 25 (SMTP)

## Utilisation

1. Démarrez le service :
   ```bash
   docker compose up -d
   ```

2. Vérifiez les logs :
   ```bash
   docker compose logs -f
   ```

## Sécurité

- Le service utilise TLS pour la sécurité des communications
- Les certificats sont stockés dans le dossier `data/certs`
- Les logs sont stockés dans le dossier `data/postfix`

## Dépannage

1. Vérifiez les logs dans `data/postfix`
2. Assurez-vous que le port 25 n'est pas bloqué par votre fournisseur d'accès
3. Vérifiez que les certificats sont correctement générés

## Liens utiles

Pour plus d'informations, consultez :
https://webapplicationconsultant.com/docker/how-to-use-docker-to-forward-emails-sent-to-your-domain-to-your-email-works-for-gmail/
