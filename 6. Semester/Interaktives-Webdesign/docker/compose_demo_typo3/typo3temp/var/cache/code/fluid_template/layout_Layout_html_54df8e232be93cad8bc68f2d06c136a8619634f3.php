<?php

class layout_Layout_html_54df8e232be93cad8bc68f2d06c136a8619634f3 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output19 = '';

$output19 .= '       
   ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
$output22 = '';

$output22 .= '
      ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments23 = array();
$arguments23['section'] = NULL;
$arguments23['partial'] = NULL;
$arguments23['delegate'] = NULL;
$arguments23['renderable'] = NULL;
$arguments23['arguments'] = array (
);
$arguments23['optional'] = false;
$arguments23['default'] = NULL;
$arguments23['contentAs'] = NULL;
$arguments23['debug'] = true;
$arguments23['partial'] = 'Home';
$arguments23['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output22 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$output22 .= '
   ';
return $output22;
};
$arguments20 = array();

$output19 .= '';

$output19 .= '
   ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
$output28 = '';

$output28 .= '
      ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments29 = array();
$arguments29['section'] = NULL;
$arguments29['partial'] = NULL;
$arguments29['delegate'] = NULL;
$arguments29['renderable'] = NULL;
$arguments29['arguments'] = array (
);
$arguments29['optional'] = false;
$arguments29['default'] = NULL;
$arguments29['contentAs'] = NULL;
$arguments29['debug'] = true;
$arguments29['partial'] = 'Header';
$arguments29['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output28 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);

$output28 .= '
      ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments32 = array();
$arguments32['section'] = NULL;
$arguments32['partial'] = NULL;
$arguments32['delegate'] = NULL;
$arguments32['renderable'] = NULL;
$arguments32['arguments'] = array (
);
$arguments32['optional'] = false;
$arguments32['default'] = NULL;
$arguments32['contentAs'] = NULL;
$arguments32['debug'] = true;
$arguments32['section'] = 'Main';

$output28 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);

$output28 .= '
      ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments34 = array();
$arguments34['section'] = NULL;
$arguments34['partial'] = NULL;
$arguments34['delegate'] = NULL;
$arguments34['renderable'] = NULL;
$arguments34['arguments'] = array (
);
$arguments34['optional'] = false;
$arguments34['default'] = NULL;
$arguments34['contentAs'] = NULL;
$arguments34['debug'] = true;
$arguments34['partial'] = 'Footer';
$arguments34['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output28 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext);

$output28 .= '
   ';
return $output28;
};
$arguments26 = array();
$arguments26['if'] = NULL;

$output19 .= '';

$output19 .= '
';
return $output19;
};
$arguments1 = array();
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array16 = array();
$array17 = array (
);$array16['0'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array17);
$array16['1'] = '==\'11\'';

$expression18 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == '11');};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression18(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array16)
					),
					$renderingContext
				);
$arguments1['__thenClosure'] = function() use ($renderingContext, $self) {
$output3 = '';

$output3 .= '
      ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments4 = array();
$arguments4['section'] = NULL;
$arguments4['partial'] = NULL;
$arguments4['delegate'] = NULL;
$arguments4['renderable'] = NULL;
$arguments4['arguments'] = array (
);
$arguments4['optional'] = false;
$arguments4['default'] = NULL;
$arguments4['contentAs'] = NULL;
$arguments4['debug'] = true;
$arguments4['partial'] = 'Home';
$arguments4['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '
   ';
return $output3;
};
$arguments1['__elseClosures'][] = function() use ($renderingContext, $self) {
$output7 = '';

$output7 .= '
      ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments8 = array();
$arguments8['section'] = NULL;
$arguments8['partial'] = NULL;
$arguments8['delegate'] = NULL;
$arguments8['renderable'] = NULL;
$arguments8['arguments'] = array (
);
$arguments8['optional'] = false;
$arguments8['default'] = NULL;
$arguments8['contentAs'] = NULL;
$arguments8['debug'] = true;
$arguments8['partial'] = 'Header';
$arguments8['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output7 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output7 .= '
      ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments11 = array();
$arguments11['section'] = NULL;
$arguments11['partial'] = NULL;
$arguments11['delegate'] = NULL;
$arguments11['renderable'] = NULL;
$arguments11['arguments'] = array (
);
$arguments11['optional'] = false;
$arguments11['default'] = NULL;
$arguments11['contentAs'] = NULL;
$arguments11['debug'] = true;
$arguments11['section'] = 'Main';

$output7 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output7 .= '
      ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments13 = array();
$arguments13['section'] = NULL;
$arguments13['partial'] = NULL;
$arguments13['delegate'] = NULL;
$arguments13['renderable'] = NULL;
$arguments13['arguments'] = array (
);
$arguments13['optional'] = false;
$arguments13['default'] = NULL;
$arguments13['contentAs'] = NULL;
$arguments13['debug'] = true;
$arguments13['partial'] = 'Footer';
$arguments13['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output7 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output7 .= '
   ';
return $output7;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

';

return $output0;
}


}
#