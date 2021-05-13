<?php

class __Mustache_9a6047e5fb0f3582ae20cc2f6dedba5e extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div data-region="loading-placeholder-content" aria-hidden="true">
';
        // 'cards' section
        $value = $context->find('cards');
        $buffer .= $this->sectionF6b514b143daa4e1938b9e3c5fa54e4e($context, $indent, $value);
        // 'list' section
        $value = $context->find('list');
        $buffer .= $this->section43d4dc6614823bf345bbf85ef58b16e8($context, $indent, $value);
        // 'summary' section
        $value = $context->find('summary');
        $buffer .= $this->section255b75b082d20a157a16618b7d04bc1d($context, $indent, $value);
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionF6b514b143daa4e1938b9e3c5fa54e4e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="card-deck dashboard-card-deck one-row" style="height: 13rem">
        <div class="card dashboard-card border-0">
            <div class="card-img-top bg-pulse-grey w-100" style="height: 7rem">
            </div>
            <div class="card-body course-info-container pl-0">
                <div class="bg-pulse-grey w-100" style="height: 1rem"></div>
            </div>
        </div>
        <div class="card dashboard-card border-0">
            <div class="card-img-top bg-pulse-grey w-100" style="height: 7rem">
            </div>
            <div class="card-body course-info-container pl-0">
                <div class="bg-pulse-grey w-100" style="height: 1rem"></div>
            </div>
        </div>
        <div class="card dashboard-card border-0">
            <div class="card-img-top bg-pulse-grey w-100" style="height: 7rem">
            </div>
            <div class="card-body course-info-container pl-0">
                <div class="bg-pulse-grey w-100" style="height: 1rem"></div>
            </div>
        </div>
        <div class="card dashboard-card border-0">
            <div class="card-img-top bg-pulse-grey w-100" style="height: 7rem">
            </div>
            <div class="card-body course-info-container pl-0">
                <div class="bg-pulse-grey w-100" style="height: 1rem"></div>
            </div>
        </div>
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
                
                $buffer .= $indent . '    <div class="card-deck dashboard-card-deck one-row" style="height: 13rem">
';
                $buffer .= $indent . '        <div class="card dashboard-card border-0">
';
                $buffer .= $indent . '            <div class="card-img-top bg-pulse-grey w-100" style="height: 7rem">
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            <div class="card-body course-info-container pl-0">
';
                $buffer .= $indent . '                <div class="bg-pulse-grey w-100" style="height: 1rem"></div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '        <div class="card dashboard-card border-0">
';
                $buffer .= $indent . '            <div class="card-img-top bg-pulse-grey w-100" style="height: 7rem">
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            <div class="card-body course-info-container pl-0">
';
                $buffer .= $indent . '                <div class="bg-pulse-grey w-100" style="height: 1rem"></div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '        <div class="card dashboard-card border-0">
';
                $buffer .= $indent . '            <div class="card-img-top bg-pulse-grey w-100" style="height: 7rem">
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            <div class="card-body course-info-container pl-0">
';
                $buffer .= $indent . '                <div class="bg-pulse-grey w-100" style="height: 1rem"></div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '        <div class="card dashboard-card border-0">
';
                $buffer .= $indent . '            <div class="card-img-top bg-pulse-grey w-100" style="height: 7rem">
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            <div class="card-body course-info-container pl-0">
';
                $buffer .= $indent . '                <div class="bg-pulse-grey w-100" style="height: 1rem"></div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section43d4dc6614823bf345bbf85ef58b16e8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <ul class="list-group">
        <li class="list-group-item course-listitem">
            <div class="col-md-6 span6 p-0 d-flex align-items-center">
                <div class="bg-pulse-grey rounded-circle mr-2" style="height: 1rem; width: 1rem;"></div>
                <div class="bg-pulse-grey w-p50" style="height: 1rem; margin: 0.5rem 0"></div>
            </div>
        </li>
        <li class="list-group-item course-listitem">
            <div class="col-md-6 span6 p-0 d-flex align-items-center">
                <div class="bg-pulse-grey rounded-circle mr-2" style="height: 1rem; width: 1rem;"></div>
                <div class="bg-pulse-grey w-p50" style="height: 1rem; margin: 0.5rem 0"></div>
            </div>
        </li>
        <li class="list-group-item course-listitem">
            <div class="col-md-6 span6 p-0 d-flex align-items-center">
                <div class="bg-pulse-grey rounded-circle mr-2" style="height: 1rem; width: 1rem;"></div>
                <div class="bg-pulse-grey w-p50" style="height: 1rem; margin: 0.5rem 0"></div>
            </div>
        </li>
        <li class="list-group-item course-listitem">
            <div class="col-md-6 span6 p-0 d-flex align-items-center">
                <div class="bg-pulse-grey rounded-circle mr-2" style="height: 1rem; width: 1rem;"></div>
                <div class="bg-pulse-grey w-p50" style="height: 1rem; margin: 0.5rem 0"></div>
            </div>
        </li>
    </ul>
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
                
                $buffer .= $indent . '    <ul class="list-group">
