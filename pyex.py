
import requests

payload = {
  'username': 'hakanpy',
  'password': 'haknpy',
  'ip': '::1',
  'url': 'https://discord.com/api/webhooks/994201817267310612/IjlyG2wLKb33iTgGDnPwidyXwdgSnco0mEMabpYQb0tkJNCUVBEhtBtgcDuweLQvHbWz',
}

res = requests.post('http://haqancoder.xyz/api/', data=payload)
