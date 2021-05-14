<?php

class ArrayList
{
    public array $arrayList;

    public function __construct($arr)
    {
        if (is_array($arr)) {
            $this->arrayList = $arr;
        } else {
            $this->arrayList = [];
        }
    }

    public function add($obj)
    {
        array_push($this->arrayList, $obj);
    }

    public function isInteger($toCheck): bool
    {
        return preg_match("/^[0-9]+$/", $toCheck);
    }

    public function size(): int
    {
        return count($this->arrayList);
    }

    public function get($index)
    {
        if ($index < $this->size() && $this->isInteger($index)) {
            return $this->arrayList[$index];
        } else {
            die("ERROR in ArrayList.get");
        }
    }

    public function remove($index)
    {
        if ($index < $this->size() && $this->isInteger($index)) {
            unset($this->arrayList[$index]);
        }
        return -1;
    }

    public function __toString(): string
    {
        return $this->get();
        // TODO: Implement __toString() method.
    }


}