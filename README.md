bootstrap_ci
============

This CI helper library is developed for php developers who dont wants to invest there time in html & javascript development.
Bootstrap Helpper will create html from provided php data, easy to implement and use. I hope this will help you in your development. I am working on the updated version of the bootstrap so that you can use bootstrap v3.0 and updated angularjs version.









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
