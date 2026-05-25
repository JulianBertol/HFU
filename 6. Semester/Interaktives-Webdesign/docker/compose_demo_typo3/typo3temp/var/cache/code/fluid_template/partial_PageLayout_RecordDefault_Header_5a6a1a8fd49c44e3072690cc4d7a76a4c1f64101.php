<?php

class partial_PageLayout_RecordDefault_Header_5a6a1a8fd49c44e3072690cc4d7a76a4c1f64101 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '<div class="t3-page-ce-header ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array3 = array();
$array4 = array (
);$array3['0'] = $renderingContext->getVariableProvider()->getByPath('allowEditContent', $array4);
$array3['1'] = ' && ';
$array5 = array (
);$array3['2'] = $renderingContext->getVariableProvider()->getByPath('item.dragAndDropAllowed', $array5);

$expression6 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression6(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array3)
					),
					$renderingContext
				);
$arguments1['then'] = 't3-page-ce-header-draggable t3js-page-ce-draghandle';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '">
    <div class="t3-page-ce-header-icons-left">
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$array9 = array (
);return $renderingContext->getVariableProvider()->getByPath('item.icons', $array9);
};
$arguments7 = array();
$arguments7['value'] = NULL;

$output0 .= isset($arguments7['value']) ? $arguments7['value'] : $renderChildrenClosure8();

$output0 .= '
    </div>
    <div class="t3-page-ce-header-icons-right">
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
$output16 = '';

$output16 .= '
            <div class="btn-toolbar">
                <div class="btn-group btn-group-sm">
                    <a href="';
$array17 = array (
);
$output16 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.editUrl', $array17)]);

$output16 .= '" class="btn btn-default" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments18 = array();
$arguments18['key'] = NULL;
$arguments18['id'] = NULL;
$arguments18['default'] = NULL;
$arguments18['arguments'] = NULL;
$arguments18['extensionName'] = NULL;
$arguments18['languageKey'] = NULL;
$arguments18['alternativeLanguageKeys'] = NULL;
$arguments18['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:edit';

$output16 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext)]);

$output16 .= '">
                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments20 = array();
$arguments20['identifier'] = NULL;
$arguments20['size'] = 'small';
$arguments20['overlay'] = NULL;
$arguments20['state'] = 'default';
$arguments20['alternativeMarkupIdentifier'] = NULL;
$arguments20['identifier'] = 'actions-open';

$output16 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output16 .= '
                    </a>
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
$output27 = '';

$output27 .= '
                        <a class="btn btn-default" href="';
$array28 = array (
);
$output27 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.visibilityToggleUrl', $array28)]);

$output27 .= '" title="';
$array29 = array (
);
$output27 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.visibilityToggleTitle', $array29)]);

$output27 .= '">
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments30 = array();
$arguments30['identifier'] = NULL;
$arguments30['size'] = 'small';
$arguments30['overlay'] = NULL;
$arguments30['state'] = 'default';
$arguments30['alternativeMarkupIdentifier'] = NULL;
$output32 = '';

$output32 .= 'actions-edit-';
$array33 = array (
);
$output32 .= $renderingContext->getVariableProvider()->getByPath('item.visibilityToggleIconName', $array33);
$arguments30['identifier'] = $output32;

$output27 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext);

$output27 .= '
                        </a>
                    ';
return $output27;
};
$arguments22 = array();
$arguments22['then'] = NULL;
$arguments22['else'] = NULL;
$arguments22['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array24 = array();
$array25 = array (
);$array24['0'] = $renderingContext->getVariableProvider()->getByPath('item.visibilityToggling', $array25);

$expression26 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments22['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression26(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array24)
					),
					$renderingContext
				);
$arguments22['__thenClosure'] = $renderChildrenClosure23;

$output16 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);

$output16 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
$output39 = '';

$output39 .= '
                        <a class="btn btn-default t3js-modal-trigger" href="';
$array40 = array (
);
$output39 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.deleteUrl', $array40)]);

$output39 .= '"
                        data-severity="warning"
                        data-title="';
$array41 = array (
);
$output39 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.deleteConfirmText', $array41)]);

$output39 .= '"
                        data-content="';
$array42 = array (
);
$output39 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.deleteConfirmText', $array42)]);

$output39 .= '"
                        data-button-close-text="';
$array43 = array (
);
$output39 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.deleteCancelText', $array43)]);

$output39 .= '"
                        title="';
$array44 = array (
);
$output39 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.deleteTitle', $array44)]);

$output39 .= '">
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments45 = array();
$arguments45['identifier'] = NULL;
$arguments45['size'] = 'small';
$arguments45['overlay'] = NULL;
$arguments45['state'] = 'default';
$arguments45['alternativeMarkupIdentifier'] = NULL;
$arguments45['identifier'] = 'actions-edit-delete';
$arguments45['size'] = 'small';

$output39 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext);

$output39 .= '
                        </a>
                    ';
return $output39;
};
$arguments34 = array();
$arguments34['then'] = NULL;
$arguments34['else'] = NULL;
$arguments34['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array36 = array();
$array37 = array (
);$array36['0'] = $renderingContext->getVariableProvider()->getByPath('item.delible', $array37);

$expression38 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments34['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression38(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array36)
					),
					$renderingContext
				);
$arguments34['__thenClosure'] = $renderChildrenClosure35;

$output16 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext);

$output16 .= '
                </div>
            </div>
        ';
return $output16;
};
$arguments10 = array();
$arguments10['then'] = NULL;
$arguments10['else'] = NULL;
$arguments10['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array12 = array();
$array13 = array (
);$array12['0'] = $renderingContext->getVariableProvider()->getByPath('item.editable', $array13);
$array12['1'] = ' && ';
$array14 = array (
);$array12['2'] = $renderingContext->getVariableProvider()->getByPath('allowEditContent', $array14);

$expression15 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments10['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression15(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array12)
					),
					$renderingContext
				);
$arguments10['__thenClosure'] = $renderChildrenClosure11;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output0 .= '
    </div>
</div>
';

return $output0;
}


}
#