<?php

class Flexslider_action_list_bb1da9bfc3a3f54166f2b2172cf0621009bc256e extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
return (string) 'Default';
}
public function hasLayout() {
return TRUE;
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
 * section Main
 */
public function section_62bce9422ff2d14f69ab80a154510232fc8a9afd(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['queueIdentifier'] = NULL;
$arguments1['as'] = NULL;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

    <div id="flexslider-';
$array3 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('uid', $array3)]);

$output0 .= '" class="flexslider ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments4 = array();
$arguments4['then'] = NULL;
$arguments4['else'] = NULL;
$arguments4['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array6 = array();
$array7 = array (
);$array6['0'] = $renderingContext->getVariableProvider()->getByPath('settings.templateLayout', $array7);

$expression8 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments4['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression8(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array6)
					),
					$renderingContext
				);
$output9 = '';

$output9 .= 'layout-';
$array10 = array (
);
$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.templateLayout', $array10)]);
$arguments4['then'] = $output9;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output0 .= ' ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments11 = array();
$arguments11['then'] = NULL;
$arguments11['else'] = NULL;
$arguments11['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array13 = array();
$array14 = array (
);$array13['0'] = $renderingContext->getVariableProvider()->getByPath('settings.carousel', $array14);
$array13['1'] = ' == \'true\'';

$expression15 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'true');};
$arguments11['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression15(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array13)
					),
					$renderingContext
				);
$arguments11['then'] = 'carousel';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output0 .= '">
        <ul class="slides">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
$output19 = '';

$output19 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments20 = array();
$arguments20['section'] = NULL;
$arguments20['partial'] = NULL;
$arguments20['delegate'] = NULL;
$arguments20['renderable'] = NULL;
$arguments20['arguments'] = array (
);
$arguments20['optional'] = false;
$arguments20['default'] = NULL;
$arguments20['contentAs'] = NULL;
$arguments20['debug'] = true;
$arguments20['partial'] = 'Entry';
$arguments20['section'] = 'Entry';
// Rendering Array
$array22 = array();
$array23 = array (
);$array22['item'] = $renderingContext->getVariableProvider()->getByPath('item', $array23);
$array24 = array (
);$array22['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array24);
$array25 = array (
);$array22['iterator'] = $renderingContext->getVariableProvider()->getByPath('iterator', $array25);
$arguments20['arguments'] = $array22;

$output19 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output19 .= '
            ';
return $output19;
};
$arguments16 = array();
$arguments16['each'] = NULL;
$arguments16['as'] = NULL;
$arguments16['key'] = NULL;
$arguments16['reverse'] = false;
$arguments16['iteration'] = NULL;
$array18 = array (
);$arguments16['each'] = $renderingContext->getVariableProvider()->getByPath('images', $array18);
$arguments16['as'] = 'item';
$arguments16['iteration'] = 'iterator';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output0 .= '
        </ul>
    </div>

    ';
// Rendering ViewHelper WapplerSystems\WsFlexslider\ViewHelpers\PageRenderer\AddJsFooterInlineCodeViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
$output30 = '';

$output30 .= '

    jQuery(document).ready(function() ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
return '{';
};
$arguments31 = array();
$arguments31['value'] = NULL;

$output30 .= isset($arguments31['value']) ? $arguments31['value'] : $renderChildrenClosure32();

$output30 .= '
        jQuery(\'#flexslider-';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments33 = array();
$arguments33['value'] = NULL;
$array35 = array (
);$arguments33['value'] = $renderingContext->getVariableProvider()->getByPath('uid', $array35);

$output30 .= isset($arguments33['value']) ? $arguments33['value'] : $renderChildrenClosure34();

$output30 .= '\').flexslider(';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
return '{';
};
$arguments36 = array();
$arguments36['value'] = NULL;

$output30 .= isset($arguments36['value']) ? $arguments36['value'] : $renderChildrenClosure37();

$output30 .= '
            animation: "';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments38 = array();
