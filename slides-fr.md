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

<Link hrefId="cover_fmiGithub" content="Github" /> - <Link hrefId="cover_fmiYoutube" content="Youtube" />

Réalisé avec <Link hrefId="cover_slidevGithub" content="Slidev" />

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
- un <Link hrefId="definition_bizhawkGithub" content="émulateur" /> pour les jeux sur console
- un <Link hrefId="definition_libtasGithub" content="logiciel" /> pour les jeux sur ordinateur

Un TAS est représenté par <Link hrefId="definition_bizhawkInputLog" content="un fichier" /> listant les inputs (touches) appuyés à telle frame (image).

Le jeu <Link hrefId="definition_botsAreStupid" content="Bots Are Stupid" /> amène une idée de cette représentation d'un TAS.

::right::

# &nbsp;

### En complément (Speedrun)

- 🇫🇷 <Link hrefId="definition_introductionSpeedrun" content="Introduction au Speedrun" />

- 🇺🇸 <Link hrefId="definition_whatIsSpeedrunning" content="What is Speedrunning?" />

- 🇺🇸 <Link hrefId="definition_howToStartSpeedrunning" content="How To Start Speedrunning" />

### En complément (TAS)

- 🇫🇷 <Link hrefId="definition_conferenceTas" content="Conférence sur le Tool-Assisted Speedrun" />

- 🇫🇷 <Link hrefId="definition_howToTAS" content="Comment réaliser un TAS" />

- 🇺🇸 <Link hrefId="definition_tasExplained" content="Introduction to TAS" />

- 🇺🇸 <Link hrefId="definition_introductionTas" content="Tool-assisted speedrunning explained" />

---
layout: two-cols
---

# Catégorie

### Critères amenant à différentes catégories

Pourcentage de jeu réalisé

