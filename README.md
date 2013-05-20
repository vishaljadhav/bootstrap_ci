bootstrap_ci
============

Twitter bootstrap, Javascript Angularjs and Codeigniter









/* copy this js to 
 * 
 * 
    reportsArray = new Array();
    $scope.checkbox = function (v){
        $scope.rowID = v;
        if (jQuery.inArray($scope.rowID, reportsArray) == -1) {
            reportsArray.push(v);
        } else {
            reportsArray = jQuery.grep(reportsArray, function (id) {
                return id != $scope.rowID;
            });
        }
        
        return (reportsArray.join(", "))
    }
 * 
 */
