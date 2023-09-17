The api only accepts string values for  and for the id field only strings that can be cast to an integer between 1 and MAX integer supported by the system.



CREATE:
 curl   -d 'name=bealdung'  http://localhost:8000/api

A request (POST) to /api endpoint as above  creates a person named "bealdung". After creation, api returns all details of the created person, i.e. id, and name.

READ:
curl    http://localhost:8000/api/8

A request (GET) to /api/8 endpoint as above returns details of the person with id = 8. If there is nobody with the given id, the api does not return any data.

UPDATE:

curl -X PUT -d 'name=bealdung'   http://localhost:8000/api/2

A request (PUT) to /api/2 endpoint as above modifies the name  of person with id =2 with the provided values. It returns the updated values on succesful operation or blank/nothing if there is no person with the provided id.

DELETE:

curl  -X DELETE  http://localhost:8000/api/14

A request (DELETE) with the provided id, 14 deletes the person with the provided id. It returns the full details id and name  of the person deleted. If there is none with the provided id, the api return blank.


To deploy the api, clone the repo, create a MySQL database for the application. create a table with three feilds: an integer auto incremented id field, a text name field and a text email field. Put database connection details in the file inc/db_connect.php 
