<?php

class partial_Entry_813e6cc2eed197592cea76175dc4cd11d3745ac5 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
    2 => 'fluid\\ViewHelpers',
  ),
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
  'prod' => 
  array (
    0 => 'WapplerSystems\\WsFlexslider\\ViewHelpers',
  ),
));
}

/**
 * section Entry
 */
public function section_19172e9e47fee4109f3d1d86c3076acdc36822f2(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '

    <li>
        <div class="slidercontent wsflexslider-';
$array1 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.styleclass', $array1)]);

$output0 .= '">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure3 = function() use ($renderingContext, $self) {
$output7 = '';

$output7 .= '

                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments8 = array();
$arguments8['additionalAttributes'] = NULL;
$arguments8['data'] = NULL;
$arguments8['class'] = NULL;
$arguments8['dir'] = NULL;
$arguments8['id'] = NULL;
$arguments8['lang'] = NULL;
$arguments8['style'] = NULL;
$arguments8['title'] = NULL;
$arguments8['accesskey'] = NULL;
$arguments8['tabindex'] = NULL;
$arguments8['onclick'] = NULL;
$arguments8['alt'] = NULL;
$arguments8['ismap'] = NULL;
$arguments8['longdesc'] = NULL;
$arguments8['usemap'] = NULL;
$arguments8['loading'] = NULL;
$arguments8['src'] = '';
$arguments8['treatIdAsReference'] = false;
$arguments8['image'] = NULL;
$arguments8['crop'] = NULL;
$arguments8['cropVariant'] = 'default';
$arguments8['fileExtension'] = NULL;
$arguments8['width'] = NULL;
$arguments8['height'] = NULL;
$arguments8['minWidth'] = NULL;
$arguments8['minHeight'] = NULL;
$arguments8['maxWidth'] = NULL;
$arguments8['maxHeight'] = NULL;
$arguments8['absolute'] = false;
$array10 = array (
);$arguments8['src'] = $renderingContext->getVariableProvider()->getByPath('item.falImage.uid', $array10);
// Rendering Boolean node
// Rendering Array
$array11 = array();
$array11['0'] = 1;

$expression12 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments8['treatIdAsReference'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression12(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array11)
					),
					$renderingContext
				);
$array13 = array (
);$arguments8['title'] = $renderingContext->getVariableProvider()->getByPath('item.falImage.originalResource.title', $array13);
$array14 = array (
);$arguments8['alt'] = $renderingContext->getVariableProvider()->getByPath('item.falImage.originalResource.alternative', $array14);
$array15 = array (
);$arguments8['width'] = $renderingContext->getVariableProvider()->getByPath('settings.maxwidth', $array15);
$array16 = array (
);$arguments8['height'] = $renderingContext->getVariableProvider()->getByPath('settings.maxheight', $array16);

$output7 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output7 .= '

            ';
return $output7;
};
$arguments2 = array();
$arguments2['then'] = NULL;
$arguments2['else'] = NULL;
$arguments2['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array4 = array();
$array5 = array (
);$array4['0'] = $renderingContext->getVariableProvider()->getByPath('item.falImage', $array5);

$expression6 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments2['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression6(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array4)
					),
					$renderingContext
				);
$arguments2['__thenClosure'] = $renderChildrenClosure3;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2, $renderChildrenClosure3, $renderingContext);

$output0 .= '
            <div class="caption-wrapper caption-align-';
$array17 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.textposition', $array17)]);

$output0 .= '">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
$output24 = '';

$output24 .= '
                <div class="caption-text">
                    <p class="caption-title">';
$array25 = array (
);
$output24 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array25)]);

$output24 .= '</p>
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
$output31 = '';

$output31 .= '
                        <div class="caption-body">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
$array34 = array (
);return $renderingContext->getVariableProvider()->getByPath('item.description', $array34);
};
$arguments32 = array();
$arguments32['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output31 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);

$output31 .= '</div>
                    ';
return $output31;
};
$arguments26 = array();
$arguments26['then'] = NULL;
$arguments26['else'] = NULL;
$arguments26['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array28 = array();
$array29 = array (
);$array28['0'] = $renderingContext->getVariableProvider()->getByPath('item.description', $array29);

$expression30 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments26['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression30(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array28)
					),
					$renderingContext
				);
$arguments26['__thenClosure'] = $renderChildrenClosure27;

$output24 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output24 .= '
                </div>
                ';
return $output24;
};
$arguments18 = array();
$arguments18['then'] = NULL;
$arguments18['else'] = NULL;
$arguments18['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array20 = array();
$array21 = array (
);$array20['0'] = $renderingContext->getVariableProvider()->getByPath('item.title', $array21);
$array20['1'] = '||';
$array22 = array (
);$array20['2'] = $renderingContext->getVariableProvider()->getByPath('item.description', $array22);

$expression23 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) || TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments18['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression23(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array20)
					),
					$renderingContext
				);
