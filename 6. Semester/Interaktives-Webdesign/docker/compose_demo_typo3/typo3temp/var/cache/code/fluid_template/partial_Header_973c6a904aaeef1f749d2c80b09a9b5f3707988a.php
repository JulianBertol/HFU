<?php

class partial_Header_973c6a904aaeef1f749d2c80b09a9b5f3707988a extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '<div class="head">
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <div class="col-sm-3 col-sm-offset-2">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Navigation ein-/ausblenden</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return 'WELCOME';
};
$arguments1 = array();
$arguments1['additionalAttributes'] = NULL;
$arguments1['data'] = NULL;
$arguments1['class'] = NULL;
$arguments1['dir'] = NULL;
$arguments1['id'] = NULL;
$arguments1['lang'] = NULL;
$arguments1['style'] = NULL;
$arguments1['title'] = NULL;
$arguments1['accesskey'] = NULL;
$arguments1['tabindex'] = NULL;
$arguments1['onclick'] = NULL;
$arguments1['target'] = NULL;
$arguments1['rel'] = NULL;
$arguments1['pageUid'] = NULL;
$arguments1['pageType'] = NULL;
$arguments1['noCache'] = NULL;
$arguments1['language'] = NULL;
$arguments1['noCacheHash'] = NULL;
$arguments1['section'] = NULL;
$arguments1['linkAccessRestrictedPages'] = NULL;
$arguments1['additionalParams'] = NULL;
$arguments1['absolute'] = NULL;
$arguments1['addQueryString'] = NULL;
$arguments1['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments1['addQueryStringMethod'] = NULL;
$arguments1['pageUid'] = 11;
$arguments1['class'] = 'navbar-brand';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
        </div>
      </div>
      <div class="col-sm-7">
        <div id="navbar" class="collapse navbar-collapse">
          ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments3 = array();
$arguments3['data'] = NULL;
$arguments3['typoscriptObjectPath'] = NULL;
$arguments3['currentValueKey'] = NULL;
$arguments3['table'] = '';
$arguments3['typoscriptObjectPath'] = 'lib.navbar';
$renderChildrenClosure4 = ($arguments3['data'] !== null) ? function() use ($arguments3) { return $arguments3['data']; } : $renderChildrenClosure4;
$output0 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);

$output0 .= '
        </div>
      </div>
    </div>
  </nav>
  <div class="row">
    <div class="col-sm-3 col-sm-offset-4">
      <div class="cover">
        <h1>Interaktives Webdesign mit</h1>
        <p></p>
        <img class="img-fluid" src="fileadmin/public/bilder/typo3.png" width="165px" height="70px">
        <p></p>
        <h2>Wahlpflichtveranstaltung</h2>
      </div>
    </div>
  </div>
</div>
';

return $output0;
}


}
#