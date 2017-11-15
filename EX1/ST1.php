<?php
class Form {
  public function create($action) {
    $this->action = $action;
    return "<form action=''".$this->action."' method='POST'>";
  }
  public function text($inputName, $inputValue) {
    $this->inputName = $inputName;
    $this->inputValue = $inputValue;
    return "<label>".$this->inputName."</label>
    <br>
    <input name='".$this->inputName."' value='".$this->inputValue."'>";
  }
 public function submit($submitValue) {
    $this->submitValue = $submitValue;
    return "<input type='submit' value='".$this->submitValue."' >";
  }
  public function end() {
    return "</form>";
  }
}
$form = new Form();
echo $form->create("ST1.php");
echo $form->text('Naam',"");
echo "</br>";
echo $form->text('Voornaam',"");
echo "</br>";
echo "</br>";
echo $form->submit('Click hier');
echo $form->end(); 
?>
