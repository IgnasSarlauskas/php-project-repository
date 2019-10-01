
<form <?php print html_attr(($form['attr'] ?? []) + ['method' => 'POST']); ?>> 
    <!-- Input Field Generation  -->
    <?php foreach ($form['fields'] ?? [] as $field_id => $field): ?>
        <input <?php print html_attr($field); ?>>
    <?php endforeach; ?>
    
    <!-- Button Field Generation  -->
    <?php foreach ($form['buttons'] ?? [] as $button_id => $button): ?>
    <button <?php print html_attr($button); ?>> Test</button>
    <?php endforeach; ?>
</form>

