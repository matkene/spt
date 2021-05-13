<?php

class __Mustache_4061368211f6e46270ecb48f4201ccc8 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'cannotview' inverted section
        $value = $context->find('cannotview');
        if (empty($value)) {
            
            $buffer .= $indent . '<div id="recent_assignments">
';
            $buffer .= $indent . '<table class="table">
';
            $buffer .= $indent . '    <thead>
';
            $buffer .= $indent . '        <tr>
';
            $buffer .= $indent . '            <th style="height: 38px; width: 20%;"><div class="bg-pulse-grey mb-1" style="width: 80%; height: 100%;"></div></th>
';
            $buffer .= $indent . '            <th style="height: 38px; width: 22%;"><div class="bg-pulse-grey mb-1" style="width: 80%; height: 100%;"></div></th>
';
            $buffer .= $indent . '            <th style="height: 38px; width: 20%;"><div class="bg-pulse-grey mb-1" style="width: 80%; height: 100%;"></div></th>
';
            $buffer .= $indent . '            <th style="height: 38px;"><div class="bg-pulse-grey mb-1" style="width: 80%; height: 100%;"></div></th>
';
            $buffer .= $indent . '        </tr>
';
            $buffer .= $indent . '    </thead>
';
            $buffer .= $indent . '    <tbody>
';
            $buffer .= $indent . '        <tr>
';
            $buffer .= $indent . '            <td style="height: 38px; width: 20%;"><div class="bg-pulse-grey mb-1" style="width: 80%; height: 100%;"></div></td>
';
            $buffer .= $indent . '            <td style="height: 38px; width: 22%;"><div class="bg-pulse-grey mb-1" style="width: 80%; height: 100%;"></div></td>
';
            $buffer .= $indent . '            <td style="height: 38px; width: 20%;"><div class="bg-pulse-grey mb-1" style="width: 80%; height: 100%;"></div></td>
';
            $buffer .= $indent . '            <td style="height: 38px;"><div class="bg-pulse-grey mb-1" style="width: 80%; height: 100%;"></div></td>
';
            $buffer .= $indent . '        </tr>
';
            $buffer .= $indent . '        <tr>
';
            $buffer .= $indent . '            <td style="height: 38px; width: 20%;"><div class="bg-pulse-grey mb-1" style="width: 80%; height: 100%;"></div></td>
';
            $buffer .= $indent . '            <td style="height: 38px; width: 22%;"><div class="bg-pulse-grey mb-1" style="width: 80%; height: 100%;"></div></td>
';
            $buffer .= $indent . '            <td style="height: 38px; width: 20%;"><div class="bg-pulse-grey mb-1" style="width: 80%; height: 100%;"></div></td>
';
            $buffer .= $indent . '            <td style="height: 38px;"><div class="bg-pulse-grey mb-1" style="width: 80%; height: 100%;"></div></td>
';
            $buffer .= $indent . '        </tr>
';
            $buffer .= $indent . '    </tbody>
';
            $buffer .= $indent . '</table>
';
            $buffer .= $indent . '</div>
';
            // 'js' section
            $value = $context->find('js');
            $buffer .= $this->sectionD2db2a9ce5d5a308f66af87b20f6f302($context, $indent, $value);
        }

        return $buffer;
    }

    private function sectionD2db2a9ce5d5a308f66af87b20f6f302(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'block_remuiblck/recent_feedbacks\'], function(recentFeedbacks) {
  recentFeedbacks.init(\'#recent_assignments\');
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
                
                $buffer .= $indent . 'require([\'block_remuiblck/recent_feedbacks\'], function(recentFeedbacks) {
';
                $buffer .= $indent . '  recentFeedbacks.init(\'#recent_assignments\');
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
