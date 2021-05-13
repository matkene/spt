<?php

class __Mustache_06c27bf5544f473b1c7e726b5cfaf526 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="page-brand-info">
';
        // 'logopos' inverted section
        $value = $context->find('logopos');
        if (empty($value)) {
            
            $buffer .= $indent . '        <div class="brand">
';
            // 'loginpage_context' section
            $value = $context->find('loginpage_context');
            $buffer .= $this->section01c6712e130e19fb3dc58d2af3d167a0($context, $indent, $value);
            $buffer .= $indent . '        </div>
';
        }
        $buffer .= $indent . '
';
        // 'sitedesc' section
        $value = $context->find('sitedesc');
        $buffer .= $this->section5f52659af6ad7753dfbc0190bddc8865($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'sitedesc' inverted section
        $value = $context->find('sitedesc');
        if (empty($value)) {
            
            // 'hasinstructions' section
            $value = $context->find('hasinstructions');
            $buffer .= $this->section03f6e0f3294bd6fbd3efea3d60fe4f90($context, $indent, $value);
        }
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="page-login-main animation-slide-right animation-duration-1">
';
        $buffer .= $indent . '
';
        // 'cansignup' section
        $value = $context->find('cansignup');
        $buffer .= $this->section7e8ae6675fc4e3af56473f3ca39e5376($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'error' section
        $value = $context->find('error');
        $buffer .= $this->section543ca245e8a8cb314f56313a04e74d24($context, $indent, $value);
        $buffer .= $indent . '    <div class="brand ';
        // 'logopos' inverted section
        $value = $context->find('logopos');
        if (empty($value)) {
            
            $buffer .= 'hidden-md-up';
        }
        $buffer .= ' text-center">
';
        // 'loginpage_context' section
        $value = $context->find('loginpage_context');
        $buffer .= $this->section78147717d513f7e36f1d84ef84e018f4($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <h3 class="font-size-24">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section437badc16e3d879709cf3484728d15d3($context, $indent, $value);
        $buffer .= '</h3>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <form class="w-p100" action="';
        $value = $this->resolveValue($context->find('loginurl'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" method="post" id="login">
';
        $buffer .= $indent . '        <input id="anchor" type="hidden" name="anchor" value="">
';
        $buffer .= $indent . '        <script>document.getElementById(\'anchor\').value = location.hash;</script>
';
        $buffer .= $indent . '    
';
        $buffer .= $indent . '        <div class="form-group">
';
        $buffer .= $indent . '            <label for="username" class="sr-only">
';
        // 'canloginbyemail' inverted section
        $value = $context->find('canloginbyemail');
        if (empty($value)) {
            
            $buffer .= $indent . '                    ';
            // 'str' section
            $value = $context->find('str');
            $buffer .= $this->section27e9419edc620e0e1872d2a6521f1533($context, $indent, $value);
            $buffer .= '
';
        }
        // 'canloginbyemail' section
        $value = $context->find('canloginbyemail');
        $buffer .= $this->section6cdf3e466c5b2db90c46e0fe86fb8cc5($context, $indent, $value);
        $buffer .= $indent . '            </label>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            <input type="text" class="form-control" id="username" name="username" placeholder=';
        // 'quote' section
        $value = $context->find('quote');
        $buffer .= $this->section4a2b2050243eb4dff6ce2b11212bbbcb($context, $indent, $value);
        $buffer .= '>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <div class="form-group">
';
        $buffer .= $indent . '            <label for="password" class="sr-only">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionE056be559d6d01a9bd2bf6f760f8e3e3($context, $indent, $value);
        $buffer .= '</label>
';
        $buffer .= $indent . '            <input type="password" name="password" id="password" value="" class="form-control"placeholder=';
        // 'quote' section
        $value = $context->find('quote');
        $buffer .= $this->section1e0c7d916e3932461ff09cf034c710f8($context, $indent, $value);
        $buffer .= '>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="form-group">
';
        $buffer .= $indent . '           <input type="hidden" name="logintoken" value="';
        $value = $this->resolveValue($context->find('logintoken'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        
';
        $buffer .= $indent . '        <div class="form-group clearfix">
';
        // 'rememberusername' section
        $value = $context->find('rememberusername');
        $buffer .= $this->section6340bbb7ff07752b392a0a87a5987fe9($context, $indent, $value);
        $buffer .= $indent . '            <a class="float-right" href="';
        $value = $this->resolveValue($context->find('forgotpasswordurl'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section9590e3c0e25cf1d81bdcef006f93b7df($context, $indent, $value);
        $buffer .= '</a>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        
';
        $buffer .= $indent . '        <button type="submit" class="btn btn-primary btn-block" id="loginbtn">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionB15dee8971ab065bf4d6402b60d852be($context, $indent, $value);
        $buffer .= '</button>
';
        $buffer .= $indent . '    </form>
';
        $buffer .= $indent . '
';
        // 'hasinstructions' section
        $value = $context->find('hasinstructions');
        $buffer .= $this->section541b90ed409314a123b45db1cc26fd69($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'canloginasguest' section
        $value = $context->find('canloginasguest');
        $buffer .= $this->sectionA54d43d5ea3c385902500660f6d206fe($context, $indent, $value);
        $buffer .= $indent . '    
';
        $buffer .= $indent . '    <!-- <div class="forgetpass m-t-1">
';
        $buffer .= $indent . '        <p><a href="';
        $value = $this->resolveValue($context->find('forgotpasswordurl'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section6aa95a7e496f5307b40bee7262bd9321($context, $indent, $value);
        $buffer .= '</a></p>
';
        $buffer .= $indent . '    </div> -->
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="hidden-xs-up">
';
        $buffer .= $indent . '        ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section946f040476794b323defa7b00688109b($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->find('cookieshelpiconformatted'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        // 'hasidentityproviders' section
        $value = $context->find('hasidentityproviders');
        $buffer .= $this->section62f0d04f9055563e9287f28952601e87($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <footer class="page-copyright">
';
        // 'loginsocial_context' section
        $value = $context->find('loginsocial_context');
        $buffer .= $this->section62a91e5aa8c741df2a109cc6bb8def35($context, $indent, $value);
        $buffer .= $indent . '    </footer>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->section1020ab5080a8f852902fc6a7fbbfa3c0($context, $indent, $value);

        return $buffer;
    }

    private function section3dc767155e04406c618c103f5a5ede4c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <h3 class="brand-text font-size-40">
                        <i class="fa fa-{{siteicon}}"></i> {{{ sitename }}}
                    </h3>
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
                
                $buffer .= $indent . '                    <h3 class="brand-text font-size-40">
';
                $buffer .= $indent . '                        <i class="fa fa-';
                $value = $this->resolveValue($context->find('siteicon'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"></i> ';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                    </h3>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8e6f6db66b14d97c2736557069e4b36e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <img src="{{logourl}}" class="brand-img w-350" title="{{sitename}}" alt="{{sitename}}"/>
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
                
                $buffer .= $indent . '                    <img src="';
                $value = $this->resolveValue($context->find('logourl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="brand-img w-350" title="';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" alt="';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"/>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section01c6712e130e19fb3dc58d2af3d167a0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{# isiconsitename }}
                    <h3 class="brand-text font-size-40">
                        <i class="fa fa-{{siteicon}}"></i> {{{ sitename }}}
                    </h3>
                {{/ isiconsitename }}
              
                {{# islogo }}
                    <img src="{{logourl}}" class="brand-img w-350" title="{{sitename}}" alt="{{sitename}}"/>
                {{/ islogo }}
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
                
                // 'isiconsitename' section
                $value = $context->find('isiconsitename');
                $buffer .= $this->section3dc767155e04406c618c103f5a5ede4c($context, $indent, $value);
                $buffer .= $indent . '              
';
                // 'islogo' section
                $value = $context->find('islogo');
                $buffer .= $this->section8e6f6db66b14d97c2736557069e4b36e($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5f52659af6ad7753dfbc0190bddc8865(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <p class="font-size-20">{{{sitedesc}}}</p>
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
                
                $buffer .= $indent . '        <p class="font-size-20">';
                $value = $this->resolveValue($context->find('sitedesc'), $context);
                $buffer .= $value;
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section03f6e0f3294bd6fbd3efea3d60fe4f90(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <p class="font-size-20">{{{instructions}}}</p>
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
                
                $buffer .= $indent . '        <p class="font-size-20">';
                $value = $this->resolveValue($context->find('instructions'), $context);
                $buffer .= $value;
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section78c7558fe34a1190743ac70d6d336ab2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' tocreatenewaccount ';
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
                
                $buffer .= ' tocreatenewaccount ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7e8ae6675fc4e3af56473f3ca39e5376(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="sr-only">
            <a href="{{signupurl}}">{{#str}} tocreatenewaccount {{/str}}</a>
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
                
                $buffer .= $indent . '        <div class="sr-only">
';
                $buffer .= $indent . '            <a href="';
                $value = $this->resolveValue($context->find('signupurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section78c7558fe34a1190743ac70d6d336ab2($context, $indent, $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section543ca245e8a8cb314f56313a04e74d24(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="loginerrors mt-1">
            <div class="alert alert-icon alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <a href="#" id="loginerrormessage" class="text-danger">{{error}}</a>
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
                
                $buffer .= $indent . '        <div class="loginerrors mt-1">
';
                $buffer .= $indent . '            <div class="alert alert-icon alert-danger alert-dismissible" role="alert">
';
                $buffer .= $indent . '                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
';
                $buffer .= $indent . '                    <span aria-hidden="true">&times;</span>
';
                $buffer .= $indent . '                </button>
';
                $buffer .= $indent . '                <a href="#" id="loginerrormessage" class="text-danger">';
                $value = $this->resolveValue($context->find('error'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8156fa4ed0c938ab39cc90fa326f2315(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
              <h3 class="font-size-24">
                  <i class="fa fa-{{siteicon}}"></i> {{{ sitename }}}
              </h3>
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
                
                $buffer .= $indent . '              <h3 class="font-size-24">
';
                $buffer .= $indent . '                  <i class="fa fa-';
                $value = $this->resolveValue($context->find('siteicon'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"></i> ';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '              </h3>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3da4f48d7fcdeb93c963f8383976a82d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
              <img src="{{logourl}}" class="brand-img w-p100" title="{{sitename}}" alt="{{sitename}}"/>
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
                
                $buffer .= $indent . '              <img src="';
                $value = $this->resolveValue($context->find('logourl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="brand-img w-p100" title="';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" alt="';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"/>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section78147717d513f7e36f1d84ef84e018f4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
          {{# isiconsitename }}
              <h3 class="font-size-24">
                  <i class="fa fa-{{siteicon}}"></i> {{{ sitename }}}
              </h3>
          {{/ isiconsitename }}
          
          {{# islogo }}
              <img src="{{logourl}}" class="brand-img w-p100" title="{{sitename}}" alt="{{sitename}}"/>
          {{/ islogo }}
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
                
                // 'isiconsitename' section
                $value = $context->find('isiconsitename');
                $buffer .= $this->section8156fa4ed0c938ab39cc90fa326f2315($context, $indent, $value);
                $buffer .= $indent . '          
';
                // 'islogo' section
                $value = $context->find('islogo');
                $buffer .= $this->section3da4f48d7fcdeb93c963f8383976a82d($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section437badc16e3d879709cf3484728d15d3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' signin, theme_remui ';
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
                
                $buffer .= ' signin, theme_remui ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section27e9419edc620e0e1872d2a6521f1533(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' username ';
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
                
                $buffer .= ' username ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section22141a6741c33f407ef6171795337eec(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' usernameemail ';
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
                
                $buffer .= ' usernameemail ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6cdf3e466c5b2db90c46e0fe86fb8cc5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{#str}} usernameemail {{/str}}
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
                
                $buffer .= $indent . '                    ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section22141a6741c33f407ef6171795337eec($context, $indent, $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFea69428308e6a733cfeebf7670bdc01(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'username';
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
                
                $buffer .= 'username';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section983b6843353faa33a83a9ec3069863a3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'usernameemail';
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
                
                $buffer .= 'usernameemail';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1cfee3b9563446af7cf73b3dabe83fe5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#str}}usernameemail{{/str}}';
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
                
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section983b6843353faa33a83a9ec3069863a3($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4a2b2050243eb4dff6ce2b11212bbbcb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{^canloginbyemail}}{{#str}}username{{/str}}{{/canloginbyemail}}{{#canloginbyemail}}{{#str}}usernameemail{{/str}}{{/canloginbyemail}}';
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
                
                // 'canloginbyemail' inverted section
                $value = $context->find('canloginbyemail');
                if (empty($value)) {
                    
                    // 'str' section
                    $value = $context->find('str');
                    $buffer .= $this->sectionFea69428308e6a733cfeebf7670bdc01($context, $indent, $value);
                }
                // 'canloginbyemail' section
                $value = $context->find('canloginbyemail');
                $buffer .= $this->section1cfee3b9563446af7cf73b3dabe83fe5($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE056be559d6d01a9bd2bf6f760f8e3e3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' password ';
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
                
                $buffer .= ' password ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4e50d9b1632f258e8c10be3e2ed759be(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'password';
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
                
                $buffer .= 'password';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1e0c7d916e3932461ff09cf034c710f8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#str}}password{{/str}}';
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
                
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section4e50d9b1632f258e8c10be3e2ed759be($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE6c044fe8710d3502dd5cb9686c32f3f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'checked="checked"';
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
                
                $buffer .= 'checked="checked"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAde9318c94c2f3a55f9a22a57e193ad0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' rememberusername, admin ';
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
                
                $buffer .= ' rememberusername, admin ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6340bbb7ff07752b392a0a87a5987fe9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="checkbox-custom checkbox-inline checkbox-primary float-left rememberpass">
                    <input type="checkbox" id="rememberusername" name="rememberusername" value="1" {{#username}}checked="checked"{{/username}} />
                    <label for="rememberusername">{{#str}} rememberusername, admin {{/str}}</label>
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
                
                $buffer .= $indent . '                <div class="checkbox-custom checkbox-inline checkbox-primary float-left rememberpass">
';
                $buffer .= $indent . '                    <input type="checkbox" id="rememberusername" name="rememberusername" value="1" ';
                // 'username' section
                $value = $context->find('username');
                $buffer .= $this->sectionE6c044fe8710d3502dd5cb9686c32f3f($context, $indent, $value);
                $buffer .= ' />
';
                $buffer .= $indent . '                    <label for="rememberusername">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionAde9318c94c2f3a55f9a22a57e193ad0($context, $indent, $value);
                $buffer .= '</label>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9590e3c0e25cf1d81bdcef006f93b7df(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' forgotpassword, theme_remui ';
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
                
                $buffer .= ' forgotpassword, theme_remui ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB15dee8971ab065bf4d6402b60d852be(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'login';
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
                
                $buffer .= 'login';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section32cd50b3caf44627cabfa81985452bd4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' noaccount, theme_remui ';
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
                
                $buffer .= ' noaccount, theme_remui ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section47f819a53e4575a4e7767be1939ab3bf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'startsignup';
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
                
                $buffer .= 'startsignup';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section48ef5230cfe90ede77a79a9213a56014(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <p>{{# str }} noaccount, theme_remui {{/ str }} <a href="{{signupurl}}">{{#str}}startsignup{{/str}}</a></p>
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
                
                $buffer .= $indent . '        <p>';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section32cd50b3caf44627cabfa81985452bd4($context, $indent, $value);
                $buffer .= ' <a href="';
                $value = $this->resolveValue($context->find('signupurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section47f819a53e4575a4e7767be1939ab3bf($context, $indent, $value);
                $buffer .= '</a></p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section541b90ed409314a123b45db1cc26fd69(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{#cansignup}}
        <p>{{# str }} noaccount, theme_remui {{/ str }} <a href="{{signupurl}}">{{#str}}startsignup{{/str}}</a></p>
        {{/cansignup}}
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
                
                // 'cansignup' section
                $value = $context->find('cansignup');
                $buffer .= $this->section48ef5230cfe90ede77a79a9213a56014($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section93e4b62aaf677bf7878b06c5ac540671(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'someallowguest';
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
                
                $buffer .= 'someallowguest';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section017c9686023b74877131737c59ff1162(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'loginguest';
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
                
                $buffer .= 'loginguest';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA54d43d5ea3c385902500660f6d206fe(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="form-group clearfix">
            <!-- {{#str}}someallowguest{{/str}} -->
            <form action="{{loginurl}}" method="post" id="guestlogin" class="m-0 w-p100">
                <input type="hidden" name="username" value="guest" />
                <input type="hidden" name="password" value="guest" />
                <input type="hidden" name="logintoken" value="{{logintoken}}">
                <button class="btn btn-default btn-block" type="submit">{{#str}}loginguest{{/str}}</button>
            </form>
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
                
                $buffer .= $indent . '        <div class="form-group clearfix">
';
                $buffer .= $indent . '            <!-- ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section93e4b62aaf677bf7878b06c5ac540671($context, $indent, $value);
                $buffer .= ' -->
';
                $buffer .= $indent . '            <form action="';
                $value = $this->resolveValue($context->find('loginurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" method="post" id="guestlogin" class="m-0 w-p100">
';
                $buffer .= $indent . '                <input type="hidden" name="username" value="guest" />
';
                $buffer .= $indent . '                <input type="hidden" name="password" value="guest" />
';
                $buffer .= $indent . '                <input type="hidden" name="logintoken" value="';
                $value = $this->resolveValue($context->find('logintoken'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                <button class="btn btn-default btn-block" type="submit">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section017c9686023b74877131737c59ff1162($context, $indent, $value);
                $buffer .= '</button>
';
                $buffer .= $indent . '            </form>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6aa95a7e496f5307b40bee7262bd9321(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'forgotten';
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
                
                $buffer .= 'forgotten';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section946f040476794b323defa7b00688109b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' cookiesenabled ';
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
                
                $buffer .= ' cookiesenabled ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE384f0e9b1fcc321a1a78dba1d43f63f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' potentialidps, auth ';
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
                
                $buffer .= ' potentialidps, auth ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5fc38b71bab296fb0efdd08834d72587(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{name}}';
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
                
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section60c83f7b22404177e8062ecd72843cf0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <img src="{{iconurl}}" alt="" width="24" height="24"/>
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
                
                $buffer .= $indent . '                            <img src="';
                $value = $this->resolveValue($context->find('iconurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" alt="" width="24" height="24"/>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEd305c4f5829be09158a846d480f6b75(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="potentialidp">
                    <a href="{{url}}" title={{#quote}}{{name}}{{/quote}} class="btn btn-secondary btn-block">
                        {{#iconurl}}
                            <img src="{{iconurl}}" alt="" width="24" height="24"/>
                        {{/iconurl}}
                        {{name}}
                    </a>
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
                
                $buffer .= $indent . '                <div class="potentialidp">
';
                $buffer .= $indent . '                    <a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" title=';
                // 'quote' section
                $value = $context->find('quote');
                $buffer .= $this->section5fc38b71bab296fb0efdd08834d72587($context, $indent, $value);
                $buffer .= ' class="btn btn-secondary btn-block">
';
                // 'iconurl' section
                $value = $context->find('iconurl');
                $buffer .= $this->section60c83f7b22404177e8062ecd72843cf0($context, $indent, $value);
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '
';
                $buffer .= $indent . '                    </a>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section62f0d04f9055563e9287f28952601e87(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <h6 class="m-t-2">{{#str}} potentialidps, auth {{/str}}</h6>
        <div class="potentialidplist" class="m-t-1">
            {{#identityproviders}}
                <div class="potentialidp">
                    <a href="{{url}}" title={{#quote}}{{name}}{{/quote}} class="btn btn-secondary btn-block">
                        {{#iconurl}}
                            <img src="{{iconurl}}" alt="" width="24" height="24"/>
                        {{/iconurl}}
                        {{name}}
                    </a>
                </div>
            {{/identityproviders}}
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
                
                $buffer .= $indent . '        <h6 class="m-t-2">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionE384f0e9b1fcc321a1a78dba1d43f63f($context, $indent, $value);
                $buffer .= '</h6>
';
                $buffer .= $indent . '        <div class="potentialidplist" class="m-t-1">
';
                // 'identityproviders' section
                $value = $context->find('identityproviders');
                $buffer .= $this->sectionEd305c4f5829be09158a846d480f6b75($context, $indent, $value);
                $buffer .= $indent . '        </div>
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

    private function section282a103b6a2c63edbfe9a534deedd26e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <a href="{{ facebook }}" class="btn btn-icon btn-round social-facebook m-5"><i class="icon fa-facebook" aria-hidden="true"></i></a>
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
                
                $buffer .= $indent . '                <a href="';
                $value = $this->resolveValue($context->find('facebook'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="btn btn-icon btn-round social-facebook m-5"><i class="icon fa-facebook" aria-hidden="true"></i></a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0ce6992ff6b13c38eaa9822ee93b5978(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <a href="{{ twitter }}" class="btn btn-icon btn-round social-twitter m-5"><i class="icon fa-twitter" aria-hidden="true"></i></a>
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
                
                $buffer .= $indent . '                <a href="';
                $value = $this->resolveValue($context->find('twitter'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="btn btn-icon btn-round social-twitter m-5"><i class="icon fa-twitter" aria-hidden="true"></i></a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAb49c08d8d7a2d23cbf74372be1ab621(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <a href="{{ linkedin }}" class="btn btn-icon btn-round social-linkedin m-5"><i class="icon fa-linkedin" aria-hidden="true"></i></a>
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
                
                $buffer .= $indent . '                <a href="';
                $value = $this->resolveValue($context->find('linkedin'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="btn btn-icon btn-round social-linkedin m-5"><i class="icon fa-linkedin" aria-hidden="true"></i></a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA3d46a5e94da4767a308f9ec657ffb24(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <a href="{{ gplus }}" class="btn btn-icon btn-round social-google-plus m-5"><i class="icon fa-google-plus" aria-hidden="true"></i></a>
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
                
                $buffer .= $indent . '                <a href="';
                $value = $this->resolveValue($context->find('gplus'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="btn btn-icon btn-round social-google-plus m-5"><i class="icon fa-google-plus" aria-hidden="true"></i></a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section931be0cc6c01b69f981f62555bb1cfdf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <a href="{{ instagram }}" class="btn btn-icon btn-round social-instagram m-5"><i class="icon fa-instagram" aria-hidden="true"></i></a>
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
                
                $buffer .= $indent . '                <a href="';
                $value = $this->resolveValue($context->find('instagram'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="btn btn-icon btn-round social-instagram m-5"><i class="icon fa-instagram" aria-hidden="true"></i></a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDc60286462d0bb47c6bc92532b5ebf91(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <a href="{{ youtube }}" class="btn btn-icon btn-round social-youtube m-5"><i class="icon fa-youtube" aria-hidden="true"></i></a>
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
                
                $buffer .= $indent . '                <a href="';
                $value = $this->resolveValue($context->find('youtube'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="btn btn-icon btn-round social-youtube m-5"><i class="icon fa-youtube" aria-hidden="true"></i></a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBcd07c296387d23c17330a1f63fb1f50(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <a href="{{ pinterest }}" class="btn btn-icon btn-round social-pinterest m-5"><i class="icon fa-pinterest" aria-hidden="true"></i></a>
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
                
                $buffer .= $indent . '                <a href="';
                $value = $this->resolveValue($context->find('pinterest'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="btn btn-icon btn-round social-pinterest m-5"><i class="icon fa-pinterest" aria-hidden="true"></i></a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section76b3b046895965512eeee38c82b47765(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <p>{{# str }} followus, theme_remui {{/ str }}</p>
        <div class="social">
            {{# facebook }}
                <a href="{{ facebook }}" class="btn btn-icon btn-round social-facebook m-5"><i class="icon fa-facebook" aria-hidden="true"></i></a>
            {{/ facebook }}
            {{# twitter }}
                <a href="{{ twitter }}" class="btn btn-icon btn-round social-twitter m-5"><i class="icon fa-twitter" aria-hidden="true"></i></a>
            {{/ twitter }}
            {{# linkedin }}
                <a href="{{ linkedin }}" class="btn btn-icon btn-round social-linkedin m-5"><i class="icon fa-linkedin" aria-hidden="true"></i></a>
            {{/ linkedin }}
            {{# gplus }}
                <a href="{{ gplus }}" class="btn btn-icon btn-round social-google-plus m-5"><i class="icon fa-google-plus" aria-hidden="true"></i></a>
            {{/ gplus }}
            {{# instagram }}
                <a href="{{ instagram }}" class="btn btn-icon btn-round social-instagram m-5"><i class="icon fa-instagram" aria-hidden="true"></i></a>
            {{/ instagram }}
            {{# youtube }}
                <a href="{{ youtube }}" class="btn btn-icon btn-round social-youtube m-5"><i class="icon fa-youtube" aria-hidden="true"></i></a>
            {{/ youtube }}
            {{# pinterest }}
                <a href="{{ pinterest }}" class="btn btn-icon btn-round social-pinterest m-5"><i class="icon fa-pinterest" aria-hidden="true"></i></a>
            {{/ pinterest }}
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
                
                $buffer .= $indent . '        <p>';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionE3fb2f17b1f054f7dd01e69c8c533992($context, $indent, $value);
                $buffer .= '</p>
';
                $buffer .= $indent . '        <div class="social">
';
                // 'facebook' section
                $value = $context->find('facebook');
                $buffer .= $this->section282a103b6a2c63edbfe9a534deedd26e($context, $indent, $value);
                // 'twitter' section
                $value = $context->find('twitter');
                $buffer .= $this->section0ce6992ff6b13c38eaa9822ee93b5978($context, $indent, $value);
                // 'linkedin' section
                $value = $context->find('linkedin');
                $buffer .= $this->sectionAb49c08d8d7a2d23cbf74372be1ab621($context, $indent, $value);
                // 'gplus' section
                $value = $context->find('gplus');
                $buffer .= $this->sectionA3d46a5e94da4767a308f9ec657ffb24($context, $indent, $value);
                // 'instagram' section
                $value = $context->find('instagram');
                $buffer .= $this->section931be0cc6c01b69f981f62555bb1cfdf($context, $indent, $value);
                // 'youtube' section
                $value = $context->find('youtube');
                $buffer .= $this->sectionDc60286462d0bb47c6bc92532b5ebf91($context, $indent, $value);
                // 'pinterest' section
                $value = $context->find('pinterest');
                $buffer .= $this->sectionBcd07c296387d23c17330a1f63fb1f50($context, $indent, $value);
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section62a91e5aa8c741df2a109cc6bb8def35(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{# social }}
        <p>{{# str }} followus, theme_remui {{/ str }}</p>
        <div class="social">
            {{# facebook }}
                <a href="{{ facebook }}" class="btn btn-icon btn-round social-facebook m-5"><i class="icon fa-facebook" aria-hidden="true"></i></a>
            {{/ facebook }}
            {{# twitter }}
                <a href="{{ twitter }}" class="btn btn-icon btn-round social-twitter m-5"><i class="icon fa-twitter" aria-hidden="true"></i></a>
            {{/ twitter }}
            {{# linkedin }}
                <a href="{{ linkedin }}" class="btn btn-icon btn-round social-linkedin m-5"><i class="icon fa-linkedin" aria-hidden="true"></i></a>
            {{/ linkedin }}
            {{# gplus }}
                <a href="{{ gplus }}" class="btn btn-icon btn-round social-google-plus m-5"><i class="icon fa-google-plus" aria-hidden="true"></i></a>
            {{/ gplus }}
            {{# instagram }}
                <a href="{{ instagram }}" class="btn btn-icon btn-round social-instagram m-5"><i class="icon fa-instagram" aria-hidden="true"></i></a>
            {{/ instagram }}
            {{# youtube }}
                <a href="{{ youtube }}" class="btn btn-icon btn-round social-youtube m-5"><i class="icon fa-youtube" aria-hidden="true"></i></a>
            {{/ youtube }}
            {{# pinterest }}
                <a href="{{ pinterest }}" class="btn btn-icon btn-round social-pinterest m-5"><i class="icon fa-pinterest" aria-hidden="true"></i></a>
            {{/ pinterest }}
        </div>
        {{/ social }}
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
                
                // 'social' section
                $value = $context->find('social');
                $buffer .= $this->section76b3b046895965512eeee38c82b47765($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD139a41686973e049b75db5b5e459907(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        require([\'jquery\'], function($) {
            $(\'#loginerrormessage\').focus();
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
                
                $buffer .= $indent . '        require([\'jquery\'], function($) {
';
                $buffer .= $indent . '            $(\'#loginerrormessage\').focus();
';
                $buffer .= $indent . '        });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFc78ec36fa22882994867946717d9b9b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            require([\'jquery\'], function($) {
                if ($(\'#username\').val()) {
                    $(\'#password\').focus();
                } else {
                    $(\'#username\').focus();
                }
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
                
                $buffer .= $indent . '            require([\'jquery\'], function($) {
';
                $buffer .= $indent . '                if ($(\'#username\').val()) {
';
                $buffer .= $indent . '                    $(\'#password\').focus();
';
                $buffer .= $indent . '                } else {
';
                $buffer .= $indent . '                    $(\'#username\').focus();
';
                $buffer .= $indent . '                }
';
                $buffer .= $indent . '            });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1020ab5080a8f852902fc6a7fbbfa3c0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{#error}}
        require([\'jquery\'], function($) {
            $(\'#loginerrormessage\').focus();
        });
    {{/error}}
    {{^error}}
        {{#autofocusform}}
            require([\'jquery\'], function($) {
                if ($(\'#username\').val()) {
                    $(\'#password\').focus();
                } else {
                    $(\'#username\').focus();
                }
            });
        {{/autofocusform}}
    {{/error}}
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
                
                // 'error' section
                $value = $context->find('error');
                $buffer .= $this->sectionD139a41686973e049b75db5b5e459907($context, $indent, $value);
                // 'error' inverted section
                $value = $context->find('error');
                if (empty($value)) {
                    
                    // 'autofocusform' section
                    $value = $context->find('autofocusform');
                    $buffer .= $this->sectionFc78ec36fa22882994867946717d9b9b($context, $indent, $value);
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
