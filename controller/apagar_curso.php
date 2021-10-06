<?php
    include("/xampp/htdocs/RA200471705/model/conexao.php");
    $sql="DELETE FROM cursos WHERE id = :ID)";
    $rea=mysqli_query($conn, $sql);
    $lin=mysqli_affected_rows($conn);

    if($lin >0){
        echo "Curso deletado";
    }else{
        echo "Nenhum curso deletado";
    }

    mysqli_close($conn);