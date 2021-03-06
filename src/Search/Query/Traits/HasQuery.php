<?php

namespace Nord\Lumen\Elasticsearch\Search\Query\Traits;

use Nord\Lumen\Elasticsearch\Search\Query\QueryDSL;

/**
 * Trait HasQuery
 * @package Nord\Lumen\Elasticsearch\Search\Query\Traits
 */
trait HasQuery
{

    /**
     * @var QueryDSL
     */
    protected $query;

    /**
     * @return QueryDSL
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * @param QueryDSL $query
     *
     * @return $this
     */
    public function setQuery($query)
    {
        $this->query = $query;

        return $this;
    }
}
