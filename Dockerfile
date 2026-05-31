# Usar una imagen ligera de Nginx
FROM nginx:alpine

# Copiar los archivos del proyecto al directorio de Nginx
COPY . /usr/share/nginx/html

# Exponer el puerto 80
EXPOSE 80

# Iniciar Nginx
CMD ["nginx", "-g", "daemon off;"]