$arguments38['value'] = NULL;
$array40 = array (
);$arguments38['value'] = $renderingContext->getVariableProvider()->getByPath('settings.animation', $array40);

$output30 .= isset($arguments38['value']) ? $arguments38['value'] : $renderChildrenClosure39();

$output30 .= '",
            animationLoop: ';
$array41 = array (
);
$output30 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.animationLoop', $array41)]);

$output30 .= ',
            itemMargin: "';
$array42 = array (
);
$output30 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.itemMargin', $array42)]);

$output30 .= '",
            easing: "';
$array43 = array (
);
$output30 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.easing', $array43)]);

$output30 .= '",
            direction: "';
$array44 = array (
);
$output30 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.direction', $array44)]);

$output30 .= '",
            reverse: ';
$array45 = array (
);
$output30 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.reverse', $array45)]);

$output30 .= ',
            smoothHeight: ';
$array46 = array (
);
$output30 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.smoothHeight', $array46)]);

$output30 .= ',
            startAt: ';
$array47 = array (
);
$output30 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.startAt', $array47)]);

$output30 .= ',
            slideshow: ';
$array48 = array (
);
$output30 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.slideshow', $array48)]);

$output30 .= ',
            slideshowSpeed: ';
$array49 = array (
);
$output30 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.slideshowSpeed', $array49)]);

$output30 .= ',
            animationSpeed: ';
$array50 = array (
);
$output30 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.animationSpeed', $array50)]);

$output30 .= ',
            initDelay: ';
$array51 = array (
);
$output30 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.initDelay', $array51)]);

$output30 .= ',
            randomize: ';
$array52 = array (
);
$output30 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.randomize', $array52)]);

$output30 .= ',

            pauseOnAction: ';
$array53 = array (
);
$output30 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.pauseOnAction', $array53)]);

$output30 .= ',
            pauseOnHover: ';
$array54 = array (
);
$output30 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.pauseOnHover', $array54)]);

$output30 .= ',
            useCSS: ';
$array55 = array (
);
$output30 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.useCSS', $array55)]);

$output30 .= ',
            touch: ';
$array56 = array (
);
$output30 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.touch', $array56)]);

$output30 .= ',
            video: ';
$array57 = array (
);
$output30 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.video', $array57)]);

$output30 .= ',

            controlNav: ';
$array58 = array (
);
$output30 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.controlNav', $array58)]);

$output30 .= ',
            directionNav: ';
$array59 = array (
);
$output30 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.directionNav', $array59)]);

$output30 .= ',
            prevText: "';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
return 'Previous';
};
$arguments60 = array();
$arguments60['key'] = NULL;
$arguments60['id'] = NULL;
$arguments60['default'] = NULL;
$arguments60['arguments'] = NULL;
$arguments60['extensionName'] = NULL;
$arguments60['languageKey'] = NULL;
$arguments60['alternativeLanguageKeys'] = NULL;
$arguments60['key'] = 'prevText';

$output30 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext)]);

$output30 .= '",
            nextText: "';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
return 'Next';
};
$arguments62 = array();
$arguments62['key'] = NULL;
$arguments62['id'] = NULL;
$arguments62['default'] = NULL;
$arguments62['arguments'] = NULL;
$arguments62['extensionName'] = NULL;
$arguments62['languageKey'] = NULL;
$arguments62['alternativeLanguageKeys'] = NULL;
$arguments62['key'] = 'nextText';

$output30 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext)]);

$output30 .= '",

            keyboard: ';
$array64 = array (
);
$output30 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.keyboard', $array64)]);

$output30 .= ',
            multipleKeyboard: ';
$array65 = array (
);
$output30 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.multipleKeyboard', $array65)]);

$output30 .= ',
            mousewheel: ';
$array66 = array (
);
$output30 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.mousewheel', $array66)]);

$output30 .= ',
            pausePlay: ';
$array67 = array (
);
$output30 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.pausePlay', $array67)]);

