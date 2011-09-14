<div class="setMenus index">
    <h2><?php __($store['0']['Store']['name'] . ' Set Menus'); ?></h2>
    <?php echo $this->Html->link(__('My Store Information', true), array('action' => 'store_view', $id)); ?> &nbsp;
    <?php echo $this->Html->link(__('My Foods', true), array('action' => 'foods', $id)); ?> &nbsp;
    <?php echo $this->Html->link(__('My Set Menus', true), array('action' => 'set_menus', $id)); ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?php echo $this->Paginator->sort('name'); ?></th>
            <th><?php echo $this->Paginator->sort('description'); ?></th>
            <th><?php echo $this->Paginator->sort('Total Calories', 'total_calorie'); ?></th>
            <th><?php echo $this->Paginator->sort('total_cost'); ?></th>
            <th><?php echo $this->Paginator->sort('Customer Rating', 'rating'); ?></th>
            <th class="actions"><?php __('Actions'); ?></th>
        </tr>
        <?php
        $i = 0;
        foreach ($setMenus as $setMenu):
            $class = null;
            if ($i++ % 2 == 0) {
                $class = ' class="altrow"';
            }
            ?>
            <tr<?php echo $class; ?>>
                <td><?php echo $setMenu['SetMenu']['name']; ?>&nbsp;</td>
                <td><?php echo $setMenu['SetMenu']['description']; ?>&nbsp;</td>
                <td><?php echo $setMenu['SetMenu']['total_calorie']; ?>&nbsp;</td>
                <td><?php echo $setMenu['SetMenu']['total_cost']; ?>&nbsp;</td>
                <td>	
                    <?php
                    $rating = $setMenu['SetMenu']['rating'];
                    echo "<span style=\"display:none\">$rating</span> ";

                    for ($i = 0; $i < 5; $i++) {
                        if ($i < $rating)
                            echo "<div class=\"on-star\">&nbsp;</div>";
                        else
                            echo "<div class=\"off-star\">&nbsp;</div>";
                    }
                    ?>		
                    &nbsp;
                </td>
                <td class="actions">
                    <?php echo $this->Html->link(__('View', true), array('action' => 'set_menu_view', $id, $setMenu['SetMenu']['id'])); ?>
                    <?php echo $this->Html->link(__('Edit', true), array('action' => 'set_menu_edit', $id, $setMenu['SetMenu']['id'])); ?>
                    <?php echo $this->Html->link(__('Delete', true), array('controller' => 'SetMenus', 'action' => 'delete', $id, $setMenu['SetMenu']['id']), null, sprintf(__('Are you sure?', true))); ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

    <?php
    $count = count($setMenus);
    if ($count == 0)
        echo "<p><i>You currently do not have any set menus listed. Click " . $this->Html->link(__('Add a New Set Menu', true), array('action' => 'set_menu_add', $id)) . " to add now!</i></p>";
    ?>

</div>
<div class="actions">
    <h3><?php __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Add a New Set Menu', true), array('action' => 'set_menu_add', $id));
    ?></li>
    </ul>
</div>
