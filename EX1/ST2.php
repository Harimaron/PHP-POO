<?php
class HTML {
  public function CSS($cssURL) {
    $this->cssURL = $cssURL;
    return "<link rel='stylesheet' href='".$this->cssURL."'>";
  }
  public function Meta($metaAttribute) {
    $this->metaAttriubte = $metaAttribute;
    return "<meta ".$this->metaAttribute.">";
  }
  public function Images ($imageURL) {
    $this->imageURL = $imageURL;
    return "<img src='".$this->imageURL."'>";
  }
  public function Link($link, $linkAppearance)
  {
    $this->link = $link;
    $this->linkAppearance = $linkAppearance;
    return "<a href='".$this->link."'>".$this->linkAppearance."</a>";
  } 
  public function JSLink($jsLink)
  {
    $this->jsLink = $jsLink;
    return "<script src='".$this->jsLink."'>";
  }
}
$HTML = new HTML;
echo $HTML->CSS("style.css");
echo $HTML->Link("http://i1.kym-cdn.com/photos/images/newsfeed/001/087/917/3c2.gif", "Cet exercice n'a pas d'intérêt.");
 ?>
