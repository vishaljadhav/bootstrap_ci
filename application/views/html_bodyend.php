
        

<?php 


$footer = '';
if (isset($footerscripts) && is_array($footerscripts)){
    foreach($footerscripts as $script) {
        if(empty ($script['content'])){
$footer .= '
        <script type="text/javascript"  src="';
                     if (empty($script['filepath'])) { 
                            $footer .= base_url($script['filepathsubdir'].$script['filename']); 
                         }else { 
                            $footer .= $script['filepath'].$script['filepathsubdir'].$script['filename']; 
                         }
                    $footer .=  '"></script>';
        }else {
            
             $footer .= '
        <script type="text/javascript"> '. $script['content'] .'</script>';
        }
  }
}

        $footer .= '<script> ';
        /*     var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script')); */
        $footer .= '</script>
    </body>
</html>';
        
        echo $footer;
?>