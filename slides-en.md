---
class: 'text-center'
---

<style>
.col-left, .col-right {
    margin-right: 30px;
}
</style>

# TAS About

Documentation about Speedruns & Tool-Assisted Speedruns

By Full Moon Issue

<Link hrefId="cover_fmiGithub" content="Github" /> - <Link hrefId="cover_fmiYoutube" content="Youtube" />

Made with <Link hrefId="cover_slidevGithub" content="Slidev" />

---
layout: two-cols
---

# Menu

- Speedrun
  - Definition
  - Category
  - Timer
- Tool-Assisted Speedrun
  - BizHawk emulator
- Appendices
  - Vocabulary
  - LiveSplit
  - Links
  - Events
  - Other TA
  - Speedrun and TAS

::right::

# &nbsp;

- Skills
  - Glitch / Glitch Hunting
  - Language of the game
  - Menuing
  - Routing / Route Planning
  - Lag reduction
  - Sequence Break / Skip
  - Damage Boost / Take damage to save time
  - Death Warp / Death Abuse
  - Pause Buffering
  - Out of Bounds
  - Luck manipulation
  - Arbitrary Code Execution

---
layout: cover
---

# Speedrun

---
layout: two-cols
---

# Definition

### Speedrun and TAS (Tool-Assisted Speedrun)

The aim of speedrunning is to get the best time to end a game.

A speedrun is played "live" on a console or a computer when a TAS is made on a computer with
- an <Link hrefId="definition_bizhawkGithub" content="emulator" /> for console games
- a <Link hrefId="definition_libtasGithub" content="software" /> for computer games

A TAS is represented by <Link hrefId="definition_bizhawkInputLog" content="a file" /> which list inputs (buttons) pushed on a particular frame (picture).

The game <Link hrefId="definition_botsAreStupid" content="Bots Are Stupid" /> brings a form of view about what a TAS could look like.

::right::

# &nbsp;

### Additionally (Speedrun)

- 🇫🇷 <Link hrefId="definition_introductionSpeedrun" content="Introduction au Speedrun" />

- 🇺🇸 <Link hrefId="definition_whatIsSpeedrunning" content="What is Speedrunning?" />

- 🇺🇸 <Link hrefId="definition_howToStartSpeedrunning" content="How To Start Speedrunning" />

### Additionally (TAS)

- 🇫🇷 <Link hrefId="definition_conferenceTas" content="Conférence sur le Tool-Assisted Speedrun" />

- 🇫🇷 <Link hrefId="definition_howToTAS" content="Comment réaliser un TAS" />

- 🇺🇸 <Link hrefId="definition_tasExplained" content="Introduction to TAS" />

- 🇺🇸 <Link hrefId="definition_introductionTas" content="Tool-assisted speedrunning explained" />

---
layout: two-cols
---

# Category

### Criteria leading to different categories

Percentage finished of a game

