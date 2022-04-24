<?php
class DVD extends Product {
        private $lengteMinuten;
        private $jaarUitgifte;
        private $filmStudio;

        function __construct($itemnr, $naam, $aantalInVoorraad, $minimumVoorraad, $prijs, $actief, $lengteMinuten, $jaarUitgifte, $filmStudio) {
            parent::__construct($itemnr, $naam, $aantalInVoorraad, $minimumVoorraad, $prijs, $actief);
            $this->lengteMinuten = $lengteMinuten;
            $this->jaarUitgifte = $jaarUitgifte;
            $this->filmStudio = $filmStudio;
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
            return "Type Product: DVD<br>" . "Itemnummer: " . $this->itemnr . "<br>Naam van product: " . $this->naam . "<br>Aantal in Voorraad: " . $this->aantalInVoorraad . "<br>Minimum Voorraad: " . $this->minimumVoorraad . "<br>Prijs: " . $this->prijs . "<br>Status: " . $this->actief . "<br>Lente in Minuten: " . $this->lengteMinuten . "<br>Jaar van Uitgifte: " . $this->jaarUitgifte . "<br>Filmstudio: " . $this->filmStudio . "<br><br>";
          }

          // totale voorraad vermedigvuldigd met 1.05
          public function Totaal() {
            return "Totaalprijs van voorraad DVD: " . $this->totaal = $this->prijs * $this->aantalInVoorraad * 1.05 . "<br>";
          }

          // opmaak van lengte in uren:minuten
          static function Lengte($minuten) {
            if ($minuten <= 0) {
              return '00:00';
            } else {
              return sprintf("%02d",floor($minuten / 60)) . ":" . sprintf("%02d",str_pad(($minuten % 60), 2, "0", STR_PAD_LEFT));
            }

        }
     }
?>