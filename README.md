# Documentation



## Architecture

![Figure 1 - Architecture mono-machine](schemas/schema_architecture_mono-machine.png)
#### Figure 1 - Architecture mono-machine


![Figure 2 - Architecture cluster](schemas/schemas_architecture_cluster.png)
#### Figure 2 - Architecture cluster

## Scripts

### init-manager.sh


#### V1

Lancer le script : `./init-manager.sh` 
Récupérer le TOKEN, IP_HOST et PORT pour le fournir.

### init-node.sh

#### V1 
Récupérez les informations du manager.
Lancer le script : `./init-node.sh [TOKEN du manager] [IP HOST] [PORT]`