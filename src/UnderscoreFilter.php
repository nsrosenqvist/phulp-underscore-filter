<?php namespace NSRosenqvist\Phulp;

use Phulp\Source;
use Phulp\DistFile;
use Phulp\Filter\Filter;

class UnderscoreFilter implements \Phulp\PipeInterface
{
    public function execute(Source $src)
    {
        $filter = new Filter(function (DistFile $file) {
            return (substr($file->getName(), 0, 1) !== '_') ? true : false;
        });

        $filter->execute($src);
    }
}
