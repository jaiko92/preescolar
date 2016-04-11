<div class="contenido_principal">
	<table style='width :896px;' cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('cédula_escolar'); ?></th>
                        <th><?php echo $this->Paginator->sort('nombre'); ?></th>
                        <th><?php echo $this->Paginator->sort('apellido'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha_nac'); ?></th>
			<th><?php echo $this->Paginator->sort('ingreso'); ?></th>
			<th><?php echo $this->Paginator->sort('telf habitacion'); ?></th>
			<th><?php echo $this->Paginator->sort('peso'); ?></th>
			<th><?php echo $this->Paginator->sort('talla'); ?></th>
			<th><?php echo $this->Paginator->sort('estatus'); ?></th>
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
       
	<?php foreach ($alumnos as $alumno): ?>
	<tr>
		<td><?php echo h($alumno['Alumno']['cedula_escolar']); ?>&nbsp;</td>
                <td><?php echo h($alumno['Alumno']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($alumno['Alumno']['apellido']); ?>&nbsp;</td>
		<td><?php echo h($alumno['Alumno']['fecha_nacimiento']); ?>&nbsp;</td>
		<td><?php echo h($alumno['Alumno']['fecha_ingreso']); ?>&nbsp;</td>
		<td><?php echo h($alumno['Alumno']['telefono_habitacion']); ?>&nbsp;</td>
		<td><?php echo h($alumno['Alumno']['peso']); ?>&nbsp;</td>
		<td><?php echo h($alumno['Alumno']['talla']); ?>&nbsp;</td>
		<td>
			<?php  echo h($alumno['Estatu']['nombre']); ?>
		</td>
		<td class="actionsss">
			<?php echo $this->Html->image('buscar.png', array('width'=>'40px;', 'heigth'=>'40px;', 'alt'=>'Ver','title'=>'Ver', 'url'=>array('action' => 'view', $alumno['Alumno']['id']))); ?>
			<?php // echo $this->Html->link(__('Edit'), array('action' => 'editar', $alumno['Alumno']['id'])); ?>
			<?php // echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $alumno['Alumno']['id']), null, __('Are you sure you want to delete # %s?', $alumno['Alumno']['id'])); ?>
		</td>
	</tr>
        
<?php endforeach; ?>
	</table>
<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>