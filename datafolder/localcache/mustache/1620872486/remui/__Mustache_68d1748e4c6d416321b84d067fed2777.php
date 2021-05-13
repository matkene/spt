<?php

class __Mustache_68d1748e4c6d416321b84d067fed2777 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        if ($partial = $this->mustache->loadPartial('theme_remui/common_start')) {
            $buffer .= $partial->renderInternal($context);
        }
        // 'customhomepage' section
        $value = $context->find('customhomepage');
        $buffer .= $this->section82c4dd4343ab5a9f2871b11dd2353903($context, $indent, $value);
        // 'customhomepage' inverted section
        $value = $context->find('customhomepage');
        if (empty($value)) {
            
            $buffer .= $indent . '    <div class="page-main bg-white">
';
            $buffer .= $indent . '
';
            // 'slider' section
            $value = $context->find('slider');
            $buffer .= $this->section0580f5289fb1cd015795d94a0acf9af7($context, $indent, $value);
            $buffer .= $indent . '
';
            $buffer .= $indent . '        <div class="page-content py-0">
';
            $buffer .= $indent . '            <!-- marketing spots -->
';
            $buffer .= $indent . '            <div class="container mb-40 ';
            // 'aboutus_hide' section
            $value = $context->find('aboutus_hide');
            $buffer .= $this->sectionAb80c4a9995c71e06bf13d95e80d0cf1($context, $indent, $value);
            $buffer .= '">
';
            $buffer .= $indent . '                ';
            $value = $this->resolveValue($context->findDot('! output.full_header'), $context);
            $buffer .= $value;
            $buffer .= '
';
            $buffer .= $indent . '
';
            $buffer .= $indent . '                <div class="row">
';
            $buffer .= $indent . '                    <div class="';
            // 'dispAboutUsDiv' section
            $value = $context->find('dispAboutUsDiv');
            $buffer .= $this->section1fa66bf5dedf63fb46255c6a3f32add5($context, $indent, $value);
            $buffer .= '">
';
            $buffer .= $indent . '                        ';
            // 'marketing_heading' section
            $value = $context->find('marketing_heading');
            $buffer .= $this->section776dd6ca21c911875800a839eeb2007e($context, $indent, $value);
            $buffer .= '
';
            $buffer .= $indent . '                        ';
            // 'marketing_desc' section
            $value = $context->find('marketing_desc');
            $buffer .= $this->section90cda159dcb5dd7bfa999ec34e36ffbe($context, $indent, $value);
            $buffer .= '
';
            $buffer .= $indent . '                    </div>
';
            $buffer .= $indent . '
';
            $buffer .= $indent . '                    <div class="';
            // 'dispmarketingspots' section
            $value = $context->find('dispmarketingspots');
            $buffer .= $this->section52d0fc2029dfa46043e5e5e8c7101441($context, $indent, $value);
            $buffer .= '">
';
            $buffer .= $indent . '                        <div class="marketing-spots row no-gutters">
';
            // 'marketing_spots' section
            $value = $context->find('marketing_spots');
            $buffer .= $this->section7696d03f851d61427208d553a1339c71($context, $indent, $value);
            $buffer .= $indent . '                        </div>
';
            $buffer .= $indent . '                    </div>
';
            $buffer .= $indent . '                </div>
';
            $buffer .= $indent . '
';
            $buffer .= $indent . '            </div>
';
            $buffer .= $indent . '            <!-- marketing spots ends -->
';
            $buffer .= $indent . '
';
            $buffer .= $indent . '            <!-- main content -->
';
            $buffer .= $indent . '            <div class="container-wrapper bg-grey-100 pt-10">
';
            $buffer .= $indent . '                <div class="container">
';
            $buffer .= $indent . '                    <div id="region-main-box">
';
            // 'hasregionmainsettingsmenu' section
            $value = $context->find('hasregionmainsettingsmenu');
            $buffer .= $this->section5071e7bcbfc0582a4aaf5355e9dbf475($context, $indent, $value);
            $buffer .= $indent . '
';
            $buffer .= $indent . '                        <section id="region-main" class="float-none">
';
            // 'hasregionmainsettingsmenu' section
            $value = $context->find('hasregionmainsettingsmenu');
            $buffer .= $this->section3f5eadf46ffa1d9da1969bc3368b08fb($context, $indent, $value);
            $buffer .= $indent . '
';
            $buffer .= $indent . '                            ';
            $value = $this->resolveValue($context->findDot('output.course_content_header'), $context);
            $buffer .= $value;
            $buffer .= '
';
            $buffer .= $indent . '                            ';
            $value = $this->resolveValue($context->findDot('output.main_content'), $context);
            $buffer .= $value;
            $buffer .= '
';
            $buffer .= $indent . '                            ';
            $value = $this->resolveValue($context->findDot('output.course_content_footer'), $context);
            $buffer .= $value;
            $buffer .= '
';
            $buffer .= $indent . '                        </section>
';
            $buffer .= $indent . '                    </div>
';
            $buffer .= $indent . '                </div>
';
            $buffer .= $indent . '            </div>
';
            $buffer .= $indent . '            <!-- main content ends -->
';
            $buffer .= $indent . '
';
            $buffer .= $indent . '            <!-- about us -->
';
            // 'testimoniallist' section
            $value = $context->find('testimoniallist');
            $buffer .= $this->sectionCe737bec4adcb1e5003c33a4b4bcd50c($context, $indent, $value);
            $buffer .= $indent . '            <!-- about us ends -->
';
            $buffer .= $indent . '
';
            $buffer .= $indent . '            <!-- blog -->
';
            // 'blog' section
            $value = $context->find('blog');
            $buffer .= $this->section90befb02c780d07bb1c66abd7d86f2d5($context, $indent, $value);
            $buffer .= $indent . '            <!-- blog ends -->
';
            $buffer .= $indent . '
';
            $buffer .= $indent . '        </div>
';
            $buffer .= $indent . '    </div>
';
            $buffer .= $indent . '
';
            // 'js' section
            $value = $context->find('js');
            $buffer .= $this->sectionF642aafe4fb2246624f82fdfb36d1cc1($context, $indent, $value);
        }
        if ($partial = $this->mustache->loadPartial('theme_remui/common_end')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->section76e86796ce9b86f65048567e2c312a9a($context, $indent, $value);

        return $buffer;
    }

    private function section82c4dd4343ab5a9f2871b11dd2353903(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{{customhomepage}}}
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
                
                $buffer .= $indent . '    ';
                $value = $this->resolveValue($context->find('customhomepage'), $context);
                $buffer .= $value;
                $buffer .= '
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

    private function section318c36b08a2318104c726375809ddfe4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <li data-slide-to="{{count}}" data-target="#CarouselCaptions" class="{{#active}}active{{/active}}"></li>
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
                
                $buffer .= $indent . '                    <li data-slide-to="';
                $value = $this->resolveValue($context->find('count'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-target="#CarouselCaptions" class="';
                // 'active' section
                $value = $context->find('active');
                $buffer .= $this->section5749c750acb0d7477dd5257d00cc6d53($context, $indent, $value);
                $buffer .= '"></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB1f4cd235c4ac0ca43744f17f8131a04(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <p><a href="{{ btn_link }}" class="btn btn-primary mt-10">{{{ btn_txt }}}</a></p>
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
                
                $buffer .= $indent . '                        <p><a href="';
                $value = $this->resolveValue($context->find('btn_link'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="btn btn-primary mt-10">';
                $value = $this->resolveValue($context->find('btn_txt'), $context);
                $buffer .= $value;
                $buffer .= '</a></p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF4ec01ad0902fbe13bf123ab7bbbcbf9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                  <div class="carousel-item align-items-center {{#active}}active{{/active}}">
                    <!-- <div id="banner-img-slider" class="col-12" style="background-image:url({{ img }}); background-position: center; background-size: cover; background-repeat:no-repeat; min-height:500px;"></div> -->
                     <img id="banner-img-slider" class="d-block img-fluid w-p100" alt="Image {{count}}" src="{{ img }}" data-holder-rendered="true">
                    <div class="carousel-caption">
                      {{{ img_txt }}}
                      {{# btn_txt }}
                        <p><a href="{{ btn_link }}" class="btn btn-primary mt-10">{{{ btn_txt }}}</a></p>
                      {{/ btn_txt }}
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
                
                $buffer .= $indent . '                  <div class="carousel-item align-items-center ';
                // 'active' section
                $value = $context->find('active');
                $buffer .= $this->section5749c750acb0d7477dd5257d00cc6d53($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                    <!-- <div id="banner-img-slider" class="col-12" style="background-image:url(';
                $value = $this->resolveValue($context->find('img'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '); background-position: center; background-size: cover; background-repeat:no-repeat; min-height:500px;"></div> -->
';
                $buffer .= $indent . '                     <img id="banner-img-slider" class="d-block img-fluid w-p100" alt="Image ';
                $value = $this->resolveValue($context->find('count'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" src="';
                $value = $this->resolveValue($context->find('img'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-holder-rendered="true">
';
                $buffer .= $indent . '                    <div class="carousel-caption">
';
                $buffer .= $indent . '                      ';
                $value = $this->resolveValue($context->find('img_txt'), $context);
                $buffer .= $value;
                $buffer .= '
';
                // 'btn_txt' section
                $value = $context->find('btn_txt');
                $buffer .= $this->sectionB1f4cd235c4ac0ca43744f17f8131a04($context, $indent, $value);
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                  </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1ba2e271b511e5274280c13063d9d29a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <!-- slider -->
        <div class="carousel slide mb-50" id="CarouselCaptions" data-interval="{{ slideinterval }}" data-ride="carousel">
            <ol class="carousel-indicators">
                {{# slides }}
                    <li data-slide-to="{{count}}" data-target="#CarouselCaptions" class="{{#active}}active{{/active}}"></li>
                {{/ slides}}
            </ol>

            <div class="carousel-inner" role="listbox">
                {{# slides }}
                  <div class="carousel-item align-items-center {{#active}}active{{/active}}">
                    <!-- <div id="banner-img-slider" class="col-12" style="background-image:url({{ img }}); background-position: center; background-size: cover; background-repeat:no-repeat; min-height:500px;"></div> -->
                     <img id="banner-img-slider" class="d-block img-fluid w-p100" alt="Image {{count}}" src="{{ img }}" data-holder-rendered="true">
                    <div class="carousel-caption">
                      {{{ img_txt }}}
                      {{# btn_txt }}
                        <p><a href="{{ btn_link }}" class="btn btn-primary mt-10">{{{ btn_txt }}}</a></p>
                      {{/ btn_txt }}
                    </div>
                  </div>
                {{/ slides }}

                <a class="carousel-control-prev" href="#CarouselCaptions" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon fa fa-chevron-left" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#CarouselCaptions" role="button" data-slide="next">
                  <span class="carousel-control-next-icon fa fa-chevron-right" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <!-- slider ends -->
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
                
                $buffer .= $indent . '        <!-- slider -->
';
                $buffer .= $indent . '        <div class="carousel slide mb-50" id="CarouselCaptions" data-interval="';
                $value = $this->resolveValue($context->find('slideinterval'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-ride="carousel">
';
                $buffer .= $indent . '            <ol class="carousel-indicators">
';
                // 'slides' section
                $value = $context->find('slides');
                $buffer .= $this->section318c36b08a2318104c726375809ddfe4($context, $indent, $value);
                $buffer .= $indent . '            </ol>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            <div class="carousel-inner" role="listbox">
';
                // 'slides' section
                $value = $context->find('slides');
                $buffer .= $this->sectionF4ec01ad0902fbe13bf123ab7bbbcbf9($context, $indent, $value);
                $buffer .= $indent . '
';
                $buffer .= $indent . '                <a class="carousel-control-prev" href="#CarouselCaptions" role="button" data-slide="prev">
';
                $buffer .= $indent . '                  <span class="carousel-control-prev-icon fa fa-chevron-left" aria-hidden="true"></span>
';
                $buffer .= $indent . '                  <span class="sr-only">Previous</span>
';
                $buffer .= $indent . '                </a>
';
                $buffer .= $indent . '                <a class="carousel-control-next" href="#CarouselCaptions" role="button" data-slide="next">
';
                $buffer .= $indent . '                  <span class="carousel-control-next-icon fa fa-chevron-right" aria-hidden="true"></span>
';
                $buffer .= $indent . '                  <span class="sr-only">Next</span>
';
                $buffer .= $indent . '                </a>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '        <!-- slider ends -->
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6fffef5e04248e650cc4225243da30e1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="cover card card-inverse rem-staticimage">
          <img class="card-img w-full" src="{{staticimage}}" alt="Card image">
          <div class="carousel-caption cover-background centered card-img-overlay w-p75 white">
            {{{addtxt}}}
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
                
                $buffer .= $indent . '        <div class="cover card card-inverse rem-staticimage">
';
                $buffer .= $indent . '          <img class="card-img w-full" src="';
                $value = $this->resolveValue($context->find('staticimage'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" alt="Card image">
';
                $buffer .= $indent . '          <div class="carousel-caption cover-background centered card-img-overlay w-p75 white">
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('addtxt'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '          </div>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section64a135e9e9bf59b4f68c315bb03c0a32(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="mb-50 w-p100 h-300 h-md-400 h-lg-500">
                <iframe width="100%" height="100%" src="{{ video }}?rel=0" frameborder="0" allowfullscreen></iframe>
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
                
                $buffer .= $indent . '            <div class="mb-50 w-p100 h-300 h-md-400 h-lg-500">
';
                $buffer .= $indent . '                <iframe width="100%" height="100%" src="';
                $value = $this->resolveValue($context->find('video'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '?rel=0" frameborder="0" allowfullscreen></iframe>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0580f5289fb1cd015795d94a0acf9af7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '

        {{# isslider }}
        <!-- slider -->
        <div class="carousel slide mb-50" id="CarouselCaptions" data-interval="{{ slideinterval }}" data-ride="carousel">
            <ol class="carousel-indicators">
                {{# slides }}
                    <li data-slide-to="{{count}}" data-target="#CarouselCaptions" class="{{#active}}active{{/active}}"></li>
                {{/ slides}}
            </ol>

            <div class="carousel-inner" role="listbox">
                {{# slides }}
                  <div class="carousel-item align-items-center {{#active}}active{{/active}}">
                    <!-- <div id="banner-img-slider" class="col-12" style="background-image:url({{ img }}); background-position: center; background-size: cover; background-repeat:no-repeat; min-height:500px;"></div> -->
                     <img id="banner-img-slider" class="d-block img-fluid w-p100" alt="Image {{count}}" src="{{ img }}" data-holder-rendered="true">
                    <div class="carousel-caption">
                      {{{ img_txt }}}
                      {{# btn_txt }}
                        <p><a href="{{ btn_link }}" class="btn btn-primary mt-10">{{{ btn_txt }}}</a></p>
                      {{/ btn_txt }}
                    </div>
                  </div>
                {{/ slides }}

                <a class="carousel-control-prev" href="#CarouselCaptions" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon fa fa-chevron-left" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#CarouselCaptions" role="button" data-slide="next">
                  <span class="carousel-control-next-icon fa fa-chevron-right" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <!-- slider ends -->
        {{/ isslider }}

        {{# isimage }}
        <div class="cover card card-inverse rem-staticimage">
          <img class="card-img w-full" src="{{staticimage}}" alt="Card image">
          <div class="carousel-caption cover-background centered card-img-overlay w-p75 white">
            {{{addtxt}}}
          </div>
        </div>
        {{/ isimage }}

        {{# isvideo }}
            <div class="mb-50 w-p100 h-300 h-md-400 h-lg-500">
                <iframe width="100%" height="100%" src="{{ video }}?rel=0" frameborder="0" allowfullscreen></iframe>
            </div>
        {{/ isvideo }}

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
                
                $buffer .= $indent . '
';
                // 'isslider' section
                $value = $context->find('isslider');
                $buffer .= $this->section1ba2e271b511e5274280c13063d9d29a($context, $indent, $value);
                $buffer .= $indent . '
';
                // 'isimage' section
                $value = $context->find('isimage');
                $buffer .= $this->section6fffef5e04248e650cc4225243da30e1($context, $indent, $value);
                $buffer .= $indent . '
';
                // 'isvideo' section
                $value = $context->find('isvideo');
                $buffer .= $this->section64a135e9e9bf59b4f68c315bb03c0a32($context, $indent, $value);
                $buffer .= $indent . '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAb80c4a9995c71e06bf13d95e80d0cf1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{aboutus_hide}} ';
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
                
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('aboutus_hide'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1fa66bf5dedf63fb46255c6a3f32add5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{dispAboutUsDiv}} ';
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
                
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('dispAboutUsDiv'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section776dd6ca21c911875800a839eeb2007e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<h4>{{{ marketing_heading }}}</h4>';
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
                
                $buffer .= '<h4>';
                $value = $this->resolveValue($context->find('marketing_heading'), $context);
                $buffer .= $value;
                $buffer .= '</h4>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section90cda159dcb5dd7bfa999ec34e36ffbe(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{{ marketing_desc }}} ';
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
                
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('marketing_desc'), $context);
                $buffer .= $value;
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section52d0fc2029dfa46043e5e5e8c7101441(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{dispmarketingspots}} ';
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
                
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('dispmarketingspots'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section615e6cb4eec0693e88dfe6a1d42a9b8a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{dispmarketingspotsin}} ';
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
                
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('dispmarketingspotsin'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8ace4e4bd720ec6e1cb73fb55b145821(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' style="background: url({{ image }}) center/cover;" ';
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
                
                $buffer .= ' style="background: url(';
                $value = $this->resolveValue($context->find('image'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ') center/cover;" ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section11886049a304cc9a03ce50e67f3bce6e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{{ heading }}} ';
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
                
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('heading'), $context);
                $buffer .= $value;
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section89ee32df51652b9b71e9f78165d5a7a2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{{ description }}} ';
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
                
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('description'), $context);
                $buffer .= $value;
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF001a1ac6ecc6eade49582e25e727b52(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                        <a href="{{ link }}" target="_blank" class="btn btn-primary w-p50 mt-10">{{ button }}</a>
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
                
                $buffer .= $indent . '                                        <a href="';
                $value = $this->resolveValue($context->find('link'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" target="_blank" class="btn btn-primary w-p50 mt-10">';
                $value = $this->resolveValue($context->find('button'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7696d03f851d61427208d553a1339c71(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <div class="{{#dispmarketingspotsin}} {{dispmarketingspotsin}} {{/dispmarketingspotsin}}">
                              <!-- Example Overlay Fade -->
                                  <figure class="overlay overlay-hover">
                                   <div class="overlay-figure text-center {{^ image }} bg-grey-200 {{/ image }}"  {{# image }} style="background: url({{ image }}) center/cover;" {{/ image }}>
                                        <div class="iconbox py-p15">
                                            <div class="iconsquare">
                                                <i class="fa fa-{{ icon }}"></i>
                                            </div>

                                            <div class="iconbox-content font-size-18 p-20">
                                                {{# heading }} {{{ heading }}} {{/ heading }}
                                            </div>
                                        </div>
                                    </div>
                                    <figcaption class="overlay-panel overlay-fade bg-white grey-700 text-center d-flex flex-column justify-content-center align-items-center">
                                      {{# description }} {{{ description }}} {{/ description }}
                                      {{# button }}
                                        <a href="{{ link }}" target="_blank" class="btn btn-primary w-p50 mt-10">{{ button }}</a>
                                      {{/ button }}
                                    </figcaption>
                                  </figure>


                              <!-- End Example Overlay Fade -->
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
                
                $buffer .= $indent . '                            <div class="';
                // 'dispmarketingspotsin' section
                $value = $context->find('dispmarketingspotsin');
                $buffer .= $this->section615e6cb4eec0693e88dfe6a1d42a9b8a($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                              <!-- Example Overlay Fade -->
';
                $buffer .= $indent . '                                  <figure class="overlay overlay-hover">
';
                $buffer .= $indent . '                                   <div class="overlay-figure text-center ';
                // 'image' inverted section
                $value = $context->find('image');
                if (empty($value)) {
                    
                    $buffer .= ' bg-grey-200 ';
                }
                $buffer .= '"  ';
                // 'image' section
                $value = $context->find('image');
                $buffer .= $this->section8ace4e4bd720ec6e1cb73fb55b145821($context, $indent, $value);
                $buffer .= '>
';
                $buffer .= $indent . '                                        <div class="iconbox py-p15">
';
                $buffer .= $indent . '                                            <div class="iconsquare">
';
                $buffer .= $indent . '                                                <i class="fa fa-';
                $value = $this->resolveValue($context->find('icon'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"></i>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                                            <div class="iconbox-content font-size-18 p-20">
';
                $buffer .= $indent . '                                                ';
                // 'heading' section
                $value = $context->find('heading');
                $buffer .= $this->section11886049a304cc9a03ce50e67f3bce6e($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                    <figcaption class="overlay-panel overlay-fade bg-white grey-700 text-center d-flex flex-column justify-content-center align-items-center">
';
                $buffer .= $indent . '                                      ';
                // 'description' section
                $value = $context->find('description');
                $buffer .= $this->section89ee32df51652b9b71e9f78165d5a7a2($context, $indent, $value);
                $buffer .= '
';
                // 'button' section
                $value = $context->find('button');
                $buffer .= $this->sectionF001a1ac6ecc6eade49582e25e727b52($context, $indent, $value);
                $buffer .= $indent . '                                    </figcaption>
';
                $buffer .= $indent . '                                  </figure>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                              <!-- End Example Overlay Fade -->
';
                $buffer .= $indent . '                            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8ae768dbd9f60a7f7df4aaf3cee7aa89(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'has-blocks';
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
                
                $buffer .= 'has-blocks';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5071e7bcbfc0582a4aaf5355e9dbf475(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <div id="region-main-settings-menu" class="hidden-print {{#hasblocks}}has-blocks{{/hasblocks}}">
                                <div> {{{ output.region_main_settings_menu }}} </div>
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
                
                $buffer .= $indent . '                            <div id="region-main-settings-menu" class="hidden-print ';
                // 'hasblocks' section
                $value = $context->find('hasblocks');
                $buffer .= $this->section8ae768dbd9f60a7f7df4aaf3cee7aa89($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                <div> ';
                $value = $this->resolveValue($context->findDot('output.region_main_settings_menu'), $context);
                $buffer .= $value;
                $buffer .= ' </div>
';
                $buffer .= $indent . '                            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3f5eadf46ffa1d9da1969bc3368b08fb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <div class="region_main_settings_menu_proxy"></div>
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
                
                $buffer .= $indent . '                                <div class="region_main_settings_menu_proxy"></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB8ebf79949137f69fd269aece1ab6694(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<h3>{{ aboutus_heading }}</h3>';
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
                
                $buffer .= '<h3>';
                $value = $this->resolveValue($context->find('aboutus_heading'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</h3>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB265109c6dc1c569af91572c578aa789(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{{ aboutus_desc }}} ';
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
                
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('aboutus_desc'), $context);
                $buffer .= $value;
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section11c68bd1b62cd3f44241fc861e422f4e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                        <li data-slide-to="{{count}}" data-target="#testimonial_cr" class="{{#active}}active{{/active}}"></li>
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
                
                $buffer .= $indent . '                                        <li data-slide-to="';
                $value = $this->resolveValue($context->find('count'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-target="#testimonial_cr" class="';
                // 'active' section
                $value = $context->find('active');
                $buffer .= $this->section5749c750acb0d7477dd5257d00cc6d53($context, $indent, $value);
                $buffer .= '"></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9f4692c36ad6c2347674e207f61fe2e7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                  <a class="avatar avatar-100 bg-white mb-10 m-xs-0 img-bordered" href="javascript:void(0)">
                                                    <img src="{{ image }}" alt="">
                                                  </a>
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
                
                $buffer .= $indent . '                                                  <a class="avatar avatar-100 bg-white mb-10 m-xs-0 img-bordered" href="javascript:void(0)">
';
                $buffer .= $indent . '                                                    <img src="';
                $value = $this->resolveValue($context->find('image'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" alt="">
';
                $buffer .= $indent . '                                                  </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section66b5af8ff646a0b64edd1211611c36ac(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' <div class="font-size-20 grey-600">{{ name }}</div> ';
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
                
                $buffer .= ' <div class="font-size-20 grey-600">';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</div> ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEf5512025df03355266e3e3cdfbe0e7d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' <div class="font-size-14 grey-700">{{ designation }}</div> ';
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
                
                $buffer .= ' <div class="font-size-14 grey-700">';
                $value = $this->resolveValue($context->find('designation'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</div> ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB9554e97600c900de67a75fe412cf135(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' 250, {{{ text }}} ';
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
                
                $buffer .= ' 250, ';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= $value;
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section61fd1ede4f619ca24d2105b954be1417(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                    <div class="font-size-14 grey-600 pt-20">{{#shortentext}} 250, {{{ text }}} {{/shortentext}} </div>
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
                
                $buffer .= $indent . '                                                    <div class="font-size-14 grey-600 pt-20">';
                // 'shortentext' section
                $value = $context->find('shortentext');
                $buffer .= $this->sectionB9554e97600c900de67a75fe412cf135($context, $indent, $value);
                $buffer .= ' </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE9d9f36f603a02a8a2ea83e061febc77(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                      <div class="carousel-item align-items-center bg-grey-200 {{#active}}active{{/active}}">
                                        <div class="text-center">
                                            <div class="overlay-panel vertical-align">
                                                <div class="vertical-align-middle">
                                                  {{# image }}
                                                  <a class="avatar avatar-100 bg-white mb-10 m-xs-0 img-bordered" href="javascript:void(0)">
                                                    <img src="{{ image }}" alt="">
                                                  </a>
                                                  {{/ image }}
                                                  {{# name }} <div class="font-size-20 grey-600">{{ name }}</div> {{/ name }}
                                                  {{# designation }} <div class="font-size-14 grey-700">{{ designation }}</div> {{/ designation }}
                                                  {{# text }}
                                                    <div class="font-size-14 grey-600 pt-20">{{#shortentext}} 250, {{{ text }}} {{/shortentext}} </div>
                                                  {{/ text }}
                                                </div>
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
                
                $buffer .= $indent . '                                      <div class="carousel-item align-items-center bg-grey-200 ';
                // 'active' section
                $value = $context->find('active');
                $buffer .= $this->section5749c750acb0d7477dd5257d00cc6d53($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                        <div class="text-center">
';
                $buffer .= $indent . '                                            <div class="overlay-panel vertical-align">
';
                $buffer .= $indent . '                                                <div class="vertical-align-middle">
';
                // 'image' section
                $value = $context->find('image');
                $buffer .= $this->section9f4692c36ad6c2347674e207f61fe2e7($context, $indent, $value);
                $buffer .= $indent . '                                                  ';
                // 'name' section
                $value = $context->find('name');
                $buffer .= $this->section66b5af8ff646a0b64edd1211611c36ac($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                                                  ';
                // 'designation' section
                $value = $context->find('designation');
                $buffer .= $this->sectionEf5512025df03355266e3e3cdfbe0e7d($context, $indent, $value);
                $buffer .= '
';
                // 'text' section
                $value = $context->find('text');
                $buffer .= $this->section61fd1ede4f619ca24d2105b954be1417($context, $indent, $value);
                $buffer .= $indent . '                                                </div>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                      </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section33393f1968d87d459c08bc7dd7a65b31(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div class="col-12 col-md-7 col-lg-6 mt-lg-30 aboutus-heading">
                            {{# aboutus_heading }}<h3>{{ aboutus_heading }}</h3>{{/ aboutus_heading }}
                            {{# aboutus_desc }} {{{ aboutus_desc }}} {{/ aboutus_desc }}
                        </div>
                        <div class="col-12 col-md-5 col-lg-6 aboutus-testimonial">
                            <div class="carousel testimonial_cr slide" id="testimonial_cr" data-interval="4000" data-ride="carousel">
                                <ol class="carousel-indicators hidden-sm-down">
                                    {{# testimonials }}
                                        <li data-slide-to="{{count}}" data-target="#testimonial_cr" class="{{#active}}active{{/active}}"></li>
                                    {{/ testimonials}}
                                </ol>

                                <div class="carousel-inner" role="listbox">
                                    {{# testimonials }}
                                      <div class="carousel-item align-items-center bg-grey-200 {{#active}}active{{/active}}">
                                        <div class="text-center">
                                            <div class="overlay-panel vertical-align">
                                                <div class="vertical-align-middle">
                                                  {{# image }}
                                                  <a class="avatar avatar-100 bg-white mb-10 m-xs-0 img-bordered" href="javascript:void(0)">
                                                    <img src="{{ image }}" alt="">
                                                  </a>
                                                  {{/ image }}
                                                  {{# name }} <div class="font-size-20 grey-600">{{ name }}</div> {{/ name }}
                                                  {{# designation }} <div class="font-size-14 grey-700">{{ designation }}</div> {{/ designation }}
                                                  {{# text }}
                                                    <div class="font-size-14 grey-600 pt-20">{{#shortentext}} 250, {{{ text }}} {{/shortentext}} </div>
                                                  {{/ text }}
                                                </div>
                                            </div>
                                        </div>
                                      </div>
                                    {{/ testimonials }}

                                    <a class="carousel-control-prev" href="#testimonial_cr" role="button" data-slide="prev">
                                      <span class="carousel-control-prev-icon fa fa-chevron-left" aria-hidden="true"></span>
                                      <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#testimonial_cr" role="button" data-slide="next">
                                      <span class="carousel-control-next-icon fa fa-chevron-right" aria-hidden="true"></span>
                                      <span class="sr-only">Next</span>
                                    </a>
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
                
                $buffer .= $indent . '                        <div class="col-12 col-md-7 col-lg-6 mt-lg-30 aboutus-heading">
';
                $buffer .= $indent . '                            ';
                // 'aboutus_heading' section
                $value = $context->find('aboutus_heading');
                $buffer .= $this->sectionB8ebf79949137f69fd269aece1ab6694($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                            ';
                // 'aboutus_desc' section
                $value = $context->find('aboutus_desc');
                $buffer .= $this->sectionB265109c6dc1c569af91572c578aa789($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                        <div class="col-12 col-md-5 col-lg-6 aboutus-testimonial">
';
                $buffer .= $indent . '                            <div class="carousel testimonial_cr slide" id="testimonial_cr" data-interval="4000" data-ride="carousel">
';
                $buffer .= $indent . '                                <ol class="carousel-indicators hidden-sm-down">
';
                // 'testimonials' section
                $value = $context->find('testimonials');
                $buffer .= $this->section11c68bd1b62cd3f44241fc861e422f4e($context, $indent, $value);
                $buffer .= $indent . '                                </ol>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                                <div class="carousel-inner" role="listbox">
';
                // 'testimonials' section
                $value = $context->find('testimonials');
                $buffer .= $this->sectionE9d9f36f603a02a8a2ea83e061febc77($context, $indent, $value);
                $buffer .= $indent . '
';
                $buffer .= $indent . '                                    <a class="carousel-control-prev" href="#testimonial_cr" role="button" data-slide="prev">
';
                $buffer .= $indent . '                                      <span class="carousel-control-prev-icon fa fa-chevron-left" aria-hidden="true"></span>
';
                $buffer .= $indent . '                                      <span class="sr-only">Previous</span>
';
                $buffer .= $indent . '                                    </a>
';
                $buffer .= $indent . '                                    <a class="carousel-control-next" href="#testimonial_cr" role="button" data-slide="next">
';
                $buffer .= $indent . '                                      <span class="carousel-control-next-icon fa fa-chevron-right" aria-hidden="true"></span>
';
                $buffer .= $indent . '                                      <span class="sr-only">Next</span>
';
                $buffer .= $indent . '                                    </a>
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0fe9bb93388bcb6e3637716d5f56005d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' <h3>{{ aboutus_heading }}</h3> ';
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
                
                $buffer .= ' <h3>';
                $value = $this->resolveValue($context->find('aboutus_heading'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</h3> ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAcecf17516933c1a37c354e17eec7e8a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <div class="col-10 text-center p-70">
                                {{# aboutus_heading }} <h3>{{ aboutus_heading }}</h3> {{/ aboutus_heading }}
                                {{# aboutus_desc }} {{{ aboutus_desc }}} {{/ aboutus_desc }}
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
                
                $buffer .= $indent . '                            <div class="col-10 text-center p-70">
';
                $buffer .= $indent . '                                ';
                // 'aboutus_heading' section
                $value = $context->find('aboutus_heading');
                $buffer .= $this->section0fe9bb93388bcb6e3637716d5f56005d($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                                ';
                // 'aboutus_desc' section
                $value = $context->find('aboutus_desc');
                $buffer .= $this->sectionB265109c6dc1c569af91572c578aa789($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6da1a81a04598524ad5641ed26a24e67(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                            <li data-slide-to="{{count}}" data-target="#testimonial_cr" class="{{#active}}active{{/active}}"></li>
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
                
                $buffer .= $indent . '                                            <li data-slide-to="';
                $value = $this->resolveValue($context->find('count'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-target="#testimonial_cr" class="';
                // 'active' section
                $value = $context->find('active');
                $buffer .= $this->section5749c750acb0d7477dd5257d00cc6d53($context, $indent, $value);
                $buffer .= '"></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4d4aa82cd532c3274fce5b7d79cdd527(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                      <a class="avatar avatar-100 bg-white mb-10 m-xs-0 img-bordered" href="javascript:void(0)">
                                                        <img src="{{ image }}" alt="">
                                                      </a>
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
                
                $buffer .= $indent . '                                                      <a class="avatar avatar-100 bg-white mb-10 m-xs-0 img-bordered" href="javascript:void(0)">
';
                $buffer .= $indent . '                                                        <img src="';
                $value = $this->resolveValue($context->find('image'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" alt="">
';
                $buffer .= $indent . '                                                      </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC55c05149859143e3b8de1db98748a38(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                        <div class="font-size-14 grey-600 pt-20">{{#shortentext}} 250, {{{ text }}} {{/shortentext}} </div>
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
                
                $buffer .= $indent . '                                                        <div class="font-size-14 grey-600 pt-20">';
                // 'shortentext' section
                $value = $context->find('shortentext');
                $buffer .= $this->sectionB9554e97600c900de67a75fe412cf135($context, $indent, $value);
                $buffer .= ' </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4d3fce6980f63f3741783b433e2a278b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                          <div class="carousel-item align-items-center {{#active}}active{{/active}}">
                                            <div class="text-center">
                                                <div class="overlay-panel vertical-align">
                                                    <div class="vertical-align-middle">
                                                      {{# image }}
                                                      <a class="avatar avatar-100 bg-white mb-10 m-xs-0 img-bordered" href="javascript:void(0)">
                                                        <img src="{{ image }}" alt="">
                                                      </a>
                                                      {{/ image }}
                                                      {{# name }} <div class="font-size-20 grey-600">{{ name }}</div> {{/ name }}
                                                      {{# designation }} <div class="font-size-14 grey-700">{{ designation }}</div> {{/ designation }}
                                                      {{# text }}
                                                        <div class="font-size-14 grey-600 pt-20">{{#shortentext}} 250, {{{ text }}} {{/shortentext}} </div>
                                                      {{/ text }}
                                                    </div>
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
                
                $buffer .= $indent . '                                          <div class="carousel-item align-items-center ';
                // 'active' section
                $value = $context->find('active');
                $buffer .= $this->section5749c750acb0d7477dd5257d00cc6d53($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                            <div class="text-center">
';
                $buffer .= $indent . '                                                <div class="overlay-panel vertical-align">
';
                $buffer .= $indent . '                                                    <div class="vertical-align-middle">
';
                // 'image' section
                $value = $context->find('image');
                $buffer .= $this->section4d4aa82cd532c3274fce5b7d79cdd527($context, $indent, $value);
                $buffer .= $indent . '                                                      ';
                // 'name' section
                $value = $context->find('name');
                $buffer .= $this->section66b5af8ff646a0b64edd1211611c36ac($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                                                      ';
                // 'designation' section
                $value = $context->find('designation');
                $buffer .= $this->sectionEf5512025df03355266e3e3cdfbe0e7d($context, $indent, $value);
                $buffer .= '
';
                // 'text' section
                $value = $context->find('text');
                $buffer .= $this->sectionC55c05149859143e3b8de1db98748a38($context, $indent, $value);
                $buffer .= $indent . '                                                    </div>
';
                $buffer .= $indent . '                                                </div>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                          </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF63c3977b1d57cec09b8a2bb29fa6b4c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <div class="col-10 aboutus-testimonial">
                                <div class="carousel testimonial_cr slide" id="testimonial_cr" data-interval="4000" data-ride="carousel">
                                    <ol class="carousel-indicators hidden-sm-down">
                                        {{# testimonials }}
                                            <li data-slide-to="{{count}}" data-target="#testimonial_cr" class="{{#active}}active{{/active}}"></li>
                                        {{/ testimonials}}
                                    </ol>

                                    <div class="carousel-inner" role="listbox">
                                        {{# testimonials }}
                                          <div class="carousel-item align-items-center {{#active}}active{{/active}}">
                                            <div class="text-center">
                                                <div class="overlay-panel vertical-align">
                                                    <div class="vertical-align-middle">
                                                      {{# image }}
                                                      <a class="avatar avatar-100 bg-white mb-10 m-xs-0 img-bordered" href="javascript:void(0)">
                                                        <img src="{{ image }}" alt="">
                                                      </a>
                                                      {{/ image }}
                                                      {{# name }} <div class="font-size-20 grey-600">{{ name }}</div> {{/ name }}
                                                      {{# designation }} <div class="font-size-14 grey-700">{{ designation }}</div> {{/ designation }}
                                                      {{# text }}
                                                        <div class="font-size-14 grey-600 pt-20">{{#shortentext}} 250, {{{ text }}} {{/shortentext}} </div>
                                                      {{/ text }}
                                                    </div>
                                                </div>
                                            </div>
                                          </div>
                                        {{/ testimonials }}

                                        <a class="carousel-control-prev" href="#testimonial_cr" role="button" data-slide="prev">
                                          <span class="carousel-control-prev-icon fa fa-chevron-left" aria-hidden="true"></span>
                                          <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#testimonial_cr" role="button" data-slide="next">
                                          <span class="carousel-control-next-icon fa fa-chevron-right" aria-hidden="true"></span>
                                          <span class="sr-only">Next</span>
                                        </a>
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
                
                $buffer .= $indent . '                            <div class="col-10 aboutus-testimonial">
';
                $buffer .= $indent . '                                <div class="carousel testimonial_cr slide" id="testimonial_cr" data-interval="4000" data-ride="carousel">
';
                $buffer .= $indent . '                                    <ol class="carousel-indicators hidden-sm-down">
';
                // 'testimonials' section
                $value = $context->find('testimonials');
                $buffer .= $this->section6da1a81a04598524ad5641ed26a24e67($context, $indent, $value);
                $buffer .= $indent . '                                    </ol>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                                    <div class="carousel-inner" role="listbox">
';
                // 'testimonials' section
                $value = $context->find('testimonials');
                $buffer .= $this->section4d3fce6980f63f3741783b433e2a278b($context, $indent, $value);
                $buffer .= $indent . '
';
                $buffer .= $indent . '                                        <a class="carousel-control-prev" href="#testimonial_cr" role="button" data-slide="prev">
';
                $buffer .= $indent . '                                          <span class="carousel-control-prev-icon fa fa-chevron-left" aria-hidden="true"></span>
';
                $buffer .= $indent . '                                          <span class="sr-only">Previous</span>
';
                $buffer .= $indent . '                                        </a>
';
                $buffer .= $indent . '                                        <a class="carousel-control-next" href="#testimonial_cr" role="button" data-slide="next">
';
                $buffer .= $indent . '                                          <span class="carousel-control-next-icon fa fa-chevron-right" aria-hidden="true"></span>
';
                $buffer .= $indent . '                                          <span class="sr-only">Next</span>
';
                $buffer .= $indent . '                                        </a>
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCe737bec4adcb1e5003c33a4b4bcd50c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="container">
                <div class="row {{^ both }}justify-content-center{{/ both }}">

                    {{# both }}
                        <div class="col-12 col-md-7 col-lg-6 mt-lg-30 aboutus-heading">
                            {{# aboutus_heading }}<h3>{{ aboutus_heading }}</h3>{{/ aboutus_heading }}
                            {{# aboutus_desc }} {{{ aboutus_desc }}} {{/ aboutus_desc }}
                        </div>
                        <div class="col-12 col-md-5 col-lg-6 aboutus-testimonial">
                            <div class="carousel testimonial_cr slide" id="testimonial_cr" data-interval="4000" data-ride="carousel">
                                <ol class="carousel-indicators hidden-sm-down">
                                    {{# testimonials }}
                                        <li data-slide-to="{{count}}" data-target="#testimonial_cr" class="{{#active}}active{{/active}}"></li>
                                    {{/ testimonials}}
                                </ol>

                                <div class="carousel-inner" role="listbox">
                                    {{# testimonials }}
                                      <div class="carousel-item align-items-center bg-grey-200 {{#active}}active{{/active}}">
                                        <div class="text-center">
                                            <div class="overlay-panel vertical-align">
                                                <div class="vertical-align-middle">
                                                  {{# image }}
                                                  <a class="avatar avatar-100 bg-white mb-10 m-xs-0 img-bordered" href="javascript:void(0)">
                                                    <img src="{{ image }}" alt="">
                                                  </a>
                                                  {{/ image }}
                                                  {{# name }} <div class="font-size-20 grey-600">{{ name }}</div> {{/ name }}
                                                  {{# designation }} <div class="font-size-14 grey-700">{{ designation }}</div> {{/ designation }}
                                                  {{# text }}
                                                    <div class="font-size-14 grey-600 pt-20">{{#shortentext}} 250, {{{ text }}} {{/shortentext}} </div>
                                                  {{/ text }}
                                                </div>
                                            </div>
                                        </div>
                                      </div>
                                    {{/ testimonials }}

                                    <a class="carousel-control-prev" href="#testimonial_cr" role="button" data-slide="prev">
                                      <span class="carousel-control-prev-icon fa fa-chevron-left" aria-hidden="true"></span>
                                      <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#testimonial_cr" role="button" data-slide="next">
                                      <span class="carousel-control-next-icon fa fa-chevron-right" aria-hidden="true"></span>
                                      <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    {{/ both }}

                    {{^ both }}
                        {{# about }}
                            <div class="col-10 text-center p-70">
                                {{# aboutus_heading }} <h3>{{ aboutus_heading }}</h3> {{/ aboutus_heading }}
                                {{# aboutus_desc }} {{{ aboutus_desc }}} {{/ aboutus_desc }}
                            </div>
                        {{/ about }}

                        {{# test }}
                            <div class="col-10 aboutus-testimonial">
                                <div class="carousel testimonial_cr slide" id="testimonial_cr" data-interval="4000" data-ride="carousel">
                                    <ol class="carousel-indicators hidden-sm-down">
                                        {{# testimonials }}
                                            <li data-slide-to="{{count}}" data-target="#testimonial_cr" class="{{#active}}active{{/active}}"></li>
                                        {{/ testimonials}}
                                    </ol>

                                    <div class="carousel-inner" role="listbox">
                                        {{# testimonials }}
                                          <div class="carousel-item align-items-center {{#active}}active{{/active}}">
                                            <div class="text-center">
                                                <div class="overlay-panel vertical-align">
                                                    <div class="vertical-align-middle">
                                                      {{# image }}
                                                      <a class="avatar avatar-100 bg-white mb-10 m-xs-0 img-bordered" href="javascript:void(0)">
                                                        <img src="{{ image }}" alt="">
                                                      </a>
                                                      {{/ image }}
                                                      {{# name }} <div class="font-size-20 grey-600">{{ name }}</div> {{/ name }}
                                                      {{# designation }} <div class="font-size-14 grey-700">{{ designation }}</div> {{/ designation }}
                                                      {{# text }}
                                                        <div class="font-size-14 grey-600 pt-20">{{#shortentext}} 250, {{{ text }}} {{/shortentext}} </div>
                                                      {{/ text }}
                                                    </div>
                                                </div>
                                            </div>
                                          </div>
                                        {{/ testimonials }}

                                        <a class="carousel-control-prev" href="#testimonial_cr" role="button" data-slide="prev">
                                          <span class="carousel-control-prev-icon fa fa-chevron-left" aria-hidden="true"></span>
                                          <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#testimonial_cr" role="button" data-slide="next">
                                          <span class="carousel-control-next-icon fa fa-chevron-right" aria-hidden="true"></span>
                                          <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        {{/ test }}
                    {{/ both }}

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
                
                $buffer .= $indent . '            <div class="container">
';
                $buffer .= $indent . '                <div class="row ';
                // 'both' inverted section
                $value = $context->find('both');
                if (empty($value)) {
                    
                    $buffer .= 'justify-content-center';
                }
                $buffer .= '">
';
                $buffer .= $indent . '
';
                // 'both' section
                $value = $context->find('both');
                $buffer .= $this->section33393f1968d87d459c08bc7dd7a65b31($context, $indent, $value);
                $buffer .= $indent . '
';
                // 'both' inverted section
                $value = $context->find('both');
                if (empty($value)) {
                    
                    // 'about' section
                    $value = $context->find('about');
                    $buffer .= $this->sectionAcecf17516933c1a37c354e17eec7e8a($context, $indent, $value);
                    $buffer .= $indent . '
';
                    // 'test' section
                    $value = $context->find('test');
                    $buffer .= $this->sectionF63c3977b1d57cec09b8a2bb29fa6b4c($context, $indent, $value);
                }
                $buffer .= $indent . '
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

    private function section020aef79048e5e6364d34c660ee4ec85(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'blog, blog';
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
                
                $buffer .= 'blog, blog';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section431e2f76a5a6aa895d5b1b66f647680f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div class="col-md-4 col-sm-6 recent-item">
                            <div class="card card-transparent">
                                <div class="card-block">
                                  <div class="card-content">
                                    <h4 class="card-title mt-10"><a href="{{ link }}" class="font-weight-400 blue-grey-600">{{ subject }}</a></h4>
                                    <p class="card-text">
                                      <small>By {{ firstname }} {{ lastname }}, on {{ createdat }}</small>
                                    </p>
                                    <p class="card-text">{{ summary }}</p>
                                  </div>
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
                
                $buffer .= $indent . '                        <div class="col-md-4 col-sm-6 recent-item">
';
                $buffer .= $indent . '                            <div class="card card-transparent">
';
                $buffer .= $indent . '                                <div class="card-block">
';
                $buffer .= $indent . '                                  <div class="card-content">
';
                $buffer .= $indent . '                                    <h4 class="card-title mt-10"><a href="';
                $value = $this->resolveValue($context->find('link'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="font-weight-400 blue-grey-600">';
                $value = $this->resolveValue($context->find('subject'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a></h4>
';
                $buffer .= $indent . '                                    <p class="card-text">
';
                $buffer .= $indent . '                                      <small>By ';
                $value = $this->resolveValue($context->find('firstname'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('lastname'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ', on ';
                $value = $this->resolveValue($context->find('createdat'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</small>
';
                $buffer .= $indent . '                                    </p>
';
                $buffer .= $indent . '                                    <p class="card-text">';
                $value = $this->resolveValue($context->find('summary'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</p>
';
                $buffer .= $indent . '                                  </div>
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB7fe5b10c94ecc10df5a9ea9035d4a20(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="container-wrapper bg-grey-100 pt-10">
                <div class="container">
                    <h2 class="blue-grey-600">{{#str}}blog, blog{{/str}}</h2>
                    <div class="row blog">
                        {{# blogs }}
                        <div class="col-md-4 col-sm-6 recent-item">
                            <div class="card card-transparent">
                                <div class="card-block">
                                  <div class="card-content">
                                    <h4 class="card-title mt-10"><a href="{{ link }}" class="font-weight-400 blue-grey-600">{{ subject }}</a></h4>
                                    <p class="card-text">
                                      <small>By {{ firstname }} {{ lastname }}, on {{ createdat }}</small>
                                    </p>
                                    <p class="card-text">{{ summary }}</p>
                                  </div>
                                </div>
                            </div>
                        </div>
                        {{/ blogs }}
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
                
                $buffer .= $indent . '            <div class="container-wrapper bg-grey-100 pt-10">
';
                $buffer .= $indent . '                <div class="container">
';
                $buffer .= $indent . '                    <h2 class="blue-grey-600">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section020aef79048e5e6364d34c660ee4ec85($context, $indent, $value);
                $buffer .= '</h2>
';
                $buffer .= $indent . '                    <div class="row blog">
';
                // 'blogs' section
                $value = $context->find('blogs');
                $buffer .= $this->section431e2f76a5a6aa895d5b1b66f647680f($context, $indent, $value);
                $buffer .= $indent . '                    </div>
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

    private function section90befb02c780d07bb1c66abd7d86f2d5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{# hasblogs }}
            <div class="container-wrapper bg-grey-100 pt-10">
                <div class="container">
                    <h2 class="blue-grey-600">{{#str}}blog, blog{{/str}}</h2>
                    <div class="row blog">
                        {{# blogs }}
                        <div class="col-md-4 col-sm-6 recent-item">
                            <div class="card card-transparent">
                                <div class="card-block">
                                  <div class="card-content">
                                    <h4 class="card-title mt-10"><a href="{{ link }}" class="font-weight-400 blue-grey-600">{{ subject }}</a></h4>
                                    <p class="card-text">
                                      <small>By {{ firstname }} {{ lastname }}, on {{ createdat }}</small>
                                    </p>
                                    <p class="card-text">{{ summary }}</p>
                                  </div>
                                </div>
                            </div>
                        </div>
                        {{/ blogs }}
                    </div>
                </div>
            </div>
            {{/ hasblogs }}
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
                
                // 'hasblogs' section
                $value = $context->find('hasblogs');
                $buffer .= $this->sectionB7fe5b10c94ecc10df5a9ea9035d4a20($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF642aafe4fb2246624f82fdfb36d1cc1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'theme_remui/loader\'], function () {
    jQuery(document).ready(function() {
        jQuery(".carousel").on("touchstart", function(event){
            var xClick = event.originalEvent.touches[0].pageX;
            jQuery(this).one("touchmove", function(event){
                var xMove = event.originalEvent.touches[0].pageX;
                if( Math.floor(xClick - xMove) > 5 ){
                    jQuery(".carousel").carousel(\'next\');
                }
                else if( Math.floor(xClick - xMove) < -5 ){
                    jQuery(".carousel").carousel(\'prev\');
                }
            });
            jQuery(".carousel").on("touchend", function(){
                    jQuery(this).off("touchmove");
            });
        });
    });
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
                
                $buffer .= $indent . 'require([\'theme_remui/loader\'], function () {
';
                $buffer .= $indent . '    jQuery(document).ready(function() {
';
                $buffer .= $indent . '        jQuery(".carousel").on("touchstart", function(event){
';
                $buffer .= $indent . '            var xClick = event.originalEvent.touches[0].pageX;
';
                $buffer .= $indent . '            jQuery(this).one("touchmove", function(event){
';
                $buffer .= $indent . '                var xMove = event.originalEvent.touches[0].pageX;
';
                $buffer .= $indent . '                if( Math.floor(xClick - xMove) > 5 ){
';
                $buffer .= $indent . '                    jQuery(".carousel").carousel(\'next\');
';
                $buffer .= $indent . '                }
';
                $buffer .= $indent . '                else if( Math.floor(xClick - xMove) < -5 ){
';
                $buffer .= $indent . '                    jQuery(".carousel").carousel(\'prev\');
';
                $buffer .= $indent . '                }
';
                $buffer .= $indent . '            });
';
                $buffer .= $indent . '            jQuery(".carousel").on("touchend", function(){
';
                $buffer .= $indent . '                    jQuery(this).off("touchmove");
';
                $buffer .= $indent . '            });
';
                $buffer .= $indent . '        });
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section76e86796ce9b86f65048567e2c312a9a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'theme_remui/loader\', \'theme_remui/slick\'], function () {
    Breakpoints();
    // Slick Responsive Display
    // -----false-----------------------
    jQuery(\'.slick-course-slider\').slick({
      dots: false,
      arrows: true,
      infinite: false,
      speed: 500,
      prevArrow: $(".available-courses.button-container .btn-prev"),
      nextArrow: $(".available-courses.button-container .btn-next"),
      rtl: (jQuery("html").attr("dir") == "rtl") ? true : false,
      slidesToShow: 4,
      slidesToScroll: 4,
      responsive: [{
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3
          }
        }, {
          breakpoint: 800,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        }, {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
    })
    .on(\'setPosition\', function (event, slick) {
      slick.$slides.css(\'height\', slick.$slideTrack.height() + \'px\');
      jQuery(\'.slick-slide > div\').css(\'height\', \'100%\');
    });
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
                
                $buffer .= $indent . 'require([\'theme_remui/loader\', \'theme_remui/slick\'], function () {
';
                $buffer .= $indent . '    Breakpoints();
';
                $buffer .= $indent . '    // Slick Responsive Display
';
                $buffer .= $indent . '    // -----false-----------------------
';
                $buffer .= $indent . '    jQuery(\'.slick-course-slider\').slick({
';
                $buffer .= $indent . '      dots: false,
';
                $buffer .= $indent . '      arrows: true,
';
                $buffer .= $indent . '      infinite: false,
';
                $buffer .= $indent . '      speed: 500,
';
                $buffer .= $indent . '      prevArrow: $(".available-courses.button-container .btn-prev"),
';
                $buffer .= $indent . '      nextArrow: $(".available-courses.button-container .btn-next"),
';
                $buffer .= $indent . '      rtl: (jQuery("html").attr("dir") == "rtl") ? true : false,
';
                $buffer .= $indent . '      slidesToShow: 4,
';
                $buffer .= $indent . '      slidesToScroll: 4,
';
                $buffer .= $indent . '      responsive: [{
';
                $buffer .= $indent . '          breakpoint: 1024,
';
                $buffer .= $indent . '          settings: {
';
                $buffer .= $indent . '            slidesToShow: 3,
';
                $buffer .= $indent . '            slidesToScroll: 3
';
                $buffer .= $indent . '          }
';
                $buffer .= $indent . '        }, {
';
                $buffer .= $indent . '          breakpoint: 800,
';
                $buffer .= $indent . '          settings: {
';
                $buffer .= $indent . '            slidesToShow: 2,
';
                $buffer .= $indent . '            slidesToScroll: 2
';
                $buffer .= $indent . '          }
';
                $buffer .= $indent . '        }, {
';
                $buffer .= $indent . '          breakpoint: 480,
';
                $buffer .= $indent . '          settings: {
';
                $buffer .= $indent . '            slidesToShow: 1,
';
                $buffer .= $indent . '            slidesToScroll: 1
';
                $buffer .= $indent . '          }
';
                $buffer .= $indent . '        }
';
                $buffer .= $indent . '      ]
';
                $buffer .= $indent . '    })
';
                $buffer .= $indent . '    .on(\'setPosition\', function (event, slick) {
';
                $buffer .= $indent . '      slick.$slides.css(\'height\', slick.$slideTrack.height() + \'px\');
';
                $buffer .= $indent . '      jQuery(\'.slick-slide > div\').css(\'height\', \'100%\');
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
