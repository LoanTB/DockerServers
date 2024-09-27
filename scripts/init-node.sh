#!/bin/bash

echo "Enter token : $TOKEN"
echo "Enter host ip : $HOST"
echo "Enter port : $PORT"

docker swarm join --token $TOKEN $HOST:$PORT
