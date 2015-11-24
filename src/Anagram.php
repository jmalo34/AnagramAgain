<?php
    class Anagram
    {
        private $original;

        // function __construct($original)
        // {
        //     $this->original = $original;
        // }

        function check($word)
        {
            $word = strtolower(preg_replace('/[^a-zA-Z]/', '', $word));

            // if ($word == $this->original)
            // {
            //     $YorN = 'YESSIR';
            // }
            // else
            // {
            //     $YorN = 'NOPE';
            // }

            return $word;
        }
    }
 ?>
