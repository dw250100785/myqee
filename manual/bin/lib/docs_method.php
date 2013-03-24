<?php
class _Docs_Method extends _Docs
{

    /**
     *
     * @var ReflectionClass The ReflectionClass for this class
     */
    public $class;

    /**
     *
     * @var ReflectionMethod The ReflectionMethod for this class
     */
    public $method;

    /**
     *
     * @var array array of Kodoc_Method_Param
     */
    public $params;

    /**
     *
     * @var array the things this function can return
     */
    public $return = array();

    /**
     *
     * @var string the source code for this function
     */
    public $source;

    public function __construct($class, $method)
    {
        $this->class  = new ReflectionClass($class);
        $this->method = new ReflectionMethod($class, $method);

        $this->class = $parent = $this->method->getDeclaringClass();

        if ($modifiers = $this->method->getModifiers())
        {
            $this->modifiers = '<small>' . implode(' ', Reflection::getModifierNames($modifiers)) . '</small> ';
        }

        do
        {
            if ($parent->hasMethod($method) and $comment = $parent->getMethod($method)->getDocComment())
            {
                // Found a description for this method
                break;
            }
        }
        while ($parent = $parent->getParentClass());

        list ($this->description, $tags) = _Docs::parse($comment);

        if ($file = $this->class->getFileName())
        {
            $this->source = _Docs::source($file, $this->method->getStartLine(), $this->method->getEndLine());
        }

        if (isset($tags['param']))
        {
            $params = array();

            foreach ($this->method->getParameters() as $i => $param)
            {
                $param = new _Docs_Method_Param(array($this->method->class, $this->method->name), $i);

                if (isset($tags['param'][$i]))
                {
                    preg_match('/^(\S+)(?:\s*(?:\$' . $param->name . '\s*)?(.+))?$/', $tags['param'][$i], $matches);

                    $param->type = $matches[1];

                    if (isset($matches[2]))
                    {
                        $param->description = $matches[2];
                    }
                }
                $params[] = $param;
            }

            $this->params = $params;

            unset($tags['param']);
        }

        if (isset($tags['return']))
        {
            foreach ($tags['return'] as $return)
            {
                if (preg_match('/^(\S*)(?:\s*(.+?))?$/', $return, $matches))
                {
                    $this->return[] = array($matches[1], isset($matches[2]) ? $matches[2] : '');
                }
            }

            unset($tags['return']);
        }

        $this->tags = $tags;
    }

    public function params_short()
    {
        $out = '';
        $required = true;
        $first = true;
        foreach ($this->params as $param)
        {
            if ($required && $param->default && $first)
            {
                $out .= '[ ' . $param;
                $required = false;
                $first = false;
            }
            elseif ($required && $param->default)
            {
                $out .= '[, ' . $param;
                $required = false;
            }
            elseif ($first)
            {
                $out .= $param;
                $first = false;
            }
            else
            {
                $out .= ', ' . $param;
            }
        }

        if (!$required)
        {
            $out .= '] ';
        }

        return $out;
    }

    public function getStartLine()
    {
        return $this->method->getStartLine();
    }
}