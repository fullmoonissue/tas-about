---
class: 'text-center'
---

<style>
.col-left, .col-right {
    margin-right: 30px;
}
</style>

# TAS About

Documentation à propos des Speedruns & Tool-Assisted Speedruns

Par Full Moon Issue

<a href="https://github.com/FullMoonIssue" target="_blank">Github</a> - <a href="https://www.youtube.com/channel/UCyIgZhTFSpPe_E7WRFzRBCQ" target="_blank">Youtube</a>

Réalisé avec <a href="https://github.com/slidevjs/slidev" target="_blank">Slidev</a>

---
layout: two-cols
---

# Menu

- Speedrun
  - Définition
  - Catégorie
  - Chronomètre
- Tool-Assisted Speedrun
  - Émulateur BizHawk
- Annexes
  - Vocabulaire
  - LiveSplit
  - Ressources
  - Évènements
  - Autres TA
  - Speedrun et TAS

::right::

# &nbsp;

- Techniques
  - Glitch / Glitch Hunting
  - Langue du jeu
  - Menuing
  - Routing / Route Planning
  - Réduction des lags
  - Sequence Break / Skip
  - Damage Boost / Take damage to save time
  - Death Warp / Death Abuse
  - Pause Buffering
  - Out of Bounds
  - Manipulation de la chance
  - Arbitrary Code Execution

---
layout: cover
---

# Speedrun

---
layout: two-cols
---

# Définition

### Speedrun et TAS (Tool-Assisted Speedrun)

Rechercher à réaliser le meilleur temps pour finir un jeu est la discipline du speedrunning.

Un speedrun s'effectue "en live" sur une console ou sur un ordinateur alors qu'un TAS s'effectue sur un ordinateur avec :
- un émulateur pour les jeux sur console (exemple : <a href="https://github.com/TASVideos/BizHawk" target="_blank">BizHawk</a>)
- un logiciel pour les jeux sur ordinateur (exemple : <a href="https://github.com/clementgallet/libTAS" target="_blank">LibTAS</a>)

Un TAS est représenté par <a href="http://tasvideos.org/Bizhawk/BK2Format.html#InputLog" target="_blank">un fichier</a> qui liste les inputs (touches) appuyés à une frame (image) particulière.

::right::

# &nbsp;

### En complément (Speedrun)

- 🇫🇷 <a href="https://www.youtube.com/watch?v=akQuKUa-Iho" target="_blank">Introduction au Speedrun</a>

- 🇫🇷 <a href="https://www.youtube.com/watch?v=7HhXrAeEd2M" target="_blank">Comment commencer le speedrun</a>

- 🇺🇸 <a href="https://www.youtube.com/watch?v=fTElGPOsdd8" target="_blank">What is Speedrunning?</a>

- 🇺🇸 <a href="https://www.youtube.com/watch?v=Zxhd4tGuhf4" target="_blank">How To Start Speedrunning</a>

### En complément (TAS)

- 🇫🇷 <a href="https://www.youtube.com/watch?v=XrNrJ9G8-Do" target="_blank">Conférence sur le Tool-Assisted Speedrun</a>

- 🇫🇷 <a href="https://www.youtube.com/embed/dcbdhDqBx_g?start=225&end=1252" target="_blank">Comment réaliser un TAS</a>

- 🇺🇸 <a href="https://www.youtube.com/watch?v=Ietk1-Wb7oY" target="_blank">Tool-assisted speedrunning explained</a>

- 🇺🇸 <a href="https://www.youtube.com/watch?v=R3-ohYvi_fc" target="_blank">Introduction to TAS</a>

---
layout: two-cols
---

# Catégorie

### Critères amenant à différentes catégories

Pourcentage de jeu réalisé

