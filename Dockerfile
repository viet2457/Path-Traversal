# Sử dụng một hình ảnh PHP 7.4 trên Apache
FROM php:7.4-apache

# Sao chép mã nguồn ứng dụng web vào thư mục /var/www/html trong container
COPY . /var/www/html

# Cài đặt các gói phụ thuộc của ứng dụng
RUN apt-get update && apt-get install -y \
    git \
    zip \
    unzip

# # Cài đặt Composer (quản lý phụ thuộc PHP)
# RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# # Cài đặt các phụ thuộc PHP từ file composer.json
# RUN cd /var/www/html && composer install --no-dev

# Đặt quyền truy cập cho thư mục /var/www/html
RUN chown -R www-data:www-data /var/www/html/
RUN echo "VSL{hacked}" > /flag.txt && chmod 777 /flag.txt

# Mở cổng 80 để truy cập vào ứng dụng web
EXPOSE 80

# Khởi động Apache khi container được chạy
CMD ["apache2-foreground"]