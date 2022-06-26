<?php
$valuetitulo = "";
$valueurl = "";
$valueframe = "";
if ($_SESSION['alterando'] == True) {
    $valuetitulo = $_SESSION['alterando']['titulo'];
    $valueurl = $_SESSION['alterando']['url'];
    $valueframe = $_SESSION['alterando']['frame'];
}
?>

<form method="post" action="">
    <fieldset>
        <div>
            <label>TÍTULO: </label>
            <input type="text" value="<?php echo $valuetitulo; ?>" name="titulo"></input>
        </div>
        <div>
            <label>URL: </label>
            <input type="url" value="<?php echo $valueurl; ?>" name="url"></input>
        </div>
        <div>
            <label>FRAME: </label>
            <!-- <input type="text" value="<?php echo $valueframe; ?>" name="frame"></input> -->
            <textarea id="frame" name="frame"  > <?php echo $valueframe; ?> </textarea>            

        </div>
        <div> 
        <?php if ($_SESSION['alterando'] == True) { ?>        
            <button class="form" type="submit" name="atualizar_dados"> Atualizar </button>
            <button class="form" type="submit" name="cancelar_alt"> Cancelar </button>
        <?php
        } else { ?>
            <button class="form" type="submit" name="adicionar_dados"> Adicionar </button>
            
        <?php } ?>
        </div> 
    </fieldset>
</form>