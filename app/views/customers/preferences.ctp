<div class="customerPrefs form">
    <?php echo $this->Form->create('Customer', array('action' => 'preferences')); ?>
    <h2>Preferences</h2>
    <p>Information below will be used to calculate suggestions for you next meal.</p>

    <fieldset>
        <legend><?php __('Daily Maximum'); ?></legend>
        <?php
        echo $this->Form->input('CustomerPref.id');
        echo $this->Form->input('CustomerPref.budget', array('label' => 'Budget($):'));
        echo "<p><i> (Daily maximum budget is suggested to be at least $8)</i></p>";
        echo $this->Form->input('CustomerPref.calorie', array('label' => 'Calorie:'));
        echo "<p><i> (Calories is suggested to be around 1940 for women and 2550 for men. Click here for a <a href='http://www.freedieting.com/tools/calorie_calculator.htm'>calorie calculator </a>)</i></p>";
        ?>
    </fieldset>

    <fieldset>
        <legend><?php __('Interested Services'); ?></legend>
        <?php
        echo $this->Form->input('CustomerPref.dine_in', array('type' => 'checkbox'));
        echo $this->Form->input('CustomerPref.take_out', array('type' => 'checkbox'));
        echo $this->Form->input('CustomerPref.delivery', array('type' => 'checkbox'));
        echo "<p><i> (If left empty, it will mean you don't mind any of the above services for your next order.)</i></p>";
        ?>

    </fieldset>

    <fieldset>
        <legend><?php __('Interested Cuisine Type(s)'); ?></legend>
        <?php
        echo $this->Form->input('CuisineType.CuisineType', array('type' => 'select', 'multiple' => 'checkbox', 'label' => '(Check any that you are interested in)'));
        echo "<p><i> (If left empty, it will mean you don't mind any of the above cuisines for your next order.)</i></p>";
        ?>

    </fieldset>

    <fieldset>
        <legend><?php __('Other'); ?></legend>
        <?php
        echo "<p><h3>Comment(s) </h3></p>";
        echo "Please include any allergies or personal modification information. This will be appended to your order for stores to view.";
        echo $this->Form->input('CustomerPref.notes', array('label' => '(Max. of 255 characters)', 'maxlength'=>'255'));
        //echo $this->Form->input('CustomerPref.max_suggestion', array('label' => 'Maximum number of Suggestions: (default is 5)'));
        ?>

    </fieldset>

    <?php
    echo $this->Form->hidden("referer", array('value' => $referer));
    echo $this->Form->end(__('Submit', true));
    ?>
</div>
