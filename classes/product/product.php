<?php
class Product {
    // eigenschappen van de class product
    public $itemnr = 1;
    protected $naam;
    protected $aantalInVoorraad;
    protected $minimumVoorraad;
    protected $prijs;
    protected $actief;

    // construct
    function __construct($itemnr, $naam, $aantalInVoorraad, $minimumVoorraad, $prijs, $actief) {
        $this->itemnr = $itemnr;
        $this->naam = $naam;
        $this->aantalInVoorraad = $aantalInVoorraad;
        $this->minimumVoorraad = $minimumVoorraad;
        $this->prijs = $prijs;
        $this->actief = $actief;
      }

      // getters
      function get_itemnr() {
        return $this->itemnr;
      }

      function get_naam() {
        return $this->naam;
      }

      function get_aantalInVoorraad() {
        return $this->aantalInVoorraad;
      }

      function get_minimumVoorraad() {
        return $this->minimumVoorraad;
      }

      function get_prijs() {
        return $this->prijs;
      }

      function get_actief() {
        return $this->actief;
      }

      // magic method toString om eigenschappen in string terug te geven
      public function __toString()
      {
        return "Itemnummer: " . $this->itemnr . "<br>Naam van product: " . $this->naam . "<br>Aantal in Voorraad: " . $this->aantalInVoorraad . "<br>Minimum Voorraad: " . $this->minimumVoorraad . "<br>Prijs: " . $this->prijs . "<br>Status: " . $this->actief . "<br><br>";
      }

      // method ophogen van de voorraad met opgegeven aantal wanneer actief true is
      public function Ophogen() {
        if ($actief == true) {
            $this->aantalInVoorraad + $opgegevenAantal;
          } else {
            echo "Dit product is niet actief waardoor de voorraad niet kan worden opgehoogd!";
          }
      }

      // verlagen van de voorraad, mag niet lager zijn dan minimum voorraad
      public function Verlagen() {
        if ($minimumVoorraad >= $opgegevenAantal) {
          $this->aantalInVoorraad - $OpgegevenAantal;
        } else {
          echo "Het opgegeven aantal is hoger dan de minimum voorraad: de voorraad niet kan worden verlaagd!";
        }
      }

      public function Totaal() {
        return "Totaalprijs van voorraad: " . $this->prijs = $this->prijs * $this->aantalInVoorraad . "<br>";
      }
    }
    ?>