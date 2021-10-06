<?php
    include("/xampp/htdocs/RA200471705/model/conexao.php");
   
    $sql="DELETE FROM alunos WHERE id = ";
    $rea=mysqli_query($conn, $sql);
    $lin=mysqli_affected_rows($conn);

    if($lin >0)
    {
        echo "Aluno deletado";
    }else{
        echo "Nenhum aluno deletado";
    }

    mysqli_close($conn);