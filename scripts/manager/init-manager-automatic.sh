#!/bin/bash
set -e

hostnamectl set-hostname manager

JOIN_COMMAND=$(docker swarm init --advertise-addr 10.99.1.1 | grep 'docker swarm join')

echo "Partage de la commande de connexion sur le port 12345..."

while true; do
    echo "$JOIN_COMMAND" | nc -l -p 12345 -q 0
done

