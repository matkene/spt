<?php

class __Mustache_968de685a55150f607bc7994a9f86968 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<!-- Footer -->
';
        $buffer .= $indent . '<footer class="site-footer ';
        // 'sitecolor' section
        $value = $context->find('sitecolor');
        $buffer .= $this->section04471ede18e4ed26602ca54c4f6a2077($context, $indent, $value);
        $buffer .= ' ';
        // 'sitecolor' inverted section
        $value = $context->find('sitecolor');
        if (empty($value)) {
            
            $buffer .= ' bg-primary-600 ';
        }
        $buffer .= ' grey-100">
';
        // 'footerdata' section
        $value = $context->find('footerdata');
        $buffer .= $this->sectionFae3b0384daecefca87a3d10ced830fa($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->findDot('output.standard_end_of_body_html'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <!-- screenshot button for homepage -->
';
        // 'customfooter' section
        $value = $context->find('customfooter');
        $buffer .= $this->sectionD69517c89ec5958c577cafa2d1e280cd($context, $indent, $value);
        $buffer .= $indent . '</footer>';

        return $buffer;
    }

    private function section04471ede18e4ed26602ca54c4f6a2077(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' bg-{{sitecolor}}-600 ';
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
                
                $buffer .= ' bg-';
                $value = $this->resolveValue($context->find('sitecolor'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '-600 ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFf54e8ba806a56430376b46cc1792442(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="{{ classes }} text-xs-center">
                <div class="py-30 px-10">
                    <h4 class="card-title mt-10 grey-100">{{ title }}</h4>
                    <p class="card-text">{{{ content }}}</p>
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
                
                $buffer .= $indent . '            <div class="';
                $value = $this->resolveValue($context->find('classes'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' text-xs-center">
';
                $buffer .= $indent . '                <div class="py-30 px-10">
';
                $buffer .= $indent . '                    <h4 class="card-title mt-10 grey-100">';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</h4>
';
                $buffer .= $indent . '                    <p class="card-text">';
                $value = $this->resolveValue($context->find('content'), $context);
                $buffer .= $value;
                $buffer .= '</p>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE3fb2f17b1f054f7dd01e69c8c533992(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' followus, theme_remui ';
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
                
                $buffer .= ' followus, theme_remui ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6f8b99018e9205df28ac75f6bec5d6de(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <a href="{{ facebook }}" target="_blank" class="btn btn-icon btn-round social-facebook m-5"><i class="icon fa-facebook" aria-hidden="true"></i></a>
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
                
                $buffer .= $indent . '                            <a href="';
                $value = $this->resolveValue($context->find('facebook'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" target="_blank" class="btn btn-icon btn-round social-facebook m-5"><i class="icon fa-facebook" aria-hidden="true"></i></a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5b89d35df67103643a635a94562d46a3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <a href="{{ twitter }}" target="_blank" class="btn btn-icon btn-round social-twitter m-5"><i class="icon fa-twitter" aria-hidden="true"></i></a>
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
                
                $buffer .= $indent . '                            <a href="';
                $value = $this->resolveValue($context->find('twitter'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" target="_blank" class="btn btn-icon btn-round social-twitter m-5"><i class="icon fa-twitter" aria-hidden="true"></i></a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD8e44dc2630fc774648bcfe9c5d7ac5e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <a href="{{ linkedin }}" target="_blank" class="btn btn-icon btn-round social-linkedin m-5"><i class="icon fa-linkedin" aria-hidden="true"></i></a>
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
                
                $buffer .= $indent . '                            <a href="';
                $value = $this->resolveValue($context->find('linkedin'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" target="_blank" class="btn btn-icon btn-round social-linkedin m-5"><i class="icon fa-linkedin" aria-hidden="true"></i></a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5550a0789836ee8b0c3de7368ab6afff(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <a href="{{ quora }}" target="_blank" class="btn btn-icon btn-round social-pinterest m-5"><i class="icon fa-quora" aria-hidden="true"></i></a>
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
                
                $buffer .= $indent . '                            <a href="';
                $value = $this->resolveValue($context->find('quora'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" target="_blank" class="btn btn-icon btn-round social-pinterest m-5"><i class="icon fa-quora" aria-hidden="true"></i></a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8b463440da856b147dc01d7fb39d71e5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <a href="{{ gplus }}" target="_blank" class="btn btn-icon btn-round social-google-plus m-5"><i class="icon fa-google-plus" aria-hidden="true"></i></a>
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
                
                $buffer .= $indent . '                            <a href="';
                $value = $this->resolveValue($context->find('gplus'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" target="_blank" class="btn btn-icon btn-round social-google-plus m-5"><i class="icon fa-google-plus" aria-hidden="true"></i></a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCcef56b2a114c113fddee29dac8dd90e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <a href="{{ instagram }}" target="_blank" class="btn btn-icon btn-round social-instagram m-5"><i class="icon fa-instagram" aria-hidden="true"></i></a>
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
                
                $buffer .= $indent . '                            <a href="';
                $value = $this->resolveValue($context->find('instagram'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" target="_blank" class="btn btn-icon btn-round social-instagram m-5"><i class="icon fa-instagram" aria-hidden="true"></i></a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section418d45fd4facf1d756daf39c8b5c101f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <a href="{{ youtube }}" target="_blank" class="btn btn-icon btn-round social-youtube m-5"><i class="icon fa-youtube" aria-hidden="true"></i></a>
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
                
                $buffer .= $indent . '                            <a href="';
                $value = $this->resolveValue($context->find('youtube'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" target="_blank" class="btn btn-icon btn-round social-youtube m-5"><i class="icon fa-youtube" aria-hidden="true"></i></a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2435d98b3e4ea173f076692ba27ffc81(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <a href="{{ pinterest }}" target="_blank" class="btn btn-icon btn-round social-pinterest m-5"><i class="icon fa-pinterest" aria-hidden="true"></i></a>
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
                
                $buffer .= $indent . '                            <a href="';
                $value = $this->resolveValue($context->find('pinterest'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" target="_blank" class="btn btn-icon btn-round social-pinterest m-5"><i class="icon fa-pinterest" aria-hidden="true"></i></a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section84e76bb43af9fa38c79fbb4d7f48fe5e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="{{ classes }} text-xs-center">
                <div class="py-30 px-10">
                    <h4 class="card-title mt-10 grey-100">{{# str }} followus, theme_remui {{/ str }}</h4>
                    <p class="card-text">
                        {{# facebook }}
                            <a href="{{ facebook }}" target="_blank" class="btn btn-icon btn-round social-facebook m-5"><i class="icon fa-facebook" aria-hidden="true"></i></a>
                        {{/ facebook }}
                        {{# twitter }}
                            <a href="{{ twitter }}" target="_blank" class="btn btn-icon btn-round social-twitter m-5"><i class="icon fa-twitter" aria-hidden="true"></i></a>
                        {{/ twitter }}
                        {{# linkedin }}
                            <a href="{{ linkedin }}" target="_blank" class="btn btn-icon btn-round social-linkedin m-5"><i class="icon fa-linkedin" aria-hidden="true"></i></a>
                        {{/ linkedin }}
                        {{# quora }}
                            <a href="{{ quora }}" target="_blank" class="btn btn-icon btn-round social-pinterest m-5"><i class="icon fa-quora" aria-hidden="true"></i></a>
                        {{/ quora }}
                        {{# gplus }}
                            <a href="{{ gplus }}" target="_blank" class="btn btn-icon btn-round social-google-plus m-5"><i class="icon fa-google-plus" aria-hidden="true"></i></a>
                        {{/ gplus }}
                        {{# instagram }}
                            <a href="{{ instagram }}" target="_blank" class="btn btn-icon btn-round social-instagram m-5"><i class="icon fa-instagram" aria-hidden="true"></i></a>
                        {{/ instagram }}
                        {{# youtube }}
                            <a href="{{ youtube }}" target="_blank" class="btn btn-icon btn-round social-youtube m-5"><i class="icon fa-youtube" aria-hidden="true"></i></a>
                        {{/ youtube }}
                        {{# pinterest }}
                            <a href="{{ pinterest }}" target="_blank" class="btn btn-icon btn-round social-pinterest m-5"><i class="icon fa-pinterest" aria-hidden="true"></i></a>
                        {{/ pinterest }}
                        
                    </p>
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
                
                $buffer .= $indent . '            <div class="';
                $value = $this->resolveValue($context->find('classes'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' text-xs-center">
';
                $buffer .= $indent . '                <div class="py-30 px-10">
';
                $buffer .= $indent . '                    <h4 class="card-title mt-10 grey-100">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionE3fb2f17b1f054f7dd01e69c8c533992($context, $indent, $value);
                $buffer .= '</h4>
';
                $buffer .= $indent . '                    <p class="card-text">
';
                // 'facebook' section
                $value = $context->find('facebook');
                $buffer .= $this->section6f8b99018e9205df28ac75f6bec5d6de($context, $indent, $value);
                // 'twitter' section
                $value = $context->find('twitter');
                $buffer .= $this->section5b89d35df67103643a635a94562d46a3($context, $indent, $value);
                // 'linkedin' section
                $value = $context->find('linkedin');
                $buffer .= $this->sectionD8e44dc2630fc774648bcfe9c5d7ac5e($context, $indent, $value);
                // 'quora' section
                $value = $context->find('quora');
                $buffer .= $this->section5550a0789836ee8b0c3de7368ab6afff($context, $indent, $value);
                // 'gplus' section
                $value = $context->find('gplus');
                $buffer .= $this->section8b463440da856b147dc01d7fb39d71e5($context, $indent, $value);
                // 'instagram' section
                $value = $context->find('instagram');
                $buffer .= $this->sectionCcef56b2a114c113fddee29dac8dd90e($context, $indent, $value);
                // 'youtube' section
                $value = $context->find('youtube');
                $buffer .= $this->section418d45fd4facf1d756daf39c8b5c101f($context, $indent, $value);
                // 'pinterest' section
                $value = $context->find('pinterest');
                $buffer .= $this->section2435d98b3e4ea173f076692ba27ffc81($context, $indent, $value);
                $buffer .= $indent . '                        
';
                $buffer .= $indent . '                    </p>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2143849f7ac2ba7f01ca7cf1e800ff02(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' poweredby, theme_remui ';
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
                
                $buffer .= ' poweredby, theme_remui ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section088df38e901d77e2681451cc9a16494e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <a href="https://edwiser.org/remui/" rel="nofollow" target="_blank" >{{# str }} poweredby, theme_remui {{/ str }}</a>
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
                
                $buffer .= $indent . '            <a href="https://edwiser.org/remui/" rel="nofollow" target="_blank" >';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section2143849f7ac2ba7f01ca7cf1e800ff02($context, $indent, $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFae3b0384daecefca87a3d10ced830fa(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="container">
        <div class="row">
           {{# sections }}
            <div class="{{ classes }} text-xs-center">
                <div class="py-30 px-10">
                    <h4 class="card-title mt-10 grey-100">{{ title }}</h4>
                    <p class="card-text">{{{ content }}}</p>
                </div>
            </div>
            {{/ sections }}

            {{# social }}
            <div class="{{ classes }} text-xs-center">
                <div class="py-30 px-10">
                    <h4 class="card-title mt-10 grey-100">{{# str }} followus, theme_remui {{/ str }}</h4>
                    <p class="card-text">
                        {{# facebook }}
                            <a href="{{ facebook }}" target="_blank" class="btn btn-icon btn-round social-facebook m-5"><i class="icon fa-facebook" aria-hidden="true"></i></a>
                        {{/ facebook }}
                        {{# twitter }}
                            <a href="{{ twitter }}" target="_blank" class="btn btn-icon btn-round social-twitter m-5"><i class="icon fa-twitter" aria-hidden="true"></i></a>
                        {{/ twitter }}
                        {{# linkedin }}
                            <a href="{{ linkedin }}" target="_blank" class="btn btn-icon btn-round social-linkedin m-5"><i class="icon fa-linkedin" aria-hidden="true"></i></a>
                        {{/ linkedin }}
                        {{# quora }}
                            <a href="{{ quora }}" target="_blank" class="btn btn-icon btn-round social-pinterest m-5"><i class="icon fa-quora" aria-hidden="true"></i></a>
                        {{/ quora }}
                        {{# gplus }}
                            <a href="{{ gplus }}" target="_blank" class="btn btn-icon btn-round social-google-plus m-5"><i class="icon fa-google-plus" aria-hidden="true"></i></a>
                        {{/ gplus }}
                        {{# instagram }}
                            <a href="{{ instagram }}" target="_blank" class="btn btn-icon btn-round social-instagram m-5"><i class="icon fa-instagram" aria-hidden="true"></i></a>
                        {{/ instagram }}
                        {{# youtube }}
                            <a href="{{ youtube }}" target="_blank" class="btn btn-icon btn-round social-youtube m-5"><i class="icon fa-youtube" aria-hidden="true"></i></a>
                        {{/ youtube }}
                        {{# pinterest }}
                            <a href="{{ pinterest }}" target="_blank" class="btn btn-icon btn-round social-pinterest m-5"><i class="icon fa-pinterest" aria-hidden="true"></i></a>
                        {{/ pinterest }}
                        
                    </p>
                </div>
            </div>
            {{/ social }}
        </div>
    </div>
    
    <!-- bottom sections -->
    <div class="footer-bottom">
        <div class="site-footer-legal pt-5">
            <a href="{{ bottomlink }}">{{{ bottomtext }}}</a>
        </div>
        
        <div class="site-footer-right pt-5">
            {{# poweredby }}
            <a href="https://edwiser.org/remui/" rel="nofollow" target="_blank" >{{# str }} poweredby, theme_remui {{/ str }}</a>
            {{/ poweredby }}
            
            {{{ output.standard_footer_html }}}
            <div id="course-footer">
                {{{ output.course_footer }}}
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
                
                $buffer .= $indent . '    <div class="container">
';
                $buffer .= $indent . '        <div class="row">
';
                // 'sections' section
                $value = $context->find('sections');
                $buffer .= $this->sectionFf54e8ba806a56430376b46cc1792442($context, $indent, $value);
                $buffer .= $indent . '
';
                // 'social' section
                $value = $context->find('social');
                $buffer .= $this->section84e76bb43af9fa38c79fbb4d7f48fe5e($context, $indent, $value);
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '    
';
                $buffer .= $indent . '    <!-- bottom sections -->
';
                $buffer .= $indent . '    <div class="footer-bottom">
';
                $buffer .= $indent . '        <div class="site-footer-legal pt-5">
';
                $buffer .= $indent . '            <a href="';
                $value = $this->resolveValue($context->find('bottomlink'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('bottomtext'), $context);
                $buffer .= $value;
                $buffer .= '</a>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '        
';
                $buffer .= $indent . '        <div class="site-footer-right pt-5">
';
                // 'poweredby' section
                $value = $context->find('poweredby');
                $buffer .= $this->section088df38e901d77e2681451cc9a16494e($context, $indent, $value);
                $buffer .= $indent . '            
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->findDot('output.standard_footer_html'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '            <div id="course-footer">
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->findDot('output.course_footer'), $context);
                $buffer .= $value;
                $buffer .= '
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

    private function sectionD69517c89ec5958c577cafa2d1e280cd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{{customfooter}}}
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
                
                $buffer .= $indent . '        ';
                $value = $this->resolveValue($context->find('customfooter'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
