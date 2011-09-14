<div class="setMenus form">
    <?php echo $this->Form->create('Owner', array("url" => "/" . $this->params['url']['url'])); ?>
    <fieldset>
        <legend><?php __('Edit Set Menu'); ?></legend>
        <?php
        echo $this->Form->input('SetMenu.id');
        echo $this->Form->input('SetMenu.name');
        echo $this->Form->input('SetMenu.description', array('rows' => 2));



        //count foods to see if there are any foods, if not, direct user to add some.
        $countFood = count($foods);
        if ($countFood == 0) {
            echo "<br/>There are currently no foods to add to this new set menu, you must have at least one food in order to create a new set-menu. Click "
            . $this->Html->link(__('here', true), array('action' => 'set_menus', $id)) . " to go back and then click 'My Foods'->'Add new Food'.";
        }
        echo $this->Form->input('Food.Food');
        ?>
    </fieldset>
    <?php
    if ($countFood != 0)
        echo $this->Form->end(__('Submit', true));
    else
        echo "You are currently unable to submit because there are the food for this menu is no longer available. Please remove this set menu from the" . $this->Html->link(__('manage view', true), array('action' => 'set_menus', $store));
    ?>
</div>
<div class="actions">
    <h3><?php __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('List Set Menus', true), array('action' => 'set_menus', $store)); ?></li>
    </ul>
</div>