$output30 .= ',
            pauseText: "';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure69 = function() use ($renderingContext, $self) {
return 'Pause';
};
$arguments68 = array();
$arguments68['key'] = NULL;
$arguments68['id'] = NULL;
$arguments68['default'] = NULL;
$arguments68['arguments'] = NULL;
$arguments68['extensionName'] = NULL;
$arguments68['languageKey'] = NULL;
$arguments68['alternativeLanguageKeys'] = NULL;
$arguments68['key'] = 'pauseText';

$output30 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments68, $renderChildrenClosure69, $renderingContext)]);

$output30 .= '",
            playText: "';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure71 = function() use ($renderingContext, $self) {
return 'Play';
};
$arguments70 = array();
$arguments70['key'] = NULL;
$arguments70['id'] = NULL;
$arguments70['default'] = NULL;
$arguments70['arguments'] = NULL;
$arguments70['extensionName'] = NULL;
$arguments70['languageKey'] = NULL;
$arguments70['alternativeLanguageKeys'] = NULL;
$arguments70['key'] = 'playText';

$output30 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments70, $renderChildrenClosure71, $renderingContext)]);

$output30 .= '",

            controlsContainer: "';
$array72 = array (
);
$output30 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.controlsContainer', $array72)]);

$output30 .= '",
            manualControls: "';
$array73 = array (
);
$output30 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.manualControls', $array73)]);

$output30 .= '",
            sync: "';
$array74 = array (
);
$output30 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.sync', $array74)]);

$output30 .= '",
            asNavFor: "';
$array75 = array (
);
$output30 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.asNavFor', $array75)]);

$output30 .= '",

            itemWidth: ';
$array76 = array (
);
$output30 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.itemWidth', $array76)]);

$output30 .= ',
            itemMargin: ';
$array77 = array (
);
$output30 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.itemMargin', $array77)]);

$output30 .= ',
            minItems: ';
$array78 = array (
);
$output30 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.minItems', $array78)]);

$output30 .= ',
            maxItems: ';
$array79 = array (
);
$output30 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.maxItems', $array79)]);

$output30 .= ',
            move: ';
$array80 = array (
);
$output30 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.move', $array80)]);

$output30 .= ',

            carousel: ';
$array81 = array (
);
$output30 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.carousel', $array81)]);

$output30 .= ',
            start: function(slider)';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
return '{';
};
$arguments82 = array();
$arguments82['value'] = NULL;

$output30 .= isset($arguments82['value']) ? $arguments82['value'] : $renderChildrenClosure83();

$output30 .= '
                jQuery(\'body\').removeClass(\'loading\');
            }
        });
    });

    ';
return $output30;
};
$arguments26 = array();
$arguments26['name'] = NULL;
$arguments26['compress'] = true;
$arguments26['forceOnTop'] = false;
$output28 = '';

$output28 .= 'flexslider-';
$array29 = array (
);
$output28 .= $renderingContext->getVariableProvider()->getByPath('uid', $array29);
$arguments26['name'] = $output28;

$output0 .= WapplerSystems\WsFlexslider\ViewHelpers\PageRenderer\AddJsFooterInlineCodeViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output0 .= '

    ';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output84 = '';

$output84 .= '<div xmlns="http://www.w3.org/1999/xhtml" lang="en"
     xmlns:f="http://typo3.org/ns/fluid/ViewHelpers"
     xmlns:prod="http://typo3.org/ns/WapplerSystems/WsFlexslider/ViewHelpers">
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure86 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments85 = array();
$arguments85['name'] = NULL;
$arguments85['name'] = 'Default';

$output84 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output84 .= '


    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure88 = function() use ($renderingContext, $self) {
$output89 = '';

$output89 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments90 = array();
$arguments90['queueIdentifier'] = NULL;
$arguments90['as'] = NULL;

$output89 .= TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper::renderStatic($arguments90, $renderChildrenClosure91, $renderingContext);

$output89 .= '

    <div id="flexslider-';
$array92 = array (
);
$output89 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('uid', $array92)]);

