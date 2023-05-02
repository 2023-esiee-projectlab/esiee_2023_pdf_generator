<?php
    /**
     * Espace de travail : src\esiee\pdf_generator
     */
    namespace pdf_generator;

    /**
     * Importations des classes nécessaires.
     */
    use TCPDF;

    /**
     * Classe : PdfGenerator.php
     * <br/>Cette classe permet de générer un fichier PDF.
     */
    class CustomTCPDF extends TCPDF
    {

        private $saut_de_ligne;
        private $interlignes;
        private $titre;
        private $image_file;
        private $image_with;
        private $image_type;
        private $police;
        private $paramsReady;

        /**
         * Configuration des paramètres nécessaires à la génération d'un Header et d'un Footer personnalisé pour le PDF.
         *
         * @param $saut_de_ligne
         * @param $interlignes
         * @param $titre
         * @param $image_file
         * @param $image_with
         * @param $image_type
         * @param $police
         * @return void
         */
        public function setPdfParams($saut_de_ligne, $interlignes, $titre, $image_file, $image_with, $image_type, $police)
        {
            $this->saut_de_ligne = $saut_de_ligne;
            $this->interlignes = $interlignes;
            $this->titre = $titre;
            $this->image_file = $image_file;
            $this->image_with = $image_with;
            $this->image_type = $image_type;
            $this->police = $police;
            $this->paramsReady = true;
        }

        /**
         * Header
         * <br/>Cette méthode permet de configurer l'en-tête du PDF.
         *
         * @return void
         */
        public function Header()
        {
            if ($this->paramsReady)
            {
                // Logo
                $this->Image($this->image_file, 10, 10, $this->image_with, '', $this->image_type, '', 'T');
                //$this->Image($this->image_file, 10, 10, $this->image_with, '', $this->image_type, '', 'T', false, 300, '', false, false, 0, false, false, false);
                // Set font
                $this->SetFont($this->police[0], 'B', $this->police[2]);
                // Title
                //$this->Cell(0, 15, '<< TCPDF Example 003 >>', 0, false, 'C', 0, '', 0, false, 'M', 'M');
                $this->Cell(0, $this->saut_de_ligne, $this->titre, 0, 1, 'C');
                //$this->Cell(0, 15, $this->titre, 0, false, 'C', 0, '', 0, false, 'M', 'M');
            }
            else
            {
                throw new \Exception("Les paramètres nécessaires à la génération du Header n'ont pas été configurés.");
            }
        }

        /**
         * Footer
         * <br/>Cette méthode permet de configurer le pied de page du PDF.
         *
         * @return void
         */
        public function Footer()
        {
            if ($this->paramsReady)
            {
                // Position at 15 mm from bottom
                //$this->SetY(-15);
                // Set font
                $this->SetFont($this->police[0], 'I', $this->police[2]);
                // Page number
                $this->Cell(0, $this->saut_de_ligne, 'Page ' . $this->getAliasNumPage() . '/' . $this->getAliasNbPages(), 0, false, 'C');
                //$this->Cell(0, 10, 'Page ' . $this->getAliasNumPage() . '/' . $this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
            }
        }

        /**
         * @return mixed
         */
        public function getSautDeLigne()
        {
            return $this->saut_de_ligne;
        }

        /**
         * @param mixed $saut_de_ligne
         */
        public function setSautDeLigne($saut_de_ligne)
        {
            $this->saut_de_ligne = $saut_de_ligne;
        }

        /**
         * @return mixed
         */
        public function getInterlignes()
        {
            return $this->interlignes;
        }

        /**
         * @param mixed $interlignes
         */
        public function setInterlignes($interlignes)
        {
            $this->interlignes = $interlignes;
        }

        /**
         * @return mixed
         */
        public function getTitre()
        {
            return $this->titre;
        }

        /**
         * @param mixed $titre
         */
        public function setTitre($titre)
        {
            $this->titre = $titre;
        }

        /**
         * @return mixed
         */
        public function getImageFile()
        {
            return $this->image_file;
        }

        /**
         * @param mixed $image_file
         */
        public function setImageFile($image_file)
        {
            $this->image_file = $image_file;
        }

        /**
         * @return mixed
         */
        public function getImageWith()
        {
            return $this->image_with;
        }

        /**
         * @param mixed $image_with
         */
        public function setImageWith($image_with)
        {
            $this->image_with = $image_with;
        }

        /**
         * @return mixed
         */
        public function getImageType()
        {
            return $this->image_type;
        }

        /**
         * @param mixed $image_type
         */
        public function setImageType($image_type)
        {
            $this->image_type = $image_type;
        }

        /**
         * @return mixed
         */
        public function getPolice()
        {
            return $this->police;
        }

        /**
         * @param mixed $police
         */
        public function setPolice($police)
        {
            $this->police = $police;
        }
    }