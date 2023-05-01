<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimeController extends Controller
{
    public function index(){
        $animes = [
            [
                'id' => '1',
                'AnimeName' => 'Jigokuraku (Hell`s Paradise)',
                'Genre' => 'Action, Adventure, Fantasy, Gore, Historical, Shounen',
                'Tier' => '1',
                'Rating' => '8.40',
                'Year' => '2023',
                'Synopsis' => 'This anime tells story about Gabimaru the Hollow, a ninja of Iwagakure Village known for being cold and emotionless, was set up by his fellow ninja and is now on death row. Tired of killing and betrayal, he wants to die. However, no method of execution works on him because as much as the seemingly apathetic Gabimaru refuses to admit it, he does have a reason to live. He wants to return to his wife, who was the reason why he softened up and failed to be an effective assassin. Thus, he refuses to die.',
                'Review' => 'I started watch this anime like 2 or 3 weeks ago because of the clip from instagram. At first, im a bit confused for the story but at the end of episode 2, I think start to understand the storyline of this anime. I really like this anime because of its fantasy about an undiscovered island that has many strange creature and for its gore and dark fantasy(I really loved it).',
                'Image' => '/anime/hell1.jpeg'
            ],
            [
                'id' => '2',
                'AnimeName' => 'Tengoku Daimakyo (Heavenly Delusion)',
                'Genre' => 'Adventure, Mystery, Sci-Fi, Survival, Seinen',
                'Tier' => '2',
                'Rating' => '8.08',
                'Year' => '2023',
                'Synopsis' => 'Within the safety of the walls, youths are raised in a nursery-style setting by robots. While life there may appear stale on the surface, the children are full of potential and curiosity. In many ways it is like a slice of heaven. The outside world is a hell-scape. It is almost entirely void of anything mechanical and is now inhabited by bizarre, yet powerful super-natural beings. The anime tell a story of two child, Maru, with the aid of Kiruko, is out there crisscrossing what was once Tokyo for heaven. But after searching for so long, maybe heaven is more of an untenable dream than a potential reality.',
                'Review' => 'I started watch this anime like 2 or 3 weeks ago because of the clip from instagram. At first, im a bit confused for the story but at the end of episode 2, I think start to understand the storyline of this anime. I really like this anime because of its fantasy about an undiscovered island that has many strange creature and for its gore and dark fantasy(I really loved it).',
                'Image' => '/anime/heavenly1.avif'
            ],
            [
                'id' => '3',
                'AnimeName' => 'Bungou Stray Dogs 4th Season',
                'Genre' => 'Action, Mystery, Supernatural, Adult Cast, Organized Crime, Super Power, Seinen',
                'Tier' => '1',
                'Rating' => '8.46',
                'Year' => '2023',
                'Synopsis' => 'This anime tells story about Gabimaru the Hollow, a ninja of Iwagakure Village known for being cold and emotionless, was set up by his fellow ninja and is now on death row. Tired of killing and betrayal, he wants to die. However, no method of execution works on him because as much as the seemingly apathetic Gabimaru refuses to admit it, he does have a reason to live. He wants to return to his wife, who was the reason why he softened up and failed to be an effective assassin. Thus, he refuses to die.',
                'Review' => 'I started watch this anime like 2 or 3 weeks ago because of the clip from instagram. At first, im a bit confused for the story but at the end of episode 2, I think start to understand the storyline of this anime. I really like this anime because of its fantasy about an undiscovered island that has many strange creature and for its gore and dark fantasy(I really loved it).',
                'Image' => '/anime/bungou1.png'
            ],
        ];

        return view('anime',compact('animes'));
    }

    public function show($id){
        $animes = [
            [
                'id' => '1',
                'AnimeName' => 'Jigokuraku (Hell`s Paradise)',
                'Genre' => 'Action, Adventure, Fantasy, Gore, Historical, Shounen',
                'Tier' => '1',
                'Rating' => '8.40',
                'Year' => '2023',
                'Synopsis' => 'This anime tells story about Gabimaru the Hollow, a ninja of Iwagakure Village known for being cold and emotionless, was set up by his fellow ninja and is now on death row. Tired of killing and betrayal, he wants to die. However, no method of execution works on him because as much as the seemingly apathetic Gabimaru refuses to admit it, he does have a reason to live. He wants to return to his wife, who was the reason why he softened up and failed to be an effective assassin. Thus, he refuses to die.',
                'Review' => 'I started watch this anime like 2 or 3 weeks ago because of the clip from instagram. At first, im a bit confused for the story but at the end of episode 1, I think start to understand the storyline of this anime. I really like this anime because of its fantasy about an undiscovered island that has many strange creature and for its gore and dark fantasy (I really loved it).',
                'Reason' => 'The reason I put Hell`s Paradise at God Tier List because the anime really show and bring us to its dark fantasy vibes. I really loved to see strong shinobi like Gabimaru trying to survive at this island with his power. Besides, the graphics and animation of this anime is really god tier that makes my eyes stunned',
                'Image' => '/anime/hell1.jpeg'
            ],
            [
                'id' => '1',
                'AnimeName' => 'Jigokuraku (Hell`s Paradise)',
                'Genre' => 'Action, Adventure, Fantasy, Gore, Historical, Shounen',
                'Tier' => '1',
                'Rating' => '8.40',
                'Year' => '2023',
                'Synopsis' => 'This anime tells story about Gabimaru the Hollow, a ninja of Iwagakure Village known for being cold and emotionless, was set up by his fellow ninja and is now on death row. Tired of killing and betrayal, he wants to die. However, no method of execution works on him because as much as the seemingly apathetic Gabimaru refuses to admit it, he does have a reason to live. He wants to return to his wife, who was the reason why he softened up and failed to be an effective assassin. Thus, he refuses to die.',
                'Review' => 'I started watch this anime like 2 or 3 weeks ago because of the clip from instagram. At first, im a bit confused for the story but at the end of episode 1, I think start to understand the storyline of this anime. I really like this anime because of its fantasy about an undiscovered island that has many strange creature and for its gore and dark fantasy (I really loved it).',
                'Reason' => 'The reason I put Hell`s Paradise at God Tier List because the anime really show and bring us to its dark fantasy vibes. I really loved to see strong shinobi like Gabimaru trying to survive at this island with his power. Besides, the graphics and animation of this anime is really god tier that makes my eyes stunned',
                'Image' => '/anime/hell1.jpeg'
            ],
            [
                'id' => '1',
                'AnimeName' => 'Jigokuraku (Hell`s Paradise)',
                'Genre' => 'Action, Adventure, Fantasy, Gore, Historical, Shounen',
                'Tier' => '1',
                'Rating' => '8.40',
                'Year' => '2023',
                'Synopsis' => 'This anime tells story about Gabimaru the Hollow, a ninja of Iwagakure Village known for being cold and emotionless, was set up by his fellow ninja and is now on death row. Tired of killing and betrayal, he wants to die. However, no method of execution works on him because as much as the seemingly apathetic Gabimaru refuses to admit it, he does have a reason to live. He wants to return to his wife, who was the reason why he softened up and failed to be an effective assassin. Thus, he refuses to die.',
                'Review' => 'I started watch this anime like 2 or 3 weeks ago because of the clip from instagram. At first, im a bit confused for the story but at the end of episode 1, I think start to understand the storyline of this anime. I really like this anime because of its fantasy about an undiscovered island that has many strange creature and for its gore and dark fantasy (I really loved it).',
                'Reason' => 'The reason I put Hell`s Paradise at God Tier List because the anime really show and bring us to its dark fantasy vibes. I really loved to see strong shinobi like Gabimaru trying to survive at this island with his power. Besides, the graphics and animation of this anime is really god tier that makes my eyes stunned',
                'Image' => '/anime/hell1.jpeg'
            ],
        ];

        $anime = $animes[$id-1];

        return view('animeDetail',compact('anime'));
    }
}
