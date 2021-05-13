<?php

class __Mustache_855d0a216d9bc8b68ec2667540973214 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        // 'flatnavigation' section
        $value = $context->find('flatnavigation');
        $buffer .= $this->section5f9322d030f3c84646da9f41b34b65fd($context, $indent, $value);

        return $buffer;
    }

    private function section4680cf917e50cbb04bce30b0e4652025(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
</li>
<li class="site-menu-category" aria-label="{{get_collectionlabel}}"></li>
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
                
                $buffer .= $indent . '</li>
';
                $buffer .= $indent . '<li class="site-menu-category" aria-label="';
                $value = $this->resolveValue($context->find('get_collectionlabel'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5749c750acb0d7477dd5257d00cc6d53(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'active';
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
                
                $buffer .= 'active';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4d63c27927abdcdd436fab5a7cbff9f2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'hidable collapse';
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
                
                $buffer .= 'hidable collapse';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2233087813f2f0dc85c21e6f8a0b28de(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'data-parent-key="{{.}}"';
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
                
                $buffer .= 'data-parent-key="';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD3c10f6da65a249b72ba1ddc07b50996(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <li class="site-menu-item pl-20 {{#isactive}}active{{/isactive}} {{#hidable}}hidable collapse{{/hidable}}">
            <a href="{{{action}}}" data-key="{{key}}" class="py-5"  data-isexpandable="{{isexpandable}}" data-indent="{{get_indent}}" data-showdivider="{{showdivider}}" data-type="{{type}}" data-nodetype="{{nodetype}}" data-collapse="{{collapse}}" data-forceopen="{{forceopen}}" data-isactive="{{isactive}}" data-hidden="{{hidden}}" data-preceedwithhr="{{preceedwithhr}}" {{#parent.key}}data-parent-key="{{.}}"{{/parent.key}}>
                {{> theme_remui/flat_navigation_icon }}
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
                
                $buffer .= $indent . '            <li class="site-menu-item pl-20 ';
                // 'isactive' section
                $value = $context->find('isactive');
                $buffer .= $this->section5749c750acb0d7477dd5257d00cc6d53($context, $indent, $value);
                $buffer .= ' ';
                // 'hidable' section
                $value = $context->find('hidable');
                $buffer .= $this->section4d63c27927abdcdd436fab5a7cbff9f2($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '            <a href="';
                $value = $this->resolveValue($context->find('action'), $context);
                $buffer .= $value;
                $buffer .= '" data-key="';
                $value = $this->resolveValue($context->find('key'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="py-5"  data-isexpandable="';
                $value = $this->resolveValue($context->find('isexpandable'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-indent="';
                $value = $this->resolveValue($context->find('get_indent'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-showdivider="';
                $value = $this->resolveValue($context->find('showdivider'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-type="';
                $value = $this->resolveValue($context->find('type'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-nodetype="';
                $value = $this->resolveValue($context->find('nodetype'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-collapse="';
                $value = $this->resolveValue($context->find('collapse'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-forceopen="';
                $value = $this->resolveValue($context->find('forceopen'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-isactive="';
                $value = $this->resolveValue($context->find('isactive'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-hidden="';
                $value = $this->resolveValue($context->find('hidden'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-preceedwithhr="';
                $value = $this->resolveValue($context->find('preceedwithhr'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" ';
                // 'parent.key' section
                $value = $context->findDot('parent.key');
                $buffer .= $this->section2233087813f2f0dc85c21e6f8a0b28de($context, $indent, $value);
                $buffer .= '>
';
                if ($partial = $this->mustache->loadPartial('theme_remui/flat_navigation_icon')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF31a2424c4c903f8346edb81486d7b05(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'has-sub';
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
                
                $buffer .= 'has-sub';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section388d1371d73278a275fd492878bfb640(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<span class="site-menu-arrow px-15" id="mycourses-toggler" onclick="return false;"></span>';
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
                
                $buffer .= '<span class="site-menu-arrow px-15" id="mycourses-toggler" onclick="return false;"></span>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB265e19508d6adebd4248e0474697815(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <li class="site-menu-item "  title="{{{text}}}">
                      <a class="animsition-link py-5" href="{{{ config.wwwroot }}}/course/view.php?id={{{key}}}">
                        {{> theme_remui/flat_navigation_icon }}
                        <span class="site-menu-title">{{{text}}}</span>
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
                
                $buffer .= $indent . '                    <li class="site-menu-item "  title="';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= $value;
                $buffer .= '">
';
                $buffer .= $indent . '                      <a class="animsition-link py-5" href="';
                $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
                $buffer .= $value;
                $buffer .= '/course/view.php?id=';
                $value = $this->resolveValue($context->find('key'), $context);
                $buffer .= $value;
                $buffer .= '">
';
                if ($partial = $this->mustache->loadPartial('theme_remui/flat_navigation_icon')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                        ');
                }
                $buffer .= $indent . '                        <span class="site-menu-title">';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= $value;
                $buffer .= '</span>
';
                $buffer .= $indent . '                      </a>
';
                $buffer .= $indent . '                    </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB08a00a9c0ed919b38a512dd75da29ac(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'more, theme_remui';
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
                
                $buffer .= 'more, theme_remui';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0366c29aea719f8192ec3e272e2ab23a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <li class="site-menu-item " title="{{#str}}more, theme_remui{{/str}}">
                          <a class="animsition-link py-5" href="{{{ config.wwwroot }}}/course/index.php?mycourses=1">
                            {{> theme_remui/flat_navigation_icon }}
                            <span class="site-menu-title">{{#str}}more, theme_remui{{/str}}</span>
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
                
                $buffer .= $indent . '                        <li class="site-menu-item " title="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionB08a00a9c0ed919b38a512dd75da29ac($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                          <a class="animsition-link py-5" href="';
                $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
                $buffer .= $value;
                $buffer .= '/course/index.php?mycourses=1">
';
                if ($partial = $this->mustache->loadPartial('theme_remui/flat_navigation_icon')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                            ');
                }
                $buffer .= $indent . '                            <span class="site-menu-title">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionB08a00a9c0ed919b38a512dd75da29ac($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                          </a>
';
                $buffer .= $indent . '                        </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section304e52547c6ef33e43b00e754450f7c9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <ul class="site-menu-sub">
                    {{#mycourses}}
                    <li class="site-menu-item "  title="{{{text}}}">
                      <a class="animsition-link py-5" href="{{{ config.wwwroot }}}/course/view.php?id={{{key}}}">
                        {{> theme_remui/flat_navigation_icon }}
                        <span class="site-menu-title">{{{text}}}</span>
                      </a>
                    </li>
                    {{/mycourses}}
                    {{#hasmore}}
                        <li class="site-menu-item " title="{{#str}}more, theme_remui{{/str}}">
                          <a class="animsition-link py-5" href="{{{ config.wwwroot }}}/course/index.php?mycourses=1">
                            {{> theme_remui/flat_navigation_icon }}
                            <span class="site-menu-title">{{#str}}more, theme_remui{{/str}}</span>
                          </a>
                        </li>
                    {{/hasmore}}
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
                
                $buffer .= $indent . '                <ul class="site-menu-sub">
';
                // 'mycourses' section
                $value = $context->find('mycourses');
                $buffer .= $this->sectionB265e19508d6adebd4248e0474697815($context, $indent, $value);
                // 'hasmore' section
                $value = $context->find('hasmore');
                $buffer .= $this->section0366c29aea719f8192ec3e272e2ab23a($context, $indent, $value);
                $buffer .= $indent . '                </ul>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBe21b78bbb995251e74b9e16ad0270cf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{#get_indent}}
            <li class="site-menu-item pl-20 {{#isactive}}active{{/isactive}} {{#hidable}}hidable collapse{{/hidable}}">
            <a href="{{{action}}}" data-key="{{key}}" class="py-5"  data-isexpandable="{{isexpandable}}" data-indent="{{get_indent}}" data-showdivider="{{showdivider}}" data-type="{{type}}" data-nodetype="{{nodetype}}" data-collapse="{{collapse}}" data-forceopen="{{forceopen}}" data-isactive="{{isactive}}" data-hidden="{{hidden}}" data-preceedwithhr="{{preceedwithhr}}" {{#parent.key}}data-parent-key="{{.}}"{{/parent.key}}>
                {{> theme_remui/flat_navigation_icon }}
        {{/get_indent}}

        {{^get_indent}}
            <li class="site-menu-item {{#ismycourses}}has-sub{{/ismycourses}} {{#isactive}}active{{/isactive}}"  title="{{{text}}}"  aria-label="{{firstcollectionlabel}}">
                <a href="{{{action}}}" data-key="{{key}}" class="py-5"  data-isexpandable="{{isexpandable}}" data-indent="{{get_indent}}" data-showdivider="{{showdivider}}" data-type="{{type}}" data-nodetype="{{nodetype}}" data-collapse="{{collapse}}" data-forceopen="{{forceopen}}" data-isactive="{{isactive}}" data-hidden="{{hidden}}" data-preceedwithhr="{{preceedwithhr}}" {{#parent.key}}data-parent-key="{{.}}"{{/parent.key}}>
                    {{> theme_remui/flat_navigation_icon }}
                    <span class="site-menu-title">{{{text}}}</span>
        {{/get_indent}}
           {{#ismycourses}}<span class="site-menu-arrow px-15" id="mycourses-toggler" onclick="return false;"></span>{{/ismycourses}}
            </a>
            {{#ismycourses}}
                <ul class="site-menu-sub">
                    {{#mycourses}}
                    <li class="site-menu-item "  title="{{{text}}}">
                      <a class="animsition-link py-5" href="{{{ config.wwwroot }}}/course/view.php?id={{{key}}}">
                        {{> theme_remui/flat_navigation_icon }}
                        <span class="site-menu-title">{{{text}}}</span>
                      </a>
                    </li>
                    {{/mycourses}}
                    {{#hasmore}}
                        <li class="site-menu-item " title="{{#str}}more, theme_remui{{/str}}">
                          <a class="animsition-link py-5" href="{{{ config.wwwroot }}}/course/index.php?mycourses=1">
                            {{> theme_remui/flat_navigation_icon }}
                            <span class="site-menu-title">{{#str}}more, theme_remui{{/str}}</span>
                          </a>
                        </li>
                    {{/hasmore}}
                </ul>
            {{/ismycourses}}
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
                
                // 'get_indent' section
                $value = $context->find('get_indent');
                $buffer .= $this->sectionD3c10f6da65a249b72ba1ddc07b50996($context, $indent, $value);
                $buffer .= $indent . '
';
                // 'get_indent' inverted section
                $value = $context->find('get_indent');
                if (empty($value)) {
                    
                    $buffer .= $indent . '            <li class="site-menu-item ';
                    // 'ismycourses' section
                    $value = $context->find('ismycourses');
                    $buffer .= $this->sectionF31a2424c4c903f8346edb81486d7b05($context, $indent, $value);
                    $buffer .= ' ';
                    // 'isactive' section
                    $value = $context->find('isactive');
                    $buffer .= $this->section5749c750acb0d7477dd5257d00cc6d53($context, $indent, $value);
                    $buffer .= '"  title="';
                    $value = $this->resolveValue($context->find('text'), $context);
                    $buffer .= $value;
                    $buffer .= '"  aria-label="';
                    $value = $this->resolveValue($context->find('firstcollectionlabel'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '">
';
                    $buffer .= $indent . '                <a href="';
                    $value = $this->resolveValue($context->find('action'), $context);
                    $buffer .= $value;
                    $buffer .= '" data-key="';
                    $value = $this->resolveValue($context->find('key'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '" class="py-5"  data-isexpandable="';
                    $value = $this->resolveValue($context->find('isexpandable'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '" data-indent="';
                    $value = $this->resolveValue($context->find('get_indent'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '" data-showdivider="';
                    $value = $this->resolveValue($context->find('showdivider'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '" data-type="';
                    $value = $this->resolveValue($context->find('type'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '" data-nodetype="';
                    $value = $this->resolveValue($context->find('nodetype'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '" data-collapse="';
                    $value = $this->resolveValue($context->find('collapse'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '" data-forceopen="';
                    $value = $this->resolveValue($context->find('forceopen'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '" data-isactive="';
                    $value = $this->resolveValue($context->find('isactive'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '" data-hidden="';
                    $value = $this->resolveValue($context->find('hidden'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '" data-preceedwithhr="';
                    $value = $this->resolveValue($context->find('preceedwithhr'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '" ';
                    // 'parent.key' section
                    $value = $context->findDot('parent.key');
                    $buffer .= $this->section2233087813f2f0dc85c21e6f8a0b28de($context, $indent, $value);
                    $buffer .= '>
';
                    if ($partial = $this->mustache->loadPartial('theme_remui/flat_navigation_icon')) {
                        $buffer .= $partial->renderInternal($context, $indent . '                    ');
                    }
                    $buffer .= $indent . '                    <span class="site-menu-title">';
                    $value = $this->resolveValue($context->find('text'), $context);
                    $buffer .= $value;
                    $buffer .= '</span>
';
                }
                $buffer .= $indent . '           ';
                // 'ismycourses' section
                $value = $context->find('ismycourses');
                $buffer .= $this->section388d1371d73278a275fd492878bfb640($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '            </a>
';
                // 'ismycourses' section
                $value = $context->find('ismycourses');
                $buffer .= $this->section304e52547c6ef33e43b00e754450f7c9($context, $indent, $value);
                $buffer .= $indent . '        </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3d52050c30724467dfe80404798d1ab5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <li class="site-menu-item pl-20 {{#isactive}}active{{/isactive}}">
            <a href="javascript:void(0)" data-key="{{key}}" class="py-5"  data-isexpandable="{{isexpandable}}" data-indent="{{get_indent}}" data-showdivider="{{showdivider}}" data-type="{{type}}" data-nodetype="{{nodetype}}" data-collapse="{{collapse}}" data-forceopen="{{forceopen}}" data-isactive="{{isactive}}" data-hidden="{{hidden}}" data-preceedwithhr="{{preceedwithhr}}" {{#parent.key}}data-parent-key="{{.}}"{{/parent.key}}>
                {{> theme_remui/flat_navigation_icon }}
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
                
                $buffer .= $indent . '            <li class="site-menu-item pl-20 ';
                // 'isactive' section
                $value = $context->find('isactive');
                $buffer .= $this->section5749c750acb0d7477dd5257d00cc6d53($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '            <a href="javascript:void(0)" data-key="';
                $value = $this->resolveValue($context->find('key'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="py-5"  data-isexpandable="';
                $value = $this->resolveValue($context->find('isexpandable'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-indent="';
                $value = $this->resolveValue($context->find('get_indent'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-showdivider="';
                $value = $this->resolveValue($context->find('showdivider'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-type="';
                $value = $this->resolveValue($context->find('type'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-nodetype="';
                $value = $this->resolveValue($context->find('nodetype'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-collapse="';
                $value = $this->resolveValue($context->find('collapse'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-forceopen="';
                $value = $this->resolveValue($context->find('forceopen'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-isactive="';
                $value = $this->resolveValue($context->find('isactive'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-hidden="';
                $value = $this->resolveValue($context->find('hidden'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-preceedwithhr="';
                $value = $this->resolveValue($context->find('preceedwithhr'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" ';
                // 'parent.key' section
                $value = $context->findDot('parent.key');
                $buffer .= $this->section2233087813f2f0dc85c21e6f8a0b28de($context, $indent, $value);
                $buffer .= '>
';
                if ($partial = $this->mustache->loadPartial('theme_remui/flat_navigation_icon')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5f9322d030f3c84646da9f41b34b65fd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{#showdivider}}
</li>
<li class="site-menu-category" aria-label="{{get_collectionlabel}}"></li>
    {{/showdivider}}
    {{#action}}
        {{#get_indent}}
            <li class="site-menu-item pl-20 {{#isactive}}active{{/isactive}} {{#hidable}}hidable collapse{{/hidable}}">
            <a href="{{{action}}}" data-key="{{key}}" class="py-5"  data-isexpandable="{{isexpandable}}" data-indent="{{get_indent}}" data-showdivider="{{showdivider}}" data-type="{{type}}" data-nodetype="{{nodetype}}" data-collapse="{{collapse}}" data-forceopen="{{forceopen}}" data-isactive="{{isactive}}" data-hidden="{{hidden}}" data-preceedwithhr="{{preceedwithhr}}" {{#parent.key}}data-parent-key="{{.}}"{{/parent.key}}>
                {{> theme_remui/flat_navigation_icon }}
        {{/get_indent}}

        {{^get_indent}}
            <li class="site-menu-item {{#ismycourses}}has-sub{{/ismycourses}} {{#isactive}}active{{/isactive}}"  title="{{{text}}}"  aria-label="{{firstcollectionlabel}}">
                <a href="{{{action}}}" data-key="{{key}}" class="py-5"  data-isexpandable="{{isexpandable}}" data-indent="{{get_indent}}" data-showdivider="{{showdivider}}" data-type="{{type}}" data-nodetype="{{nodetype}}" data-collapse="{{collapse}}" data-forceopen="{{forceopen}}" data-isactive="{{isactive}}" data-hidden="{{hidden}}" data-preceedwithhr="{{preceedwithhr}}" {{#parent.key}}data-parent-key="{{.}}"{{/parent.key}}>
                    {{> theme_remui/flat_navigation_icon }}
                    <span class="site-menu-title">{{{text}}}</span>
        {{/get_indent}}
           {{#ismycourses}}<span class="site-menu-arrow px-15" id="mycourses-toggler" onclick="return false;"></span>{{/ismycourses}}
            </a>
            {{#ismycourses}}
                <ul class="site-menu-sub">
                    {{#mycourses}}
                    <li class="site-menu-item "  title="{{{text}}}">
                      <a class="animsition-link py-5" href="{{{ config.wwwroot }}}/course/view.php?id={{{key}}}">
                        {{> theme_remui/flat_navigation_icon }}
                        <span class="site-menu-title">{{{text}}}</span>
                      </a>
                    </li>
                    {{/mycourses}}
                    {{#hasmore}}
                        <li class="site-menu-item " title="{{#str}}more, theme_remui{{/str}}">
                          <a class="animsition-link py-5" href="{{{ config.wwwroot }}}/course/index.php?mycourses=1">
                            {{> theme_remui/flat_navigation_icon }}
                            <span class="site-menu-title">{{#str}}more, theme_remui{{/str}}</span>
                          </a>
                        </li>
                    {{/hasmore}}
                </ul>
            {{/ismycourses}}
        </li>
    {{/action}}
    {{^action}}
        {{#get_indent}}
            <li class="site-menu-item pl-20 {{#isactive}}active{{/isactive}}">
            <a href="javascript:void(0)" data-key="{{key}}" class="py-5"  data-isexpandable="{{isexpandable}}" data-indent="{{get_indent}}" data-showdivider="{{showdivider}}" data-type="{{type}}" data-nodetype="{{nodetype}}" data-collapse="{{collapse}}" data-forceopen="{{forceopen}}" data-isactive="{{isactive}}" data-hidden="{{hidden}}" data-preceedwithhr="{{preceedwithhr}}" {{#parent.key}}data-parent-key="{{.}}"{{/parent.key}}>
                {{> theme_remui/flat_navigation_icon }}
        {{/get_indent}}
        {{^get_indent}}
            <li class="site-menu-item {{#isactive}}active{{/isactive}}">
            <a href="javascript:void(0)" data-key="{{key}}" class="py-5">
                {{> theme_remui/flat_navigation_icon }}
        {{/get_indent}}
                <span class="site-menu-title">{{{text}}}</span>
            </a>
        </li>
    {{/action}}

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
                
                // 'showdivider' section
                $value = $context->find('showdivider');
                $buffer .= $this->section4680cf917e50cbb04bce30b0e4652025($context, $indent, $value);
                // 'action' section
                $value = $context->find('action');
                $buffer .= $this->sectionBe21b78bbb995251e74b9e16ad0270cf($context, $indent, $value);
                // 'action' inverted section
                $value = $context->find('action');
                if (empty($value)) {
                    
                    // 'get_indent' section
                    $value = $context->find('get_indent');
                    $buffer .= $this->section3d52050c30724467dfe80404798d1ab5($context, $indent, $value);
                    // 'get_indent' inverted section
                    $value = $context->find('get_indent');
                    if (empty($value)) {
                        
                        $buffer .= $indent . '            <li class="site-menu-item ';
                        // 'isactive' section
                        $value = $context->find('isactive');
                        $buffer .= $this->section5749c750acb0d7477dd5257d00cc6d53($context, $indent, $value);
                        $buffer .= '">
';
                        $buffer .= $indent . '            <a href="javascript:void(0)" data-key="';
                        $value = $this->resolveValue($context->find('key'), $context);
                        $buffer .= call_user_func($this->mustache->getEscape(), $value);
                        $buffer .= '" class="py-5">
';
                        if ($partial = $this->mustache->loadPartial('theme_remui/flat_navigation_icon')) {
                            $buffer .= $partial->renderInternal($context, $indent . '                ');
                        }
                    }
                    $buffer .= $indent . '                <span class="site-menu-title">';
                    $value = $this->resolveValue($context->find('text'), $context);
                    $buffer .= $value;
                    $buffer .= '</span>
';
                    $buffer .= $indent . '            </a>
';
                    $buffer .= $indent . '        </li>
';
                }
                $buffer .= $indent . '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