$output89 .= '" class="flexslider ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure94 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments93 = array();
$arguments93['then'] = NULL;
$arguments93['else'] = NULL;
$arguments93['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array95 = array();
$array96 = array (
);$array95['0'] = $renderingContext->getVariableProvider()->getByPath('settings.templateLayout', $array96);

$expression97 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments93['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression97(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array95)
					),
					$renderingContext
				);
$output98 = '';

$output98 .= 'layout-';
$array99 = array (
);
$output98 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.templateLayout', $array99)]);
$arguments93['then'] = $output98;

$output89 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments93, $renderChildrenClosure94, $renderingContext);

$output89 .= ' ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure101 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments100 = array();
$arguments100['then'] = NULL;
$arguments100['else'] = NULL;
$arguments100['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array102 = array();
$array103 = array (
);$array102['0'] = $renderingContext->getVariableProvider()->getByPath('settings.carousel', $array103);
$array102['1'] = ' == \'true\'';

$expression104 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'true');};
$arguments100['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression104(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array102)
					),
					$renderingContext
				);
$arguments100['then'] = 'carousel';

$output89 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments100, $renderChildrenClosure101, $renderingContext);

$output89 .= '">
        <ul class="slides">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure106 = function() use ($renderingContext, $self) {
$output108 = '';

$output108 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure110 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments109 = array();
$arguments109['section'] = NULL;
$arguments109['partial'] = NULL;
$arguments109['delegate'] = NULL;
$arguments109['renderable'] = NULL;
$arguments109['arguments'] = array (
);
$arguments109['optional'] = false;
$arguments109['default'] = NULL;
$arguments109['contentAs'] = NULL;
$arguments109['debug'] = true;
$arguments109['partial'] = 'Entry';
$arguments109['section'] = 'Entry';
// Rendering Array
$array111 = array();
$array112 = array (
);$array111['item'] = $renderingContext->getVariableProvider()->getByPath('item', $array112);
$array113 = array (
);$array111['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array113);
$array114 = array (
);$array111['iterator'] = $renderingContext->getVariableProvider()->getByPath('iterator', $array114);
$arguments109['arguments'] = $array111;

$output108 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments109, $renderChildrenClosure110, $renderingContext);

$output108 .= '
            ';
return $output108;
};
$arguments105 = array();
$arguments105['each'] = NULL;
$arguments105['as'] = NULL;
$arguments105['key'] = NULL;
$arguments105['reverse'] = false;
$arguments105['iteration'] = NULL;
$array107 = array (
);$arguments105['each'] = $renderingContext->getVariableProvider()->getByPath('images', $array107);
$arguments105['as'] = 'item';
$arguments105['iteration'] = 'iterator';

$output89 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments105, $renderChildrenClosure106, $renderingContext);

$output89 .= '
        </ul>
    </div>

    ';
