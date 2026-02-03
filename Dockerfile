FROM php:8.2-apache

# Install dependencies
RUN apt-get update && apt-get install -y \
    libpq-dev \
    libgmp-dev \
    git \
    unzip \
    && docker-php-ext-configure gmp \
    && docker-php-ext-install pdo pdo_pgsql pgsql gmp

# Enable Apache Rewrite Module
RUN a2enmod rewrite

# Copy application files
COPY . /var/www/html/
COPY schema.pg.sql /var/www/html/schema.pg.sql
COPY seed.pg.sql /var/www/html/seed.pg.sql

# Force Rebuild: 2026-02-03 05:40
ENV REBUILD_TIME=2026-02-03_05-40

# Set working directory
WORKDIR /var/www/html

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
RUN composer install --no-dev --optimize-autoloader

# Set permissions
RUN chown -R www-data:www-data /var/www/html

# Expose port
EXPOSE 80
