@php
    $nombre = "Jesús";
    function getNombre () {
         $nombre = "Hesús";
        return "Mi nombre es " . $nombre;
    }
@endphp

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


    <h1>Página Hola</h1>
    @if ($nombre == "David")
        Eres David
    @else
        <p style="background-color: green">NO eres David,  {{ getNombre () }}</p>
    @endif
algo
    @php
        
        $ejercito = [];
        $colores = ["rojo", "verde", "azul", "amarillo", "naranja", "negro"];
        $acciones = ["transformado", "sin transformar"];
        $volar = ["volando", "sin volar"];   
for ($i=0; $i < 10; $i++) { 
    //$ejercito[$i]= new ironMan(null,null,null,"rojo","transformado","volando");
    $ejercito[$i] = [$colores[rand(0,4)], $acciones[rand(0,1)], $volar[rand(0,1)]];
}
    print_r ($ejercito);
    @endphp
</body>
</html>