- <Link hrefId="category_low" content="Low%" /> (less items possible)
- <Link hrefId="category_any" content="Any%" /> (default category, go to the end)
- <Link hrefId="category_100" content="100%" /> (all game's objectives made)

Use of glitches / bugs

- <Link hrefId="category_glitchless" content="Glitchless" /> (none or some glitches allowed)
- <Link hrefId="category_nmg" content="NMG" /> (No Major Glitch)

Others

- <Link hrefId="category_dlc" content="DLC" /> / <Link hrefId="category_romHack" content="Rom Hack" />
- <Link hrefId="category_gameVersion" content="Version of the game" /> / <Link hrefId="category_patch" content="Patch applied" />

::right::

# &nbsp;

### Category extensions

The community of a game may suggest some extra categories.

- <Link hrefId="category_rbo" content="RBO" /> (Reverse Boss Order, defeat bosses in the inverted order)
- <Link hrefId="category_damageless" content="Damageless" /> (take no damage)
- And many others (examples: <Link hrefId="category_ceCeleste" content="Celeste" />, <Link hrefId="category_ceOutlast" content="Outlast" />)

### &nbsp;

### More categories

With <Link hrefId="category_constraints" content="multiple constraints" /> or:

- <Link hrefId="category_minimumPress" content="Minimum Press" />
- <Link hrefId="category_maximumScore" content="Maximum Score" />

---
layout: two-cols
---

# Timer

### In Speedrun

RTA (Real Time Attack) is the time spent in real life.
Once the agreement found about when to start and stop the timer, the time spent between those two actions will be the speedrun time.

IGT (In-Game Time) is the time spent but computed by the game.
It can contain loading times and the time spent in cutscenes.

The choice between RTA and IGT may be done:
- Switch <Link hrefId="timer_igtVsRta" content="some game characteristics" />
- Through a <Link hrefId="timer_debate" content="debate" />

::right::

# &nbsp;

### In TAS

The computed time for a TAS is simpler than for a speedrun because it's always the same way.

The timer starts when the game is launched, and it stops when the last input is pushed.

---
layout: cover
---

# Tool-Assisted Speedrun

---
layout: two-cols
---

# BizHawk emulator

### Characteristics

- Manage many consoles (PS1, Saturn, GB, ...)
- Have a lot of tools allowing game TASing
- Is Console Verified (<Link hrefId="bizhawk_consoleVerified" content="examples" />)

### &nbsp;

### Available tools (among others)

- Frame Advanced (play frame by frame)
- Save State (save anywhere)
- RAM Search and RAM Watch (search and watch values in the memory)
- Lua Scripting (launch a lua script to, for instance, <Link hrefId="bizhawk_luaOsd" content="display data on the screen" />)

::right::

### Console Verified

A way to measure the accuracy of an emulator is to replay the TAS' inputs back on a real console.

A TAS of a GBA game made with BizHawk can be replayed on a real GBA which reveal a high accuracy of emulation (<Link hrefId="bizhawk_emulationAccuracy" content="additionally" />).

TASBot is a robot created to do this verification (<Link hrefId="bizhawk_tasbot" content="his history" />: 🇺🇸 part <Link hrefId="bizhawk_tasbotHistory1" content="1" />, <Link hrefId="bizhawk_tasbotHistory2" content="2" />, and <Link hrefId="bizhawk_tasbotHistory3" content="3" />).

### Additionally (BizHawk and other tools)

- 🇺🇸 <Link hrefId="bizhawk_bizHawk" content="Detailed page about BizHawk" />
- 🇺🇸 <Link hrefId="bizhawk_tasBizHawk" content="First TAS with BizHawk" />
- 🇺🇸 <Link hrefId="bizhawk_resourcesBizHawk" content="Some resources about BizHawk" />
- 🇺🇸 <Link hrefId="bizhawk_subRedditEmulation" content="SubReddit about emulation" />
- 🇺🇸 <Link hrefId="bizhawk_toolsTas" content="List of emulators / tools to TAS" />

---
layout: cover
---

# Appendices

---

# Appendix #1: Vocabulary

### Technical words

Related vocabulary about speedrun is present in these links:

- 🇫🇷 <Link hrefId="vocabulary_srTasGlossary" content="Présentation et lexique du Speedrun et TAS" />

- 🇫🇷 <Link hrefId="vocabulary_dictionarySpeedrun" content="Le dictionnaire du Speedrun" />

- 🇫🇷 <Link hrefId="vocabulary_frenchWikiSpeedrun" content="Termes récurrents du Speedrun" />

- 🇺🇸 <Link hrefId="vocabulary_speedrunningGlossary" content="Speedrunning Glossary" />

- 🇺🇸 <Link hrefId="vocabulary_glossaryTasVideos" content="Glossary - TASVideos" />

---
layout: two-cols
---

# Appendix #2: LiveSplit

### Introduction

The main tool used by speedrunners to time their runs is <Link hrefId="livesplit_github" content="LiveSplit" />.

- 🇫🇷 <Link hrefId="livesplit_configureTimer" content="Configurer un Timer de Speedrun" />

- 🇺🇸 <Link hrefId="livesplit_setUpTimer" content="How to Set Up a Speedrun Timer" />

### Load Remover

To not penalize less powerful computers when runs on computers are made, Load Removers can be coded to remove loading times from the final time of the run.

- 🇺🇸 <Link hrefId="livesplit_loadRemover" content="Make Your Own Load Remover" />

::right::

# &nbsp;

### AutoSplit

All splits configured on LiveSplit are launched manually during a run. However, it is possible to launch them automatically.

- from a computer game by "listening" memory addresses thanks to an <Link hrefId="livesplit_asl" content="ASL file" />
  - 🇺🇸 <Link hrefId="livesplit_richDiamond" content="Rich Diamond" />
  - 🇺🇸 <Link hrefId="livesplit_dmc4se" content="Devil May Cry 4 Special Edition" />
- from a console game by comparing images
  - <Link hrefId="livesplit_autoSplit" content="Auto-Split" /> (🇫🇷 <Link hrefId="livesplit_autoSplitDemonstration" content="Demonstration" />)
  - <Link hrefId="livesplit_sikuli" content="Sikuli" /> (<Link hrefId="livesplit_sikuliDemonstration" content="Demonstration" />)

---
layout: two-cols
---

# Appendix #3: Links

### Multiple themes (speedrun)

- 🇺🇸 <Link hrefId="links_abyssoft" content="Abyssoft" />
- 🇺🇸 <Link hrefId="links_gladJonas" content="GladJonas" />
- 🇺🇸 <Link hrefId="links_karlJobst" content="Karl Jobst" />
- 🇺🇸 <Link hrefId="links_lowestPercent" content="Lowest Percent" />
- 🇺🇸 <Link hrefId="links_subRedditSpeedrun" content="Speedrun SubReddit" />

### &nbsp;

### Shows about TAS

- 🇫🇷 <Link hrefId="links_88malh" content="88 miles à l'heure" />
- 🇫🇷 <Link hrefId="links_inVinoVeritas" content="In Vino VeriTAS" />
- 🇫🇷 <Link hrefId="links_speedGame" content="Speed Game" />
- 🇫🇷 <Link hrefId="links_taspedia" content="TASpedia" />
- 🇺🇸 <Link hrefId="links_toolAssistedPodcastEpisodes" content="Tool-Assisted Podcast Episodes" />

::right::

# &nbsp;

### Commented Speedruns

- 🇫🇷 <Link hrefId="links_ceciEstUnSpeedrun" content="Ceci est un speedrun" />
- 🇫🇷 <Link hrefId="links_gamingSpeedDating" content="Gaming Speed Dating" />
- 🇫🇷 <Link hrefId="links_hugoDelireLaink" content="Hugo Délire & Laink" />
- 🇫🇷 <Link hrefId="links_machOne" content="Mach One" />
- 🇺🇸 <Link hrefId="links_speedrunExplained" content="Speedrun explained" />

### &nbsp;

### Additionally

- 🇺🇸 <Link hrefId="links_devsReactToSpeedruns" content="Devs React to Speedruns" />
- 🇺🇸 <Link hrefId="links_broadcastTAS" content="TAS continuous broadcast" />
- 🇺🇸 <Link hrefId="links_interviewsOfSpeedrunners" content="Interviews of Speedrunners" />
- 🇺🇸 <Link hrefId="links_subRedditTas" content="SubReddit (TAS)" />
- 🇺🇸 <Link hrefId="links_twitchTasTag" content="Twitch 'TAS' tag" />

---
layout: two-cols
---

# Appendix #4: Events

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
- <Link hrefId="events_tasApril" content="TAS submitted on April 1st" />

---
layout: two-cols
---

# Appendix #5: Other TA

### Tool-Assisted Superplay

Entertainment over speed.

- TAS vs TAS (<Link hrefId="ta_ryuVsCloud" content="Ryu vs Cloud" />, <Link hrefId="ta_nessVsYoungLink" content="Ness vs Young Link" />)
- Glitchfest (<Link hrefId="ta_mortalKombat3" content="Mortal Kombat 3" />)
- <Link hrefId="ta_taplayaround" content="TAP" /> (Tool-Assisted Playaround)

### &nbsp;

### Tool-Assisted Playthrough

Gameplay, dialogues, and cutscenes of a game.

- <Link hrefId="ta_tafp" content="TAFP" /> (Tool-Assisted Flawless Playthrough)
- <Link hrefId="ta_taw" content="TAW" /> (Tool-Assisted Walkthrough)
- <Link hrefId="ta_tag" content="TAG" /> (Tool-Assisted Gameplay)

::right::

# &nbsp;

### Tool-Assisted Speedrun, multiple ...

- ... players (<Link hrefId="ta_tasMultiPlayers2" content="2" />, <Link hrefId="ta_tasMultiPlayers3" content="3" />, <Link hrefId="ta_tasMultiPlayers4" content="4" />, <Link hrefId="ta_tasMultiPlayers5" content="5" />)

- ... games (🇺🇸 <Link hrefId="ta_pokemonCoopDiploma" content="Pokémon B&R: Coop Diploma" />)

- ... games, same inputs (<Link hrefId="ta_tasSameInputs2" content="2" />, <Link hrefId="ta_tasSameInputs3" content="3" />, <Link hrefId="ta_tasSameInputs4" content="4" />, <Link hrefId="ta_tasSameInputs11" content="11" />)

### &nbsp;

### LOTAD / Human Theory TAS

A <Link hrefId="ta_lotad" content="LOTAD" /> (Low Optimized Tool-Assisted Demonstration) is an unoptimized version of a Tool-Assisted Speedrun.

A <Link hrefId="ta_humanTheoryTas" content="Human Theory TAS" /> is a doable version by a human (without using TAS-Only strategies) with a very good execution and luck. 

---

# Appendix #6: Speedrun and TAS

### Differences

- The category <Link hrefId="srTA_blindfolded" content="Blindfolded" /> can only exist in speedrun
- Because time is not computed the same way, <Link hrefId="srTA_srFasterTas" content="a speedrun can appear faster than a TAS" />
- Some risky strategies are only viable in TAS like having <Link hrefId="srTA_fewLifePoints" content="few life points" />

### &nbsp;

### Competitions

- Run times are split (<Link hrefId="srTA_speedrunWebsite" content="speedrun.com" /> on the one hand and <Link hrefId="srTA_tasWebsite" content="tasvideos.org" /> on the other hand)
- Competitions are split (example: Super Mario 64 Competition, <Link hrefId="srTA_speedrunSM64" content="Speedrun" /> | <Link hrefId="srTA_tasSM64" content="TAS" />)

### &nbsp;

### People who are speedrunner and TASer of a same game

- <Link hrefId="srTA_bluekandy" content="Bluekandy" />: Mario Golf
- <Link hrefId="srTA_crazyGameNerd" content="CrazyGameNerd" />: F-Zero GX
- <Link hrefId="srTA_gymnast86" content="Gymnast86" />: Twilight Princess

---
layout: cover
---

# Skills

### &nbsp;

Here is a non-exhaustive list of skills used during speedruns / TAS which reduce more or less the time to end a game.

Some of these skills can lead to the creation of a new speedrun category if, for example, it "brakes" too much a game (like the <Link hrefId="skills_srm" content="SRM" /> in Ocarina of Time).

---
layout: two-cols
---

# Glitch

### Description

In general, a glitch (or bug) is a failure in a game.

Malfunctions can occur like clips (go through a wall), skips, ...

🎥 References:

- 🇺🇸 <Link hrefId="glitch_alundraBombGlitch" content="Alundra, Bomb Glitch" />

- 🇺🇸 <Link hrefId="glitch_twilightPrincessBackInTimeGlitch" content="Twilight Princess, Back in Time Glitch" />

- 🇺🇸 <Link hrefId="glitch_sonOfGlitch" content="Son of a Glitch" />

- 🇺🇸 <Link hrefId="glitch_iceberg" content="The Speedrun Skips Iceberg Explained" />

::right::

# Glitch Hunting

### Description

Glitch Hunting is the process to search for glitches and exploit them.

Testing how the game reacts when two events occur at the same time is one way to find some potential glitches.

🎥 References:

- 🇺🇸 <Link hrefId="glitchHunting_whoFindsGlitches" content="Who finds the Glitches used in Speedruns?" />

- 🇺🇸 <Link hrefId="glitchHunting_howGlitchesFound" content="How are speedrun glitches found?" />

- 🇺🇸 <Link hrefId="glitchHunting_glitchHuntingGamingCoding" content="Speedrunning, Glitch Hunting, and the Intersections of Gaming and Coding" />

---

# Language of the game

### Description

To be sure to get the best time in a game, playing with the most advantaged localized version of the game is a must.

Here are some examples of language used switch the speedrunned game:

- <Link hrefId="language_twilightPrincessAny" content="Twilight Princess Any%" />, in German
- <Link hrefId="language_breathOfTheWildAny" content="Breath of the Wild Any%" />, in French
- <Link hrefId="language_superMario6416Stars" content="Super Mario 64, 16 stars" />, in Japanese

🎥 References:

- 🇺🇸 <Link hrefId="language_advantages" content="Why Speedrunners Play on Japanese Releases – Version Differences" />

- 🇺🇸 <Link hrefId="language_use" content="What Languages Do Speedrunners Use?" />

---

# Menuing

### Description

Menuing is the optimisation of the use of the menu during a run.

The goal is to do the less count of back-and-forth into the menu by doing multiple actions (if possible) when opening it and having a good inventory management.

🎥 References:

- 🇺🇸 <Link hrefId="menuing_residentEvil1JillAnyGlitchlessInventoryManagement" content="Resident Evil 1: Jill Any% Glitchless Inventory Management" />

- 🇺🇸 <Link hrefId="menuing_agdq2019FinalFantasyXIBlindfoldedMenuing" content="AGDQ 2019: Final Fantasy XI - Blindfolded Menuing" />

---

# Routing / Route Planning

### Description

The path to follow in order to retrieve the best time to finish a game is the Routing (or Route Planning).

It can evolve when, for instance, new glitches are found.

The videos "World Record Progression" are good examples to see changes in the routing of some games.

🎥 References:

- 🇺🇸 <Link hrefId="routing_speedDocs" content="Speed Docs" />
- 🇺🇸 <Link hrefId="routing_summoningSalt" content="Summoning Salt" />

---

# Lag reduction

### Description

When too many elements are displayed on the screen, the speed of a game can decrease.

To avoid that, some tricks can be tested like killing enemies sooner or move the camera to not display some elements on screen.

🎥 References:

- 🇺🇸 <Link hrefId="lagReduction_superMetroidLagReductionComparison" content="Super Metroid - Lag Reduction comparison" />

- 🇺🇸 <Link hrefId="lagReduction_theBestKeptSecretInSM64" content="The Best Kept Secret in SM64 Speedruns" />

---

# Sequence Break / Skip

### Description

A Sequence Break (or Skip) is a shortcut but not intended by the game developers.

🎥 Some videos of EZScape about the biggest skips in speedruns:

- 🇺🇸 <Link hrefId="skip_top10BiggestSkipsInSpeedrunning1" content="Top 10 Biggest Skips In Speedrunning #1" />

- 🇺🇸 <Link hrefId="skip_top10BiggestSkipsInSpeedrunning2" content="Top 10 Biggest Skips In Speedrunning #2" />

- 🇺🇸 <Link hrefId="skip_top10BiggestSkipsInSpeedrunning3" content="Top 10 Biggest Skips In Speedrunning #3" />

---

# Damage Boost / Take damage to save time

### Description

Sometimes, enemies, even our own weapons, allow us to move faster when being hit by them (it's a Damage Boost or D-Boost).

Thus, a balance will be searched between a bunch of damage taken to save time and remaining life points to not die.

Damage Boost is a part of the "Take damage to save time" family which gathers skills allowing to trade some life points for time saved.

🎥 TAS examples containing some D-Boost:

- <Link hrefId="dBoost_theGoonies2Any" content="The Goonies II, Any%" />

- <Link hrefId="dBoost_superMetroid100" content="Super Metroid, 100%" />

---

# Death Warp / Death Abuse

### Description

In some games, death becomes a shortcut.

Indeed, death can take back to a previous checkpoint without doing strictly speaking this return manually.

🎥 References:

- 🇺🇸 <Link hrefId="death_deathAbuseSpeedTech" content="Death Abuse - SpeedTech Ep. 1 - Speedrunning Tricks" />

- 🇺🇸 <Link hrefId="death_speedrunODT" content="Speedrun of O.D.T.: Escape... Or Die Trying containing some Death Warps" />

---

# Pause Buffering

### Description

In some games, repeated pause can cause effects that can't append in another way.

🎥 References:

- 🇺🇸 <Link hrefId="pause_megaMan1" content="Mega Man 1, Pause Buffering" />

- 🇺🇸 <Link hrefId="pause_superMario64" content="Super Mario 64, Pause Buffering" />

---

# Out of Bounds

### Description

Some glitches allow getting outside the boundaries of the game, it's an OOB (out of bounds).

🎥 References:

- 🇺🇸 <Link hrefId="oob_luigiMansionChestGlitch" content="Luigi's Mansion, Chest Glitch" />

- 🇺🇸 <Link hrefId="oob_residentEvil4DitmanGlitch" content="Resident Evil 4, Ditman Glitch" />

OOB will become an other category when too many fragments of the game are skipped.

🎥 References:

- <Link hrefId="oob_ghostrunnerAnyOob" content="Ghostrunner, Any% OOB" />

- <Link hrefId="oob_portalAnyOob" content="Portal, Any% OOB" />

---

# Luck manipulation

### Description

Some events in a game can be subject to the luck (like doing a critical hit during a fight).

The name given to the luck in a game is the RNG (Random Number Generator) and can be represented as a probability that an event occurs.

When TASing, this RNG will be <Link hrefId="luck_manipulated" content="manipulated" /> to get (if possible) some desired events.

🎥 References:

- 🇺🇸 <Link hrefId="luck_dampeInOcarinaOfTime" content="Dampe in Ocarina of Time Explained" />

- 🇺🇸 <Link hrefId="luck_top10LuckDependentSpeedruns" content="Top 10 Luck Dependent Speedruns" />

---

# Arbitrary Code Execution

### Description

An ACE (Arbitrary Code Execution) is a glitch that allows to execute unintended code in a game.

This allows to go <Link hrefId="ace_geg" content="quickly to the end of a game" /> (named Game End Glitch) or to code a game into a game.

Example (Pong and Snake coded in Super Mario World):
- <Link hrefId="ace_demonstration" content="Demonstration" />
- 🇺🇸 <Link hrefId="ace_relatedArticle" content="Related article" />
- 🇫🇷 <Link hrefId="ace_relatedVideo" content="Related video" />

🎥 References:

- 🇺🇸 <Link hrefId="ace_tasMM100ACE" content="TAS Zelda Majora's Mask 100% with ACE" />

- 🇺🇸 <Link hrefId="ace_tasCastlevaniaGEG" content="TAS Castlevania: Symphony of the Night 'Game End Glitch'" />