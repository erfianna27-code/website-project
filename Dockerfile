FROM php:8.2-apache

# Install system dependencies + Node.js
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    curl \
    nodejs \
    npm

# Enable apache rewrite
RUN a2enmod rewrite

# Install PHP extensions
RUN docker-php-ext-install pdo pdo_mysql zip

# Set working directory
WORKDIR /var/www/html

# Copy project files
COPY . .

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Install Laravel dependencies
RUN composer install --no-dev --optimize-autoloader

# Build frontend assets (Vite)
RUN npm install && npm run build

# Fix permissions
RUN chown -R www-data:www-data storage bootstrap/cache

# Fix permissions untuk database SQLite
RUN chown -R www-data:www-data /var/www/html/storage \
    && chown -R www-data:www-data /var/www/html/database \
    && chmod -R 775 /var/www/html/storage \
    && chmod -R 775 /var/www/html/database

# Create database file 
RUN touch /var/www/html/database/database.sqlite \
    && chown www-data:www-data /var/www/html/database/database.sqlite \
    && chmod 664 /var/www/html/database/database.sqlite

# Set Apache document root to public
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/*.conf