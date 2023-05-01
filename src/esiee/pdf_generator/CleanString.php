<?php
    /**
     * Espace de travail : src\esiee\pdf_generator
     */
    namespace pdf_generator;

    /**
     * Classe : CleanString.php
     * <br/>Cette classe permet de nettoyer une chaîne de caractères.
     */
    class CleanString{
        /**
         * Nettoyage d'une chaîne de caractère pour un titre de fichier.
         * <br/>Cette méthode à pour but de nettoyer une chaîne de caractères
         * pour qu'elle soit utilisable comme nom de fichier.
         * <br/>Celle-ci remplacera :
         * - les espaces par des underscores
         * - les accents par leur équivalent sans accent
         * - les caractères spéciaux par des underscores
         */
        public function CleaningStringForFileTitle($string){
            $occurences = [' ', 'é', 'è', 'ê', 'ë', 'à', 'â', 'ä', 'ù', 'û', 'ü', 'ô', 'ö', 'î', 'ï', 'ç', '!', '?', '.', ',', ';', ':', '/', '\\', '(', ')', '[', ']', '{', '}', '<', '>', '"', "'", '°', '²', '³', '€', '$', '£', '¤', 'µ', '§', '°', '²', '³', '€', '$', '£', '¤', 'µ', '§'];
            $remplacement = ['_', 'e', 'e', 'e', 'e', 'a', 'a', 'a', 'u', 'u', 'u', 'o', 'o', 'i', 'i', 'c'];
            $newString = str_replace($occurences, $remplacement, $string);
            return $newString;
        }
    }