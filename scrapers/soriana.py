import requests
import re

gurl = 'http://www.sorianadomicilio.com/site/default.aspx?p={}'


def get_categories(page_number):
    page = requests.get(gurl.format(page_number))
    return re.findall(b'\<li\>\<a href="\?p=(\d*)"\>([ \w]*)', page.content)


def scrap_category(page_number):
    pn = page_number.decode()
    page = requests.get(gurl.format(pn), allow_redirects=False)
    subpages = set(re.findall(b'px=(\d*)', page.content))
    pattern = b'txtarticulohome"\>([\d\w ]*).*'
    pattern += b'precioarticulohome"\>([\$\.\d]*)<.*'
    articles = re.findall(pattern, page.content)
    for subpage in sorted(subpages):
        suburl = gurl + '&px={}'
        sp = subpage.decode()
        print('>><<', suburl.format(pn, sp))
        page = requests.get(suburl.format(pn, sp), allow_redirects=False)
        articles += re.findall(pattern, page.content)

    return articles


if __name__ == '__main__':
    categories = get_categories('9831')
    final_data = {}
    for code, name in categories:
        print(code, name)
        scraped = scrap_category(code)
        print('<<>>', len(scraped))
        final_data[name] = scraped
    with open('rawdata.txt', 'w') as fd:
        fd.write(str(final_data))
