<?php

class __Mustache_410707a978bb1da3bf3d0a797ea3df22 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        if ($parent = $this->mustache->loadPartial('theme_remui/remui_popover_region')) {
            $context->pushBlockContext(array(
                'classes' => array($this, 'block4100c75ced44c533f753c4400abe0aa9'),
                'attributes' => array($this, 'blockAec199eda78b92e4c042d47bd237eec5'),
                'togglelabel' => array($this, 'block34cc486029b2d8b76c7c4d1e9a613637'),
                'toggletitle' => array($this, 'block52fa0718d598c4e7f73a7b9bed353fbd'),
                'togglecontent' => array($this, 'block81dfdbdc4cf2ea0818c4b0bd55894f89'),
                'containerlabel' => array($this, 'blockFdd358a57d064879bfabcf99cddc2acd'),
                'headertext' => array($this, 'blockF56e21d5cedcfd59b43f70c6259c8775'),
                'headeractions' => array($this, 'block5f6e1d2af008b44e5215c1e8fb8a50b1'),
                'footeractions' => array($this, 'block4134572b1e88690464fcde8a8e133c29'),
                'content' => array($this, 'blockE4a79b98431ede22b4ea981b622ac0cd'),
            ));
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->section6eb0b4f3f69800e006e52eb0dc4fd581($context, $indent, $value);

