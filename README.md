## About DevyaniVBLRevamp

DevyaniVBLRevamp is a web api application that receives the api request
processes it, responds back, prepare alerts (email & sms) and file to be dumpled for SAP consumption.

- php artisan migrate:fresh --seed
- php artisan sap:process -v
- php artisan email:confirmation -v
- php artisan sms:process -v
