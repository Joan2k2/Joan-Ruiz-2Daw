FROM ubuntu:latest
RUN apt-get update
RUN apt-get install -y tar


WORKDIR /archivos_tar/
COPY *.tar /archivos_tar/

RUN for file in /archivos_tar/*.tar; do tar -xvf "$file"; done
EXPOSE 80
    

