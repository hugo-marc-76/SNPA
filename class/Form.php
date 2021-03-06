<?php

class Form {

    protected $data;

    public $surround = 'p';


    public function __construct($data = array()) {
        $this->data = $data;
    }

    protected function surround($html){
        return "<div class=\"form-floating\"  action=\"\">$html</div><br>";


    }

    protected function getValue($index){
        return isset($this->data[$index]) ? $this->data[$index] : null;
    }


    public function input($name_var, $name, $type, $afficher_admin){

        if(isset($afficher_admin[$name_var])) { 
            
            $result = $afficher_admin[$name_var];

        } else {

            $result = '';

        }

      return $this->surround(

          '

          <input type="' . $type . '" class="form-control" id="' . $name_var . '" name="' . $name_var . '" value="' . $result .'" required>

          <label for="' . $name_var . '">' . $name . '</label>

          '
        
        );
    }


    public function submit(){
       return $this->surround('<button type="submit">Envoyer</button>');

    }


}
