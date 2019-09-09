# fitlist
## DESCRIPTION
Fitlist is a web-based, personal grocery list generator. On the homepage, the user can enter their personal data such as height, weight, age, and optionally their fitness goals. Using the NIH's recommended values, fitlist creates grocery lists that meets the user's nutritional needs. This process takes a few seconds and then the results are automatically displayed to the user on the results page. Not only are the grocery lists displayed, but so are visualizations of the quality of the list. To the left and the right of the list, are gauges that display what percentage of the NIH recommended values the list fulfills. 

Since every user has their own personal preference for food, we provide many options for manipulation of the grocery lists. There are add, remove and swap features to ensure the user is satisfied with their lists. By simply clicking on the add button, the user can search from over 189,000 items that they can add to their list. If they change their mind about their additions or accidentally click an item they didn't want, they can always click the "Clear Added Items" button to remove all the recently added to their list. Additionally, the user can click on the "Remove" button to enter remove mode, allowing the user to click on any item to remove it and click on Remove once again to exit remove mode. The "Swap" button enters the user in swap mode where they can click on any item to swap it with an item of similar nutritional values. After list manipulation, the gauges automatically update.
## INSTALLATION
### Dependencies
#### PHP 5.6
```
sudo apt-get install python-software-properties
sudo add-apt-repository ppa:ondrej/php
sudo apt-get update
sudo apt-get install -y php5.6
```
#### Java 10
```
sudo apt install oracle-java10-set-default
```
## EXECUTION

```
cd fitlist/
php -S localhost:8000
```

You can go to [http://localhost:8000/CODE/frontend/](http://localhost:8000/CODE/frontend/) to check out the FitList!
Make sure that you include '/' after frontend in the url link.
