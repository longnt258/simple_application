# Alpine improves performance.
FROM nginx:1.29-alpine 

# Delete the default configuration file
RUN rm /etc/nginx/conf.d/default.conf

COPY ./nginx.conf /etc/nginx/nginx.conf

EXPOSE 80
