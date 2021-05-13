<?php

class __Mustache_6b64b04fa16514e7476974ee1a445c17 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<style>
';
        $buffer .= $indent . '.sections-loader-wrapper {
';
        $buffer .= $indent . '    position: fixed;
';
        $buffer .= $indent . '    left: 0;
';
        $buffer .= $indent . '    top: 0;
';
        $buffer .= $indent . '    width: 100%;
';
        $buffer .= $indent . '    height: 100%;
';
        $buffer .= $indent . '    background: white;
';
        $buffer .= $indent . '    opacity: 0;
';
        $buffer .= $indent . '    transition: opacity 300ms linear;
';
        $buffer .= $indent . '    z-index: 1701;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '.sections-loader-wrapper.show {
';
        $buffer .= $indent . '    opacity: 1;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '.section-loader-wrapper {
';
        $buffer .= $indent . '    position: absolute;
';
        $buffer .= $indent . '    top: 0;
';
        $buffer .= $indent . '    left: 0;
';
        $buffer .= $indent . '    height: 100%;
';
        $buffer .= $indent . '    width: 100%;
';
        $buffer .= $indent . '    background: rgba(255,255,255,0.7);
';
        $buffer .= $indent . '    z-index: 3;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '.sections-loader-wrapper .sections-loader, .section-loader-wrapper .section-loader {
';
        $buffer .= $indent . '    position: absolute;
';
        $buffer .= $indent . '    left: 50%;
';
        $buffer .= $indent . '    top: 50%;
';
        $buffer .= $indent . '    transform: translate(-50%, -50%);
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '.sections-loader-wrapper .sections-loader img, .section-loader-wrapper .section-loader img {
';
        $buffer .= $indent . '    height: auto;
';
        $buffer .= $indent . '    width:  140px;
';
        $buffer .= $indent . '    max-width: 140px;
';
        $buffer .= $indent . '}
';
        // 'transparentheader' section
        $value = $context->find('transparentheader');
        $buffer .= $this->sectionAb5216f9bab9ec7944d794dc154cbb70($context, $indent, $value);
        $buffer .= $indent . '</style>
';
        $buffer .= $indent . '<div class="sections-loader-wrapper show">
';
        $buffer .= $indent . '    <div class="sections-loader">
';
        // 'loader' section
        $value = $context->find('loader');
        $buffer .= $this->sectionD8ccbf7bb3f7b1429fed768ecbc5b11a($context, $indent, $value);
        // 'loader' inverted section
        $value = $context->find('loader');
        if (empty($value)) {
            
            $buffer .= $indent . '        ';
            // 'pix' section
            $value = $context->find('pix');
            $buffer .= $this->section71124ebac115908bcbe1976ab8ba2763($context, $indent, $value);
            $buffer .= '
';
        }
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        $value = $this->resolveValue($context->findDot('output.course_content_header'), $context);
        $buffer .= $indent . $value;
        $buffer .= '
';
        $buffer .= $indent . '    <div class="home-sections ';
        // 'userisediting' section
        $value = $context->find('userisediting');
        $buffer .= $this->sectionEe534bc00319ee64bce3640e9767ecc4($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <section ';
        // 'hasdefaultsections' section
        $value = $context->find('hasdefaultsections');
        $buffer .= $this->sectionBd5018c248b3b5842bf40b438092259f($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '    ';
        // 'hasdefaultsections' inverted section
        $value = $context->find('hasdefaultsections');
        if (empty($value)) {
            
            $buffer .= 'style="margin-top: -25px;"';
        }
        $buffer .= '>
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->findDot('output.main_content'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '    </section>
';
        $buffer .= $indent . '
';
        $value = $this->resolveValue($context->findDot('output.course_content_footer'), $context);
        $buffer .= $indent . $value;
        $buffer .= '
';
        $buffer .= $indent . '
';
        // 'userisediting' section
        $value = $context->find('userisediting');
        $buffer .= $this->sectionD14c8caae79e326b5b80118c7f046c29($context, $indent, $value);
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->sectionD9bf26c1780d3f1785132f8814a06aba($context, $indent, $value);

        return $buffer;
    }

    private function sectionAb5216f9bab9ec7944d794dc154cbb70(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
body#page-site-index.latest-frontpage.site-menubar-fold.animate-header .site-navbar .navbar-brand-logo i, body#page-site-index.latest-frontpage.site-menubar-fold.animate-header .site-navbar .nav-link {
    color: {{headercolor}};
}
body#page-site-index.latest-frontpage.site-menubar-fold.animate-header .site-navbar .navbar-container .hamburger .hamburger-bar, body#page-site-index.latest-frontpage.site-menubar-fold.animate-header .site-navbar .navbar-container .hamburger:after, body#page-site-index.latest-frontpage.site-menubar-fold.animate-header .site-navbar .navbar-container .hamburger:before {
    background: {{headercolor}};
}
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
                
                $buffer .= $indent . 'body#page-site-index.latest-frontpage.site-menubar-fold.animate-header .site-navbar .navbar-brand-logo i, body#page-site-index.latest-frontpage.site-menubar-fold.animate-header .site-navbar .nav-link {
';
                $buffer .= $indent . '    color: ';
                $value = $this->resolveValue($context->find('headercolor'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ';
';
                $buffer .= $indent . '}
';
                $buffer .= $indent . 'body#page-site-index.latest-frontpage.site-menubar-fold.animate-header .site-navbar .navbar-container .hamburger .hamburger-bar, body#page-site-index.latest-frontpage.site-menubar-fold.animate-header .site-navbar .navbar-container .hamburger:after, body#page-site-index.latest-frontpage.site-menubar-fold.animate-header .site-navbar .navbar-container .hamburger:before {
';
                $buffer .= $indent . '    background: ';
                $value = $this->resolveValue($context->find('headercolor'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ';
';
                $buffer .= $indent . '}
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD8ccbf7bb3f7b1429fed768ecbc5b11a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <img class="icon" src="{{loader}}"/>
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
                
                $buffer .= $indent . '        <img class="icon" src="';
                $value = $this->resolveValue($context->find('loader'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"/>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section71124ebac115908bcbe1976ab8ba2763(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' owl_loader, local_remuihomepage ';
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
                
                $buffer .= ' owl_loader, local_remuihomepage ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEe534bc00319ee64bce3640e9767ecc4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'editing';
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
                
                $buffer .= 'editing';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBd5018c248b3b5842bf40b438092259f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'class="default-sections panel invisible p-lg-50 p-md-30 p-20 m-b-0"';
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
                
                $buffer .= 'class="default-sections panel invisible p-lg-50 p-md-30 p-20 m-b-0"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFa2b9ba8548ba7fef9f019ea32f0f854(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'editingison, local_remuihomepage';
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
                
                $buffer .= 'editingison, local_remuihomepage';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD14c8caae79e326b5b80118c7f046c29(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="editing-alert">
        <p class="m-0">{{#str}}editingison, local_remuihomepage{{/str}}</p>
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
                
                $buffer .= $indent . '    <div class="editing-alert">
';
                $buffer .= $indent . '        <p class="m-0">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionFa2b9ba8548ba7fef9f019ea32f0f854($context, $indent, $value);
                $buffer .= '</p>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD9bf26c1780d3f1785132f8814a06aba(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'local_remuihomepage/frontpage\'], function (FrontPage) {
    FrontPage.init({{contextid}}, {{userisediting}});
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
                
                $buffer .= $indent . 'require([\'local_remuihomepage/frontpage\'], function (FrontPage) {
';
                $buffer .= $indent . '    FrontPage.init(';
                $value = $this->resolveValue($context->find('contextid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ', ';
                $value = $this->resolveValue($context->find('userisediting'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ');
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
