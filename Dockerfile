# Use the official PHP image with Apache
FROM php:8.2-apache

# Set working directory
WORKDIR /var/www/html

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    zip \
    curl \
    && docker-php-ext-install pdo pdo_mysql mbstring exif pcntl bcmath gd zip \
    && apt-get clean

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Install Composer (official Composer image)
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Copy application files (you might want to exclude some files using .dockerignore)
COPY . .

# Set permissions for storage and cache
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Set environment variables from secret or fallback to a default (depending on your approach)
ENV APP_ENV=production

# Install Composer dependencies and set up the environment
RUN composer install --no-dev --optimize-autoloader \
    && php artisan key:generate \
    && php artisan config:cache \
    && php artisan route:cache \
    && php artisan view:cache

# Migrate and seed the database (optional, this depends on how you want to handle DB setup)
RUN php artisan migrate:fresh --seed

# Expose port 80
EXPOSE 80

# Set the startup command
CMD ["apache2-foreground"]
