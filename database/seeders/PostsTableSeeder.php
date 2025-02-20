<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            [
                'title' => "Study Choice",
                'summary' => "Why I chose this study and what I'll be doing in the future!",
                'body' => "At the beginning of the year I had to choose between studying in Den Haag or Middelburg. I went to the HZ
      open day in March 2024 and that really helped to cement my decision to study here; the atmosphere was warm
      and the people were so friendly and welcoming. I also wanted to attend the online information session, but
      I was on holiday and completely forgot about. We got an email about it saying attendance was low, and I felt
      really bad about it haha.
      After school I'm hoping to get a good job. I'm not yet sure which field I'd like to work in, but I'm hoping
      to discover that as I get further into my studies. I'm also not sure which part of the world I'd like to be in;
      my family is in South Africa but I really enjoy it here in the Netherlands. I think that's also why I chose ICT,
      a lot of work can be done remotely, so I can have two different homes and still have one job.",
                'slug' => "study-choice",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => "Personal SWOT Analysis",
                'summary' => "The results from my SWOT analysis.",
                'body' => "I have a few strengths that I believe will help me in my studies. I am hardworking, organised, and good at
      problem solving. I think organisation will help me keep my code-quality neat, which will be beneficial to
      myself, as well as to others once I begin with group projects. It will also help me to stay on top of my work
      load, organising my schedule. I also enjoy problem solving because it feels like a puzzle; sometimes it can
      be frustrating, but once I've discovered the solution it makes all the frustration worth it.
      My weaknesses are my low self-confidence, indecisiveness, and tendency to become overwhelmed. I've struggled
      with decision-making for most of my life, whether it's something small, like choosing what to drink at a restaurant,
      or a big decision, like choosing what to study. I am working on this, but for now my solution is just choosing
      something instead of waiting endlessly. I'm also working on my low self-confidence, and I've noticed progress!
      However, I don't want to become TOO self-confident, so that is something I need to watch out for.
      During this study, I see the opportunity to expand my knowledge, build my character, and build lasting relationships.
      A few potential threats could be my job and my lack of coding experience. My working hours won't conflict with
      my study hours, but the workload might become too much for me. ",
                'slug' => "personal-swot-analysis",
                'created_at' => now(),
                'updated_at' => now()
            ],
            ['title' => "Programming Experience",
                'summary' => "My programming experience before coming to the HZ.",
                'body' => "I have very little previous programming experience. After finishing high school I started a python programming
      course on Udemy. I found it to be quite enjoyable and interesting, and it's part of why I was
      interested in studying ICT! Unfortunately, my laptop was stolen before I could complete the course, but I did complete
      my first milestone project, which was a game of noughts and crosses, very simple, but I was proud of myself.
      I also followed a YouTube video tutorial to make a game similar to 'Space Invaders'. I found that very
      fun! The only thing is that I can't remember any python at all, but I'm sure that I could pick it up again
      quickly.",
                'slug' => "programming-experience",
                'created_at' => now(),
                'updated_at' => now()
            ],
            ['title' => "First Feedback",
                'summary' => "The feedback I received after filling in the 'Who Am I?' questionnaire.",
                'body' => "In my first feedback, I received concern that my motivation wasn't enough to get me through the ICT study. I
      must admit that at the time of filling in the 'Who Am I?' questionnaire I was still not sure whether or not I
      would choose the HZ. I think that across text I might have sounded more unmotivated than I was meaning to be.
      Which specific study I chose wasn't really important to me, obviously I wasn't choosing at random, but I had
      a list of different studies that I wanted to do. That doesn't mean that I am not taking my studies seriously,
      I fully intend to put 100% effort into everything I do here.
      There was also concern about my working hours conflicting with my studies. For the last six weeks I have been
      working three to four days a week, and I found that it didn't effect my studies at all! I got enough sleep,
      managed to finish all of my school work on time, and still had personal time to spend by myself or with
      my friends. I know it might not stay this way later on in the study, once I become more busy, but I can always
      work less hours as I have a 0-hour contract.",
                'slug' => "first-feedback",
                'created_at' => now(),
                'updated_at' => now()
            ],
            ['title' => "Careers in ICT",
                'summary' => "A little bit about a few ICT careers that I find interesting.",
                'body' => "While building this website, I researched some different careers in the ICT field. A few that I thought sounded
      really cool were: web developer, software tester, game developer, and ethical hacker. Obviously I need more
      experience to figure out what I really enjoy, but at face value these seem really interesting. What I think
      I'd enjoy about being a web or game developer is taking ideas and being able to turn them into a reality, and
      being able to see my progress as I work on my projects.
      I also think I'd enjoy being a software tester or ethical hacker. I've always thought about being a proofreader,
      as I love searching for and finding errors, and my attention to detail helps me with this. Doing this with software
      would add a few extra layers to the challenge! I'll be hunting for and eliminating errors, like some kind of
      error hitman.",
                'slug' => "careers-in-ict",
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
