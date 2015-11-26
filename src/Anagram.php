<?php
    class Anagram
    {
        private $a_word;

        function __construct($a_word)
        {
            $this->a_word = $a_word;
        }

        function setAword($new_a_word)
        {
            $this->a_word = $new_a_word;
        }

        function getAword()
        {
            return $this->a_word;
        }

        function check($the_word)
        {
            $word_list = explode(' ', $this->a_word);

            $remixed_the_word = str_split(strtolower(preg_replace('/[^a-zA-Z]/', '', ($the_word))));

            sort($remixed_the_word);

            $yes_anagrams = array();

            foreach ($word_list as $word)
            {
                // $word = new Anagram($word);
                $single_morph = str_split(strtolower(preg_replace('/[^a-zA-Z]/', '', $word)));

                sort($single_morph);

                if ((implode($single_morph)) == (implode($remixed_the_word)))
                {
                    array_push($yes_anagrams, new Anagram($word));
                }
            }

            return $yes_anagrams;
        }
    }
 ?>
