<?php

class __Mustache_bbd26f228ecae5fc5a55248ce7ed0f37 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        if ($partial = $this->mustache->loadPartial('theme_remui/common_start')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="page-main">
';
        $buffer .= $indent . '    <div class="container">
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->findDot('output.full_header'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <div class="page-content">
';
        $buffer .= $indent . '            
';
        $buffer .= $indent . '            <!-- Filters -->
';
        $buffer .= $indent . '            <div class="row category-filters pb-20 d-none">
';
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->find('allfilters'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            <div class="nav-tabs-horizontal courses-tabs" data-plugin="tabs">
';
        $buffer .= $indent . '                <ul class="nav nav-tabs nav nav-tabs nav-tabs-line" role="tablist">
';
        // 'tabcontent' section
        $value = $context->find('tabcontent');
        $buffer .= $this->section5e0e092339a5afaa434512da255eeaa1($context, $indent, $value);
        $buffer .= $indent . '                </ul>
';
        $buffer .= $indent . '                <div class="tab-content mt-10 ';
        // 'latest_card' section
        $value = $context->find('latest_card');
        $buffer .= $this->section07857a971f2c2659b76e78c846f0bef0($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '                    <div class="courses-loader-wrap w-p100 h-p100">
';
        $buffer .= $indent . '                        <i class="h3 fa-spin fa fa-circle-o-notch" aria-hidden="true"></i>
';
        $buffer .= $indent . '                    </div>
';
        // 'tabcontent' section
        $value = $context->find('tabcontent');
        $buffer .= $this->section805165db3f6eed959dd610b5175215c7($context, $indent, $value);
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div id="region-main-box" class="hidden">
';
        // 'hasregionmainsettingsmenu' section
        $value = $context->find('hasregionmainsettingsmenu');
        $buffer .= $this->section21c385dea3c3c8bccf79ac70bd7832fb($context, $indent, $value);
        $buffer .= $indent . '            <section id="region-main" ';
        // 'hasblocks' section
        $value = $context->find('hasblocks');
        $buffer .= $this->section1070627cc6d04a30fbc9aa223e9e57ed($context, $indent, $value);
        $buffer .= '>
';
        // 'hasregionmainsettingsmenu' section
        $value = $context->find('hasregionmainsettingsmenu');
        $buffer .= $this->section29e7cb00ff052a8aa544afff813953a2($context, $indent, $value);
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->findDot('output.course_content_header'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->findDot('output.main_content'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->findDot('output.course_content_footer'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '            </section>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>  
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    </div>
';
        if ($partial = $this->mustache->loadPartial('theme_remui/common_end')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->section975dcbd92f9425e66679ab98832e70ba($context, $indent, $value);

        return $buffer;
    }

    private function section394210065fc120f40f05534a4cb50829(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'active show';
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
                
                $buffer .= 'active show';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5e0e092339a5afaa434512da255eeaa1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <li class="nav-item" role="presentation">
                        <a id="{{name}}tab" class="nav-link {{#isActive}}active show{{/isActive}}" data-toggle="tab" href="#{{name}}region" aria-controls="{{name}}region" role="tab" aria-selected="true">
                            {{text}}
                        </a>
                    </li>
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
                
                $buffer .= $indent . '                    <li class="nav-item" role="presentation">
';
                $buffer .= $indent . '                        <a id="';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= 'tab" class="nav-link ';
                // 'isActive' section
                $value = $context->find('isActive');
                $buffer .= $this->section394210065fc120f40f05534a4cb50829($context, $indent, $value);
                $buffer .= '" data-toggle="tab" href="#';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= 'region" aria-controls="';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= 'region" role="tab" aria-selected="true">
';
                $buffer .= $indent . '                            ';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </a>
';
                $buffer .= $indent . '                    </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section07857a971f2c2659b76e78c846f0bef0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'latest-cards';
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
                
                $buffer .= 'latest-cards';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section805165db3f6eed959dd610b5175215c7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="tab-pane {{#isActive}}active show{{/isActive}}" id="{{name}}region" role="tabpanel">
                        <div class="row content">
                            
                        </div>
                        <div class="pagination" id="{{name}}pagination"></div>
                    </div>
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
                
                $buffer .= $indent . '                    <div class="tab-pane ';
                // 'isActive' section
                $value = $context->find('isActive');
                $buffer .= $this->section394210065fc120f40f05534a4cb50829($context, $indent, $value);
                $buffer .= '" id="';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= 'region" role="tabpanel">
';
                $buffer .= $indent . '                        <div class="row content">
';
                $buffer .= $indent . '                            
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                        <div class="pagination" id="';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= 'pagination"></div>
';
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8ae768dbd9f60a7f7df4aaf3cee7aa89(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'has-blocks';
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
                
                $buffer .= 'has-blocks';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section21c385dea3c3c8bccf79ac70bd7832fb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div id="region-main-settings-menu" class="hidden-print {{#hasblocks}}has-blocks{{/hasblocks}}">
                    <div> {{{ output.region_main_settings_menu }}} </div>
                </div>
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
                
                $buffer .= $indent . '                <div id="region-main-settings-menu" class="hidden-print ';
                // 'hasblocks' section
                $value = $context->find('hasblocks');
                $buffer .= $this->section8ae768dbd9f60a7f7df4aaf3cee7aa89($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                    <div> ';
                $value = $this->resolveValue($context->findDot('output.region_main_settings_menu'), $context);
                $buffer .= $value;
                $buffer .= ' </div>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1070627cc6d04a30fbc9aa223e9e57ed(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'class="has-blocks"';
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
                
                $buffer .= 'class="has-blocks"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section29e7cb00ff052a8aa544afff813953a2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="region_main_settings_menu_proxy"></div>
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
                
                $buffer .= $indent . '                    <div class="region_main_settings_menu_proxy"></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section975dcbd92f9425e66679ab98832e70ba(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'theme_remui/loader\',  \'theme_remui/coursecategory\'], function (l, c) {
    Breakpoints();
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
                
                $buffer .= $indent . 'require([\'theme_remui/loader\',  \'theme_remui/coursecategory\'], function (l, c) {
';
                $buffer .= $indent . '    Breakpoints();
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
