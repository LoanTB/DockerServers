#!/bin/bash
if [ "$#" -ne 3 ]; then
  echo "Erreur : Ce script nécessite exactement 3 arguments."
  echo "Usage : $0 <TOKEN> <IP_HOST> <PORT>"
  exit 1
fi

TOKEN=$1
HOST=$2
PORT=$3

docker swarm join --token $TOKEN $HOST:$PORT
