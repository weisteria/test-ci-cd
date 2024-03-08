# Utilisez une image légère comme base
FROM nginx:alpine

# Copiez tous les fichiers du dossier src dans le répertoire web du serveur Nginx
COPY src/ /usr/share/nginx/html/

# Exposez le port 80, par défaut pour HTTP
EXPOSE 80
