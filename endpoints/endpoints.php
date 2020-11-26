<?php 
    $userPath = array(
        'userById' => '/2/users/',
        'usersByUsername' => '/2/users/by/',
        'userByUsername' => '/2/users/by/username/',
    );

    $userParams = array(
        'expansions' => [
            '' => 'pinned_tweet_id',
        ],
        'ids' => [],
        'tweet.fields' => [],
        'user.fields' => [],
    );
?>