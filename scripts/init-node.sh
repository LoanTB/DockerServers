#!/bin/bash
if [ "$#" -ne 2 ]; then
  echo "Erreur : Ce script nécessite exactement 2 arguments."
  echo "Usage : $0 <ip> <port>"
  exit 1
fi

IP_PORT=$2
AUTRE_ARGUMENT=$3

#add un scp pour récup le $token

docker swarm join --token $TOKEN $HOST:$PORT
