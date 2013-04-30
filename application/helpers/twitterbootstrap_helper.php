<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Description of twitterbootstrap_helper
 * 
 * @author VishalJ
 * 
 * Introduction
 * 
 * 
 * 
 */





if ( !function_exists('gender')){
    function gender($id, $unisex = false){
        if (!empty ($id)){
            $sop  = '<input type="hidden" name="'.$id.'" id="'.$id.'"  ng-model="'.$id.'" >
                     <div class="btn-group" data-toggle="buttons-radio">
                        <button type="button" class="btn btn-primary" ng-click="'.$id.' = \'male\'">Male</button>
                        <button type="button" class="btn btn-primary" ng-click="'.$id.' = \'female\'">Female</button>';
            $sop .= $unisex == true ? '<button type="button" class="btn btn-primary" ng-click="'.$id.' = \'unisex\'">Unisex</button>': '';
            $sop .= '</div>';
            return ($sop);
        }
    }
}



if ( !function_exists('radioButton')){
    function radioButton($id, $data, $type = ''){
        if (!empty ($id)){
            $sop  = '<input type="hidden" name="'.$id.'" id="'.$id.'"  ng-model="'.$id.'" >
                     <div class="btn-group " data-toggle="buttons-radio">';
            
            $type = !empty ($type) ? ' btn-'. $type : '';
            
            foreach($data as $f){
            $sop .= '<button type="button" class="btn'.$type.'" ng-click="'.$id.' = \''.$f['id'].'\'">'.$f['title'].'</button>';
            }
            $sop .= '</div>';
            return ($sop);
        }
    }
}


if ( !function_exists('checkBox')){
    function checkBox($id, $data, $type = ''){
        if (!empty ($id)){
            $sop  = '<input type="text" name="'.$id.'" id="'.$id.'"  ng-model="'.$id.'" ng-init="'.$id.' = \'\'">
                     <div class="btn-group " data-toggle="buttons-checkbox">';
            
            $type = !empty ($type) ? ' btn-'. $type : '';
            
            foreach($data as $f){
            $sop .= '<button type="button" class="btn'.$type.'" ng-click="'.$id.' = '.$id.' + \''.$f['id'].', \'">'.$f['title'].'</button>';
            }
            $sop .= '</div>';
            return ($sop);
        }
    }
}

if ( !function_exists('selectbox')){
    function selectbox($id, $data, $title = ''){
        if (!empty ($id) && !empty ($data)){
            $sop = '<input type="hidden" name="'.$id.'" id="'.$id.'"  ng-model="'.$id.'" >';

            $sop .= '<div class="btn-group '.$id.'" >
                <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                <span ng-init="'.$id.'title = \'';
            $sop .= !empty ($title) ? $title : 'Select';
            $sop .= '\'">{{'.$id.'title}}'; 
            $sop .= '</span> <span class="caret"></span>
                </a>
                <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">';
                    foreach  ($data as $key => $value ){
                        $sop .= '
                            <li><a ng-click="'.$id .' = '.$key.'; '.$id.'title = \''. $value .'\'">'. $value .'</a></li>';
                    }
            $sop .= '
                </ul>
                
              </div>';
            
            
            return ($sop);
        }
    }
}

if ( !function_exists('alertBox')){
    function alertBox($data, $type = '', $control = ''){
        
        $sop = ' <div class="alert ';
            $sop .= !empty ($type) ? 'alert-'.$type : 'alert-block';
        $sop .= '">';
        $sop .= '<button type="button" class="close" data-dismiss="alert">&times;</button>';
        
        
        if (! is_array($data)){
            $sop .= !empty ($control) ? '<p>'.$data.'</p>' : $data;
        }
        else
        {
            $sop .= !empty ($data['heading']) ? '<h4>'.$data['heading'].'</h4>' : '';
            $sop .= !empty ($data['message']) ? '<p>'.$data['message'].'</p>' : '';
        }
        
        if (!empty ($control)){
            $controlType = !empty ($control['type']) ? 'btn-'.$control['type'] : '';
            $controlLink = !empty ($control['link']) ? 'btn-'.$control['link'] : '#';
            $sop .= '<p><a class="btn '. $controlType .'" '. ' href="'. $controlLink .'">';
            $sop .= $control['title'].'</a></p>';
            }

        $sop .= '</div>';
        return ($sop);
    }
}

if ( !function_exists('modelWindow')){
    function modelWindow($id,$data, $control = ''){
        $sop ='';
        if (!empty ($data)){
            $sop .= ' 
                <div id="'.$id.'" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="'.$id.'" aria-hidden="true">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h3 id="'.$id.'Label">'.$data['heading'].'</h3>
                  </div>
                  <div class="modal-body">
                    '.$data['message'].'
                  </div>';
            if (!empty ($control)){
            $sop .= '<div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                    <button class="btn';
            $sop .= !empty ($control['type']) ? ' btn-'.$control['type'] : ' btn-primary';
            $sop .= '"';
            $sop .= !empty ($control['action']) ? ' ng-click="'.$control['action'].'" ' : '';
            $sop .= '>'.$control['title'].'</button>
                  </div>';
            }
            $sop .= '
                </div>';
            return ($sop);
        }
    }
}




if ( !function_exists('toolTip')){
    function toolTip($id, $title, $content, $url = '#'){
            $sop = '<a href="'.$url.'" id="'.$id.'" rel="tooltip" data-original-title="'.$content.'">'.$title.'</a>';
            return ($sop);
    }
}


if ( !function_exists('popOver')){
    function popOver($id, $title, $content, $class='', $url = '#', $element = 'a'){
        
            $sop = '<'.$element;
            $sop .= ' href="'.$url.'" id="'.$id.'"';
            $sop .= !empty ($class) ? ' class="'.$class.'"' : '';
            $sop .= ' rel="popover"';
            $sop .= ' data-content="'.$content.'" ';
            $sop .= ' data-original-title="'. $title.'">';
            $sop .= $title;
            $sop .= '</'.$element.'>';
            return ($sop);
    }
}

