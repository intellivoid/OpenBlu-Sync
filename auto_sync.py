import time
import requests

while True:
	print("Making GET request")
	try:
		response = requests.get("https://api.intellivoid.info/openblu_sync/sync.php")
		print("Response Code: {0}".format(str(response.status_code)))
	except:
		print("Error making GET Request")
	print("Sleeping for 900 seconds (15 Minutes)")
	time.sleep(900)
