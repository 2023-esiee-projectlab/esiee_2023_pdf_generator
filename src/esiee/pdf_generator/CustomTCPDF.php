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
         * @param int $saut_de_ligne Saut de ligne
         * @param int $interlignes Interlignes
         * @param string $title Titre du PDF
         * @param string $image_link Lien de l'image du PDF
         * @param int $image_with Largeur de l'image du PDF
         * @param array $police Police du PDF
         * @return void
         */
        public function Header($saut_de_ligne, $interlignes, $title, $image_file, $image_with, $image_type, $police)
        {
            // Logo
            $this->Image($image_file, 10, 10, $image_with, '', $image_type, '', 'T');
            //$this->Image($image_file, 10, 10, $image_with, '', $image_type, '', 'T', false, 300, '', false, false, 0, false, false, false);
            // Set font
            $this->SetFont($police[0], 'B', $police[2]);
            // Title
            //$this->Cell(0, 15, '<< TCPDF Example 003 >>', 0, false, 'C', 0, '', 0, false, 'M', 'M');
            $this->Cell(0, $saut_de_ligne, $title, 0, 1, 'C');
            //$this->Cell(0, 15, $title, 0, false, 'C', 0, '', 0, false, 'M', 'M');
        }

        /**
         * Footer
         * <br/>Cette méthode permet de configurer le pied de page du PDF.
         *
         * @param int $saut_de_ligne Saut de ligne
         * @param int $interlignes Interlignes
         * @param array $police Police du PDF
         * @return void
         */
        public function Footer($saut_de_ligne, $interlignes, $police)
        {
            // Position at 15 mm from bottom
            //$this->SetY(-15);
            // Set font
            $this->SetFont($police[0], 'I', $police[2]);
            // Page number
            $this->Cell(0, $saut_de_ligne, 'Page ' . $this->getAliasNumPage() . '/' . $this->getAliasNbPages(), 0, false, 'C');
            //$this->Cell(0, 10, 'Page ' . $this->getAliasNumPage() . '/' . $this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
        }
    }