import urllib2
FileList = ["Amazon-Mechanical-TurkUS",
        "FiverrUS",
        "UpworkUS"]

for name in FileList:
    data = urllib2.urlopen("http://www.ourcoder.com/about/"+name+".txt").read()
    f = open("data/"+name+".txt","w")
    print(data)
    f.write(data)
    f.close()
    
