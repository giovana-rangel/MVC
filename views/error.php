
<section style="width:100%; height:100vh;display:flex; flex-direction:column; align-items:center;font-family:'Quicksand';">
  <h5 style="font-size:1.5rem; color:#b2bec3; padding:0; margin-bottom: 2rem">Ha ocurrido un error</h5>
  <?php
    if(isset($error)) print "<p>$error</p>" 
  ?>
  <img style="width:35%;" src="assets/warning.svg">
  <a href="index.php?action=homepage" 
    style="padding:12px; background:#00AFE2; border-radius:2rem; margin-top:3rem; color:#FFF; font-weight:600;text-decoration:none;">
    Volver a Inicio
  </a>
</section>