';
                $buffer .= $indent . '        <li class="list-group-item course-listitem">
';
                $buffer .= $indent . '            <div class="col-md-6 span6 p-0 d-flex align-items-center">
';
                $buffer .= $indent . '                <div class="bg-pulse-grey rounded-circle mr-2" style="height: 1rem; width: 1rem;"></div>
';
                $buffer .= $indent . '                <div class="bg-pulse-grey w-p50" style="height: 1rem; margin: 0.5rem 0"></div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </li>
';
                $buffer .= $indent . '        <li class="list-group-item course-listitem">
';
                $buffer .= $indent . '            <div class="col-md-6 span6 p-0 d-flex align-items-center">
';
                $buffer .= $indent . '                <div class="bg-pulse-grey rounded-circle mr-2" style="height: 1rem; width: 1rem;"></div>
';
                $buffer .= $indent . '                <div class="bg-pulse-grey w-p50" style="height: 1rem; margin: 0.5rem 0"></div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </li>
';
                $buffer .= $indent . '        <li class="list-group-item course-listitem">
';
                $buffer .= $indent . '            <div class="col-md-6 span6 p-0 d-flex align-items-center">
';
                $buffer .= $indent . '                <div class="bg-pulse-grey rounded-circle mr-2" style="height: 1rem; width: 1rem;"></div>
';
                $buffer .= $indent . '                <div class="bg-pulse-grey w-p50" style="height: 1rem; margin: 0.5rem 0"></div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </li>
';
                $buffer .= $indent . '        <li class="list-group-item course-listitem">
';
                $buffer .= $indent . '            <div class="col-md-6 span6 p-0 d-flex align-items-center">
';
                $buffer .= $indent . '                <div class="bg-pulse-grey rounded-circle mr-2" style="height: 1rem; width: 1rem;"></div>
';
                $buffer .= $indent . '                <div class="bg-pulse-grey w-p50" style="height: 1rem; margin: 0.5rem 0"></div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </li>
';
                $buffer .= $indent . '    </ul>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section255b75b082d20a157a16618b7d04bc1d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="course-summaryitem m-b-1 p-2">
        <div class="d-flex">
            <div class="d-flex">
                <div class="bg-pulse-grey rounded-circle m-0 p-0 m-r-1" style="height: 7rem; width: 7rem;"></div>
            </div>
            <div class="d-flex w-p100 flex-column">
                <div class="bg-pulse-grey w-p50 m-b-1" style="height: 1rem; margin: 0.5rem 0"></div>
                <div class="bg-pulse-grey w-p100" style="height: 13rem"></div>
            </div>
        </div>
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
                
                $buffer .= $indent . '    <div class="course-summaryitem m-b-1 p-2">
';
                $buffer .= $indent . '        <div class="d-flex">
';
                $buffer .= $indent . '            <div class="d-flex">
';
                $buffer .= $indent . '                <div class="bg-pulse-grey rounded-circle m-0 p-0 m-r-1" style="height: 7rem; width: 7rem;"></div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            <div class="d-flex w-p100 flex-column">
';
                $buffer .= $indent . '                <div class="bg-pulse-grey w-p50 m-b-1" style="height: 1rem; margin: 0.5rem 0"></div>
';
                $buffer .= $indent . '                <div class="bg-pulse-grey w-p100" style="height: 13rem"></div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
