<?php

class __Mustache_d17b4c4369c631df6f022abd293dd74e extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'hasvalue' section
        $value = $context->find('hasvalue');
        $buffer .= $this->section9ff57dec8e27d3b7d5e3d7ce37f4ba69($context, $indent, $value);

        return $buffer;
    }

    private function section9ff57dec8e27d3b7d5e3d7ce37f4ba69(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="customfield customfield_{{type}} customfield_{{shortname}}">
        <span class="customfieldname">{{{name}}}</span><span class="customfieldseparator">: </span><span class="customfieldvalue">{{{value}}}</span>
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
                
                $buffer .= $indent . '    <div class="customfield customfield_';
                $value = $this->resolveValue($context->find('type'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' customfield_';
                $value = $this->resolveValue($context->find('shortname'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '        <span class="customfieldname">';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= $value;
                $buffer .= '</span><span class="customfieldseparator">: </span><span class="customfieldvalue">';
                $value = $this->resolveValue($context->find('value'), $context);
                $buffer .= $value;
                $buffer .= '</span>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
