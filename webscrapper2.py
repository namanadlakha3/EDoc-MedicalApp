from bs4 import BeautifulSoup
import requests
import sys
#print(sys.argv[1])
url="https://medlineplus.gov/"
r=requests.get(url+sys.argv[1]+".html")
#print(r.status_code)
t=r.text
#print(t)
soup=BeautifulSoup(t,'html.parser')
m=soup.find_all('div',{'id':'topic-summary'})
text=m[0].text
print(text)