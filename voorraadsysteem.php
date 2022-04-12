<?php
class Product {
    private $itemnr;
    private $naam;
    private $aantalInVoorraad;
    private $minimumVoorraad;
    private $prijs;
    private $status;

    function __construct($itemnr, $naam, $aantalInVoorraad, $minimumVoorraad, $prijs, $status) {
        $this->itemnr = $itemnr;
        $this->naam = $naam;
        $this->aantalInVoorraad = $aantalInVoorraad;
        $this->minimumVoorraad = $minimumVoorraad;
        $this->prijs = $prijs;
        $this->status = $status;
      }

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

      function get_status() {
        return $this->status;
      }

      public function __toString()
      {
        return "Itemnummer: " . $this->itemnr . "<br>Naam van product: " . $this->naam . "<br>Aantal in Voorraad: " . $this->aantalInVoorraad . "<br>Minimum Voorraad: " . $this->minimumVoorraad . "<br>Prijs: " . $this->prijs . "<br>Status: " . $this->status;
      }

      public function Ophogen() {
        if ($status == true) {
            echo "Voorraad is opgehoogd!";
          }
      }

      public function Verlagen() {

      }

      public function Totaal() {
          $this->prijs = $this->prijs * $this->voorraad;
      }
    }

    class DVD extends Product {
        private $lengteMinuten;
        private $jaarUitgifte;
        private $filmStudio;

        function __construct($lengteMinuten, $jaarUitgifte, $filmStudio) {
            $this->lengteMinuten = $lengteMinuten;
            $this->jaarUitgifte = $jaarUitgifte;
            $this->aantalInVoorraad = $aantalInVoorraad;
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
    }
    
    echo "<b>Voorraadsysteem</b><br><br>";
    $product = new Product(12345, 'Bring Me The Horizon, Post Human: Survival Horror', 56, 5, 10, 'Actief');
    echo $product;


?>