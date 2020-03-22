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

## Versions   (actuelle stable : 0.2.7)
- [futur] __1.0.0:__ "Alonsy" Le hardware et le software sont prêt à être intégré dans une voiture.
- [futur] __0.3.0:__ "Blue" ajout des api bluetooth sur l'app.
- [futur] __0.2.8:__ 
    * {confort} Création de la page confort.php pour tout ce qui est chauffage abitacle, niveau batterie véhicule et jsp quoi d'autre.
- __0.2.7:__ 
   * {radio} ajax pour le changement de station. 
   * {téléphone} ajax pour taper et afficher le numéro de téléphone.


## Mise en production
Matériel et configuration pour la réalisation du projet.
- Raspberry PI 4 (4Go RAM)
    * Appache
    * php7.3
    * mysql
    * phpmyadmin
    * chronium
    * filezilla
- Écran tactile " pour RPI



By Benjamin Fourmaux Beruet. Toute reproduction non autorisée pour des fins comercials est interdite
