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

        /**
         * Header
         * <br/>Cette méthode permet de configurer l'en-tête du PDF.
         *
         * @param string $title Titre du PDF
         * @param string $image_link Lien de l'image du PDF
         * @param int $image_with Largeur de l'image du PDF
         * @param array $police Police du PDF
         * @return void
         */
        public function Header($title, $image_link, $image_with, $image_type, $police)
        {
            // Logo
            $image_file = $image_link;
            $this->Image($image_file, 10, 10, $image_with, '', $image_type, '', 'T', false, 300, '', false, false, 0, false, false, false);
            // Set font
            $this->SetFont($police[0], 'B', $police[2]);
            // Title
            $this->Cell(0, 15, $title, 0, false, 'C', 0, '', 0, false, 'M', 'M');
        }

        // Footer
        public function Footer($police)
        {
            // Position at 15 mm from bottom
            $this->SetY(-15);
            // Set font
            $this->SetFont($police[0], 'I', $police[2]);
            // Page number
            $this->Cell(0, 10, 'Page ' . $this->getAliasNumPage() . '/' . $this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
        }
    }