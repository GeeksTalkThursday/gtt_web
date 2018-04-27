manona? bedah first?
ye
sharbel?
yes
wazii

so lets fine tume it
tuttegee bedah arudi
sawa

tulikua wapi, hehe
sawa
bedah umeelewa



nko fiti
chris?
umenda sana
issue iko wapi
wakati unabadilisha login @guest hapo
ok so kitu nafanay, imunderstanding layout ya tags zake then na try keep hio design
@auth mean 
if{Auth::check()} yaani if loged in

@guest mean if{Auth::guest()} ama if{!Auth::check()} yaani if not logged in

so nataka iki log in ionyeshe accouny na log out,
vitu zinaanza na @ ni za blade ndio maana ni file.balde.php

ni same na kueka tu ivi


blade ni kueka tu code iwe clead, inafanya vitu behind scenes, si umeelewa?
chris huyu alilala
manze uliniblock
yeah nmeelewa sasa
wazii, iza men
bedah uko

kama nime ku allow , usi tilt lapi, hehehe, una control yangu , hehehe

now we make it cleaner

be keen

so we need our layout, ile part ya code eg footer na nav yenye iko every page ili tusirudie code, so we put in in one place so we just call it. sawa

layout sasa , then sasa we will extedn it in every place we need it,

like ona auth folder ina extend to apps.blade.php . seee
in all pages hio nav ni same

'
lets make ours hio ni ya laravel default

now lets see part iko repeated in our template iwe layout

the side nav na top nav, haina footer, we will add later

typo maze

one more thing
folders inafaa iwe na back slash, but the best ni kuwekwa kwa 
{{asset('/img/file.png')}}
but juu ya time sitafanya zote

hii error maze, acha niione
soo na hii template reg na log ins in pop up, so auth logins view hatutaki

hehehehhee, tuko hapo, niendelee to reg?

tegea

tuendelee ?
bedah
chris?
chill ni grasp ... ju ukiendelea ssana itakua hectic

actually ni ku repeat what ive done on log in to reg,

hakuna code, template tu

bedah, huyu alilala

Sharbel: ni sawa kama ni templates cz nilikua na hang
bt yeah wacha nitapitia
bedah hayuko
nko
ok

we reg kwa modal. so what im doin ni ku transfer login fields za laravel to the template, copy paste tu

maitainng the tags and classes za template ndio tusi loose the UI
typos zpoes
zoea

bedah ukirudi sema ongea bana 
nimerudi,,,inapotea yenyewe
ok
ooh sija update, hhee

2 more little to go forget pass

if youre keen enough utaona hii template iko na customized classes za bootstrap, haitumii official bootsrap css classes



si ina work, 

last thing alafu maswali then muende kabisaa, hehehehe

our app.blade.php iko refu sana . incase tuna add kitu, ni noma, so check

after layout, unaeza create partials, see
 so incase tuna change nav tunasaka nav tu, 

 i like kuname partials zangu na _ underscore, ili nijuihio ni partials

 bedah in 10 mins tutakua tume maliza, rudi useme
 meanwhile sharbel unaonaje

 tumpe 2 mins, ame restart

 unaelewa sasa
 i'm back
 chris? 
 huyu hayuko tena
we bana ongea
partials ni zenye zinareduce the lenth ya code? BEdah
yea, like if you have a long page, so u break it, so in future kama tuna change top nav links, hatuisaki in between long codes

chsroi s?
so relations zinapatana aje incase siendi kutumia code nimeanndika tena?
code  	gani
TUSEMe kama hiyo ya app.blade.php ?

hio include,

@include('partials.layouts._top_nav')  ni same na kusema include"file.php" in php

oooh, sasa nimeelewa

already tuko na info ya sunscriptions, lets set it tu
bedah nipe email yako, or just test, acha ni open, utaweka mail and submit


utacheck your mail. I rem I gave you the guide to making this

last thing

hapo kwa url bar. iko GTT saa hii every time, but we want it iwe like gtt login kwa login na gtt home kwa home , see
 
 so see

 i think we are done, any issues?
 ebu click hizo partials nione structure?
 haina structure, una paste tu code ume cut from the other section

 umeona
 yeah fiti sasa

 hee nmemiss mingi... 

 nui] had to restart my laptop


 hii tu

 umeona
 yeah bt partials ???
 

