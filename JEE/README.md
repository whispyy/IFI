# IFI - JEE

## 1 - TP Maven

*Objectif :* comprendre le fonctionnement de maven

*Commandes :*

* mvn clean : permet de clean le projet
* mvn validate : validation du projet avant la compilation
* mvn compile : compile le projet
* mvn package : produit un JAR
* mvn test
* mvn install
* mvn deploy

## 2 - TP Spring

*Objectif :* comprendre le fonctionnement de spring par l'intermediaire d'un web service. Toutes les informations relatives au TP sont [ici](http://spring.io/guides/gs/rest-service/) .

*Commandes :*

* mvn clean package : Clean du projet et création du JAR
* java -jar target/gs-rest-service-0.1.0.jar

*Test du service :*

Se rendre à l'adresse : http://localhost:8080/greeting .

Possibilité d'entrer un nom : http://localhost:8080/greeting?name=MonNom .

## 3 - TP JPA

*Objectif :* accéder aux données via l'utilisation de JPA. Toutes les informations relatives au TP sont [ici](http://spring.io/guides/gs/accessing-data-jpa/) .

*Commandes :*

* mvn clean package
* java -jar target/gs-accessing-data-jpa-0.1.0.jar


## 4 - TP MongoDB