// Rendering ViewHelper WapplerSystems\WsFlexslider\ViewHelpers\PageRenderer\AddJsFooterInlineCodeViewHelper
$renderChildrenClosure116 = function() use ($renderingContext, $self) {
$output119 = '';

$output119 .= '

    jQuery(document).ready(function() ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure121 = function() use ($renderingContext, $self) {
return '{';
};
$arguments120 = array();
$arguments120['value'] = NULL;

$output119 .= isset($arguments120['value']) ? $arguments120['value'] : $renderChildrenClosure121();

$output119 .= '
        jQuery(\'#flexslider-';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure123 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments122 = array();
$arguments122['value'] = NULL;
$array124 = array (
);$arguments122['value'] = $renderingContext->getVariableProvider()->getByPath('uid', $array124);

$output119 .= isset($arguments122['value']) ? $arguments122['value'] : $renderChildrenClosure123();

$output119 .= '\').flexslider(';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure126 = function() use ($renderingContext, $self) {
return '{';
};
$arguments125 = array();
$arguments125['value'] = NULL;

$output119 .= isset($arguments125['value']) ? $arguments125['value'] : $renderChildrenClosure126();

$output119 .= '
            animation: "';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure128 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments127 = array();
$arguments127['value'] = NULL;
$array129 = array (
);$arguments127['value'] = $renderingContext->getVariableProvider()->getByPath('settings.animation', $array129);

$output119 .= isset($arguments127['value']) ? $arguments127['value'] : $renderChildrenClosure128();

$output119 .= '",
            animationLoop: ';
$array130 = array (
);
$output119 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.animationLoop', $array130)]);

$output119 .= ',
            itemMargin: "';
$array131 = array (
);
$output119 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.itemMargin', $array131)]);

$output119 .= '",
            easing: "';
$array132 = array (
);
$output119 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.easing', $array132)]);

$output119 .= '",
            direction: "';
$array133 = array (
);
$output119 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.direction', $array133)]);

$output119 .= '",
            reverse: ';
$array134 = array (
);
$output119 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.reverse', $array134)]);

$output119 .= ',
            smoothHeight: ';
$array135 = array (
);
$output119 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.smoothHeight', $array135)]);

$output119 .= ',
            startAt: ';
$array136 = array (
);
$output119 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.startAt', $array136)]);

$output119 .= ',
            slideshow: ';
$array137 = array (
);
$output119 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.slideshow', $array137)]);

$output119 .= ',
            slideshowSpeed: ';
$array138 = array (
);
$output119 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.slideshowSpeed', $array138)]);

$output119 .= ',
            animationSpeed: ';
$array139 = array (
);
$output119 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.animationSpeed', $array139)]);

$output119 .= ',
            initDelay: ';
$array140 = array (
);
$output119 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.initDelay', $array140)]);

$output119 .= ',
            randomize: ';
$array141 = array (
);
$output119 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.randomize', $array141)]);

$output119 .= ',

            pauseOnAction: ';
$array142 = array (
);
$output119 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.pauseOnAction', $array142)]);

$output119 .= ',
            pauseOnHover: ';
$array143 = array (
);
$output119 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.pauseOnHover', $array143)]);

$output119 .= ',
            useCSS: ';
$array144 = array (
);
$output119 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.useCSS', $array144)]);

$output119 .= ',
            touch: ';
$array145 = array (
);
$output119 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.touch', $array145)]);

$output119 .= ',
            video: ';
$array146 = array (
);
$output119 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.video', $array146)]);

$output119 .= ',

            controlNav: ';
$array147 = array (
);
$output119 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.controlNav', $array147)]);

$output119 .= ',
            directionNav: ';
$array148 = array (
);
$output119 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.directionNav', $array148)]);

$output119 .= ',
            prevText: "';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure150 = function() use ($renderingContext, $self) {
return 'Previous';
};
$arguments149 = array();
$arguments149['key'] = NULL;
$arguments149['id'] = NULL;
$arguments149['default'] = NULL;
$arguments149['arguments'] = NULL;
$arguments149['extensionName'] = NULL;
$arguments149['languageKey'] = NULL;
$arguments149['alternativeLanguageKeys'] = NULL;
$arguments149['key'] = 'prevText';

$output119 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments149, $renderChildrenClosure150, $renderingContext)]);

$output119 .= '",
            nextText: "';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure152 = function() use ($renderingContext, $self) {
return 'Next';
};
$arguments151 = array();
$arguments151['key'] = NULL;
$arguments151['id'] = NULL;
$arguments151['default'] = NULL;
$arguments151['arguments'] = NULL;
$arguments151['extensionName'] = NULL;
$arguments151['languageKey'] = NULL;
$arguments151['alternativeLanguageKeys'] = NULL;
$arguments151['key'] = 'nextText';

$output119 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments151, $renderChildrenClosure152, $renderingContext)]);

$output119 .= '",

            keyboard: ';
