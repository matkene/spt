<?php

class __Mustache_6646f5a1220e3a33d036dfd9ac1ceb06 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div data-region="day-filter" class="dropdown">
';
        $buffer .= $indent . '    <button type="button" class="btn btn-outline-default dropdown-toggle icon-no-margin" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
';
        $buffer .= $indent . '        ';
        // 'pix' section
        $value = $context->find('pix');
        $buffer .= $this->section79b77fc02f219580d4079c16462fb869($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        <span class="sr-only">
';
        $buffer .= $indent . '            ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section2bfd6fe43b06b97ea356d4fcab591c00($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '            <span data-active-item-text>';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionE563c52f6c2570f63e63ab28b0341de8($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '        </span>
';
        $buffer .= $indent . '    </button>
';
        $buffer .= $indent . '    <div role="menu" class="dropdown-menu" data-show-active-item>
';
        $buffer .= $indent . '        <a
';
        $buffer .= $indent . '            class="dropdown-item ';
        // 'all' section
        $value = $context->find('all');
        $buffer .= $this->section989ab497c20f8f2947742ff570ba8aaa($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . '            href="#"
';
        $buffer .= $indent . '            data-from="-14"
';
        $buffer .= $indent . '            data-filtername="all"
';
        $buffer .= $indent . '            aria-label="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionA176852b616f342104b33141731cf7e3($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . '        >
';
        $buffer .= $indent . '            ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section796b182c855d7b48f08d0295b8450703($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        </a>
';
        $buffer .= $indent . '        <a
';
        $buffer .= $indent . '            class="dropdown-item ';
        // 'overdue' section
        $value = $context->find('overdue');
        $buffer .= $this->section989ab497c20f8f2947742ff570ba8aaa($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . '            href="#"
';
        $buffer .= $indent . '            data-from="-14"
';
        $buffer .= $indent . '            data-to="0"
';
        $buffer .= $indent . '            data-filtername="overdue"
';
        $buffer .= $indent . '            aria-label="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionA4af987a17a121006b1261664f42f160($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . '        >
';
        $buffer .= $indent . '            ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section2b53b81f2e413c7f3305585402637ce5($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        </a>
';
        $buffer .= $indent . '        <div class="dropdown-divider"></div>
';
        $buffer .= $indent . '        <h6 class="dropdown-header">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionF87960ec9a019cff09c35a4337264efd($context, $indent, $value);
        $buffer .= '</h6>
';
        $buffer .= $indent . '        <a
';
        $buffer .= $indent . '            class="dropdown-item ';
        // 'next7days' section
        $value = $context->find('next7days');
        $buffer .= $this->section989ab497c20f8f2947742ff570ba8aaa($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . '            href="#"
';
        $buffer .= $indent . '            data-from="0"
';
        $buffer .= $indent . '            data-to="7"
';
        $buffer .= $indent . '            data-filtername="next7days"
';
        $buffer .= $indent . '            aria-label="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section30ba648f69c5b8bc898da8dfa83799aa($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . '        >
';
        $buffer .= $indent . '            ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section924731da35c118fc230304b129d1ee39($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        </a>
';
        $buffer .= $indent . '        <a
';
        $buffer .= $indent . '            class="dropdown-item ';
        // 'next30days' section
        $value = $context->find('next30days');
        $buffer .= $this->section989ab497c20f8f2947742ff570ba8aaa($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . '            href="#"
';
        $buffer .= $indent . '            data-from="0"
';
        $buffer .= $indent . '            data-to="30"
';
        $buffer .= $indent . '            data-filtername="next30days"
';
        $buffer .= $indent . '            aria-label="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionE5baa477f3a25999f054a0b58620e924($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . '        >
';
        $buffer .= $indent . '            ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionE563c52f6c2570f63e63ab28b0341de8($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        </a>
';
        $buffer .= $indent . '        <a
';
        $buffer .= $indent . '            class="dropdown-item ';
        // 'next3months' section
        $value = $context->find('next3months');
        $buffer .= $this->section989ab497c20f8f2947742ff570ba8aaa($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . '            href="#"
';
        $buffer .= $indent . '            data-from="0"
';
        $buffer .= $indent . '            data-to="90"
';
        $buffer .= $indent . '            data-filtername="next3months"
';
        $buffer .= $indent . '            aria-label="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionF997284219d5db169619c75faca471c3($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . '        >
';
        $buffer .= $indent . '            ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionB11d45d10da0071260fb95fc0b3e4472($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        </a>
';
        $buffer .= $indent . '        <a
';
        $buffer .= $indent . '            class="dropdown-item ';
        // 'next6months' section
        $value = $context->find('next6months');
        $buffer .= $this->section989ab497c20f8f2947742ff570ba8aaa($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . '            href="#"
';
        $buffer .= $indent . '            data-from="0"
';
        $buffer .= $indent . '            data-to="180"
';
        $buffer .= $indent . '            data-filtername="next6months"
';
        $buffer .= $indent . '            aria-label="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section5f5aa5c86e6f620a5289462d7e7a53b9($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . '        >
';
        $buffer .= $indent . '            ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section2b2acf2ac0842b77ca0c679d6d5c1611($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        </a>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section79b77fc02f219580d4079c16462fb869(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' i/duration ';
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
                
                $buffer .= ' i/duration ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2bfd6fe43b06b97ea356d4fcab591c00(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' ariadayfilter, block_timeline ';
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
                
                $buffer .= ' ariadayfilter, block_timeline ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE563c52f6c2570f63e63ab28b0341de8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' next30days, block_timeline ';
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
                
                $buffer .= ' next30days, block_timeline ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section989ab497c20f8f2947742ff570ba8aaa(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' active ';
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
                
                $buffer .= ' active ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section796b182c855d7b48f08d0295b8450703(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' all, core ';
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
                
                $buffer .= ' all, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA176852b616f342104b33141731cf7e3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' ariadayfilteroption, block_timeline, {{#str}} all, core {{/str}}';
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
                
                $buffer .= ' ariadayfilteroption, block_timeline, ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section796b182c855d7b48f08d0295b8450703($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2b53b81f2e413c7f3305585402637ce5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' overdue, block_timeline ';
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
                
                $buffer .= ' overdue, block_timeline ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA4af987a17a121006b1261664f42f160(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' ariadayfilteroption, block_timeline, {{#str}} overdue, block_timeline {{/str}}';
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
                
                $buffer .= ' ariadayfilteroption, block_timeline, ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section2b53b81f2e413c7f3305585402637ce5($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF87960ec9a019cff09c35a4337264efd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' duedate, block_timeline ';
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
                
                $buffer .= ' duedate, block_timeline ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section924731da35c118fc230304b129d1ee39(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' next7days, block_timeline ';
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
                
                $buffer .= ' next7days, block_timeline ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section30ba648f69c5b8bc898da8dfa83799aa(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' ariadayfilteroption, block_timeline, {{#str}} next7days, block_timeline {{/str}}';
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
                
                $buffer .= ' ariadayfilteroption, block_timeline, ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section924731da35c118fc230304b129d1ee39($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE5baa477f3a25999f054a0b58620e924(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' ariadayfilteroption, block_timeline, {{#str}} next30days, block_timeline {{/str}}';
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
                
                $buffer .= ' ariadayfilteroption, block_timeline, ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionE563c52f6c2570f63e63ab28b0341de8($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB11d45d10da0071260fb95fc0b3e4472(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' next3months, block_timeline ';
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
                
                $buffer .= ' next3months, block_timeline ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF997284219d5db169619c75faca471c3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' ariadayfilteroption, block_timeline, {{#str}} next3months, block_timeline {{/str}}';
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
                
                $buffer .= ' ariadayfilteroption, block_timeline, ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionB11d45d10da0071260fb95fc0b3e4472($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2b2acf2ac0842b77ca0c679d6d5c1611(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' next6months, block_timeline ';
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
                
                $buffer .= ' next6months, block_timeline ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5f5aa5c86e6f620a5289462d7e7a53b9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' ariadayfilteroption, block_timeline, {{#str}} next6months, block_timeline {{/str}}';
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
                
                $buffer .= ' ariadayfilteroption, block_timeline, ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section2b2acf2ac0842b77ca0c679d6d5c1611($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}