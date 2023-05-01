<?php
    /**
     * Espace de travail : src\esiee\pdf_generator
     */
    namespace esiee\pdf_generator;

    /**
     * Importations des classes nécessaires.
     */
    include('CleanString.php');
    include('CustomTCPDF.php');

    /**
     * Classe : PdfGenerator.php
     * <br/>Cette classe permet de générer un fichier PDF.
     */
    class PdfGenerator
    {
        private $pdf_createur = null;
        private $pdf_auteur = null;
        private $pdf_titre = null;
        private $pdf_sujet = null;
        //-
        private $pdf_config_tcpdf_orientation = null;
        private $pdf_config_tcpdf_format = null;
        private $pdf_config_tcpdf_encoding = null;
        //-
        private $pdf_parametres_contenu_police = null;
        private $pdf_parametres_contenu_marges = null;
        //-
        private $pdf_parametres_contenu_header = null;
        private $pdf_parametres_contenu_bottom = null;

        /**
         * PdfGenerator constructor.
         */
        public function __construct(){}

        public function generate(){
            // ---[ Préparation du titre du PDF ]---
            $cleanString = new CleanString();
            $titrePDF = $cleanString->CleaningStringForFileTitle($datas['pdf_informations']['titre']);

            // ---[ Génération du PDF ]---
            $pdf->Output($titrePDF.'.pdf', 'D');
        }

        /**
         * @return null
         */
        public function getPdfCreateur()
        {
            return $this->pdf_createur;
        }

        /**
         * @param null $pdf_createur
         */
        public function setPdfCreateur($pdf_createur): void
        {
            $this->pdf_createur = $pdf_createur;
        }

        /**
         * @return null
         */
        public function getPdfAuteur()
        {
            return $this->pdf_auteur;
        }

        /**
         * @param null $pdf_auteur
         */
        public function setPdfAuteur($pdf_auteur): void
        {
            $this->pdf_auteur = $pdf_auteur;
        }

        /**
         * @return null
         */
        public function getPdfTitre()
        {
            return $this->pdf_titre;
        }

        /**
         * @param null $pdf_titre
         */
        public function setPdfTitre($pdf_titre): void
        {
            $this->pdf_titre = $pdf_titre;
        }

        /**
         * @return null
         */
        public function getPdfSujet()
        {
            return $this->pdf_sujet;
        }

        /**
         * @param null $pdf_sujet
         */
        public function setPdfSujet($pdf_sujet): void
        {
            $this->pdf_sujet = $pdf_sujet;
        }

        /**
         * @return null
         */
        public function getPdfConfigTcpdfOrientation()
        {
            return $this->pdf_config_tcpdf_orientation;
        }

        /**
         * @param null $pdf_config_tcpdf_orientation
         */
        public function setPdfConfigTcpdfOrientation($pdf_config_tcpdf_orientation): void
        {
            $this->pdf_config_tcpdf_orientation = $pdf_config_tcpdf_orientation;
        }

        /**
         * @return null
         */
        public function getPdfConfigTcpdfFormat()
        {
            return $this->pdf_config_tcpdf_format;
        }

        /**
         * @param null $pdf_config_tcpdf_format
         */
        public function setPdfConfigTcpdfFormat($pdf_config_tcpdf_format): void
        {
            $this->pdf_config_tcpdf_format = $pdf_config_tcpdf_format;
        }

        /**
         * @return null
         */
        public function getPdfConfigTcpdfEncoding()
        {
            return $this->pdf_config_tcpdf_encoding;
        }

        /**
         * @param null $pdf_config_tcpdf_encoding
         */
        public function setPdfConfigTcpdfEncoding($pdf_config_tcpdf_encoding): void
        {
            $this->pdf_config_tcpdf_encoding = $pdf_config_tcpdf_encoding;
        }

        /**
         * @return null
         */
        public function getPdfParametresContenuPolice()
        {
            return $this->pdf_parametres_contenu_police;
        }

        /**
         * @param null $pdf_parametres_contenu_police
         */
        public function setPdfParametresContenuPolice($pdf_parametres_contenu_police): void
        {
            $this->pdf_parametres_contenu_police = $pdf_parametres_contenu_police;
        }

        /**
         * @return null
         */
        public function getPdfParametresContenuMarges()
        {
            return $this->pdf_parametres_contenu_marges;
        }

        /**
         * @param null $pdf_parametres_contenu_marges
         */
        public function setPdfParametresContenuMarges($pdf_parametres_contenu_marges): void
        {
            $this->pdf_parametres_contenu_marges = $pdf_parametres_contenu_marges;
        }

        /**
         * @return null
         */
        public function getPdfParametresContenuHeader()
        {
            return $this->pdf_parametres_contenu_header;
        }

        /**
         * @param null $pdf_parametres_contenu_header
         */
        public function setPdfParametresContenuHeader($pdf_parametres_contenu_header): void
        {
            $this->pdf_parametres_contenu_header = $pdf_parametres_contenu_header;
        }

        /**
         * @return null
         */
        public function getPdfParametresContenuBottom()
        {
            return $this->pdf_parametres_contenu_bottom;
        }

        /**
         * @param null $pdf_parametres_contenu_bottom
         */
        public function setPdfParametresContenuBottom($pdf_parametres_contenu_bottom): void
        {
            $this->pdf_parametres_contenu_bottom = $pdf_parametres_contenu_bottom;
        }
    }