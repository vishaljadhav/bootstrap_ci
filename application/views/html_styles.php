<?php 

$showHeader = '';

 if (isset($css) && is_array($css)) {
            foreach ($css as $c){
                $showHeader .= '
        <link rel="'.$c['rel'].'"  type="'.$c['type'].'" href="';
                
                        if (empty($c['filepath'])) { 
                            $showHeader .=  base_url($c['filepathsubdir'].$c['filename']); 
                         } else { 
                            $showHeader .= $c['filename']; 
                         }
                        $showHeader .= '" />';
            }
    }
$showHeader .= '
    ';
if (isset($scripts) && is_array($scripts)){
    foreach($scripts as $script) {
        
        if(empty ($script['content'])){
                    $showHeader .= '
        <script type="text/javascript" src="';
                     if (empty($script['filepath'])) { 
                            $showHeader .=  base_url($script['filepathsubdir'].$script['filename']); 
                         } else { 
                            $showHeader .= $script['filepath'].$script['filepathsubdir'].$script['filename']; 
                         }
                    $showHeader .=  '"></script>';
        }else { 
            
                    $showHeader .= '
        <script type="text/javascript"> '. $script['content'] .'</script>';
            
        }
  }
}


echo $showHeader;
 

?>
