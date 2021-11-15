
# language: fr
Fonctionnalité: ma class Calc
  Afin de gérer des calcule simples
  En tant que utilisateur
  Je dois être capable d'effectuer des opérations basique avec ma classe

Scénario: Additionner 2 nombres
    Etant donné que j'ai deux nombres que j'additionne "200" "2"
    Et la somme est supérieur à 200
    Alors j'ai dans la memoire en derniere valeur "202"

Scénario: retourner les valeurs en memoire
    Etant donné toutes mes opérations mise en memoire <1000,2000,5000,6000>
    Alors j'affiche la valeur de toutes la memoire

Scénario: vider la memoire
    Etant donné toutes mes opérations mise en memoire <1000,2000,5000,6000>
    Alors je la vide la memoire




