<?php

class __Mustache_0e878f130071a51d14b34c1b084dc566 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'pluginicon' section
        $value = $context->find('pluginicon');
        $buffer .= $this->section1a7f9562a7dbe7152016ca89d4e94c27($context, $indent, $value);
        // 'pluginicon' inverted section
        $value = $context->find('pluginicon');
        if (empty($value)) {
            
            $buffer .= $indent . '    <i class="site-menu-icon ';
            $value = $this->resolveValue($context->find('remuiicon'), $context);
            $buffer .= $value;
            $buffer .= '" aria-hidden="true"></i>
';
        }

        return $buffer;
    }

    private function section1a7f9562a7dbe7152016ca89d4e94c27(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="site-menu-icon">
        <img src="{{pluginicon}}"/>
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
                
                $buffer .= $indent . '    <div class="site-menu-icon">
';
                $buffer .= $indent . '        <img src="';
                $value = $this->resolveValue($context->find('pluginicon'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"/>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
