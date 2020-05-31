<?php
/*
     //class:Entite formée des attributs et 
        a) type classe
           1) classe concrete: une classe qui peut être intanciée (une classe qui  peut  avoir d'objet)
           2) classe abstraite:   une classe qui peut être intanciée (une classe qui ne peut pas avoir d'objet)
     //Objet: un objet est une instance d'une classe ou un element d'une classe => une variable
        //Etat: valeurs de cas attributs à un instant t
        //comportement: les methodes que l'on peut appliquer sur un objet

        //Regles
           //encapsulation: principe qui permettait de cacher les attributs et d'exposer les methodes d'une classe
              visibilité ou portée:
                 private: portée limitée dans la classe
                 public: portée illimitée
                 protected => heritage: visible dans la classe mère et dans les classes Filles


    //attributs: une caracteristique perçue sur une classe
        //instance: une caracteristique perçue sur chaque objet de la classe
          private nomAttribut;
        // classse: attribut partagé à l'ensemble des instances de la classe
          private static nomAttribut;
    //methodes: ce sont les fonctionnalités offertent par une classe
        //Types
          //concrètes: une methode qui a une definition
              //instance: une methode perçue sur chaque objet de la classe
          public  Function nomMethode(){
                 //code
          }
             //classe: methode partagée à l'ensemble des instances de la classe
           public  static  Function nomMethode(){
                 //code
          }
          //Exemple
            //constructeur: construire une instance ou un objet de la classe
              public function_conctruct(){


              }

            //Getters: methode qui retourne la valeur d'un attribut
               //retourne un attribut d'instance
                function nomMethode(){
                    return $this->nomAttribut;
                }
                //setters: methode qui modifie la valeur d'un attribut
                   //modifie un attribut
                         public function nomMethode($nomAttribut){
                    $this->nomAttribut=$nomAttribut;
                }
                //metiers=>UC  


            //classe: methode partagée à l'ensemble des instances de la classe
           public  static  Function nomMethode(){
                 //code
          }
            //Exemple
            //Getters: methode qui retourne la valeur d'un attribut
               //retourne un attribut d'instance
                public function nomMethode(){
                    return self::nomAttribut;
                }
               // setters: methode qui modifie la valeur d'un attribut
                   //modifie un attribut de classe
                       public function nomMethode($nomAttribut){
                    self::nomAttribut=$nomAttribut;
                }
                //metiers=> UC
          //abstraites: dont on ne connait pas la definition
              //instance: une methode perçue sur chaque objet de la classe
           public abstract Function nomMethode();
              //metiers =>UC
              //classe: methode partagée à l'ensemble des instances de la classe
           public  abstract static Function nomMethode();  
              //metiers =>UC


*/


?>