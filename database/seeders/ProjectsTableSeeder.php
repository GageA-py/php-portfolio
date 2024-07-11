<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $leafImage = 'images/leafs_7.png';

        Project::create([
            'title' => 'Leafs WordPress Hockey Blog + API',
            'description' => 'A WordPress site for blog posts about the Toronto Maple Leafs NHL team.
            Also calls Flask API I made and puts the scoreboard as a separate page on the blog.',
            'tags' => 'PHP',
            'image' => $leafImage,
            'link' => '',
        ]);

        $spaceInvadersImage = 'images/space_invader.png';

        Project::create([
            'title' => 'Python Space Invaders Game',
            'description' => 'A remake of the classic game Space Invaders. Features include
            limited lives, increasing difficulty by level, high scores and score multiplier.',
            'tags' => 'Python',
            'image' => $spaceInvadersImage,
            'link' => 'https://github.com/GageA-py/SpaceInvaders',
        ]);

        $learningLogImage = 'images/learninglog.png';

        Project::create([
            'title' => 'Django Learning Log App',
            'description' => 'A simple web application for taking notes built in Python 
            using the Django framework. Users can register/login, and take note of what they\'re
            learning, with sub-categories for each topic.',

            'tags' => 'Python',
            'image' => $learningLogImage,
            'link' => 'https://github.com/GageA-py/learning-log',
        ]);

        $twitterImage = 'images/twitter.png';

        Project::create([
            'title' => 'Python Django Twitter Clone',
            'description' => 'A clone of the Twitter dashboard. Users can sign up, sign in and out,
            create, edit and delete Tweets.',
            'tags' => 'Python',
            'image' => $twitterImage,
            'link' => 'https://github.com/GageA-py/Django-Twitter-Clone/tree/master',
        ]);

        $nhlImage = 'images/nhl_scores.png';

        Project::create([
            'title' => 'NHL Scoreboard Flask API',
            'description' => 'A simple application that pulls data from the NHL API, and creates a scoreboard to format the data in a readable way.',
            'tags' => 'Python',
            'image' => $nhlImage,
            'link' => 'https://github.com/GageA-py/nhl-scores',
        ]);

        

    }
}