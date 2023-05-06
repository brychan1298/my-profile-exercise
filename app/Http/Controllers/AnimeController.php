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
                'Review' => 'I started watch this anime like 2 or 3 weeks ago because of the clip from instagram. At first, im a bit confused for the story but at the end of episode 1, I think start to understand the storyline of this anime. I really like this anime because of its fantasy about an undiscovered island that has many strange creature and for its gore and dark fantasy (I really loved it).',
                'Reason' => 'The reason I put Hell`s Paradise at God Tier List because the anime really show and bring us to its dark fantasy vibes. I really loved to see strong shinobi like Gabimaru trying to survive at this island with his power. Besides, the graphics and animation of this anime is really god tier that makes my eyes stunned',
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
                'Review' => 'I really like the concept of finding the heaven of this anime. Although, it also give me The Promises Neverland`s Vibes, where there is a wall that separates them from outside of the world. Then, i also like its dark vibes where there is some Monsters outside the wall. I really hope it continue to other season.',
                'Reason' => 'GOOD Tier is quite dubious choice for me, cause I think it has the potential to be higher, but I think i will rethink about it when more episodes has come.',
                'Image' => '/anime/heavenly1.avif'
            ],
            [
                'id' => '3',
                'AnimeName' => 'Bungou Stray Dogs 4th Season',
                'Genre' => 'Action, Mystery, Supernatural, Adult Cast, Organized Crime, Super Power, Seinen',
                'Tier' => '1',
                'Rating' => '8.46',
                'Year' => '2023',
                'Synopsis' => 'This anime was a continuation of the previous season of Bungou Stray Dogs. At this season, the Armed Detective Agency will try to prove that they wasn`t a criminal. Now branded as wanted terrorists, the remaining members must find a way to prove their innocence—even if they must turn to sworn enemies for assistance.',
                'Review' => 'For me personally, i really like the start of the anime where it shows the past of Yukichi Fukuzawa before he creates Armed Detective Agency. I really feel the chill of the anime where there are many serious and funny characters at the same time. I also really like the connection between every characters where the villain is also lovable.',
                'Reason' => 'I always love the series of Bungou Stray Dogs from Season 1. It is always be one of the anime that i was waiting for airing.',
                'Image' => '/anime/bungou1.png'
            ],
            [
                'id' => '4',
                'AnimeName' => 'Tokyo Revengers',
                'Genre' => 'Action, Drama, Supernatural, Delinquents, Time Travel, Shounen',
                'Tier' => '3',
                'Rating' => '8.01',
                'Year' => '2021',
                'Synopsis' => 'This anime has a character named Takemichi Hanagaki, a second year of middle school was the highest point in his life. He had respect, a gang of friends he could count on, and even a girlfriend. But that was twelve years ago. Today, he is a nobody: a washed-up nonentity made fun of by children and always forced to apologize to his younger boss. A sudden news report on the Tokyo Manji Gangs cruel murder of the only girlfriend he ever had alongside her brother only adds insult to injury. Half a second before a train ends his pitiful life for good, Takemichi flashes back to that same day 12 years ago, when he was still dating Hinata Tachibana.',
                'Review' => 'I watched this anime cause of its hype on Social Media. So, i started to watch Tokyo Revengers, but i really got dissapointed by it.... I think this anime is for a kid LoL. I feel like the storyline is really cringe where a bump of Junior High School Student made a gang. Besides that, the animation is very very stiff',
                'Reason' => 'The reason I put it in the MEH Tier, ofc cause i really bored when i watch this anime. I dropped it on episode 3 or 4. When watching this anime, i really feel like my whole time watching this show is stupid.',
                'Image' => '/anime/tokyo1.jpeg'
            ],
            [
                'id' => '5',
                'AnimeName' => 'Boku No Hero Academia 6th Season',
                'Genre' => 'Action, Comedy, Drama, School, Super Power, Shounen',
                'Tier' => '2',
                'Rating' => '8.37',
                'Year' => '2022 - 2023',
                'Synopsis' => 'Continues the story from the previous season, With Tomura Shigaraki at its helm, the former Liberation Army is now known as the Paranormal Liberation Front. This organized criminal group poses an immense threat to the Hero Association, not only because of its sheer size and strength, but also the overpowering quirks of Jin "Twice" Bubaigawara and Gigantomachia. As new intel from the covert hero Keigo "Hawks" Takami confirms that Shigaraki is nowhere to be seen, the Hero Association decides to strike the enemy headquarters with a surprise attack using the entirety of its assets—and the UA students find themselves on the battlefield once again. As the fight rages on, the unsuspecting villains must regroup and push back, but the brave heroes are determined to eradicate every last one of them.',
                'Review' => 'This sixth season of Boku no Hero Academia Series for me is really fine. It is start with a big war between Heroes and Liberation Army that led by Tomura Shigaraki while he was being put to sleep to instill the All For One power. The action on this season is quite intense and I like the villain appearance of Deku. Well, it is good for me',
                'Reason' => 'I put this season to GOOD Tier maybe because the pace is just too fast for me. I think there are a few things that could be more detailed. But it is still good for me and I was waiting for the newest season where the final fight between One For All and All For One will be held.',
                'Image' => '/anime/boku1.jpeg'
            ],
            [
                'id' => '6',
                'AnimeName' => 'Chainsaw Man',
                'Genre' => 'Action, Fantasy, Gore, Shounen',
                'Tier' => '1',
                'Rating' => '8.61',
                'Year' => '2022',
                'Synopsis' => 'Denji is robbed of a normal teenage life, left with nothing but his deadbeat father`s overwhelming debt. His only companion is his pet, the chainsaw devil Pochita, with whom he slays devils for money that inevitably ends up in the yakuza`s pockets. All Denji can do is dream of a good, simple life: one with delicious food and a beautiful girlfriend by his side. But an act of greedy betrayal by the yakuza leads to Denji`s brutal, untimely death, crushing all hope of him ever achieving happiness.',
                'Review' => 'One of the best anime from Fall 2022. Mappa once again success to bring us some high quality anime with its God Tier Animation but also seek for the good storyline. Chainsaw Man really give some fresh air in my watching list. I really love the journey of Denji `With` Pochita. This anime also has a good pace for me, we can see his adventures with other characters. The drama that is obtained is also felt although its from side character.',
                'Reason' => 'Chainsaw Man obviously reach GOD Tier for me. I really enjoy watching this anime and its also really hype in my class. The animation and graphics from Mappa is always promising so it never dissapoint us. I hope Mappa will work the season 2 Soon.',
                'Image' => '/anime/chainsaw.png'
            ],
            [
                'id' => '7',
                'AnimeName' => 'Maou Gakuin no Futekigousha',
                'Genre' => 'Action, Fantasy, Mythology, Reincarnation, School',
                'Tier' => '3',
                'Rating' => '6.97',
                'Year' => '2023',
                'Synopsis' => 'As peace returns to the demon realm, Anos Voldigoad wishes nothing more than to put his reputation as the Demon King of Tyranny to rest and go back to being a misfit at the prestigious Demon King Academy. Unfortunately, any tranquility is fleeting: sinister demons, kings, and deities plot Anos`s demise from the shadows.',
                'Review' => 'The continuation of the 1st Season of this anime. I actually watch this anime because its hype on social media. Actually i kinda like the first season but when it comes to the end of the 1st Season, I really feel like the anime is to cringe for fantasy anime. I watch the 2nd season for one episode only and drop it. I feel really bored while watching it.',
                'Reason' => 'I really feel like this anime is too cringe. The animation is kinda rigit and trash lol. I still watch it because i want to see Anos, but the two girl side character always pisses me off. So i cant continue to watch this anime. That`s why its a MEH Tier.',
                'Image' => '/anime/maou1.jpeg'
            ],
            [
                'id' => '8',
                'AnimeName' => 'Spy X Family Part 2',
                'Genre' => 'Action, Comedy, Childcare, Shounen',
                'Tier' => '1',
                'Rating' => '8.33',
                'Year' => '2022',
                'Synopsis' => 'With Anya Forger successfully enrolled at the renowned Eden Academy, Operation Strix advances to its second phase. To investigate Ostanian politician Donovan Desmond, Anya must either befriend his son Damian or collect eight Stella Stars to become an Imperial Scholar. Fortunately, Anya has already acquired her first star. In celebration, her adoptive father, Loid, decides to fulfill her wish to adopt a dog.During their canine search, Loid receives new orders from his superiors, who have found that a band of Berlint University students is plotting to assassinate Westalis Minister Brantz using bombs worn by trained dogs. While Loid tries to stop their plans, Anya stumbles upon the terrorists base of operations. There, she befriends a kindhearted, clairvoyant dog who the family later names Bond. Although the Forgers continue to lead their individual lives in secrecy, the family—with a new fluffy addition—remains united through all of the unusual obstacles thrown their way.',
                'Review' => 'Anya is very very kawai. Also one of the best anime, Spy X Family really bless us with fresh comedy by Forger`s Family. Anya`s Trend is really breaking the internet. This anime never get me tired, even when its showed up at my instagram, i never skipped it. Waku^Waku^.',
                'Reason' => 'I think for me personal, there is no reason to not put Spy X Family series in GOD Tier. This anime is very worth watching while you are free, everyone will feel joy wathing Anya with its funny behavior. I also love interactions between Loid and Yor. Besides that, the graphics and animations are GOD Tier.',
                'Image' => '/anime/spy1.jpeg'
            ],
            [
                'id' => '9',
                'AnimeName' => 'Blue Lock',
                'Genre' => 'Sports, Team Sports, Shounen',
                'Tier' => '2',
                'Rating' => '8.37',
                'Year' => '2022 - 2023',
                'Synopsis' => 'Yoichi Isagi was mere moments away from scoring a goal that would have sent his high school soccer team to the nationals, but a split-second decision to pass the ball to his teammate cost him that reality. Bitter, confused, and disappointed, Isagi wonders if the outcome would have been different had he not made the pass. When the young striker returns home, an invitation from the Japan Football Union awaits him. Through an arbitrary and biased decision-making process, Isagi is one of three hundred U-18 strikers selected for a controversial project named Blue Lock.

                The project`s ultimate goal is to turn one of the selected players into the star striker for the Japanese national team. To find the best participant, each diamond in the rough must compete against others through a series of solo and team competitions to rise to the top. Putting aside his ethical objections to the project, Isagi feels compelled to fight his way to the top, even if it means ruthlessly crushing the dreams of 299 aspiring young strikers.',

                'Review' => 'Blue Lock is very hype at the times it airing, especially at that time, World Cup 2022 event has started. There are so many meme,content with Blue Lock`s Reference on Social Media. I really like sports anime. After watching Haikyuu, I dont really find good sport anime, but Blue Lock has fill the blanks. The anime really has some good quality graphics and sounds. The storyline and concept of football really hook me up.',

                'Reason' => 'The reason its not on GOD Tier is because for me, the anime still has some bad CGI on it. Sometimes i think the move on this anime is not really make sense. But I hope in the next season, it will improve. Even though, I still enjoying watching Blue Lock, especially there are some cool characters.',

                'Image' => '/anime/blue1.jpeg'
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
                'id' => '2',
                'AnimeName' => 'Tengoku Daimakyo (Heavenly Delusion)',
                'Genre' => 'Adventure, Mystery, Sci-Fi, Survival, Seinen',
                'Tier' => '2',
                'Rating' => '8.08',
                'Year' => '2023',
                'Synopsis' => 'Within the safety of the walls, youths are raised in a nursery-style setting by robots. While life there may appear stale on the surface, the children are full of potential and curiosity. In many ways it is like a slice of heaven. The outside world is a hell-scape. It is almost entirely void of anything mechanical and is now inhabited by bizarre, yet powerful super-natural beings. The anime tell a story of two child, Maru, with the aid of Kiruko, is out there crisscrossing what was once Tokyo for heaven. But after searching for so long, maybe heaven is more of an untenable dream than a potential reality.',
                'Review' => 'I really like the concept of finding the heaven of this anime. Although, it also give me The Promises Neverland`s Vibes, where there is a wall that separates them from outside of the world. Then, i also like its dark vibes where there is some Monsters outside the wall. I really hope it continue to other season.',
                'Reason' => 'GOOD Tier is quite dubious choice for me, cause I think it has the potential to be higher, but I think i will rethink about it when more episodes has come.',
                'Image' => '/anime/heavenly1.avif'
            ],
            [
                'id' => '3',
                'AnimeName' => 'Bungou Stray Dogs 4th Season',
                'Genre' => 'Action, Mystery, Supernatural, Adult Cast, Organized Crime, Super Power, Seinen',
                'Tier' => '1',
                'Rating' => '8.46',
                'Year' => '2023',
                'Synopsis' => 'This anime was a continuation of the previous season of Bungou Stray Dogs. At this season, the Armed Detective Agency will try to prove that they wasn`t a criminal. Now branded as wanted terrorists, the remaining members must find a way to prove their innocence—even if they must turn to sworn enemies for assistance.',
                'Review' => 'For me personally, i really like the start of the anime where it shows the past of Yukichi Fukuzawa before he creates Armed Detective Agency. I really feel the chill of the anime where there are many serious and funny characters at the same time. I also really like the connection between every characters where the villain is also lovable.',
                'Reason' => 'I always love the series of Bungou Stray Dogs from Season 1. It is always be one of the anime that i was waiting for airing.',
                'Image' => '/anime/bungou1.png'
            ],
            [
                'id' => '4',
                'AnimeName' => 'Tokyo Revengers',
                'Genre' => 'Action, Drama, Supernatural, Delinquents, Time Travel, Shounen',
                'Tier' => '3',
                'Rating' => '8.01',
                'Year' => '2021',
                'Synopsis' => 'This anime has a character named Takemichi Hanagaki, a second year of middle school was the highest point in his life. He had respect, a gang of friends he could count on, and even a girlfriend. But that was twelve years ago. Today, he is a nobody: a washed-up nonentity made fun of by children and always forced to apologize to his younger boss. A sudden news report on the Tokyo Manji Gangs cruel murder of the only girlfriend he ever had alongside her brother only adds insult to injury. Half a second before a train ends his pitiful life for good, Takemichi flashes back to that same day 12 years ago, when he was still dating Hinata Tachibana.',
                'Review' => 'I watched this anime cause of its hype on Social Media. So, i started to watch Tokyo Revengers, but i really got dissapointed by it.... I think this anime is for a kid LoL. I feel like the storyline is really cringe where a bump of Junior High School Student made a gang. Besides that, the animation is very very stiff',
                'Reason' => 'The reason I put it in the MEH Tier, ofc cause i really bored when i watch this anime. I dropped it on episode 3 or 4. When watching this anime, i really feel like my whole time watching this show is stupid.',
                'Image' => '/anime/tokyo1.jpeg'
            ],
            [
                'id' => '5',
                'AnimeName' => 'Boku No Hero Academia 6th Season',
                'Genre' => 'Action, Comedy, Drama, School, Super Power, Shounen',
                'Tier' => '2',
                'Rating' => '8.37',
                'Year' => '2022 - 2023',
                'Synopsis' => 'Continues the story from the previous season, With Tomura Shigaraki at its helm, the former Liberation Army is now known as the Paranormal Liberation Front. This organized criminal group poses an immense threat to the Hero Association, not only because of its sheer size and strength, but also the overpowering quirks of Jin "Twice" Bubaigawara and Gigantomachia. As new intel from the covert hero Keigo "Hawks" Takami confirms that Shigaraki is nowhere to be seen, the Hero Association decides to strike the enemy headquarters with a surprise attack using the entirety of its assets—and the UA students find themselves on the battlefield once again. As the fight rages on, the unsuspecting villains must regroup and push back, but the brave heroes are determined to eradicate every last one of them.',
                'Review' => 'This sixth season of Boku no Hero Academia Series for me is really fine. It is start with a big war between Heroes and Liberation Army that led by Tomura Shigaraki while he was being put to sleep to instill the All For One power. The action on this season is quite intense and I like the villain appearance of Deku. Well, it is good for me',
                'Reason' => 'I put this season to GOOD Tier maybe because the pace is just too fast for me. I think there are a few things that could be more detailed. But it is still good for me and I was waiting for the newest season where the final fight between One For All and All For One will be held.',
                'Image' => '/anime/boku1.jpeg'
            ],
            [
                'id' => '6',
                'AnimeName' => 'Chainsaw Man',
                'Genre' => 'Action, Fantasy, Gore, Shounen',
                'Tier' => '1',
                'Rating' => '8.61',
                'Year' => '2022',
                'Synopsis' => 'Denji is robbed of a normal teenage life, left with nothing but his deadbeat father`s overwhelming debt. His only companion is his pet, the chainsaw devil Pochita, with whom he slays devils for money that inevitably ends up in the yakuza`s pockets. All Denji can do is dream of a good, simple life: one with delicious food and a beautiful girlfriend by his side. But an act of greedy betrayal by the yakuza leads to Denji`s brutal, untimely death, crushing all hope of him ever achieving happiness.',
                'Review' => 'One of the best anime from Fall 2022. Mappa once again success to bring us some high quality anime with its God Tier Animation but also seek for the good storyline. Chainsaw Man really give some fresh air in my watching list. I really love the journey of Denji `With` Pochita. This anime also has a good pace for me, we can see his adventures with other characters. The drama that is obtained is also felt although its from side character.',
                'Reason' => 'Chainsaw Man obviously reach GOD Tier for me. I really enjoy watching this anime and its also really hype in my class. The animation and graphics from Mappa is always promising so it never dissapoint us. I hope Mappa will work the season 2 Soon.',
                'Image' => '/anime/chainsaw.png'
            ],
            [
                'id' => '7',
                'AnimeName' => 'Maou Gakuin no Futekigousha',
                'Genre' => 'Action, Fantasy, Mythology, Reincarnation, School',
                'Tier' => '3',
                'Rating' => '6.97',
                'Year' => '2023',
                'Synopsis' => 'As peace returns to the demon realm, Anos Voldigoad wishes nothing more than to put his reputation as the Demon King of Tyranny to rest and go back to being a misfit at the prestigious Demon King Academy. Unfortunately, any tranquility is fleeting: sinister demons, kings, and deities plot Anos`s demise from the shadows.',
                'Review' => 'The continuation of the 1st Season of this anime. I actually watch this anime because its hype on social media. Actually i kinda like the first season but when it comes to the end of the 1st Season, I really feel like the anime is to cringe for fantasy anime. I watch the 2nd season for one episode only and drop it. I feel really bored while watching it.',
                'Reason' => 'I really feel like this anime is too cringe. The animation is kinda rigit and trash lol. I still watch it because i want to see Anos, but the two girl side character always pisses me off. So i cant continue to watch this anime. That`s why its a MEH Tier.',
                'Image' => '/anime/maou1.jpeg'
            ],
            [
                'id' => '8',
                'AnimeName' => 'Spy X Family Part 2',
                'Genre' => 'Action, Comedy, Childcare, Shounen',
                'Tier' => '1',
                'Rating' => '8.33',
                'Year' => '2022',
                'Synopsis' => 'With Anya Forger successfully enrolled at the renowned Eden Academy, Operation Strix advances to its second phase. To investigate Ostanian politician Donovan Desmond, Anya must either befriend his son Damian or collect eight Stella Stars to become an Imperial Scholar. Fortunately, Anya has already acquired her first star. In celebration, her adoptive father, Loid, decides to fulfill her wish to adopt a dog.During their canine search, Loid receives new orders from his superiors, who have found that a band of Berlint University students is plotting to assassinate Westalis Minister Brantz using bombs worn by trained dogs. While Loid tries to stop their plans, Anya stumbles upon the terrorists base of operations. There, she befriends a kindhearted, clairvoyant dog who the family later names Bond. Although the Forgers continue to lead their individual lives in secrecy, the family—with a new fluffy addition—remains united through all of the unusual obstacles thrown their way.',
                'Review' => 'Anya is very very kawai. Also one of the best anime, Spy X Family really bless us with fresh comedy by Forger`s Family. Anya`s Trend is really breaking the internet. This anime never get me tired, even when its showed up at my instagram, i never skipped it. Waku^Waku^.',
                'Reason' => 'I think for me personal, there is no reason to not put Spy X Family series in GOD Tier. This anime is very worth watching while you are free, everyone will feel joy wathing Anya with its funny behavior. I also love interactions between Loid and Yor. Besides that, the graphics and animations are GOD Tier.',
                'Image' => '/anime/spy1.jpeg'
            ],
            [
                'id' => '9',
                'AnimeName' => 'Blue Lock',
                'Genre' => 'Sports, Team Sports, Shounen',
                'Tier' => '2',
                'Rating' => '8.37',
                'Year' => '2022 - 2023',
                'Synopsis' => 'Yoichi Isagi was mere moments away from scoring a goal that would have sent his high school soccer team to the nationals, but a split-second decision to pass the ball to his teammate cost him that reality. Bitter, confused, and disappointed, Isagi wonders if the outcome would have been different had he not made the pass. When the young striker returns home, an invitation from the Japan Football Union awaits him. Through an arbitrary and biased decision-making process, Isagi is one of three hundred U-18 strikers selected for a controversial project named Blue Lock.

                The project`s ultimate goal is to turn one of the selected players into the star striker for the Japanese national team. To find the best participant, each diamond in the rough must compete against others through a series of solo and team competitions to rise to the top. Putting aside his ethical objections to the project, Isagi feels compelled to fight his way to the top, even if it means ruthlessly crushing the dreams of 299 aspiring young strikers.',

                'Review' => 'Blue Lock is very hype at the times it airing, especially at that time, World Cup 2022 event has started. There are so many meme,content with Blue Lock`s Reference on Social Media. I really like sports anime. After watching Haikyuu, I dont really find good sport anime, but Blue Lock has fill the blanks. The anime really has some good quality graphics and sounds. The storyline and concept of football really hook me up.',

                'Reason' => 'The reason its not on GOD Tier is because for me, the anime still has some bad CGI on it. Sometimes i think the move on this anime is not really make sense. But I hope in the next season, it will improve. Even though, I still enjoying watching Blue Lock, especially there are some cool characters.',

                'Image' => '/anime/blue1.jpeg'
            ],
        ];

        $anime = $animes[$id-1];

        return view('animeDetail',compact('anime'));
    }
}
