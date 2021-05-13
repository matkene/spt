<?php

class __Mustache_d631ffbb2847917ab1535d1aa63d1328 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'isteacher' section
        $value = $context->find('isteacher');
        $buffer .= $this->sectionF1eecc8301583ce4069efc06d38defdb($context, $indent, $value);

        return $buffer;
    }

    private function section44cb77537112cc40e68a2cb3fcc6fef4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'block_remuiblck/manage_courses\'], function(managecourse) {
    managecourse.init(\'#managecourses\');
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
                
                $buffer .= $indent . 'require([\'block_remuiblck/manage_courses\'], function(managecourse) {
';
                $buffer .= $indent . '    managecourse.init(\'#managecourses\');
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF1eecc8301583ce4069efc06d38defdb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div id="manage_courses" class="container">
    <div class="filters justify-content-end">
        {{> block_remuiblck/manage-courses-display-selector }}
    </div>
    <div data-region="manage-courses-list">
        {{> block_remuiblck/placeholders-manage-courses }}
    </div>
    <div class="mt-10">
        {{> block_remuiblck/per-page-and-pagination-selector }}
    </div>
</div>
{{#js}}
require([\'block_remuiblck/manage_courses\'], function(managecourse) {
    managecourse.init(\'#managecourses\');
});
{{/js}}
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
                
                $buffer .= $indent . '<div id="manage_courses" class="container">
';
                $buffer .= $indent . '    <div class="filters justify-content-end">
';
                if ($partial = $this->mustache->loadPartial('block_remuiblck/manage-courses-display-selector')) {
                    $buffer .= $partial->renderInternal($context, $indent . '        ');
                }
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '    <div data-region="manage-courses-list">
';
                if ($partial = $this->mustache->loadPartial('block_remuiblck/placeholders-manage-courses')) {
                    $buffer .= $partial->renderInternal($context, $indent . '        ');
                }
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '    <div class="mt-10">
';
                if ($partial = $this->mustache->loadPartial('block_remuiblck/per-page-and-pagination-selector')) {
                    $buffer .= $partial->renderInternal($context, $indent . '        ');
                }
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '</div>
';
                // 'js' section
                $value = $context->find('js');
                $buffer .= $this->section44cb77537112cc40e68a2cb3fcc6fef4($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