$array153 = array (
);
$output119 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.keyboard', $array153)]);

$output119 .= ',
            multipleKeyboard: ';
$array154 = array (
);
$output119 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.multipleKeyboard', $array154)]);

$output119 .= ',
            mousewheel: ';
$array155 = array (
);
$output119 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.mousewheel', $array155)]);

$output119 .= ',
            pausePlay: ';
$array156 = array (
);
$output119 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.pausePlay', $array156)]);

$output119 .= ',
            pauseText: "';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure158 = function() use ($renderingContext, $self) {
return 'Pause';
};
$arguments157 = array();
$arguments157['key'] = NULL;
$arguments157['id'] = NULL;
$arguments157['default'] = NULL;
$arguments157['arguments'] = NULL;
$arguments157['extensionName'] = NULL;
$arguments157['languageKey'] = NULL;
$arguments157['alternativeLanguageKeys'] = NULL;
$arguments157['key'] = 'pauseText';

$output119 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments157, $renderChildrenClosure158, $renderingContext)]);

$output119 .= '",
            playText: "';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure160 = function() use ($renderingContext, $self) {
return 'Play';
};
$arguments159 = array();
$arguments159['key'] = NULL;
$arguments159['id'] = NULL;
$arguments159['default'] = NULL;
$arguments159['arguments'] = NULL;
$arguments159['extensionName'] = NULL;
$arguments159['languageKey'] = NULL;
$arguments159['alternativeLanguageKeys'] = NULL;
$arguments159['key'] = 'playText';

$output119 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments159, $renderChildrenClosure160, $renderingContext)]);

$output119 .= '",

            controlsContainer: "';
$array161 = array (
);
$output119 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.controlsContainer', $array161)]);

$output119 .= '",
            manualControls: "';
$array162 = array (
);
$output119 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.manualControls', $array162)]);

$output119 .= '",
            sync: "';
$array163 = array (
);
$output119 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.sync', $array163)]);

$output119 .= '",
            asNavFor: "';
$array164 = array (
);
$output119 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.asNavFor', $array164)]);

$output119 .= '",

            itemWidth: ';
$array165 = array (
);
$output119 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.itemWidth', $array165)]);

$output119 .= ',
            itemMargin: ';
$array166 = array (
);
$output119 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.itemMargin', $array166)]);

$output119 .= ',
            minItems: ';
$array167 = array (
);
$output119 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.minItems', $array167)]);

$output119 .= ',
            maxItems: ';
$array168 = array (
);
$output119 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.maxItems', $array168)]);

$output119 .= ',
            move: ';
$array169 = array (
);
$output119 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.move', $array169)]);

$output119 .= ',

            carousel: ';
$array170 = array (
);
$output119 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.carousel', $array170)]);

$output119 .= ',
            start: function(slider)';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure172 = function() use ($renderingContext, $self) {
return '{';
};
$arguments171 = array();
$arguments171['value'] = NULL;

$output119 .= isset($arguments171['value']) ? $arguments171['value'] : $renderChildrenClosure172();

$output119 .= '
                jQuery(\'body\').removeClass(\'loading\');
            }
        });
    });

    ';
return $output119;
};
$arguments115 = array();
$arguments115['name'] = NULL;
$arguments115['compress'] = true;
$arguments115['forceOnTop'] = false;
$output117 = '';

$output117 .= 'flexslider-';
$array118 = array (
);
$output117 .= $renderingContext->getVariableProvider()->getByPath('uid', $array118);
$arguments115['name'] = $output117;

$output89 .= WapplerSystems\WsFlexslider\ViewHelpers\PageRenderer\AddJsFooterInlineCodeViewHelper::renderStatic($arguments115, $renderChildrenClosure116, $renderingContext);

$output89 .= '

    ';
return $output89;
};
$arguments87 = array();
$arguments87['name'] = NULL;
$arguments87['name'] = 'Main';

$output84 .= NULL;

$output84 .= '

</div>
';

return $output84;
}


}
#