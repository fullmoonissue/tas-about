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

<a href="https://github.com/FullMoonIssue" target="_blank">Github</a> - <a href="https://www.youtube.com/channel/UCyIgZhTFSpPe_E7WRFzRBCQ" target="_blank">Youtube</a>

Made with <a href="https://github.com/slidevjs/slidev" target="_blank">Slidev</a>

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
- an emulator for console games (example : <a href="https://github.com/TASVideos/BizHawk" target="_blank">BizHawk</a>)
- a software for computer games (example : <a href="https://github.com/clementgallet/libTAS" target="_blank">LibTAS</a>)

A TAS is represented by <a href="http://tasvideos.org/Bizhawk/BK2Format.html#InputLog" target="_blank">a file</a> which list inputs (buttons) pushed on a particular frame (picture).

::right::

# &nbsp;

### Additionally (Speedrun)

- 🇫🇷 <a href="https://www.youtube.com/watch?v=akQuKUa-Iho" target="_blank">Introduction au Speedrun</a>

- 🇫🇷 <a href="https://www.youtube.com/watch?v=7HhXrAeEd2M" target="_blank">Comment commencer le speedrun</a>

- 🇺🇸 <a href="https://www.youtube.com/watch?v=fTElGPOsdd8" target="_blank">What is Speedrunning?</a>

- 🇺🇸 <a href="https://www.youtube.com/watch?v=Zxhd4tGuhf4" target="_blank">How To Start Speedrunning</a>

### Additionally (TAS)

- 🇫🇷 <a href="https://www.youtube.com/watch?v=XrNrJ9G8-Do" target="_blank">Conférence sur le Tool-Assisted Speedrun</a>

- 🇫🇷 <a href="https://www.youtube.com/embed/dcbdhDqBx_g?start=225&end=1252" target="_blank">Comment réaliser un TAS</a>

- 🇺🇸 <a href="https://www.youtube.com/watch?v=Ietk1-Wb7oY" target="_blank">Tool-assisted speedrunning explained</a>

- 🇺🇸 <a href="https://www.youtube.com/watch?v=R3-ohYvi_fc" target="_blank">Introduction to TAS</a>

---
layout: two-cols
---

# Category

### Criteria leading to different categories

Percentage finished of a game

