<?php

namespace Oro\ORM\Query\AST\Platform\Functions\Postgresql;

use Doctrine\ORM\Query\AST\Node;
use Doctrine\ORM\Query\SqlWalker;
use Oro\ORM\Query\AST\Functions\SimpleFunction;

class Dayofyear extends AbstractTimestampAwarePlatformFunctionNode
{
    /**
     * {@inheritdoc}
     */
    public function getSql(SqlWalker $sqlWalker)
    {
        /** @var Node $expression */
        $expression = $this->parameters[SimpleFunction::PARAMETER_KEY];
        return 'EXTRACT(DOY FROM ' . $this->getTimestampValue($expression, $sqlWalker) . ')';
    }
}
