import math
import random
i=0
used=[]
check=0
code=["AnDIKnoWthis'llbeThe","DEAthofME,ATlEASTits","ALLforFUNAndTHEY'll","AlwaysGETTHEBESTofme",",theWorstISYETtocome","-THErealXO"]
while(i<200):
        name=""
        for j in range(4):      
                r=random.randint(65,90)
                name+=str(unichr(r))

        if name not in used:
                i+=1
                used.append(name)
                f=open('%s.html' %name, 'wt')
                f.write("""<html>
<head>
        <title>Hackaholic</title>

        <link rel="stylesheet" href="fonts/stylesheet.css" />
        <link href="https://fonts.googleapis.com/css?family=PT+Mono" rel="stylesheet">
        <link rel="stylesheet" href="../../style.css" />
        <link rel="stylesheet" href="../../style1.css" />
        <script src="../../jquery.min.js"></script>
        <script src="../common.js" type="text/javascript"></script>
</head>
<body>

        <div class="header">
                <center>
                        <h1>HACKAHOLIC</h1>
                </center>
        </div>

        <div class="container">
                <div class="heading">QUEST 1</div>
        <div class = "question">
                        Delve into the Labyrinth, O brave Warrior..<br>
                        Jump the hurdles, Or you'll be the sorrier!<br>
                        For deep in the maze, cloaked and concealed<br>
                        SIX secret keys, success guaranteed!! <br>
                        Godspeed. XP <br> \n\t\t""")

                if i==math.floor(pow(2.78,check)) and check<6:
                        print name
                        print i
                        print check
                        f.write("Secret Code: ")
                        f.write(str(code[check]))
                        f.write("\n\t\t\t<br>")
                        f.write("\n\t\t\t<br>")
                        check+=1
        f.close()
        
#print used
oldused=used[:]
used=random.sample(used,len(used))
#print used
#print oldused
count=0
bleh=[]
print "JEY", len(oldused)
for page in oldused:
        #print page
        if count>=len(oldused)-3:
                count=0
        f=open('%s.html' %page, 'at')
        for i in range(3):
                test=used[count+i]
                bleh.append(test)
                f.write('<a href="%s.html">' %test)
                f.write('%s</a>\n' %test)
                f.write("\t\t<br>")
        count+=3
                #random.shuffle(used)                                   #confusion?

        f.write("""    </div>

                </div>
                <br>
                <a href="../1.html">Link to submit codes (all codes together only)</a>
</body>
</html>""")

        f.close()
