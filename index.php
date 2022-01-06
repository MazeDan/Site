<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title></title>
</head>
<body>
<div class="container">
<script>
    document.getElementById("input").addEventListener("change", function(){
   this.value = parseFloat(this.value).toFixed(2);
});
</script>
<style>
.centrao{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}
</style>
<div class="centrao">
    <form action="index.php" method="post">
        <div class="row">
            <div class="col">
        <label for="inputState" class="form-label">Alimento</label>
        <select id="inputState" name='frutas' class="form-select">
        <option>Maçã</option>
        <option>Banana</option>
        <option>Cenoura</option>
        </select>
            </div>
            <div class="col">
            <label for="inputState" class="form-label">KG</label>
            <input type="number"  name='n1' class="form-control" placeholder="0.5" aria-label="First name" step="0.010">
            </div>
            <button type="submit" class="btn btn-primary text-center" >Calcular</button>
    </form>

    <?php
    if($_POST){
        
        $fruta = $_POST['frutas'];
        $N1 = $_POST['n1'];
        if($N1 != null && $N1 > 0){
        $maca = 4.17;
        $banana = 3.20;
        $cenoura = 4;

        if ($fruta == "Maçã"){
            $resultado = number_format($maca * $N1,2,",",".");
        }
        if ($fruta == "Banana"){
            $resultado = number_format($banana * $N1,2,",",".");
        }
        if ($fruta == "Cenoura"){
            $resultado = number_format($cenoura * $N1,2,",",".");
        }

        echo("<h2 class='text-center'>O Preço de $fruta é igual = R$ $resultado</h2>");
        }
        else{
            echo "<h6 class='text-center'>Digite o KG  </h6>";}
        }
    
        
    
    
    ?>
</div>
</div>
</body>

</html>