        return $buffer;
    }

    private function sectionE9d311101fe112f08c4725ee17f65ad1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' shownotificationwindownonew, message ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' shownotificationwindownonew, message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2c7f52d273f99ea528e3a7b6f56728eb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' togglenotificationmenu, message ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' togglenotificationmenu, message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5e5e0b34713d04b2df144144700c7e50(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' i/notifications, core, {{#str}} togglenotificationmenu, message {{/str}} ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' i/notifications, core, ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section2c7f52d273f99ea528e3a7b6f56728eb($context, $indent, $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEb70af33b8011de7432c8334305b6a62(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' notificationwindow, message ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . ' notificationwindow, message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0485fa7464a648704afa92570f0944b7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' notifications, message ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' notifications, message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD52891bef9837f9da27028964220b7a5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' markallread ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' markallread ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5c109cc11ee011897152888aaf4973ba(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' notificationpreferences, message ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' notificationpreferences, message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7fd8a95ce9a614b8c5bab7e83009f0ca(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' nonotifications, message ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' nonotifications, message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6eb0b4f3f69800e006e52eb0dc4fd581(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'jquery\', \'message_popup/notification_popover_controller\'], function($, controller) {
    var container = $(\'#nav-notification-popover-container\');
    var controller = new controller(container);
    controller.registerEventListeners();
    controller.registerListNavigationEventListeners();
});
';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require([\'jquery\', \'message_popup/notification_popover_controller\'], function($, controller) {
';
                $buffer .= $indent . '    var container = $(\'#nav-notification-popover-container\');
';
                $buffer .= $indent . '    var controller = new controller(container);
';
                $buffer .= $indent . '    controller.registerEventListeners();
';
                $buffer .= $indent . '    controller.registerListNavigationEventListeners();
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function block4100c75ced44c533f753c4400abe0aa9($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . 'popover-region-notifications';
    
        return $buffer;
    }

    public function blockAec199eda78b92e4c042d47bd237eec5($context)
    {
        $indent = $buffer = '';
        $buffer .= 'id="nav-notification-popover-container" data-userid="';
        $value = $this->resolveValue($context->find('userid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"';
    
        return $buffer;
    }

    public function block34cc486029b2d8b76c7c4d1e9a613637($context)
    {
        $indent = $buffer = '';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionE9d311101fe112f08c4725ee17f65ad1($context, $indent, $value);
    
        return $buffer;
    }

    public function block52fa0718d598c4e7f73a7b9bed353fbd($context)
    {
        $indent = $buffer = '';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section2c7f52d273f99ea528e3a7b6f56728eb($context, $indent, $value);
    
        return $buffer;
    }

    public function block81dfdbdc4cf2ea0818c4b0bd55894f89($context)
    {
        $indent = $buffer = '';
        $buffer .= '        <i class="icon fa fa-bell" aria-hidden="true"></i>
';
        $buffer .= $indent . '        <!-- ';
        // 'pix' section
        $value = $context->find('pix');
        $buffer .= $this->section5e5e0b34713d04b2df144144700c7e50($context, $indent, $value);
        $buffer .= ' -->
';
        $buffer .= $indent . '        <span class="font-size-10 badge badge-important up animation-shake ';
        // 'unreadcount' inverted section
        $value = $context->find('unreadcount');
        if (empty($value)) {
            
            $buffer .= 'hidden';
        }
        $buffer .= '" data-region="count-container">';
        $value = $this->resolveValue($context->find('unreadcount'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '</span>
';
    
        return $buffer;
    }

    public function blockFdd358a57d064879bfabcf99cddc2acd($context)
    {
        $indent = $buffer = '';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionEb70af33b8011de7432c8334305b6a62($context, $indent, $value);
    
        return $buffer;
    }

    public function blockF56e21d5cedcfd59b43f70c6259c8775($context)
    {
        $indent = $buffer = '';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section0485fa7464a648704afa92570f0944b7($context, $indent, $value);
    
        return $buffer;
    }

    public function block5f6e1d2af008b44e5215c1e8fb8a50b1($context)
    {
        $indent = $buffer = '';
        $blockFunction = $context->findInBlock('anchor');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        } else {
            $buffer .= '            <a class="mark-all-read-button badge badge-round badge-info"
';
            $buffer .= $indent . '                href="javascript:void(0)"
';
            $buffer .= $indent . '                title="';
            // 'str' section
            $value = $context->find('str');
            $buffer .= $this->sectionD52891bef9837f9da27028964220b7a5($context, $indent, $value);
            $buffer .= '"
';
            $buffer .= $indent . '                data-action="mark-all-read"
';
            $buffer .= $indent . '                role="button">
';
            $buffer .= $indent . '                <i class="icon fa fa-check" aria-hidden="true"></i>
';
            $buffer .= $indent . '            </a>
';
        }
    
        return $buffer;
    }

    public function block4134572b1e88690464fcde8a8e133c29($context)
    {
        $indent = $buffer = '';
        $blockFunction = $context->findInBlock('anchor');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        } else {
            $buffer .= $indent . '            <a href="';
            $value = $this->resolveValue($context->findDot('urls.preferences'), $context);
            $buffer .= $value;
            $buffer .= '" class="dropdown-menu-footer-btn"
';
            $buffer .= $indent . '                title="';
            // 'str' section
            $value = $context->find('str');
            $buffer .= $this->section5c109cc11ee011897152888aaf4973ba($context, $indent, $value);
            $buffer .= '">
';
            $buffer .= $indent . '                <i class="icon fa fa-cog" aria-hidden="true"></i>
';
            $buffer .= $indent . '            </a>
';
        }
    
        return $buffer;
    }

    public function blockE4a79b98431ede22b4ea981b622ac0cd($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . '        <div class="all-notifications"
';
        $buffer .= $indent . '            data-role="content"
';
        $buffer .= $indent . '            data-region="all-notifications"
';
        $buffer .= $indent . '            role="log"
';
        $buffer .= $indent . '            aria-busy="false"
';
        $buffer .= $indent . '            aria-atomic="false"
';
        $buffer .= $indent . '            aria-relevant="additions"></div>
';
        $buffer .= $indent . '        <div class="empty-message" tabindex="0" data-region="empty-message">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section7fd8a95ce9a614b8c5bab7e83009f0ca($context, $indent, $value);
        $buffer .= '</div>
';
    
        return $buffer;
    }
}
