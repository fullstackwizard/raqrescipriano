# Projeto consumindo uma API {https://reqres.in/}

- TailwindCSS
- Postcss-CLI
- Autoprefixer 
- Php 
- Docker

# Para buildar a aplicação rode o comando dentro da pasta do projeto 
* docker-compose -f "docker-compose.yml" up -d --build

# Corrections 

sudo chown $USER /var/run/docker.sock

Surprinsingly, I had the following error :

    Got permission denied while trying to connect to the Docker daemon socket at unix:///var/run/docker.sock: Get http:///var/run/docker.sock/v1.38/info: dial unix /var/run/docker.sock: connect: permission denied

For some reason I did not have enough privileges, the following command solved my problem :

sudo chown $USER /var/run/docker.sock
