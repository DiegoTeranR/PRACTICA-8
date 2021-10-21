
<?PHP

function recogeDato($campo){
    return isset($_REQUEST[$campo])?$_REQUEST[$campo]:'';
}

if(!empty($_FILES['uploaded_file']))
{
    $radio = recogeDato('radio1');
    $radio2 = recogeDato('radio2');
    $radio3 = recogeDato('radio3');
    if ($radio!=" "  ){
        $path = "Desarrollo de Software/";
    }elseif ($radio2!=" "){
        $path ="Seguridad Informatica/";
    }elseif ($radio3!=" "){
        $path = "Gestion de SI/";
    }else{
        $path = "uploads/";
    }
    echo $radio;
    echo $radio2;
    echo $radio3;
    echo $path = "Desarrollo de Software/";
    echo $path = "Seguridad Informatica/";
    echo $path = "Gestion de SI/";
    $path = $path.basename( $_FILES['uploaded_file']['name']);

    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
        echo "El archivo ".basename( $_FILES['uploaded_file']['name']).
        "ha sido subido";

    } else{
        echo "Hubo un error subiendo tu archivo ,intenta denuevo porfavor";
    }
}

echo $radio;
echo $radio2;
echo $radio3;
echo $path = "Desarrollo de Software/";
echo $path = "Seguridad Informatica/";
echo $path = "Gestion de SI/";
?>