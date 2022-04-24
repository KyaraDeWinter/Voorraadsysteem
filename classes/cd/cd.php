<?php
     class CD extends Product {
        private $artiest;
        private $aantalSongs;
        private $label;
  
        function __construct($itemnr, $naam, $aantalInVoorraad, $minimumVoorraad, $prijs, $actief, $artiest, $aantalSongs, $label) {
            parent::__construct($itemnr, $naam, $aantalInVoorraad, $minimumVoorraad, $prijs, $actief); 
            $this->artiest = $artiest;
            $this->aantalSongs = $aantalSongs;
            $this->label = $label;
          }
    
          function get_lengteMinuten() {
            return $this->lengteMinuten;
          }
    
          function get_jaarUitgifte() {
            return $this->jaarUitgifte;
          }
    
          function get_filmStudio() {
            return $this->filmStudio;
          }
  
          public function __toString()
          {
            return "Type Product: CD<br>" . "Itemnummer: " . $this->itemnr . "<br>Naam van product: " . $this->naam . "<br>Aantal in Voorraad: " . $this->aantalInVoorraad . "<br>Minimum Voorraad: " . $this->minimumVoorraad . "<br>Prijs: " . $this->prijs . "<br>Status: " . $this->actief . "<br>Artiest: " . $this->artiest . "<br>Aantal Nummers: " . $this->aantalSongs . "<br>Label: " . $this->label . "<br><br>";
          }
  
          public function Totaal() {
            return "Totaalprijs van voorraad CD: " . $this->prijs = $this->prijs * $this->aantalInVoorraad . "<br>";
          }
  
          public function Lengte() {
              
          }
     }
?>