$arguments18['__thenClosure'] = $renderChildrenClosure19;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);

$output0 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
$output40 = '';

$output40 .= '
                    <div class="caption-link">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
return 'More';
};
$arguments44 = array();
$arguments44['key'] = NULL;
$arguments44['id'] = NULL;
$arguments44['default'] = NULL;
$arguments44['arguments'] = NULL;
$arguments44['extensionName'] = NULL;
$arguments44['languageKey'] = NULL;
$arguments44['alternativeLanguageKeys'] = NULL;
$arguments44['key'] = 'more';
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext)]);
};
$arguments41 = array();
$arguments41['parameter'] = NULL;
$arguments41['target'] = '';
$arguments41['class'] = '';
$arguments41['title'] = '';
$arguments41['language'] = NULL;
$arguments41['additionalParams'] = '';
$arguments41['additionalAttributes'] = array (
);
$arguments41['useCacheHash'] = NULL;
$arguments41['addQueryString'] = false;
$arguments41['addQueryStringMethod'] = 'GET';
$arguments41['addQueryStringExclude'] = '';
$arguments41['absolute'] = false;
$arguments41['parts-as'] = 'typoLinkParts';
$array43 = array (
);$arguments41['parameter'] = $renderingContext->getVariableProvider()->getByPath('item.link', $array43);

$output40 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext);

$output40 .= '
                    </div>
                ';
return $output40;
};
$arguments35 = array();
$arguments35['then'] = NULL;
$arguments35['else'] = NULL;
$arguments35['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array37 = array();
$array38 = array (
);$array37['0'] = $renderingContext->getVariableProvider()->getByPath('item.link', $array38);

$expression39 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments35['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression39(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array37)
					),
					$renderingContext
				);
$arguments35['__thenClosure'] = $renderChildrenClosure36;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext);

$output0 .= '
            </div>
        </div>
    </li>

    ';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output46 = '';

$output46 .= '<div xmlns="http://www.w3.org/1999/xhtml" lang="en"
     xmlns:f="http://typo3.org/ns/fluid/ViewHelpers">

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
$output49 = '';

$output49 .= '

    <li>
        <div class="slidercontent wsflexslider-';
$array50 = array (
);
$output49 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.styleclass', $array50)]);

$output49 .= '">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
$output56 = '';

$output56 .= '

                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments57 = array();
$arguments57['additionalAttributes'] = NULL;
$arguments57['data'] = NULL;
$arguments57['class'] = NULL;
$arguments57['dir'] = NULL;
$arguments57['id'] = NULL;
$arguments57['lang'] = NULL;
$arguments57['style'] = NULL;
$arguments57['title'] = NULL;
$arguments57['accesskey'] = NULL;
$arguments57['tabindex'] = NULL;
$arguments57['onclick'] = NULL;
$arguments57['alt'] = NULL;
$arguments57['ismap'] = NULL;
$arguments57['longdesc'] = NULL;
$arguments57['usemap'] = NULL;
$arguments57['loading'] = NULL;
$arguments57['src'] = '';
$arguments57['treatIdAsReference'] = false;
$arguments57['image'] = NULL;
$arguments57['crop'] = NULL;
$arguments57['cropVariant'] = 'default';
$arguments57['fileExtension'] = NULL;
$arguments57['width'] = NULL;
$arguments57['height'] = NULL;
$arguments57['minWidth'] = NULL;
$arguments57['minHeight'] = NULL;
$arguments57['maxWidth'] = NULL;
$arguments57['maxHeight'] = NULL;
$arguments57['absolute'] = false;
$array59 = array (
);$arguments57['src'] = $renderingContext->getVariableProvider()->getByPath('item.falImage.uid', $array59);
// Rendering Boolean node
// Rendering Array
$array60 = array();
$array60['0'] = 1;

$expression61 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments57['treatIdAsReference'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression61(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array60)
					),
					$renderingContext
				);
$array62 = array (
);$arguments57['title'] = $renderingContext->getVariableProvider()->getByPath('item.falImage.originalResource.title', $array62);
$array63 = array (
);$arguments57['alt'] = $renderingContext->getVariableProvider()->getByPath('item.falImage.originalResource.alternative', $array63);
$array64 = array (
);$arguments57['width'] = $renderingContext->getVariableProvider()->getByPath('settings.maxwidth', $array64);
$array65 = array (
);$arguments57['height'] = $renderingContext->getVariableProvider()->getByPath('settings.maxheight', $array65);

