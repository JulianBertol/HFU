<?php

class partial_PageLayout_Record_01ddcc562c286680b45f18148baf66f4689212e0 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
  'be' => 
  array (
    0 => 'TYPO3\\CMS\\Backend\\ViewHelpers',
  ),
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments3 = array();
$arguments3['then'] = NULL;
$arguments3['else'] = NULL;
$arguments3['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array5 = array();
$array6 = array (
);$array5['0'] = $renderingContext->getVariableProvider()->getByPath('item.disabled', $array6);
$array5['1'] = ' && ';
$array7 = array (
);$array5['2'] = $renderingContext->getVariableProvider()->getByPath('item.context.drawingConfiguration.showHidden', $array7);
$array5['3'] = ' == 0';

$expression8 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]) == 0));};
$arguments3['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression8(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array5)
					),
					$renderingContext
				);
$arguments3['then'] = 'display: none;';
return TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);
};
$arguments1 = array();
$arguments1['value'] = NULL;
$arguments1['name'] = NULL;
$arguments1['name'] = 'style';
$renderChildrenClosure2 = ($arguments1['value'] !== null) ? function() use ($arguments1) { return $arguments1['value']; } : $renderChildrenClosure2;
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '
<div class="t3-page-ce ';
$array9 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.wrapperClassName', $array9)]);

$output0 .= ' t3js-page-ce t3js-page-ce-sortable" id="element-tt_content-';
$array10 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.record.uid', $array10)]);

$output0 .= '" data-table="tt_content" data-uid="';
$array11 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.record.uid', $array11)]);

$output0 .= '" data-language-uid="';
$array12 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.record.sys_language_uid', $array12)]);

$output0 .= '" style="';
$array13 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('style', $array13)]);

$output0 .= '">
    <div class="t3-page-ce-dragitem" id="';
$array14 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.uniqueId', $array14)]);

$output0 .= '">
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
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
$arguments23['partial'] = 'PageLayout/RecordDefault/Header';
$arguments23['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output22 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$output22 .= '
        ';
return $output22;
};
$arguments15 = array();
$arguments15['section'] = NULL;
$arguments15['partial'] = NULL;
$arguments15['delegate'] = NULL;
$arguments15['renderable'] = NULL;
$arguments15['arguments'] = array (
);
$arguments15['optional'] = false;
$arguments15['default'] = NULL;
$arguments15['contentAs'] = NULL;
$arguments15['debug'] = true;
$output17 = '';

$output17 .= 'PageLayout/Record/';
$array18 = array (
);
$output17 .= $renderingContext->getVariableProvider()->getByPath('item.record.CType', $array18);

$output17 .= '/Header';
$arguments15['partial'] = $output17;
$arguments15['arguments'] = $renderingContext->getVariableProvider()->getAll();
// Rendering Boolean node
// Rendering Array
$array20 = array();
$array20['0'] = 1;

$expression21 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments15['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression21(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array20)
					),
					$renderingContext
				);

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output0 .= '
        <div class="t3-page-ce-body">
            <div class="t3-page-ce-body-inner">
                <div class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments26 = array();
$arguments26['then'] = NULL;
$arguments26['else'] = NULL;
$arguments26['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array28 = array();
$array29 = array (
);$array28['0'] = $renderingContext->getVariableProvider()->getByPath('item.versioned', $array29);

$expression30 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments26['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression30(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array28)
					),
					$renderingContext
				);
