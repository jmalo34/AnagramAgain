<?php
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/Anagram.php';
    use Symfony\Component\Debug\Debug;
    Debug::enable();

    $app = new Silex\Application();
    $app['debug'] = TRUE;
    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

    $app->get('/', function () use ($app)
    {
        return $app['twig']->render('anagram.html.twig');
    });

    $app->get('anagramno', function() use($app)
    {

        $my_Anagram = new Anagram($_GET['a_word']);
        $yes_anagrams = $my_Anagram->check($_GET['the_word']);
        return $app['twig']->render('anagramno.html.twig', array('words' => $yes_anagrams));
    var_dump($yes_anagrams);
    var_dump($words);
    });

    return $app;
 ?>
