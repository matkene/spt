<?php

class __Mustache_779063e3ee82cc07d3dd005e4fe1a215 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div id="courses-view-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"
';
        $buffer .= $indent . '    data-region="courses-view"
';
        $buffer .= $indent . '    data-display="';
        $value = $this->resolveValue($context->find('view'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"
';
        $buffer .= $indent . '    data-grouping="';
        $value = $this->resolveValue($context->find('grouping'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"
';
        $buffer .= $indent . '    data-sort="';
        $value = $this->resolveValue($context->find('sort'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"
';
        $buffer .= $indent . '    data-prev-display="';
        $value = $this->resolveValue($context->find('view'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"
';
        $buffer .= $indent . '    data-paging="';
        $value = $this->resolveValue($context->find('paging'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"
';
        $buffer .= $indent . '    data-nocoursesimg="';
        $value = $this->resolveValue($context->find('nocoursesimg'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"
';
        $buffer .= $indent . '    data-displaycategories="';
        $value = $this->resolveValue($context->find('displaycategories'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        $buffer .= $indent . '    <div data-region="course-view-content">
';
        if ($partial = $this->mustache->loadPartial('block_myoverview/placeholders')) {
            $buffer .= $partial->renderInternal($context, $indent . '        ');
        }
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>';

        return $buffer;
    }
}