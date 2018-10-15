links=[]
codes=[]
urls=[]
def page_access(url, level):
        global links
        global codes
        global urls
        print url[-9:], "is at level", level
        try:
                if url not in urls:
                        urls.append(url)
                        page = open(url, "r")
                        string = page.read().split()
                        for i in range(len(string)):
                                if 'Code' in string[i]:
                                        #print string[i+1]
                                        if string[i+1] not in codes:
                                                codes.append((string[i+1], url[-9:], level))
                                if 'href' in string[i] and '/a' in string[i]:
                                        hyperlink = str(string[i][6:15])
                                        print hyperlink, "is the child of", url[-9:]
                                        #print url[:-9]+hyperlink
                                        if hyperlink not in links:
                                                links.append(hyperlink)
                                                #print string[i][6:15]
                                                page_access(url[:-9]+hyperlink, level+1)
                else:
                        print url[-9:], "already in urls"
        except:                
                return codes, len(codes)
        else:
                return codes, len(codes)


print page_access("YQCJ.html", 0)
print len(urls)
print len(list(set(urls)))
print len(links)
print len(list(set(links)))
