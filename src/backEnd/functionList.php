<link rel = "stylesheet" href = "../styles/functionList.css">
<?php 
    require("connectDb.php");
    $query = "SELECT * FROM pacientes";
    $consultaPacientes = mysqli_query($connectDb,$query);
?>
<table id = 'tabela-pacientes'>
    <tr>
        <th>NOME</th>
        <th>IDADE</th>
        <th>PESO</th>
        <th>ALTURA EM CM</th>
        <th>IMC</th>
    </tr>
    <?php
        while($paciente = $consultaPacientes->fetch_array())
        {
            
    ?>
        <tr>
            <td><?php echo $paciente["nome"]?></td>
            <td><?php echo $paciente["idade"]?></td>
            <td><?php echo $paciente["peso"]?></td>
            <td><?php echo $paciente["altura"]?></td>
            <td><?php echo $paciente["imc"]?></td>
        </tr>
    <?php 
        }
    ?>
</table>