- <a href="https://www.youtube.com/watch?v=qYus40vi-Tw" target="_blank">Low%</a> (prendre le moins d'items possible)
- <a href="https://www.youtube.com/watch?v=nDnJw6MyVF8" target="_blank">Any%</a> (catégorie par défaut, se rendre à la fin)
- <a href="https://www.youtube.com/watch?v=kFT5zbKo23s" target="_blank">100%</a> (réaliser tous les objectifs d'un jeu)

Utilisation de glitchs / bugs

- <a href="https://www.youtube.com/watch?v=vjMAH3I55bk" target="_blank">Glitchless</a> (liste réduite de glitchs autorisés)
- <a href="https://www.youtube.com/watch?v=ZEWnHPXEOYQ" target="_blank">NMG</a> (No Major Glitch)

Autres

- <a href="https://www.youtube.com/watch?v=1xJIJ7bjSdU" target="_blank">DLC</a> / <a href="https://www.youtube.com/watch?v=rg0n2Ctbuug" target="_blank">Rom Hack</a>
- <a href="https://www.youtube.com/watch?v=3VHBGoWDFR0" target="_blank">Version du jeu</a> / <a href="https://www.youtube.com/watch?v=LoTorn8_3C8" target="_blank">Patch (Correctif) appliqué</a>

::right::

# &nbsp;

### Extensions de catégorie

La communauté autour d'un jeu peut proposer des catégories supplémentaires.

- <a href="https://www.youtube.com/watch?v=E0jcnyb2eec" target="_blank">RBO</a> (Reverse Boss Order, battre les boss dans l'ordre inverse du jeu)
- <a href="https://www.youtube.com/watch?v=UESSGDT-Oww" target="_blank">Damageless</a> (ne prendre aucun coup)
- Et bien d'autres (exemples : <a href="https://www.speedrun.com/celeste_category_extensions" target="_blank">Celeste</a>, <a href="https://www.speedrun.com/outlastmemes" target="_blank">Outlast</a>)

### &nbsp;

### Encore d'autres catégories

Avec <a href="https://www.youtube.com/watch?v=1EOzbAHPmvM" target="_blank">contraintes multiples</a> ou encore :

- <a href="https://www.youtube.com/watch?v=IBDp3wnrOAo" target="_blank">Minimum Press</a>
- <a href="https://www.youtube.com/watch?v=OF2UwcIZ-DI" target="_blank">Maximum Score</a>

---
layout: two-cols
---

# Chronomètre

### En Speedrun

RTA (Real Time Attack) est le temps écoulé dans la vie réelle.
Une fois l'accord trouvé par la communauté pour savoir quand démarrer et arrêter le chronomètre, le temps écoulé entre ces deux actions sera le temps du speedrun.

IGT (In-Game Time) est le temps écoulé mais calculé par le jeu.
Il peut comprendre notamment les temps de chargements et le temps passé dans les cinématiques.

Le choix entre RTA et IGT peut se faire :
- Suivant <a href="https://www.reddit.com/r/speedrun/comments/7a8223/igt_vs_rta_when_should_a_leaderboard_use_which/dp88pli/" target="_blank">certains éléments de jeu</a>
- Par le biais d'un <a href="https://www.speedrun.com/Speedrunning/thread/b5rk1" target="_blank">débat</a>

::right::

# &nbsp;

### En TAS

Le calcul du temps pour un TAS est plus simple que pour un speedrun car la méthode est toujours la même.

Le chronomètre démarre au moment où le jeu est lancé et s'arrête lorsque le dernier input est appuyé.

---
layout: cover
---

# Tool-Assisted Speedrun

---
layout: two-cols
---

# Émulateur BizHawk

### Présentation

- Gère plusieurs consoles (PS1, Saturn, GB, ...)
- Possède beaucoup d'outils permettant de TASer les jeux sur console
- Est Console Vérifiée (<a href="https://www.youtube.com/playlist?list=PLH-rsHQS9LqgSYzSePo9aWUX8xRjXSqK9" target="_blank">exemples</a>)

### &nbsp;

### Outils disponibles (entre autres)

- Frame Advanced (jouer image par image)
- Save State (sauvegarder où l'on veut)
- RAM Search et RAM Watch (rechercher et observer des valeurs dans la mémoire)
- Lua Scripting (lancer un script Lua pour, par exemple, <a href="https://www.youtube.com/watch?v=reDowrCmnwY" target="_blank">afficher des informations à l'écran</a>)

::right::

### Console Vérifiée

Un moyen de mesurer la précision d'un émulateur est de rejouer les inputs d'un TAS sur une console.

Pour certaines consoles (comme la GBA), un TAS réalisé sous BizHawk peut être rejoué sur une vraie GBA ce qui appose un haut degré de précision d'émulation (<a href="https://www.youtube.com/watch?v=060Nb7ppa-s" target="_blank">complément</a>).

<a href="http://tasvideos.org/TASBot.html" target="_blank">TASBot</a> est un robot créé pour justement effectuer cette vérification (son histoire : 🇺🇸 partie <a href="https://www.youtube.com/watch?v=-Jo6tDW7k3Q" target="_blank">1</a>, <a href="https://www.youtube.com/watch?v=gTF2Pih8BX8" target="_blank">2</a> et <a href="https://www.youtube.com/watch?v=BDQXzrYUuvA" target="_blank">3</a>).

### En complément (BizHawk et autres outils)

- 🇺🇸 <a href="http://tasvideos.org/BizHawk.html" target="_blank">Page de présentation du projet BizHawk</a>
- 🇺🇸 <a href="https://www.youtube.com/playlist?list=PLlJzD6wWmoXmihK13itZJ-mzjK3SD1EaM" target="_blank">Réaliser son premier TAS avec BizHawk</a>
- 🇺🇸 <a href="https://www.youtube.com/playlist?list=PLFpQiGLusn-aq-z-noMJ7rj9sG3jT3cvW" target="_blank">Quelques ressources autour de BizHawk</a>
- 🇺🇸 <a href="https://www.reddit.com/r/emulation/" target="_blank">SubReddit à propos de l'émulation</a>
- 🇺🇸 <a href="http://tasvideos.org/EmulatorResources.html" target="_blank">Liste des émulateurs / outils pour TASer</a>

---
layout: cover
---

# Annexes

---

# Annexe #1 : Vocabulaire

### Jargon

Quelques mots appartenant au jargon du speedrun sont présents dans ce document (frame, input, run, ...).

D'autres termes en relation sont disponibles dans ces quelques liens :

- 🇫🇷 <a href="https://djonepiece300.wordpress.com/2018/01/25/presentation-et-lexique-du-speedrun-et-tool-assisted-speedrun-tas/" target="_blank">Présentation et lexique du Speedrun et TAS</a>

- 🇫🇷 <a href="https://www.youtube.com/playlist?list=PLoJVELv88dFXuhcFST45YVlDHa37dbmMe" target="_blank">Le dictionnaire du Speedrun</a>

- 🇺🇸 <a href="http://www.speedrunslive.com/faq/glossary/" target="_blank">Speedrunning Glossary</a>

---
layout: two-cols
---

# Annexe #2 : LiveSplit

### Présentation

L'outil majoritairement utilisé par les speedrunners pour chronométrer leurs runs est <a href="https://github.com/LiveSplit" target="_blank">LiveSplit</a>.

- 🇫🇷 <a href="https://www.youtube.com/watch?v=QWuBijoRn9U" target="_blank">Configurer un Timer de Speedrun</a>

- 🇺🇸 <a href="https://www.youtube.com/watch?v=xq2MCodtH34" target="_blank">How to Set Up a Speedrun Timer</a>

### Load Remover

Pour ne pas désavantager les ordinateurs moins puissants lors des runs sur ordinateur, des Load Remover peuvent être programmés afin que les temps de chargements ne soient pas pris en compte dans le temps de la run.

- 🇺🇸 <a href="https://www.youtube.com/watch?v=mJYc_5dt8Dw" target="_blank">Making load removers for speedruns</a>

::right::

# &nbsp;

### AutoSplit

Chaque splits configurés sur LiveSplit sont lancés manuellement durant une run. Il est néanmoins possible de les lancer de manière programmée.

- depuis un jeu sur ordinateur en "écoutant" des adresses mémoire grâce à un <a href="https://github.com/LiveSplit/LiveSplit.AutoSplitters/blob/master/README.md" target="_blank">fichier ASL</a>
  - 🇺🇸 <a href="https://www.youtube.com/watch?v=VS5-ZSjcBXQ" target="_blank">Rich Diamond</a>
  - 🇺🇸 <a href="https://www.youtube.com/watch?v=KcBZLtjazHQ" target="_blank">Devil May Cry 4 Special Edition</a>
- depuis un jeu console en comparant des images
  - <a href="https://github.com/Toufool/Auto-Split" target="_blank">Auto-Split</a> (🇫🇷 <a href="https://www.youtube.com/watch?v=uGZphPkrGRw&t=848s" target="_blank">Démonstration</a>)
  - <a href="https://github.com/RaiMan/SikuliX1" target="_blank">Sikuli</a> (<a href="https://www.youtube.com/watch?v=W4sn4yjSosA" target="_blank">Démonstration</a>)

---
layout: two-cols
---

# Annexe #3 : Ressources

### Multiples thématiques (speedrun)

- 🇺🇸 <a href="https://www.youtube.com/c/ApolloLegend" target="_blank">Apollo Legend</a>
- 🇺🇸 <a href="https://www.youtube.com/c/EZScape" target="_blank">EZScape</a>
- 🇺🇸 <a href="https://www.youtube.com/c/gladJonas" target="_blank">GladJonas</a>
- 🇺🇸 <a href="https://www.youtube.com/c/karljobst" target="_blank">Karl Jobst</a>
- 🇺🇸 <a href="https://www.youtube.com/c/LowestPercent" target="_blank">Lowest Percent</a>
- 🇺🇸 SubReddits : <a href="https://www.reddit.com/r/Speedrunning/" target="_blank">Speedrunning</a> & <a href="https://www.reddit.com/r/speedrun/" target="_blank">Speedrun</a>(<a href="https://www.reddit.com/r/Speedruns/" target="_blank">s</a>)

### &nbsp;

### Émissions autour des TAS

- 🇫🇷 <a href="https://www.youtube.com/playlist?list=PLD400FA8A50319D8C" target="_blank">88 miles à l'heure</a>
- 🇫🇷 <a href="https://www.youtube.com/channel/UCUrnYqoOBrcX4WOfuNDQEgw/videos" target="_blank">In Vino VeriTAS</a>
- 🇫🇷 <a href="https://www.youtube.com/playlist?list=PLymmwIRuunnacxT6lxIsHXjDrlkiMParM" target="_blank">Speed Game</a>
- 🇫🇷 <a href="https://www.youtube.com/playlist?list=PLHZhigRWkVZOeS83tX-Z-IEf45ZYu0q6q" target="_blank">TASpedia</a>
- 🇺🇸 <a href="https://www.youtube.com/playlist?list=PLlJzD6wWmoXn22611vVPKvmmZ3pLWOca5" target="_blank">Tool-Assisted Podcast Episodes</a>

::right::

# &nbsp;

### Speedruns commentés

- 🇫🇷 <a href="https://www.youtube.com/playlist?list=PLdkPlOZ2GL2xnkF_8AwkLPa7h0YsjgyuZ" target="_blank">Ceci est un speedrun</a>
- 🇫🇷 <a href="https://www.youtube.com/playlist?list=PLiZQtLpCVz-givM_GpeZuIxzbAcUl1EP9" target="_blank">Gaming Speed Dating</a>
- 🇫🇷 <a href="https://www.youtube.com/playlist?list=PLqAlRNty5123ErcYqWEa2oi26Oil-SO2Y" target="_blank">Hugo Délire & Laink</a>
- 🇫🇷 <a href="https://www.youtube.com/channel/UCHXhezW0r3Hvq4QQ6yXcYQw" target="_blank">Mach One</a>
- 🇺🇸 <a href="https://www.youtube.com/playlist?list=PLoiGRjr9BAVjXkIZNdJspBHkabRkMytxs" target="_blank">Speedrun explained</a>
- 🇫🇷 Speedrun File <a href="https://www.youtube.com/playlist?list=PLoJVELv88dFVk-gVVNDJdTLtkl33oPHrA" target="_blank">1.0</a>, <a href="https://www.youtube.com/playlist?list=PLoJVELv88dFXc_snfYM65qrj2gb-1WpcP" target="_blank">2.0</a>, <a href="https://www.youtube.com/playlist?list=PLoJVELv88dFW15S6pIL-k6Op0LLY0--ev" target="_blank">3.0</a>

### &nbsp;

### En complément

- 🇺🇸 <a href="https://www.youtube.com/playlist?list=PLraFbwCoisJA6eO7VSWtUqLaIFBQq4PCv" target="_blank">Devs React to Speedruns</a>
- 🇺🇸 <a href="https://www.reddit.com/r/TAS/" target="_blank">SubReddit (TAS)</a>
- 🇺🇸 <a href="https://www.twitch.tv/directory/all/tags/0b83a789-5f6a-45f0-b6a3-a56926b6f8b5" target="_blank">Twitch "TAS" tag</a>
- 🇺🇸 Développeurs speedrunnant leur propre jeu (<a href="https://www.twitch.tv/videos/1110820951" target="_blank">Polyphony Lunar Run</a> - <a href="https://www.youtube.com/watch?v=LLNx5_8FK4I" target="_blank">Pro Gymnast</a>)

---
layout: two-cols
---

# Annexe #4 : Évènements

### Speedrun

- 🇺🇸 <a href="https://www.youtube.com/c/gamesdonequick" target="_blank">AGDQ / SGDQ</a> (🇫🇷 <a href="https://www.youtube.com/channel/UC2nA_c97ROSnfhakjJTKaZw" target="_blank">Le French Restream</a>)
- 🇺🇸 <a href="https://www.youtube.com/c/ausspeedruns" target="_blank">ASM</a>
- 🇫🇷 <a href="https://www.youtube.com/watch?v=LEVQ74r2dvw" target="_blank">Barrière Speed Run Show</a>
- 🇺🇸 <a href="https://www.youtube.com/c/ESAMarathon" target="_blank">ESA</a>
- 🇺🇸 <a href="https://www.youtube.com/channel/UCaqWIVvgmt8Gme_QLN1IuEQ" target="_blank">GSA</a>
- 🇺🇸 <a href="https://www.youtube.com/channel/UCJn8IWyQmWEIfpVjX7o2VnQ" target="_blank">RPG Limit Break</a>
- 🇺🇸 <a href="https://www.youtube.com/channel/UCrQLf-vqI47qzSWOeODR_6g" target="_blank">WASD</a>
- 🇺🇸 <a href="https://www.youtube.com/c/ZSRVideos" target="_blank">ZeldaSpeedRuns</a>

::right::

# &nbsp;

### TAS

- <a href="https://www.youtube.com/playlist?list=PLzcP-azgsWrqlW8xmp6YRaHD1nzjOmj8i" target="_blank">TASGiving</a>
- <a href="http://tasvideos.org/Awards.html" target="_blank">TAS Awards</a>
- <a href="http://tasvideos.org/Noxxa/AprilFoolsHistory.html" target="_blank">TAS soumis le 1er avril</a>

---
layout: two-cols
---

# Annexe #5 : Autres TA

### Tool-Assisted Superplay

Le divertissement d'abord, la rapidité ensuite.

- TAS vs TAS (<a href="https://www.youtube.com/watch?v=0CsOeksvJ44" target="_blank">Ryu vs Cloud</a>, <a href="https://www.youtube.com/watch?v=lhE8g3fscYM" target="_blank">Ness vs Young Link</a>)
- Glitchfest (<a href="https://www.youtube.com/watch?v=Yxb0t34mW-U" target="_blank">Mortal Kombat 3</a>)
- <a href="https://www.youtube.com/watch?v=A06DjnoHRIk" target="_blank">TAP</a> (Tool-Assisted Playaround)

### &nbsp;

### Tool-Assisted Playthrough

Gameplay, dialogues et cinématiques d'un jeu.

- <a href="https://www.youtube.com/watch?v=RxRaLTpG2VI" target="_blank">TAFP</a> (Tool-Assisted Flawless Playthrough)
- <a href="https://www.youtube.com/watch?v=KXcR_PDWAUo" target="_blank">TAP</a> (Tool-Assisted Playthrough)
- <a href="https://www.youtube.com/watch?v=gEOIFXNlIdQ" target="_blank">TAW</a> (Tool-Assisted Walkthrough)
- <a href="https://www.youtube.com/watch?v=mTK4n0k6HRE" target="_blank">TAG</a> (Tool-Assisted Gameplay)

::right::

# &nbsp;

### Tool-Assisted Speedrun, multiples ...

- ... joueurs (<a href="https://www.youtube.com/watch?v=IH4TNH0d-6k" target="_blank">2</a>, <a href="https://www.youtube.com/watch?v=Z8sp-Qnlmzo" target="_blank">3</a>, <a href="https://www.youtube.com/watch?v=uj_GnHZlDvE" target="_blank">4</a>)

- ... jeux (🇺🇸 <a href="https://www.youtube.com/watch?v=-ivGNZs_Mvw" target="_blank">Pokémon B&R : Coop Diploma</a>)

- ... jeux, même inputs appuyés (<a href="https://www.youtube.com/watch?v=pPJKMm5VrhE" target="_blank">2</a>, <a href="https://www.youtube.com/watch?v=To3d6XKsMcQ" target="_blank">3</a>, <a href="https://www.youtube.com/watch?v=SiHdBS7HPg0" target="_blank">4</a>, <a href="https://www.youtube.com/watch?v=CL9yGz7VVrM" target="_blank">11</a>)

### &nbsp;

### LOTAD / Human Theory TAS

Un <a href="https://www.youtube.com/watch?v=ki53UHJMlD4" target="_blank">LOTAD</a> (Low Optimized Tool-Assisted Demonstration) est une version non optimisée d'un Tool-Assisted Speedrun.

Un <a href="https://www.youtube.com/watch?v=HRqrvkU0sYQ" target="_blank">Human Theory TAS</a> est une version réalisable par un humain (sans utiliser de techniques TAS-Only) ayant une très bonne exécution et une bonne chance. 

---

# Annexe #6 : Speedrun et TAS

### Différences

- La catégorie <a href="https://www.youtube.com/watch?v=mUpT7fHi1lA" target="_blank">Blindfolded</a> ne peut exister qu'en speedrun
- Comme le calcul du temps est différent, <a href="https://www.youtube.com/watch?v=QKsRNoLyXO8&t=3170s" target="_blank">un speedrun peut apparaître comme plus rapide qu'un TAS</a>
- Certaines stratégies risquées ne sont viables qu'en TAS comme avoir <a href="https://www.youtube.com/watch?v=WhD1VvlbPLs" target="_blank">très peu de points de vie</a>

### &nbsp;

### Compétitions

- Les temps des runs sont séparés (<a href="https://www.speedrun.com/" target="_blank">speedrun.com</a> d'un côté et <a href="http://tasvideos.org/" target="_blank">tasvideos.org</a> de l'autre)
- Les compétitions sont séparées (exemple : Compétition Super Mario 64, <a href="https://www.youtube.com/playlist?list=PL6P6dcko2BB7fg9h0CIN62zFeVecgV8lR" target="_blank">Speedrun</a> | <a href="https://www.youtube.com/playlist?list=PLkW-5L5VSY-YVhkBrb2be2Hi-i_nrtW-L" target="_blank">TAS</a>)

### &nbsp;

### Compléments (Personnes qui speedrun et TAS un même jeu)

- <a href="https://www.youtube.com/c/Bluekandy/about" target="_blank">Bluekandy</a> : Mario Golf
- <a href="https://www.youtube.com/user/CrazyGameNerd/about" target="_blank">CrazyGameNerd</a> : F-Zero GX
- <a href="https://www.youtube.com/c/gymnast86/about" target="_blank">Gymnast86</a> : Twilight Princess

---
layout: cover
---

# Techniques

### &nbsp;

Voici une liste non exhaustive de techniques utilisées lors des speedruns / TAS qui réduisent plus ou moins considérablement le temps pour finir un jeu.

À savoir, certaines techniques peuvent être amenées à créer une nouvelle catégorie de speedrun si, par exemple, elle "casse" trop le jeu (comme le <a href="https://www.youtube.com/watch?v=a_R2H2dRWqU" target="_blank">SRM</a> d'Ocarina of Time).

---
layout: two-cols
---

# Glitch

### Description

De manière générale, un glitch (ou bug) est une défaillance dans un jeu.

Cela peut provoquer des dysfonctionnements, des clips (traverser un mur), des skips (outrepasser une partie d'un niveau), ...

🎥 Mentions :

- 🇺🇸 <a href="https://www.youtube.com/watch?v=4pVgsyt6uXU" target="_blank">Alundra, Bomb Glitch</a>

- 🇺🇸 <a href="https://www.youtube.com/watch?v=Jhfc4fyw5Wk" target="_blank">Twilight Princess, Back in Time Glitch</a>

- 🇺🇸 <a href="https://www.youtube.com/playlist?list=PLDBXdd2IJRvW-gaqcF2Kx0zOUkFZVdML2" target="_blank">Son of a Glitch</a>

::right::

# Glitch Hunting

### Description

La discipline qui consiste à essayer de trouver des glitchs et pouvoir les exploiter est le Glitch Hunting.

Tester la réaction d'un jeu lorsque deux évènements se produisent en même temps est un moyen parmi d'autres de trouver (ou pas) un potentiel glitch.

🎥 Mentions :

- 🇺🇸 <a href="https://www.youtube.com/watch?v=PTsnblKvfqE" target="_blank">Who finds the Glitches used in Speedruns?</a>

- 🇺🇸 <a href="https://www.youtube.com/watch?v=yOMKljWdCIE" target="_blank">How are speedrun glitches found?</a>

- 🇺🇸 <a href="https://medium.com/@dannyb21892/speedrunning-glitch-hunting-and-the-intersections-of-gaming-and-coding-ce8be66e9029" target="_blank">Speedrunning, Glitch Hunting and the Intersections of Gaming and Coding</a>

---

# Langue du jeu

### Description

Afin d'être sûr de pouvoir effectuer le meilleur temps sur un jeu, il faut s'assurer de jouer avec la version localisée du jeu <a href="https://www.youtube.com/watch?v=1Mtukr5v6J8" target="_blank">présentant des avantages</a>.

Quelques exemples de langue utilisée suivant le jeu speedrunné :

- <a href="https://www.youtube.com/watch?v=XM1UwcX1AlM" target="_blank">Twilight Princess Any%</a>, en Allemand
- <a href="https://www.youtube.com/watch?v=DkQiUfz2exc" target="_blank">Breath of the Wild Any%</a>, en Français
- <a href="https://www.youtube.com/watch?v=TL5UhcpQthQ" target="_blank">Super Mario 64, 16 Stars</a>, en Japonais

---

# Menuing

### Description

Le menuing est l'optimisation de l'utilisation du menu pendant la run.

L'objectif est de réaliser le moins d'allers-retours dans le menu en effectuant plusieurs actions (si possible) lors de chaque passage ainsi que de gérer de manière optimale son inventaire.

🎥 Mentions :

- 🇺🇸 <a href="https://www.youtube.com/watch?v=jdZg4a4NU5k" target="_blank">Resident Evil 1 : Jill Any% Glitchless Inventory Management</a>

- 🇺🇸 <a href="https://www.youtube.com/watch?v=46YM-7g2800" target="_blank">AGDQ 2019: Final Fantasy XI - Blindfolded Menuing</a>

---

# Routing / Route Planning

### Description

Le chemin à suivre pour réaliser le meilleur temps pour finir un jeu est le Routing (ou Route Planning).

Celui-ci peut évoluer lorsque, par exemple, des nouveaux glitchs ont été trouvés.

Les vidéos "World Record Progression" sont un bon exemple pour visualiser les changements dans le routing de certains jeux.

🎥 Mentions :

- 🇺🇸 <a href="https://www.youtube.com/playlist?list=PLuwYJaJDViFlt1hRETxEP3dexwJG1ENNe" target="_blank">Speed Docs</a>
- 🇺🇸 <a href="https://www.youtube.com/playlist?list=PLMxPYcr2zEkWInMyvvxmN22gjrRR0x__u" target="_blank">Summoning Salt</a>

---

# Réduction des lags

### Description

Lorsque beaucoup d'éléments sont affichés à l'écran, cela peut provoquer un ralentissement du jeu.

Pour éviter ce ralentissement, quelques moyens peuvent être mis à l'essai comme tuer plus tôt les ennemis à l'écran ou bien déplacer la caméra pour ne pas afficher certains éléments du jeu.

🎥 Mentions :

- 🇺🇸 <a href="https://www.youtube.com/watch?v=mMtKl_P_vz0" target="_blank">Super Metroid -- Lag Reduction comparison</a>

- 🇺🇸 <a href="https://www.youtube.com/watch?v=sOetJuClTGs" target="_blank">The Best Kept Secret in SM64 Speedruns</a>

---

# Sequence Break / Skip

### Description

Un Sequence Break (ou Skip) est un raccourci à ceci près qu'il n'était pas prévu par les développeurs.

🎥 Quelques vidéos d'EZScape à propos des plus gros skips dans les speedruns :

- 🇺🇸 <a href="https://www.youtube.com/watch?v=9N5J5_Q2miA" target="_blank">Top 10 Biggest Skips In Speedrunning #1</a>

- 🇺🇸 <a href="https://www.youtube.com/watch?v=bk90sXw696s" target="_blank">Top 10 Biggest Skips In Speedrunning #2</a>

- 🇺🇸 <a href="https://www.youtube.com/watch?v=HF4i9vebXPk" target="_blank">Top 10 Biggest Skips In Speedrunning #3</a>

---

# Damage Boost / Take damage to save time

### Description

Parfois les ennemis, voire nos propres armes, nous permettent de nous déplacer plus rapidement lorsque l'on se fait attaquer par ceux-ci (Damage Boost ou D-Boost).

Ainsi, un équilibre sera recherché entre une somme de dégâts pris permettant de gagner du temps et les points de vie restants permettant de ne pas mourir.

"Take damage to save time" est une famille de techniques où l'idée est de troquer des points de vie contre du temps gagné dont les Damage Boost en font parti.

🎥 Exemples de TAS comportant des D-Boost :

- <a href="https://www.youtube.com/watch?v=7-Kak8JeF1g" target="_blank">The Goonies II, Any%</a>

- <a href="https://www.youtube.com/watch?v=Sy0HrZLRq3k" target="_blank">Super Metroid, 100%</a>

---

# Death Warp / Death Abuse

### Description

Dans certains jeux, mourir devient un raccourci.

En effet, la mort peut ramener à un checkpoint antérieur permettant de gagner du temps en n'effectuant pas un chemin retour vers celui-ci.

🎥 Mentions :

- 🇺🇸 <a href="https://www.youtube.com/watch?v=5BgLSAMJreM" target="_blank">Death Abuse - SpeedTech Ep. 1 - Speedrunning Tricks</a>

- <a href="https://www.youtube.com/watch?v=IRtLpYB2fnI" target="_blank">Speedrun d'O.D.T.: Escape... Or Die Trying comportant des Death Warp</a>

---

# Pause Buffering

### Description

Dans certains jeux, la mise en pause répétée fait apparaître des situations qui ne pourraient apparaître autrement.

🎥 Mentions :

- 🇺🇸 <a href="https://www.youtube.com/watch?v=-q5XYEJwdaE" target="_blank">Mega Man 1, Pause Buffering</a>

- 🇺🇸 <a href="https://www.youtube.com/watch?v=IhlBrVaK7DU" target="_blank">Super Mario 64, Pause Buffering</a>

---

# Out of Bounds

### Description

Certains glitchs permettent de sortir des limites du jeu, c'est un OOB (Out of Bounds).

🎥 Mentions :

- 🇺🇸 <a href="https://www.youtube.com/watch?v=7trX1fDmAXI" target="_blank">Luigi's Mansion, Chest Glitch</a>

- 🇺🇸 <a href="https://www.youtube.com/watch?v=byXJ1lhNLB8" target="_blank">Resident Evil 4, Ditman Glitch</a>

### OOB comme catégorie

OOB va souvent devenir une catégorie à part entière lorsqu'une partie du jeu est outrepassée.

🎥 Mentions :

- <a href="https://www.youtube.com/watch?v=briY7IIL3Bs" target="_blank">Ghostrunner, Any% OOB</a>

- <a href="https://www.youtube.com/watch?v=R0FWWsaHdQ4" target="_blank">Portal, Any% OOB</a>

---

# Manipulation de la chance

### Description

Certains évènements dans un jeu peuvent être assujettis à la chance (comme effectuer un coup critique lors d'un combat).

Le nom donné à la chance dans un jeu est la RNG (Random Number Generator) et elle peut être représentée sous forme d'une probabilité qu'un évènement se passe.

Lors des TAS, cette RNG va être <a href="http://tasvideos.org/LuckManipulation.html" target="_blank">manipulée</a> afin que (si possible) des évènements désirés soient réalisés.

🎥 Mentions :

- 🇺🇸 <a href="https://www.youtube.com/watch?v=UxL2DpGASt8" target="_blank">Dampe in Ocarina of Time Explained</a>

- 🇺🇸 <a href="https://www.youtube.com/watch?v=SnQNrYOvWR4" target="_blank">Top 10 Luck Dependent Speedruns</a>

---

# Arbitrary Code Execution

### Description

Un ACE (Arbitrary Code Execution) est un glitch qui permet d'exécuter du code non prévu dans un jeu.

Cela peut permettre d'aller <a href="https://www.youtube.com/watch?v=StuzA-IRN_Y" target="_blank">rapidement à la fin d'un jeu</a> (nommé "Game End Glitch") ou bien de coder un jeu dans un jeu.

Exemple (Pong et Snake codés dans Super Mario World) :
- <a href="https://www.youtube.com/watch?v=v_KsonqcMv0" target="_blank">Démonstration</a>
- 🇺🇸 <a href="https://arstechnica.com/gaming/2014/01/how-an-emulator-fueled-robot-reprogrammed-super-mario-world-on-the-fly/" target="_blank">Article en relation</a>
- 🇫🇷 <a href="https://www.youtube.com/watch?v=dcbdhDqBx_g&t=1252s" target="_blank">Vidéo en relation</a>

🎥 Mentions :

- 🇺🇸 <a href="https://www.youtube.com/watch?v=o7wGpmP6YH8" target="_blank">TAS Zelda Majora's Mask 100% avec ACE</a>

- 🇺🇸 <a href="https://www.youtube.com/watch?v=FmTtRZcfH08" target="_blank">TAS Castlevania: Symphony of the Night "Game End Glitch" </a>