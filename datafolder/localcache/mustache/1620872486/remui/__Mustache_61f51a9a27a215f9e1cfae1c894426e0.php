<?php

class __Mustache_61f51a9a27a215f9e1cfae1c894426e0 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'cannotview' inverted section
        $value = $context->find('cannotview');
        if (empty($value)) {
            
            $buffer .= $indent . '<div id="latest_members">
';
            $buffer .= $indent . '    <ul class="users-list row">
';
            if ($partial = $this->mustache->loadPartial('block_remuiblck/placeholder-latestmember-item')) {
                $buffer .= $partial->renderInternal($context, $indent . '        ');
            }
            if ($partial = $this->mustache->loadPartial('block_remuiblck/placeholder-latestmember-item')) {
                $buffer .= $partial->renderInternal($context, $indent . '        ');
            }
            if ($partial = $this->mustache->loadPartial('block_remuiblck/placeholder-latestmember-item')) {
                $buffer .= $partial->renderInternal($context, $indent . '        ');
            }
            if ($partial = $this->mustache->loadPartial('block_remuiblck/placeholder-latestmember-item')) {
                $buffer .= $partial->renderInternal($context, $indent . '        ');
            }
            if ($partial = $this->mustache->loadPartial('block_remuiblck/placeholder-latestmember-item')) {
                $buffer .= $partial->renderInternal($context, $indent . '        ');
            }
            if ($partial = $this->mustache->loadPartial('block_remuiblck/placeholder-latestmember-item')) {
                $buffer .= $partial->renderInternal($context, $indent . '        ');
            }
            if ($partial = $this->mustache->loadPartial('block_remuiblck/placeholder-latestmember-item')) {
                $buffer .= $partial->renderInternal($context, $indent . '        ');
            }
            if ($partial = $this->mustache->loadPartial('block_remuiblck/placeholder-latestmember-item')) {
                $buffer .= $partial->renderInternal($context, $indent . '        ');
            }
            $buffer .= $indent . '    </ul>
';
            $buffer .= $indent . '</div>
';
            // 'js' section
            $value = $context->find('js');
            $buffer .= $this->section54c0bc9320f442d406b3075457b02421($context, $indent, $value);
        }

        return $buffer;
    }

    private function section54c0bc9320f442d406b3075457b02421(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'block_remuiblck/latest_members\'], function(latestMembers) {
    latestMembers.init(\'#latest_members\');
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
                
                $buffer .= $indent . 'require([\'block_remuiblck/latest_members\'], function(latestMembers) {
';
                $buffer .= $indent . '    latestMembers.init(\'#latest_members\');
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
