<?php

class partial_Content_f1f5c433035ed500a4bcf171b3db7f84b352e201 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
return (string) '';
}
public function hasLayout() {
return FALSE;
}
public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$renderingContext->getViewHelperResolver()->addNamespaces(array (
  'core' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ViewHelpers',
  ),
  'f' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
    1 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
  ),
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '<div class="container-fluid">
        
  <div class="row"> 
    <div class="col-sm-10 col-sm-offset-2">
       <div class="breadcrumb">
         ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['data'] = NULL;
$arguments1['typoscriptObjectPath'] = NULL;
$arguments1['currentValueKey'] = NULL;
$arguments1['table'] = '';
$arguments1['typoscriptObjectPath'] = 'lib.breadcrumb';
$renderChildrenClosure2 = ($arguments1['data'] !== null) ? function() use ($arguments1) { return $arguments1['data']; } : $renderChildrenClosure2;
$output0 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
       </div>
    </div>
  </div>
    
  
 <div class="row">  
      <div class="col-sm-5 col-sm-offset-2">
          ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
$array5 = array (
);return $renderingContext->getVariableProvider()->getByPath('normal', $array5);
};
$arguments3 = array();
$arguments3['value'] = NULL;

$output0 .= isset($arguments3['value']) ? $arguments3['value'] : $renderChildrenClosure4();

$output0 .= '
    </div>            
         
    <div class="col-sm-2 col-sm-offset-1">
    <div class="news">
          <img class="img-fluid" src="fileadmin/public/bilder/logo2.png"  width="80px" height="30px"></div>
               
           <div class="subNavi">
          ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments6 = array();
$arguments6['data'] = NULL;
$arguments6['typoscriptObjectPath'] = NULL;
$arguments6['currentValueKey'] = NULL;
$arguments6['table'] = '';
$arguments6['typoscriptObjectPath'] = 'lib.subNavi';
$renderChildrenClosure7 = ($arguments6['data'] !== null) ? function() use ($arguments6) { return $arguments6['data']; } : $renderChildrenClosure7;
$output0 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output0 .= '
       </div>
       
             
         ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
$array10 = array (
);return $renderingContext->getVariableProvider()->getByPath('rechts', $array10);
};
$arguments8 = array();
$arguments8['value'] = NULL;

$output0 .= isset($arguments8['value']) ? $arguments8['value'] : $renderChildrenClosure9();

$output0 .= '
         
                   
      </div>
    
       
    </div>
   
      
</div>

';

return $output0;
}


}
#