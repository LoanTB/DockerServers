#!/bin/sh

# Appeler la machine Manger sur le réseau
hostnamectl set-hostname manager


# Initialiser le swarm (Le lien à partager aux nodes s'affichera)
docker swarm init --advertise-addr 10.99.1.1 | tail -4 | head -1 > /tmp/worker-join-command.txt