- <a href="https://www.youtube.com/watch?v=qYus40vi-Tw" target="_blank">Low%</a> (less items possible)
- <a href="https://www.youtube.com/watch?v=nDnJw6MyVF8" target="_blank">Any%</a> (default category, go to the end)
- <a href="https://www.youtube.com/watch?v=kFT5zbKo23s" target="_blank">100%</a> (all game's objectives made)

Use of glitches / bugs

- <a href="https://www.youtube.com/watch?v=vjMAH3I55bk" target="_blank">Glitchless</a> (none or some glitches allowed)
- <a href="https://www.youtube.com/watch?v=ZEWnHPXEOYQ" target="_blank">NMG</a> (No Major Glitch)

Others

- <a href="https://www.youtube.com/watch?v=1xJIJ7bjSdU" target="_blank">DLC</a> / <a href="https://www.youtube.com/watch?v=rg0n2Ctbuug" target="_blank">Rom Hack</a>
- <a href="https://www.youtube.com/watch?v=3VHBGoWDFR0" target="_blank">Version of the game</a> / <a href="https://www.youtube.com/watch?v=LoTorn8_3C8" target="_blank">Patch applied</a>

::right::

# &nbsp;

### Category extensions

The community of a game may suggest some extra categories.

- <a href="https://www.youtube.com/watch?v=E0jcnyb2eec" target="_blank">RBO</a> (Reverse Boss Order, defeat bosses in the inverted order)
- <a href="https://www.youtube.com/watch?v=UESSGDT-Oww" target="_blank">Damageless</a> (take no damage)
- And many others (examples : <a href="https://www.speedrun.com/celeste_category_extensions" target="_blank">Celeste</a>, <a href="https://www.speedrun.com/outlastmemes" target="_blank">Outlast</a>)

### &nbsp;

### More categories

With <a href="https://www.youtube.com/watch?v=1EOzbAHPmvM" target="_blank">multiple constraints</a> or :

- <a href="https://www.youtube.com/watch?v=IBDp3wnrOAo" target="_blank">Minimum Press</a>
- <a href="https://www.youtube.com/watch?v=OF2UwcIZ-DI" target="_blank">Maximum Score</a>

---
layout: two-cols
---

# Timer

### In Speedrun

RTA (Real Time Attack) is the time spent in real life.
Once the agreement found about when to start and stop the timer, the time spent between those two actions will be the speedrun time.

IGT (In-Game Time) is the time spent but computed by the game.
It can contain loading times and the time spent in cutscenes.

The choice between RTA and IGT may be done :
- Switch <a href="https://www.reddit.com/r/speedrun/comments/7a8223/igt_vs_rta_when_should_a_leaderboard_use_which/dp88pli/" target="_blank">some game characteristics</a>
- Through a <a href="https://www.speedrun.com/Speedrunning/thread/b5rk1" target="_blank">debate</a>

::right::

# &nbsp;

### In TAS

The computed time for a TAS is simpler than for a speedrun because it's always the same way.

The timer starts when the game is launched and it stops when the last input is pushed.

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
- Is Console Verified (<a href="https://www.youtube.com/playlist?list=PLH-rsHQS9LqgSYzSePo9aWUX8xRjXSqK9" target="_blank">examples</a>)

### &nbsp;

### Available tools (among others)

- Frame Advanced (play frame by frame)
- Save State (save anywhere)
- RAM Search and RAM Watch (search and watch values in the memory)
- Lua Scripting (launch a lua script to, for instance, <a href="https://www.youtube.com/watch?v=reDowrCmnwY" target="_blank">display data on the screen</a>)

::right::

### Console Verified

A way to measure the accuracy of an emulator is to replay the TAS' inputs back on a real console.

A TAS of a GBA game made with BizHawk can be replayed on a real GBA which reveal a high accuracy of emulation (<a href="https://www.youtube.com/watch?v=060Nb7ppa-s" target="_blank">additionally</a>).

<a href="http://tasvideos.org/TASBot.html" target="_blank">TASBot</a> is a robot created to do this verification (his history : 🇺🇸 part <a href="https://www.youtube.com/watch?v=-Jo6tDW7k3Q" target="_blank">1</a>, <a href="https://www.youtube.com/watch?v=gTF2Pih8BX8" target="_blank">2</a> and <a href="https://www.youtube.com/watch?v=BDQXzrYUuvA" target="_blank">3</a>).

### Additionally (BizHawk and other tools)

- 🇺🇸 <a href="http://tasvideos.org/BizHawk.html" target="_blank">Detailed page about BizHawk</a>
- 🇺🇸 <a href="https://www.youtube.com/playlist?list=PLlJzD6wWmoXmihK13itZJ-mzjK3SD1EaM" target="_blank">First TAS with BizHawk</a>
- 🇺🇸 <a href="https://www.youtube.com/playlist?list=PLFpQiGLusn-aq-z-noMJ7rj9sG3jT3cvW" target="_blank">Some resources about BizHawk</a>
- 🇺🇸 <a href="https://www.reddit.com/r/emulation/" target="_blank">SubReddit about emulation</a>
- 🇺🇸 <a href="http://tasvideos.org/EmulatorResources.html" target="_blank">List of emulators / tools to TAS</a>

---
layout: cover
---

# Appendices

---

# Appendix #1 : Vocabulary

### Technical words

Related vocabulary about speedrun is present in these links :

- 🇫🇷 <a href="https://djonepiece300.wordpress.com/2018/01/25/presentation-et-lexique-du-speedrun-et-tool-assisted-speedrun-tas/" target="_blank">Présentation et lexique du Speedrun et TAS</a>

- 🇫🇷 <a href="https://www.youtube.com/playlist?list=PLoJVELv88dFXuhcFST45YVlDHa37dbmMe" target="_blank">Le dictionnaire du Speedrun</a>

- 🇺🇸 <a href="http://www.speedrunslive.com/faq/glossary/" target="_blank">Speedrunning Glossary</a>

---
layout: two-cols
---

# Appendix #2 : LiveSplit

### Introduction

The main tool used by speedrunners to time their runs is <a href="https://github.com/LiveSplit" target="_blank">LiveSplit</a>.

- 🇫🇷 <a href="https://www.youtube.com/watch?v=QWuBijoRn9U" target="_blank">Configurer un Timer de Speedrun</a>

- 🇺🇸 <a href="https://www.youtube.com/watch?v=xq2MCodtH34" target="_blank">How to Set Up a Speedrun Timer</a>

### Load Remover

To not penalize less powerful computers when runs on computers are made, Load Removers can be coded to remove loading times from the final time of the run.

- 🇺🇸 <a href="https://www.youtube.com/watch?v=mJYc_5dt8Dw" target="_blank">Making load removers for speedruns</a>

::right::

# &nbsp;

### AutoSplit

All splits configured on LiveSplit are launched manually during a run. However, it is possible to launch them automatically.

- from a computer game by "listening" memory addresses thanks to an <a href="https://github.com/LiveSplit/LiveSplit.AutoSplitters/blob/master/README.md" target="_blank">ASL file</a>
  - 🇺🇸 <a href="https://www.youtube.com/watch?v=VS5-ZSjcBXQ" target="_blank">Rich Diamond</a>
  - 🇺🇸 <a href="https://www.youtube.com/watch?v=KcBZLtjazHQ" target="_blank">Devil May Cry 4 Special Edition</a>
- from a console game by comparing images
  - <a href="https://github.com/Toufool/Auto-Split" target="_blank">Auto-Split</a> (🇫🇷 <a href="https://www.youtube.com/watch?v=uGZphPkrGRw&t=848s" target="_blank">Demonstration</a>)
  - <a href="https://github.com/RaiMan/SikuliX1" target="_blank">Sikuli</a> (<a href="https://www.youtube.com/watch?v=W4sn4yjSosA" target="_blank">Demonstration</a>)

---
layout: two-cols
---

# Appendix #3 : Links

### Multiple themes (speedrun)

- 🇺🇸 <a href="https://www.youtube.com/c/ApolloLegend" target="_blank">Apollo Legend</a>
- 🇺🇸 <a href="https://www.youtube.com/c/gladJonas" target="_blank">GladJonas</a>
- 🇺🇸 <a href="https://www.youtube.com/c/karljobst" target="_blank">Karl Jobst</a>
- 🇺🇸 <a href="https://www.youtube.com/c/LowestPercent" target="_blank">Lowest Percent</a>
- 🇺🇸 SubReddits : <a href="https://www.reddit.com/r/Speedrunning/" target="_blank">Speedrunning</a> & <a href="https://www.reddit.com/r/speedrun/" target="_blank">Speedrun</a>(<a href="https://www.reddit.com/r/Speedruns/" target="_blank">s</a>)

### &nbsp;

### Shows about TAS

- 🇫🇷 <a href="https://www.youtube.com/playlist?list=PLD400FA8A50319D8C" target="_blank">88 miles à l'heure</a>
- 🇫🇷 <a href="https://www.youtube.com/channel/UCUrnYqoOBrcX4WOfuNDQEgw/videos" target="_blank">In Vino VeriTAS</a>
- 🇫🇷 <a href="https://www.youtube.com/playlist?list=PLymmwIRuunnacxT6lxIsHXjDrlkiMParM" target="_blank">Speed Game</a>
- 🇫🇷 <a href="https://www.youtube.com/playlist?list=PLHZhigRWkVZOeS83tX-Z-IEf45ZYu0q6q" target="_blank">TASpedia</a>
- 🇺🇸 <a href="https://www.youtube.com/playlist?list=PLlJzD6wWmoXn22611vVPKvmmZ3pLWOca5" target="_blank">Tool-Assisted Podcast Episodes</a>

::right::

# &nbsp;

### Commented Speedruns

- 🇫🇷 <a href="https://www.youtube.com/playlist?list=PLdkPlOZ2GL2xnkF_8AwkLPa7h0YsjgyuZ" target="_blank">Ceci est un speedrun</a>
- 🇫🇷 <a href="https://www.youtube.com/playlist?list=PLiZQtLpCVz-givM_GpeZuIxzbAcUl1EP9" target="_blank">Gaming Speed Dating</a>
- 🇫🇷 <a href="https://www.youtube.com/playlist?list=PLqAlRNty5123ErcYqWEa2oi26Oil-SO2Y" target="_blank">Hugo Délire & Laink</a>
- 🇫🇷 <a href="https://www.youtube.com/channel/UCHXhezW0r3Hvq4QQ6yXcYQw" target="_blank">Mach One</a>
- 🇺🇸 <a href="https://www.youtube.com/playlist?list=PLoiGRjr9BAVjXkIZNdJspBHkabRkMytxs" target="_blank">Speedrun explained</a>

### &nbsp;

### Additionally

- 🇺🇸 <a href="https://www.youtube.com/playlist?list=PLraFbwCoisJA6eO7VSWtUqLaIFBQq4PCv" target="_blank">Devs React to Speedruns</a>
- 🇺🇸 <a href="https://www.reddit.com/r/TAS/" target="_blank">SubReddit (TAS)</a>
- 🇺🇸 <a href="https://www.twitch.tv/directory/all/tags/0b83a789-5f6a-45f0-b6a3-a56926b6f8b5" target="_blank">Twitch "TAS" tag</a>
- 🇺🇸 Developers who speedrun their own game (<a href="https://www.twitch.tv/videos/1110820951" target="_blank">Polyphony Lunar Run</a> - <a href="https://www.youtube.com/watch?v=LLNx5_8FK4I" target="_blank">Pro Gymnast</a>)

---
layout: two-cols
---

# Appendix #4 : Events

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
- <a href="http://tasvideos.org/Noxxa/AprilFoolsHistory.html" target="_blank">TAS submitted on April 1st</a>

---
layout: two-cols
---

# Appendix #5 : Other TA

### Tool-Assisted Superplay

Entertainment over speed.

- TAS vs TAS (<a href="https://www.youtube.com/watch?v=0CsOeksvJ44" target="_blank">Ryu vs Cloud</a>, <a href="https://www.youtube.com/watch?v=lhE8g3fscYM" target="_blank">Ness vs Young Link</a>)
- Glitchfest (<a href="https://www.youtube.com/watch?v=Yxb0t34mW-U" target="_blank">Mortal Kombat 3</a>)
- <a href="https://www.youtube.com/watch?v=A06DjnoHRIk" target="_blank">TAP</a> (Tool-Assisted Playaround)

### &nbsp;

### Tool-Assisted Playthrough

Gameplay, dialogues and cutscenes of a game.

- <a href="https://www.youtube.com/watch?v=RxRaLTpG2VI" target="_blank">TAFP</a> (Tool-Assisted Flawless Playthrough)
- <a href="https://www.youtube.com/watch?v=KXcR_PDWAUo" target="_blank">TAP</a> (Tool-Assisted Playthrough)
- <a href="https://www.youtube.com/watch?v=gEOIFXNlIdQ" target="_blank">TAW</a> (Tool-Assisted Walkthrough)
- <a href="https://www.youtube.com/watch?v=mTK4n0k6HRE" target="_blank">TAG</a> (Tool-Assisted Gameplay)

::right::

# &nbsp;

### Tool-Assisted Speedrun, multiple ...

- ... players (<a href="https://www.youtube.com/watch?v=IH4TNH0d-6k" target="_blank">2</a>, <a href="https://www.youtube.com/watch?v=Z8sp-Qnlmzo" target="_blank">3</a>, <a href="https://www.youtube.com/watch?v=uj_GnHZlDvE" target="_blank">4</a>)

- ... games (🇺🇸 <a href="https://www.youtube.com/watch?v=-ivGNZs_Mvw" target="_blank">Pokémon B&R : Coop Diploma</a>)

- ... games, same inputs (<a href="https://www.youtube.com/watch?v=pPJKMm5VrhE" target="_blank">2</a>, <a href="https://www.youtube.com/watch?v=To3d6XKsMcQ" target="_blank">3</a>, <a href="https://www.youtube.com/watch?v=SiHdBS7HPg0" target="_blank">4</a>, <a href="https://www.youtube.com/watch?v=CL9yGz7VVrM" target="_blank">11</a>)

### &nbsp;

### LOTAD / Human Theory TAS

A <a href="https://www.youtube.com/watch?v=ki53UHJMlD4" target="_blank">LOTAD</a> (Low Optimized Tool-Assisted Demonstration) is an unoptimized version of a Tool-Assisted Speedrun.

A <a href="https://www.youtube.com/watch?v=HRqrvkU0sYQ" target="_blank">Human Theory TAS</a> is a doable version by a human (without using TAS-Only strategies) with a very good execution and luck. 

---

# Appendix #6 : Speedrun and TAS

### Differences

- The category <a href="https://www.youtube.com/watch?v=mUpT7fHi1lA" target="_blank">Blindfolded</a> can only exist in speedrun
- Because time is not computed the same way, <a href="https://www.youtube.com/watch?v=QKsRNoLyXO8&t=3170s" target="_blank">a speedrun can appear faster than a TAS</a>
- Some risky strategies are only viable in TAS like having <a href="https://www.youtube.com/watch?v=WhD1VvlbPLs" target="_blank">few life points</a>

### &nbsp;

### Competitions

- Run times are split (<a href="https://www.speedrun.com/" target="_blank">speedrun.com</a> on the one hand and <a href="http://tasvideos.org/" target="_blank">tasvideos.org</a> on the other hand)
- Competitions are split (example : Super Mario 64 Competition, <a href="https://www.youtube.com/playlist?list=PL6P6dcko2BB7fg9h0CIN62zFeVecgV8lR" target="_blank">Speedrun</a> | <a href="https://www.youtube.com/playlist?list=PLkW-5L5VSY-YVhkBrb2be2Hi-i_nrtW-L" target="_blank">TAS</a>)

### &nbsp;

### People who are speedrunner and TASer of a same game

- <a href="https://www.youtube.com/c/Bluekandy/about" target="_blank">Bluekandy</a> : Mario Golf
- <a href="https://www.youtube.com/user/CrazyGameNerd/about" target="_blank">CrazyGameNerd</a> : F-Zero GX
- <a href="https://www.youtube.com/c/gymnast86/about" target="_blank">Gymnast86</a> : Twilight Princess

---
layout: cover
---

# Skills

### &nbsp;

Here is a non-exhaustive list of skills used during speedruns / TAS which reduce more or less the time to end a game.

Some of these skills can lead to the creation of a new speedrun category if, for example, it "brakes" too much a game (like the <a href="https://www.youtube.com/watch?v=a_R2H2dRWqU" target="_blank">SRM</a> in Ocarina of Time).

---
layout: two-cols
---

# Glitch

### Description

In general, a glitch (or bug) is a failure in a game.

Malfunctions can occur like clips (go through a wall), skips, ...

🎥 References :

- 🇺🇸 <a href="https://www.youtube.com/watch?v=4pVgsyt6uXU" target="_blank">Alundra, Bomb Glitch</a>

- 🇺🇸 <a href="https://www.youtube.com/watch?v=Jhfc4fyw5Wk" target="_blank">Twilight Princess, Back in Time Glitch</a>

- 🇺🇸 <a href="https://www.youtube.com/playlist?list=PLDBXdd2IJRvW-gaqcF2Kx0zOUkFZVdML2" target="_blank">Son of a Glitch</a>

::right::

# Glitch Hunting

### Description

Glitch Hunting is the process to search for glitches and exploit them.

Testing how the game reacts when two events occur at the same time is one way to find some potential glitches.

🎥 References :

- 🇺🇸 <a href="https://www.youtube.com/watch?v=PTsnblKvfqE" target="_blank">Who finds the Glitches used in Speedruns?</a>

- 🇺🇸 <a href="https://www.youtube.com/watch?v=yOMKljWdCIE" target="_blank">How are speedrun glitches found?</a>

- 🇺🇸 <a href="https://medium.com/@dannyb21892/speedrunning-glitch-hunting-and-the-intersections-of-gaming-and-coding-ce8be66e9029" target="_blank">Speedrunning, Glitch Hunting and the Intersections of Gaming and Coding</a>

---

# Language of the game

### Description

To be sure to get the best time in a game, playing with the <a href="https://www.youtube.com/watch?v=1Mtukr5v6J8" target="_blank">most advantaged localized version</a> of the game is a must.

Here are some examples of language used switch the speedrunned game :

- <a href="https://www.youtube.com/watch?v=XM1UwcX1AlM" target="_blank">Twilight Princess Any%</a>, in German
- <a href="https://www.youtube.com/watch?v=DkQiUfz2exc" target="_blank">Breath of the Wild Any%</a>, in French
- <a href="https://www.youtube.com/watch?v=TL5UhcpQthQ" target="_blank">Super Mario 64, 16 stars</a>, in Japanese

---

# Menuing

### Description

Menuing is the optimisation of the use of the menu during a run.

The goal is to do the less count of back-and-forth into the menu by doing multiple actions (if possible) when opening it and having a good inventory management.

🎥 References :

- 🇺🇸 <a href="https://www.youtube.com/watch?v=jdZg4a4NU5k" target="_blank">Resident Evil 1 : Jill Any% Glitchless Inventory Management</a>

- 🇺🇸 <a href="https://www.youtube.com/watch?v=46YM-7g2800" target="_blank">AGDQ 2019: Final Fantasy XI - Blindfolded Menuing</a>

---

# Routing / Route Planning

### Description

The path to follow in order to retrieve the best time to finish a game is the Routing (or Route Planning).

It can evolve when, for instance, new glitches are found.

The videos "World Record Progression" are good examples to see changes in the routing of some games.

🎥 References :

- 🇺🇸 <a href="https://www.youtube.com/playlist?list=PLuwYJaJDViFlt1hRETxEP3dexwJG1ENNe" target="_blank">Speed Docs</a>
- 🇺🇸 <a href="https://www.youtube.com/playlist?list=PLMxPYcr2zEkWInMyvvxmN22gjrRR0x__u" target="_blank">Summoning Salt</a>

---

# Lag reduction

### Description

When too many elements are displayed on the screen, the speed of a game can decrease.

To avoid that, some tricks can be tested like killing enemies sooner or move the camera to not display some elements on screen.

🎥 References :

- 🇺🇸 <a href="https://www.youtube.com/watch?v=mMtKl_P_vz0" target="_blank">Super Metroid -- Lag Reduction comparison</a>

- 🇺🇸 <a href="https://www.youtube.com/watch?v=sOetJuClTGs" target="_blank">The Best Kept Secret in SM64 Speedruns</a>

---

# Sequence Break / Skip

### Description

A Sequence Break (or Skip) is a shortcut but not intended by the game developers.

🎥 Some videos of EZScape about the biggest skips in speedruns :

- 🇺🇸 <a href="https://www.youtube.com/watch?v=9N5J5_Q2miA" target="_blank">Top 10 Biggest Skips In Speedrunning #1</a>

- 🇺🇸 <a href="https://www.youtube.com/watch?v=bk90sXw696s" target="_blank">Top 10 Biggest Skips In Speedrunning #2</a>

- 🇺🇸 <a href="https://www.youtube.com/watch?v=HF4i9vebXPk" target="_blank">Top 10 Biggest Skips In Speedrunning #3</a>

---

# Damage Boost / Take damage to save time

### Description

Sometimes, enemies, even our own weapons, allow us to move faster when being hit by them (it's a Damage Boost or D-Boost).

Thus, a balance will be searched between a bunch of damage taken to save time and remaining life points to not die.

Damage Boost is a part of "Take damage to save time" family which gathers skills allowing to trade some life points for time saved.

🎥 TAS examples containing some D-Boost :

- <a href="https://www.youtube.com/watch?v=7-Kak8JeF1g" target="_blank">The Goonies II, Any%</a>

- <a href="https://www.youtube.com/watch?v=Sy0HrZLRq3k" target="_blank">Super Metroid, 100%</a>

---

# Death Warp / Death Abuse

### Description

In some games, death becomes a shortcut.

Indeed, death can take back to a previous checkpoint without doing strictly speaking this return manually.

🎥 References :

- 🇺🇸 <a href="https://www.youtube.com/watch?v=5BgLSAMJreM" target="_blank">Death Abuse - SpeedTech Ep. 1 - Speedrunning Tricks</a>

- <a href="https://www.youtube.com/watch?v=IRtLpYB2fnI" target="_blank">Speedrun of O.D.T.: Escape... Or Die Trying containing some Death Warps</a>

---

# Pause Buffering

### Description

In some games, repeated pause can cause effects that can't append in another way.

🎥 References :

- 🇺🇸 <a href="https://www.youtube.com/watch?v=-q5XYEJwdaE" target="_blank">Mega Man 1, Pause Buffering</a>

- 🇺🇸 <a href="https://www.youtube.com/watch?v=IhlBrVaK7DU" target="_blank">Super Mario 64, Pause Buffering</a>

---

# Out of Bounds

### Description

Some glitches allow getting outside the boundaries of the game, it's an OOB (out of bounds).

🎥 References :

- 🇺🇸 <a href="https://www.youtube.com/watch?v=7trX1fDmAXI" target="_blank">Luigi's Mansion, Chest Glitch</a>

- 🇺🇸 <a href="https://www.youtube.com/watch?v=byXJ1lhNLB8" target="_blank">Resident Evil 4, Ditman Glitch</a>

### OOB as a category

OOB will become an other category when too many fragments of the game are skipped.

🎥 References :

- <a href="https://www.youtube.com/watch?v=briY7IIL3Bs" target="_blank">Ghostrunner, Any% OOB</a>

- <a href="https://www.youtube.com/watch?v=R0FWWsaHdQ4" target="_blank">Portal, Any% OOB</a>

---

# Luck manipulation

### Description

Some events in a game can be subject to the luck (like doing a critical hit during a fight).

The name given to the luck in a game is the RNG (Random Number Generator) and can be represented as a probability that an event occurs.

When TASing, this RNG will be <a href="http://tasvideos.org/LuckManipulation.html" target="_blank">manipulated</a> to get (if possible) some desired events.

🎥 References :

- 🇺🇸 <a href="https://www.youtube.com/watch?v=UxL2DpGASt8" target="_blank">Dampe in Ocarina of Time Explained</a>

- 🇺🇸 <a href="https://www.youtube.com/watch?v=SnQNrYOvWR4" target="_blank">Top 10 Luck Dependent Speedruns</a>

---

# Arbitrary Code Execution

### Description

An ACE (Arbitrary Code Execution) is a glitch that allows to execute unintended code in a game.

This allows to go <a href="https://www.youtube.com/watch?v=StuzA-IRN_Y" target="_blank">quickly to the end of a game</a> (named Game End Glitch) or to code a game into a game.

Example (Pong and Snake coded in Super Mario World) :
- <a href="https://www.youtube.com/watch?v=v_KsonqcMv0" target="_blank">Demonstration</a>
- 🇺🇸 <a href="https://arstechnica.com/gaming/2014/01/how-an-emulator-fueled-robot-reprogrammed-super-mario-world-on-the-fly/" target="_blank">Related article</a>
- 🇫🇷 <a href="https://www.youtube.com/watch?v=dcbdhDqBx_g&t=1252s" target="_blank">Related video</a>

🎥 References :

- 🇺🇸 <a href="https://www.youtube.com/watch?v=o7wGpmP6YH8" target="_blank">TAS Zelda Majora's Mask 100% with ACE</a>

- 🇺🇸 <a href="https://www.youtube.com/watch?v=FmTtRZcfH08" target="_blank">TAS Castlevania: Symphony of the Night "Game End Glitch" </a>