- <Link hrefId="category_low" content="Low%" /> (prendre le moins d'items possible)
- <Link hrefId="category_any" content="Any%" /> (catégorie par défaut, se rendre à la fin)
- <Link hrefId="category_100" content="100%" /> (réaliser tous les objectifs d'un jeu)

Utilisation de glitchs / bugs

- <Link hrefId="category_glitchless" content="Glitchless" /> (liste réduite de glitchs autorisés)
- <Link hrefId="category_nmg" content="NMG" /> (No Major Glitch)

Autres

- <Link hrefId="category_dlc" content="DLC" /> / <Link hrefId="category_romHack" content="Rom Hack" />
- <Link hrefId="category_gameVersion" content="Version du jeu" /> / <Link hrefId="category_patch" content="Patch (Correctif) appliqué" />

::right::

# &nbsp;

### Extensions de catégorie

La communauté autour d'un jeu peut proposer des catégories supplémentaires.

- <Link hrefId="category_rbo" content="RBO" /> (Reverse Boss Order, battre les boss dans l'ordre inverse du jeu)
- <Link hrefId="category_damageless" content="Damageless" /> (ne prendre aucun coup)
- Et bien d'autres (exemples : <Link hrefId="category_ceCeleste" content="Celeste" />, <Link hrefId="category_ceOutlast" content="Outlast" />)

### &nbsp;

### Encore d'autres catégories

Avec <Link hrefId="category_constraints" content="contraintes multiples" /> ou encore :

- <Link hrefId="category_minimumPress" content="Minimum Press" />
- <Link hrefId="category_maximumScore" content="Maximum Score" />

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
- Suivant <Link hrefId="timer_igtVsRta" content="certains éléments de jeu" />
- Par le biais d'un <Link hrefId="timer_debate" content="débat" />

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
- Est Console Vérifiée (<Link hrefId="bizhawk_consoleVerified" content="exemples" />)

### &nbsp;

### Outils disponibles (entre autres)

- Frame Advanced (jouer image par image)
- Save State (sauvegarder où l'on veut)
- RAM Search et RAM Watch (rechercher et observer des valeurs dans la mémoire)
- Lua Scripting (lancer un script Lua pour, par exemple, <Link hrefId="bizhawk_luaOsd" content="afficher des informations à l'écran" />)

::right::

### Console Vérifiée

Un moyen de mesurer la précision d'un émulateur est de rejouer les inputs d'un TAS sur une console.

Pour certaines consoles (comme la GBA), un TAS réalisé sous BizHawk peut être rejoué sur une vraie GBA ce qui appose un haut degré de précision d'émulation (<Link hrefId="bizhawk_emulationAccuracy" content="complément" />).

TASBot est un robot créé pour justement effectuer cette vérification (<Link hrefId="bizhawk_tasbot" content="son histoire" /> : 🇺🇸 partie <Link hrefId="bizhawk_tasbotHistory1" content="1" />, <Link hrefId="bizhawk_tasbotHistory2" content="2" /> et <Link hrefId="bizhawk_tasbotHistory3" content="3" />).

### En complément (BizHawk et autres outils)

- 🇺🇸 <Link hrefId="bizhawk_bizHawk" content="Page de présentation du projet BizHawk" />
- 🇺🇸 <Link hrefId="bizhawk_tasBizHawk" content="Réaliser son premier TAS avec BizHawk" />
- 🇺🇸 <Link hrefId="bizhawk_resourcesBizHawk" content="Quelques ressources autour de BizHawk" />
- 🇺🇸 <Link hrefId="bizhawk_subRedditEmulation" content="SubReddit à propos de l'émulation" />
- 🇺🇸 <Link hrefId="bizhawk_toolsTas" content="Liste des émulateurs / outils pour TASer" />

---
layout: cover
---

# Annexes

---

# Annexe #1 : Vocabulaire

### Jargon

Quelques mots appartenant au jargon du speedrun sont présents dans ce document (frame, input, run, ...).

D'autres termes en relation sont disponibles dans ces quelques liens :

- 🇫🇷 <Link hrefId="vocabulary_srTasGlossary" content="Présentation et lexique du Speedrun et TAS" />

- 🇫🇷 <Link hrefId="vocabulary_dictionarySpeedrun" content="Le dictionnaire du Speedrun" />

- 🇺🇸 <Link hrefId="vocabulary_speedrunningGlossary" content="Speedrunning Glossary" />

- 🇺🇸 <Link hrefId="vocabulary_glossaryTasVideos" content="Glossary - TASVideos" />

---
layout: two-cols
---

# Annexe #2 : LiveSplit

### Présentation

L'outil majoritairement utilisé par les speedrunners pour chronométrer leurs runs est <Link hrefId="livesplit_github" content="LiveSplit" />.

- 🇫🇷 <Link hrefId="livesplit_configureTimer" content="Configurer un Timer de Speedrun" />

- 🇺🇸 <Link hrefId="livesplit_setUpTimer" content="How to Set Up a Speedrun Timer" />

### Load Remover

Pour ne pas désavantager les ordinateurs moins puissants lors des runs sur ordinateur, des Load Remover peuvent être programmés afin que les temps de chargements ne soient pas pris en compte dans le temps de la run.

- 🇺🇸 <Link hrefId="livesplit_loadRemover" content="Make Your Own Load Remover" />

::right::

# &nbsp;

### AutoSplit

Chaque splits configurés sur LiveSplit sont lancés manuellement durant une run. Il est néanmoins possible de les lancer de manière programmée.

- depuis un jeu sur ordinateur en "écoutant" des adresses mémoire grâce à un <Link hrefId="livesplit_asl" content="fichier ASL" />
  - 🇺🇸 <Link hrefId="livesplit_richDiamond" content="Rich Diamond" />
  - 🇺🇸 <Link hrefId="livesplit_dmc4se" content="Devil May Cry 4 Special Edition" />
- depuis un jeu console en comparant des images
  - <Link hrefId="livesplit_autoSplit" content="Auto-Split" /> (🇫🇷 <Link hrefId="livesplit_autoSplitDemonstration" content="Démonstration" />)
  - <Link hrefId="livesplit_sikuli" content="Sikuli" /> (<Link hrefId="livesplit_sikuliDemonstration" content="Démonstration" />)

---
layout: two-cols
---

# Annexe #3 : Ressources

### Multiples thématiques (speedrun)

- 🇺🇸 <Link hrefId="links_abyssoft" content="Abyssoft" />
- 🇺🇸 <Link hrefId="links_gladJonas" content="GladJonas" />
- 🇺🇸 <Link hrefId="links_karlJobst" content="Karl Jobst" />
- 🇺🇸 <Link hrefId="links_lowestPercent" content="Lowest Percent" />
- 🇺🇸 <Link hrefId="links_subRedditSpeedrun" content="Speedrun SubReddit" />

### &nbsp;

### Émissions autour des TAS

- 🇫🇷 <Link hrefId="links_88malh" content="88 miles à l'heure" />
- 🇫🇷 <Link hrefId="links_inVinoVeritas" content="In Vino VeriTAS" />
- 🇫🇷 <Link hrefId="links_speedGame" content="Speed Game" />
- 🇫🇷 <Link hrefId="links_taspedia" content="TASpedia" />
- 🇺🇸 <Link hrefId="links_toolAssistedPodcastEpisodes" content="Tool-Assisted Podcast Episodes" />

::right::

# &nbsp;

### Speedruns commentés

- 🇫🇷 <Link hrefId="links_ceciEstUnSpeedrun" content="Ceci est un speedrun" />
- 🇫🇷 <Link hrefId="links_gamingSpeedDating" content="Gaming Speed Dating" />
- 🇫🇷 <Link hrefId="links_hugoDelireLaink" content="Hugo Délire & Laink" />
- 🇫🇷 <Link hrefId="links_machOne" content="Mach One" />
- 🇺🇸 <Link hrefId="links_speedrunExplained" content="Speedrun explained" />

### &nbsp;

### En complément

- 🇺🇸 <Link hrefId="links_devsReactToSpeedruns" content="Devs React to Speedruns" />
- 🇺🇸 <Link hrefId="links_interviewsOfSpeedrunners" content="Interviews de Speedrunners" />
- 🇺🇸 <Link hrefId="links_subRedditTas" content="SubReddit (TAS)" />
- 🇺🇸 <Link hrefId="links_twitchTasTag" content="Twitch 'TAS' tag" />

---
layout: two-cols
---

# Annexe #4 : Évènements

### Speedrun

- 🇺🇸 <Link hrefId="events_asm" content="Australian Speedruns" />
- 🇫🇷 <Link hrefId="events_barriereSpeedRunShow" content="Barrière Speed Run Show" />
- 🇺🇸 <Link hrefId="events_calithon" content="Calithon" />
- 🇺🇸 <Link hrefId="events_esa" content="European Speedrunner Assembly" />
- 🇺🇸 <Link hrefId="events_forTheLoveOfGaming" content="For The Love of Gaming" />
- 🇺🇸 <Link hrefId="events_agdqSgdq" content="Games Done Quick" /> (🇫🇷 <Link hrefId="events_leFrenchRestream" content="French Restream" />)
- 🇺🇸 <Link hrefId="events_gsa" content="Global Speedrun Association" />
- 🇺🇸 <Link hrefId="events_rpgLimitBreak" content="RPG Limit Break" />
- 🇺🇸 <Link hrefId="events_shotsFired" content="Shots Fired" />
- 🇺🇸 <Link hrefId="events_wasd" content="Warwick's Awesome Speedruns & Demos" />
- 🇺🇸 <Link hrefId="events_zeldaSpeedRuns" content="ZeldaSpeedRuns" />

::right::

# &nbsp;

### TAS

- <Link hrefId="events_tasGiving" content="TASGiving" />
- <Link hrefId="events_tasAwards" content="TAS Awards" />
- <Link hrefId="events_tasApril" content="TAS soumis le 1er avril" />

---
layout: two-cols
---

# Annexe #5 : Autres TA

### Tool-Assisted Superplay

Le divertissement d'abord, la rapidité ensuite.

- TAS vs TAS (<Link hrefId="ta_ryuVsCloud" content="Ryu vs Cloud" />, <Link hrefId="ta_nessVsYoungLink" content="Ness vs Young Link" />)
- Glitchfest (<Link hrefId="ta_mortalKombat3" content="Mortal Kombat 3" />)
- <Link hrefId="ta_taplayaround" content="TAP" /> (Tool-Assisted Playaround)

### &nbsp;

### Tool-Assisted Playthrough

Gameplay, dialogues et cinématiques d'un jeu.

- <Link hrefId="ta_tafp" content="TAFP" /> (Tool-Assisted Flawless Playthrough)
- <Link hrefId="ta_taw" content="TAW" /> (Tool-Assisted Walkthrough)
- <Link hrefId="ta_tag" content="TAG" /> (Tool-Assisted Gameplay)

::right::

# &nbsp;

### Tool-Assisted Speedrun, multiples ...

- ... joueurs (<Link hrefId="ta_tasMultiPlayers2" content="2" />, <Link hrefId="ta_tasMultiPlayers3" content="3" />, <Link hrefId="ta_tasMultiPlayers4" content="4" />, <Link hrefId="ta_tasMultiPlayers5" content="5" />)

- ... jeux (🇺🇸 <Link hrefId="ta_pokemonCoopDiploma" content="Pokémon B&R : Coop Diploma" />)

- ... jeux, même inputs appuyés (<Link hrefId="ta_tasSameInputs2" content="2" />, <Link hrefId="ta_tasSameInputs3" content="3" />, <Link hrefId="ta_tasSameInputs4" content="4" />, <Link hrefId="ta_tasSameInputs11" content="11" />)

### &nbsp;

### LOTAD / Human Theory TAS

Un <Link hrefId="ta_lotad" content="LOTAD" /> (Low Optimized Tool-Assisted Demonstration) est une version non optimisée d'un Tool-Assisted Speedrun.

Un <Link hrefId="ta_humanTheoryTas" content="Human Theory TAS" /> est une version réalisable par un humain (non TAS-Only) ayant une très bonne exécution et une bonne chance. 

---

# Annexe #6 : Speedrun et TAS

### Différences

- La catégorie <Link hrefId="srTA_blindfolded" content="Blindfolded" /> ne peut exister qu'en speedrun
- Comme le calcul du temps est différent, <Link hrefId="srTA_srFasterTas" content="un speedrun peut apparaître comme plus rapide qu'un TAS" />
- Certaines stratégies risquées ne sont viables qu'en TAS comme avoir <Link hrefId="srTA_fewLifePoints" content="très peu de points de vie" />

### &nbsp;

### Compétitions

- Les temps des runs sont séparés (<Link hrefId="srTA_speedrunWebsite" content="speedrun.com" /> d'un côté et <Link hrefId="srTA_tasWebsite" content="tasvideos.org" /> de l'autre)
- Les compétitions sont séparées (exemple : Compétition Super Mario 64, <Link hrefId="srTA_speedrunSM64" content="Speedrun" /> | <Link hrefId="srTA_tasSM64" content="TAS" />)

### &nbsp;

### Compléments (Personnes qui speedrun et TAS un même jeu)

- <Link hrefId="srTA_bluekandy" content="Bluekandy" /> : Mario Golf
- <Link hrefId="srTA_crazyGameNerd" content="CrazyGameNerd" /> : F-Zero GX
- <Link hrefId="srTA_gymnast86" content="Gymnast86" /> : Twilight Princess

---
layout: cover
---

# Techniques

### &nbsp;

Voici une liste non exhaustive de techniques utilisées lors des speedruns / TAS qui réduisent plus ou moins considérablement le temps pour finir un jeu.

À savoir, certaines techniques peuvent être amenées à créer une nouvelle catégorie de speedrun si, par exemple, elle "casse" trop le jeu (comme le <Link hrefId="skills_srm" content="SRM" /> d'Ocarina of Time).

---
layout: two-cols
---

# Glitch

### Description

De manière générale, un glitch (ou bug) est une défaillance dans un jeu.

Cela peut provoquer des dysfonctionnements, des clips (traverser un mur), des skips (outrepasser une partie d'un niveau), ...

🎥 Mentions :

- 🇺🇸 <Link hrefId="glitch_alundraBombGlitch" content="Alundra, Bomb Glitch" />

- 🇺🇸 <Link hrefId="glitch_twilightPrincessBackInTimeGlitch" content="Twilight Princess, Back in Time Glitch" />

- 🇺🇸 <Link hrefId="glitch_sonOfGlitch" content="Son of a Glitch" />

- 🇺🇸 <Link hrefId="glitch_iceberg" content="The Speedrun Skips Iceberg Explained" />

::right::

# Glitch Hunting

### Description

La discipline qui consiste à essayer de trouver des glitchs et pouvoir les exploiter est le Glitch Hunting.

Tester la réaction d'un jeu lorsque deux évènements se produisent en même temps est un moyen de trouver (ou pas) un potentiel glitch.

🎥 Mentions :

- 🇺🇸 <Link hrefId="glitchHunting_whoFindsGlitches" content="Who finds the Glitches used in Speedruns?" />

- 🇺🇸 <Link hrefId="glitchHunting_howGlitchesFound" content="How are speedrun glitches found?" />

- 🇺🇸 <Link hrefId="glitchHunting_glitchHuntingGamingCoding" content="Speedrunning, Glitch Hunting and the Intersections of Gaming and Coding" />

---

# Langue du jeu

### Description

Afin d'être sûr de pouvoir effectuer le meilleur temps sur un jeu, il faut s'assurer de jouer avec la version localisée du jeu présentant des avantages.

Quelques exemples de langue utilisée suivant le jeu speedrunné :

- <Link hrefId="language_twilightPrincessAny" content="Twilight Princess Any%" />, en Allemand
- <Link hrefId="language_breathOfTheWildAny" content="Breath of the Wild Any%" />, en Français
- <Link hrefId="language_superMario6416Stars" content="Super Mario 64, 16 Stars" />, en Japonais

🎥 Mentions :

- 🇺🇸 <Link hrefId="language_advantages" content="Why Speedrunners Play on Japanese Releases – Version Differences" />

- 🇺🇸 <Link hrefId="language_use" content="What Languages Do Speedrunners Use?" />

---

# Menuing

### Description

Le menuing est l'optimisation de l'utilisation du menu pendant la run.

L'objectif est de réaliser le moins d'allers-retours dans le menu en effectuant plusieurs actions (si possible) lors de chaque passage ainsi que de gérer de manière optimale son inventaire.

🎥 Mentions :

- 🇺🇸 <Link hrefId="menuing_residentEvil1JillAnyGlitchlessInventoryManagement" content="Resident Evil 1 : Jill Any% Glitchless Inventory Management" />

- 🇺🇸 <Link hrefId="menuing_agdq2019FinalFantasyXIBlindfoldedMenuing" content="AGDQ 2019: Final Fantasy XI - Blindfolded Menuing" />

---

# Routing / Route Planning

### Description

Le chemin à suivre pour réaliser le meilleur temps pour finir un jeu est le Routing (ou Route Planning).

Celui-ci peut évoluer lorsque, par exemple, des nouveaux glitchs ont été trouvés.

Les vidéos "World Record Progression" sont un bon exemple pour visualiser les changements dans le routing de certains jeux.

🎥 Mentions :

- 🇺🇸 <Link hrefId="routing_speedDocs" content="Speed Docs" />
- 🇺🇸 <Link hrefId="routing_summoningSalt" content="Summoning Salt" />

---

# Réduction des lags

### Description

Lorsque beaucoup d'éléments sont affichés à l'écran, cela peut provoquer un ralentissement du jeu.

Pour éviter ce ralentissement, quelques moyens peuvent être mis à l'essai comme tuer plus tôt les ennemis à l'écran ou bien déplacer la caméra pour ne pas afficher certains éléments du jeu.

🎥 Mentions :

- 🇺🇸 <Link hrefId="lagReduction_superMetroidLagReductionComparison" content="Super Metroid - Lag Reduction comparison" />

- 🇺🇸 <Link hrefId="lagReduction_theBestKeptSecretInSM64" content="The Best Kept Secret in SM64 Speedruns" />

---

# Sequence Break / Skip

### Description

Un Sequence Break (ou Skip) est un raccourci à ceci près qu'il n'était pas prévu par les développeurs.

🎥 Quelques vidéos d'EZScape à propos des plus gros skips dans les speedruns :

- 🇺🇸 <Link hrefId="skip_top10BiggestSkipsInSpeedrunning1" content="Top 10 Biggest Skips In Speedrunning #1" />

- 🇺🇸 <Link hrefId="skip_top10BiggestSkipsInSpeedrunning2" content="Top 10 Biggest Skips In Speedrunning #2" />

- 🇺🇸 <Link hrefId="skip_top10BiggestSkipsInSpeedrunning3" content="Top 10 Biggest Skips In Speedrunning #3" />

---

# Damage Boost / Take damage to save time

### Description

Parfois les ennemis, voire nos propres armes, nous permettent de nous déplacer plus rapidement lorsque l'on se fait attaquer par ceux-ci (Damage Boost ou D-Boost).

Ainsi, un équilibre sera recherché entre une somme de dégâts pris permettant de gagner du temps et les points de vie restants permettant de ne pas mourir.

"Take damage to save time" est une famille de techniques où l'idée est de troquer des points de vie contre du temps gagné dont les Damage Boost en font parti.

🎥 Exemples de TAS comportant des D-Boost :

- <Link hrefId="dBoost_theGoonies2Any" content="The Goonies II, Any%" />

- <Link hrefId="dBoost_superMetroid100" content="Super Metroid, 100%" />

---

# Death Warp / Death Abuse

### Description

Dans certains jeux, mourir devient un raccourci.

En effet, la mort peut ramener à un checkpoint antérieur permettant de gagner du temps en n'effectuant pas un chemin retour vers celui-ci.

🎥 Mentions :

- 🇺🇸 <Link hrefId="death_deathAbuseSpeedTech" content="Death Abuse - SpeedTech Ep. 1 - Speedrunning Tricks" />

- 🇺🇸 <Link hrefId="death_speedrunODT" content="Speedrun d'O.D.T. : Escape... Or Die Trying comportant des Death Warp" />

---

# Pause Buffering

### Description

Dans certains jeux, la mise en pause répétée fait apparaître des situations qui ne pourraient apparaître autrement.

🎥 Mentions :

- 🇺🇸 <Link hrefId="pause_megaMan1" content="Mega Man 1, Pause Buffering" />

- 🇺🇸 <Link hrefId="pause_superMario64" content="Super Mario 64, Pause Buffering" />

---

# Out of Bounds

### Description

Certains glitchs permettent de sortir des limites du jeu, c'est un OOB (Out of Bounds).

🎥 Mentions :

- 🇺🇸 <Link hrefId="oob_luigiMansionChestGlitch" content="Luigi's Mansion, Chest Glitch" />

- 🇺🇸 <Link hrefId="oob_residentEvil4DitmanGlitch" content="Resident Evil 4, Ditman Glitch" />

OOB deviendra une catégorie à part entière lorsqu'une partie du jeu est outrepassée.

🎥 Mentions :

- <Link hrefId="oob_ghostrunnerAnyOob" content="Ghostrunner, Any% OOB" />

- <Link hrefId="oob_portalAnyOob" content="Portal, Any% OOB" />

---

# Manipulation de la chance

### Description

Certains évènements dans un jeu peuvent être assujettis à la chance (comme effectuer un coup critique lors d'un combat).

Le nom donné à la chance dans un jeu est la RNG (Random Number Generator) et elle peut être représentée sous forme d'une probabilité qu'un évènement se passe.

Lors des TAS, cette RNG va être <Link hrefId="luck_manipulated" content="manipulée" /> afin que (si possible) des évènements désirés soient réalisés.

🎥 Mentions :

- 🇺🇸 <Link hrefId="luck_dampeInOcarinaOfTime" content="Dampe in Ocarina of Time Explained" />

- 🇺🇸 <Link hrefId="luck_top10LuckDependentSpeedruns" content="Top 10 Luck Dependent Speedruns" />

---

# Arbitrary Code Execution

### Description

Un ACE (Arbitrary Code Execution) est un glitch qui permet d'exécuter du code non prévu dans un jeu.

Cela peut permettre d'aller <Link hrefId="ace_geg" content="rapidement à la fin d'un jeu" /> (nommé "Game End Glitch") ou bien de coder un jeu dans un jeu.

Exemple (Pong et Snake codés dans Super Mario World) :
- <Link hrefId="ace_demonstration" content="Démonstration" />
- 🇺🇸 <Link hrefId="ace_relatedArticle" content="Article en relation" />
- 🇫🇷 <Link hrefId="ace_relatedVideo" content="Vidéo en relation" />

🎥 Mentions :

- 🇺🇸 <Link hrefId="ace_tasMM100ACE" content="TAS Zelda Majora's Mask 100% avec ACE" />

- 🇺🇸 <Link hrefId="ace_tasCastlevaniaGEG" content="TAS Castlevania: Symphony of the Night 'Game End Glitch'" />