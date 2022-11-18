<?php

/**
 * Formulaire
 * template Forme formulaire
 */
?>
<?php
class Formulaire
{
    private function form_group($html)
    {
        return '
                <div class="form-group">
                    '.$html.'
                </div>
                ';
    }

    public function label($html)
    {
        return '<label>' . $html . '</label>';
    }

    public function zoneSaisie($name, $class, $placeholder, $value="")
    {
        return $this->form_group('
                    <input type="text" name="' . $name . '" class="form-control ' . $class . '" placeholder="' . $placeholder . '" value="'. $value .'">
                ');
    }

    public function zonePwd($name, $class, $placeholder)
    {
        return $this->form_group('<input type="password" name="' . $name . '" class="form-control ' . $class . '" placeholder="' . $placeholder . '">');
    }
    
    public function btn($value,$class="",$id="")
    {
        return $this->form_group('<input type="submit" value="'. $value .'" class="btn ' . $class . '" id="'. $id.'">');
    }

    
    private function input_group($html)
    {
        return '<div class="input-group">'.$html.'</div>';
    }

    public function zoneDate($label,$name,$class,$value="")
    {
        $zoneSaisie = '<label class="input-group-addon">'. $label .'</label>'.
                    '<input type="date" name="'. $name .'" id="" class="form-control ' . $class . '" value="'.$value.'">';
        return $this->form_group($this->input_group($zoneSaisie));
    }
    public function zoneTextarea($label,$name)
    {
        $zoneSaisie = '<label class="">'. $label .'</label>'.
                        '<textarea name="'.$name.'" id="" cols="30" rows="2" class="form-control"></textarea>';
        return $this->form_group($zoneSaisie);
    }
    public function value($valeur)
    {
        if(isset($_GET[$valeur]))
        {
            return $value = $_GET[$valeur];
        }else{
            return $value = "";
        }
    }

}