$arguments26['then'] = 'ver-element';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output0 .= '">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments31 = array();
$arguments31['section'] = NULL;
$arguments31['partial'] = NULL;
$arguments31['delegate'] = NULL;
$arguments31['renderable'] = NULL;
$arguments31['arguments'] = array (
);
$arguments31['optional'] = false;
$arguments31['default'] = NULL;
$arguments31['contentAs'] = NULL;
$arguments31['debug'] = true;
$arguments31['partial'] = 'PageLayout/RecordDefault/Preview';
$arguments31['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output0 .= '
                </div>
            </div>
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
$output41 = '';

$output41 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments42 = array();
$arguments42['section'] = NULL;
$arguments42['partial'] = NULL;
$arguments42['delegate'] = NULL;
$arguments42['renderable'] = NULL;
$arguments42['arguments'] = array (
);
$arguments42['optional'] = false;
$arguments42['default'] = NULL;
$arguments42['contentAs'] = NULL;
$arguments42['debug'] = true;
$arguments42['partial'] = 'PageLayout/RecordDefault/Footer';
$arguments42['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output41 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext);

$output41 .= '
            ';
return $output41;
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
$output36 = '';

$output36 .= 'PageLayout/Record/';
$array37 = array (
);
$output36 .= $renderingContext->getVariableProvider()->getByPath('item.record.CType', $array37);

$output36 .= '/Footer';
$arguments34['partial'] = $output36;
$arguments34['arguments'] = $renderingContext->getVariableProvider()->getAll();
// Rendering Boolean node
// Rendering Array
$array39 = array();
$array39['0'] = 1;

$expression40 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments34['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression40(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array39)
					),
					$renderingContext
				);

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext);

$output0 .= '
        </div>
    </div>
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
$output52 = '';

$output52 .= '
        <div class="t3js-page-new-ce t3-page-ce-wrapper-new-ce" id="colpos-';
$array53 = array (
);
$output52 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.column.columnNumber', $array53)]);

$output52 .= '-page-';
$array54 = array (
);
$output52 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.context.pageId', $array54)]);

$output52 .= '-';
$array55 = array (
);
$output52 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.column.uniqueId', $array55)]);

$output52 .= '">
            <a href="';
$array56 = array (
);
$output52 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.newContentAfterUrl', $array56)]);

$output52 .= '" title="';
$array57 = array (
);
$output52 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.newContentAfterLinkTitle', $array57)]);

$output52 .= '" data-title="';
$array58 = array (
);
$output52 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.newContentAfterLinkTitle', $array58)]);

$output52 .= '"
                class="btn btn-default btn-sm ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments59 = array();
$arguments59['then'] = NULL;
$arguments59['else'] = NULL;
$arguments59['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array61 = array();
$array62 = array (
);$array61['0'] = $renderingContext->getVariableProvider()->getByPath('item.column.context.drawingConfiguration.showNewContentWizard', $array62);

$expression63 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments59['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression63(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array61)
					),
					$renderingContext
				);
$arguments59['then'] = 't3js-toggle-new-content-element-wizard disabled';

$output52 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments59, $renderChildrenClosure60, $renderingContext);

$output52 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure65 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments64 = array();
$arguments64['identifier'] = NULL;
$arguments64['size'] = 'small';
$arguments64['overlay'] = NULL;
$arguments64['state'] = 'default';
$arguments64['alternativeMarkupIdentifier'] = NULL;
$arguments64['identifier'] = 'actions-add';

$output52 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments64, $renderChildrenClosure65, $renderingContext);

$output52 .= '
                ';
$array66 = array (
);
$output52 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.newContentAfterTitle', $array66)]);

$output52 .= '
            </a>
        </div>
    ';
return $output52;
};
$arguments45 = array();
$arguments45['then'] = NULL;
$arguments45['else'] = NULL;
$arguments45['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array47 = array();
$array48 = array (
);$array47['0'] = $renderingContext->getVariableProvider()->getByPath('allowEditContent', $array48);
$array47['1'] = ' && ';
$array49 = array (
);$array47['2'] = $renderingContext->getVariableProvider()->getByPath('item.column.contentEditable', $array49);
$array47['3'] = ' && ';
$array50 = array (
);$array47['4'] = $renderingContext->getVariableProvider()->getByPath('column.context.allowNewContent', $array50);

$expression51 = function($context) {return ((TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"])) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node4"]));};
$arguments45['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression51(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array47)
					),
					$renderingContext
				);
$arguments45['__thenClosure'] = $renderChildrenClosure46;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext);

$output0 .= '
    <div class="t3-page-ce-dropzone-available t3js-page-ce-dropzone-available"></div>
</div>
';

return $output0;
}


}
#