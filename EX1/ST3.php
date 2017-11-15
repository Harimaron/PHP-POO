<?php
class Validator {
    public $input;
    public function SetInput($input)
    {
      if(intval($input)==0 && $input <> "0"){
        $this->input = $input;
      }else{
        $this->input = intval($input);
      }

    }
    public function String()
    {
      if(is_string($this->input)){
        return $this->input." est une phrase.";
      }
      else {
        return $this->input." n'est pas une phrase.";
      }
    }
    public function Int()
    {
      if(is_int($this->input)){
        return $this->input." est un nombre.";
      }
      else {
        return $this->input." n'est pas un nombre.";
      }
    }
}
$validation = new Validator;
if (isset($_POST["submit"])) {
  $validation->SetInput($_POST["test"]);
  echo $validation->String();
  echo "<br />";
  echo $validation->Int();
}
 ?>
 <form action="ST3.php" method="post">
   <input type="text" name="test">
   <input type="submit" name="submit">
 </form>
