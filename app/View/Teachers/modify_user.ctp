<html>
<br>

<?php echo $this->Html->link('Home',array('controller' => 'teachers', 'action' => 'back')); ?>

<?php if('A' == $this->Session->read('UserType'))
	{

 ?>
	<b><h2>User profiles</h2></b><br><br>
	<table>
	<?php echo $this->Form->create('ModifyUser');?>  
	    <tr>
	        
	        <th>Name</th>
	        <th>Email Address</th>
	        <th>School</th>
	        <th>Action</th>
	        <th>Action</th>
	        <th>Action</th>
	        <th></th>

	    </tr>
	
	    <!-- Here is where we loop through our $posts array, printing out post info -->
	    <?php foreach ($userList as $teacher):?>
	    <tr>
	        <td><?php echo $teacher['Teacher']['name']; ?></td>
			<td><?php echo $teacher['Teacher']['email_address']; ?></td>
	        <td><?php echo $teacher['Teacher']['school']; ?></td>
	        <td><?php echo $this->Html->link('Edit', array('action' => 'editUser', $teacher['Teacher']['id']));
	        ?>
	       </td><td>
            <?php  echo $this->Form->postLink(
                'Delete',
                array('action' => 'delete', $teacher['Teacher']['id'],$teacher['Teacher']['name']),
                array('confirm' => 'Are you sure you want to delete the user ?'));
            ?>
           </td><td>
            <?php  echo $this->Form->postLink(
                'Reset Password',
                array('action' => 'userResetPassword', $teacher['Teacher']['id'],$teacher['Teacher']['name']),
                array('confirm' => 'Are you sure you want to reset the password ?'));
            ?></td>
	        <td></td>

	    </tr>
	    <?php endforeach; ?>
	</table>
	<br>
	<?php echo $this->Form->end(); ?></td>
	<?php }
?>

<br>
<br>
</html>