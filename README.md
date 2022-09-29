# Symfony

#### First projet using Symfony

## Installation

With composer

```bash
composer create-project symfony/website-skeleton [nom_site]
```

## Aprés that

run le serv avec debug
```python
symfony server:start -d
```

## Ajout de truc déjà fait 
Nous donnes un controller tout frais grace a MakerBundle
```bash
symfony console make:controller
```


#
### MEMO

#### -> Twig

```
{% block truc %} {% endblock %}
```
#
#### -> Flemme de SQL ?

```
symfony console make:entity
```
Il demande la table puis les fields un par un type/null?/etc...
#
#### -> Dans env changer les param
Un-comment celle qu'on veut utiliser
Et changer les champs entre {*}


```sql
DATABASE_URL="mysql://root:{mdp}@127.0.0.1:{port}/{nomDB}?serverVersion=8&charset=utf8mb4"
```
#
#### -> Connexion d'entités

Rajouter une entrée de type relation au noms pluriels de l'entite 🤨
```bash
field type relation
    what class blabla ?
nom de l'entité
ManyToMany    
```
#
#### -> Fausse data

Rajouter via composer les outils de generation de data
```bash
composer require --dev orm-fixtures
composer require fakerphp/faker  
```
https://fakerphp.github.io/formatters/

