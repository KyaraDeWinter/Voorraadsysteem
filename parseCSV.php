<?php
class ParseCSV {
    public $filenaam;
    private $header;
    private $data=[];

    public funtion __construct($filenaam='') {
        if($filenaam != '') {
            $this->filenaam = $filenaam;
        }
    }

    public function parse() {
        $file - fopen($this->filenaam, 'r');
        while(!feaf($file)) {
            $row = fgetcsv($file, 0, ',');
            if($row == [NULL] || $row === FALSE) { continue;}
            if(!$this->header) {
                $this->header = $row;
            } else {
              $this->data[] = array_combine($this->header, $row);
            }
        }
        fclose($file);

        return $this->data;
    }
}


?>