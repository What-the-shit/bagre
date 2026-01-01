<?php
if (!empty($_POST['g-recaptcha-response'])) {
  header("Location: site.html");
} else {
  echo "Você agora é um Robô";
}
?>
