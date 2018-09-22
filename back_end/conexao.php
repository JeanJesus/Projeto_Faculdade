<?php
  $conn = pg_connect("host=localhost dbname=adivocacia user=jean password=dyjesus0129 port=5432");

  if(isset($conn)){
    echo"<script>alert('Houve conexao!'); </script>";
  }else{
    echo"<script>alert(Nao Houve conexao!);</script>";
  }

?>
