# PolAPI

Simple script to poll the Polestar API to pull all inventory in the US. Original code by /u/fire50_

pull_inventory_US.php will collect data from all US Spaces. The US Spaces are hard coded in the file based on those in existence as of 1/19. When new Spaces come online, they will have to be manually added under the $dealerJSON section at the top of the file:

"code":"USMJI0012","name":"Polestar South Coast","zipcode":"92692","city":"Mission Viejo, CA","distance":"88607","latitude":33.5498937,"longitude":-117.6719935},

Code is obtained from API. The API requires all fields, but not all need to be filled. distance, latitude and longitude I believe can be left empty.

The output is saved in CSV format that can be imported into a spreadsheet. Header columns are: 

Space,Delivery Date,MSRP,Color,Interior,Wheels,Package,Package,Package,,


