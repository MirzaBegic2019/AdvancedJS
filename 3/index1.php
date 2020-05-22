  <?php
// Array with names
$a[] = "Benjamin";
$a[] = "Amar";
$a[] = "Mirza";
$a[] = "Almedin";
$a[] = "Amel";
$a[] = "Adis";
$a[] = "Elvedin";
$a[] = "Irfan";
$a[] = "Harun";
$a[] = "Eldar";
$a[] = "Emin";
$a[] = "Edmir";
$a[] = "Belmin";
$a[] = "Anes";
$a[] = "Almir";
$a[] = "Elmedin";
$a[] = "Amer";

// get request parameter
$q = $_REQUEST['q'];

$hint = "";

if ($q !== "") {
  $q = strtolower($q);
  $len=strlen($q);
  foreach($a as $name) {
    if (stristr($q, substr($name, 0, $len))) {
      if ($hint === '') {
        $hint = $name;
      } else {
        $hint .= ", $name";
      }
    }
  }
}

echo $hint === "" ? "No suggestions" : $hint;
?> 