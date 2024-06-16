FROM phpmyadmin

# Mettre à jour les paquets et installer les dépendances nécessaires
RUN apt-get update \
    && apt-get install -y \
    && a2enmod rewrite \
    && docker-php-ext-install pdo pdo_mysql \