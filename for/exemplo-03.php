<?php
echo '<select>';
for ($index=date("Y"); $index >= date("Y")-100  ; $index--) {
    echo "<option value='$index'>$index</option>";    
}
echo '</select>';

