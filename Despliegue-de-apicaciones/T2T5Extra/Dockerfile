FROM ubuntu:latest
RUN apt-get update
RUN apt-get install -y tar
COPY C:\Users\daw2\Documents\Joan-Ruiz-2Daw\Despliegue-de-apicaciones\T2T5Extra\*.tar /archivos_tar/
RUN for file in /archivos_tar/*.tar; do tar -xvf "$file"; done
EXPOSE 80
    

# # Usa una imagen base de Ubuntu
# FROM ubuntu

# # Actualiza el sistema y luego instala la herramienta 'tar'
# RUN apt-get update
# RUN apt-get install -y tar

# # Crea un directorio en el contenedor para los archivos .tar
# RUN mkdir /archivos_tar

# # Copia los archivos .tar desde el sistema de archivos del host al contenedor
# COPY *.tar /archivos_tar/

# # Descomprime los archivos .tar en /archivos_tar
# RUN cd /archivos_tar && tar -xvf *.tar

# # Exponer el puerto 80 (nota: no hay coma al final de EXPOSE 80)
# EXPOSE 80
