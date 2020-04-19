from bs4 import BeautifulSoup
import requests
import sys
#print(sys.argv[1])

url="https://www.everydayhealth.com/drugs/"
r=requests.get(url+sys.argv[1])
#print(r.status_code)
t=r.text
#print(t)
soup=BeautifulSoup(t,'html.parser')
m=soup.find_all('div',{'id':'drug_basic_section'})
text=m[0].text
print(text)
