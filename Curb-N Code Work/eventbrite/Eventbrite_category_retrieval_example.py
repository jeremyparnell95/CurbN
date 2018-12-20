import requests
## example of retrieving the categories from eventbrite,
##and all of its categories name
response = requests.get(
    "https://www.eventbriteapi.com/v3/categories/",
    headers = {
        "Authorization": "Bearer 4GNQPWQGZBEJH4NZMBO6",
    },
    verify = True,  # Verify SSL certificate
)
a = response.json()

##print (a)

for i in a:
    print(i)

print()

for i in a['categories']:
    print(i['name'])
    
