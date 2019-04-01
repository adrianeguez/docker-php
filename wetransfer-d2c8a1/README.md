## Build

```
$ docker build -t my-php-app .
```

## Build

```
$ docker run -it -p 8000:8000 -p 8080:8080 --rm --name my-running-app my-php-app
```

## Entrar en la maquina

Paso 1: Encontrar el id de la instancia de la maquina virtual (contenedor)

```
$ docker ps

CONTAINER ID        IMAGE               COMMAND                  CREATED             STATUS              PORTS                                            NAMES
a7d89d271847        my-php-app          "docker-php-entrypoi…"   46 seconds ago      Up 45 seconds       0.0.0.0:8000->8000/tcp, 0.0.0.0:8080->8080/tcp   my-running-app

```

Paso 2: Usar el `CONTAINER ID` en este caso `a7d89d271847` para entrar a la maquina virtual

```
$ docker exec -it a7d89d271847 bash

root@a7d89d271847:/usr/src/myapp#

```
