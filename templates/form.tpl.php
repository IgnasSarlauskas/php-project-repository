
<form <?php print html_attr(($form['attr'] ?? []) + ['method' => 'POST']); ?>> 

    <!-- Input Field Generation  -->
    <?php foreach ($form['fields'] ?? [] as $field_id => $field): ?>

        <!-- Check if field array has 'label' and print it in case it is true  -->
        <?php if (isset($field['label'])) : ?>
            <label>
                <?php print $field['label']; ?>
            <?php endif; ?>

            <!-- Check if field array has 'type => select' and print it in case it is true  -->
            <?php if ($field['attr']['type'] == 'select') : ?>
                <select <?php print html_attr(['name' => $field_id] + ($field['extra_attr'] ?? [])); ?>>
                    
                    <!-- getting option values ant printing them  -->
                    <?php foreach ($field['options'] as $field_value_id => $field_value): ?>
                        <option value="<?php print $field_value_id; ?>"><?php print $field_value; ?></option>
                    <?php endforeach; ?>
                </select>
            <?php else: ?>
                
                <!--printing inputs with their attributes from form array-->
                <input <?php print html_attr(['name' => $field_id] + $field['attr'] + ($field['extra_attr'] ?? [])); ?>>
            <?php endif; ?>
            
            <!-- Check For Error message  -->
            <?php if (isset($field['error'])) : ?>
            <div class="color-red"><?php print $field['error'] ?? ''; ?></div>
            <?php endif; ?>
            
            <!-- check if label is set-->
            <?php if (isset($field['label'])) : ?>
            </label>
        <?php endif; ?>
        <!--end label check-->
    <?php endforeach; ?>
        
    <!-- Button Field Generation  -->
    <?php foreach ($form['buttons'] ?? [] as $button_id => $button): ?>
        <button <?php print html_attr($button); ?>> <?php print $button_id; ?> </button>
    <?php endforeach; ?>

    <!--If field array has message key then print the message-->
    <?php foreach ($form['message'] ?? [] as $value): ?>
        <?php if (isset($value)) : ?>
            <p class="color-red"><?php print $value; ?></p>
        <?php endif; ?> 
    <?php endforeach; ?>
</form>

