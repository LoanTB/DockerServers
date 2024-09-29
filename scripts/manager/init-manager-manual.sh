#!/bin/sh

hostnamectl set-hostname manager

docker swarm init --advertise-addr 10.99.1.1

