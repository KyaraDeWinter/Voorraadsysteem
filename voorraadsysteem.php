<?php
class Product {
    public $itemnr = 1;
    protected $naam;
    protected $aantalInVoorraad;
    protected $minimumVoorraad;
    protected $prijs;
    protected $actief;

    function __construct($itemnr, $naam, $aantalInVoorraad, $minimumVoorraad, $prijs, $actief) {
        $this->itemnr = $itemnr;
        $this->naam = $naam;
        $this->aantalInVoorraad = $aantalInVoorraad;
        $this->minimumVoorraad = $minimumVoorraad;
        $this->prijs = $prijs;
        $this->actief = $actief;
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

      function get_actief() {
        return $this->actief;
      }

      public function __toString()
      {
        return "Itemnummer: " . $this->itemnr . "<br>Naam van product: " . $this->naam . "<br>Aantal in Voorraad: " . $this->aantalInVoorraad . "<br>Minimum Voorraad: " . $this->minimumVoorraad . "<br>Prijs: " . $this->prijs . "<br>Status: " . $this->actief . "<br><br>";
      }

      public function Ophogen() {
        if ($actief == true) {
            $this->aantalInVoorraad + $OpgegevenAantal;
          } else {
            echo "Dit product is niet actief waardoor de voorraad niet kan worden opgehoogd!";
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

          public function Totaal() {
            $this->totaal = $this->prijs * $this->voorraad * 1.05;
          }

          public function Lengte() {
              
          }
     }

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
          $this->prijs = $this->prijs * $this->voorraad * 1.05;
        }

        public function Lengte() {
            
        }
   }
    
    echo "<b>Voorraadsysteem</b><br><br>";
    $product1 = new DVD(2, 'BTS Memories', 12, 3, 35, 'Actief', 120, 2021, 'HYBE');
    $product2 = new CD(3, 'Post Human: Survival Horror', 12, 3, 35, 'Actief', 'Bring Me The Horizon', 9, 'Sony Music');

    echo $product1;
    echo $product2;


?>