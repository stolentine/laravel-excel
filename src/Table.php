<?php

namespace Stolentine\Excel;

class Table
{
    public function __construct(
        public array $rows = [],
        public array $headings = []
    ) {
    }
}
