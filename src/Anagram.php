<?php
    class Anagram
    {
        private $original;

        function __construct($original)
        {
            $this->original = $original;
        }

        function check($word)
        {
            $word = str_split(strtolower(preg_replace('/[^a-zA-Z]/', '', $word)));

            $remixed = str_split(strtolower($this->original));

            sort($word);
            sort($remixed);

            if ((implode($word)) == (implode($remixed)))
            {
                $YorN = 'YESSIR';
            }
            else
            {
                $YorN = 'NOPE';
            }

            return $YorN;
        }
    }
 ?>