$output56 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext);

$output56 .= '

            ';
return $output56;
};
$arguments51 = array();
$arguments51['then'] = NULL;
$arguments51['else'] = NULL;
$arguments51['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array53 = array();
$array54 = array (
);$array53['0'] = $renderingContext->getVariableProvider()->getByPath('item.falImage', $array54);

$expression55 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments51['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression55(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array53)
					),
					$renderingContext
				);
$arguments51['__thenClosure'] = $renderChildrenClosure52;

$output49 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext);

$output49 .= '
            <div class="caption-wrapper caption-align-';
$array66 = array (
);
$output49 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.textposition', $array66)]);

$output49 .= '">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
$output73 = '';

$output73 .= '
                <div class="caption-text">
                    <p class="caption-title">';
$array74 = array (
);
$output73 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array74)]);

$output73 .= '</p>
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
$output80 = '';

$output80 .= '
                        <div class="caption-body">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure82 = function() use ($renderingContext, $self) {
$array83 = array (
);return $renderingContext->getVariableProvider()->getByPath('item.description', $array83);
};
$arguments81 = array();
$arguments81['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output80 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments81, $renderChildrenClosure82, $renderingContext);

$output80 .= '</div>
                    ';
return $output80;
};
$arguments75 = array();
$arguments75['then'] = NULL;
$arguments75['else'] = NULL;
$arguments75['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array77 = array();
$array78 = array (
);$array77['0'] = $renderingContext->getVariableProvider()->getByPath('item.description', $array78);

$expression79 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments75['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression79(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array77)
					),
					$renderingContext
				);
$arguments75['__thenClosure'] = $renderChildrenClosure76;

$output73 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments75, $renderChildrenClosure76, $renderingContext);

$output73 .= '
                </div>
                ';
return $output73;
};
$arguments67 = array();
$arguments67['then'] = NULL;
$arguments67['else'] = NULL;
$arguments67['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array69 = array();
$array70 = array (
);$array69['0'] = $renderingContext->getVariableProvider()->getByPath('item.title', $array70);
$array69['1'] = '||';
$array71 = array (
);$array69['2'] = $renderingContext->getVariableProvider()->getByPath('item.description', $array71);

$expression72 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) || TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments67['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression72(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array69)
					),
					$renderingContext
				);
$arguments67['__thenClosure'] = $renderChildrenClosure68;

$output49 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext);

$output49 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure85 = function() use ($renderingContext, $self) {
$output89 = '';

$output89 .= '
                    <div class="caption-link">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure94 = function() use ($renderingContext, $self) {
return 'More';
};
$arguments93 = array();
$arguments93['key'] = NULL;
$arguments93['id'] = NULL;
$arguments93['default'] = NULL;
$arguments93['arguments'] = NULL;
$arguments93['extensionName'] = NULL;
$arguments93['languageKey'] = NULL;
$arguments93['alternativeLanguageKeys'] = NULL;
$arguments93['key'] = 'more';
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments93, $renderChildrenClosure94, $renderingContext)]);
};
$arguments90 = array();
$arguments90['parameter'] = NULL;
$arguments90['target'] = '';
$arguments90['class'] = '';
$arguments90['title'] = '';
$arguments90['language'] = NULL;
$arguments90['additionalParams'] = '';
$arguments90['additionalAttributes'] = array (
);
$arguments90['useCacheHash'] = NULL;
$arguments90['addQueryString'] = false;
$arguments90['addQueryStringMethod'] = 'GET';
$arguments90['addQueryStringExclude'] = '';
$arguments90['absolute'] = false;
$arguments90['parts-as'] = 'typoLinkParts';
$array92 = array (
);$arguments90['parameter'] = $renderingContext->getVariableProvider()->getByPath('item.link', $array92);

$output89 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments90, $renderChildrenClosure91, $renderingContext);

$output89 .= '
                    </div>
                ';
return $output89;
};
$arguments84 = array();
$arguments84['then'] = NULL;
$arguments84['else'] = NULL;
$arguments84['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array86 = array();
$array87 = array (
);$array86['0'] = $renderingContext->getVariableProvider()->getByPath('item.link', $array87);

$expression88 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments84['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression88(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array86)
					),
					$renderingContext
				);
$arguments84['__thenClosure'] = $renderChildrenClosure85;

$output49 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments84, $renderChildrenClosure85, $renderingContext);

$output49 .= '
            </div>
        </div>
    </li>

    ';
return $output49;
};
$arguments47 = array();
$arguments47['name'] = NULL;
$arguments47['name'] = 'Entry';

$output46 .= NULL;

$output46 .= '

</div>
';

return $output46;
}


}
#