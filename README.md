# Symfony

First projet using Symfony

## Installation

With composer

```bash
composer create-project symfony/website-skeleton [nom_site]
```

## Aprés 

```python
# run le serveur avec debug
symfony server:start -d
```

## Ajout de truc déja fait 
Nous donnes un controller tout frais
```bash
symfony console make:controller
```



### MEMO

#### -> Twig

```
{% block truc %} {% endblock %}
```

#### -> Flemme de SQL ?

```
symfony console make:entity
```
Il demande la table puis les fields un par un type/null?/etc...