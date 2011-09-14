<div class="addresses index">
    <h2><?php __('Delivery Addresses'); ?></h2>
    <i>(It is highly recommended that you enter in real data for accurate orders.)</i>
    <br/>
    <?php echo $this->Html->link(__('Add a New Delivery Address', true), array('action' => 'addresses_add')); ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th>Description</th>
            <th>Address</th>
            <th>City</th>
            <th>Province</th>
            <th>Country</th>
            <th>Postal</th>
            <th>Edit/Delete</th>
        </tr>
        <?php
        $i = 0;
        foreach ($addresses as $address):
            $class = null;
            if ($i++ % 2 == 0) {
                $class = ' class="altrow"';
            }
            ?>
            <tr<?php echo $class; ?>>
                <td><?php echo $address['Address']['type']; ?>&nbsp;</td>
                <td><?php echo $address['Address']['address']; ?>&nbsp;</td>
                <td><?php echo $address['Address']['city']; ?>&nbsp;</td>
                <td><?php echo $address['Address']['province']; ?>&nbsp;</td>
                <td><?php echo $address['Address']['country']; ?>&nbsp;</td>
                <td><?php echo $address['Address']['postal']; ?>&nbsp;</td>
                <td class="actions">
                    <?php echo $this->Html->link(__('Edit', true), array('action' => 'addresses_edit', $address['Address']['id'])); ?>
                    <?php echo $this->Html->link(__('Delete', true), array('action' => 'addresses_delete', $address['Address']['id']), null, sprintf(__('Are you sure?', true), $address['Address']['id'])); ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>
<?php include('info_action.ctp'); ?>
