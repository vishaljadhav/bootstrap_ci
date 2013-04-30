<?php 
if (isset($meta) && is_array($meta)) {
        foreach ($meta as $metadata){
            echo '<meta name="'.$metadata['name'].'" content="'.$metadata['content'].'">';
        }
}

?>