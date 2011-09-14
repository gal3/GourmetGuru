<div class="setMenus form">
    <?php echo $this->Form->create('Owner', array("url" => "/" . $this->params['url']['url'])); ?>
    <fieldset>
        <legend><?php __('Add Set Menu'); ?></legend>
        <?php
        echo $this->Form->input('SetMenu.name');
        echo $this->Form->input('SetMenu.description', array('rows' => 2));

        // need to select the first item of the list
        // so to get the id of the first item
        $keys = array_keys($foods);

        //count foods to see if there are any foods, if not, direct user to add some.
        $countFood = count($foods);
        if ($countFood == 0) {
            echo "<p><i>You do not have any foods to create a set menu. " . $this->Html->link(__('Click here to add food now!', true), array('action' => 'food_add', $id)) . "</i></p>";
        }
        else {
            echo $this->Form->input('Food.Food', array('label' => 'Select Foods to be in the Set Menu', 'default' => $keys[0]));
        }
        ?>
    </fieldset>
        <?php
        if ($countFood != 0)
            echo $this->Form->end(__('Submit', true));
        ?>
</div>
<div class="actions">
    <h3><?php __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('List My Set Menus', true), array('action' => 'set_menus', $id)); ?></li>
    </ul>
</div>
