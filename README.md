# Android Auto
Hardware et software pour ordinateur de bord pour Google Car

Ce projet consiste à créer une app web de tableau de bord pour voiture (comme medianav), intègré sur un raspberry Pi qui est lui même connécté à la voiture. Avec des fonctionnalités Bluetooth, Google Assistant, maps, lecture de fichier audio ...

## Objectifs à faire
- [ ] Se documenter sur les api JS bluetooh (merci Mathis pour les docs :=) )
   - [ ] Récupération niveau batterie + affichage du niveau
   - [ ] Récupération du niveau du signal GSM + affichage du niveau
- [ ] Se renseigner sur les web view (aletrnative à chronium ??)
- [ ] "MAIN": Faire Message.
- [ ] "MAIN": Faire Paramètres.
- [ ] "MAIN": Faire l'affichage des notifs.
- [ ] "MAIN": Faire l'intégration du RPI sur une voiture.

## Versions
* [futur] 0.3.0: "Blue" ajout des api bluetooth sur l'app.
* [futur] 0.2.8: 
      - {confort} Création de la page confort.php pour tout ce qui est chauffage abitacle, niveau batterie vehicule et jsp quoi d'autre.
* 0.2.7: - {radio} ajax pour le changement de station. - {téléphone} ajax pour taper et afficher le numéro de téléphone.


## Mise en production
Matériel et configuration pour la réalisation du projet.
- Raspberry PI 4 (4Go RAM)
    * Appache
    * php7.3
    * mysql
    * phpmyadmin
    * chronium
    * filezilla
- 



By Benjamin Fourmaux Beruet. Toute reproduction non autorisée pour des fins comercials est interdite
