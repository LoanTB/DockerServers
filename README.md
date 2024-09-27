# Documentation



## Architecture

![Figure 1 - Architecture mono-machine](schemas/schema_architecture_mono-machine.png)
#### Figure 1 - Architecture mono-machine


![Figure 2 - Architecture cluster](schemas/schemas_architecture_cluster.png)
#### Figure 2 - Architecture cluster

## Scripts

*Les scripts automatiques nécéssitent netcat.

### init-manager.sh

#### manuel
Lancer le script : `./init-manager.sh` 

Récupérer les informations pour les fournir aux nodes : TOKEN HOST et PORT.

#### automatic*

Lancer le script : `./init-manager.sh` 

Quitter une fois les nodes connectées.

### init-node.sh

#### manuel
Récupérez les informations du manager.
Lancer le script : `./init-node.sh [TOKEN du manager] [IP HOST] [PORT]`

#### automatic*

Lancer le script : `./init-node.sh`