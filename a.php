today='1227'
headers = {'User-Agent': 'Mozilla/5.0 (Windows NT 10.0; Win64; ) Gecko/20100101 shiyue.com/118.00000000000000000000000000000000000000000000000000000000000000000000000000000000000000'}
num = ['0','1','2','3','4','5','6','7','8','9']
char = [chr(i) for i in range(ord('a'), ord('z')+1)]
def _request():
    phone_random = ''
    passwd_random = ''
    chr_random = ''
    timestamp = str(int(time.time()))
    proxy_random = switch_ip()
    proxies = {
        'http': 'http://{}'.format(proxy_random),
        'https': 'https://{}'.format(proxy_random),
    }
    for i in range(0,6):
        phone_random = phone_random + random.choice(num)
    for i in range(0,6):
        passwd_random = passwd_random + random.choice(num)
    for i in range(0,3):
        chr_random = chr_random + random.choice(char)
