# @renolab - Audit

Ce projet a pour objectif de concevoir un outil open source de simulation des performances énergétique d’un logement avant et après réalisation de scénario de rénovation performante, sur la base d'un audit énergétique existant référencé sur l'opendata de l'Observatoire DPE-Audit.

## Motivations

- La méthode de calcul 3CL-DPE utilisée pour l’édition des Diagnostics de Performance Energétique et Audits réglementaires regroupe des centaines de données permettant de décrire les caractéristiques d’un bâtiment ainsi que son comportement énergétique.

- Les données issues du DPE sont essentiellement exploitées à des fins de comparaison immobilière sur la base de l’étiquette énergétique (de A pour un logement très performant à G pour une passoire thermique).

- La base DPE mise à disposition par l’ADEME en open data couvre plus de 4.5 M de logements dont 1.6 M de logements individuels.

- La donnée DPE pourrait être un vecteur d’information pour aider les ménages à mieux appréhender la performance énergétique d’un logement, identifier son gisement d’économies d’énergie et concevoir des parcours de rénovation performante par étape.


Une API dédiée à la recherche, l'interprétation et la simulation d'un audit énergétique réglementaire depuis l'opendata de l'ADEME.

## Plan d'actions

1. Développement d'un moteur 3CL-DPE en Open source (en cours)
2. Compilation de l'opendata support: Solutions techniques de référence et points de vigilance
3. Développement de l'API Audit
4. Expérimentation en situation réelle (programme pilote en cours)
