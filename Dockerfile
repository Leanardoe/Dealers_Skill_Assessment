# Use the official PHP image with Composer preinstalled
FROM php:8.1-cli AS build

# Install system dependencies
RUN apt-get update && apt-get install -y \
    unzip \
    curl \
    git \
    npm \
    sqlite3

#Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set working directory
WORKDIR /app

# Copy everything in
COPY . .

# Install PHP dependencies
RUN composer install --no-interaction

# Install frontend assets
RUN npm install && npm run build

# Generate app key
RUN php artisan key:generate

# Create SQLite DB file
RUN touch database/database.sqlite

# Set permissions
RUN chmod -R 777 storage bootstrap/cache

# Final image using a slim PHP runtime
FROM php:8.1-cli

# Set working directory again
WORKDIR /app

# Copy build artifacts from previous stage
COPY --from=build /app /app

# Expose Laravel's port
EXPOSE 8000

# Start Laravel
CMD ["php", "artisan", "serve", "--host=0.0.0.0"]
