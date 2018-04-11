<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<table border="1">
    <thead>
        <tr>
            <th>Nome </th>
            <th>Endereço</th>
            <th>Email</th>
            <th>Sexo</th>
            <th>CPF</th>
            <th>Opções</th>
        </tr>
    </thead>
    <tbody>
        
       <?php        
       
       foreach ($retorno as $registrosfeitos){
        ?> <tr>
            <td> <?php echo  $registrosfeitos['nome'];?></td>
            <td> <?php echo  $registrosfeitos['endereco'];?></td>
            <td> <?php echo  $registrosfeitos['email'];?> </td>
            <td> <?php echo  $registrosfeitos['sexo'];?></td>
            <td> <?php echo  $registrosfeitos['cpf'];?></td>
            <td> <a href="./usuario.php?tag=update&id=<?php echo $registrosfeitos['id'];?>" >Editar</a> 
                <a href="./usuario.php?tag=delete&id=<?php echo $registrosfeitos['id'];?>" >Excluir</a></td>
        </tr> 
       <?php } ?>
    </tbody>
</table>
